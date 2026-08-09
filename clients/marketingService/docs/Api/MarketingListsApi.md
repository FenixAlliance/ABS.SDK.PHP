# OpenAPI\Client\MarketingListsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createMarketingListAsync()**](MarketingListsApi.md#createMarketingListAsync) | **POST** /api/v2/MarketingService/MarketingLists | Create a marketing list |
| [**deleteMarketingListAsync()**](MarketingListsApi.md#deleteMarketingListAsync) | **DELETE** /api/v2/MarketingService/MarketingLists/{marketinglistId} | Delete a marketing list |
| [**getMarketingListDetailsAsync()**](MarketingListsApi.md#getMarketingListDetailsAsync) | **GET** /api/v2/MarketingService/MarketingLists/{marketinglistId} | Get marketing list by ID |
| [**getMarketingListODataAsync()**](MarketingListsApi.md#getMarketingListODataAsync) | **GET** /api/v2/MarketingService/MarketingLists | Get marketing lists |
| [**getMarketingListsCountAsync()**](MarketingListsApi.md#getMarketingListsCountAsync) | **GET** /api/v2/MarketingService/MarketingLists/Count | Get marketing lists count |
| [**patchMarketingListAsync()**](MarketingListsApi.md#patchMarketingListAsync) | **PATCH** /api/v2/MarketingService/MarketingLists/{marketinglistId} | Patch a marketing list |
| [**updateMarketingListAsync()**](MarketingListsApi.md#updateMarketingListAsync) | **PUT** /api/v2/MarketingService/MarketingLists/{marketinglistId} | Update a marketing list |


## `createMarketingListAsync()`

```php
createMarketingListAsync($tenant_id, $marketing_list_create_dto, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a marketing list

Creates a new marketing list for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MarketingListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$marketing_list_create_dto = new \OpenAPI\Client\Model\MarketingListCreateDto(); // \OpenAPI\Client\Model\MarketingListCreateDto
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->createMarketingListAsync($tenant_id, $marketing_list_create_dto, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketingListsApi->createMarketingListAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **marketing_list_create_dto** | [**\OpenAPI\Client\Model\MarketingListCreateDto**](../Model/MarketingListCreateDto.md)|  | |
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

## `deleteMarketingListAsync()`

```php
deleteMarketingListAsync($tenant_id, $marketinglist_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a marketing list

Deletes a marketing list by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MarketingListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$marketinglist_id = 'marketinglist_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteMarketingListAsync($tenant_id, $marketinglist_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketingListsApi->deleteMarketingListAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **marketinglist_id** | **string**|  | |
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

## `getMarketingListDetailsAsync()`

```php
getMarketingListDetailsAsync($tenant_id, $marketinglist_id, $api_version, $x_api_version): \OpenAPI\Client\Model\MarketingListDtoEnvelope
```

Get marketing list by ID

Retrieves the details of a specific marketing list by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MarketingListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$marketinglist_id = 'marketinglist_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getMarketingListDetailsAsync($tenant_id, $marketinglist_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketingListsApi->getMarketingListDetailsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **marketinglist_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MarketingListDtoEnvelope**](../Model/MarketingListDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMarketingListODataAsync()`

```php
getMarketingListODataAsync($tenant_id, $api_version, $x_api_version, $marketing_list_dto_collection_query_parameters): \OpenAPI\Client\Model\MarketingListDtoListEnvelope
```

Get marketing lists

Retrieves a collection of marketing lists for the specified tenant using OData query options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MarketingListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$marketing_list_dto_collection_query_parameters = new \OpenAPI\Client\Model\MarketingListDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\MarketingListDtoCollectionQueryParameters

try {
    $result = $apiInstance->getMarketingListODataAsync($tenant_id, $api_version, $x_api_version, $marketing_list_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketingListsApi->getMarketingListODataAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **marketing_list_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\MarketingListDtoCollectionQueryParameters**](../Model/MarketingListDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MarketingListDtoListEnvelope**](../Model/MarketingListDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMarketingListsCountAsync()`

```php
getMarketingListsCountAsync($tenant_id, $api_version, $x_api_version, $marketing_list_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get marketing lists count

Returns the count of marketing lists for the specified tenant using OData query options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MarketingListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$marketing_list_dto_collection_query_parameters = new \OpenAPI\Client\Model\MarketingListDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\MarketingListDtoCollectionQueryParameters

try {
    $result = $apiInstance->getMarketingListsCountAsync($tenant_id, $api_version, $x_api_version, $marketing_list_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketingListsApi->getMarketingListsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **marketing_list_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\MarketingListDtoCollectionQueryParameters**](../Model/MarketingListDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchMarketingListAsync()`

```php
patchMarketingListAsync($tenant_id, $marketinglist_id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a marketing list

Partially updates a marketing list by its ID using JSON Patch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MarketingListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$marketinglist_id = 'marketinglist_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchMarketingListAsync($tenant_id, $marketinglist_id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketingListsApi->patchMarketingListAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **marketinglist_id** | **string**|  | |
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

## `updateMarketingListAsync()`

```php
updateMarketingListAsync($tenant_id, $marketinglist_id, $marketing_list_update_dto, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a marketing list

Updates an existing marketing list by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MarketingListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$marketinglist_id = 'marketinglist_id_example'; // string
$marketing_list_update_dto = new \OpenAPI\Client\Model\MarketingListUpdateDto(); // \OpenAPI\Client\Model\MarketingListUpdateDto
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->updateMarketingListAsync($tenant_id, $marketinglist_id, $marketing_list_update_dto, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketingListsApi->updateMarketingListAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **marketinglist_id** | **string**|  | |
| **marketing_list_update_dto** | [**\OpenAPI\Client\Model\MarketingListUpdateDto**](../Model/MarketingListUpdateDto.md)|  | |
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
