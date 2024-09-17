<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/services/audience_service.proto

namespace Google\Ads\GoogleAds\V17\Services;

use Google\Protobuf\Internal\GPBUtil;

/**
 * The result for the audience mutate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.services.MutateAudienceResult</code>
 */
class MutateAudienceResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';

    /**
     * The mutated Audience with only mutable fields after mutate. The
     * field will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.Audience audience = 2;</code>
     */
    protected $audience = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type string $resource_name
     *              Returned for successful operations.
     * @type \Google\Ads\GoogleAds\V17\Resources\Audience $audience
     *                                                    The mutated Audience with only mutable fields after mutate. The
     *                                                    field will only be returned when response_content_type is set to
     *                                                    "MUTABLE_RESOURCE".
     *                                                    }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Services\AudienceService::initOnce();
        parent::__construct($data);
    }

    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     *
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
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
     * The mutated Audience with only mutable fields after mutate. The
     * field will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.Audience audience = 2;</code>
     *
     * @return \Google\Ads\GoogleAds\V17\Resources\Audience|null
     */
    public function getAudience()
    {
        return $this->audience;
    }

    public function hasAudience()
    {
        return isset($this->audience);
    }

    public function clearAudience()
    {
        unset($this->audience);
    }

    /**
     * The mutated Audience with only mutable fields after mutate. The
     * field will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.Audience audience = 2;</code>
     *
     * @param  \Google\Ads\GoogleAds\V17\Resources\Audience  $var
     * @return $this
     */
    public function setAudience($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Resources\Audience::class);
        $this->audience = $var;

        return $this;
    }
}
