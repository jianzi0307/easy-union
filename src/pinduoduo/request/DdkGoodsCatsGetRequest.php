<?php

namespace com\pv138\easyUnion\pinduoduo\request;

use com\pv138\easyUnion\pinduoduo\RequestInterface;

/**
 * pdd.goods.cats.get商品标准类目接口
 * 获取拼多多标准商品类目信息（请使用pdd.goods.authorization.cats接口获取商家可发布类目）
 * Class DdkGoodsCatsGetRequest
 * @package com\pv138\easyUnion\pinduoduo\request
 */
class DdkGoodsCatsGetRequest implements RequestInterface
{
    private $type = 'pdd.goods.cats.get';
    private $parent_cat_id;

    /**
     * @return mixed
     */
    public function getParentCatId()
    {
        return $this->parent_cat_id;
    }

    /**
     * @param mixed $value
     */
    public function setParentCatId($value): void
    {
        $this->parent_cat_id = $value;
    }

    public function getParams()
    {
        return [
            'type' => $this->type,
            'parent_cat_id' => $this->parent_cat_id,
        ];
    }
}
