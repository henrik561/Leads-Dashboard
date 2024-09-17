<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/services/audience_insights_service.proto

namespace Google\Ads\GoogleAds\V17\Services;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [AudienceInsightsService.GenerateAudienceCompositionInsights][google.ads.googleads.v17.services.AudienceInsightsService.GenerateAudienceCompositionInsights].
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.services.GenerateAudienceCompositionInsightsResponse</code>
 */
class GenerateAudienceCompositionInsightsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The contents of the insights report, organized into sections.
     * Each section is associated with one of the AudienceInsightsDimension values
     * in the request. There may be more than one section per dimension.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.AudienceCompositionSection sections = 1;</code>
     */
    private $sections;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type array<\Google\Ads\GoogleAds\V17\Services\AudienceCompositionSection>|\Google\Protobuf\Internal\RepeatedField $sections
     *                                                                                                                    The contents of the insights report, organized into sections.
     *                                                                                                                    Each section is associated with one of the AudienceInsightsDimension values
     *                                                                                                                    in the request. There may be more than one section per dimension.
     *                                                                                                                    }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Services\AudienceInsightsService::initOnce();
        parent::__construct($data);
    }

    /**
     * The contents of the insights report, organized into sections.
     * Each section is associated with one of the AudienceInsightsDimension values
     * in the request. There may be more than one section per dimension.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.AudienceCompositionSection sections = 1;</code>
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSections()
    {
        return $this->sections;
    }

    /**
     * The contents of the insights report, organized into sections.
     * Each section is associated with one of the AudienceInsightsDimension values
     * in the request. There may be more than one section per dimension.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.AudienceCompositionSection sections = 1;</code>
     *
     * @param  array<\Google\Ads\GoogleAds\V17\Services\AudienceCompositionSection>|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setSections($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V17\Services\AudienceCompositionSection::class);
        $this->sections = $arr;

        return $this;
    }
}
