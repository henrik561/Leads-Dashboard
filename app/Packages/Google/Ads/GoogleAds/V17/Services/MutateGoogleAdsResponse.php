<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/services/google_ads_service.proto

namespace Google\Ads\GoogleAds\V17\Services;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [GoogleAdsService.Mutate][google.ads.googleads.v17.services.GoogleAdsService.Mutate].
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.services.MutateGoogleAdsResponse</code>
 */
class MutateGoogleAdsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Errors that pertain to operation failures in the partial failure mode.
     * Returned only when partial_failure = true and all errors occur inside the
     * operations. If any errors occur outside the operations (for example, auth
     * errors), we return an RPC level error.
     *
     * Generated from protobuf field <code>.google.rpc.Status partial_failure_error = 3;</code>
     */
    protected $partial_failure_error = null;

    /**
     * All responses for the mutate.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.MutateOperationResponse mutate_operation_responses = 1;</code>
     */
    private $mutate_operation_responses;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type \Google\Rpc\Status $partial_failure_error
     *                          Errors that pertain to operation failures in the partial failure mode.
     *                          Returned only when partial_failure = true and all errors occur inside the
     *                          operations. If any errors occur outside the operations (for example, auth
     *                          errors), we return an RPC level error.
     * @type array<\Google\Ads\GoogleAds\V17\Services\MutateOperationResponse>|\Google\Protobuf\Internal\RepeatedField $mutate_operation_responses
     *                                                                                                                 All responses for the mutate.
     *                                                                                                                 }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Services\GoogleAdsService::initOnce();
        parent::__construct($data);
    }

    /**
     * Errors that pertain to operation failures in the partial failure mode.
     * Returned only when partial_failure = true and all errors occur inside the
     * operations. If any errors occur outside the operations (for example, auth
     * errors), we return an RPC level error.
     *
     * Generated from protobuf field <code>.google.rpc.Status partial_failure_error = 3;</code>
     *
     * @return \Google\Rpc\Status|null
     */
    public function getPartialFailureError()
    {
        return $this->partial_failure_error;
    }

    public function hasPartialFailureError()
    {
        return isset($this->partial_failure_error);
    }

    public function clearPartialFailureError()
    {
        unset($this->partial_failure_error);
    }

    /**
     * Errors that pertain to operation failures in the partial failure mode.
     * Returned only when partial_failure = true and all errors occur inside the
     * operations. If any errors occur outside the operations (for example, auth
     * errors), we return an RPC level error.
     *
     * Generated from protobuf field <code>.google.rpc.Status partial_failure_error = 3;</code>
     *
     * @param  \Google\Rpc\Status  $var
     * @return $this
     */
    public function setPartialFailureError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->partial_failure_error = $var;

        return $this;
    }

    /**
     * All responses for the mutate.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.MutateOperationResponse mutate_operation_responses = 1;</code>
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMutateOperationResponses()
    {
        return $this->mutate_operation_responses;
    }

    /**
     * All responses for the mutate.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.MutateOperationResponse mutate_operation_responses = 1;</code>
     *
     * @param  array<\Google\Ads\GoogleAds\V17\Services\MutateOperationResponse>|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setMutateOperationResponses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V17\Services\MutateOperationResponse::class);
        $this->mutate_operation_responses = $arr;

        return $this;
    }
}
