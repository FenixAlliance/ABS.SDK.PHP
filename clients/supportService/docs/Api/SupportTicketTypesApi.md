# OpenAPI\Client\SupportTicketTypesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSupportTicketTypeAsync()**](SupportTicketTypesApi.md#createSupportTicketTypeAsync) | **POST** /api/v2/SupportService/SupportTicketTypes | Create a new support ticket type |
| [**deleteSupportTicketTypeAsync()**](SupportTicketTypesApi.md#deleteSupportTicketTypeAsync) | **DELETE** /api/v2/SupportService/SupportTicketTypes/{supportTicketTypeId} | Delete a support ticket type |
| [**getSupportTicketTypeAsync()**](SupportTicketTypesApi.md#getSupportTicketTypeAsync) | **GET** /api/v2/SupportService/SupportTicketTypes/{supportTicketTypeId} | Retrieve a support ticket type by ID |
| [**getSupportTicketTypesAsync()**](SupportTicketTypesApi.md#getSupportTicketTypesAsync) | **GET** /api/v2/SupportService/SupportTicketTypes | Retrieve a list of support ticket types |
| [**getSupportTicketTypesCountAsync()**](SupportTicketTypesApi.md#getSupportTicketTypesCountAsync) | **GET** /api/v2/SupportService/SupportTicketTypes/Count | Get the count of support ticket types |
| [**updateSupportTicketTypeAsync()**](SupportTicketTypesApi.md#updateSupportTicketTypeAsync) | **PUT** /api/v2/SupportService/SupportTicketTypes/{supportTicketTypeId} | Update a support ticket type |


## `createSupportTicketTypeAsync()`

```php
createSupportTicketTypeAsync($tenant_id, $api_version, $x_api_version, $support_ticket_type_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a new support ticket type

Creates a new support ticket type for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupportTicketTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$support_ticket_type_create_dto = new \OpenAPI\Client\Model\SupportTicketTypeCreateDto(); // \OpenAPI\Client\Model\SupportTicketTypeCreateDto

try {
    $result = $apiInstance->createSupportTicketTypeAsync($tenant_id, $api_version, $x_api_version, $support_ticket_type_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportTicketTypesApi->createSupportTicketTypeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **support_ticket_type_create_dto** | [**\OpenAPI\Client\Model\SupportTicketTypeCreateDto**](../Model/SupportTicketTypeCreateDto.md)|  | [optional] |

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

## `deleteSupportTicketTypeAsync()`

```php
deleteSupportTicketTypeAsync($tenant_id, $support_ticket_type_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a support ticket type

Deletes a support ticket type by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupportTicketTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$support_ticket_type_id = 'support_ticket_type_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteSupportTicketTypeAsync($tenant_id, $support_ticket_type_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportTicketTypesApi->deleteSupportTicketTypeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **support_ticket_type_id** | **string**|  | |
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

## `getSupportTicketTypeAsync()`

```php
getSupportTicketTypeAsync($tenant_id, $support_ticket_type_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SupportTicketTypeDtoEnvelope
```

Retrieve a support ticket type by ID

Retrieves a single support ticket type by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupportTicketTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$support_ticket_type_id = 'support_ticket_type_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSupportTicketTypeAsync($tenant_id, $support_ticket_type_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportTicketTypesApi->getSupportTicketTypeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **support_ticket_type_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SupportTicketTypeDtoEnvelope**](../Model/SupportTicketTypeDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSupportTicketTypesAsync()`

```php
getSupportTicketTypesAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SupportTicketTypeDtoListEnvelope
```

Retrieve a list of support ticket types

Retrieves a list of support ticket types for the specified tenant with OData query support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupportTicketTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSupportTicketTypesAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportTicketTypesApi->getSupportTicketTypesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SupportTicketTypeDtoListEnvelope**](../Model/SupportTicketTypeDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSupportTicketTypesCountAsync()`

```php
getSupportTicketTypesCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get the count of support ticket types

Returns the total count of support ticket types for the specified tenant with OData query support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupportTicketTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSupportTicketTypesCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportTicketTypesApi->getSupportTicketTypesCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateSupportTicketTypeAsync()`

```php
updateSupportTicketTypeAsync($tenant_id, $support_ticket_type_id, $api_version, $x_api_version, $support_ticket_type_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a support ticket type

Updates an existing support ticket type by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupportTicketTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$support_ticket_type_id = 'support_ticket_type_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$support_ticket_type_update_dto = new \OpenAPI\Client\Model\SupportTicketTypeUpdateDto(); // \OpenAPI\Client\Model\SupportTicketTypeUpdateDto

try {
    $result = $apiInstance->updateSupportTicketTypeAsync($tenant_id, $support_ticket_type_id, $api_version, $x_api_version, $support_ticket_type_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportTicketTypesApi->updateSupportTicketTypeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **support_ticket_type_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **support_ticket_type_update_dto** | [**\OpenAPI\Client\Model\SupportTicketTypeUpdateDto**](../Model/SupportTicketTypeUpdateDto.md)|  | [optional] |

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
