<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/enums/account_link_status.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Enums;

class AccountLinkStatus
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
8google/ads/googleads/v17/enums/account_link_status.protogoogle.ads.googleads.v17.enums"�
AccountLinkStatusEnum"�
AccountLinkStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVED
	REQUESTED
PENDING_APPROVAL
REJECTED
REVOKEDB�
"com.google.ads.googleads.v17.enumsBAccountLinkStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3', true);
        static::$is_initialized = true;
    }
}
