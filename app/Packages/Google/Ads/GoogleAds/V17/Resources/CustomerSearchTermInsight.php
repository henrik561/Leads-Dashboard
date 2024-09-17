<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/resources/customer_search_term_insight.proto

namespace Google\Ads\GoogleAds\V17\Resources;

use Google\Protobuf\Internal\GPBUtil;

/**
 * A Customer search term view.
 * Historical data is available starting March 2023.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.resources.CustomerSearchTermInsight</code>
 */
class CustomerSearchTermInsight extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the customer level search term insight.
     * Customer level search term insight resource names have the form:
     * `customers/{customer_id}/customerSearchTermInsights/{category_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';

    /**
     * Output only. The label for the search category. An empty string denotes the
     * catch-all category for search terms that didn't fit into another category.
     *
     * Generated from protobuf field <code>optional string category_label = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $category_label = null;

    /**
     * Output only. The ID of the insight.
     *
     * Generated from protobuf field <code>optional int64 id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type string $resource_name
     *              Output only. The resource name of the customer level search term insight.
     *              Customer level search term insight resource names have the form:
     *              `customers/{customer_id}/customerSearchTermInsights/{category_id}`
     * @type string $category_label
     *              Output only. The label for the search category. An empty string denotes the
     *              catch-all category for search terms that didn't fit into another category.
     * @type int|string $id
     *                  Output only. The ID of the insight.
     *                  }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Resources\CustomerSearchTermInsight::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the customer level search term insight.
     * Customer level search term insight resource names have the form:
     * `customers/{customer_id}/customerSearchTermInsights/{category_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     *
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the customer level search term insight.
     * Customer level search term insight resource names have the form:
     * `customers/{customer_id}/customerSearchTermInsights/{category_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
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
     * Output only. The label for the search category. An empty string denotes the
     * catch-all category for search terms that didn't fit into another category.
     *
     * Generated from protobuf field <code>optional string category_label = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return string
     */
    public function getCategoryLabel()
    {
        return isset($this->category_label) ? $this->category_label : '';
    }

    public function hasCategoryLabel()
    {
        return isset($this->category_label);
    }

    public function clearCategoryLabel()
    {
        unset($this->category_label);
    }

    /**
     * Output only. The label for the search category. An empty string denotes the
     * catch-all category for search terms that didn't fit into another category.
     *
     * Generated from protobuf field <code>optional string category_label = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setCategoryLabel($var)
    {
        GPBUtil::checkString($var, true);
        $this->category_label = $var;

        return $this;
    }

    /**
     * Output only. The ID of the insight.
     *
     * Generated from protobuf field <code>optional int64 id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The ID of the insight.
     *
     * Generated from protobuf field <code>optional int64 id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
}
