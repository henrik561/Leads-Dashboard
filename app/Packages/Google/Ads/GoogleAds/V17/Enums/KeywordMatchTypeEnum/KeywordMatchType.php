<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/enums/keyword_match_type.proto

namespace Google\Ads\GoogleAds\V17\Enums\KeywordMatchTypeEnum;

use UnexpectedValueException;

/**
 * Possible Keyword match types.
 *
 * Protobuf type <code>google.ads.googleads.v17.enums.KeywordMatchTypeEnum.KeywordMatchType</code>
 */
class KeywordMatchType
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
     * Exact match.
     *
     * Generated from protobuf enum <code>EXACT = 2;</code>
     */
    const EXACT = 2;

    /**
     * Phrase match.
     *
     * Generated from protobuf enum <code>PHRASE = 3;</code>
     */
    const PHRASE = 3;

    /**
     * Broad match.
     *
     * Generated from protobuf enum <code>BROAD = 4;</code>
     */
    const BROAD = 4;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::EXACT => 'EXACT',
        self::PHRASE => 'PHRASE',
        self::BROAD => 'BROAD',
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
class_alias(KeywordMatchType::class, \Google\Ads\GoogleAds\V17\Enums\KeywordMatchTypeEnum_KeywordMatchType::class);
