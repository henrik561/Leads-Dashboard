<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/services/travel_asset_suggestion_service.proto

namespace Google\Ads\GoogleAds\V17\Services;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Message containing the asset suggestions for a hotel.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.services.HotelAssetSuggestion</code>
 */
class HotelAssetSuggestion extends \Google\Protobuf\Internal\Message
{
    /**
     * Google Places ID of the hotel.
     *
     * Generated from protobuf field <code>string place_id = 1;</code>
     */
    protected $place_id = '';

    /**
     * Suggested final URL for an AssetGroup.
     *
     * Generated from protobuf field <code>string final_url = 2;</code>
     */
    protected $final_url = '';

    /**
     * Hotel name in requested language.
     *
     * Generated from protobuf field <code>string hotel_name = 3;</code>
     */
    protected $hotel_name = '';

    /**
     * Call to action type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.CallToActionTypeEnum.CallToActionType call_to_action = 4;</code>
     */
    protected $call_to_action = 0;

    /**
     * Text assets such as headline, description, etc.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.HotelTextAsset text_assets = 5;</code>
     */
    private $text_assets;

    /**
     * Image assets such as landscape/portrait/square, etc.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.HotelImageAsset image_assets = 6;</code>
     */
    private $image_assets;

    /**
     * The status of the hotel asset suggestion.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.HotelAssetSuggestionStatusEnum.HotelAssetSuggestionStatus status = 7;</code>
     */
    protected $status = 0;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type string $place_id
     *              Google Places ID of the hotel.
     * @type string $final_url
     *              Suggested final URL for an AssetGroup.
     * @type string $hotel_name
     *              Hotel name in requested language.
     * @type int $call_to_action
     *           Call to action type.
     * @type array<\Google\Ads\GoogleAds\V17\Services\HotelTextAsset>|\Google\Protobuf\Internal\RepeatedField $text_assets
     *                                                                                                        Text assets such as headline, description, etc.
     * @type array<\Google\Ads\GoogleAds\V17\Services\HotelImageAsset>|\Google\Protobuf\Internal\RepeatedField $image_assets
     *                                                                                                         Image assets such as landscape/portrait/square, etc.
     * @type int $status
     *           The status of the hotel asset suggestion.
     *           }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Services\TravelAssetSuggestionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Google Places ID of the hotel.
     *
     * Generated from protobuf field <code>string place_id = 1;</code>
     *
     * @return string
     */
    public function getPlaceId()
    {
        return $this->place_id;
    }

    /**
     * Google Places ID of the hotel.
     *
     * Generated from protobuf field <code>string place_id = 1;</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setPlaceId($var)
    {
        GPBUtil::checkString($var, true);
        $this->place_id = $var;

        return $this;
    }

    /**
     * Suggested final URL for an AssetGroup.
     *
     * Generated from protobuf field <code>string final_url = 2;</code>
     *
     * @return string
     */
    public function getFinalUrl()
    {
        return $this->final_url;
    }

    /**
     * Suggested final URL for an AssetGroup.
     *
     * Generated from protobuf field <code>string final_url = 2;</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setFinalUrl($var)
    {
        GPBUtil::checkString($var, true);
        $this->final_url = $var;

        return $this;
    }

    /**
     * Hotel name in requested language.
     *
     * Generated from protobuf field <code>string hotel_name = 3;</code>
     *
     * @return string
     */
    public function getHotelName()
    {
        return $this->hotel_name;
    }

    /**
     * Hotel name in requested language.
     *
     * Generated from protobuf field <code>string hotel_name = 3;</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setHotelName($var)
    {
        GPBUtil::checkString($var, true);
        $this->hotel_name = $var;

        return $this;
    }

    /**
     * Call to action type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.CallToActionTypeEnum.CallToActionType call_to_action = 4;</code>
     *
     * @return int
     */
    public function getCallToAction()
    {
        return $this->call_to_action;
    }

    /**
     * Call to action type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.CallToActionTypeEnum.CallToActionType call_to_action = 4;</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setCallToAction($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V17\Enums\CallToActionTypeEnum\CallToActionType::class);
        $this->call_to_action = $var;

        return $this;
    }

    /**
     * Text assets such as headline, description, etc.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.HotelTextAsset text_assets = 5;</code>
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTextAssets()
    {
        return $this->text_assets;
    }

    /**
     * Text assets such as headline, description, etc.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.HotelTextAsset text_assets = 5;</code>
     *
     * @param  array<\Google\Ads\GoogleAds\V17\Services\HotelTextAsset>|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setTextAssets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V17\Services\HotelTextAsset::class);
        $this->text_assets = $arr;

        return $this;
    }

    /**
     * Image assets such as landscape/portrait/square, etc.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.HotelImageAsset image_assets = 6;</code>
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getImageAssets()
    {
        return $this->image_assets;
    }

    /**
     * Image assets such as landscape/portrait/square, etc.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.HotelImageAsset image_assets = 6;</code>
     *
     * @param  array<\Google\Ads\GoogleAds\V17\Services\HotelImageAsset>|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setImageAssets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V17\Services\HotelImageAsset::class);
        $this->image_assets = $arr;

        return $this;
    }

    /**
     * The status of the hotel asset suggestion.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.HotelAssetSuggestionStatusEnum.HotelAssetSuggestionStatus status = 7;</code>
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the hotel asset suggestion.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.HotelAssetSuggestionStatusEnum.HotelAssetSuggestionStatus status = 7;</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V17\Enums\HotelAssetSuggestionStatusEnum\HotelAssetSuggestionStatus::class);
        $this->status = $var;

        return $this;
    }
}
