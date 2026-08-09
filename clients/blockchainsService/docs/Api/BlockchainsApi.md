# OpenAPI\Client\BlockchainsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBlockchainAsync()**](BlockchainsApi.md#createBlockchainAsync) | **POST** /api/v2/BlockchainsService/Blockchains | Create a new blockchain |
| [**createBlockchainBlockAsync()**](BlockchainsApi.md#createBlockchainBlockAsync) | **POST** /api/v2/BlockchainsService/Blockchains/{blockchainId}/Blocks | Add a block to a blockchain |
| [**deleteBlockchainAsync()**](BlockchainsApi.md#deleteBlockchainAsync) | **DELETE** /api/v2/BlockchainsService/Blockchains/{id} | Delete a blockchain |
| [**deleteBlockchainBlockAsync()**](BlockchainsApi.md#deleteBlockchainBlockAsync) | **DELETE** /api/v2/BlockchainsService/Blockchains/{blockchainId}/Blocks/{blockId} | Delete a blockchain block |
| [**getBlockchainBlockByIdAsync()**](BlockchainsApi.md#getBlockchainBlockByIdAsync) | **GET** /api/v2/BlockchainsService/Blockchains/{blockchainId}/Blocks/{blockId} | Get a specific block |
| [**getBlockchainBlocksAsync()**](BlockchainsApi.md#getBlockchainBlocksAsync) | **GET** /api/v2/BlockchainsService/Blockchains/{blockchainId}/Blocks | Get blocks for a blockchain |
| [**getBlockchainBlocksCountAsync()**](BlockchainsApi.md#getBlockchainBlocksCountAsync) | **GET** /api/v2/BlockchainsService/Blockchains/{blockchainId}/Blocks/Count | Get block count for a blockchain |
| [**getBlockchainByIdAsync()**](BlockchainsApi.md#getBlockchainByIdAsync) | **GET** /api/v2/BlockchainsService/Blockchains/{id} | Get blockchain by ID |
| [**getBlockchainsAsync()**](BlockchainsApi.md#getBlockchainsAsync) | **GET** /api/v2/BlockchainsService/Blockchains | Get all blockchains |
| [**getBlockchainsCountAsync()**](BlockchainsApi.md#getBlockchainsCountAsync) | **GET** /api/v2/BlockchainsService/Blockchains/Count | Get blockchains count |
| [**patchBlockchainAsync()**](BlockchainsApi.md#patchBlockchainAsync) | **PATCH** /api/v2/BlockchainsService/Blockchains/{id} | Patch a blockchain |
| [**patchBlockchainBlockAsync()**](BlockchainsApi.md#patchBlockchainBlockAsync) | **PATCH** /api/v2/BlockchainsService/Blockchains/{blockchainId}/Blocks/{blockId} | Patch a blockchain block |
| [**updateBlockchainAsync()**](BlockchainsApi.md#updateBlockchainAsync) | **PUT** /api/v2/BlockchainsService/Blockchains/{id} | Update a blockchain |
| [**updateBlockchainBlockAsync()**](BlockchainsApi.md#updateBlockchainBlockAsync) | **PUT** /api/v2/BlockchainsService/Blockchains/{blockchainId}/Blocks/{blockId} | Update a blockchain block |


## `createBlockchainAsync()`

```php
createBlockchainAsync($tenant_id, $api_version, $x_api_version, $blockchain_create_dto)
```

Create a new blockchain

Creates a new blockchain for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlockchainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$blockchain_create_dto = new \OpenAPI\Client\Model\BlockchainCreateDto(); // \OpenAPI\Client\Model\BlockchainCreateDto

try {
    $apiInstance->createBlockchainAsync($tenant_id, $api_version, $x_api_version, $blockchain_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling BlockchainsApi->createBlockchainAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **blockchain_create_dto** | [**\OpenAPI\Client\Model\BlockchainCreateDto**](../Model/BlockchainCreateDto.md)|  | [optional] |

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

## `createBlockchainBlockAsync()`

```php
createBlockchainBlockAsync($tenant_id, $blockchain_id, $api_version, $x_api_version, $blockchain_block_create_dto)
```

Add a block to a blockchain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlockchainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$blockchain_id = 'blockchain_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$blockchain_block_create_dto = new \OpenAPI\Client\Model\BlockchainBlockCreateDto(); // \OpenAPI\Client\Model\BlockchainBlockCreateDto

try {
    $apiInstance->createBlockchainBlockAsync($tenant_id, $blockchain_id, $api_version, $x_api_version, $blockchain_block_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling BlockchainsApi->createBlockchainBlockAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **blockchain_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **blockchain_block_create_dto** | [**\OpenAPI\Client\Model\BlockchainBlockCreateDto**](../Model/BlockchainBlockCreateDto.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBlockchainAsync()`

```php
deleteBlockchainAsync($tenant_id, $id, $api_version, $x_api_version)
```

Delete a blockchain

Deletes a blockchain for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlockchainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteBlockchainAsync($tenant_id, $id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling BlockchainsApi->deleteBlockchainAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteBlockchainBlockAsync()`

```php
deleteBlockchainBlockAsync($tenant_id, $blockchain_id, $block_id, $api_version, $x_api_version)
```

Delete a blockchain block

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlockchainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$blockchain_id = 'blockchain_id_example'; // string
$block_id = 'block_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteBlockchainBlockAsync($tenant_id, $blockchain_id, $block_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling BlockchainsApi->deleteBlockchainBlockAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **blockchain_id** | **string**|  | |
| **block_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBlockchainBlockByIdAsync()`

```php
getBlockchainBlockByIdAsync($tenant_id, $blockchain_id, $block_id, $api_version, $x_api_version): \OpenAPI\Client\Model\BlockchainBlockDto
```

Get a specific block

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlockchainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$blockchain_id = 'blockchain_id_example'; // string
$block_id = 'block_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getBlockchainBlockByIdAsync($tenant_id, $blockchain_id, $block_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockchainsApi->getBlockchainBlockByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **blockchain_id** | **string**|  | |
| **block_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BlockchainBlockDto**](../Model/BlockchainBlockDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBlockchainBlocksAsync()`

```php
getBlockchainBlocksAsync($tenant_id, $blockchain_id, $api_version, $x_api_version, $blockchain_block_dto_collection_query_parameters): \OpenAPI\Client\Model\BlockchainBlockDtoListEnvelope
```

Get blocks for a blockchain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlockchainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$blockchain_id = 'blockchain_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$blockchain_block_dto_collection_query_parameters = new \OpenAPI\Client\Model\BlockchainBlockDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\BlockchainBlockDtoCollectionQueryParameters

try {
    $result = $apiInstance->getBlockchainBlocksAsync($tenant_id, $blockchain_id, $api_version, $x_api_version, $blockchain_block_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockchainsApi->getBlockchainBlocksAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **blockchain_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **blockchain_block_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\BlockchainBlockDtoCollectionQueryParameters**](../Model/BlockchainBlockDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BlockchainBlockDtoListEnvelope**](../Model/BlockchainBlockDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBlockchainBlocksCountAsync()`

```php
getBlockchainBlocksCountAsync($tenant_id, $blockchain_id, $api_version, $x_api_version, $blockchain_block_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get block count for a blockchain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlockchainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$blockchain_id = 'blockchain_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$blockchain_block_dto_collection_query_parameters = new \OpenAPI\Client\Model\BlockchainBlockDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\BlockchainBlockDtoCollectionQueryParameters

try {
    $result = $apiInstance->getBlockchainBlocksCountAsync($tenant_id, $blockchain_id, $api_version, $x_api_version, $blockchain_block_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockchainsApi->getBlockchainBlocksCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **blockchain_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **blockchain_block_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\BlockchainBlockDtoCollectionQueryParameters**](../Model/BlockchainBlockDtoCollectionQueryParameters.md)|  | [optional] |

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

## `getBlockchainByIdAsync()`

```php
getBlockchainByIdAsync($tenant_id, $id, $api_version, $x_api_version): \OpenAPI\Client\Model\BlockchainDto
```

Get blockchain by ID

Retrieves a specific blockchain by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlockchainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getBlockchainByIdAsync($tenant_id, $id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockchainsApi->getBlockchainByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BlockchainDto**](../Model/BlockchainDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBlockchainsAsync()`

```php
getBlockchainsAsync($tenant_id, $api_version, $x_api_version, $blockchain_dto_collection_query_parameters): \OpenAPI\Client\Model\BlockchainDtoListEnvelope
```

Get all blockchains

Retrieves all blockchains for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlockchainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$blockchain_dto_collection_query_parameters = new \OpenAPI\Client\Model\BlockchainDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\BlockchainDtoCollectionQueryParameters

try {
    $result = $apiInstance->getBlockchainsAsync($tenant_id, $api_version, $x_api_version, $blockchain_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockchainsApi->getBlockchainsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **blockchain_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\BlockchainDtoCollectionQueryParameters**](../Model/BlockchainDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BlockchainDtoListEnvelope**](../Model/BlockchainDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBlockchainsCountAsync()`

```php
getBlockchainsCountAsync($tenant_id, $api_version, $x_api_version, $blockchain_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get blockchains count

Returns the count of blockchains for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlockchainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$blockchain_dto_collection_query_parameters = new \OpenAPI\Client\Model\BlockchainDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\BlockchainDtoCollectionQueryParameters

try {
    $result = $apiInstance->getBlockchainsCountAsync($tenant_id, $api_version, $x_api_version, $blockchain_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockchainsApi->getBlockchainsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **blockchain_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\BlockchainDtoCollectionQueryParameters**](../Model/BlockchainDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchBlockchainAsync()`

```php
patchBlockchainAsync($tenant_id, $id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a blockchain

Patch a blockchain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlockchainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchBlockchainAsync($tenant_id, $id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockchainsApi->patchBlockchainAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
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

## `patchBlockchainBlockAsync()`

```php
patchBlockchainBlockAsync($tenant_id, $blockchain_id, $block_id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a blockchain block

Patch a blockchain block

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlockchainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$blockchain_id = 'blockchain_id_example'; // string
$block_id = 'block_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchBlockchainBlockAsync($tenant_id, $blockchain_id, $block_id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockchainsApi->patchBlockchainBlockAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **blockchain_id** | **string**|  | |
| **block_id** | **string**|  | |
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

## `updateBlockchainAsync()`

```php
updateBlockchainAsync($tenant_id, $id, $api_version, $x_api_version, $blockchain_update_dto)
```

Update a blockchain

Updates an existing blockchain for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlockchainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$blockchain_update_dto = new \OpenAPI\Client\Model\BlockchainUpdateDto(); // \OpenAPI\Client\Model\BlockchainUpdateDto

try {
    $apiInstance->updateBlockchainAsync($tenant_id, $id, $api_version, $x_api_version, $blockchain_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling BlockchainsApi->updateBlockchainAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **blockchain_update_dto** | [**\OpenAPI\Client\Model\BlockchainUpdateDto**](../Model/BlockchainUpdateDto.md)|  | [optional] |

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

## `updateBlockchainBlockAsync()`

```php
updateBlockchainBlockAsync($tenant_id, $blockchain_id, $block_id, $api_version, $x_api_version, $blockchain_block_update_dto)
```

Update a blockchain block

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BlockchainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$blockchain_id = 'blockchain_id_example'; // string
$block_id = 'block_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$blockchain_block_update_dto = new \OpenAPI\Client\Model\BlockchainBlockUpdateDto(); // \OpenAPI\Client\Model\BlockchainBlockUpdateDto

try {
    $apiInstance->updateBlockchainBlockAsync($tenant_id, $blockchain_id, $block_id, $api_version, $x_api_version, $blockchain_block_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling BlockchainsApi->updateBlockchainBlockAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **blockchain_id** | **string**|  | |
| **block_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **blockchain_block_update_dto** | [**\OpenAPI\Client\Model\BlockchainBlockUpdateDto**](../Model/BlockchainBlockUpdateDto.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
