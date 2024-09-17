<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/resources/offline_conversion_upload_conversion_action_summary.proto

namespace Google\Ads\GoogleAds\V17\Resources;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Offline conversion upload summary at conversion action level.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.resources.OfflineConversionUploadConversionActionSummary</code>
 */
class OfflineConversionUploadConversionActionSummary extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the offline conversion upload summary at
     * conversion action level. Offline conversion upload conversion action
     * summary resource names have the form:
     * `customers/{customer_id}/offlineConversionUploadConversionActionSummaries/{conversion_action_id}~{client}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';

    /**
     * Output only. Client type of the upload event.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.OfflineEventUploadClientEnum.OfflineEventUploadClient client = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $client = 0;

    /**
     * Output only. Conversion action id.
     *
     * Generated from protobuf field <code>int64 conversion_action_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $conversion_action_id = 0;

    /**
     * Output only. The name of the conversion action.
     *
     * Generated from protobuf field <code>string conversion_action_name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $conversion_action_name = '';

    /**
     * Output only. Overall status for offline conversion upload conversion action
     * summary. Status is generated from most recent calendar day with upload
     * stats.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.OfflineConversionDiagnosticStatusEnum.OfflineConversionDiagnosticStatus status = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status = 0;

    /**
     * Output only. Total count of uploaded events.
     *
     * Generated from protobuf field <code>int64 total_event_count = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $total_event_count = 0;

    /**
     * Output only. Total count of successful uploaded events.
     *
     * Generated from protobuf field <code>int64 successful_event_count = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $successful_event_count = 0;

    /**
     * Output only. Total count of pending uploaded events.
     *
     * Generated from protobuf field <code>int64 pending_event_count = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $pending_event_count = 0;

    /**
     * Output only. Date for the latest upload batch. The format is "yyyy-mm-dd
     * hh:mm:ss", and it's in the time zone of the Google Ads account.
     *
     * Generated from protobuf field <code>string last_upload_date_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $last_upload_date_time = '';

    /**
     * Output only. Summary of history stats by last N days.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.resources.OfflineConversionSummary daily_summaries = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $daily_summaries;

    /**
     * Output only. Summary of history stats by last N jobs.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.resources.OfflineConversionSummary job_summaries = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $job_summaries;

    /**
     * Output only. Details for each error code. Alerts are generated from most
     * recent calendar day with upload stats.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.resources.OfflineConversionAlert alerts = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $alerts;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type string $resource_name
     *              Output only. The resource name of the offline conversion upload summary at
     *              conversion action level. Offline conversion upload conversion action
     *              summary resource names have the form:
     *              `customers/{customer_id}/offlineConversionUploadConversionActionSummaries/{conversion_action_id}~{client}`
     * @type int $client
     *           Output only. Client type of the upload event.
     * @type int|string $conversion_action_id
     *                  Output only. Conversion action id.
     * @type string $conversion_action_name
     *              Output only. The name of the conversion action.
     * @type int $status
     *           Output only. Overall status for offline conversion upload conversion action
     *           summary. Status is generated from most recent calendar day with upload
     *           stats.
     * @type int|string $total_event_count
     *                  Output only. Total count of uploaded events.
     * @type int|string $successful_event_count
     *                  Output only. Total count of successful uploaded events.
     * @type int|string $pending_event_count
     *                  Output only. Total count of pending uploaded events.
     * @type string $last_upload_date_time
     *              Output only. Date for the latest upload batch. The format is "yyyy-mm-dd
     *              hh:mm:ss", and it's in the time zone of the Google Ads account.
     * @type array<\Google\Ads\GoogleAds\V17\Resources\OfflineConversionSummary>|\Google\Protobuf\Internal\RepeatedField $daily_summaries
     *                                                                                                                   Output only. Summary of history stats by last N days.
     * @type array<\Google\Ads\GoogleAds\V17\Resources\OfflineConversionSummary>|\Google\Protobuf\Internal\RepeatedField $job_summaries
     *                                                                                                                   Output only. Summary of history stats by last N jobs.
     * @type array<\Google\Ads\GoogleAds\V17\Resources\OfflineConversionAlert>|\Google\Protobuf\Internal\RepeatedField $alerts
     *                                                                                                                 Output only. Details for each error code. Alerts are generated from most
     *                                                                                                                 recent calendar day with upload stats.
     *                                                                                                                 }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Resources\OfflineConversionUploadConversionActionSummary::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the offline conversion upload summary at
     * conversion action level. Offline conversion upload conversion action
     * summary resource names have the form:
     * `customers/{customer_id}/offlineConversionUploadConversionActionSummaries/{conversion_action_id}~{client}`
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
     * Output only. The resource name of the offline conversion upload summary at
     * conversion action level. Offline conversion upload conversion action
     * summary resource names have the form:
     * `customers/{customer_id}/offlineConversionUploadConversionActionSummaries/{conversion_action_id}~{client}`
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
     * Output only. Client type of the upload event.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.OfflineEventUploadClientEnum.OfflineEventUploadClient client = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return int
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Output only. Client type of the upload event.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.OfflineEventUploadClientEnum.OfflineEventUploadClient client = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setClient($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V17\Enums\OfflineEventUploadClientEnum\OfflineEventUploadClient::class);
        $this->client = $var;

        return $this;
    }

    /**
     * Output only. Conversion action id.
     *
     * Generated from protobuf field <code>int64 conversion_action_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return int|string
     */
    public function getConversionActionId()
    {
        return $this->conversion_action_id;
    }

    /**
     * Output only. Conversion action id.
     *
     * Generated from protobuf field <code>int64 conversion_action_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setConversionActionId($var)
    {
        GPBUtil::checkInt64($var);
        $this->conversion_action_id = $var;

        return $this;
    }

    /**
     * Output only. The name of the conversion action.
     *
     * Generated from protobuf field <code>string conversion_action_name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return string
     */
    public function getConversionActionName()
    {
        return $this->conversion_action_name;
    }

    /**
     * Output only. The name of the conversion action.
     *
     * Generated from protobuf field <code>string conversion_action_name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setConversionActionName($var)
    {
        GPBUtil::checkString($var, true);
        $this->conversion_action_name = $var;

        return $this;
    }

    /**
     * Output only. Overall status for offline conversion upload conversion action
     * summary. Status is generated from most recent calendar day with upload
     * stats.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.OfflineConversionDiagnosticStatusEnum.OfflineConversionDiagnosticStatus status = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Output only. Overall status for offline conversion upload conversion action
     * summary. Status is generated from most recent calendar day with upload
     * stats.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.OfflineConversionDiagnosticStatusEnum.OfflineConversionDiagnosticStatus status = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V17\Enums\OfflineConversionDiagnosticStatusEnum\OfflineConversionDiagnosticStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Output only. Total count of uploaded events.
     *
     * Generated from protobuf field <code>int64 total_event_count = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return int|string
     */
    public function getTotalEventCount()
    {
        return $this->total_event_count;
    }

    /**
     * Output only. Total count of uploaded events.
     *
     * Generated from protobuf field <code>int64 total_event_count = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setTotalEventCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_event_count = $var;

        return $this;
    }

    /**
     * Output only. Total count of successful uploaded events.
     *
     * Generated from protobuf field <code>int64 successful_event_count = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return int|string
     */
    public function getSuccessfulEventCount()
    {
        return $this->successful_event_count;
    }

    /**
     * Output only. Total count of successful uploaded events.
     *
     * Generated from protobuf field <code>int64 successful_event_count = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setSuccessfulEventCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->successful_event_count = $var;

        return $this;
    }

    /**
     * Output only. Total count of pending uploaded events.
     *
     * Generated from protobuf field <code>int64 pending_event_count = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return int|string
     */
    public function getPendingEventCount()
    {
        return $this->pending_event_count;
    }

    /**
     * Output only. Total count of pending uploaded events.
     *
     * Generated from protobuf field <code>int64 pending_event_count = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setPendingEventCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->pending_event_count = $var;

        return $this;
    }

    /**
     * Output only. Date for the latest upload batch. The format is "yyyy-mm-dd
     * hh:mm:ss", and it's in the time zone of the Google Ads account.
     *
     * Generated from protobuf field <code>string last_upload_date_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return string
     */
    public function getLastUploadDateTime()
    {
        return $this->last_upload_date_time;
    }

    /**
     * Output only. Date for the latest upload batch. The format is "yyyy-mm-dd
     * hh:mm:ss", and it's in the time zone of the Google Ads account.
     *
     * Generated from protobuf field <code>string last_upload_date_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setLastUploadDateTime($var)
    {
        GPBUtil::checkString($var, true);
        $this->last_upload_date_time = $var;

        return $this;
    }

    /**
     * Output only. Summary of history stats by last N days.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.resources.OfflineConversionSummary daily_summaries = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDailySummaries()
    {
        return $this->daily_summaries;
    }

    /**
     * Output only. Summary of history stats by last N days.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.resources.OfflineConversionSummary daily_summaries = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  array<\Google\Ads\GoogleAds\V17\Resources\OfflineConversionSummary>|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setDailySummaries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V17\Resources\OfflineConversionSummary::class);
        $this->daily_summaries = $arr;

        return $this;
    }

    /**
     * Output only. Summary of history stats by last N jobs.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.resources.OfflineConversionSummary job_summaries = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getJobSummaries()
    {
        return $this->job_summaries;
    }

    /**
     * Output only. Summary of history stats by last N jobs.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.resources.OfflineConversionSummary job_summaries = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  array<\Google\Ads\GoogleAds\V17\Resources\OfflineConversionSummary>|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setJobSummaries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V17\Resources\OfflineConversionSummary::class);
        $this->job_summaries = $arr;

        return $this;
    }

    /**
     * Output only. Details for each error code. Alerts are generated from most
     * recent calendar day with upload stats.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.resources.OfflineConversionAlert alerts = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAlerts()
    {
        return $this->alerts;
    }

    /**
     * Output only. Details for each error code. Alerts are generated from most
     * recent calendar day with upload stats.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.resources.OfflineConversionAlert alerts = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     *
     * @param  array<\Google\Ads\GoogleAds\V17\Resources\OfflineConversionAlert>|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setAlerts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V17\Resources\OfflineConversionAlert::class);
        $this->alerts = $arr;

        return $this;
    }
}
