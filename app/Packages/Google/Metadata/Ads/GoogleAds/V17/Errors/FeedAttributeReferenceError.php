<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/errors/feed_attribute_reference_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Errors;

class FeedAttributeReferenceError
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
Dgoogle/ads/googleads/v17/errors/feed_attribute_reference_error.protogoogle.ads.googleads.v17.errors"�
FeedAttributeReferenceErrorEnum"�
FeedAttributeReferenceError
UNSPECIFIED 
UNKNOWN!
CANNOT_REFERENCE_REMOVED_FEED
INVALID_FEED_NAME
INVALID_FEED_ATTRIBUTE_NAMEB�
#com.google.ads.googleads.v17.errorsB FeedAttributeReferenceErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v17/errors;errors�GAA�Google.Ads.GoogleAds.V17.Errors�Google\\Ads\\GoogleAds\\V17\\Errors�#Google::Ads::GoogleAds::V17::Errorsbproto3', true);
        static::$is_initialized = true;
    }
}
