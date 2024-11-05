# OpenAPI\Client\PriceListsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2PricingServicePriceListsCountGet()**](PriceListsApi.md#apiV2PricingServicePriceListsCountGet) | **GET** /api/v2/PricingService/PriceLists/Count |  |
| [**apiV2PricingServicePriceListsGet()**](PriceListsApi.md#apiV2PricingServicePriceListsGet) | **GET** /api/v2/PricingService/PriceLists |  |
| [**apiV2PricingServicePriceListsPost()**](PriceListsApi.md#apiV2PricingServicePriceListsPost) | **POST** /api/v2/PricingService/PriceLists |  |
| [**apiV2PricingServicePriceListsPriceListIdDelete()**](PriceListsApi.md#apiV2PricingServicePriceListsPriceListIdDelete) | **DELETE** /api/v2/PricingService/PriceLists/{priceListId} |  |
| [**apiV2PricingServicePriceListsPriceListIdPricesPost()**](PriceListsApi.md#apiV2PricingServicePriceListsPriceListIdPricesPost) | **POST** /api/v2/PricingService/PriceLists/{priceListId}/Prices |  |
| [**apiV2PricingServicePriceListsPriceListIdPricesPriceIdDelete()**](PriceListsApi.md#apiV2PricingServicePriceListsPriceListIdPricesPriceIdDelete) | **DELETE** /api/v2/PricingService/PriceLists/{priceListId}/Prices/{priceId} |  |
| [**apiV2PricingServicePriceListsPriceListIdPricesPriceIdPut()**](PriceListsApi.md#apiV2PricingServicePriceListsPriceListIdPricesPriceIdPut) | **PUT** /api/v2/PricingService/PriceLists/{priceListId}/Prices/{priceId} |  |
| [**apiV2PricingServicePriceListsPriceListIdPut()**](PriceListsApi.md#apiV2PricingServicePriceListsPriceListIdPut) | **PUT** /api/v2/PricingService/PriceLists/{priceListId} |  |
| [**getPriceListAsync()**](PriceListsApi.md#getPriceListAsync) | **GET** /api/v2/PricingService/PriceLists/{priceListId} |  |
| [**getPriceListPriceAsync()**](PriceListsApi.md#getPriceListPriceAsync) | **GET** /api/v2/PricingService/PriceLists/{priceListId}/Prices/{priceId} |  |
| [**getPriceListPricesAsync()**](PriceListsApi.md#getPriceListPricesAsync) | **GET** /api/v2/PricingService/PriceLists/{priceListId}/Prices |  |


## `apiV2PricingServicePriceListsCountGet()`

```php
apiV2PricingServicePriceListsCountGet($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2PricingServicePriceListsCountGet($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->apiV2PricingServicePriceListsCountGet: ', $e->getMessage(), PHP_EOL;
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

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2PricingServicePriceListsGet()`

```php
apiV2PricingServicePriceListsGet($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\PriceListDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2PricingServicePriceListsGet($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->apiV2PricingServicePriceListsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PriceListDtoListEnvelope**](../Model/PriceListDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2PricingServicePriceListsPost()`

```php
apiV2PricingServicePriceListsPost($tenant_id, $api_version, $x_api_version, $price_list_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$price_list_create_dto = new \OpenAPI\Client\Model\PriceListCreateDto(); // \OpenAPI\Client\Model\PriceListCreateDto

try {
    $result = $apiInstance->apiV2PricingServicePriceListsPost($tenant_id, $api_version, $x_api_version, $price_list_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->apiV2PricingServicePriceListsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **price_list_create_dto** | [**\OpenAPI\Client\Model\PriceListCreateDto**](../Model/PriceListCreateDto.md)|  | [optional] |

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

## `apiV2PricingServicePriceListsPriceListIdDelete()`

```php
apiV2PricingServicePriceListsPriceListIdDelete($tenant_id, $price_list_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$price_list_id = 'price_list_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2PricingServicePriceListsPriceListIdDelete($tenant_id, $price_list_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->apiV2PricingServicePriceListsPriceListIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **price_list_id** | **string**|  | |
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

## `apiV2PricingServicePriceListsPriceListIdPricesPost()`

```php
apiV2PricingServicePriceListsPriceListIdPricesPost($tenant_id, $price_list_id, $api_version, $x_api_version, $item_price_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$price_list_id = 'price_list_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_price_create_dto = new \OpenAPI\Client\Model\ItemPriceCreateDto(); // \OpenAPI\Client\Model\ItemPriceCreateDto

try {
    $result = $apiInstance->apiV2PricingServicePriceListsPriceListIdPricesPost($tenant_id, $price_list_id, $api_version, $x_api_version, $item_price_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->apiV2PricingServicePriceListsPriceListIdPricesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **price_list_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_price_create_dto** | [**\OpenAPI\Client\Model\ItemPriceCreateDto**](../Model/ItemPriceCreateDto.md)|  | [optional] |

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

## `apiV2PricingServicePriceListsPriceListIdPricesPriceIdDelete()`

```php
apiV2PricingServicePriceListsPriceListIdPricesPriceIdDelete($tenant_id, $price_list_id, $price_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$price_list_id = 'price_list_id_example'; // string
$price_id = 'price_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2PricingServicePriceListsPriceListIdPricesPriceIdDelete($tenant_id, $price_list_id, $price_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->apiV2PricingServicePriceListsPriceListIdPricesPriceIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **price_list_id** | **string**|  | |
| **price_id** | **string**|  | |
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

## `apiV2PricingServicePriceListsPriceListIdPricesPriceIdPut()`

```php
apiV2PricingServicePriceListsPriceListIdPricesPriceIdPut($tenant_id, $price_list_id, $price_id, $api_version, $x_api_version, $item_price_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$price_list_id = 'price_list_id_example'; // string
$price_id = 'price_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_price_update_dto = new \OpenAPI\Client\Model\ItemPriceUpdateDto(); // \OpenAPI\Client\Model\ItemPriceUpdateDto

try {
    $result = $apiInstance->apiV2PricingServicePriceListsPriceListIdPricesPriceIdPut($tenant_id, $price_list_id, $price_id, $api_version, $x_api_version, $item_price_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->apiV2PricingServicePriceListsPriceListIdPricesPriceIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **price_list_id** | **string**|  | |
| **price_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_price_update_dto** | [**\OpenAPI\Client\Model\ItemPriceUpdateDto**](../Model/ItemPriceUpdateDto.md)|  | [optional] |

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

## `apiV2PricingServicePriceListsPriceListIdPut()`

```php
apiV2PricingServicePriceListsPriceListIdPut($tenant_id, $price_list_id, $api_version, $x_api_version, $price_list_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$price_list_id = 'price_list_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$price_list_update_dto = new \OpenAPI\Client\Model\PriceListUpdateDto(); // \OpenAPI\Client\Model\PriceListUpdateDto

try {
    $result = $apiInstance->apiV2PricingServicePriceListsPriceListIdPut($tenant_id, $price_list_id, $api_version, $x_api_version, $price_list_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->apiV2PricingServicePriceListsPriceListIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **price_list_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **price_list_update_dto** | [**\OpenAPI\Client\Model\PriceListUpdateDto**](../Model/PriceListUpdateDto.md)|  | [optional] |

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

## `getPriceListAsync()`

```php
getPriceListAsync($tenant_id, $price_list_id, $api_version, $x_api_version): \OpenAPI\Client\Model\PriceListDtoEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$price_list_id = 'price_list_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getPriceListAsync($tenant_id, $price_list_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->getPriceListAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **price_list_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PriceListDtoEnvelope**](../Model/PriceListDtoEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPriceListPriceAsync()`

```php
getPriceListPriceAsync($tenant_id, $price_list_id, $price_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemPriceDtoEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$price_list_id = 'price_list_id_example'; // string
$price_id = 'price_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getPriceListPriceAsync($tenant_id, $price_list_id, $price_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->getPriceListPriceAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **price_list_id** | **string**|  | |
| **price_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemPriceDtoEnvelope**](../Model/ItemPriceDtoEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPriceListPricesAsync()`

```php
getPriceListPricesAsync($tenant_id, $price_list_id, $item_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemPriceDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$price_list_id = 'price_list_id_example'; // string
$item_id = 'item_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getPriceListPricesAsync($tenant_id, $price_list_id, $item_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->getPriceListPricesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **price_list_id** | **string**|  | |
| **item_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemPriceDtoListEnvelope**](../Model/ItemPriceDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
