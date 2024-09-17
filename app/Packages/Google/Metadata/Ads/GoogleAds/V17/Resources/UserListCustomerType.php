<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/resources/user_list_customer_type.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Resources;

class UserListCustomerType
{
    public static $is_initialized = false;

    public static function initOnce()
    {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
            return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Egoogle/ads/googleads/v17/enums/user_list_customer_type_category.protogoogle.ads.googleads.v17.enums"�
 UserListCustomerTypeCategoryEnum"�
UserListCustomerTypeCategory
UNSPECIFIED 
UNKNOWN
ALL_CUSTOMERS

PURCHASERS
HIGH_VALUE_CUSTOMERS
DISENGAGED_CUSTOMERS
QUALIFIED_LEADS
CONVERTED_LEADS
PAID_SUBSCRIBERS
LOYALTY_SIGN_UPS	
CART_ABANDONERS

LOYALTY_TIER_1_MEMBERS
LOYALTY_TIER_2_MEMBERS
LOYALTY_TIER_3_MEMBERS
LOYALTY_TIER_4_MEMBERS
LOYALTY_TIER_5_MEMBERS
LOYALTY_TIER_6_MEMBERS
LOYALTY_TIER_7_MEMBERSB�
"com.google.ads.googleads.v17.enumsB!UserListCustomerTypeCategoryProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
@google/ads/googleads/v17/resources/user_list_customer_type.proto"google.ads.googleads.v17.resourcesgoogle/api/field_behavior.protogoogle/api/resource.proto"�
UserListCustomerTypeL
resource_name (	B5�A�A/
-googleads.googleapis.com/UserListCustomerType<
	user_list (	B)�A�A#
!googleads.googleapis.com/UserList�
customer_type_category (2].google.ads.googleads.v17.enums.UserListCustomerTypeCategoryEnum.UserListCustomerTypeCategoryB�A:��A~
-googleads.googleapis.com/UserListCustomerTypeMcustomers/{customer_id}/userListCustomerTypes/{user_list_id}~{semantic_label}B�
&com.google.ads.googleads.v17.resourcesBUserListCustomerTypeProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v17/resources;resources�GAA�"Google.Ads.GoogleAds.V17.Resources�"Google\\Ads\\GoogleAds\\V17\\Resources�&Google::Ads::GoogleAds::V17::Resourcesbproto3', true);
        static::$is_initialized = true;
    }
}
