<?php

namespace com\pv138\easyUnion\vip\Osp\Base;

//use Thrift\Transport\TFramedTransport;
//use Thrift\Type\TMessageType;
//use Thrift\Transport\TSocket;
//use Thrift\Transport\TBufferedTransport;
use com\pv138\easyUnion\vip\Osp\Buffer\MemoryBuffer;
use com\pv138\easyUnion\vip\Osp\Context\InvocationContextFactory;
use com\pv138\easyUnion\vip\Osp\Exception\OspException;
use com\pv138\easyUnion\vip\Osp\Http\HttpClient;
use com\pv138\easyUnion\vip\Osp\Log\Logger;
use com\pv138\easyUnion\vip\Osp\Protocol\JSONProtocol;
use com\pv138\easyUnion\vip\Osp\Util\HmacUtil;
use com\pv138\easyUnion\vip\Osp\Util\MessageUtil;
use com\pv138\easyUnion\vip\Osp\Util\TimeUtil;

class OspStub
{
    private $serviceName; // 服务名
    private $version; // 版本号
    private static $sequence = 1; // 交互Seq，以此为基准递增

    private static $RETURN_NULL = "{\"returnCode\":\"0\",\"result\":null}";

    public function __construct($serviceName, $version)
    {
        $this->serviceName = $serviceName;
        $this->version = $version;
    }

    /**
     * 初始化调用上下文信息
     *
     * @param unknown $method
     */
    public function initInvocation($method)
    {
        Logger::info("[OspStub][InitInvocation][Service-Version-Method][" . $this->serviceName . "-" . $this->version . "-" . $method . "]");

        $ctx = InvocationContextFactory::getInstance();
        $ctx->reset();
        $ctx->setServiceName($this->serviceName);
        $ctx->setMethod($method);
        $ctx->setCallerVersion($this->version);
    }

    /**
     * 创建请求数据签名
     * @param unknown $accessToken
     * @param unknown $appKey
     * @param unknown $format
     * @param unknown $method
     * @param unknown $service
     * @param unknown $timestamp
     * @param unknown $version
     * @param unknown $request
     * @param unknown $appSecret
     * @return string
     */
    public function createRequestSign($accessToken, $appKey, $format, $language, $method, $service, $timestamp, $version, $request, $appSecret)
    {
        $sign = '';
        if (!empty($accessToken)) {
            $sign .= "accessToken" . $accessToken;
        }
        $sign .= "appKey" . $appKey;
        $sign .= "format" . $format;
        if (!empty($language)) {
            $sign .= "language" . $language;
        }
        $sign .= "method" . $method;
        $sign .= "service" . $service;
        $sign .= "timestamp" . $timestamp;
        $sign .= "version" . $version;
        $sign .= $request;

        return HmacUtil::hmac($sign, $appSecret);
    }

    /**
     * 组装请求参数
     * @param unknown $request
     * @return string
     */
    public function getQueryString($request)
    {
        $params = '';
        $params = $params . "appKey=" . $request["appKey"];
        $params = $params . "&format=" . $request["format"];
        $params = $params . "&method=" . $request["method"];
        $params = $params . "&service=" . $request["service"];
        $params = $params . "&sign=" . $request["sign"];
        $params = $params . "&timestamp=" . $request["timestamp"];
        $params = $params . "&version=" . $request["version"];
        if (!empty($request["accessToken"])) {
            $params = $params . "&accessToken=" . $request["accessToken"];
        }
        if (!empty($request["language"])) {
            $params = $params . "&language=" . $request["language"];
        }

        return $params;
    }

    /**
     * 从环境变量提取URL信息
     * @param $restAddr
     * @return array|false|int|string|null
     * @throws OspException
     */
    public function getCallURLInfo($restAddr)
    {
        if (!$restAddr) {
            throw new OspException("The openapi appURL is null, please set the appURL value");
        }
        $url = parse_url($restAddr);
        //无指定协议，默认为http协议
        if (empty($url["scheme"])) {
            $url["scheme"] = 'http';
        }
        //无指定路径，默认为根路径
        if (empty($url["path"])) {
            $url["path"] = "/";
        }
        return $url;
    }

    /**
     * 发送数据基础逻辑
     *
     * @param unknown $args
     */
    public function send_base($args)
    {
        $ctx = InvocationContextFactory::getInstance();
        $oprot = new JSONProtocol(new MemoryBuffer());
        $args->write($oprot);

        $requestBuffer = $oprot->getTransport()->getBuffer();
        $url = $this->getCallURLInfo($ctx->getAppURL());

        $scheme = isset($url["scheme"]) ? $url["scheme"] : null;
        $host = isset($url["host"]) ? $url["host"] : null;
        $port = isset($url["port"]) ? $url["port"] : null;
        $client = new HttpClient($scheme, $host, $port);
        $request = array();

        $appKey = $ctx->getAppKey();
        if ($appKey == null) {
            throw new OspException("The openapi appKey is null, please set the appKey value");
        }

        $appSecret = $ctx->getAppSecret();
        if ($appSecret == null) {
            throw new OspException("The openapi appSecret is null, please set the appSecret value");
        }

        $accessToken = $ctx->getAccessToken();
        $language = $ctx->getLanguage();
        $format = "JSON";
        $method = $ctx->getMethod();
        $service = $ctx->getServiceName();
        $timestamp = round(TimeUtil::currentTimeMillis() / 1000);
        $version = $ctx->getCallerVersion();
        $sign = $this->createRequestSign($accessToken, $appKey, $format, $language, $method, $service, $timestamp, $version, $requestBuffer, $appSecret);
        $ctx->setSign($sign);
        if (!empty($accessToken)) {
            $request["accessToken"] = $accessToken;
        }
        if (!empty($language)) {
            $request["language"] = $language;
        }
        $request["service"] = $service;
        $request["method"] = $method;
        $request["version"] = $version;
        $request["timestamp"] = $timestamp;
        $request["format"] = $format;
        $request["appKey"] = $appKey;
        $request["sign"] = $sign;

        $client->setTimeOut($ctx->getTimeOut() == null ? $client->timeout : $ctx->getTimeOut());
        try {
            $result = $client->post($url["path"] . '?' . $this->getQueryString($request), $requestBuffer);
        } catch (\Exception $e) {
            throw new OspException(MessageUtil::getInvocationMsg($ctx, $e->getMessage()), $e);
        }


        $pageContents = $client->getContent();


        $ctx->setResponse($pageContents);
    }

    /**
     * 接收数据基础逻辑
     * @param unknown $result
     */
    public function receive_base($result)
    {
        $ctx = InvocationContextFactory::getInstance();

        $response = $ctx->getResponse();
        if (self::$RETURN_NULL != $response) {
            $iprot = new JSONProtocol(new MemoryBuffer());
            $iprot->getTransport()->write($response);

            $iprot->readStructBegin();
            $iprot->readFieldBegin();

            $returnCode = null;
            $iprot->readString($returnCode);

            if (!"0" == $returnCode) {
                $iprot->readFieldEnd();
                $iprot->readFieldBegin();
                $returnMessage = null;
                $iprot->readString($returnMessage);
                throw new OspException($returnMessage, $returnCode);
            }

            $iprot->readFieldEnd();
            $iprot->readFieldBegin();
            $result->read($iprot);
            $iprot->readFieldEnd();
        }
    }

    /**
     * 获取下一个通讯序列
     * @return number
     */
    private function getNextSequence()
    {
        return OspStub::$sequence++; // 在原来的值的递增1
    }
}
