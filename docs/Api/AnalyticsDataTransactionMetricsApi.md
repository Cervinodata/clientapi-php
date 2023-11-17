# OpenAPI\Client\AnalyticsDataTransactionMetricsApi

All URIs are relative to https://app.cervinodata.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getGA4ReportPerCampaignPerOrganisationPerProperty()**](AnalyticsDataTransactionMetricsApi.md#getGA4ReportPerCampaignPerOrganisationPerProperty) | **GET** /data/ga4-report-per-campaign-per-organisation-per-property/{organisationUuids} | Return GA4 report per campaign per organisation per property |
| [**getGA4ReportPerCampaignPerOrganisationPerPropertyPerMonth()**](AnalyticsDataTransactionMetricsApi.md#getGA4ReportPerCampaignPerOrganisationPerPropertyPerMonth) | **GET** /data/ga4-report-per-campaign-per-organisation-per-property-per-month/{organisationUuids} | Return GA4 report per campaign per organisation per property per month |


## `getGA4ReportPerCampaignPerOrganisationPerProperty()`

```php
getGA4ReportPerCampaignPerOrganisationPerProperty($organisation_uuids): string
```

Return GA4 report per campaign per organisation per property

GA4 report per campaign per organisation per property

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AnalyticsDataTransactionMetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation_uuids = array('organisation_uuids_example'); // string[] | Organisation uuids

try {
    $result = $apiInstance->getGA4ReportPerCampaignPerOrganisationPerProperty($organisation_uuids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsDataTransactionMetricsApi->getGA4ReportPerCampaignPerOrganisationPerProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation_uuids** | [**string[]**](../Model/string.md)| Organisation uuids | |

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGA4ReportPerCampaignPerOrganisationPerPropertyPerMonth()`

```php
getGA4ReportPerCampaignPerOrganisationPerPropertyPerMonth($organisation_uuids): string
```

Return GA4 report per campaign per organisation per property per month

GA4 report per campaign per organisation per property per month

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AnalyticsDataTransactionMetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation_uuids = array('organisation_uuids_example'); // string[] | Organisation uuids

try {
    $result = $apiInstance->getGA4ReportPerCampaignPerOrganisationPerPropertyPerMonth($organisation_uuids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsDataTransactionMetricsApi->getGA4ReportPerCampaignPerOrganisationPerPropertyPerMonth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation_uuids** | [**string[]**](../Model/string.md)| Organisation uuids | |

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
