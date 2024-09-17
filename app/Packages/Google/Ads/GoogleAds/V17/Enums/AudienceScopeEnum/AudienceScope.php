<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/enums/audience_scope.proto

namespace Google\Ads\GoogleAds\V17\Enums\AudienceScopeEnum;

use UnexpectedValueException;

/**
 * Enum containing possible audience scope values.
 *
 * Protobuf type <code>google.ads.googleads.v17.enums.AudienceScopeEnum.AudienceScope</code>
 */
class AudienceScope
{
    /**
     * The scope has not been specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;

    /**
     * The received value is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;

    /**
     * The audience is scoped at the customer level.
     *
     * Generated from protobuf enum <code>CUSTOMER = 2;</code>
     */
    const CUSTOMER = 2;

    /**
     * The audience is scoped under a specific AssetGroup.
     *
     * Generated from protobuf enum <code>ASSET_GROUP = 3;</code>
     */
    const ASSET_GROUP = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::CUSTOMER => 'CUSTOMER',
        self::ASSET_GROUP => 'ASSET_GROUP',
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
class_alias(AudienceScope::class, \Google\Ads\GoogleAds\V17\Enums\AudienceScopeEnum_AudienceScope::class);
