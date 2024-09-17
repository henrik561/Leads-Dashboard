<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/enums/resource_limit_type.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Enums;

class ResourceLimitType
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
ê0
8google/ads/googleads/v17/enums/resource_limit_type.protogoogle.ads.googleads.v17.enums".
ResourceLimitTypeEnum"ø-
ResourceLimitType
UNSPECIFIED 
UNKNOWN
CAMPAIGNS_PER_CUSTOMER
BASE_CAMPAIGNS_PER_CUSTOMER%
!EXPERIMENT_CAMPAIGNS_PER_CUSTOMERi 
HOTEL_CAMPAIGNS_PER_CUSTOMER)
%SMART_SHOPPING_CAMPAIGNS_PER_CUSTOMER
AD_GROUPS_PER_CAMPAIGN#
AD_GROUPS_PER_SHOPPING_CAMPAIGN 
AD_GROUPS_PER_HOTEL_CAMPAIGN	*
&REPORTING_AD_GROUPS_PER_LOCAL_CAMPAIGN
(
$REPORTING_AD_GROUPS_PER_APP_CAMPAIGN(
$MANAGED_AD_GROUPS_PER_SMART_CAMPAIGN4"
AD_GROUP_CRITERIA_PER_CUSTOMER\'
#BASE_AD_GROUP_CRITERIA_PER_CUSTOMER-
)EXPERIMENT_AD_GROUP_CRITERIA_PER_CUSTOMERk"
AD_GROUP_CRITERIA_PER_CAMPAIGN"
CAMPAIGN_CRITERIA_PER_CUSTOMER\'
#BASE_CAMPAIGN_CRITERIA_PER_CUSTOMER-
)EXPERIMENT_CAMPAIGN_CRITERIA_PER_CUSTOMERl!
WEBPAGE_CRITERIA_PER_CUSTOMER&
"BASE_WEBPAGE_CRITERIA_PER_CUSTOMER,
(EXPERIMENT_WEBPAGE_CRITERIA_PER_CUSTOMER+
\'COMBINED_AUDIENCE_CRITERIA_PER_AD_GROUP5
1CUSTOMER_NEGATIVE_PLACEMENT_CRITERIA_PER_CUSTOMER;
7CUSTOMER_NEGATIVE_YOUTUBE_CHANNEL_CRITERIA_PER_CUSTOMER
CRITERIA_PER_AD_GROUP
LISTING_GROUPS_PER_AD_GROUP*
&EXPLICITLY_SHARED_BUDGETS_PER_CUSTOMER*
&IMPLICITLY_SHARED_BUDGETS_PER_CUSTOMER+
\'COMBINED_AUDIENCE_CRITERIA_PER_CAMPAIGN"
NEGATIVE_KEYWORDS_PER_CAMPAIGN$
 NEGATIVE_PLACEMENTS_PER_CAMPAIGN
GEO_TARGETS_PER_CAMPAIGN#
NEGATIVE_IP_BLOCKS_PER_CAMPAIGN 
PROXIMITIES_PER_CAMPAIGN!(
$LISTING_SCOPES_PER_SHOPPING_CAMPAIGN",
(LISTING_SCOPES_PER_NON_SHOPPING_CAMPAIGN#$
 NEGATIVE_KEYWORDS_PER_SHARED_SET$&
"NEGATIVE_PLACEMENTS_PER_SHARED_SET%-
)SHARED_SETS_PER_CUSTOMER_FOR_TYPE_DEFAULT(>
:SHARED_SETS_PER_CUSTOMER_FOR_NEGATIVE_PLACEMENT_LIST_LOWER);
7HOTEL_ADVANCE_BOOKING_WINDOW_BID_MODIFIERS_PER_AD_GROUP,#
BIDDING_STRATEGIES_PER_CUSTOMER-!
BASIC_USER_LISTS_PER_CUSTOMER/#
LOGICAL_USER_LISTS_PER_CUSTOMER0\'
"RULE_BASED_USER_LISTS_PER_CUSTOMER"
BASE_AD_GROUP_ADS_PER_CUSTOMER5(
$EXPERIMENT_AD_GROUP_ADS_PER_CUSTOMER6
AD_GROUP_ADS_PER_CAMPAIGN7#
TEXT_AND_OTHER_ADS_PER_AD_GROUP8
IMAGE_ADS_PER_AD_GROUP9#
SHOPPING_SMART_ADS_PER_AD_GROUP:&
"RESPONSIVE_SEARCH_ADS_PER_AD_GROUP;
APP_ADS_PER_AD_GROUP<#
APP_ENGAGEMENT_ADS_PER_AD_GROUP=
LOCAL_ADS_PER_AD_GROUP>
VIDEO_ADS_PER_AD_GROUP?+
&LEAD_FORM_CAMPAIGN_ASSETS_PER_CAMPAIGN*
&PROMOTION_CUSTOMER_ASSETS_PER_CUSTOMERO*
&PROMOTION_CAMPAIGN_ASSETS_PER_CAMPAIGNP*
&PROMOTION_AD_GROUP_ASSETS_PER_AD_GROUPQ)
$CALLOUT_CUSTOMER_ASSETS_PER_CUSTOMER)
$CALLOUT_CAMPAIGN_ASSETS_PER_CAMPAIGN)
$CALLOUT_AD_GROUP_ASSETS_PER_AD_GROUP*
%SITELINK_CUSTOMER_ASSETS_PER_CUSTOMER*
%SITELINK_CAMPAIGN_ASSETS_PER_CAMPAIGN*
%SITELINK_AD_GROUP_ASSETS_PER_AD_GROUP4
/STRUCTURED_SNIPPET_CUSTOMER_ASSETS_PER_CUSTOMER4
/STRUCTURED_SNIPPET_CAMPAIGN_ASSETS_PER_CAMPAIGN4
/STRUCTURED_SNIPPET_AD_GROUP_ASSETS_PER_AD_GROUP,
\'MOBILE_APP_CUSTOMER_ASSETS_PER_CUSTOMER,
\'MOBILE_APP_CAMPAIGN_ASSETS_PER_CAMPAIGN,
\'MOBILE_APP_AD_GROUP_ASSETS_PER_AD_GROUP/
*HOTEL_CALLOUT_CUSTOMER_ASSETS_PER_CUSTOMER/
*HOTEL_CALLOUT_CAMPAIGN_ASSETS_PER_CAMPAIGN/
*HOTEL_CALLOUT_AD_GROUP_ASSETS_PER_AD_GROUP&
!CALL_CUSTOMER_ASSETS_PER_CUSTOMER&
!CALL_CAMPAIGN_ASSETS_PER_CAMPAIGN&
!CALL_AD_GROUP_ASSETS_PER_AD_GROUP\'
"PRICE_CUSTOMER_ASSETS_PER_CUSTOMER\'
"PRICE_CAMPAIGN_ASSETS_PER_CAMPAIGN\'
"PRICE_AD_GROUP_ASSETS_PER_AD_GROUP*
%AD_IMAGE_CAMPAIGN_ASSETS_PER_CAMPAIGN¯*
%AD_IMAGE_AD_GROUP_ASSETS_PER_AD_GROUP°&
!PAGE_FEED_ASSET_SETS_PER_CUSTOMER3
.DYNAMIC_EDUCATION_FEED_ASSET_SETS_PER_CUSTOMER#
ASSETS_PER_PAGE_FEED_ASSET_SET0
+ASSETS_PER_DYNAMIC_EDUCATION_FEED_ASSET_SET 0
+DYNAMIC_REAL_ESTATE_ASSET_SETS_PER_CUSTOMER¡-
(ASSETS_PER_DYNAMIC_REAL_ESTATE_ASSET_SET¢+
&DYNAMIC_CUSTOM_ASSET_SETS_PER_CUSTOMER£(
#ASSETS_PER_DYNAMIC_CUSTOM_ASSET_SET¤7
2DYNAMIC_HOTELS_AND_RENTALS_ASSET_SETS_PER_CUSTOMER¥4
/ASSETS_PER_DYNAMIC_HOTELS_AND_RENTALS_ASSET_SET¦*
%DYNAMIC_LOCAL_ASSET_SETS_PER_CUSTOMER§\'
"ASSETS_PER_DYNAMIC_LOCAL_ASSET_SET¨,
\'DYNAMIC_FLIGHTS_ASSET_SETS_PER_CUSTOMER©)
$ASSETS_PER_DYNAMIC_FLIGHTS_ASSET_SETª+
&DYNAMIC_TRAVEL_ASSET_SETS_PER_CUSTOMER«(
#ASSETS_PER_DYNAMIC_TRAVEL_ASSET_SET¬)
$DYNAMIC_JOBS_ASSET_SETS_PER_CUSTOMER­&
!ASSETS_PER_DYNAMIC_JOBS_ASSET_SET®/
*BUSINESS_NAME_CAMPAIGN_ASSETS_PER_CAMPAIGN³/
*BUSINESS_LOGO_CAMPAIGN_ASSETS_PER_CAMPAIGN´
VERSIONS_PER_ADR
USER_FEEDS_PER_CUSTOMERZ
SYSTEM_FEEDS_PER_CUSTOMER[
FEED_ATTRIBUTES_PER_FEED\\
FEED_ITEMS_PER_CUSTOMER^
CAMPAIGN_FEEDS_PER_CUSTOMER_$
 BASE_CAMPAIGN_FEEDS_PER_CUSTOMER`*
&EXPERIMENT_CAMPAIGN_FEEDS_PER_CUSTOMERm
AD_GROUP_FEEDS_PER_CUSTOMERa$
 BASE_AD_GROUP_FEEDS_PER_CUSTOMERb*
&EXPERIMENT_AD_GROUP_FEEDS_PER_CUSTOMERn
AD_GROUP_FEEDS_PER_CAMPAIGNc
FEED_ITEM_SETS_PER_CUSTOMERd 
FEED_ITEMS_PER_FEED_ITEM_SETe%
!CAMPAIGN_EXPERIMENTS_PER_CUSTOMERp(
$EXPERIMENT_ARMS_PER_VIDEO_EXPERIMENTq
OWNED_LABELS_PER_CUSTOMERs
LABELS_PER_CAMPAIGNu
LABELS_PER_AD_GROUPv
LABELS_PER_AD_GROUP_ADw!
LABELS_PER_AD_GROUP_CRITERIONx
TARGET_CUSTOMERS_PER_LABELy\'
#KEYWORD_PLANS_PER_USER_PER_CUSTOMERz3
/KEYWORD_PLAN_AD_GROUP_KEYWORDS_PER_KEYWORD_PLAN{+
\'KEYWORD_PLAN_AD_GROUPS_PER_KEYWORD_PLAN|3
/KEYWORD_PLAN_NEGATIVE_KEYWORDS_PER_KEYWORD_PLAN}+
\'KEYWORD_PLAN_CAMPAIGNS_PER_KEYWORD_PLAN~$
CONVERSION_ACTIONS_PER_CUSTOMER!
BATCH_JOB_OPERATIONS_PER_JOB
BATCH_JOBS_PER_CUSTOMER9
4HOTEL_CHECK_IN_DATE_RANGE_BID_MODIFIERS_PER_AD_GROUP@
;SHARED_SETS_PER_ACCOUNT_FOR_ACCOUNT_LEVEL_NEGATIVE_KEYWORDS±3
.ACCOUNT_LEVEL_NEGATIVE_KEYWORDS_PER_SHARED_SET²/
*ENABLED_ASSET_PER_HOTEL_PROPERTY_ASSET_SETµ7
2ENABLED_HOTEL_PROPERTY_ASSET_LINKS_PER_ASSET_GROUP¶
BRANDS_PER_SHARED_SET·-
(ENABLED_BRAND_LIST_CRITERIA_PER_CAMPAIGN¸&
!SHARED_SETS_PER_ACCOUNT_FOR_BRAND¹&
!LOOKALIKE_USER_LISTS_PER_CUSTOMERºBð
"com.google.ads.googleads.v17.enumsBResourceLimitTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums¢GAAªGoogle.Ads.GoogleAds.V17.EnumsÊGoogle\\Ads\\GoogleAds\\V17\\Enumsê"Google::Ads::GoogleAds::V17::Enumsbproto3', true);
        static::$is_initialized = true;
    }
}
