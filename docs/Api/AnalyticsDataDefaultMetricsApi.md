# OpenAPI\Client\AnalyticsDataDefaultMetricsApi

All URIs are relative to *https://app.cervinodata.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAnalyticsReportPerCampaignPerDay**](AnalyticsDataDefaultMetricsApi.md#getAnalyticsReportPerCampaignPerDay) | **GET** /data/analytics-report-per-campaign-per-day/{organisationUuid} | Return analytics report per campaign per day by organisation
[**getAnalyticsReportPerChannelGroupPerDay**](AnalyticsDataDefaultMetricsApi.md#getAnalyticsReportPerChannelGroupPerDay) | **GET** /data/analytics-report-per-channel-group-per-day/{organisationUuid} | Return analytics report per channel group per day by organisation
[**getAnalyticsReportPerDevicePerChannelGroupPerOrganisationPerViewPerDay**](AnalyticsDataDefaultMetricsApi.md#getAnalyticsReportPerDevicePerChannelGroupPerOrganisationPerViewPerDay) | **GET** /data/analytics-report-per-device-per-channel-group-per-organisation-per-view-per-day/{organisationUuids} | Return analytics report per device per channel group per organisation per view per day
[**getAnalyticsReportPerDevicePerDay**](AnalyticsDataDefaultMetricsApi.md#getAnalyticsReportPerDevicePerDay) | **GET** /data/analytics-report-per-device-per-day/{organisationUuid} | Return analytics report per device per day by organisation
[**getAnalyticsReportPerSourceMediumPerDay**](AnalyticsDataDefaultMetricsApi.md#getAnalyticsReportPerSourceMediumPerDay) | **GET** /data/analytics-report-per-source-medium-per-day/{organisationUuid} | Return analytics report per source medium per day by organisation



## getAnalyticsReportPerCampaignPerDay

> string getAnalyticsReportPerCampaignPerDay($organisation_uuid, $from_date, $date_format, $format)

Return analytics report per campaign per day by organisation

Analytics report per campaign per day by organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AnalyticsDataDefaultMetricsApi(
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
    $result = $apiInstance->getAnalyticsReportPerCampaignPerDay($organisation_uuid, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsDataDefaultMetricsApi->getAnalyticsReportPerCampaignPerDay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organisation_uuid** | **string**| Organisation uuid |
 **from_date** | **\DateTime**| From date | [optional]
 **date_format** | **string**| Outputted date format | [optional]
 **format** | **string**| Output format (use csv for large result sets) | [optional]

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/csv, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAnalyticsReportPerChannelGroupPerDay

> string getAnalyticsReportPerChannelGroupPerDay($organisation_uuid, $from_date, $date_format, $format)

Return analytics report per channel group per day by organisation

Analytics report per channel group per day by organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AnalyticsDataDefaultMetricsApi(
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
    $result = $apiInstance->getAnalyticsReportPerChannelGroupPerDay($organisation_uuid, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsDataDefaultMetricsApi->getAnalyticsReportPerChannelGroupPerDay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organisation_uuid** | **string**| Organisation uuid |
 **from_date** | **\DateTime**| From date | [optional]
 **date_format** | **string**| Outputted date format | [optional]
 **format** | **string**| Output format (use csv for large result sets) | [optional]

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/csv, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAnalyticsReportPerDevicePerChannelGroupPerOrganisationPerViewPerDay

> string getAnalyticsReportPerDevicePerChannelGroupPerOrganisationPerViewPerDay($organisation_uuids, $from_date, $date_format, $format)

Return analytics report per device per channel group per organisation per view per day

Analytics report per device per channel group per organisation per view per day

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AnalyticsDataDefaultMetricsApi(
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
    $result = $apiInstance->getAnalyticsReportPerDevicePerChannelGroupPerOrganisationPerViewPerDay($organisation_uuids, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsDataDefaultMetricsApi->getAnalyticsReportPerDevicePerChannelGroupPerOrganisationPerViewPerDay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organisation_uuids** | [**string[]**](../Model/string.md)| Organisation uuids |
 **from_date** | **\DateTime**| From date | [optional]
 **date_format** | **string**| Outputted date format | [optional]
 **format** | **string**| Output format (use csv for large result sets) | [optional]

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/csv, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAnalyticsReportPerDevicePerDay

> string getAnalyticsReportPerDevicePerDay($organisation_uuid, $from_date, $date_format, $format)

Return analytics report per device per day by organisation

Analytics report per device per day by organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AnalyticsDataDefaultMetricsApi(
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
    $result = $apiInstance->getAnalyticsReportPerDevicePerDay($organisation_uuid, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsDataDefaultMetricsApi->getAnalyticsReportPerDevicePerDay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organisation_uuid** | **string**| Organisation uuid |
 **from_date** | **\DateTime**| From date | [optional]
 **date_format** | **string**| Outputted date format | [optional]
 **format** | **string**| Output format (use csv for large result sets) | [optional]

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/csv, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAnalyticsReportPerSourceMediumPerDay

> string getAnalyticsReportPerSourceMediumPerDay($organisation_uuid, $from_date, $date_format, $format)

Return analytics report per source medium per day by organisation

Analytics report per source medium per day by organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AnalyticsDataDefaultMetricsApi(
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
    $result = $apiInstance->getAnalyticsReportPerSourceMediumPerDay($organisation_uuid, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsDataDefaultMetricsApi->getAnalyticsReportPerSourceMediumPerDay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organisation_uuid** | **string**| Organisation uuid |
 **from_date** | **\DateTime**| From date | [optional]
 **date_format** | **string**| Outputted date format | [optional]
 **format** | **string**| Output format (use csv for large result sets) | [optional]

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/csv, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

