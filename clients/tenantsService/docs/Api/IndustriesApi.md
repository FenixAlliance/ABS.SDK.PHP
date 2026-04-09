# OpenAPI\Client\IndustriesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTenantIndustry()**](IndustriesApi.md#createTenantIndustry) | **POST** /api/v2/TenantsService/Industries | Create a new tenant industry |
| [**deleteTenantIndustry()**](IndustriesApi.md#deleteTenantIndustry) | **DELETE** /api/v2/TenantsService/Industries/{tenantIndustryId} | Delete a tenant industry |
| [**getTenantIndustries()**](IndustriesApi.md#getTenantIndustries) | **GET** /api/v2/TenantsService/Industries | Retrieve a list of tenant industries |
| [**getTenantIndustriesCount()**](IndustriesApi.md#getTenantIndustriesCount) | **GET** /api/v2/TenantsService/Industries/Count | Get the count of tenant industries |
| [**getTenantIndustryById()**](IndustriesApi.md#getTenantIndustryById) | **GET** /api/v2/TenantsService/Industries/{tenantIndustryId} | Retrieve a single tenant industry by its ID |
| [**updateTenantIndustry()**](IndustriesApi.md#updateTenantIndustry) | **PUT** /api/v2/TenantsService/Industries/{tenantIndustryId} | Update a tenant industry |


## `createTenantIndustry()`

```php
createTenantIndustry($tenant_id, $api_version, $x_api_version, $tenant_industry_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a new tenant industry

Create a new tenant industry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IndustriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$tenant_industry_create_dto = new \OpenAPI\Client\Model\TenantIndustryCreateDto(); // \OpenAPI\Client\Model\TenantIndustryCreateDto

try {
    $result = $apiInstance->createTenantIndustry($tenant_id, $api_version, $x_api_version, $tenant_industry_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustriesApi->createTenantIndustry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **tenant_industry_create_dto** | [**\OpenAPI\Client\Model\TenantIndustryCreateDto**](../Model/TenantIndustryCreateDto.md)|  | [optional] |

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

## `deleteTenantIndustry()`

```php
deleteTenantIndustry($tenant_id, $tenant_industry_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a tenant industry

Delete a tenant industry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IndustriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$tenant_industry_id = 'tenant_industry_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteTenantIndustry($tenant_id, $tenant_industry_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustriesApi->deleteTenantIndustry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **tenant_industry_id** | **string**|  | |
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

## `getTenantIndustries()`

```php
getTenantIndustries($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TenantIndustryDtoListEnvelope
```

Retrieve a list of tenant industries

Retrieve a list of tenant industries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IndustriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTenantIndustries($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustriesApi->getTenantIndustries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TenantIndustryDtoListEnvelope**](../Model/TenantIndustryDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTenantIndustriesCount()`

```php
getTenantIndustriesCount($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get the count of tenant industries

Get the count of tenant industries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IndustriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTenantIndustriesCount($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustriesApi->getTenantIndustriesCount: ', $e->getMessage(), PHP_EOL;
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

## `getTenantIndustryById()`

```php
getTenantIndustryById($tenant_id, $tenant_industry_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TenantIndustryDtoEnvelope
```

Retrieve a single tenant industry by its ID

Retrieve a single tenant industry by its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IndustriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$tenant_industry_id = 'tenant_industry_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTenantIndustryById($tenant_id, $tenant_industry_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustriesApi->getTenantIndustryById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **tenant_industry_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TenantIndustryDtoEnvelope**](../Model/TenantIndustryDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTenantIndustry()`

```php
updateTenantIndustry($tenant_id, $tenant_industry_id, $api_version, $x_api_version, $tenant_industry_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a tenant industry

Update a tenant industry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IndustriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$tenant_industry_id = 'tenant_industry_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$tenant_industry_update_dto = new \OpenAPI\Client\Model\TenantIndustryUpdateDto(); // \OpenAPI\Client\Model\TenantIndustryUpdateDto

try {
    $result = $apiInstance->updateTenantIndustry($tenant_id, $tenant_industry_id, $api_version, $x_api_version, $tenant_industry_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustriesApi->updateTenantIndustry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **tenant_industry_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **tenant_industry_update_dto** | [**\OpenAPI\Client\Model\TenantIndustryUpdateDto**](../Model/TenantIndustryUpdateDto.md)|  | [optional] |

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
