<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/resources/recommendation.proto

namespace Google\Ads\GoogleAds\V17\Resources\Recommendation;

use Google\Protobuf\Internal\GPBUtil;

/**
 * The improve Demand Gen ad strength recommendation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.resources.Recommendation.ImproveDemandGenAdStrengthRecommendation</code>
 */
class ImproveDemandGenAdStrengthRecommendation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the ad that can be improved.
     *
     * Generated from protobuf field <code>string ad = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $ad = '';

    /**
     * Output only. The current ad strength.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.AdStrengthEnum.AdStrength ad_strength = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $ad_strength = 0;

    /**
     * Output only. A list of recommendations to improve the ad strength.
     *
     * Generated from protobuf field <code>repeated string demand_gen_asset_action_items = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $demand_gen_asset_action_items;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type string $ad
     *              Output only. The resource name of the ad that can be improved.
     * @type int $ad_strength
     *           Output only. The current ad strength.
     * @type array<string>|\Google\Protobuf\Internal\RepeatedField $demand_gen_asset_action_items
     *                                                             Output only. A list of recommendations to improve the ad strength.
     *                                                             }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Resources\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the ad that can be improved.
     *
     * Generated from protobuf field <code>string ad = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return string
     */
    public function getAd()
    {
        return $this->ad;
    }

    /**
     * Output only. The resource name of the ad that can be improved.
     *
     * Generated from protobuf field <code>string ad = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setAd($var)
    {
        GPBUtil::checkString($var, true);
        $this->ad = $var;

        return $this;
    }

    /**
     * Output only. The current ad strength.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.AdStrengthEnum.AdStrength ad_strength = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return int
     */
    public function getAdStrength()
    {
        return $this->ad_strength;
    }

    /**
     * Output only. The current ad strength.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.AdStrengthEnum.AdStrength ad_strength = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setAdStrength($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V17\Enums\AdStrengthEnum\AdStrength::class);
        $this->ad_strength = $var;

        return $this;
    }

    /**
     * Output only. A list of recommendations to improve the ad strength.
     *
     * Generated from protobuf field <code>repeated string demand_gen_asset_action_items = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDemandGenAssetActionItems()
    {
        return $this->demand_gen_asset_action_items;
    }

    /**
     * Output only. A list of recommendations to improve the ad strength.
     *
     * Generated from protobuf field <code>repeated string demand_gen_asset_action_items = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  array<string>|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setDemandGenAssetActionItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->demand_gen_asset_action_items = $arr;

        return $this;
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ImproveDemandGenAdStrengthRecommendation::class, \Google\Ads\GoogleAds\V17\Resources\Recommendation_ImproveDemandGenAdStrengthRecommendation::class);
