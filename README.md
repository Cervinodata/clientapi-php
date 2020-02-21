# cervinodata_api

<div style='margin: 2em 0;'><p>Before you get going with the Cervinodata API, set up Cervinodata (read the support page here: <a href='https://support.cervinodata.com/hc/en-nl/articles/360004363237' target='_blank'>How to set up the Cervinodata API</a>).</p> <h3>To use the Cervinodata API, you need all of the following:</h3> <p> <ol> <li>An active Cervinodata account, you can start a free trial <a href='https://app.cervinodata.com/register' target='_blank'>here</a></li> <li>At least one connection to a platform (check <a href='https://app.cervinodata.com/data-sources-connections' target='_blank'>here</a>)</li> <li>At least one account switched ON (check <a href='https://app.cervinodata.com/accounts' target='_blank'>here</a>)</li> <li>At least one data refresh executed (check <a href='https://app.cervinodata.com/data-destinations-api-data-collection' target='_blank'>here</a>)</li> <li>An active API token (check <a href='https://app.cervinodata.com/settings#/api' target='_blank'>here</a>)</li> </ol> </p> <p> If you wish to automate your Cervinodata API connection, check out the list of client API's at <a href='https://github.com/Cervinodata' target='_blank'>https://github.com/Cervinodata</a>. </p> </div>

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 1.0.0
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

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
    require_once('/path/to/cervinodata_api/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer install
./vendor/bin/phpunit
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
$organisation_uuid = 'organisation_uuid_example'; // string | Organisation uuid
$format = 'format_example'; // string | Output format

try {
    $result = $apiInstance->getAdAccounts($organisation_uuid, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisingDataApi->getAdAccounts: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://app.cervinodata.com/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AdvertisingDataApi* | [**getAdAccounts**](docs/Api/AdvertisingDataApi.md#getadaccounts) | **GET** /data/ad-accounts/{organisationUuid} | Return ad accounts by organisation
*AdvertisingDataApi* | [**getAdCampaignReportPerDay**](docs/Api/AdvertisingDataApi.md#getadcampaignreportperday) | **GET** /data/ad-campaign-report-per-day/{organisationUuid} | Return ad campaign report per day by organisation
*AdvertisingDataApi* | [**getAdCampaignReportPerOrganisationPerAccountPerDay**](docs/Api/AdvertisingDataApi.md#getadcampaignreportperorganisationperaccountperday) | **GET** /data/ad-campaign-report-per-organisation-per-account-per-day/{organisationUuids} | Return ad campaign report per organisation per account per day
*AdvertisingDataApi* | [**getAdCampaigns**](docs/Api/AdvertisingDataApi.md#getadcampaigns) | **GET** /data/ad-campaigns/{organisationUuid} | Return ad campaigns by organisation
*AnalyticsDataApi* | [**getViews**](docs/Api/AnalyticsDataApi.md#getviews) | **GET** /data/views/{organisationUuid} | Return views by organisation
*AnalyticsDataDefaultMetricsApi* | [**getAnalyticsReportPerCampaignPerDay**](docs/Api/AnalyticsDataDefaultMetricsApi.md#getanalyticsreportpercampaignperday) | **GET** /data/analytics-report-per-campaign-per-day/{organisationUuid} | Return analytics report per campaign per day by organisation
*AnalyticsDataDefaultMetricsApi* | [**getAnalyticsReportPerChannelGroupPerDay**](docs/Api/AnalyticsDataDefaultMetricsApi.md#getanalyticsreportperchannelgroupperday) | **GET** /data/analytics-report-per-channel-group-per-day/{organisationUuid} | Return analytics report per channel group per day by organisation
*AnalyticsDataDefaultMetricsApi* | [**getAnalyticsReportPerDevicePerChannelGroupPerOrganisationPerViewPerDay**](docs/Api/AnalyticsDataDefaultMetricsApi.md#getanalyticsreportperdeviceperchannelgroupperorganisationperviewperday) | **GET** /data/analytics-report-per-device-per-channel-group-per-organisation-per-view-per-day/{organisationUuids} | Return analytics report per device per channel group per organisation per view per day
*AnalyticsDataDefaultMetricsApi* | [**getAnalyticsReportPerDevicePerDay**](docs/Api/AnalyticsDataDefaultMetricsApi.md#getanalyticsreportperdeviceperday) | **GET** /data/analytics-report-per-device-per-day/{organisationUuid} | Return analytics report per device per day by organisation
*AnalyticsDataDefaultMetricsApi* | [**getAnalyticsReportPerSourceMediumPerDay**](docs/Api/AnalyticsDataDefaultMetricsApi.md#getanalyticsreportpersourcemediumperday) | **GET** /data/analytics-report-per-source-medium-per-day/{organisationUuid} | Return analytics report per source medium per day by organisation
*AnalyticsDataGoalsApi* | [**getAnalyticsGoalReportPerCampaignPerDay**](docs/Api/AnalyticsDataGoalsApi.md#getanalyticsgoalreportpercampaignperday) | **GET** /data/analytics-goal-report-per-campaign-per-day/{organisationUuid} | Return analytics goal report per campaign per day by organisation
*AnalyticsDataGoalsApi* | [**getAnalyticsGoalReportPerChannelGroupPerDay**](docs/Api/AnalyticsDataGoalsApi.md#getanalyticsgoalreportperchannelgroupperday) | **GET** /data/analytics-goal-report-per-channel-group-per-day/{organisationUuid} | Return analytics goal report per channel group per day by organisation
*AnalyticsDataGoalsApi* | [**getAnalyticsGoalReportPerDevicePerChannelGroupPerOrganisationPerViewPerDay**](docs/Api/AnalyticsDataGoalsApi.md#getanalyticsgoalreportperdeviceperchannelgroupperorganisationperviewperday) | **GET** /data/analytics-goal-report-per-device-per-channel-group-per-organisation-per-view-per-day/{organisationUuids} | Return analytics goal report per device per channel group per organisation per view per day
*AnalyticsDataGoalsApi* | [**getAnalyticsGoalReportPerDevicePerDay**](docs/Api/AnalyticsDataGoalsApi.md#getanalyticsgoalreportperdeviceperday) | **GET** /data/analytics-goal-report-per-device-per-day/{organisationUuid} | Return analytics goal report per device per day by organisation
*AnalyticsDataGoalsApi* | [**getAnalyticsGoalReportPerSourceMediumPerDay**](docs/Api/AnalyticsDataGoalsApi.md#getanalyticsgoalreportpersourcemediumperday) | **GET** /data/analytics-goal-report-per-source-medium-per-day/{organisationUuid} | Return analytics goal report per source medium per day by organisation
*GenericDataApi* | [**getCampaignGroups**](docs/Api/GenericDataApi.md#getcampaigngroups) | **GET** /data/campaign-groups | Return campaign groups
*GenericDataApi* | [**getOrganisations**](docs/Api/GenericDataApi.md#getorganisations) | **GET** /data/organisations | Return organisations


## Documentation For Models



## Documentation For Authorization



## bearerAuth


- **Type**: Bearer authentication


## Author

support@cervinodata.com
