# OpenAPI\Client\WebPageTagsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWebPageTagAsync()**](WebPageTagsApi.md#createWebPageTagAsync) | **POST** /api/v2/ContentService/WebPageTags | Create a web page tag |
| [**deleteWebPageTagAsync()**](WebPageTagsApi.md#deleteWebPageTagAsync) | **DELETE** /api/v2/ContentService/WebPageTags/{webPageTagId} | Delete a web page tag |
| [**getWebPageTagByIdAsync()**](WebPageTagsApi.md#getWebPageTagByIdAsync) | **GET** /api/v2/ContentService/WebPageTags/{webPageTagId} | Get web page tag by ID |
| [**getWebPageTagsAsync()**](WebPageTagsApi.md#getWebPageTagsAsync) | **GET** /api/v2/ContentService/WebPageTags | Get web page tags |
| [**updateWebPageTagAsync()**](WebPageTagsApi.md#updateWebPageTagAsync) | **PUT** /api/v2/ContentService/WebPageTags/{webPageTagId} | Update a web page tag |


## `createWebPageTagAsync()`

```php
createWebPageTagAsync($tenant_id, $api_version, $x_api_version, $web_page_tag_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a web page tag

Creates a new web page tag for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebPageTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$web_page_tag_create_dto = new \OpenAPI\Client\Model\WebPageTagCreateDto(); // \OpenAPI\Client\Model\WebPageTagCreateDto

try {
    $result = $apiInstance->createWebPageTagAsync($tenant_id, $api_version, $x_api_version, $web_page_tag_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebPageTagsApi->createWebPageTagAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **web_page_tag_create_dto** | [**\OpenAPI\Client\Model\WebPageTagCreateDto**](../Model/WebPageTagCreateDto.md)|  | [optional] |

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

## `deleteWebPageTagAsync()`

```php
deleteWebPageTagAsync($tenant_id, $web_page_tag_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a web page tag

Deletes a web page tag for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebPageTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$web_page_tag_id = 'web_page_tag_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteWebPageTagAsync($tenant_id, $web_page_tag_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebPageTagsApi->deleteWebPageTagAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **web_page_tag_id** | **string**|  | |
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

## `getWebPageTagByIdAsync()`

```php
getWebPageTagByIdAsync($tenant_id, $web_page_tag_id, $api_version, $x_api_version): \OpenAPI\Client\Model\WebPageTagDtoEnvelope
```

Get web page tag by ID

Retrieves a specific web page tag by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebPageTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$web_page_tag_id = 'web_page_tag_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getWebPageTagByIdAsync($tenant_id, $web_page_tag_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebPageTagsApi->getWebPageTagByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **web_page_tag_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WebPageTagDtoEnvelope**](../Model/WebPageTagDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebPageTagsAsync()`

```php
getWebPageTagsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\WebPageTagDtoListEnvelope
```

Get web page tags

Retrieves all web page tags for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebPageTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getWebPageTagsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebPageTagsApi->getWebPageTagsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WebPageTagDtoListEnvelope**](../Model/WebPageTagDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWebPageTagAsync()`

```php
updateWebPageTagAsync($tenant_id, $web_page_tag_id, $api_version, $x_api_version, $web_page_tag_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a web page tag

Updates an existing web page tag for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebPageTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$web_page_tag_id = 'web_page_tag_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$web_page_tag_update_dto = new \OpenAPI\Client\Model\WebPageTagUpdateDto(); // \OpenAPI\Client\Model\WebPageTagUpdateDto

try {
    $result = $apiInstance->updateWebPageTagAsync($tenant_id, $web_page_tag_id, $api_version, $x_api_version, $web_page_tag_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebPageTagsApi->updateWebPageTagAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **web_page_tag_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **web_page_tag_update_dto** | [**\OpenAPI\Client\Model\WebPageTagUpdateDto**](../Model/WebPageTagUpdateDto.md)|  | [optional] |

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
