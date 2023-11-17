# OpenAPI\Client\AnalyticsDataGoalsApi

All URIs are relative to https://app.cervinodata.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAnalyticsGoalReportPerCampaignPerDay()**](AnalyticsDataGoalsApi.md#getAnalyticsGoalReportPerCampaignPerDay) | **GET** /data/analytics-goal-report-per-campaign-per-day/{organisationUuid} | Return analytics goal report per campaign per day by organisation |
| [**getAnalyticsGoalReportPerChannelGroupPerDay()**](AnalyticsDataGoalsApi.md#getAnalyticsGoalReportPerChannelGroupPerDay) | **GET** /data/analytics-goal-report-per-channel-group-per-day/{organisationUuid} | Return analytics goal report per channel group per day by organisation |
| [**getAnalyticsGoalReportPerDevicePerDay()**](AnalyticsDataGoalsApi.md#getAnalyticsGoalReportPerDevicePerDay) | **GET** /data/analytics-goal-report-per-device-per-day/{organisationUuid} | Return analytics goal report per device per day by organisation |
| [**getAnalyticsGoalReportPerSourceMediumPerDay()**](AnalyticsDataGoalsApi.md#getAnalyticsGoalReportPerSourceMediumPerDay) | **GET** /data/analytics-goal-report-per-source-medium-per-day/{organisationUuid} | Return analytics goal report per source medium per day by organisation |


## `getAnalyticsGoalReportPerCampaignPerDay()`

```php
getAnalyticsGoalReportPerCampaignPerDay($organisation_uuid, $from_date, $date_format, $format): string
```

Return analytics goal report per campaign per day by organisation

Analytics goal report per campaign per day by organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AnalyticsDataGoalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation_uuid = 'organisation_uuid_example'; // string | Organisation uuid
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | From date
$date_format = 'date_format_example'; // string | Outputted date format
$format = 'format_example'; // string | Output format (use csv for large result sets)

try {
    $result = $apiInstance->getAnalyticsGoalReportPerCampaignPerDay($organisation_uuid, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsDataGoalsApi->getAnalyticsGoalReportPerCampaignPerDay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation_uuid** | **string**| Organisation uuid | |
| **from_date** | **\DateTime**| From date | [optional] |
| **date_format** | **string**| Outputted date format | [optional] |
| **format** | **string**| Output format (use csv for large result sets) | [optional] |

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

## `getAnalyticsGoalReportPerChannelGroupPerDay()`

```php
getAnalyticsGoalReportPerChannelGroupPerDay($organisation_uuid, $from_date, $date_format, $format): string
```

Return analytics goal report per channel group per day by organisation

Analytics goal report per channel group per day by organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AnalyticsDataGoalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation_uuid = 'organisation_uuid_example'; // string | Organisation uuid
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | From date
$date_format = 'date_format_example'; // string | Outputted date format
$format = 'format_example'; // string | Output format (use csv for large result sets)

try {
    $result = $apiInstance->getAnalyticsGoalReportPerChannelGroupPerDay($organisation_uuid, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsDataGoalsApi->getAnalyticsGoalReportPerChannelGroupPerDay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation_uuid** | **string**| Organisation uuid | |
| **from_date** | **\DateTime**| From date | [optional] |
| **date_format** | **string**| Outputted date format | [optional] |
| **format** | **string**| Output format (use csv for large result sets) | [optional] |

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

## `getAnalyticsGoalReportPerDevicePerDay()`

```php
getAnalyticsGoalReportPerDevicePerDay($organisation_uuid, $from_date, $date_format, $format): string
```

Return analytics goal report per device per day by organisation

Analytics goal report per device per day by organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AnalyticsDataGoalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation_uuid = 'organisation_uuid_example'; // string | Organisation uuid
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | From date
$date_format = 'date_format_example'; // string | Outputted date format
$format = 'format_example'; // string | Output format (use csv for large result sets)

try {
    $result = $apiInstance->getAnalyticsGoalReportPerDevicePerDay($organisation_uuid, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsDataGoalsApi->getAnalyticsGoalReportPerDevicePerDay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation_uuid** | **string**| Organisation uuid | |
| **from_date** | **\DateTime**| From date | [optional] |
| **date_format** | **string**| Outputted date format | [optional] |
| **format** | **string**| Output format (use csv for large result sets) | [optional] |

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

## `getAnalyticsGoalReportPerSourceMediumPerDay()`

```php
getAnalyticsGoalReportPerSourceMediumPerDay($organisation_uuid, $from_date, $date_format, $format): string
```

Return analytics goal report per source medium per day by organisation

Analytics goal report per source medium per day by organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AnalyticsDataGoalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation_uuid = 'organisation_uuid_example'; // string | Organisation uuid
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | From date
$date_format = 'date_format_example'; // string | Outputted date format
$format = 'format_example'; // string | Output format (use csv for large result sets)

try {
    $result = $apiInstance->getAnalyticsGoalReportPerSourceMediumPerDay($organisation_uuid, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsDataGoalsApi->getAnalyticsGoalReportPerSourceMediumPerDay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation_uuid** | **string**| Organisation uuid | |
| **from_date** | **\DateTime**| From date | [optional] |
| **date_format** | **string**| Outputted date format | [optional] |
| **format** | **string**| Output format (use csv for large result sets) | [optional] |

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
