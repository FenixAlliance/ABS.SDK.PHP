# OpenAPI\Client\GigApplicationsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**acceptGigApplicationAsync()**](GigApplicationsApi.md#acceptGigApplicationAsync) | **POST** /api/v2/HrmsService/GigApplications/{gigApplicationId}/Accept | Accept a gig application |
| [**createGigApplicationAsync()**](GigApplicationsApi.md#createGigApplicationAsync) | **POST** /api/v2/HrmsService/GigApplications | Create a gig application |
| [**deleteGigApplicationAsync()**](GigApplicationsApi.md#deleteGigApplicationAsync) | **DELETE** /api/v2/HrmsService/GigApplications/{gigApplicationId} | Delete a gig application |
| [**getGigApplicationByIdAsync()**](GigApplicationsApi.md#getGigApplicationByIdAsync) | **GET** /api/v2/HrmsService/GigApplications/{gigApplicationId} | Get gig application by ID |
| [**getGigApplicationsAsync()**](GigApplicationsApi.md#getGigApplicationsAsync) | **GET** /api/v2/HrmsService/GigApplications | Get gig applications |
| [**getGigApplicationsCountAsync()**](GigApplicationsApi.md#getGigApplicationsCountAsync) | **GET** /api/v2/HrmsService/GigApplications/Count | Count gig applications |
| [**patchGigApplicationAsync()**](GigApplicationsApi.md#patchGigApplicationAsync) | **PATCH** /api/v2/HrmsService/GigApplications/{gigApplicationId} | Patch a gig application |
| [**updateGigApplicationAsync()**](GigApplicationsApi.md#updateGigApplicationAsync) | **PUT** /api/v2/HrmsService/GigApplications/{gigApplicationId} | Update a gig application |


## `acceptGigApplicationAsync()`

```php
acceptGigApplicationAsync($tenant_id, $gig_application_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Accept a gig application

Accepts the candidate's gig proposal, forming an engagement (raises GigApplicationAccepted). A proposal cannot be accepted twice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GigApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$gig_application_id = 'gig_application_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->acceptGigApplicationAsync($tenant_id, $gig_application_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GigApplicationsApi->acceptGigApplicationAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **gig_application_id** | **string**|  | |
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

## `createGigApplicationAsync()`

```php
createGigApplicationAsync($tenant_id, $api_version, $x_api_version, $gig_application_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a gig application

Records a candidate's proposal against one of the tenant's gigs. The targeted gig must belong to the tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GigApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$gig_application_create_dto = new \OpenAPI\Client\Model\GigApplicationCreateDto(); // \OpenAPI\Client\Model\GigApplicationCreateDto

try {
    $result = $apiInstance->createGigApplicationAsync($tenant_id, $api_version, $x_api_version, $gig_application_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GigApplicationsApi->createGigApplicationAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **gig_application_create_dto** | [**\OpenAPI\Client\Model\GigApplicationCreateDto**](../Model/GigApplicationCreateDto.md)|  | [optional] |

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

## `deleteGigApplicationAsync()`

```php
deleteGigApplicationAsync($tenant_id, $gig_application_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a gig application

Removes a proposal submitted against one of the tenant's gigs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GigApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$gig_application_id = 'gig_application_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteGigApplicationAsync($tenant_id, $gig_application_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GigApplicationsApi->deleteGigApplicationAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **gig_application_id** | **string**|  | |
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

## `getGigApplicationByIdAsync()`

```php
getGigApplicationByIdAsync($tenant_id, $gig_application_id, $api_version, $x_api_version): \OpenAPI\Client\Model\GigApplicationDtoEnvelope
```

Get gig application by ID

Retrieves a specific proposal submitted against one of the tenant's gigs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GigApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$gig_application_id = 'gig_application_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getGigApplicationByIdAsync($tenant_id, $gig_application_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GigApplicationsApi->getGigApplicationByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **gig_application_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GigApplicationDtoEnvelope**](../Model/GigApplicationDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGigApplicationsAsync()`

```php
getGigApplicationsAsync($tenant_id, $api_version, $x_api_version, $gig_application_dto_collection_query_parameters): \OpenAPI\Client\Model\GigApplicationDtoListEnvelope
```

Get gig applications

Retrieves proposals submitted against the tenant's gigs. Filter with `$filter=GigId eq '...'` or `JobApplicantProfileId eq '...'`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GigApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$gig_application_dto_collection_query_parameters = new \OpenAPI\Client\Model\GigApplicationDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\GigApplicationDtoCollectionQueryParameters

try {
    $result = $apiInstance->getGigApplicationsAsync($tenant_id, $api_version, $x_api_version, $gig_application_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GigApplicationsApi->getGigApplicationsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **gig_application_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\GigApplicationDtoCollectionQueryParameters**](../Model/GigApplicationDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GigApplicationDtoListEnvelope**](../Model/GigApplicationDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGigApplicationsCountAsync()`

```php
getGigApplicationsCountAsync($tenant_id, $api_version, $x_api_version, $gig_application_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Count gig applications

Counts proposals submitted against the tenant's gigs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GigApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$gig_application_dto_collection_query_parameters = new \OpenAPI\Client\Model\GigApplicationDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\GigApplicationDtoCollectionQueryParameters

try {
    $result = $apiInstance->getGigApplicationsCountAsync($tenant_id, $api_version, $x_api_version, $gig_application_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GigApplicationsApi->getGigApplicationsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **gig_application_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\GigApplicationDtoCollectionQueryParameters**](../Model/GigApplicationDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchGigApplicationAsync()`

```php
patchGigApplicationAsync($tenant_id, $gig_application_id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a gig application

Partially updates an existing proposal submitted against one of the tenant's gigs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GigApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$gig_application_id = 'gig_application_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchGigApplicationAsync($tenant_id, $gig_application_id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GigApplicationsApi->patchGigApplicationAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **gig_application_id** | **string**|  | |
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

## `updateGigApplicationAsync()`

```php
updateGigApplicationAsync($tenant_id, $gig_application_id, $api_version, $x_api_version, $gig_application_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a gig application

Updates an existing proposal submitted against one of the tenant's gigs (e.g. accept it).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GigApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$gig_application_id = 'gig_application_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$gig_application_update_dto = new \OpenAPI\Client\Model\GigApplicationUpdateDto(); // \OpenAPI\Client\Model\GigApplicationUpdateDto

try {
    $result = $apiInstance->updateGigApplicationAsync($tenant_id, $gig_application_id, $api_version, $x_api_version, $gig_application_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GigApplicationsApi->updateGigApplicationAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **gig_application_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **gig_application_update_dto** | [**\OpenAPI\Client\Model\GigApplicationUpdateDto**](../Model/GigApplicationUpdateDto.md)|  | [optional] |

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
