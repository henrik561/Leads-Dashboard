<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/enums/customer_match_upload_key_type.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Enums;

class CustomerMatchUploadKeyType
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
Cgoogle/ads/googleads/v17/enums/customer_match_upload_key_type.protogoogle.ads.googleads.v17.enums"�
CustomerMatchUploadKeyTypeEnum"s
CustomerMatchUploadKeyType
UNSPECIFIED 
UNKNOWN
CONTACT_INFO

CRM_ID
MOBILE_ADVERTISING_IDB�
"com.google.ads.googleads.v17.enumsBCustomerMatchUploadKeyTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3', true);
        static::$is_initialized = true;
    }
}
