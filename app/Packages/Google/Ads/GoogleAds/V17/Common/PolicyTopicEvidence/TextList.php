<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/common/policy.proto

namespace Google\Ads\GoogleAds\V17\Common\PolicyTopicEvidence;

use Google\Protobuf\Internal\GPBUtil;

/**
 * A list of fragments of text that violated a policy.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.common.PolicyTopicEvidence.TextList</code>
 */
class TextList extends \Google\Protobuf\Internal\Message
{
    /**
     * The fragments of text from the resource that caused the policy finding.
     *
     * Generated from protobuf field <code>repeated string texts = 2;</code>
     */
    private $texts;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type array<string>|\Google\Protobuf\Internal\RepeatedField $texts
     *                                                             The fragments of text from the resource that caused the policy finding.
     *                                                             }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Common\Policy::initOnce();
        parent::__construct($data);
    }

    /**
     * The fragments of text from the resource that caused the policy finding.
     *
     * Generated from protobuf field <code>repeated string texts = 2;</code>
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTexts()
    {
        return $this->texts;
    }

    /**
     * The fragments of text from the resource that caused the policy finding.
     *
     * Generated from protobuf field <code>repeated string texts = 2;</code>
     *
     * @param  array<string>|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setTexts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->texts = $arr;

        return $this;
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TextList::class, \Google\Ads\GoogleAds\V17\Common\PolicyTopicEvidence_TextList::class);
