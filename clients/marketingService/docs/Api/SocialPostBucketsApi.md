# OpenAPI\Client\SocialPostBucketsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSocialPostBucketAsync()**](SocialPostBucketsApi.md#createSocialPostBucketAsync) | **POST** /api/v2/MarketingService/SocialPostBuckets | Create a social post bucket |
| [**deleteSocialPostBucketAsync()**](SocialPostBucketsApi.md#deleteSocialPostBucketAsync) | **DELETE** /api/v2/MarketingService/SocialPostBuckets/{socialpostbucketId} | Delete a social post bucket |
| [**getSocialPostBucketDetailsAsync()**](SocialPostBucketsApi.md#getSocialPostBucketDetailsAsync) | **GET** /api/v2/MarketingService/SocialPostBuckets/{socialpostbucketId} | Get social post bucket by ID |
| [**getSocialPostBucketsCountAsync()**](SocialPostBucketsApi.md#getSocialPostBucketsCountAsync) | **GET** /api/v2/MarketingService/SocialPostBuckets/Count | Get social post buckets count |
| [**getSocialPostBucketsODataAsync()**](SocialPostBucketsApi.md#getSocialPostBucketsODataAsync) | **GET** /api/v2/MarketingService/SocialPostBuckets | Get social post buckets |
| [**updateSocialPostBucketAsync()**](SocialPostBucketsApi.md#updateSocialPostBucketAsync) | **PUT** /api/v2/MarketingService/SocialPostBuckets/{socialpostbucketId} | Update a social post bucket |


## `createSocialPostBucketAsync()`

```php
createSocialPostBucketAsync($tenant_id, $social_post_bucket_create_dto, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a social post bucket

Creates a new social post bucket for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostBucketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$social_post_bucket_create_dto = new \OpenAPI\Client\Model\SocialPostBucketCreateDto(); // \OpenAPI\Client\Model\SocialPostBucketCreateDto
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->createSocialPostBucketAsync($tenant_id, $social_post_bucket_create_dto, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostBucketsApi->createSocialPostBucketAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **social_post_bucket_create_dto** | [**\OpenAPI\Client\Model\SocialPostBucketCreateDto**](../Model/SocialPostBucketCreateDto.md)|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

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

## `deleteSocialPostBucketAsync()`

```php
deleteSocialPostBucketAsync($tenant_id, $socialpostbucket_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a social post bucket

Deletes a social post bucket by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostBucketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$socialpostbucket_id = 'socialpostbucket_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteSocialPostBucketAsync($tenant_id, $socialpostbucket_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostBucketsApi->deleteSocialPostBucketAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **socialpostbucket_id** | **string**|  | |
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

## `getSocialPostBucketDetailsAsync()`

```php
getSocialPostBucketDetailsAsync($tenant_id, $socialpostbucket_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SocialPostBucketDtoEnvelope
```

Get social post bucket by ID

Retrieves the details of a specific social post bucket by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostBucketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$socialpostbucket_id = 'socialpostbucket_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSocialPostBucketDetailsAsync($tenant_id, $socialpostbucket_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostBucketsApi->getSocialPostBucketDetailsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **socialpostbucket_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SocialPostBucketDtoEnvelope**](../Model/SocialPostBucketDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSocialPostBucketsCountAsync()`

```php
getSocialPostBucketsCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get social post buckets count

Returns the count of social post buckets for the specified tenant using OData query options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostBucketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSocialPostBucketsCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostBucketsApi->getSocialPostBucketsCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `getSocialPostBucketsODataAsync()`

```php
getSocialPostBucketsODataAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SocialPostBucketDtoListEnvelope
```

Get social post buckets

Retrieves a collection of social post buckets for the specified tenant using OData query options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostBucketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSocialPostBucketsODataAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostBucketsApi->getSocialPostBucketsODataAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SocialPostBucketDtoListEnvelope**](../Model/SocialPostBucketDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSocialPostBucketAsync()`

```php
updateSocialPostBucketAsync($tenant_id, $socialpostbucket_id, $social_post_bucket_update_dto, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a social post bucket

Updates an existing social post bucket by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPostBucketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$socialpostbucket_id = 'socialpostbucket_id_example'; // string
$social_post_bucket_update_dto = new \OpenAPI\Client\Model\SocialPostBucketUpdateDto(); // \OpenAPI\Client\Model\SocialPostBucketUpdateDto
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->updateSocialPostBucketAsync($tenant_id, $socialpostbucket_id, $social_post_bucket_update_dto, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostBucketsApi->updateSocialPostBucketAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **socialpostbucket_id** | **string**|  | |
| **social_post_bucket_update_dto** | [**\OpenAPI\Client\Model\SocialPostBucketUpdateDto**](../Model/SocialPostBucketUpdateDto.md)|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

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
