# OpenAPI\Client\LicensesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiLicensingLicensesGeneratePost()**](LicensesApi.md#apiLicensingLicensesGeneratePost) | **POST** /api/Licensing/Licenses/Generate |  |
| [**apiLicensingLicensesValidateAttributesGet()**](LicensesApi.md#apiLicensingLicensesValidateAttributesGet) | **GET** /api/Licensing/Licenses/Validate/Attributes |  |
| [**apiLicensingLicensesValidateErrorsGet()**](LicensesApi.md#apiLicensingLicensesValidateErrorsGet) | **GET** /api/Licensing/Licenses/Validate/Errors |  |
| [**apiLicensingLicensesValidateGet()**](LicensesApi.md#apiLicensingLicensesValidateGet) | **GET** /api/Licensing/Licenses/Validate |  |


## `apiLicensingLicensesGeneratePost()`

```php
apiLicensingLicensesGeneratePost($tenant_id, $api_version, $x_api_version, $license_key_request): \OpenAPI\Client\Model\StringEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LicensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$license_key_request = new \OpenAPI\Client\Model\LicenseKeyRequest(); // \OpenAPI\Client\Model\LicenseKeyRequest

try {
    $result = $apiInstance->apiLicensingLicensesGeneratePost($tenant_id, $api_version, $x_api_version, $license_key_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensesApi->apiLicensingLicensesGeneratePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **license_key_request** | [**\OpenAPI\Client\Model\LicenseKeyRequest**](../Model/LicenseKeyRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\StringEnvelope**](../Model/StringEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiLicensingLicensesValidateAttributesGet()`

```php
apiLicensingLicensesValidateAttributesGet($tenant_id, $api_version, $x_api_version, $license_key): \OpenAPI\Client\Model\LicenseAttributesListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LicensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$license_key = new \OpenAPI\Client\Model\LicenseKey(); // \OpenAPI\Client\Model\LicenseKey

try {
    $result = $apiInstance->apiLicensingLicensesValidateAttributesGet($tenant_id, $api_version, $x_api_version, $license_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensesApi->apiLicensingLicensesValidateAttributesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **license_key** | [**\OpenAPI\Client\Model\LicenseKey**](../Model/LicenseKey.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\LicenseAttributesListEnvelope**](../Model/LicenseAttributesListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiLicensingLicensesValidateErrorsGet()`

```php
apiLicensingLicensesValidateErrorsGet($tenant_id, $api_version, $x_api_version, $license_key): \OpenAPI\Client\Model\LicenseValidationErrorListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LicensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$license_key = new \OpenAPI\Client\Model\LicenseKey(); // \OpenAPI\Client\Model\LicenseKey

try {
    $result = $apiInstance->apiLicensingLicensesValidateErrorsGet($tenant_id, $api_version, $x_api_version, $license_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensesApi->apiLicensingLicensesValidateErrorsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **license_key** | [**\OpenAPI\Client\Model\LicenseKey**](../Model/LicenseKey.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\LicenseValidationErrorListEnvelope**](../Model/LicenseValidationErrorListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiLicensingLicensesValidateGet()`

```php
apiLicensingLicensesValidateGet($tenant_id, $api_version, $x_api_version, $license_key): \OpenAPI\Client\Model\BooleanEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LicensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$license_key = new \OpenAPI\Client\Model\LicenseKey(); // \OpenAPI\Client\Model\LicenseKey

try {
    $result = $apiInstance->apiLicensingLicensesValidateGet($tenant_id, $api_version, $x_api_version, $license_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensesApi->apiLicensingLicensesValidateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **license_key** | [**\OpenAPI\Client\Model\LicenseKey**](../Model/LicenseKey.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BooleanEnvelope**](../Model/BooleanEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
