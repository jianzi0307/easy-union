<?php

namespace com\pv138\easyUnion\taobao\request;

use com\pv138\easyUnion\taobao\RequestCheckUtil;

/**
 * TOP API: taobao.openim.track.getsummary request
 *
 * @author auto create
 * @since 1.0, 2018.07.26
 */
class OpenimTrackGetsummaryRequest
{
    /**
     * 用户所属app的prefix
     **/
    private $prefix;

    /**
     * 用户id
     **/
    private $uid;

    private $apiParas = array();

    public function getPrefix()
    {
        return $this->prefix;
    }

    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;
        $this->apiParas["prefix"] = $prefix;
    }

    public function getUid()
    {
        return $this->uid;
    }

    public function setUid($uid)
    {
        $this->uid = $uid;
        $this->apiParas["uid"] = $uid;
    }

    public function getApiMethodName()
    {
        return "taobao.openim.track.getsummary";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {
        RequestCheckUtil::checkNotNull($this->uid, "uid");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
