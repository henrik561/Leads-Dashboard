<?php

namespace App\Services;

use App\Models\Lead;
use App\Models\Site;
use Exception;
use Google\Ads\GoogleAds\Lib\OAuth2TokenBuilder;
use Google\Ads\GoogleAds\Lib\V17\GoogleAdsClient;
use Google\Ads\GoogleAds\Lib\V17\GoogleAdsClientBuilder;
use Google\Ads\GoogleAds\Util\V17\ResourceNames;
use Google\Ads\GoogleAds\V17\Services\ClickConversion;
use Google\Ads\GoogleAds\V17\Services\UploadClickConversionsRequest;
use Illuminate\Support\Facades\Log;

class GoogleService
{
    /**
     * RESOURCES USED:
     * https://developers.google.com/google-ads/api/samples/upload-offline-conversion#php
     */
    public static function trackOfflineConversions(Lead $lead, Site $site)
    {
        $oAuth2Credential = (new OAuth2TokenBuilder)
            ->fromFile(self::getAuthDir())
            ->build();

        $googleAdsClient = (new GoogleAdsClientBuilder)
            ->fromFile(self::getAuthDir())
            ->withOAuth2Credential($oAuth2Credential)
            ->build();

        $customerId = $site->getCustomerId();
        $conversionActionId = $site->getConversionActionId();

        if (! $customerId || ! $conversionActionId) {
            return;
        }

        try {
            self::execute(
                $googleAdsClient,
                $customerId,
                $conversionActionId,
                $lead->toArray()
            );
        } catch (Exception $exception) {
            Log::emergency('Error in GoogleService: ', [$exception->getMessage(), $lead->toArray()]);
        }
    }

    private static function execute(
        GoogleAdsClient $googleAdsClient,
        string $customerId,
        string $conversionActionID,
        array $data,
    ) {
        $clickConversion = new ClickConversion([
            'conversion_action' => ResourceNames::forConversionAction($customerId, $conversionActionID),
            'conversion_value' => $data['conversion_value'],
            'conversion_date_time' => $data['conversion_time'],
            'currency_code' => 'EUR',
            'gclid' => $data['gclid'],
        ]);

        $conversionUploadServiceClient = $googleAdsClient->getConversionUploadServiceClient();

        $response = $conversionUploadServiceClient->uploadClickConversions(
            UploadClickConversionsRequest::build(
                $customerId,
                [$clickConversion],
                true
            )
        );

        if ($response->hasPartialFailureError()) {
            Log::emergency('Partial failure error: ', [$response->getPartialFailureError(), $data]);
        } else {
            Log::info('Uploaded offline conversion for lead: ', [$data]);
        }
    }

    private static function getAuthDir(): string
    {
        // get parent directory of this file;
        return dirname(__DIR__, 2).'/google_auth.ini';
    }
}
