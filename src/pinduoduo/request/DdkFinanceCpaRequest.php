<?php


namespace com\pv138\easyUnion\pinduoduo\request;

use com\pv138\easyUnion\pinduoduo\RequestInterface;

class DdkFinanceCpaRequest implements RequestInterface
{
    /**
     * 查询CPA数据
     * @var string
     */
    private $type = 'pdd.ddk.finance.cpa.query';

    /**
     * 查询日期，格式：yyyy-MM-dd
     * @var
     */
    private $dateQuery;

    /**
     * @return mixed
     */
    public function getDateQuery()
    {
        return $this->dateQuery;
    }

    /**
     * @param mixed $dateQuery
     */
    public function setDateQuery($dateQuery): void
    {
        $this->dateQuery = $dateQuery;
    }

    /**
     * 推广位id
     * @var
     */
    private $pid;

    /**
     * @return mixed
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * @param mixed $pid
     */
    public function setPid($pid): void
    {
        $this->pid = $pid;
    }


    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'date_query' => $this->dateQuery,
            'pid' => $this->pid
        ];
        return $params;
    }
}
