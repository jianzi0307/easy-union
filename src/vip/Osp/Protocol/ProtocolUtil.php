<?php

namespace com\pv138\easyUnion\vip\Osp\Protocol;

use com\pv138\easyUnion\vip\Osp\Exception\OspException;

class ProtocolUtil
{
    public static $NUMBER = 1;
    public static $STRING = 2;
    public static $OBJECT = 3;
    public static $ARRAY = 4;
    public static $BOOLEAN = 5;
    public static $UNKNOW = -1;

    public static function skip($prot)
    {
        $type = $prot->getType();
        switch ($type) {
            case self::$NUMBER:
                $prot->readDouble($temp);
                break;
            case self::$STRING:
                $prot->readString($temp);
                break;
            case self::$OBJECT:
                $schemeStruct = $prot->readStructBegin();
                while (true) {
                    $schemeField = $prot->readFieldBegin();
                    if ($schemeField == null) {
                        break;
                    }
                    self::skip($prot);
                    $prot->readFieldEnd();
                }
                $prot->readStructEnd();
                break;
            case self::$ARRAY:
                $prot->readListBegin();
                while (true) {
                    try {
                        self::skip($prot);
                    } catch (\Exception $e) {
                        break;
                    }
                }
                $prot->readListEnd();
                break;
            case self::$BOOLEAN:
                $prot->readBool($temp);
                break;
            default:
                throw new OspException("unknow Type");
        }
    }
}
