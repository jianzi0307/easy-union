<?php


namespace com\pv138\easyUnion\pinduoduo\request;


use com\pv138\easyUnion\pinduoduo\RequestInterface;

class DdkCouponInfoRequest implements RequestInterface
{
    /**
     * 查询优惠券信息：pdd.ddk.coupon.info.query
     * @var string
     */
    private $type = 'pdd.ddk.coupon.info.query';

    /**
     * 优惠券id
     * @var
     */
    private $couponIds;

    /**
     * 店铺id
     * @var
     */
    private $mallIds;

    public function setCouponIds($value)
    {
        $this->couponIds = $value;
    }

    public function getCouponIds()
    {
        return $this->couponIds;
    }

    public function setMallIds($value)
    {
        $this->mallIds = $value;
    }

    public function getMallIds()
    {
        return $this->mallIds;
    }

    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'coupon_ids' => $this->couponIds,
            'mall_ids' => $this->mallIds
        ];
        return $params;
    }
}
