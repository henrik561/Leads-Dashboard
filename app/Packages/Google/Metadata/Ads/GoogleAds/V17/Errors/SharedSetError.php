<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/errors/shared_set_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Errors;

class SharedSetError
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
�
6google/ads/googleads/v17/errors/shared_set_error.protogoogle.ads.googleads.v17.errors"�
SharedSetErrorEnum"�
SharedSetError
UNSPECIFIED 
UNKNOWN2
.CUSTOMER_CANNOT_CREATE_SHARED_SET_OF_THIS_TYPE
DUPLICATE_NAME
SHARED_SET_REMOVED
SHARED_SET_IN_USEB�
#com.google.ads.googleads.v17.errorsBSharedSetErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v17/errors;errors�GAA�Google.Ads.GoogleAds.V17.Errors�Google\\Ads\\GoogleAds\\V17\\Errors�#Google::Ads::GoogleAds::V17::Errorsbproto3', true);
        static::$is_initialized = true;
    }
}
