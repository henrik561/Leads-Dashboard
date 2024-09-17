<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/services/custom_interest_service.proto

namespace Google\Ads\GoogleAds\V17\Services;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for custom interest mutate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.services.MutateCustomInterestsResponse</code>
 */
class MutateCustomInterestsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * All results for the mutate.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.MutateCustomInterestResult results = 2;</code>
     */
    private $results;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type array<\Google\Ads\GoogleAds\V17\Services\MutateCustomInterestResult>|\Google\Protobuf\Internal\RepeatedField $results
     *                                                                                                                    All results for the mutate.
     *                                                                                                                    }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Services\CustomInterestService::initOnce();
        parent::__construct($data);
    }

    /**
     * All results for the mutate.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.MutateCustomInterestResult results = 2;</code>
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * All results for the mutate.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.MutateCustomInterestResult results = 2;</code>
     *
     * @param  array<\Google\Ads\GoogleAds\V17\Services\MutateCustomInterestResult>|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V17\Services\MutateCustomInterestResult::class);
        $this->results = $arr;

        return $this;
    }
}
