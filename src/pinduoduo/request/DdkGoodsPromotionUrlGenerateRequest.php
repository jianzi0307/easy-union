<?php

namespace com\pv138\easyUnion\pinduoduo\request;


use com\pv138\easyUnion\pinduoduo\RequestInterface;

class DdkGoodsPromotionUrlGenerateRequest implements RequestInterface
{

    /**
     * 生成普通商品推广链接
     * @var string
     */
    private $type = 'pdd.ddk.goods.promotion.url.generate';

    /**
     * 推广位ID
     * @var
     */
    private $pid;

    /**
     * 商品ID，仅支持单个查询
     * @var
     */
    private $goodsIdList;

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

    /**
     * 是否开启订单拉新，true表示开启（订单拉新奖励特权仅支持白名单，请联系工作人员开通）
     * @var
     */
    // private $pullNew;

    /**
     * 是否生成短链接，true-是，false-否
     * @var
     */
    private $generateShortUrl = "true";

    /**
     * 是否生成唤起微信客户端链接，true-是，false-否，默认false
     * @var
     */
    private $generateWeappWebview;

    /**
     * 是否生成微博推广链接
     * @var
     */
    private $generateWeiboAppWebview;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getGenerateWeiboAppWebview()
    {
        return $this->generateWeiboAppWebview;
    }

    /**
     * @param mixed $generateWeiboAppWebview
     */
    public function setGenerateWeiboAppWebview($generateWeiboAppWebview): void
    {
        $this->generateWeiboAppWebview = $generateWeiboAppWebview;
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
    public function getSearchId()
    {
        return $this->searchId;
    }

    /**
     * @param mixed $searchId
     */
    public function setSearchId($searchId): void
    {
        $this->searchId = $searchId;
    }

    /**
     * 是否生成小程序推广
     * @var
     */
    private $generateWeApp;

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
     * 是否返回 schema URL
     * @var
     */
    private $generateSchemaUrl = "true";

    /**
     * 招商多多客ID
     * @var
     */
    private $zsduoId;

    /**
     * 搜索id，建议填写，提高收益。来自pdd.ddk.goods.recommend.get、pdd.ddk.goods.search、pdd.ddk.top.goods.list.query等接口
     * @var
     */
    private $searchId;


    public function setPid($pid)
    {
        $this->pid = $pid;
    }

    public function getPid()
    {
        return $this->pid;
    }

    public function setGoodsIdList($goodsIdList)
    {
        $this->goodsIdList = $goodsIdList;
    }

    public function getGoodsIdList()
    {
        return $this->goodsIdList;
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

//    public function setPullNew($pullNew)
//    {
//        $this->pullNew = $pullNew;
//    }
//
//    public function getPullNew()
//    {
//        return $this->pullNew;
//    }

    public function setGenerateWeappWebview($generateWeappWebview)
    {
        $this->generateWeappWebview = $generateWeappWebview;
    }

    public function getGenerateWeappWebview()
    {
        return $this->generateWeappWebview;
    }

    public function setZsduoId($zsduoId)
    {
        $this->zsduoId = $zsduoId;
    }

    public function getZsduoId()
    {
        return $this->zsduoId;
    }

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
            'type' => $this->type,
            'p_id' => $this->pid,
            'goods_id_list' => $this->goodsIdList,
            'multi_group' => $this->multiGroup,
            'custom_parameters' => $this->customParameters,
            // 'pull_new' => $this->pullNew,
            'generate_mall_collect_coupon' => $this->generateMallCollectCoupon,
            'generate_qq_app' => $this->generateQqApp,
            'generate_short_url' => $this->generateShortUrl,
            'generate_weapp_webview' => $this->generateWeappWebview,
            'generate_weiboapp_webview' => $this->generateWeiboAppWebview,
            'generate_we_app' => $this->generateWeApp,
            'generate_schema_url' => $this->generateSchemaUrl,
            'search_id' => $this->searchId,
            'zs_duo_id' => $this->zsduoId,
        ];
        return array_filter($params);
    }
}
