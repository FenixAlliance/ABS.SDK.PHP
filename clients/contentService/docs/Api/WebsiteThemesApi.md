# OpenAPI\Client\WebsiteThemesApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWebsiteThemeAsync()**](WebsiteThemesApi.md#createWebsiteThemeAsync) | **POST** /api/v2/ContentService/WebsiteThemes | Create a new website theme |
| [**deleteWebsiteThemeAsync()**](WebsiteThemesApi.md#deleteWebsiteThemeAsync) | **DELETE** /api/v2/ContentService/WebsiteThemes/{id} | Delete a website theme |
| [**getWebsiteThemeByIdAsync()**](WebsiteThemesApi.md#getWebsiteThemeByIdAsync) | **GET** /api/v2/ContentService/WebsiteThemes/{id} | Get website theme by ID |
| [**getWebsiteThemesAsync()**](WebsiteThemesApi.md#getWebsiteThemesAsync) | **GET** /api/v2/ContentService/WebsiteThemes | Get all website themes |
| [**getWebsiteThemesCountAsync()**](WebsiteThemesApi.md#getWebsiteThemesCountAsync) | **GET** /api/v2/ContentService/WebsiteThemes/Count | Get website themes count |
| [**patchWebsiteThemeAsync()**](WebsiteThemesApi.md#patchWebsiteThemeAsync) | **PATCH** /api/v2/ContentService/WebsiteThemes/{id} | Patch a website theme |
| [**updateWebsiteThemeAsync()**](WebsiteThemesApi.md#updateWebsiteThemeAsync) | **PUT** /api/v2/ContentService/WebsiteThemes/{id} | Update a website theme |


## `createWebsiteThemeAsync()`

```php
createWebsiteThemeAsync($tenant_id, $api_version, $x_api_version, $website_theme_create_dto)
```

Create a new website theme

Creates a new website theme for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebsiteThemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$website_theme_create_dto = new \OpenAPI\Client\Model\WebsiteThemeCreateDto(); // \OpenAPI\Client\Model\WebsiteThemeCreateDto

try {
    $apiInstance->createWebsiteThemeAsync($tenant_id, $api_version, $x_api_version, $website_theme_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling WebsiteThemesApi->createWebsiteThemeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **website_theme_create_dto** | [**\OpenAPI\Client\Model\WebsiteThemeCreateDto**](../Model/WebsiteThemeCreateDto.md)|  | [optional] |

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

## `deleteWebsiteThemeAsync()`

```php
deleteWebsiteThemeAsync($tenant_id, $id, $api_version, $x_api_version)
```

Delete a website theme

Deletes a website theme for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebsiteThemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteWebsiteThemeAsync($tenant_id, $id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling WebsiteThemesApi->deleteWebsiteThemeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
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

## `getWebsiteThemeByIdAsync()`

```php
getWebsiteThemeByIdAsync($tenant_id, $id, $api_version, $x_api_version): \OpenAPI\Client\Model\WebsiteThemeDto
```

Get website theme by ID

Retrieves a specific website theme by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebsiteThemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getWebsiteThemeByIdAsync($tenant_id, $id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebsiteThemesApi->getWebsiteThemeByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WebsiteThemeDto**](../Model/WebsiteThemeDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsiteThemesAsync()`

```php
getWebsiteThemesAsync($tenant_id, $api_version, $x_api_version, $website_theme_dto_collection_query_parameters): \OpenAPI\Client\Model\WebsiteThemeDtoListEnvelope
```

Get all website themes

Retrieves all website themes for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebsiteThemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$website_theme_dto_collection_query_parameters = new \OpenAPI\Client\Model\WebsiteThemeDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\WebsiteThemeDtoCollectionQueryParameters

try {
    $result = $apiInstance->getWebsiteThemesAsync($tenant_id, $api_version, $x_api_version, $website_theme_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebsiteThemesApi->getWebsiteThemesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **website_theme_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\WebsiteThemeDtoCollectionQueryParameters**](../Model/WebsiteThemeDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WebsiteThemeDtoListEnvelope**](../Model/WebsiteThemeDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsiteThemesCountAsync()`

```php
getWebsiteThemesCountAsync($tenant_id, $api_version, $x_api_version, $website_theme_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get website themes count

Returns the count of website themes for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebsiteThemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$website_theme_dto_collection_query_parameters = new \OpenAPI\Client\Model\WebsiteThemeDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\WebsiteThemeDtoCollectionQueryParameters

try {
    $result = $apiInstance->getWebsiteThemesCountAsync($tenant_id, $api_version, $x_api_version, $website_theme_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebsiteThemesApi->getWebsiteThemesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **website_theme_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\WebsiteThemeDtoCollectionQueryParameters**](../Model/WebsiteThemeDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchWebsiteThemeAsync()`

```php
patchWebsiteThemeAsync($tenant_id, $id, $api_version, $x_api_version, $patch_operation)
```

Patch a website theme

Partially updates an existing website theme for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebsiteThemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $apiInstance->patchWebsiteThemeAsync($tenant_id, $id, $api_version, $x_api_version, $patch_operation);
} catch (Exception $e) {
    echo 'Exception when calling WebsiteThemesApi->patchWebsiteThemeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **patch_operation** | [**\OpenAPI\Client\Model\PatchOperation[]**](../Model/PatchOperation.md)|  | [optional] |

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

## `updateWebsiteThemeAsync()`

```php
updateWebsiteThemeAsync($tenant_id, $id, $api_version, $x_api_version, $website_theme_update_dto)
```

Update a website theme

Updates an existing website theme for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebsiteThemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$website_theme_update_dto = new \OpenAPI\Client\Model\WebsiteThemeUpdateDto(); // \OpenAPI\Client\Model\WebsiteThemeUpdateDto

try {
    $apiInstance->updateWebsiteThemeAsync($tenant_id, $id, $api_version, $x_api_version, $website_theme_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling WebsiteThemesApi->updateWebsiteThemeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **website_theme_update_dto** | [**\OpenAPI\Client\Model\WebsiteThemeUpdateDto**](../Model/WebsiteThemeUpdateDto.md)|  | [optional] |

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
