<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/resources/campaign.proto

namespace Google\Ads\GoogleAds\V17\Resources\Campaign;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Settings for LocalServicesCampaign subresource.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.resources.Campaign.LocalServicesCampaignSettings</code>
 */
class LocalServicesCampaignSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Categorical level bids associated with MANUAL_CPA bidding strategy.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.resources.Campaign.CategoryBid category_bids = 1;</code>
     */
    private $category_bids;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type array<\Google\Ads\GoogleAds\V17\Resources\Campaign\CategoryBid>|\Google\Protobuf\Internal\RepeatedField $category_bids
     *                                                                                                               Categorical level bids associated with MANUAL_CPA bidding strategy.
     *                                                                                                               }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Resources\Campaign::initOnce();
        parent::__construct($data);
    }

    /**
     * Categorical level bids associated with MANUAL_CPA bidding strategy.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.resources.Campaign.CategoryBid category_bids = 1;</code>
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCategoryBids()
    {
        return $this->category_bids;
    }

    /**
     * Categorical level bids associated with MANUAL_CPA bidding strategy.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.resources.Campaign.CategoryBid category_bids = 1;</code>
     *
     * @param  array<\Google\Ads\GoogleAds\V17\Resources\Campaign\CategoryBid>|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setCategoryBids($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V17\Resources\Campaign\CategoryBid::class);
        $this->category_bids = $arr;

        return $this;
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LocalServicesCampaignSettings::class, \Google\Ads\GoogleAds\V17\Resources\Campaign_LocalServicesCampaignSettings::class);
