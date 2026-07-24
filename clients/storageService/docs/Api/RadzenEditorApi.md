# OpenAPI\Client\RadzenEditorApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**radzenUploadImage()**](RadzenEditorApi.md#radzenUploadImage) | **POST** /api/v2/fs/radzen/tenants/{tenantId}/upload/image | Upload an editor image to tenant storage. |
| [**radzenUploadImageScoped()**](RadzenEditorApi.md#radzenUploadImageScoped) | **POST** /api/v2/fs/radzen/tenants/{tenantId}/{recordType}/{recordId}/upload/image | Upload an editor image scoped to a record. |
| [**radzenUploadSingle()**](RadzenEditorApi.md#radzenUploadSingle) | **POST** /api/v2/fs/radzen/tenants/{tenantId}/upload/single | Upload a single editor file to tenant storage. |
| [**radzenUploadSingleScoped()**](RadzenEditorApi.md#radzenUploadSingleScoped) | **POST** /api/v2/fs/radzen/tenants/{tenantId}/{recordType}/{recordId}/upload/single | Upload a single editor file scoped to a record. |
| [**radzenUploadStream()**](RadzenEditorApi.md#radzenUploadStream) | **PUT** /api/v2/fs/radzen/tenants/{tenantId}/upload/stream | Chunked editor upload (not implemented). |
| [**radzenUploadStreamScoped()**](RadzenEditorApi.md#radzenUploadStreamScoped) | **PUT** /api/v2/fs/radzen/tenants/{tenantId}/{recordType}/{recordId}/upload/stream | Chunked editor upload scoped to a record (not implemented). |
| [**radzenUploadUserImage()**](RadzenEditorApi.md#radzenUploadUserImage) | **POST** /api/v2/fs/radzen/users/upload/image | Upload an editor image to user storage. |
| [**radzenUploadUserImageScoped()**](RadzenEditorApi.md#radzenUploadUserImageScoped) | **POST** /api/v2/fs/radzen/users/{recordType}/{recordId}/upload/image | Upload a user editor image scoped to a record. |


## `radzenUploadImage()`

```php
radzenUploadImage($tenant_id, $visibility, $social_profile_id, $purpose, $api_version, $x_api_version, $file)
```

Upload an editor image to tenant storage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RadzenEditorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$visibility = 'visibility_example'; // string
$social_profile_id = 'social_profile_id_example'; // string
$purpose = 'purpose_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $apiInstance->radzenUploadImage($tenant_id, $visibility, $social_profile_id, $purpose, $api_version, $x_api_version, $file);
} catch (Exception $e) {
    echo 'Exception when calling RadzenEditorApi->radzenUploadImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **visibility** | **string**|  | [optional] |
| **social_profile_id** | **string**|  | [optional] |
| **purpose** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `radzenUploadImageScoped()`

```php
radzenUploadImageScoped($tenant_id, $record_type, $record_id, $visibility, $social_profile_id, $purpose, $api_version, $x_api_version, $file)
```

Upload an editor image scoped to a record.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RadzenEditorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$record_type = 'record_type_example'; // string
$record_id = 'record_id_example'; // string
$visibility = 'visibility_example'; // string
$social_profile_id = 'social_profile_id_example'; // string
$purpose = 'purpose_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $apiInstance->radzenUploadImageScoped($tenant_id, $record_type, $record_id, $visibility, $social_profile_id, $purpose, $api_version, $x_api_version, $file);
} catch (Exception $e) {
    echo 'Exception when calling RadzenEditorApi->radzenUploadImageScoped: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **record_type** | **string**|  | |
| **record_id** | **string**|  | |
| **visibility** | **string**|  | [optional] |
| **social_profile_id** | **string**|  | [optional] |
| **purpose** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `radzenUploadSingle()`

```php
radzenUploadSingle($tenant_id, $api_version, $x_api_version, $file)
```

Upload a single editor file to tenant storage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RadzenEditorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $apiInstance->radzenUploadSingle($tenant_id, $api_version, $x_api_version, $file);
} catch (Exception $e) {
    echo 'Exception when calling RadzenEditorApi->radzenUploadSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `radzenUploadSingleScoped()`

```php
radzenUploadSingleScoped($tenant_id, $record_type, $record_id, $api_version, $x_api_version, $file)
```

Upload a single editor file scoped to a record.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RadzenEditorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$record_type = 'record_type_example'; // string
$record_id = 'record_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $apiInstance->radzenUploadSingleScoped($tenant_id, $record_type, $record_id, $api_version, $x_api_version, $file);
} catch (Exception $e) {
    echo 'Exception when calling RadzenEditorApi->radzenUploadSingleScoped: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **record_type** | **string**|  | |
| **record_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `radzenUploadStream()`

```php
radzenUploadStream($tenant_id, $api_version, $x_api_version)
```

Chunked editor upload (not implemented).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RadzenEditorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->radzenUploadStream($tenant_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling RadzenEditorApi->radzenUploadStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `radzenUploadStreamScoped()`

```php
radzenUploadStreamScoped($tenant_id, $record_type, $record_id, $api_version, $x_api_version)
```

Chunked editor upload scoped to a record (not implemented).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RadzenEditorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$record_type = 'record_type_example'; // string
$record_id = 'record_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->radzenUploadStreamScoped($tenant_id, $record_type, $record_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling RadzenEditorApi->radzenUploadStreamScoped: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **record_type** | **string**|  | |
| **record_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `radzenUploadUserImage()`

```php
radzenUploadUserImage($visibility, $social_profile_id, $purpose, $api_version, $x_api_version, $file)
```

Upload an editor image to user storage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RadzenEditorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$visibility = 'visibility_example'; // string
$social_profile_id = 'social_profile_id_example'; // string
$purpose = 'purpose_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $apiInstance->radzenUploadUserImage($visibility, $social_profile_id, $purpose, $api_version, $x_api_version, $file);
} catch (Exception $e) {
    echo 'Exception when calling RadzenEditorApi->radzenUploadUserImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **visibility** | **string**|  | [optional] |
| **social_profile_id** | **string**|  | [optional] |
| **purpose** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `radzenUploadUserImageScoped()`

```php
radzenUploadUserImageScoped($record_type, $record_id, $visibility, $social_profile_id, $purpose, $api_version, $x_api_version, $file)
```

Upload a user editor image scoped to a record.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RadzenEditorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$record_type = 'record_type_example'; // string
$record_id = 'record_id_example'; // string
$visibility = 'visibility_example'; // string
$social_profile_id = 'social_profile_id_example'; // string
$purpose = 'purpose_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $apiInstance->radzenUploadUserImageScoped($record_type, $record_id, $visibility, $social_profile_id, $purpose, $api_version, $x_api_version, $file);
} catch (Exception $e) {
    echo 'Exception when calling RadzenEditorApi->radzenUploadUserImageScoped: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **record_type** | **string**|  | |
| **record_id** | **string**|  | |
| **visibility** | **string**|  | [optional] |
| **social_profile_id** | **string**|  | [optional] |
| **purpose** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
