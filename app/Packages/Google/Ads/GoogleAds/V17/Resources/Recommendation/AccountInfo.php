<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/resources/recommendation.proto

namespace Google\Ads\GoogleAds\V17\Resources\Recommendation;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Wrapper for information about a Google Ads account.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.resources.Recommendation.AccountInfo</code>
 */
class AccountInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The customer ID of the account.
     *
     * Generated from protobuf field <code>int64 customer_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $customer_id = 0;

    /**
     * Output only. The descriptive name of the account.
     *
     * Generated from protobuf field <code>string descriptive_name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $descriptive_name = '';

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type int|string $customer_id
     *                  Output only. The customer ID of the account.
     * @type string $descriptive_name
     *              Output only. The descriptive name of the account.
     *              }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Resources\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The customer ID of the account.
     *
     * Generated from protobuf field <code>int64 customer_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return int|string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * Output only. The customer ID of the account.
     *
     * Generated from protobuf field <code>int64 customer_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkInt64($var);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * Output only. The descriptive name of the account.
     *
     * Generated from protobuf field <code>string descriptive_name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return string
     */
    public function getDescriptiveName()
    {
        return $this->descriptive_name;
    }

    /**
     * Output only. The descriptive name of the account.
     *
     * Generated from protobuf field <code>string descriptive_name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setDescriptiveName($var)
    {
        GPBUtil::checkString($var, true);
        $this->descriptive_name = $var;

        return $this;
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AccountInfo::class, \Google\Ads\GoogleAds\V17\Resources\Recommendation_AccountInfo::class);
