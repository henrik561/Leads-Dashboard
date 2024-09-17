<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/services/experiment_arm_service.proto

namespace Google\Ads\GoogleAds\V17\Services;

use Google\Protobuf\Internal\GPBUtil;

/**
 * The result for the experiment arm mutate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.services.MutateExperimentArmResult</code>
 */
class MutateExperimentArmResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';

    /**
     * The mutated experiment arm with only mutable fields after mutate. The
     * field will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.ExperimentArm experiment_arm = 2;</code>
     */
    protected $experiment_arm = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type string $resource_name
     *              Returned for successful operations.
     * @type \Google\Ads\GoogleAds\V17\Resources\ExperimentArm $experiment_arm
     *                                                         The mutated experiment arm with only mutable fields after mutate. The
     *                                                         field will only be returned when response_content_type is set to
     *                                                         "MUTABLE_RESOURCE".
     *                                                         }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Services\ExperimentArmService::initOnce();
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
     * The mutated experiment arm with only mutable fields after mutate. The
     * field will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.ExperimentArm experiment_arm = 2;</code>
     *
     * @return \Google\Ads\GoogleAds\V17\Resources\ExperimentArm|null
     */
    public function getExperimentArm()
    {
        return $this->experiment_arm;
    }

    public function hasExperimentArm()
    {
        return isset($this->experiment_arm);
    }

    public function clearExperimentArm()
    {
        unset($this->experiment_arm);
    }

    /**
     * The mutated experiment arm with only mutable fields after mutate. The
     * field will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.ExperimentArm experiment_arm = 2;</code>
     *
     * @param  \Google\Ads\GoogleAds\V17\Resources\ExperimentArm  $var
     * @return $this
     */
    public function setExperimentArm($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Resources\ExperimentArm::class);
        $this->experiment_arm = $var;

        return $this;
    }
}
