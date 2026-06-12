# OpenAPI\Client\ItemPickListsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createItemPickListAsync()**](ItemPickListsApi.md#createItemPickListAsync) | **POST** /api/v2/LogisticsService/ItemPickLists | Create an item pick list |
| [**createItemPickListEntryAsync()**](ItemPickListsApi.md#createItemPickListEntryAsync) | **POST** /api/v2/LogisticsService/ItemPickLists/{pickListId}/Entries | Create a pick list entry |
| [**deleteItemPickListAsync()**](ItemPickListsApi.md#deleteItemPickListAsync) | **DELETE** /api/v2/LogisticsService/ItemPickLists/{pickListId} | Delete an item pick list |
| [**deleteItemPickListEntryAsync()**](ItemPickListsApi.md#deleteItemPickListEntryAsync) | **DELETE** /api/v2/LogisticsService/ItemPickLists/{pickListId}/Entries/{entryId} | Delete a pick list entry |
| [**getItemPickListByIdAsync()**](ItemPickListsApi.md#getItemPickListByIdAsync) | **GET** /api/v2/LogisticsService/ItemPickLists/{pickListId} | Get item pick list by ID |
| [**getItemPickListEntriesAsync()**](ItemPickListsApi.md#getItemPickListEntriesAsync) | **GET** /api/v2/LogisticsService/ItemPickLists/{pickListId}/Entries | Get pick list entries |
| [**getItemPickListEntriesCountAsync()**](ItemPickListsApi.md#getItemPickListEntriesCountAsync) | **GET** /api/v2/LogisticsService/ItemPickLists/{pickListId}/Entries/Count | Get pick list entries count |
| [**getItemPickListEntryByIdAsync()**](ItemPickListsApi.md#getItemPickListEntryByIdAsync) | **GET** /api/v2/LogisticsService/ItemPickLists/{pickListId}/Entries/{entryId} | Get pick list entry by ID |
| [**getItemPickListsAsync()**](ItemPickListsApi.md#getItemPickListsAsync) | **GET** /api/v2/LogisticsService/ItemPickLists | Get all item pick lists |
| [**getItemPickListsCountAsync()**](ItemPickListsApi.md#getItemPickListsCountAsync) | **GET** /api/v2/LogisticsService/ItemPickLists/Count | Get item pick lists count |
| [**patchItemPickListAsync()**](ItemPickListsApi.md#patchItemPickListAsync) | **PATCH** /api/v2/LogisticsService/ItemPickLists/{pickListId} | Patch an item pick list |
| [**patchItemPickListEntryAsync()**](ItemPickListsApi.md#patchItemPickListEntryAsync) | **PATCH** /api/v2/LogisticsService/ItemPickLists/{pickListId}/Entries/{entryId} | Patch a pick list entry |
| [**updateItemPickListAsync()**](ItemPickListsApi.md#updateItemPickListAsync) | **PUT** /api/v2/LogisticsService/ItemPickLists/{pickListId} | Update an item pick list |
| [**updateItemPickListEntryAsync()**](ItemPickListsApi.md#updateItemPickListEntryAsync) | **PUT** /api/v2/LogisticsService/ItemPickLists/{pickListId}/Entries/{entryId} | Update a pick list entry |


## `createItemPickListAsync()`

```php
createItemPickListAsync($tenant_id, $api_version, $x_api_version, $item_pick_list_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create an item pick list

Creates a new item pick list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemPickListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_pick_list_create_dto = new \OpenAPI\Client\Model\ItemPickListCreateDto(); // \OpenAPI\Client\Model\ItemPickListCreateDto

try {
    $result = $apiInstance->createItemPickListAsync($tenant_id, $api_version, $x_api_version, $item_pick_list_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPickListsApi->createItemPickListAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_pick_list_create_dto** | [**\OpenAPI\Client\Model\ItemPickListCreateDto**](../Model/ItemPickListCreateDto.md)|  | [optional] |

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

## `createItemPickListEntryAsync()`

```php
createItemPickListEntryAsync($tenant_id, $pick_list_id, $api_version, $x_api_version, $item_pick_list_entry_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a pick list entry

Creates a new pick list entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemPickListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$pick_list_id = 'pick_list_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_pick_list_entry_create_dto = new \OpenAPI\Client\Model\ItemPickListEntryCreateDto(); // \OpenAPI\Client\Model\ItemPickListEntryCreateDto

try {
    $result = $apiInstance->createItemPickListEntryAsync($tenant_id, $pick_list_id, $api_version, $x_api_version, $item_pick_list_entry_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPickListsApi->createItemPickListEntryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **pick_list_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_pick_list_entry_create_dto** | [**\OpenAPI\Client\Model\ItemPickListEntryCreateDto**](../Model/ItemPickListEntryCreateDto.md)|  | [optional] |

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

## `deleteItemPickListAsync()`

```php
deleteItemPickListAsync($tenant_id, $pick_list_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete an item pick list

Deletes an item pick list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemPickListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$pick_list_id = 'pick_list_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteItemPickListAsync($tenant_id, $pick_list_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPickListsApi->deleteItemPickListAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **pick_list_id** | **string**|  | |
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

## `deleteItemPickListEntryAsync()`

```php
deleteItemPickListEntryAsync($tenant_id, $pick_list_id, $entry_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a pick list entry

Deletes a pick list entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemPickListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$pick_list_id = 'pick_list_id_example'; // string
$entry_id = 'entry_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteItemPickListEntryAsync($tenant_id, $pick_list_id, $entry_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPickListsApi->deleteItemPickListEntryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **pick_list_id** | **string**|  | |
| **entry_id** | **string**|  | |
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

## `getItemPickListByIdAsync()`

```php
getItemPickListByIdAsync($tenant_id, $pick_list_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemPickListDtoEnvelope
```

Get item pick list by ID

Retrieves a specific item pick list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemPickListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$pick_list_id = 'pick_list_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemPickListByIdAsync($tenant_id, $pick_list_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPickListsApi->getItemPickListByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **pick_list_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemPickListDtoEnvelope**](../Model/ItemPickListDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemPickListEntriesAsync()`

```php
getItemPickListEntriesAsync($tenant_id, $pick_list_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemPickListEntryDtoListEnvelope
```

Get pick list entries

Retrieves all entries for the specified pick list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemPickListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$pick_list_id = 'pick_list_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemPickListEntriesAsync($tenant_id, $pick_list_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPickListsApi->getItemPickListEntriesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **pick_list_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemPickListEntryDtoListEnvelope**](../Model/ItemPickListEntryDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemPickListEntriesCountAsync()`

```php
getItemPickListEntriesCountAsync($tenant_id, $pick_list_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get pick list entries count

Returns the count of pick list entries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemPickListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$pick_list_id = 'pick_list_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemPickListEntriesCountAsync($tenant_id, $pick_list_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPickListsApi->getItemPickListEntriesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **pick_list_id** | **string**|  | |
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

## `getItemPickListEntryByIdAsync()`

```php
getItemPickListEntryByIdAsync($tenant_id, $pick_list_id, $entry_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemPickListEntryDtoEnvelope
```

Get pick list entry by ID

Retrieves a specific pick list entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemPickListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$pick_list_id = 'pick_list_id_example'; // string
$entry_id = 'entry_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemPickListEntryByIdAsync($tenant_id, $pick_list_id, $entry_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPickListsApi->getItemPickListEntryByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **pick_list_id** | **string**|  | |
| **entry_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemPickListEntryDtoEnvelope**](../Model/ItemPickListEntryDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemPickListsAsync()`

```php
getItemPickListsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemPickListDtoListEnvelope
```

Get all item pick lists

Retrieves all item pick lists for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemPickListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemPickListsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPickListsApi->getItemPickListsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemPickListDtoListEnvelope**](../Model/ItemPickListDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemPickListsCountAsync()`

```php
getItemPickListsCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get item pick lists count

Returns the count of item pick lists.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemPickListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemPickListsCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPickListsApi->getItemPickListsCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `patchItemPickListAsync()`

```php
patchItemPickListAsync($tenant_id, $pick_list_id, $api_version, $x_api_version, $operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch an item pick list

Applies a JSON Patch document to an item pick list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemPickListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$pick_list_id = 'pick_list_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$operation = array(new \OpenAPI\Client\Model\Operation()); // \OpenAPI\Client\Model\Operation[]

try {
    $result = $apiInstance->patchItemPickListAsync($tenant_id, $pick_list_id, $api_version, $x_api_version, $operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPickListsApi->patchItemPickListAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **pick_list_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **operation** | [**\OpenAPI\Client\Model\Operation[]**](../Model/Operation.md)|  | [optional] |

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

## `patchItemPickListEntryAsync()`

```php
patchItemPickListEntryAsync($tenant_id, $pick_list_id, $entry_id, $api_version, $x_api_version, $operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a pick list entry

Applies a JSON Patch document to a pick list entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemPickListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$pick_list_id = 'pick_list_id_example'; // string
$entry_id = 'entry_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$operation = array(new \OpenAPI\Client\Model\Operation()); // \OpenAPI\Client\Model\Operation[]

try {
    $result = $apiInstance->patchItemPickListEntryAsync($tenant_id, $pick_list_id, $entry_id, $api_version, $x_api_version, $operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPickListsApi->patchItemPickListEntryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **pick_list_id** | **string**|  | |
| **entry_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **operation** | [**\OpenAPI\Client\Model\Operation[]**](../Model/Operation.md)|  | [optional] |

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

## `updateItemPickListAsync()`

```php
updateItemPickListAsync($tenant_id, $pick_list_id, $api_version, $x_api_version, $item_pick_list_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update an item pick list

Updates an existing item pick list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemPickListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$pick_list_id = 'pick_list_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_pick_list_update_dto = new \OpenAPI\Client\Model\ItemPickListUpdateDto(); // \OpenAPI\Client\Model\ItemPickListUpdateDto

try {
    $result = $apiInstance->updateItemPickListAsync($tenant_id, $pick_list_id, $api_version, $x_api_version, $item_pick_list_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPickListsApi->updateItemPickListAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **pick_list_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_pick_list_update_dto** | [**\OpenAPI\Client\Model\ItemPickListUpdateDto**](../Model/ItemPickListUpdateDto.md)|  | [optional] |

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

## `updateItemPickListEntryAsync()`

```php
updateItemPickListEntryAsync($tenant_id, $pick_list_id, $entry_id, $api_version, $x_api_version, $item_pick_list_entry_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a pick list entry

Updates an existing pick list entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemPickListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$pick_list_id = 'pick_list_id_example'; // string
$entry_id = 'entry_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_pick_list_entry_update_dto = new \OpenAPI\Client\Model\ItemPickListEntryUpdateDto(); // \OpenAPI\Client\Model\ItemPickListEntryUpdateDto

try {
    $result = $apiInstance->updateItemPickListEntryAsync($tenant_id, $pick_list_id, $entry_id, $api_version, $x_api_version, $item_pick_list_entry_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPickListsApi->updateItemPickListEntryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **pick_list_id** | **string**|  | |
| **entry_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_pick_list_entry_update_dto** | [**\OpenAPI\Client\Model\ItemPickListEntryUpdateDto**](../Model/ItemPickListEntryUpdateDto.md)|  | [optional] |

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
