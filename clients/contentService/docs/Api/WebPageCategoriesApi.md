# OpenAPI\Client\WebPageCategoriesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countWebPageCategoriesAsync()**](WebPageCategoriesApi.md#countWebPageCategoriesAsync) | **GET** /api/v2/ContentService/WebPageCategories/Count | Count web page categories |
| [**createWebPageCategoryAsync()**](WebPageCategoriesApi.md#createWebPageCategoryAsync) | **POST** /api/v2/ContentService/WebPageCategories | Create a web page category |
| [**deleteWebPageCategoryAsync()**](WebPageCategoriesApi.md#deleteWebPageCategoryAsync) | **DELETE** /api/v2/ContentService/WebPageCategories/{webPageCategoryId} | Delete a web page category |
| [**getWebPageCategoriesAsync()**](WebPageCategoriesApi.md#getWebPageCategoriesAsync) | **GET** /api/v2/ContentService/WebPageCategories | Get web page categories |
| [**getWebPageCategoryByIdAsync()**](WebPageCategoriesApi.md#getWebPageCategoryByIdAsync) | **GET** /api/v2/ContentService/WebPageCategories/{webPageCategoryId} | Get web page category by ID |
| [**updateWebPageCategoryAsync()**](WebPageCategoriesApi.md#updateWebPageCategoryAsync) | **PUT** /api/v2/ContentService/WebPageCategories/{webPageCategoryId} | Update a web page category |


## `countWebPageCategoriesAsync()`

```php
countWebPageCategoriesAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Count web page categories

Counts all web page categories for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebPageCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->countWebPageCategoriesAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebPageCategoriesApi->countWebPageCategoriesAsync: ', $e->getMessage(), PHP_EOL;
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

## `createWebPageCategoryAsync()`

```php
createWebPageCategoryAsync($tenant_id, $api_version, $x_api_version, $web_page_category_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a web page category

Creates a new web page category for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebPageCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$web_page_category_create_dto = new \OpenAPI\Client\Model\WebPageCategoryCreateDto(); // \OpenAPI\Client\Model\WebPageCategoryCreateDto

try {
    $result = $apiInstance->createWebPageCategoryAsync($tenant_id, $api_version, $x_api_version, $web_page_category_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebPageCategoriesApi->createWebPageCategoryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **web_page_category_create_dto** | [**\OpenAPI\Client\Model\WebPageCategoryCreateDto**](../Model/WebPageCategoryCreateDto.md)|  | [optional] |

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

## `deleteWebPageCategoryAsync()`

```php
deleteWebPageCategoryAsync($tenant_id, $web_page_category_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a web page category

Deletes a web page category for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebPageCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$web_page_category_id = 'web_page_category_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteWebPageCategoryAsync($tenant_id, $web_page_category_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebPageCategoriesApi->deleteWebPageCategoryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **web_page_category_id** | **string**|  | |
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

## `getWebPageCategoriesAsync()`

```php
getWebPageCategoriesAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\WebPageCategoryDtoListEnvelope
```

Get web page categories

Retrieves all web page categories for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebPageCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getWebPageCategoriesAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebPageCategoriesApi->getWebPageCategoriesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WebPageCategoryDtoListEnvelope**](../Model/WebPageCategoryDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebPageCategoryByIdAsync()`

```php
getWebPageCategoryByIdAsync($tenant_id, $web_page_category_id, $api_version, $x_api_version): \OpenAPI\Client\Model\WebPageCategoryDtoEnvelope
```

Get web page category by ID

Retrieves a specific web page category by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebPageCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$web_page_category_id = 'web_page_category_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getWebPageCategoryByIdAsync($tenant_id, $web_page_category_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebPageCategoriesApi->getWebPageCategoryByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **web_page_category_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WebPageCategoryDtoEnvelope**](../Model/WebPageCategoryDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWebPageCategoryAsync()`

```php
updateWebPageCategoryAsync($tenant_id, $web_page_category_id, $api_version, $x_api_version, $web_page_category_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a web page category

Updates an existing web page category for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebPageCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$web_page_category_id = 'web_page_category_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$web_page_category_update_dto = new \OpenAPI\Client\Model\WebPageCategoryUpdateDto(); // \OpenAPI\Client\Model\WebPageCategoryUpdateDto

try {
    $result = $apiInstance->updateWebPageCategoryAsync($tenant_id, $web_page_category_id, $api_version, $x_api_version, $web_page_category_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebPageCategoriesApi->updateWebPageCategoryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **web_page_category_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **web_page_category_update_dto** | [**\OpenAPI\Client\Model\WebPageCategoryUpdateDto**](../Model/WebPageCategoryUpdateDto.md)|  | [optional] |

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
