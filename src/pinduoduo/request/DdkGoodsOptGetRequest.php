<?php


namespace com\pv138\easyUnion\pinduoduo\request;


use com\pv138\easyUnion\pinduoduo\RequestInterface;

/**
 * pdd.goods.opt.get查询商品标签列表
 * 获得拼多多商品标签列表（非商品类目cat，当前仅开放给多多客使用）
 * Class DdkGoodsOptGetRequest
 * @package com\pv138\easyUnion\pinduoduo\request
 */
class DdkGoodsOptGetRequest implements RequestInterface
{
    private $type = 'pdd.goods.opt.get';
    private $parent_opt_id;

    /**
     * @return mixed
     */
    public function getParentOptId()
    {
        return $this->parent_opt_id;
    }

    /**
     * @param mixed $value
     */
    public function setParentOptId($value): void
    {
        $this->parent_opt_id = $value;
    }

    public function getParams()
    {
        return [
            'type' => $this->type,
            'parent_opt_id' => $this->parent_opt_id,
        ];
    }
}
