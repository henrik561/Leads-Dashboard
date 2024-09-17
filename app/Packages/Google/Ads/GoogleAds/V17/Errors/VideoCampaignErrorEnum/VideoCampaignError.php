<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/errors/video_campaign_error.proto

namespace Google\Ads\GoogleAds\V17\Errors\VideoCampaignErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible video campaign errors.
 *
 * Protobuf type <code>google.ads.googleads.v17.errors.VideoCampaignErrorEnum.VideoCampaignError</code>
 */
class VideoCampaignError
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
     * Cannot modify the video campaign without reservation.
     * See https://support.google.com/google-ads/answer/9547606.
     *
     * Generated from protobuf enum <code>MUTATE_REQUIRES_RESERVATION = 2;</code>
     */
    const MUTATE_REQUIRES_RESERVATION = 2;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::MUTATE_REQUIRES_RESERVATION => 'MUTATE_REQUIRES_RESERVATION',
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
class_alias(VideoCampaignError::class, \Google\Ads\GoogleAds\V17\Errors\VideoCampaignErrorEnum_VideoCampaignError::class);
