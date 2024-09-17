<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/enums/campaign_primary_status_reason.proto

namespace Google\Ads\GoogleAds\V17\Enums\CampaignPrimaryStatusReasonEnum;

use UnexpectedValueException;

/**
 * Enum describing the possible campaign primary status reasons.  Provides
 * insight into why a campaign is not serving or not serving optimally. These
 * reasons are aggregated to determine an overall campaign primary status.
 *
 * Protobuf type <code>google.ads.googleads.v17.enums.CampaignPrimaryStatusReasonEnum.CampaignPrimaryStatusReason</code>
 */
class CampaignPrimaryStatusReason
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;

    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;

    /**
     * The user-specified campaign status is removed.
     *
     * Generated from protobuf enum <code>CAMPAIGN_REMOVED = 2;</code>
     */
    const CAMPAIGN_REMOVED = 2;

    /**
     * The user-specified campaign status is paused.
     *
     * Generated from protobuf enum <code>CAMPAIGN_PAUSED = 3;</code>
     */
    const CAMPAIGN_PAUSED = 3;

    /**
     * The user-specified time for this campaign to start is in the future.
     *
     * Generated from protobuf enum <code>CAMPAIGN_PENDING = 4;</code>
     */
    const CAMPAIGN_PENDING = 4;

    /**
     * The user-specified time for this campaign to end has passed.
     *
     * Generated from protobuf enum <code>CAMPAIGN_ENDED = 5;</code>
     */
    const CAMPAIGN_ENDED = 5;

    /**
     * The campaign is a draft.
     *
     * Generated from protobuf enum <code>CAMPAIGN_DRAFT = 6;</code>
     */
    const CAMPAIGN_DRAFT = 6;

    /**
     * The bidding strategy has incorrect user-specified settings.
     *
     * Generated from protobuf enum <code>BIDDING_STRATEGY_MISCONFIGURED = 7;</code>
     */
    const BIDDING_STRATEGY_MISCONFIGURED = 7;

    /**
     * The bidding strategy is limited by user-specified settings such as lack
     * of data or similar.
     *
     * Generated from protobuf enum <code>BIDDING_STRATEGY_LIMITED = 8;</code>
     */
    const BIDDING_STRATEGY_LIMITED = 8;

    /**
     * The automated bidding system is adjusting to user-specified changes to
     * the bidding strategy.
     *
     * Generated from protobuf enum <code>BIDDING_STRATEGY_LEARNING = 9;</code>
     */
    const BIDDING_STRATEGY_LEARNING = 9;

    /**
     * Campaign could capture more conversion value by adjusting CPA/ROAS
     * targets.
     *
     * Generated from protobuf enum <code>BIDDING_STRATEGY_CONSTRAINED = 10;</code>
     */
    const BIDDING_STRATEGY_CONSTRAINED = 10;

    /**
     * The budget is limiting the campaign's ability to serve.
     *
     * Generated from protobuf enum <code>BUDGET_CONSTRAINED = 11;</code>
     */
    const BUDGET_CONSTRAINED = 11;

    /**
     * The budget has incorrect user-specified settings.
     *
     * Generated from protobuf enum <code>BUDGET_MISCONFIGURED = 12;</code>
     */
    const BUDGET_MISCONFIGURED = 12;

    /**
     * Campaign is not targeting all relevant queries.
     *
     * Generated from protobuf enum <code>SEARCH_VOLUME_LIMITED = 13;</code>
     */
    const SEARCH_VOLUME_LIMITED = 13;

    /**
     * The user-specified ad group statuses are all paused.
     *
     * Generated from protobuf enum <code>AD_GROUPS_PAUSED = 14;</code>
     */
    const AD_GROUPS_PAUSED = 14;

    /**
     * No eligible ad groups exist in this campaign.
     *
     * Generated from protobuf enum <code>NO_AD_GROUPS = 15;</code>
     */
    const NO_AD_GROUPS = 15;

    /**
     * The user-specified keyword statuses are all paused.
     *
     * Generated from protobuf enum <code>KEYWORDS_PAUSED = 16;</code>
     */
    const KEYWORDS_PAUSED = 16;

    /**
     * No eligible keywords exist in this campaign.
     *
     * Generated from protobuf enum <code>NO_KEYWORDS = 17;</code>
     */
    const NO_KEYWORDS = 17;

    /**
     * The user-specified ad group ad statuses are all paused.
     *
     * Generated from protobuf enum <code>AD_GROUP_ADS_PAUSED = 18;</code>
     */
    const AD_GROUP_ADS_PAUSED = 18;

    /**
     * No eligible ad group ads exist in this campaign.
     *
     * Generated from protobuf enum <code>NO_AD_GROUP_ADS = 19;</code>
     */
    const NO_AD_GROUP_ADS = 19;

    /**
     * At least one ad in this campaign is limited by policy.
     *
     * Generated from protobuf enum <code>HAS_ADS_LIMITED_BY_POLICY = 20;</code>
     */
    const HAS_ADS_LIMITED_BY_POLICY = 20;

    /**
     * At least one ad in this campaign is disapproved.
     *
     * Generated from protobuf enum <code>HAS_ADS_DISAPPROVED = 21;</code>
     */
    const HAS_ADS_DISAPPROVED = 21;

    /**
     * Most ads in this campaign are pending review.
     *
     * Generated from protobuf enum <code>MOST_ADS_UNDER_REVIEW = 22;</code>
     */
    const MOST_ADS_UNDER_REVIEW = 22;

    /**
     * The campaign has a lead form goal, and the lead form extension is
     * missing.
     *
     * Generated from protobuf enum <code>MISSING_LEAD_FORM_EXTENSION = 23;</code>
     */
    const MISSING_LEAD_FORM_EXTENSION = 23;

    /**
     * The campaign has a call goal, and the call extension is missing.
     *
     * Generated from protobuf enum <code>MISSING_CALL_EXTENSION = 24;</code>
     */
    const MISSING_CALL_EXTENSION = 24;

    /**
     * The lead form extension is under review.
     *
     * Generated from protobuf enum <code>LEAD_FORM_EXTENSION_UNDER_REVIEW = 25;</code>
     */
    const LEAD_FORM_EXTENSION_UNDER_REVIEW = 25;

    /**
     * The lead extension is disapproved.
     *
     * Generated from protobuf enum <code>LEAD_FORM_EXTENSION_DISAPPROVED = 26;</code>
     */
    const LEAD_FORM_EXTENSION_DISAPPROVED = 26;

    /**
     * The call extension is under review.
     *
     * Generated from protobuf enum <code>CALL_EXTENSION_UNDER_REVIEW = 27;</code>
     */
    const CALL_EXTENSION_UNDER_REVIEW = 27;

    /**
     * The call extension is disapproved.
     *
     * Generated from protobuf enum <code>CALL_EXTENSION_DISAPPROVED = 28;</code>
     */
    const CALL_EXTENSION_DISAPPROVED = 28;

    /**
     * No eligible mobile application ad group criteria exist in this campaign.
     *
     * Generated from protobuf enum <code>NO_MOBILE_APPLICATION_AD_GROUP_CRITERIA = 29;</code>
     */
    const NO_MOBILE_APPLICATION_AD_GROUP_CRITERIA = 29;

    /**
     * The user-specified campaign group status is paused.
     *
     * Generated from protobuf enum <code>CAMPAIGN_GROUP_PAUSED = 30;</code>
     */
    const CAMPAIGN_GROUP_PAUSED = 30;

    /**
     * The user-specified times of all group budgets associated with the parent
     * campaign group has passed.
     *
     * Generated from protobuf enum <code>CAMPAIGN_GROUP_ALL_GROUP_BUDGETS_ENDED = 31;</code>
     */
    const CAMPAIGN_GROUP_ALL_GROUP_BUDGETS_ENDED = 31;

    /**
     * The app associated with this ACi campaign is not released in the target
     * countries of the campaign.
     *
     * Generated from protobuf enum <code>APP_NOT_RELEASED = 32;</code>
     */
    const APP_NOT_RELEASED = 32;

    /**
     * The app associated with this ACi campaign is partially released in the
     * target countries of the campaign.
     *
     * Generated from protobuf enum <code>APP_PARTIALLY_RELEASED = 33;</code>
     */
    const APP_PARTIALLY_RELEASED = 33;

    /**
     * At least one asset group in this campaign is disapproved.
     *
     * Generated from protobuf enum <code>HAS_ASSET_GROUPS_DISAPPROVED = 34;</code>
     */
    const HAS_ASSET_GROUPS_DISAPPROVED = 34;

    /**
     * At least one asset group in this campaign is limited by policy.
     *
     * Generated from protobuf enum <code>HAS_ASSET_GROUPS_LIMITED_BY_POLICY = 35;</code>
     */
    const HAS_ASSET_GROUPS_LIMITED_BY_POLICY = 35;

    /**
     * Most asset groups in this campaign are pending review.
     *
     * Generated from protobuf enum <code>MOST_ASSET_GROUPS_UNDER_REVIEW = 36;</code>
     */
    const MOST_ASSET_GROUPS_UNDER_REVIEW = 36;

    /**
     * No eligible asset groups exist in this campaign.
     *
     * Generated from protobuf enum <code>NO_ASSET_GROUPS = 37;</code>
     */
    const NO_ASSET_GROUPS = 37;

    /**
     * All asset groups in this campaign are paused.
     *
     * Generated from protobuf enum <code>ASSET_GROUPS_PAUSED = 38;</code>
     */
    const ASSET_GROUPS_PAUSED = 38;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::CAMPAIGN_REMOVED => 'CAMPAIGN_REMOVED',
        self::CAMPAIGN_PAUSED => 'CAMPAIGN_PAUSED',
        self::CAMPAIGN_PENDING => 'CAMPAIGN_PENDING',
        self::CAMPAIGN_ENDED => 'CAMPAIGN_ENDED',
        self::CAMPAIGN_DRAFT => 'CAMPAIGN_DRAFT',
        self::BIDDING_STRATEGY_MISCONFIGURED => 'BIDDING_STRATEGY_MISCONFIGURED',
        self::BIDDING_STRATEGY_LIMITED => 'BIDDING_STRATEGY_LIMITED',
        self::BIDDING_STRATEGY_LEARNING => 'BIDDING_STRATEGY_LEARNING',
        self::BIDDING_STRATEGY_CONSTRAINED => 'BIDDING_STRATEGY_CONSTRAINED',
        self::BUDGET_CONSTRAINED => 'BUDGET_CONSTRAINED',
        self::BUDGET_MISCONFIGURED => 'BUDGET_MISCONFIGURED',
        self::SEARCH_VOLUME_LIMITED => 'SEARCH_VOLUME_LIMITED',
        self::AD_GROUPS_PAUSED => 'AD_GROUPS_PAUSED',
        self::NO_AD_GROUPS => 'NO_AD_GROUPS',
        self::KEYWORDS_PAUSED => 'KEYWORDS_PAUSED',
        self::NO_KEYWORDS => 'NO_KEYWORDS',
        self::AD_GROUP_ADS_PAUSED => 'AD_GROUP_ADS_PAUSED',
        self::NO_AD_GROUP_ADS => 'NO_AD_GROUP_ADS',
        self::HAS_ADS_LIMITED_BY_POLICY => 'HAS_ADS_LIMITED_BY_POLICY',
        self::HAS_ADS_DISAPPROVED => 'HAS_ADS_DISAPPROVED',
        self::MOST_ADS_UNDER_REVIEW => 'MOST_ADS_UNDER_REVIEW',
        self::MISSING_LEAD_FORM_EXTENSION => 'MISSING_LEAD_FORM_EXTENSION',
        self::MISSING_CALL_EXTENSION => 'MISSING_CALL_EXTENSION',
        self::LEAD_FORM_EXTENSION_UNDER_REVIEW => 'LEAD_FORM_EXTENSION_UNDER_REVIEW',
        self::LEAD_FORM_EXTENSION_DISAPPROVED => 'LEAD_FORM_EXTENSION_DISAPPROVED',
        self::CALL_EXTENSION_UNDER_REVIEW => 'CALL_EXTENSION_UNDER_REVIEW',
        self::CALL_EXTENSION_DISAPPROVED => 'CALL_EXTENSION_DISAPPROVED',
        self::NO_MOBILE_APPLICATION_AD_GROUP_CRITERIA => 'NO_MOBILE_APPLICATION_AD_GROUP_CRITERIA',
        self::CAMPAIGN_GROUP_PAUSED => 'CAMPAIGN_GROUP_PAUSED',
        self::CAMPAIGN_GROUP_ALL_GROUP_BUDGETS_ENDED => 'CAMPAIGN_GROUP_ALL_GROUP_BUDGETS_ENDED',
        self::APP_NOT_RELEASED => 'APP_NOT_RELEASED',
        self::APP_PARTIALLY_RELEASED => 'APP_PARTIALLY_RELEASED',
        self::HAS_ASSET_GROUPS_DISAPPROVED => 'HAS_ASSET_GROUPS_DISAPPROVED',
        self::HAS_ASSET_GROUPS_LIMITED_BY_POLICY => 'HAS_ASSET_GROUPS_LIMITED_BY_POLICY',
        self::MOST_ASSET_GROUPS_UNDER_REVIEW => 'MOST_ASSET_GROUPS_UNDER_REVIEW',
        self::NO_ASSET_GROUPS => 'NO_ASSET_GROUPS',
        self::ASSET_GROUPS_PAUSED => 'ASSET_GROUPS_PAUSED',
    ];

    public static function name($value)
    {
        if (! isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                'Enum %s has no name defined for value %s', __CLASS__, $value));
        }

        return self::$valueToName[$value];
    }

    public static function value($name)
    {
        $const = __CLASS__.'::'.strtoupper($name);
        if (! defined($const)) {
            throw new UnexpectedValueException(sprintf(
                'Enum %s has no value defined for name %s', __CLASS__, $name));
        }

        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CampaignPrimaryStatusReason::class, \Google\Ads\GoogleAds\V17\Enums\CampaignPrimaryStatusReasonEnum_CampaignPrimaryStatusReason::class);
