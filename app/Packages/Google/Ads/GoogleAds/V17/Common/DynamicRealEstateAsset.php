<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/common/asset_types.proto

namespace Google\Ads\GoogleAds\V17\Common;

use Google\Protobuf\Internal\GPBUtil;

/**
 * A dynamic real estate asset.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.common.DynamicRealEstateAsset</code>
 */
class DynamicRealEstateAsset extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Listing ID which can be any sequence of letters and digits, and
     * must be unique and match the values of remarketing tag. Required.
     *
     * Generated from protobuf field <code>string listing_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $listing_id = '';

    /**
     * Required. Listing name, for example, Boulevard Bungalow. Required.
     *
     * Generated from protobuf field <code>string listing_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $listing_name = '';

    /**
     * City name, for example, Mountain View, California.
     *
     * Generated from protobuf field <code>string city_name = 3;</code>
     */
    protected $city_name = '';

    /**
     * Description, for example, 3 beds, 2 baths, 1568 sq. ft.
     *
     * Generated from protobuf field <code>string description = 4;</code>
     */
    protected $description = '';

    /**
     * Address which can be specified in one of the following formats.
     * (1) City, state, code, country, for example, Mountain View, CA, USA.
     * (2) Full address, for example, 123 Boulevard St, Mountain View, CA 94043.
     * (3) Latitude-longitude in the DDD format, for example, 41.40338, 2.17403
     *
     * Generated from protobuf field <code>string address = 5;</code>
     */
    protected $address = '';

    /**
     * Price which can be number followed by the alphabetic currency code,
     * ISO 4217 standard. Use '.' as the decimal mark, for example, 200,000.00
     * USD.
     *
     * Generated from protobuf field <code>string price = 6;</code>
     */
    protected $price = '';

    /**
     * Image URL, for example, http://www.example.com/image.png. The image will
     * not be uploaded as image asset.
     *
     * Generated from protobuf field <code>string image_url = 7;</code>
     */
    protected $image_url = '';

    /**
     * Property type, for example, House.
     *
     * Generated from protobuf field <code>string property_type = 8;</code>
     */
    protected $property_type = '';

    /**
     * Listing type, for example, For sale.
     *
     * Generated from protobuf field <code>string listing_type = 9;</code>
     */
    protected $listing_type = '';

    /**
     * Contextual keywords, for example, For sale; Houses for sale.
     *
     * Generated from protobuf field <code>repeated string contextual_keywords = 10;</code>
     */
    private $contextual_keywords;

    /**
     * Formatted price which can be any characters. If set, this attribute will be
     * used instead of 'price', for example, Starting at $200,000.00.
     *
     * Generated from protobuf field <code>string formatted_price = 11;</code>
     */
    protected $formatted_price = '';

    /**
     * Android deep link, for example,
     * android-app://com.example.android/http/example.com/gizmos?1234.
     *
     * Generated from protobuf field <code>string android_app_link = 12;</code>
     */
    protected $android_app_link = '';

    /**
     * iOS deep link, for example, exampleApp://content/page.
     *
     * Generated from protobuf field <code>string ios_app_link = 13;</code>
     */
    protected $ios_app_link = '';

    /**
     * iOS app store ID. This is used to check if the user has the app installed
     * on their device before deep linking. If this field is set, then the
     * ios_app_link field must also be present.
     *
     * Generated from protobuf field <code>int64 ios_app_store_id = 14;</code>
     */
    protected $ios_app_store_id = 0;

    /**
     * Similar listing IDs.
     *
     * Generated from protobuf field <code>repeated string similar_listing_ids = 15;</code>
     */
    private $similar_listing_ids;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type string $listing_id
     *              Required. Listing ID which can be any sequence of letters and digits, and
     *              must be unique and match the values of remarketing tag. Required.
     * @type string $listing_name
     *              Required. Listing name, for example, Boulevard Bungalow. Required.
     * @type string $city_name
     *              City name, for example, Mountain View, California.
     * @type string $description
     *              Description, for example, 3 beds, 2 baths, 1568 sq. ft.
     * @type string $address
     *              Address which can be specified in one of the following formats.
     *              (1) City, state, code, country, for example, Mountain View, CA, USA.
     *              (2) Full address, for example, 123 Boulevard St, Mountain View, CA 94043.
     *              (3) Latitude-longitude in the DDD format, for example, 41.40338, 2.17403
     * @type string $price
     *              Price which can be number followed by the alphabetic currency code,
     *              ISO 4217 standard. Use '.' as the decimal mark, for example, 200,000.00
     *              USD.
     * @type string $image_url
     *              Image URL, for example, http://www.example.com/image.png. The image will
     *              not be uploaded as image asset.
     * @type string $property_type
     *              Property type, for example, House.
     * @type string $listing_type
     *              Listing type, for example, For sale.
     * @type array<string>|\Google\Protobuf\Internal\RepeatedField $contextual_keywords
     *                                                             Contextual keywords, for example, For sale; Houses for sale.
     * @type string $formatted_price
     *              Formatted price which can be any characters. If set, this attribute will be
     *              used instead of 'price', for example, Starting at $200,000.00.
     * @type string $android_app_link
     *              Android deep link, for example,
     *              android-app://com.example.android/http/example.com/gizmos?1234.
     * @type string $ios_app_link
     *              iOS deep link, for example, exampleApp://content/page.
     * @type int|string $ios_app_store_id
     *                  iOS app store ID. This is used to check if the user has the app installed
     *                  on their device before deep linking. If this field is set, then the
     *                  ios_app_link field must also be present.
     * @type array<string>|\Google\Protobuf\Internal\RepeatedField $similar_listing_ids
     *                                                             Similar listing IDs.
     *                                                             }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Common\AssetTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Listing ID which can be any sequence of letters and digits, and
     * must be unique and match the values of remarketing tag. Required.
     *
     * Generated from protobuf field <code>string listing_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     *
     * @return string
     */
    public function getListingId()
    {
        return $this->listing_id;
    }

    /**
     * Required. Listing ID which can be any sequence of letters and digits, and
     * must be unique and match the values of remarketing tag. Required.
     *
     * Generated from protobuf field <code>string listing_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setListingId($var)
    {
        GPBUtil::checkString($var, true);
        $this->listing_id = $var;

        return $this;
    }

    /**
     * Required. Listing name, for example, Boulevard Bungalow. Required.
     *
     * Generated from protobuf field <code>string listing_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     *
     * @return string
     */
    public function getListingName()
    {
        return $this->listing_name;
    }

    /**
     * Required. Listing name, for example, Boulevard Bungalow. Required.
     *
     * Generated from protobuf field <code>string listing_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setListingName($var)
    {
        GPBUtil::checkString($var, true);
        $this->listing_name = $var;

        return $this;
    }

    /**
     * City name, for example, Mountain View, California.
     *
     * Generated from protobuf field <code>string city_name = 3;</code>
     *
     * @return string
     */
    public function getCityName()
    {
        return $this->city_name;
    }

    /**
     * City name, for example, Mountain View, California.
     *
     * Generated from protobuf field <code>string city_name = 3;</code>
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

    /**
     * Description, for example, 3 beds, 2 baths, 1568 sq. ft.
     *
     * Generated from protobuf field <code>string description = 4;</code>
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description, for example, 3 beds, 2 baths, 1568 sq. ft.
     *
     * Generated from protobuf field <code>string description = 4;</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, true);
        $this->description = $var;

        return $this;
    }

    /**
     * Address which can be specified in one of the following formats.
     * (1) City, state, code, country, for example, Mountain View, CA, USA.
     * (2) Full address, for example, 123 Boulevard St, Mountain View, CA 94043.
     * (3) Latitude-longitude in the DDD format, for example, 41.40338, 2.17403
     *
     * Generated from protobuf field <code>string address = 5;</code>
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Address which can be specified in one of the following formats.
     * (1) City, state, code, country, for example, Mountain View, CA, USA.
     * (2) Full address, for example, 123 Boulevard St, Mountain View, CA 94043.
     * (3) Latitude-longitude in the DDD format, for example, 41.40338, 2.17403
     *
     * Generated from protobuf field <code>string address = 5;</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, true);
        $this->address = $var;

        return $this;
    }

    /**
     * Price which can be number followed by the alphabetic currency code,
     * ISO 4217 standard. Use '.' as the decimal mark, for example, 200,000.00
     * USD.
     *
     * Generated from protobuf field <code>string price = 6;</code>
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Price which can be number followed by the alphabetic currency code,
     * ISO 4217 standard. Use '.' as the decimal mark, for example, 200,000.00
     * USD.
     *
     * Generated from protobuf field <code>string price = 6;</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setPrice($var)
    {
        GPBUtil::checkString($var, true);
        $this->price = $var;

        return $this;
    }

    /**
     * Image URL, for example, http://www.example.com/image.png. The image will
     * not be uploaded as image asset.
     *
     * Generated from protobuf field <code>string image_url = 7;</code>
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->image_url;
    }

    /**
     * Image URL, for example, http://www.example.com/image.png. The image will
     * not be uploaded as image asset.
     *
     * Generated from protobuf field <code>string image_url = 7;</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setImageUrl($var)
    {
        GPBUtil::checkString($var, true);
        $this->image_url = $var;

        return $this;
    }

    /**
     * Property type, for example, House.
     *
     * Generated from protobuf field <code>string property_type = 8;</code>
     *
     * @return string
     */
    public function getPropertyType()
    {
        return $this->property_type;
    }

    /**
     * Property type, for example, House.
     *
     * Generated from protobuf field <code>string property_type = 8;</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setPropertyType($var)
    {
        GPBUtil::checkString($var, true);
        $this->property_type = $var;

        return $this;
    }

    /**
     * Listing type, for example, For sale.
     *
     * Generated from protobuf field <code>string listing_type = 9;</code>
     *
     * @return string
     */
    public function getListingType()
    {
        return $this->listing_type;
    }

    /**
     * Listing type, for example, For sale.
     *
     * Generated from protobuf field <code>string listing_type = 9;</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setListingType($var)
    {
        GPBUtil::checkString($var, true);
        $this->listing_type = $var;

        return $this;
    }

    /**
     * Contextual keywords, for example, For sale; Houses for sale.
     *
     * Generated from protobuf field <code>repeated string contextual_keywords = 10;</code>
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getContextualKeywords()
    {
        return $this->contextual_keywords;
    }

    /**
     * Contextual keywords, for example, For sale; Houses for sale.
     *
     * Generated from protobuf field <code>repeated string contextual_keywords = 10;</code>
     *
     * @param  array<string>|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setContextualKeywords($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->contextual_keywords = $arr;

        return $this;
    }

    /**
     * Formatted price which can be any characters. If set, this attribute will be
     * used instead of 'price', for example, Starting at $200,000.00.
     *
     * Generated from protobuf field <code>string formatted_price = 11;</code>
     *
     * @return string
     */
    public function getFormattedPrice()
    {
        return $this->formatted_price;
    }

    /**
     * Formatted price which can be any characters. If set, this attribute will be
     * used instead of 'price', for example, Starting at $200,000.00.
     *
     * Generated from protobuf field <code>string formatted_price = 11;</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setFormattedPrice($var)
    {
        GPBUtil::checkString($var, true);
        $this->formatted_price = $var;

        return $this;
    }

    /**
     * Android deep link, for example,
     * android-app://com.example.android/http/example.com/gizmos?1234.
     *
     * Generated from protobuf field <code>string android_app_link = 12;</code>
     *
     * @return string
     */
    public function getAndroidAppLink()
    {
        return $this->android_app_link;
    }

    /**
     * Android deep link, for example,
     * android-app://com.example.android/http/example.com/gizmos?1234.
     *
     * Generated from protobuf field <code>string android_app_link = 12;</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setAndroidAppLink($var)
    {
        GPBUtil::checkString($var, true);
        $this->android_app_link = $var;

        return $this;
    }

    /**
     * iOS deep link, for example, exampleApp://content/page.
     *
     * Generated from protobuf field <code>string ios_app_link = 13;</code>
     *
     * @return string
     */
    public function getIosAppLink()
    {
        return $this->ios_app_link;
    }

    /**
     * iOS deep link, for example, exampleApp://content/page.
     *
     * Generated from protobuf field <code>string ios_app_link = 13;</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setIosAppLink($var)
    {
        GPBUtil::checkString($var, true);
        $this->ios_app_link = $var;

        return $this;
    }

    /**
     * iOS app store ID. This is used to check if the user has the app installed
     * on their device before deep linking. If this field is set, then the
     * ios_app_link field must also be present.
     *
     * Generated from protobuf field <code>int64 ios_app_store_id = 14;</code>
     *
     * @return int|string
     */
    public function getIosAppStoreId()
    {
        return $this->ios_app_store_id;
    }

    /**
     * iOS app store ID. This is used to check if the user has the app installed
     * on their device before deep linking. If this field is set, then the
     * ios_app_link field must also be present.
     *
     * Generated from protobuf field <code>int64 ios_app_store_id = 14;</code>
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setIosAppStoreId($var)
    {
        GPBUtil::checkInt64($var);
        $this->ios_app_store_id = $var;

        return $this;
    }

    /**
     * Similar listing IDs.
     *
     * Generated from protobuf field <code>repeated string similar_listing_ids = 15;</code>
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSimilarListingIds()
    {
        return $this->similar_listing_ids;
    }

    /**
     * Similar listing IDs.
     *
     * Generated from protobuf field <code>repeated string similar_listing_ids = 15;</code>
     *
     * @param  array<string>|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setSimilarListingIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->similar_listing_ids = $arr;

        return $this;
    }
}
