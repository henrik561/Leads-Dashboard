<?php

// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2024 Google LLC
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//

namespace Google\Ads\GoogleAds\V17\Services;

/**
 * Proto file describing the MerchantCenterLink service.
 *
 * This service will suggest brands based on a prefix.
 */
class BrandSuggestionServiceGrpcClient extends \Grpc\BaseStub
{
    /**
     * @param  string  $hostname  hostname
     * @param  array  $opts  channel options
     * @param  \Grpc\Channel  $channel  (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null)
    {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Rpc to return a list of matching brands based on a prefix for this
     * customer.
     *
     * @param  \Google\Ads\GoogleAds\V17\Services\SuggestBrandsRequest  $argument  input argument
     * @param  array  $metadata  metadata
     * @param  array  $options  call options
     * @return \Grpc\UnaryCall
     */
    public function SuggestBrands(\Google\Ads\GoogleAds\V17\Services\SuggestBrandsRequest $argument,
        $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/google.ads.googleads.v17.services.BrandSuggestionService/SuggestBrands',
            $argument,
            ['\Google\Ads\GoogleAds\V17\Services\SuggestBrandsResponse', 'decode'],
            $metadata, $options);
    }
}
