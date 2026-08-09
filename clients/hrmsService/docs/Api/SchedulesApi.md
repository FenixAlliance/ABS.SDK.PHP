# OpenAPI\Client\SchedulesApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createScheduleAsync()**](SchedulesApi.md#createScheduleAsync) | **POST** /api/v2/HrmsService/Schedules | Create a schedule |
| [**deleteScheduleAsync()**](SchedulesApi.md#deleteScheduleAsync) | **DELETE** /api/v2/HrmsService/Schedules/{scheduleId} | Delete a schedule |
| [**getScheduleByIdAsync()**](SchedulesApi.md#getScheduleByIdAsync) | **GET** /api/v2/HrmsService/Schedules/{scheduleId} | Get schedule by ID |
| [**getSchedulesAsync()**](SchedulesApi.md#getSchedulesAsync) | **GET** /api/v2/HrmsService/Schedules | Get schedules |
| [**getSchedulesCountAsync()**](SchedulesApi.md#getSchedulesCountAsync) | **GET** /api/v2/HrmsService/Schedules/Count | Count schedules |
| [**patchScheduleAsync()**](SchedulesApi.md#patchScheduleAsync) | **PATCH** /api/v2/HrmsService/Schedules/{scheduleId} | Patch a schedule |
| [**updateScheduleAsync()**](SchedulesApi.md#updateScheduleAsync) | **PUT** /api/v2/HrmsService/Schedules/{scheduleId} | Update a schedule |


## `createScheduleAsync()`

```php
createScheduleAsync($tenant_id, $api_version, $x_api_version, $schedule_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a schedule

Creates a new schedule for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$schedule_create_dto = new \OpenAPI\Client\Model\ScheduleCreateDto(); // \OpenAPI\Client\Model\ScheduleCreateDto

try {
    $result = $apiInstance->createScheduleAsync($tenant_id, $api_version, $x_api_version, $schedule_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulesApi->createScheduleAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **schedule_create_dto** | [**\OpenAPI\Client\Model\ScheduleCreateDto**](../Model/ScheduleCreateDto.md)|  | [optional] |

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

## `deleteScheduleAsync()`

```php
deleteScheduleAsync($tenant_id, $schedule_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a schedule

Deletes a schedule for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$schedule_id = 'schedule_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteScheduleAsync($tenant_id, $schedule_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulesApi->deleteScheduleAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **schedule_id** | **string**|  | |
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

## `getScheduleByIdAsync()`

```php
getScheduleByIdAsync($tenant_id, $schedule_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ScheduleDtoEnvelope
```

Get schedule by ID

Retrieves a specific schedule by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$schedule_id = 'schedule_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getScheduleByIdAsync($tenant_id, $schedule_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulesApi->getScheduleByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **schedule_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ScheduleDtoEnvelope**](../Model/ScheduleDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSchedulesAsync()`

```php
getSchedulesAsync($tenant_id, $api_version, $x_api_version, $schedule_dto_collection_query_parameters): \OpenAPI\Client\Model\ScheduleDtoListEnvelope
```

Get schedules

Retrieves schedules for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$schedule_dto_collection_query_parameters = new \OpenAPI\Client\Model\ScheduleDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ScheduleDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSchedulesAsync($tenant_id, $api_version, $x_api_version, $schedule_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulesApi->getSchedulesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **schedule_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ScheduleDtoCollectionQueryParameters**](../Model/ScheduleDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ScheduleDtoListEnvelope**](../Model/ScheduleDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSchedulesCountAsync()`

```php
getSchedulesCountAsync($tenant_id, $api_version, $x_api_version, $schedule_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Count schedules

Counts schedules for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$schedule_dto_collection_query_parameters = new \OpenAPI\Client\Model\ScheduleDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ScheduleDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSchedulesCountAsync($tenant_id, $api_version, $x_api_version, $schedule_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulesApi->getSchedulesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **schedule_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ScheduleDtoCollectionQueryParameters**](../Model/ScheduleDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchScheduleAsync()`

```php
patchScheduleAsync($tenant_id, $schedule_id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a schedule

Partially updates an existing schedule for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$schedule_id = 'schedule_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchScheduleAsync($tenant_id, $schedule_id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulesApi->patchScheduleAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **schedule_id** | **string**|  | |
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

## `updateScheduleAsync()`

```php
updateScheduleAsync($tenant_id, $schedule_id, $api_version, $x_api_version, $schedule_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a schedule

Updates an existing schedule for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$schedule_id = 'schedule_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$schedule_update_dto = new \OpenAPI\Client\Model\ScheduleUpdateDto(); // \OpenAPI\Client\Model\ScheduleUpdateDto

try {
    $result = $apiInstance->updateScheduleAsync($tenant_id, $schedule_id, $api_version, $x_api_version, $schedule_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulesApi->updateScheduleAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **schedule_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **schedule_update_dto** | [**\OpenAPI\Client\Model\ScheduleUpdateDto**](../Model/ScheduleUpdateDto.md)|  | [optional] |

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
