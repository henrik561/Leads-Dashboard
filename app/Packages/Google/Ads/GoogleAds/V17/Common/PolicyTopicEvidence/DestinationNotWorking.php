<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/common/policy.proto

namespace Google\Ads\GoogleAds\V17\Common\PolicyTopicEvidence;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Evidence details when the destination is returning an HTTP error
 * code or isn't functional in all locations for commonly used devices.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.common.PolicyTopicEvidence.DestinationNotWorking</code>
 */
class DestinationNotWorking extends \Google\Protobuf\Internal\Message
{
    /**
     * The full URL that didn't work.
     *
     * Generated from protobuf field <code>optional string expanded_url = 7;</code>
     */
    protected $expanded_url = null;

    /**
     * The type of device that failed to load the URL.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.PolicyTopicEvidenceDestinationNotWorkingDeviceEnum.PolicyTopicEvidenceDestinationNotWorkingDevice device = 4;</code>
     */
    protected $device = 0;

    /**
     * The time the URL was last checked.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>optional string last_checked_date_time = 8;</code>
     */
    protected $last_checked_date_time = null;

    protected $reason;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type string $expanded_url
     *              The full URL that didn't work.
     * @type int $device
     *           The type of device that failed to load the URL.
     * @type string $last_checked_date_time
     *              The time the URL was last checked.
     *              The format is "YYYY-MM-DD HH:MM:SS".
     *              Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     * @type int $dns_error_type
     *           The type of DNS error.
     * @type int|string $http_error_code
     *                  The HTTP error code.
     *                  }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Common\Policy::initOnce();
        parent::__construct($data);
    }

    /**
     * The full URL that didn't work.
     *
     * Generated from protobuf field <code>optional string expanded_url = 7;</code>
     *
     * @return string
     */
    public function getExpandedUrl()
    {
        return isset($this->expanded_url) ? $this->expanded_url : '';
    }

    public function hasExpandedUrl()
    {
        return isset($this->expanded_url);
    }

    public function clearExpandedUrl()
    {
        unset($this->expanded_url);
    }

    /**
     * The full URL that didn't work.
     *
     * Generated from protobuf field <code>optional string expanded_url = 7;</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setExpandedUrl($var)
    {
        GPBUtil::checkString($var, true);
        $this->expanded_url = $var;

        return $this;
    }

    /**
     * The type of device that failed to load the URL.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.PolicyTopicEvidenceDestinationNotWorkingDeviceEnum.PolicyTopicEvidenceDestinationNotWorkingDevice device = 4;</code>
     *
     * @return int
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * The type of device that failed to load the URL.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.PolicyTopicEvidenceDestinationNotWorkingDeviceEnum.PolicyTopicEvidenceDestinationNotWorkingDevice device = 4;</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setDevice($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V17\Enums\PolicyTopicEvidenceDestinationNotWorkingDeviceEnum\PolicyTopicEvidenceDestinationNotWorkingDevice::class);
        $this->device = $var;

        return $this;
    }

    /**
     * The time the URL was last checked.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>optional string last_checked_date_time = 8;</code>
     *
     * @return string
     */
    public function getLastCheckedDateTime()
    {
        return isset($this->last_checked_date_time) ? $this->last_checked_date_time : '';
    }

    public function hasLastCheckedDateTime()
    {
        return isset($this->last_checked_date_time);
    }

    public function clearLastCheckedDateTime()
    {
        unset($this->last_checked_date_time);
    }

    /**
     * The time the URL was last checked.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>optional string last_checked_date_time = 8;</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setLastCheckedDateTime($var)
    {
        GPBUtil::checkString($var, true);
        $this->last_checked_date_time = $var;

        return $this;
    }

    /**
     * The type of DNS error.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.PolicyTopicEvidenceDestinationNotWorkingDnsErrorTypeEnum.PolicyTopicEvidenceDestinationNotWorkingDnsErrorType dns_error_type = 1;</code>
     *
     * @return int
     */
    public function getDnsErrorType()
    {
        return $this->readOneof(1);
    }

    public function hasDnsErrorType()
    {
        return $this->hasOneof(1);
    }

    /**
     * The type of DNS error.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.PolicyTopicEvidenceDestinationNotWorkingDnsErrorTypeEnum.PolicyTopicEvidenceDestinationNotWorkingDnsErrorType dns_error_type = 1;</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setDnsErrorType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V17\Enums\PolicyTopicEvidenceDestinationNotWorkingDnsErrorTypeEnum\PolicyTopicEvidenceDestinationNotWorkingDnsErrorType::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * The HTTP error code.
     *
     * Generated from protobuf field <code>int64 http_error_code = 6;</code>
     *
     * @return int|string
     */
    public function getHttpErrorCode()
    {
        return $this->readOneof(6);
    }

    public function hasHttpErrorCode()
    {
        return $this->hasOneof(6);
    }

    /**
     * The HTTP error code.
     *
     * Generated from protobuf field <code>int64 http_error_code = 6;</code>
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setHttpErrorCode($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->whichOneof('reason');
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DestinationNotWorking::class, \Google\Ads\GoogleAds\V17\Common\PolicyTopicEvidence_DestinationNotWorking::class);
