<?php

namespace com\pv138\easyUnion\vip\Osp\Protocol;

abstract class Protocol
{
    abstract public function reset();

    abstract public function writeMessageBegin();

    abstract public function writeMessageEnd();

    abstract public function writeStructBegin();

    abstract public function writeStructEnd();

    abstract public function writeFieldBegin($name);

    abstract public function writeFieldEnd();

    abstract public function writeFieldStop();

    abstract public function writeMapBegin();

    abstract public function writeMapEnd();

    abstract public function writeListEnd();

    abstract public function writeSetBegin();

    abstract public function writeSetEnd();

    abstract public function writeBool($b);

    abstract public function writeByte($b);

    abstract public function writeI16($i16);

    abstract public function writeI32($i32);

    abstract public function writeI64($i64);

    abstract public function writeDouble($dub);

    abstract public function writeString($str);

    abstract public function writeBinary($bin);

    abstract public function writeListBegin();

    abstract public function readListBegin();

    abstract public function readListEnd();

    abstract public function readStructBegin();

    abstract public function readStructEnd();

    abstract public function readFieldBegin();

    abstract public function readFieldEnd();

    abstract public function readI32(&$i32);

    abstract public function readDouble(&$dub);

    abstract public function readString(&$str);

    abstract public function getTransport();

    abstract public function setTransport($trans_);

    abstract public function readChar();

    abstract public function readSetBegin();

    abstract public function readSetEnd();

    abstract public function readMapBegin();

    abstract public function readMapEnd();

    abstract public function readByte(&$byte);

    abstract public function readI64(&$i64);

    abstract public function readBool(&$bool);

    abstract public function readI16(&$i16);

    abstract public function getType();
}
