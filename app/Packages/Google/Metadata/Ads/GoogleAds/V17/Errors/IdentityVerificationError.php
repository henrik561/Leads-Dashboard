<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/errors/identity_verification_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Errors;

class IdentityVerificationError
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
Agoogle/ads/googleads/v17/errors/identity_verification_error.protogoogle.ads.googleads.v17.errors"�
IdentityVerificationErrorEnum"�
IdentityVerificationError
UNSPECIFIED 
UNKNOWN
NO_EFFECTIVE_BILLING$
 BILLING_NOT_ON_MONTHLY_INVOICING 
VERIFICATION_ALREADY_STARTEDB�
#com.google.ads.googleads.v17.errorsBIdentityVerificationErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v17/errors;errors�GAA�Google.Ads.GoogleAds.V17.Errors�Google\\Ads\\GoogleAds\\V17\\Errors�#Google::Ads::GoogleAds::V17::Errorsbproto3', true);
        static::$is_initialized = true;
    }
}
