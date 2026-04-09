# OpenAPI\Client\DealUnitFlowsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDealUnitFlowAsync()**](DealUnitFlowsApi.md#createDealUnitFlowAsync) | **POST** /api/v2/DealsService/DealUnitFlows | Create a deal unit flow |
| [**createDealUnitFlowStageAsync()**](DealUnitFlowsApi.md#createDealUnitFlowStageAsync) | **POST** /api/v2/DealsService/DealUnitFlows/{dealUnitFlowId}/Stages | Create a deal unit flow stage |
| [**deleteDealUnitFlowAsync()**](DealUnitFlowsApi.md#deleteDealUnitFlowAsync) | **DELETE** /api/v2/DealsService/DealUnitFlows/{dealUnitFlowId} | Delete a deal unit flow |
| [**deleteDealUnitFlowStageAsync()**](DealUnitFlowsApi.md#deleteDealUnitFlowStageAsync) | **DELETE** /api/v2/DealsService/DealUnitFlows/{dealUnitFlowId}/Stages/{dealUnitFlowStageId} | Delete a deal unit flow stage |
| [**getDealUnitFlowAsync()**](DealUnitFlowsApi.md#getDealUnitFlowAsync) | **GET** /api/v2/DealsService/DealUnitFlows/{dealUnitFlowId} | Get deal unit flow by ID |
| [**getDealUnitFlowStageAsync()**](DealUnitFlowsApi.md#getDealUnitFlowStageAsync) | **GET** /api/v2/DealsService/DealUnitFlows/{dealUnitFlowId}/Stages/{dealUnitFlowStageId} | Get a deal unit flow stage by ID |
| [**getDealUnitFlowStagesAsync()**](DealUnitFlowsApi.md#getDealUnitFlowStagesAsync) | **GET** /api/v2/DealsService/DealUnitFlows/{dealUnitFlowId}/Stages | Get stages for a deal unit flow |
| [**getDealUnitFlowStagesCountAsync()**](DealUnitFlowsApi.md#getDealUnitFlowStagesCountAsync) | **GET** /api/v2/DealsService/DealUnitFlows/{dealUnitFlowId}/Stages/Count | Get stages count for a deal unit flow |
| [**getDealUnitFlowsAsync()**](DealUnitFlowsApi.md#getDealUnitFlowsAsync) | **GET** /api/v2/DealsService/DealUnitFlows | Get deal unit flows |
| [**getDealUnitFlowsCountAsync()**](DealUnitFlowsApi.md#getDealUnitFlowsCountAsync) | **GET** /api/v2/DealsService/DealUnitFlows/Count | Get deal unit flows count |
| [**updateDealUnitFlowAsync()**](DealUnitFlowsApi.md#updateDealUnitFlowAsync) | **PUT** /api/v2/DealsService/DealUnitFlows/{dealUnitFlowId} | Update a deal unit flow |
| [**updateDealUnitFlowStageAsync()**](DealUnitFlowsApi.md#updateDealUnitFlowStageAsync) | **PUT** /api/v2/DealsService/DealUnitFlows/{dealUnitFlowId}/Stages/{dealUnitFlowStageId} | Update a deal unit flow stage |


## `createDealUnitFlowAsync()`

```php
createDealUnitFlowAsync($tenant_id, $deal_unit_flow_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a deal unit flow

Creates a new deal unit flow for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DealUnitFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_flow_create_dto = new \OpenAPI\Client\Model\DealUnitFlowCreateDto(); // \OpenAPI\Client\Model\DealUnitFlowCreateDto

try {
    $result = $apiInstance->createDealUnitFlowAsync($tenant_id, $deal_unit_flow_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitFlowsApi->createDealUnitFlowAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_flow_create_dto** | [**\OpenAPI\Client\Model\DealUnitFlowCreateDto**](../Model/DealUnitFlowCreateDto.md)|  | [optional] |

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

## `createDealUnitFlowStageAsync()`

```php
createDealUnitFlowStageAsync($tenant_id, $deal_unit_flow_id, $deal_unit_flow_stage_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a deal unit flow stage

Creates a new stage within a specific deal unit flow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DealUnitFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_flow_id = 'deal_unit_flow_id_example'; // string
$deal_unit_flow_stage_create_dto = new \OpenAPI\Client\Model\DealUnitFlowStageCreateDto(); // \OpenAPI\Client\Model\DealUnitFlowStageCreateDto

try {
    $result = $apiInstance->createDealUnitFlowStageAsync($tenant_id, $deal_unit_flow_id, $deal_unit_flow_stage_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitFlowsApi->createDealUnitFlowStageAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_flow_id** | **string**|  | |
| **deal_unit_flow_stage_create_dto** | [**\OpenAPI\Client\Model\DealUnitFlowStageCreateDto**](../Model/DealUnitFlowStageCreateDto.md)|  | [optional] |

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

## `deleteDealUnitFlowAsync()`

```php
deleteDealUnitFlowAsync($tenant_id, $deal_unit_flow_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a deal unit flow

Deletes an existing deal unit flow by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DealUnitFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_flow_id = 'deal_unit_flow_id_example'; // string

try {
    $result = $apiInstance->deleteDealUnitFlowAsync($tenant_id, $deal_unit_flow_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitFlowsApi->deleteDealUnitFlowAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_flow_id** | **string**|  | |

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

## `deleteDealUnitFlowStageAsync()`

```php
deleteDealUnitFlowStageAsync($tenant_id, $deal_unit_flow_id, $deal_unit_flow_stage_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a deal unit flow stage

Deletes an existing stage from a specific deal unit flow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DealUnitFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_flow_id = 'deal_unit_flow_id_example'; // string
$deal_unit_flow_stage_id = 'deal_unit_flow_stage_id_example'; // string

try {
    $result = $apiInstance->deleteDealUnitFlowStageAsync($tenant_id, $deal_unit_flow_id, $deal_unit_flow_stage_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitFlowsApi->deleteDealUnitFlowStageAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_flow_id** | **string**|  | |
| **deal_unit_flow_stage_id** | **string**|  | |

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

## `getDealUnitFlowAsync()`

```php
getDealUnitFlowAsync($tenant_id, $deal_unit_flow_id): \OpenAPI\Client\Model\DealUnitFlowDtoEnvelope
```

Get deal unit flow by ID

Retrieves a single deal unit flow by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DealUnitFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_flow_id = 'deal_unit_flow_id_example'; // string

try {
    $result = $apiInstance->getDealUnitFlowAsync($tenant_id, $deal_unit_flow_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitFlowsApi->getDealUnitFlowAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_flow_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\DealUnitFlowDtoEnvelope**](../Model/DealUnitFlowDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDealUnitFlowStageAsync()`

```php
getDealUnitFlowStageAsync($tenant_id, $deal_unit_flow_id, $deal_unit_flow_stage_id): \OpenAPI\Client\Model\DealUnitFlowStageDtoEnvelope
```

Get a deal unit flow stage by ID

Retrieves a single stage for a specific deal unit flow by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DealUnitFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_flow_id = 'deal_unit_flow_id_example'; // string
$deal_unit_flow_stage_id = 'deal_unit_flow_stage_id_example'; // string

try {
    $result = $apiInstance->getDealUnitFlowStageAsync($tenant_id, $deal_unit_flow_id, $deal_unit_flow_stage_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitFlowsApi->getDealUnitFlowStageAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_flow_id** | **string**|  | |
| **deal_unit_flow_stage_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\DealUnitFlowStageDtoEnvelope**](../Model/DealUnitFlowStageDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDealUnitFlowStagesAsync()`

```php
getDealUnitFlowStagesAsync($tenant_id, $deal_unit_flow_id): \OpenAPI\Client\Model\DealUnitFlowStageDtoListEnvelope
```

Get stages for a deal unit flow

Retrieves a list of stages for a specific deal unit flow with OData query support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DealUnitFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_flow_id = 'deal_unit_flow_id_example'; // string

try {
    $result = $apiInstance->getDealUnitFlowStagesAsync($tenant_id, $deal_unit_flow_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitFlowsApi->getDealUnitFlowStagesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_flow_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\DealUnitFlowStageDtoListEnvelope**](../Model/DealUnitFlowStageDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDealUnitFlowStagesCountAsync()`

```php
getDealUnitFlowStagesCountAsync($tenant_id, $deal_unit_flow_id): \OpenAPI\Client\Model\Int32Envelope
```

Get stages count for a deal unit flow

Returns the total count of stages for a specific deal unit flow with OData filter support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DealUnitFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_flow_id = 'deal_unit_flow_id_example'; // string

try {
    $result = $apiInstance->getDealUnitFlowStagesCountAsync($tenant_id, $deal_unit_flow_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitFlowsApi->getDealUnitFlowStagesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_flow_id** | **string**|  | |

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

## `getDealUnitFlowsAsync()`

```php
getDealUnitFlowsAsync($tenant_id): \OpenAPI\Client\Model\DealUnitFlowDtoListEnvelope
```

Get deal unit flows

Retrieves a list of deal unit flows for the specified tenant with OData query support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DealUnitFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getDealUnitFlowsAsync($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitFlowsApi->getDealUnitFlowsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\DealUnitFlowDtoListEnvelope**](../Model/DealUnitFlowDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDealUnitFlowsCountAsync()`

```php
getDealUnitFlowsCountAsync($tenant_id): \OpenAPI\Client\Model\Int32Envelope
```

Get deal unit flows count

Returns the total count of deal unit flows for the specified tenant with OData filter support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DealUnitFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getDealUnitFlowsCountAsync($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitFlowsApi->getDealUnitFlowsCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateDealUnitFlowAsync()`

```php
updateDealUnitFlowAsync($tenant_id, $deal_unit_flow_id, $deal_unit_flow_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a deal unit flow

Updates an existing deal unit flow by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DealUnitFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_flow_id = 'deal_unit_flow_id_example'; // string
$deal_unit_flow_update_dto = new \OpenAPI\Client\Model\DealUnitFlowUpdateDto(); // \OpenAPI\Client\Model\DealUnitFlowUpdateDto

try {
    $result = $apiInstance->updateDealUnitFlowAsync($tenant_id, $deal_unit_flow_id, $deal_unit_flow_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitFlowsApi->updateDealUnitFlowAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_flow_id** | **string**|  | |
| **deal_unit_flow_update_dto** | [**\OpenAPI\Client\Model\DealUnitFlowUpdateDto**](../Model/DealUnitFlowUpdateDto.md)|  | [optional] |

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

## `updateDealUnitFlowStageAsync()`

```php
updateDealUnitFlowStageAsync($tenant_id, $deal_unit_flow_id, $deal_unit_flow_stage_id, $deal_unit_flow_stage_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a deal unit flow stage

Updates an existing stage within a specific deal unit flow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DealUnitFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_flow_id = 'deal_unit_flow_id_example'; // string
$deal_unit_flow_stage_id = 'deal_unit_flow_stage_id_example'; // string
$deal_unit_flow_stage_update_dto = new \OpenAPI\Client\Model\DealUnitFlowStageUpdateDto(); // \OpenAPI\Client\Model\DealUnitFlowStageUpdateDto

try {
    $result = $apiInstance->updateDealUnitFlowStageAsync($tenant_id, $deal_unit_flow_id, $deal_unit_flow_stage_id, $deal_unit_flow_stage_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitFlowsApi->updateDealUnitFlowStageAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_flow_id** | **string**|  | |
| **deal_unit_flow_stage_id** | **string**|  | |
| **deal_unit_flow_stage_update_dto** | [**\OpenAPI\Client\Model\DealUnitFlowStageUpdateDto**](../Model/DealUnitFlowStageUpdateDto.md)|  | [optional] |

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
