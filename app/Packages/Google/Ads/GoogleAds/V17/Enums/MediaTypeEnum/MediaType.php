<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/enums/media_type.proto

namespace Google\Ads\GoogleAds\V17\Enums\MediaTypeEnum;

use UnexpectedValueException;

/**
 * The type of media.
 *
 * Protobuf type <code>google.ads.googleads.v17.enums.MediaTypeEnum.MediaType</code>
 */
class MediaType
{
    /**
     * The media type has not been specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;

    /**
     * The received value is not known in this version.
     * This is a response-only value.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;

    /**
     * Static image, used for image ad.
     *
     * Generated from protobuf enum <code>IMAGE = 2;</code>
     */
    const IMAGE = 2;

    /**
     * Small image, used for map ad.
     *
     * Generated from protobuf enum <code>ICON = 3;</code>
     */
    const ICON = 3;

    /**
     * ZIP file, used in fields of template ads.
     *
     * Generated from protobuf enum <code>MEDIA_BUNDLE = 4;</code>
     */
    const MEDIA_BUNDLE = 4;

    /**
     * Audio file.
     *
     * Generated from protobuf enum <code>AUDIO = 5;</code>
     */
    const AUDIO = 5;

    /**
     * Video file.
     *
     * Generated from protobuf enum <code>VIDEO = 6;</code>
     */
    const VIDEO = 6;

    /**
     * Animated image, such as animated GIF.
     *
     * Generated from protobuf enum <code>DYNAMIC_IMAGE = 7;</code>
     */
    const DYNAMIC_IMAGE = 7;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::IMAGE => 'IMAGE',
        self::ICON => 'ICON',
        self::MEDIA_BUNDLE => 'MEDIA_BUNDLE',
        self::AUDIO => 'AUDIO',
        self::VIDEO => 'VIDEO',
        self::DYNAMIC_IMAGE => 'DYNAMIC_IMAGE',
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
class_alias(MediaType::class, \Google\Ads\GoogleAds\V17\Enums\MediaTypeEnum_MediaType::class);
