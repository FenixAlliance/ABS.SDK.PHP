# OpenAPI\Client\WebPagesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countWebPagesAsync()**](WebPagesApi.md#countWebPagesAsync) | **GET** /api/v2/ContentService/WebPages/Count | Count web pages |
| [**createWebPageAsync()**](WebPagesApi.md#createWebPageAsync) | **POST** /api/v2/ContentService/WebPages | Create a web page |
| [**createWebPageCategoryRelationAsync()**](WebPagesApi.md#createWebPageCategoryRelationAsync) | **POST** /api/v2/ContentService/WebPages/{webPageId}/Categories | Create a web page category relation |
| [**createWebPageTagRelationAsync()**](WebPagesApi.md#createWebPageTagRelationAsync) | **POST** /api/v2/ContentService/WebPages/{webPageId}/Tags | Create a web page tag relation |
| [**deleteWebPageAsync()**](WebPagesApi.md#deleteWebPageAsync) | **DELETE** /api/v2/ContentService/WebPages/{webPageId} | Delete a web page |
| [**getCategoriesByWebPageAsync()**](WebPagesApi.md#getCategoriesByWebPageAsync) | **GET** /api/v2/ContentService/WebPages/{webPageId}/Categories | Get categories by web page |
| [**getTagsByWebPageAsync()**](WebPagesApi.md#getTagsByWebPageAsync) | **GET** /api/v2/ContentService/WebPages/{webPageId}/Tags | Get tags by web page |
| [**getWebPageByIdAsync()**](WebPagesApi.md#getWebPageByIdAsync) | **GET** /api/v2/ContentService/WebPages/{webPageId} | Get web page by ID |
| [**getWebPagesAsync()**](WebPagesApi.md#getWebPagesAsync) | **GET** /api/v2/ContentService/WebPages | Get web pages |
| [**relateWebPageToCategoryAsync()**](WebPagesApi.md#relateWebPageToCategoryAsync) | **POST** /api/v2/ContentService/WebPages/{webPageId}/Categories/{categoryId} | Relate web page to category |
| [**relateWebPageToTagAsync()**](WebPagesApi.md#relateWebPageToTagAsync) | **POST** /api/v2/ContentService/WebPages/{webPageId}/Tags/{tagId} | Relate web page to tag |
| [**unrelateWebPageCategoryAsync()**](WebPagesApi.md#unrelateWebPageCategoryAsync) | **DELETE** /api/v2/ContentService/WebPages/{webPageId}/Categories/{categoryId} | Unrelate web page from category |
| [**unrelateWebPageTagAsync()**](WebPagesApi.md#unrelateWebPageTagAsync) | **DELETE** /api/v2/ContentService/WebPages/{webPageId}/Tags/{tagId} | Unrelate web page from tag |
| [**updateWebPageAsync()**](WebPagesApi.md#updateWebPageAsync) | **PUT** /api/v2/ContentService/WebPages/{webPageId} | Update a web page |


## `countWebPagesAsync()`

```php
countWebPagesAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Count web pages

Counts all web pages for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebPagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->countWebPagesAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebPagesApi->countWebPagesAsync: ', $e->getMessage(), PHP_EOL;
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

## `createWebPageAsync()`

```php
createWebPageAsync($tenant_id, $api_version, $x_api_version, $web_page_create_dto)
```

Create a web page

Creates a new web page for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebPagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$web_page_create_dto = new \OpenAPI\Client\Model\WebPageCreateDto(); // \OpenAPI\Client\Model\WebPageCreateDto

try {
    $apiInstance->createWebPageAsync($tenant_id, $api_version, $x_api_version, $web_page_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling WebPagesApi->createWebPageAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **web_page_create_dto** | [**\OpenAPI\Client\Model\WebPageCreateDto**](../Model/WebPageCreateDto.md)|  | [optional] |

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

## `createWebPageCategoryRelationAsync()`

```php
createWebPageCategoryRelationAsync($tenant_id, $web_page_id, $api_version, $x_api_version, $web_page_category_create_dto)
```

Create a web page category relation

Creates a new category and relates it to a web page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebPagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$web_page_id = 'web_page_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$web_page_category_create_dto = new \OpenAPI\Client\Model\WebPageCategoryCreateDto(); // \OpenAPI\Client\Model\WebPageCategoryCreateDto

try {
    $apiInstance->createWebPageCategoryRelationAsync($tenant_id, $web_page_id, $api_version, $x_api_version, $web_page_category_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling WebPagesApi->createWebPageCategoryRelationAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **web_page_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **web_page_category_create_dto** | [**\OpenAPI\Client\Model\WebPageCategoryCreateDto**](../Model/WebPageCategoryCreateDto.md)|  | [optional] |

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

## `createWebPageTagRelationAsync()`

```php
createWebPageTagRelationAsync($tenant_id, $web_page_id, $api_version, $x_api_version, $web_page_tag_create_dto)
```

Create a web page tag relation

Creates a new tag and relates it to a web page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebPagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$web_page_id = 'web_page_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$web_page_tag_create_dto = new \OpenAPI\Client\Model\WebPageTagCreateDto(); // \OpenAPI\Client\Model\WebPageTagCreateDto

try {
    $apiInstance->createWebPageTagRelationAsync($tenant_id, $web_page_id, $api_version, $x_api_version, $web_page_tag_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling WebPagesApi->createWebPageTagRelationAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **web_page_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **web_page_tag_create_dto** | [**\OpenAPI\Client\Model\WebPageTagCreateDto**](../Model/WebPageTagCreateDto.md)|  | [optional] |

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

## `deleteWebPageAsync()`

```php
deleteWebPageAsync($tenant_id, $web_page_id, $api_version, $x_api_version)
```

Delete a web page

Deletes a web page for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebPagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$web_page_id = 'web_page_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteWebPageAsync($tenant_id, $web_page_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling WebPagesApi->deleteWebPageAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **web_page_id** | **string**|  | |
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

## `getCategoriesByWebPageAsync()`

```php
getCategoriesByWebPageAsync($web_page_id, $api_version, $x_api_version): \OpenAPI\Client\Model\WebPageCategoryDtoListEnvelope
```

Get categories by web page

Retrieves all categories related to a specific web page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebPagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$web_page_id = 'web_page_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCategoriesByWebPageAsync($web_page_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebPagesApi->getCategoriesByWebPageAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **web_page_id** | **string**|  | |
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

## `getTagsByWebPageAsync()`

```php
getTagsByWebPageAsync($web_page_id, $api_version, $x_api_version): \OpenAPI\Client\Model\WebPageTagDtoListEnvelope
```

Get tags by web page

Retrieves all tags related to a specific web page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebPagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$web_page_id = 'web_page_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTagsByWebPageAsync($web_page_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebPagesApi->getTagsByWebPageAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **web_page_id** | **string**|  | |
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

## `getWebPageByIdAsync()`

```php
getWebPageByIdAsync($tenant_id, $web_page_id, $api_version, $x_api_version): \OpenAPI\Client\Model\WebPageDtoEnvelope
```

Get web page by ID

Retrieves a specific web page by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebPagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$web_page_id = 'web_page_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getWebPageByIdAsync($tenant_id, $web_page_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebPagesApi->getWebPageByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **web_page_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WebPageDtoEnvelope**](../Model/WebPageDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebPagesAsync()`

```php
getWebPagesAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\WebPageDtoListEnvelope
```

Get web pages

Retrieves all web pages for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebPagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getWebPagesAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebPagesApi->getWebPagesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WebPageDtoListEnvelope**](../Model/WebPageDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `relateWebPageToCategoryAsync()`

```php
relateWebPageToCategoryAsync($tenant_id, $web_page_id, $category_id, $api_version, $x_api_version)
```

Relate web page to category

Relates an existing category to a web page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebPagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$web_page_id = 'web_page_id_example'; // string
$category_id = 'category_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->relateWebPageToCategoryAsync($tenant_id, $web_page_id, $category_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling WebPagesApi->relateWebPageToCategoryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **web_page_id** | **string**|  | |
| **category_id** | **string**|  | |
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

## `relateWebPageToTagAsync()`

```php
relateWebPageToTagAsync($tenant_id, $web_page_id, $tag_id, $api_version, $x_api_version)
```

Relate web page to tag

Relates an existing tag to a web page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebPagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$web_page_id = 'web_page_id_example'; // string
$tag_id = 'tag_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->relateWebPageToTagAsync($tenant_id, $web_page_id, $tag_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling WebPagesApi->relateWebPageToTagAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **web_page_id** | **string**|  | |
| **tag_id** | **string**|  | |
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

## `unrelateWebPageCategoryAsync()`

```php
unrelateWebPageCategoryAsync($tenant_id, $web_page_id, $category_id, $api_version, $x_api_version)
```

Unrelate web page from category

Removes the relationship between a web page and a category.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebPagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$web_page_id = 'web_page_id_example'; // string
$category_id = 'category_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->unrelateWebPageCategoryAsync($tenant_id, $web_page_id, $category_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling WebPagesApi->unrelateWebPageCategoryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **web_page_id** | **string**|  | |
| **category_id** | **string**|  | |
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

## `unrelateWebPageTagAsync()`

```php
unrelateWebPageTagAsync($tenant_id, $web_page_id, $tag_id, $api_version, $x_api_version)
```

Unrelate web page from tag

Removes the relationship between a web page and a tag.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebPagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$web_page_id = 'web_page_id_example'; // string
$tag_id = 'tag_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->unrelateWebPageTagAsync($tenant_id, $web_page_id, $tag_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling WebPagesApi->unrelateWebPageTagAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **web_page_id** | **string**|  | |
| **tag_id** | **string**|  | |
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

## `updateWebPageAsync()`

```php
updateWebPageAsync($tenant_id, $web_page_id, $api_version, $x_api_version, $web_page_update_dto)
```

Update a web page

Updates an existing web page for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebPagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$web_page_id = 'web_page_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$web_page_update_dto = new \OpenAPI\Client\Model\WebPageUpdateDto(); // \OpenAPI\Client\Model\WebPageUpdateDto

try {
    $apiInstance->updateWebPageAsync($tenant_id, $web_page_id, $api_version, $x_api_version, $web_page_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling WebPagesApi->updateWebPageAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **web_page_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **web_page_update_dto** | [**\OpenAPI\Client\Model\WebPageUpdateDto**](../Model/WebPageUpdateDto.md)|  | [optional] |

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
