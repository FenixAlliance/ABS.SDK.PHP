# OpenAPI\Client\ItemReviewsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createItemReviewAsync()**](ItemReviewsApi.md#createItemReviewAsync) | **POST** /api/v2/CatalogService/ItemReviews | Create a new item review |
| [**deleteItemReviewAsync()**](ItemReviewsApi.md#deleteItemReviewAsync) | **DELETE** /api/v2/CatalogService/ItemReviews/{itemReviewId} | Delete an item review |
| [**getItemReviewByIdAsync()**](ItemReviewsApi.md#getItemReviewByIdAsync) | **GET** /api/v2/CatalogService/ItemReviews/{itemReviewId} | Get item review by ID |
| [**getItemReviewsAsync()**](ItemReviewsApi.md#getItemReviewsAsync) | **GET** /api/v2/CatalogService/ItemReviews | Get all item reviews |
| [**updateItemReviewAsync()**](ItemReviewsApi.md#updateItemReviewAsync) | **PUT** /api/v2/CatalogService/ItemReviews/{itemReviewId} | Update an item review |


## `createItemReviewAsync()`

```php
createItemReviewAsync($tenant_id, $api_version, $x_api_version, $item_review_create_dto): \OpenAPI\Client\Model\ItemReviewDtoEnvelope
```

Create a new item review

Creates a new item review for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_review_create_dto = new \OpenAPI\Client\Model\ItemReviewCreateDto(); // \OpenAPI\Client\Model\ItemReviewCreateDto

try {
    $result = $apiInstance->createItemReviewAsync($tenant_id, $api_version, $x_api_version, $item_review_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemReviewsApi->createItemReviewAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_review_create_dto** | [**\OpenAPI\Client\Model\ItemReviewCreateDto**](../Model/ItemReviewCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemReviewDtoEnvelope**](../Model/ItemReviewDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteItemReviewAsync()`

```php
deleteItemReviewAsync($tenant_id, $item_review_id, $api_version, $x_api_version)
```

Delete an item review

Deletes an item review for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_review_id = 'item_review_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteItemReviewAsync($tenant_id, $item_review_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ItemReviewsApi->deleteItemReviewAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **item_review_id** | **string**|  | |
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

## `getItemReviewByIdAsync()`

```php
getItemReviewByIdAsync($item_review_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemReviewDtoEnvelope
```

Get item review by ID

Retrieves a specific item review by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_review_id = 'item_review_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemReviewByIdAsync($item_review_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemReviewsApi->getItemReviewByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_review_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemReviewDtoEnvelope**](../Model/ItemReviewDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemReviewsAsync()`

```php
getItemReviewsAsync($item_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemReviewDtoListEnvelope
```

Get all item reviews

Retrieves all item reviews for the specified item using OData query options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemReviewsAsync($item_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemReviewsApi->getItemReviewsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemReviewDtoListEnvelope**](../Model/ItemReviewDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateItemReviewAsync()`

```php
updateItemReviewAsync($tenant_id, $item_review_id, $api_version, $x_api_version, $item_review_update_dto)
```

Update an item review

Updates an existing item review for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_review_id = 'item_review_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_review_update_dto = new \OpenAPI\Client\Model\ItemReviewUpdateDto(); // \OpenAPI\Client\Model\ItemReviewUpdateDto

try {
    $apiInstance->updateItemReviewAsync($tenant_id, $item_review_id, $api_version, $x_api_version, $item_review_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling ItemReviewsApi->updateItemReviewAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **item_review_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_review_update_dto** | [**\OpenAPI\Client\Model\ItemReviewUpdateDto**](../Model/ItemReviewUpdateDto.md)|  | [optional] |

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
