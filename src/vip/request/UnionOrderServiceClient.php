<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\pv138\easyUnion\vip\request;

use com\pv138\easyUnion\vip\Osp\ClassLoader\ClassLoader;
use com\pv138\easyUnion\vip\Osp\Context\InvocationContextFactory;
use com\pv138\easyUnion\vip\Osp\Util\PathUtil;

class UnionOrderServiceClient
{
    private static $isRegis;
    private static $DEFAULT_PROXY_IP = "127.0.0.1";
    private static $DEFAULT_PROXY_PORT = "2080";

    private static function regis()
    {
        $path = PathUtil::getRootPath();
        $nsLoader = new ClassLoader();
        $nsLoader->registerNamespace('Thrift', $path);
        $nsLoader->registerNamespace('Osp', $path);
        $nsLoader->registerNamespace('com', $path);
        $nsLoader->register();
    }


    public static function getService()
    {
        if (!UnionOrderServiceClient::$isRegis) {
            UnionOrderServiceClient::regis();
            UnionOrderServiceClient::$isRegis = true;
        }


        $ctx = InvocationContextFactory::getInstance();
        $ip = UnionOrderServiceClient::$DEFAULT_PROXY_IP;
        $port = UnionOrderServiceClient::$DEFAULT_PROXY_PORT;
        try {
            $envCfg = getenv("VIP_OSP_PROXY");
            $ipport = explode(":", $envCfg);
            if (strlen($envCfg) > 0 && count($ipport) == 2) {
                $ip = $ipport [0];
                $port = $ipport [1];
            }
        } catch (\Exception $e) {
            $ip = UnionOrderServiceClient::$DEFAULT_PROXY_IP;
            $port = UnionOrderServiceClient::$DEFAULT_PROXY_PORT;
        }

        if ($ctx->getCalleeIP() == null) {
            $ctx->setCalleeIP($ip);
        }

        if ($ctx->getCalleePort() == null) {
            $ctx->setCalleePort($port);
        }

        //$ctx->setProtocol ( \Osp\Protocol\OspProtocol::$Binary );

        return new UnionOrderServiceHelper();
    }
}
