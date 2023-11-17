# OpenAPI\Client\AnalyticsDataProductMetricsApi

All URIs are relative to https://app.cervinodata.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getGA4ReportPerProductNamePerOrganisationPerPropertyPerWeek()**](AnalyticsDataProductMetricsApi.md#getGA4ReportPerProductNamePerOrganisationPerPropertyPerWeek) | **GET** /data/ga4-report-per-product-name-per-organisation-per-property-per-week/{organisationUuids} | Return GA4 report per product name per organisation per property per week |
| [**getGA4ReportPerProductSkuPerOrganisationPerPropertyPerWeek()**](AnalyticsDataProductMetricsApi.md#getGA4ReportPerProductSkuPerOrganisationPerPropertyPerWeek) | **GET** /data/ga4-report-per-product-sku-per-organisation-per-property-per-week/{organisationUuids} | Return GA4 report per product sku per organisation per property per week |


## `getGA4ReportPerProductNamePerOrganisationPerPropertyPerWeek()`

```php
getGA4ReportPerProductNamePerOrganisationPerPropertyPerWeek($organisation_uuids): string
```

Return GA4 report per product name per organisation per property per week

GA4 report per product name per organisation per property per week

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AnalyticsDataProductMetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation_uuids = array('organisation_uuids_example'); // string[] | Organisation uuids

try {
    $result = $apiInstance->getGA4ReportPerProductNamePerOrganisationPerPropertyPerWeek($organisation_uuids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsDataProductMetricsApi->getGA4ReportPerProductNamePerOrganisationPerPropertyPerWeek: ', $e->getMessage(), PHP_EOL;
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

## `getGA4ReportPerProductSkuPerOrganisationPerPropertyPerWeek()`

```php
getGA4ReportPerProductSkuPerOrganisationPerPropertyPerWeek($organisation_uuids): string
```

Return GA4 report per product sku per organisation per property per week

GA4 report per product sku per organisation per property per week

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AnalyticsDataProductMetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation_uuids = array('organisation_uuids_example'); // string[] | Organisation uuids

try {
    $result = $apiInstance->getGA4ReportPerProductSkuPerOrganisationPerPropertyPerWeek($organisation_uuids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsDataProductMetricsApi->getGA4ReportPerProductSkuPerOrganisationPerPropertyPerWeek: ', $e->getMessage(), PHP_EOL;
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
