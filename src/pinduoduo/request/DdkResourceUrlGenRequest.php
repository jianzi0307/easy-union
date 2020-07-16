<?php


namespace com\pv138\easyUnion\pinduoduo\request;


use com\pv138\easyUnion\pinduoduo\RequestInterface;

class DdkResourceUrlGenRequest implements RequestInterface
{
    /**
     * 本接口用于进行平台大促活动（如618、双十一活动）、平台优惠频道转链（电器城、限时秒杀等）（入参resource_type：4-限时秒杀,39997-充值中心, 39998-转链type，39996-百亿补贴）
     * @var string
     */
    private $type = 'pdd.ddk.resource.url.gen';

    /**
     * 推广位
     * @var
     */
    private $pid;

    /**
     * @return mixed
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * @param mixed $pid
     */
    public function setPid($pid): void
    {
        $this->pid = $pid;
    }

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
     * 是否生成qq小程序
     * @var
     */
    private $generateQqApp;

    /**
     * @return mixed
     */
    public function getGenerateQqApp()
    {
        return $this->generateQqApp;
    }

    /**
     * @param mixed $generateQqApp
     */
    public function setGenerateQqApp($generateQqApp): void
    {
        $this->generateQqApp = $generateQqApp;
    }

    /**
     * 是否返回 schema URL
     * @var
     */
    private $generateSchemaUrl;

    /**
     * @return mixed
     */
    public function getGenerateSchemaUrl()
    {
        return $this->generateSchemaUrl;
    }

    /**
     * @param mixed $generateSchemaUrl
     */
    public function setGenerateSchemaUrl($generateSchemaUrl): void
    {
        $this->generateSchemaUrl = $generateSchemaUrl;
    }

    /**
     * 是否生成小程序
     * @var
     */
    private $generateWeApp;

    /**
     * @return mixed
     */
    public function getGenerateWeApp()
    {
        return $this->generateWeApp;
    }

    /**
     * @param mixed $generateWeApp
     */
    public function setGenerateWeApp($generateWeApp): void
    {
        $this->generateWeApp = $generateWeApp;
    }

    /**
     * 频道来源：4-限时秒杀,39997-充值中心, 39998-转链type，39996-百亿补贴
     * @var
     */
    private $resourceType;

    /**
     * @return mixed
     */
    public function getResourceType()
    {
        return $this->resourceType;
    }

    /**
     * @param mixed $resourceType
     */
    public function setResourceType($resourceType): void
    {
        $this->resourceType = $resourceType;
    }

    /**
     * 原链接
     * @var
     */
    private $url;

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url): void
    {
        $this->url = $url;
    }


    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'pid' => $this->pid,
            'custom_parameters' => $this->customParameters,
            'generate_qq_app' => $this->generateQqApp,
            'generate_schema_url' => $this->generateSchemaUrl,
            'generate_we_app' => $this->generateWeApp,
            'resource_type' => $this->resourceType,
            'url' => $this->url
        ];
        return array_filter($params);
    }
}
