<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/resources/keyword_plan_campaign_keyword.proto

namespace Google\Ads\GoogleAds\V17\Resources;

use Google\Protobuf\Internal\GPBUtil;

/**
 * A Keyword Plan Campaign keyword.
 * Only negative keywords are supported for Campaign Keyword.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.resources.KeywordPlanCampaignKeyword</code>
 */
class KeywordPlanCampaignKeyword extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the Keyword Plan Campaign keyword.
     * KeywordPlanCampaignKeyword resource names have the form:
     * `customers/{customer_id}/keywordPlanCampaignKeywords/{kp_campaign_keyword_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';

    /**
     * The Keyword Plan campaign to which this negative keyword belongs.
     *
     * Generated from protobuf field <code>optional string keyword_plan_campaign = 8 [(.google.api.resource_reference) = {</code>
     */
    protected $keyword_plan_campaign = null;

    /**
     * Output only. The ID of the Keyword Plan negative keyword.
     *
     * Generated from protobuf field <code>optional int64 id = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = null;

    /**
     * The keyword text.
     *
     * Generated from protobuf field <code>optional string text = 10;</code>
     */
    protected $text = null;

    /**
     * The keyword match type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.KeywordMatchTypeEnum.KeywordMatchType match_type = 5;</code>
     */
    protected $match_type = 0;

    /**
     * Immutable. If true, the keyword is negative.
     * Must be set to true. Only negative campaign keywords are supported.
     *
     * Generated from protobuf field <code>optional bool negative = 11 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $negative = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type string $resource_name
     *              Immutable. The resource name of the Keyword Plan Campaign keyword.
     *              KeywordPlanCampaignKeyword resource names have the form:
     *              `customers/{customer_id}/keywordPlanCampaignKeywords/{kp_campaign_keyword_id}`
     * @type string $keyword_plan_campaign
     *              The Keyword Plan campaign to which this negative keyword belongs.
     * @type int|string $id
     *                  Output only. The ID of the Keyword Plan negative keyword.
     * @type string $text
     *              The keyword text.
     * @type int $match_type
     *           The keyword match type.
     * @type bool $negative
     *            Immutable. If true, the keyword is negative.
     *            Must be set to true. Only negative campaign keywords are supported.
     *            }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Resources\KeywordPlanCampaignKeyword::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the Keyword Plan Campaign keyword.
     * KeywordPlanCampaignKeyword resource names have the form:
     * `customers/{customer_id}/keywordPlanCampaignKeywords/{kp_campaign_keyword_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     *
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the Keyword Plan Campaign keyword.
     * KeywordPlanCampaignKeyword resource names have the form:
     * `customers/{customer_id}/keywordPlanCampaignKeywords/{kp_campaign_keyword_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, true);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * The Keyword Plan campaign to which this negative keyword belongs.
     *
     * Generated from protobuf field <code>optional string keyword_plan_campaign = 8 [(.google.api.resource_reference) = {</code>
     *
     * @return string
     */
    public function getKeywordPlanCampaign()
    {
        return isset($this->keyword_plan_campaign) ? $this->keyword_plan_campaign : '';
    }

    public function hasKeywordPlanCampaign()
    {
        return isset($this->keyword_plan_campaign);
    }

    public function clearKeywordPlanCampaign()
    {
        unset($this->keyword_plan_campaign);
    }

    /**
     * The Keyword Plan campaign to which this negative keyword belongs.
     *
     * Generated from protobuf field <code>optional string keyword_plan_campaign = 8 [(.google.api.resource_reference) = {</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setKeywordPlanCampaign($var)
    {
        GPBUtil::checkString($var, true);
        $this->keyword_plan_campaign = $var;

        return $this;
    }

    /**
     * Output only. The ID of the Keyword Plan negative keyword.
     *
     * Generated from protobuf field <code>optional int64 id = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * Output only. The ID of the Keyword Plan negative keyword.
     *
     * Generated from protobuf field <code>optional int64 id = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * The keyword text.
     *
     * Generated from protobuf field <code>optional string text = 10;</code>
     *
     * @return string
     */
    public function getText()
    {
        return isset($this->text) ? $this->text : '';
    }

    public function hasText()
    {
        return isset($this->text);
    }

    public function clearText()
    {
        unset($this->text);
    }

    /**
     * The keyword text.
     *
     * Generated from protobuf field <code>optional string text = 10;</code>
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
     * The keyword match type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.KeywordMatchTypeEnum.KeywordMatchType match_type = 5;</code>
     *
     * @return int
     */
    public function getMatchType()
    {
        return $this->match_type;
    }

    /**
     * The keyword match type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.KeywordMatchTypeEnum.KeywordMatchType match_type = 5;</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setMatchType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V17\Enums\KeywordMatchTypeEnum\KeywordMatchType::class);
        $this->match_type = $var;

        return $this;
    }

    /**
     * Immutable. If true, the keyword is negative.
     * Must be set to true. Only negative campaign keywords are supported.
     *
     * Generated from protobuf field <code>optional bool negative = 11 [(.google.api.field_behavior) = IMMUTABLE];</code>
     *
     * @return bool
     */
    public function getNegative()
    {
        return isset($this->negative) ? $this->negative : false;
    }

    public function hasNegative()
    {
        return isset($this->negative);
    }

    public function clearNegative()
    {
        unset($this->negative);
    }

    /**
     * Immutable. If true, the keyword is negative.
     * Must be set to true. Only negative campaign keywords are supported.
     *
     * Generated from protobuf field <code>optional bool negative = 11 [(.google.api.field_behavior) = IMMUTABLE];</code>
     *
     * @param  bool  $var
     * @return $this
     */
    public function setNegative($var)
    {
        GPBUtil::checkBool($var);
        $this->negative = $var;

        return $this;
    }
}
