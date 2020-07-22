<?php


namespace com\pv138\easyUnion\pinduoduo\request;


use com\pv138\easyUnion\pinduoduo\RequestInterface;

class DdkMallGoodsListRequest implements RequestInterface
{
    /**
     * 本接口用于查询店铺信息（全店佣金比例、店铺销量、店铺券信息）、店铺商品列表及店铺商品信息（商品标题、商品价格等）。
     * 查询店铺商品：pdd.ddk.mall.goods.list.get
     * @var string
     */
    private $type = 'pdd.ddk.mall.goods.list.get';

    private $mallId;

    private $pageNumber;

    private $pageSize;

    /**
     * @return mixed
     */
    public function getMallId()
    {
        return $this->mallId;
    }

    /**
     * @param mixed $mallId
     */
    public function setMallId($mallId): void
    {
        $this->mallId = $mallId;
    }

    /**
     * @return mixed
     */
    public function getPageNumber()
    {
        return $this->pageNumber;
    }

    /**
     * @param mixed $pageNumber
     */
    public function setPageNumber($pageNumber): void
    {
        $this->pageNumber = $pageNumber;
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

    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'mall_id' => $this->mallId,
            'page_number' => $this->pageNumber,
            'page_size' => $this->pageSize
        ];
        return array_filter($params);
    }
}
