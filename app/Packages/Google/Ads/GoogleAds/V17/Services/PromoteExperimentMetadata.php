<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/services/experiment_service.proto

namespace Google\Ads\GoogleAds\V17\Services;

use Google\Protobuf\Internal\GPBUtil;

/**
 * The metadata of the promoted experiment.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.services.PromoteExperimentMetadata</code>
 */
class PromoteExperimentMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The promoted experiment.
     *
     * Generated from protobuf field <code>string experiment = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $experiment = '';

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type string $experiment
     *              Required. The promoted experiment.
     *              }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Services\ExperimentService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The promoted experiment.
     *
     * Generated from protobuf field <code>string experiment = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     *
     * @return string
     */
    public function getExperiment()
    {
        return $this->experiment;
    }

    /**
     * Required. The promoted experiment.
     *
     * Generated from protobuf field <code>string experiment = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setExperiment($var)
    {
        GPBUtil::checkString($var, true);
        $this->experiment = $var;

        return $this;
    }
}
