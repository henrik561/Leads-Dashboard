<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/resources/change_event.proto

namespace Google\Ads\GoogleAds\V17\Resources;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes the granular change of returned resources of certain resource
 * types. Changes made through the UI or API in the past 30 days are included.
 * Previous and new values of the changed fields are shown. ChangeEvent could
 * have up to 3 minutes delay to reflect a new change.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.resources.ChangeEvent</code>
 */
class ChangeEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the change event.
     * Change event resource names have the form:
     * `customers/{customer_id}/changeEvents/{timestamp_micros}~{command_index}~{mutate_index}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';

    /**
     * Output only. Time at which the change was committed on this resource.
     *
     * Generated from protobuf field <code>string change_date_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $change_date_time = '';

    /**
     * Output only. The type of the changed resource. This dictates what resource
     * will be set in old_resource and new_resource.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.ChangeEventResourceTypeEnum.ChangeEventResourceType change_resource_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $change_resource_type = 0;

    /**
     * Output only. The Simply resource this change occurred on.
     *
     * Generated from protobuf field <code>string change_resource_name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $change_resource_name = '';

    /**
     * Output only. Where the change was made through.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.ChangeClientTypeEnum.ChangeClientType client_type = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $client_type = 0;

    /**
     * Output only. The email of the user who made this change.
     *
     * Generated from protobuf field <code>string user_email = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $user_email = '';

    /**
     * Output only. The old resource before the change. Only changed fields will
     * be populated.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.ChangeEvent.ChangedResource old_resource = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $old_resource = null;

    /**
     * Output only. The new resource after the change. Only changed fields will be
     * populated.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.ChangeEvent.ChangedResource new_resource = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $new_resource = null;

    /**
     * Output only. The operation on the changed resource.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.ResourceChangeOperationEnum.ResourceChangeOperation resource_change_operation = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $resource_change_operation = 0;

    /**
     * Output only. A list of fields that are changed in the returned resource.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask changed_fields = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $changed_fields = null;

    /**
     * Output only. The Campaign affected by this change.
     *
     * Generated from protobuf field <code>string campaign = 11 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $campaign = '';

    /**
     * Output only. The AdGroup affected by this change.
     *
     * Generated from protobuf field <code>string ad_group = 12 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $ad_group = '';

    /**
     * Output only. The Feed affected by this change.
     *
     * Generated from protobuf field <code>string feed = 13 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $feed = '';

    /**
     * Output only. The FeedItem affected by this change.
     *
     * Generated from protobuf field <code>string feed_item = 14 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $feed_item = '';

    /**
     * Output only. The Asset affected by this change.
     *
     * Generated from protobuf field <code>string asset = 20 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $asset = '';

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type string $resource_name
     *              Output only. The resource name of the change event.
     *              Change event resource names have the form:
     *              `customers/{customer_id}/changeEvents/{timestamp_micros}~{command_index}~{mutate_index}`
     * @type string $change_date_time
     *              Output only. Time at which the change was committed on this resource.
     * @type int $change_resource_type
     *           Output only. The type of the changed resource. This dictates what resource
     *           will be set in old_resource and new_resource.
     * @type string $change_resource_name
     *              Output only. The Simply resource this change occurred on.
     * @type int $client_type
     *           Output only. Where the change was made through.
     * @type string $user_email
     *              Output only. The email of the user who made this change.
     * @type \Google\Ads\GoogleAds\V17\Resources\ChangeEvent\ChangedResource $old_resource
     *                                                                       Output only. The old resource before the change. Only changed fields will
     *                                                                       be populated.
     * @type \Google\Ads\GoogleAds\V17\Resources\ChangeEvent\ChangedResource $new_resource
     *                                                                       Output only. The new resource after the change. Only changed fields will be
     *                                                                       populated.
     * @type int $resource_change_operation
     *           Output only. The operation on the changed resource.
     * @type \Google\Protobuf\FieldMask $changed_fields
     *                                  Output only. A list of fields that are changed in the returned resource.
     * @type string $campaign
     *              Output only. The Campaign affected by this change.
     * @type string $ad_group
     *              Output only. The AdGroup affected by this change.
     * @type string $feed
     *              Output only. The Feed affected by this change.
     * @type string $feed_item
     *              Output only. The FeedItem affected by this change.
     * @type string $asset
     *              Output only. The Asset affected by this change.
     *              }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Resources\ChangeEvent::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the change event.
     * Change event resource names have the form:
     * `customers/{customer_id}/changeEvents/{timestamp_micros}~{command_index}~{mutate_index}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     *
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the change event.
     * Change event resource names have the form:
     * `customers/{customer_id}/changeEvents/{timestamp_micros}~{command_index}~{mutate_index}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
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
     * Output only. Time at which the change was committed on this resource.
     *
     * Generated from protobuf field <code>string change_date_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return string
     */
    public function getChangeDateTime()
    {
        return $this->change_date_time;
    }

    /**
     * Output only. Time at which the change was committed on this resource.
     *
     * Generated from protobuf field <code>string change_date_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setChangeDateTime($var)
    {
        GPBUtil::checkString($var, true);
        $this->change_date_time = $var;

        return $this;
    }

    /**
     * Output only. The type of the changed resource. This dictates what resource
     * will be set in old_resource and new_resource.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.ChangeEventResourceTypeEnum.ChangeEventResourceType change_resource_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return int
     */
    public function getChangeResourceType()
    {
        return $this->change_resource_type;
    }

    /**
     * Output only. The type of the changed resource. This dictates what resource
     * will be set in old_resource and new_resource.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.ChangeEventResourceTypeEnum.ChangeEventResourceType change_resource_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setChangeResourceType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V17\Enums\ChangeEventResourceTypeEnum\ChangeEventResourceType::class);
        $this->change_resource_type = $var;

        return $this;
    }

    /**
     * Output only. The Simply resource this change occurred on.
     *
     * Generated from protobuf field <code>string change_resource_name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return string
     */
    public function getChangeResourceName()
    {
        return $this->change_resource_name;
    }

    /**
     * Output only. The Simply resource this change occurred on.
     *
     * Generated from protobuf field <code>string change_resource_name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setChangeResourceName($var)
    {
        GPBUtil::checkString($var, true);
        $this->change_resource_name = $var;

        return $this;
    }

    /**
     * Output only. Where the change was made through.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.ChangeClientTypeEnum.ChangeClientType client_type = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return int
     */
    public function getClientType()
    {
        return $this->client_type;
    }

    /**
     * Output only. Where the change was made through.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.ChangeClientTypeEnum.ChangeClientType client_type = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setClientType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V17\Enums\ChangeClientTypeEnum\ChangeClientType::class);
        $this->client_type = $var;

        return $this;
    }

    /**
     * Output only. The email of the user who made this change.
     *
     * Generated from protobuf field <code>string user_email = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return string
     */
    public function getUserEmail()
    {
        return $this->user_email;
    }

    /**
     * Output only. The email of the user who made this change.
     *
     * Generated from protobuf field <code>string user_email = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setUserEmail($var)
    {
        GPBUtil::checkString($var, true);
        $this->user_email = $var;

        return $this;
    }

    /**
     * Output only. The old resource before the change. Only changed fields will
     * be populated.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.ChangeEvent.ChangedResource old_resource = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return \Google\Ads\GoogleAds\V17\Resources\ChangeEvent\ChangedResource|null
     */
    public function getOldResource()
    {
        return $this->old_resource;
    }

    public function hasOldResource()
    {
        return isset($this->old_resource);
    }

    public function clearOldResource()
    {
        unset($this->old_resource);
    }

    /**
     * Output only. The old resource before the change. Only changed fields will
     * be populated.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.ChangeEvent.ChangedResource old_resource = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  \Google\Ads\GoogleAds\V17\Resources\ChangeEvent\ChangedResource  $var
     * @return $this
     */
    public function setOldResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Resources\ChangeEvent\ChangedResource::class);
        $this->old_resource = $var;

        return $this;
    }

    /**
     * Output only. The new resource after the change. Only changed fields will be
     * populated.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.ChangeEvent.ChangedResource new_resource = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return \Google\Ads\GoogleAds\V17\Resources\ChangeEvent\ChangedResource|null
     */
    public function getNewResource()
    {
        return $this->new_resource;
    }

    public function hasNewResource()
    {
        return isset($this->new_resource);
    }

    public function clearNewResource()
    {
        unset($this->new_resource);
    }

    /**
     * Output only. The new resource after the change. Only changed fields will be
     * populated.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.ChangeEvent.ChangedResource new_resource = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  \Google\Ads\GoogleAds\V17\Resources\ChangeEvent\ChangedResource  $var
     * @return $this
     */
    public function setNewResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Resources\ChangeEvent\ChangedResource::class);
        $this->new_resource = $var;

        return $this;
    }

    /**
     * Output only. The operation on the changed resource.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.ResourceChangeOperationEnum.ResourceChangeOperation resource_change_operation = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return int
     */
    public function getResourceChangeOperation()
    {
        return $this->resource_change_operation;
    }

    /**
     * Output only. The operation on the changed resource.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.ResourceChangeOperationEnum.ResourceChangeOperation resource_change_operation = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setResourceChangeOperation($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V17\Enums\ResourceChangeOperationEnum\ResourceChangeOperation::class);
        $this->resource_change_operation = $var;

        return $this;
    }

    /**
     * Output only. A list of fields that are changed in the returned resource.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask changed_fields = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getChangedFields()
    {
        return $this->changed_fields;
    }

    public function hasChangedFields()
    {
        return isset($this->changed_fields);
    }

    public function clearChangedFields()
    {
        unset($this->changed_fields);
    }

    /**
     * Output only. A list of fields that are changed in the returned resource.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask changed_fields = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  \Google\Protobuf\FieldMask  $var
     * @return $this
     */
    public function setChangedFields($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->changed_fields = $var;

        return $this;
    }

    /**
     * Output only. The Campaign affected by this change.
     *
     * Generated from protobuf field <code>string campaign = 11 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     *
     * @return string
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * Output only. The Campaign affected by this change.
     *
     * Generated from protobuf field <code>string campaign = 11 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setCampaign($var)
    {
        GPBUtil::checkString($var, true);
        $this->campaign = $var;

        return $this;
    }

    /**
     * Output only. The AdGroup affected by this change.
     *
     * Generated from protobuf field <code>string ad_group = 12 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     *
     * @return string
     */
    public function getAdGroup()
    {
        return $this->ad_group;
    }

    /**
     * Output only. The AdGroup affected by this change.
     *
     * Generated from protobuf field <code>string ad_group = 12 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setAdGroup($var)
    {
        GPBUtil::checkString($var, true);
        $this->ad_group = $var;

        return $this;
    }

    /**
     * Output only. The Feed affected by this change.
     *
     * Generated from protobuf field <code>string feed = 13 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     *
     * @return string
     */
    public function getFeed()
    {
        return $this->feed;
    }

    /**
     * Output only. The Feed affected by this change.
     *
     * Generated from protobuf field <code>string feed = 13 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setFeed($var)
    {
        GPBUtil::checkString($var, true);
        $this->feed = $var;

        return $this;
    }

    /**
     * Output only. The FeedItem affected by this change.
     *
     * Generated from protobuf field <code>string feed_item = 14 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     *
     * @return string
     */
    public function getFeedItem()
    {
        return $this->feed_item;
    }

    /**
     * Output only. The FeedItem affected by this change.
     *
     * Generated from protobuf field <code>string feed_item = 14 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setFeedItem($var)
    {
        GPBUtil::checkString($var, true);
        $this->feed_item = $var;

        return $this;
    }

    /**
     * Output only. The Asset affected by this change.
     *
     * Generated from protobuf field <code>string asset = 20 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     *
     * @return string
     */
    public function getAsset()
    {
        return $this->asset;
    }

    /**
     * Output only. The Asset affected by this change.
     *
     * Generated from protobuf field <code>string asset = 20 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setAsset($var)
    {
        GPBUtil::checkString($var, true);
        $this->asset = $var;

        return $this;
    }
}
