# OpenAPI\Client\WarehousingApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createItemPackingSlipAsync()**](WarehousingApi.md#createItemPackingSlipAsync) | **POST** /api/v2/LogisticsService/ItemPackingSlips | Create an item packing slip |
| [**createItemPackingSlipEntryAsync()**](WarehousingApi.md#createItemPackingSlipEntryAsync) | **POST** /api/v2/LogisticsService/ItemPackingSlips/{packingSlipId}/Entries | Create a packing slip entry |
| [**createItemPickListAsync()**](WarehousingApi.md#createItemPickListAsync) | **POST** /api/v2/LogisticsService/ItemPickLists | Create an item pick list |
| [**createItemPickListEntryAsync()**](WarehousingApi.md#createItemPickListEntryAsync) | **POST** /api/v2/LogisticsService/ItemPickLists/{pickListId}/Entries | Create a pick list entry |
| [**createItemRestockAsync()**](WarehousingApi.md#createItemRestockAsync) | **POST** /api/v2/LogisticsService/ItemRestocks | Create an item restock |
| [**createItemRestockEntryAsync()**](WarehousingApi.md#createItemRestockEntryAsync) | **POST** /api/v2/LogisticsService/ItemRestocks/{restockId}/Entries | Create a restock entry |
| [**createItemRetainSampleAsync()**](WarehousingApi.md#createItemRetainSampleAsync) | **POST** /api/v2/LogisticsService/ItemRetainSamples | Create an item retain sample |
| [**createWarehouseAsync()**](WarehousingApi.md#createWarehouseAsync) | **POST** /api/v2/LogisticsService/Warehouses | Create a warehouse |
| [**deleteItemPackingSlipAsync()**](WarehousingApi.md#deleteItemPackingSlipAsync) | **DELETE** /api/v2/LogisticsService/ItemPackingSlips/{packingSlipId} | Delete an item packing slip |
| [**deleteItemPackingSlipEntryAsync()**](WarehousingApi.md#deleteItemPackingSlipEntryAsync) | **DELETE** /api/v2/LogisticsService/ItemPackingSlips/{packingSlipId}/Entries/{entryId} | Delete a packing slip entry |
| [**deleteItemPickListAsync()**](WarehousingApi.md#deleteItemPickListAsync) | **DELETE** /api/v2/LogisticsService/ItemPickLists/{pickListId} | Delete an item pick list |
| [**deleteItemPickListEntryAsync()**](WarehousingApi.md#deleteItemPickListEntryAsync) | **DELETE** /api/v2/LogisticsService/ItemPickLists/{pickListId}/Entries/{entryId} | Delete a pick list entry |
| [**deleteItemRestockAsync()**](WarehousingApi.md#deleteItemRestockAsync) | **DELETE** /api/v2/LogisticsService/ItemRestocks/{restockId} | Delete an item restock |
| [**deleteItemRestockEntryAsync()**](WarehousingApi.md#deleteItemRestockEntryAsync) | **DELETE** /api/v2/LogisticsService/ItemRestocks/{restockId}/Entries/{entryId} | Delete a restock entry |
| [**deleteItemRetainSampleAsync()**](WarehousingApi.md#deleteItemRetainSampleAsync) | **DELETE** /api/v2/LogisticsService/ItemRetainSamples/{retainSampleId} | Delete an item retain sample |
| [**deleteWarehouseAsync()**](WarehousingApi.md#deleteWarehouseAsync) | **DELETE** /api/v2/LogisticsService/Warehouses/{warehouseId} | Delete a warehouse |
| [**getItemPackingSlipByIdAsync()**](WarehousingApi.md#getItemPackingSlipByIdAsync) | **GET** /api/v2/LogisticsService/ItemPackingSlips/{packingSlipId} | Get item packing slip by ID |
| [**getItemPackingSlipEntriesAsync()**](WarehousingApi.md#getItemPackingSlipEntriesAsync) | **GET** /api/v2/LogisticsService/ItemPackingSlips/{packingSlipId}/Entries | Get packing slip entries |
| [**getItemPackingSlipEntriesCountAsync()**](WarehousingApi.md#getItemPackingSlipEntriesCountAsync) | **GET** /api/v2/LogisticsService/ItemPackingSlips/{packingSlipId}/Entries/Count | Get packing slip entries count |
| [**getItemPackingSlipEntryByIdAsync()**](WarehousingApi.md#getItemPackingSlipEntryByIdAsync) | **GET** /api/v2/LogisticsService/ItemPackingSlips/{packingSlipId}/Entries/{entryId} | Get packing slip entry by ID |
| [**getItemPackingSlipsAsync()**](WarehousingApi.md#getItemPackingSlipsAsync) | **GET** /api/v2/LogisticsService/ItemPackingSlips | Get all item packing slips |
| [**getItemPackingSlipsCountAsync()**](WarehousingApi.md#getItemPackingSlipsCountAsync) | **GET** /api/v2/LogisticsService/ItemPackingSlips/Count | Get item packing slips count |
| [**getItemPickListByIdAsync()**](WarehousingApi.md#getItemPickListByIdAsync) | **GET** /api/v2/LogisticsService/ItemPickLists/{pickListId} | Get item pick list by ID |
| [**getItemPickListEntriesAsync()**](WarehousingApi.md#getItemPickListEntriesAsync) | **GET** /api/v2/LogisticsService/ItemPickLists/{pickListId}/Entries | Get pick list entries |
| [**getItemPickListEntriesCountAsync()**](WarehousingApi.md#getItemPickListEntriesCountAsync) | **GET** /api/v2/LogisticsService/ItemPickLists/{pickListId}/Entries/Count | Get pick list entries count |
| [**getItemPickListEntryByIdAsync()**](WarehousingApi.md#getItemPickListEntryByIdAsync) | **GET** /api/v2/LogisticsService/ItemPickLists/{pickListId}/Entries/{entryId} | Get pick list entry by ID |
| [**getItemPickListsAsync()**](WarehousingApi.md#getItemPickListsAsync) | **GET** /api/v2/LogisticsService/ItemPickLists | Get all item pick lists |
| [**getItemPickListsCountAsync()**](WarehousingApi.md#getItemPickListsCountAsync) | **GET** /api/v2/LogisticsService/ItemPickLists/Count | Get item pick lists count |
| [**getItemRestockByIdAsync()**](WarehousingApi.md#getItemRestockByIdAsync) | **GET** /api/v2/LogisticsService/ItemRestocks/{restockId} | Get item restock by ID |
| [**getItemRestockEntriesAsync()**](WarehousingApi.md#getItemRestockEntriesAsync) | **GET** /api/v2/LogisticsService/ItemRestocks/{restockId}/Entries | Get restock entries |
| [**getItemRestockEntriesCountAsync()**](WarehousingApi.md#getItemRestockEntriesCountAsync) | **GET** /api/v2/LogisticsService/ItemRestocks/{restockId}/Entries/Count | Get restock entries count |
| [**getItemRestockEntryByIdAsync()**](WarehousingApi.md#getItemRestockEntryByIdAsync) | **GET** /api/v2/LogisticsService/ItemRestocks/{restockId}/Entries/{entryId} | Get restock entry by ID |
| [**getItemRestocksAsync()**](WarehousingApi.md#getItemRestocksAsync) | **GET** /api/v2/LogisticsService/ItemRestocks | Get all item restocks |
| [**getItemRestocksCountAsync()**](WarehousingApi.md#getItemRestocksCountAsync) | **GET** /api/v2/LogisticsService/ItemRestocks/Count | Get item restocks count |
| [**getItemRetainSampleByIdAsync()**](WarehousingApi.md#getItemRetainSampleByIdAsync) | **GET** /api/v2/LogisticsService/ItemRetainSamples/{retainSampleId} | Get item retain sample by ID |
| [**getItemRetainSamplesAsync()**](WarehousingApi.md#getItemRetainSamplesAsync) | **GET** /api/v2/LogisticsService/ItemRetainSamples | Get all item retain samples |
| [**getItemRetainSamplesCountAsync()**](WarehousingApi.md#getItemRetainSamplesCountAsync) | **GET** /api/v2/LogisticsService/ItemRetainSamples/Count | Get item retain samples count |
| [**getWarehouseByIdAsync()**](WarehousingApi.md#getWarehouseByIdAsync) | **GET** /api/v2/LogisticsService/Warehouses/{warehouseId} | Get warehouse by ID |
| [**getWarehousesAsync()**](WarehousingApi.md#getWarehousesAsync) | **GET** /api/v2/LogisticsService/Warehouses | Get all warehouses |
| [**getWarehousesCountAsync()**](WarehousingApi.md#getWarehousesCountAsync) | **GET** /api/v2/LogisticsService/Warehouses/Count | Get warehouses count |
| [**updateItemPackingSlipAsync()**](WarehousingApi.md#updateItemPackingSlipAsync) | **PUT** /api/v2/LogisticsService/ItemPackingSlips/{packingSlipId} | Update an item packing slip |
| [**updateItemPackingSlipEntryAsync()**](WarehousingApi.md#updateItemPackingSlipEntryAsync) | **PUT** /api/v2/LogisticsService/ItemPackingSlips/{packingSlipId}/Entries/{entryId} | Update a packing slip entry |
| [**updateItemPickListAsync()**](WarehousingApi.md#updateItemPickListAsync) | **PUT** /api/v2/LogisticsService/ItemPickLists/{pickListId} | Update an item pick list |
| [**updateItemPickListEntryAsync()**](WarehousingApi.md#updateItemPickListEntryAsync) | **PUT** /api/v2/LogisticsService/ItemPickLists/{pickListId}/Entries/{entryId} | Update a pick list entry |
| [**updateItemRestockAsync()**](WarehousingApi.md#updateItemRestockAsync) | **PUT** /api/v2/LogisticsService/ItemRestocks/{restockId} | Update an item restock |
| [**updateItemRestockEntryAsync()**](WarehousingApi.md#updateItemRestockEntryAsync) | **PUT** /api/v2/LogisticsService/ItemRestocks/{restockId}/Entries/{entryId} | Update a restock entry |
| [**updateItemRetainSampleAsync()**](WarehousingApi.md#updateItemRetainSampleAsync) | **PUT** /api/v2/LogisticsService/ItemRetainSamples/{retainSampleId} | Update an item retain sample |
| [**updateWarehouseAsync()**](WarehousingApi.md#updateWarehouseAsync) | **PUT** /api/v2/LogisticsService/Warehouses/{warehouseId} | Update a warehouse |


## `createItemPackingSlipAsync()`

```php
createItemPackingSlipAsync($tenant_id, $api_version, $x_api_version, $item_packing_slip_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create an item packing slip

Creates a new item packing slip.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_packing_slip_create_dto = new \OpenAPI\Client\Model\ItemPackingSlipCreateDto(); // \OpenAPI\Client\Model\ItemPackingSlipCreateDto

try {
    $result = $apiInstance->createItemPackingSlipAsync($tenant_id, $api_version, $x_api_version, $item_packing_slip_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousingApi->createItemPackingSlipAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_packing_slip_create_dto** | [**\OpenAPI\Client\Model\ItemPackingSlipCreateDto**](../Model/ItemPackingSlipCreateDto.md)|  | [optional] |

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

## `createItemPackingSlipEntryAsync()`

```php
createItemPackingSlipEntryAsync($tenant_id, $packing_slip_id, $api_version, $x_api_version, $item_packing_slip_entry_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a packing slip entry

Creates a new packing slip entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$packing_slip_id = 'packing_slip_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_packing_slip_entry_create_dto = new \OpenAPI\Client\Model\ItemPackingSlipEntryCreateDto(); // \OpenAPI\Client\Model\ItemPackingSlipEntryCreateDto

try {
    $result = $apiInstance->createItemPackingSlipEntryAsync($tenant_id, $packing_slip_id, $api_version, $x_api_version, $item_packing_slip_entry_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousingApi->createItemPackingSlipEntryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **packing_slip_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_packing_slip_entry_create_dto** | [**\OpenAPI\Client\Model\ItemPackingSlipEntryCreateDto**](../Model/ItemPackingSlipEntryCreateDto.md)|  | [optional] |

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



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
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
    echo 'Exception when calling WarehousingApi->createItemPickListAsync: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
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
    echo 'Exception when calling WarehousingApi->createItemPickListEntryAsync: ', $e->getMessage(), PHP_EOL;
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

## `createItemRestockAsync()`

```php
createItemRestockAsync($tenant_id, $api_version, $x_api_version, $item_restock_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create an item restock

Creates a new item restock.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_restock_create_dto = new \OpenAPI\Client\Model\ItemRestockCreateDto(); // \OpenAPI\Client\Model\ItemRestockCreateDto

try {
    $result = $apiInstance->createItemRestockAsync($tenant_id, $api_version, $x_api_version, $item_restock_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousingApi->createItemRestockAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_restock_create_dto** | [**\OpenAPI\Client\Model\ItemRestockCreateDto**](../Model/ItemRestockCreateDto.md)|  | [optional] |

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

## `createItemRestockEntryAsync()`

```php
createItemRestockEntryAsync($tenant_id, $restock_id, $api_version, $x_api_version, $item_restock_entry_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a restock entry

Creates a new restock entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$restock_id = 'restock_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_restock_entry_create_dto = new \OpenAPI\Client\Model\ItemRestockEntryCreateDto(); // \OpenAPI\Client\Model\ItemRestockEntryCreateDto

try {
    $result = $apiInstance->createItemRestockEntryAsync($tenant_id, $restock_id, $api_version, $x_api_version, $item_restock_entry_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousingApi->createItemRestockEntryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **restock_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_restock_entry_create_dto** | [**\OpenAPI\Client\Model\ItemRestockEntryCreateDto**](../Model/ItemRestockEntryCreateDto.md)|  | [optional] |

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

## `createItemRetainSampleAsync()`

```php
createItemRetainSampleAsync($tenant_id, $api_version, $x_api_version, $item_retain_sample_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create an item retain sample

Creates a new item retain sample.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_retain_sample_create_dto = new \OpenAPI\Client\Model\ItemRetainSampleCreateDto(); // \OpenAPI\Client\Model\ItemRetainSampleCreateDto

try {
    $result = $apiInstance->createItemRetainSampleAsync($tenant_id, $api_version, $x_api_version, $item_retain_sample_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousingApi->createItemRetainSampleAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_retain_sample_create_dto** | [**\OpenAPI\Client\Model\ItemRetainSampleCreateDto**](../Model/ItemRetainSampleCreateDto.md)|  | [optional] |

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

## `createWarehouseAsync()`

```php
createWarehouseAsync($tenant_id, $api_version, $x_api_version, $warehouse_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a warehouse

Creates a new warehouse.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$warehouse_create_dto = new \OpenAPI\Client\Model\WarehouseCreateDto(); // \OpenAPI\Client\Model\WarehouseCreateDto

try {
    $result = $apiInstance->createWarehouseAsync($tenant_id, $api_version, $x_api_version, $warehouse_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousingApi->createWarehouseAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **warehouse_create_dto** | [**\OpenAPI\Client\Model\WarehouseCreateDto**](../Model/WarehouseCreateDto.md)|  | [optional] |

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

## `deleteItemPackingSlipAsync()`

```php
deleteItemPackingSlipAsync($tenant_id, $packing_slip_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete an item packing slip

Deletes an item packing slip.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$packing_slip_id = 'packing_slip_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteItemPackingSlipAsync($tenant_id, $packing_slip_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousingApi->deleteItemPackingSlipAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **packing_slip_id** | **string**|  | |
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

## `deleteItemPackingSlipEntryAsync()`

```php
deleteItemPackingSlipEntryAsync($tenant_id, $packing_slip_id, $entry_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a packing slip entry

Deletes a packing slip entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$packing_slip_id = 'packing_slip_id_example'; // string
$entry_id = 'entry_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteItemPackingSlipEntryAsync($tenant_id, $packing_slip_id, $entry_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousingApi->deleteItemPackingSlipEntryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **packing_slip_id** | **string**|  | |
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



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
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
    echo 'Exception when calling WarehousingApi->deleteItemPickListAsync: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
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
    echo 'Exception when calling WarehousingApi->deleteItemPickListEntryAsync: ', $e->getMessage(), PHP_EOL;
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

## `deleteItemRestockAsync()`

```php
deleteItemRestockAsync($tenant_id, $restock_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete an item restock

Deletes an item restock.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$restock_id = 'restock_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteItemRestockAsync($tenant_id, $restock_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousingApi->deleteItemRestockAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **restock_id** | **string**|  | |
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

## `deleteItemRestockEntryAsync()`

```php
deleteItemRestockEntryAsync($tenant_id, $restock_id, $entry_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a restock entry

Deletes a restock entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$restock_id = 'restock_id_example'; // string
$entry_id = 'entry_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteItemRestockEntryAsync($tenant_id, $restock_id, $entry_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousingApi->deleteItemRestockEntryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **restock_id** | **string**|  | |
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

## `deleteItemRetainSampleAsync()`

```php
deleteItemRetainSampleAsync($tenant_id, $retain_sample_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete an item retain sample

Deletes an item retain sample.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$retain_sample_id = 'retain_sample_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteItemRetainSampleAsync($tenant_id, $retain_sample_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousingApi->deleteItemRetainSampleAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **retain_sample_id** | **string**|  | |
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

## `deleteWarehouseAsync()`

```php
deleteWarehouseAsync($tenant_id, $warehouse_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a warehouse

Deletes a warehouse.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$warehouse_id = 'warehouse_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteWarehouseAsync($tenant_id, $warehouse_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousingApi->deleteWarehouseAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **warehouse_id** | **string**|  | |
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

## `getItemPackingSlipByIdAsync()`

```php
getItemPackingSlipByIdAsync($tenant_id, $packing_slip_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemPackingSlipDtoEnvelope
```

Get item packing slip by ID

Retrieves a specific item packing slip.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$packing_slip_id = 'packing_slip_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemPackingSlipByIdAsync($tenant_id, $packing_slip_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousingApi->getItemPackingSlipByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **packing_slip_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemPackingSlipDtoEnvelope**](../Model/ItemPackingSlipDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemPackingSlipEntriesAsync()`

```php
getItemPackingSlipEntriesAsync($tenant_id, $packing_slip_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemPackingSlipEntryDtoListEnvelope
```

Get packing slip entries

Retrieves all entries for the specified packing slip.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$packing_slip_id = 'packing_slip_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemPackingSlipEntriesAsync($tenant_id, $packing_slip_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousingApi->getItemPackingSlipEntriesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **packing_slip_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemPackingSlipEntryDtoListEnvelope**](../Model/ItemPackingSlipEntryDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemPackingSlipEntriesCountAsync()`

```php
getItemPackingSlipEntriesCountAsync($tenant_id, $packing_slip_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get packing slip entries count

Returns the count of packing slip entries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$packing_slip_id = 'packing_slip_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemPackingSlipEntriesCountAsync($tenant_id, $packing_slip_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousingApi->getItemPackingSlipEntriesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **packing_slip_id** | **string**|  | |
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

## `getItemPackingSlipEntryByIdAsync()`

```php
getItemPackingSlipEntryByIdAsync($tenant_id, $packing_slip_id, $entry_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemPackingSlipEntryDtoEnvelope
```

Get packing slip entry by ID

Retrieves a specific packing slip entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$packing_slip_id = 'packing_slip_id_example'; // string
$entry_id = 'entry_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemPackingSlipEntryByIdAsync($tenant_id, $packing_slip_id, $entry_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousingApi->getItemPackingSlipEntryByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **packing_slip_id** | **string**|  | |
| **entry_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemPackingSlipEntryDtoEnvelope**](../Model/ItemPackingSlipEntryDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemPackingSlipsAsync()`

```php
getItemPackingSlipsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemPackingSlipDtoListEnvelope
```

Get all item packing slips

Retrieves all item packing slips for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemPackingSlipsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousingApi->getItemPackingSlipsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemPackingSlipDtoListEnvelope**](../Model/ItemPackingSlipDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemPackingSlipsCountAsync()`

```php
getItemPackingSlipsCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get item packing slips count

Returns the count of item packing slips.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemPackingSlipsCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousingApi->getItemPackingSlipsCountAsync: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
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
    echo 'Exception when calling WarehousingApi->getItemPickListByIdAsync: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
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
    echo 'Exception when calling WarehousingApi->getItemPickListEntriesAsync: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
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
    echo 'Exception when calling WarehousingApi->getItemPickListEntriesCountAsync: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
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
    echo 'Exception when calling WarehousingApi->getItemPickListEntryByIdAsync: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
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
    echo 'Exception when calling WarehousingApi->getItemPickListsAsync: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
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
    echo 'Exception when calling WarehousingApi->getItemPickListsCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `getItemRestockByIdAsync()`

```php
getItemRestockByIdAsync($tenant_id, $restock_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemRestockDtoEnvelope
```

Get item restock by ID

Retrieves a specific item restock.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$restock_id = 'restock_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemRestockByIdAsync($tenant_id, $restock_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousingApi->getItemRestockByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **restock_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemRestockDtoEnvelope**](../Model/ItemRestockDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemRestockEntriesAsync()`

```php
getItemRestockEntriesAsync($tenant_id, $restock_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemRestockEntryDtoListEnvelope
```

Get restock entries

Retrieves all entries for the specified restock.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$restock_id = 'restock_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemRestockEntriesAsync($tenant_id, $restock_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousingApi->getItemRestockEntriesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **restock_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemRestockEntryDtoListEnvelope**](../Model/ItemRestockEntryDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemRestockEntriesCountAsync()`

```php
getItemRestockEntriesCountAsync($tenant_id, $restock_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get restock entries count

Returns the count of restock entries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$restock_id = 'restock_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemRestockEntriesCountAsync($tenant_id, $restock_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousingApi->getItemRestockEntriesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **restock_id** | **string**|  | |
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

## `getItemRestockEntryByIdAsync()`

```php
getItemRestockEntryByIdAsync($tenant_id, $restock_id, $entry_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemRestockEntryDtoEnvelope
```

Get restock entry by ID

Retrieves a specific restock entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$restock_id = 'restock_id_example'; // string
$entry_id = 'entry_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemRestockEntryByIdAsync($tenant_id, $restock_id, $entry_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousingApi->getItemRestockEntryByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **restock_id** | **string**|  | |
| **entry_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemRestockEntryDtoEnvelope**](../Model/ItemRestockEntryDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemRestocksAsync()`

```php
getItemRestocksAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemRestockDtoListEnvelope
```

Get all item restocks

Retrieves all item restocks for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemRestocksAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousingApi->getItemRestocksAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemRestockDtoListEnvelope**](../Model/ItemRestockDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemRestocksCountAsync()`

```php
getItemRestocksCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get item restocks count

Returns the count of item restocks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemRestocksCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousingApi->getItemRestocksCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `getItemRetainSampleByIdAsync()`

```php
getItemRetainSampleByIdAsync($tenant_id, $retain_sample_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemRetainSampleDtoEnvelope
```

Get item retain sample by ID

Retrieves a specific item retain sample.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$retain_sample_id = 'retain_sample_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemRetainSampleByIdAsync($tenant_id, $retain_sample_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousingApi->getItemRetainSampleByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **retain_sample_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemRetainSampleDtoEnvelope**](../Model/ItemRetainSampleDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemRetainSamplesAsync()`

```php
getItemRetainSamplesAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemRetainSampleDtoListEnvelope
```

Get all item retain samples

Retrieves all item retain samples for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemRetainSamplesAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousingApi->getItemRetainSamplesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemRetainSampleDtoListEnvelope**](../Model/ItemRetainSampleDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemRetainSamplesCountAsync()`

```php
getItemRetainSamplesCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get item retain samples count

Returns the count of item retain samples.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemRetainSamplesCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousingApi->getItemRetainSamplesCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `getWarehouseByIdAsync()`

```php
getWarehouseByIdAsync($tenant_id, $warehouse_id, $api_version, $x_api_version): \OpenAPI\Client\Model\WarehouseDtoEnvelope
```

Get warehouse by ID

Retrieves a specific warehouse.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$warehouse_id = 'warehouse_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getWarehouseByIdAsync($tenant_id, $warehouse_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousingApi->getWarehouseByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **warehouse_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WarehouseDtoEnvelope**](../Model/WarehouseDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWarehousesAsync()`

```php
getWarehousesAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\WarehouseDtoListEnvelope
```

Get all warehouses

Retrieves all warehouses for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getWarehousesAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousingApi->getWarehousesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WarehouseDtoListEnvelope**](../Model/WarehouseDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWarehousesCountAsync()`

```php
getWarehousesCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get warehouses count

Returns the count of warehouses.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getWarehousesCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousingApi->getWarehousesCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateItemPackingSlipAsync()`

```php
updateItemPackingSlipAsync($tenant_id, $packing_slip_id, $api_version, $x_api_version, $item_packing_slip_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update an item packing slip

Updates an existing item packing slip.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$packing_slip_id = 'packing_slip_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_packing_slip_update_dto = new \OpenAPI\Client\Model\ItemPackingSlipUpdateDto(); // \OpenAPI\Client\Model\ItemPackingSlipUpdateDto

try {
    $result = $apiInstance->updateItemPackingSlipAsync($tenant_id, $packing_slip_id, $api_version, $x_api_version, $item_packing_slip_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousingApi->updateItemPackingSlipAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **packing_slip_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_packing_slip_update_dto** | [**\OpenAPI\Client\Model\ItemPackingSlipUpdateDto**](../Model/ItemPackingSlipUpdateDto.md)|  | [optional] |

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

## `updateItemPackingSlipEntryAsync()`

```php
updateItemPackingSlipEntryAsync($tenant_id, $packing_slip_id, $entry_id, $api_version, $x_api_version, $item_packing_slip_entry_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a packing slip entry

Updates an existing packing slip entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$packing_slip_id = 'packing_slip_id_example'; // string
$entry_id = 'entry_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_packing_slip_entry_update_dto = new \OpenAPI\Client\Model\ItemPackingSlipEntryUpdateDto(); // \OpenAPI\Client\Model\ItemPackingSlipEntryUpdateDto

try {
    $result = $apiInstance->updateItemPackingSlipEntryAsync($tenant_id, $packing_slip_id, $entry_id, $api_version, $x_api_version, $item_packing_slip_entry_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousingApi->updateItemPackingSlipEntryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **packing_slip_id** | **string**|  | |
| **entry_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_packing_slip_entry_update_dto** | [**\OpenAPI\Client\Model\ItemPackingSlipEntryUpdateDto**](../Model/ItemPackingSlipEntryUpdateDto.md)|  | [optional] |

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



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
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
    echo 'Exception when calling WarehousingApi->updateItemPickListAsync: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
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
    echo 'Exception when calling WarehousingApi->updateItemPickListEntryAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateItemRestockAsync()`

```php
updateItemRestockAsync($tenant_id, $restock_id, $api_version, $x_api_version, $item_restock_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update an item restock

Updates an existing item restock.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$restock_id = 'restock_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_restock_update_dto = new \OpenAPI\Client\Model\ItemRestockUpdateDto(); // \OpenAPI\Client\Model\ItemRestockUpdateDto

try {
    $result = $apiInstance->updateItemRestockAsync($tenant_id, $restock_id, $api_version, $x_api_version, $item_restock_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousingApi->updateItemRestockAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **restock_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_restock_update_dto** | [**\OpenAPI\Client\Model\ItemRestockUpdateDto**](../Model/ItemRestockUpdateDto.md)|  | [optional] |

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

## `updateItemRestockEntryAsync()`

```php
updateItemRestockEntryAsync($tenant_id, $restock_id, $entry_id, $api_version, $x_api_version, $item_restock_entry_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a restock entry

Updates an existing restock entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$restock_id = 'restock_id_example'; // string
$entry_id = 'entry_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_restock_entry_update_dto = new \OpenAPI\Client\Model\ItemRestockEntryUpdateDto(); // \OpenAPI\Client\Model\ItemRestockEntryUpdateDto

try {
    $result = $apiInstance->updateItemRestockEntryAsync($tenant_id, $restock_id, $entry_id, $api_version, $x_api_version, $item_restock_entry_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousingApi->updateItemRestockEntryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **restock_id** | **string**|  | |
| **entry_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_restock_entry_update_dto** | [**\OpenAPI\Client\Model\ItemRestockEntryUpdateDto**](../Model/ItemRestockEntryUpdateDto.md)|  | [optional] |

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

## `updateItemRetainSampleAsync()`

```php
updateItemRetainSampleAsync($tenant_id, $retain_sample_id, $api_version, $x_api_version, $item_retain_sample_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update an item retain sample

Updates an existing item retain sample.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$retain_sample_id = 'retain_sample_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_retain_sample_update_dto = new \OpenAPI\Client\Model\ItemRetainSampleUpdateDto(); // \OpenAPI\Client\Model\ItemRetainSampleUpdateDto

try {
    $result = $apiInstance->updateItemRetainSampleAsync($tenant_id, $retain_sample_id, $api_version, $x_api_version, $item_retain_sample_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousingApi->updateItemRetainSampleAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **retain_sample_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_retain_sample_update_dto** | [**\OpenAPI\Client\Model\ItemRetainSampleUpdateDto**](../Model/ItemRetainSampleUpdateDto.md)|  | [optional] |

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

## `updateWarehouseAsync()`

```php
updateWarehouseAsync($tenant_id, $warehouse_id, $api_version, $x_api_version, $warehouse_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a warehouse

Updates an existing warehouse.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WarehousingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$warehouse_id = 'warehouse_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$warehouse_update_dto = new \OpenAPI\Client\Model\WarehouseUpdateDto(); // \OpenAPI\Client\Model\WarehouseUpdateDto

try {
    $result = $apiInstance->updateWarehouseAsync($tenant_id, $warehouse_id, $api_version, $x_api_version, $warehouse_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousingApi->updateWarehouseAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **warehouse_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **warehouse_update_dto** | [**\OpenAPI\Client\Model\WarehouseUpdateDto**](../Model/WarehouseUpdateDto.md)|  | [optional] |

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
