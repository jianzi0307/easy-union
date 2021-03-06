<?php

namespace com\pv138\easyUnion\pinduoduo\request;


use com\pv138\easyUnion\pinduoduo\RequestInterface;

class DdkMallUrlGenRequest implements RequestInterface
{

    /**
     * 多多客工具生成店铺推广链接API
     * @var string
     */
    private $type = 'pdd.ddk.mall.url.gen';

    /**
     * 店铺id
     * @var
     */
    private $mallId;

    /**
     * 推广位ID
     * @var
     */
    private $pid;

    /**
     * 是否生成店铺收藏券推广链接
     * @var
     */
    private $generateMallCollectCoupon;

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
     * @return mixed
     */
    public function getGenerateMallCollectCoupon()
    {
        return $this->generateMallCollectCoupon;
    }

    /**
     * @param mixed $generateMallCollectCoupon
     */
    public function setGenerateMallCollectCoupon($generateMallCollectCoupon): void
    {
        $this->generateMallCollectCoupon = $generateMallCollectCoupon;
    }

    /**
     * 是否生成唤起微信客户端链接，true-是，false-否，默认false
     * @var
     */
    private $generateWeappWebview;

    /**
     * 是否生成短链接，true-是，false-否
     * @var
     */
    private $generateShortUrl;

    /**
     * true--生成多人团推广链接 false--生成单人团推广链接（默认false）1、单人团推广链接：用户访问单人团推广链接，可直接购买商品无需拼团。2、多人团推广链接：用户访问双人团推广链接开团，若用户分享给他人参团，则开团者和参团者的佣金均结算给推手
     * @var
     */
    private $multiGroup;

    /**
     * 自定义参数，为链接打上自定义标签。自定义参数最长限制64个字节。
     * @var
     */
    private $customParameters;


    public function setMallId($mallId)
    {
        $this->mallId = $mallId;
    }

    public function getMallId()
    {
        return $this->mallId;
    }

    public function setPid($pid)
    {
        $this->pid = $pid;
    }

    public function getPid()
    {
        return $this->pid;
    }

    public function setGenerateWeappWebview($generateWeappWebview)
    {
        $this->generateWeappWebview = $generateWeappWebview;
    }

    public function getGenerateWeappWebview()
    {
        return $this->generateWeappWebview;
    }

    public function setGenerateShortUrl($generateShortUrl)
    {
        $this->generateShortUrl = $generateShortUrl;
    }

    public function getGenerateShortUrl()
    {
        return $this->generateShortUrl;
    }

    public function setMultiGroup($multiGroup)
    {
        $this->multiGroup = $multiGroup;
    }

    public function getMultiGroup()
    {
        return $this->multiGroup;
    }

    public function setCustomParameters($customParameters)
    {
        $this->customParameters = $customParameters;
    }

    public function getCustomParameters()
    {
        return $this->customParameters;
    }

    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'mall_id' => $this->mallId,
            'pid' => $this->pid,
            'generate_weapp_webview' => $this->generateWeappWebview,
            'generate_short_url' => $this->generateShortUrl,
            'multi_group' => $this->multiGroup,
            'custom_parameters' => $this->customParameters,
            'generate_mall_collect_coupon' => $this->generateMallCollectCoupon,
            'generate_qq_app' => $this->generateQqApp,
            'generate_schema_url' => $this->generateSchemaUrl
        ];
        return array_filter($params);
    }
}
