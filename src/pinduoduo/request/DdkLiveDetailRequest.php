<?php

namespace com\pv138\easyUnion\pinduoduo\request;

use com\pv138\easyUnion\pinduoduo\RequestInterface;

/**
 * 在获得直播间ID的情况下，查询该直播间的详情数据
 * Class DdkLiveDetailRequest
 * @package com\pv138\easyUnion\pinduoduo\request
 */
class DdkLiveDetailRequest implements RequestInterface
{
    private $type = 'pdd.ddk.live.detail';
    private $goods_page;
    private $goods_page_size;
    private $need_goods_info;
    private $room_id;

    /**
     * @return mixed
     */
    public function getGoodsPage()
    {
        return $this->goods_page;
    }

    /**
     * @param mixed $value
     */
    public function setGoodsPage($value): void
    {
        $this->goods_page = $value;
    }

    /**
     * @return mixed
     */
    public function getGoodsPageSize()
    {
        return $this->goods_page_size;
    }

    /**
     * @param mixed $value
     */
    public function setGoodsPageSize($value): void
    {
        $this->goods_page_size = $value;
    }

    /**
     * @return mixed
     */
    public function getNeedGoodsInfo()
    {
        return $this->need_goods_info;
    }

    /**
     * @param mixed $value
     */
    public function setNeedGoodsInfo($value): void
    {
        $this->need_goods_info = $value;
    }

    /**
     * @return mixed
     */
    public function getRoomId()
    {
        return $this->room_id;
    }

    /**
     * @param mixed $value
     */
    public function setRoomId($value): void
    {
        $this->room_id = $value;
    }

    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'goods_page' => $this->goods_page,
            'goods_page_size' => $this->goods_page_size,
            'need_goods_info' => $this->need_goods_info,
            'room_id' => $this->room_id
        ];
        return array_filter($params);
    }
}
