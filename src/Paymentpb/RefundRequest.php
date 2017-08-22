<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: github.com/digota/digota/payment/paymentpb/payment.proto

namespace Paymentpb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>paymentpb.RefundRequest</code>
 */
class RefundRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string id = 1;</code>
     */
    private $id = '';
    /**
     * <code>uint64 amount = 2;</code>
     */
    private $amount = 0;
    /**
     * <code>.paymentpb.RefundReason reason = 3;</code>
     */
    private $reason = 0;

    public function __construct() {
        \GPBMetadata\GithubCom\Digota\Digota\Payment\Paymentpb\Payment::initOnce();
        parent::__construct();
    }

    /**
     * <code>string id = 1;</code>
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <code>string id = 1;</code>
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;
    }

    /**
     * <code>uint64 amount = 2;</code>
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * <code>uint64 amount = 2;</code>
     */
    public function setAmount($var)
    {
        GPBUtil::checkUint64($var);
        $this->amount = $var;
    }

    /**
     * <code>.paymentpb.RefundReason reason = 3;</code>
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * <code>.paymentpb.RefundReason reason = 3;</code>
     */
    public function setReason($var)
    {
        GPBUtil::checkEnum($var, \Paymentpb\RefundReason::class);
        $this->reason = $var;
    }

}
