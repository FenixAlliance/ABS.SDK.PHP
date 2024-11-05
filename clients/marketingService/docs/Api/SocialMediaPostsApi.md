# OpenAPI\Client\SocialMediaPostsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2MarketingServiceSocialMediaPostsCountGet()**](SocialMediaPostsApi.md#apiV2MarketingServiceSocialMediaPostsCountGet) | **GET** /api/v2/MarketingService/SocialMediaPosts/Count |  |
| [**apiV2MarketingServiceSocialMediaPostsGet()**](SocialMediaPostsApi.md#apiV2MarketingServiceSocialMediaPostsGet) | **GET** /api/v2/MarketingService/SocialMediaPosts |  |
| [**apiV2MarketingServiceSocialMediaPostsPost()**](SocialMediaPostsApi.md#apiV2MarketingServiceSocialMediaPostsPost) | **POST** /api/v2/MarketingService/SocialMediaPosts |  |
| [**apiV2MarketingServiceSocialMediaPostsSocialmediapostIdDelete()**](SocialMediaPostsApi.md#apiV2MarketingServiceSocialMediaPostsSocialmediapostIdDelete) | **DELETE** /api/v2/MarketingService/SocialMediaPosts/{socialmediapostId} |  |
| [**apiV2MarketingServiceSocialMediaPostsSocialmediapostIdGet()**](SocialMediaPostsApi.md#apiV2MarketingServiceSocialMediaPostsSocialmediapostIdGet) | **GET** /api/v2/MarketingService/SocialMediaPosts/{socialmediapostId} |  |
| [**apiV2MarketingServiceSocialMediaPostsSocialmediapostIdPut()**](SocialMediaPostsApi.md#apiV2MarketingServiceSocialMediaPostsSocialmediapostIdPut) | **PUT** /api/v2/MarketingService/SocialMediaPosts/{socialmediapostId} |  |


## `apiV2MarketingServiceSocialMediaPostsCountGet()`

```php
apiV2MarketingServiceSocialMediaPostsCountGet($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SocialMediaPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2MarketingServiceSocialMediaPostsCountGet($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialMediaPostsApi->apiV2MarketingServiceSocialMediaPostsCountGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2MarketingServiceSocialMediaPostsGet()`

```php
apiV2MarketingServiceSocialMediaPostsGet($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SocialMediaPostDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SocialMediaPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2MarketingServiceSocialMediaPostsGet($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialMediaPostsApi->apiV2MarketingServiceSocialMediaPostsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SocialMediaPostDtoListEnvelope**](../Model/SocialMediaPostDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2MarketingServiceSocialMediaPostsPost()`

```php
apiV2MarketingServiceSocialMediaPostsPost($tenant_id, $social_media_post_create_dto, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SocialMediaPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$social_media_post_create_dto = new \OpenAPI\Client\Model\SocialMediaPostCreateDto(); // \OpenAPI\Client\Model\SocialMediaPostCreateDto
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2MarketingServiceSocialMediaPostsPost($tenant_id, $social_media_post_create_dto, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialMediaPostsApi->apiV2MarketingServiceSocialMediaPostsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **social_media_post_create_dto** | [**\OpenAPI\Client\Model\SocialMediaPostCreateDto**](../Model/SocialMediaPostCreateDto.md)|  | |
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

## `apiV2MarketingServiceSocialMediaPostsSocialmediapostIdDelete()`

```php
apiV2MarketingServiceSocialMediaPostsSocialmediapostIdDelete($tenant_id, $socialmediapost_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SocialMediaPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$socialmediapost_id = 'socialmediapost_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2MarketingServiceSocialMediaPostsSocialmediapostIdDelete($tenant_id, $socialmediapost_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialMediaPostsApi->apiV2MarketingServiceSocialMediaPostsSocialmediapostIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **socialmediapost_id** | **string**|  | |
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

## `apiV2MarketingServiceSocialMediaPostsSocialmediapostIdGet()`

```php
apiV2MarketingServiceSocialMediaPostsSocialmediapostIdGet($tenant_id, $socialmediapost_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SocialMediaPostDtoEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SocialMediaPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$socialmediapost_id = 'socialmediapost_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2MarketingServiceSocialMediaPostsSocialmediapostIdGet($tenant_id, $socialmediapost_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialMediaPostsApi->apiV2MarketingServiceSocialMediaPostsSocialmediapostIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **socialmediapost_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SocialMediaPostDtoEnvelope**](../Model/SocialMediaPostDtoEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2MarketingServiceSocialMediaPostsSocialmediapostIdPut()`

```php
apiV2MarketingServiceSocialMediaPostsSocialmediapostIdPut($tenant_id, $socialmediapost_id, $social_media_post_update_dto, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SocialMediaPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$socialmediapost_id = 'socialmediapost_id_example'; // string
$social_media_post_update_dto = new \OpenAPI\Client\Model\SocialMediaPostUpdateDto(); // \OpenAPI\Client\Model\SocialMediaPostUpdateDto
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2MarketingServiceSocialMediaPostsSocialmediapostIdPut($tenant_id, $socialmediapost_id, $social_media_post_update_dto, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialMediaPostsApi->apiV2MarketingServiceSocialMediaPostsSocialmediapostIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **socialmediapost_id** | **string**|  | |
| **social_media_post_update_dto** | [**\OpenAPI\Client\Model\SocialMediaPostUpdateDto**](../Model/SocialMediaPostUpdateDto.md)|  | |
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
