<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/errors/context_error.proto

namespace Google\Ads\GoogleAds\V17\Errors\ContextErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible context errors.
 *
 * Protobuf type <code>google.ads.googleads.v17.errors.ContextErrorEnum.ContextError</code>
 */
class ContextError
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
     * The operation is not allowed for the given context.
     *
     * Generated from protobuf enum <code>OPERATION_NOT_PERMITTED_FOR_CONTEXT = 2;</code>
     */
    const OPERATION_NOT_PERMITTED_FOR_CONTEXT = 2;

    /**
     * The operation is not allowed for removed resources.
     *
     * Generated from protobuf enum <code>OPERATION_NOT_PERMITTED_FOR_REMOVED_RESOURCE = 3;</code>
     */
    const OPERATION_NOT_PERMITTED_FOR_REMOVED_RESOURCE = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::OPERATION_NOT_PERMITTED_FOR_CONTEXT => 'OPERATION_NOT_PERMITTED_FOR_CONTEXT',
        self::OPERATION_NOT_PERMITTED_FOR_REMOVED_RESOURCE => 'OPERATION_NOT_PERMITTED_FOR_REMOVED_RESOURCE',
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
class_alias(ContextError::class, \Google\Ads\GoogleAds\V17\Errors\ContextErrorEnum_ContextError::class);
