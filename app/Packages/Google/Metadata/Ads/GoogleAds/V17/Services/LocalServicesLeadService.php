<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/services/local_services_lead_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Services;

class LocalServicesLeadService
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
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�

Cgoogle/ads/googleads/v17/services/local_services_lead_service.proto!google.ads.googleads.v17.servicesgoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/rpc/status.proto"�
AppendLeadConversationRequest
customer_id (	B�AK
conversations (2/.google.ads.googleads.v17.services.ConversationB�A"p
AppendLeadConversationResponseN
	responses (26.google.ads.googleads.v17.services.ConversationOrErrorB�A"r
ConversationO
local_services_lead (	B2�A�A,
*googleads.googleapis.com/LocalServicesLead
text (	B�A"�
ConversationOrError*
 local_services_lead_conversation (	H 3
partial_failure_error (2.google.rpc.StatusH B#
!append_lead_conversation_response2�
LocalServicesLeadService�
AppendLeadConversation@.google.ads.googleads.v17.services.AppendLeadConversationRequestA.google.ads.googleads.v17.services.AppendLeadConversationResponse"j�Acustomer_id,conversations���H"C/v17/customers/{customer_id=*}/localServices:appendLeadConversation:*E�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v17.servicesBLocalServicesLeadServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v17/services;services�GAA�!Google.Ads.GoogleAds.V17.Services�!Google\\Ads\\GoogleAds\\V17\\Services�%Google::Ads::GoogleAds::V17::Servicesbproto3', true);
        static::$is_initialized = true;
    }
}
