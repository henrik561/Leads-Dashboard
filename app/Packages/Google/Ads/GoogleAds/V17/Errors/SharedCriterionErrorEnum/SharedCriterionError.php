<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/errors/shared_criterion_error.proto

namespace Google\Ads\GoogleAds\V17\Errors\SharedCriterionErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible shared criterion errors.
 *
 * Protobuf type <code>google.ads.googleads.v17.errors.SharedCriterionErrorEnum.SharedCriterionError</code>
 */
class SharedCriterionError
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
     * The criterion is not appropriate for the shared set type.
     *
     * Generated from protobuf enum <code>CRITERION_TYPE_NOT_ALLOWED_FOR_SHARED_SET_TYPE = 2;</code>
     */
    const CRITERION_TYPE_NOT_ALLOWED_FOR_SHARED_SET_TYPE = 2;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::CRITERION_TYPE_NOT_ALLOWED_FOR_SHARED_SET_TYPE => 'CRITERION_TYPE_NOT_ALLOWED_FOR_SHARED_SET_TYPE',
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
class_alias(SharedCriterionError::class, \Google\Ads\GoogleAds\V17\Errors\SharedCriterionErrorEnum_SharedCriterionError::class);
