<?php

namespace com\pv138\easyUnion\jingdong\request;

use com\pv138\easyUnion\jingdong\RequestInterface;

/**
 * Class JdUnionOrderRowQueryRequest
 * @package NiuGengYun\EasyTBK\JingDong\Request
 */
class JdUnionOrderRowQueryRequest implements RequestInterface
{
    /**
     * 订单查询接口
     * @url https://union.jd.com/openplatform/api/12707
     * @var string
     */
    private $method = 'jd.union.open.order.row.query';

    /**
     * 开始时间 格式yyyy-MM-dd HH:mm:ss，与endTime间隔不超过1小时
     * @var
     */
    private $startTime;

    /**
     * 结束时间 格式yyyy-MM-dd HH:mm:ss，与startTime间隔不超过1小时
     * @var
     */
    private $endTime;

    /**
     * 子站长ID（需要联系运营开通PID账户权限才能拿到数据），childUnionId和key不能同时传入
     * @var
     */
    private $childUnionId;

    /**
     * 页码，返回第几页结果
     * @var
     */
    private $pageIndex;

    /**
     * 页码
     * @var
     */
    private $pageSize;

    /**
     * 订单时间查询类型(1：下单时间，2：完成时间，3：更新时间)
     * @var
     */
    private $type;

    /**
     * 其他推客的授权key，查询工具商订单需要填写此项，childUnionid和key不能同时传入
     * @var
     */
    private $key;

    /**
     * 出参数据筛选，多项逗号分隔
     * @var
     */
    private $fields;

    /**
     * @return mixed
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param mixed $value
     */
    public function setStartTime($value): void
    {
        $this->startTime = $value;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param mixed $value
     */
    public function setEndTime($value): void
    {
        $this->endTime = $value;
    }

    /**
     * @return mixed
     */
    public function getChildUnionId()
    {
        return $this->childUnionId;
    }

    /**
     * @param mixed $childUnionId
     */
    public function setChildUnionId($childUnionId): void
    {
        $this->childUnionId = $childUnionId;
    }

    /**
     * @return mixed
     */
    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    /**
     * @param mixed $value
     */
    public function setPageIndex($value): void
    {
        $this->pageIndex = $value;
    }

    /**
     * @return mixed
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param mixed $pageSize
     */
    public function setPageSize($pageSize): void
    {
        $this->pageSize = $pageSize;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param mixed $key
     */
    public function setKey($key): void
    {
        $this->key = $key;
    }


    /**
     * @return mixed
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @param string $value
     */
    public function setFields(string $value): void
    {
        $this->fields = $value;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @return mixed
     */
    public function getParamJson()
    {
        $params = [
            'startTime' => $this->startTime,
            'endTime' => $this->endTime,
            'pageIndex' => $this->pageIndex,
            'childUnionId' => $this->childUnionId,
            'pageSize' => $this->pageSize,
            'type' => $this->type,
            'key' => $this->key,
            'fields' => $this->fields
        ];

        return json_encode([
            'orderReq' => array_filter($params, function ($val) {
                return $val != null;
            })
        ]);
    }
}
