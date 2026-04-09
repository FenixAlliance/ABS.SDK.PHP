# OpenAPI\Client\ServiceQueuesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createServiceQueueAsync()**](ServiceQueuesApi.md#createServiceQueueAsync) | **POST** /api/v2/ServicesService/ServiceQueues | Create a service queue |
| [**deleteServiceQueueAsync()**](ServiceQueuesApi.md#deleteServiceQueueAsync) | **DELETE** /api/v2/ServicesService/ServiceQueues/{serviceQueueId} | Delete a service queue |
| [**getServiceQueueByIdAsync()**](ServiceQueuesApi.md#getServiceQueueByIdAsync) | **GET** /api/v2/ServicesService/ServiceQueues/{serviceQueueId} | Get a service queue by ID |
| [**getServiceQueuesAsync()**](ServiceQueuesApi.md#getServiceQueuesAsync) | **GET** /api/v2/ServicesService/ServiceQueues | Get all service queues |
| [**getServiceQueuesCountAsync()**](ServiceQueuesApi.md#getServiceQueuesCountAsync) | **GET** /api/v2/ServicesService/ServiceQueues/Count | Get service queues count |
| [**updateServiceQueueAsync()**](ServiceQueuesApi.md#updateServiceQueueAsync) | **PUT** /api/v2/ServicesService/ServiceQueues/{serviceQueueId} | Update a service queue |


## `createServiceQueueAsync()`

```php
createServiceQueueAsync($tenant_id, $api_version, $x_api_version, $service_queue_create_dto): \OpenAPI\Client\Model\Envelope
```

Create a service queue

Creates a new service queue for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ServiceQueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$service_queue_create_dto = new \OpenAPI\Client\Model\ServiceQueueCreateDto(); // \OpenAPI\Client\Model\ServiceQueueCreateDto

try {
    $result = $apiInstance->createServiceQueueAsync($tenant_id, $api_version, $x_api_version, $service_queue_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceQueuesApi->createServiceQueueAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **service_queue_create_dto** | [**\OpenAPI\Client\Model\ServiceQueueCreateDto**](../Model/ServiceQueueCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Envelope**](../Model/Envelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteServiceQueueAsync()`

```php
deleteServiceQueueAsync($tenant_id, $service_queue_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Envelope
```

Delete a service queue

Deletes a service queue by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ServiceQueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$service_queue_id = 'service_queue_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteServiceQueueAsync($tenant_id, $service_queue_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceQueuesApi->deleteServiceQueueAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **service_queue_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Envelope**](../Model/Envelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServiceQueueByIdAsync()`

```php
getServiceQueueByIdAsync($tenant_id, $service_queue_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ServiceQueueDtoEnvelope
```

Get a service queue by ID

Retrieves a service queue by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ServiceQueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$service_queue_id = 'service_queue_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getServiceQueueByIdAsync($tenant_id, $service_queue_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceQueuesApi->getServiceQueueByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **service_queue_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ServiceQueueDtoEnvelope**](../Model/ServiceQueueDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServiceQueuesAsync()`

```php
getServiceQueuesAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ServiceQueueDtoIReadOnlyListEnvelope
```

Get all service queues

Retrieves all service queues for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ServiceQueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getServiceQueuesAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceQueuesApi->getServiceQueuesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ServiceQueueDtoIReadOnlyListEnvelope**](../Model/ServiceQueueDtoIReadOnlyListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServiceQueuesCountAsync()`

```php
getServiceQueuesCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get service queues count

Returns the count of service queues for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ServiceQueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getServiceQueuesCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceQueuesApi->getServiceQueuesCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateServiceQueueAsync()`

```php
updateServiceQueueAsync($tenant_id, $service_queue_id, $api_version, $x_api_version, $service_queue_update_dto): \OpenAPI\Client\Model\Envelope
```

Update a service queue

Updates an existing service queue.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ServiceQueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$service_queue_id = 'service_queue_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$service_queue_update_dto = new \OpenAPI\Client\Model\ServiceQueueUpdateDto(); // \OpenAPI\Client\Model\ServiceQueueUpdateDto

try {
    $result = $apiInstance->updateServiceQueueAsync($tenant_id, $service_queue_id, $api_version, $x_api_version, $service_queue_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceQueuesApi->updateServiceQueueAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **service_queue_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **service_queue_update_dto** | [**\OpenAPI\Client\Model\ServiceQueueUpdateDto**](../Model/ServiceQueueUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Envelope**](../Model/Envelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
