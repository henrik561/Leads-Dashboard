<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/enums/recommendation_subscription_status.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Enums;

class RecommendationSubscriptionStatus
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
Ggoogle/ads/googleads/v17/enums/recommendation_subscription_status.protogoogle.ads.googleads.v17.enums"�
$RecommendationSubscriptionStatusEnum"Y
 RecommendationSubscriptionStatus
UNSPECIFIED 
UNKNOWN
ENABLED

PAUSEDB�
"com.google.ads.googleads.v17.enumsB%RecommendationSubscriptionStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3', true);
        static::$is_initialized = true;
    }
}
