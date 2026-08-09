# OpenAPI\Client\ItemRefundPoliciesApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countItemRefundPoliciesAsync()**](ItemRefundPoliciesApi.md#countItemRefundPoliciesAsync) | **GET** /api/v2/CatalogService/ItemRefundPolicies/Count | Count item refund policies |
| [**getItemRefundPoliciesAsync()**](ItemRefundPoliciesApi.md#getItemRefundPoliciesAsync) | **GET** /api/v2/CatalogService/ItemRefundPolicies | Get item refund policies |
| [**getItemRefundPolicyByIdAsync()**](ItemRefundPoliciesApi.md#getItemRefundPolicyByIdAsync) | **GET** /api/v2/CatalogService/ItemRefundPolicies/{itemRefundPolicyId} | Get item refund policy by ID |
| [**relateItemToRefundPolicyAsync()**](ItemRefundPoliciesApi.md#relateItemToRefundPolicyAsync) | **POST** /api/v2/CatalogService/ItemRefundPolicies | Relate item to refund policy |
| [**removeRefundPolicyFromItemAsync()**](ItemRefundPoliciesApi.md#removeRefundPolicyFromItemAsync) | **DELETE** /api/v2/CatalogService/ItemRefundPolicies/{itemRefundPolicyId} | Remove refund policy from item |


## `countItemRefundPoliciesAsync()`

```php
countItemRefundPoliciesAsync($tenant_id, $item_id, $api_version, $x_api_version, $item_refund_policy_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Count item refund policies

Counts all refund policies for a specific item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemRefundPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_id = 'item_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_refund_policy_dto_collection_query_parameters = new \OpenAPI\Client\Model\ItemRefundPolicyDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ItemRefundPolicyDtoCollectionQueryParameters

try {
    $result = $apiInstance->countItemRefundPoliciesAsync($tenant_id, $item_id, $api_version, $x_api_version, $item_refund_policy_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemRefundPoliciesApi->countItemRefundPoliciesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | [optional] |
| **item_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_refund_policy_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ItemRefundPolicyDtoCollectionQueryParameters**](../Model/ItemRefundPolicyDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Int32Envelope**](../Model/Int32Envelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemRefundPoliciesAsync()`

```php
getItemRefundPoliciesAsync($tenant_id, $item_id, $api_version, $x_api_version, $item_refund_policy_dto_collection_query_parameters): \OpenAPI\Client\Model\ItemRefundPolicyDtoListEnvelope
```

Get item refund policies

Retrieves all refund policies for a specific item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemRefundPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_id = 'item_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_refund_policy_dto_collection_query_parameters = new \OpenAPI\Client\Model\ItemRefundPolicyDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ItemRefundPolicyDtoCollectionQueryParameters

try {
    $result = $apiInstance->getItemRefundPoliciesAsync($tenant_id, $item_id, $api_version, $x_api_version, $item_refund_policy_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemRefundPoliciesApi->getItemRefundPoliciesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | [optional] |
| **item_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_refund_policy_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ItemRefundPolicyDtoCollectionQueryParameters**](../Model/ItemRefundPolicyDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemRefundPolicyDtoListEnvelope**](../Model/ItemRefundPolicyDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemRefundPolicyByIdAsync()`

```php
getItemRefundPolicyByIdAsync($item_refund_policy_id, $tenant_id, $item_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemRefundPolicyDtoEnvelope
```

Get item refund policy by ID

Retrieves a specific refund policy for an item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemRefundPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_refund_policy_id = 'item_refund_policy_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$item_id = 'item_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemRefundPolicyByIdAsync($item_refund_policy_id, $tenant_id, $item_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemRefundPoliciesApi->getItemRefundPolicyByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_refund_policy_id** | **string**|  | |
| **tenant_id** | **string**|  | [optional] |
| **item_id** | **string**|  | [optional] |
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

## `relateItemToRefundPolicyAsync()`

```php
relateItemToRefundPolicyAsync($tenant_id, $item_id, $refund_policy_id, $api_version, $x_api_version)
```

Relate item to refund policy

Relates an item to an existing refund policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemRefundPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_id = 'item_id_example'; // string
$refund_policy_id = 'refund_policy_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->relateItemToRefundPolicyAsync($tenant_id, $item_id, $refund_policy_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ItemRefundPoliciesApi->relateItemToRefundPolicyAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **item_id** | **string**|  | |
| **refund_policy_id** | **string**|  | |
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

## `removeRefundPolicyFromItemAsync()`

```php
removeRefundPolicyFromItemAsync($tenant_id, $item_id, $item_refund_policy_id, $api_version, $x_api_version)
```

Remove refund policy from item

Removes a refund policy from an item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemRefundPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_id = 'item_id_example'; // string
$item_refund_policy_id = 'item_refund_policy_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->removeRefundPolicyFromItemAsync($tenant_id, $item_id, $item_refund_policy_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ItemRefundPoliciesApi->removeRefundPolicyFromItemAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **item_id** | **string**|  | |
| **item_refund_policy_id** | **string**|  | |
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
