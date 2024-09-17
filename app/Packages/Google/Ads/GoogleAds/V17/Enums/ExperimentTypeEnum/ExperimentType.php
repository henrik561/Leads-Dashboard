<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/enums/experiment_type.proto

namespace Google\Ads\GoogleAds\V17\Enums\ExperimentTypeEnum;

use UnexpectedValueException;

/**
 * The type of the experiment.
 *
 * Protobuf type <code>google.ads.googleads.v17.enums.ExperimentTypeEnum.ExperimentType</code>
 */
class ExperimentType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;

    /**
     * The value is unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;

    /**
     * This is a DISPLAY_AND_VIDEO_360 experiment.
     *
     * Generated from protobuf enum <code>DISPLAY_AND_VIDEO_360 = 2;</code>
     */
    const DISPLAY_AND_VIDEO_360 = 2;

    /**
     * This is an ad variation experiment.
     *
     * Generated from protobuf enum <code>AD_VARIATION = 3;</code>
     */
    const AD_VARIATION = 3;

    /**
     * A custom experiment consisting of Video campaigns.
     *
     * Generated from protobuf enum <code>YOUTUBE_CUSTOM = 5;</code>
     */
    const YOUTUBE_CUSTOM = 5;

    /**
     * A custom experiment consisting of display campaigns.
     *
     * Generated from protobuf enum <code>DISPLAY_CUSTOM = 6;</code>
     */
    const DISPLAY_CUSTOM = 6;

    /**
     * A custom experiment consisting of search campaigns.
     *
     * Generated from protobuf enum <code>SEARCH_CUSTOM = 7;</code>
     */
    const SEARCH_CUSTOM = 7;

    /**
     * An experiment that compares bidding strategies for display campaigns.
     *
     * Generated from protobuf enum <code>DISPLAY_AUTOMATED_BIDDING_STRATEGY = 8;</code>
     */
    const DISPLAY_AUTOMATED_BIDDING_STRATEGY = 8;

    /**
     * An experiment that compares bidding strategies for search campaigns."
     *
     * Generated from protobuf enum <code>SEARCH_AUTOMATED_BIDDING_STRATEGY = 9;</code>
     */
    const SEARCH_AUTOMATED_BIDDING_STRATEGY = 9;

    /**
     * An experiment that compares bidding strategies for shopping campaigns.
     *
     * Generated from protobuf enum <code>SHOPPING_AUTOMATED_BIDDING_STRATEGY = 10;</code>
     */
    const SHOPPING_AUTOMATED_BIDDING_STRATEGY = 10;

    /**
     * DEPRECATED. A smart matching experiment with search campaigns.
     *
     * Generated from protobuf enum <code>SMART_MATCHING = 11;</code>
     */
    const SMART_MATCHING = 11;

    /**
     * A custom experiment consisting of hotel campaigns.
     *
     * Generated from protobuf enum <code>HOTEL_CUSTOM = 12;</code>
     */
    const HOTEL_CUSTOM = 12;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::DISPLAY_AND_VIDEO_360 => 'DISPLAY_AND_VIDEO_360',
        self::AD_VARIATION => 'AD_VARIATION',
        self::YOUTUBE_CUSTOM => 'YOUTUBE_CUSTOM',
        self::DISPLAY_CUSTOM => 'DISPLAY_CUSTOM',
        self::SEARCH_CUSTOM => 'SEARCH_CUSTOM',
        self::DISPLAY_AUTOMATED_BIDDING_STRATEGY => 'DISPLAY_AUTOMATED_BIDDING_STRATEGY',
        self::SEARCH_AUTOMATED_BIDDING_STRATEGY => 'SEARCH_AUTOMATED_BIDDING_STRATEGY',
        self::SHOPPING_AUTOMATED_BIDDING_STRATEGY => 'SHOPPING_AUTOMATED_BIDDING_STRATEGY',
        self::SMART_MATCHING => 'SMART_MATCHING',
        self::HOTEL_CUSTOM => 'HOTEL_CUSTOM',
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
class_alias(ExperimentType::class, \Google\Ads\GoogleAds\V17\Enums\ExperimentTypeEnum_ExperimentType::class);
