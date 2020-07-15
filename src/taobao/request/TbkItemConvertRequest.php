<?php

namespace com\pv138\easyUnion\taobao\request;

use com\pv138\easyUnion\taobao\RequestCheckUtil;

/**
 * TOP API: taobao.tbk.item.get request
 *
 * @author auto create
 * @since 1.0, 2016.07.25
 */
class TbkItemConvertRequest
{
    private $Fields;
    private $NumIids;
    private $AdzoneId;
    private $Platform;
    private $Unid;
    private $Dx;

    public function getFields()
    {
        return $this->Fields;
    }

    public function setFields($Fields)
    {
        $this->Fields = $Fields;
        $this->apiParas["fields"] = $Fields;
    }

    public function getNumIids()
    {
        return $this->NumIids;
    }

    public function setNumIids($NumIids)
    {
        $this->NumIids = $NumIids;
        $this->apiParas["num_iids"] = $NumIids;
    }

    public function getAdzoneId()
    {
        return $this->AdzoneId;
    }

    public function setAdzoneId($AdzoneId)
    {
        $this->AdzoneId = $AdzoneId;
        $this->apiParas["adzone_id"] = $AdzoneId;
    }

    public function getPlatform()
    {
        return $this->Platform;
    }

    public function setPlatform($Platform)
    {
        $this->Platform = $Platform;
        $this->apiParas["platform"] = $Platform;
    }

    public function getUnid()
    {
        return $this->Unid;
    }

    public function setUnid($Unid)
    {
        $this->Unid = $Unid;
        $this->apiParas["unid"] = $Unid;
    }

    public function getDx()
    {
        return $this->Dx;
    }

    public function setDx($Dx)
    {
        $this->Dx = $Dx;
        $this->apiParas["dx"] = $Dx;
    }

    public function getApiMethodName()
    {
        return "taobao.tbk.item.convert";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }


    public function check()
    {
        RequestCheckUtil::checkNotNull($this->Fields, "fields");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
