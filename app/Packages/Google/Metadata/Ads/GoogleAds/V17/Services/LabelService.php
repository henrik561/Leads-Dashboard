<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/services/label_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Services;

class LabelService
{
    public static $is_initialized = false;

    public static function initOnce()
    {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
            return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
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
0google/ads/googleads/v17/common/text_label.protogoogle.ads.googleads.v17.common"i
	TextLabel
background_color (	H �
description (	H�B
_background_colorB
_descriptionB�
#com.google.ads.googleads.v17.commonBTextLabelProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v17/common;common�GAA�Google.Ads.GoogleAds.V17.Common�Google\\Ads\\GoogleAds\\V17\\Common�#Google::Ads::GoogleAds::V17::Commonbproto3
�
1google/ads/googleads/v17/enums/label_status.protogoogle.ads.googleads.v17.enums"X
LabelStatusEnum"E
LabelStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
"com.google.ads.googleads.v17.enumsBLabelStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
.google/ads/googleads/v17/resources/label.proto"google.ads.googleads.v17.resources1google/ads/googleads/v17/enums/label_status.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
Label=
resource_name (	B&�A�A 
googleads.googleapis.com/Label
id (B�AH �
name (	H�P
status (2;.google.ads.googleads.v17.enums.LabelStatusEnum.LabelStatusB�A>

text_label (2*.google.ads.googleads.v17.common.TextLabel:N�AK
googleads.googleapis.com/Label)customers/{customer_id}/labels/{label_id}B
_idB
_nameB�
&com.google.ads.googleads.v17.resourcesB
LabelProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v17/resources;resources�GAA�"Google.Ads.GoogleAds.V17.Resources�"Google\\Ads\\GoogleAds\\V17\\Resources�&Google::Ads::GoogleAds::V17::Resourcesbproto3
�
5google/ads/googleads/v17/services/label_service.proto!google.ads.googleads.v17.services.google/ads/googleads/v17/resources/label.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"�
MutateLabelsRequest
customer_id (	B�AJ

operations (21.google.ads.googleads.v17.services.LabelOperationB�A
partial_failure (
validate_only (j
response_content_type (2K.google.ads.googleads.v17.enums.ResponseContentTypeEnum.ResponseContentType"�
LabelOperation/
update_mask (2.google.protobuf.FieldMask;
create (2).google.ads.googleads.v17.resources.LabelH ;
update (2).google.ads.googleads.v17.resources.LabelH 5
remove (	B#�A 
googleads.googleapis.com/LabelH B
	operation"�
MutateLabelsResponse1
partial_failure_error (2.google.rpc.StatusE
results (24.google.ads.googleads.v17.services.MutateLabelResult"�
MutateLabelResult:
resource_name (	B#�A 
googleads.googleapis.com/Label8
label (2).google.ads.googleads.v17.resources.Label2�
LabelService�
MutateLabels6.google.ads.googleads.v17.services.MutateLabelsRequest7.google.ads.googleads.v17.services.MutateLabelsResponse"P�Acustomer_id,operations���1",/v17/customers/{customer_id=*}/labels:mutate:*E�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v17.servicesBLabelServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v17/services;services�GAA�!Google.Ads.GoogleAds.V17.Services�!Google\\Ads\\GoogleAds\\V17\\Services�%Google::Ads::GoogleAds::V17::Servicesbproto3', true);
        static::$is_initialized = true;
    }
}
