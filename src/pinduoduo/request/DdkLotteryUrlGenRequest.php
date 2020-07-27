<?php

namespace com\pv138\easyUnion\pinduoduo\request;


use com\pv138\easyUnion\pinduoduo\RequestInterface;

class DdkLotteryUrlGenRequest implements RequestInterface
{
    /**
     * 多多客工具生成转盘抽免单url
     * @var string
     */
    private $type = 'pdd.ddk.lottery.url.gen';

    /**
     * 推广位 STRING[]
     * @var
     */
    private $pidList;

    /**
     * 是否生成唤起微信客户端链接，true-是，false-否，默认false
     * @var
     */
    private $generateWeappWebview;

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
     * 是否生成大转盘和主题的小程序推广链接
     * @var
     */
    private $generateWeApp;

    /**
     * @return mixed
     */
    public function getGenerateWeApp()
    {
        return $this->generateWeApp;
    }

    /**
     * @param mixed $generateWeApp
     */
    public function setGenerateWeApp($generateWeApp): void
    {
        $this->generateWeApp = $generateWeApp;
    }

    /**
     * 是否生成qq小程序
     * @var
     */
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
     * 是否生成短链接，true-是，false-否
     * @var
     */
    private $generateShortUrl;

    /**
     * 是否多人团，true-是，false-否
     * @var
     */
    private $multiGroup;

    /**
     * 自定义参数，为链接打上自定义标签。自定义参数最长限制64个字节。
     * @var
     */
    private $customParameters;


    /**
     * @return mixed
     */
    public function getPidList()
    {
        return $this->pidList;
    }

    /**
     * @param mixed $pidList
     */
    public function setPidList($pidList)
    {
        $this->pidList = $pidList;
    }

    /**
     * @return mixed
     */
    public function getGenerateWeappWebview()
    {
        return $this->generateWeappWebview;
    }

    /**
     * @param mixed $generateWeappWebview
     */
    public function setGenerateWeappWebview($generateWeappWebview)
    {
        $this->generateWeappWebview = $generateWeappWebview;
    }

    /**
     * @return mixed
     */
    public function getGenerateShortUrl()
    {
        return $this->generateShortUrl;
    }

    /**
     * @param mixed $generateShortUrl
     */
    public function setGenerateShortUrl($generateShortUrl)
    {
        $this->generateShortUrl = $generateShortUrl;
    }

    /**
     * @return mixed
     */
    public function getMultiGroup()
    {
        return $this->multiGroup;
    }

    /**
     * @param mixed $multiGroup
     */
    public function setMultiGroup($multiGroup)
    {
        $this->multiGroup = $multiGroup;
    }

    /**
     * @return mixed
     */
    public function getCustomParameters()
    {
        return $this->customParameters;
    }

    /**
     * @param mixed $customParameters
     */
    public function setCustomParameters($customParameters)
    {
        $this->customParameters = $customParameters;
    }

    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'pid_list' => $this->pidList,
            'generate_weapp_webview' => $this->generateWeappWebview,
            'generate_schema_url' => $this->generateSchemaUrl,
            'generate_we_app' => $this->generateWeApp,
            'generate_qq_app' => $this->generateQqApp,
            'generate_short_url' => $this->generateShortUrl,
            'multi_group' => $this->multiGroup,
            'custom_parameters' => $this->customParameters,
        ];
        return array_filter($params);
    }
}
