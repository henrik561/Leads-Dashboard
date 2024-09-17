<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/resources/keyword_plan_ad_group.proto

namespace Google\Ads\GoogleAds\V17\Resources;

use Google\Protobuf\Internal\GPBUtil;

/**
 * A Keyword Planner ad group.
 * Max number of keyword plan ad groups per plan: 200.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.resources.KeywordPlanAdGroup</code>
 */
class KeywordPlanAdGroup extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the Keyword Planner ad group.
     * KeywordPlanAdGroup resource names have the form:
     * `customers/{customer_id}/keywordPlanAdGroups/{kp_ad_group_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';

    /**
     * The keyword plan campaign to which this ad group belongs.
     *
     * Generated from protobuf field <code>optional string keyword_plan_campaign = 6 [(.google.api.resource_reference) = {</code>
     */
    protected $keyword_plan_campaign = null;

    /**
     * Output only. The ID of the keyword plan ad group.
     *
     * Generated from protobuf field <code>optional int64 id = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = null;

    /**
     * The name of the keyword plan ad group.
     * This field is required and should not be empty when creating keyword plan
     * ad group.
     *
     * Generated from protobuf field <code>optional string name = 8;</code>
     */
    protected $name = null;

    /**
     * A default ad group max cpc bid in micros in account currency for all
     * biddable keywords under the keyword plan ad group.
     * If not set, will inherit from parent campaign.
     *
     * Generated from protobuf field <code>optional int64 cpc_bid_micros = 9;</code>
     */
    protected $cpc_bid_micros = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type string $resource_name
     *              Immutable. The resource name of the Keyword Planner ad group.
     *              KeywordPlanAdGroup resource names have the form:
     *              `customers/{customer_id}/keywordPlanAdGroups/{kp_ad_group_id}`
     * @type string $keyword_plan_campaign
     *              The keyword plan campaign to which this ad group belongs.
     * @type int|string $id
     *                  Output only. The ID of the keyword plan ad group.
     * @type string $name
     *              The name of the keyword plan ad group.
     *              This field is required and should not be empty when creating keyword plan
     *              ad group.
     * @type int|string $cpc_bid_micros
     *                  A default ad group max cpc bid in micros in account currency for all
     *                  biddable keywords under the keyword plan ad group.
     *                  If not set, will inherit from parent campaign.
     *                  }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Resources\KeywordPlanAdGroup::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the Keyword Planner ad group.
     * KeywordPlanAdGroup resource names have the form:
     * `customers/{customer_id}/keywordPlanAdGroups/{kp_ad_group_id}`
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
     * Immutable. The resource name of the Keyword Planner ad group.
     * KeywordPlanAdGroup resource names have the form:
     * `customers/{customer_id}/keywordPlanAdGroups/{kp_ad_group_id}`
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
     * The keyword plan campaign to which this ad group belongs.
     *
     * Generated from protobuf field <code>optional string keyword_plan_campaign = 6 [(.google.api.resource_reference) = {</code>
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
     * The keyword plan campaign to which this ad group belongs.
     *
     * Generated from protobuf field <code>optional string keyword_plan_campaign = 6 [(.google.api.resource_reference) = {</code>
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
     * Output only. The ID of the keyword plan ad group.
     *
     * Generated from protobuf field <code>optional int64 id = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The ID of the keyword plan ad group.
     *
     * Generated from protobuf field <code>optional int64 id = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * The name of the keyword plan ad group.
     * This field is required and should not be empty when creating keyword plan
     * ad group.
     *
     * Generated from protobuf field <code>optional string name = 8;</code>
     *
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * The name of the keyword plan ad group.
     * This field is required and should not be empty when creating keyword plan
     * ad group.
     *
     * Generated from protobuf field <code>optional string name = 8;</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, true);
        $this->name = $var;

        return $this;
    }

    /**
     * A default ad group max cpc bid in micros in account currency for all
     * biddable keywords under the keyword plan ad group.
     * If not set, will inherit from parent campaign.
     *
     * Generated from protobuf field <code>optional int64 cpc_bid_micros = 9;</code>
     *
     * @return int|string
     */
    public function getCpcBidMicros()
    {
        return isset($this->cpc_bid_micros) ? $this->cpc_bid_micros : 0;
    }

    public function hasCpcBidMicros()
    {
        return isset($this->cpc_bid_micros);
    }

    public function clearCpcBidMicros()
    {
        unset($this->cpc_bid_micros);
    }

    /**
     * A default ad group max cpc bid in micros in account currency for all
     * biddable keywords under the keyword plan ad group.
     * If not set, will inherit from parent campaign.
     *
     * Generated from protobuf field <code>optional int64 cpc_bid_micros = 9;</code>
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setCpcBidMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->cpc_bid_micros = $var;

        return $this;
    }
}
