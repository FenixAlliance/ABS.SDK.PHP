# OpenAPI\Client\PortalsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSystemPortal()**](PortalsApi.md#createSystemPortal) | **POST** /api/v2/SystemService/Portals | Create a new system portal |
| [**deleteSystemPortal()**](PortalsApi.md#deleteSystemPortal) | **DELETE** /api/v2/SystemService/Portals/{portalId} | Delete a system portal |
| [**getSystemPortalById()**](PortalsApi.md#getSystemPortalById) | **GET** /api/v2/SystemService/Portals/{portalId} | Retrieve a single system portal by its ID |
| [**getSystemPortals()**](PortalsApi.md#getSystemPortals) | **GET** /api/v2/SystemService/Portals | Retrieve a list of system portals |
| [**getSystemPortalsCount()**](PortalsApi.md#getSystemPortalsCount) | **GET** /api/v2/SystemService/Portals/Count | Get the count of system portals |
| [**patchSystemPortal()**](PortalsApi.md#patchSystemPortal) | **PATCH** /api/v2/SystemService/Portals/{portalId} | Partially update a system portal |
| [**updateSystemPortal()**](PortalsApi.md#updateSystemPortal) | **PUT** /api/v2/SystemService/Portals/{portalId} | Update a system portal |


## `createSystemPortal()`

```php
createSystemPortal($api_version, $x_api_version, $web_portal_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a new system portal

Create a new web portal in the system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PortalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$web_portal_create_dto = new \OpenAPI\Client\Model\WebPortalCreateDto(); // \OpenAPI\Client\Model\WebPortalCreateDto

try {
    $result = $apiInstance->createSystemPortal($api_version, $x_api_version, $web_portal_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalsApi->createSystemPortal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **web_portal_create_dto** | [**\OpenAPI\Client\Model\WebPortalCreateDto**](../Model/WebPortalCreateDto.md)|  | [optional] |

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

## `deleteSystemPortal()`

```php
deleteSystemPortal($portal_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a system portal

Delete a web portal from the system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PortalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$portal_id = 'portal_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteSystemPortal($portal_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalsApi->deleteSystemPortal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **portal_id** | **string**|  | |
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

## `getSystemPortalById()`

```php
getSystemPortalById($portal_id, $api_version, $x_api_version): \OpenAPI\Client\Model\WebPortalDtoEnvelope
```

Retrieve a single system portal by its ID

Retrieve a single system portal by its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PortalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$portal_id = 'portal_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSystemPortalById($portal_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalsApi->getSystemPortalById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **portal_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WebPortalDtoEnvelope**](../Model/WebPortalDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSystemPortals()`

```php
getSystemPortals($api_version, $x_api_version, $web_portal_dto_collection_query_parameters): \OpenAPI\Client\Model\WebPortalDtoListEnvelope
```

Retrieve a list of system portals

Retrieve a list of all web portals in the system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PortalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$web_portal_dto_collection_query_parameters = new \OpenAPI\Client\Model\WebPortalDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\WebPortalDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSystemPortals($api_version, $x_api_version, $web_portal_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalsApi->getSystemPortals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **web_portal_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\WebPortalDtoCollectionQueryParameters**](../Model/WebPortalDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WebPortalDtoListEnvelope**](../Model/WebPortalDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSystemPortalsCount()`

```php
getSystemPortalsCount($api_version, $x_api_version, $web_portal_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get the count of system portals

Get the count of all web portals in the system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PortalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$web_portal_dto_collection_query_parameters = new \OpenAPI\Client\Model\WebPortalDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\WebPortalDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSystemPortalsCount($api_version, $x_api_version, $web_portal_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalsApi->getSystemPortalsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **web_portal_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\WebPortalDtoCollectionQueryParameters**](../Model/WebPortalDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchSystemPortal()`

```php
patchSystemPortal($portal_id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Partially update a system portal

Partially update an existing web portal in the system using a JSON Patch document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PortalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$portal_id = 'portal_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchSystemPortal($portal_id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalsApi->patchSystemPortal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **portal_id** | **string**|  | |
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

## `updateSystemPortal()`

```php
updateSystemPortal($portal_id, $api_version, $x_api_version, $web_portal_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a system portal

Update an existing web portal in the system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PortalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$portal_id = 'portal_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$web_portal_update_dto = new \OpenAPI\Client\Model\WebPortalUpdateDto(); // \OpenAPI\Client\Model\WebPortalUpdateDto

try {
    $result = $apiInstance->updateSystemPortal($portal_id, $api_version, $x_api_version, $web_portal_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalsApi->updateSystemPortal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **portal_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **web_portal_update_dto** | [**\OpenAPI\Client\Model\WebPortalUpdateDto**](../Model/WebPortalUpdateDto.md)|  | [optional] |

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
