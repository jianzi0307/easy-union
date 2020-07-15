<?php

namespace com\pv138\easyUnion\vip\request;

use com\pv138\easyUnion\vip\Osp\ClassLoader\ClassLoader;
use com\pv138\easyUnion\vip\Osp\Context\InvocationContextFactory;
use com\pv138\easyUnion\vip\Osp\Util\PathUtil;

class UnionPidServiceClient
{
    private static $isRegis;
    private static $DEFAULT_PROXY_IP = "127.0.0.1";
    private static $DEFAULT_PROXY_PORT = "2080";

    private static function regis()
    {
        $path = PathUtil::getRootPath();
        $nsLoader = new ClassLoader();
        $nsLoader->registerNamespace('Thrift', $path);
        $nsLoader->registerNamespace('Osp', $path);
        $nsLoader->registerNamespace('com', $path);
        $nsLoader->register();
    }


    public static function getService()
    {
        if (!UnionPidServiceClient::$isRegis) {
            UnionPidServiceClient::regis();
            UnionPidServiceClient::$isRegis = true;
        }


        $ctx = InvocationContextFactory::getInstance();
        $ip = UnionPidServiceClient::$DEFAULT_PROXY_IP;
        $port = UnionPidServiceClient::$DEFAULT_PROXY_PORT;
        try {
            $envCfg = getenv("VIP_OSP_PROXY");
            $ipport = explode(":", $envCfg);
            if (strlen($envCfg) > 0 && count($ipport) == 2) {
                $ip = $ipport [0];
                $port = $ipport [1];
            }
        } catch (\Exception $e) {
            $ip = UnionPidServiceClient::$DEFAULT_PROXY_IP;
            $port = UnionPidServiceClient::$DEFAULT_PROXY_PORT;
        }

        if ($ctx->getCalleeIP() == null) {
            $ctx->setCalleeIP($ip);
        }

        if ($ctx->getCalleePort() == null) {
            $ctx->setCalleePort($port);
        }

        //$ctx->setProtocol ( \Osp\Protocol\OspProtocol::$Binary );

        return new UnionPidServiceHelper();
    }
}
