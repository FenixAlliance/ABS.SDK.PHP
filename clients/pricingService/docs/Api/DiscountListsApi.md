# OpenAPI\Client\DiscountListsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2PricingServiceDiscountListsCountGet()**](DiscountListsApi.md#apiV2PricingServiceDiscountListsCountGet) | **GET** /api/v2/PricingService/DiscountLists/Count |  |
| [**apiV2PricingServiceDiscountListsDiscountListIdDelete()**](DiscountListsApi.md#apiV2PricingServiceDiscountListsDiscountListIdDelete) | **DELETE** /api/v2/PricingService/DiscountLists/{discountListId} |  |
| [**apiV2PricingServiceDiscountListsDiscountListIdDiscountsCountGet()**](DiscountListsApi.md#apiV2PricingServiceDiscountListsDiscountListIdDiscountsCountGet) | **GET** /api/v2/PricingService/DiscountLists/{discountListId}/Discounts/Count |  |
| [**apiV2PricingServiceDiscountListsDiscountListIdDiscountsDiscountListEntryIdDelete()**](DiscountListsApi.md#apiV2PricingServiceDiscountListsDiscountListIdDiscountsDiscountListEntryIdDelete) | **DELETE** /api/v2/PricingService/DiscountLists/{discountListId}/Discounts/{discountListEntryId} |  |
| [**apiV2PricingServiceDiscountListsDiscountListIdDiscountsDiscountListEntryIdPut()**](DiscountListsApi.md#apiV2PricingServiceDiscountListsDiscountListIdDiscountsDiscountListEntryIdPut) | **PUT** /api/v2/PricingService/DiscountLists/{discountListId}/Discounts/{discountListEntryId} |  |
| [**apiV2PricingServiceDiscountListsDiscountListIdDiscountsGet()**](DiscountListsApi.md#apiV2PricingServiceDiscountListsDiscountListIdDiscountsGet) | **GET** /api/v2/PricingService/DiscountLists/{discountListId}/Discounts |  |
| [**apiV2PricingServiceDiscountListsDiscountListIdDiscountsPost()**](DiscountListsApi.md#apiV2PricingServiceDiscountListsDiscountListIdDiscountsPost) | **POST** /api/v2/PricingService/DiscountLists/{discountListId}/Discounts |  |
| [**apiV2PricingServiceDiscountListsDiscountListIdGet()**](DiscountListsApi.md#apiV2PricingServiceDiscountListsDiscountListIdGet) | **GET** /api/v2/PricingService/DiscountLists/{discountListId} |  |
| [**apiV2PricingServiceDiscountListsDiscountListIdPut()**](DiscountListsApi.md#apiV2PricingServiceDiscountListsDiscountListIdPut) | **PUT** /api/v2/PricingService/DiscountLists/{discountListId} |  |
| [**apiV2PricingServiceDiscountListsGet()**](DiscountListsApi.md#apiV2PricingServiceDiscountListsGet) | **GET** /api/v2/PricingService/DiscountLists |  |
| [**apiV2PricingServiceDiscountListsPost()**](DiscountListsApi.md#apiV2PricingServiceDiscountListsPost) | **POST** /api/v2/PricingService/DiscountLists |  |
| [**getDiscountListEntry()**](DiscountListsApi.md#getDiscountListEntry) | **GET** /api/v2/PricingService/DiscountLists/{discountListId}/Discounts/{discountListEntryId} |  |


## `apiV2PricingServiceDiscountListsCountGet()`

```php
apiV2PricingServiceDiscountListsCountGet($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DiscountListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2PricingServiceDiscountListsCountGet($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountListsApi->apiV2PricingServiceDiscountListsCountGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2PricingServiceDiscountListsDiscountListIdDelete()`

```php
apiV2PricingServiceDiscountListsDiscountListIdDelete($tenant_id, $discount_list_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DiscountListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$discount_list_id = 'discount_list_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2PricingServiceDiscountListsDiscountListIdDelete($tenant_id, $discount_list_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountListsApi->apiV2PricingServiceDiscountListsDiscountListIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **discount_list_id** | **string**|  | |
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

## `apiV2PricingServiceDiscountListsDiscountListIdDiscountsCountGet()`

```php
apiV2PricingServiceDiscountListsDiscountListIdDiscountsCountGet($tenant_id, $discount_list_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DiscountListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$discount_list_id = 'discount_list_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2PricingServiceDiscountListsDiscountListIdDiscountsCountGet($tenant_id, $discount_list_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountListsApi->apiV2PricingServiceDiscountListsDiscountListIdDiscountsCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **discount_list_id** | **string**|  | |
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

## `apiV2PricingServiceDiscountListsDiscountListIdDiscountsDiscountListEntryIdDelete()`

```php
apiV2PricingServiceDiscountListsDiscountListIdDiscountsDiscountListEntryIdDelete($tenant_id, $discount_list_id, $discount_list_entry_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DiscountListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$discount_list_id = 'discount_list_id_example'; // string
$discount_list_entry_id = 'discount_list_entry_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2PricingServiceDiscountListsDiscountListIdDiscountsDiscountListEntryIdDelete($tenant_id, $discount_list_id, $discount_list_entry_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountListsApi->apiV2PricingServiceDiscountListsDiscountListIdDiscountsDiscountListEntryIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **discount_list_id** | **string**|  | |
| **discount_list_entry_id** | **string**|  | |
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

## `apiV2PricingServiceDiscountListsDiscountListIdDiscountsDiscountListEntryIdPut()`

```php
apiV2PricingServiceDiscountListsDiscountListIdDiscountsDiscountListEntryIdPut($tenant_id, $discount_list_id, $discount_list_entry_id, $api_version, $x_api_version, $discount_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DiscountListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$discount_list_id = 'discount_list_id_example'; // string
$discount_list_entry_id = 'discount_list_entry_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$discount_update_dto = new \OpenAPI\Client\Model\DiscountUpdateDto(); // \OpenAPI\Client\Model\DiscountUpdateDto

try {
    $result = $apiInstance->apiV2PricingServiceDiscountListsDiscountListIdDiscountsDiscountListEntryIdPut($tenant_id, $discount_list_id, $discount_list_entry_id, $api_version, $x_api_version, $discount_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountListsApi->apiV2PricingServiceDiscountListsDiscountListIdDiscountsDiscountListEntryIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **discount_list_id** | **string**|  | |
| **discount_list_entry_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **discount_update_dto** | [**\OpenAPI\Client\Model\DiscountUpdateDto**](../Model/DiscountUpdateDto.md)|  | [optional] |

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

## `apiV2PricingServiceDiscountListsDiscountListIdDiscountsGet()`

```php
apiV2PricingServiceDiscountListsDiscountListIdDiscountsGet($tenant_id, $discount_list_id, $api_version, $x_api_version): \OpenAPI\Client\Model\DiscountDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DiscountListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$discount_list_id = 'discount_list_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2PricingServiceDiscountListsDiscountListIdDiscountsGet($tenant_id, $discount_list_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountListsApi->apiV2PricingServiceDiscountListsDiscountListIdDiscountsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **discount_list_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DiscountDtoListEnvelope**](../Model/DiscountDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2PricingServiceDiscountListsDiscountListIdDiscountsPost()`

```php
apiV2PricingServiceDiscountListsDiscountListIdDiscountsPost($tenant_id, $discount_list_id, $api_version, $x_api_version, $discount_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DiscountListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$discount_list_id = 'discount_list_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$discount_create_dto = new \OpenAPI\Client\Model\DiscountCreateDto(); // \OpenAPI\Client\Model\DiscountCreateDto

try {
    $result = $apiInstance->apiV2PricingServiceDiscountListsDiscountListIdDiscountsPost($tenant_id, $discount_list_id, $api_version, $x_api_version, $discount_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountListsApi->apiV2PricingServiceDiscountListsDiscountListIdDiscountsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **discount_list_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **discount_create_dto** | [**\OpenAPI\Client\Model\DiscountCreateDto**](../Model/DiscountCreateDto.md)|  | [optional] |

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

## `apiV2PricingServiceDiscountListsDiscountListIdGet()`

```php
apiV2PricingServiceDiscountListsDiscountListIdGet($tenant_id, $discount_list_id, $api_version, $x_api_version): \OpenAPI\Client\Model\DiscountListDtoEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DiscountListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$discount_list_id = 'discount_list_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2PricingServiceDiscountListsDiscountListIdGet($tenant_id, $discount_list_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountListsApi->apiV2PricingServiceDiscountListsDiscountListIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **discount_list_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DiscountListDtoEnvelope**](../Model/DiscountListDtoEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2PricingServiceDiscountListsDiscountListIdPut()`

```php
apiV2PricingServiceDiscountListsDiscountListIdPut($tenant_id, $discount_list_id, $api_version, $x_api_version, $discount_list_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DiscountListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$discount_list_id = 'discount_list_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$discount_list_update_dto = new \OpenAPI\Client\Model\DiscountListUpdateDto(); // \OpenAPI\Client\Model\DiscountListUpdateDto

try {
    $result = $apiInstance->apiV2PricingServiceDiscountListsDiscountListIdPut($tenant_id, $discount_list_id, $api_version, $x_api_version, $discount_list_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountListsApi->apiV2PricingServiceDiscountListsDiscountListIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **discount_list_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **discount_list_update_dto** | [**\OpenAPI\Client\Model\DiscountListUpdateDto**](../Model/DiscountListUpdateDto.md)|  | [optional] |

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

## `apiV2PricingServiceDiscountListsGet()`

```php
apiV2PricingServiceDiscountListsGet($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\DiscountListDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DiscountListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2PricingServiceDiscountListsGet($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountListsApi->apiV2PricingServiceDiscountListsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DiscountListDtoListEnvelope**](../Model/DiscountListDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2PricingServiceDiscountListsPost()`

```php
apiV2PricingServiceDiscountListsPost($tenant_id, $api_version, $x_api_version, $discount_list_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DiscountListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$discount_list_create_dto = new \OpenAPI\Client\Model\DiscountListCreateDto(); // \OpenAPI\Client\Model\DiscountListCreateDto

try {
    $result = $apiInstance->apiV2PricingServiceDiscountListsPost($tenant_id, $api_version, $x_api_version, $discount_list_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountListsApi->apiV2PricingServiceDiscountListsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **discount_list_create_dto** | [**\OpenAPI\Client\Model\DiscountListCreateDto**](../Model/DiscountListCreateDto.md)|  | [optional] |

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

## `getDiscountListEntry()`

```php
getDiscountListEntry($tenant_id, $discount_list_id, $discount_list_entry_id, $api_version, $x_api_version): \OpenAPI\Client\Model\DiscountDtoEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DiscountListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$discount_list_id = 'discount_list_id_example'; // string
$discount_list_entry_id = 'discount_list_entry_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getDiscountListEntry($tenant_id, $discount_list_id, $discount_list_entry_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountListsApi->getDiscountListEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **discount_list_id** | **string**|  | |
| **discount_list_entry_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DiscountDtoEnvelope**](../Model/DiscountDtoEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
