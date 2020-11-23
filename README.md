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
Note that limits apply for <a href='https://support.cervinodata.com/hc/en-nl/articles/360009250458-Limits-for-Free-plan-users' target='_blank'>Free plan users</a>.
</p>
<p>
If you wish to automate your Cervinodata API connection, check out the list of client API's at <a href='https://github.com/Cervinodata' target='_blank'>https://github.com/Cervinodata</a>.
</p>
</div>


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/cervinodata/clientapi-php.git"
    }
  ],
  "require": {
    "cervinodata/clientapi-php": "*@dev"
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
*AdvertisingDataApi* | [**getBingAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay**](docs/Api/AdvertisingDataApi.md#getbingadsextendedreportperorganisationperaccountpercampaignperday) | **GET** /data/bing-ads-extended-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return bing ads extended report per organisation per account per campaign per day
*AdvertisingDataApi* | [**getFacebookAdCustomConversionReportPerOrganisationPerAccountPerCampaignPerDay**](docs/Api/AdvertisingDataApi.md#getfacebookadcustomconversionreportperorganisationperaccountpercampaignperday) | **GET** /data/facebook-ad-custom-conversion-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return facebook ad custom conversion report per organisation per account per campaign per day
*AdvertisingDataApi* | [**getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerDay**](docs/Api/AdvertisingDataApi.md#getfacebookadextendedreportperorganisationperaccountpercampaignperday) | **GET** /data/facebook-ad-extended-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return facebook ad extended report per organisation per account per campaign per day
*AdvertisingDataApi* | [**getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerDevicePerDay**](docs/Api/AdvertisingDataApi.md#getfacebookadextendedreportperorganisationperaccountpercampaignperdeviceperday) | **GET** /data/facebook-ad-extended-report-per-organisation-per-account-per-campaign-per-device-per-day/{organisationUuids} | Return facebook ad extended report per organisation per account per campaign per device per day
*AdvertisingDataApi* | [**getGoogleAdsReportPerOrganisationPerAccountPerCampaignPerDevicePerDay**](docs/Api/AdvertisingDataApi.md#getgoogleadsreportperorganisationperaccountpercampaignperdeviceperday) | **GET** /data/google-ads-report-per-organisation-per-account-per-campaign-per-device-per-day/{organisationUuids} | Return google ads report per organisation per account per campaign per device per day
*AdvertisingDataApi* | [**getLinkedInAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay**](docs/Api/AdvertisingDataApi.md#getlinkedinadsextendedreportperorganisationperaccountpercampaignperday) | **GET** /data/linkedin-ads-extended-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return linkedin ads extended report per organisation per account per campaign per day
*AdvertisingDataApi* | [**getSnapchatAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay**](docs/Api/AdvertisingDataApi.md#getsnapchatadsextendedreportperorganisationperaccountpercampaignperday) | **GET** /data/snapchat-ads-extended-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return snapchat ads extended report per organisation per account per campaign per day
*AdvertisingDataApi* | [**getTwitterAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay**](docs/Api/AdvertisingDataApi.md#gettwitteradsextendedreportperorganisationperaccountpercampaignperday) | **GET** /data/twitter-ads-extended-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return twitter ads extended report per organisation per account per campaign per day
*AnalyticsDataApi* | [**getViews**](docs/Api/AnalyticsDataApi.md#getviews) | **GET** /data/views/{organisationUuid} | Return views by organisation
*AnalyticsDataDefaultMetricsApi* | [**getAnalyticsReportPerCampaignPerDay**](docs/Api/AnalyticsDataDefaultMetricsApi.md#getanalyticsreportpercampaignperday) | **GET** /data/analytics-report-per-campaign-per-day/{organisationUuid} | Return analytics report per campaign per day by organisation
*AnalyticsDataDefaultMetricsApi* | [**getAnalyticsReportPerChannelGroupPerDay**](docs/Api/AnalyticsDataDefaultMetricsApi.md#getanalyticsreportperchannelgroupperday) | **GET** /data/analytics-report-per-channel-group-per-day/{organisationUuid} | Return analytics report per channel group per day by organisation
*AnalyticsDataDefaultMetricsApi* | [**getAnalyticsReportPerDevicePerChannelGroupPerOrganisationPerViewPerDay**](docs/Api/AnalyticsDataDefaultMetricsApi.md#getanalyticsreportperdeviceperchannelgroupperorganisationperviewperday) | **GET** /data/analytics-report-per-device-per-channel-group-per-organisation-per-view-per-day/{organisationUuids} | Return analytics report per device per channel group per organisation per view per day
*AnalyticsDataDefaultMetricsApi* | [**getAnalyticsReportPerDevicePerDay**](docs/Api/AnalyticsDataDefaultMetricsApi.md#getanalyticsreportperdeviceperday) | **GET** /data/analytics-report-per-device-per-day/{organisationUuid} | Return analytics report per device per day by organisation
*AnalyticsDataDefaultMetricsApi* | [**getAnalyticsReportPerSourceMediumPerDay**](docs/Api/AnalyticsDataDefaultMetricsApi.md#getanalyticsreportpersourcemediumperday) | **GET** /data/analytics-report-per-source-medium-per-day/{organisationUuid} | Return analytics report per source medium per day by organisation
*AnalyticsDataGoalsApi* | [**getAnalyticsGoalReportPerCampaignPerDay**](docs/Api/AnalyticsDataGoalsApi.md#getanalyticsgoalreportpercampaignperday) | **GET** /data/analytics-goal-report-per-campaign-per-day/{organisationUuid} | Return analytics goal report per campaign per day by organisation
*AnalyticsDataGoalsApi* | [**getAnalyticsGoalReportPerChannelGroupPerDay**](docs/Api/AnalyticsDataGoalsApi.md#getanalyticsgoalreportperchannelgroupperday) | **GET** /data/analytics-goal-report-per-channel-group-per-day/{organisationUuid} | Return analytics goal report per channel group per day by organisation
*AnalyticsDataGoalsApi* | [**getAnalyticsGoalReportPerDevicePerDay**](docs/Api/AnalyticsDataGoalsApi.md#getanalyticsgoalreportperdeviceperday) | **GET** /data/analytics-goal-report-per-device-per-day/{organisationUuid} | Return analytics goal report per device per day by organisation
*AnalyticsDataGoalsApi* | [**getAnalyticsGoalReportPerSourceMediumPerDay**](docs/Api/AnalyticsDataGoalsApi.md#getanalyticsgoalreportpersourcemediumperday) | **GET** /data/analytics-goal-report-per-source-medium-per-day/{organisationUuid} | Return analytics goal report per source medium per day by organisation
*CampaignGroupApi* | [**getCampaignGroupAdReportPerOrganisationPerCampaignPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngroupadreportperorganisationpercampaignperday) | **GET** /data/campaign-group-ad-report-per-organisation-per-campaign-per-day/{organisationUuids} | Return campaign group ad report per organisation per campaign per day
*CampaignGroupApi* | [**getCampaignGroupAdReportPerOrganisationPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngroupadreportperorganisationperday) | **GET** /data/campaign-group-ad-report-per-organisation-per-day/{organisationUuids} | Return campaign group ad report per organisation per day
*CampaignGroupApi* | [**getCampaignGroupAnalyticsReportPerOrganisationPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngroupanalyticsreportperorganisationperday) | **GET** /data/campaign-group-analytics-report-per-organisation-per-day/{organisationUuids} | Return campaign group analytics report per organisation per day
*CampaignGroupApi* | [**getCampaignGroupBingAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngroupbingadsextendedreportperorganisationperaccountpercampaignperday) | **GET** /data/campaign-group-bing-ads-extended-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return campaign group bing ads extended report per organisation per account per campaign per day
*CampaignGroupApi* | [**getCampaignGroupDoubleClickCampaignManagerReportPerOrganisationPerAccountPerCampaignPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngroupdoubleclickcampaignmanagerreportperorganisationperaccountpercampaignperday) | **GET** /data/campaign-group-doubleclick-campaign-manager-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return campaign group doubleclick campaign manager report per organisation per account per campaign per day
*CampaignGroupApi* | [**getCampaignGroupFacebookAdExtendedReportPerOrganisationPerCampaignPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngroupfacebookadextendedreportperorganisationpercampaignperday) | **GET** /data/campaign-group-facebook-ad-extended-report-per-organisation-per-campaign-per-day/{organisationUuids} | Return campaign group facebook ad extended report per organisation per campaign per day
*CampaignGroupApi* | [**getCampaignGroupFacebookAdReportPerOrganisationPerCampaignPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngroupfacebookadreportperorganisationpercampaignperday) | **GET** /data/campaign-group-facebook-ad-report-per-organisation-per-campaign-per-day/{organisationUuids} | Return campaign group facebook ad report per organisation per campaign per day
*CampaignGroupApi* | [**getCampaignGroupGoogleAdsReportPerOrganisationPerCampaignPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngroupgoogleadsreportperorganisationpercampaignperday) | **GET** /data/campaign-group-google-ads-report-per-organisation-per-campaign-per-day/{organisationUuids} | Return campaign group google ads report per organisation per campaign per day
*CampaignGroupApi* | [**getCampaignGroupLinkedInAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngrouplinkedinadsextendedreportperorganisationperaccountpercampaignperday) | **GET** /data/campaign-group-linkedin-ads-extended-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return campaign group linkedin ads extended report per organisation per account per campaign per day
*CampaignGroupApi* | [**getCampaignGroupReportPerOrganisationPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngroupreportperorganisationperday) | **GET** /data/campaign-group-report-per-organisation-per-day/{organisationUuids} | Return campaign group report per organisation per day
*CampaignGroupApi* | [**getCampaignGroupSnapchatAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngroupsnapchatadsextendedreportperorganisationperaccountpercampaignperday) | **GET** /data/campaign-group-snapchat-ads-extended-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return campaign group snapchat ads extended report per organisation per account per campaign per day
*CampaignGroupApi* | [**getCampaignGroupTwitterAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngrouptwitteradsextendedreportperorganisationperaccountpercampaignperday) | **GET** /data/campaign-group-twitter-ads-extended-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return campaign group twitter ads extended report per organisation per account per campaign per day
*CampaignGroupApi* | [**getCampaignGroupVideoReportPerOrganisationPerCampaignPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngroupvideoreportperorganisationpercampaignperday) | **GET** /data/campaign-group-video-report-per-organisation-per-campaign-per-day/{organisationUuids} | Return campaign group video report per organisation per campaign per day
*CampaignGroupApi* | [**getCampaignGroupVideoReportPerOrganisationPerDay**](docs/Api/CampaignGroupApi.md#getcampaigngroupvideoreportperorganisationperday) | **GET** /data/campaign-group-video-report-per-organisation-per-day/{organisationUuids} | Return campaign group video report per organisation per day
*GenericDataApi* | [**getCampaignGroups**](docs/Api/GenericDataApi.md#getcampaigngroups) | **GET** /data/campaign-groups | Return campaign groups
*GenericDataApi* | [**getOrganisations**](docs/Api/GenericDataApi.md#getorganisations) | **GET** /data/organisations | Return organisations

## Models


## Authorization

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
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
