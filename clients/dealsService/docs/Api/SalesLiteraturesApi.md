# OpenAPI\Client\SalesLiteraturesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2DealsServiceSalesLiteraturesExtendedGet()**](SalesLiteraturesApi.md#apiV2DealsServiceSalesLiteraturesExtendedGet) | **GET** /api/v2/DealsService/SalesLiteratures/Extended |  |
| [**apiV2DealsServiceSalesLiteraturesGet()**](SalesLiteraturesApi.md#apiV2DealsServiceSalesLiteraturesGet) | **GET** /api/v2/DealsService/SalesLiteratures |  |
| [**apiV2DealsServiceSalesLiteraturesPost()**](SalesLiteraturesApi.md#apiV2DealsServiceSalesLiteraturesPost) | **POST** /api/v2/DealsService/SalesLiteratures |  |
| [**apiV2DealsServiceSalesLiteraturesSalesLiteratureIdDelete()**](SalesLiteraturesApi.md#apiV2DealsServiceSalesLiteraturesSalesLiteratureIdDelete) | **DELETE** /api/v2/DealsService/SalesLiteratures/{salesLiteratureId} |  |
| [**apiV2DealsServiceSalesLiteraturesSalesLiteratureIdGet()**](SalesLiteraturesApi.md#apiV2DealsServiceSalesLiteraturesSalesLiteratureIdGet) | **GET** /api/v2/DealsService/SalesLiteratures/{salesLiteratureId} |  |
| [**apiV2DealsServiceSalesLiteraturesSalesLiteratureIdPut()**](SalesLiteraturesApi.md#apiV2DealsServiceSalesLiteraturesSalesLiteratureIdPut) | **PUT** /api/v2/DealsService/SalesLiteratures/{salesLiteratureId} |  |


## `apiV2DealsServiceSalesLiteraturesExtendedGet()`

```php
apiV2DealsServiceSalesLiteraturesExtendedGet($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ExtendedSalesLiteratureDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SalesLiteraturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2DealsServiceSalesLiteraturesExtendedGet($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesLiteraturesApi->apiV2DealsServiceSalesLiteraturesExtendedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ExtendedSalesLiteratureDtoListEnvelope**](../Model/ExtendedSalesLiteratureDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2DealsServiceSalesLiteraturesGet()`

```php
apiV2DealsServiceSalesLiteraturesGet($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SalesLiteratureDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SalesLiteraturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2DealsServiceSalesLiteraturesGet($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesLiteraturesApi->apiV2DealsServiceSalesLiteraturesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SalesLiteratureDtoListEnvelope**](../Model/SalesLiteratureDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2DealsServiceSalesLiteraturesPost()`

```php
apiV2DealsServiceSalesLiteraturesPost($tenant_id, $api_version, $x_api_version, $sales_literature_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SalesLiteraturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$sales_literature_create_dto = new \OpenAPI\Client\Model\SalesLiteratureCreateDto(); // \OpenAPI\Client\Model\SalesLiteratureCreateDto

try {
    $result = $apiInstance->apiV2DealsServiceSalesLiteraturesPost($tenant_id, $api_version, $x_api_version, $sales_literature_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesLiteraturesApi->apiV2DealsServiceSalesLiteraturesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **sales_literature_create_dto** | [**\OpenAPI\Client\Model\SalesLiteratureCreateDto**](../Model/SalesLiteratureCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2DealsServiceSalesLiteraturesSalesLiteratureIdDelete()`

```php
apiV2DealsServiceSalesLiteraturesSalesLiteratureIdDelete($tenant_id, $sales_literature_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SalesLiteraturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$sales_literature_id = 'sales_literature_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2DealsServiceSalesLiteraturesSalesLiteratureIdDelete($tenant_id, $sales_literature_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesLiteraturesApi->apiV2DealsServiceSalesLiteraturesSalesLiteratureIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **sales_literature_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2DealsServiceSalesLiteraturesSalesLiteratureIdGet()`

```php
apiV2DealsServiceSalesLiteraturesSalesLiteratureIdGet($sales_literature_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SalesLiteratureDtoEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SalesLiteraturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_literature_id = 'sales_literature_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2DealsServiceSalesLiteraturesSalesLiteratureIdGet($sales_literature_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesLiteraturesApi->apiV2DealsServiceSalesLiteraturesSalesLiteratureIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_literature_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SalesLiteratureDtoEnvelope**](../Model/SalesLiteratureDtoEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2DealsServiceSalesLiteraturesSalesLiteratureIdPut()`

```php
apiV2DealsServiceSalesLiteraturesSalesLiteratureIdPut($tenant_id, $sales_literature_id, $api_version, $x_api_version, $sales_literature_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SalesLiteraturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$sales_literature_id = 'sales_literature_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$sales_literature_update_dto = new \OpenAPI\Client\Model\SalesLiteratureUpdateDto(); // \OpenAPI\Client\Model\SalesLiteratureUpdateDto

try {
    $result = $apiInstance->apiV2DealsServiceSalesLiteraturesSalesLiteratureIdPut($tenant_id, $sales_literature_id, $api_version, $x_api_version, $sales_literature_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesLiteraturesApi->apiV2DealsServiceSalesLiteraturesSalesLiteratureIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **sales_literature_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **sales_literature_update_dto** | [**\OpenAPI\Client\Model\SalesLiteratureUpdateDto**](../Model/SalesLiteratureUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
