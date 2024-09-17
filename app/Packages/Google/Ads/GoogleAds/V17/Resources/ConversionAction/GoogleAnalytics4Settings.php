<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/resources/conversion_action.proto

namespace Google\Ads\GoogleAds\V17\Resources\ConversionAction;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Settings related to a Google Analytics 4 conversion action.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.resources.ConversionAction.GoogleAnalytics4Settings</code>
 */
class GoogleAnalytics4Settings extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The name of the GA 4 event.
     *
     * Generated from protobuf field <code>string event_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $event_name = '';

    /**
     * Output only. The name of the GA 4 property.
     *
     * Generated from protobuf field <code>string property_name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $property_name = '';

    /**
     * Output only. The ID of the GA 4 property.
     *
     * Generated from protobuf field <code>int64 property_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $property_id = 0;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type string $event_name
     *              Output only. The name of the GA 4 event.
     * @type string $property_name
     *              Output only. The name of the GA 4 property.
     * @type int|string $property_id
     *                  Output only. The ID of the GA 4 property.
     *                  }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Resources\ConversionAction::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The name of the GA 4 event.
     *
     * Generated from protobuf field <code>string event_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->event_name;
    }

    /**
     * Output only. The name of the GA 4 event.
     *
     * Generated from protobuf field <code>string event_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setEventName($var)
    {
        GPBUtil::checkString($var, true);
        $this->event_name = $var;

        return $this;
    }

    /**
     * Output only. The name of the GA 4 property.
     *
     * Generated from protobuf field <code>string property_name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return string
     */
    public function getPropertyName()
    {
        return $this->property_name;
    }

    /**
     * Output only. The name of the GA 4 property.
     *
     * Generated from protobuf field <code>string property_name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setPropertyName($var)
    {
        GPBUtil::checkString($var, true);
        $this->property_name = $var;

        return $this;
    }

    /**
     * Output only. The ID of the GA 4 property.
     *
     * Generated from protobuf field <code>int64 property_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return int|string
     */
    public function getPropertyId()
    {
        return $this->property_id;
    }

    /**
     * Output only. The ID of the GA 4 property.
     *
     * Generated from protobuf field <code>int64 property_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setPropertyId($var)
    {
        GPBUtil::checkInt64($var);
        $this->property_id = $var;

        return $this;
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAnalytics4Settings::class, \Google\Ads\GoogleAds\V17\Resources\ConversionAction_GoogleAnalytics4Settings::class);
