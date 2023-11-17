# OpenAPI\Client\AdvertisingDataApi

All URIs are relative to https://app.cervinodata.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAdAccountReportPerOrganisationPerDay()**](AdvertisingDataApi.md#getAdAccountReportPerOrganisationPerDay) | **GET** /data/ad-account-report-per-organisation-per-day/{organisationUuids} | Return ad account report per organisation per day |
| [**getAdAccounts()**](AdvertisingDataApi.md#getAdAccounts) | **GET** /data/ad-accounts/{organisationUuid} | Return ad accounts by organisation |
| [**getAdCampaignReportPerDay()**](AdvertisingDataApi.md#getAdCampaignReportPerDay) | **GET** /data/ad-campaign-report-per-day/{organisationUuid} | Return ad campaign report per day by organisation |
| [**getAdCampaignReportPerOrganisationPerAccountPerCampaignPerDevicePerDay()**](AdvertisingDataApi.md#getAdCampaignReportPerOrganisationPerAccountPerCampaignPerDevicePerDay) | **GET** /data/ad-campaign-report-per-organisation-per-account-per-campaign-per-device-per-day/{organisationUuids} | Return ad campaign report per organisation per account per campaign per device per day |
| [**getAdCampaignReportPerOrganisationPerAccountPerDay()**](AdvertisingDataApi.md#getAdCampaignReportPerOrganisationPerAccountPerDay) | **GET** /data/ad-campaign-report-per-organisation-per-account-per-day/{organisationUuids} | Return ad campaign report per organisation per account per day |
| [**getAdCampaigns()**](AdvertisingDataApi.md#getAdCampaigns) | **GET** /data/ad-campaigns/{organisationUuid} | Return ad campaigns by organisation |
| [**getAdGroups()**](AdvertisingDataApi.md#getAdGroups) | **GET** /data/ad-groups/{organisationUuid} | Return ad groups by organisation |
| [**getAdformExtendedReportPerOrganisationPerAccountPerCampaignPerCreativePerDay()**](AdvertisingDataApi.md#getAdformExtendedReportPerOrganisationPerAccountPerCampaignPerCreativePerDay) | **GET** /data/adform-extended-report-per-organisation-per-account-per-campaign-per-creative-per-day/{organisationUuids} | Return adform extended report per organisation per account per campaign per creative per day |
| [**getAdformExtendedReportPerOrganisationPerAccountPerCampaignPerDay()**](AdvertisingDataApi.md#getAdformExtendedReportPerOrganisationPerAccountPerCampaignPerDay) | **GET** /data/adform-extended-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return adform extended report per organisation per account per campaign per day |
| [**getAdformExtendedReportPerOrganisationPerAccountPerCampaignPerLineItemPerDay()**](AdvertisingDataApi.md#getAdformExtendedReportPerOrganisationPerAccountPerCampaignPerLineItemPerDay) | **GET** /data/adform-extended-report-per-organisation-per-account-per-campaign-per-line-item-per-day/{organisationUuids} | Return adform extended report per organisation per account per campaign per line item per day |
| [**getBingAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay()**](AdvertisingDataApi.md#getBingAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay) | **GET** /data/bing-ads-extended-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return bing ads extended report per organisation per account per campaign per day |
| [**getFacebookAdCustomConversionReportPerOrganisationPerAccountPerCampaignPerDay()**](AdvertisingDataApi.md#getFacebookAdCustomConversionReportPerOrganisationPerAccountPerCampaignPerDay) | **GET** /data/facebook-ad-custom-conversion-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return facebook ad custom conversion report per organisation per account per campaign per day |
| [**getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerAdGroupPerDay()**](AdvertisingDataApi.md#getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerAdGroupPerDay) | **GET** /data/facebook-ad-extended-report-per-organisation-per-account-per-campaign-per-ad-group-per-day/{organisationUuids} | Return facebook ad extended report per organisation per account per campaign per ad group per day |
| [**getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerAdGroupPerDayPlus()**](AdvertisingDataApi.md#getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerAdGroupPerDayPlus) | **GET** /data/facebook-ad-extended-report-per-organisation-per-account-per-campaign-per-ad-group-per-day-plus/{organisationUuids} | Return facebook ad extended report per organisation per account per campaign per ad group per day plus |
| [**getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerAdPerDay()**](AdvertisingDataApi.md#getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerAdPerDay) | **GET** /data/facebook-ad-extended-report-per-organisation-per-account-per-campaign-per-ad-per-day/{organisationUuids} | Return facebook ad extended report per organisation per account per campaign per ad per day |
| [**getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerDay()**](AdvertisingDataApi.md#getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerDay) | **GET** /data/facebook-ad-extended-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return facebook ad extended report per organisation per account per campaign per day |
| [**getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerDayPlus()**](AdvertisingDataApi.md#getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerDayPlus) | **GET** /data/facebook-ad-extended-report-per-organisation-per-account-per-campaign-per-day-plus/{organisationUuids} | Return facebook ad extended report per organisation per account per campaign per day plus |
| [**getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerDevicePerDay()**](AdvertisingDataApi.md#getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerDevicePerDay) | **GET** /data/facebook-ad-extended-report-per-organisation-per-account-per-campaign-per-device-per-day/{organisationUuids} | Return facebook ad extended report per organisation per account per campaign per device per day |
| [**getGoogleAdsReportPerOrganisationPerAccountPerCampaignPerDevicePerDay()**](AdvertisingDataApi.md#getGoogleAdsReportPerOrganisationPerAccountPerCampaignPerDevicePerDay) | **GET** /data/google-ads-report-per-organisation-per-account-per-campaign-per-device-per-day/{organisationUuids} | Return google ads report per organisation per account per campaign per device per day |
| [**getHashedAdCampaignReportPerOrganisationPerAccountPerDay()**](AdvertisingDataApi.md#getHashedAdCampaignReportPerOrganisationPerAccountPerDay) | **GET** /data/hashed-ad-campaign-report-per-organisation-per-account-per-day/{organisationUuids} | Return hashed ad campaign report per organisation per account per day |
| [**getLinkedInAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay()**](AdvertisingDataApi.md#getLinkedInAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay) | **GET** /data/linkedin-ads-extended-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return linkedin ads extended report per organisation per account per campaign per day |
| [**getPinterestAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay()**](AdvertisingDataApi.md#getPinterestAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay) | **GET** /data/pinterest-ads-extended-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return pinterest ads extended report per organisation per account per campaign per day |
| [**getSnapchatAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay()**](AdvertisingDataApi.md#getSnapchatAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay) | **GET** /data/snapchat-ads-extended-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return snapchat ads extended report per organisation per account per campaign per day |
| [**getTikTokAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay()**](AdvertisingDataApi.md#getTikTokAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay) | **GET** /data/tiktok-ads-extended-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return tiktok ads extended report per organisation per account per campaign per day |
| [**getTwitterAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay()**](AdvertisingDataApi.md#getTwitterAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay) | **GET** /data/twitter-ads-extended-report-per-organisation-per-account-per-campaign-per-day/{organisationUuids} | Return twitter ads extended report per organisation per account per campaign per day |


## `getAdAccountReportPerOrganisationPerDay()`

```php
getAdAccountReportPerOrganisationPerDay($organisation_uuids, $from_date, $date_format, $format): string
```

Return ad account report per organisation per day

Ad account report per organisation per day

### Example

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

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation_uuids** | [**string[]**](../Model/string.md)| Organisation uuids | |
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

## `getAdAccounts()`

```php
getAdAccounts($organisation_uuid, $format): string
```

Return ad accounts by organisation

Ad accounts by organisation

### Example

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

## `getAdCampaignReportPerDay()`

```php
getAdCampaignReportPerDay($organisation_uuid, $from_date, $date_format, $format): string
```

Return ad campaign report per day by organisation

Ad campaign report per day by organisation

### Example

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
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | From date
$date_format = 'date_format_example'; // string | Outputted date format
$format = 'format_example'; // string | Output format (use csv for large result sets)

try {
    $result = $apiInstance->getAdCampaignReportPerDay($organisation_uuid, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisingDataApi->getAdCampaignReportPerDay: ', $e->getMessage(), PHP_EOL;
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

## `getAdCampaignReportPerOrganisationPerAccountPerCampaignPerDevicePerDay()`

```php
getAdCampaignReportPerOrganisationPerAccountPerCampaignPerDevicePerDay($organisation_uuids, $from_date, $date_format, $format): string
```

Return ad campaign report per organisation per account per campaign per device per day

Ad campaign report per organisation per account per campaign per device per day

### Example

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
    $result = $apiInstance->getAdCampaignReportPerOrganisationPerAccountPerCampaignPerDevicePerDay($organisation_uuids, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisingDataApi->getAdCampaignReportPerOrganisationPerAccountPerCampaignPerDevicePerDay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation_uuids** | [**string[]**](../Model/string.md)| Organisation uuids | |
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

## `getAdCampaignReportPerOrganisationPerAccountPerDay()`

```php
getAdCampaignReportPerOrganisationPerAccountPerDay($organisation_uuids, $from_date, $date_format, $format): string
```

Return ad campaign report per organisation per account per day

Ad campaign report per organisation per account per day

### Example

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
    $result = $apiInstance->getAdCampaignReportPerOrganisationPerAccountPerDay($organisation_uuids, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisingDataApi->getAdCampaignReportPerOrganisationPerAccountPerDay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation_uuids** | [**string[]**](../Model/string.md)| Organisation uuids | |
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

## `getAdCampaigns()`

```php
getAdCampaigns($organisation_uuid, $from_date, $format): string
```

Return ad campaigns by organisation

Ad campaigns by organisation

### Example

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
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | From date
$format = 'format_example'; // string | Output format

try {
    $result = $apiInstance->getAdCampaigns($organisation_uuid, $from_date, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisingDataApi->getAdCampaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation_uuid** | **string**| Organisation uuid | |
| **from_date** | **\DateTime**| From date | [optional] |
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

## `getAdGroups()`

```php
getAdGroups($organisation_uuid, $from_date, $format): string
```

Return ad groups by organisation

Ad groups by organisation

### Example

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
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | From date
$format = 'format_example'; // string | Output format

try {
    $result = $apiInstance->getAdGroups($organisation_uuid, $from_date, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisingDataApi->getAdGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation_uuid** | **string**| Organisation uuid | |
| **from_date** | **\DateTime**| From date | [optional] |
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

## `getAdformExtendedReportPerOrganisationPerAccountPerCampaignPerCreativePerDay()`

```php
getAdformExtendedReportPerOrganisationPerAccountPerCampaignPerCreativePerDay($organisation_uuids, $from_date, $date_format, $format): string
```

Return adform extended report per organisation per account per campaign per creative per day

Adform extended report per organisation per account per campaign per creative per day

### Example

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
    $result = $apiInstance->getAdformExtendedReportPerOrganisationPerAccountPerCampaignPerCreativePerDay($organisation_uuids, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisingDataApi->getAdformExtendedReportPerOrganisationPerAccountPerCampaignPerCreativePerDay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation_uuids** | [**string[]**](../Model/string.md)| Organisation uuids | |
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

## `getAdformExtendedReportPerOrganisationPerAccountPerCampaignPerDay()`

```php
getAdformExtendedReportPerOrganisationPerAccountPerCampaignPerDay($organisation_uuids, $from_date, $date_format, $format): string
```

Return adform extended report per organisation per account per campaign per day

Adform extended report per organisation per account per campaign per day

### Example

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
    $result = $apiInstance->getAdformExtendedReportPerOrganisationPerAccountPerCampaignPerDay($organisation_uuids, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisingDataApi->getAdformExtendedReportPerOrganisationPerAccountPerCampaignPerDay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation_uuids** | [**string[]**](../Model/string.md)| Organisation uuids | |
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

## `getAdformExtendedReportPerOrganisationPerAccountPerCampaignPerLineItemPerDay()`

```php
getAdformExtendedReportPerOrganisationPerAccountPerCampaignPerLineItemPerDay($organisation_uuids, $from_date, $date_format, $format): string
```

Return adform extended report per organisation per account per campaign per line item per day

Adform extended report per organisation per account per campaign per line item per day

### Example

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
    $result = $apiInstance->getAdformExtendedReportPerOrganisationPerAccountPerCampaignPerLineItemPerDay($organisation_uuids, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisingDataApi->getAdformExtendedReportPerOrganisationPerAccountPerCampaignPerLineItemPerDay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation_uuids** | [**string[]**](../Model/string.md)| Organisation uuids | |
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

## `getBingAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay()`

```php
getBingAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay($organisation_uuids, $from_date, $date_format, $format): string
```

Return bing ads extended report per organisation per account per campaign per day

Bing ads extended report per organisation per account per campaign per day

### Example

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
    $result = $apiInstance->getBingAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay($organisation_uuids, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisingDataApi->getBingAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation_uuids** | [**string[]**](../Model/string.md)| Organisation uuids | |
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

## `getFacebookAdCustomConversionReportPerOrganisationPerAccountPerCampaignPerDay()`

```php
getFacebookAdCustomConversionReportPerOrganisationPerAccountPerCampaignPerDay($organisation_uuids, $from_date, $date_format, $format): string
```

Return facebook ad custom conversion report per organisation per account per campaign per day

Facebook ad custom conversion report per organisation per account per campaign per day

### Example

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
    $result = $apiInstance->getFacebookAdCustomConversionReportPerOrganisationPerAccountPerCampaignPerDay($organisation_uuids, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisingDataApi->getFacebookAdCustomConversionReportPerOrganisationPerAccountPerCampaignPerDay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation_uuids** | [**string[]**](../Model/string.md)| Organisation uuids | |
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

## `getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerAdGroupPerDay()`

```php
getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerAdGroupPerDay($organisation_uuids, $from_date, $date_format, $format): string
```

Return facebook ad extended report per organisation per account per campaign per ad group per day

Facebook ad extended report per organisation per account per campaign per ad group per day

### Example

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
    $result = $apiInstance->getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerAdGroupPerDay($organisation_uuids, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisingDataApi->getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerAdGroupPerDay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation_uuids** | [**string[]**](../Model/string.md)| Organisation uuids | |
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

## `getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerAdGroupPerDayPlus()`

```php
getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerAdGroupPerDayPlus($organisation_uuids, $from_date, $date_format, $format): string
```

Return facebook ad extended report per organisation per account per campaign per ad group per day plus

Facebook ad extended report per organisation per account per campaign per ad group per day plus

### Example

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
    $result = $apiInstance->getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerAdGroupPerDayPlus($organisation_uuids, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisingDataApi->getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerAdGroupPerDayPlus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation_uuids** | [**string[]**](../Model/string.md)| Organisation uuids | |
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

## `getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerAdPerDay()`

```php
getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerAdPerDay($organisation_uuids, $from_date, $date_format, $format): string
```

Return facebook ad extended report per organisation per account per campaign per ad per day

Facebook ad extended report per organisation per account per campaign per ad per day

### Example

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
    $result = $apiInstance->getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerAdPerDay($organisation_uuids, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisingDataApi->getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerAdPerDay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation_uuids** | [**string[]**](../Model/string.md)| Organisation uuids | |
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

## `getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerDay()`

```php
getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerDay($organisation_uuids, $from_date, $date_format, $format): string
```

Return facebook ad extended report per organisation per account per campaign per day

Facebook ad extended report per organisation per account per campaign per day

### Example

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
    $result = $apiInstance->getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerDay($organisation_uuids, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisingDataApi->getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerDay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation_uuids** | [**string[]**](../Model/string.md)| Organisation uuids | |
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

## `getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerDayPlus()`

```php
getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerDayPlus($organisation_uuids, $from_date, $date_format, $format): string
```

Return facebook ad extended report per organisation per account per campaign per day plus

Facebook ad extended report per organisation per account per campaign per day plus

### Example

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
    $result = $apiInstance->getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerDayPlus($organisation_uuids, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisingDataApi->getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerDayPlus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation_uuids** | [**string[]**](../Model/string.md)| Organisation uuids | |
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

## `getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerDevicePerDay()`

```php
getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerDevicePerDay($organisation_uuids, $from_date, $date_format, $format): string
```

Return facebook ad extended report per organisation per account per campaign per device per day

Facebook ad extended report per organisation per account per campaign per device per day

### Example

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
    $result = $apiInstance->getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerDevicePerDay($organisation_uuids, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisingDataApi->getFacebookAdExtendedReportPerOrganisationPerAccountPerCampaignPerDevicePerDay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation_uuids** | [**string[]**](../Model/string.md)| Organisation uuids | |
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

## `getGoogleAdsReportPerOrganisationPerAccountPerCampaignPerDevicePerDay()`

```php
getGoogleAdsReportPerOrganisationPerAccountPerCampaignPerDevicePerDay($organisation_uuids, $from_date, $date_format, $format): string
```

Return google ads report per organisation per account per campaign per device per day

Campaign group google ads report per organisation per account per campaign per device per day

### Example

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
    $result = $apiInstance->getGoogleAdsReportPerOrganisationPerAccountPerCampaignPerDevicePerDay($organisation_uuids, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisingDataApi->getGoogleAdsReportPerOrganisationPerAccountPerCampaignPerDevicePerDay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation_uuids** | [**string[]**](../Model/string.md)| Organisation uuids | |
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

## `getHashedAdCampaignReportPerOrganisationPerAccountPerDay()`

```php
getHashedAdCampaignReportPerOrganisationPerAccountPerDay($organisation_uuids, $from_date, $date_format, $format): string
```

Return hashed ad campaign report per organisation per account per day

Hashed ad campaign report per organisation per account per day

### Example

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
    $result = $apiInstance->getHashedAdCampaignReportPerOrganisationPerAccountPerDay($organisation_uuids, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisingDataApi->getHashedAdCampaignReportPerOrganisationPerAccountPerDay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation_uuids** | [**string[]**](../Model/string.md)| Organisation uuids | |
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

## `getLinkedInAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay()`

```php
getLinkedInAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay($organisation_uuids, $from_date, $date_format, $format): string
```

Return linkedin ads extended report per organisation per account per campaign per day

Linkedin ads extended report per organisation per account per campaign per day

### Example

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
    $result = $apiInstance->getLinkedInAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay($organisation_uuids, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisingDataApi->getLinkedInAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation_uuids** | [**string[]**](../Model/string.md)| Organisation uuids | |
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

## `getPinterestAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay()`

```php
getPinterestAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay($organisation_uuids, $from_date, $date_format, $format): string
```

Return pinterest ads extended report per organisation per account per campaign per day

Pinterest ads extended report per organisation per account per campaign per day

### Example

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
    $result = $apiInstance->getPinterestAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay($organisation_uuids, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisingDataApi->getPinterestAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation_uuids** | [**string[]**](../Model/string.md)| Organisation uuids | |
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

## `getSnapchatAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay()`

```php
getSnapchatAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay($organisation_uuids, $from_date, $date_format, $format): string
```

Return snapchat ads extended report per organisation per account per campaign per day

Snapchat ads extended report per organisation per account per campaign per day

### Example

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
    $result = $apiInstance->getSnapchatAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay($organisation_uuids, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisingDataApi->getSnapchatAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation_uuids** | [**string[]**](../Model/string.md)| Organisation uuids | |
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

## `getTikTokAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay()`

```php
getTikTokAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay($organisation_uuids, $from_date, $date_format, $format): string
```

Return tiktok ads extended report per organisation per account per campaign per day

TikTok ads extended report per organisation per account per campaign per day

### Example

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
    $result = $apiInstance->getTikTokAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay($organisation_uuids, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisingDataApi->getTikTokAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation_uuids** | [**string[]**](../Model/string.md)| Organisation uuids | |
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

## `getTwitterAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay()`

```php
getTwitterAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay($organisation_uuids, $from_date, $date_format, $format): string
```

Return twitter ads extended report per organisation per account per campaign per day

Twitter ads extended report per organisation per account per campaign per day

### Example

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
    $result = $apiInstance->getTwitterAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay($organisation_uuids, $from_date, $date_format, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisingDataApi->getTwitterAdsExtendedReportPerOrganisationPerAccountPerCampaignPerDay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation_uuids** | [**string[]**](../Model/string.md)| Organisation uuids | |
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
