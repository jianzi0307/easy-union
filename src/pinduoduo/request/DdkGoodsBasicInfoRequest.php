<?php


namespace com\pv138\easyUnion\pinduoduo\request;


use com\pv138\easyUnion\pinduoduo\RequestInterface;

class DdkGoodsBasicInfoRequest implements RequestInterface
{
    /**
     * 获取商品基本信息接口：pdd.ddk.goods.basic.info.get
     * @var string
     */
    private $type = 'pdd.ddk.goods.basic.info.get';

    /**
     * 商品id
     * @var
     */
    private $goodsIdList;

    public function setGoodsIdList($value)
    {
        $this->goodsIdList = $value;
    }

    public function getGoodsList()
    {
        return $this->goodsIdList;
    }

    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'goods_id_list' => $this->goodsIdList
        ];
        return $params;
    }
}
