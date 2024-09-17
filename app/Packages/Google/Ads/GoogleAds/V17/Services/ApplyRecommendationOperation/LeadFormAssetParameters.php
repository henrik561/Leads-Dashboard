<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/services/recommendation_service.proto

namespace Google\Ads\GoogleAds\V17\Services\ApplyRecommendationOperation;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Parameters to use when applying a lead form asset recommendation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.services.ApplyRecommendationOperation.LeadFormAssetParameters</code>
 */
class LeadFormAssetParameters extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Lead form assets to be added. This is a required field.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.ApplyRecommendationOperation.AdAssetApplyParameters ad_asset_apply_parameters = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $ad_asset_apply_parameters = null;

    /**
     * If true, the "Submit Lead Form" goal will be set on the target campaign.
     * As a result, ads will be shown as lead form creative ads. If false,
     * the "Submit Lead Form" goal will not be set on the campaign and ads will
     * contain lead form assets.
     *
     * Generated from protobuf field <code>optional bool set_submit_lead_form_asset_campaign_goal = 2;</code>
     */
    protected $set_submit_lead_form_asset_campaign_goal = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type \Google\Ads\GoogleAds\V17\Services\ApplyRecommendationOperation\AdAssetApplyParameters $ad_asset_apply_parameters
     *                                                                                              Required. Lead form assets to be added. This is a required field.
     * @type bool $set_submit_lead_form_asset_campaign_goal
     *            If true, the "Submit Lead Form" goal will be set on the target campaign.
     *            As a result, ads will be shown as lead form creative ads. If false,
     *            the "Submit Lead Form" goal will not be set on the campaign and ads will
     *            contain lead form assets.
     *            }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Services\RecommendationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Lead form assets to be added. This is a required field.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.ApplyRecommendationOperation.AdAssetApplyParameters ad_asset_apply_parameters = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     *
     * @return \Google\Ads\GoogleAds\V17\Services\ApplyRecommendationOperation\AdAssetApplyParameters|null
     */
    public function getAdAssetApplyParameters()
    {
        return $this->ad_asset_apply_parameters;
    }

    public function hasAdAssetApplyParameters()
    {
        return isset($this->ad_asset_apply_parameters);
    }

    public function clearAdAssetApplyParameters()
    {
        unset($this->ad_asset_apply_parameters);
    }

    /**
     * Required. Lead form assets to be added. This is a required field.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.ApplyRecommendationOperation.AdAssetApplyParameters ad_asset_apply_parameters = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     *
     * @param  \Google\Ads\GoogleAds\V17\Services\ApplyRecommendationOperation\AdAssetApplyParameters  $var
     * @return $this
     */
    public function setAdAssetApplyParameters($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Services\ApplyRecommendationOperation\AdAssetApplyParameters::class);
        $this->ad_asset_apply_parameters = $var;

        return $this;
    }

    /**
     * If true, the "Submit Lead Form" goal will be set on the target campaign.
     * As a result, ads will be shown as lead form creative ads. If false,
     * the "Submit Lead Form" goal will not be set on the campaign and ads will
     * contain lead form assets.
     *
     * Generated from protobuf field <code>optional bool set_submit_lead_form_asset_campaign_goal = 2;</code>
     *
     * @return bool
     */
    public function getSetSubmitLeadFormAssetCampaignGoal()
    {
        return isset($this->set_submit_lead_form_asset_campaign_goal) ? $this->set_submit_lead_form_asset_campaign_goal : false;
    }

    public function hasSetSubmitLeadFormAssetCampaignGoal()
    {
        return isset($this->set_submit_lead_form_asset_campaign_goal);
    }

    public function clearSetSubmitLeadFormAssetCampaignGoal()
    {
        unset($this->set_submit_lead_form_asset_campaign_goal);
    }

    /**
     * If true, the "Submit Lead Form" goal will be set on the target campaign.
     * As a result, ads will be shown as lead form creative ads. If false,
     * the "Submit Lead Form" goal will not be set on the campaign and ads will
     * contain lead form assets.
     *
     * Generated from protobuf field <code>optional bool set_submit_lead_form_asset_campaign_goal = 2;</code>
     *
     * @param  bool  $var
     * @return $this
     */
    public function setSetSubmitLeadFormAssetCampaignGoal($var)
    {
        GPBUtil::checkBool($var);
        $this->set_submit_lead_form_asset_campaign_goal = $var;

        return $this;
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LeadFormAssetParameters::class, \Google\Ads\GoogleAds\V17\Services\ApplyRecommendationOperation_LeadFormAssetParameters::class);
