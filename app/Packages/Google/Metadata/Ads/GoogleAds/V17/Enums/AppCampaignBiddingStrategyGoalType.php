<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/enums/app_campaign_bidding_strategy_goal_type.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Enums;

class AppCampaignBiddingStrategyGoalType
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
Lgoogle/ads/googleads/v17/enums/app_campaign_bidding_strategy_goal_type.protogoogle.ads.googleads.v17.enums"�
&AppCampaignBiddingStrategyGoalTypeEnum"�
"AppCampaignBiddingStrategyGoalType
UNSPECIFIED 
UNKNOWN)
%OPTIMIZE_INSTALLS_TARGET_INSTALL_COST3
/OPTIMIZE_IN_APP_CONVERSIONS_TARGET_INSTALL_COST6
2OPTIMIZE_IN_APP_CONVERSIONS_TARGET_CONVERSION_COST(
$OPTIMIZE_RETURN_ON_ADVERTISING_SPEND/
+OPTIMIZE_PRE_REGISTRATION_CONVERSION_VOLUME1
-OPTIMIZE_INSTALLS_WITHOUT_TARGET_INSTALL_COSTB�
"com.google.ads.googleads.v17.enumsB\'AppCampaignBiddingStrategyGoalTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3', true);
        static::$is_initialized = true;
    }
}
