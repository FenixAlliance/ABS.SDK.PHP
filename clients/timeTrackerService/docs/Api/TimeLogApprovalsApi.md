# OpenAPI\Client\TimeLogApprovalsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**requestProjectHoursApprovalAsync()**](TimeLogApprovalsApi.md#requestProjectHoursApprovalAsync) | **POST** /api/v2/TimeTrackerService/TimeLogApprovals | Request project hours approval |
| [**updateProjectHoursApprovalApproverAsync()**](TimeLogApprovalsApi.md#updateProjectHoursApprovalApproverAsync) | **PUT** /api/v2/TimeTrackerService/TimeLogApprovals/{approvalId}/Approver | Update approval approver |
| [**updateProjectHoursApprovalStatusAsync()**](TimeLogApprovalsApi.md#updateProjectHoursApprovalStatusAsync) | **PUT** /api/v2/TimeTrackerService/TimeLogApprovals/{approvalId}/Status | Update approval status |


## `requestProjectHoursApprovalAsync()`

```php
requestProjectHoursApprovalAsync($tenant_id, $api_version, $x_api_version, $project_hours_approval_create_dto)
```

Request project hours approval

Creates a new project hours approval request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TimeLogApprovalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$project_hours_approval_create_dto = new \OpenAPI\Client\Model\ProjectHoursApprovalCreateDto(); // \OpenAPI\Client\Model\ProjectHoursApprovalCreateDto

try {
    $apiInstance->requestProjectHoursApprovalAsync($tenant_id, $api_version, $x_api_version, $project_hours_approval_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling TimeLogApprovalsApi->requestProjectHoursApprovalAsync: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProjectHoursApprovalApproverAsync()`

```php
updateProjectHoursApprovalApproverAsync($approval_id, $tenant_id, $api_version, $x_api_version, $project_hours_approval_approver_update_dto)
```

Update approval approver

Updates the approver of an existing project hours approval.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TimeLogApprovalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$approval_id = 'approval_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$project_hours_approval_approver_update_dto = new \OpenAPI\Client\Model\ProjectHoursApprovalApproverUpdateDto(); // \OpenAPI\Client\Model\ProjectHoursApprovalApproverUpdateDto

try {
    $apiInstance->updateProjectHoursApprovalApproverAsync($approval_id, $tenant_id, $api_version, $x_api_version, $project_hours_approval_approver_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling TimeLogApprovalsApi->updateProjectHoursApprovalApproverAsync: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProjectHoursApprovalStatusAsync()`

```php
updateProjectHoursApprovalStatusAsync($tenant_id, $approval_id, $api_version, $x_api_version, $project_hours_approval_status_update_dto)
```

Update approval status

Updates the status of an existing project hours approval.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TimeLogApprovalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$approval_id = 'approval_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$project_hours_approval_status_update_dto = new \OpenAPI\Client\Model\ProjectHoursApprovalStatusUpdateDto(); // \OpenAPI\Client\Model\ProjectHoursApprovalStatusUpdateDto

try {
    $apiInstance->updateProjectHoursApprovalStatusAsync($tenant_id, $approval_id, $api_version, $x_api_version, $project_hours_approval_status_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling TimeLogApprovalsApi->updateProjectHoursApprovalStatusAsync: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
