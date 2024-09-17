<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/common/ad_asset.proto

namespace Google\Ads\GoogleAds\V17\Common;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains info fields for AdVideoAssets.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.common.AdVideoAssetInfo</code>
 */
class AdVideoAssetInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * List of inventory preferences for this AdVideoAsset. This field can only be
     * set for DiscoveryVideoResponsiveAd. The video assets with an inventory
     * asset preference set will be preferred over other videos from the same ad
     * during serving time. For example, consider this ad being served for a
     * specific inventory. The server will first try to match an eligible video
     * with a matching preference for that inventory. Videos with no preferences
     * are chosen only when a video with matching preference and eligible for a
     * given ad slot can be found.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v17.common.AdVideoAssetInventoryPreferences ad_video_asset_inventory_preferences = 1;</code>
     */
    protected $ad_video_asset_inventory_preferences = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type \Google\Ads\GoogleAds\V17\Common\AdVideoAssetInventoryPreferences $ad_video_asset_inventory_preferences
     *                                                                         List of inventory preferences for this AdVideoAsset. This field can only be
     *                                                                         set for DiscoveryVideoResponsiveAd. The video assets with an inventory
     *                                                                         asset preference set will be preferred over other videos from the same ad
     *                                                                         during serving time. For example, consider this ad being served for a
     *                                                                         specific inventory. The server will first try to match an eligible video
     *                                                                         with a matching preference for that inventory. Videos with no preferences
     *                                                                         are chosen only when a video with matching preference and eligible for a
     *                                                                         given ad slot can be found.
     *                                                                         }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Common\AdAsset::initOnce();
        parent::__construct($data);
    }

    /**
     * List of inventory preferences for this AdVideoAsset. This field can only be
     * set for DiscoveryVideoResponsiveAd. The video assets with an inventory
     * asset preference set will be preferred over other videos from the same ad
     * during serving time. For example, consider this ad being served for a
     * specific inventory. The server will first try to match an eligible video
     * with a matching preference for that inventory. Videos with no preferences
     * are chosen only when a video with matching preference and eligible for a
     * given ad slot can be found.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v17.common.AdVideoAssetInventoryPreferences ad_video_asset_inventory_preferences = 1;</code>
     *
     * @return \Google\Ads\GoogleAds\V17\Common\AdVideoAssetInventoryPreferences|null
     */
    public function getAdVideoAssetInventoryPreferences()
    {
        return $this->ad_video_asset_inventory_preferences;
    }

    public function hasAdVideoAssetInventoryPreferences()
    {
        return isset($this->ad_video_asset_inventory_preferences);
    }

    public function clearAdVideoAssetInventoryPreferences()
    {
        unset($this->ad_video_asset_inventory_preferences);
    }

    /**
     * List of inventory preferences for this AdVideoAsset. This field can only be
     * set for DiscoveryVideoResponsiveAd. The video assets with an inventory
     * asset preference set will be preferred over other videos from the same ad
     * during serving time. For example, consider this ad being served for a
     * specific inventory. The server will first try to match an eligible video
     * with a matching preference for that inventory. Videos with no preferences
     * are chosen only when a video with matching preference and eligible for a
     * given ad slot can be found.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v17.common.AdVideoAssetInventoryPreferences ad_video_asset_inventory_preferences = 1;</code>
     *
     * @param  \Google\Ads\GoogleAds\V17\Common\AdVideoAssetInventoryPreferences  $var
     * @return $this
     */
    public function setAdVideoAssetInventoryPreferences($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Common\AdVideoAssetInventoryPreferences::class);
        $this->ad_video_asset_inventory_preferences = $var;

        return $this;
    }
}
