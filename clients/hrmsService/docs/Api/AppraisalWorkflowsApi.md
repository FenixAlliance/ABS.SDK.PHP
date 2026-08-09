# OpenAPI\Client\AppraisalWorkflowsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAppraisalWorkflowAsync()**](AppraisalWorkflowsApi.md#createAppraisalWorkflowAsync) | **POST** /api/v2/HrmsService/AppraisalWorkflows | Create an appraisal workflow |
| [**deleteAppraisalWorkflowAsync()**](AppraisalWorkflowsApi.md#deleteAppraisalWorkflowAsync) | **DELETE** /api/v2/HrmsService/AppraisalWorkflows/{workflowId} | Delete an appraisal workflow |
| [**getAppraisalWorkflowByIdAsync()**](AppraisalWorkflowsApi.md#getAppraisalWorkflowByIdAsync) | **GET** /api/v2/HrmsService/AppraisalWorkflows/{workflowId} | Get appraisal workflow by ID |
| [**getAppraisalWorkflowsAsync()**](AppraisalWorkflowsApi.md#getAppraisalWorkflowsAsync) | **GET** /api/v2/HrmsService/AppraisalWorkflows | Get appraisal workflows |
| [**getAppraisalWorkflowsCountAsync()**](AppraisalWorkflowsApi.md#getAppraisalWorkflowsCountAsync) | **GET** /api/v2/HrmsService/AppraisalWorkflows/Count | Count appraisal workflows |
| [**updateAppraisalWorkflowAsync()**](AppraisalWorkflowsApi.md#updateAppraisalWorkflowAsync) | **PUT** /api/v2/HrmsService/AppraisalWorkflows/{workflowId} | Update an appraisal workflow |


## `createAppraisalWorkflowAsync()`

```php
createAppraisalWorkflowAsync($tenant_id, $api_version, $x_api_version, $appraisal_workflow_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create an appraisal workflow

Creates a new appraisal workflow for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppraisalWorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$appraisal_workflow_create_dto = new \OpenAPI\Client\Model\AppraisalWorkflowCreateDto(); // \OpenAPI\Client\Model\AppraisalWorkflowCreateDto

try {
    $result = $apiInstance->createAppraisalWorkflowAsync($tenant_id, $api_version, $x_api_version, $appraisal_workflow_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppraisalWorkflowsApi->createAppraisalWorkflowAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **appraisal_workflow_create_dto** | [**\OpenAPI\Client\Model\AppraisalWorkflowCreateDto**](../Model/AppraisalWorkflowCreateDto.md)|  | [optional] |

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

## `deleteAppraisalWorkflowAsync()`

```php
deleteAppraisalWorkflowAsync($tenant_id, $workflow_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete an appraisal workflow

Deletes an appraisal workflow for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppraisalWorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$workflow_id = 'workflow_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteAppraisalWorkflowAsync($tenant_id, $workflow_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppraisalWorkflowsApi->deleteAppraisalWorkflowAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **workflow_id** | **string**|  | |
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

## `getAppraisalWorkflowByIdAsync()`

```php
getAppraisalWorkflowByIdAsync($tenant_id, $workflow_id, $api_version, $x_api_version): \OpenAPI\Client\Model\AppraisalWorkflowDtoEnvelope
```

Get appraisal workflow by ID

Retrieves a specific appraisal workflow by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppraisalWorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$workflow_id = 'workflow_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getAppraisalWorkflowByIdAsync($tenant_id, $workflow_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppraisalWorkflowsApi->getAppraisalWorkflowByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **workflow_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AppraisalWorkflowDtoEnvelope**](../Model/AppraisalWorkflowDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAppraisalWorkflowsAsync()`

```php
getAppraisalWorkflowsAsync($tenant_id, $api_version, $x_api_version, $appraisal_workflow_dto_collection_query_parameters): \OpenAPI\Client\Model\AppraisalWorkflowDtoListEnvelope
```

Get appraisal workflows

Retrieves appraisal workflows for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppraisalWorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$appraisal_workflow_dto_collection_query_parameters = new \OpenAPI\Client\Model\AppraisalWorkflowDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\AppraisalWorkflowDtoCollectionQueryParameters

try {
    $result = $apiInstance->getAppraisalWorkflowsAsync($tenant_id, $api_version, $x_api_version, $appraisal_workflow_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppraisalWorkflowsApi->getAppraisalWorkflowsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **appraisal_workflow_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\AppraisalWorkflowDtoCollectionQueryParameters**](../Model/AppraisalWorkflowDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AppraisalWorkflowDtoListEnvelope**](../Model/AppraisalWorkflowDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAppraisalWorkflowsCountAsync()`

```php
getAppraisalWorkflowsCountAsync($tenant_id, $api_version, $x_api_version, $appraisal_workflow_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Count appraisal workflows

Counts appraisal workflows for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppraisalWorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$appraisal_workflow_dto_collection_query_parameters = new \OpenAPI\Client\Model\AppraisalWorkflowDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\AppraisalWorkflowDtoCollectionQueryParameters

try {
    $result = $apiInstance->getAppraisalWorkflowsCountAsync($tenant_id, $api_version, $x_api_version, $appraisal_workflow_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppraisalWorkflowsApi->getAppraisalWorkflowsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **appraisal_workflow_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\AppraisalWorkflowDtoCollectionQueryParameters**](../Model/AppraisalWorkflowDtoCollectionQueryParameters.md)|  | [optional] |

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

## `updateAppraisalWorkflowAsync()`

```php
updateAppraisalWorkflowAsync($tenant_id, $workflow_id, $api_version, $x_api_version, $appraisal_workflow_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update an appraisal workflow

Updates an existing appraisal workflow for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppraisalWorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$workflow_id = 'workflow_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$appraisal_workflow_update_dto = new \OpenAPI\Client\Model\AppraisalWorkflowUpdateDto(); // \OpenAPI\Client\Model\AppraisalWorkflowUpdateDto

try {
    $result = $apiInstance->updateAppraisalWorkflowAsync($tenant_id, $workflow_id, $api_version, $x_api_version, $appraisal_workflow_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppraisalWorkflowsApi->updateAppraisalWorkflowAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **workflow_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **appraisal_workflow_update_dto** | [**\OpenAPI\Client\Model\AppraisalWorkflowUpdateDto**](../Model/AppraisalWorkflowUpdateDto.md)|  | [optional] |

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
