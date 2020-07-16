<?php


namespace com\pv138\easyUnion\pinduoduo\request;


use com\pv138\easyUnion\pinduoduo\RequestInterface;

class DdkThemePromUrlGenerateRequest implements RequestInterface
{
    private $type = 'pdd.ddk.theme.prom.url.generate';
    /**
     * 自定义参数，为链接打上自定义标签；自定义参数最长限制64个字节；格式为： {"uid":"11111","sid":"22222"} ，其中 uid 用户唯一标识，可自行加密后传入，每个用户仅且对应一个标识，必填； sid 上下文信息标识，例如sessionId等，非必填。该json字符串中也可以加入其他自定义的key
     * @var
     */
    private $customParameters;

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
    public function setCustomParameters($customParameters): void
    {
        $this->customParameters = $customParameters;
    }

    /**
     * 是否生成手机跳转链接。true-是,false-否,默认false
     * @var
     */
    private $generateMobile;

    /**
     * @return mixed
     */
    public function getGenerateMobile()
    {
        return $this->generateMobile;
    }

    /**
     * @param mixed $generateMobile
     */
    public function setGenerateMobile($generateMobile): void
    {
        $this->generateMobile = $generateMobile;
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
     * 是否生成短链接,true-是,false-否
     * @var
     */
    private $generateShortUrl;

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
    public function setGenerateShortUrl($generateShortUrl): void
    {
        $this->generateShortUrl = $generateShortUrl;
    }

    /**
     * 是否唤起微信客户端， 默认false 否，true 是
     * @var
     */
    private $generateWeappWebview;

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
    public function setGenerateWeappWebview($generateWeappWebview): void
    {
        $this->generateWeappWebview = $generateWeappWebview;
    }

    /**
     * 是否生成小程序链接
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
     * 推广位ID
     * @var
     */
    private $pid;

    /**
     * @return mixed
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * @param mixed $pid
     */
    public function setPid($pid): void
    {
        $this->pid = $pid;
    }

    /**
     * 主题ID列表,例如[1,235]
     * @var
     */
    private $themeIdList;

    /**
     * @return mixed
     */
    public function getThemeIdList()
    {
        return $this->themeIdList;
    }

    /**
     * @param mixed $themeIdList
     */
    public function setThemeIdList($themeIdList): void
    {
        $this->themeIdList = $themeIdList;
    }

    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'custom_parameters' => $this->customParameters,
            'generate_mobile' => $this->generateMobile,
            'generate_qq_app' => $this->generateQqApp,
            'generate_schema_url' => $this->generateSchemaUrl,
            'generate_short_url' => $this->generateShortUrl,
            'generate_weapp_webview' => $this->generateWeappWebview,
            'generate_we_app' => $this->generateWeApp,
            'pid' => $this->pid,
            'theme_id_list' => $this->themeIdList
        ];
        return array_filter($params);
    }
}
