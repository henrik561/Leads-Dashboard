<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/resources/topic_view.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Resources;

class TopicView
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
�
3google/ads/googleads/v17/resources/topic_view.proto"google.ads.googleads.v17.resourcesgoogle/api/resource.proto"�
	TopicViewA
resource_name (	B*�A�A$
"googleads.googleapis.com/TopicView:h�Ae
"googleads.googleapis.com/TopicView?customers/{customer_id}/topicViews/{ad_group_id}~{criterion_id}B�
&com.google.ads.googleads.v17.resourcesBTopicViewProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v17/resources;resources�GAA�"Google.Ads.GoogleAds.V17.Resources�"Google\\Ads\\GoogleAds\\V17\\Resources�&Google::Ads::GoogleAds::V17::Resourcesbproto3', true);
        static::$is_initialized = true;
    }
}
