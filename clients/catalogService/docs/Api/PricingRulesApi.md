# OpenAPI\Client\PricingRulesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPricingRule()**](PricingRulesApi.md#createPricingRule) | **POST** /api/v2/CatalogService/PricingRules | Create a new pricing rule |
| [**deletePricingRule()**](PricingRulesApi.md#deletePricingRule) | **DELETE** /api/v2/CatalogService/PricingRules/{pricingRuleId} | Delete a pricing rule |
| [**getPricingRuleById()**](PricingRulesApi.md#getPricingRuleById) | **GET** /api/v2/CatalogService/PricingRules/{pricingRuleId} | Get pricing rule by ID |
| [**getPricingRules()**](PricingRulesApi.md#getPricingRules) | **GET** /api/v2/CatalogService/PricingRules | Get all pricing rules |
| [**updatePricingRule()**](PricingRulesApi.md#updatePricingRule) | **PUT** /api/v2/CatalogService/PricingRules/Update | Update a pricing rule |


## `createPricingRule()`

```php
createPricingRule($tenant_id, $api_version, $x_api_version, $pricing_rule_create_dto): \OpenAPI\Client\Model\PricingRuleDtoEnvelope
```

Create a new pricing rule

Creates a new pricing rule for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PricingRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$pricing_rule_create_dto = new \OpenAPI\Client\Model\PricingRuleCreateDto(); // \OpenAPI\Client\Model\PricingRuleCreateDto

try {
    $result = $apiInstance->createPricingRule($tenant_id, $api_version, $x_api_version, $pricing_rule_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricingRulesApi->createPricingRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **pricing_rule_create_dto** | [**\OpenAPI\Client\Model\PricingRuleCreateDto**](../Model/PricingRuleCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PricingRuleDtoEnvelope**](../Model/PricingRuleDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePricingRule()`

```php
deletePricingRule($tenant_id, $pricing_rule_id, $api_version, $x_api_version)
```

Delete a pricing rule

Deletes a pricing rule for the specified tenant and rule ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PricingRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$pricing_rule_id = 'pricing_rule_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deletePricingRule($tenant_id, $pricing_rule_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling PricingRulesApi->deletePricingRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **pricing_rule_id** | **string**|  | |
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

## `getPricingRuleById()`

```php
getPricingRuleById($pricing_rule_id, $api_version, $x_api_version): \OpenAPI\Client\Model\PricingRuleDtoEnvelope
```

Get pricing rule by ID

Retrieves a pricing rule by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PricingRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pricing_rule_id = 'pricing_rule_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getPricingRuleById($pricing_rule_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricingRulesApi->getPricingRuleById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pricing_rule_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PricingRuleDtoEnvelope**](../Model/PricingRuleDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPricingRules()`

```php
getPricingRules($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\PricingRuleDtoListEnvelope
```

Get all pricing rules

Retrieves all pricing rules for the specified tenant, with optional OData query options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PricingRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getPricingRules($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricingRulesApi->getPricingRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PricingRuleDtoListEnvelope**](../Model/PricingRuleDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePricingRule()`

```php
updatePricingRule($tenant_id, $pricing_rule_id, $api_version, $x_api_version, $pricing_rule_update_dto)
```

Update a pricing rule

Updates an existing pricing rule for the specified tenant and rule ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PricingRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$pricing_rule_id = 'pricing_rule_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$pricing_rule_update_dto = new \OpenAPI\Client\Model\PricingRuleUpdateDto(); // \OpenAPI\Client\Model\PricingRuleUpdateDto

try {
    $apiInstance->updatePricingRule($tenant_id, $pricing_rule_id, $api_version, $x_api_version, $pricing_rule_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling PricingRulesApi->updatePricingRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **pricing_rule_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **pricing_rule_update_dto** | [**\OpenAPI\Client\Model\PricingRuleUpdateDto**](../Model/PricingRuleUpdateDto.md)|  | [optional] |

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
