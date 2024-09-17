<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/services/campaign_customizer_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Services;

class CampaignCustomizerService
{
    public static $is_initialized = false;

    public static function initOnce()
    {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
            return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
:google/ads/googleads/v17/enums/response_content_type.protogoogle.ads.googleads.v17.enums"o
ResponseContentTypeEnum"T
ResponseContentType
UNSPECIFIED 
RESOURCE_NAME_ONLY
MUTABLE_RESOURCEB�
"com.google.ads.googleads.v17.enumsBResponseContentTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
<google/ads/googleads/v17/enums/customizer_value_status.protogoogle.ads.googleads.v17.enums"l
CustomizerValueStatusEnum"O
CustomizerValueStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
"com.google.ads.googleads.v17.enumsBCustomizerValueStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
>google/ads/googleads/v17/enums/customizer_attribute_type.protogoogle.ads.googleads.v17.enums"�
CustomizerAttributeTypeEnum"e
CustomizerAttributeType
UNSPECIFIED 
UNKNOWN
TEXT

NUMBER	
PRICE
PERCENTB�
"com.google.ads.googleads.v17.enumsBCustomizerAttributeTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
6google/ads/googleads/v17/common/customizer_value.protogoogle.ads.googleads.v17.commongoogle/api/field_behavior.proto"�
CustomizerValuef
type (2S.google.ads.googleads.v17.enums.CustomizerAttributeTypeEnum.CustomizerAttributeTypeB�A
string_value (	B�AB�
#com.google.ads.googleads.v17.commonBCustomizerValueProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v17/common;common�GAA�Google.Ads.GoogleAds.V17.Common�Google\\Ads\\GoogleAds\\V17\\Common�#Google::Ads::GoogleAds::V17::Commonbproto3
�
<google/ads/googleads/v17/resources/campaign_customizer.proto"google.ads.googleads.v17.resources<google/ads/googleads/v17/enums/customizer_value_status.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
CampaignCustomizerJ
resource_name (	B3�A�A-
+googleads.googleapis.com/CampaignCustomizer;
campaign (	B)�A�A#
!googleads.googleapis.com/CampaignU
customizer_attribute (	B7�A�A�A.
,googleads.googleapis.com/CustomizerAttributed
status (2O.google.ads.googleads.v17.enums.CustomizerValueStatusEnum.CustomizerValueStatusB�AD
value (20.google.ads.googleads.v17.common.CustomizerValueB�A:��A�
+googleads.googleapis.com/CampaignCustomizerScustomers/{customer_id}/campaignCustomizers/{campaign_id}~{customizer_attribute_id}B�
&com.google.ads.googleads.v17.resourcesBCampaignCustomizerProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v17/resources;resources�GAA�"Google.Ads.GoogleAds.V17.Resources�"Google\\Ads\\GoogleAds\\V17\\Resources�&Google::Ads::GoogleAds::V17::Resourcesbproto3
�
Cgoogle/ads/googleads/v17/services/campaign_customizer_service.proto!google.ads.googleads.v17.services<google/ads/googleads/v17/resources/campaign_customizer.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/rpc/status.proto"�
 MutateCampaignCustomizersRequest
customer_id (	B�AW

operations (2>.google.ads.googleads.v17.services.CampaignCustomizerOperationB�A
partial_failure (
validate_only (j
response_content_type (2K.google.ads.googleads.v17.enums.ResponseContentTypeEnum.ResponseContentType"�
CampaignCustomizerOperationH
create (26.google.ads.googleads.v17.resources.CampaignCustomizerH B
remove (	B0�A-
+googleads.googleapis.com/CampaignCustomizerH B
	operation"�
!MutateCampaignCustomizersResponseR
results (2A.google.ads.googleads.v17.services.MutateCampaignCustomizerResult1
partial_failure_error (2.google.rpc.Status"�
MutateCampaignCustomizerResultG
resource_name (	B0�A-
+googleads.googleapis.com/CampaignCustomizerS
campaign_customizer (26.google.ads.googleads.v17.resources.CampaignCustomizer2�
CampaignCustomizerService�
MutateCampaignCustomizersC.google.ads.googleads.v17.services.MutateCampaignCustomizersRequestD.google.ads.googleads.v17.services.MutateCampaignCustomizersResponse"]�Acustomer_id,operations���>"9/v17/customers/{customer_id=*}/campaignCustomizers:mutate:*E�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v17.servicesBCampaignCustomizerServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v17/services;services�GAA�!Google.Ads.GoogleAds.V17.Services�!Google\\Ads\\GoogleAds\\V17\\Services�%Google::Ads::GoogleAds::V17::Servicesbproto3', true);
        static::$is_initialized = true;
    }
}
