# OpenAPI\Client\SigningEngineApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getProvidersAsync()**](SigningEngineApi.md#getProvidersAsync) | **GET** /api/v2/TrustService/SigningEngine/Providers | List signing providers |
| [**getProvidersCountAsync()**](SigningEngineApi.md#getProvidersCountAsync) | **GET** /api/v2/TrustService/SigningEngine/Providers/Count | Count signing providers |
| [**previewAsync()**](SigningEngineApi.md#previewAsync) | **POST** /api/v2/TrustService/SigningEngine/Preview | Preview signing readiness |


## `getProvidersAsync()`

```php
getProvidersAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TrustSigningProviderDescriptorDtoListEnvelope
```

List signing providers

Returns the registered alpha signing providers (Noop / Manual / External). OData-queryable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SigningEngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getProvidersAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SigningEngineApi->getProvidersAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TrustSigningProviderDescriptorDtoListEnvelope**](../Model/TrustSigningProviderDescriptorDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProvidersCountAsync()`

```php
getProvidersCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Count signing providers

Returns the count of registered alpha signing providers. OData-queryable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SigningEngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getProvidersCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SigningEngineApi->getProvidersCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `previewAsync()`

```php
previewAsync($tenant_id, $api_version, $x_api_version, $trust_signing_request_dto): \OpenAPI\Client\Model\TrustSigningReadinessDtoEnvelope
```

Preview signing readiness

Side-effect-free: validates a signing request and reports whether it can proceed and with what policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SigningEngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$trust_signing_request_dto = new \OpenAPI\Client\Model\TrustSigningRequestDto(); // \OpenAPI\Client\Model\TrustSigningRequestDto

try {
    $result = $apiInstance->previewAsync($tenant_id, $api_version, $x_api_version, $trust_signing_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SigningEngineApi->previewAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **trust_signing_request_dto** | [**\OpenAPI\Client\Model\TrustSigningRequestDto**](../Model/TrustSigningRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TrustSigningReadinessDtoEnvelope**](../Model/TrustSigningReadinessDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
