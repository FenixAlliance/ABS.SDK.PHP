# OpenAPI\Client\ServiceLevelAgreementsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createServiceLevelAgreementAsync()**](ServiceLevelAgreementsApi.md#createServiceLevelAgreementAsync) | **POST** /api/v2/ServicesService/ServiceLevelAgreements | Create a service level agreement |
| [**deleteServiceLevelAgreementAsync()**](ServiceLevelAgreementsApi.md#deleteServiceLevelAgreementAsync) | **DELETE** /api/v2/ServicesService/ServiceLevelAgreements/{serviceLevelAgreementId} | Delete a service level agreement |
| [**getServiceLevelAgreementByIdAsync()**](ServiceLevelAgreementsApi.md#getServiceLevelAgreementByIdAsync) | **GET** /api/v2/ServicesService/ServiceLevelAgreements/{serviceLevelAgreementId} | Get a service level agreement by ID |
| [**getServiceLevelAgreementsAsync()**](ServiceLevelAgreementsApi.md#getServiceLevelAgreementsAsync) | **GET** /api/v2/ServicesService/ServiceLevelAgreements | Get all service level agreements |
| [**getServiceLevelAgreementsCountAsync()**](ServiceLevelAgreementsApi.md#getServiceLevelAgreementsCountAsync) | **GET** /api/v2/ServicesService/ServiceLevelAgreements/Count | Get service level agreements count |
| [**updateServiceLevelAgreementAsync()**](ServiceLevelAgreementsApi.md#updateServiceLevelAgreementAsync) | **PUT** /api/v2/ServicesService/ServiceLevelAgreements/{serviceLevelAgreementId} | Update a service level agreement |


## `createServiceLevelAgreementAsync()`

```php
createServiceLevelAgreementAsync($tenant_id, $api_version, $x_api_version, $service_level_agreement_create_dto): \OpenAPI\Client\Model\Envelope
```

Create a service level agreement

Creates a new service level agreement for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ServiceLevelAgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$service_level_agreement_create_dto = new \OpenAPI\Client\Model\ServiceLevelAgreementCreateDto(); // \OpenAPI\Client\Model\ServiceLevelAgreementCreateDto

try {
    $result = $apiInstance->createServiceLevelAgreementAsync($tenant_id, $api_version, $x_api_version, $service_level_agreement_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceLevelAgreementsApi->createServiceLevelAgreementAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **service_level_agreement_create_dto** | [**\OpenAPI\Client\Model\ServiceLevelAgreementCreateDto**](../Model/ServiceLevelAgreementCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Envelope**](../Model/Envelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteServiceLevelAgreementAsync()`

```php
deleteServiceLevelAgreementAsync($tenant_id, $service_level_agreement_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Envelope
```

Delete a service level agreement

Deletes a service level agreement by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ServiceLevelAgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$service_level_agreement_id = 'service_level_agreement_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteServiceLevelAgreementAsync($tenant_id, $service_level_agreement_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceLevelAgreementsApi->deleteServiceLevelAgreementAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **service_level_agreement_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Envelope**](../Model/Envelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServiceLevelAgreementByIdAsync()`

```php
getServiceLevelAgreementByIdAsync($tenant_id, $service_level_agreement_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ServiceLevelAgreementDtoEnvelope
```

Get a service level agreement by ID

Retrieves a service level agreement by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ServiceLevelAgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$service_level_agreement_id = 'service_level_agreement_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getServiceLevelAgreementByIdAsync($tenant_id, $service_level_agreement_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceLevelAgreementsApi->getServiceLevelAgreementByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **service_level_agreement_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ServiceLevelAgreementDtoEnvelope**](../Model/ServiceLevelAgreementDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServiceLevelAgreementsAsync()`

```php
getServiceLevelAgreementsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ServiceLevelAgreementDtoIReadOnlyListEnvelope
```

Get all service level agreements

Retrieves all service level agreements for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ServiceLevelAgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getServiceLevelAgreementsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceLevelAgreementsApi->getServiceLevelAgreementsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ServiceLevelAgreementDtoIReadOnlyListEnvelope**](../Model/ServiceLevelAgreementDtoIReadOnlyListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServiceLevelAgreementsCountAsync()`

```php
getServiceLevelAgreementsCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get service level agreements count

Returns the count of service level agreements for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ServiceLevelAgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getServiceLevelAgreementsCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceLevelAgreementsApi->getServiceLevelAgreementsCountAsync: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateServiceLevelAgreementAsync()`

```php
updateServiceLevelAgreementAsync($tenant_id, $service_level_agreement_id, $api_version, $x_api_version, $service_level_agreement_update_dto): \OpenAPI\Client\Model\Envelope
```

Update a service level agreement

Updates an existing service level agreement.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ServiceLevelAgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$service_level_agreement_id = 'service_level_agreement_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$service_level_agreement_update_dto = new \OpenAPI\Client\Model\ServiceLevelAgreementUpdateDto(); // \OpenAPI\Client\Model\ServiceLevelAgreementUpdateDto

try {
    $result = $apiInstance->updateServiceLevelAgreementAsync($tenant_id, $service_level_agreement_id, $api_version, $x_api_version, $service_level_agreement_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceLevelAgreementsApi->updateServiceLevelAgreementAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **service_level_agreement_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **service_level_agreement_update_dto** | [**\OpenAPI\Client\Model\ServiceLevelAgreementUpdateDto**](../Model/ServiceLevelAgreementUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Envelope**](../Model/Envelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
