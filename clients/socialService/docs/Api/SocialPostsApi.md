# OpenAPI\Client\SocialPostsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSocialCommentReactionAsync()**](SocialPostsApi.md#createSocialCommentReactionAsync) | **POST** /api/v2/SocialService/SocialPosts/{socialPostId}/Comments/{commentId}/Reactions | Create a social comment reaction |
| [**createSocialPostAsync()**](SocialPostsApi.md#createSocialPostAsync) | **POST** /api/v2/SocialService/SocialPosts | Create a social post |
| [**createSocialPostAttachmentAsync()**](SocialPostsApi.md#createSocialPostAttachmentAsync) | **POST** /api/v2/SocialService/SocialPosts/{socialPostId}/Attachments | Create a social post attachment |
| [**createSocialPostCommentAsync()**](SocialPostsApi.md#createSocialPostCommentAsync) | **POST** /api/v2/SocialService/SocialPosts/{socialPostId}/Comments | Create a social post comment |
| [**createSocialPostReactionAsync()**](SocialPostsApi.md#createSocialPostReactionAsync) | **POST** /api/v2/SocialService/SocialPosts/{socialPostId}/Reactions | Create a social post reaction |
| [**deleteSocialCommentReactionAsync()**](SocialPostsApi.md#deleteSocialCommentReactionAsync) | **DELETE** /api/v2/SocialService/SocialPosts/{socialPostId}/Comments/{commentId}/Reactions/{reactionId} | Delete a social comment reaction |
| [**deleteSocialPostAsync()**](SocialPostsApi.md#deleteSocialPostAsync) | **DELETE** /api/v2/SocialService/SocialPosts/{socialPostId} | Delete a social post |
| [**deleteSocialPostAttachmentAsync()**](SocialPostsApi.md#deleteSocialPostAttachmentAsync) | **DELETE** /api/v2/SocialService/SocialPosts/{socialPostId}/Attachments/{attachmentId} | Delete a social post attachment |
| [**deleteSocialPostCommentAsync()**](SocialPostsApi.md#deleteSocialPostCommentAsync) | **DELETE** /api/v2/SocialService/SocialPosts/{socialPostId}/Comments/{commentId} | Delete a social post comment |
| [**deleteSocialPostReactionAsync()**](SocialPostsApi.md#deleteSocialPostReactionAsync) | **DELETE** /api/v2/SocialService/SocialPosts/{socialPostId}/Reactions/{reactionId} | Delete a social post reaction |
| [**getSocialCommentReactionAsync()**](SocialPostsApi.md#getSocialCommentReactionAsync) | **GET** /api/v2/SocialService/SocialPosts/{socialPostId}/Comments/{commentId}/Reactions/{reactionId} | Get social comment reaction by ID |
| [**getSocialCommentReactionsAsync()**](SocialPostsApi.md#getSocialCommentReactionsAsync) | **GET** /api/v2/SocialService/SocialPosts/{socialPostId}/Comments/{commentId}/Reactions | Get social comment reactions |
| [**getSocialCommentReactionsCountAsync()**](SocialPostsApi.md#getSocialCommentReactionsCountAsync) | **GET** /api/v2/SocialService/SocialPosts/{socialPostId}/Comments/{commentId}/Reactions/Count | Count social comment reactions |
| [**getSocialPostAsync()**](SocialPostsApi.md#getSocialPostAsync) | **GET** /api/v2/SocialService/SocialPosts/{socialPostId} | Get social post by ID |
| [**getSocialPostAttachmentAsync()**](SocialPostsApi.md#getSocialPostAttachmentAsync) | **GET** /api/v2/SocialService/SocialPosts/{socialPostId}/Attachments/{attachmentId} | Get social post attachment by ID |
| [**getSocialPostAttachmentsAsync()**](SocialPostsApi.md#getSocialPostAttachmentsAsync) | **GET** /api/v2/SocialService/SocialPosts/{socialPostId}/Attachments | Get social post attachments |
| [**getSocialPostAttachmentsCountAsync()**](SocialPostsApi.md#getSocialPostAttachmentsCountAsync) | **GET** /api/v2/SocialService/SocialPosts/{socialPostId}/Attachments/Count | Count social post attachments |
| [**getSocialPostCommentAsync()**](SocialPostsApi.md#getSocialPostCommentAsync) | **GET** /api/v2/SocialService/SocialPosts/{socialPostId}/Comments/{commentId} | Get social post comment by ID |
| [**getSocialPostCommentsAsync()**](SocialPostsApi.md#getSocialPostCommentsAsync) | **GET** /api/v2/SocialService/SocialPosts/{socialPostId}/Comments | Get social post comments |
| [**getSocialPostCommentsCountAsync()**](SocialPostsApi.md#getSocialPostCommentsCountAsync) | **GET** /api/v2/SocialService/SocialPosts/{socialPostId}/Comments/Count | Count social post comments |
| [**getSocialPostReactionAsync()**](SocialPostsApi.md#getSocialPostReactionAsync) | **GET** /api/v2/SocialService/SocialPosts/{socialPostId}/Reactions/{reactionId} | Get social post reaction by ID |
| [**getSocialPostReactionsAsync()**](SocialPostsApi.md#getSocialPostReactionsAsync) | **GET** /api/v2/SocialService/SocialPosts/{socialPostId}/Reactions | Get social post reactions |
| [**getSocialPostReactionsCountAsync()**](SocialPostsApi.md#getSocialPostReactionsCountAsync) | **GET** /api/v2/SocialService/SocialPosts/{socialPostId}/Reactions/Count | Count social post reactions |
| [**getSocialPostsAsync()**](SocialPostsApi.md#getSocialPostsAsync) | **GET** /api/v2/SocialService/SocialPosts | Get social posts |
| [**getSocialPostsCountAsync()**](SocialPostsApi.md#getSocialPostsCountAsync) | **GET** /api/v2/SocialService/SocialPosts/Count | Count social posts |
| [**patchSocialPostAsync()**](SocialPostsApi.md#patchSocialPostAsync) | **PATCH** /api/v2/SocialService/SocialPosts/{socialPostId} | Patch a social post |
| [**updateSocialCommentReactionAsync()**](SocialPostsApi.md#updateSocialCommentReactionAsync) | **PUT** /api/v2/SocialService/SocialPosts/{socialPostId}/Comments/{commentId}/Reactions/{reactionId} | Update a social comment reaction |
| [**updateSocialPostAsync()**](SocialPostsApi.md#updateSocialPostAsync) | **PUT** /api/v2/SocialService/SocialPosts/{socialPostId} | Update a social post |
| [**updateSocialPostAttachmentAsync()**](SocialPostsApi.md#updateSocialPostAttachmentAsync) | **PUT** /api/v2/SocialService/SocialPosts/{socialPostId}/Attachments/{attachmentId} | Update a social post attachment |
| [**updateSocialPostCommentAsync()**](SocialPostsApi.md#updateSocialPostCommentAsync) | **PUT** /api/v2/SocialService/SocialPosts/{socialPostId}/Comments/{commentId} | Update a social post comment |
| [**updateSocialPostReactionAsync()**](SocialPostsApi.md#updateSocialPostReactionAsync) | **PUT** /api/v2/SocialService/SocialPosts/{socialPostId}/Reactions/{reactionId} | Update a social post reaction |
| [**uploadSocialPostImageAttachmentAsync()**](SocialPostsApi.md#uploadSocialPostImageAttachmentAsync) | **POST** /api/v2/SocialService/SocialPosts/{socialPostId}/Attachments/Image | Upload a social post image attachment |


## `createSocialCommentReactionAsync()`

```php
createSocialCommentReactionAsync($social_post_id, $comment_id, $social_profile_id, $api_version, $x_api_version, $social_reaction_create_dto): \OpenAPI\Client\Model\SocialCommentReactionDtoEnvelope
```

Create a social comment reaction

Creates a new reaction on a specific social comment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_post_id = 'social_post_id_example'; // string
$comment_id = 'comment_id_example'; // string
$social_profile_id = 'social_profile_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$social_reaction_create_dto = new \OpenAPI\Client\Model\SocialReactionCreateDto(); // \OpenAPI\Client\Model\SocialReactionCreateDto

try {
    $result = $apiInstance->createSocialCommentReactionAsync($social_post_id, $comment_id, $social_profile_id, $api_version, $x_api_version, $social_reaction_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostsApi->createSocialCommentReactionAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_post_id** | **string**|  | |
| **comment_id** | **string**|  | |
| **social_profile_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **social_reaction_create_dto** | [**\OpenAPI\Client\Model\SocialReactionCreateDto**](../Model/SocialReactionCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SocialCommentReactionDtoEnvelope**](../Model/SocialCommentReactionDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSocialPostAsync()`

```php
createSocialPostAsync($social_profile_id, $api_version, $x_api_version, $social_post_create_dto): \OpenAPI\Client\Model\SocialPostDtoEnvelope
```

Create a social post

Creates a new social post for the specified social profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_profile_id = 'social_profile_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$social_post_create_dto = new \OpenAPI\Client\Model\SocialPostCreateDto(); // \OpenAPI\Client\Model\SocialPostCreateDto

try {
    $result = $apiInstance->createSocialPostAsync($social_profile_id, $api_version, $x_api_version, $social_post_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostsApi->createSocialPostAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_profile_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **social_post_create_dto** | [**\OpenAPI\Client\Model\SocialPostCreateDto**](../Model/SocialPostCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SocialPostDtoEnvelope**](../Model/SocialPostDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSocialPostAttachmentAsync()`

```php
createSocialPostAttachmentAsync($social_post_id, $social_profile_id, $api_version, $x_api_version, $social_post_attachment_create_dto): \OpenAPI\Client\Model\SocialPostAttachmentDtoEnvelope
```

Create a social post attachment

Creates a new attachment for a specific social post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_post_id = 'social_post_id_example'; // string
$social_profile_id = 'social_profile_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$social_post_attachment_create_dto = new \OpenAPI\Client\Model\SocialPostAttachmentCreateDto(); // \OpenAPI\Client\Model\SocialPostAttachmentCreateDto

try {
    $result = $apiInstance->createSocialPostAttachmentAsync($social_post_id, $social_profile_id, $api_version, $x_api_version, $social_post_attachment_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostsApi->createSocialPostAttachmentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_post_id** | **string**|  | |
| **social_profile_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **social_post_attachment_create_dto** | [**\OpenAPI\Client\Model\SocialPostAttachmentCreateDto**](../Model/SocialPostAttachmentCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SocialPostAttachmentDtoEnvelope**](../Model/SocialPostAttachmentDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSocialPostCommentAsync()`

```php
createSocialPostCommentAsync($social_profile_id, $social_post_id, $api_version, $x_api_version, $social_post_comment_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a social post comment

Creates a new comment on a specific social post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_profile_id = 'social_profile_id_example'; // string
$social_post_id = 'social_post_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$social_post_comment_create_dto = new \OpenAPI\Client\Model\SocialPostCommentCreateDto(); // \OpenAPI\Client\Model\SocialPostCommentCreateDto

try {
    $result = $apiInstance->createSocialPostCommentAsync($social_profile_id, $social_post_id, $api_version, $x_api_version, $social_post_comment_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostsApi->createSocialPostCommentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_profile_id** | **string**|  | |
| **social_post_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **social_post_comment_create_dto** | [**\OpenAPI\Client\Model\SocialPostCommentCreateDto**](../Model/SocialPostCommentCreateDto.md)|  | [optional] |

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

## `createSocialPostReactionAsync()`

```php
createSocialPostReactionAsync($social_post_id, $social_profile_id, $api_version, $x_api_version, $social_reaction_create_dto): \OpenAPI\Client\Model\SocialPostReactionDtoEnvelope
```

Create a social post reaction

Creates a new reaction on a specific social post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_post_id = 'social_post_id_example'; // string
$social_profile_id = 'social_profile_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$social_reaction_create_dto = new \OpenAPI\Client\Model\SocialReactionCreateDto(); // \OpenAPI\Client\Model\SocialReactionCreateDto

try {
    $result = $apiInstance->createSocialPostReactionAsync($social_post_id, $social_profile_id, $api_version, $x_api_version, $social_reaction_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostsApi->createSocialPostReactionAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_post_id** | **string**|  | |
| **social_profile_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **social_reaction_create_dto** | [**\OpenAPI\Client\Model\SocialReactionCreateDto**](../Model/SocialReactionCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SocialPostReactionDtoEnvelope**](../Model/SocialPostReactionDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSocialCommentReactionAsync()`

```php
deleteSocialCommentReactionAsync($social_post_id, $comment_id, $reaction_id, $social_profile_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a social comment reaction

Deletes a reaction from a specific social comment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_post_id = 'social_post_id_example'; // string
$comment_id = 'comment_id_example'; // string
$reaction_id = 'reaction_id_example'; // string
$social_profile_id = 'social_profile_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteSocialCommentReactionAsync($social_post_id, $comment_id, $reaction_id, $social_profile_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostsApi->deleteSocialCommentReactionAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_post_id** | **string**|  | |
| **comment_id** | **string**|  | |
| **reaction_id** | **string**|  | |
| **social_profile_id** | **string**|  | |
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

## `deleteSocialPostAsync()`

```php
deleteSocialPostAsync($social_profile_id, $social_post_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a social post

Deletes a social post by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_profile_id = 'social_profile_id_example'; // string
$social_post_id = 'social_post_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteSocialPostAsync($social_profile_id, $social_post_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostsApi->deleteSocialPostAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_profile_id** | **string**|  | |
| **social_post_id** | **string**|  | |
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

## `deleteSocialPostAttachmentAsync()`

```php
deleteSocialPostAttachmentAsync($social_profile_id, $social_post_id, $attachment_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a social post attachment

Deletes an attachment from a specific social post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_profile_id = 'social_profile_id_example'; // string
$social_post_id = 'social_post_id_example'; // string
$attachment_id = 'attachment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteSocialPostAttachmentAsync($social_profile_id, $social_post_id, $attachment_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostsApi->deleteSocialPostAttachmentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_profile_id** | **string**|  | |
| **social_post_id** | **string**|  | |
| **attachment_id** | **string**|  | |
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

## `deleteSocialPostCommentAsync()`

```php
deleteSocialPostCommentAsync($social_profile_id, $social_post_id, $comment_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a social post comment

Deletes a comment from a specific social post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_profile_id = 'social_profile_id_example'; // string
$social_post_id = 'social_post_id_example'; // string
$comment_id = 'comment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteSocialPostCommentAsync($social_profile_id, $social_post_id, $comment_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostsApi->deleteSocialPostCommentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_profile_id** | **string**|  | |
| **social_post_id** | **string**|  | |
| **comment_id** | **string**|  | |
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

## `deleteSocialPostReactionAsync()`

```php
deleteSocialPostReactionAsync($social_profile_id, $social_post_id, $reaction_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a social post reaction

Deletes a reaction from a specific social post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_profile_id = 'social_profile_id_example'; // string
$social_post_id = 'social_post_id_example'; // string
$reaction_id = 'reaction_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteSocialPostReactionAsync($social_profile_id, $social_post_id, $reaction_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostsApi->deleteSocialPostReactionAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_profile_id** | **string**|  | |
| **social_post_id** | **string**|  | |
| **reaction_id** | **string**|  | |
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

## `getSocialCommentReactionAsync()`

```php
getSocialCommentReactionAsync($social_post_id, $comment_id, $reaction_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SocialCommentReactionDtoEnvelope
```

Get social comment reaction by ID

Retrieves a specific reaction from a social comment by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_post_id = 'social_post_id_example'; // string
$comment_id = 'comment_id_example'; // string
$reaction_id = 'reaction_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSocialCommentReactionAsync($social_post_id, $comment_id, $reaction_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostsApi->getSocialCommentReactionAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_post_id** | **string**|  | |
| **comment_id** | **string**|  | |
| **reaction_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SocialCommentReactionDtoEnvelope**](../Model/SocialCommentReactionDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSocialCommentReactionsAsync()`

```php
getSocialCommentReactionsAsync($social_post_id, $comment_id, $social_profile_id, $api_version, $x_api_version, $social_comment_reaction_dto_collection_query_parameters): \OpenAPI\Client\Model\SocialCommentReactionDtoListEnvelope
```

Get social comment reactions

Retrieves a list of reactions for a specific social comment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_post_id = 'social_post_id_example'; // string
$comment_id = 'comment_id_example'; // string
$social_profile_id = 'social_profile_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$social_comment_reaction_dto_collection_query_parameters = new \OpenAPI\Client\Model\SocialCommentReactionDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\SocialCommentReactionDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSocialCommentReactionsAsync($social_post_id, $comment_id, $social_profile_id, $api_version, $x_api_version, $social_comment_reaction_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostsApi->getSocialCommentReactionsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_post_id** | **string**|  | |
| **comment_id** | **string**|  | |
| **social_profile_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **social_comment_reaction_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\SocialCommentReactionDtoCollectionQueryParameters**](../Model/SocialCommentReactionDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SocialCommentReactionDtoListEnvelope**](../Model/SocialCommentReactionDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSocialCommentReactionsCountAsync()`

```php
getSocialCommentReactionsCountAsync($social_post_id, $comment_id, $social_profile_id, $api_version, $x_api_version, $social_comment_reaction_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Count social comment reactions

Returns the count of reactions for a specific social comment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_post_id = 'social_post_id_example'; // string
$comment_id = 'comment_id_example'; // string
$social_profile_id = 'social_profile_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$social_comment_reaction_dto_collection_query_parameters = new \OpenAPI\Client\Model\SocialCommentReactionDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\SocialCommentReactionDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSocialCommentReactionsCountAsync($social_post_id, $comment_id, $social_profile_id, $api_version, $x_api_version, $social_comment_reaction_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostsApi->getSocialCommentReactionsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_post_id** | **string**|  | |
| **comment_id** | **string**|  | |
| **social_profile_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **social_comment_reaction_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\SocialCommentReactionDtoCollectionQueryParameters**](../Model/SocialCommentReactionDtoCollectionQueryParameters.md)|  | [optional] |

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

## `getSocialPostAsync()`

```php
getSocialPostAsync($social_profile_id, $social_post_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SocialPostDtoEnvelope
```

Get social post by ID

Retrieves a specific social post by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_profile_id = 'social_profile_id_example'; // string
$social_post_id = 'social_post_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSocialPostAsync($social_profile_id, $social_post_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostsApi->getSocialPostAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_profile_id** | **string**|  | |
| **social_post_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SocialPostDtoEnvelope**](../Model/SocialPostDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSocialPostAttachmentAsync()`

```php
getSocialPostAttachmentAsync($social_post_id, $attachment_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Get social post attachment by ID

Retrieves a specific attachment from a social post by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_post_id = 'social_post_id_example'; // string
$attachment_id = 'attachment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSocialPostAttachmentAsync($social_post_id, $attachment_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostsApi->getSocialPostAttachmentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_post_id** | **string**|  | |
| **attachment_id** | **string**|  | |
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

## `getSocialPostAttachmentsAsync()`

```php
getSocialPostAttachmentsAsync($social_post_id, $api_version, $x_api_version, $social_post_attachment_dto_collection_query_parameters): \OpenAPI\Client\Model\SocialPostAttachmentDtoListEnvelope
```

Get social post attachments

Retrieves a list of attachments for a specific social post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_post_id = 'social_post_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$social_post_attachment_dto_collection_query_parameters = new \OpenAPI\Client\Model\SocialPostAttachmentDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\SocialPostAttachmentDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSocialPostAttachmentsAsync($social_post_id, $api_version, $x_api_version, $social_post_attachment_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostsApi->getSocialPostAttachmentsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_post_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **social_post_attachment_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\SocialPostAttachmentDtoCollectionQueryParameters**](../Model/SocialPostAttachmentDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SocialPostAttachmentDtoListEnvelope**](../Model/SocialPostAttachmentDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSocialPostAttachmentsCountAsync()`

```php
getSocialPostAttachmentsCountAsync($social_post_id, $api_version, $x_api_version, $social_post_attachment_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Count social post attachments

Returns the count of attachments for a specific social post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_post_id = 'social_post_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$social_post_attachment_dto_collection_query_parameters = new \OpenAPI\Client\Model\SocialPostAttachmentDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\SocialPostAttachmentDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSocialPostAttachmentsCountAsync($social_post_id, $api_version, $x_api_version, $social_post_attachment_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostsApi->getSocialPostAttachmentsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_post_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **social_post_attachment_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\SocialPostAttachmentDtoCollectionQueryParameters**](../Model/SocialPostAttachmentDtoCollectionQueryParameters.md)|  | [optional] |

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

## `getSocialPostCommentAsync()`

```php
getSocialPostCommentAsync($social_profile_id, $social_post_id, $comment_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SocialPostCommentDtoEnvelope
```

Get social post comment by ID

Retrieves a specific comment from a social post by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_profile_id = 'social_profile_id_example'; // string
$social_post_id = 'social_post_id_example'; // string
$comment_id = 'comment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSocialPostCommentAsync($social_profile_id, $social_post_id, $comment_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostsApi->getSocialPostCommentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_profile_id** | **string**|  | |
| **social_post_id** | **string**|  | |
| **comment_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SocialPostCommentDtoEnvelope**](../Model/SocialPostCommentDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSocialPostCommentsAsync()`

```php
getSocialPostCommentsAsync($social_profile_id, $social_post_id, $parent_comment_id, $api_version, $x_api_version, $social_post_comment_dto_collection_query_parameters): \OpenAPI\Client\Model\SocialPostCommentDtoListEnvelope
```

Get social post comments

Retrieves a list of comments for a specific social post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_profile_id = 'social_profile_id_example'; // string
$social_post_id = 'social_post_id_example'; // string
$parent_comment_id = 'parent_comment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$social_post_comment_dto_collection_query_parameters = new \OpenAPI\Client\Model\SocialPostCommentDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\SocialPostCommentDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSocialPostCommentsAsync($social_profile_id, $social_post_id, $parent_comment_id, $api_version, $x_api_version, $social_post_comment_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostsApi->getSocialPostCommentsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_profile_id** | **string**|  | |
| **social_post_id** | **string**|  | |
| **parent_comment_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **social_post_comment_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\SocialPostCommentDtoCollectionQueryParameters**](../Model/SocialPostCommentDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SocialPostCommentDtoListEnvelope**](../Model/SocialPostCommentDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSocialPostCommentsCountAsync()`

```php
getSocialPostCommentsCountAsync($social_profile_id, $social_post_id, $parent_comment_id, $api_version, $x_api_version, $social_post_comment_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Count social post comments

Returns the count of comments for a specific social post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_profile_id = 'social_profile_id_example'; // string
$social_post_id = 'social_post_id_example'; // string
$parent_comment_id = 'parent_comment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$social_post_comment_dto_collection_query_parameters = new \OpenAPI\Client\Model\SocialPostCommentDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\SocialPostCommentDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSocialPostCommentsCountAsync($social_profile_id, $social_post_id, $parent_comment_id, $api_version, $x_api_version, $social_post_comment_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostsApi->getSocialPostCommentsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_profile_id** | **string**|  | |
| **social_post_id** | **string**|  | |
| **parent_comment_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **social_post_comment_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\SocialPostCommentDtoCollectionQueryParameters**](../Model/SocialPostCommentDtoCollectionQueryParameters.md)|  | [optional] |

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

## `getSocialPostReactionAsync()`

```php
getSocialPostReactionAsync($social_post_id, $reaction_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SocialReactionDtoEnvelope
```

Get social post reaction by ID

Retrieves a specific reaction from a social post by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_post_id = 'social_post_id_example'; // string
$reaction_id = 'reaction_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSocialPostReactionAsync($social_post_id, $reaction_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostsApi->getSocialPostReactionAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_post_id** | **string**|  | |
| **reaction_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SocialReactionDtoEnvelope**](../Model/SocialReactionDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSocialPostReactionsAsync()`

```php
getSocialPostReactionsAsync($social_post_id, $social_profile_id, $api_version, $x_api_version, $social_post_reaction_dto_collection_query_parameters): \OpenAPI\Client\Model\SocialReactionDtoListEnvelope
```

Get social post reactions

Retrieves a list of reactions for a specific social post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_post_id = 'social_post_id_example'; // string
$social_profile_id = 'social_profile_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$social_post_reaction_dto_collection_query_parameters = new \OpenAPI\Client\Model\SocialPostReactionDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\SocialPostReactionDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSocialPostReactionsAsync($social_post_id, $social_profile_id, $api_version, $x_api_version, $social_post_reaction_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostsApi->getSocialPostReactionsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_post_id** | **string**|  | |
| **social_profile_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **social_post_reaction_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\SocialPostReactionDtoCollectionQueryParameters**](../Model/SocialPostReactionDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SocialReactionDtoListEnvelope**](../Model/SocialReactionDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSocialPostReactionsCountAsync()`

```php
getSocialPostReactionsCountAsync($social_post_id, $social_profile_id, $api_version, $x_api_version, $social_post_reaction_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Count social post reactions

Returns the count of reactions for a specific social post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_post_id = 'social_post_id_example'; // string
$social_profile_id = 'social_profile_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$social_post_reaction_dto_collection_query_parameters = new \OpenAPI\Client\Model\SocialPostReactionDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\SocialPostReactionDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSocialPostReactionsCountAsync($social_post_id, $social_profile_id, $api_version, $x_api_version, $social_post_reaction_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostsApi->getSocialPostReactionsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_post_id** | **string**|  | |
| **social_profile_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **social_post_reaction_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\SocialPostReactionDtoCollectionQueryParameters**](../Model/SocialPostReactionDtoCollectionQueryParameters.md)|  | [optional] |

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

## `getSocialPostsAsync()`

```php
getSocialPostsAsync($social_profile_id, $api_version, $x_api_version, $social_post_dto_collection_query_parameters): \OpenAPI\Client\Model\SocialPostDtoListEnvelope
```

Get social posts

Retrieves a list of social posts for the specified social profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_profile_id = 'social_profile_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$social_post_dto_collection_query_parameters = new \OpenAPI\Client\Model\SocialPostDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\SocialPostDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSocialPostsAsync($social_profile_id, $api_version, $x_api_version, $social_post_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostsApi->getSocialPostsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_profile_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **social_post_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\SocialPostDtoCollectionQueryParameters**](../Model/SocialPostDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SocialPostDtoListEnvelope**](../Model/SocialPostDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSocialPostsCountAsync()`

```php
getSocialPostsCountAsync($social_profile_id, $api_version, $x_api_version, $social_post_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Count social posts

Returns the count of social posts for the specified social profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_profile_id = 'social_profile_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$social_post_dto_collection_query_parameters = new \OpenAPI\Client\Model\SocialPostDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\SocialPostDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSocialPostsCountAsync($social_profile_id, $api_version, $x_api_version, $social_post_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostsApi->getSocialPostsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_profile_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **social_post_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\SocialPostDtoCollectionQueryParameters**](../Model/SocialPostDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchSocialPostAsync()`

```php
patchSocialPostAsync($social_profile_id, $social_post_id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a social post

Partially updates an existing social post by its ID using a JSON Patch document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_profile_id = 'social_profile_id_example'; // string
$social_post_id = 'social_post_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchSocialPostAsync($social_profile_id, $social_post_id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostsApi->patchSocialPostAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_profile_id** | **string**|  | |
| **social_post_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **patch_operation** | [**\OpenAPI\Client\Model\PatchOperation[]**](../Model/PatchOperation.md)|  | [optional] |

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

## `updateSocialCommentReactionAsync()`

```php
updateSocialCommentReactionAsync($social_post_id, $comment_id, $reaction_id, $social_profile_id, $api_version, $x_api_version, $social_reaction_update_dto): \OpenAPI\Client\Model\SocialCommentReactionDtoEnvelope
```

Update a social comment reaction

Updates an existing reaction on a specific social comment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_post_id = 'social_post_id_example'; // string
$comment_id = 'comment_id_example'; // string
$reaction_id = 'reaction_id_example'; // string
$social_profile_id = 'social_profile_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$social_reaction_update_dto = new \OpenAPI\Client\Model\SocialReactionUpdateDto(); // \OpenAPI\Client\Model\SocialReactionUpdateDto

try {
    $result = $apiInstance->updateSocialCommentReactionAsync($social_post_id, $comment_id, $reaction_id, $social_profile_id, $api_version, $x_api_version, $social_reaction_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostsApi->updateSocialCommentReactionAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_post_id** | **string**|  | |
| **comment_id** | **string**|  | |
| **reaction_id** | **string**|  | |
| **social_profile_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **social_reaction_update_dto** | [**\OpenAPI\Client\Model\SocialReactionUpdateDto**](../Model/SocialReactionUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SocialCommentReactionDtoEnvelope**](../Model/SocialCommentReactionDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSocialPostAsync()`

```php
updateSocialPostAsync($social_profile_id, $social_post_id, $api_version, $x_api_version, $social_post_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a social post

Updates an existing social post by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_profile_id = 'social_profile_id_example'; // string
$social_post_id = 'social_post_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$social_post_update_dto = new \OpenAPI\Client\Model\SocialPostUpdateDto(); // \OpenAPI\Client\Model\SocialPostUpdateDto

try {
    $result = $apiInstance->updateSocialPostAsync($social_profile_id, $social_post_id, $api_version, $x_api_version, $social_post_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostsApi->updateSocialPostAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_profile_id** | **string**|  | |
| **social_post_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **social_post_update_dto** | [**\OpenAPI\Client\Model\SocialPostUpdateDto**](../Model/SocialPostUpdateDto.md)|  | [optional] |

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

## `updateSocialPostAttachmentAsync()`

```php
updateSocialPostAttachmentAsync($social_profile_id, $social_post_id, $attachment_id, $api_version, $x_api_version, $social_post_attachment_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a social post attachment

Updates an existing attachment on a specific social post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_profile_id = 'social_profile_id_example'; // string
$social_post_id = 'social_post_id_example'; // string
$attachment_id = 'attachment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$social_post_attachment_update_dto = new \OpenAPI\Client\Model\SocialPostAttachmentUpdateDto(); // \OpenAPI\Client\Model\SocialPostAttachmentUpdateDto

try {
    $result = $apiInstance->updateSocialPostAttachmentAsync($social_profile_id, $social_post_id, $attachment_id, $api_version, $x_api_version, $social_post_attachment_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostsApi->updateSocialPostAttachmentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_profile_id** | **string**|  | |
| **social_post_id** | **string**|  | |
| **attachment_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **social_post_attachment_update_dto** | [**\OpenAPI\Client\Model\SocialPostAttachmentUpdateDto**](../Model/SocialPostAttachmentUpdateDto.md)|  | [optional] |

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

## `updateSocialPostCommentAsync()`

```php
updateSocialPostCommentAsync($social_profile_id, $social_post_id, $comment_id, $api_version, $x_api_version, $social_post_comment_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a social post comment

Updates an existing comment on a specific social post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_profile_id = 'social_profile_id_example'; // string
$social_post_id = 'social_post_id_example'; // string
$comment_id = 'comment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$social_post_comment_update_dto = new \OpenAPI\Client\Model\SocialPostCommentUpdateDto(); // \OpenAPI\Client\Model\SocialPostCommentUpdateDto

try {
    $result = $apiInstance->updateSocialPostCommentAsync($social_profile_id, $social_post_id, $comment_id, $api_version, $x_api_version, $social_post_comment_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostsApi->updateSocialPostCommentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_profile_id** | **string**|  | |
| **social_post_id** | **string**|  | |
| **comment_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **social_post_comment_update_dto** | [**\OpenAPI\Client\Model\SocialPostCommentUpdateDto**](../Model/SocialPostCommentUpdateDto.md)|  | [optional] |

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

## `updateSocialPostReactionAsync()`

```php
updateSocialPostReactionAsync($social_profile_id, $social_post_id, $reaction_id, $api_version, $x_api_version, $social_reaction_update_dto): \OpenAPI\Client\Model\SocialPostReactionDtoEnvelope
```

Update a social post reaction

Updates an existing reaction on a specific social post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_profile_id = 'social_profile_id_example'; // string
$social_post_id = 'social_post_id_example'; // string
$reaction_id = 'reaction_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$social_reaction_update_dto = new \OpenAPI\Client\Model\SocialReactionUpdateDto(); // \OpenAPI\Client\Model\SocialReactionUpdateDto

try {
    $result = $apiInstance->updateSocialPostReactionAsync($social_profile_id, $social_post_id, $reaction_id, $api_version, $x_api_version, $social_reaction_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostsApi->updateSocialPostReactionAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_profile_id** | **string**|  | |
| **social_post_id** | **string**|  | |
| **reaction_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **social_reaction_update_dto** | [**\OpenAPI\Client\Model\SocialReactionUpdateDto**](../Model/SocialReactionUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SocialPostReactionDtoEnvelope**](../Model/SocialPostReactionDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadSocialPostImageAttachmentAsync()`

```php
uploadSocialPostImageAttachmentAsync($social_post_id, $social_profile_id, $api_version, $x_api_version, $file): \OpenAPI\Client\Model\SocialPostAttachmentDtoEnvelope
```

Upload a social post image attachment

Uploads an image and attaches it to a social post, storing the bytes through the storage spine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_post_id = 'social_post_id_example'; // string
$social_profile_id = 'social_profile_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->uploadSocialPostImageAttachmentAsync($social_post_id, $social_profile_id, $api_version, $x_api_version, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostsApi->uploadSocialPostImageAttachmentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_post_id** | **string**|  | |
| **social_profile_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SocialPostAttachmentDtoEnvelope**](../Model/SocialPostAttachmentDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`, `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
