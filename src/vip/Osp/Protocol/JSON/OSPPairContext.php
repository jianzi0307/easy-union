<?php

namespace com\pv138\easyUnion\vip\Osp\Protocol\JSON;

use com\pv138\easyUnion\vip\Osp\Protocol\JSONProtocol;

class OSPPairContext extends BaseContext
{
    private $first_ = true;
    private $p_ = null;

    public function __construct($p)
    {
        $this->p_ = $p;
    }

    public function write()
    {
        parent::write();
    }

    public function read()
    {
        if ($this->first_) {
            $this->first_ = false;
        } else {
            $this->p_->readJSONSyntaxChar(JSONProtocol::COLON);
            $this->first_ = true;
        }
    }
}
