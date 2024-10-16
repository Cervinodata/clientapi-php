# cervinodata_api

<div style='margin: 2em 0;'>
<p>
Before you get going with the Cervinodata API, set up Cervinodata (read the support page here: <a href='https://support.cervinodata.com/hc/en-nl/articles/360004363237' target='_blank'>How to set up the Cervinodata API</a>).
</p>
<h3>To use the Cervinodata API, you need all of the following:</h3>
<p>
<ol>
<li>An active Cervinodata account, you can start a free trial <a href='https://app.cervinodata.com/register' target='_blank'>here</a></li>
<li>At least one connection to a platform (check <a href='https://app.cervinodata.com/data-sources-connections' target='_blank'>here</a>)</li>
<li>At least one account switched ON (check <a href='https://app.cervinodata.com/accounts' target='_blank'>here</a>)</li>
<li>At least one data refresh executed (check <a href='https://app.cervinodata.com/manual-data-refresh' target='_blank'>here</a>)</li>
<li>An active API token (check <a href='https://app.cervinodata.com/settings#/api' target='_blank'>here</a>)</li>
</ol>
</p>
<p>
Note that limits apply for <a href='https://support.cervinodata.com/hc/articles/360014265139' target='_blank'>Free plan users</a>.
</p>
<p>
If you wish to automate your Cervinodata API connection, check out the list of client API's at <a href='https://github.com/Cervinodata' target='_blank'>https://github.com/Cervinodata</a>.
</p>
</div>


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/cervinodata/php.git"
    }
  ],
  "require": {
    "cervinodata/php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/cervinodata_api/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdvertisingDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation_uuids = array('organisation_uuids_example'); // string[] | Organisation uuids
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | From date
$date_format = 'date_format_example'; // string | Outputted date format
$format = 'format_example'; // string | Output format (use csv for large result sets)

try {
    $result = $apiInstance->getAdAccountReportPerOrganisationPerDay($organisation_uuids, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisingDataApi->getAdAccountReportPerOrganisationPerDay: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://app.cervinodata.com/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AdvertisingDataApi* | [**getAdAccountReportPerOrganisationPerDay**](docs/Api/AdvertisingDataApi.md#getadaccountreportperorganisationperday) | **GET** /data/ad-account-report-per-organisation-per-day/{organisationUuids} | Return ad account report per organisation per day
*AdvertisingDataApi* | [**getAdAccounts**](docs/Api/AdvertisingDataApi.md#getadaccounts) | **GET** /data/ad-accounts/{organisationUuid} | Return ad accounts by organisation
*AdvertisingDataApi* | [**getAdCampaignReportPerDay**](docs/Api/AdvertisingDataApi.md#getadcampaignreportperday) | **GET** /data/ad-campaign-report-per-day/{organisationUuid} | Return ad campaign report per day by organisation
*AdvertisingDataApi* | [**getAdCampaignReportPerOrganisationPerAccountPerCampaignPerDevicePerDay**](docs/Api/AdvertisingDataApi.md#getadcampaignreportperorganisationperaccountpercampaignperdeviceperday) | **GET** /data/ad-campaign-report-per-organisation-per-account-per-campaign-per-device-per-day/{organisationUuids} | Return ad campaign report per organisation per account per campaign per device per day
*AdvertisingDataApi* | [**getAdCampaignReportPerOrganisationPerAccountPerDay**](docs/Api/AdvertisingDataApi.md#getadcampaignreportperorganisationperaccountperday) | **GET** /data/ad-campaign-report-per-organisation-per-account-per-day/{organisationUuids} | Return ad campaign report per organisation per account per day
*AdvertisingDataApi* | [**getAdCampaigns**](docs/Api/AdvertisingDataApi.md#getadcampaigns) | **GET** /data/ad-campaigns/{organisationUuid} | Return ad campaigns by organisation
*AdvertisingDataApi* | [**getAdGroups**](docs/Api/AdvertisingDataApi.md#getadgroups) | **GET** /data/ad-groups/{organisationUuid} | Return ad groups by organisation
*AdvertisingDataApi* | [**getAdformExtendedReportPerOrganisationPerAccountPerCampaignPerCreativePerDay**](docs/Api/AdvertisingDataApi.md#getadformextendedreportperorganisationperaccountpercampaignpercreativeperday) | **GET** /data/adform-extended-report-per-organisation-per-account-per-campaign-per-creative-per-day/{organisationUuids} | Return adform extended report per organisation per account per campaign per creative per day
*AdvertisingDataApi* | [**getAdformExtendedReportPerOrganisationPerAccountPerCampaignPerDay**](docs/Api/AdvertisingDataApi.md#getadformextendedreportperorganisationperaccountpercampaignperday) | **GET** /data/adform-extended-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return adform extended report per organisation per account per campaign per day
*AdvertisingDataApi* | [**getAdformExtendedReportPerOrganisationPerAccountPerCampaignPerLineItemPerDay**](docs/Api/AdvertisingDataApi.md#getadformextendedreportperorganisationperaccountpercampaignperlineitemperday) | **GET** /data/adform-extended-report-per-organisation-per-account-per-campaign-per-line-item-per-day/{organisationUuids} | Return adform extended report per organisation per account per campaign per line item per day
*AdvertisingDataApi* | [**getBingAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay**](docs/Api/AdvertisingDataApi.md#getbingadsextendedreportperorganisationperaccountpercampaignperday) | **GET** /data/bing-ads-extended-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return bing ads extended report per organisation per account per campaign per day
*AdvertisingDataApi* | [**getFacebookAdCustomConversionReportPerOrganisationPerAccountPerCampaignPerDay**](docs/Api/AdvertisingDataApi.md#getfacebookadcustomconversionreportperorganisationperaccountpercampaignperday) | **GET** /data/facebook-ad-custom-conversion-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return facebook ad custom conversion report per organisation per account per campaign per day
*AdvertisingDataApi* | [**getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerAdGroupPerDay**](docs/Api/AdvertisingDataApi.md#getfacebookadextendedreportperorganisationperaccountpercampaignperadgroupperday) | **GET** /data/facebook-ad-extended-report-per-organisation-per-account-per-campaign-per-ad-group-per-day/{organisationUuids} | Return facebook ad extended report per organisation per account per campaign per ad group per day
*AdvertisingDataApi* | [**getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerAdGroupPerDayPlus**](docs/Api/AdvertisingDataApi.md#getfacebookadextendedreportperorganisationperaccountpercampaignperadgroupperdayplus) | **GET** /data/facebook-ad-extended-report-per-organisation-per-account-per-campaign-per-ad-group-per-day-plus/{organisationUuids} | Return facebook ad extended report per organisation per account per campaign per ad group per day plus
*AdvertisingDataApi* | [**getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerAdPerDay**](docs/Api/AdvertisingDataApi.md#getfacebookadextendedreportperorganisationperaccountpercampaignperadperday) | **GET** /data/facebook-ad-extended-report-per-organisation-per-account-per-campaign-per-ad-per-day/{organisationUuids} | Return facebook ad extended report per organisation per account per campaign per ad per day
*AdvertisingDataApi* | [**getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerDay**](docs/Api/AdvertisingDataApi.md#getfacebookadextendedreportperorganisationperaccountpercampaignperday) | **GET** /data/facebook-ad-extended-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return facebook ad extended report per organisation per account per campaign per day
*AdvertisingDataApi* | [**getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerDayPlus**](docs/Api/AdvertisingDataApi.md#getfacebookadextendedreportperorganisationperaccountpercampaignperdayplus) | **GET** /data/facebook-ad-extended-report-per-organisation-per-account-per-campaign-per-day-plus/{organisationUuids} | Return facebook ad extended report per organisation per account per campaign per day plus
*AdvertisingDataApi* | [**getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerDevicePerDay**](docs/Api/AdvertisingDataApi.md#getfacebookadextendedreportperorganisationperaccountpercampaignperdeviceperday) | **GET** /data/facebook-ad-extended-report-per-organisation-per-account-per-campaign-per-device-per-day/{organisationUuids} | Return facebook ad extended report per organisation per account per campaign per device per day
*AdvertisingDataApi* | [**getGoogleAdsReportPerOrganisationPerAccountPerCampaignPerDevicePerDay**](docs/Api/AdvertisingDataApi.md#getgoogleadsreportperorganisationperaccountpercampaignperdeviceperday) | **GET** /data/google-ads-report-per-organisation-per-account-per-campaign-per-device-per-day/{organisationUuids} | Return google ads report per organisation per account per campaign per device per day
*AdvertisingDataApi* | [**getHashedAdCampaignReportPerOrganisationPerAccountPerDay**](docs/Api/AdvertisingDataApi.md#gethashedadcampaignreportperorganisationperaccountperday) | **GET** /data/hashed-ad-campaign-report-per-organisation-per-account-per-day/{organisationUuids} | Return hashed ad campaign report per organisation per account per day
*AdvertisingDataApi* | [**getLinkedInAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay**](docs/Api/AdvertisingDataApi.md#getlinkedinadsextendedreportperorganisationperaccountpercampaignperday) | **GET** /data/linkedin-ads-extended-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return linkedin ads extended report per organisation per account per campaign per day
*AdvertisingDataApi* | [**getPinterestAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay**](docs/Api/AdvertisingDataApi.md#getpinterestadsextendedreportperorganisationperaccountpercampaignperday) | **GET** /data/pinterest-ads-extended-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return pinterest ads extended report per organisation per account per campaign per day
*AdvertisingDataApi* | [**getSnapchatAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay**](docs/Api/AdvertisingDataApi.md#getsnapchatadsextendedreportperorganisationperaccountpercampaignperday) | **GET** /data/snapchat-ads-extended-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return snapchat ads extended report per organisation per account per campaign per day
*AdvertisingDataApi* | [**getTikTokAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay**](docs/Api/AdvertisingDataApi.md#gettiktokadsextendedreportperorganisationperaccountpercampaignperday) | **GET** /data/tiktok-ads-extended-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return tiktok ads extended report per organisation per account per campaign per day
*AdvertisingDataApi* | [**getTwitterAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay**](docs/Api/AdvertisingDataApi.md#gettwitteradsextendedreportperorganisationperaccountpercampaignperday) | **GET** /data/twitter-ads-extended-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return twitter ads extended report per organisation per account per campaign per day
*AnalyticsDataApi* | [**getGA4ReportPerChannelGroupPerOrganisationPerProperty**](docs/Api/AnalyticsDataApi.md#getga4reportperchannelgroupperorganisationperproperty) | **GET** /data/ga4-report-per-channel-group-per-organisation-per-property/{organisationUuids} | Return GA4 report per channel group per organisation per property
*AnalyticsDataApi* | [**getGA4ReportPerChannelGroupPerOrganisationPerPropertyPerMonth**](docs/Api/AnalyticsDataApi.md#getga4reportperchannelgroupperorganisationperpropertypermonth) | **GET** /data/ga4-report-per-channel-group-per-organisation-per-property-per-month/{organisationUuids} | Return GA4 report per channel group per organisation per property per month
*AnalyticsDataApi* | [**getGA4ReportPerChannelGroupPerProductNamePerOrganisationPerPropertyPerMonth**](docs/Api/AnalyticsDataApi.md#getga4reportperchannelgroupperproductnameperorganisationperpropertypermonth) | **GET** /data/ga4-report-per-channel-group-per-product-name-per-organisation-per-property-per-month/{organisationUuids} | Return GA4 report per channel group per product name per organisation per property per month
*AnalyticsDataApi* | [**getGA4ReportPerChannelGroupPerSourceMediumPerOrganisationPerPropertyPerMonth**](docs/Api/AnalyticsDataApi.md#getga4reportperchannelgrouppersourcemediumperorganisationperpropertypermonth) | **GET** /data/ga4-report-per-channel-group-per-source-medium-per-organisation-per-property-per-month/{organisationUuids} | Return GA4 report per channel group per source medium per organisation per property per month
*AnalyticsDataApi* | [**getViews**](docs/Api/AnalyticsDataApi.md#getviews) | **GET** /data/views/{organisationUuid} | Return views by organisation
*AnalyticsDataDefaultMetricsApi* | [**getAnalyticsReportPerCampaignPerDay**](docs/Api/AnalyticsDataDefaultMetricsApi.md#getanalyticsreportpercampaignperday) | **GET** /data/analytics-report-per-campaign-per-day/{organisationUuid} | Return analytics report per campaign per day by organisation
*AnalyticsDataDefaultMetricsApi* | [**getAnalyticsReportPerChannelGroupPerDay**](docs/Api/AnalyticsDataDefaultMetricsApi.md#getanalyticsreportperchannelgroupperday) | **GET** /data/analytics-report-per-channel-group-per-day/{organisationUuid} | Return analytics report per channel group per day by organisation
*AnalyticsDataDefaultMetricsApi* | [**getAnalyticsReportPerDevicePerChannelGroupPerOrganisationPerViewPerDay**](docs/Api/AnalyticsDataDefaultMetricsApi.md#getanalyticsreportperdeviceperchannelgroupperorganisationperviewperday) | **GET** /data/analytics-report-per-device-per-channel-group-per-organisation-per-view-per-day/{organisationUuids} | Return analytics report per device per channel group per organisation per view per day
*AnalyticsDataDefaultMetricsApi* | [**getAnalyticsReportPerDevicePerDay**](docs/Api/AnalyticsDataDefaultMetricsApi.md#getanalyticsreportperdeviceperday) | **GET** /data/analytics-report-per-device-per-day/{organisationUuid} | Return analytics report per device per day by organisation
*AnalyticsDataDefaultMetricsApi* | [**getAnalyticsReportPerSourceMediumPerDay**](docs/Api/AnalyticsDataDefaultMetricsApi.md#getanalyticsreportpersourcemediumperday) | **GET** /data/analytics-report-per-source-medium-per-day/{organisationUuid} | Return analytics report per source medium per day by organisation
*AnalyticsDataDefaultMetricsApi* | [**getGA4ReportPerDevicePerChannelGroupPerOrganisationPerPropertyPerDay**](docs/Api/AnalyticsDataDefaultMetricsApi.md#getga4reportperdeviceperchannelgroupperorganisationperpropertyperday) | **GET** /data/ga4-report-per-device-per-channel-group-per-organisation-per-property-per-day/{organisationUuids} | Return GA4 report per device per channel group per organisation per property per day
*AnalyticsDataGoalsApi* | [**getAnalyticsGoalReportPerCampaignPerDay**](docs/Api/AnalyticsDataGoalsApi.md#getanalyticsgoalreportpercampaignperday) | **GET** /data/analytics-goal-report-per-campaign-per-day/{organisationUuid} | Return analytics goal report per campaign per day by organisation
*AnalyticsDataGoalsApi* | [**getAnalyticsGoalReportPerChannelGroupPerDay**](docs/Api/AnalyticsDataGoalsApi.md#getanalyticsgoalreportperchannelgroupperday) | **GET** /data/analytics-goal-report-per-channel-group-per-day/{organisationUuid} | Return analytics goal report per channel group per day by organisation
*AnalyticsDataGoalsApi* | [**getAnalyticsGoalReportPerDevicePerDay**](docs/Api/AnalyticsDataGoalsApi.md#getanalyticsgoalreportperdeviceperday) | **GET** /data/analytics-goal-report-per-device-per-day/{organisationUuid} | Return analytics goal report per device per day by organisation
*AnalyticsDataGoalsApi* | [**getAnalyticsGoalReportPerSourceMediumPerDay**](docs/Api/AnalyticsDataGoalsApi.md#getanalyticsgoalreportpersourcemediumperday) | **GET** /data/analytics-goal-report-per-source-medium-per-day/{organisationUuid} | Return analytics goal report per source medium per day by organisation
*AnalyticsDataProductMetricsApi* | [**getGA4ReportPerProductNamePerOrganisationPerPropertyPerWeek**](docs/Api/AnalyticsDataProductMetricsApi.md#getga4reportperproductnameperorganisationperpropertyperweek) | **GET** /data/ga4-report-per-product-name-per-organisation-per-property-per-week/{organisationUuids} | Return GA4 report per product name per organisation per property per week
*AnalyticsDataProductMetricsApi* | [**getGA4ReportPerProductSkuPerOrganisationPerPropertyPerWeek**](docs/Api/AnalyticsDataProductMetricsApi.md#getga4reportperproductskuperorganisationperpropertyperweek) | **GET** /data/ga4-report-per-product-sku-per-organisation-per-property-per-week/{organisationUuids} | Return GA4 report per product sku per organisation per property per week
*AnalyticsDataTransactionMetricsApi* | [**getGA4ReportPerCampaignPerOrganisationPerProperty**](docs/Api/AnalyticsDataTransactionMetricsApi.md#getga4reportpercampaignperorganisationperproperty) | **GET** /data/ga4-report-per-campaign-per-organisation-per-property/{organisationUuids} | Return GA4 report per campaign per organisation per property
*AnalyticsDataTransactionMetricsApi* | [**getGA4ReportPerCampaignPerOrganisationPerPropertyPerMonth**](docs/Api/AnalyticsDataTransactionMetricsApi.md#getga4reportpercampaignperorganisationperpropertypermonth) | **GET** /data/ga4-report-per-campaign-per-organisation-per-property-per-month/{organisationUuids} | Return GA4 report per campaign per organisation per property per month
*CampaignGroupApi* | [**getCampaignGroupAdReportPerOrganisationPerCampaignPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngroupadreportperorganisationpercampaignperday) | **GET** /data/campaign-group-ad-report-per-organisation-per-campaign-per-day/{organisationUuids} | Return campaign group ad report per organisation per campaign per day
*CampaignGroupApi* | [**getCampaignGroupAdReportPerOrganisationPerCampaignPerWeek**](docs/Api/CampaignGroupApi.md#getcampaigngroupadreportperorganisationpercampaignperweek) | **GET** /data/campaign-group-ad-report-per-organisation-per-campaign-per-week/{organisationUuids} | Return campaign group ad report per organisation per campaign per week
*CampaignGroupApi* | [**getCampaignGroupAdReportPerOrganisationPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngroupadreportperorganisationperday) | **GET** /data/campaign-group-ad-report-per-organisation-per-day/{organisationUuids} | Return campaign group ad report per organisation per day
*CampaignGroupApi* | [**getCampaignGroupAdformExtendedReportPerOrganisationPerAccountPerCampaignPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngroupadformextendedreportperorganisationperaccountpercampaignperday) | **GET** /data/campaign-group-adform-extended-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return campaign group adform extended report per organisation per account per campaign per day
*CampaignGroupApi* | [**getCampaignGroupAdformReportPerOrganisationPerCampaignPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngroupadformreportperorganisationpercampaignperday) | **GET** /data/campaign-group-adform-report-per-organisation-per-campaign-per-day/{organisationUuids} | Return campaign group adform report per organisation per campaign per day
*CampaignGroupApi* | [**getCampaignGroupAdformReportPerOrganisationPerCampaignPerLineItemPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngroupadformreportperorganisationpercampaignperlineitemperday) | **GET** /data/campaign-group-adform-report-per-organisation-per-campaign-per-line-item-per-day/{organisationUuids} | Return campaign group adform report per organisation per campaign per line-item per day
*CampaignGroupApi* | [**getCampaignGroupAnalyticsReportPerOrganisationPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngroupanalyticsreportperorganisationperday) | **GET** /data/campaign-group-analytics-report-per-organisation-per-day/{organisationUuids} | Return campaign group analytics report per organisation per day
*CampaignGroupApi* | [**getCampaignGroupBingAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngroupbingadsextendedreportperorganisationperaccountpercampaignperday) | **GET** /data/campaign-group-bing-ads-extended-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return campaign group bing ads extended report per organisation per account per campaign per day
*CampaignGroupApi* | [**getCampaignGroupDoubleClickBidManagerReportPerOrganisationPerAccountPerCampaignPerCreativePerDay**](docs/Api/CampaignGroupApi.md#getcampaigngroupdoubleclickbidmanagerreportperorganisationperaccountpercampaignpercreativeperday) | **GET** /data/campaign-group-doubleclick-bid-manager-report-per-organisation-per-account-per-campaign-per-creative-per-day/{organisationUuids} | Return campaign group doubleclick bid manager report per organisation per account per campaign per creative per day
*CampaignGroupApi* | [**getCampaignGroupDoubleClickBidManagerReportPerOrganisationPerAccountPerCampaignPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngroupdoubleclickbidmanagerreportperorganisationperaccountpercampaignperday) | **GET** /data/campaign-group-doubleclick-bid-manager-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return campaign group doubleclick bid manager report per organisation per account per campaign per day
*CampaignGroupApi* | [**getCampaignGroupDoubleClickCampaignManagerReportPerOrganisationPerAccountPerCampaignPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngroupdoubleclickcampaignmanagerreportperorganisationperaccountpercampaignperday) | **GET** /data/campaign-group-doubleclick-campaign-manager-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return campaign group doubleclick campaign manager report per organisation per account per campaign per day
*CampaignGroupApi* | [**getCampaignGroupFacebookAdCustomConversionReportPerOrganisationPerAccountPerCampaignPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngroupfacebookadcustomconversionreportperorganisationperaccountpercampaignperday) | **GET** /data/campaign-group-facebook-ad-custom-conversion-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return campaign group facebook ad custom conversion report per organisation per account per campaign per day
*CampaignGroupApi* | [**getCampaignGroupFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerAdGroupPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngroupfacebookadextendedreportperorganisationperaccountpercampaignperadgroupperday) | **GET** /data/campaign-group-facebook-ad-extended-report-per-organisation-per-account-per-campaign-per-ad-group-per-day/{organisationUuids} | Return campaign group facebook ad extended report per organisation per account per campaign per ad group per day
*CampaignGroupApi* | [**getCampaignGroupFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerAdPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngroupfacebookadextendedreportperorganisationperaccountpercampaignperadperday) | **GET** /data/campaign-group-facebook-ad-extended-report-per-organisation-per-account-per-campaign-per-ad-per-day/{organisationUuids} | Return campaign group facebook ad extended report per organisation per account per campaign per ad per day
*CampaignGroupApi* | [**getCampaignGroupFacebookAdExtendedReportPerOrganisationPerCampaignPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngroupfacebookadextendedreportperorganisationpercampaignperday) | **GET** /data/campaign-group-facebook-ad-extended-report-per-organisation-per-campaign-per-day/{organisationUuids} | Return campaign group facebook ad extended report per organisation per campaign per day
*CampaignGroupApi* | [**getCampaignGroupFacebookAdReportPerOrganisationPerCampaignPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngroupfacebookadreportperorganisationpercampaignperday) | **GET** /data/campaign-group-facebook-ad-report-per-organisation-per-campaign-per-day/{organisationUuids} | Return campaign group facebook ad report per organisation per campaign per day
*CampaignGroupApi* | [**getCampaignGroupGoalReportPerOrganisationPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngroupgoalreportperorganisationperday) | **GET** /data/campaign-group-goal-report-per-organisation-per-day/{organisationUuids} | Return campaign group goal report per organisation per day
*CampaignGroupApi* | [**getCampaignGroupGoogleAdsExtendedReportPerOrganisationPerAccountPerCampaignPerAdGroupPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngroupgoogleadsextendedreportperorganisationperaccountpercampaignperadgroupperday) | **GET** /data/campaign-group-google-ads-extended-report-per-organisation-per-account-per-campaign-per-ad-group-per-day/{organisationUuids} | Return campaign group google ads extended report per organisation per account per campaign per ad group per day
*CampaignGroupApi* | [**getCampaignGroupGoogleAdsReportPerOrganisationPerCampaignPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngroupgoogleadsreportperorganisationpercampaignperday) | **GET** /data/campaign-group-google-ads-report-per-organisation-per-campaign-per-day/{organisationUuids} | Return campaign group google ads report per organisation per campaign per day
*CampaignGroupApi* | [**getCampaignGroupLinkedInAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngrouplinkedinadsextendedreportperorganisationperaccountpercampaignperday) | **GET** /data/campaign-group-linkedin-ads-extended-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return campaign group linkedin ads extended report per organisation per account per campaign per day
*CampaignGroupApi* | [**getCampaignGroupPinterestAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngrouppinterestadsextendedreportperorganisationperaccountpercampaignperday) | **GET** /data/campaign-group-pinterest-ads-extended-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return campaign group pinterest ads extended report per organisation per account per campaign per day
*CampaignGroupApi* | [**getCampaignGroupReportPerOrganisationPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngroupreportperorganisationperday) | **GET** /data/campaign-group-report-per-organisation-per-day/{organisationUuids} | Return campaign group report per organisation per day
*CampaignGroupApi* | [**getCampaignGroupSnapchatAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngroupsnapchatadsextendedreportperorganisationperaccountpercampaignperday) | **GET** /data/campaign-group-snapchat-ads-extended-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return campaign group snapchat ads extended report per organisation per account per campaign per day
*CampaignGroupApi* | [**getCampaignGroupTikTokAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngrouptiktokadsextendedreportperorganisationperaccountpercampaignperday) | **GET** /data/campaign-group-tiktok-ads-extended-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return campaign group tiktok ads extended report per organisation per account per campaign per day
*CampaignGroupApi* | [**getCampaignGroupTwitterAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngrouptwitteradsextendedreportperorganisationperaccountpercampaignperday) | **GET** /data/campaign-group-twitter-ads-extended-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return campaign group twitter ads extended report per organisation per account per campaign per day
*CampaignGroupApi* | [**getCampaignGroupVideoReportPerOrganisationPerCampaignPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngroupvideoreportperorganisationpercampaignperday) | **GET** /data/campaign-group-video-report-per-organisation-per-campaign-per-day/{organisationUuids} | Return campaign group video report per organisation per campaign per day
*CampaignGroupApi* | [**getCampaignGroupVideoReportPerOrganisationPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngroupvideoreportperorganisationperday) | **GET** /data/campaign-group-video-report-per-organisation-per-day/{organisationUuids} | Return campaign group video report per organisation per day
*GenericDataApi* | [**getCampaignGroups**](docs/Api/GenericDataApi.md#getcampaigngroups) | **GET** /data/campaign-groups | Return campaign groups
*GenericDataApi* | [**getOrganisations**](docs/Api/GenericDataApi.md#getorganisations) | **GET** /data/organisations | Return organisations
*ProductDataApi* | [**getGA4ReportPerChannelGroupPerProductNamePerOrganisationPerPropertyPerMonth_0**](docs/Api/ProductDataApi.md#getga4reportperchannelgroupperproductnameperorganisationperpropertypermonth_0) | **GET** /data/ga4-report-per-channel-group-per-product-name-per-organisation-per-property-per-month/{organisationUuids} | Return GA4 report per channel group per product name per organisation per property per month

## Models


## Authorization

Authentication schemes defined for the API:
### bearerAuth

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@cervinodata.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
    - Generator version: `7.10.0-SNAPSHOT`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
