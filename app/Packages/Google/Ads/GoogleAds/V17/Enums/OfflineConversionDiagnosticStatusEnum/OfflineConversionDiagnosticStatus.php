<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/enums/offline_conversion_diagnostic_status_enum.proto

namespace Google\Ads\GoogleAds\V17\Enums\OfflineConversionDiagnosticStatusEnum;

use UnexpectedValueException;

/**
 * Possible statuses of the offline ingestion setup.
 *
 * Protobuf type <code>google.ads.googleads.v17.enums.OfflineConversionDiagnosticStatusEnum.OfflineConversionDiagnosticStatus</code>
 */
class OfflineConversionDiagnosticStatus
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
     * Your offline data ingestion setup is active and optimal for downstream
     * processing.
     *
     * Generated from protobuf enum <code>EXCELLENT = 2;</code>
     */
    const EXCELLENT = 2;

    /**
     * Your offline ingestion setup is active, but there are further
     * improvements you could make. See alerts.
     *
     * Generated from protobuf enum <code>GOOD = 3;</code>
     */
    const GOOD = 3;

    /**
     * Your offline ingestion setup is active, but there are errors that require
     * your attention. See alerts.
     *
     * Generated from protobuf enum <code>NEEDS_ATTENTION = 4;</code>
     */
    const NEEDS_ATTENTION = 4;

    /**
     * Your offline ingestion setup has not received data in the last 28 days,
     * there may be something wrong.
     *
     * Generated from protobuf enum <code>NO_RECENT_UPLOAD = 6;</code>
     */
    const NO_RECENT_UPLOAD = 6;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::EXCELLENT => 'EXCELLENT',
        self::GOOD => 'GOOD',
        self::NEEDS_ATTENTION => 'NEEDS_ATTENTION',
        self::NO_RECENT_UPLOAD => 'NO_RECENT_UPLOAD',
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
class_alias(OfflineConversionDiagnosticStatus::class, \Google\Ads\GoogleAds\V17\Enums\OfflineConversionDiagnosticStatusEnum_OfflineConversionDiagnosticStatus::class);
