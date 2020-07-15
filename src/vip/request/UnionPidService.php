<?php

namespace com\pv138\easyUnion\vip\request;

use com\pv138\easyUnion\vip\Osp\Base\OspStub;
use com\pv138\easyUnion\vip\Osp\Exception\OspException;
use com\vip\hermes\core\health\CheckResult;

interface UnionPidServiceIf
{
    public function genPid(PidGenRequest $pidGenRequest);

    public function genPidWithOauth(PidGenRequest $pidGenRequest);

    public function healthCheck();

    public function queryPid(PidQueryRequest $pidQueryRequest);

    public function queryPidWithOauth(PidQueryRequest $pidQueryRequest);
}

class _UnionPidServiceClient extends OspStub implements UnionPidServiceIf
{
    public function __construct()
    {
        parent::__construct("com.vip.adp.api.open.service.UnionPidService", "1.0.0");
    }


    public function genPid(PidGenRequest $pidGenRequest)
    {
        $this->send_genPid($pidGenRequest);
        return $this->recv_genPid();
    }

    public function send_genPid(PidGenRequest $pidGenRequest)
    {
        $this->initInvocation("genPid");
        $args = new UnionPidService_genPid_args();

        $args->pidGenRequest = $pidGenRequest;

        $this->send_base($args);
    }

    public function recv_genPid()
    {
        $result = new UnionPidService_genPid_result();
        $this->receive_base($result);
        if ($result->success !== null) {
            return $result->success;
        }
    }


    public function genPidWithOauth(PidGenRequest $pidGenRequest)
    {
        $this->send_genPidWithOauth($pidGenRequest);
        return $this->recv_genPidWithOauth();
    }

    public function send_genPidWithOauth(PidGenRequest $pidGenRequest)
    {
        $this->initInvocation("genPidWithOauth");
        $args = new UnionPidService_genPidWithOauth_args();

        $args->pidGenRequest = $pidGenRequest;
        $this->send_base($args);
    }

    public function recv_genPidWithOauth()
    {
        $result = new UnionPidService_genPidWithOauth_result();
        $this->receive_base($result);
        if ($result->success !== null) {
            return $result->success;
        }
    }


    public function healthCheck()
    {
        $this->send_healthCheck();
        return $this->recv_healthCheck();
    }

    public function send_healthCheck()
    {
        $this->initInvocation("healthCheck");
        $args = new UnionPidService_healthCheck_args();

        $this->send_base($args);
    }

    public function recv_healthCheck()
    {
        $result = new UnionPidService_healthCheck_result();
        $this->receive_base($result);
        if ($result->success !== null) {
            return $result->success;
        }
    }


    public function queryPid(PidQueryRequest $pidQueryRequest)
    {
        $this->send_queryPid($pidQueryRequest);
        return $this->recv_queryPid();
    }

    public function send_queryPid(PidQueryRequest $pidQueryRequest)
    {
        $this->initInvocation("queryPid");
        $args = new UnionPidService_queryPid_args();

        $args->pidQueryRequest = $pidQueryRequest;

        $this->send_base($args);
    }

    public function recv_queryPid()
    {
        $result = new UnionPidService_queryPid_result();
        $this->receive_base($result);
        if ($result->success !== null) {
            return $result->success;
        }
    }


    public function queryPidWithOauth(PidQueryRequest $pidQueryRequest)
    {
        $this->send_queryPidWithOauth($pidQueryRequest);
        return $this->recv_queryPidWithOauth();
    }

    public function send_queryPidWithOauth(PidQueryRequest $pidQueryRequest)
    {
        $this->initInvocation("queryPidWithOauth");
        $args = new UnionPidService_queryPidWithOauth_args();

        $args->pidQueryRequest = $pidQueryRequest;

        $this->send_base($args);
    }

    public function recv_queryPidWithOauth()
    {
        $result = new UnionPidService_queryPidWithOauth_result();
        $this->receive_base($result);
        if ($result->success !== null) {
            return $result->success;
        }
    }
}


class UnionPidService_genPid_args
{
    public static $_TSPEC;
    public $pidGenRequest = null;

