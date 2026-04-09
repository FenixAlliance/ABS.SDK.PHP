# OpenAPI\Client\SharesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createShareClass()**](SharesApi.md#createShareClass) | **POST** /api/v2/AccountingService/Shares/Classes | Creates a new share class |
| [**createShareIssuance()**](SharesApi.md#createShareIssuance) | **POST** /api/v2/AccountingService/Shares/Issuances | Creates a new share issuance |
| [**createShareTransfer()**](SharesApi.md#createShareTransfer) | **POST** /api/v2/AccountingService/Shares/Transfers | Creates a new share transfer |
| [**createShareTransferReason()**](SharesApi.md#createShareTransferReason) | **POST** /api/v2/AccountingService/Shares/TransferReasons | Creates a new share transfer reason |
| [**deleteShareClass()**](SharesApi.md#deleteShareClass) | **DELETE** /api/v2/AccountingService/Shares/Classes/{shareClassId} | Deletes an existing share class |
| [**deleteShareIssuance()**](SharesApi.md#deleteShareIssuance) | **DELETE** /api/v2/AccountingService/Shares/Issuances/{issuanceId} | Deletes an existing share issuance |
| [**deleteShareTransfer()**](SharesApi.md#deleteShareTransfer) | **DELETE** /api/v2/AccountingService/Shares/Transfers/{transferId} | Deletes an existing share transfer |
| [**deleteShareTransferReason()**](SharesApi.md#deleteShareTransferReason) | **DELETE** /api/v2/AccountingService/Shares/TransferReasons/{reasonId} | Deletes an existing share transfer reason |
| [**getShareClass()**](SharesApi.md#getShareClass) | **GET** /api/v2/AccountingService/Shares/Classes/{shareClassId} | Gets a share class by id |
| [**getShareClasses()**](SharesApi.md#getShareClasses) | **GET** /api/v2/AccountingService/Shares/Classes | Gets the current tenant share classes |
| [**getShareClassesCount()**](SharesApi.md#getShareClassesCount) | **GET** /api/v2/AccountingService/Shares/Classes/Count | Gets the current tenant share classes count |
| [**getShareIssuance()**](SharesApi.md#getShareIssuance) | **GET** /api/v2/AccountingService/Shares/Issuances/{issuanceId} | Gets a share issuance by id |
| [**getShareIssuances()**](SharesApi.md#getShareIssuances) | **GET** /api/v2/AccountingService/Shares/Issuances | Gets the current tenant share issuances |
| [**getShareIssuancesCount()**](SharesApi.md#getShareIssuancesCount) | **GET** /api/v2/AccountingService/Shares/Issuances/Count | Gets the current tenant share issuances count |
| [**getShareTransfer()**](SharesApi.md#getShareTransfer) | **GET** /api/v2/AccountingService/Shares/Transfers/{transferId} | Gets a share transfer by id |
| [**getShareTransferReason()**](SharesApi.md#getShareTransferReason) | **GET** /api/v2/AccountingService/Shares/TransferReasons/{reasonId} | Gets a share transfer reason by id |
| [**getShareTransferReasons()**](SharesApi.md#getShareTransferReasons) | **GET** /api/v2/AccountingService/Shares/TransferReasons | Gets the current tenant share transfer reasons |
| [**getShareTransferReasonsCount()**](SharesApi.md#getShareTransferReasonsCount) | **GET** /api/v2/AccountingService/Shares/TransferReasons/Count | Gets the current tenant share transfer reasons count |
| [**getShareTransfers()**](SharesApi.md#getShareTransfers) | **GET** /api/v2/AccountingService/Shares/Transfers | Gets the current tenant share transfers |
| [**getShareTransfersCount()**](SharesApi.md#getShareTransfersCount) | **GET** /api/v2/AccountingService/Shares/Transfers/Count | Gets the current tenant share transfers count |
| [**updateShareClass()**](SharesApi.md#updateShareClass) | **PUT** /api/v2/AccountingService/Shares/Classes/{shareClassId} | Updates an existing share class |
| [**updateShareIssuance()**](SharesApi.md#updateShareIssuance) | **PUT** /api/v2/AccountingService/Shares/Issuances/{issuanceId} | Updates an existing share issuance |
| [**updateShareTransfer()**](SharesApi.md#updateShareTransfer) | **PUT** /api/v2/AccountingService/Shares/Transfers/{transferId} | Updates an existing share transfer |
| [**updateShareTransferReason()**](SharesApi.md#updateShareTransferReason) | **PUT** /api/v2/AccountingService/Shares/TransferReasons/{reasonId} | Updates an existing share transfer reason |


## `createShareClass()`

```php
createShareClass($tenant_id, $api_version, $x_api_version, $share_class_create_dto): \OpenAPI\Client\Model\ShareClassDtoEnvelope
```

Creates a new share class

Creates a new share class.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$share_class_create_dto = new \OpenAPI\Client\Model\ShareClassCreateDto(); // \OpenAPI\Client\Model\ShareClassCreateDto

try {
    $result = $apiInstance->createShareClass($tenant_id, $api_version, $x_api_version, $share_class_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->createShareClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **share_class_create_dto** | [**\OpenAPI\Client\Model\ShareClassCreateDto**](../Model/ShareClassCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ShareClassDtoEnvelope**](../Model/ShareClassDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createShareIssuance()`

```php
createShareIssuance($tenant_id, $api_version, $x_api_version, $share_issuance_create_dto): \OpenAPI\Client\Model\ShareIssuanceDtoEnvelope
```

Creates a new share issuance

Creates a new share issuance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$share_issuance_create_dto = new \OpenAPI\Client\Model\ShareIssuanceCreateDto(); // \OpenAPI\Client\Model\ShareIssuanceCreateDto

try {
    $result = $apiInstance->createShareIssuance($tenant_id, $api_version, $x_api_version, $share_issuance_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->createShareIssuance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **share_issuance_create_dto** | [**\OpenAPI\Client\Model\ShareIssuanceCreateDto**](../Model/ShareIssuanceCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ShareIssuanceDtoEnvelope**](../Model/ShareIssuanceDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createShareTransfer()`

```php
createShareTransfer($tenant_id, $api_version, $x_api_version, $share_transfer_create_dto): \OpenAPI\Client\Model\ShareTransferDtoEnvelope
```

Creates a new share transfer

Creates a new share transfer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$share_transfer_create_dto = new \OpenAPI\Client\Model\ShareTransferCreateDto(); // \OpenAPI\Client\Model\ShareTransferCreateDto

try {
    $result = $apiInstance->createShareTransfer($tenant_id, $api_version, $x_api_version, $share_transfer_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->createShareTransfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **share_transfer_create_dto** | [**\OpenAPI\Client\Model\ShareTransferCreateDto**](../Model/ShareTransferCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ShareTransferDtoEnvelope**](../Model/ShareTransferDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createShareTransferReason()`

```php
createShareTransferReason($tenant_id, $api_version, $x_api_version, $share_transfer_reason_create_dto): \OpenAPI\Client\Model\ShareTransferReasonDtoEnvelope
```

Creates a new share transfer reason

Creates a new share transfer reason.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$share_transfer_reason_create_dto = new \OpenAPI\Client\Model\ShareTransferReasonCreateDto(); // \OpenAPI\Client\Model\ShareTransferReasonCreateDto

try {
    $result = $apiInstance->createShareTransferReason($tenant_id, $api_version, $x_api_version, $share_transfer_reason_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->createShareTransferReason: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **share_transfer_reason_create_dto** | [**\OpenAPI\Client\Model\ShareTransferReasonCreateDto**](../Model/ShareTransferReasonCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ShareTransferReasonDtoEnvelope**](../Model/ShareTransferReasonDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteShareClass()`

```php
deleteShareClass($tenant_id, $share_class_id, $api_version, $x_api_version)
```

Deletes an existing share class

Deletes an existing share class.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$share_class_id = 'share_class_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteShareClass($tenant_id, $share_class_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->deleteShareClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **share_class_id** | **string**|  | |
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

## `deleteShareIssuance()`

```php
deleteShareIssuance($tenant_id, $issuance_id, $api_version, $x_api_version)
```

Deletes an existing share issuance

Deletes an existing share issuance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$issuance_id = 'issuance_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteShareIssuance($tenant_id, $issuance_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->deleteShareIssuance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **issuance_id** | **string**|  | |
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

## `deleteShareTransfer()`

```php
deleteShareTransfer($tenant_id, $transfer_id, $api_version, $x_api_version)
```

Deletes an existing share transfer

Deletes an existing share transfer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$transfer_id = 'transfer_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteShareTransfer($tenant_id, $transfer_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->deleteShareTransfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **transfer_id** | **string**|  | |
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

## `deleteShareTransferReason()`

```php
deleteShareTransferReason($tenant_id, $reason_id, $api_version, $x_api_version)
```

Deletes an existing share transfer reason

Deletes an existing share transfer reason.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$reason_id = 'reason_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteShareTransferReason($tenant_id, $reason_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->deleteShareTransferReason: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **reason_id** | **string**|  | |
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

## `getShareClass()`

```php
getShareClass($tenant_id, $share_class_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ShareClassDtoEnvelope
```

Gets a share class by id

Get a specific share class by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$share_class_id = 'share_class_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getShareClass($tenant_id, $share_class_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->getShareClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **share_class_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ShareClassDtoEnvelope**](../Model/ShareClassDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShareClasses()`

```php
getShareClasses($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ShareClassDtoListEnvelope
```

Gets the current tenant share classes

Get the currently acting tenant share classes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getShareClasses($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->getShareClasses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ShareClassDtoListEnvelope**](../Model/ShareClassDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShareClassesCount()`

```php
getShareClassesCount($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Gets the current tenant share classes count

Get the currently acting tenant share classes count.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getShareClassesCount($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->getShareClassesCount: ', $e->getMessage(), PHP_EOL;
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

## `getShareIssuance()`

```php
getShareIssuance($tenant_id, $issuance_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ShareIssuanceDtoEnvelope
```

Gets a share issuance by id

Get a specific share issuance by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$issuance_id = 'issuance_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getShareIssuance($tenant_id, $issuance_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->getShareIssuance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **issuance_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ShareIssuanceDtoEnvelope**](../Model/ShareIssuanceDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShareIssuances()`

```php
getShareIssuances($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ShareIssuanceDtoListEnvelope
```

Gets the current tenant share issuances

Get the currently acting tenant share issuances.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getShareIssuances($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->getShareIssuances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ShareIssuanceDtoListEnvelope**](../Model/ShareIssuanceDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShareIssuancesCount()`

```php
getShareIssuancesCount($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Gets the current tenant share issuances count

Get the currently acting tenant share issuances count.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getShareIssuancesCount($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->getShareIssuancesCount: ', $e->getMessage(), PHP_EOL;
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

## `getShareTransfer()`

```php
getShareTransfer($tenant_id, $transfer_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ShareTransferDtoEnvelope
```

Gets a share transfer by id

Get a specific share transfer by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$transfer_id = 'transfer_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getShareTransfer($tenant_id, $transfer_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->getShareTransfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **transfer_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ShareTransferDtoEnvelope**](../Model/ShareTransferDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShareTransferReason()`

```php
getShareTransferReason($tenant_id, $reason_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ShareTransferReasonDtoEnvelope
```

Gets a share transfer reason by id

Get a specific share transfer reason by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$reason_id = 'reason_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getShareTransferReason($tenant_id, $reason_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->getShareTransferReason: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **reason_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ShareTransferReasonDtoEnvelope**](../Model/ShareTransferReasonDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShareTransferReasons()`

```php
getShareTransferReasons($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ShareTransferReasonDtoListEnvelope
```

Gets the current tenant share transfer reasons

Get the currently acting tenant share transfer reasons.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getShareTransferReasons($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->getShareTransferReasons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ShareTransferReasonDtoListEnvelope**](../Model/ShareTransferReasonDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShareTransferReasonsCount()`

```php
getShareTransferReasonsCount($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Gets the current tenant share transfer reasons count

Get the currently acting tenant share transfer reasons count.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getShareTransferReasonsCount($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->getShareTransferReasonsCount: ', $e->getMessage(), PHP_EOL;
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

## `getShareTransfers()`

```php
getShareTransfers($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ShareTransferDtoListEnvelope
```

Gets the current tenant share transfers

Get the currently acting tenant share transfers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getShareTransfers($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->getShareTransfers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ShareTransferDtoListEnvelope**](../Model/ShareTransferDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShareTransfersCount()`

```php
getShareTransfersCount($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Gets the current tenant share transfers count

Get the currently acting tenant share transfers count.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getShareTransfersCount($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->getShareTransfersCount: ', $e->getMessage(), PHP_EOL;
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

## `updateShareClass()`

```php
updateShareClass($tenant_id, $share_class_id, $api_version, $x_api_version, $share_class_update_dto): \OpenAPI\Client\Model\ShareClassDtoEnvelope
```

Updates an existing share class

Updates an existing share class.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$share_class_id = 'share_class_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$share_class_update_dto = new \OpenAPI\Client\Model\ShareClassUpdateDto(); // \OpenAPI\Client\Model\ShareClassUpdateDto

try {
    $result = $apiInstance->updateShareClass($tenant_id, $share_class_id, $api_version, $x_api_version, $share_class_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->updateShareClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **share_class_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **share_class_update_dto** | [**\OpenAPI\Client\Model\ShareClassUpdateDto**](../Model/ShareClassUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ShareClassDtoEnvelope**](../Model/ShareClassDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateShareIssuance()`

```php
updateShareIssuance($tenant_id, $issuance_id, $api_version, $x_api_version, $share_issuance_update_dto): \OpenAPI\Client\Model\ShareIssuanceDtoEnvelope
```

Updates an existing share issuance

Updates an existing share issuance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$issuance_id = 'issuance_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$share_issuance_update_dto = new \OpenAPI\Client\Model\ShareIssuanceUpdateDto(); // \OpenAPI\Client\Model\ShareIssuanceUpdateDto

try {
    $result = $apiInstance->updateShareIssuance($tenant_id, $issuance_id, $api_version, $x_api_version, $share_issuance_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->updateShareIssuance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **issuance_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **share_issuance_update_dto** | [**\OpenAPI\Client\Model\ShareIssuanceUpdateDto**](../Model/ShareIssuanceUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ShareIssuanceDtoEnvelope**](../Model/ShareIssuanceDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateShareTransfer()`

```php
updateShareTransfer($tenant_id, $transfer_id, $api_version, $x_api_version, $share_transfer_update_dto): \OpenAPI\Client\Model\ShareTransferDtoEnvelope
```

Updates an existing share transfer

Updates an existing share transfer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$transfer_id = 'transfer_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$share_transfer_update_dto = new \OpenAPI\Client\Model\ShareTransferUpdateDto(); // \OpenAPI\Client\Model\ShareTransferUpdateDto

try {
    $result = $apiInstance->updateShareTransfer($tenant_id, $transfer_id, $api_version, $x_api_version, $share_transfer_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->updateShareTransfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **transfer_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **share_transfer_update_dto** | [**\OpenAPI\Client\Model\ShareTransferUpdateDto**](../Model/ShareTransferUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ShareTransferDtoEnvelope**](../Model/ShareTransferDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateShareTransferReason()`

```php
updateShareTransferReason($tenant_id, $reason_id, $api_version, $x_api_version, $share_transfer_reason_update_dto): \OpenAPI\Client\Model\ShareTransferReasonDtoEnvelope
```

Updates an existing share transfer reason

Updates an existing share transfer reason.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$reason_id = 'reason_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$share_transfer_reason_update_dto = new \OpenAPI\Client\Model\ShareTransferReasonUpdateDto(); // \OpenAPI\Client\Model\ShareTransferReasonUpdateDto

try {
    $result = $apiInstance->updateShareTransferReason($tenant_id, $reason_id, $api_version, $x_api_version, $share_transfer_reason_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->updateShareTransferReason: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **reason_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **share_transfer_reason_update_dto** | [**\OpenAPI\Client\Model\ShareTransferReasonUpdateDto**](../Model/ShareTransferReasonUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ShareTransferReasonDtoEnvelope**](../Model/ShareTransferReasonDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
