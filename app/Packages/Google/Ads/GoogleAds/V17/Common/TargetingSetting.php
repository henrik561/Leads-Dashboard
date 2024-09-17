<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/common/targeting_setting.proto

namespace Google\Ads\GoogleAds\V17\Common;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Settings for the targeting-related features, at the campaign and ad group
 * levels. For more details about the targeting setting, visit
 * https://support.google.com/google-ads/answer/7365594
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.common.TargetingSetting</code>
 */
class TargetingSetting extends \Google\Protobuf\Internal\Message
{
    /**
     * The per-targeting-dimension setting to restrict the reach of your campaign
     * or ad group.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.common.TargetRestriction target_restrictions = 1;</code>
     */
    private $target_restrictions;

    /**
     * The list of operations changing the target restrictions.
     * Adding a target restriction with a targeting dimension that already exists
     * causes the existing target restriction to be replaced with the new value.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.common.TargetRestrictionOperation target_restriction_operations = 2;</code>
     */
    private $target_restriction_operations;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type array<\Google\Ads\GoogleAds\V17\Common\TargetRestriction>|\Google\Protobuf\Internal\RepeatedField $target_restrictions
     *                                                                                                         The per-targeting-dimension setting to restrict the reach of your campaign
     *                                                                                                         or ad group.
     * @type array<\Google\Ads\GoogleAds\V17\Common\TargetRestrictionOperation>|\Google\Protobuf\Internal\RepeatedField $target_restriction_operations
     *                                                                                                                  The list of operations changing the target restrictions.
     *                                                                                                                  Adding a target restriction with a targeting dimension that already exists
     *                                                                                                                  causes the existing target restriction to be replaced with the new value.
     *                                                                                                                  }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Common\TargetingSetting::initOnce();
        parent::__construct($data);
    }

    /**
     * The per-targeting-dimension setting to restrict the reach of your campaign
     * or ad group.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.common.TargetRestriction target_restrictions = 1;</code>
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTargetRestrictions()
    {
        return $this->target_restrictions;
    }

    /**
     * The per-targeting-dimension setting to restrict the reach of your campaign
     * or ad group.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.common.TargetRestriction target_restrictions = 1;</code>
     *
     * @param  array<\Google\Ads\GoogleAds\V17\Common\TargetRestriction>|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setTargetRestrictions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V17\Common\TargetRestriction::class);
        $this->target_restrictions = $arr;

        return $this;
    }

    /**
     * The list of operations changing the target restrictions.
     * Adding a target restriction with a targeting dimension that already exists
     * causes the existing target restriction to be replaced with the new value.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.common.TargetRestrictionOperation target_restriction_operations = 2;</code>
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTargetRestrictionOperations()
    {
        return $this->target_restriction_operations;
    }

    /**
     * The list of operations changing the target restrictions.
     * Adding a target restriction with a targeting dimension that already exists
     * causes the existing target restriction to be replaced with the new value.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.common.TargetRestrictionOperation target_restriction_operations = 2;</code>
     *
     * @param  array<\Google\Ads\GoogleAds\V17\Common\TargetRestrictionOperation>|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setTargetRestrictionOperations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V17\Common\TargetRestrictionOperation::class);
        $this->target_restriction_operations = $arr;

        return $this;
    }
}
