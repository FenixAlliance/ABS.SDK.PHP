# OpenAPI\Client\JobApplicationsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**changeJobApplicationStatusAsync()**](JobApplicationsApi.md#changeJobApplicationStatusAsync) | **POST** /api/v2/HrmsService/JobApplications/{jobApplicationId}/Status | Change job application status |
| [**createJobApplicationAsync()**](JobApplicationsApi.md#createJobApplicationAsync) | **POST** /api/v2/HrmsService/JobApplications | Create a job application |
| [**deleteJobApplicationAsync()**](JobApplicationsApi.md#deleteJobApplicationAsync) | **DELETE** /api/v2/HrmsService/JobApplications/{jobApplicationId} | Delete a job application |
| [**getJobApplicationByIdAsync()**](JobApplicationsApi.md#getJobApplicationByIdAsync) | **GET** /api/v2/HrmsService/JobApplications/{jobApplicationId} | Get job application by ID |
| [**getJobApplicationsAsync()**](JobApplicationsApi.md#getJobApplicationsAsync) | **GET** /api/v2/HrmsService/JobApplications | Get job applications |
| [**getJobApplicationsCountAsync()**](JobApplicationsApi.md#getJobApplicationsCountAsync) | **GET** /api/v2/HrmsService/JobApplications/Count | Count job applications |
| [**patchJobApplicationAsync()**](JobApplicationsApi.md#patchJobApplicationAsync) | **PATCH** /api/v2/HrmsService/JobApplications/{jobApplicationId} | Patch a job application |
| [**updateJobApplicationAsync()**](JobApplicationsApi.md#updateJobApplicationAsync) | **PUT** /api/v2/HrmsService/JobApplications/{jobApplicationId} | Update a job application |


## `changeJobApplicationStatusAsync()`

```php
changeJobApplicationStatusAsync($tenant_id, $job_application_id, $status, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Change job application status

Transitions the application to a new funnel status (e.g. UnderReview, Interviewing, Offered, Hired, Rejected). Raises JobApplicationStatusChanged; terminal statuses are immutable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JobApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$job_application_id = 'job_application_id_example'; // string
$status = 'status_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->changeJobApplicationStatusAsync($tenant_id, $job_application_id, $status, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApplicationsApi->changeJobApplicationStatusAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **job_application_id** | **string**|  | |
| **status** | **string**|  | |
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

## `createJobApplicationAsync()`

```php
createJobApplicationAsync($tenant_id, $api_version, $x_api_version, $job_offer_application_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a job application

Records a candidate's application against one of the tenant's job offers. The targeted job offer must belong to the tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JobApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$job_offer_application_create_dto = new \OpenAPI\Client\Model\JobOfferApplicationCreateDto(); // \OpenAPI\Client\Model\JobOfferApplicationCreateDto

try {
    $result = $apiInstance->createJobApplicationAsync($tenant_id, $api_version, $x_api_version, $job_offer_application_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApplicationsApi->createJobApplicationAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **job_offer_application_create_dto** | [**\OpenAPI\Client\Model\JobOfferApplicationCreateDto**](../Model/JobOfferApplicationCreateDto.md)|  | [optional] |

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

## `deleteJobApplicationAsync()`

```php
deleteJobApplicationAsync($tenant_id, $job_application_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a job application

Removes an application submitted against one of the tenant's job offers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JobApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$job_application_id = 'job_application_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteJobApplicationAsync($tenant_id, $job_application_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApplicationsApi->deleteJobApplicationAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **job_application_id** | **string**|  | |
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

## `getJobApplicationByIdAsync()`

```php
getJobApplicationByIdAsync($tenant_id, $job_application_id, $api_version, $x_api_version): \OpenAPI\Client\Model\JobOfferApplicationDtoEnvelope
```

Get job application by ID

Retrieves a specific application submitted against one of the tenant's job offers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JobApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$job_application_id = 'job_application_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getJobApplicationByIdAsync($tenant_id, $job_application_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApplicationsApi->getJobApplicationByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **job_application_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\JobOfferApplicationDtoEnvelope**](../Model/JobOfferApplicationDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getJobApplicationsAsync()`

```php
getJobApplicationsAsync($tenant_id, $api_version, $x_api_version, $job_offer_application_dto_collection_query_parameters): \OpenAPI\Client\Model\JobOfferApplicationDtoListEnvelope
```

Get job applications

Retrieves applications submitted against the tenant's job offers. Filter with `$filter=JobOfferId eq '...'` or `JobApplicantProfileId eq '...'`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JobApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$job_offer_application_dto_collection_query_parameters = new \OpenAPI\Client\Model\JobOfferApplicationDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\JobOfferApplicationDtoCollectionQueryParameters

try {
    $result = $apiInstance->getJobApplicationsAsync($tenant_id, $api_version, $x_api_version, $job_offer_application_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApplicationsApi->getJobApplicationsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **job_offer_application_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\JobOfferApplicationDtoCollectionQueryParameters**](../Model/JobOfferApplicationDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\JobOfferApplicationDtoListEnvelope**](../Model/JobOfferApplicationDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getJobApplicationsCountAsync()`

```php
getJobApplicationsCountAsync($tenant_id, $api_version, $x_api_version, $job_offer_application_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Count job applications

Counts applications submitted against the tenant's job offers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JobApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$job_offer_application_dto_collection_query_parameters = new \OpenAPI\Client\Model\JobOfferApplicationDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\JobOfferApplicationDtoCollectionQueryParameters

try {
    $result = $apiInstance->getJobApplicationsCountAsync($tenant_id, $api_version, $x_api_version, $job_offer_application_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApplicationsApi->getJobApplicationsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **job_offer_application_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\JobOfferApplicationDtoCollectionQueryParameters**](../Model/JobOfferApplicationDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchJobApplicationAsync()`

```php
patchJobApplicationAsync($tenant_id, $job_application_id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a job application

Partially updates an existing application submitted against one of the tenant's job offers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JobApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$job_application_id = 'job_application_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchJobApplicationAsync($tenant_id, $job_application_id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApplicationsApi->patchJobApplicationAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **job_application_id** | **string**|  | |
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

## `updateJobApplicationAsync()`

```php
updateJobApplicationAsync($tenant_id, $job_application_id, $api_version, $x_api_version, $job_offer_application_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a job application

Updates an existing application submitted against one of the tenant's job offers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JobApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$job_application_id = 'job_application_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$job_offer_application_update_dto = new \OpenAPI\Client\Model\JobOfferApplicationUpdateDto(); // \OpenAPI\Client\Model\JobOfferApplicationUpdateDto

try {
    $result = $apiInstance->updateJobApplicationAsync($tenant_id, $job_application_id, $api_version, $x_api_version, $job_offer_application_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApplicationsApi->updateJobApplicationAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **job_application_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **job_offer_application_update_dto** | [**\OpenAPI\Client\Model\JobOfferApplicationUpdateDto**](../Model/JobOfferApplicationUpdateDto.md)|  | [optional] |

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
