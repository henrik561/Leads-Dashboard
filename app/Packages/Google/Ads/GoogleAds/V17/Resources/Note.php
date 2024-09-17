<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/resources/local_services_lead.proto

namespace Google\Ads\GoogleAds\V17\Resources;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a note added to a lead by the advertiser. Advertisers can edit
 * notes, which will reset edit time and change description.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.resources.Note</code>
 */
class Note extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The date time when lead note was edited. The format is
     * "YYYY-MM-DD HH:MM:SS" in the Google Ads account's timezone. Examples:
     * "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>string edit_date_time = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $edit_date_time = '';

    /**
     * Output only. Content of lead note.
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $description = '';

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type string $edit_date_time
     *              Output only. The date time when lead note was edited. The format is
     *              "YYYY-MM-DD HH:MM:SS" in the Google Ads account's timezone. Examples:
     *              "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     * @type string $description
     *              Output only. Content of lead note.
     *              }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Resources\LocalServicesLead::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The date time when lead note was edited. The format is
     * "YYYY-MM-DD HH:MM:SS" in the Google Ads account's timezone. Examples:
     * "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>string edit_date_time = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return string
     */
    public function getEditDateTime()
    {
        return $this->edit_date_time;
    }

    /**
     * Output only. The date time when lead note was edited. The format is
     * "YYYY-MM-DD HH:MM:SS" in the Google Ads account's timezone. Examples:
     * "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>string edit_date_time = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setEditDateTime($var)
    {
        GPBUtil::checkString($var, true);
        $this->edit_date_time = $var;

        return $this;
    }

    /**
     * Output only. Content of lead note.
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Output only. Content of lead note.
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, true);
        $this->description = $var;

        return $this;
    }
}
