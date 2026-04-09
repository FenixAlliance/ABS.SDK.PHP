# OpenAPI\Client\SupportEntitlementsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSupportEntitlementAsync()**](SupportEntitlementsApi.md#createSupportEntitlementAsync) | **POST** /api/v2/SupportService/SupportEntitlements | Create a new support entitlement |
| [**deleteSupportEntitlementAsync()**](SupportEntitlementsApi.md#deleteSupportEntitlementAsync) | **DELETE** /api/v2/SupportService/SupportEntitlements/{supportEntitlementId} | Delete a support entitlement |
| [**getSupportEntitlementAsync()**](SupportEntitlementsApi.md#getSupportEntitlementAsync) | **GET** /api/v2/SupportService/SupportEntitlements/{supportEntitlementId} | Retrieve a support entitlement by ID |
| [**getSupportEntitlementsAsync()**](SupportEntitlementsApi.md#getSupportEntitlementsAsync) | **GET** /api/v2/SupportService/SupportEntitlements | Retrieve a list of support entitlements |
| [**getSupportEntitlementsCountAsync()**](SupportEntitlementsApi.md#getSupportEntitlementsCountAsync) | **GET** /api/v2/SupportService/SupportEntitlements/Count | Get the count of support entitlements |
| [**updateSupportEntitlementAsync()**](SupportEntitlementsApi.md#updateSupportEntitlementAsync) | **PUT** /api/v2/SupportService/SupportEntitlements/{supportEntitlementId} | Update a support entitlement |


## `createSupportEntitlementAsync()`

```php
createSupportEntitlementAsync($tenant_id, $api_version, $x_api_version, $support_entitlement_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a new support entitlement

Creates a new support entitlement for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupportEntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$support_entitlement_create_dto = new \OpenAPI\Client\Model\SupportEntitlementCreateDto(); // \OpenAPI\Client\Model\SupportEntitlementCreateDto

try {
    $result = $apiInstance->createSupportEntitlementAsync($tenant_id, $api_version, $x_api_version, $support_entitlement_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportEntitlementsApi->createSupportEntitlementAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **support_entitlement_create_dto** | [**\OpenAPI\Client\Model\SupportEntitlementCreateDto**](../Model/SupportEntitlementCreateDto.md)|  | [optional] |

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

## `deleteSupportEntitlementAsync()`

```php
deleteSupportEntitlementAsync($tenant_id, $support_entitlement_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a support entitlement

Deletes a support entitlement by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupportEntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$support_entitlement_id = 'support_entitlement_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteSupportEntitlementAsync($tenant_id, $support_entitlement_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportEntitlementsApi->deleteSupportEntitlementAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **support_entitlement_id** | **string**|  | |
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

## `getSupportEntitlementAsync()`

```php
getSupportEntitlementAsync($tenant_id, $support_entitlement_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SupportEntitlementDtoEnvelope
```

Retrieve a support entitlement by ID

Retrieves a single support entitlement by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupportEntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$support_entitlement_id = 'support_entitlement_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSupportEntitlementAsync($tenant_id, $support_entitlement_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportEntitlementsApi->getSupportEntitlementAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **support_entitlement_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SupportEntitlementDtoEnvelope**](../Model/SupportEntitlementDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSupportEntitlementsAsync()`

```php
getSupportEntitlementsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SupportEntitlementDtoListEnvelope
```

Retrieve a list of support entitlements

Retrieves a list of support entitlements for the specified tenant with OData query support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupportEntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSupportEntitlementsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportEntitlementsApi->getSupportEntitlementsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SupportEntitlementDtoListEnvelope**](../Model/SupportEntitlementDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSupportEntitlementsCountAsync()`

```php
getSupportEntitlementsCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get the count of support entitlements

Returns the total count of support entitlements for the specified tenant with OData query support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupportEntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSupportEntitlementsCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportEntitlementsApi->getSupportEntitlementsCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateSupportEntitlementAsync()`

```php
updateSupportEntitlementAsync($tenant_id, $support_entitlement_id, $api_version, $x_api_version, $support_entitlement_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a support entitlement

Updates an existing support entitlement by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupportEntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$support_entitlement_id = 'support_entitlement_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$support_entitlement_update_dto = new \OpenAPI\Client\Model\SupportEntitlementUpdateDto(); // \OpenAPI\Client\Model\SupportEntitlementUpdateDto

try {
    $result = $apiInstance->updateSupportEntitlementAsync($tenant_id, $support_entitlement_id, $api_version, $x_api_version, $support_entitlement_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportEntitlementsApi->updateSupportEntitlementAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **support_entitlement_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **support_entitlement_update_dto** | [**\OpenAPI\Client\Model\SupportEntitlementUpdateDto**](../Model/SupportEntitlementUpdateDto.md)|  | [optional] |

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
