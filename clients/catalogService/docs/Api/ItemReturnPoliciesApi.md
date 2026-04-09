# OpenAPI\Client\ItemReturnPoliciesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countItemReturnPoliciesAsync()**](ItemReturnPoliciesApi.md#countItemReturnPoliciesAsync) | **GET** /api/v2/CatalogService/ItemReturnPolicies/Count | Count item return policies |
| [**getItemReturnPoliciesAsync()**](ItemReturnPoliciesApi.md#getItemReturnPoliciesAsync) | **GET** /api/v2/CatalogService/ItemReturnPolicies | Get item return policies |
| [**getItemReturnPolicyByIdAsync()**](ItemReturnPoliciesApi.md#getItemReturnPolicyByIdAsync) | **GET** /api/v2/CatalogService/ItemReturnPolicies/{itemReturnPolicyId} | Get item return policy by ID |
| [**relateItemToReturnPolicyAsync()**](ItemReturnPoliciesApi.md#relateItemToReturnPolicyAsync) | **POST** /api/v2/CatalogService/ItemReturnPolicies | Relate item to return policy |
| [**removeReturnPolicyFromItemAsync()**](ItemReturnPoliciesApi.md#removeReturnPolicyFromItemAsync) | **DELETE** /api/v2/CatalogService/ItemReturnPolicies/{itemReturnPolicyId} | Remove return policy from item |


## `countItemReturnPoliciesAsync()`

```php
countItemReturnPoliciesAsync($item_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Count item return policies

Counts all return policies for a specific item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemReturnPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->countItemReturnPoliciesAsync($item_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemReturnPoliciesApi->countItemReturnPoliciesAsync: ', $e->getMessage(), PHP_EOL;
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

## `getItemReturnPoliciesAsync()`

```php
getItemReturnPoliciesAsync($item_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemReturnPolicyDtoListEnvelope
```

Get item return policies

Retrieves all return policies for a specific item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemReturnPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemReturnPoliciesAsync($item_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemReturnPoliciesApi->getItemReturnPoliciesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemReturnPolicyDtoListEnvelope**](../Model/ItemReturnPolicyDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemReturnPolicyByIdAsync()`

```php
getItemReturnPolicyByIdAsync($item_return_policy_id, $item_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemReturnPolicyDtoEnvelope
```

Get item return policy by ID

Retrieves a specific return policy for an item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemReturnPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_return_policy_id = 'item_return_policy_id_example'; // string
$item_id = 'item_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemReturnPolicyByIdAsync($item_return_policy_id, $item_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemReturnPoliciesApi->getItemReturnPolicyByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_return_policy_id** | **string**|  | |
| **item_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemReturnPolicyDtoEnvelope**](../Model/ItemReturnPolicyDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `relateItemToReturnPolicyAsync()`

```php
relateItemToReturnPolicyAsync($tenant_id, $item_id, $return_policy_id, $api_version, $x_api_version)
```

Relate item to return policy

Relates an item to an existing return policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemReturnPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_id = 'item_id_example'; // string
$return_policy_id = 'return_policy_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->relateItemToReturnPolicyAsync($tenant_id, $item_id, $return_policy_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ItemReturnPoliciesApi->relateItemToReturnPolicyAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **item_id** | **string**|  | |
| **return_policy_id** | **string**|  | |
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

## `removeReturnPolicyFromItemAsync()`

```php
removeReturnPolicyFromItemAsync($tenant_id, $item_id, $item_return_policy_id, $api_version, $x_api_version)
```

Remove return policy from item

Removes a return policy from an item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemReturnPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_id = 'item_id_example'; // string
$item_return_policy_id = 'item_return_policy_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->removeReturnPolicyFromItemAsync($tenant_id, $item_id, $item_return_policy_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ItemReturnPoliciesApi->removeReturnPolicyFromItemAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **item_id** | **string**|  | |
| **item_return_policy_id** | **string**|  | |
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
