# OpenAPI\Client\FilesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createFileAsync()**](FilesApi.md#createFileAsync) | **POST** /api/v2/StorageService/Files |  |
| [**deleteFileAsync()**](FilesApi.md#deleteFileAsync) | **DELETE** /api/v2/StorageService/Files/{fileId} |  |
| [**downloadFileAsync()**](FilesApi.md#downloadFileAsync) | **GET** /api/v2/StorageService/Files/{fileId}/Raw |  |
| [**getFileAsync()**](FilesApi.md#getFileAsync) | **GET** /api/v2/StorageService/Files/{fileId} |  |
| [**getFilesAsync()**](FilesApi.md#getFilesAsync) | **GET** /api/v2/StorageService/Files |  |
| [**updateFileAsync()**](FilesApi.md#updateFileAsync) | **PUT** /api/v2/StorageService/Files/{fileId} |  |


## `createFileAsync()`

```php
createFileAsync($tenant_id, $api_version, $x_api_version, $id, $timestamp, $notes, $title, $author, $is_folder, $file_name, $abstract, $key_words, $valid_response, $parent_file_upload_id, $file_path, $file): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$id = 'id_example'; // string
$timestamp = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$notes = 'notes_example'; // string
$title = 'title_example'; // string
$author = 'author_example'; // string
$is_folder = True; // bool
$file_name = 'file_name_example'; // string
$abstract = 'abstract_example'; // string
$key_words = 'key_words_example'; // string
$valid_response = True; // bool
$parent_file_upload_id = 'parent_file_upload_id_example'; // string
$file_path = 'file_path_example'; // string
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->createFileAsync($tenant_id, $api_version, $x_api_version, $id, $timestamp, $notes, $title, $author, $is_folder, $file_name, $abstract, $key_words, $valid_response, $parent_file_upload_id, $file_path, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->createFileAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **id** | **string**|  | [optional] |
| **timestamp** | **\DateTime**|  | [optional] |
| **notes** | **string**|  | [optional] |
| **title** | **string**|  | [optional] |
| **author** | **string**|  | [optional] |
| **is_folder** | **bool**|  | [optional] |
| **file_name** | **string**|  | [optional] |
| **abstract** | **string**|  | [optional] |
| **key_words** | **string**|  | [optional] |
| **valid_response** | **bool**|  | [optional] |
| **parent_file_upload_id** | **string**|  | [optional] |
| **file_path** | **string**|  | [optional] |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`, `image/png`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFileAsync()`

```php
deleteFileAsync($file_id, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\FileUploadDtoEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_id = 'file_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteFileAsync($file_id, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->deleteFileAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **string**|  | |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileUploadDtoEnvelope**](../Model/FileUploadDtoEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `image/png`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadFileAsync()`

```php
downloadFileAsync($file_id, $tenant_id, $api_version, $x_api_version): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_id = 'file_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->downloadFileAsync($file_id, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->downloadFileAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **string**|  | |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

**\SplFileObject**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `image/png`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFileAsync()`

```php
getFileAsync($file_id, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\FileUploadDtoEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_id = 'file_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getFileAsync($file_id, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFileAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **string**|  | |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileUploadDtoEnvelope**](../Model/FileUploadDtoEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `image/png`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFilesAsync()`

```php
getFilesAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\FileUploadDtoEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getFilesAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFilesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileUploadDtoEnvelope**](../Model/FileUploadDtoEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `image/png`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFileAsync()`

```php
updateFileAsync($file_id, $tenant_id, $api_version, $x_api_version, $notes, $metadata, $title, $author, $is_folder, $file_name, $abstract, $key_words, $valid_response, $parent_file_upload_id, $file_path, $file): \OpenAPI\Client\Model\FileUploadDtoEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_id = 'file_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$notes = 'notes_example'; // string
$metadata = 'metadata_example'; // string
$title = 'title_example'; // string
$author = 'author_example'; // string
$is_folder = True; // bool
$file_name = 'file_name_example'; // string
$abstract = 'abstract_example'; // string
$key_words = 'key_words_example'; // string
$valid_response = True; // bool
$parent_file_upload_id = 'parent_file_upload_id_example'; // string
$file_path = 'file_path_example'; // string
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->updateFileAsync($file_id, $tenant_id, $api_version, $x_api_version, $notes, $metadata, $title, $author, $is_folder, $file_name, $abstract, $key_words, $valid_response, $parent_file_upload_id, $file_path, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->updateFileAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **string**|  | |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **notes** | **string**|  | [optional] |
| **metadata** | **string**|  | [optional] |
| **title** | **string**|  | [optional] |
| **author** | **string**|  | [optional] |
| **is_folder** | **bool**|  | [optional] |
| **file_name** | **string**|  | [optional] |
| **abstract** | **string**|  | [optional] |
| **key_words** | **string**|  | [optional] |
| **valid_response** | **bool**|  | [optional] |
| **parent_file_upload_id** | **string**|  | [optional] |
| **file_path** | **string**|  | [optional] |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileUploadDtoEnvelope**](../Model/FileUploadDtoEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`, `image/png`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
