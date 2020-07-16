<?php


namespace com\pv138\easyUnion\pinduoduo\request;


use com\pv138\easyUnion\pinduoduo\RequestInterface;

class DdkThemeListGetRequest implements RequestInterface
{
    /**
     * 多多进宝主题列表查询：pdd.ddk.theme.list.get
     * @var string
     */
    private $type = 'pdd.ddk.theme.list.get';

    /**
     * 返回的页码
     * @var
     */
    private $page;

    /**
     * 返回的一页数据数量
     * @var
     */
    private $pageSize;

    public function setPage($value)
    {
        $this->page = $value;
    }

    public function getPage()
    {
        return $this->page;
    }

    public function setPageSize($value)
    {
        $this->pageSize = $value;
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
            'page_size' => $this->pageSize
        ];
        return array_filter($params);
    }
}
