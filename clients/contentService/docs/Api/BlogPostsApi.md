# OpenAPI\Client\BlogPostsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBlogPostAsync()**](BlogPostsApi.md#createBlogPostAsync) | **POST** /api/v2/ContentService/BlogPosts | Create a new blog post |
| [**createCategoryForBlogPostAsync()**](BlogPostsApi.md#createCategoryForBlogPostAsync) | **POST** /api/v2/ContentService/BlogPosts/{blogPostId}/Categories | Create a category for a blog post |
| [**createCommentForBlogPostAsync()**](BlogPostsApi.md#createCommentForBlogPostAsync) | **POST** /api/v2/ContentService/BlogPosts/{blogPostId}/Comments | Create a comment for a blog post |
| [**createTagForBlogPostAsync()**](BlogPostsApi.md#createTagForBlogPostAsync) | **POST** /api/v2/ContentService/BlogPosts/{blogPostId}/Tags | Create a tag for a blog post |
| [**deleteBlogPostAsync()**](BlogPostsApi.md#deleteBlogPostAsync) | **DELETE** /api/v2/ContentService/BlogPosts/{blogPostId} | Delete a blog post |
| [**deleteCommentFromBlogPostAsync()**](BlogPostsApi.md#deleteCommentFromBlogPostAsync) | **DELETE** /api/v2/ContentService/BlogPosts/{blogPostId}/Comments/{commentId} | Delete a blog post comment |
| [**getBlogPostByIdAsync()**](BlogPostsApi.md#getBlogPostByIdAsync) | **GET** /api/v2/ContentService/BlogPosts/{blogPostId} | Get a blog post by ID |
| [**getBlogPostsAsync()**](BlogPostsApi.md#getBlogPostsAsync) | **GET** /api/v2/ContentService/BlogPosts | Retrieve a list of blog posts |
| [**getBlogPostsCountAsync()**](BlogPostsApi.md#getBlogPostsCountAsync) | **GET** /api/v2/ContentService/BlogPosts/Count | Get the count of blog posts |
| [**getCategoriesForBlogPostAsync()**](BlogPostsApi.md#getCategoriesForBlogPostAsync) | **GET** /api/v2/ContentService/BlogPosts/{blogPostId}/Categories | Get categories for a blog post |
| [**getCommentsForBlogPostAsync()**](BlogPostsApi.md#getCommentsForBlogPostAsync) | **GET** /api/v2/ContentService/BlogPosts/{blogPostId}/Comments | Get comments for a blog post |
| [**getRepliesForCommentAsync()**](BlogPostsApi.md#getRepliesForCommentAsync) | **GET** /api/v2/ContentService/BlogPosts/{blogPostId}/Comments/{commentId}/Replies | Get replies for a comment |
| [**getTagsForBlogPostAsync()**](BlogPostsApi.md#getTagsForBlogPostAsync) | **GET** /api/v2/ContentService/BlogPosts/{blogPostId}/Tags | Get tags for a blog post |
| [**relateCategoryToBlogPostAsync()**](BlogPostsApi.md#relateCategoryToBlogPostAsync) | **POST** /api/v2/ContentService/BlogPosts/{blogPostId}/Categories/{categoryId} | Relate an existing category to a blog post |
| [**relateTagToBlogPostAsync()**](BlogPostsApi.md#relateTagToBlogPostAsync) | **POST** /api/v2/ContentService/BlogPosts/{blogPostId}/Tags/{tagId} | Relate an existing tag to a blog post |
| [**replyToCommentAsync()**](BlogPostsApi.md#replyToCommentAsync) | **POST** /api/v2/ContentService/BlogPosts/{blogPostId}/Comments/{commentId}/Reply | Reply to a blog post comment |
| [**unrelateCategoryFromBlogPostAsync()**](BlogPostsApi.md#unrelateCategoryFromBlogPostAsync) | **DELETE** /api/v2/ContentService/BlogPosts/{blogPostId}/Categories/{categoryId} | Remove a category from a blog post |
| [**unrelateTagFromBlogPostAsync()**](BlogPostsApi.md#unrelateTagFromBlogPostAsync) | **DELETE** /api/v2/ContentService/BlogPosts/{blogPostId}/Tags/{tagId} | Remove a tag from a blog post |
| [**updateBlogPostAsync()**](BlogPostsApi.md#updateBlogPostAsync) | **PUT** /api/v2/ContentService/BlogPosts/{blogPostId} | Update a blog post |


## `createBlogPostAsync()`

```php
createBlogPostAsync($tenant_id, $blog_post_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a new blog post

Creates a new blog post for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlogPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$blog_post_create_dto = new \OpenAPI\Client\Model\BlogPostCreateDto(); // \OpenAPI\Client\Model\BlogPostCreateDto

try {
    $result = $apiInstance->createBlogPostAsync($tenant_id, $blog_post_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogPostsApi->createBlogPostAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **blog_post_create_dto** | [**\OpenAPI\Client\Model\BlogPostCreateDto**](../Model/BlogPostCreateDto.md)|  | [optional] |

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

## `createCategoryForBlogPostAsync()`

```php
createCategoryForBlogPostAsync($tenant_id, $blog_post_id, $blog_post_category_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a category for a blog post

Creates a new category and relates it to a specific blog post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlogPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$blog_post_id = 'blog_post_id_example'; // string
$blog_post_category_create_dto = new \OpenAPI\Client\Model\BlogPostCategoryCreateDto(); // \OpenAPI\Client\Model\BlogPostCategoryCreateDto

try {
    $result = $apiInstance->createCategoryForBlogPostAsync($tenant_id, $blog_post_id, $blog_post_category_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogPostsApi->createCategoryForBlogPostAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **blog_post_id** | **string**|  | |
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

## `createCommentForBlogPostAsync()`

```php
createCommentForBlogPostAsync($tenant_id, $blog_post_id, $blog_post_comment_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a comment for a blog post

Creates a new comment on a specific blog post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlogPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$blog_post_id = 'blog_post_id_example'; // string
$blog_post_comment_create_dto = new \OpenAPI\Client\Model\BlogPostCommentCreateDto(); // \OpenAPI\Client\Model\BlogPostCommentCreateDto

try {
    $result = $apiInstance->createCommentForBlogPostAsync($tenant_id, $blog_post_id, $blog_post_comment_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogPostsApi->createCommentForBlogPostAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **blog_post_id** | **string**|  | |
| **blog_post_comment_create_dto** | [**\OpenAPI\Client\Model\BlogPostCommentCreateDto**](../Model/BlogPostCommentCreateDto.md)|  | [optional] |

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

## `createTagForBlogPostAsync()`

```php
createTagForBlogPostAsync($tenant_id, $blog_post_id, $blog_post_tag_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a tag for a blog post

Creates a new tag and relates it to a specific blog post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlogPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$blog_post_id = 'blog_post_id_example'; // string
$blog_post_tag_create_dto = new \OpenAPI\Client\Model\BlogPostTagCreateDto(); // \OpenAPI\Client\Model\BlogPostTagCreateDto

try {
    $result = $apiInstance->createTagForBlogPostAsync($tenant_id, $blog_post_id, $blog_post_tag_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogPostsApi->createTagForBlogPostAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **blog_post_id** | **string**|  | |
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

## `deleteBlogPostAsync()`

```php
deleteBlogPostAsync($tenant_id, $blog_post_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a blog post

Deletes a blog post for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlogPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$blog_post_id = 'blog_post_id_example'; // string

try {
    $result = $apiInstance->deleteBlogPostAsync($tenant_id, $blog_post_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogPostsApi->deleteBlogPostAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **blog_post_id** | **string**|  | |

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

## `deleteCommentFromBlogPostAsync()`

```php
deleteCommentFromBlogPostAsync($tenant_id, $blog_post_id, $comment_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a blog post comment

Deletes a comment from a specific blog post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlogPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$blog_post_id = 'blog_post_id_example'; // string
$comment_id = 'comment_id_example'; // string

try {
    $result = $apiInstance->deleteCommentFromBlogPostAsync($tenant_id, $blog_post_id, $comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogPostsApi->deleteCommentFromBlogPostAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **blog_post_id** | **string**|  | |
| **comment_id** | **string**|  | |

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

## `getBlogPostByIdAsync()`

```php
getBlogPostByIdAsync($blog_post_id): \OpenAPI\Client\Model\BlogPostDtoEnvelope
```

Get a blog post by ID

Retrieves a single blog post by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlogPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$blog_post_id = 'blog_post_id_example'; // string

try {
    $result = $apiInstance->getBlogPostByIdAsync($blog_post_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogPostsApi->getBlogPostByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blog_post_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\BlogPostDtoEnvelope**](../Model/BlogPostDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBlogPostsAsync()`

```php
getBlogPostsAsync($tenant_id): \OpenAPI\Client\Model\BlogPostDtoListEnvelope
```

Retrieve a list of blog posts

Retrieves all blog posts, optionally filtered by tenant using OData query options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlogPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getBlogPostsAsync($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogPostsApi->getBlogPostsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BlogPostDtoListEnvelope**](../Model/BlogPostDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBlogPostsCountAsync()`

```php
getBlogPostsCountAsync($tenant_id): \OpenAPI\Client\Model\Int32Envelope
```

Get the count of blog posts

Returns the total count of blog posts, optionally filtered by tenant using OData query options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlogPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getBlogPostsCountAsync($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogPostsApi->getBlogPostsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | [optional] |

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

## `getCategoriesForBlogPostAsync()`

```php
getCategoriesForBlogPostAsync($blog_post_id): \OpenAPI\Client\Model\BlogPostCategoryDtoListEnvelope
```

Get categories for a blog post

Retrieves all categories related to a specific blog post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlogPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$blog_post_id = 'blog_post_id_example'; // string

try {
    $result = $apiInstance->getCategoriesForBlogPostAsync($blog_post_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogPostsApi->getCategoriesForBlogPostAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blog_post_id** | **string**|  | |

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

## `getCommentsForBlogPostAsync()`

```php
getCommentsForBlogPostAsync($blog_post_id): \OpenAPI\Client\Model\BlogPostCommentDtoListEnvelope
```

Get comments for a blog post

Retrieves all comments for a specific blog post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlogPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$blog_post_id = 'blog_post_id_example'; // string

try {
    $result = $apiInstance->getCommentsForBlogPostAsync($blog_post_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogPostsApi->getCommentsForBlogPostAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blog_post_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\BlogPostCommentDtoListEnvelope**](../Model/BlogPostCommentDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRepliesForCommentAsync()`

```php
getRepliesForCommentAsync($comment_id, $blog_post_id): \OpenAPI\Client\Model\BlogPostCommentDtoListEnvelope
```

Get replies for a comment

Retrieves all replies for a specific blog post comment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlogPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$comment_id = 'comment_id_example'; // string
$blog_post_id = 'blog_post_id_example'; // string

try {
    $result = $apiInstance->getRepliesForCommentAsync($comment_id, $blog_post_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogPostsApi->getRepliesForCommentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **comment_id** | **string**|  | |
| **blog_post_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\BlogPostCommentDtoListEnvelope**](../Model/BlogPostCommentDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTagsForBlogPostAsync()`

```php
getTagsForBlogPostAsync($blog_post_id): \OpenAPI\Client\Model\BlogPostTagDtoListEnvelope
```

Get tags for a blog post

Retrieves all tags related to a specific blog post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlogPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$blog_post_id = 'blog_post_id_example'; // string

try {
    $result = $apiInstance->getTagsForBlogPostAsync($blog_post_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogPostsApi->getTagsForBlogPostAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blog_post_id** | **string**|  | |

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

## `relateCategoryToBlogPostAsync()`

```php
relateCategoryToBlogPostAsync($tenant_id, $blog_post_id, $category_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Relate an existing category to a blog post

Creates a relationship between an existing category and a blog post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlogPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$blog_post_id = 'blog_post_id_example'; // string
$category_id = 'category_id_example'; // string

try {
    $result = $apiInstance->relateCategoryToBlogPostAsync($tenant_id, $blog_post_id, $category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogPostsApi->relateCategoryToBlogPostAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **blog_post_id** | **string**|  | |
| **category_id** | **string**|  | |

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

## `relateTagToBlogPostAsync()`

```php
relateTagToBlogPostAsync($tenant_id, $blog_post_id, $tag_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Relate an existing tag to a blog post

Creates a relationship between an existing tag and a blog post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlogPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$blog_post_id = 'blog_post_id_example'; // string
$tag_id = 'tag_id_example'; // string

try {
    $result = $apiInstance->relateTagToBlogPostAsync($tenant_id, $blog_post_id, $tag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogPostsApi->relateTagToBlogPostAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **blog_post_id** | **string**|  | |
| **tag_id** | **string**|  | |

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

## `replyToCommentAsync()`

```php
replyToCommentAsync($tenant_id, $blog_post_id, $comment_id, $blog_post_comment_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Reply to a blog post comment

Creates a reply to an existing comment on a blog post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlogPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$blog_post_id = 'blog_post_id_example'; // string
$comment_id = 'comment_id_example'; // string
$blog_post_comment_create_dto = new \OpenAPI\Client\Model\BlogPostCommentCreateDto(); // \OpenAPI\Client\Model\BlogPostCommentCreateDto

try {
    $result = $apiInstance->replyToCommentAsync($tenant_id, $blog_post_id, $comment_id, $blog_post_comment_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogPostsApi->replyToCommentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **blog_post_id** | **string**|  | |
| **comment_id** | **string**|  | |
| **blog_post_comment_create_dto** | [**\OpenAPI\Client\Model\BlogPostCommentCreateDto**](../Model/BlogPostCommentCreateDto.md)|  | [optional] |

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

## `unrelateCategoryFromBlogPostAsync()`

```php
unrelateCategoryFromBlogPostAsync($tenant_id, $blog_post_id, $category_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Remove a category from a blog post

Removes the relationship between a category and a blog post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlogPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$blog_post_id = 'blog_post_id_example'; // string
$category_id = 'category_id_example'; // string

try {
    $result = $apiInstance->unrelateCategoryFromBlogPostAsync($tenant_id, $blog_post_id, $category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogPostsApi->unrelateCategoryFromBlogPostAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **blog_post_id** | **string**|  | |
| **category_id** | **string**|  | |

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

## `unrelateTagFromBlogPostAsync()`

```php
unrelateTagFromBlogPostAsync($tenant_id, $blog_post_id, $tag_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Remove a tag from a blog post

Removes the relationship between a tag and a blog post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlogPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$blog_post_id = 'blog_post_id_example'; // string
$tag_id = 'tag_id_example'; // string

try {
    $result = $apiInstance->unrelateTagFromBlogPostAsync($tenant_id, $blog_post_id, $tag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogPostsApi->unrelateTagFromBlogPostAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **blog_post_id** | **string**|  | |
| **tag_id** | **string**|  | |

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

## `updateBlogPostAsync()`

```php
updateBlogPostAsync($tenant_id, $blog_post_id, $blog_post_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a blog post

Updates an existing blog post for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlogPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$blog_post_id = 'blog_post_id_example'; // string
$blog_post_update_dto = new \OpenAPI\Client\Model\BlogPostUpdateDto(); // \OpenAPI\Client\Model\BlogPostUpdateDto

try {
    $result = $apiInstance->updateBlogPostAsync($tenant_id, $blog_post_id, $blog_post_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogPostsApi->updateBlogPostAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **blog_post_id** | **string**|  | |
| **blog_post_update_dto** | [**\OpenAPI\Client\Model\BlogPostUpdateDto**](../Model/BlogPostUpdateDto.md)|  | [optional] |

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
