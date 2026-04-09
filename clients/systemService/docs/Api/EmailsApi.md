# OpenAPI\Client\EmailsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminPreviewBasicEmailTemplate()**](EmailsApi.md#adminPreviewBasicEmailTemplate) | **POST** /api/v2/SystemService/Emails/Preview | Preview a rendered basic email template. |
| [**adminSendBasicEmail()**](EmailsApi.md#adminSendBasicEmail) | **POST** /api/v2/SystemService/Emails/SendBasic | Send a basic transactional email to recipients. |


## `adminPreviewBasicEmailTemplate()`

```php
adminPreviewBasicEmailTemplate($api_version, $x_api_version, $object_email_dispatch_request)
```

Preview a rendered basic email template.

This action is only available for global administrators (business_owner role).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$object_email_dispatch_request = new \OpenAPI\Client\Model\ObjectEmailDispatchRequest(); // \OpenAPI\Client\Model\ObjectEmailDispatchRequest

try {
    $apiInstance->adminPreviewBasicEmailTemplate($api_version, $x_api_version, $object_email_dispatch_request);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->adminPreviewBasicEmailTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **object_email_dispatch_request** | [**\OpenAPI\Client\Model\ObjectEmailDispatchRequest**](../Model/ObjectEmailDispatchRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminSendBasicEmail()`

```php
adminSendBasicEmail($api_version, $x_api_version, $object_email_dispatch_request): \OpenAPI\Client\Model\TenantDtoListEnvelope
```

Send a basic transactional email to recipients.

This action is only available for global administrators (business_owner role).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$object_email_dispatch_request = new \OpenAPI\Client\Model\ObjectEmailDispatchRequest(); // \OpenAPI\Client\Model\ObjectEmailDispatchRequest

try {
    $result = $apiInstance->adminSendBasicEmail($api_version, $x_api_version, $object_email_dispatch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->adminSendBasicEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **object_email_dispatch_request** | [**\OpenAPI\Client\Model\ObjectEmailDispatchRequest**](../Model/ObjectEmailDispatchRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TenantDtoListEnvelope**](../Model/TenantDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
