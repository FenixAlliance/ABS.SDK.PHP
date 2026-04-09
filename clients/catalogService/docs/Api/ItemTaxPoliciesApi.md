# OpenAPI\Client\ItemTaxPoliciesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countItemTaxPoliciesAsync()**](ItemTaxPoliciesApi.md#countItemTaxPoliciesAsync) | **GET** /api/v2/CatalogService/ItemTaxPolicies/Count | Count item tax policies |
| [**getItemTaxPoliciesAsync()**](ItemTaxPoliciesApi.md#getItemTaxPoliciesAsync) | **GET** /api/v2/CatalogService/ItemTaxPolicies | Get item tax policies |
| [**getItemTaxPolicyByIdAsync()**](ItemTaxPoliciesApi.md#getItemTaxPolicyByIdAsync) | **GET** /api/v2/CatalogService/ItemTaxPolicies/{itemTaxPolicyId} | Get item tax policy by ID |
| [**relateItemToTaxPolicyAsync()**](ItemTaxPoliciesApi.md#relateItemToTaxPolicyAsync) | **POST** /api/v2/CatalogService/ItemTaxPolicies | Relate item to tax policy |
| [**removeTaxPolicyFromItemAsync()**](ItemTaxPoliciesApi.md#removeTaxPolicyFromItemAsync) | **DELETE** /api/v2/CatalogService/ItemTaxPolicies/{itemTaxPolicyId} | Remove tax policy from item |


## `countItemTaxPoliciesAsync()`

```php
countItemTaxPoliciesAsync($item_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Count item tax policies

Counts all tax policies for a specific item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemTaxPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->countItemTaxPoliciesAsync($item_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemTaxPoliciesApi->countItemTaxPoliciesAsync: ', $e->getMessage(), PHP_EOL;
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

## `getItemTaxPoliciesAsync()`

```php
getItemTaxPoliciesAsync($item_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemTaxPolicyDtoListEnvelope
```

Get item tax policies

Retrieves all tax policies for a specific item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemTaxPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemTaxPoliciesAsync($item_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemTaxPoliciesApi->getItemTaxPoliciesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemTaxPolicyDtoListEnvelope**](../Model/ItemTaxPolicyDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemTaxPolicyByIdAsync()`

```php
getItemTaxPolicyByIdAsync($item_tax_policy_id, $item_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemTaxPolicyDtoEnvelope
```

Get item tax policy by ID

Retrieves a specific tax policy for an item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemTaxPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_tax_policy_id = 'item_tax_policy_id_example'; // string
$item_id = 'item_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemTaxPolicyByIdAsync($item_tax_policy_id, $item_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemTaxPoliciesApi->getItemTaxPolicyByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_tax_policy_id** | **string**|  | |
| **item_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemTaxPolicyDtoEnvelope**](../Model/ItemTaxPolicyDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `relateItemToTaxPolicyAsync()`

```php
relateItemToTaxPolicyAsync($tenant_id, $item_id, $tax_policy_id, $api_version, $x_api_version)
```

Relate item to tax policy

Relates an item to an existing tax policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemTaxPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_id = 'item_id_example'; // string
$tax_policy_id = 'tax_policy_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->relateItemToTaxPolicyAsync($tenant_id, $item_id, $tax_policy_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ItemTaxPoliciesApi->relateItemToTaxPolicyAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **item_id** | **string**|  | |
| **tax_policy_id** | **string**|  | |
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

## `removeTaxPolicyFromItemAsync()`

```php
removeTaxPolicyFromItemAsync($tenant_id, $item_id, $item_tax_policy_id, $api_version, $x_api_version)
```

Remove tax policy from item

Removes a tax policy from an item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemTaxPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_id = 'item_id_example'; // string
$item_tax_policy_id = 'item_tax_policy_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->removeTaxPolicyFromItemAsync($tenant_id, $item_id, $item_tax_policy_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ItemTaxPoliciesApi->removeTaxPolicyFromItemAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **item_id** | **string**|  | |
| **item_tax_policy_id** | **string**|  | |
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
