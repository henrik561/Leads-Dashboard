<?php

/**
 * Copyright 2022 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

// Generated code ; DO NOT EDIT.

namespace Google\Ads\GoogleAds\Lib\V17;

use Google\Ads\GoogleAds\Constants;
use Google\Ads\GoogleAds\Lib\ConfigurationTrait;
use Google\Ads\GoogleAds\Lib\InsecureCredentialsWrapper;
use Google\Ads\GoogleAds\V17\Services\Client\AccountBudgetProposalServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\AccountLinkServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\AdGroupAdLabelServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\AdGroupAdServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\AdGroupAssetServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\AdGroupAssetSetServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\AdGroupBidModifierServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\AdGroupCriterionCustomizerServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\AdGroupCriterionLabelServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\AdGroupCriterionServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\AdGroupCustomizerServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\AdGroupExtensionSettingServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\AdGroupFeedServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\AdGroupLabelServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\AdGroupServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\AdParameterServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\AdServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\AssetGroupAssetServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\AssetGroupListingGroupFilterServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\AssetGroupServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\AssetGroupSignalServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\AssetServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\AssetSetAssetServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\AssetSetServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\AudienceInsightsServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\AudienceServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\BatchJobServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\BiddingDataExclusionServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\BiddingSeasonalityAdjustmentServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\BiddingStrategyServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\BillingSetupServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\BrandSuggestionServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\CampaignAssetServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\CampaignAssetSetServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\CampaignBidModifierServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\CampaignBudgetServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\CampaignConversionGoalServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\CampaignCriterionServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\CampaignCustomizerServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\CampaignDraftServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\CampaignExtensionSettingServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\CampaignFeedServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\CampaignGroupServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\CampaignLabelServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\CampaignLifecycleGoalServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\CampaignServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\CampaignSharedSetServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\ConversionActionServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\ConversionAdjustmentUploadServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\ConversionCustomVariableServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\ConversionGoalCampaignConfigServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\ConversionUploadServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\ConversionValueRuleServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\ConversionValueRuleSetServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\CustomAudienceServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\CustomConversionGoalServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\CustomerAssetServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\CustomerAssetSetServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\CustomerClientLinkServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\CustomerConversionGoalServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\CustomerCustomizerServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\CustomerExtensionSettingServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\CustomerFeedServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\CustomerLabelServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\CustomerLifecycleGoalServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\CustomerManagerLinkServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\CustomerNegativeCriterionServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\CustomerServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\CustomerSkAdNetworkConversionValueSchemaServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\CustomerUserAccessInvitationServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\CustomerUserAccessServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\CustomInterestServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\CustomizerAttributeServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\ExperimentArmServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\ExperimentServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\ExtensionFeedItemServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\FeedItemServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\FeedItemSetLinkServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\FeedItemSetServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\FeedItemTargetServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\FeedMappingServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\FeedServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\GeoTargetConstantServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\GoogleAdsFieldServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\GoogleAdsServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\IdentityVerificationServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\InvoiceServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\KeywordPlanAdGroupKeywordServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\KeywordPlanAdGroupServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\KeywordPlanCampaignKeywordServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\KeywordPlanCampaignServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\KeywordPlanIdeaServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\KeywordPlanServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\KeywordThemeConstantServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\LabelServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\LocalServicesLeadServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\OfflineUserDataJobServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\PaymentsAccountServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\ProductLinkInvitationServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\ProductLinkServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\ReachPlanServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\RecommendationServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\RecommendationSubscriptionServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\RemarketingActionServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\ShareablePreviewServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\SharedCriterionServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\SharedSetServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\SmartCampaignSettingServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\SmartCampaignSuggestServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\ThirdPartyAppAnalyticsLinkServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\TravelAssetSuggestionServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\UserDataServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\UserListCustomerTypeServiceClient;
use Google\Ads\GoogleAds\V17\Services\Client\UserListServiceClient;
use Google\ApiCore\GrpcSupportTrait;
use Grpc\ChannelCredentials;

/**
 * Contains service client factory methods.
 */
trait ServiceClientFactoryTrait
{
    use ConfigurationTrait;
    use GrpcSupportTrait;

    private static $CREDENTIALS_LOADER_KEY = 'credentials';

    private static $DEVELOPER_TOKEN_KEY = 'developer-token';

