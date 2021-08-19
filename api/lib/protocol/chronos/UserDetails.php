<?php
namespace chronos;

/**
 * Autogenerated by Thrift Compiler (0.13.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class UserDetails
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'userId',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        2 => array(
            'var' => 'email',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'firstName',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        4 => array(
            'var' => 'lastName',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        5 => array(
            'var' => 'language',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var int
     */
    public $userId = null;
    /**
     * @var string
     */
    public $email = null;
    /**
     * @var string
     */
    public $firstName = null;
    /**
     * @var string
     */
    public $lastName = null;
    /**
     * @var string
     */
    public $language = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['userId'])) {
                $this->userId = $vals['userId'];
            }
            if (isset($vals['email'])) {
                $this->email = $vals['email'];
            }
            if (isset($vals['firstName'])) {
                $this->firstName = $vals['firstName'];
            }
            if (isset($vals['lastName'])) {
                $this->lastName = $vals['lastName'];
            }
            if (isset($vals['language'])) {
                $this->language = $vals['language'];
            }
        }
    }

    public function getName()
    {
        return 'UserDetails';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->userId);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->email);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->firstName);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->lastName);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->language);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('UserDetails');
        if ($this->userId !== null) {
            $xfer += $output->writeFieldBegin('userId', TType::I64, 1);
            $xfer += $output->writeI64($this->userId);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->email !== null) {
            $xfer += $output->writeFieldBegin('email', TType::STRING, 2);
            $xfer += $output->writeString($this->email);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->firstName !== null) {
            $xfer += $output->writeFieldBegin('firstName', TType::STRING, 3);
            $xfer += $output->writeString($this->firstName);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->lastName !== null) {
            $xfer += $output->writeFieldBegin('lastName', TType::STRING, 4);
            $xfer += $output->writeString($this->lastName);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->language !== null) {
            $xfer += $output->writeFieldBegin('language', TType::STRING, 5);
            $xfer += $output->writeString($this->language);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}