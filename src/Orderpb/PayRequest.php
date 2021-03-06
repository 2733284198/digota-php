<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: github.com/digota/digota/order/orderpb/order.proto

namespace Orderpb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>orderpb.PayRequest</code>
 */
class PayRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string id = 1;</code>
     */
    private $id = '';
    /**
     * <code>.paymentpb.Card card = 2;</code>
     */
    private $card = null;
    /**
     * <code>.paymentpb.PaymentProviderId paymentProviderId = 3;</code>
     */
    private $paymentProviderId = 0;

    public function __construct() {
        \GPBMetadata\GithubCom\Digota\Digota\Order\Orderpb\Order::initOnce();
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
     * <code>.paymentpb.Card card = 2;</code>
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * <code>.paymentpb.Card card = 2;</code>
     */
    public function setCard(&$var)
    {
        GPBUtil::checkMessage($var, \Paymentpb\Card::class);
        $this->card = $var;
    }

    /**
     * <code>.paymentpb.PaymentProviderId paymentProviderId = 3;</code>
     */
    public function getPaymentProviderId()
    {
        return $this->paymentProviderId;
    }

    /**
     * <code>.paymentpb.PaymentProviderId paymentProviderId = 3;</code>
     */
    public function setPaymentProviderId($var)
    {
        GPBUtil::checkEnum($var, \Paymentpb\PaymentProviderId::class);
        $this->paymentProviderId = $var;
    }

}

