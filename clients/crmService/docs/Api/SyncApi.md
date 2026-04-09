# OpenAPI\Client\SyncApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**syncCurrentHolderToCurrentTenantCrm()**](SyncApi.md#syncCurrentHolderToCurrentTenantCrm) | **POST** /api/v2/CrmService/Sync | Sync the current user into the current tenant&#39;s contact list |
| [**syncCurrentHolderToTenantCrm()**](SyncApi.md#syncCurrentHolderToTenantCrm) | **POST** /api/v2/CrmService/Sync/Me | Sync the current user into a tenant&#39;s contact list |
| [**syncHolderToTenantCrmAsync()**](SyncApi.md#syncHolderToTenantCrmAsync) | **POST** /api/v2/CrmService/Sync/User | Sync a user into a tenant&#39;s contact list |
| [**syncTenantToTenantCrm()**](SyncApi.md#syncTenantToTenantCrm) | **POST** /api/v2/CrmService/Sync/Tenant | Sync a tenant into another tenant&#39;s contact list |


## `syncCurrentHolderToCurrentTenantCrm()`

```php
syncCurrentHolderToCurrentTenantCrm($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Envelope
```

Sync the current user into the current tenant's contact list

Synchronizes the currently authenticated user into the current tenant's CRM contact list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->syncCurrentHolderToCurrentTenantCrm($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->syncCurrentHolderToCurrentTenantCrm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
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

## `syncCurrentHolderToTenantCrm()`

```php
syncCurrentHolderToTenantCrm($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Envelope
```

Sync the current user into a tenant's contact list

Synchronizes the currently authenticated user into the specified tenant's CRM contact list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->syncCurrentHolderToTenantCrm($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->syncCurrentHolderToTenantCrm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
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

## `syncHolderToTenantCrmAsync()`

```php
syncHolderToTenantCrmAsync($tenant_id, $related_user_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Envelope
```

Sync a user into a tenant's contact list

Synchronizes a specified user into the tenant's CRM contact list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$related_user_id = 'related_user_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->syncHolderToTenantCrmAsync($tenant_id, $related_user_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->syncHolderToTenantCrmAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **related_user_id** | **string**|  | |
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

## `syncTenantToTenantCrm()`

```php
syncTenantToTenantCrm($tenant_id, $related_tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Sync a tenant into another tenant's contact list

Synchronizes a tenant into another tenant's CRM contact list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$related_tenant_id = 'related_tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->syncTenantToTenantCrm($tenant_id, $related_tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->syncTenantToTenantCrm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **related_tenant_id** | **string**|  | |
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
