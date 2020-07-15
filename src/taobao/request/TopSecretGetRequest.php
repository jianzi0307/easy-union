<?php

namespace com\pv138\easyUnion\taobao\request;

use com\pv138\easyUnion\taobao\RequestCheckUtil;

/**
 * TOP API: taobao.top.secret.get request
 *
 * @author auto create
 * @since 1.0, 2018.10.10
 */
class TopSecretGetRequest
{
    /**
     * 自定义用户id
     **/
    private $customerUserId;

    /**
     * 伪随机数
     **/
    private $randomNum;

    /**
     * 秘钥版本号
     **/
    private $secretVersion;

    private $apiParas = array();

    public function getCustomerUserId()
    {
        return $this->customerUserId;
    }

    public function setCustomerUserId($customerUserId)
    {
        $this->customerUserId = $customerUserId;
        $this->apiParas["customer_user_id"] = $customerUserId;
    }

    public function getRandomNum()
    {
        return $this->randomNum;
    }

    public function setRandomNum($randomNum)
    {
        $this->randomNum = $randomNum;
        $this->apiParas["random_num"] = $randomNum;
    }

    public function getSecretVersion()
    {
        return $this->secretVersion;
    }

    public function setSecretVersion($secretVersion)
    {
        $this->secretVersion = $secretVersion;
        $this->apiParas["secret_version"] = $secretVersion;
    }

    public function getApiMethodName()
    {
        return "taobao.top.secret.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->randomNum, "randomNum");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
