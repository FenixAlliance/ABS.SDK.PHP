# OpenAPI\Client\IPLookupsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteSystemIPLookup()**](IPLookupsApi.md#deleteSystemIPLookup) | **DELETE** /api/v2/SystemService/IPLookups/{ipLookupId} | Delete a system IP lookup |
| [**getSystemIPLookupById()**](IPLookupsApi.md#getSystemIPLookupById) | **GET** /api/v2/SystemService/IPLookups/{ipLookupId} | Retrieve a single system IP lookup by its ID |
| [**getSystemIPLookups()**](IPLookupsApi.md#getSystemIPLookups) | **GET** /api/v2/SystemService/IPLookups | Retrieve a list of system IP lookups |
| [**getSystemIPLookupsCount()**](IPLookupsApi.md#getSystemIPLookupsCount) | **GET** /api/v2/SystemService/IPLookups/Count | Get the count of system IP lookups |


## `deleteSystemIPLookup()`

```php
deleteSystemIPLookup($ip_lookup_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a system IP lookup

Delete a system IP lookup by its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IPLookupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ip_lookup_id = 'ip_lookup_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteSystemIPLookup($ip_lookup_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IPLookupsApi->deleteSystemIPLookup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ip_lookup_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSystemIPLookupById()`

```php
getSystemIPLookupById($ip_lookup_id, $api_version, $x_api_version): \OpenAPI\Client\Model\IPLookupDtoEnvelope
```

Retrieve a single system IP lookup by its ID

Retrieve a single system IP lookup by its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IPLookupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ip_lookup_id = 'ip_lookup_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSystemIPLookupById($ip_lookup_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IPLookupsApi->getSystemIPLookupById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ip_lookup_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\IPLookupDtoEnvelope**](../Model/IPLookupDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSystemIPLookups()`

```php
getSystemIPLookups($api_version, $x_api_version): \OpenAPI\Client\Model\IPLookupDtoListEnvelope
```

Retrieve a list of system IP lookups

Retrieve a list of all IP lookups in the system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IPLookupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSystemIPLookups($api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IPLookupsApi->getSystemIPLookups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\IPLookupDtoListEnvelope**](../Model/IPLookupDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSystemIPLookupsCount()`

```php
getSystemIPLookupsCount($api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get the count of system IP lookups

Get the count of all IP lookups in the system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IPLookupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSystemIPLookupsCount($api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IPLookupsApi->getSystemIPLookupsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Int32Envelope**](../Model/Int32Envelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
