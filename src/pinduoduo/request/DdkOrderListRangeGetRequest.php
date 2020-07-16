<?php

namespace com\pv138\easyUnion\pinduoduo\request;

use com\pv138\easyUnion\pinduoduo\RequestInterface;

class DdkOrderListRangeGetRequest implements RequestInterface
{
    /**
     * 根据支付时间段查询推广订单接口
     * @var string
     */
    private $type = 'pdd.ddk.order.list.range.get';
    /**
     * 支付起始时间，格式：yyyy-MM-dd HH:mm:ss
     * @var
     */
    private $startPayTime;
    /**
     * 支付结束时间，格式：yyyy-MM-dd HH:mm:ss
     * @var
     */
    private $endPayTime;
    /**
     * 每次请求多少条，建议300
     * @var
     */
    private $pageSize;
    /**
     * 上一次的迭代器id(第一次不填)
     * @var
     */
    private $lastOrderId;

    public function setStartPayTime($startPayTime)
    {
        $this->startPayTime = $startPayTime;
    }

    public function getStartPayTime()
    {
        return $this->startPayTime;
    }

    public function setEndPayTime($endPayTime)
    {
        $this->endPayTime = $endPayTime;
    }

    public function getEndPayTime()
    {
        return $this->endPayTime;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    public function setLastOrderId($lastOrderId)
    {
        $this->lastOrderId = $lastOrderId;
    }

    public function getLastOrderId($lastOrderId)
    {
        return $this->lastOrderId;
    }

    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'start_time' => $this->startPayTime,
            'end_time' => $this->endPayTime,
            'page_size' => $this->pageSize,
            'last_order_id' => $this->lastOrderId
        ];
        return array_filter($params);
    }
}
