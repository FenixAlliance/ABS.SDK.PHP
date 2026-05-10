# OpenAPI\Client\PoliciesApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createRefundPolicyAsync()**](PoliciesApi.md#createRefundPolicyAsync) | **POST** /api/v2/SupportService/RefundPolicies | Create a new refund policy |
| [**createReturnPolicyAsync()**](PoliciesApi.md#createReturnPolicyAsync) | **POST** /api/v2/SupportService/ReturnPolicies | Create a new return policy |
| [**createWarrantyPolicyAsync()**](PoliciesApi.md#createWarrantyPolicyAsync) | **POST** /api/v2/SupportService/WarrantyPolicies | Create a new warranty policy |
| [**deleteRefundPolicyAsync()**](PoliciesApi.md#deleteRefundPolicyAsync) | **DELETE** /api/v2/SupportService/RefundPolicies/{refundPolicyId} | Delete a refund policy |
| [**deleteReturnPolicyAsync()**](PoliciesApi.md#deleteReturnPolicyAsync) | **DELETE** /api/v2/SupportService/ReturnPolicies/{returnPolicyId} | Delete a return policy |
| [**deleteWarrantyPolicyAsync()**](PoliciesApi.md#deleteWarrantyPolicyAsync) | **DELETE** /api/v2/SupportService/WarrantyPolicies/{warrantyPolicyId} | Delete a warranty policy |
| [**getRefundPoliciesAsync()**](PoliciesApi.md#getRefundPoliciesAsync) | **GET** /api/v2/SupportService/RefundPolicies | Retrieve a list of refund policies |
| [**getRefundPoliciesCountAsync()**](PoliciesApi.md#getRefundPoliciesCountAsync) | **GET** /api/v2/SupportService/RefundPolicies/Count | Get the count of refund policies |
| [**getRefundPolicyAsync()**](PoliciesApi.md#getRefundPolicyAsync) | **GET** /api/v2/SupportService/RefundPolicies/{refundPolicyId} | Retrieve a refund policy by ID |
| [**getReturnPoliciesAsync()**](PoliciesApi.md#getReturnPoliciesAsync) | **GET** /api/v2/SupportService/ReturnPolicies | Retrieve a list of return policies |
| [**getReturnPoliciesCountAsync()**](PoliciesApi.md#getReturnPoliciesCountAsync) | **GET** /api/v2/SupportService/ReturnPolicies/Count | Get the count of return policies |
| [**getReturnPolicyAsync()**](PoliciesApi.md#getReturnPolicyAsync) | **GET** /api/v2/SupportService/ReturnPolicies/{returnPolicyId} | Retrieve a return policy by ID |
| [**getWarrantyPoliciesAsync()**](PoliciesApi.md#getWarrantyPoliciesAsync) | **GET** /api/v2/SupportService/WarrantyPolicies | Retrieve a list of warranty policies |
| [**getWarrantyPoliciesCountAsync()**](PoliciesApi.md#getWarrantyPoliciesCountAsync) | **GET** /api/v2/SupportService/WarrantyPolicies/Count | Get the count of warranty policies |
| [**getWarrantyPolicyAsync()**](PoliciesApi.md#getWarrantyPolicyAsync) | **GET** /api/v2/SupportService/WarrantyPolicies/{warrantyPolicyId} | Retrieve a warranty policy by ID |
| [**updateRefundPolicyAsync()**](PoliciesApi.md#updateRefundPolicyAsync) | **PUT** /api/v2/SupportService/RefundPolicies/{refundPolicyId} | Update a refund policy |
| [**updateReturnPolicyAsync()**](PoliciesApi.md#updateReturnPolicyAsync) | **PUT** /api/v2/SupportService/ReturnPolicies/{returnPolicyId} | Update a return policy |
| [**updateWarrantyPolicyAsync()**](PoliciesApi.md#updateWarrantyPolicyAsync) | **PUT** /api/v2/SupportService/WarrantyPolicies/{warrantyPolicyId} | Update a warranty policy |


## `createRefundPolicyAsync()`

```php
createRefundPolicyAsync($tenant_id, $api_version, $x_api_version, $item_refund_policy_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a new refund policy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_refund_policy_create_dto = new \OpenAPI\Client\Model\ItemRefundPolicyCreateDto(); // \OpenAPI\Client\Model\ItemRefundPolicyCreateDto

try {
    $result = $apiInstance->createRefundPolicyAsync($tenant_id, $api_version, $x_api_version, $item_refund_policy_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesApi->createRefundPolicyAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_refund_policy_create_dto** | [**\OpenAPI\Client\Model\ItemRefundPolicyCreateDto**](../Model/ItemRefundPolicyCreateDto.md)|  | [optional] |

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

## `createReturnPolicyAsync()`

```php
createReturnPolicyAsync($tenant_id, $api_version, $x_api_version, $item_return_policy_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a new return policy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PoliciesApi(
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
    echo 'Exception when calling PoliciesApi->createReturnPolicyAsync: ', $e->getMessage(), PHP_EOL;
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

## `createWarrantyPolicyAsync()`

```php
createWarrantyPolicyAsync($tenant_id, $api_version, $x_api_version, $item_warranty_policy_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a new warranty policy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_warranty_policy_create_dto = new \OpenAPI\Client\Model\ItemWarrantyPolicyCreateDto(); // \OpenAPI\Client\Model\ItemWarrantyPolicyCreateDto

try {
    $result = $apiInstance->createWarrantyPolicyAsync($tenant_id, $api_version, $x_api_version, $item_warranty_policy_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesApi->createWarrantyPolicyAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_warranty_policy_create_dto** | [**\OpenAPI\Client\Model\ItemWarrantyPolicyCreateDto**](../Model/ItemWarrantyPolicyCreateDto.md)|  | [optional] |

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

## `deleteRefundPolicyAsync()`

```php
deleteRefundPolicyAsync($tenant_id, $refund_policy_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a refund policy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$refund_policy_id = 'refund_policy_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteRefundPolicyAsync($tenant_id, $refund_policy_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesApi->deleteRefundPolicyAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **refund_policy_id** | **string**|  | |
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

## `deleteReturnPolicyAsync()`

```php
deleteReturnPolicyAsync($tenant_id, $return_policy_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a return policy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PoliciesApi(
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
    echo 'Exception when calling PoliciesApi->deleteReturnPolicyAsync: ', $e->getMessage(), PHP_EOL;
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

## `deleteWarrantyPolicyAsync()`

```php
deleteWarrantyPolicyAsync($tenant_id, $warranty_policy_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a warranty policy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$warranty_policy_id = 'warranty_policy_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteWarrantyPolicyAsync($tenant_id, $warranty_policy_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesApi->deleteWarrantyPolicyAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **warranty_policy_id** | **string**|  | |
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

## `getRefundPoliciesAsync()`

```php
getRefundPoliciesAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemRefundPolicyDtoListEnvelope
```

Retrieve a list of refund policies

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getRefundPoliciesAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesApi->getRefundPoliciesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemRefundPolicyDtoListEnvelope**](../Model/ItemRefundPolicyDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRefundPoliciesCountAsync()`

```php
getRefundPoliciesCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get the count of refund policies

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getRefundPoliciesCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesApi->getRefundPoliciesCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `getRefundPolicyAsync()`

```php
getRefundPolicyAsync($tenant_id, $refund_policy_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemRefundPolicyDtoEnvelope
```

Retrieve a refund policy by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$refund_policy_id = 'refund_policy_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getRefundPolicyAsync($tenant_id, $refund_policy_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesApi->getRefundPolicyAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **refund_policy_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemRefundPolicyDtoEnvelope**](../Model/ItemRefundPolicyDtoEnvelope.md)

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



$apiInstance = new OpenAPI\Client\Api\PoliciesApi(
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
    echo 'Exception when calling PoliciesApi->getReturnPoliciesAsync: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new OpenAPI\Client\Api\PoliciesApi(
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
    echo 'Exception when calling PoliciesApi->getReturnPoliciesCountAsync: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new OpenAPI\Client\Api\PoliciesApi(
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
    echo 'Exception when calling PoliciesApi->getReturnPolicyAsync: ', $e->getMessage(), PHP_EOL;
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

## `getWarrantyPoliciesAsync()`

```php
getWarrantyPoliciesAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemWarrantyPolicyDtoListEnvelope
```

Retrieve a list of warranty policies

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getWarrantyPoliciesAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesApi->getWarrantyPoliciesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemWarrantyPolicyDtoListEnvelope**](../Model/ItemWarrantyPolicyDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWarrantyPoliciesCountAsync()`

```php
getWarrantyPoliciesCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get the count of warranty policies

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getWarrantyPoliciesCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesApi->getWarrantyPoliciesCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `getWarrantyPolicyAsync()`

```php
getWarrantyPolicyAsync($tenant_id, $warranty_policy_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemWarrantyPolicyDtoEnvelope
```

Retrieve a warranty policy by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$warranty_policy_id = 'warranty_policy_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getWarrantyPolicyAsync($tenant_id, $warranty_policy_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesApi->getWarrantyPolicyAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **warranty_policy_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemWarrantyPolicyDtoEnvelope**](../Model/ItemWarrantyPolicyDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRefundPolicyAsync()`

```php
updateRefundPolicyAsync($tenant_id, $refund_policy_id, $api_version, $x_api_version, $item_refund_policy_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a refund policy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$refund_policy_id = 'refund_policy_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_refund_policy_update_dto = new \OpenAPI\Client\Model\ItemRefundPolicyUpdateDto(); // \OpenAPI\Client\Model\ItemRefundPolicyUpdateDto

try {
    $result = $apiInstance->updateRefundPolicyAsync($tenant_id, $refund_policy_id, $api_version, $x_api_version, $item_refund_policy_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesApi->updateRefundPolicyAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **refund_policy_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_refund_policy_update_dto** | [**\OpenAPI\Client\Model\ItemRefundPolicyUpdateDto**](../Model/ItemRefundPolicyUpdateDto.md)|  | [optional] |

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



$apiInstance = new OpenAPI\Client\Api\PoliciesApi(
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
    echo 'Exception when calling PoliciesApi->updateReturnPolicyAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateWarrantyPolicyAsync()`

```php
updateWarrantyPolicyAsync($tenant_id, $warranty_policy_id, $api_version, $x_api_version, $item_warranty_policy_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a warranty policy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$warranty_policy_id = 'warranty_policy_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_warranty_policy_update_dto = new \OpenAPI\Client\Model\ItemWarrantyPolicyUpdateDto(); // \OpenAPI\Client\Model\ItemWarrantyPolicyUpdateDto

try {
    $result = $apiInstance->updateWarrantyPolicyAsync($tenant_id, $warranty_policy_id, $api_version, $x_api_version, $item_warranty_policy_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesApi->updateWarrantyPolicyAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **warranty_policy_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_warranty_policy_update_dto** | [**\OpenAPI\Client\Model\ItemWarrantyPolicyUpdateDto**](../Model/ItemWarrantyPolicyUpdateDto.md)|  | [optional] |

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
