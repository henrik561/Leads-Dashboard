<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/services/conversion_adjustment_upload_service.proto

namespace Google\Ads\GoogleAds\V17\Services;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [ConversionAdjustmentUploadService.UploadConversionAdjustments][google.ads.googleads.v17.services.ConversionAdjustmentUploadService.UploadConversionAdjustments].
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.services.UploadConversionAdjustmentsResponse</code>
 */
class UploadConversionAdjustmentsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Errors that pertain to conversion adjustment failures in the partial
     * failure mode. Returned when all errors occur inside the adjustments. If any
     * errors occur outside the adjustments (for example, auth errors), we return
     * an RPC level error. See
     * https://developers.google.com/google-ads/api/docs/best-practices/partial-failures
     * for more information about partial failure.
     *
     * Generated from protobuf field <code>.google.rpc.Status partial_failure_error = 1;</code>
     */
    protected $partial_failure_error = null;

    /**
     * Returned for successfully processed conversion adjustments. Proto will be
     * empty for rows that received an error. Results are not returned when
     * validate_only is true.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.ConversionAdjustmentResult results = 2;</code>
     */
    private $results;

    /**
     * Job ID for the upload batch.
     *
     * Generated from protobuf field <code>int64 job_id = 3;</code>
     */
    protected $job_id = 0;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type \Google\Rpc\Status $partial_failure_error
     *                          Errors that pertain to conversion adjustment failures in the partial
     *                          failure mode. Returned when all errors occur inside the adjustments. If any
     *                          errors occur outside the adjustments (for example, auth errors), we return
     *                          an RPC level error. See
     *                          https://developers.google.com/google-ads/api/docs/best-practices/partial-failures
     *                          for more information about partial failure.
     * @type array<\Google\Ads\GoogleAds\V17\Services\ConversionAdjustmentResult>|\Google\Protobuf\Internal\RepeatedField $results
     *                                                                                                                    Returned for successfully processed conversion adjustments. Proto will be
     *                                                                                                                    empty for rows that received an error. Results are not returned when
     *                                                                                                                    validate_only is true.
     * @type int|string $job_id
     *                  Job ID for the upload batch.
     *                  }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Services\ConversionAdjustmentUploadService::initOnce();
        parent::__construct($data);
    }

    /**
     * Errors that pertain to conversion adjustment failures in the partial
     * failure mode. Returned when all errors occur inside the adjustments. If any
     * errors occur outside the adjustments (for example, auth errors), we return
     * an RPC level error. See
     * https://developers.google.com/google-ads/api/docs/best-practices/partial-failures
     * for more information about partial failure.
     *
     * Generated from protobuf field <code>.google.rpc.Status partial_failure_error = 1;</code>
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
     * Errors that pertain to conversion adjustment failures in the partial
     * failure mode. Returned when all errors occur inside the adjustments. If any
     * errors occur outside the adjustments (for example, auth errors), we return
     * an RPC level error. See
     * https://developers.google.com/google-ads/api/docs/best-practices/partial-failures
     * for more information about partial failure.
     *
     * Generated from protobuf field <code>.google.rpc.Status partial_failure_error = 1;</code>
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
     * Returned for successfully processed conversion adjustments. Proto will be
     * empty for rows that received an error. Results are not returned when
     * validate_only is true.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.ConversionAdjustmentResult results = 2;</code>
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * Returned for successfully processed conversion adjustments. Proto will be
     * empty for rows that received an error. Results are not returned when
     * validate_only is true.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.ConversionAdjustmentResult results = 2;</code>
     *
     * @param  array<\Google\Ads\GoogleAds\V17\Services\ConversionAdjustmentResult>|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V17\Services\ConversionAdjustmentResult::class);
        $this->results = $arr;

        return $this;
    }

    /**
     * Job ID for the upload batch.
     *
     * Generated from protobuf field <code>int64 job_id = 3;</code>
     *
     * @return int|string
     */
    public function getJobId()
    {
        return $this->job_id;
    }

    /**
     * Job ID for the upload batch.
     *
     * Generated from protobuf field <code>int64 job_id = 3;</code>
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setJobId($var)
    {
        GPBUtil::checkInt64($var);
        $this->job_id = $var;

        return $this;
    }
}
