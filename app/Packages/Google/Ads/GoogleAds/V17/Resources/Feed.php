<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/resources/feed.proto

namespace Google\Ads\GoogleAds\V17\Resources;

use Google\Protobuf\Internal\GPBUtil;

/**
 * A feed.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.resources.Feed</code>
 */
class Feed extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the feed.
     * Feed resource names have the form:
     * `customers/{customer_id}/feeds/{feed_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';

    /**
     * Output only. The ID of the feed.
     * This field is read-only.
     *
     * Generated from protobuf field <code>optional int64 id = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = null;

    /**
     * Immutable. Name of the feed. Required.
     *
     * Generated from protobuf field <code>optional string name = 12 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $name = null;

    /**
     * The Feed's attributes. Required on CREATE, unless
     * system_feed_generation_data is provided, in which case Google Ads will
     * update the feed with the correct attributes.
     * Disallowed on UPDATE. Use attribute_operations to add new attributes.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.resources.FeedAttribute attributes = 4;</code>
     */
    private $attributes;

    /**
     * The list of operations changing the feed attributes. Attributes can only
     * be added, not removed.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.resources.FeedAttributeOperation attribute_operations = 9;</code>
     */
    private $attribute_operations;

    /**
     * Immutable. Specifies who manages the FeedAttributes for the Feed.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.FeedOriginEnum.FeedOrigin origin = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $origin = 0;

    /**
     * Output only. Status of the feed.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.FeedStatusEnum.FeedStatus status = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status = 0;

    protected $system_feed_generation_data;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type string $resource_name
     *              Immutable. The resource name of the feed.
     *              Feed resource names have the form:
     *              `customers/{customer_id}/feeds/{feed_id}`
     * @type int|string $id
     *                  Output only. The ID of the feed.
     *                  This field is read-only.
     * @type string $name
     *              Immutable. Name of the feed. Required.
     * @type array<\Google\Ads\GoogleAds\V17\Resources\FeedAttribute>|\Google\Protobuf\Internal\RepeatedField $attributes
     *                                                                                                        The Feed's attributes. Required on CREATE, unless
     *                                                                                                        system_feed_generation_data is provided, in which case Google Ads will
     *                                                                                                        update the feed with the correct attributes.
     *                                                                                                        Disallowed on UPDATE. Use attribute_operations to add new attributes.
     * @type array<\Google\Ads\GoogleAds\V17\Resources\FeedAttributeOperation>|\Google\Protobuf\Internal\RepeatedField $attribute_operations
     *                                                                                                                 The list of operations changing the feed attributes. Attributes can only
     *                                                                                                                 be added, not removed.
     * @type int $origin
     *           Immutable. Specifies who manages the FeedAttributes for the Feed.
     * @type int $status
     *           Output only. Status of the feed.
     *           This field is read-only.
     * @type \Google\Ads\GoogleAds\V17\Resources\Feed\PlacesLocationFeedData $places_location_feed_data
     *                                                                       Data used to configure a location feed populated from Business Profile.
     * @type \Google\Ads\GoogleAds\V17\Resources\Feed\AffiliateLocationFeedData $affiliate_location_feed_data
     *                                                                          Data used to configure an affiliate location feed populated with
     *                                                                          the specified chains.
     *                                                                          }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Resources\Feed::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the feed.
     * Feed resource names have the form:
     * `customers/{customer_id}/feeds/{feed_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     *
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the feed.
     * Feed resource names have the form:
     * `customers/{customer_id}/feeds/{feed_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
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
     * Output only. The ID of the feed.
     * This field is read-only.
     *
     * Generated from protobuf field <code>optional int64 id = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * Output only. The ID of the feed.
     * This field is read-only.
     *
     * Generated from protobuf field <code>optional int64 id = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Immutable. Name of the feed. Required.
     *
     * Generated from protobuf field <code>optional string name = 12 [(.google.api.field_behavior) = IMMUTABLE];</code>
     *
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * Immutable. Name of the feed. Required.
     *
     * Generated from protobuf field <code>optional string name = 12 [(.google.api.field_behavior) = IMMUTABLE];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, true);
        $this->name = $var;

        return $this;
    }

    /**
     * The Feed's attributes. Required on CREATE, unless
     * system_feed_generation_data is provided, in which case Google Ads will
     * update the feed with the correct attributes.
     * Disallowed on UPDATE. Use attribute_operations to add new attributes.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.resources.FeedAttribute attributes = 4;</code>
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * The Feed's attributes. Required on CREATE, unless
     * system_feed_generation_data is provided, in which case Google Ads will
     * update the feed with the correct attributes.
     * Disallowed on UPDATE. Use attribute_operations to add new attributes.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.resources.FeedAttribute attributes = 4;</code>
     *
     * @param  array<\Google\Ads\GoogleAds\V17\Resources\FeedAttribute>|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setAttributes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V17\Resources\FeedAttribute::class);
        $this->attributes = $arr;

        return $this;
    }

    /**
     * The list of operations changing the feed attributes. Attributes can only
     * be added, not removed.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.resources.FeedAttributeOperation attribute_operations = 9;</code>
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttributeOperations()
    {
        return $this->attribute_operations;
    }

    /**
     * The list of operations changing the feed attributes. Attributes can only
     * be added, not removed.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.resources.FeedAttributeOperation attribute_operations = 9;</code>
     *
     * @param  array<\Google\Ads\GoogleAds\V17\Resources\FeedAttributeOperation>|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setAttributeOperations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V17\Resources\FeedAttributeOperation::class);
        $this->attribute_operations = $arr;

        return $this;
    }

    /**
     * Immutable. Specifies who manages the FeedAttributes for the Feed.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.FeedOriginEnum.FeedOrigin origin = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     *
     * @return int
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Immutable. Specifies who manages the FeedAttributes for the Feed.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.FeedOriginEnum.FeedOrigin origin = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setOrigin($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V17\Enums\FeedOriginEnum\FeedOrigin::class);
        $this->origin = $var;

        return $this;
    }

    /**
     * Output only. Status of the feed.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.FeedStatusEnum.FeedStatus status = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Output only. Status of the feed.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.FeedStatusEnum.FeedStatus status = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V17\Enums\FeedStatusEnum\FeedStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Data used to configure a location feed populated from Business Profile.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.Feed.PlacesLocationFeedData places_location_feed_data = 6;</code>
     *
     * @return \Google\Ads\GoogleAds\V17\Resources\Feed\PlacesLocationFeedData|null
     */
    public function getPlacesLocationFeedData()
    {
        return $this->readOneof(6);
    }

    public function hasPlacesLocationFeedData()
    {
        return $this->hasOneof(6);
    }

    /**
     * Data used to configure a location feed populated from Business Profile.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.Feed.PlacesLocationFeedData places_location_feed_data = 6;</code>
     *
     * @param  \Google\Ads\GoogleAds\V17\Resources\Feed\PlacesLocationFeedData  $var
     * @return $this
     */
    public function setPlacesLocationFeedData($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Resources\Feed\PlacesLocationFeedData::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Data used to configure an affiliate location feed populated with
     * the specified chains.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.Feed.AffiliateLocationFeedData affiliate_location_feed_data = 7;</code>
     *
     * @return \Google\Ads\GoogleAds\V17\Resources\Feed\AffiliateLocationFeedData|null
     */
    public function getAffiliateLocationFeedData()
    {
        return $this->readOneof(7);
    }

    public function hasAffiliateLocationFeedData()
    {
        return $this->hasOneof(7);
    }

    /**
     * Data used to configure an affiliate location feed populated with
     * the specified chains.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.Feed.AffiliateLocationFeedData affiliate_location_feed_data = 7;</code>
     *
     * @param  \Google\Ads\GoogleAds\V17\Resources\Feed\AffiliateLocationFeedData  $var
     * @return $this
     */
    public function setAffiliateLocationFeedData($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Resources\Feed\AffiliateLocationFeedData::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSystemFeedGenerationData()
    {
        return $this->whichOneof('system_feed_generation_data');
    }
}
