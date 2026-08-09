# OpenAPI\Client\TrainingProgramEventsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTrainingProgramEventAsync()**](TrainingProgramEventsApi.md#createTrainingProgramEventAsync) | **POST** /api/v2/HrmsService/TrainingProgramEvents | Create a training program event |
| [**deleteTrainingProgramEventAsync()**](TrainingProgramEventsApi.md#deleteTrainingProgramEventAsync) | **DELETE** /api/v2/HrmsService/TrainingProgramEvents/{eventId} | Delete a training program event |
| [**getTrainingProgramEventByIdAsync()**](TrainingProgramEventsApi.md#getTrainingProgramEventByIdAsync) | **GET** /api/v2/HrmsService/TrainingProgramEvents/{eventId} | Get training program event by ID |
| [**getTrainingProgramEventsAsync()**](TrainingProgramEventsApi.md#getTrainingProgramEventsAsync) | **GET** /api/v2/HrmsService/TrainingProgramEvents | Get training program events |
| [**getTrainingProgramEventsCountAsync()**](TrainingProgramEventsApi.md#getTrainingProgramEventsCountAsync) | **GET** /api/v2/HrmsService/TrainingProgramEvents/Count | Count training program events |
| [**patchTrainingProgramEventAsync()**](TrainingProgramEventsApi.md#patchTrainingProgramEventAsync) | **PATCH** /api/v2/HrmsService/TrainingProgramEvents/{eventId} | Patch a training program event |
| [**updateTrainingProgramEventAsync()**](TrainingProgramEventsApi.md#updateTrainingProgramEventAsync) | **PUT** /api/v2/HrmsService/TrainingProgramEvents/{eventId} | Update a training program event |


## `createTrainingProgramEventAsync()`

```php
createTrainingProgramEventAsync($tenant_id, $api_version, $x_api_version, $training_program_event_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a training program event

Creates a new training program event for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TrainingProgramEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$training_program_event_create_dto = new \OpenAPI\Client\Model\TrainingProgramEventCreateDto(); // \OpenAPI\Client\Model\TrainingProgramEventCreateDto

try {
    $result = $apiInstance->createTrainingProgramEventAsync($tenant_id, $api_version, $x_api_version, $training_program_event_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrainingProgramEventsApi->createTrainingProgramEventAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **training_program_event_create_dto** | [**\OpenAPI\Client\Model\TrainingProgramEventCreateDto**](../Model/TrainingProgramEventCreateDto.md)|  | [optional] |

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

## `deleteTrainingProgramEventAsync()`

```php
deleteTrainingProgramEventAsync($tenant_id, $event_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a training program event

Deletes a training program event for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TrainingProgramEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$event_id = 'event_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteTrainingProgramEventAsync($tenant_id, $event_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrainingProgramEventsApi->deleteTrainingProgramEventAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **event_id** | **string**|  | |
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

## `getTrainingProgramEventByIdAsync()`

```php
getTrainingProgramEventByIdAsync($tenant_id, $event_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TrainingProgramEventDtoEnvelope
```

Get training program event by ID

Retrieves a specific training program event by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TrainingProgramEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$event_id = 'event_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTrainingProgramEventByIdAsync($tenant_id, $event_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrainingProgramEventsApi->getTrainingProgramEventByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **event_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TrainingProgramEventDtoEnvelope**](../Model/TrainingProgramEventDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTrainingProgramEventsAsync()`

```php
getTrainingProgramEventsAsync($tenant_id, $api_version, $x_api_version, $training_program_event_dto_collection_query_parameters): \OpenAPI\Client\Model\TrainingProgramEventDtoListEnvelope
```

Get training program events

Retrieves training program events for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TrainingProgramEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$training_program_event_dto_collection_query_parameters = new \OpenAPI\Client\Model\TrainingProgramEventDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\TrainingProgramEventDtoCollectionQueryParameters

try {
    $result = $apiInstance->getTrainingProgramEventsAsync($tenant_id, $api_version, $x_api_version, $training_program_event_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrainingProgramEventsApi->getTrainingProgramEventsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **training_program_event_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\TrainingProgramEventDtoCollectionQueryParameters**](../Model/TrainingProgramEventDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TrainingProgramEventDtoListEnvelope**](../Model/TrainingProgramEventDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTrainingProgramEventsCountAsync()`

```php
getTrainingProgramEventsCountAsync($tenant_id, $api_version, $x_api_version, $training_program_event_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Count training program events

Counts training program events for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TrainingProgramEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$training_program_event_dto_collection_query_parameters = new \OpenAPI\Client\Model\TrainingProgramEventDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\TrainingProgramEventDtoCollectionQueryParameters

try {
    $result = $apiInstance->getTrainingProgramEventsCountAsync($tenant_id, $api_version, $x_api_version, $training_program_event_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrainingProgramEventsApi->getTrainingProgramEventsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **training_program_event_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\TrainingProgramEventDtoCollectionQueryParameters**](../Model/TrainingProgramEventDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchTrainingProgramEventAsync()`

```php
patchTrainingProgramEventAsync($tenant_id, $event_id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a training program event

Partially updates an existing training program event for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TrainingProgramEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$event_id = 'event_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchTrainingProgramEventAsync($tenant_id, $event_id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrainingProgramEventsApi->patchTrainingProgramEventAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **event_id** | **string**|  | |
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

## `updateTrainingProgramEventAsync()`

```php
updateTrainingProgramEventAsync($tenant_id, $event_id, $api_version, $x_api_version, $training_program_event_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a training program event

Updates an existing training program event for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TrainingProgramEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$event_id = 'event_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$training_program_event_update_dto = new \OpenAPI\Client\Model\TrainingProgramEventUpdateDto(); // \OpenAPI\Client\Model\TrainingProgramEventUpdateDto

try {
    $result = $apiInstance->updateTrainingProgramEventAsync($tenant_id, $event_id, $api_version, $x_api_version, $training_program_event_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrainingProgramEventsApi->updateTrainingProgramEventAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **event_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **training_program_event_update_dto** | [**\OpenAPI\Client\Model\TrainingProgramEventUpdateDto**](../Model/TrainingProgramEventUpdateDto.md)|  | [optional] |

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
