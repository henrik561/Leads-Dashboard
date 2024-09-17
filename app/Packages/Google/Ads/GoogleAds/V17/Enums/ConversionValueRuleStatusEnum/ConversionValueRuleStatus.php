<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/enums/conversion_value_rule_status.proto

namespace Google\Ads\GoogleAds\V17\Enums\ConversionValueRuleStatusEnum;

use UnexpectedValueException;

/**
 * Possible statuses of a conversion value rule.
 *
 * Protobuf type <code>google.ads.googleads.v17.enums.ConversionValueRuleStatusEnum.ConversionValueRuleStatus</code>
 */
class ConversionValueRuleStatus
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
     * Conversion Value Rule is enabled and can be applied.
     *
     * Generated from protobuf enum <code>ENABLED = 2;</code>
     */
    const ENABLED = 2;

    /**
     * Conversion Value Rule is permanently deleted and can't be applied.
     *
     * Generated from protobuf enum <code>REMOVED = 3;</code>
     */
    const REMOVED = 3;

    /**
     * Conversion Value Rule is paused, but can be re-enabled.
     *
     * Generated from protobuf enum <code>PAUSED = 4;</code>
     */
    const PAUSED = 4;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::ENABLED => 'ENABLED',
        self::REMOVED => 'REMOVED',
        self::PAUSED => 'PAUSED',
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
class_alias(ConversionValueRuleStatus::class, \Google\Ads\GoogleAds\V17\Enums\ConversionValueRuleStatusEnum_ConversionValueRuleStatus::class);
