<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/errors/keyword_plan_ad_group_keyword_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Errors;

class KeywordPlanAdGroupKeywordError
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
Igoogle/ads/googleads/v17/errors/keyword_plan_ad_group_keyword_error.protogoogle.ads.googleads.v17.errors"�
"KeywordPlanAdGroupKeywordErrorEnum"�
KeywordPlanAdGroupKeywordError
UNSPECIFIED 
UNKNOWN
INVALID_KEYWORD_MATCH_TYPE
DUPLICATE_KEYWORD
KEYWORD_TEXT_TOO_LONG
KEYWORD_HAS_INVALID_CHARS
KEYWORD_HAS_TOO_MANY_WORDS
INVALID_KEYWORD_TEXT 
NEGATIVE_KEYWORD_HAS_CPC_BID 
NEW_BMM_KEYWORDS_NOT_ALLOWED	B�
#com.google.ads.googleads.v17.errorsB#KeywordPlanAdGroupKeywordErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v17/errors;errors�GAA�Google.Ads.GoogleAds.V17.Errors�Google\\Ads\\GoogleAds\\V17\\Errors�#Google::Ads::GoogleAds::V17::Errorsbproto3', true);
        static::$is_initialized = true;
    }
}
