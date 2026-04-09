# OpenAPI\Client\WebTemplatesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countWebTemplatesAsync()**](WebTemplatesApi.md#countWebTemplatesAsync) | **GET** /api/v2/ContentService/WebTemplates/Count | Count web templates |
| [**createWebTemplateAsync()**](WebTemplatesApi.md#createWebTemplateAsync) | **POST** /api/v2/ContentService/WebTemplates | Create a web template |
| [**deleteWebTemplateAsync()**](WebTemplatesApi.md#deleteWebTemplateAsync) | **DELETE** /api/v2/ContentService/WebTemplates/{webTemplateId} | Delete a web template |
| [**getWebTemplateByIdAsync()**](WebTemplatesApi.md#getWebTemplateByIdAsync) | **GET** /api/v2/ContentService/WebTemplates/{webTemplateId} | Get web template by ID |
| [**getWebTemplatesAsync()**](WebTemplatesApi.md#getWebTemplatesAsync) | **GET** /api/v2/ContentService/WebTemplates | Get web templates |
| [**updateWebTemplateAsync()**](WebTemplatesApi.md#updateWebTemplateAsync) | **PUT** /api/v2/ContentService/WebTemplates/{webTemplateId} | Update a web template |


## `countWebTemplatesAsync()`

```php
countWebTemplatesAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Count web templates

Counts all web templates for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->countWebTemplatesAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebTemplatesApi->countWebTemplatesAsync: ', $e->getMessage(), PHP_EOL;
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

## `createWebTemplateAsync()`

```php
createWebTemplateAsync($tenant_id, $api_version, $x_api_version, $web_template_create_dto)
```

Create a web template

Creates a new web template for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$web_template_create_dto = new \OpenAPI\Client\Model\WebTemplateCreateDto(); // \OpenAPI\Client\Model\WebTemplateCreateDto

try {
    $apiInstance->createWebTemplateAsync($tenant_id, $api_version, $x_api_version, $web_template_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling WebTemplatesApi->createWebTemplateAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **web_template_create_dto** | [**\OpenAPI\Client\Model\WebTemplateCreateDto**](../Model/WebTemplateCreateDto.md)|  | [optional] |

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

## `deleteWebTemplateAsync()`

```php
deleteWebTemplateAsync($tenant_id, $web_template_id, $api_version, $x_api_version)
```

Delete a web template

Deletes a web template for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$web_template_id = 'web_template_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteWebTemplateAsync($tenant_id, $web_template_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling WebTemplatesApi->deleteWebTemplateAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **web_template_id** | **string**|  | |
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

## `getWebTemplateByIdAsync()`

```php
getWebTemplateByIdAsync($tenant_id, $web_template_id, $api_version, $x_api_version): \OpenAPI\Client\Model\WebTemplateDtoEnvelope
```

Get web template by ID

Retrieves a specific web template by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$web_template_id = 'web_template_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getWebTemplateByIdAsync($tenant_id, $web_template_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebTemplatesApi->getWebTemplateByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **web_template_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WebTemplateDtoEnvelope**](../Model/WebTemplateDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebTemplatesAsync()`

```php
getWebTemplatesAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\WebTemplateDtoListEnvelope
```

Get web templates

Retrieves all web templates for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getWebTemplatesAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebTemplatesApi->getWebTemplatesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WebTemplateDtoListEnvelope**](../Model/WebTemplateDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWebTemplateAsync()`

```php
updateWebTemplateAsync($tenant_id, $web_template_id, $api_version, $x_api_version, $web_template_update_dto)
```

Update a web template

Updates an existing web template for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$web_template_id = 'web_template_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$web_template_update_dto = new \OpenAPI\Client\Model\WebTemplateUpdateDto(); // \OpenAPI\Client\Model\WebTemplateUpdateDto

try {
    $apiInstance->updateWebTemplateAsync($tenant_id, $web_template_id, $api_version, $x_api_version, $web_template_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling WebTemplatesApi->updateWebTemplateAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **web_template_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **web_template_update_dto** | [**\OpenAPI\Client\Model\WebTemplateUpdateDto**](../Model/WebTemplateUpdateDto.md)|  | [optional] |

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
