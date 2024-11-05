# OpenAPI\Client\DealUnitFlowsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2DealsServiceDealUnitFlowsCountGet()**](DealUnitFlowsApi.md#apiV2DealsServiceDealUnitFlowsCountGet) | **GET** /api/v2/DealsService/DealUnitFlows/Count |  |
| [**apiV2DealsServiceDealUnitFlowsDealUnitFlowIdDelete()**](DealUnitFlowsApi.md#apiV2DealsServiceDealUnitFlowsDealUnitFlowIdDelete) | **DELETE** /api/v2/DealsService/DealUnitFlows/{dealUnitFlowId} |  |
| [**apiV2DealsServiceDealUnitFlowsDealUnitFlowIdGet()**](DealUnitFlowsApi.md#apiV2DealsServiceDealUnitFlowsDealUnitFlowIdGet) | **GET** /api/v2/DealsService/DealUnitFlows/{dealUnitFlowId} |  |
| [**apiV2DealsServiceDealUnitFlowsDealUnitFlowIdPut()**](DealUnitFlowsApi.md#apiV2DealsServiceDealUnitFlowsDealUnitFlowIdPut) | **PUT** /api/v2/DealsService/DealUnitFlows/{dealUnitFlowId} |  |
| [**apiV2DealsServiceDealUnitFlowsDealUnitFlowIdStagesCountGet()**](DealUnitFlowsApi.md#apiV2DealsServiceDealUnitFlowsDealUnitFlowIdStagesCountGet) | **GET** /api/v2/DealsService/DealUnitFlows/{dealUnitFlowId}/Stages/Count |  |
| [**apiV2DealsServiceDealUnitFlowsDealUnitFlowIdStagesDealUnitFlowStageIdDelete()**](DealUnitFlowsApi.md#apiV2DealsServiceDealUnitFlowsDealUnitFlowIdStagesDealUnitFlowStageIdDelete) | **DELETE** /api/v2/DealsService/DealUnitFlows/{dealUnitFlowId}/Stages/{dealUnitFlowStageId} |  |
| [**apiV2DealsServiceDealUnitFlowsDealUnitFlowIdStagesDealUnitFlowStageIdGet()**](DealUnitFlowsApi.md#apiV2DealsServiceDealUnitFlowsDealUnitFlowIdStagesDealUnitFlowStageIdGet) | **GET** /api/v2/DealsService/DealUnitFlows/{dealUnitFlowId}/Stages/{dealUnitFlowStageId} |  |
| [**apiV2DealsServiceDealUnitFlowsDealUnitFlowIdStagesDealUnitFlowStageIdPut()**](DealUnitFlowsApi.md#apiV2DealsServiceDealUnitFlowsDealUnitFlowIdStagesDealUnitFlowStageIdPut) | **PUT** /api/v2/DealsService/DealUnitFlows/{dealUnitFlowId}/Stages/{dealUnitFlowStageId} |  |
| [**apiV2DealsServiceDealUnitFlowsDealUnitFlowIdStagesGet()**](DealUnitFlowsApi.md#apiV2DealsServiceDealUnitFlowsDealUnitFlowIdStagesGet) | **GET** /api/v2/DealsService/DealUnitFlows/{dealUnitFlowId}/Stages |  |
| [**apiV2DealsServiceDealUnitFlowsDealUnitFlowIdStagesPost()**](DealUnitFlowsApi.md#apiV2DealsServiceDealUnitFlowsDealUnitFlowIdStagesPost) | **POST** /api/v2/DealsService/DealUnitFlows/{dealUnitFlowId}/Stages |  |
| [**apiV2DealsServiceDealUnitFlowsGet()**](DealUnitFlowsApi.md#apiV2DealsServiceDealUnitFlowsGet) | **GET** /api/v2/DealsService/DealUnitFlows |  |
| [**apiV2DealsServiceDealUnitFlowsPost()**](DealUnitFlowsApi.md#apiV2DealsServiceDealUnitFlowsPost) | **POST** /api/v2/DealsService/DealUnitFlows |  |


## `apiV2DealsServiceDealUnitFlowsCountGet()`

```php
apiV2DealsServiceDealUnitFlowsCountGet($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DealUnitFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2DealsServiceDealUnitFlowsCountGet($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitFlowsApi->apiV2DealsServiceDealUnitFlowsCountGet: ', $e->getMessage(), PHP_EOL;
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

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2DealsServiceDealUnitFlowsDealUnitFlowIdDelete()`

```php
apiV2DealsServiceDealUnitFlowsDealUnitFlowIdDelete($tenant_id, $deal_unit_flow_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DealUnitFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_flow_id = 'deal_unit_flow_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2DealsServiceDealUnitFlowsDealUnitFlowIdDelete($tenant_id, $deal_unit_flow_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitFlowsApi->apiV2DealsServiceDealUnitFlowsDealUnitFlowIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_flow_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2DealsServiceDealUnitFlowsDealUnitFlowIdGet()`

```php
apiV2DealsServiceDealUnitFlowsDealUnitFlowIdGet($tenant_id, $deal_unit_flow_id, $api_version, $x_api_version): \OpenAPI\Client\Model\DealUnitFlowDtoEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DealUnitFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_flow_id = 'deal_unit_flow_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2DealsServiceDealUnitFlowsDealUnitFlowIdGet($tenant_id, $deal_unit_flow_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitFlowsApi->apiV2DealsServiceDealUnitFlowsDealUnitFlowIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_flow_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DealUnitFlowDtoEnvelope**](../Model/DealUnitFlowDtoEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2DealsServiceDealUnitFlowsDealUnitFlowIdPut()`

```php
apiV2DealsServiceDealUnitFlowsDealUnitFlowIdPut($tenant_id, $deal_unit_flow_id, $api_version, $x_api_version, $deal_unit_flow_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DealUnitFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_flow_id = 'deal_unit_flow_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$deal_unit_flow_update_dto = new \OpenAPI\Client\Model\DealUnitFlowUpdateDto(); // \OpenAPI\Client\Model\DealUnitFlowUpdateDto

try {
    $result = $apiInstance->apiV2DealsServiceDealUnitFlowsDealUnitFlowIdPut($tenant_id, $deal_unit_flow_id, $api_version, $x_api_version, $deal_unit_flow_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitFlowsApi->apiV2DealsServiceDealUnitFlowsDealUnitFlowIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_flow_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **deal_unit_flow_update_dto** | [**\OpenAPI\Client\Model\DealUnitFlowUpdateDto**](../Model/DealUnitFlowUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2DealsServiceDealUnitFlowsDealUnitFlowIdStagesCountGet()`

```php
apiV2DealsServiceDealUnitFlowsDealUnitFlowIdStagesCountGet($tenant_id, $deal_unit_flow_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DealUnitFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_flow_id = 'deal_unit_flow_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2DealsServiceDealUnitFlowsDealUnitFlowIdStagesCountGet($tenant_id, $deal_unit_flow_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitFlowsApi->apiV2DealsServiceDealUnitFlowsDealUnitFlowIdStagesCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_flow_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Int32Envelope**](../Model/Int32Envelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2DealsServiceDealUnitFlowsDealUnitFlowIdStagesDealUnitFlowStageIdDelete()`

```php
apiV2DealsServiceDealUnitFlowsDealUnitFlowIdStagesDealUnitFlowStageIdDelete($tenant_id, $deal_unit_flow_id, $deal_unit_flow_stage_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DealUnitFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_flow_id = 'deal_unit_flow_id_example'; // string
$deal_unit_flow_stage_id = 'deal_unit_flow_stage_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2DealsServiceDealUnitFlowsDealUnitFlowIdStagesDealUnitFlowStageIdDelete($tenant_id, $deal_unit_flow_id, $deal_unit_flow_stage_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitFlowsApi->apiV2DealsServiceDealUnitFlowsDealUnitFlowIdStagesDealUnitFlowStageIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_flow_id** | **string**|  | |
| **deal_unit_flow_stage_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2DealsServiceDealUnitFlowsDealUnitFlowIdStagesDealUnitFlowStageIdGet()`

```php
apiV2DealsServiceDealUnitFlowsDealUnitFlowIdStagesDealUnitFlowStageIdGet($tenant_id, $deal_unit_flow_id, $deal_unit_flow_stage_id, $api_version, $x_api_version): \OpenAPI\Client\Model\DealUnitFlowStageDtoEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DealUnitFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_flow_id = 'deal_unit_flow_id_example'; // string
$deal_unit_flow_stage_id = 'deal_unit_flow_stage_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2DealsServiceDealUnitFlowsDealUnitFlowIdStagesDealUnitFlowStageIdGet($tenant_id, $deal_unit_flow_id, $deal_unit_flow_stage_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitFlowsApi->apiV2DealsServiceDealUnitFlowsDealUnitFlowIdStagesDealUnitFlowStageIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_flow_id** | **string**|  | |
| **deal_unit_flow_stage_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DealUnitFlowStageDtoEnvelope**](../Model/DealUnitFlowStageDtoEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2DealsServiceDealUnitFlowsDealUnitFlowIdStagesDealUnitFlowStageIdPut()`

```php
apiV2DealsServiceDealUnitFlowsDealUnitFlowIdStagesDealUnitFlowStageIdPut($tenant_id, $deal_unit_flow_id, $deal_unit_flow_stage_id, $api_version, $x_api_version, $deal_unit_flow_stage_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DealUnitFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_flow_id = 'deal_unit_flow_id_example'; // string
$deal_unit_flow_stage_id = 'deal_unit_flow_stage_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$deal_unit_flow_stage_update_dto = new \OpenAPI\Client\Model\DealUnitFlowStageUpdateDto(); // \OpenAPI\Client\Model\DealUnitFlowStageUpdateDto

try {
    $result = $apiInstance->apiV2DealsServiceDealUnitFlowsDealUnitFlowIdStagesDealUnitFlowStageIdPut($tenant_id, $deal_unit_flow_id, $deal_unit_flow_stage_id, $api_version, $x_api_version, $deal_unit_flow_stage_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitFlowsApi->apiV2DealsServiceDealUnitFlowsDealUnitFlowIdStagesDealUnitFlowStageIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_flow_id** | **string**|  | |
| **deal_unit_flow_stage_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **deal_unit_flow_stage_update_dto** | [**\OpenAPI\Client\Model\DealUnitFlowStageUpdateDto**](../Model/DealUnitFlowStageUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2DealsServiceDealUnitFlowsDealUnitFlowIdStagesGet()`

```php
apiV2DealsServiceDealUnitFlowsDealUnitFlowIdStagesGet($tenant_id, $deal_unit_flow_id, $api_version, $x_api_version): \OpenAPI\Client\Model\DealUnitFlowStageDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DealUnitFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_flow_id = 'deal_unit_flow_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2DealsServiceDealUnitFlowsDealUnitFlowIdStagesGet($tenant_id, $deal_unit_flow_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitFlowsApi->apiV2DealsServiceDealUnitFlowsDealUnitFlowIdStagesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_flow_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DealUnitFlowStageDtoListEnvelope**](../Model/DealUnitFlowStageDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2DealsServiceDealUnitFlowsDealUnitFlowIdStagesPost()`

```php
apiV2DealsServiceDealUnitFlowsDealUnitFlowIdStagesPost($tenant_id, $deal_unit_flow_id, $api_version, $x_api_version, $deal_unit_flow_stage_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DealUnitFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_flow_id = 'deal_unit_flow_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$deal_unit_flow_stage_create_dto = new \OpenAPI\Client\Model\DealUnitFlowStageCreateDto(); // \OpenAPI\Client\Model\DealUnitFlowStageCreateDto

try {
    $result = $apiInstance->apiV2DealsServiceDealUnitFlowsDealUnitFlowIdStagesPost($tenant_id, $deal_unit_flow_id, $api_version, $x_api_version, $deal_unit_flow_stage_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitFlowsApi->apiV2DealsServiceDealUnitFlowsDealUnitFlowIdStagesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_flow_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **deal_unit_flow_stage_create_dto** | [**\OpenAPI\Client\Model\DealUnitFlowStageCreateDto**](../Model/DealUnitFlowStageCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2DealsServiceDealUnitFlowsGet()`

```php
apiV2DealsServiceDealUnitFlowsGet($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\DealUnitFlowDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DealUnitFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2DealsServiceDealUnitFlowsGet($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitFlowsApi->apiV2DealsServiceDealUnitFlowsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DealUnitFlowDtoListEnvelope**](../Model/DealUnitFlowDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2DealsServiceDealUnitFlowsPost()`

```php
apiV2DealsServiceDealUnitFlowsPost($tenant_id, $api_version, $x_api_version, $deal_unit_flow_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DealUnitFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$deal_unit_flow_create_dto = new \OpenAPI\Client\Model\DealUnitFlowCreateDto(); // \OpenAPI\Client\Model\DealUnitFlowCreateDto

try {
    $result = $apiInstance->apiV2DealsServiceDealUnitFlowsPost($tenant_id, $api_version, $x_api_version, $deal_unit_flow_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitFlowsApi->apiV2DealsServiceDealUnitFlowsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **deal_unit_flow_create_dto** | [**\OpenAPI\Client\Model\DealUnitFlowCreateDto**](../Model/DealUnitFlowCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
