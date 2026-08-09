# OpenAPI\Client\KnowledgeArticlesApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createKnowledgeArticleAsync()**](KnowledgeArticlesApi.md#createKnowledgeArticleAsync) | **POST** /api/v2/SupportService/KnowledgeArticles | Create a knowledge article |
| [**deleteKnowledgeArticleAsync()**](KnowledgeArticlesApi.md#deleteKnowledgeArticleAsync) | **DELETE** /api/v2/SupportService/KnowledgeArticles/{knowledgeArticleId} | Delete a knowledge article |
| [**getKnowledgeArticleAsync()**](KnowledgeArticlesApi.md#getKnowledgeArticleAsync) | **GET** /api/v2/SupportService/KnowledgeArticles/{knowledgeArticleId} | Retrieve a knowledge article by ID |
| [**getKnowledgeArticlesAsync()**](KnowledgeArticlesApi.md#getKnowledgeArticlesAsync) | **GET** /api/v2/SupportService/KnowledgeArticles | Retrieve knowledge articles |
| [**getKnowledgeArticlesCountAsync()**](KnowledgeArticlesApi.md#getKnowledgeArticlesCountAsync) | **GET** /api/v2/SupportService/KnowledgeArticles/Count | Get knowledge articles count |
| [**patchKnowledgeArticleAsync()**](KnowledgeArticlesApi.md#patchKnowledgeArticleAsync) | **PATCH** /api/v2/SupportService/KnowledgeArticles/{knowledgeArticleId} | Patch a knowledge article |
| [**updateKnowledgeArticleAsync()**](KnowledgeArticlesApi.md#updateKnowledgeArticleAsync) | **PUT** /api/v2/SupportService/KnowledgeArticles/{knowledgeArticleId} | Update a knowledge article |


## `createKnowledgeArticleAsync()`

```php
createKnowledgeArticleAsync($tenant_id, $api_version, $x_api_version, $knowledge_article_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a knowledge article

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\KnowledgeArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$knowledge_article_create_dto = new \OpenAPI\Client\Model\KnowledgeArticleCreateDto(); // \OpenAPI\Client\Model\KnowledgeArticleCreateDto

try {
    $result = $apiInstance->createKnowledgeArticleAsync($tenant_id, $api_version, $x_api_version, $knowledge_article_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeArticlesApi->createKnowledgeArticleAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **knowledge_article_create_dto** | [**\OpenAPI\Client\Model\KnowledgeArticleCreateDto**](../Model/KnowledgeArticleCreateDto.md)|  | [optional] |

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

## `deleteKnowledgeArticleAsync()`

```php
deleteKnowledgeArticleAsync($tenant_id, $knowledge_article_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a knowledge article

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\KnowledgeArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$knowledge_article_id = 'knowledge_article_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteKnowledgeArticleAsync($tenant_id, $knowledge_article_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeArticlesApi->deleteKnowledgeArticleAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **knowledge_article_id** | **string**|  | |
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

## `getKnowledgeArticleAsync()`

```php
getKnowledgeArticleAsync($tenant_id, $knowledge_article_id, $api_version, $x_api_version): \OpenAPI\Client\Model\KnowledgeArticleDtoEnvelope
```

Retrieve a knowledge article by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\KnowledgeArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$knowledge_article_id = 'knowledge_article_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getKnowledgeArticleAsync($tenant_id, $knowledge_article_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeArticlesApi->getKnowledgeArticleAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **knowledge_article_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\KnowledgeArticleDtoEnvelope**](../Model/KnowledgeArticleDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getKnowledgeArticlesAsync()`

```php
getKnowledgeArticlesAsync($tenant_id, $api_version, $x_api_version, $knowledge_article_dto_collection_query_parameters): \OpenAPI\Client\Model\KnowledgeArticleDtoListEnvelope
```

Retrieve knowledge articles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\KnowledgeArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$knowledge_article_dto_collection_query_parameters = new \OpenAPI\Client\Model\KnowledgeArticleDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\KnowledgeArticleDtoCollectionQueryParameters

try {
    $result = $apiInstance->getKnowledgeArticlesAsync($tenant_id, $api_version, $x_api_version, $knowledge_article_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeArticlesApi->getKnowledgeArticlesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **knowledge_article_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\KnowledgeArticleDtoCollectionQueryParameters**](../Model/KnowledgeArticleDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\KnowledgeArticleDtoListEnvelope**](../Model/KnowledgeArticleDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getKnowledgeArticlesCountAsync()`

```php
getKnowledgeArticlesCountAsync($tenant_id, $api_version, $x_api_version, $knowledge_article_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get knowledge articles count

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\KnowledgeArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$knowledge_article_dto_collection_query_parameters = new \OpenAPI\Client\Model\KnowledgeArticleDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\KnowledgeArticleDtoCollectionQueryParameters

try {
    $result = $apiInstance->getKnowledgeArticlesCountAsync($tenant_id, $api_version, $x_api_version, $knowledge_article_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeArticlesApi->getKnowledgeArticlesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **knowledge_article_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\KnowledgeArticleDtoCollectionQueryParameters**](../Model/KnowledgeArticleDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchKnowledgeArticleAsync()`

```php
patchKnowledgeArticleAsync($tenant_id, $knowledge_article_id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a knowledge article

Partially updates an existing knowledge article by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\KnowledgeArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$knowledge_article_id = 'knowledge_article_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchKnowledgeArticleAsync($tenant_id, $knowledge_article_id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeArticlesApi->patchKnowledgeArticleAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **knowledge_article_id** | **string**|  | |
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

## `updateKnowledgeArticleAsync()`

```php
updateKnowledgeArticleAsync($tenant_id, $knowledge_article_id, $api_version, $x_api_version, $knowledge_article_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a knowledge article

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\KnowledgeArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$knowledge_article_id = 'knowledge_article_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$knowledge_article_update_dto = new \OpenAPI\Client\Model\KnowledgeArticleUpdateDto(); // \OpenAPI\Client\Model\KnowledgeArticleUpdateDto

try {
    $result = $apiInstance->updateKnowledgeArticleAsync($tenant_id, $knowledge_article_id, $api_version, $x_api_version, $knowledge_article_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeArticlesApi->updateKnowledgeArticleAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **knowledge_article_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **knowledge_article_update_dto** | [**\OpenAPI\Client\Model\KnowledgeArticleUpdateDto**](../Model/KnowledgeArticleUpdateDto.md)|  | [optional] |

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
