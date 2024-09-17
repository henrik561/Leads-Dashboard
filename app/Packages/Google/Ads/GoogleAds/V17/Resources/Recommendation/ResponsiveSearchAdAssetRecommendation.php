<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/resources/recommendation.proto

namespace Google\Ads\GoogleAds\V17\Resources\Recommendation;

use Google\Protobuf\Internal\GPBUtil;

/**
 * The add responsive search ad asset recommendation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.resources.Recommendation.ResponsiveSearchAdAssetRecommendation</code>
 */
class ResponsiveSearchAdAssetRecommendation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The current ad to be updated.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.Ad current_ad = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $current_ad = null;

    /**
     * Output only. The recommended assets. This is populated only with the new
     * headlines and/or descriptions, and is otherwise empty.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.Ad recommended_assets = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $recommended_assets = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type \Google\Ads\GoogleAds\V17\Resources\Ad $current_ad
     *                                              Output only. The current ad to be updated.
     * @type \Google\Ads\GoogleAds\V17\Resources\Ad $recommended_assets
     *                                              Output only. The recommended assets. This is populated only with the new
     *                                              headlines and/or descriptions, and is otherwise empty.
     *                                              }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Resources\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The current ad to be updated.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.Ad current_ad = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return \Google\Ads\GoogleAds\V17\Resources\Ad|null
     */
    public function getCurrentAd()
    {
        return $this->current_ad;
    }

    public function hasCurrentAd()
    {
        return isset($this->current_ad);
    }

    public function clearCurrentAd()
    {
        unset($this->current_ad);
    }

    /**
     * Output only. The current ad to be updated.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.Ad current_ad = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  \Google\Ads\GoogleAds\V17\Resources\Ad  $var
     * @return $this
     */
    public function setCurrentAd($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Resources\Ad::class);
        $this->current_ad = $var;

        return $this;
    }

    /**
     * Output only. The recommended assets. This is populated only with the new
     * headlines and/or descriptions, and is otherwise empty.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.Ad recommended_assets = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return \Google\Ads\GoogleAds\V17\Resources\Ad|null
     */
    public function getRecommendedAssets()
    {
        return $this->recommended_assets;
    }

    public function hasRecommendedAssets()
    {
        return isset($this->recommended_assets);
    }

    public function clearRecommendedAssets()
    {
        unset($this->recommended_assets);
    }

    /**
     * Output only. The recommended assets. This is populated only with the new
     * headlines and/or descriptions, and is otherwise empty.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.Ad recommended_assets = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  \Google\Ads\GoogleAds\V17\Resources\Ad  $var
     * @return $this
     */
    public function setRecommendedAssets($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Resources\Ad::class);
        $this->recommended_assets = $var;

        return $this;
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ResponsiveSearchAdAssetRecommendation::class, \Google\Ads\GoogleAds\V17\Resources\Recommendation_ResponsiveSearchAdAssetRecommendation::class);
