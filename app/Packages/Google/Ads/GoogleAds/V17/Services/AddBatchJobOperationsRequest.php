<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/services/batch_job_service.proto

namespace Google\Ads\GoogleAds\V17\Services;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [BatchJobService.AddBatchJobOperations][google.ads.googleads.v17.services.BatchJobService.AddBatchJobOperations].
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.services.AddBatchJobOperationsRequest</code>
 */
class AddBatchJobOperationsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the batch job.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';

    /**
     * A token used to enforce sequencing.
     * The first AddBatchJobOperations request for a batch job should not set
     * sequence_token. Subsequent requests must set sequence_token to the value of
     * next_sequence_token received in the previous AddBatchJobOperations
     * response.
     *
     * Generated from protobuf field <code>string sequence_token = 2;</code>
     */
    protected $sequence_token = '';

    /**
     * Required. The list of mutates being added.
     * Operations can use negative integers as temp ids to signify dependencies
     * between entities created in this batch job. For example, a customer with
     * id = 1234 can create a campaign and an ad group in that same campaign by
     * creating a campaign in the first operation with the resource name
     * explicitly set to "customers/1234/campaigns/-1", and creating an ad group
     * in the second operation with the campaign field also set to
     * "customers/1234/campaigns/-1".
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.MutateOperation mutate_operations = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $mutate_operations;

    /**
     * @param  string  $resourceName  Required. The resource name of the batch job.
     * @param  string  $sequenceToken  A token used to enforce sequencing.
     *
     *                                                                               The first AddBatchJobOperations request for a batch job should not set
     *                                                                               sequence_token. Subsequent requests must set sequence_token to the value of
     *                                                                               next_sequence_token received in the previous AddBatchJobOperations
     *                                                                               response.
     * @param  \Google\Ads\GoogleAds\V17\Services\MutateOperation[]  $mutateOperations  Required. The list of mutates being added.
     *
     *                                                                               Operations can use negative integers as temp ids to signify dependencies
     *                                                                               between entities created in this batch job. For example, a customer with
     *                                                                               id = 1234 can create a campaign and an ad group in that same campaign by
     *                                                                               creating a campaign in the first operation with the resource name
     *                                                                               explicitly set to "customers/1234/campaigns/-1", and creating an ad group
     *                                                                               in the second operation with the campaign field also set to
     *                                                                               "customers/1234/campaigns/-1".
     *
     * @experimental
     */
    public static function build(string $resourceName, string $sequenceToken, array $mutateOperations): self
    {
        return (new self)
            ->setResourceName($resourceName)
            ->setSequenceToken($sequenceToken)
            ->setMutateOperations($mutateOperations);
    }

    /**
     * @param  string  $resourceName  Required. The resource name of the batch job.
     * @param  \Google\Ads\GoogleAds\V17\Services\MutateOperation[]  $mutateOperations  Required. The list of mutates being added.
     *
     *                                                                               Operations can use negative integers as temp ids to signify dependencies
     *                                                                               between entities created in this batch job. For example, a customer with
     *                                                                               id = 1234 can create a campaign and an ad group in that same campaign by
     *                                                                               creating a campaign in the first operation with the resource name
     *                                                                               explicitly set to "customers/1234/campaigns/-1", and creating an ad group
     *                                                                               in the second operation with the campaign field also set to
     *                                                                               "customers/1234/campaigns/-1".
     *
     * @experimental
     */
    public static function buildFromResourceNameMutateOperations(string $resourceName, array $mutateOperations): self
    {
        return (new self)
            ->setResourceName($resourceName)
            ->setMutateOperations($mutateOperations);
    }

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type string $resource_name
     *              Required. The resource name of the batch job.
     * @type string $sequence_token
     *              A token used to enforce sequencing.
     *              The first AddBatchJobOperations request for a batch job should not set
     *              sequence_token. Subsequent requests must set sequence_token to the value of
     *              next_sequence_token received in the previous AddBatchJobOperations
     *              response.
     * @type array<\Google\Ads\GoogleAds\V17\Services\MutateOperation>|\Google\Protobuf\Internal\RepeatedField $mutate_operations
     *                                                                                                         Required. The list of mutates being added.
     *                                                                                                         Operations can use negative integers as temp ids to signify dependencies
     *                                                                                                         between entities created in this batch job. For example, a customer with
     *                                                                                                         id = 1234 can create a campaign and an ad group in that same campaign by
     *                                                                                                         creating a campaign in the first operation with the resource name
     *                                                                                                         explicitly set to "customers/1234/campaigns/-1", and creating an ad group
     *                                                                                                         in the second operation with the campaign field also set to
     *                                                                                                         "customers/1234/campaigns/-1".
     *                                                                                                         }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Services\BatchJobService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the batch job.
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
     * Required. The resource name of the batch job.
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
     * A token used to enforce sequencing.
     * The first AddBatchJobOperations request for a batch job should not set
     * sequence_token. Subsequent requests must set sequence_token to the value of
     * next_sequence_token received in the previous AddBatchJobOperations
     * response.
     *
     * Generated from protobuf field <code>string sequence_token = 2;</code>
     *
     * @return string
     */
    public function getSequenceToken()
    {
        return $this->sequence_token;
    }

    /**
     * A token used to enforce sequencing.
     * The first AddBatchJobOperations request for a batch job should not set
     * sequence_token. Subsequent requests must set sequence_token to the value of
     * next_sequence_token received in the previous AddBatchJobOperations
     * response.
     *
     * Generated from protobuf field <code>string sequence_token = 2;</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setSequenceToken($var)
    {
        GPBUtil::checkString($var, true);
        $this->sequence_token = $var;

        return $this;
    }

    /**
     * Required. The list of mutates being added.
     * Operations can use negative integers as temp ids to signify dependencies
     * between entities created in this batch job. For example, a customer with
     * id = 1234 can create a campaign and an ad group in that same campaign by
     * creating a campaign in the first operation with the resource name
     * explicitly set to "customers/1234/campaigns/-1", and creating an ad group
     * in the second operation with the campaign field also set to
     * "customers/1234/campaigns/-1".
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.MutateOperation mutate_operations = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMutateOperations()
    {
        return $this->mutate_operations;
    }

    /**
     * Required. The list of mutates being added.
     * Operations can use negative integers as temp ids to signify dependencies
     * between entities created in this batch job. For example, a customer with
     * id = 1234 can create a campaign and an ad group in that same campaign by
     * creating a campaign in the first operation with the resource name
     * explicitly set to "customers/1234/campaigns/-1", and creating an ad group
     * in the second operation with the campaign field also set to
     * "customers/1234/campaigns/-1".
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.MutateOperation mutate_operations = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     *
     * @param  array<\Google\Ads\GoogleAds\V17\Services\MutateOperation>|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setMutateOperations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V17\Services\MutateOperation::class);
        $this->mutate_operations = $arr;

        return $this;
    }
}
