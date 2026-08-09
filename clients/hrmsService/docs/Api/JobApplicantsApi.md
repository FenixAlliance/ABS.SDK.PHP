# OpenAPI\Client\JobApplicantsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createJobApplicantAsync()**](JobApplicantsApi.md#createJobApplicantAsync) | **POST** /api/v2/HrmsService/JobApplicants | Create a job applicant |
| [**deleteJobApplicantAsync()**](JobApplicantsApi.md#deleteJobApplicantAsync) | **DELETE** /api/v2/HrmsService/JobApplicants/{jobApplicantId} | Delete a job applicant |
| [**getJobApplicantByIdAsync()**](JobApplicantsApi.md#getJobApplicantByIdAsync) | **GET** /api/v2/HrmsService/JobApplicants/{jobApplicantId} | Get job applicant by ID |
| [**getJobApplicantsAsync()**](JobApplicantsApi.md#getJobApplicantsAsync) | **GET** /api/v2/HrmsService/JobApplicants | Get job applicants |
| [**getJobApplicantsCountAsync()**](JobApplicantsApi.md#getJobApplicantsCountAsync) | **GET** /api/v2/HrmsService/JobApplicants/Count | Count job applicants |
| [**patchJobApplicantAsync()**](JobApplicantsApi.md#patchJobApplicantAsync) | **PATCH** /api/v2/HrmsService/JobApplicants/{jobApplicantId} | Patch a job applicant |
| [**updateJobApplicantAsync()**](JobApplicantsApi.md#updateJobApplicantAsync) | **PUT** /api/v2/HrmsService/JobApplicants/{jobApplicantId} | Update a job applicant |


## `createJobApplicantAsync()`

```php
createJobApplicantAsync($tenant_id, $api_version, $x_api_version, $job_applicant_profile_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a job applicant

Creates a new job applicant (candidate) profile for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JobApplicantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$job_applicant_profile_create_dto = new \OpenAPI\Client\Model\JobApplicantProfileCreateDto(); // \OpenAPI\Client\Model\JobApplicantProfileCreateDto

try {
    $result = $apiInstance->createJobApplicantAsync($tenant_id, $api_version, $x_api_version, $job_applicant_profile_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApplicantsApi->createJobApplicantAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **job_applicant_profile_create_dto** | [**\OpenAPI\Client\Model\JobApplicantProfileCreateDto**](../Model/JobApplicantProfileCreateDto.md)|  | [optional] |

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

## `deleteJobApplicantAsync()`

```php
deleteJobApplicantAsync($tenant_id, $job_applicant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a job applicant

Deletes a job applicant (candidate) profile for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JobApplicantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$job_applicant_id = 'job_applicant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteJobApplicantAsync($tenant_id, $job_applicant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApplicantsApi->deleteJobApplicantAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **job_applicant_id** | **string**|  | |
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

## `getJobApplicantByIdAsync()`

```php
getJobApplicantByIdAsync($tenant_id, $job_applicant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\JobApplicantProfileDtoEnvelope
```

Get job applicant by ID

Retrieves a specific job applicant (candidate) profile by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JobApplicantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$job_applicant_id = 'job_applicant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getJobApplicantByIdAsync($tenant_id, $job_applicant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApplicantsApi->getJobApplicantByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **job_applicant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\JobApplicantProfileDtoEnvelope**](../Model/JobApplicantProfileDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getJobApplicantsAsync()`

```php
getJobApplicantsAsync($tenant_id, $api_version, $x_api_version, $job_applicant_profile_dto_collection_query_parameters): \OpenAPI\Client\Model\JobApplicantProfileDtoListEnvelope
```

Get job applicants

Retrieves job applicant (candidate) profiles for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JobApplicantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$job_applicant_profile_dto_collection_query_parameters = new \OpenAPI\Client\Model\JobApplicantProfileDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\JobApplicantProfileDtoCollectionQueryParameters

try {
    $result = $apiInstance->getJobApplicantsAsync($tenant_id, $api_version, $x_api_version, $job_applicant_profile_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApplicantsApi->getJobApplicantsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **job_applicant_profile_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\JobApplicantProfileDtoCollectionQueryParameters**](../Model/JobApplicantProfileDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\JobApplicantProfileDtoListEnvelope**](../Model/JobApplicantProfileDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getJobApplicantsCountAsync()`

```php
getJobApplicantsCountAsync($tenant_id, $api_version, $x_api_version, $job_applicant_profile_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Count job applicants

Counts job applicant profiles for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JobApplicantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$job_applicant_profile_dto_collection_query_parameters = new \OpenAPI\Client\Model\JobApplicantProfileDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\JobApplicantProfileDtoCollectionQueryParameters

try {
    $result = $apiInstance->getJobApplicantsCountAsync($tenant_id, $api_version, $x_api_version, $job_applicant_profile_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApplicantsApi->getJobApplicantsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **job_applicant_profile_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\JobApplicantProfileDtoCollectionQueryParameters**](../Model/JobApplicantProfileDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchJobApplicantAsync()`

```php
patchJobApplicantAsync($tenant_id, $job_applicant_id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a job applicant

Partially updates an existing job applicant (candidate) profile for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JobApplicantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$job_applicant_id = 'job_applicant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchJobApplicantAsync($tenant_id, $job_applicant_id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApplicantsApi->patchJobApplicantAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **job_applicant_id** | **string**|  | |
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

## `updateJobApplicantAsync()`

```php
updateJobApplicantAsync($tenant_id, $job_applicant_id, $api_version, $x_api_version, $job_applicant_profile_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a job applicant

Updates an existing job applicant (candidate) profile for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JobApplicantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$job_applicant_id = 'job_applicant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$job_applicant_profile_update_dto = new \OpenAPI\Client\Model\JobApplicantProfileUpdateDto(); // \OpenAPI\Client\Model\JobApplicantProfileUpdateDto

try {
    $result = $apiInstance->updateJobApplicantAsync($tenant_id, $job_applicant_id, $api_version, $x_api_version, $job_applicant_profile_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApplicantsApi->updateJobApplicantAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **job_applicant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **job_applicant_profile_update_dto** | [**\OpenAPI\Client\Model\JobApplicantProfileUpdateDto**](../Model/JobApplicantProfileUpdateDto.md)|  | [optional] |

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
