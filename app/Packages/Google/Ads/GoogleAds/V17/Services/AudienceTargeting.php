<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/services/reach_plan_service.proto

namespace Google\Ads\GoogleAds\V17\Services;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Audience targeting for reach forecast.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.services.AudienceTargeting</code>
 */
class AudienceTargeting extends \Google\Protobuf\Internal\Message
{
    /**
     * List of audiences based on user interests to be targeted.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.common.UserInterestInfo user_interest = 1;</code>
     */
    private $user_interest;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type array<\Google\Ads\GoogleAds\V17\Common\UserInterestInfo>|\Google\Protobuf\Internal\RepeatedField $user_interest
     *                                                                                                        List of audiences based on user interests to be targeted.
     *                                                                                                        }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Services\ReachPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * List of audiences based on user interests to be targeted.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.common.UserInterestInfo user_interest = 1;</code>
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserInterest()
    {
        return $this->user_interest;
    }

    /**
     * List of audiences based on user interests to be targeted.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.common.UserInterestInfo user_interest = 1;</code>
     *
     * @param  array<\Google\Ads\GoogleAds\V17\Common\UserInterestInfo>|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setUserInterest($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V17\Common\UserInterestInfo::class);
        $this->user_interest = $arr;

        return $this;
    }
}
