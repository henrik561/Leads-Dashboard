<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/enums/dsa_page_feed_criterion_field.proto

namespace Google\Ads\GoogleAds\V17\Enums\DsaPageFeedCriterionFieldEnum;

use UnexpectedValueException;

/**
 * Possible values for Dynamic Search Ad Page Feed criterion fields.
 *
 * Protobuf type <code>google.ads.googleads.v17.enums.DsaPageFeedCriterionFieldEnum.DsaPageFeedCriterionField</code>
 */
class DsaPageFeedCriterionField
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
     * Data Type: URL or URL_LIST. URL of the web page you want to target.
     *
     * Generated from protobuf enum <code>PAGE_URL = 2;</code>
     */
    const PAGE_URL = 2;

    /**
     * Data Type: STRING_LIST. The labels that will help you target ads within
     * your page feed.
     *
     * Generated from protobuf enum <code>LABEL = 3;</code>
     */
    const LABEL = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::PAGE_URL => 'PAGE_URL',
        self::LABEL => 'LABEL',
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
class_alias(DsaPageFeedCriterionField::class, \Google\Ads\GoogleAds\V17\Enums\DsaPageFeedCriterionFieldEnum_DsaPageFeedCriterionField::class);
