<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/enums/customer_acquisition_optimization_mode.proto

namespace Google\Ads\GoogleAds\V17\Enums\CustomerAcquisitionOptimizationModeEnum;

use UnexpectedValueException;

/**
 * Possible optimization mode of a customer acquisition goal.
 *
 * Protobuf type <code>google.ads.googleads.v17.enums.CustomerAcquisitionOptimizationModeEnum.CustomerAcquisitionOptimizationMode</code>
 */
class CustomerAcquisitionOptimizationMode
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
     * The mode is used when campaign is optimizing equally for existing and new
     * customers, which is the default value.
     *
     * Generated from protobuf enum <code>TARGET_ALL_EQUALLY = 2;</code>
     */
    const TARGET_ALL_EQUALLY = 2;

    /**
     * The mode is used when campaign is bidding higher for new customers than
     * existing customer.
     *
     * Generated from protobuf enum <code>BID_HIGHER_FOR_NEW_CUSTOMER = 3;</code>
     */
    const BID_HIGHER_FOR_NEW_CUSTOMER = 3;

    /**
     * The mode is used when campaign is only optimizing for new customers.
     *
     * Generated from protobuf enum <code>TARGET_NEW_CUSTOMER = 4;</code>
     */
    const TARGET_NEW_CUSTOMER = 4;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::TARGET_ALL_EQUALLY => 'TARGET_ALL_EQUALLY',
        self::BID_HIGHER_FOR_NEW_CUSTOMER => 'BID_HIGHER_FOR_NEW_CUSTOMER',
        self::TARGET_NEW_CUSTOMER => 'TARGET_NEW_CUSTOMER',
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
class_alias(CustomerAcquisitionOptimizationMode::class, \Google\Ads\GoogleAds\V17\Enums\CustomerAcquisitionOptimizationModeEnum_CustomerAcquisitionOptimizationMode::class);
