<?php

namespace com\pv138\easyUnion\pinduoduo\request;


use com\pv138\easyUnion\pinduoduo\RequestInterface;

class DdkGoodsPidQueryRequest implements RequestInterface
{
    /**
     * 查询已经生成的推广位信息
     * @var string
     */
    private $type = 'pdd.ddk.goods.pid.query';

    /**
     * 返回的页数
     * @var
     */
    private $page;

    /**
     * 返回的每页推广位数量
     * @var
     */
    private $pageSize;

    /**
     * 推广位id列表
     * @var
     */
    private $pidList;

    /**
     * @return mixed
     */
    public function getPidList()
    {
        return $this->pidList;
    }

    /**
     * @param mixed $pidList
     */
    public function setPidList($pidList): void
    {
        $this->pidList = $pidList;
    }


    public function setPage($page)
    {
        $this->page = $page;
    }

    public function getPage()
    {
        return $this->page;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'page' => $this->page,
            'page_size' => $this->pageSize,
            'pid_list' => $this->pidList
        ];
        return array_filter($params);
    }
}
