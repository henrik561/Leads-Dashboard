<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/errors/policy_finding_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Errors;

class PolicyFindingError
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
�
:google/ads/googleads/v17/errors/policy_finding_error.protogoogle.ads.googleads.v17.errors"|
PolicyFindingErrorEnum"b
PolicyFindingError
UNSPECIFIED 
UNKNOWN
POLICY_FINDING
POLICY_TOPIC_NOT_FOUNDB�
#com.google.ads.googleads.v17.errorsBPolicyFindingErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v17/errors;errors�GAA�Google.Ads.GoogleAds.V17.Errors�Google\\Ads\\GoogleAds\\V17\\Errors�#Google::Ads::GoogleAds::V17::Errorsbproto3', true);
        static::$is_initialized = true;
    }
}
