# OpenAPI\Client\NonFungibleTokensApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNonFungibleTokenAsync()**](NonFungibleTokensApi.md#createNonFungibleTokenAsync) | **POST** /api/v2/BlockchainsService/NonFungibleTokens | Create a new NFT |
| [**deleteNonFungibleTokenAsync()**](NonFungibleTokensApi.md#deleteNonFungibleTokenAsync) | **DELETE** /api/v2/BlockchainsService/NonFungibleTokens/{id} | Delete an NFT |
| [**getNonFungibleTokenByIdAsync()**](NonFungibleTokensApi.md#getNonFungibleTokenByIdAsync) | **GET** /api/v2/BlockchainsService/NonFungibleTokens/{id} | Get NFT by ID |
| [**getNonFungibleTokensAsync()**](NonFungibleTokensApi.md#getNonFungibleTokensAsync) | **GET** /api/v2/BlockchainsService/NonFungibleTokens | Get all non-fungible tokens |
| [**getNonFungibleTokensCountAsync()**](NonFungibleTokensApi.md#getNonFungibleTokensCountAsync) | **GET** /api/v2/BlockchainsService/NonFungibleTokens/Count | Get NFTs count |
| [**patchNonFungibleTokenAsync()**](NonFungibleTokensApi.md#patchNonFungibleTokenAsync) | **PATCH** /api/v2/BlockchainsService/NonFungibleTokens/{id} | Patch a non-fungible token |
| [**updateNonFungibleTokenAsync()**](NonFungibleTokensApi.md#updateNonFungibleTokenAsync) | **PUT** /api/v2/BlockchainsService/NonFungibleTokens/{id} | Update an NFT |


## `createNonFungibleTokenAsync()`

```php
createNonFungibleTokenAsync($tenant_id, $api_version, $x_api_version, $non_fungible_token_create_dto)
```

Create a new NFT

Creates a new non-fungible token for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NonFungibleTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$non_fungible_token_create_dto = new \OpenAPI\Client\Model\NonFungibleTokenCreateDto(); // \OpenAPI\Client\Model\NonFungibleTokenCreateDto

try {
    $apiInstance->createNonFungibleTokenAsync($tenant_id, $api_version, $x_api_version, $non_fungible_token_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling NonFungibleTokensApi->createNonFungibleTokenAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **non_fungible_token_create_dto** | [**\OpenAPI\Client\Model\NonFungibleTokenCreateDto**](../Model/NonFungibleTokenCreateDto.md)|  | [optional] |

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

## `deleteNonFungibleTokenAsync()`

```php
deleteNonFungibleTokenAsync($tenant_id, $id, $api_version, $x_api_version)
```

Delete an NFT

Deletes a non-fungible token for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NonFungibleTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteNonFungibleTokenAsync($tenant_id, $id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling NonFungibleTokensApi->deleteNonFungibleTokenAsync: ', $e->getMessage(), PHP_EOL;
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

## `getNonFungibleTokenByIdAsync()`

```php
getNonFungibleTokenByIdAsync($tenant_id, $id, $api_version, $x_api_version): \OpenAPI\Client\Model\NonFungibleTokenDto
```

Get NFT by ID

Retrieves a specific non-fungible token by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NonFungibleTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getNonFungibleTokenByIdAsync($tenant_id, $id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NonFungibleTokensApi->getNonFungibleTokenByIdAsync: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\NonFungibleTokenDto**](../Model/NonFungibleTokenDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNonFungibleTokensAsync()`

```php
getNonFungibleTokensAsync($tenant_id, $api_version, $x_api_version, $non_fungible_token_dto_collection_query_parameters): \OpenAPI\Client\Model\NonFungibleTokenDtoListEnvelope
```

Get all non-fungible tokens

Retrieves all NFTs for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NonFungibleTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$non_fungible_token_dto_collection_query_parameters = new \OpenAPI\Client\Model\NonFungibleTokenDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\NonFungibleTokenDtoCollectionQueryParameters

try {
    $result = $apiInstance->getNonFungibleTokensAsync($tenant_id, $api_version, $x_api_version, $non_fungible_token_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NonFungibleTokensApi->getNonFungibleTokensAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **non_fungible_token_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\NonFungibleTokenDtoCollectionQueryParameters**](../Model/NonFungibleTokenDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\NonFungibleTokenDtoListEnvelope**](../Model/NonFungibleTokenDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNonFungibleTokensCountAsync()`

```php
getNonFungibleTokensCountAsync($tenant_id, $api_version, $x_api_version, $non_fungible_token_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get NFTs count

Returns the count of NFTs for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NonFungibleTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$non_fungible_token_dto_collection_query_parameters = new \OpenAPI\Client\Model\NonFungibleTokenDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\NonFungibleTokenDtoCollectionQueryParameters

try {
    $result = $apiInstance->getNonFungibleTokensCountAsync($tenant_id, $api_version, $x_api_version, $non_fungible_token_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NonFungibleTokensApi->getNonFungibleTokensCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **non_fungible_token_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\NonFungibleTokenDtoCollectionQueryParameters**](../Model/NonFungibleTokenDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchNonFungibleTokenAsync()`

```php
patchNonFungibleTokenAsync($tenant_id, $id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a non-fungible token

Patch a non-fungible token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NonFungibleTokensApi(
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
    $result = $apiInstance->patchNonFungibleTokenAsync($tenant_id, $id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NonFungibleTokensApi->patchNonFungibleTokenAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateNonFungibleTokenAsync()`

```php
updateNonFungibleTokenAsync($tenant_id, $id, $api_version, $x_api_version, $non_fungible_token_update_dto)
```

Update an NFT

Updates an existing non-fungible token for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NonFungibleTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$non_fungible_token_update_dto = new \OpenAPI\Client\Model\NonFungibleTokenUpdateDto(); // \OpenAPI\Client\Model\NonFungibleTokenUpdateDto

try {
    $apiInstance->updateNonFungibleTokenAsync($tenant_id, $id, $api_version, $x_api_version, $non_fungible_token_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling NonFungibleTokensApi->updateNonFungibleTokenAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **non_fungible_token_update_dto** | [**\OpenAPI\Client\Model\NonFungibleTokenUpdateDto**](../Model/NonFungibleTokenUpdateDto.md)|  | [optional] |

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
