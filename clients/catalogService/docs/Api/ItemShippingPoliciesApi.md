# OpenAPI\Client\ItemShippingPoliciesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countItemShippingPoliciesAsync()**](ItemShippingPoliciesApi.md#countItemShippingPoliciesAsync) | **GET** /api/v2/CatalogService/ItemShippingPolicies/Count | Count item shipping policies |
| [**getItemShippingPoliciesAsync()**](ItemShippingPoliciesApi.md#getItemShippingPoliciesAsync) | **GET** /api/v2/CatalogService/ItemShippingPolicies | Get item shipping policies |
| [**getItemShippingPolicyByIdAsync()**](ItemShippingPoliciesApi.md#getItemShippingPolicyByIdAsync) | **GET** /api/v2/CatalogService/ItemShippingPolicies/{itemShippingPolicyId} | Get item shipping policy by ID |
| [**relateItemToShippingPolicyAsync()**](ItemShippingPoliciesApi.md#relateItemToShippingPolicyAsync) | **POST** /api/v2/CatalogService/ItemShippingPolicies | Relate item to shipping policy |
| [**removeShippingPolicyFromItemAsync()**](ItemShippingPoliciesApi.md#removeShippingPolicyFromItemAsync) | **DELETE** /api/v2/CatalogService/ItemShippingPolicies/{itemShippingPolicyId} | Remove shipping policy from item |


## `countItemShippingPoliciesAsync()`

```php
countItemShippingPoliciesAsync($item_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Count item shipping policies

Counts all shipping policies for a specific item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemShippingPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->countItemShippingPoliciesAsync($item_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemShippingPoliciesApi->countItemShippingPoliciesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**|  | [optional] |
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

## `getItemShippingPoliciesAsync()`

```php
getItemShippingPoliciesAsync($item_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemShippingPolicyDtoListEnvelope
```

Get item shipping policies

Retrieves all shipping policies for a specific item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemShippingPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemShippingPoliciesAsync($item_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemShippingPoliciesApi->getItemShippingPoliciesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemShippingPolicyDtoListEnvelope**](../Model/ItemShippingPolicyDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemShippingPolicyByIdAsync()`

```php
getItemShippingPolicyByIdAsync($item_shipping_policy_id, $item_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemShippingPolicyDtoEnvelope
```

Get item shipping policy by ID

Retrieves a specific shipping policy for an item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemShippingPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_shipping_policy_id = 'item_shipping_policy_id_example'; // string
$item_id = 'item_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemShippingPolicyByIdAsync($item_shipping_policy_id, $item_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemShippingPoliciesApi->getItemShippingPolicyByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_shipping_policy_id** | **string**|  | |
| **item_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemShippingPolicyDtoEnvelope**](../Model/ItemShippingPolicyDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `relateItemToShippingPolicyAsync()`

```php
relateItemToShippingPolicyAsync($tenant_id, $item_id, $shipping_policy_id, $api_version, $x_api_version)
```

Relate item to shipping policy

Relates an item to an existing shipping policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemShippingPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_id = 'item_id_example'; // string
$shipping_policy_id = 'shipping_policy_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->relateItemToShippingPolicyAsync($tenant_id, $item_id, $shipping_policy_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ItemShippingPoliciesApi->relateItemToShippingPolicyAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **item_id** | **string**|  | |
| **shipping_policy_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeShippingPolicyFromItemAsync()`

```php
removeShippingPolicyFromItemAsync($tenant_id, $item_id, $item_shipping_policy_id, $api_version, $x_api_version)
```

Remove shipping policy from item

Removes a shipping policy from an item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemShippingPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_id = 'item_id_example'; // string
$item_shipping_policy_id = 'item_shipping_policy_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->removeShippingPolicyFromItemAsync($tenant_id, $item_id, $item_shipping_policy_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ItemShippingPoliciesApi->removeShippingPolicyFromItemAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **item_id** | **string**|  | |
| **item_shipping_policy_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
