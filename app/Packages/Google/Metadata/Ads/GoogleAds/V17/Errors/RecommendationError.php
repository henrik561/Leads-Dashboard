<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/errors/recommendation_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Errors;

class RecommendationError
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
�
:google/ads/googleads/v17/errors/recommendation_error.protogoogle.ads.googleads.v17.errors"�
RecommendationErrorEnum"�
RecommendationError
UNSPECIFIED 
UNKNOWN
BUDGET_AMOUNT_TOO_SMALL
BUDGET_AMOUNT_TOO_LARGE
INVALID_BUDGET_AMOUNT
POLICY_ERROR
INVALID_BID_AMOUNT
ADGROUP_KEYWORD_LIMIT"
RECOMMENDATION_ALREADY_APPLIED
RECOMMENDATION_INVALIDATED	
TOO_MANY_OPERATIONS

NO_OPERATIONS!
DIFFERENT_TYPES_NOT_SUPPORTED
DUPLICATE_RESOURCE_NAME$
 RECOMMENDATION_ALREADY_DISMISSED
INVALID_APPLY_REQUEST+
\'RECOMMENDATION_TYPE_APPLY_NOT_SUPPORTED
INVALID_MULTIPLIER3
/ADVERTISING_CHANNEL_TYPE_GENERATE_NOT_SUPPORTED.
*RECOMMENDATION_TYPE_GENERATE_NOT_SUPPORTED(
$RECOMMENDATION_TYPES_CANNOT_BE_EMPTYB�
#com.google.ads.googleads.v17.errorsBRecommendationErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v17/errors;errors�GAA�Google.Ads.GoogleAds.V17.Errors�Google\\Ads\\GoogleAds\\V17\\Errors�#Google::Ads::GoogleAds::V17::Errorsbproto3', true);
        static::$is_initialized = true;
    }
}
