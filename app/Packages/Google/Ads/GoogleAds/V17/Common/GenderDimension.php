<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/common/audiences.proto

namespace Google\Ads\GoogleAds\V17\Common;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Dimension specifying users by their gender.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.common.GenderDimension</code>
 */
class GenderDimension extends \Google\Protobuf\Internal\Message
{
    /**
     * Included gender demographic segments.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.enums.GenderTypeEnum.GenderType genders = 1;</code>
     */
    private $genders;

    /**
     * Include users whose gender is not determined.
     *
     * Generated from protobuf field <code>optional bool include_undetermined = 2;</code>
     */
    protected $include_undetermined = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type array<int>|\Google\Protobuf\Internal\RepeatedField $genders
     *                                                          Included gender demographic segments.
     * @type bool $include_undetermined
     *            Include users whose gender is not determined.
     *            }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Common\Audiences::initOnce();
        parent::__construct($data);
    }

    /**
     * Included gender demographic segments.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.enums.GenderTypeEnum.GenderType genders = 1;</code>
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGenders()
    {
        return $this->genders;
    }

    /**
     * Included gender demographic segments.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.enums.GenderTypeEnum.GenderType genders = 1;</code>
     *
     * @param  array<int>|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setGenders($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Ads\GoogleAds\V17\Enums\GenderTypeEnum\GenderType::class);
        $this->genders = $arr;

        return $this;
    }

    /**
     * Include users whose gender is not determined.
     *
     * Generated from protobuf field <code>optional bool include_undetermined = 2;</code>
     *
     * @return bool
     */
    public function getIncludeUndetermined()
    {
        return isset($this->include_undetermined) ? $this->include_undetermined : false;
    }

    public function hasIncludeUndetermined()
    {
        return isset($this->include_undetermined);
    }

    public function clearIncludeUndetermined()
    {
        unset($this->include_undetermined);
    }

    /**
     * Include users whose gender is not determined.
     *
     * Generated from protobuf field <code>optional bool include_undetermined = 2;</code>
     *
     * @param  bool  $var
     * @return $this
     */
    public function setIncludeUndetermined($var)
    {
        GPBUtil::checkBool($var);
        $this->include_undetermined = $var;

        return $this;
    }
}
