<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/services/travel_asset_suggestion_service.proto

namespace Google\Ads\GoogleAds\V17\Services;

use Google\Protobuf\Internal\GPBUtil;

/**
 * A single text asset suggestion for a hotel.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.services.HotelTextAsset</code>
 */
class HotelTextAsset extends \Google\Protobuf\Internal\Message
{
    /**
     * Asset text in requested language.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     */
    protected $text = '';

    /**
     * The text asset type. For example, HEADLINE, DESCRIPTION, etc.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.AssetFieldTypeEnum.AssetFieldType asset_field_type = 2;</code>
     */
    protected $asset_field_type = 0;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type string $text
     *              Asset text in requested language.
     * @type int $asset_field_type
     *           The text asset type. For example, HEADLINE, DESCRIPTION, etc.
     *           }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Services\TravelAssetSuggestionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Asset text in requested language.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Asset text in requested language.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, true);
        $this->text = $var;

        return $this;
    }

    /**
     * The text asset type. For example, HEADLINE, DESCRIPTION, etc.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.AssetFieldTypeEnum.AssetFieldType asset_field_type = 2;</code>
     *
     * @return int
     */
    public function getAssetFieldType()
    {
        return $this->asset_field_type;
    }

    /**
     * The text asset type. For example, HEADLINE, DESCRIPTION, etc.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.AssetFieldTypeEnum.AssetFieldType asset_field_type = 2;</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setAssetFieldType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V17\Enums\AssetFieldTypeEnum\AssetFieldType::class);
        $this->asset_field_type = $var;

        return $this;
    }
}
