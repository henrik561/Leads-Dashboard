<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/common/metrics.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Common;

class Metrics
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
;google/ads/googleads/v17/enums/interaction_event_type.protogoogle.ads.googleads.v17.enums"�
InteractionEventTypeEnum"i
InteractionEventType
UNSPECIFIED 
UNKNOWN	
CLICK

ENGAGEMENT

VIDEO_VIEW
NONEB�
"com.google.ads.googleads.v17.enumsBInteractionEventTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
9google/ads/googleads/v17/enums/quality_score_bucket.protogoogle.ads.googleads.v17.enums"
QualityScoreBucketEnum"e
QualityScoreBucket
UNSPECIFIED 
UNKNOWN
BELOW_AVERAGE
AVERAGE
ABOVE_AVERAGEB�
"com.google.ads.googleads.v17.enumsBQualityScoreBucketProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�}
-google/ads/googleads/v17/common/metrics.protogoogle.ads.googleads.v17.common9google/ads/googleads/v17/enums/quality_score_bucket.proto"�y
Metrics0
"absolute_top_impression_percentage� (H �
active_view_cpm� (H�
active_view_ctr� (H�%
active_view_impressions� (H�\'
active_view_measurability� (H�0
"active_view_measurable_cost_micros� (H�0
"active_view_measurable_impressions� (H�%
active_view_viewability� (H�4
&all_conversions_from_interactions_rate� (H�#
all_conversions_value� (H	�6
(all_conversions_value_by_conversion_date� (H
�-
all_new_customer_lifetime_value� (H�
all_conversions� (H�0
"all_conversions_by_conversion_date� (H�,
all_conversions_value_per_cost� (H�0
"all_conversions_from_click_to_call� (H�-
all_conversions_from_directions� (H�E
7all_conversions_from_interactions_value_per_interaction� (H�\'
all_conversions_from_menu� (H�(
all_conversions_from_order� (H�3
%all_conversions_from_other_engagement� (H�.
 all_conversions_from_store_visit� (H�0
"all_conversions_from_store_website� (H�G
9auction_insight_search_absolute_top_impression_percentage� (H�5
\'auction_insight_search_impression_share� (H�5
\'auction_insight_search_outranking_share� (H�1
#auction_insight_search_overlap_rate� (H�8
*auction_insight_search_position_above_rate� (H�>
0auction_insight_search_top_impression_percentage� (H�
average_cost� (H�
average_cpc� (H�
average_cpe� (H�
average_cpm� (H �
average_cpv� (H!� 
average_page_views� (H"�"
average_time_on_site� (H#�\'
benchmark_average_max_cpc� (H$�.
 biddable_app_install_conversions� (H%�3
%biddable_app_post_install_conversions� (H&�
benchmark_ctr� (H\'�
bounce_rate� (H(�
clicks� (H)�
combined_clicks� (H*�\'
combined_clicks_per_query� (H+�
combined_queries� (H,�2
$content_budget_lost_impression_share� (H-�&
content_impression_share� (H.�8
*conversion_last_received_request_date_time� (	H/�-
conversion_last_conversion_date� (	H0�0
"content_rank_lost_impression_share� (H1�0
"conversions_from_interactions_rate� (H2�
conversions_value� (H3�2
$conversions_value_by_conversion_date� (H4�)
new_customer_lifetime_value� (H5�(
conversions_value_per_cost� (H6�A
3conversions_from_interactions_value_per_interaction� (H7�
conversions� (H8�,
conversions_by_conversion_date� (H9�
cost_micros� (H:�&
cost_per_all_conversions� (H;�!
cost_per_conversion� (H<�:
,cost_per_current_model_attributed_conversion� (H=�&
cross_device_conversions� (H>�3
%cross_device_conversions_value_micros� (H?�
ctr� (H@�2
$current_model_attributed_conversions� (HA�I
;current_model_attributed_conversions_from_interactions_rate� (HB�Z
Lcurrent_model_attributed_conversions_from_interactions_value_per_interaction� (HC�8
*current_model_attributed_conversions_value� (HD�A
3current_model_attributed_conversions_value_per_cost� (HE�
engagement_rate� (HF�
engagements� (HG�-
hotel_average_lead_value_micros� (HH�*
hotel_commission_rate_micros� (HI�,
hotel_expected_commission_cost� (HJ�/
!hotel_price_difference_percentage� (HK�(
hotel_eligible_impressions� (HL�t
!historical_creative_quality_scoreP (2I.google.ads.googleads.v17.enums.QualityScoreBucketEnum.QualityScoreBucketx
%historical_landing_page_quality_scoreQ (2I.google.ads.googleads.v17.enums.QualityScoreBucketEnum.QualityScoreBucket&
historical_quality_score� (HM�r
historical_search_predicted_ctrS (2I.google.ads.googleads.v17.enums.QualityScoreBucketEnum.QualityScoreBucket
gmail_forwards� (HN�
gmail_saves� (HO�$
gmail_secondary_clicks� (HP�*
impressions_from_store_reach� (HQ�
impressions� (HR�
interaction_rate� (HS�
interactions� (HT�n
interaction_event_typesd (2M.google.ads.googleads.v17.enums.InteractionEventTypeEnum.InteractionEventType 
invalid_click_rate� (HU�
invalid_clicks� (HV�
message_chats� (HW�!
message_impressions� (HX�
message_chat_rate� (HY�/
!mobile_friendly_clicks_percentage� (HZ�\'
optimization_score_uplift� (H[�$
optimization_score_url� (	H\\�
organic_clicks� (H]�&
organic_clicks_per_query� (H^�!
organic_impressions� (H_�+
organic_impressions_per_query� (H`�
organic_queries� (Ha�"
percent_new_visitors� (Hb�
phone_calls� (Hc�
phone_impressions� (Hd� 
phone_through_rate� (He�
relative_ctr� (Hf�2
$search_absolute_top_impression_share� (Hg�>
0search_budget_lost_absolute_top_impression_share� (Hh�1
#search_budget_lost_impression_share� (Hi�5
\'search_budget_lost_top_impression_share� (Hj� 
search_click_share� (Hk�1
#search_exact_match_impression_share� (Hl�%
search_impression_share� (Hm�<
.search_rank_lost_absolute_top_impression_share� (Hn�/
!search_rank_lost_impression_share� (Ho�3
%search_rank_lost_top_impression_share� (Hp�)
search_top_impression_share� (Hq�O
search_volume� (22.google.ads.googleads.v17.common.SearchVolumeRangeHr�
speed_score� (Hs�\'
average_target_cpa_micros� (Ht�!
average_target_roas� (Hu�\'
top_impression_percentage� (Hv�>
0valid_accelerated_mobile_pages_clicks_percentage� (Hw�\'
value_per_all_conversions� (Hx�:
,value_per_all_conversions_by_conversion_date� (Hy�"
value_per_conversion� (Hz�6
(value_per_conversions_by_conversion_date� (H{�;
-value_per_current_model_attributed_conversion� (H|�&
video_quartile_p100_rate� (H}�%
video_quartile_p25_rate� (H~�%
video_quartile_p50_rate� (H�&
video_quartile_p75_rate� (H��
video_view_rate� (H��
video_views� (H��\'
view_through_conversions� (H��
sk_ad_network_installs� ((
sk_ad_network_total_conversions� (#
publisher_purchased_clicks� (!
publisher_organic_clicks� (!
publisher_unknown_clicks� (@
1all_conversions_from_location_asset_click_to_call� (H��=
.all_conversions_from_location_asset_directions� (H��7
(all_conversions_from_location_asset_menu� (H��8
)all_conversions_from_location_asset_order� (H��C
4all_conversions_from_location_asset_other_engagement� (H��?
0all_conversions_from_location_asset_store_visits� (H��:
+all_conversions_from_location_asset_website� (H��C
4eligible_impressions_from_location_asset_store_reach� (H��I
:view_through_conversions_from_location_asset_click_to_call� (H��F
7view_through_conversions_from_location_asset_directions� (H��@
1view_through_conversions_from_location_asset_menu� (H��A
2view_through_conversions_from_location_asset_order� (H��L
=view_through_conversions_from_location_asset_other_engagement� (H��H
9view_through_conversions_from_location_asset_store_visits� (H��C
4view_through_conversions_from_location_asset_website� (H��
orders� (H��)
average_order_value_micros� (H�� 
average_cart_size� (H��(
cost_of_goods_sold_micros� (H��"
gross_profit_micros� (H��"
gross_profit_margin� (H��
revenue_micros� (H��

units_sold� (H��3
$cross_sell_cost_of_goods_sold_micros� (H��-
cross_sell_gross_profit_micros� (H��(
cross_sell_revenue_micros� (H��$
cross_sell_units_sold� (H��-
lead_cost_of_goods_sold_micros� (H��\'
lead_gross_profit_micros� (H��"
lead_revenue_micros� (H��
lead_units_sold� (H��
unique_users� (H��4
%average_impression_frequency_per_user� (H��$
linked_entities_count� (H��
linked_sample_entities� (	)
 sample_best_performance_entities� (	)
 sample_good_performance_entities� (	(
sample_low_performance_entities� (	-
$sample_learning_performance_entities� (	,
#sample_unrated_performance_entities� (	\'
asset_pinned_total_count� (H��:
+asset_pinned_as_headline_position_one_count� (H��:
+asset_pinned_as_headline_position_two_count� (H��<
-asset_pinned_as_headline_position_three_count� (H��=
.asset_pinned_as_description_position_one_count� (H��=
.asset_pinned_as_description_position_two_count� (H��;
,asset_best_performance_impression_percentage� (H��;
,asset_good_performance_impression_percentage� (H��:
+asset_low_performance_impression_percentage� (H��?
0asset_learning_performance_impression_percentage� (H��>
/asset_unrated_performance_impression_percentage� (H��5
&asset_best_performance_cost_percentage� (H��5
&asset_good_performance_cost_percentage� (H��4
%asset_low_performance_cost_percentage� (H��9
*asset_learning_performance_cost_percentage� (H��8
)asset_unrated_performance_cost_percentage� (H��B%
#_absolute_top_impression_percentageB
_active_view_cpmB
_active_view_ctrB
_active_view_impressionsB
_active_view_measurabilityB%
#_active_view_measurable_cost_microsB%
#_active_view_measurable_impressionsB
_active_view_viewabilityB)
\'_all_conversions_from_interactions_rateB
_all_conversions_valueB+
)_all_conversions_value_by_conversion_dateB"
 _all_new_customer_lifetime_valueB
_all_conversionsB%
#_all_conversions_by_conversion_dateB!
_all_conversions_value_per_costB%
#_all_conversions_from_click_to_callB"
 _all_conversions_from_directionsB:
8_all_conversions_from_interactions_value_per_interactionB
_all_conversions_from_menuB
_all_conversions_from_orderB(
&_all_conversions_from_other_engagementB#
!_all_conversions_from_store_visitB%
#_all_conversions_from_store_websiteB<
:_auction_insight_search_absolute_top_impression_percentageB*
(_auction_insight_search_impression_shareB*
(_auction_insight_search_outranking_shareB&
$_auction_insight_search_overlap_rateB-
+_auction_insight_search_position_above_rateB3
1_auction_insight_search_top_impression_percentageB
_average_costB
_average_cpcB
_average_cpeB
_average_cpmB
_average_cpvB
_average_page_viewsB
_average_time_on_siteB
_benchmark_average_max_cpcB#
!_biddable_app_install_conversionsB(
&_biddable_app_post_install_conversionsB
_benchmark_ctrB
_bounce_rateB	
_clicksB
_combined_clicksB
_combined_clicks_per_queryB
_combined_queriesB\'
%_content_budget_lost_impression_shareB
_content_impression_shareB-
+_conversion_last_received_request_date_timeB"
 _conversion_last_conversion_dateB%
#_content_rank_lost_impression_shareB%
#_conversions_from_interactions_rateB
_conversions_valueB\'
%_conversions_value_by_conversion_dateB
_new_customer_lifetime_valueB
_conversions_value_per_costB6
4_conversions_from_interactions_value_per_interactionB
_conversionsB!
_conversions_by_conversion_dateB
_cost_microsB
_cost_per_all_conversionsB
_cost_per_conversionB/
-_cost_per_current_model_attributed_conversionB
_cross_device_conversionsB(
&_cross_device_conversions_value_microsB
_ctrB\'
%_current_model_attributed_conversionsB>
<_current_model_attributed_conversions_from_interactions_rateBO
M_current_model_attributed_conversions_from_interactions_value_per_interactionB-
+_current_model_attributed_conversions_valueB6
4_current_model_attributed_conversions_value_per_costB
_engagement_rateB
_engagementsB"
 _hotel_average_lead_value_microsB
_hotel_commission_rate_microsB!
_hotel_expected_commission_costB$
"_hotel_price_difference_percentageB
_hotel_eligible_impressionsB
_historical_quality_scoreB
_gmail_forwardsB
_gmail_savesB
_gmail_secondary_clicksB
_impressions_from_store_reachB
_impressionsB
_interaction_rateB
_interactionsB
_invalid_click_rateB
_invalid_clicksB
_message_chatsB
_message_impressionsB
_message_chat_rateB$
"_mobile_friendly_clicks_percentageB
_optimization_score_upliftB
_optimization_score_urlB
_organic_clicksB
_organic_clicks_per_queryB
_organic_impressionsB 
_organic_impressions_per_queryB
_organic_queriesB
_percent_new_visitorsB
_phone_callsB
_phone_impressionsB
_phone_through_rateB
_relative_ctrB\'
%_search_absolute_top_impression_shareB3
1_search_budget_lost_absolute_top_impression_shareB&
$_search_budget_lost_impression_shareB*
(_search_budget_lost_top_impression_shareB
_search_click_shareB&
$_search_exact_match_impression_shareB
_search_impression_shareB1
/_search_rank_lost_absolute_top_impression_shareB$
"_search_rank_lost_impression_shareB(
&_search_rank_lost_top_impression_shareB
_search_top_impression_shareB
_search_volumeB
_speed_scoreB
_average_target_cpa_microsB
_average_target_roasB
_top_impression_percentageB3
1_valid_accelerated_mobile_pages_clicks_percentageB
_value_per_all_conversionsB/
-_value_per_all_conversions_by_conversion_dateB
_value_per_conversionB+
)_value_per_conversions_by_conversion_dateB0
._value_per_current_model_attributed_conversionB
_video_quartile_p100_rateB
_video_quartile_p25_rateB
_video_quartile_p50_rateB
_video_quartile_p75_rateB
_video_view_rateB
_video_viewsB
_view_through_conversionsB4
2_all_conversions_from_location_asset_click_to_callB1
/_all_conversions_from_location_asset_directionsB+
)_all_conversions_from_location_asset_menuB,
*_all_conversions_from_location_asset_orderB7
5_all_conversions_from_location_asset_other_engagementB3
1_all_conversions_from_location_asset_store_visitsB.
,_all_conversions_from_location_asset_websiteB7
5_eligible_impressions_from_location_asset_store_reachB=
;_view_through_conversions_from_location_asset_click_to_callB:
8_view_through_conversions_from_location_asset_directionsB4
2_view_through_conversions_from_location_asset_menuB5
3_view_through_conversions_from_location_asset_orderB@
>_view_through_conversions_from_location_asset_other_engagementB<
:_view_through_conversions_from_location_asset_store_visitsB7
5_view_through_conversions_from_location_asset_websiteB	
_ordersB
_average_order_value_microsB
_average_cart_sizeB
_cost_of_goods_sold_microsB
_gross_profit_microsB
_gross_profit_marginB
_revenue_microsB
_units_soldB\'
%_cross_sell_cost_of_goods_sold_microsB!
_cross_sell_gross_profit_microsB
_cross_sell_revenue_microsB
_cross_sell_units_soldB!
_lead_cost_of_goods_sold_microsB
_lead_gross_profit_microsB
_lead_revenue_microsB
_lead_units_soldB
_unique_usersB(
&_average_impression_frequency_per_userB
_linked_entities_countB
_asset_pinned_total_countB.
,_asset_pinned_as_headline_position_one_countB.
,_asset_pinned_as_headline_position_two_countB0
._asset_pinned_as_headline_position_three_countB1
/_asset_pinned_as_description_position_one_countB1
/_asset_pinned_as_description_position_two_countB/
-_asset_best_performance_impression_percentageB/
-_asset_good_performance_impression_percentageB.
,_asset_low_performance_impression_percentageB3
1_asset_learning_performance_impression_percentageB2
0_asset_unrated_performance_impression_percentageB)
\'_asset_best_performance_cost_percentageB)
\'_asset_good_performance_cost_percentageB(
&_asset_low_performance_cost_percentageB-
+_asset_learning_performance_cost_percentageB,
*_asset_unrated_performance_cost_percentage"G
SearchVolumeRange
min (H �
max (H�B
_minB
_maxB�
#com.google.ads.googleads.v17.commonBMetricsProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v17/common;common�GAA�Google.Ads.GoogleAds.V17.Common�Google\\Ads\\GoogleAds\\V17\\Common�#Google::Ads::GoogleAds::V17::Commonbproto3', true);
        static::$is_initialized = true;
    }
}
