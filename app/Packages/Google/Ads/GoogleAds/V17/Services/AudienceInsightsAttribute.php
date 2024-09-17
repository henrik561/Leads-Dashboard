<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/services/audience_insights_service.proto

namespace Google\Ads\GoogleAds\V17\Services;

use Google\Protobuf\Internal\GPBUtil;

/**
 * An audience attribute that can be used to request insights about the
 * audience.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.services.AudienceInsightsAttribute</code>
 */
class AudienceInsightsAttribute extends \Google\Protobuf\Internal\Message
{
    protected $attribute;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type \Google\Ads\GoogleAds\V17\Common\AgeRangeInfo $age_range
     *                                                     An audience attribute defined by an age range.
     * @type \Google\Ads\GoogleAds\V17\Common\GenderInfo $gender
     *                                                   An audience attribute defined by a gender.
     * @type \Google\Ads\GoogleAds\V17\Common\LocationInfo $location
     *                                                     An audience attribute defined by a geographic location.
     * @type \Google\Ads\GoogleAds\V17\Common\UserInterestInfo $user_interest
     *                                                         An Affinity or In-Market audience.
     * @type \Google\Ads\GoogleAds\V17\Services\AudienceInsightsEntity $entity
     *                                                                 An audience attribute defined by interest in a topic represented by a
     *                                                                 Knowledge Graph entity.
     * @type \Google\Ads\GoogleAds\V17\Services\AudienceInsightsCategory $category
     *                                                                   An audience attribute defined by interest in a Product & Service
     *                                                                   category.
     * @type \Google\Ads\GoogleAds\V17\Services\AudienceInsightsDynamicLineup $dynamic_lineup
     *                                                                        A YouTube Dynamic Lineup
     * @type \Google\Ads\GoogleAds\V17\Common\ParentalStatusInfo $parental_status
     *                                                           A Parental Status value (parent, or not a parent).
     * @type \Google\Ads\GoogleAds\V17\Common\IncomeRangeInfo $income_range
     *                                                        A household income percentile range.
     * @type \Google\Ads\GoogleAds\V17\Common\YouTubeChannelInfo $youtube_channel
     *                                                           A YouTube channel.
     *                                                           }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Services\AudienceInsightsService::initOnce();
        parent::__construct($data);
    }

    /**
     * An audience attribute defined by an age range.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.common.AgeRangeInfo age_range = 1;</code>
     *
     * @return \Google\Ads\GoogleAds\V17\Common\AgeRangeInfo|null
     */
    public function getAgeRange()
    {
        return $this->readOneof(1);
    }

    public function hasAgeRange()
    {
        return $this->hasOneof(1);
    }

    /**
     * An audience attribute defined by an age range.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.common.AgeRangeInfo age_range = 1;</code>
     *
     * @param  \Google\Ads\GoogleAds\V17\Common\AgeRangeInfo  $var
     * @return $this
     */
    public function setAgeRange($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Common\AgeRangeInfo::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * An audience attribute defined by a gender.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.common.GenderInfo gender = 2;</code>
     *
     * @return \Google\Ads\GoogleAds\V17\Common\GenderInfo|null
     */
    public function getGender()
    {
        return $this->readOneof(2);
    }

    public function hasGender()
    {
        return $this->hasOneof(2);
    }

    /**
     * An audience attribute defined by a gender.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.common.GenderInfo gender = 2;</code>
     *
     * @param  \Google\Ads\GoogleAds\V17\Common\GenderInfo  $var
     * @return $this
     */
    public function setGender($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Common\GenderInfo::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * An audience attribute defined by a geographic location.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.common.LocationInfo location = 3;</code>
     *
     * @return \Google\Ads\GoogleAds\V17\Common\LocationInfo|null
     */
    public function getLocation()
    {
        return $this->readOneof(3);
    }

    public function hasLocation()
    {
        return $this->hasOneof(3);
    }

    /**
     * An audience attribute defined by a geographic location.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.common.LocationInfo location = 3;</code>
     *
     * @param  \Google\Ads\GoogleAds\V17\Common\LocationInfo  $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Common\LocationInfo::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * An Affinity or In-Market audience.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.common.UserInterestInfo user_interest = 4;</code>
     *
     * @return \Google\Ads\GoogleAds\V17\Common\UserInterestInfo|null
     */
    public function getUserInterest()
    {
        return $this->readOneof(4);
    }

    public function hasUserInterest()
    {
        return $this->hasOneof(4);
    }

    /**
     * An Affinity or In-Market audience.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.common.UserInterestInfo user_interest = 4;</code>
     *
     * @param  \Google\Ads\GoogleAds\V17\Common\UserInterestInfo  $var
     * @return $this
     */
    public function setUserInterest($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Common\UserInterestInfo::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * An audience attribute defined by interest in a topic represented by a
     * Knowledge Graph entity.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.AudienceInsightsEntity entity = 5;</code>
     *
     * @return \Google\Ads\GoogleAds\V17\Services\AudienceInsightsEntity|null
     */
    public function getEntity()
    {
        return $this->readOneof(5);
    }

    public function hasEntity()
    {
        return $this->hasOneof(5);
    }

    /**
     * An audience attribute defined by interest in a topic represented by a
     * Knowledge Graph entity.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.AudienceInsightsEntity entity = 5;</code>
     *
     * @param  \Google\Ads\GoogleAds\V17\Services\AudienceInsightsEntity  $var
     * @return $this
     */
    public function setEntity($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Services\AudienceInsightsEntity::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * An audience attribute defined by interest in a Product & Service
     * category.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.AudienceInsightsCategory category = 6;</code>
     *
     * @return \Google\Ads\GoogleAds\V17\Services\AudienceInsightsCategory|null
     */
    public function getCategory()
    {
        return $this->readOneof(6);
    }

    public function hasCategory()
    {
        return $this->hasOneof(6);
    }

    /**
     * An audience attribute defined by interest in a Product & Service
     * category.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.AudienceInsightsCategory category = 6;</code>
     *
     * @param  \Google\Ads\GoogleAds\V17\Services\AudienceInsightsCategory  $var
     * @return $this
     */
    public function setCategory($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Services\AudienceInsightsCategory::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * A YouTube Dynamic Lineup
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.AudienceInsightsDynamicLineup dynamic_lineup = 7;</code>
     *
     * @return \Google\Ads\GoogleAds\V17\Services\AudienceInsightsDynamicLineup|null
     */
    public function getDynamicLineup()
    {
        return $this->readOneof(7);
    }

    public function hasDynamicLineup()
    {
        return $this->hasOneof(7);
    }

    /**
     * A YouTube Dynamic Lineup
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.AudienceInsightsDynamicLineup dynamic_lineup = 7;</code>
     *
     * @param  \Google\Ads\GoogleAds\V17\Services\AudienceInsightsDynamicLineup  $var
     * @return $this
     */
    public function setDynamicLineup($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Services\AudienceInsightsDynamicLineup::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * A Parental Status value (parent, or not a parent).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.common.ParentalStatusInfo parental_status = 8;</code>
     *
     * @return \Google\Ads\GoogleAds\V17\Common\ParentalStatusInfo|null
     */
    public function getParentalStatus()
    {
        return $this->readOneof(8);
    }

    public function hasParentalStatus()
    {
        return $this->hasOneof(8);
    }

    /**
     * A Parental Status value (parent, or not a parent).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.common.ParentalStatusInfo parental_status = 8;</code>
     *
     * @param  \Google\Ads\GoogleAds\V17\Common\ParentalStatusInfo  $var
     * @return $this
     */
    public function setParentalStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Common\ParentalStatusInfo::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * A household income percentile range.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.common.IncomeRangeInfo income_range = 9;</code>
     *
     * @return \Google\Ads\GoogleAds\V17\Common\IncomeRangeInfo|null
     */
    public function getIncomeRange()
    {
        return $this->readOneof(9);
    }

    public function hasIncomeRange()
    {
        return $this->hasOneof(9);
    }

    /**
     * A household income percentile range.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.common.IncomeRangeInfo income_range = 9;</code>
     *
     * @param  \Google\Ads\GoogleAds\V17\Common\IncomeRangeInfo  $var
     * @return $this
     */
    public function setIncomeRange($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Common\IncomeRangeInfo::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * A YouTube channel.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.common.YouTubeChannelInfo youtube_channel = 10;</code>
     *
     * @return \Google\Ads\GoogleAds\V17\Common\YouTubeChannelInfo|null
     */
    public function getYoutubeChannel()
    {
        return $this->readOneof(10);
    }

    public function hasYoutubeChannel()
    {
        return $this->hasOneof(10);
    }

    /**
     * A YouTube channel.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.common.YouTubeChannelInfo youtube_channel = 10;</code>
     *
     * @param  \Google\Ads\GoogleAds\V17\Common\YouTubeChannelInfo  $var
     * @return $this
     */
    public function setYoutubeChannel($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Common\YouTubeChannelInfo::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getAttribute()
    {
        return $this->whichOneof('attribute');
    }
}
