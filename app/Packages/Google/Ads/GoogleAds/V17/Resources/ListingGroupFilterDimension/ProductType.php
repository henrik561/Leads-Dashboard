<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/resources/asset_group_listing_group_filter.proto

namespace Google\Ads\GoogleAds\V17\Resources\ListingGroupFilterDimension;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Type of a product offer.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.resources.ListingGroupFilterDimension.ProductType</code>
 */
class ProductType extends \Google\Protobuf\Internal\Message
{
    /**
     * Value of the type.
     *
     * Generated from protobuf field <code>optional string value = 1;</code>
     */
    protected $value = null;

    /**
     * Level of the type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.ListingGroupFilterProductTypeLevelEnum.ListingGroupFilterProductTypeLevel level = 2;</code>
     */
    protected $level = 0;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type string $value
     *              Value of the type.
     * @type int $level
     *           Level of the type.
     *           }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Resources\AssetGroupListingGroupFilter::initOnce();
        parent::__construct($data);
    }

    /**
     * Value of the type.
     *
     * Generated from protobuf field <code>optional string value = 1;</code>
     *
     * @return string
     */
    public function getValue()
    {
        return isset($this->value) ? $this->value : '';
    }

    public function hasValue()
    {
        return isset($this->value);
    }

    public function clearValue()
    {
        unset($this->value);
    }

    /**
     * Value of the type.
     *
     * Generated from protobuf field <code>optional string value = 1;</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, true);
        $this->value = $var;

        return $this;
    }

    /**
     * Level of the type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.ListingGroupFilterProductTypeLevelEnum.ListingGroupFilterProductTypeLevel level = 2;</code>
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Level of the type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.ListingGroupFilterProductTypeLevelEnum.ListingGroupFilterProductTypeLevel level = 2;</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V17\Enums\ListingGroupFilterProductTypeLevelEnum\ListingGroupFilterProductTypeLevel::class);
        $this->level = $var;

        return $this;
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProductType::class, \Google\Ads\GoogleAds\V17\Resources\ListingGroupFilterDimension_ProductType::class);
