# OpenAPI\Client\WebComponentsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countWebComponentsAsync()**](WebComponentsApi.md#countWebComponentsAsync) | **GET** /api/v2/ContentService/WebComponents/Count | Count web components |
| [**createWebComponentAsync()**](WebComponentsApi.md#createWebComponentAsync) | **POST** /api/v2/ContentService/WebComponents | Create a web component |
| [**deleteWebComponentAsync()**](WebComponentsApi.md#deleteWebComponentAsync) | **DELETE** /api/v2/ContentService/WebComponents/{webComponentId} | Delete a web component |
| [**getWebComponentByIdAsync()**](WebComponentsApi.md#getWebComponentByIdAsync) | **GET** /api/v2/ContentService/WebComponents/{webComponentId} | Get web component by ID |
| [**getWebComponentsAsync()**](WebComponentsApi.md#getWebComponentsAsync) | **GET** /api/v2/ContentService/WebComponents | Get web components |
| [**updateWebComponentAsync()**](WebComponentsApi.md#updateWebComponentAsync) | **PUT** /api/v2/ContentService/WebComponents/{webComponentId} | Update a web component |


## `countWebComponentsAsync()`

```php
countWebComponentsAsync($tenant_id, $api_version, $x_api_version, $web_component_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Count web components

Counts all web components for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$web_component_dto_collection_query_parameters = new \OpenAPI\Client\Model\WebComponentDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\WebComponentDtoCollectionQueryParameters

try {
    $result = $apiInstance->countWebComponentsAsync($tenant_id, $api_version, $x_api_version, $web_component_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebComponentsApi->countWebComponentsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **web_component_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\WebComponentDtoCollectionQueryParameters**](../Model/WebComponentDtoCollectionQueryParameters.md)|  | [optional] |

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

## `createWebComponentAsync()`

```php
createWebComponentAsync($tenant_id, $web_component_create_dto, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a web component

Creates a new web component for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$web_component_create_dto = new \OpenAPI\Client\Model\WebComponentCreateDto(); // \OpenAPI\Client\Model\WebComponentCreateDto
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->createWebComponentAsync($tenant_id, $web_component_create_dto, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebComponentsApi->createWebComponentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **web_component_create_dto** | [**\OpenAPI\Client\Model\WebComponentCreateDto**](../Model/WebComponentCreateDto.md)|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

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

## `deleteWebComponentAsync()`

```php
deleteWebComponentAsync($tenant_id, $web_component_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a web component

Deletes a web component for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$web_component_id = 'web_component_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteWebComponentAsync($tenant_id, $web_component_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebComponentsApi->deleteWebComponentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **web_component_id** | **string**|  | |
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

## `getWebComponentByIdAsync()`

```php
getWebComponentByIdAsync($tenant_id, $web_component_id, $api_version, $x_api_version): \OpenAPI\Client\Model\WebComponentDtoEnvelope
```

Get web component by ID

Retrieves a specific web component by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$web_component_id = 'web_component_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getWebComponentByIdAsync($tenant_id, $web_component_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebComponentsApi->getWebComponentByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **web_component_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WebComponentDtoEnvelope**](../Model/WebComponentDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebComponentsAsync()`

```php
getWebComponentsAsync($tenant_id, $api_version, $x_api_version, $web_component_dto_collection_query_parameters): \OpenAPI\Client\Model\WebComponentDtoListEnvelope
```

Get web components

Retrieves all web components for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$web_component_dto_collection_query_parameters = new \OpenAPI\Client\Model\WebComponentDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\WebComponentDtoCollectionQueryParameters

try {
    $result = $apiInstance->getWebComponentsAsync($tenant_id, $api_version, $x_api_version, $web_component_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebComponentsApi->getWebComponentsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **web_component_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\WebComponentDtoCollectionQueryParameters**](../Model/WebComponentDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WebComponentDtoListEnvelope**](../Model/WebComponentDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWebComponentAsync()`

```php
updateWebComponentAsync($tenant_id, $web_component_id, $web_component_update_dto, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a web component

Updates an existing web component for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$web_component_id = 'web_component_id_example'; // string
$web_component_update_dto = new \OpenAPI\Client\Model\WebComponentUpdateDto(); // \OpenAPI\Client\Model\WebComponentUpdateDto
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->updateWebComponentAsync($tenant_id, $web_component_id, $web_component_update_dto, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebComponentsApi->updateWebComponentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **web_component_id** | **string**|  | |
| **web_component_update_dto** | [**\OpenAPI\Client\Model\WebComponentUpdateDto**](../Model/WebComponentUpdateDto.md)|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

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
