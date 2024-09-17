<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/services/audience_insights_service.proto

namespace Google\Ads\GoogleAds\V17\Services;

use Google\Protobuf\Internal\GPBUtil;

/**
 * A list of AudienceInsightsAttributes.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.services.InsightsAudienceAttributeGroup</code>
 */
class InsightsAudienceAttributeGroup extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A collection of audience attributes to be combined with logical
     * OR. Attributes need not all be the same dimension.  Only Knowledge Graph
     * entities, Product & Service Categories, and Affinity and In-Market
     * audiences are supported in this context.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.AudienceInsightsAttribute attributes = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $attributes;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type array<\Google\Ads\GoogleAds\V17\Services\AudienceInsightsAttribute>|\Google\Protobuf\Internal\RepeatedField $attributes
     *                                                                                                                   Required. A collection of audience attributes to be combined with logical
     *                                                                                                                   OR. Attributes need not all be the same dimension.  Only Knowledge Graph
     *                                                                                                                   entities, Product & Service Categories, and Affinity and In-Market
     *                                                                                                                   audiences are supported in this context.
     *                                                                                                                   }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Services\AudienceInsightsService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A collection of audience attributes to be combined with logical
     * OR. Attributes need not all be the same dimension.  Only Knowledge Graph
     * entities, Product & Service Categories, and Affinity and In-Market
     * audiences are supported in this context.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.AudienceInsightsAttribute attributes = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Required. A collection of audience attributes to be combined with logical
     * OR. Attributes need not all be the same dimension.  Only Knowledge Graph
     * entities, Product & Service Categories, and Affinity and In-Market
     * audiences are supported in this context.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.AudienceInsightsAttribute attributes = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     *
     * @param  array<\Google\Ads\GoogleAds\V17\Services\AudienceInsightsAttribute>|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setAttributes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V17\Services\AudienceInsightsAttribute::class);
        $this->attributes = $arr;

        return $this;
    }
}
