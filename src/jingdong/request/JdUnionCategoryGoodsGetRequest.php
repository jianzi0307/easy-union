<?php

namespace com\pv138\easyUnion\jingdong\request;

use com\pv138\easyUnion\jingdong\RequestInterface;

/**
 * Class JdUnionCategoryGoodsGetRequest
 * @package com\pv138\easyUnion\jingdong\request
 */
class JdUnionCategoryGoodsGetRequest implements RequestInterface
{
    /**
     * 商品类目查询
     * @url https://union.jd.com/#/openplatform/api/693
     * @var string
     */
    private $method = 'jd.union.open.category.goods.get';

    /**
     * 父类目id(一级父类目为0)
     * @var
     */
    private $parentId;

    /**
     * 类目级别(类目级别 0，1，2 代表一、二、三级类目)
     * @var
     */
    private $grade;

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    public function getParentId()
    {
        return $this->parentId;
    }

    public function getGrade()
    {
        return $this->grade;
    }

    public function setParentId($value)
    {
        $this->parentId = $value;
    }

    public function setGrade($value)
    {
        $this->grade = $value;
    }

    /**
     * @return mixed
     */
    public function getParamJson()
    {
        $params = [
            'parentId' => $this->parentId,
            'grade' => $this->grade
        ];

        return json_encode([
            'req' => array_filter($params, function ($val) {
                return $val != null;
            })
        ]);
    }
}
