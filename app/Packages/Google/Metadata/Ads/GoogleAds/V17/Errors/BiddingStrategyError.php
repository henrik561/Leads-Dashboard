<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/errors/bidding_strategy_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Errors;

class BiddingStrategyError
{
    public static $is_initialized = false;

    public static function initOnce()
    {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
            return;
        }
        $pool->internalAddGeneratedFile(
            '
�
<google/ads/googleads/v17/errors/bidding_strategy_error.protogoogle.ads.googleads.v17.errors"�
BiddingStrategyErrorEnum"�
BiddingStrategyError
UNSPECIFIED 
UNKNOWN
DUPLICATE_NAME\'
#CANNOT_CHANGE_BIDDING_STRATEGY_TYPE%
!CANNOT_REMOVE_ASSOCIATED_STRATEGY"
BIDDING_STRATEGY_NOT_SUPPORTED@
<INCOMPATIBLE_BIDDING_STRATEGY_AND_BIDDING_STRATEGY_GOAL_TYPEB�
#com.google.ads.googleads.v17.errorsBBiddingStrategyErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v17/errors;errors�GAA�Google.Ads.GoogleAds.V17.Errors�Google\\Ads\\GoogleAds\\V17\\Errors�#Google::Ads::GoogleAds::V17::Errorsbproto3', true);
        static::$is_initialized = true;
    }
}
