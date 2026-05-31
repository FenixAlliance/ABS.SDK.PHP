# OpenAPI\Client\AssetsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAsset()**](AssetsApi.md#createAsset) | **POST** /api/v2/AssetsService/Assets | Creates a new asset |
| [**createAssetAssetCategory()**](AssetsApi.md#createAssetAssetCategory) | **POST** /api/v2/AssetsService/Assets/Categories | Creates a new asset category |
| [**createAssetDepreciationRecord()**](AssetsApi.md#createAssetDepreciationRecord) | **POST** /api/v2/AssetsService/Assets/{assetId}/DepreciationRecords | Creates a new depreciation record for an asset |
| [**createAssetRepair()**](AssetsApi.md#createAssetRepair) | **POST** /api/v2/AssetsService/Assets/{assetId}/Repairs | Creates a new repair for an asset |
| [**createAssetTransfer()**](AssetsApi.md#createAssetTransfer) | **POST** /api/v2/AssetsService/Assets/{assetId}/Transfers | Creates a new transfer for an asset |
| [**createAssetValueAmend()**](AssetsApi.md#createAssetValueAmend) | **POST** /api/v2/AssetsService/Assets/{assetId}/ValueAmends | Creates a new value amendment for an asset |
| [**deleteAsset()**](AssetsApi.md#deleteAsset) | **DELETE** /api/v2/AssetsService/Assets/{assetId} | Deletes an existing asset |
| [**deleteAssetAssetCategory()**](AssetsApi.md#deleteAssetAssetCategory) | **DELETE** /api/v2/AssetsService/Assets/Categories/{categoryId} | Deletes an existing asset category |
| [**deleteAssetDepreciationRecord()**](AssetsApi.md#deleteAssetDepreciationRecord) | **DELETE** /api/v2/AssetsService/Assets/{assetId}/DepreciationRecords/{recordId} | Deletes a depreciation record for an asset |
| [**deleteAssetRepair()**](AssetsApi.md#deleteAssetRepair) | **DELETE** /api/v2/AssetsService/Assets/{assetId}/Repairs/{repairId} | Deletes a repair for an asset |
| [**deleteAssetTransfer()**](AssetsApi.md#deleteAssetTransfer) | **DELETE** /api/v2/AssetsService/Assets/{assetId}/Transfers/{transferId} | Deletes a transfer for an asset |
| [**deleteAssetValueAmend()**](AssetsApi.md#deleteAssetValueAmend) | **DELETE** /api/v2/AssetsService/Assets/{assetId}/ValueAmends/{amendId} | Deletes a value amendment for an asset |
| [**getAsset()**](AssetsApi.md#getAsset) | **GET** /api/v2/AssetsService/Assets/{assetId} | Gets a specific asset by ID |
| [**getAssetAssetCategories()**](AssetsApi.md#getAssetAssetCategories) | **GET** /api/v2/AssetsService/Assets/Categories | Gets all asset categories |
| [**getAssetAssetCategoriesCount()**](AssetsApi.md#getAssetAssetCategoriesCount) | **GET** /api/v2/AssetsService/Assets/Categories/count | Gets the count of asset categories |
| [**getAssetAssetCategory()**](AssetsApi.md#getAssetAssetCategory) | **GET** /api/v2/AssetsService/Assets/Categories/{categoryId} | Gets a specific asset category |
| [**getAssetDepreciationRecord()**](AssetsApi.md#getAssetDepreciationRecord) | **GET** /api/v2/AssetsService/Assets/{assetId}/DepreciationRecords/{recordId} | Gets a specific depreciation record for an asset |
| [**getAssetDepreciationRecords()**](AssetsApi.md#getAssetDepreciationRecords) | **GET** /api/v2/AssetsService/Assets/{assetId}/DepreciationRecords | Gets depreciation records for a specific asset |
| [**getAssetDepreciationRecordsCount()**](AssetsApi.md#getAssetDepreciationRecordsCount) | **GET** /api/v2/AssetsService/Assets/{assetId}/DepreciationRecords/Count | Gets count of depreciation records for a specific asset |
| [**getAssetRepair()**](AssetsApi.md#getAssetRepair) | **GET** /api/v2/AssetsService/Assets/{assetId}/Repairs/{repairId} | Gets a specific repair for an asset |
| [**getAssetRepairs()**](AssetsApi.md#getAssetRepairs) | **GET** /api/v2/AssetsService/Assets/{assetId}/Repairs | Gets repairs for a specific asset |
| [**getAssetRepairsCount()**](AssetsApi.md#getAssetRepairsCount) | **GET** /api/v2/AssetsService/Assets/{assetId}/Repairs/Count | Gets count of repairs for a specific asset |
| [**getAssetTransfer()**](AssetsApi.md#getAssetTransfer) | **GET** /api/v2/AssetsService/Assets/{assetId}/Transfers/{transferId} | Gets a specific transfer for an asset |
| [**getAssetTransfers()**](AssetsApi.md#getAssetTransfers) | **GET** /api/v2/AssetsService/Assets/{assetId}/Transfers | Gets transfers for a specific asset |
| [**getAssetTransfersCount()**](AssetsApi.md#getAssetTransfersCount) | **GET** /api/v2/AssetsService/Assets/{assetId}/Transfers/Count | Gets count of transfers for a specific asset |
| [**getAssetValueAmend()**](AssetsApi.md#getAssetValueAmend) | **GET** /api/v2/AssetsService/Assets/{assetId}/ValueAmends/{amendId} | Gets a specific value amendment for an asset |
| [**getAssetValueAmends()**](AssetsApi.md#getAssetValueAmends) | **GET** /api/v2/AssetsService/Assets/{assetId}/ValueAmends | Gets value amendments for a specific asset |
| [**getAssetValueAmendsCount()**](AssetsApi.md#getAssetValueAmendsCount) | **GET** /api/v2/AssetsService/Assets/{assetId}/ValueAmends/Count | Gets count of value amendments for a specific asset |
| [**getAssets()**](AssetsApi.md#getAssets) | **GET** /api/v2/AssetsService/Assets | Gets all assets for the current tenant |
| [**getAssetsCount()**](AssetsApi.md#getAssetsCount) | **GET** /api/v2/AssetsService/Assets/count | Gets the count of assets |
| [**updateAsset()**](AssetsApi.md#updateAsset) | **PUT** /api/v2/AssetsService/Assets/{assetId} | Updates an existing asset |
| [**updateAssetAssetCategory()**](AssetsApi.md#updateAssetAssetCategory) | **PUT** /api/v2/AssetsService/Assets/Categories/{categoryId} | Updates an existing asset category |
| [**updateAssetDepreciationRecord()**](AssetsApi.md#updateAssetDepreciationRecord) | **PUT** /api/v2/AssetsService/Assets/{assetId}/DepreciationRecords/{recordId} | Updates a depreciation record for an asset |
| [**updateAssetRepair()**](AssetsApi.md#updateAssetRepair) | **PUT** /api/v2/AssetsService/Assets/{assetId}/Repairs/{repairId} | Updates a repair for an asset |
| [**updateAssetTransfer()**](AssetsApi.md#updateAssetTransfer) | **PUT** /api/v2/AssetsService/Assets/{assetId}/Transfers/{transferId} | Updates a transfer for an asset |
| [**updateAssetValueAmend()**](AssetsApi.md#updateAssetValueAmend) | **PUT** /api/v2/AssetsService/Assets/{assetId}/ValueAmends/{amendId} | Updates a value amendment for an asset |


## `createAsset()`

```php
createAsset($tenant_id, $asset_create_dto): \OpenAPI\Client\Model\AssetDtoEnvelope
```

Creates a new asset

Creates a new asset for the authenticated tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$asset_create_dto = new \OpenAPI\Client\Model\AssetCreateDto(); // \OpenAPI\Client\Model\AssetCreateDto

try {
    $result = $apiInstance->createAsset($tenant_id, $asset_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->createAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **asset_create_dto** | [**\OpenAPI\Client\Model\AssetCreateDto**](../Model/AssetCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AssetDtoEnvelope**](../Model/AssetDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAssetAssetCategory()`

```php
createAssetAssetCategory($tenant_id, $asset_category_create_dto): \OpenAPI\Client\Model\AssetCategoryDtoEnvelope
```

Creates a new asset category

Creates a new asset category for the authenticated tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$asset_category_create_dto = new \OpenAPI\Client\Model\AssetCategoryCreateDto(); // \OpenAPI\Client\Model\AssetCategoryCreateDto

try {
    $result = $apiInstance->createAssetAssetCategory($tenant_id, $asset_category_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->createAssetAssetCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **asset_category_create_dto** | [**\OpenAPI\Client\Model\AssetCategoryCreateDto**](../Model/AssetCategoryCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AssetCategoryDtoEnvelope**](../Model/AssetCategoryDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAssetDepreciationRecord()`

```php
createAssetDepreciationRecord($tenant_id, $asset_id, $asset_depreciation_record_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Creates a new depreciation record for an asset

Creates a new depreciation record for the specified asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$asset_id = 'asset_id_example'; // string
$asset_depreciation_record_create_dto = new \OpenAPI\Client\Model\AssetDepreciationRecordCreateDto(); // \OpenAPI\Client\Model\AssetDepreciationRecordCreateDto

try {
    $result = $apiInstance->createAssetDepreciationRecord($tenant_id, $asset_id, $asset_depreciation_record_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->createAssetDepreciationRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **asset_id** | **string**|  | |
| **asset_depreciation_record_create_dto** | [**\OpenAPI\Client\Model\AssetDepreciationRecordCreateDto**](../Model/AssetDepreciationRecordCreateDto.md)|  | [optional] |

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

## `createAssetRepair()`

```php
createAssetRepair($tenant_id, $asset_id, $asset_repair_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Creates a new repair for an asset

Creates a new repair record for the specified asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$asset_id = 'asset_id_example'; // string
$asset_repair_create_dto = new \OpenAPI\Client\Model\AssetRepairCreateDto(); // \OpenAPI\Client\Model\AssetRepairCreateDto

try {
    $result = $apiInstance->createAssetRepair($tenant_id, $asset_id, $asset_repair_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->createAssetRepair: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **asset_id** | **string**|  | |
| **asset_repair_create_dto** | [**\OpenAPI\Client\Model\AssetRepairCreateDto**](../Model/AssetRepairCreateDto.md)|  | [optional] |

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

## `createAssetTransfer()`

```php
createAssetTransfer($tenant_id, $asset_id, $asset_transfer_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Creates a new transfer for an asset

Creates a new transfer record for the specified asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$asset_id = 'asset_id_example'; // string
$asset_transfer_create_dto = new \OpenAPI\Client\Model\AssetTransferCreateDto(); // \OpenAPI\Client\Model\AssetTransferCreateDto

try {
    $result = $apiInstance->createAssetTransfer($tenant_id, $asset_id, $asset_transfer_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->createAssetTransfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **asset_id** | **string**|  | |
| **asset_transfer_create_dto** | [**\OpenAPI\Client\Model\AssetTransferCreateDto**](../Model/AssetTransferCreateDto.md)|  | [optional] |

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

## `createAssetValueAmend()`

```php
createAssetValueAmend($tenant_id, $asset_id, $asset_value_amend_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Creates a new value amendment for an asset

Creates a new value amendment record for the specified asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$asset_id = 'asset_id_example'; // string
$asset_value_amend_create_dto = new \OpenAPI\Client\Model\AssetValueAmendCreateDto(); // \OpenAPI\Client\Model\AssetValueAmendCreateDto

try {
    $result = $apiInstance->createAssetValueAmend($tenant_id, $asset_id, $asset_value_amend_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->createAssetValueAmend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **asset_id** | **string**|  | |
| **asset_value_amend_create_dto** | [**\OpenAPI\Client\Model\AssetValueAmendCreateDto**](../Model/AssetValueAmendCreateDto.md)|  | [optional] |

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

## `deleteAsset()`

```php
deleteAsset($tenant_id, $asset_id)
```

Deletes an existing asset

Deletes an existing asset for the authenticated tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$asset_id = 'asset_id_example'; // string

try {
    $apiInstance->deleteAsset($tenant_id, $asset_id);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->deleteAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **asset_id** | **string**|  | |

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

## `deleteAssetAssetCategory()`

```php
deleteAssetAssetCategory($tenant_id, $category_id)
```

Deletes an existing asset category

Deletes an existing asset category for the authenticated tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$category_id = 'category_id_example'; // string

try {
    $apiInstance->deleteAssetAssetCategory($tenant_id, $category_id);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->deleteAssetAssetCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **category_id** | **string**|  | |

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

## `deleteAssetDepreciationRecord()`

```php
deleteAssetDepreciationRecord($tenant_id, $asset_id, $record_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Deletes a depreciation record for an asset

Deletes a depreciation record for the specified asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$asset_id = 'asset_id_example'; // string
$record_id = 'record_id_example'; // string

try {
    $result = $apiInstance->deleteAssetDepreciationRecord($tenant_id, $asset_id, $record_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->deleteAssetDepreciationRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **asset_id** | **string**|  | |
| **record_id** | **string**|  | |

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

## `deleteAssetRepair()`

```php
deleteAssetRepair($tenant_id, $asset_id, $repair_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Deletes a repair for an asset

Deletes a repair record for the specified asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$asset_id = 'asset_id_example'; // string
$repair_id = 'repair_id_example'; // string

try {
    $result = $apiInstance->deleteAssetRepair($tenant_id, $asset_id, $repair_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->deleteAssetRepair: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **asset_id** | **string**|  | |
| **repair_id** | **string**|  | |

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

## `deleteAssetTransfer()`

```php
deleteAssetTransfer($tenant_id, $asset_id, $transfer_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Deletes a transfer for an asset

Deletes a transfer record for the specified asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$asset_id = 'asset_id_example'; // string
$transfer_id = 'transfer_id_example'; // string

try {
    $result = $apiInstance->deleteAssetTransfer($tenant_id, $asset_id, $transfer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->deleteAssetTransfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **asset_id** | **string**|  | |
| **transfer_id** | **string**|  | |

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

## `deleteAssetValueAmend()`

```php
deleteAssetValueAmend($tenant_id, $asset_id, $amend_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Deletes a value amendment for an asset

Deletes a value amendment record for the specified asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$asset_id = 'asset_id_example'; // string
$amend_id = 'amend_id_example'; // string

try {
    $result = $apiInstance->deleteAssetValueAmend($tenant_id, $asset_id, $amend_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->deleteAssetValueAmend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **asset_id** | **string**|  | |
| **amend_id** | **string**|  | |

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

## `getAsset()`

```php
getAsset($tenant_id, $asset_id): \OpenAPI\Client\Model\AssetDtoEnvelope
```

Gets a specific asset by ID

Retrieves a specific asset for the authenticated tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$asset_id = 'asset_id_example'; // string

try {
    $result = $apiInstance->getAsset($tenant_id, $asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **asset_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AssetDtoEnvelope**](../Model/AssetDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetAssetCategories()`

```php
getAssetAssetCategories($tenant_id): \OpenAPI\Client\Model\AssetCategoryDtoListEnvelope
```

Gets all asset categories

Retrieves all asset categories for the authenticated tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getAssetAssetCategories($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getAssetAssetCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AssetCategoryDtoListEnvelope**](../Model/AssetCategoryDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetAssetCategoriesCount()`

```php
getAssetAssetCategoriesCount($tenant_id): \OpenAPI\Client\Model\Int32Envelope
```

Gets the count of asset categories

Returns the total number of asset categories for the authenticated tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getAssetAssetCategoriesCount($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getAssetAssetCategoriesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

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

## `getAssetAssetCategory()`

```php
getAssetAssetCategory($tenant_id, $category_id): \OpenAPI\Client\Model\AssetCategoryDtoEnvelope
```

Gets a specific asset category

Retrieves a specific asset category for the authenticated tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$category_id = 'category_id_example'; // string

try {
    $result = $apiInstance->getAssetAssetCategory($tenant_id, $category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getAssetAssetCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **category_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AssetCategoryDtoEnvelope**](../Model/AssetCategoryDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetDepreciationRecord()`

```php
getAssetDepreciationRecord($tenant_id, $asset_id, $record_id): \OpenAPI\Client\Model\AssetDepreciationRecordDtoEnvelope
```

Gets a specific depreciation record for an asset

Retrieves a specific depreciation record by ID for the specified asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$asset_id = 'asset_id_example'; // string
$record_id = 'record_id_example'; // string

try {
    $result = $apiInstance->getAssetDepreciationRecord($tenant_id, $asset_id, $record_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getAssetDepreciationRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **asset_id** | **string**|  | |
| **record_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AssetDepreciationRecordDtoEnvelope**](../Model/AssetDepreciationRecordDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetDepreciationRecords()`

```php
getAssetDepreciationRecords($tenant_id, $asset_id): \OpenAPI\Client\Model\AssetDepreciationRecordDtoListEnvelope
```

Gets depreciation records for a specific asset

Retrieves all depreciation records for the specified asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$asset_id = 'asset_id_example'; // string

try {
    $result = $apiInstance->getAssetDepreciationRecords($tenant_id, $asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getAssetDepreciationRecords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **asset_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AssetDepreciationRecordDtoListEnvelope**](../Model/AssetDepreciationRecordDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetDepreciationRecordsCount()`

```php
getAssetDepreciationRecordsCount($tenant_id, $asset_id): \OpenAPI\Client\Model\Int32Envelope
```

Gets count of depreciation records for a specific asset

Returns the total number of depreciation records for the specified asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$asset_id = 'asset_id_example'; // string

try {
    $result = $apiInstance->getAssetDepreciationRecordsCount($tenant_id, $asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getAssetDepreciationRecordsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **asset_id** | **string**|  | |

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

## `getAssetRepair()`

```php
getAssetRepair($tenant_id, $asset_id, $repair_id): \OpenAPI\Client\Model\AssetRepairDtoEnvelope
```

Gets a specific repair for an asset

Retrieves a specific repair record by ID for the specified asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$asset_id = 'asset_id_example'; // string
$repair_id = 'repair_id_example'; // string

try {
    $result = $apiInstance->getAssetRepair($tenant_id, $asset_id, $repair_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getAssetRepair: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **asset_id** | **string**|  | |
| **repair_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AssetRepairDtoEnvelope**](../Model/AssetRepairDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetRepairs()`

```php
getAssetRepairs($tenant_id, $asset_id): \OpenAPI\Client\Model\AssetRepairDtoListEnvelope
```

Gets repairs for a specific asset

Retrieves all repair records for the specified asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$asset_id = 'asset_id_example'; // string

try {
    $result = $apiInstance->getAssetRepairs($tenant_id, $asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getAssetRepairs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **asset_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AssetRepairDtoListEnvelope**](../Model/AssetRepairDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetRepairsCount()`

```php
getAssetRepairsCount($tenant_id, $asset_id): \OpenAPI\Client\Model\Int32Envelope
```

Gets count of repairs for a specific asset

Returns the total number of repair records for the specified asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$asset_id = 'asset_id_example'; // string

try {
    $result = $apiInstance->getAssetRepairsCount($tenant_id, $asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getAssetRepairsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **asset_id** | **string**|  | |

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

## `getAssetTransfer()`

```php
getAssetTransfer($tenant_id, $asset_id, $transfer_id): \OpenAPI\Client\Model\AssetTransferDtoEnvelope
```

Gets a specific transfer for an asset

Retrieves a specific transfer record by ID for the specified asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$asset_id = 'asset_id_example'; // string
$transfer_id = 'transfer_id_example'; // string

try {
    $result = $apiInstance->getAssetTransfer($tenant_id, $asset_id, $transfer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getAssetTransfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **asset_id** | **string**|  | |
| **transfer_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AssetTransferDtoEnvelope**](../Model/AssetTransferDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetTransfers()`

```php
getAssetTransfers($tenant_id, $asset_id): \OpenAPI\Client\Model\AssetTransferDtoListEnvelope
```

Gets transfers for a specific asset

Retrieves all transfer records for the specified asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$asset_id = 'asset_id_example'; // string

try {
    $result = $apiInstance->getAssetTransfers($tenant_id, $asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getAssetTransfers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **asset_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AssetTransferDtoListEnvelope**](../Model/AssetTransferDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetTransfersCount()`

```php
getAssetTransfersCount($tenant_id, $asset_id): \OpenAPI\Client\Model\Int32Envelope
```

Gets count of transfers for a specific asset

Returns the total number of transfer records for the specified asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$asset_id = 'asset_id_example'; // string

try {
    $result = $apiInstance->getAssetTransfersCount($tenant_id, $asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getAssetTransfersCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **asset_id** | **string**|  | |

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

## `getAssetValueAmend()`

```php
getAssetValueAmend($tenant_id, $asset_id, $amend_id): \OpenAPI\Client\Model\AssetValueAmendDtoEnvelope
```

Gets a specific value amendment for an asset

Retrieves a specific value amendment record by ID for the specified asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$asset_id = 'asset_id_example'; // string
$amend_id = 'amend_id_example'; // string

try {
    $result = $apiInstance->getAssetValueAmend($tenant_id, $asset_id, $amend_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getAssetValueAmend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **asset_id** | **string**|  | |
| **amend_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AssetValueAmendDtoEnvelope**](../Model/AssetValueAmendDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetValueAmends()`

```php
getAssetValueAmends($tenant_id, $asset_id): \OpenAPI\Client\Model\AssetValueAmendDtoListEnvelope
```

Gets value amendments for a specific asset

Retrieves all value amendment records for the specified asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$asset_id = 'asset_id_example'; // string

try {
    $result = $apiInstance->getAssetValueAmends($tenant_id, $asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getAssetValueAmends: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **asset_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AssetValueAmendDtoListEnvelope**](../Model/AssetValueAmendDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetValueAmendsCount()`

```php
getAssetValueAmendsCount($tenant_id, $asset_id): \OpenAPI\Client\Model\Int32Envelope
```

Gets count of value amendments for a specific asset

Returns the total number of value amendment records for the specified asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$asset_id = 'asset_id_example'; // string

try {
    $result = $apiInstance->getAssetValueAmendsCount($tenant_id, $asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getAssetValueAmendsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **asset_id** | **string**|  | |

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

## `getAssets()`

```php
getAssets($tenant_id): \OpenAPI\Client\Model\AssetDtoListEnvelope
```

Gets all assets for the current tenant

Retrieves all assets for the authenticated tenant with optional filtering.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getAssets($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getAssets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AssetDtoListEnvelope**](../Model/AssetDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetsCount()`

```php
getAssetsCount($tenant_id): \OpenAPI\Client\Model\Int32Envelope
```

Gets the count of assets

Returns the total number of assets for the authenticated tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getAssetsCount($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getAssetsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

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

## `updateAsset()`

```php
updateAsset($tenant_id, $asset_id, $asset_update_dto): \OpenAPI\Client\Model\AssetDtoEnvelope
```

Updates an existing asset

Updates an existing asset for the authenticated tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$asset_id = 'asset_id_example'; // string
$asset_update_dto = new \OpenAPI\Client\Model\AssetUpdateDto(); // \OpenAPI\Client\Model\AssetUpdateDto

try {
    $result = $apiInstance->updateAsset($tenant_id, $asset_id, $asset_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->updateAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **asset_id** | **string**|  | |
| **asset_update_dto** | [**\OpenAPI\Client\Model\AssetUpdateDto**](../Model/AssetUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AssetDtoEnvelope**](../Model/AssetDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAssetAssetCategory()`

```php
updateAssetAssetCategory($tenant_id, $category_id, $asset_category_update_dto): \OpenAPI\Client\Model\AssetCategoryDtoEnvelope
```

Updates an existing asset category

Updates an existing asset category for the authenticated tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$category_id = 'category_id_example'; // string
$asset_category_update_dto = new \OpenAPI\Client\Model\AssetCategoryUpdateDto(); // \OpenAPI\Client\Model\AssetCategoryUpdateDto

try {
    $result = $apiInstance->updateAssetAssetCategory($tenant_id, $category_id, $asset_category_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->updateAssetAssetCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **category_id** | **string**|  | |
| **asset_category_update_dto** | [**\OpenAPI\Client\Model\AssetCategoryUpdateDto**](../Model/AssetCategoryUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AssetCategoryDtoEnvelope**](../Model/AssetCategoryDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAssetDepreciationRecord()`

```php
updateAssetDepreciationRecord($tenant_id, $asset_id, $record_id, $asset_depreciation_record_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Updates a depreciation record for an asset

Updates an existing depreciation record for the specified asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$asset_id = 'asset_id_example'; // string
$record_id = 'record_id_example'; // string
$asset_depreciation_record_update_dto = new \OpenAPI\Client\Model\AssetDepreciationRecordUpdateDto(); // \OpenAPI\Client\Model\AssetDepreciationRecordUpdateDto

try {
    $result = $apiInstance->updateAssetDepreciationRecord($tenant_id, $asset_id, $record_id, $asset_depreciation_record_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->updateAssetDepreciationRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **asset_id** | **string**|  | |
| **record_id** | **string**|  | |
| **asset_depreciation_record_update_dto** | [**\OpenAPI\Client\Model\AssetDepreciationRecordUpdateDto**](../Model/AssetDepreciationRecordUpdateDto.md)|  | [optional] |

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

## `updateAssetRepair()`

```php
updateAssetRepair($tenant_id, $asset_id, $repair_id, $asset_repair_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Updates a repair for an asset

Updates an existing repair record for the specified asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$asset_id = 'asset_id_example'; // string
$repair_id = 'repair_id_example'; // string
$asset_repair_update_dto = new \OpenAPI\Client\Model\AssetRepairUpdateDto(); // \OpenAPI\Client\Model\AssetRepairUpdateDto

try {
    $result = $apiInstance->updateAssetRepair($tenant_id, $asset_id, $repair_id, $asset_repair_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->updateAssetRepair: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **asset_id** | **string**|  | |
| **repair_id** | **string**|  | |
| **asset_repair_update_dto** | [**\OpenAPI\Client\Model\AssetRepairUpdateDto**](../Model/AssetRepairUpdateDto.md)|  | [optional] |

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

## `updateAssetTransfer()`

```php
updateAssetTransfer($tenant_id, $asset_id, $transfer_id, $asset_transfer_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Updates a transfer for an asset

Updates an existing transfer record for the specified asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$asset_id = 'asset_id_example'; // string
$transfer_id = 'transfer_id_example'; // string
$asset_transfer_update_dto = new \OpenAPI\Client\Model\AssetTransferUpdateDto(); // \OpenAPI\Client\Model\AssetTransferUpdateDto

try {
    $result = $apiInstance->updateAssetTransfer($tenant_id, $asset_id, $transfer_id, $asset_transfer_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->updateAssetTransfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **asset_id** | **string**|  | |
| **transfer_id** | **string**|  | |
| **asset_transfer_update_dto** | [**\OpenAPI\Client\Model\AssetTransferUpdateDto**](../Model/AssetTransferUpdateDto.md)|  | [optional] |

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

## `updateAssetValueAmend()`

```php
updateAssetValueAmend($tenant_id, $asset_id, $amend_id, $asset_value_amend_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Updates a value amendment for an asset

Updates an existing value amendment record for the specified asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$asset_id = 'asset_id_example'; // string
$amend_id = 'amend_id_example'; // string
$asset_value_amend_update_dto = new \OpenAPI\Client\Model\AssetValueAmendUpdateDto(); // \OpenAPI\Client\Model\AssetValueAmendUpdateDto

try {
    $result = $apiInstance->updateAssetValueAmend($tenant_id, $asset_id, $amend_id, $asset_value_amend_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->updateAssetValueAmend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **asset_id** | **string**|  | |
| **amend_id** | **string**|  | |
| **asset_value_amend_update_dto** | [**\OpenAPI\Client\Model\AssetValueAmendUpdateDto**](../Model/AssetValueAmendUpdateDto.md)|  | [optional] |

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
