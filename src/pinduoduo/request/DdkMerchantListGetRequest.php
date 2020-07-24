<?php

namespace com\pv138\easyUnion\pinduoduo\request;


use com\pv138\easyUnion\pinduoduo\RequestInterface;

class DdkMerchantListGetRequest implements RequestInterface
{
    private $type = 'pdd.ddk.merchant.list.get';
    private $catId;
    private $hasCltCpn;
    private $hasCoupon;
    private $mallIdList;
    private $merchantTypeList;
    private $pageNumber;

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

    private $pageSize;

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

    private $queryRangeStr;

    /**
     * @return mixed
     */
    public function getQueryRangeStr()
    {
        return $this->queryRangeStr;
    }

    /**
     * @param mixed $queryRangeStr
     */
    public function setQueryRangeStr($queryRangeStr): void
    {
        $this->queryRangeStr = $queryRangeStr;
    }

    private $rangeVoList;

    /**
     * @return mixed
     */
    public function getRangeVoList()
    {
        return $this->rangeVoList;
    }

    /**
     * @param mixed $rangeVoList
     */
    public function setRangeVoList($rangeVoList): void
    {
        $this->rangeVoList = $rangeVoList;
    }

    /**
     * @return mixed
     */
    public function getCatId()
    {
        return $this->catId;
    }

    /**
     * @param mixed $catId
     */
    public function setCatId($catId): void
    {
        $this->catId = $catId;
    }

    /**
     * @return mixed
     */
    public function getHasCltCpn()
    {
        return $this->hasCltCpn;
    }

    /**
     * @param mixed $hasCltCpn
     */
    public function setHasCltCpn($hasCltCpn): void
    {
        $this->hasCltCpn = $hasCltCpn;
    }

    /**
     * @return mixed
     */
    public function getHasCoupon()
    {
        return $this->hasCoupon;
    }

    /**
     * @param mixed $hasCoupon
     */
    public function setHasCoupon($hasCoupon): void
    {
        $this->hasCoupon = $hasCoupon;
    }

    /**
     * @return mixed
     */
    public function getMallIdList()
    {
        return $this->mallIdList;
    }

    /**
     * @param mixed $mallIdList
     */
    public function setMallIdList($mallIdList): void
    {
        $this->mallIdList = $mallIdList;
    }

    /**
     * @return mixed
     */
    public function getMerchantTypeList()
    {
        return $this->merchantTypeList;
    }

    /**
     * @param mixed $merchantTypeList
     */
    public function setMerchantTypeList($merchantTypeList): void
    {
        $this->merchantTypeList = $merchantTypeList;
    }

    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'cat_id' => $this->catId,
            'has_clt_cpn' => $this->hasCltCpn,
            'mall_id_list' => $this->mallIdList,
            'merchant_type_list' => $this->merchantTypeList,
            'page_number' => $this->pageNumber,
            'page_size' => $this->pageSize,
            'query_range_str' => $this->queryRangeStr,
            'range_vo_list' => $this->rangeVoList
        ];
        return array_filter($params);
    }
}
