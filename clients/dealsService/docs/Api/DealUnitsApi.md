# OpenAPI\Client\DealUnitsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2DealsServiceDealUnitsCountGet()**](DealUnitsApi.md#apiV2DealsServiceDealUnitsCountGet) | **GET** /api/v2/DealsService/DealUnits/Count |  |
| [**apiV2DealsServiceDealUnitsDealUnitIdCalculatePut()**](DealUnitsApi.md#apiV2DealsServiceDealUnitsDealUnitIdCalculatePut) | **PUT** /api/v2/DealsService/DealUnits/{dealUnitId}/Calculate |  |
| [**apiV2DealsServiceDealUnitsDealUnitIdDelete()**](DealUnitsApi.md#apiV2DealsServiceDealUnitsDealUnitIdDelete) | **DELETE** /api/v2/DealsService/DealUnits/{dealUnitId} |  |
| [**apiV2DealsServiceDealUnitsDealUnitIdExtendedGet()**](DealUnitsApi.md#apiV2DealsServiceDealUnitsDealUnitIdExtendedGet) | **GET** /api/v2/DealsService/DealUnits/{dealUnitId}/Extended |  |
| [**apiV2DealsServiceDealUnitsDealUnitIdLinesCountGet()**](DealUnitsApi.md#apiV2DealsServiceDealUnitsDealUnitIdLinesCountGet) | **GET** /api/v2/DealsService/DealUnits/{dealUnitId}/Lines/Count |  |
| [**apiV2DealsServiceDealUnitsDealUnitIdLinesDealUnitLineIdCalculatePut()**](DealUnitsApi.md#apiV2DealsServiceDealUnitsDealUnitIdLinesDealUnitLineIdCalculatePut) | **PUT** /api/v2/DealsService/DealUnits/{dealUnitId}/Lines/{dealUnitLineId}/Calculate |  |
| [**apiV2DealsServiceDealUnitsDealUnitIdLinesDealUnitLineIdDelete()**](DealUnitsApi.md#apiV2DealsServiceDealUnitsDealUnitIdLinesDealUnitLineIdDelete) | **DELETE** /api/v2/DealsService/DealUnits/{dealUnitId}/Lines/{dealUnitLineId} |  |
| [**apiV2DealsServiceDealUnitsDealUnitIdLinesDealUnitLineIdGet()**](DealUnitsApi.md#apiV2DealsServiceDealUnitsDealUnitIdLinesDealUnitLineIdGet) | **GET** /api/v2/DealsService/DealUnits/{dealUnitId}/Lines/{dealUnitLineId} |  |
| [**apiV2DealsServiceDealUnitsDealUnitIdLinesDealUnitLineIdPut()**](DealUnitsApi.md#apiV2DealsServiceDealUnitsDealUnitIdLinesDealUnitLineIdPut) | **PUT** /api/v2/DealsService/DealUnits/{dealUnitId}/Lines/{dealUnitLineId} |  |
| [**apiV2DealsServiceDealUnitsDealUnitIdLinesGet()**](DealUnitsApi.md#apiV2DealsServiceDealUnitsDealUnitIdLinesGet) | **GET** /api/v2/DealsService/DealUnits/{dealUnitId}/Lines |  |
| [**apiV2DealsServiceDealUnitsDealUnitIdLinesPost()**](DealUnitsApi.md#apiV2DealsServiceDealUnitsDealUnitIdLinesPost) | **POST** /api/v2/DealsService/DealUnits/{dealUnitId}/Lines |  |
| [**apiV2DealsServiceDealUnitsDealUnitIdPut()**](DealUnitsApi.md#apiV2DealsServiceDealUnitsDealUnitIdPut) | **PUT** /api/v2/DealsService/DealUnits/{dealUnitId} |  |
| [**apiV2DealsServiceDealUnitsExtendedGet()**](DealUnitsApi.md#apiV2DealsServiceDealUnitsExtendedGet) | **GET** /api/v2/DealsService/DealUnits/Extended |  |
| [**apiV2DealsServiceDealUnitsGet()**](DealUnitsApi.md#apiV2DealsServiceDealUnitsGet) | **GET** /api/v2/DealsService/DealUnits |  |
| [**apiV2DealsServiceDealUnitsPost()**](DealUnitsApi.md#apiV2DealsServiceDealUnitsPost) | **POST** /api/v2/DealsService/DealUnits |  |
| [**getDealUnitAsync()**](DealUnitsApi.md#getDealUnitAsync) | **GET** /api/v2/DealsService/DealUnits/{dealUnitId} |  |


## `apiV2DealsServiceDealUnitsCountGet()`

```php
apiV2DealsServiceDealUnitsCountGet($tenant_id): \OpenAPI\Client\Model\Int32Envelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DealUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->apiV2DealsServiceDealUnitsCountGet($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitsApi->apiV2DealsServiceDealUnitsCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Int32Envelope**](../Model/Int32Envelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2DealsServiceDealUnitsDealUnitIdCalculatePut()`

```php
apiV2DealsServiceDealUnitsDealUnitIdCalculatePut($tenant_id, $deal_unit_id): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DealUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_id = 'deal_unit_id_example'; // string

try {
    $result = $apiInstance->apiV2DealsServiceDealUnitsDealUnitIdCalculatePut($tenant_id, $deal_unit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitsApi->apiV2DealsServiceDealUnitsDealUnitIdCalculatePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_id** | **string**|  | |

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

## `apiV2DealsServiceDealUnitsDealUnitIdDelete()`

```php
apiV2DealsServiceDealUnitsDealUnitIdDelete($tenant_id, $deal_unit_id): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DealUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_id = 'deal_unit_id_example'; // string

try {
    $result = $apiInstance->apiV2DealsServiceDealUnitsDealUnitIdDelete($tenant_id, $deal_unit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitsApi->apiV2DealsServiceDealUnitsDealUnitIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_id** | **string**|  | |

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

## `apiV2DealsServiceDealUnitsDealUnitIdExtendedGet()`

```php
apiV2DealsServiceDealUnitsDealUnitIdExtendedGet($tenant_id, $deal_unit_id): \OpenAPI\Client\Model\ExtendedDealUnitDtoEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DealUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_id = 'deal_unit_id_example'; // string

try {
    $result = $apiInstance->apiV2DealsServiceDealUnitsDealUnitIdExtendedGet($tenant_id, $deal_unit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitsApi->apiV2DealsServiceDealUnitsDealUnitIdExtendedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ExtendedDealUnitDtoEnvelope**](../Model/ExtendedDealUnitDtoEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2DealsServiceDealUnitsDealUnitIdLinesCountGet()`

```php
apiV2DealsServiceDealUnitsDealUnitIdLinesCountGet($tenant_id, $deal_unit_id): \OpenAPI\Client\Model\Int32Envelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DealUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_id = 'deal_unit_id_example'; // string

try {
    $result = $apiInstance->apiV2DealsServiceDealUnitsDealUnitIdLinesCountGet($tenant_id, $deal_unit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitsApi->apiV2DealsServiceDealUnitsDealUnitIdLinesCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Int32Envelope**](../Model/Int32Envelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2DealsServiceDealUnitsDealUnitIdLinesDealUnitLineIdCalculatePut()`

```php
apiV2DealsServiceDealUnitsDealUnitIdLinesDealUnitLineIdCalculatePut($tenant_id, $deal_unit_id, $deal_unit_line_id): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DealUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_id = 'deal_unit_id_example'; // string
$deal_unit_line_id = 'deal_unit_line_id_example'; // string

try {
    $result = $apiInstance->apiV2DealsServiceDealUnitsDealUnitIdLinesDealUnitLineIdCalculatePut($tenant_id, $deal_unit_id, $deal_unit_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitsApi->apiV2DealsServiceDealUnitsDealUnitIdLinesDealUnitLineIdCalculatePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_id** | **string**|  | |
| **deal_unit_line_id** | **string**|  | |

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

## `apiV2DealsServiceDealUnitsDealUnitIdLinesDealUnitLineIdDelete()`

```php
apiV2DealsServiceDealUnitsDealUnitIdLinesDealUnitLineIdDelete($tenant_id, $deal_unit_id, $deal_unit_line_id): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DealUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_id = 'deal_unit_id_example'; // string
$deal_unit_line_id = 'deal_unit_line_id_example'; // string

try {
    $result = $apiInstance->apiV2DealsServiceDealUnitsDealUnitIdLinesDealUnitLineIdDelete($tenant_id, $deal_unit_id, $deal_unit_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitsApi->apiV2DealsServiceDealUnitsDealUnitIdLinesDealUnitLineIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_id** | **string**|  | |
| **deal_unit_line_id** | **string**|  | |

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

## `apiV2DealsServiceDealUnitsDealUnitIdLinesDealUnitLineIdGet()`

```php
apiV2DealsServiceDealUnitsDealUnitIdLinesDealUnitLineIdGet($tenant_id, $deal_unit_id, $deal_unit_line_id): \OpenAPI\Client\Model\DealUnitLineDtoEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DealUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_id = 'deal_unit_id_example'; // string
$deal_unit_line_id = 'deal_unit_line_id_example'; // string

try {
    $result = $apiInstance->apiV2DealsServiceDealUnitsDealUnitIdLinesDealUnitLineIdGet($tenant_id, $deal_unit_id, $deal_unit_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitsApi->apiV2DealsServiceDealUnitsDealUnitIdLinesDealUnitLineIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_id** | **string**|  | |
| **deal_unit_line_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\DealUnitLineDtoEnvelope**](../Model/DealUnitLineDtoEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2DealsServiceDealUnitsDealUnitIdLinesDealUnitLineIdPut()`

```php
apiV2DealsServiceDealUnitsDealUnitIdLinesDealUnitLineIdPut($tenant_id, $deal_unit_id, $deal_unit_line_id, $deal_unit_line_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DealUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_id = 'deal_unit_id_example'; // string
$deal_unit_line_id = 'deal_unit_line_id_example'; // string
$deal_unit_line_update_dto = new \OpenAPI\Client\Model\DealUnitLineUpdateDto(); // \OpenAPI\Client\Model\DealUnitLineUpdateDto

try {
    $result = $apiInstance->apiV2DealsServiceDealUnitsDealUnitIdLinesDealUnitLineIdPut($tenant_id, $deal_unit_id, $deal_unit_line_id, $deal_unit_line_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitsApi->apiV2DealsServiceDealUnitsDealUnitIdLinesDealUnitLineIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_id** | **string**|  | |
| **deal_unit_line_id** | **string**|  | |
| **deal_unit_line_update_dto** | [**\OpenAPI\Client\Model\DealUnitLineUpdateDto**](../Model/DealUnitLineUpdateDto.md)|  | [optional] |

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

## `apiV2DealsServiceDealUnitsDealUnitIdLinesGet()`

```php
apiV2DealsServiceDealUnitsDealUnitIdLinesGet($tenant_id, $deal_unit_id, $item_id): \OpenAPI\Client\Model\DealUnitLineDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DealUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_id = 'deal_unit_id_example'; // string
$item_id = 'item_id_example'; // string

try {
    $result = $apiInstance->apiV2DealsServiceDealUnitsDealUnitIdLinesGet($tenant_id, $deal_unit_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitsApi->apiV2DealsServiceDealUnitsDealUnitIdLinesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_id** | **string**|  | |
| **item_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DealUnitLineDtoListEnvelope**](../Model/DealUnitLineDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2DealsServiceDealUnitsDealUnitIdLinesPost()`

```php
apiV2DealsServiceDealUnitsDealUnitIdLinesPost($tenant_id, $deal_unit_id, $deal_unit_line_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DealUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_id = 'deal_unit_id_example'; // string
$deal_unit_line_create_dto = new \OpenAPI\Client\Model\DealUnitLineCreateDto(); // \OpenAPI\Client\Model\DealUnitLineCreateDto

try {
    $result = $apiInstance->apiV2DealsServiceDealUnitsDealUnitIdLinesPost($tenant_id, $deal_unit_id, $deal_unit_line_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitsApi->apiV2DealsServiceDealUnitsDealUnitIdLinesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_id** | **string**|  | |
| **deal_unit_line_create_dto** | [**\OpenAPI\Client\Model\DealUnitLineCreateDto**](../Model/DealUnitLineCreateDto.md)|  | [optional] |

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

## `apiV2DealsServiceDealUnitsDealUnitIdPut()`

```php
apiV2DealsServiceDealUnitsDealUnitIdPut($tenant_id, $deal_unit_id, $deal_unit_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DealUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_id = 'deal_unit_id_example'; // string
$deal_unit_update_dto = new \OpenAPI\Client\Model\DealUnitUpdateDto(); // \OpenAPI\Client\Model\DealUnitUpdateDto

try {
    $result = $apiInstance->apiV2DealsServiceDealUnitsDealUnitIdPut($tenant_id, $deal_unit_id, $deal_unit_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitsApi->apiV2DealsServiceDealUnitsDealUnitIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_id** | **string**|  | |
| **deal_unit_update_dto** | [**\OpenAPI\Client\Model\DealUnitUpdateDto**](../Model/DealUnitUpdateDto.md)|  | [optional] |

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

## `apiV2DealsServiceDealUnitsExtendedGet()`

```php
apiV2DealsServiceDealUnitsExtendedGet($tenant_id): \OpenAPI\Client\Model\ExtendedDealUnitDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DealUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->apiV2DealsServiceDealUnitsExtendedGet($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitsApi->apiV2DealsServiceDealUnitsExtendedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ExtendedDealUnitDtoListEnvelope**](../Model/ExtendedDealUnitDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2DealsServiceDealUnitsGet()`

```php
apiV2DealsServiceDealUnitsGet($tenant_id): \OpenAPI\Client\Model\DealUnitDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DealUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->apiV2DealsServiceDealUnitsGet($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitsApi->apiV2DealsServiceDealUnitsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\DealUnitDtoListEnvelope**](../Model/DealUnitDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2DealsServiceDealUnitsPost()`

```php
apiV2DealsServiceDealUnitsPost($tenant_id, $deal_unit_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DealUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_create_dto = new \OpenAPI\Client\Model\DealUnitCreateDto(); // \OpenAPI\Client\Model\DealUnitCreateDto

try {
    $result = $apiInstance->apiV2DealsServiceDealUnitsPost($tenant_id, $deal_unit_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitsApi->apiV2DealsServiceDealUnitsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_create_dto** | [**\OpenAPI\Client\Model\DealUnitCreateDto**](../Model/DealUnitCreateDto.md)|  | [optional] |

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

## `getDealUnitAsync()`

```php
getDealUnitAsync($tenant_id, $deal_unit_id): \OpenAPI\Client\Model\DealUnitDtoEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DealUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_id = 'deal_unit_id_example'; // string

try {
    $result = $apiInstance->getDealUnitAsync($tenant_id, $deal_unit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitsApi->getDealUnitAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\DealUnitDtoEnvelope**](../Model/DealUnitDtoEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
