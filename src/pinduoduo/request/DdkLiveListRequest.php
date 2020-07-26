<?php


namespace com\pv138\easyUnion\pinduoduo\request;

use com\pv138\easyUnion\pinduoduo\RequestInterface;

/**
 * 查询账号下绑定的直播间信息
 * Class DdkLiveListRequest
 * @package com\pv138\easyUnion\pinduoduo\request
 */
class DdkLiveListRequest implements RequestInterface
{
    private $type = 'pdd.ddk.live.list';
    private $goods_page_size;
    private $need_goods_info;
    private $page;
    private $page_size;

    /**
     * @return mixed
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param mixed $page
     */
    public function setPage($page): void
    {
        $this->page = $page;
    }

    /**
     * @return mixed
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * @param mixed $value
     */
    public function setPageSize($value): void
    {
        $this->page_size = $value;
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

    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'goods_page_size' => $this->goods_page_size,
            'need_goods_info' => $this->need_goods_info,
            'page' => $this->page,
            'page_size' => $this->page_size
        ];
        return array_filter($params);
    }
}
