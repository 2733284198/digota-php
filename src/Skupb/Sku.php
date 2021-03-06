<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: github.com/digota/digota/sku/skupb/sku.proto

namespace Skupb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>skupb.Sku</code>
 */
class Sku extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string id = 1;</code>
     */
    private $id = '';
    /**
     * <code>string name = 2;</code>
     */
    private $name = '';
    /**
     * <code>uint64 price = 3;</code>
     */
    private $price = 0;
    /**
     * <code>.paymentpb.Currency currency = 4;</code>
     */
    private $currency = 0;
    /**
     * <code>bool active = 5;</code>
     */
    private $active = false;
    /**
     * <code>string parent = 6;</code>
     */
    private $parent = '';
    /**
     * <code>map&lt;string, string&gt; metadata = 7;</code>
     */
    private $metadata;
    /**
     * <code>map&lt;string, string&gt; attributes = 8;</code>
     */
    private $attributes;
    /**
     * <code>string image = 9;</code>
     */
    private $image = '';
    /**
     * <code>.skupb.PackageDimensions packageDimensions = 10;</code>
     */
    private $packageDimensions = null;
    /**
     * <code>.skupb.Inventory inventory = 11;</code>
     */
    private $inventory = null;
    /**
     * <code>int64 created = 998;</code>
     */
    private $created = 0;
    /**
     * <code>int64 updated = 999;</code>
     */
    private $updated = 0;

    public function __construct() {
        \GPBMetadata\GithubCom\Digota\Digota\Sku\Skupb\Sku::initOnce();
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
     * <code>string name = 2;</code>
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <code>string name = 2;</code>
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

    /**
     * <code>uint64 price = 3;</code>
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * <code>uint64 price = 3;</code>
     */
    public function setPrice($var)
    {
        GPBUtil::checkUint64($var);
        $this->price = $var;
    }

    /**
     * <code>.paymentpb.Currency currency = 4;</code>
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * <code>.paymentpb.Currency currency = 4;</code>
     */
    public function setCurrency($var)
    {
        GPBUtil::checkEnum($var, \Paymentpb\Currency::class);
        $this->currency = $var;
    }

    /**
     * <code>bool active = 5;</code>
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * <code>bool active = 5;</code>
     */
    public function setActive($var)
    {
        GPBUtil::checkBool($var);
        $this->active = $var;
    }

    /**
     * <code>string parent = 6;</code>
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * <code>string parent = 6;</code>
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;
    }

    /**
     * <code>map&lt;string, string&gt; metadata = 7;</code>
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * <code>map&lt;string, string&gt; metadata = 7;</code>
     */
    public function setMetadata(&$var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->metadata = $arr;
    }

    /**
     * <code>map&lt;string, string&gt; attributes = 8;</code>
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * <code>map&lt;string, string&gt; attributes = 8;</code>
     */
    public function setAttributes(&$var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->attributes = $arr;
    }

    /**
     * <code>string image = 9;</code>
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * <code>string image = 9;</code>
     */
    public function setImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->image = $var;
    }

    /**
     * <code>.skupb.PackageDimensions packageDimensions = 10;</code>
     */
    public function getPackageDimensions()
    {
        return $this->packageDimensions;
    }

    /**
     * <code>.skupb.PackageDimensions packageDimensions = 10;</code>
     */
    public function setPackageDimensions(&$var)
    {
        GPBUtil::checkMessage($var, \Skupb\PackageDimensions::class);
        $this->packageDimensions = $var;
    }

    /**
     * <code>.skupb.Inventory inventory = 11;</code>
     */
    public function getInventory()
    {
        return $this->inventory;
    }

    /**
     * <code>.skupb.Inventory inventory = 11;</code>
     */
    public function setInventory(&$var)
    {
        GPBUtil::checkMessage($var, \Skupb\Inventory::class);
        $this->inventory = $var;
    }

    /**
     * <code>int64 created = 998;</code>
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * <code>int64 created = 998;</code>
     */
    public function setCreated($var)
    {
        GPBUtil::checkInt64($var);
        $this->created = $var;
    }

    /**
     * <code>int64 updated = 999;</code>
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * <code>int64 updated = 999;</code>
     */
    public function setUpdated($var)
    {
        GPBUtil::checkInt64($var);
        $this->updated = $var;
    }

}

