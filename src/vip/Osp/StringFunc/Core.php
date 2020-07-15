<?php

namespace com\pv138\easyUnion\vip\Osp\Transport;

use com\pv138\easyUnion\vip\Osp\StringFunc\StringFunc;

class Core implements StringFunc
{
    public function substr($str, $start, $length = null)
    {
        // specifying a null $length would return an empty string
        if ($length === null) {
            return substr($str, $start);
        }
        return substr($str, $start, $length);
    }

    public function strlen($str)
    {
        return strlen($str);
    }
}
