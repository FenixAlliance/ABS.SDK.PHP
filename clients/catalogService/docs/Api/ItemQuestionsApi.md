# OpenAPI\Client\ItemQuestionsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createItemQuestionAsync()**](ItemQuestionsApi.md#createItemQuestionAsync) | **POST** /api/v2/CatalogService/ItemQuestions | Create a new item question |
| [**deleteItemQuestionAsync()**](ItemQuestionsApi.md#deleteItemQuestionAsync) | **DELETE** /api/v2/CatalogService/ItemQuestions/{itemQuestionId} | Delete an item question |
| [**getItemQuestionByIdAsync()**](ItemQuestionsApi.md#getItemQuestionByIdAsync) | **GET** /api/v2/CatalogService/ItemQuestions/{itemQuestionId} | Get item question by ID |
| [**getItemQuestionsAsync()**](ItemQuestionsApi.md#getItemQuestionsAsync) | **GET** /api/v2/CatalogService/ItemQuestions | Get all item questions |
| [**updateItemQuestionAsync()**](ItemQuestionsApi.md#updateItemQuestionAsync) | **PUT** /api/v2/CatalogService/ItemQuestions/{itemQuestionId} | Update an item question |


## `createItemQuestionAsync()`

```php
createItemQuestionAsync($tenant_id, $api_version, $x_api_version, $item_question_create_dto): \OpenAPI\Client\Model\ItemQuestionDtoEnvelope
```

Create a new item question

Creates a new item question for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemQuestionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_question_create_dto = new \OpenAPI\Client\Model\ItemQuestionCreateDto(); // \OpenAPI\Client\Model\ItemQuestionCreateDto

try {
    $result = $apiInstance->createItemQuestionAsync($tenant_id, $api_version, $x_api_version, $item_question_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemQuestionsApi->createItemQuestionAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_question_create_dto** | [**\OpenAPI\Client\Model\ItemQuestionCreateDto**](../Model/ItemQuestionCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemQuestionDtoEnvelope**](../Model/ItemQuestionDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteItemQuestionAsync()`

```php
deleteItemQuestionAsync($tenant_id, $item_question_id, $api_version, $x_api_version)
```

Delete an item question

Deletes an item question for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemQuestionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_question_id = 'item_question_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteItemQuestionAsync($tenant_id, $item_question_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ItemQuestionsApi->deleteItemQuestionAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **item_question_id** | **string**|  | |
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

## `getItemQuestionByIdAsync()`

```php
getItemQuestionByIdAsync($item_question_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemQuestionDtoEnvelope
```

Get item question by ID

Retrieves a specific item question by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemQuestionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_question_id = 'item_question_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemQuestionByIdAsync($item_question_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemQuestionsApi->getItemQuestionByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_question_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemQuestionDtoEnvelope**](../Model/ItemQuestionDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemQuestionsAsync()`

```php
getItemQuestionsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemQuestionDtoListEnvelope
```

Get all item questions

Retrieves all item questions for the specified tenant using OData query options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemQuestionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemQuestionsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemQuestionsApi->getItemQuestionsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemQuestionDtoListEnvelope**](../Model/ItemQuestionDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateItemQuestionAsync()`

```php
updateItemQuestionAsync($tenant_id, $item_question_id, $api_version, $x_api_version, $item_question_update_dto)
```

Update an item question

Updates an existing item question for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemQuestionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_question_id = 'item_question_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_question_update_dto = new \OpenAPI\Client\Model\ItemQuestionUpdateDto(); // \OpenAPI\Client\Model\ItemQuestionUpdateDto

try {
    $apiInstance->updateItemQuestionAsync($tenant_id, $item_question_id, $api_version, $x_api_version, $item_question_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling ItemQuestionsApi->updateItemQuestionAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **item_question_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_question_update_dto** | [**\OpenAPI\Client\Model\ItemQuestionUpdateDto**](../Model/ItemQuestionUpdateDto.md)|  | [optional] |

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
