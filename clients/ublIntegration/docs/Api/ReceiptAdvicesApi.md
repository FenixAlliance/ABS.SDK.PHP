# OpenAPI\Client\ReceiptAdvicesApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2UblServiceReceiptAdvicesItemRestockIdGet()**](ReceiptAdvicesApi.md#apiV2UblServiceReceiptAdvicesItemRestockIdGet) | **GET** /api/v2/UblService/ReceiptAdvices/{itemRestockId} |  |
| [**apiV2UblServiceReceiptAdvicesItemRestockIdPartitionsGet()**](ReceiptAdvicesApi.md#apiV2UblServiceReceiptAdvicesItemRestockIdPartitionsGet) | **GET** /api/v2/UblService/ReceiptAdvices/{itemRestockId}/partitions |  |


## `apiV2UblServiceReceiptAdvicesItemRestockIdGet()`

```php
apiV2UblServiceReceiptAdvicesItemRestockIdGet($tenant_id, $item_restock_id, $profile, $api_version, $x_api_version)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReceiptAdvicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_restock_id = 'item_restock_id_example'; // string
$profile = 'Generic'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->apiV2UblServiceReceiptAdvicesItemRestockIdGet($tenant_id, $item_restock_id, $profile, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptAdvicesApi->apiV2UblServiceReceiptAdvicesItemRestockIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **item_restock_id** | **string**|  | |
| **profile** | **string**|  | [optional] [default to &#39;Generic&#39;] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2UblServiceReceiptAdvicesItemRestockIdPartitionsGet()`

```php
apiV2UblServiceReceiptAdvicesItemRestockIdPartitionsGet($tenant_id, $item_restock_id, $profile, $api_version, $x_api_version)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReceiptAdvicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_restock_id = 'item_restock_id_example'; // string
$profile = 'Generic'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->apiV2UblServiceReceiptAdvicesItemRestockIdPartitionsGet($tenant_id, $item_restock_id, $profile, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptAdvicesApi->apiV2UblServiceReceiptAdvicesItemRestockIdPartitionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **item_restock_id** | **string**|  | |
| **profile** | **string**|  | [optional] [default to &#39;Generic&#39;] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
