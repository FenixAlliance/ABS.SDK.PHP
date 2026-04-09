# OpenAPI\Client\BlogPostTagsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBlogPostTagAsync()**](BlogPostTagsApi.md#createBlogPostTagAsync) | **POST** /api/v2/ContentService/BlogPostTags | Create a blog post tag |
| [**deleteBlogPostTagAsync()**](BlogPostTagsApi.md#deleteBlogPostTagAsync) | **DELETE** /api/v2/ContentService/BlogPostTags/{blogPostTagId} | Delete a blog post tag |
| [**getBlogPostTagByIdAsync()**](BlogPostTagsApi.md#getBlogPostTagByIdAsync) | **GET** /api/v2/ContentService/BlogPostTags/{blogPostTagId} | Get blog post tag by ID |
| [**getBlogPostTagsAsync()**](BlogPostTagsApi.md#getBlogPostTagsAsync) | **GET** /api/v2/ContentService/BlogPostTags | Get blog post tags |
| [**updateBlogPostTagAsync()**](BlogPostTagsApi.md#updateBlogPostTagAsync) | **PUT** /api/v2/ContentService/BlogPostTags/{blogPostTagId} | Update a blog post tag |


## `createBlogPostTagAsync()`

```php
createBlogPostTagAsync($tenant_id, $api_version, $x_api_version, $blog_post_tag_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a blog post tag

Creates a new blog post tag for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlogPostTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$blog_post_tag_create_dto = new \OpenAPI\Client\Model\BlogPostTagCreateDto(); // \OpenAPI\Client\Model\BlogPostTagCreateDto

try {
    $result = $apiInstance->createBlogPostTagAsync($tenant_id, $api_version, $x_api_version, $blog_post_tag_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogPostTagsApi->createBlogPostTagAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **blog_post_tag_create_dto** | [**\OpenAPI\Client\Model\BlogPostTagCreateDto**](../Model/BlogPostTagCreateDto.md)|  | [optional] |

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

## `deleteBlogPostTagAsync()`

```php
deleteBlogPostTagAsync($tenant_id, $blog_post_tag_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a blog post tag

Deletes a blog post tag for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlogPostTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$blog_post_tag_id = 'blog_post_tag_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteBlogPostTagAsync($tenant_id, $blog_post_tag_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogPostTagsApi->deleteBlogPostTagAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **blog_post_tag_id** | **string**|  | |
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

## `getBlogPostTagByIdAsync()`

```php
getBlogPostTagByIdAsync($tenant_id, $blog_post_tag_id, $api_version, $x_api_version): \OpenAPI\Client\Model\BlogPostTagDtoEnvelope
```

Get blog post tag by ID

Retrieves a specific blog post tag by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlogPostTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$blog_post_tag_id = 'blog_post_tag_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getBlogPostTagByIdAsync($tenant_id, $blog_post_tag_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogPostTagsApi->getBlogPostTagByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **blog_post_tag_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BlogPostTagDtoEnvelope**](../Model/BlogPostTagDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBlogPostTagsAsync()`

```php
getBlogPostTagsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\BlogPostTagDtoListEnvelope
```

Get blog post tags

Retrieves all blog post tags for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlogPostTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getBlogPostTagsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogPostTagsApi->getBlogPostTagsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BlogPostTagDtoListEnvelope**](../Model/BlogPostTagDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBlogPostTagAsync()`

```php
updateBlogPostTagAsync($tenant_id, $blog_post_tag_id, $api_version, $x_api_version, $blog_post_tag_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a blog post tag

Updates an existing blog post tag for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlogPostTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$blog_post_tag_id = 'blog_post_tag_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$blog_post_tag_update_dto = new \OpenAPI\Client\Model\BlogPostTagUpdateDto(); // \OpenAPI\Client\Model\BlogPostTagUpdateDto

try {
    $result = $apiInstance->updateBlogPostTagAsync($tenant_id, $blog_post_tag_id, $api_version, $x_api_version, $blog_post_tag_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogPostTagsApi->updateBlogPostTagAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **blog_post_tag_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **blog_post_tag_update_dto** | [**\OpenAPI\Client\Model\BlogPostTagUpdateDto**](../Model/BlogPostTagUpdateDto.md)|  | [optional] |

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
