# OpenAPI\Client\ReturnPoliciesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createReturnPolicyAsync()**](ReturnPoliciesApi.md#createReturnPolicyAsync) | **POST** /api/v2/SupportService/ReturnPolicies | Create a new return policy |
| [**deleteReturnPolicyAsync()**](ReturnPoliciesApi.md#deleteReturnPolicyAsync) | **DELETE** /api/v2/SupportService/ReturnPolicies/{returnPolicyId} | Delete a return policy |
| [**getReturnPoliciesAsync()**](ReturnPoliciesApi.md#getReturnPoliciesAsync) | **GET** /api/v2/SupportService/ReturnPolicies | Retrieve a list of return policies |
| [**getReturnPoliciesCountAsync()**](ReturnPoliciesApi.md#getReturnPoliciesCountAsync) | **GET** /api/v2/SupportService/ReturnPolicies/Count | Get the count of return policies |
| [**getReturnPolicyAsync()**](ReturnPoliciesApi.md#getReturnPolicyAsync) | **GET** /api/v2/SupportService/ReturnPolicies/{returnPolicyId} | Retrieve a return policy by ID |
| [**patchReturnPolicyAsync()**](ReturnPoliciesApi.md#patchReturnPolicyAsync) | **PATCH** /api/v2/SupportService/ReturnPolicies/{returnPolicyId} | Patch a return policy |
| [**updateReturnPolicyAsync()**](ReturnPoliciesApi.md#updateReturnPolicyAsync) | **PUT** /api/v2/SupportService/ReturnPolicies/{returnPolicyId} | Update a return policy |


## `createReturnPolicyAsync()`

```php
createReturnPolicyAsync($tenant_id, $api_version, $x_api_version, $item_return_policy_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a new return policy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReturnPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_return_policy_create_dto = new \OpenAPI\Client\Model\ItemReturnPolicyCreateDto(); // \OpenAPI\Client\Model\ItemReturnPolicyCreateDto

try {
    $result = $apiInstance->createReturnPolicyAsync($tenant_id, $api_version, $x_api_version, $item_return_policy_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnPoliciesApi->createReturnPolicyAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_return_policy_create_dto** | [**\OpenAPI\Client\Model\ItemReturnPolicyCreateDto**](../Model/ItemReturnPolicyCreateDto.md)|  | [optional] |

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

## `deleteReturnPolicyAsync()`

```php
deleteReturnPolicyAsync($tenant_id, $return_policy_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a return policy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReturnPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$return_policy_id = 'return_policy_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteReturnPolicyAsync($tenant_id, $return_policy_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnPoliciesApi->deleteReturnPolicyAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **return_policy_id** | **string**|  | |
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

## `getReturnPoliciesAsync()`

```php
getReturnPoliciesAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemReturnPolicyDtoListEnvelope
```

Retrieve a list of return policies

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReturnPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getReturnPoliciesAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnPoliciesApi->getReturnPoliciesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
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

## `getReturnPoliciesCountAsync()`

```php
getReturnPoliciesCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get the count of return policies

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReturnPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getReturnPoliciesCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnPoliciesApi->getReturnPoliciesCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `getReturnPolicyAsync()`

```php
getReturnPolicyAsync($tenant_id, $return_policy_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemReturnPolicyDtoEnvelope
```

Retrieve a return policy by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReturnPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$return_policy_id = 'return_policy_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getReturnPolicyAsync($tenant_id, $return_policy_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnPoliciesApi->getReturnPolicyAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **return_policy_id** | **string**|  | |
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

## `patchReturnPolicyAsync()`

```php
patchReturnPolicyAsync($tenant_id, $return_policy_id, $api_version, $x_api_version, $operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a return policy

Partially updates an existing return policy by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReturnPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$return_policy_id = 'return_policy_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$operation = array(new \OpenAPI\Client\Model\Operation()); // \OpenAPI\Client\Model\Operation[]

try {
    $result = $apiInstance->patchReturnPolicyAsync($tenant_id, $return_policy_id, $api_version, $x_api_version, $operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnPoliciesApi->patchReturnPolicyAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **return_policy_id** | **string**|  | |
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

## `updateReturnPolicyAsync()`

```php
updateReturnPolicyAsync($tenant_id, $return_policy_id, $api_version, $x_api_version, $item_return_policy_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a return policy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReturnPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$return_policy_id = 'return_policy_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_return_policy_update_dto = new \OpenAPI\Client\Model\ItemReturnPolicyUpdateDto(); // \OpenAPI\Client\Model\ItemReturnPolicyUpdateDto

try {
    $result = $apiInstance->updateReturnPolicyAsync($tenant_id, $return_policy_id, $api_version, $x_api_version, $item_return_policy_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnPoliciesApi->updateReturnPolicyAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **return_policy_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_return_policy_update_dto** | [**\OpenAPI\Client\Model\ItemReturnPolicyUpdateDto**](../Model/ItemReturnPolicyUpdateDto.md)|  | [optional] |

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
