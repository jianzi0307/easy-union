<?php

namespace com\pv138\easyUnion\pinduoduo\request;


use com\pv138\easyUnion\pinduoduo\RequestInterface;

class DdkGoodsZsUnitUrlGenRequest implements RequestInterface
{

    /**
     * 生成普通商品推广链接
     * @var string
     */
    private $type = 'pdd.ddk.goods.zs.unit.url.gen';

    /**
     * 推广位ID
     * @var
     */
    private $pid;

    /**
     * 自定义参数，为链接打上自定义标签；自定义参数最长限制64个字节；格式为： {"uid":"11111","sid":"22222"} ，其中 uid 用户唯一标识，可自行加密后传入，每个用户仅且对应一个标识，必填； sid 上下文信息标识，例如sessionId等，非必填。该json字符串中也可以加入其他自定义的key
     * @var
     */
    private $customParameters;

    /**
     * @return mixed
     */
    public function getCustomParameters()
    {
        return $this->customParameters;
    }

    /**
     * @param mixed $customParameters
     */
    public function setCustomParameters($customParameters): void
    {
        $this->customParameters = $customParameters;
    }

    /**
     * 商品ID，仅支持单个查询
     * @var
     */
    private $source_url;


    public function setPid($pid)
    {
        $this->pid = $pid;
    }

    public function getPid()
    {
        return $this->pid;
    }

    public function setSourceUrl($source_url)
    {
        $this->source_url = $source_url;
    }

    public function getSourceUrl()
    {
        return $this->source_url;
    }

    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'pid' => $this->pid,
            'source_url' => $this->source_url,
            'custom_parameters' => $this->customParameters
        ];
        return array_filter($params);
    }
}
