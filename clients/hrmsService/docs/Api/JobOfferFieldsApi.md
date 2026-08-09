# OpenAPI\Client\JobOfferFieldsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createJobOfferFieldAsync()**](JobOfferFieldsApi.md#createJobOfferFieldAsync) | **POST** /api/v2/HrmsService/JobOfferFields | Create a job offer field |
| [**deleteJobOfferFieldAsync()**](JobOfferFieldsApi.md#deleteJobOfferFieldAsync) | **DELETE** /api/v2/HrmsService/JobOfferFields/{jobOfferFieldId} | Delete a job offer field |
| [**getJobOfferFieldByIdAsync()**](JobOfferFieldsApi.md#getJobOfferFieldByIdAsync) | **GET** /api/v2/HrmsService/JobOfferFields/{jobOfferFieldId} | Get job offer field by ID |
| [**getJobOfferFieldsAsync()**](JobOfferFieldsApi.md#getJobOfferFieldsAsync) | **GET** /api/v2/HrmsService/JobOfferFields | Get job offer fields |
| [**getJobOfferFieldsCountAsync()**](JobOfferFieldsApi.md#getJobOfferFieldsCountAsync) | **GET** /api/v2/HrmsService/JobOfferFields/Count | Count job offer fields |
| [**patchJobOfferFieldAsync()**](JobOfferFieldsApi.md#patchJobOfferFieldAsync) | **PATCH** /api/v2/HrmsService/JobOfferFields/{jobOfferFieldId} | Patch a job offer field |
| [**updateJobOfferFieldAsync()**](JobOfferFieldsApi.md#updateJobOfferFieldAsync) | **PUT** /api/v2/HrmsService/JobOfferFields/{jobOfferFieldId} | Update a job offer field |


## `createJobOfferFieldAsync()`

```php
createJobOfferFieldAsync($tenant_id, $api_version, $x_api_version, $job_offer_field_record_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a job offer field

Links a job field to a job offer for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JobOfferFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$job_offer_field_record_create_dto = new \OpenAPI\Client\Model\JobOfferFieldRecordCreateDto(); // \OpenAPI\Client\Model\JobOfferFieldRecordCreateDto

try {
    $result = $apiInstance->createJobOfferFieldAsync($tenant_id, $api_version, $x_api_version, $job_offer_field_record_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobOfferFieldsApi->createJobOfferFieldAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **job_offer_field_record_create_dto** | [**\OpenAPI\Client\Model\JobOfferFieldRecordCreateDto**](../Model/JobOfferFieldRecordCreateDto.md)|  | [optional] |

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

## `deleteJobOfferFieldAsync()`

```php
deleteJobOfferFieldAsync($tenant_id, $job_offer_field_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a job offer field

Removes a job-offer field link record for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JobOfferFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$job_offer_field_id = 'job_offer_field_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteJobOfferFieldAsync($tenant_id, $job_offer_field_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobOfferFieldsApi->deleteJobOfferFieldAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **job_offer_field_id** | **string**|  | |
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

## `getJobOfferFieldByIdAsync()`

```php
getJobOfferFieldByIdAsync($tenant_id, $job_offer_field_id, $api_version, $x_api_version): \OpenAPI\Client\Model\JobOfferFieldRecordDtoEnvelope
```

Get job offer field by ID

Retrieves a specific job-offer field link record by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JobOfferFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$job_offer_field_id = 'job_offer_field_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getJobOfferFieldByIdAsync($tenant_id, $job_offer_field_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobOfferFieldsApi->getJobOfferFieldByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **job_offer_field_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\JobOfferFieldRecordDtoEnvelope**](../Model/JobOfferFieldRecordDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getJobOfferFieldsAsync()`

```php
getJobOfferFieldsAsync($tenant_id, $api_version, $x_api_version, $job_offer_field_record_dto_collection_query_parameters): \OpenAPI\Client\Model\JobOfferFieldRecordDtoListEnvelope
```

Get job offer fields

Retrieves job-offer field link records for the tenant. Filter with `$filter=JobOfferId eq '...'` or `JobFieldId eq '...'`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JobOfferFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$job_offer_field_record_dto_collection_query_parameters = new \OpenAPI\Client\Model\JobOfferFieldRecordDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\JobOfferFieldRecordDtoCollectionQueryParameters

try {
    $result = $apiInstance->getJobOfferFieldsAsync($tenant_id, $api_version, $x_api_version, $job_offer_field_record_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobOfferFieldsApi->getJobOfferFieldsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **job_offer_field_record_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\JobOfferFieldRecordDtoCollectionQueryParameters**](../Model/JobOfferFieldRecordDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\JobOfferFieldRecordDtoListEnvelope**](../Model/JobOfferFieldRecordDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getJobOfferFieldsCountAsync()`

```php
getJobOfferFieldsCountAsync($tenant_id, $api_version, $x_api_version, $job_offer_field_record_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Count job offer fields

Counts job-offer field link records for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JobOfferFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$job_offer_field_record_dto_collection_query_parameters = new \OpenAPI\Client\Model\JobOfferFieldRecordDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\JobOfferFieldRecordDtoCollectionQueryParameters

try {
    $result = $apiInstance->getJobOfferFieldsCountAsync($tenant_id, $api_version, $x_api_version, $job_offer_field_record_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobOfferFieldsApi->getJobOfferFieldsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **job_offer_field_record_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\JobOfferFieldRecordDtoCollectionQueryParameters**](../Model/JobOfferFieldRecordDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchJobOfferFieldAsync()`

```php
patchJobOfferFieldAsync($tenant_id, $job_offer_field_id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a job offer field

Partially updates an existing job-offer field link record for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JobOfferFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$job_offer_field_id = 'job_offer_field_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchJobOfferFieldAsync($tenant_id, $job_offer_field_id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobOfferFieldsApi->patchJobOfferFieldAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **job_offer_field_id** | **string**|  | |
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

## `updateJobOfferFieldAsync()`

```php
updateJobOfferFieldAsync($tenant_id, $job_offer_field_id, $api_version, $x_api_version, $job_offer_field_record_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a job offer field

Updates an existing job-offer field link record for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JobOfferFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$job_offer_field_id = 'job_offer_field_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$job_offer_field_record_update_dto = new \OpenAPI\Client\Model\JobOfferFieldRecordUpdateDto(); // \OpenAPI\Client\Model\JobOfferFieldRecordUpdateDto

try {
    $result = $apiInstance->updateJobOfferFieldAsync($tenant_id, $job_offer_field_id, $api_version, $x_api_version, $job_offer_field_record_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobOfferFieldsApi->updateJobOfferFieldAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **job_offer_field_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **job_offer_field_record_update_dto** | [**\OpenAPI\Client\Model\JobOfferFieldRecordUpdateDto**](../Model/JobOfferFieldRecordUpdateDto.md)|  | [optional] |

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
