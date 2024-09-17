<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/resources/customer.proto

namespace Google\Ads\GoogleAds\V17\Resources;

use Google\Protobuf\Internal\GPBUtil;

/**
 * A collection of customer-wide settings related to Google Ads Conversion
 * Tracking.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.resources.ConversionTrackingSetting</code>
 */
class ConversionTrackingSetting extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The conversion tracking id used for this account. This id
     * doesn't indicate whether the customer uses conversion tracking
     * (conversion_tracking_status does). This field is read-only.
     *
     * Generated from protobuf field <code>optional int64 conversion_tracking_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $conversion_tracking_id = null;

    /**
     * Output only. The conversion tracking id of the customer's manager. This is
     * set when the customer is opted into cross account conversion tracking, and
     * it overrides conversion_tracking_id. This field can only be managed through
     * the Google Ads UI. This field is read-only.
     *
     * Generated from protobuf field <code>optional int64 cross_account_conversion_tracking_id = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $cross_account_conversion_tracking_id = null;

    /**
     * Output only. Whether the customer has accepted customer data terms. If
     * using cross-account conversion tracking, this value is inherited from the
     * manager. This field is read-only. For more
     * information, see https://support.google.com/adspolicy/answer/7475709.
     *
     * Generated from protobuf field <code>bool accepted_customer_data_terms = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $accepted_customer_data_terms = false;

    /**
     * Output only. Conversion tracking status. It indicates whether the customer
     * is using conversion tracking, and who is the conversion tracking owner of
     * this customer. If this customer is using cross-account conversion tracking,
     * the value returned will differ based on the `login-customer-id` of the
     * request.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.ConversionTrackingStatusEnum.ConversionTrackingStatus conversion_tracking_status = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $conversion_tracking_status = 0;

    /**
     * Output only. Whether the customer is opted-in for enhanced conversions
     * for leads. If using cross-account conversion tracking, this value is
     * inherited from the manager. This field is read-only.
     *
     * Generated from protobuf field <code>bool enhanced_conversions_for_leads_enabled = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $enhanced_conversions_for_leads_enabled = false;

    /**
     * Output only. The resource name of the customer where conversions are
     * created and managed. This field is read-only.
     *
     * Generated from protobuf field <code>string google_ads_conversion_customer = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $google_ads_conversion_customer = '';

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type int|string $conversion_tracking_id
     *                  Output only. The conversion tracking id used for this account. This id
     *                  doesn't indicate whether the customer uses conversion tracking
     *                  (conversion_tracking_status does). This field is read-only.
     * @type int|string $cross_account_conversion_tracking_id
     *                  Output only. The conversion tracking id of the customer's manager. This is
     *                  set when the customer is opted into cross account conversion tracking, and
     *                  it overrides conversion_tracking_id. This field can only be managed through
     *                  the Google Ads UI. This field is read-only.
     * @type bool $accepted_customer_data_terms
     *            Output only. Whether the customer has accepted customer data terms. If
     *            using cross-account conversion tracking, this value is inherited from the
     *            manager. This field is read-only. For more
     *            information, see https://support.google.com/adspolicy/answer/7475709.
     * @type int $conversion_tracking_status
     *           Output only. Conversion tracking status. It indicates whether the customer
     *           is using conversion tracking, and who is the conversion tracking owner of
     *           this customer. If this customer is using cross-account conversion tracking,
     *           the value returned will differ based on the `login-customer-id` of the
     *           request.
     * @type bool $enhanced_conversions_for_leads_enabled
     *            Output only. Whether the customer is opted-in for enhanced conversions
     *            for leads. If using cross-account conversion tracking, this value is
     *            inherited from the manager. This field is read-only.
     * @type string $google_ads_conversion_customer
     *              Output only. The resource name of the customer where conversions are
     *              created and managed. This field is read-only.
     *              }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Resources\Customer::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The conversion tracking id used for this account. This id
     * doesn't indicate whether the customer uses conversion tracking
     * (conversion_tracking_status does). This field is read-only.
     *
     * Generated from protobuf field <code>optional int64 conversion_tracking_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return int|string
     */
    public function getConversionTrackingId()
    {
        return isset($this->conversion_tracking_id) ? $this->conversion_tracking_id : 0;
    }

    public function hasConversionTrackingId()
    {
        return isset($this->conversion_tracking_id);
    }

    public function clearConversionTrackingId()
    {
        unset($this->conversion_tracking_id);
    }

    /**
     * Output only. The conversion tracking id used for this account. This id
     * doesn't indicate whether the customer uses conversion tracking
     * (conversion_tracking_status does). This field is read-only.
     *
     * Generated from protobuf field <code>optional int64 conversion_tracking_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setConversionTrackingId($var)
    {
        GPBUtil::checkInt64($var);
        $this->conversion_tracking_id = $var;

        return $this;
    }

    /**
     * Output only. The conversion tracking id of the customer's manager. This is
     * set when the customer is opted into cross account conversion tracking, and
     * it overrides conversion_tracking_id. This field can only be managed through
     * the Google Ads UI. This field is read-only.
     *
     * Generated from protobuf field <code>optional int64 cross_account_conversion_tracking_id = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return int|string
     */
    public function getCrossAccountConversionTrackingId()
    {
        return isset($this->cross_account_conversion_tracking_id) ? $this->cross_account_conversion_tracking_id : 0;
    }

    public function hasCrossAccountConversionTrackingId()
    {
        return isset($this->cross_account_conversion_tracking_id);
    }

    public function clearCrossAccountConversionTrackingId()
    {
        unset($this->cross_account_conversion_tracking_id);
    }

    /**
     * Output only. The conversion tracking id of the customer's manager. This is
     * set when the customer is opted into cross account conversion tracking, and
     * it overrides conversion_tracking_id. This field can only be managed through
     * the Google Ads UI. This field is read-only.
     *
     * Generated from protobuf field <code>optional int64 cross_account_conversion_tracking_id = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setCrossAccountConversionTrackingId($var)
    {
        GPBUtil::checkInt64($var);
        $this->cross_account_conversion_tracking_id = $var;

        return $this;
    }

    /**
     * Output only. Whether the customer has accepted customer data terms. If
     * using cross-account conversion tracking, this value is inherited from the
     * manager. This field is read-only. For more
     * information, see https://support.google.com/adspolicy/answer/7475709.
     *
     * Generated from protobuf field <code>bool accepted_customer_data_terms = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return bool
     */
    public function getAcceptedCustomerDataTerms()
    {
        return $this->accepted_customer_data_terms;
    }

    /**
     * Output only. Whether the customer has accepted customer data terms. If
     * using cross-account conversion tracking, this value is inherited from the
     * manager. This field is read-only. For more
     * information, see https://support.google.com/adspolicy/answer/7475709.
     *
     * Generated from protobuf field <code>bool accepted_customer_data_terms = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  bool  $var
     * @return $this
     */
    public function setAcceptedCustomerDataTerms($var)
    {
        GPBUtil::checkBool($var);
        $this->accepted_customer_data_terms = $var;

        return $this;
    }

    /**
     * Output only. Conversion tracking status. It indicates whether the customer
     * is using conversion tracking, and who is the conversion tracking owner of
     * this customer. If this customer is using cross-account conversion tracking,
     * the value returned will differ based on the `login-customer-id` of the
     * request.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.ConversionTrackingStatusEnum.ConversionTrackingStatus conversion_tracking_status = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return int
     */
    public function getConversionTrackingStatus()
    {
        return $this->conversion_tracking_status;
    }

    /**
     * Output only. Conversion tracking status. It indicates whether the customer
     * is using conversion tracking, and who is the conversion tracking owner of
     * this customer. If this customer is using cross-account conversion tracking,
     * the value returned will differ based on the `login-customer-id` of the
     * request.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.ConversionTrackingStatusEnum.ConversionTrackingStatus conversion_tracking_status = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setConversionTrackingStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V17\Enums\ConversionTrackingStatusEnum\ConversionTrackingStatus::class);
        $this->conversion_tracking_status = $var;

        return $this;
    }

    /**
     * Output only. Whether the customer is opted-in for enhanced conversions
     * for leads. If using cross-account conversion tracking, this value is
     * inherited from the manager. This field is read-only.
     *
     * Generated from protobuf field <code>bool enhanced_conversions_for_leads_enabled = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return bool
     */
    public function getEnhancedConversionsForLeadsEnabled()
    {
        return $this->enhanced_conversions_for_leads_enabled;
    }

    /**
     * Output only. Whether the customer is opted-in for enhanced conversions
     * for leads. If using cross-account conversion tracking, this value is
     * inherited from the manager. This field is read-only.
     *
     * Generated from protobuf field <code>bool enhanced_conversions_for_leads_enabled = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  bool  $var
     * @return $this
     */
    public function setEnhancedConversionsForLeadsEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->enhanced_conversions_for_leads_enabled = $var;

        return $this;
    }

    /**
     * Output only. The resource name of the customer where conversions are
     * created and managed. This field is read-only.
     *
     * Generated from protobuf field <code>string google_ads_conversion_customer = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return string
     */
    public function getGoogleAdsConversionCustomer()
    {
        return $this->google_ads_conversion_customer;
    }

    /**
     * Output only. The resource name of the customer where conversions are
     * created and managed. This field is read-only.
     *
     * Generated from protobuf field <code>string google_ads_conversion_customer = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setGoogleAdsConversionCustomer($var)
    {
        GPBUtil::checkString($var, true);
        $this->google_ads_conversion_customer = $var;

        return $this;
    }
}
