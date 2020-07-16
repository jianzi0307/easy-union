<?php

namespace com\pv138\easyUnion\pinduoduo\request;

use com\pv138\easyUnion\pinduoduo\RequestInterface;

class DdkGoodsRecommendGetRequest implements RequestInterface
{
    private $type = 'pdd.ddk.goods.recommend.get';
    private $offset;
    private $limit;
    private $channelType;
    private $customParameters;
    private $catId;
    private $goodsIds;
    private $listId;

    public function setCatId($value)
    {
        $this->catId = $value;
    }

    public function getCatId()
    {
        return $this->catId;
    }

    public function setGoodsIds($value)
    {
        $this->goodsIds = $value;
    }

    public function getGoodsIds()
    {
        return $this->goodsIds;
    }

    public function setListId($value)
    {
        $this->listId = $value;
    }

    public function getListId()
    {
        return $this->listId;
    }

    public function setCustomParameters($value)
    {
        $this->customParameters = $value;
    }

    public function getCustomParameters()
    {
        return $this->customParameters;
    }

    public function setOffset($offset)
    {
        $this->offset = $offset;
    }

    public function getOffset()
    {
        return $this->offset;
    }

    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

    public function getLimit()
    {
        return $this->limit;
    }

    public function setChannelType($channelType)
    {
        $this->channelType = $channelType;
    }

    public function getChannelType()
    {
        return $this->channelType;
    }

    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'offset' => $this->offset,
            'limit' => $this->limit,
            'channel_type' => intval($this->channelType),
            'custom_parameters' => $this->customParameters,
            'cat_id' => $this->catId,
            'goods_ids' => $this->goodsIds,
            'list_id' => $this->listId
        ];
        return $params;
    }
}
