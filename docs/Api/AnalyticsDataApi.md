# OpenAPI\Client\AnalyticsDataApi

All URIs are relative to https://app.cervinodata.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getGA4ReportPerChannelGroupPerOrganisationPerProperty()**](AnalyticsDataApi.md#getGA4ReportPerChannelGroupPerOrganisationPerProperty) | **GET** /data/ga4-report-per-channel-group-per-organisation-per-property/{organisationUuids} | Return GA4 report per channel group per organisation per property |
| [**getGA4ReportPerChannelGroupPerOrganisationPerPropertyPerMonth()**](AnalyticsDataApi.md#getGA4ReportPerChannelGroupPerOrganisationPerPropertyPerMonth) | **GET** /data/ga4-report-per-channel-group-per-organisation-per-property-per-month/{organisationUuids} | Return GA4 report per channel group per organisation per property per month |
| [**getGA4ReportPerChannelGroupPerProductNamePerOrganisationPerPropertyPerMonth()**](AnalyticsDataApi.md#getGA4ReportPerChannelGroupPerProductNamePerOrganisationPerPropertyPerMonth) | **GET** /data/ga4-report-per-channel-group-per-product-name-per-organisation-per-property-per-month/{organisationUuids} | Return GA4 report per channel group per product name per organisation per property per month |
| [**getGA4ReportPerChannelGroupPerSourceMediumPerOrganisationPerPropertyPerMonth()**](AnalyticsDataApi.md#getGA4ReportPerChannelGroupPerSourceMediumPerOrganisationPerPropertyPerMonth) | **GET** /data/ga4-report-per-channel-group-per-source-medium-per-organisation-per-property-per-month/{organisationUuids} | Return GA4 report per channel group per source medium per organisation per property per month |
| [**getViews()**](AnalyticsDataApi.md#getViews) | **GET** /data/views/{organisationUuid} | Return views by organisation |


## `getGA4ReportPerChannelGroupPerOrganisationPerProperty()`

```php
getGA4ReportPerChannelGroupPerOrganisationPerProperty($organisation_uuids): string
```

Return GA4 report per channel group per organisation per property

GA4 report per channel group per organisation per property

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AnalyticsDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation_uuids = array('organisation_uuids_example'); // string[] | Organisation uuids

try {
    $result = $apiInstance->getGA4ReportPerChannelGroupPerOrganisationPerProperty($organisation_uuids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsDataApi->getGA4ReportPerChannelGroupPerOrganisationPerProperty: ', $e->getMessage(), PHP_EOL;
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

## `getGA4ReportPerChannelGroupPerOrganisationPerPropertyPerMonth()`

```php
getGA4ReportPerChannelGroupPerOrganisationPerPropertyPerMonth($organisation_uuids): string
```

Return GA4 report per channel group per organisation per property per month

GA4 report per channel group per organisation per property per month

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AnalyticsDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation_uuids = array('organisation_uuids_example'); // string[] | Organisation uuids

try {
    $result = $apiInstance->getGA4ReportPerChannelGroupPerOrganisationPerPropertyPerMonth($organisation_uuids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsDataApi->getGA4ReportPerChannelGroupPerOrganisationPerPropertyPerMonth: ', $e->getMessage(), PHP_EOL;
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

## `getGA4ReportPerChannelGroupPerProductNamePerOrganisationPerPropertyPerMonth()`

```php
getGA4ReportPerChannelGroupPerProductNamePerOrganisationPerPropertyPerMonth($organisation_uuids): string
```

Return GA4 report per channel group per product name per organisation per property per month

GA4 report per channel group per product name per organisation per property per month

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AnalyticsDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation_uuids = array('organisation_uuids_example'); // string[] | Organisation uuids

try {
    $result = $apiInstance->getGA4ReportPerChannelGroupPerProductNamePerOrganisationPerPropertyPerMonth($organisation_uuids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsDataApi->getGA4ReportPerChannelGroupPerProductNamePerOrganisationPerPropertyPerMonth: ', $e->getMessage(), PHP_EOL;
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

## `getGA4ReportPerChannelGroupPerSourceMediumPerOrganisationPerPropertyPerMonth()`

```php
getGA4ReportPerChannelGroupPerSourceMediumPerOrganisationPerPropertyPerMonth($organisation_uuids): string
```

Return GA4 report per channel group per source medium per organisation per property per month

GA4 report per channel group per source medium per organisation per property per month

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AnalyticsDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation_uuids = array('organisation_uuids_example'); // string[] | Organisation uuids

try {
    $result = $apiInstance->getGA4ReportPerChannelGroupPerSourceMediumPerOrganisationPerPropertyPerMonth($organisation_uuids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsDataApi->getGA4ReportPerChannelGroupPerSourceMediumPerOrganisationPerPropertyPerMonth: ', $e->getMessage(), PHP_EOL;
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

## `getViews()`

```php
getViews($organisation_uuid, $format): string
```

Return views by organisation

Views by organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AnalyticsDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation_uuid = 'organisation_uuid_example'; // string | Organisation uuid
$format = 'format_example'; // string | Output format

try {
    $result = $apiInstance->getViews($organisation_uuid, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsDataApi->getViews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation_uuid** | **string**| Organisation uuid | |
| **format** | **string**| Output format | [optional] |

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/csv`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
