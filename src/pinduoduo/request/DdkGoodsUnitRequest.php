<?php


namespace com\pv138\easyUnion\pinduoduo\request;


use com\pv138\easyUnion\pinduoduo\RequestInterface;

class DdkGoodsUnitRequest implements RequestInterface
{
    /**
     * 本接口用于查询商品现有推广计划情况（通用、招商、专属等）
     * @var string
     */
    private $type = 'pdd.ddk.goods.unit.query';

    /**
     * 商品ID
     * @var
     */
    private $goodsId;

    /**
     * 招商duoId
     * @var
     */
    private $zsDuoId;

    public function setGoodsId($value)
    {
        $this->goodsId = $value;
    }

    public function getGoodsId()
    {
        return $this->goodsId;
    }

    public function setZsDuoId($value)
    {
        $this->zsDuoId = $value;
    }

    public function getZsDuoId()
    {
        return $this->zsDuoId;
    }

    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'goods_id' => $this->goodsId,
            'zs_duo_id' => $this->zsDuoId
        ];
        return array_filter($params);
    }
}