    private static $LOGIN_CUSTOMER_ID_KEY = 'login-customer-id';

    private static $LINKED_CUSTOMER_ID_KEY = 'linked-customer-id';

    private static $SERVICE_ADDRESS_KEY = 'serviceAddress';

    private static $DEFAULT_SERVICE_ADDRESS = 'googleads.googleapis.com';

    private static $TRANSPORT_KEY = 'transport';

    private static $UNARY_MIDDLEWARES = 'unary-middlewares';

    private static $STREAMING_MIDDLEWARES = 'streaming-middlewares';

    /**
     * Gets the Google Ads client options for making API calls.
     *
     * @return array the client options
     */
    public function getGoogleAdsClientOptions(): array
    {
        $clientOptions = [
            self::$CREDENTIALS_LOADER_KEY => $this->getGrpcChannelIsSecure()
                ? $this->getOAuth2Credential()
                : new InsecureCredentialsWrapper($this->getOAuth2Credential()),
            self::$DEVELOPER_TOKEN_KEY => $this->getDeveloperToken(),
        ];
        if (! empty($this->getLoginCustomerId())) {
            $clientOptions += [self::$LOGIN_CUSTOMER_ID_KEY => strval($this->getLoginCustomerId())];
        }
        if (! empty($this->getLinkedCustomerId())) {
            $clientOptions += [
                self::$LINKED_CUSTOMER_ID_KEY => strval($this->getLinkedCustomerId()),
            ];
        }
        if (! empty($this->getEndpoint())) {
            $clientOptions += [self::$SERVICE_ADDRESS_KEY => $this->getEndpoint()];
        }
        $clientOptions['libName'] = Constants::LIBRARY_NAME;
        $clientOptions['libVersion'] = Constants::LIBRARY_VERSION;
        $clientOptions['transportConfig'] = [
            'grpc' => [
                'stubOpts' => [
                    // Inbound headers may exceed default (8kb) max header size.
                    // Sets max header size to 16MB, which should be more than necessary.
                    'grpc.max_metadata_size' => 16 * 1024 * 1024,
                    // Sets max response size to 64MB, since large responses will often exceed the
                    // default (4MB).
                    'grpc.max_receive_message_length' => 64 * 1024 * 1024,
                ],
                'interceptors' => [new GoogleAdsFailuresInterceptor],
            ],
        ];
        if (! empty($this->getLogger())) {
            $googleAdsLoggingInterceptor = new GoogleAdsLoggingInterceptor(
                new GoogleAdsCallLogger(
                    $this->getLogger(),
                    $this->getLogLevel(),
                    $this->getEndpoint() ?: self::$DEFAULT_SERVICE_ADDRESS
                )
            );
            array_unshift(
                $clientOptions['transportConfig']['grpc']['interceptors'],
                $googleAdsLoggingInterceptor
            );
        }
        array_push(
            $clientOptions['transportConfig']['grpc']['interceptors'],
            ...$this->getGrpcInterceptors()
        );
        if (! empty($this->getProxy())) {
            putenv('http_proxy='.$this->getProxy());
        }
        if (! empty($this->getTransport())) {
            $clientOptions += [self::$TRANSPORT_KEY => $this->getTransport()];
        }
        if (! empty($this->getHttpHandler())) {
            $clientOptions['transportConfig']['rest']['httpHandler'] = $this->getHttpHandler();
        }
        if (
            self::getGrpcDependencyStatus()
            && (! $this->getGrpcChannelIsSecure() || ! empty($this->getGrpcChannelCredential()))
        ) {
            $channelCredentials = $this->getGrpcChannelIsSecure()
                ? $this->getGrpcChannelCredential()
                : ChannelCredentials::createInsecure();
            $clientOptions['transportConfig']['grpc']['stubOpts'] += [
                self::$CREDENTIALS_LOADER_KEY => $channelCredentials,
            ];
        }
        $clientOptions += [
            self::$UNARY_MIDDLEWARES => $this->getUnaryMiddlewares(),
            self::$STREAMING_MIDDLEWARES => $this->getStreamingMiddlewares(),
        ];

        return $clientOptions;
    }

