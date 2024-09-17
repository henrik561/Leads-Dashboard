<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/services/shareable_preview_service.proto

namespace Google\Ads\GoogleAds\V17\Services;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Asset group of the shareable preview.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.services.AssetGroupIdentifier</code>
 */
class AssetGroupIdentifier extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The asset group identifier.
     *
     * Generated from protobuf field <code>int64 asset_group_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $asset_group_id = 0;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type int|string $asset_group_id
     *                  Required. The asset group identifier.
     *                  }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Services\ShareablePreviewService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The asset group identifier.
     *
     * Generated from protobuf field <code>int64 asset_group_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     *
     * @return int|string
     */
    public function getAssetGroupId()
    {
        return $this->asset_group_id;
    }

    /**
     * Required. The asset group identifier.
     *
     * Generated from protobuf field <code>int64 asset_group_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setAssetGroupId($var)
    {
        GPBUtil::checkInt64($var);
        $this->asset_group_id = $var;

        return $this;
    }
}
