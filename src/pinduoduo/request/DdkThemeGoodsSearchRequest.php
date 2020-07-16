<?php


namespace com\pv138\easyUnion\pinduoduo\request;


use com\pv138\easyUnion\pinduoduo\RequestInterface;

class DdkThemeGoodsSearchRequest implements RequestInterface
{
    /**
     * 多多进宝主题商品查询：
     * @var string
     */
    private $type = 'pdd.ddk.theme.goods.search';

    /**
     * 主题ID
     * @var
     */
    private $themeId;

    public function setThemeId($value)
    {
        $this->themeId = $value;
    }

    public function getThemeId()
    {
        return $this->themeId;
    }

    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'theme_id' => $this->themeId
        ];
        return array_filter($params);
    }
}
