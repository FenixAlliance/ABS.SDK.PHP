# OpenAPI\Client\AppraisalStagesApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAppraisalStageAsync()**](AppraisalStagesApi.md#createAppraisalStageAsync) | **POST** /api/v2/HrmsService/AppraisalStages | Create an appraisal stage |
| [**deleteAppraisalStageAsync()**](AppraisalStagesApi.md#deleteAppraisalStageAsync) | **DELETE** /api/v2/HrmsService/AppraisalStages/{stageId} | Delete an appraisal stage |
| [**getAppraisalStageByIdAsync()**](AppraisalStagesApi.md#getAppraisalStageByIdAsync) | **GET** /api/v2/HrmsService/AppraisalStages/{stageId} | Get appraisal stage by ID |
| [**getAppraisalStagesAsync()**](AppraisalStagesApi.md#getAppraisalStagesAsync) | **GET** /api/v2/HrmsService/AppraisalStages | Get appraisal stages |
| [**getAppraisalStagesCountAsync()**](AppraisalStagesApi.md#getAppraisalStagesCountAsync) | **GET** /api/v2/HrmsService/AppraisalStages/Count | Count appraisal stages |
| [**updateAppraisalStageAsync()**](AppraisalStagesApi.md#updateAppraisalStageAsync) | **PUT** /api/v2/HrmsService/AppraisalStages/{stageId} | Update an appraisal stage |


## `createAppraisalStageAsync()`

```php
createAppraisalStageAsync($tenant_id, $api_version, $x_api_version, $appraisal_stage_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create an appraisal stage

Creates a new appraisal stage for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppraisalStagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$appraisal_stage_create_dto = new \OpenAPI\Client\Model\AppraisalStageCreateDto(); // \OpenAPI\Client\Model\AppraisalStageCreateDto

try {
    $result = $apiInstance->createAppraisalStageAsync($tenant_id, $api_version, $x_api_version, $appraisal_stage_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppraisalStagesApi->createAppraisalStageAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **appraisal_stage_create_dto** | [**\OpenAPI\Client\Model\AppraisalStageCreateDto**](../Model/AppraisalStageCreateDto.md)|  | [optional] |

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

## `deleteAppraisalStageAsync()`

```php
deleteAppraisalStageAsync($tenant_id, $stage_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete an appraisal stage

Deletes an appraisal stage for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppraisalStagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$stage_id = 'stage_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteAppraisalStageAsync($tenant_id, $stage_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppraisalStagesApi->deleteAppraisalStageAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **stage_id** | **string**|  | |
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

## `getAppraisalStageByIdAsync()`

```php
getAppraisalStageByIdAsync($tenant_id, $stage_id, $api_version, $x_api_version): \OpenAPI\Client\Model\AppraisalStageDtoEnvelope
```

Get appraisal stage by ID

Retrieves a specific appraisal stage by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppraisalStagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$stage_id = 'stage_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getAppraisalStageByIdAsync($tenant_id, $stage_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppraisalStagesApi->getAppraisalStageByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **stage_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AppraisalStageDtoEnvelope**](../Model/AppraisalStageDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAppraisalStagesAsync()`

```php
getAppraisalStagesAsync($tenant_id, $api_version, $x_api_version, $appraisal_stage_dto_collection_query_parameters): \OpenAPI\Client\Model\AppraisalStageDtoListEnvelope
```

Get appraisal stages

Retrieves appraisal stages for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppraisalStagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$appraisal_stage_dto_collection_query_parameters = new \OpenAPI\Client\Model\AppraisalStageDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\AppraisalStageDtoCollectionQueryParameters

try {
    $result = $apiInstance->getAppraisalStagesAsync($tenant_id, $api_version, $x_api_version, $appraisal_stage_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppraisalStagesApi->getAppraisalStagesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **appraisal_stage_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\AppraisalStageDtoCollectionQueryParameters**](../Model/AppraisalStageDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AppraisalStageDtoListEnvelope**](../Model/AppraisalStageDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAppraisalStagesCountAsync()`

```php
getAppraisalStagesCountAsync($tenant_id, $api_version, $x_api_version, $appraisal_stage_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Count appraisal stages

Counts appraisal stages for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppraisalStagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$appraisal_stage_dto_collection_query_parameters = new \OpenAPI\Client\Model\AppraisalStageDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\AppraisalStageDtoCollectionQueryParameters

try {
    $result = $apiInstance->getAppraisalStagesCountAsync($tenant_id, $api_version, $x_api_version, $appraisal_stage_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppraisalStagesApi->getAppraisalStagesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **appraisal_stage_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\AppraisalStageDtoCollectionQueryParameters**](../Model/AppraisalStageDtoCollectionQueryParameters.md)|  | [optional] |

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

## `updateAppraisalStageAsync()`

```php
updateAppraisalStageAsync($tenant_id, $stage_id, $api_version, $x_api_version, $appraisal_stage_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update an appraisal stage

Updates an existing appraisal stage for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppraisalStagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$stage_id = 'stage_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$appraisal_stage_update_dto = new \OpenAPI\Client\Model\AppraisalStageUpdateDto(); // \OpenAPI\Client\Model\AppraisalStageUpdateDto

try {
    $result = $apiInstance->updateAppraisalStageAsync($tenant_id, $stage_id, $api_version, $x_api_version, $appraisal_stage_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppraisalStagesApi->updateAppraisalStageAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **stage_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **appraisal_stage_update_dto** | [**\OpenAPI\Client\Model\AppraisalStageUpdateDto**](../Model/AppraisalStageUpdateDto.md)|  | [optional] |

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
