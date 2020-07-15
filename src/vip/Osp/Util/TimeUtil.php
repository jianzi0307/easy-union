<?php

namespace com\pv138\easyUnion\vip\Osp\Util;

class TimeUtil
{
    public static function currentTimeMillis()
    {
        list($t1, $t2) = explode(' ', microtime());
        return (float)(floatval($t1) + floatval($t2)) * 1000;
    }

    public static function currentTimeStamp()
    {
        list($usec, $sec) = explode(' ', microtime());
        $d1 = strftime("%Y-%m-%d %H:%M:%S", $sec);
        $d2 = (int)($usec * 1000);
        $result = $d1 . "." . sprintf("%03d", $d2);
        return $result;
    }
}
