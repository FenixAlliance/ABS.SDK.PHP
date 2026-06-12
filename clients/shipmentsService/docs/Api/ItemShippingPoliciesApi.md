# OpenAPI\Client\ItemShippingPoliciesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createItemShippingPolicyAsync()**](ItemShippingPoliciesApi.md#createItemShippingPolicyAsync) | **POST** /api/v2/ShipmentsService/ItemShippingPolicies | Create an item shipping policy |
| [**deleteItemShippingPolicyAsync()**](ItemShippingPoliciesApi.md#deleteItemShippingPolicyAsync) | **DELETE** /api/v2/ShipmentsService/ItemShippingPolicies/{policyId} | Delete an item shipping policy |
| [**getItemShippingPoliciesAsync()**](ItemShippingPoliciesApi.md#getItemShippingPoliciesAsync) | **GET** /api/v2/ShipmentsService/ItemShippingPolicies | Get all item shipping policies |
| [**getItemShippingPoliciesCountAsync()**](ItemShippingPoliciesApi.md#getItemShippingPoliciesCountAsync) | **GET** /api/v2/ShipmentsService/ItemShippingPolicies/Count | Get item shipping policies count |
| [**getItemShippingPolicyByIdAsync()**](ItemShippingPoliciesApi.md#getItemShippingPolicyByIdAsync) | **GET** /api/v2/ShipmentsService/ItemShippingPolicies/{policyId} | Get item shipping policy by ID |
| [**patchItemShippingPolicyAsync()**](ItemShippingPoliciesApi.md#patchItemShippingPolicyAsync) | **PATCH** /api/v2/ShipmentsService/ItemShippingPolicies/{policyId} | Patch an item shipping policy |
| [**updateItemShippingPolicyAsync()**](ItemShippingPoliciesApi.md#updateItemShippingPolicyAsync) | **PUT** /api/v2/ShipmentsService/ItemShippingPolicies/{policyId} | Update an item shipping policy |


## `createItemShippingPolicyAsync()`

```php
createItemShippingPolicyAsync($tenant_id, $api_version, $x_api_version, $item_shipping_policy_create_dto)
```

Create an item shipping policy

Creates a new item shipping policy.

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
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_shipping_policy_create_dto = new \OpenAPI\Client\Model\ItemShippingPolicyCreateDto(); // \OpenAPI\Client\Model\ItemShippingPolicyCreateDto

try {
    $apiInstance->createItemShippingPolicyAsync($tenant_id, $api_version, $x_api_version, $item_shipping_policy_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling ItemShippingPoliciesApi->createItemShippingPolicyAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_shipping_policy_create_dto** | [**\OpenAPI\Client\Model\ItemShippingPolicyCreateDto**](../Model/ItemShippingPolicyCreateDto.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteItemShippingPolicyAsync()`

```php
deleteItemShippingPolicyAsync($tenant_id, $policy_id, $api_version, $x_api_version)
```

Delete an item shipping policy

Deletes an item shipping policy.

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
$policy_id = 'policy_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteItemShippingPolicyAsync($tenant_id, $policy_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ItemShippingPoliciesApi->deleteItemShippingPolicyAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **policy_id** | **string**|  | |
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

## `getItemShippingPoliciesAsync()`

```php
getItemShippingPoliciesAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemShippingPolicyDtoListEnvelope
```

Get all item shipping policies

Retrieves all item shipping policies for the specified tenant.

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
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemShippingPoliciesAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemShippingPoliciesApi->getItemShippingPoliciesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
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

## `getItemShippingPoliciesCountAsync()`

```php
getItemShippingPoliciesCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get item shipping policies count

Returns the count of item shipping policies.

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
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemShippingPoliciesCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemShippingPoliciesApi->getItemShippingPoliciesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
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

## `getItemShippingPolicyByIdAsync()`

```php
getItemShippingPolicyByIdAsync($tenant_id, $policy_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemShippingPolicyDtoEnvelope
```

Get item shipping policy by ID

Retrieves a specific item shipping policy.

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
$policy_id = 'policy_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemShippingPolicyByIdAsync($tenant_id, $policy_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemShippingPoliciesApi->getItemShippingPolicyByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **policy_id** | **string**|  | |
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

## `patchItemShippingPolicyAsync()`

```php
patchItemShippingPolicyAsync($tenant_id, $policy_id, $api_version, $x_api_version, $operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch an item shipping policy

Partially updates an existing item shipping policy using JSON Patch.

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
$policy_id = 'policy_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$operation = array(new \OpenAPI\Client\Model\Operation()); // \OpenAPI\Client\Model\Operation[]

try {
    $result = $apiInstance->patchItemShippingPolicyAsync($tenant_id, $policy_id, $api_version, $x_api_version, $operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemShippingPoliciesApi->patchItemShippingPolicyAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **policy_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **operation** | [**\OpenAPI\Client\Model\Operation[]**](../Model/Operation.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateItemShippingPolicyAsync()`

```php
updateItemShippingPolicyAsync($tenant_id, $policy_id, $api_version, $x_api_version, $item_shipping_policy_update_dto)
```

Update an item shipping policy

Updates an existing item shipping policy.

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
$policy_id = 'policy_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_shipping_policy_update_dto = new \OpenAPI\Client\Model\ItemShippingPolicyUpdateDto(); // \OpenAPI\Client\Model\ItemShippingPolicyUpdateDto

try {
    $apiInstance->updateItemShippingPolicyAsync($tenant_id, $policy_id, $api_version, $x_api_version, $item_shipping_policy_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling ItemShippingPoliciesApi->updateItemShippingPolicyAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **policy_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_shipping_policy_update_dto** | [**\OpenAPI\Client\Model\ItemShippingPolicyUpdateDto**](../Model/ItemShippingPolicyUpdateDto.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
