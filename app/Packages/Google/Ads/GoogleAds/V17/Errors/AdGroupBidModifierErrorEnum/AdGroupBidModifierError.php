<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/errors/ad_group_bid_modifier_error.proto

namespace Google\Ads\GoogleAds\V17\Errors\AdGroupBidModifierErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible ad group bid modifier errors.
 *
 * Protobuf type <code>google.ads.googleads.v17.errors.AdGroupBidModifierErrorEnum.AdGroupBidModifierError</code>
 */
class AdGroupBidModifierError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;

    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;

    /**
     * The criterion ID does not support bid modification.
     *
     * Generated from protobuf enum <code>CRITERION_ID_NOT_SUPPORTED = 2;</code>
     */
    const CRITERION_ID_NOT_SUPPORTED = 2;

    /**
     * Cannot override the bid modifier for the given criterion ID if the parent
     * campaign is opted out of the same criterion.
     *
     * Generated from protobuf enum <code>CANNOT_OVERRIDE_OPTED_OUT_CAMPAIGN_CRITERION_BID_MODIFIER = 3;</code>
     */
    const CANNOT_OVERRIDE_OPTED_OUT_CAMPAIGN_CRITERION_BID_MODIFIER = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::CRITERION_ID_NOT_SUPPORTED => 'CRITERION_ID_NOT_SUPPORTED',
        self::CANNOT_OVERRIDE_OPTED_OUT_CAMPAIGN_CRITERION_BID_MODIFIER => 'CANNOT_OVERRIDE_OPTED_OUT_CAMPAIGN_CRITERION_BID_MODIFIER',
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
class_alias(AdGroupBidModifierError::class, \Google\Ads\GoogleAds\V17\Errors\AdGroupBidModifierErrorEnum_AdGroupBidModifierError::class);
