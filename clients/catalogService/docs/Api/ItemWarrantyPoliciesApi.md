# OpenAPI\Client\ItemWarrantyPoliciesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countItemWarrantyPoliciesAsync()**](ItemWarrantyPoliciesApi.md#countItemWarrantyPoliciesAsync) | **GET** /api/v2/CatalogService/ItemWarrantyPolicies/Count | Count item warranty policies |
| [**getItemWarrantyPoliciesAsync()**](ItemWarrantyPoliciesApi.md#getItemWarrantyPoliciesAsync) | **GET** /api/v2/CatalogService/ItemWarrantyPolicies | Get item warranty policies |
| [**getItemWarrantyPolicyByIdAsync()**](ItemWarrantyPoliciesApi.md#getItemWarrantyPolicyByIdAsync) | **GET** /api/v2/CatalogService/ItemWarrantyPolicies/{itemWarrantyPolicyId} | Get item warranty policy by ID |
| [**relateItemToWarrantyPolicyAsync()**](ItemWarrantyPoliciesApi.md#relateItemToWarrantyPolicyAsync) | **POST** /api/v2/CatalogService/ItemWarrantyPolicies | Relate item to warranty policy |
| [**removeWarrantyPolicyFromItemAsync()**](ItemWarrantyPoliciesApi.md#removeWarrantyPolicyFromItemAsync) | **DELETE** /api/v2/CatalogService/ItemWarrantyPolicies/{itemWarrantyPolicyId} | Remove warranty policy from item |


## `countItemWarrantyPoliciesAsync()`

```php
countItemWarrantyPoliciesAsync($item_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Count item warranty policies

Counts all warranty policies for a specific item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemWarrantyPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->countItemWarrantyPoliciesAsync($item_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemWarrantyPoliciesApi->countItemWarrantyPoliciesAsync: ', $e->getMessage(), PHP_EOL;
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

## `getItemWarrantyPoliciesAsync()`

```php
getItemWarrantyPoliciesAsync($item_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemWarrantyPolicyDtoListEnvelope
```

Get item warranty policies

Retrieves all warranty policies for a specific item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemWarrantyPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemWarrantyPoliciesAsync($item_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemWarrantyPoliciesApi->getItemWarrantyPoliciesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**|  | [optional] |
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

## `getItemWarrantyPolicyByIdAsync()`

```php
getItemWarrantyPolicyByIdAsync($item_warranty_policy_id, $item_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemWarrantyPolicyDtoEnvelope
```

Get item warranty policy by ID

Retrieves a specific warranty policy for an item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemWarrantyPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_warranty_policy_id = 'item_warranty_policy_id_example'; // string
$item_id = 'item_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemWarrantyPolicyByIdAsync($item_warranty_policy_id, $item_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemWarrantyPoliciesApi->getItemWarrantyPolicyByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_warranty_policy_id** | **string**|  | |
| **item_id** | **string**|  | [optional] |
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

## `relateItemToWarrantyPolicyAsync()`

```php
relateItemToWarrantyPolicyAsync($tenant_id, $item_id, $warranty_policy_id, $api_version, $x_api_version)
```

Relate item to warranty policy

Relates an item to an existing warranty policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemWarrantyPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_id = 'item_id_example'; // string
$warranty_policy_id = 'warranty_policy_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->relateItemToWarrantyPolicyAsync($tenant_id, $item_id, $warranty_policy_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ItemWarrantyPoliciesApi->relateItemToWarrantyPolicyAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **item_id** | **string**|  | |
| **warranty_policy_id** | **string**|  | |
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

## `removeWarrantyPolicyFromItemAsync()`

```php
removeWarrantyPolicyFromItemAsync($tenant_id, $item_id, $item_warranty_policy_id, $api_version, $x_api_version)
```

Remove warranty policy from item

Removes a warranty policy from an item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemWarrantyPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_id = 'item_id_example'; // string
$item_warranty_policy_id = 'item_warranty_policy_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->removeWarrantyPolicyFromItemAsync($tenant_id, $item_id, $item_warranty_policy_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ItemWarrantyPoliciesApi->removeWarrantyPolicyFromItemAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **item_id** | **string**|  | |
| **item_warranty_policy_id** | **string**|  | |
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
