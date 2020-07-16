<?php

namespace com\pv138\easyUnion\pinduoduo\request;

use com\pv138\easyUnion\pinduoduo\RequestInterface;

class DdkRpPromUrlGenerateRequest implements RequestInterface
{
    /**
     * 生成红包推广链接接口
     * @var string
     */
    private $type = 'pdd.ddk.rp.prom.url.generate';

    /**
     * 推广位ID
     * @var
     */
    private $pid;

    /**
     * -1-活动列表，0-默认红包，2–新人红包，3-刮刮卡，5-员工内购，6-购物车，7-大促会场
     * @var
     */
    private $channelType;

    /**
     * @return mixed
     */
    public function getChannelType()
    {
        return $this->channelType;
    }

    /**
     * @param mixed $channelType
     */
    public function setChannelType($channelType): void
    {
        $this->channelType = $channelType;
    }

    /**
     * 是否生成短链接，true-是，false-否
     * @var
     */
    private $generateShortUrl;

    private $generateQqApp;

    /**
     * @return mixed
     */
    public function getGenerateQqApp()
    {
        return $this->generateQqApp;
    }

    /**
     * @param mixed $generateQqApp
     */
    public function setGenerateQqApp($generateQqApp): void
    {
        $this->generateQqApp = $generateQqApp;
    }

    /**
     * 自定义参数，为链接打上自定义标签。自定义参数最长限制64个字节。
     * @var
     */
    private $customParameters;

    /**
     * 是否生成唤起微信客户端链接，true-是，false-否，默认false
     * @var
     */
    // private $generateWeappWebview;

    /**
     * 是否返回 schema URL
     * @var
     */
    private $generateSchemaUrl;

    /**
     * @return mixed
     */
    public function getGenerateSchemaUrl()
    {
        return $this->generateSchemaUrl;
    }

    /**
     * @param mixed $generateSchemaUrl
     */
    public function setGenerateSchemaUrl($generateSchemaUrl): void
    {
        $this->generateSchemaUrl = $generateSchemaUrl;
    }


    /**
     * 是否生成小程序推广
     * @var
     */
    private $generateWeApp;


    public function setPid($pid)
    {
        $this->pid = $pid;
    }

    public function getPid()
    {
        return $this->pid;
    }

    public function setGenerateShortUrl($generateShortUrl)
    {
        $this->generateShortUrl = $generateShortUrl;
    }

    public function getGenerateShortUrl()
    {
        return $this->generateShortUrl;
    }

    public function setCustomParameters($customParameters)
    {
        $this->customParameters = $customParameters;
    }

    public function getCustomParameters()
    {
        return $this->customParameters;
    }

//    public function setGenerateWeappWebview($generateWeappWebview)
//    {
//        $this->generateWeappWebview = $generateWeappWebview;
//    }
//
//    public function getGenerateWeappWebview()
//    {
//        return $this->generateWeappWebview;
//    }

    public function setGenerateWeApp($generateWeApp)
    {
        $this->generateWeApp = $generateWeApp;
    }

    public function getGenerateWeApp()
    {
        return $this->generateWeApp;
    }

    public function getParams()
    {
        $params = [
            'channel_type' => $this->channelType,
            'type' => $this->type,
            'p_id_list' => $this->pid,
            'generate_short_url' => $this->generateShortUrl,
            'custom_parameters' => $this->customParameters,
            // 'generate_weapp_webview' => $this->generateWeappWebview,
            'generate_we_app' => $this->generateWeApp,
            'generate_schema_url' => $this->generateSchemaUrl,
            'generate_qq_app' => $this->generateQqApp
        ];
        return array_filter($params);
    }
}
