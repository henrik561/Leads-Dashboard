<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/errors/customer_lifecycle_goal_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Errors;

class CustomerLifecycleGoalError
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
�
Cgoogle/ads/googleads/v17/errors/customer_lifecycle_goal_error.protogoogle.ads.googleads.v17.errors"�
CustomerLifecycleGoalErrorEnum"�
CustomerLifecycleGoalError
UNSPECIFIED 
UNKNOWN&
"CUSTOMER_ACQUISITION_VALUE_MISSING&
"CUSTOMER_ACQUISITION_INVALID_VALUE4
0CUSTOMER_ACQUISITION_INVALID_HIGH_LIFETIME_VALUE0
,CUSTOMER_ACQUISITION_VALUE_CANNOT_BE_CLEARED>
:CUSTOMER_ACQUISITION_HIGH_LIFETIME_VALUE_CANNOT_BE_CLEARED
INVALID_EXISTING_USER_LIST)
%INVALID_HIGH_LIFETIME_VALUE_USER_LISTB�
#com.google.ads.googleads.v17.errorsBCustomerLifecycleGoalErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v17/errors;errors�GAA�Google.Ads.GoogleAds.V17.Errors�Google\\Ads\\GoogleAds\\V17\\Errors�#Google::Ads::GoogleAds::V17::Errorsbproto3', true);
        static::$is_initialized = true;
    }
}
