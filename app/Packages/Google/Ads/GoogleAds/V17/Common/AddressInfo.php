<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/common/criteria.proto

namespace Google\Ads\GoogleAds\V17\Common;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Address for proximity criterion.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.common.AddressInfo</code>
 */
class AddressInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Postal code.
     *
     * Generated from protobuf field <code>optional string postal_code = 8;</code>
     */
    protected $postal_code = null;

    /**
     * Province or state code.
     *
     * Generated from protobuf field <code>optional string province_code = 9;</code>
     */
    protected $province_code = null;

    /**
     * Country code.
     *
     * Generated from protobuf field <code>optional string country_code = 10;</code>
     */
    protected $country_code = null;

    /**
     * Province or state name.
     *
     * Generated from protobuf field <code>optional string province_name = 11;</code>
     */
    protected $province_name = null;

    /**
     * Street address line 1.
     *
     * Generated from protobuf field <code>optional string street_address = 12;</code>
     */
    protected $street_address = null;

    /**
     * Street address line 2. This field is write-only. It is only used for
     * calculating the longitude and latitude of an address when geo_point is
     * empty.
     *
     * Generated from protobuf field <code>optional string street_address2 = 13;</code>
     */
    protected $street_address2 = null;

    /**
     * Name of the city.
     *
     * Generated from protobuf field <code>optional string city_name = 14;</code>
     */
    protected $city_name = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type string $postal_code
     *              Postal code.
     * @type string $province_code
     *              Province or state code.
     * @type string $country_code
     *              Country code.
     * @type string $province_name
     *              Province or state name.
     * @type string $street_address
     *              Street address line 1.
     * @type string $street_address2
     *              Street address line 2. This field is write-only. It is only used for
     *              calculating the longitude and latitude of an address when geo_point is
     *              empty.
     * @type string $city_name
     *              Name of the city.
     *              }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * Postal code.
     *
     * Generated from protobuf field <code>optional string postal_code = 8;</code>
     *
     * @return string
     */
    public function getPostalCode()
    {
        return isset($this->postal_code) ? $this->postal_code : '';
    }

    public function hasPostalCode()
    {
        return isset($this->postal_code);
    }

    public function clearPostalCode()
    {
        unset($this->postal_code);
    }

    /**
     * Postal code.
     *
     * Generated from protobuf field <code>optional string postal_code = 8;</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setPostalCode($var)
    {
        GPBUtil::checkString($var, true);
        $this->postal_code = $var;

        return $this;
    }

    /**
     * Province or state code.
     *
     * Generated from protobuf field <code>optional string province_code = 9;</code>
     *
     * @return string
     */
    public function getProvinceCode()
    {
        return isset($this->province_code) ? $this->province_code : '';
    }

    public function hasProvinceCode()
    {
        return isset($this->province_code);
    }

    public function clearProvinceCode()
    {
        unset($this->province_code);
    }

    /**
     * Province or state code.
     *
     * Generated from protobuf field <code>optional string province_code = 9;</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setProvinceCode($var)
    {
        GPBUtil::checkString($var, true);
        $this->province_code = $var;

        return $this;
    }

    /**
     * Country code.
     *
     * Generated from protobuf field <code>optional string country_code = 10;</code>
     *
     * @return string
     */
    public function getCountryCode()
    {
        return isset($this->country_code) ? $this->country_code : '';
    }

    public function hasCountryCode()
    {
        return isset($this->country_code);
    }

    public function clearCountryCode()
    {
        unset($this->country_code);
    }

    /**
     * Country code.
     *
     * Generated from protobuf field <code>optional string country_code = 10;</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setCountryCode($var)
    {
        GPBUtil::checkString($var, true);
        $this->country_code = $var;

        return $this;
    }

    /**
     * Province or state name.
     *
     * Generated from protobuf field <code>optional string province_name = 11;</code>
     *
     * @return string
     */
    public function getProvinceName()
    {
        return isset($this->province_name) ? $this->province_name : '';
    }

    public function hasProvinceName()
    {
        return isset($this->province_name);
    }

    public function clearProvinceName()
    {
        unset($this->province_name);
    }

    /**
     * Province or state name.
     *
     * Generated from protobuf field <code>optional string province_name = 11;</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setProvinceName($var)
    {
        GPBUtil::checkString($var, true);
        $this->province_name = $var;

        return $this;
    }

    /**
     * Street address line 1.
     *
     * Generated from protobuf field <code>optional string street_address = 12;</code>
     *
     * @return string
     */
    public function getStreetAddress()
    {
        return isset($this->street_address) ? $this->street_address : '';
    }

    public function hasStreetAddress()
    {
        return isset($this->street_address);
    }

    public function clearStreetAddress()
    {
        unset($this->street_address);
    }

    /**
     * Street address line 1.
     *
     * Generated from protobuf field <code>optional string street_address = 12;</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setStreetAddress($var)
    {
        GPBUtil::checkString($var, true);
        $this->street_address = $var;

        return $this;
    }

    /**
     * Street address line 2. This field is write-only. It is only used for
     * calculating the longitude and latitude of an address when geo_point is
     * empty.
     *
     * Generated from protobuf field <code>optional string street_address2 = 13;</code>
     *
     * @return string
     */
    public function getStreetAddress2()
    {
        return isset($this->street_address2) ? $this->street_address2 : '';
    }

    public function hasStreetAddress2()
    {
        return isset($this->street_address2);
    }

    public function clearStreetAddress2()
    {
        unset($this->street_address2);
    }

    /**
     * Street address line 2. This field is write-only. It is only used for
     * calculating the longitude and latitude of an address when geo_point is
     * empty.
     *
     * Generated from protobuf field <code>optional string street_address2 = 13;</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setStreetAddress2($var)
    {
        GPBUtil::checkString($var, true);
        $this->street_address2 = $var;

        return $this;
    }

    /**
     * Name of the city.
     *
     * Generated from protobuf field <code>optional string city_name = 14;</code>
     *
     * @return string
     */
    public function getCityName()
    {
        return isset($this->city_name) ? $this->city_name : '';
    }

    public function hasCityName()
    {
        return isset($this->city_name);
    }

    public function clearCityName()
    {
        unset($this->city_name);
    }

    /**
     * Name of the city.
     *
     * Generated from protobuf field <code>optional string city_name = 14;</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setCityName($var)
    {
        GPBUtil::checkString($var, true);
        $this->city_name = $var;

        return $this;
    }
}
