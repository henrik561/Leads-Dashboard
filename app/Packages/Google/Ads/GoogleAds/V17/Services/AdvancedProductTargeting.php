<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/services/reach_plan_service.proto

namespace Google\Ads\GoogleAds\V17\Services;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Advanced targeting settings for products.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.services.AdvancedProductTargeting</code>
 */
class AdvancedProductTargeting extends \Google\Protobuf\Internal\Message
{
    /**
     * Surface targeting settings for this product.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.SurfaceTargeting surface_targeting_settings = 2;</code>
     */
    protected $surface_targeting_settings = null;

    /**
     * Settings for a Target frequency campaign. Must be set when selecting the
     * TARGET_FREQUENCY product.
     * See https://support.google.com/google-ads/answer/12400225 for more
     * information about Target Frequency campaigns.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.TargetFrequencySettings target_frequency_settings = 3;</code>
     */
    protected $target_frequency_settings = null;

    protected $advanced_targeting;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type \Google\Ads\GoogleAds\V17\Services\SurfaceTargeting $surface_targeting_settings
     *                                                           Surface targeting settings for this product.
     * @type \Google\Ads\GoogleAds\V17\Services\TargetFrequencySettings $target_frequency_settings
     *                                                                  Settings for a Target frequency campaign. Must be set when selecting the
     *                                                                  TARGET_FREQUENCY product.
     *                                                                  See https://support.google.com/google-ads/answer/12400225 for more
     *                                                                  information about Target Frequency campaigns.
     * @type \Google\Ads\GoogleAds\V17\Services\YouTubeSelectSettings $youtube_select_settings
     *                                                                Settings for YouTube Select targeting.
     *                                                                }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Services\ReachPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * Surface targeting settings for this product.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.SurfaceTargeting surface_targeting_settings = 2;</code>
     *
     * @return \Google\Ads\GoogleAds\V17\Services\SurfaceTargeting|null
     */
    public function getSurfaceTargetingSettings()
    {
        return $this->surface_targeting_settings;
    }

    public function hasSurfaceTargetingSettings()
    {
        return isset($this->surface_targeting_settings);
    }

    public function clearSurfaceTargetingSettings()
    {
        unset($this->surface_targeting_settings);
    }

    /**
     * Surface targeting settings for this product.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.SurfaceTargeting surface_targeting_settings = 2;</code>
     *
     * @param  \Google\Ads\GoogleAds\V17\Services\SurfaceTargeting  $var
     * @return $this
     */
    public function setSurfaceTargetingSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Services\SurfaceTargeting::class);
        $this->surface_targeting_settings = $var;

        return $this;
    }

    /**
     * Settings for a Target frequency campaign. Must be set when selecting the
     * TARGET_FREQUENCY product.
     * See https://support.google.com/google-ads/answer/12400225 for more
     * information about Target Frequency campaigns.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.TargetFrequencySettings target_frequency_settings = 3;</code>
     *
     * @return \Google\Ads\GoogleAds\V17\Services\TargetFrequencySettings|null
     */
    public function getTargetFrequencySettings()
    {
        return $this->target_frequency_settings;
    }

    public function hasTargetFrequencySettings()
    {
        return isset($this->target_frequency_settings);
    }

    public function clearTargetFrequencySettings()
    {
        unset($this->target_frequency_settings);
    }

    /**
     * Settings for a Target frequency campaign. Must be set when selecting the
     * TARGET_FREQUENCY product.
     * See https://support.google.com/google-ads/answer/12400225 for more
     * information about Target Frequency campaigns.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.TargetFrequencySettings target_frequency_settings = 3;</code>
     *
     * @param  \Google\Ads\GoogleAds\V17\Services\TargetFrequencySettings  $var
     * @return $this
     */
    public function setTargetFrequencySettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Services\TargetFrequencySettings::class);
        $this->target_frequency_settings = $var;

        return $this;
    }

    /**
     * Settings for YouTube Select targeting.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.YouTubeSelectSettings youtube_select_settings = 1;</code>
     *
     * @return \Google\Ads\GoogleAds\V17\Services\YouTubeSelectSettings|null
     */
    public function getYoutubeSelectSettings()
    {
        return $this->readOneof(1);
    }

    public function hasYoutubeSelectSettings()
    {
        return $this->hasOneof(1);
    }

    /**
     * Settings for YouTube Select targeting.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.YouTubeSelectSettings youtube_select_settings = 1;</code>
     *
     * @param  \Google\Ads\GoogleAds\V17\Services\YouTubeSelectSettings  $var
     * @return $this
     */
    public function setYoutubeSelectSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Services\YouTubeSelectSettings::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getAdvancedTargeting()
    {
        return $this->whichOneof('advanced_targeting');
    }
}
