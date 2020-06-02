# OpenAPI\Client\CampaignGroupApi

All URIs are relative to *https://app.cervinodata.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCampaignGroupAdReportPerOrganisationPerCampaignPerDay**](CampaignGroupApi.md#getCampaignGroupAdReportPerOrganisationPerCampaignPerDay) | **GET** /data/campaign-group-ad-report-per-organisation-per-campaign-per-day/{organisationUuids} | Return campaign group ad report per organisation per campaign per day
[**getCampaignGroupAdReportPerOrganisationPerDay**](CampaignGroupApi.md#getCampaignGroupAdReportPerOrganisationPerDay) | **GET** /data/campaign-group-ad-report-per-organisation-per-day/{organisationUuids} | Return campaign group ad report per organisation per day
[**getCampaignGroupAnalyticsReportPerOrganisationPerDay**](CampaignGroupApi.md#getCampaignGroupAnalyticsReportPerOrganisationPerDay) | **GET** /data/campaign-group-analytics-report-per-organisation-per-day/{organisationUuids} | Return campaign group analytics report per organisation per day
[**getCampaignGroupFacebookAdReportPerOrganisationPerCampaignPerDay**](CampaignGroupApi.md#getCampaignGroupFacebookAdReportPerOrganisationPerCampaignPerDay) | **GET** /data/campaign-group-facebook-ad-report-per-organisation-per-campaign-per-day/{organisationUuids} | Return campaign group facebook ad report per organisation per campaign per day
[**getCampaignGroupReportPerOrganisationPerDay**](CampaignGroupApi.md#getCampaignGroupReportPerOrganisationPerDay) | **GET** /data/campaign-group-report-per-organisation-per-day/{organisationUuids} | Return campaign group report per organisation per day
[**getCampaignGroupVideoReportPerOrganisationPerCampaignPerDay**](CampaignGroupApi.md#getCampaignGroupVideoReportPerOrganisationPerCampaignPerDay) | **GET** /data/campaign-group-video-report-per-organisation-per-campaign-per-day/{organisationUuids} | Return campaign group video report per organisation per campaign per day
[**getCampaignGroupVideoReportPerOrganisationPerDay**](CampaignGroupApi.md#getCampaignGroupVideoReportPerOrganisationPerDay) | **GET** /data/campaign-group-video-report-per-organisation-per-day/{organisationUuids} | Return campaign group video report per organisation per day



## getCampaignGroupAdReportPerOrganisationPerCampaignPerDay

> string getCampaignGroupAdReportPerOrganisationPerCampaignPerDay($organisation_uuids, $from_date, $date_format, $format)

Return campaign group ad report per organisation per campaign per day

Campaign group ad report per organisation per campaign per day

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CampaignGroupApi(
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
    $result = $apiInstance->getCampaignGroupAdReportPerOrganisationPerCampaignPerDay($organisation_uuids, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignGroupApi->getCampaignGroupAdReportPerOrganisationPerCampaignPerDay: ', $e->getMessage(), PHP_EOL;
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


## getCampaignGroupAdReportPerOrganisationPerDay

> string getCampaignGroupAdReportPerOrganisationPerDay($organisation_uuids, $from_date, $date_format, $format)

Return campaign group ad report per organisation per day

Campaign group ad report per organisation per day

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CampaignGroupApi(
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
    $result = $apiInstance->getCampaignGroupAdReportPerOrganisationPerDay($organisation_uuids, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignGroupApi->getCampaignGroupAdReportPerOrganisationPerDay: ', $e->getMessage(), PHP_EOL;
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


## getCampaignGroupAnalyticsReportPerOrganisationPerDay

> string getCampaignGroupAnalyticsReportPerOrganisationPerDay($organisation_uuids, $from_date, $date_format, $format)

Return campaign group analytics report per organisation per day

Campaign group analytics report per organisation per day

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CampaignGroupApi(
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
    $result = $apiInstance->getCampaignGroupAnalyticsReportPerOrganisationPerDay($organisation_uuids, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignGroupApi->getCampaignGroupAnalyticsReportPerOrganisationPerDay: ', $e->getMessage(), PHP_EOL;
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


## getCampaignGroupFacebookAdReportPerOrganisationPerCampaignPerDay

> string getCampaignGroupFacebookAdReportPerOrganisationPerCampaignPerDay($organisation_uuids, $from_date, $date_format, $format)

Return campaign group facebook ad report per organisation per campaign per day

Campaign group facebook ad report per organisation  per campaign per day

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CampaignGroupApi(
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
    $result = $apiInstance->getCampaignGroupFacebookAdReportPerOrganisationPerCampaignPerDay($organisation_uuids, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignGroupApi->getCampaignGroupFacebookAdReportPerOrganisationPerCampaignPerDay: ', $e->getMessage(), PHP_EOL;
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


## getCampaignGroupReportPerOrganisationPerDay

> string getCampaignGroupReportPerOrganisationPerDay($organisation_uuids, $from_date, $date_format, $format)

Return campaign group report per organisation per day

Campaign group report per organisation per day

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CampaignGroupApi(
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
    $result = $apiInstance->getCampaignGroupReportPerOrganisationPerDay($organisation_uuids, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignGroupApi->getCampaignGroupReportPerOrganisationPerDay: ', $e->getMessage(), PHP_EOL;
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


## getCampaignGroupVideoReportPerOrganisationPerCampaignPerDay

> string getCampaignGroupVideoReportPerOrganisationPerCampaignPerDay($organisation_uuids, $from_date, $date_format, $format)

Return campaign group video report per organisation per campaign per day

Campaign group video report per organisation per campaign per day

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CampaignGroupApi(
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
    $result = $apiInstance->getCampaignGroupVideoReportPerOrganisationPerCampaignPerDay($organisation_uuids, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignGroupApi->getCampaignGroupVideoReportPerOrganisationPerCampaignPerDay: ', $e->getMessage(), PHP_EOL;
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


## getCampaignGroupVideoReportPerOrganisationPerDay

> string getCampaignGroupVideoReportPerOrganisationPerDay($organisation_uuids, $from_date, $date_format, $format)

Return campaign group video report per organisation per day

Campaign group video report per organisation per day

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CampaignGroupApi(
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
    $result = $apiInstance->getCampaignGroupVideoReportPerOrganisationPerDay($organisation_uuids, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignGroupApi->getCampaignGroupVideoReportPerOrganisationPerDay: ', $e->getMessage(), PHP_EOL;
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