    public function getAccountBudgetProposalServiceClient(): AccountBudgetProposalServiceClient
    {
        return new AccountBudgetProposalServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getAccountLinkServiceClient(): AccountLinkServiceClient
    {
        return new AccountLinkServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getAdGroupAdLabelServiceClient(): AdGroupAdLabelServiceClient
    {
        return new AdGroupAdLabelServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getAdGroupAdServiceClient(): AdGroupAdServiceClient
    {
        return new AdGroupAdServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getAdGroupAssetServiceClient(): AdGroupAssetServiceClient
    {
        return new AdGroupAssetServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getAdGroupAssetSetServiceClient(): AdGroupAssetSetServiceClient
    {
        return new AdGroupAssetSetServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getAdGroupBidModifierServiceClient(): AdGroupBidModifierServiceClient
    {
        return new AdGroupBidModifierServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getAdGroupCriterionCustomizerServiceClient(): AdGroupCriterionCustomizerServiceClient
    {
        return new AdGroupCriterionCustomizerServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getAdGroupCriterionLabelServiceClient(): AdGroupCriterionLabelServiceClient
    {
        return new AdGroupCriterionLabelServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getAdGroupCriterionServiceClient(): AdGroupCriterionServiceClient
    {
        return new AdGroupCriterionServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getAdGroupCustomizerServiceClient(): AdGroupCustomizerServiceClient
    {
        return new AdGroupCustomizerServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getAdGroupExtensionSettingServiceClient(): AdGroupExtensionSettingServiceClient
    {
        return new AdGroupExtensionSettingServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getAdGroupFeedServiceClient(): AdGroupFeedServiceClient
    {
        return new AdGroupFeedServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getAdGroupLabelServiceClient(): AdGroupLabelServiceClient
    {
        return new AdGroupLabelServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getAdGroupServiceClient(): AdGroupServiceClient
    {
        return new AdGroupServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getAdParameterServiceClient(): AdParameterServiceClient
    {
        return new AdParameterServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getAdServiceClient(): AdServiceClient
    {
        return new AdServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getAssetGroupAssetServiceClient(): AssetGroupAssetServiceClient
    {
        return new AssetGroupAssetServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getAssetGroupListingGroupFilterServiceClient(): AssetGroupListingGroupFilterServiceClient
    {
        return new AssetGroupListingGroupFilterServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getAssetGroupServiceClient(): AssetGroupServiceClient
    {
        return new AssetGroupServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getAssetGroupSignalServiceClient(): AssetGroupSignalServiceClient
    {
        return new AssetGroupSignalServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getAssetServiceClient(): AssetServiceClient
    {
        return new AssetServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getAssetSetAssetServiceClient(): AssetSetAssetServiceClient
    {
        return new AssetSetAssetServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getAssetSetServiceClient(): AssetSetServiceClient
    {
        return new AssetSetServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getAudienceInsightsServiceClient(): AudienceInsightsServiceClient
    {
        return new AudienceInsightsServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getAudienceServiceClient(): AudienceServiceClient
    {
        return new AudienceServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getBatchJobServiceClient(): BatchJobServiceClient
    {
        return new BatchJobServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getBiddingDataExclusionServiceClient(): BiddingDataExclusionServiceClient
    {
        return new BiddingDataExclusionServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getBiddingSeasonalityAdjustmentServiceClient(): BiddingSeasonalityAdjustmentServiceClient
    {
        return new BiddingSeasonalityAdjustmentServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getBiddingStrategyServiceClient(): BiddingStrategyServiceClient
    {
        return new BiddingStrategyServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getBillingSetupServiceClient(): BillingSetupServiceClient
    {
        return new BillingSetupServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getBrandSuggestionServiceClient(): BrandSuggestionServiceClient
    {
        return new BrandSuggestionServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getCampaignAssetServiceClient(): CampaignAssetServiceClient
    {
        return new CampaignAssetServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getCampaignAssetSetServiceClient(): CampaignAssetSetServiceClient
    {
        return new CampaignAssetSetServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getCampaignBidModifierServiceClient(): CampaignBidModifierServiceClient
    {
        return new CampaignBidModifierServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getCampaignBudgetServiceClient(): CampaignBudgetServiceClient
    {
        return new CampaignBudgetServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getCampaignConversionGoalServiceClient(): CampaignConversionGoalServiceClient
    {
        return new CampaignConversionGoalServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getCampaignCriterionServiceClient(): CampaignCriterionServiceClient
    {
        return new CampaignCriterionServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getCampaignCustomizerServiceClient(): CampaignCustomizerServiceClient
    {
        return new CampaignCustomizerServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getCampaignDraftServiceClient(): CampaignDraftServiceClient
    {
        return new CampaignDraftServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getCampaignExtensionSettingServiceClient(): CampaignExtensionSettingServiceClient
    {
        return new CampaignExtensionSettingServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getCampaignFeedServiceClient(): CampaignFeedServiceClient
    {
        return new CampaignFeedServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getCampaignGroupServiceClient(): CampaignGroupServiceClient
    {
        return new CampaignGroupServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getCampaignLabelServiceClient(): CampaignLabelServiceClient
    {
        return new CampaignLabelServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getCampaignLifecycleGoalServiceClient(): CampaignLifecycleGoalServiceClient
    {
        return new CampaignLifecycleGoalServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getCampaignServiceClient(): CampaignServiceClient
    {
        return new CampaignServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getCampaignSharedSetServiceClient(): CampaignSharedSetServiceClient
    {
        return new CampaignSharedSetServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getConversionActionServiceClient(): ConversionActionServiceClient
    {
        return new ConversionActionServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getConversionAdjustmentUploadServiceClient(): ConversionAdjustmentUploadServiceClient
    {
        return new ConversionAdjustmentUploadServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getConversionCustomVariableServiceClient(): ConversionCustomVariableServiceClient
    {
        return new ConversionCustomVariableServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getConversionGoalCampaignConfigServiceClient(): ConversionGoalCampaignConfigServiceClient
    {
        return new ConversionGoalCampaignConfigServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getConversionUploadServiceClient(): ConversionUploadServiceClient
    {
        return new ConversionUploadServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getConversionValueRuleServiceClient(): ConversionValueRuleServiceClient
    {
        return new ConversionValueRuleServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getConversionValueRuleSetServiceClient(): ConversionValueRuleSetServiceClient
    {
        return new ConversionValueRuleSetServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getCustomAudienceServiceClient(): CustomAudienceServiceClient
    {
        return new CustomAudienceServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getCustomConversionGoalServiceClient(): CustomConversionGoalServiceClient
    {
        return new CustomConversionGoalServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getCustomerAssetServiceClient(): CustomerAssetServiceClient
    {
        return new CustomerAssetServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getCustomerAssetSetServiceClient(): CustomerAssetSetServiceClient
    {
        return new CustomerAssetSetServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getCustomerClientLinkServiceClient(): CustomerClientLinkServiceClient
    {
        return new CustomerClientLinkServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getCustomerConversionGoalServiceClient(): CustomerConversionGoalServiceClient
    {
        return new CustomerConversionGoalServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getCustomerCustomizerServiceClient(): CustomerCustomizerServiceClient
    {
        return new CustomerCustomizerServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getCustomerExtensionSettingServiceClient(): CustomerExtensionSettingServiceClient
    {
        return new CustomerExtensionSettingServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getCustomerFeedServiceClient(): CustomerFeedServiceClient
    {
        return new CustomerFeedServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getCustomerLabelServiceClient(): CustomerLabelServiceClient
    {
        return new CustomerLabelServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getCustomerLifecycleGoalServiceClient(): CustomerLifecycleGoalServiceClient
    {
        return new CustomerLifecycleGoalServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getCustomerManagerLinkServiceClient(): CustomerManagerLinkServiceClient
    {
        return new CustomerManagerLinkServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getCustomerNegativeCriterionServiceClient(): CustomerNegativeCriterionServiceClient
    {
        return new CustomerNegativeCriterionServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getCustomerServiceClient(): CustomerServiceClient
    {
        return new CustomerServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getCustomerSkAdNetworkConversionValueSchemaServiceClient(): CustomerSkAdNetworkConversionValueSchemaServiceClient
    {
        return new CustomerSkAdNetworkConversionValueSchemaServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getCustomerUserAccessInvitationServiceClient(): CustomerUserAccessInvitationServiceClient
    {
        return new CustomerUserAccessInvitationServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getCustomerUserAccessServiceClient(): CustomerUserAccessServiceClient
    {
        return new CustomerUserAccessServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getCustomInterestServiceClient(): CustomInterestServiceClient
    {
        return new CustomInterestServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getCustomizerAttributeServiceClient(): CustomizerAttributeServiceClient
    {
        return new CustomizerAttributeServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getExperimentArmServiceClient(): ExperimentArmServiceClient
    {
        return new ExperimentArmServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getExperimentServiceClient(): ExperimentServiceClient
    {
        return new ExperimentServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getExtensionFeedItemServiceClient(): ExtensionFeedItemServiceClient
    {
        return new ExtensionFeedItemServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getFeedItemServiceClient(): FeedItemServiceClient
    {
        return new FeedItemServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getFeedItemSetLinkServiceClient(): FeedItemSetLinkServiceClient
    {
        return new FeedItemSetLinkServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getFeedItemSetServiceClient(): FeedItemSetServiceClient
    {
        return new FeedItemSetServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getFeedItemTargetServiceClient(): FeedItemTargetServiceClient
    {
        return new FeedItemTargetServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getFeedMappingServiceClient(): FeedMappingServiceClient
    {
        return new FeedMappingServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getFeedServiceClient(): FeedServiceClient
    {
        return new FeedServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getGeoTargetConstantServiceClient(): GeoTargetConstantServiceClient
    {
        return new GeoTargetConstantServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getGoogleAdsFieldServiceClient(): GoogleAdsFieldServiceClient
    {
        return new GoogleAdsFieldServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getGoogleAdsServiceClient(): GoogleAdsServiceClient
    {
        return new GoogleAdsServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getIdentityVerificationServiceClient(): IdentityVerificationServiceClient
    {
        return new IdentityVerificationServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getInvoiceServiceClient(): InvoiceServiceClient
    {
        return new InvoiceServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getKeywordPlanAdGroupKeywordServiceClient(): KeywordPlanAdGroupKeywordServiceClient
    {
        return new KeywordPlanAdGroupKeywordServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getKeywordPlanAdGroupServiceClient(): KeywordPlanAdGroupServiceClient
    {
        return new KeywordPlanAdGroupServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getKeywordPlanCampaignKeywordServiceClient(): KeywordPlanCampaignKeywordServiceClient
    {
        return new KeywordPlanCampaignKeywordServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getKeywordPlanCampaignServiceClient(): KeywordPlanCampaignServiceClient
    {
        return new KeywordPlanCampaignServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getKeywordPlanIdeaServiceClient(): KeywordPlanIdeaServiceClient
    {
        return new KeywordPlanIdeaServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getKeywordPlanServiceClient(): KeywordPlanServiceClient
    {
        return new KeywordPlanServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getKeywordThemeConstantServiceClient(): KeywordThemeConstantServiceClient
    {
        return new KeywordThemeConstantServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getLabelServiceClient(): LabelServiceClient
    {
        return new LabelServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getLocalServicesLeadServiceClient(): LocalServicesLeadServiceClient
    {
        return new LocalServicesLeadServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getOfflineUserDataJobServiceClient(): OfflineUserDataJobServiceClient
    {
        return new OfflineUserDataJobServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getPaymentsAccountServiceClient(): PaymentsAccountServiceClient
    {
        return new PaymentsAccountServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getProductLinkInvitationServiceClient(): ProductLinkInvitationServiceClient
    {
        return new ProductLinkInvitationServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getProductLinkServiceClient(): ProductLinkServiceClient
    {
        return new ProductLinkServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getReachPlanServiceClient(): ReachPlanServiceClient
    {
        return new ReachPlanServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getRecommendationServiceClient(): RecommendationServiceClient
    {
        return new RecommendationServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getRecommendationSubscriptionServiceClient(): RecommendationSubscriptionServiceClient
    {
        return new RecommendationSubscriptionServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getRemarketingActionServiceClient(): RemarketingActionServiceClient
    {
        return new RemarketingActionServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getShareablePreviewServiceClient(): ShareablePreviewServiceClient
    {
        return new ShareablePreviewServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getSharedCriterionServiceClient(): SharedCriterionServiceClient
    {
        return new SharedCriterionServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getSharedSetServiceClient(): SharedSetServiceClient
    {
        return new SharedSetServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getSmartCampaignSettingServiceClient(): SmartCampaignSettingServiceClient
    {
        return new SmartCampaignSettingServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getSmartCampaignSuggestServiceClient(): SmartCampaignSuggestServiceClient
    {
        return new SmartCampaignSuggestServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getThirdPartyAppAnalyticsLinkServiceClient(): ThirdPartyAppAnalyticsLinkServiceClient
    {
        return new ThirdPartyAppAnalyticsLinkServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getTravelAssetSuggestionServiceClient(): TravelAssetSuggestionServiceClient
    {
        return new TravelAssetSuggestionServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getUserDataServiceClient(): UserDataServiceClient
    {
        return new UserDataServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getUserListCustomerTypeServiceClient(): UserListCustomerTypeServiceClient
    {
        return new UserListCustomerTypeServiceClient($this->getGoogleAdsClientOptions());
    }

    public function getUserListServiceClient(): UserListServiceClient
    {
        return new UserListServiceClient($this->getGoogleAdsClientOptions());
    }
}
