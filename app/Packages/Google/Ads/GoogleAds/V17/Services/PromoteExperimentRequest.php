<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/services/experiment_service.proto

namespace Google\Ads\GoogleAds\V17\Services;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [ExperimentService.PromoteExperiment][google.ads.googleads.v17.services.ExperimentService.PromoteExperiment].
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.services.PromoteExperimentRequest</code>
 */
class PromoteExperimentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the experiment to promote.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';

    /**
     * If true, the request is validated but not executed. Only errors are
     * returned, not results.
     *
     * Generated from protobuf field <code>bool validate_only = 2;</code>
     */
    protected $validate_only = false;

    /**
     * @param  string  $resourceName  Required. The resource name of the experiment to promote.
     *
     * @experimental
     */
    public static function build(string $resourceName): self
    {
        return (new self)
            ->setResourceName($resourceName);
    }

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type string $resource_name
     *              Required. The resource name of the experiment to promote.
     * @type bool $validate_only
     *            If true, the request is validated but not executed. Only errors are
     *            returned, not results.
     *            }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Services\ExperimentService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the experiment to promote.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     *
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Required. The resource name of the experiment to promote.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * If true, the request is validated but not executed. Only errors are
     * returned, not results.
     *
     * Generated from protobuf field <code>bool validate_only = 2;</code>
     *
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * If true, the request is validated but not executed. Only errors are
     * returned, not results.
     *
     * Generated from protobuf field <code>bool validate_only = 2;</code>
     *
     * @param  bool  $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }
}
