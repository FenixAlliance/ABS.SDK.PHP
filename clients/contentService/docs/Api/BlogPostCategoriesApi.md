# OpenAPI\Client\BlogPostCategoriesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countBlogPostCategoriesAsync()**](BlogPostCategoriesApi.md#countBlogPostCategoriesAsync) | **GET** /api/v2/ContentService/BlogPostCategories/Count | Count blog post categories |
| [**createBlogPostCategoryAsync()**](BlogPostCategoriesApi.md#createBlogPostCategoryAsync) | **POST** /api/v2/ContentService/BlogPostCategories | Create a blog post category |
| [**deleteBlogPostCategoryAsync()**](BlogPostCategoriesApi.md#deleteBlogPostCategoryAsync) | **DELETE** /api/v2/ContentService/BlogPostCategories/{blogPostCategoryId} | Delete a blog post category |
| [**getBlogPostCategoriesAsync()**](BlogPostCategoriesApi.md#getBlogPostCategoriesAsync) | **GET** /api/v2/ContentService/BlogPostCategories | Get blog post categories |
| [**getBlogPostCategoryByIdAsync()**](BlogPostCategoriesApi.md#getBlogPostCategoryByIdAsync) | **GET** /api/v2/ContentService/BlogPostCategories/{blogPostCategoryId} | Get blog post category by ID |
| [**updateBlogPostCategoryAsync()**](BlogPostCategoriesApi.md#updateBlogPostCategoryAsync) | **PUT** /api/v2/ContentService/BlogPostCategories/{blogPostCategoryId} | Update a blog post category |


## `countBlogPostCategoriesAsync()`

```php
countBlogPostCategoriesAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Count blog post categories

Counts all blog post categories for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlogPostCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->countBlogPostCategoriesAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogPostCategoriesApi->countBlogPostCategoriesAsync: ', $e->getMessage(), PHP_EOL;
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

## `createBlogPostCategoryAsync()`

```php
createBlogPostCategoryAsync($tenant_id, $api_version, $x_api_version, $blog_post_category_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a blog post category

Creates a new blog post category for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlogPostCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$blog_post_category_create_dto = new \OpenAPI\Client\Model\BlogPostCategoryCreateDto(); // \OpenAPI\Client\Model\BlogPostCategoryCreateDto

try {
    $result = $apiInstance->createBlogPostCategoryAsync($tenant_id, $api_version, $x_api_version, $blog_post_category_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogPostCategoriesApi->createBlogPostCategoryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **blog_post_category_create_dto** | [**\OpenAPI\Client\Model\BlogPostCategoryCreateDto**](../Model/BlogPostCategoryCreateDto.md)|  | [optional] |

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

## `deleteBlogPostCategoryAsync()`

```php
deleteBlogPostCategoryAsync($tenant_id, $blog_post_category_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a blog post category

Deletes a blog post category for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlogPostCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$blog_post_category_id = 'blog_post_category_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteBlogPostCategoryAsync($tenant_id, $blog_post_category_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogPostCategoriesApi->deleteBlogPostCategoryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **blog_post_category_id** | **string**|  | |
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

## `getBlogPostCategoriesAsync()`

```php
getBlogPostCategoriesAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\BlogPostCategoryDtoListEnvelope
```

Get blog post categories

Retrieves all blog post categories for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlogPostCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getBlogPostCategoriesAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogPostCategoriesApi->getBlogPostCategoriesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BlogPostCategoryDtoListEnvelope**](../Model/BlogPostCategoryDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBlogPostCategoryByIdAsync()`

```php
getBlogPostCategoryByIdAsync($tenant_id, $blog_post_category_id, $api_version, $x_api_version): \OpenAPI\Client\Model\BlogPostCategoryDtoEnvelope
```

Get blog post category by ID

Retrieves a specific blog post category by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlogPostCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$blog_post_category_id = 'blog_post_category_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getBlogPostCategoryByIdAsync($tenant_id, $blog_post_category_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogPostCategoriesApi->getBlogPostCategoryByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **blog_post_category_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BlogPostCategoryDtoEnvelope**](../Model/BlogPostCategoryDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBlogPostCategoryAsync()`

```php
updateBlogPostCategoryAsync($tenant_id, $blog_post_category_id, $api_version, $x_api_version, $blog_post_category_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a blog post category

Updates an existing blog post category for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlogPostCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$blog_post_category_id = 'blog_post_category_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$blog_post_category_update_dto = new \OpenAPI\Client\Model\BlogPostCategoryUpdateDto(); // \OpenAPI\Client\Model\BlogPostCategoryUpdateDto

try {
    $result = $apiInstance->updateBlogPostCategoryAsync($tenant_id, $blog_post_category_id, $api_version, $x_api_version, $blog_post_category_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogPostCategoriesApi->updateBlogPostCategoryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **blog_post_category_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **blog_post_category_update_dto** | [**\OpenAPI\Client\Model\BlogPostCategoryUpdateDto**](../Model/BlogPostCategoryUpdateDto.md)|  | [optional] |

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
