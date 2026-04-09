# OpenAPI\Client\SocialFeedsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createFeedPostAsync()**](SocialFeedsApi.md#createFeedPostAsync) | **POST** /api/v2/SocialService/SocialFeeds/{socialFeedId}/Posts | Create a social feed post |
| [**deleteFeedPostAsync()**](SocialFeedsApi.md#deleteFeedPostAsync) | **DELETE** /api/v2/SocialService/SocialFeeds/{socialFeedId}/Posts/{feedPostId} | Delete a social feed post |
| [**getFeedNotifications()**](SocialFeedsApi.md#getFeedNotifications) | **GET** /api/v2/SocialService/SocialFeeds | Get social feeds |
| [**getFeedPostAsync()**](SocialFeedsApi.md#getFeedPostAsync) | **GET** /api/v2/SocialService/SocialFeeds/{socialFeedId}/Posts/{feedPostId} | Get social feed post by ID |
| [**getFeedPostsAsync()**](SocialFeedsApi.md#getFeedPostsAsync) | **GET** /api/v2/SocialService/SocialFeeds/{socialFeedId}/Posts | Get social feed posts |
| [**getFeedPostsCountAsync()**](SocialFeedsApi.md#getFeedPostsCountAsync) | **GET** /api/v2/SocialService/SocialFeeds/{socialFeedId}/Posts/Count | Count social feed posts |
| [**getNotificationAsync()**](SocialFeedsApi.md#getNotificationAsync) | **GET** /api/v2/SocialService/SocialFeeds/{socialFeedId} | Get social feed by ID |
| [**getNotificationsCountAsync()**](SocialFeedsApi.md#getNotificationsCountAsync) | **GET** /api/v2/SocialService/SocialFeeds/Count | Count social feeds |
| [**updateFeedPostAsync()**](SocialFeedsApi.md#updateFeedPostAsync) | **PUT** /api/v2/SocialService/SocialFeeds/{socialFeedId}/Posts/{feedPostId} | Update a social feed post |


## `createFeedPostAsync()`

```php
createFeedPostAsync($social_profile_id, $social_feed_id, $api_version, $x_api_version, $social_feed_post_create_dto): \OpenAPI\Client\Model\SocialFeedPostDtoEnvelope
```

Create a social feed post

Creates a new post in a specific social feed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialFeedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_profile_id = 'social_profile_id_example'; // string
$social_feed_id = 'social_feed_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$social_feed_post_create_dto = new \OpenAPI\Client\Model\SocialFeedPostCreateDto(); // \OpenAPI\Client\Model\SocialFeedPostCreateDto

try {
    $result = $apiInstance->createFeedPostAsync($social_profile_id, $social_feed_id, $api_version, $x_api_version, $social_feed_post_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialFeedsApi->createFeedPostAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_profile_id** | **string**|  | |
| **social_feed_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **social_feed_post_create_dto** | [**\OpenAPI\Client\Model\SocialFeedPostCreateDto**](../Model/SocialFeedPostCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SocialFeedPostDtoEnvelope**](../Model/SocialFeedPostDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFeedPostAsync()`

```php
deleteFeedPostAsync($social_profile_id, $social_feed_id, $feed_post_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a social feed post

Deletes a post from a specific social feed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialFeedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_profile_id = 'social_profile_id_example'; // string
$social_feed_id = 'social_feed_id_example'; // string
$feed_post_id = 'feed_post_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteFeedPostAsync($social_profile_id, $social_feed_id, $feed_post_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialFeedsApi->deleteFeedPostAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_profile_id** | **string**|  | |
| **social_feed_id** | **string**|  | |
| **feed_post_id** | **string**|  | |
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

## `getFeedNotifications()`

```php
getFeedNotifications($social_profile_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SocialFeedDtoListEnvelope
```

Get social feeds

Retrieves a list of social feeds for the specified social profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialFeedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_profile_id = 'social_profile_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getFeedNotifications($social_profile_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialFeedsApi->getFeedNotifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_profile_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SocialFeedDtoListEnvelope**](../Model/SocialFeedDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFeedPostAsync()`

```php
getFeedPostAsync($social_profile_id, $social_feed_id, $feed_post_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SocialFeedPostDtoEnvelope
```

Get social feed post by ID

Retrieves a specific post from a social feed by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialFeedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_profile_id = 'social_profile_id_example'; // string
$social_feed_id = 'social_feed_id_example'; // string
$feed_post_id = 'feed_post_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getFeedPostAsync($social_profile_id, $social_feed_id, $feed_post_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialFeedsApi->getFeedPostAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_profile_id** | **string**|  | |
| **social_feed_id** | **string**|  | |
| **feed_post_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SocialFeedPostDtoEnvelope**](../Model/SocialFeedPostDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFeedPostsAsync()`

```php
getFeedPostsAsync($social_profile_id, $social_feed_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SocialFeedPostDtoListEnvelope
```

Get social feed posts

Retrieves a list of posts for a specific social feed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialFeedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_profile_id = 'social_profile_id_example'; // string
$social_feed_id = 'social_feed_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getFeedPostsAsync($social_profile_id, $social_feed_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialFeedsApi->getFeedPostsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_profile_id** | **string**|  | |
| **social_feed_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SocialFeedPostDtoListEnvelope**](../Model/SocialFeedPostDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFeedPostsCountAsync()`

```php
getFeedPostsCountAsync($social_profile_id, $social_feed_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Count social feed posts

Returns the count of posts for a specific social feed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialFeedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_profile_id = 'social_profile_id_example'; // string
$social_feed_id = 'social_feed_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getFeedPostsCountAsync($social_profile_id, $social_feed_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialFeedsApi->getFeedPostsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_profile_id** | **string**|  | |
| **social_feed_id** | **string**|  | |
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

## `getNotificationAsync()`

```php
getNotificationAsync($social_profile_id, $social_feed_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SocialFeedDtoEnvelope
```

Get social feed by ID

Retrieves a specific social feed by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialFeedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_profile_id = 'social_profile_id_example'; // string
$social_feed_id = 'social_feed_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getNotificationAsync($social_profile_id, $social_feed_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialFeedsApi->getNotificationAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_profile_id** | **string**|  | |
| **social_feed_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SocialFeedDtoEnvelope**](../Model/SocialFeedDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNotificationsCountAsync()`

```php
getNotificationsCountAsync($social_profile_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Count social feeds

Returns the count of social feeds for the specified social profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialFeedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_profile_id = 'social_profile_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getNotificationsCountAsync($social_profile_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialFeedsApi->getNotificationsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_profile_id** | **string**|  | |
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

## `updateFeedPostAsync()`

```php
updateFeedPostAsync($social_profile_id, $social_feed_id, $feed_post_id, $api_version, $x_api_version, $social_feed_post_update_dto): \OpenAPI\Client\Model\SocialFeedPostDtoEnvelope
```

Update a social feed post

Updates an existing post in a specific social feed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialFeedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_profile_id = 'social_profile_id_example'; // string
$social_feed_id = 'social_feed_id_example'; // string
$feed_post_id = 'feed_post_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$social_feed_post_update_dto = new \OpenAPI\Client\Model\SocialFeedPostUpdateDto(); // \OpenAPI\Client\Model\SocialFeedPostUpdateDto

try {
    $result = $apiInstance->updateFeedPostAsync($social_profile_id, $social_feed_id, $feed_post_id, $api_version, $x_api_version, $social_feed_post_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialFeedsApi->updateFeedPostAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_profile_id** | **string**|  | |
| **social_feed_id** | **string**|  | |
| **feed_post_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **social_feed_post_update_dto** | [**\OpenAPI\Client\Model\SocialFeedPostUpdateDto**](../Model/SocialFeedPostUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SocialFeedPostDtoEnvelope**](../Model/SocialFeedPostDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
