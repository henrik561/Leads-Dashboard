<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/common/criteria.proto

namespace Google\Ads\GoogleAds\V17\Common;

use Google\Protobuf\Internal\GPBUtil;

/**
 * A Search Theme criterion only on Performance Max campaign. Represents a
 * keyword-like advertiser input.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.common.SearchThemeInfo</code>
 */
class SearchThemeInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Each Search Theme has a value of a simple string, like keywords.
     * There are limits on overall length, allowed characters, and number
     * of words.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     */
    protected $text = '';

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type string $text
     *              Each Search Theme has a value of a simple string, like keywords.
     *              There are limits on overall length, allowed characters, and number
     *              of words.
     *              }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * Each Search Theme has a value of a simple string, like keywords.
     * There are limits on overall length, allowed characters, and number
     * of words.
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
     * Each Search Theme has a value of a simple string, like keywords.
     * There are limits on overall length, allowed characters, and number
     * of words.
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
}
