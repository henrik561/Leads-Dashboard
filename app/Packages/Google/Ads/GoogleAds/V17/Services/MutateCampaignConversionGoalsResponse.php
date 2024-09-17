<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/services/campaign_conversion_goal_service.proto

namespace Google\Ads\GoogleAds\V17\Services;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for a campaign conversion goal mutate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.services.MutateCampaignConversionGoalsResponse</code>
 */
class MutateCampaignConversionGoalsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * All results for the mutate.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.MutateCampaignConversionGoalResult results = 1;</code>
     */
    private $results;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type array<\Google\Ads\GoogleAds\V17\Services\MutateCampaignConversionGoalResult>|\Google\Protobuf\Internal\RepeatedField $results
     *                                                                                                                            All results for the mutate.
     *                                                                                                                            }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Services\CampaignConversionGoalService::initOnce();
        parent::__construct($data);
    }

    /**
     * All results for the mutate.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.MutateCampaignConversionGoalResult results = 1;</code>
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * All results for the mutate.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.MutateCampaignConversionGoalResult results = 1;</code>
     *
     * @param  array<\Google\Ads\GoogleAds\V17\Services\MutateCampaignConversionGoalResult>|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V17\Services\MutateCampaignConversionGoalResult::class);
        $this->results = $arr;

        return $this;
    }
}
