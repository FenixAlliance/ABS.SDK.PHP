# OpenAPI\Client\TimeLogApprovalsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2TimeTrackerServiceTimeLogApprovalsApprovalIdApproverPut()**](TimeLogApprovalsApi.md#apiV2TimeTrackerServiceTimeLogApprovalsApprovalIdApproverPut) | **PUT** /api/v2/TimeTrackerService/TimeLogApprovals/{approvalId}/Approver |  |
| [**apiV2TimeTrackerServiceTimeLogApprovalsApprovalIdStatusPut()**](TimeLogApprovalsApi.md#apiV2TimeTrackerServiceTimeLogApprovalsApprovalIdStatusPut) | **PUT** /api/v2/TimeTrackerService/TimeLogApprovals/{approvalId}/Status |  |
| [**apiV2TimeTrackerServiceTimeLogApprovalsPost()**](TimeLogApprovalsApi.md#apiV2TimeTrackerServiceTimeLogApprovalsPost) | **POST** /api/v2/TimeTrackerService/TimeLogApprovals |  |


## `apiV2TimeTrackerServiceTimeLogApprovalsApprovalIdApproverPut()`

```php
apiV2TimeTrackerServiceTimeLogApprovalsApprovalIdApproverPut($approval_id, $tenant_id, $api_version, $x_api_version, $project_hours_approval_approver_update_dto)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TimeLogApprovalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$approval_id = 'approval_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$project_hours_approval_approver_update_dto = new \OpenAPI\Client\Model\ProjectHoursApprovalApproverUpdateDto(); // \OpenAPI\Client\Model\ProjectHoursApprovalApproverUpdateDto

try {
    $apiInstance->apiV2TimeTrackerServiceTimeLogApprovalsApprovalIdApproverPut($approval_id, $tenant_id, $api_version, $x_api_version, $project_hours_approval_approver_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling TimeLogApprovalsApi->apiV2TimeTrackerServiceTimeLogApprovalsApprovalIdApproverPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **approval_id** | **string**|  | |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **project_hours_approval_approver_update_dto** | [**\OpenAPI\Client\Model\ProjectHoursApprovalApproverUpdateDto**](../Model/ProjectHoursApprovalApproverUpdateDto.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TimeTrackerServiceTimeLogApprovalsApprovalIdStatusPut()`

```php
apiV2TimeTrackerServiceTimeLogApprovalsApprovalIdStatusPut($tenant_id, $approval_id, $api_version, $x_api_version, $project_hours_approval_status_update_dto)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TimeLogApprovalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$approval_id = 'approval_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$project_hours_approval_status_update_dto = new \OpenAPI\Client\Model\ProjectHoursApprovalStatusUpdateDto(); // \OpenAPI\Client\Model\ProjectHoursApprovalStatusUpdateDto

try {
    $apiInstance->apiV2TimeTrackerServiceTimeLogApprovalsApprovalIdStatusPut($tenant_id, $approval_id, $api_version, $x_api_version, $project_hours_approval_status_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling TimeLogApprovalsApi->apiV2TimeTrackerServiceTimeLogApprovalsApprovalIdStatusPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **approval_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **project_hours_approval_status_update_dto** | [**\OpenAPI\Client\Model\ProjectHoursApprovalStatusUpdateDto**](../Model/ProjectHoursApprovalStatusUpdateDto.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TimeTrackerServiceTimeLogApprovalsPost()`

```php
apiV2TimeTrackerServiceTimeLogApprovalsPost($tenant_id, $api_version, $x_api_version, $project_hours_approval_create_dto)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TimeLogApprovalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$project_hours_approval_create_dto = new \OpenAPI\Client\Model\ProjectHoursApprovalCreateDto(); // \OpenAPI\Client\Model\ProjectHoursApprovalCreateDto

try {
    $apiInstance->apiV2TimeTrackerServiceTimeLogApprovalsPost($tenant_id, $api_version, $x_api_version, $project_hours_approval_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling TimeLogApprovalsApi->apiV2TimeTrackerServiceTimeLogApprovalsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **project_hours_approval_create_dto** | [**\OpenAPI\Client\Model\ProjectHoursApprovalCreateDto**](../Model/ProjectHoursApprovalCreateDto.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
