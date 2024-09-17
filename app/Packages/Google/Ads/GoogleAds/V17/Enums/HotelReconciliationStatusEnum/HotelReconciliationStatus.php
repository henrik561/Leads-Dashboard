<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/enums/hotel_reconciliation_status.proto

namespace Google\Ads\GoogleAds\V17\Enums\HotelReconciliationStatusEnum;

use UnexpectedValueException;

/**
 * Status of the hotel booking reconciliation.
 *
 * Protobuf type <code>google.ads.googleads.v17.enums.HotelReconciliationStatusEnum.HotelReconciliationStatus</code>
 */
class HotelReconciliationStatus
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
     * Bookings are for a future date, or a stay is underway but the check-out
     * date hasn't passed. An active reservation can't be reconciled.
     *
     * Generated from protobuf enum <code>RESERVATION_ENABLED = 2;</code>
     */
    const RESERVATION_ENABLED = 2;

    /**
     * Check-out has already taken place, or the booked dates have passed
     * without cancellation. Bookings that are not reconciled within 45 days of
     * the check-out date are billed based on the original booking price.
     *
     * Generated from protobuf enum <code>RECONCILIATION_NEEDED = 3;</code>
     */
    const RECONCILIATION_NEEDED = 3;

    /**
     * These bookings have been reconciled. Reconciled bookings are billed 45
     * days after the check-out date.
     *
     * Generated from protobuf enum <code>RECONCILED = 4;</code>
     */
    const RECONCILED = 4;

    /**
     * This booking was marked as canceled. Canceled stays with a value greater
     * than zero (due to minimum stay rules or cancellation fees) are billed 45
     * days after the check-out date.
     *
     * Generated from protobuf enum <code>CANCELED = 5;</code>
     */
    const CANCELED = 5;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::RESERVATION_ENABLED => 'RESERVATION_ENABLED',
        self::RECONCILIATION_NEEDED => 'RECONCILIATION_NEEDED',
        self::RECONCILED => 'RECONCILED',
        self::CANCELED => 'CANCELED',
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
class_alias(HotelReconciliationStatus::class, \Google\Ads\GoogleAds\V17\Enums\HotelReconciliationStatusEnum_HotelReconciliationStatus::class);
