# OpenAPI\Client\SubscriptionPlansApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSubscriptionPlanAsync()**](SubscriptionPlansApi.md#createSubscriptionPlanAsync) | **POST** /api/v2/SubscriptionsService/SubscriptionPlans | Create a subscription plan |
| [**deleteSubscriptionPlanAsync()**](SubscriptionPlansApi.md#deleteSubscriptionPlanAsync) | **DELETE** /api/v2/SubscriptionsService/SubscriptionPlans/{planId} | Delete a subscription plan |
| [**getSubscriptionPlanByIdAsync()**](SubscriptionPlansApi.md#getSubscriptionPlanByIdAsync) | **GET** /api/v2/SubscriptionsService/SubscriptionPlans/{planId} | Get a subscription plan by ID |
| [**getSubscriptionPlansAsync()**](SubscriptionPlansApi.md#getSubscriptionPlansAsync) | **GET** /api/v2/SubscriptionsService/SubscriptionPlans | Get all subscription plans |
| [**getSubscriptionPlansCountAsync()**](SubscriptionPlansApi.md#getSubscriptionPlansCountAsync) | **GET** /api/v2/SubscriptionsService/SubscriptionPlans/Count | Get subscription plans count |
| [**updateSubscriptionPlanAsync()**](SubscriptionPlansApi.md#updateSubscriptionPlanAsync) | **PUT** /api/v2/SubscriptionsService/SubscriptionPlans/{planId} | Update a subscription plan |


## `createSubscriptionPlanAsync()`

```php
createSubscriptionPlanAsync($tenant_id, $api_version, $x_api_version, $subscription_plan_create_dto): \OpenAPI\Client\Model\Envelope
```

Create a subscription plan

Creates a new subscription plan for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubscriptionPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$subscription_plan_create_dto = new \OpenAPI\Client\Model\SubscriptionPlanCreateDto(); // \OpenAPI\Client\Model\SubscriptionPlanCreateDto

try {
    $result = $apiInstance->createSubscriptionPlanAsync($tenant_id, $api_version, $x_api_version, $subscription_plan_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionPlansApi->createSubscriptionPlanAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **subscription_plan_create_dto** | [**\OpenAPI\Client\Model\SubscriptionPlanCreateDto**](../Model/SubscriptionPlanCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Envelope**](../Model/Envelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSubscriptionPlanAsync()`

```php
deleteSubscriptionPlanAsync($tenant_id, $plan_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Envelope
```

Delete a subscription plan

Deletes a subscription plan by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubscriptionPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$plan_id = 'plan_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteSubscriptionPlanAsync($tenant_id, $plan_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionPlansApi->deleteSubscriptionPlanAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **plan_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Envelope**](../Model/Envelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptionPlanByIdAsync()`

```php
getSubscriptionPlanByIdAsync($tenant_id, $plan_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SubscriptionPlanDtoEnvelope
```

Get a subscription plan by ID

Retrieves a subscription plan by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubscriptionPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$plan_id = 'plan_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSubscriptionPlanByIdAsync($tenant_id, $plan_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionPlansApi->getSubscriptionPlanByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **plan_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SubscriptionPlanDtoEnvelope**](../Model/SubscriptionPlanDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptionPlansAsync()`

```php
getSubscriptionPlansAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SubscriptionPlanDtoIReadOnlyListEnvelope
```

Get all subscription plans

Retrieves all subscription plans for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubscriptionPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSubscriptionPlansAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionPlansApi->getSubscriptionPlansAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SubscriptionPlanDtoIReadOnlyListEnvelope**](../Model/SubscriptionPlanDtoIReadOnlyListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptionPlansCountAsync()`

```php
getSubscriptionPlansCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get subscription plans count

Returns the count of subscription plans for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubscriptionPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSubscriptionPlansCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionPlansApi->getSubscriptionPlansCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateSubscriptionPlanAsync()`

```php
updateSubscriptionPlanAsync($tenant_id, $plan_id, $api_version, $x_api_version, $subscription_plan_update_dto): \OpenAPI\Client\Model\Envelope
```

Update a subscription plan

Updates an existing subscription plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubscriptionPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$plan_id = 'plan_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$subscription_plan_update_dto = new \OpenAPI\Client\Model\SubscriptionPlanUpdateDto(); // \OpenAPI\Client\Model\SubscriptionPlanUpdateDto

try {
    $result = $apiInstance->updateSubscriptionPlanAsync($tenant_id, $plan_id, $api_version, $x_api_version, $subscription_plan_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionPlansApi->updateSubscriptionPlanAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **plan_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **subscription_plan_update_dto** | [**\OpenAPI\Client\Model\SubscriptionPlanUpdateDto**](../Model/SubscriptionPlanUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Envelope**](../Model/Envelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
