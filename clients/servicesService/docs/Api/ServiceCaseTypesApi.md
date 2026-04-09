# OpenAPI\Client\ServiceCaseTypesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createServiceCaseTypeAsync()**](ServiceCaseTypesApi.md#createServiceCaseTypeAsync) | **POST** /api/v2/ServicesService/ServiceCaseTypes | Create a service case type |
| [**deleteServiceCaseTypeAsync()**](ServiceCaseTypesApi.md#deleteServiceCaseTypeAsync) | **DELETE** /api/v2/ServicesService/ServiceCaseTypes/{serviceCaseTypeId} | Delete a service case type |
| [**getServiceCaseTypeByIdAsync()**](ServiceCaseTypesApi.md#getServiceCaseTypeByIdAsync) | **GET** /api/v2/ServicesService/ServiceCaseTypes/{serviceCaseTypeId} | Get a service case type by ID |
| [**getServiceCaseTypesAsync()**](ServiceCaseTypesApi.md#getServiceCaseTypesAsync) | **GET** /api/v2/ServicesService/ServiceCaseTypes | Get all service case types |
| [**getServiceCaseTypesCountAsync()**](ServiceCaseTypesApi.md#getServiceCaseTypesCountAsync) | **GET** /api/v2/ServicesService/ServiceCaseTypes/Count | Get service case types count |
| [**updateServiceCaseTypeAsync()**](ServiceCaseTypesApi.md#updateServiceCaseTypeAsync) | **PUT** /api/v2/ServicesService/ServiceCaseTypes/{serviceCaseTypeId} | Update a service case type |


## `createServiceCaseTypeAsync()`

```php
createServiceCaseTypeAsync($tenant_id, $api_version, $x_api_version, $service_case_type_create_dto): \OpenAPI\Client\Model\Envelope
```

Create a service case type

Creates a new service case type for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ServiceCaseTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$service_case_type_create_dto = new \OpenAPI\Client\Model\ServiceCaseTypeCreateDto(); // \OpenAPI\Client\Model\ServiceCaseTypeCreateDto

try {
    $result = $apiInstance->createServiceCaseTypeAsync($tenant_id, $api_version, $x_api_version, $service_case_type_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceCaseTypesApi->createServiceCaseTypeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **service_case_type_create_dto** | [**\OpenAPI\Client\Model\ServiceCaseTypeCreateDto**](../Model/ServiceCaseTypeCreateDto.md)|  | [optional] |

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

## `deleteServiceCaseTypeAsync()`

```php
deleteServiceCaseTypeAsync($tenant_id, $service_case_type_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Envelope
```

Delete a service case type

Deletes a service case type by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ServiceCaseTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$service_case_type_id = 'service_case_type_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteServiceCaseTypeAsync($tenant_id, $service_case_type_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceCaseTypesApi->deleteServiceCaseTypeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **service_case_type_id** | **string**|  | |
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

## `getServiceCaseTypeByIdAsync()`

```php
getServiceCaseTypeByIdAsync($tenant_id, $service_case_type_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ServiceCaseTypeDtoEnvelope
```

Get a service case type by ID

Retrieves a service case type by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ServiceCaseTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$service_case_type_id = 'service_case_type_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getServiceCaseTypeByIdAsync($tenant_id, $service_case_type_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceCaseTypesApi->getServiceCaseTypeByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **service_case_type_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ServiceCaseTypeDtoEnvelope**](../Model/ServiceCaseTypeDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServiceCaseTypesAsync()`

```php
getServiceCaseTypesAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ServiceCaseTypeDtoIReadOnlyListEnvelope
```

Get all service case types

Retrieves all service case types for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ServiceCaseTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getServiceCaseTypesAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceCaseTypesApi->getServiceCaseTypesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ServiceCaseTypeDtoIReadOnlyListEnvelope**](../Model/ServiceCaseTypeDtoIReadOnlyListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServiceCaseTypesCountAsync()`

```php
getServiceCaseTypesCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get service case types count

Returns the count of service case types for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ServiceCaseTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getServiceCaseTypesCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceCaseTypesApi->getServiceCaseTypesCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateServiceCaseTypeAsync()`

```php
updateServiceCaseTypeAsync($tenant_id, $service_case_type_id, $api_version, $x_api_version, $service_case_type_update_dto): \OpenAPI\Client\Model\Envelope
```

Update a service case type

Updates an existing service case type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ServiceCaseTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$service_case_type_id = 'service_case_type_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$service_case_type_update_dto = new \OpenAPI\Client\Model\ServiceCaseTypeUpdateDto(); // \OpenAPI\Client\Model\ServiceCaseTypeUpdateDto

try {
    $result = $apiInstance->updateServiceCaseTypeAsync($tenant_id, $service_case_type_id, $api_version, $x_api_version, $service_case_type_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceCaseTypesApi->updateServiceCaseTypeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **service_case_type_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **service_case_type_update_dto** | [**\OpenAPI\Client\Model\ServiceCaseTypeUpdateDto**](../Model/ServiceCaseTypeUpdateDto.md)|  | [optional] |

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