    public function __construct($vals = null)
    {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = array(
                1 => array(
                    'var' => 'pidGenRequest'
                ),

            );
        }

        if (is_array($vals)) {
            if (isset($vals['pidGenRequest'])) {
                $this->pidGenRequest = $vals['pidGenRequest'];
            }
        }
    }


    public function read($input)
    {
        if (true) {
            $this->pidGenRequest = new PidGenRequest();
            $this->pidGenRequest->read($input);
        }
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin();

        if ($this->pidGenRequest !== null) {
            $xfer += $output->writeFieldBegin('pidGenRequest');

            if (!is_object($this->pidGenRequest)) {
                throw new OspException('Bad type in structure.', OspException::INVALID_DATA);
            }

            $xfer += $this->pidGenRequest->write($output);

            $xfer += $output->writeFieldEnd();
        }


        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}


class UnionPidService_genPidWithOauth_args
{
    public static $_TSPEC;
    public $pidGenRequest = null;

    public function __construct($vals = null)
    {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = array(
                1 => array(
                    'var' => 'pidGenRequest'
                ),

            );
        }

        if (is_array($vals)) {
            if (isset($vals['pidGenRequest'])) {
                $this->pidGenRequest = $vals['pidGenRequest'];
            }
        }
    }


    public function read($input)
    {
        if (true) {
            $this->pidGenRequest = new PidGenRequest();
            $this->pidGenRequest->read($input);
        }
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin();

        if ($this->pidGenRequest !== null) {
            $xfer += $output->writeFieldBegin('pidGenRequest');

            if (!is_object($this->pidGenRequest)) {
                throw new OspException('Bad type in structure.', OspException::INVALID_DATA);
            }

            $xfer += $this->pidGenRequest->write($output);

            $xfer += $output->writeFieldEnd();
        }


        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}


class UnionPidService_healthCheck_args
{
    public static $_TSPEC;

    public function __construct($vals = null)
    {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = array();
        }

        if (is_array($vals)) {
        }
    }


    public function read($input)
    {
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin();

        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}


class UnionPidService_queryPid_args
{
    public static $_TSPEC;
    public $pidQueryRequest = null;

    public function __construct($vals = null)
    {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = array(
                1 => array(
                    'var' => 'pidQueryRequest'
                ),

            );
        }

        if (is_array($vals)) {
            if (isset($vals['pidQueryRequest'])) {
                $this->pidQueryRequest = $vals['pidQueryRequest'];
            }
        }
    }


    public function read($input)
    {
        if (true) {
            $this->pidQueryRequest = new PidQueryRequest();
            $this->pidQueryRequest->read($input);
        }
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin();

        if ($this->pidQueryRequest !== null) {
            $xfer += $output->writeFieldBegin('pidQueryRequest');

            if (!is_object($this->pidQueryRequest)) {
                throw new OspException('Bad type in structure.', OspException::INVALID_DATA);
            }

            $xfer += $this->pidQueryRequest->write($output);

            $xfer += $output->writeFieldEnd();
        }


        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}


class UnionPidService_queryPidWithOauth_args
{
    public static $_TSPEC;
    public $pidQueryRequest = null;

    public function __construct($vals = null)
    {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = array(
                1 => array(
                    'var' => 'pidQueryRequest'
                ),

            );
        }

        if (is_array($vals)) {
            if (isset($vals['pidQueryRequest'])) {
                $this->pidQueryRequest = $vals['pidQueryRequest'];
            }
        }
    }


    public function read($input)
    {
        if (true) {
            $this->pidQueryRequest = new PidQueryRequest();
            $this->pidQueryRequest->read($input);
        }
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin();

        if ($this->pidQueryRequest !== null) {
            $xfer += $output->writeFieldBegin('pidQueryRequest');

            if (!is_object($this->pidQueryRequest)) {
                throw new OspException('Bad type in structure.', OspException::INVALID_DATA);
            }

            $xfer += $this->pidQueryRequest->write($output);

            $xfer += $output->writeFieldEnd();
        }


        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}


