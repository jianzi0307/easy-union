<?php

namespace com\pv138\easyUnion\suning\request\netalliance;

use com\pv138\easyUnion\suning\RequestCheckUtil;
use com\pv138\easyUnion\suning\SelectSuningRequest;

/**
 * 苏宁开放平台接口 -
 *
 * @author suning
 * @date   2019-5-29
 */
class CustnumandcommdityQueryRequest extends SelectSuningRequest
{


    public function getApiMethodName()
    {
        return 'suning.netalliance.custnumandcommdity.query';
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }

    public function check()
    {
        //非空校验
        RequestCheckUtil::checkNotNull($this->pageNo, 'pageNo');
        RequestCheckUtil::checkNotNull($this->pageSize, 'pageSize');
    }

    public function getBizName()
    {
        return "queryCustnumandcommdity";
    }

}


