<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/common/criteria.proto

namespace Google\Ads\GoogleAds\V17\Common;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an operating system version to be targeted.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.common.OperatingSystemVersionInfo</code>
 */
class OperatingSystemVersionInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The operating system version constant resource name.
     *
     * Generated from protobuf field <code>optional string operating_system_version_constant = 2 [(.google.api.resource_reference) = {</code>
     */
    protected $operating_system_version_constant = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type string $operating_system_version_constant
     *              The operating system version constant resource name.
     *              }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * The operating system version constant resource name.
     *
     * Generated from protobuf field <code>optional string operating_system_version_constant = 2 [(.google.api.resource_reference) = {</code>
     *
     * @return string
     */
    public function getOperatingSystemVersionConstant()
    {
        return isset($this->operating_system_version_constant) ? $this->operating_system_version_constant : '';
    }

    public function hasOperatingSystemVersionConstant()
    {
        return isset($this->operating_system_version_constant);
    }

    public function clearOperatingSystemVersionConstant()
    {
        unset($this->operating_system_version_constant);
    }

    /**
     * The operating system version constant resource name.
     *
     * Generated from protobuf field <code>optional string operating_system_version_constant = 2 [(.google.api.resource_reference) = {</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setOperatingSystemVersionConstant($var)
    {
        GPBUtil::checkString($var, true);
        $this->operating_system_version_constant = $var;

        return $this;
    }
}
