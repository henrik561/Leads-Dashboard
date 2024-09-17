<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/services/campaign_extension_setting_service.proto

namespace Google\Ads\GoogleAds\V17\Services;

use Google\Protobuf\Internal\GPBUtil;

/**
 * The result for the campaign extension setting mutate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.services.MutateCampaignExtensionSettingResult</code>
 */
class MutateCampaignExtensionSettingResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';

    /**
     * The mutated campaign extension setting with only mutable fields after
     * mutate. The field will only be returned when response_content_type is set
     * to "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.CampaignExtensionSetting campaign_extension_setting = 2;</code>
     */
    protected $campaign_extension_setting = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type string $resource_name
     *              Returned for successful operations.
     * @type \Google\Ads\GoogleAds\V17\Resources\CampaignExtensionSetting $campaign_extension_setting
     *                                                                    The mutated campaign extension setting with only mutable fields after
     *                                                                    mutate. The field will only be returned when response_content_type is set
     *                                                                    to "MUTABLE_RESOURCE".
     *                                                                    }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Services\CampaignExtensionSettingService::initOnce();
        parent::__construct($data);
    }

    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     *
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, true);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * The mutated campaign extension setting with only mutable fields after
     * mutate. The field will only be returned when response_content_type is set
     * to "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.CampaignExtensionSetting campaign_extension_setting = 2;</code>
     *
     * @return \Google\Ads\GoogleAds\V17\Resources\CampaignExtensionSetting|null
     */
    public function getCampaignExtensionSetting()
    {
        return $this->campaign_extension_setting;
    }

    public function hasCampaignExtensionSetting()
    {
        return isset($this->campaign_extension_setting);
    }

    public function clearCampaignExtensionSetting()
    {
        unset($this->campaign_extension_setting);
    }

    /**
     * The mutated campaign extension setting with only mutable fields after
     * mutate. The field will only be returned when response_content_type is set
     * to "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.CampaignExtensionSetting campaign_extension_setting = 2;</code>
     *
     * @param  \Google\Ads\GoogleAds\V17\Resources\CampaignExtensionSetting  $var
     * @return $this
     */
    public function setCampaignExtensionSetting($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Resources\CampaignExtensionSetting::class);
        $this->campaign_extension_setting = $var;

        return $this;
    }
}
