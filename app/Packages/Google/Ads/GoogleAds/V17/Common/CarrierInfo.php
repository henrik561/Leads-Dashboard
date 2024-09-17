<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/common/criteria.proto

namespace Google\Ads\GoogleAds\V17\Common;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a Carrier Criterion.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.common.CarrierInfo</code>
 */
class CarrierInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The Carrier constant resource name.
     *
     * Generated from protobuf field <code>optional string carrier_constant = 2 [(.google.api.resource_reference) = {</code>
     */
    protected $carrier_constant = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type string $carrier_constant
     *              The Carrier constant resource name.
     *              }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * The Carrier constant resource name.
     *
     * Generated from protobuf field <code>optional string carrier_constant = 2 [(.google.api.resource_reference) = {</code>
     *
     * @return string
     */
    public function getCarrierConstant()
    {
        return isset($this->carrier_constant) ? $this->carrier_constant : '';
    }

    public function hasCarrierConstant()
    {
        return isset($this->carrier_constant);
    }

    public function clearCarrierConstant()
    {
        unset($this->carrier_constant);
    }

    /**
     * The Carrier constant resource name.
     *
     * Generated from protobuf field <code>optional string carrier_constant = 2 [(.google.api.resource_reference) = {</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setCarrierConstant($var)
    {
        GPBUtil::checkString($var, true);
        $this->carrier_constant = $var;

        return $this;
    }
}
