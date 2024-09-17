<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/enums/identity_verification_program_status.proto

namespace Google\Ads\GoogleAds\V17\Enums\IdentityVerificationProgramStatusEnum;

use UnexpectedValueException;

/**
 * Program status of identity verification.
 *
 * Protobuf type <code>google.ads.googleads.v17.enums.IdentityVerificationProgramStatusEnum.IdentityVerificationProgramStatus</code>
 */
class IdentityVerificationProgramStatus
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
     * Verification is pending on user action to proceed.
     *
     * Generated from protobuf enum <code>PENDING_USER_ACTION = 2;</code>
     */
    const PENDING_USER_ACTION = 2;

    /**
     * Verification is pending on review.
     *
     * Generated from protobuf enum <code>PENDING_REVIEW = 3;</code>
     */
    const PENDING_REVIEW = 3;

    /**
     * Verification succeeded.
     *
     * Generated from protobuf enum <code>SUCCESS = 4;</code>
     */
    const SUCCESS = 4;

    /**
     * Verification failed.
     *
     * Generated from protobuf enum <code>FAILURE = 5;</code>
     */
    const FAILURE = 5;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::PENDING_USER_ACTION => 'PENDING_USER_ACTION',
        self::PENDING_REVIEW => 'PENDING_REVIEW',
        self::SUCCESS => 'SUCCESS',
        self::FAILURE => 'FAILURE',
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
class_alias(IdentityVerificationProgramStatus::class, \Google\Ads\GoogleAds\V17\Enums\IdentityVerificationProgramStatusEnum_IdentityVerificationProgramStatus::class);
