# OpenAPI\Client\AnalyticsDataApi

All URIs are relative to https://app.cervinodata.com/api/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getViews()**](AnalyticsDataApi.md#getViews) | **GET** /data/views/{organisationUuid} | Return views by organisation


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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organisation_uuid** | **string**| Organisation uuid |
 **format** | **string**| Output format | [optional]

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
