<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/services/invoice_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Services;

class InvoiceService
{
    public static $is_initialized = false;

    public static function initOnce()
    {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
            return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
2google/ads/googleads/v17/enums/month_of_year.protogoogle.ads.googleads.v17.enums"�
MonthOfYearEnum"�
MonthOfYear
UNSPECIFIED 
UNKNOWN
JANUARY
FEBRUARY	
MARCH	
APRIL
MAY
JUNE
JULY

AUGUST	
	SEPTEMBER

OCTOBER
NOVEMBER
DECEMBERB�
"com.google.ads.googleads.v17.enumsBMonthOfYearProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
+google/ads/googleads/v17/common/dates.protogoogle.ads.googleads.v17.common"W
	DateRange

start_date (	H �
end_date (	H�B
_start_dateB
	_end_date"�
YearMonthRange9
start (2*.google.ads.googleads.v17.common.YearMonth7
end (2*.google.ads.googleads.v17.common.YearMonth"e
	YearMonth
year (J
month (2;.google.ads.googleads.v17.enums.MonthOfYearEnum.MonthOfYearB�
#com.google.ads.googleads.v17.commonB
DatesProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v17/common;common�GAA�Google.Ads.GoogleAds.V17.Common�Google\\Ads\\GoogleAds\\V17\\Common�#Google::Ads::GoogleAds::V17::Commonbproto3
�
1google/ads/googleads/v17/enums/invoice_type.protogoogle.ads.googleads.v17.enums"\\
InvoiceTypeEnum"I
InvoiceType
UNSPECIFIED 
UNKNOWN
CREDIT_MEMO
INVOICEB�
"com.google.ads.googleads.v17.enumsBInvoiceTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�+
0google/ads/googleads/v17/resources/invoice.proto"google.ads.googleads.v17.resources1google/ads/googleads/v17/enums/invoice_type.proto2google/ads/googleads/v17/enums/month_of_year.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�\'
Invoice?
resource_name (	B(�A�A"
 googleads.googleapis.com/Invoice
id (	B�AH �N
type (2;.google.ads.googleads.v17.enums.InvoiceTypeEnum.InvoiceTypeB�A
billing_setup (	B�AH�%
payments_account_id (	B�AH�%
payments_profile_id (	B�AH�

issue_date (	B�AH�
due_date (	B�AH�K
service_date_range	 (2*.google.ads.googleads.v17.common.DateRangeB�A
currency_code (	B�AH�/
"adjustments_subtotal_amount_micros (B�A*
adjustments_tax_amount_micros (B�A,
adjustments_total_amount_micros (B�A4
\'regulatory_costs_subtotal_amount_micros (B�A/
"regulatory_costs_tax_amount_micros (B�A1
$regulatory_costs_total_amount_micros (B�A6
$export_charge_subtotal_amount_micros( (B�AH�1
export_charge_tax_amount_micros) (B�AH�3
!export_charge_total_amount_micros* (B�AH	�(
subtotal_amount_micros! (B�AH
�#
tax_amount_micros" (B�AH�%
total_amount_micros# (B�AH�#
corrected_invoice$ (	B�AH�
replaced_invoices% (	B�A
pdf_url& (	B�AH�g
account_budget_summaries (2@.google.ads.googleads.v17.resources.Invoice.AccountBudgetSummaryB�AZ
account_summaries\' (2:.google.ads.googleads.v17.resources.Invoice.AccountSummaryB�A�
AccountSummary
customer (	B�AH �;
)billing_correction_subtotal_amount_micros (B�AH�6
$billing_correction_tax_amount_micros (B�AH�8
&billing_correction_total_amount_micros (B�AH�:
(coupon_adjustment_subtotal_amount_micros (B�AH�5
#coupon_adjustment_tax_amount_micros (B�AH�7
%coupon_adjustment_total_amount_micros (B�AH�A
/excess_credit_adjustment_subtotal_amount_micros (B�AH�<
*excess_credit_adjustment_tax_amount_micros	 (B�AH�>
,excess_credit_adjustment_total_amount_micros
 (B�AH	�9
\'regulatory_costs_subtotal_amount_micros (B�AH
�4
"regulatory_costs_tax_amount_micros (B�AH�6
$regulatory_costs_total_amount_micros (B�AH�6
$export_charge_subtotal_amount_micros (B�AH�1
export_charge_tax_amount_micros (B�AH�3
!export_charge_total_amount_micros (B�AH�(
subtotal_amount_micros (B�AH�#
tax_amount_micros (B�AH�%
total_amount_micros (B�AH�B
	_customerB,
*_billing_correction_subtotal_amount_microsB\'
%_billing_correction_tax_amount_microsB)
\'_billing_correction_total_amount_microsB+
)_coupon_adjustment_subtotal_amount_microsB&
$_coupon_adjustment_tax_amount_microsB(
&_coupon_adjustment_total_amount_microsB2
0_excess_credit_adjustment_subtotal_amount_microsB-
+_excess_credit_adjustment_tax_amount_microsB/
-_excess_credit_adjustment_total_amount_microsB*
(_regulatory_costs_subtotal_amount_microsB%
#_regulatory_costs_tax_amount_microsB\'
%_regulatory_costs_total_amount_microsB\'
%_export_charge_subtotal_amount_microsB"
 _export_charge_tax_amount_microsB$
"_export_charge_total_amount_microsB
_subtotal_amount_microsB
_tax_amount_microsB
_total_amount_micros�
AccountBudgetSummary
customer
 (	B�AH �+
customer_descriptive_name (	B�AH� 
account_budget (	B�AH�%
account_budget_name (	B�AH�\'
purchase_order_number (	B�AH�(
subtotal_amount_micros (B�AH�#
tax_amount_micros (B�AH�%
total_amount_micros (B�AH�U
billable_activity_date_range	 (2*.google.ads.googleads.v17.common.DateRangeB�A&
served_amount_micros (B�AH�&
billed_amount_micros (B�AH	�,
overdelivery_amount_micros (B�AH
�0
invalid_activity_amount_micros (B�AH�k
invalid_activity_summaries (2B.google.ads.googleads.v17.resources.Invoice.InvalidActivitySummaryB�AB
	_customerB
_customer_descriptive_nameB
_account_budgetB
_account_budget_nameB
_purchase_order_numberB
_subtotal_amount_microsB
_tax_amount_microsB
_total_amount_microsB
_served_amount_microsB
_billed_amount_microsB
_overdelivery_amount_microsB!
_invalid_activity_amount_micros�
InvalidActivitySummaryh
original_month_of_service (2;.google.ads.googleads.v17.enums.MonthOfYearEnum.MonthOfYearB�AH �*
original_year_of_service (	B�AH�%
original_invoice_id (	B�AH�.
original_account_budget_name (	B�AH�0
original_purchase_order_number (	B�AH�
amount_micros (B�AH�B
_original_month_of_serviceB
_original_year_of_serviceB
_original_invoice_idB
_original_account_budget_nameB!
_original_purchase_order_numberB
_amount_micros:T�AQ
 googleads.googleapis.com/Invoice-customers/{customer_id}/invoices/{invoice_id}B
_idB
_billing_setupB
_payments_account_idB
_payments_profile_idB
_issue_dateB
	_due_dateB
_currency_codeB\'
%_export_charge_subtotal_amount_microsB"
 _export_charge_tax_amount_microsB$
"_export_charge_total_amount_microsB
_subtotal_amount_microsB
_tax_amount_microsB
_total_amount_microsB
_corrected_invoiceB

_pdf_urlB�
&com.google.ads.googleads.v17.resourcesBInvoiceProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v17/resources;resources�GAA�"Google.Ads.GoogleAds.V17.Resources�"Google\\Ads\\GoogleAds\\V17\\Resources�&Google::Ads::GoogleAds::V17::Resourcesbproto3
�
7google/ads/googleads/v17/services/invoice_service.proto!google.ads.googleads.v17.services0google/ads/googleads/v17/resources/invoice.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.proto"�
ListInvoicesRequest
customer_id (	B�A
billing_setup (	B�A

issue_year (	B�AU
issue_month (2;.google.ads.googleads.v17.enums.MonthOfYearEnum.MonthOfYearB�A"U
ListInvoicesResponse=
invoices (2+.google.ads.googleads.v17.resources.Invoice2�
InvoiceService�
ListInvoices6.google.ads.googleads.v17.services.ListInvoicesRequest7.google.ads.googleads.v17.services.ListInvoicesResponse"b�A0customer_id,billing_setup,issue_year,issue_month���)\'/v17/customers/{customer_id=*}/invoicesE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v17.servicesBInvoiceServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v17/services;services�GAA�!Google.Ads.GoogleAds.V17.Services�!Google\\Ads\\GoogleAds\\V17\\Services�%Google::Ads::GoogleAds::V17::Servicesbproto3', true);
        static::$is_initialized = true;
    }
}
