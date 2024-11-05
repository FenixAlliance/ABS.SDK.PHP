# OpenAPI\Client\SocialPostBucketsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2MarketingServiceSocialPostBucketsCountGet()**](SocialPostBucketsApi.md#apiV2MarketingServiceSocialPostBucketsCountGet) | **GET** /api/v2/MarketingService/SocialPostBuckets/Count |  |
| [**apiV2MarketingServiceSocialPostBucketsGet()**](SocialPostBucketsApi.md#apiV2MarketingServiceSocialPostBucketsGet) | **GET** /api/v2/MarketingService/SocialPostBuckets |  |
| [**apiV2MarketingServiceSocialPostBucketsPost()**](SocialPostBucketsApi.md#apiV2MarketingServiceSocialPostBucketsPost) | **POST** /api/v2/MarketingService/SocialPostBuckets |  |
| [**apiV2MarketingServiceSocialPostBucketsSocialpostbucketIdDelete()**](SocialPostBucketsApi.md#apiV2MarketingServiceSocialPostBucketsSocialpostbucketIdDelete) | **DELETE** /api/v2/MarketingService/SocialPostBuckets/{socialpostbucketId} |  |
| [**apiV2MarketingServiceSocialPostBucketsSocialpostbucketIdGet()**](SocialPostBucketsApi.md#apiV2MarketingServiceSocialPostBucketsSocialpostbucketIdGet) | **GET** /api/v2/MarketingService/SocialPostBuckets/{socialpostbucketId} |  |
| [**apiV2MarketingServiceSocialPostBucketsSocialpostbucketIdPut()**](SocialPostBucketsApi.md#apiV2MarketingServiceSocialPostBucketsSocialpostbucketIdPut) | **PUT** /api/v2/MarketingService/SocialPostBuckets/{socialpostbucketId} |  |


## `apiV2MarketingServiceSocialPostBucketsCountGet()`

```php
apiV2MarketingServiceSocialPostBucketsCountGet($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SocialPostBucketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2MarketingServiceSocialPostBucketsCountGet($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostBucketsApi->apiV2MarketingServiceSocialPostBucketsCountGet: ', $e->getMessage(), PHP_EOL;
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

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2MarketingServiceSocialPostBucketsGet()`

```php
apiV2MarketingServiceSocialPostBucketsGet($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SocialPostBucketDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SocialPostBucketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2MarketingServiceSocialPostBucketsGet($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostBucketsApi->apiV2MarketingServiceSocialPostBucketsGet: ', $e->getMessage(), PHP_EOL;
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

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2MarketingServiceSocialPostBucketsPost()`

```php
apiV2MarketingServiceSocialPostBucketsPost($tenant_id, $social_post_bucket_create_dto, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SocialPostBucketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$social_post_bucket_create_dto = new \OpenAPI\Client\Model\SocialPostBucketCreateDto(); // \OpenAPI\Client\Model\SocialPostBucketCreateDto
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2MarketingServiceSocialPostBucketsPost($tenant_id, $social_post_bucket_create_dto, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostBucketsApi->apiV2MarketingServiceSocialPostBucketsPost: ', $e->getMessage(), PHP_EOL;
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

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2MarketingServiceSocialPostBucketsSocialpostbucketIdDelete()`

```php
apiV2MarketingServiceSocialPostBucketsSocialpostbucketIdDelete($tenant_id, $socialpostbucket_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SocialPostBucketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$socialpostbucket_id = 'socialpostbucket_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2MarketingServiceSocialPostBucketsSocialpostbucketIdDelete($tenant_id, $socialpostbucket_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostBucketsApi->apiV2MarketingServiceSocialPostBucketsSocialpostbucketIdDelete: ', $e->getMessage(), PHP_EOL;
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

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2MarketingServiceSocialPostBucketsSocialpostbucketIdGet()`

```php
apiV2MarketingServiceSocialPostBucketsSocialpostbucketIdGet($tenant_id, $socialpostbucket_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SocialPostBucketDtoEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SocialPostBucketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$socialpostbucket_id = 'socialpostbucket_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2MarketingServiceSocialPostBucketsSocialpostbucketIdGet($tenant_id, $socialpostbucket_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostBucketsApi->apiV2MarketingServiceSocialPostBucketsSocialpostbucketIdGet: ', $e->getMessage(), PHP_EOL;
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

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2MarketingServiceSocialPostBucketsSocialpostbucketIdPut()`

```php
apiV2MarketingServiceSocialPostBucketsSocialpostbucketIdPut($tenant_id, $socialpostbucket_id, $social_post_bucket_update_dto, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SocialPostBucketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$socialpostbucket_id = 'socialpostbucket_id_example'; // string
$social_post_bucket_update_dto = new \OpenAPI\Client\Model\SocialPostBucketUpdateDto(); // \OpenAPI\Client\Model\SocialPostBucketUpdateDto
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2MarketingServiceSocialPostBucketsSocialpostbucketIdPut($tenant_id, $socialpostbucket_id, $social_post_bucket_update_dto, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPostBucketsApi->apiV2MarketingServiceSocialPostBucketsSocialpostbucketIdPut: ', $e->getMessage(), PHP_EOL;
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

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
