<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/services/audience_insights_service.proto

namespace Google\Ads\GoogleAds\V17\Services;

use Google\Protobuf\Internal\GPBUtil;

/**
 * A list of audience attributes of a single dimension, including their overlap
 * with a primary attribute, returned as part of a
 * [GenerateAudienceOverlapInsightsResponse][google.ads.googleads.v17.services.GenerateAudienceOverlapInsightsResponse].
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.services.DimensionOverlapResult</code>
 */
class DimensionOverlapResult extends \Google\Protobuf\Internal\Message
{
    /**
     * The dimension of all the attributes in this section.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.AudienceInsightsDimensionEnum.AudienceInsightsDimension dimension = 1;</code>
     */
    protected $dimension = 0;

    /**
     * The attributes and their overlap with the primary attribute.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.AudienceOverlapItem items = 2;</code>
     */
    private $items;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type int $dimension
     *           The dimension of all the attributes in this section.
     * @type array<\Google\Ads\GoogleAds\V17\Services\AudienceOverlapItem>|\Google\Protobuf\Internal\RepeatedField $items
     *                                                                                                             The attributes and their overlap with the primary attribute.
     *                                                                                                             }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Services\AudienceInsightsService::initOnce();
        parent::__construct($data);
    }

    /**
     * The dimension of all the attributes in this section.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.AudienceInsightsDimensionEnum.AudienceInsightsDimension dimension = 1;</code>
     *
     * @return int
     */
    public function getDimension()
    {
        return $this->dimension;
    }

    /**
     * The dimension of all the attributes in this section.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.AudienceInsightsDimensionEnum.AudienceInsightsDimension dimension = 1;</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setDimension($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V17\Enums\AudienceInsightsDimensionEnum\AudienceInsightsDimension::class);
        $this->dimension = $var;

        return $this;
    }

    /**
     * The attributes and their overlap with the primary attribute.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.AudienceOverlapItem items = 2;</code>
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * The attributes and their overlap with the primary attribute.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.AudienceOverlapItem items = 2;</code>
     *
     * @param  array<\Google\Ads\GoogleAds\V17\Services\AudienceOverlapItem>|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V17\Services\AudienceOverlapItem::class);
        $this->items = $arr;

        return $this;
    }
}
