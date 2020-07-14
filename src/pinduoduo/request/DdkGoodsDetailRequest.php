<?php

namespace NiuGengYun\EasyTBK\PinDuoDuo\Request;

use NiuGengYun\EasyTBK\PinDuoDuo\RequestInterface;

class DdkGoodsDetailRequest implements RequestInterface
{
    /**
     * 查询多多进宝商品详情
     * @var string
     */
    private $type = 'pdd.ddk.goods.detail';

    /**
     * 商品ID，仅支持单个查询。例如：[123456]
     * @var
     */
    private $goodsIdList;

    /**
     * 推广位id
     * @var
     */
    private $pid;

    /**
     * 自定义参数
     * @var
     */
    private $customParameters;

    /**
     * 搜索id，建议填写，提高收益。来自pdd.ddk.goods.recommend.get、pdd.ddk.goods.search、pdd.ddk.top.goods.list.query等接口
     * @var
     */
    private $searchId;

    /**
     * 招商多多客ID
     * @var
     */
    private $zsDuoId;

    public function setCustomParameters($value)
    {
        $this->customParameters = $value;
    }

    public function setPid($pid)
    {
        $this->pid = $pid;
    }

    public function setSearchId($value)
    {
        $this->searchId = $value;
    }

    public function setZsDuoId($value)
    {
        $this->zsDuoId = $value;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function setGoodsIdList($goodsIdList)
    {
        $this->goodsIdList = $goodsIdList;
    }

    public function getPid()
    {
        return $this->pid;
    }

    public function getSearchId()
    {
        return $this->searchId;
    }

    public function getZsDuoId()
    {
        return $this->zsDuoId;
    }

    public function getCustomParameters()
    {
        return $this->customParameters;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getGoodsIdList()
    {
        return $this->goodsIdList;
    }

    public function getParams()
    {
        return [
            'type' => $this->type,
            'goods_id_list' => $this->goodsIdList,
            'pid' => $this->pid,
            'custom_parameters' => $this->customParameters,
            'search_id' => $this->searchId,
            'zs_duo_id' => $this->zsDuoId
        ];
    }
}