class UnionPidService_genPid_result
{
    public static $_TSPEC;
    public $success = null;

    public function __construct($vals = null)
    {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = array(
                0 => array(
                    'var' => 'success'
                ),

            );
        }

        if (is_array($vals)) {
            if (isset($vals['success'])) {
                $this->success = $vals['success'];
            }
        }
    }


    public function read($input)
    {
        if (true) {
            $this->success = new CpsUnionPidGenResponse();
            $this->success->read($input);
        }
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin();

        if ($this->success !== null) {
            $xfer += $output->writeFieldBegin('success');

            if (!is_object($this->success)) {
                throw new OspException('Bad type in structure.', OspException::INVALID_DATA);
            }

            $xfer += $this->success->write($output);

            $xfer += $output->writeFieldEnd();
        }


        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}


class UnionPidService_genPidWithOauth_result
{
    public static $_TSPEC;
    public $success = null;

    public function __construct($vals = null)
    {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = array(
                0 => array(
                    'var' => 'success'
                ),

            );
        }

        if (is_array($vals)) {
            if (isset($vals['success'])) {
                $this->success = $vals['success'];
            }
        }
    }


    public function read($input)
    {
        if (true) {
            $this->success = new CpsUnionPidGenResponse();
            $this->success->read($input);
        }
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin();

        if ($this->success !== null) {
            $xfer += $output->writeFieldBegin('success');

            if (!is_object($this->success)) {
                throw new OspException('Bad type in structure.', OspException::INVALID_DATA);
            }

            $xfer += $this->success->write($output);

            $xfer += $output->writeFieldEnd();
        }


        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}


class UnionPidService_healthCheck_result
{
    public static $_TSPEC;
    public $success = null;

    public function __construct($vals = null)
    {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = array(
                0 => array(
                    'var' => 'success'
                ),

            );
        }

        if (is_array($vals)) {
            if (isset($vals['success'])) {
                $this->success = $vals['success'];
            }
        }
    }


    public function read($input)
    {
        if (true) {
            $this->success = new CheckResult();
            $this->success->read($input);
        }
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin();

        if ($this->success !== null) {
            $xfer += $output->writeFieldBegin('success');

            if (!is_object($this->success)) {
                throw new OspException('Bad type in structure.', OspException::INVALID_DATA);
            }

            $xfer += $this->success->write($output);

            $xfer += $output->writeFieldEnd();
        }


        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}


class UnionPidService_queryPid_result
{
    public static $_TSPEC;
    public $success = null;

    public function __construct($vals = null)
    {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = array(
                0 => array(
                    'var' => 'success'
                ),

            );
        }

        if (is_array($vals)) {
            if (isset($vals['success'])) {
                $this->success = $vals['success'];
            }
        }
    }


    public function read($input)
    {
        if (true) {
            $this->success = new CpsUnionPidQueryResponse();
            $this->success->read($input);
        }
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin();

        if ($this->success !== null) {
            $xfer += $output->writeFieldBegin('success');

            if (!is_object($this->success)) {
                throw new OspException('Bad type in structure.', OspException::INVALID_DATA);
            }

            $xfer += $this->success->write($output);

            $xfer += $output->writeFieldEnd();
        }


        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}


class UnionPidService_queryPidWithOauth_result
{
    public static $_TSPEC;
    public $success = null;

    public function __construct($vals = null)
    {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = array(
                0 => array(
                    'var' => 'success'
                ),

            );
        }

        if (is_array($vals)) {
            if (isset($vals['success'])) {
                $this->success = $vals['success'];
            }
        }
    }


    public function read($input)
    {
        if (true) {
            $this->success = new CpsUnionPidQueryResponse();
            $this->success->read($input);
        }
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin();

        if ($this->success !== null) {
            $xfer += $output->writeFieldBegin('success');

            if (!is_object($this->success)) {
                throw new OspException('Bad type in structure.', OspException::INVALID_DATA);
            }

            $xfer += $this->success->write($output);

            $xfer += $output->writeFieldEnd();
        }


        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
