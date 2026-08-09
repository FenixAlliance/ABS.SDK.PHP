# OpenAPI\Client\FilesApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createFileAsync()**](FilesApi.md#createFileAsync) | **POST** /api/v2/StorageService/Files |  |
| [**deleteFileAsync()**](FilesApi.md#deleteFileAsync) | **DELETE** /api/v2/StorageService/Files/{fileId} |  |
| [**downloadFileAsync()**](FilesApi.md#downloadFileAsync) | **GET** /api/v2/StorageService/Files/{fileId}/Raw |  |
| [**getFileAsync()**](FilesApi.md#getFileAsync) | **GET** /api/v2/StorageService/Files/{fileId} |  |
| [**getFileThumbnailAsync()**](FilesApi.md#getFileThumbnailAsync) | **GET** /api/v2/StorageService/Files/{fileId}/Thumbnail |  |
| [**getFilesAsync()**](FilesApi.md#getFilesAsync) | **GET** /api/v2/StorageService/Files |  |
| [**getFilesCountAsync()**](FilesApi.md#getFilesCountAsync) | **GET** /api/v2/StorageService/Files/Count |  |
| [**updateFileAsync()**](FilesApi.md#updateFileAsync) | **PUT** /api/v2/StorageService/Files/{fileId} |  |


## `createFileAsync()`

```php
createFileAsync($tenant_id, $api_version, $x_api_version, $file, $notes, $title, $author, $is_folder, $file_name, $abstract, $key_words, $valid_response, $parent_file_upload_id, $file_path, $public_access_type, $purpose, $social_profile_id_value, $app_file_content, $app_file_sha256, $app_file_created_at_utc, $app_file_user_id_value, $app_file_tenant_id_value, $app_file_enrollment_id_value, $app_file_source, $app_file_length, $app_file_name, $app_file_file_name, $app_file_last_modified, $app_file_size, $app_file_content_type, $app_file_content_disposition, $app_file_headers, $id, $timestamp): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$file = "/path/to/file.txt"; // \SplFileObject
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
$public_access_type = 'public_access_type_example'; // string
$purpose = 'purpose_example'; // string
$social_profile_id_value = 'social_profile_id_value_example'; // string
$app_file_content = 'app_file_content_example'; // string
$app_file_sha256 = 'app_file_sha256_example'; // string
$app_file_created_at_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$app_file_user_id_value = 'app_file_user_id_value_example'; // string
$app_file_tenant_id_value = 'app_file_tenant_id_value_example'; // string
$app_file_enrollment_id_value = 'app_file_enrollment_id_value_example'; // string
$app_file_source = 'app_file_source_example'; // string
$app_file_length = 56; // int
$app_file_name = 'app_file_name_example'; // string
$app_file_file_name = 'app_file_file_name_example'; // string
$app_file_last_modified = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$app_file_size = 56; // int
$app_file_content_type = 'app_file_content_type_example'; // string
$app_file_content_disposition = 'app_file_content_disposition_example'; // string
$app_file_headers = NULL; // array<string,string>
$id = 'id_example'; // string
$timestamp = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->createFileAsync($tenant_id, $api_version, $x_api_version, $file, $notes, $title, $author, $is_folder, $file_name, $abstract, $key_words, $valid_response, $parent_file_upload_id, $file_path, $public_access_type, $purpose, $social_profile_id_value, $app_file_content, $app_file_sha256, $app_file_created_at_utc, $app_file_user_id_value, $app_file_tenant_id_value, $app_file_enrollment_id_value, $app_file_source, $app_file_length, $app_file_name, $app_file_file_name, $app_file_last_modified, $app_file_size, $app_file_content_type, $app_file_content_disposition, $app_file_headers, $id, $timestamp);
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
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |
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
| **public_access_type** | **string**|  | [optional] |
| **purpose** | **string**|  | [optional] |
| **social_profile_id_value** | **string**|  | [optional] |
| **app_file_content** | **string**|  | [optional] |
| **app_file_sha256** | **string**|  | [optional] |
| **app_file_created_at_utc** | **\DateTime**|  | [optional] |
| **app_file_user_id_value** | **string**|  | [optional] |
| **app_file_tenant_id_value** | **string**|  | [optional] |
| **app_file_enrollment_id_value** | **string**|  | [optional] |
| **app_file_source** | **string**|  | [optional] |
| **app_file_length** | **int**|  | [optional] |
| **app_file_name** | **string**|  | [optional] |
| **app_file_file_name** | **string**|  | [optional] |
| **app_file_last_modified** | **\DateTime**|  | [optional] |
| **app_file_size** | **int**|  | [optional] |
| **app_file_content_type** | **string**|  | [optional] |
| **app_file_content_disposition** | **string**|  | [optional] |
| **app_file_headers** | [**array<string,string>**](../Model/array.md)|  | [optional] |
| **id** | **string**|  | [optional] |
| **timestamp** | **\DateTime**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`, `image/png`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFileAsync()`

```php
deleteFileAsync($file_id, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

No authorization required

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



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `image/png`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFileThumbnailAsync()`

```php
getFileThumbnailAsync($file_id, $tenant_id, $api_version, $x_api_version): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 'file_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getFileThumbnailAsync($file_id, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFileThumbnailAsync: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `image/png`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFilesAsync()`

```php
getFilesAsync($tenant_id, $api_version, $x_api_version, $top, $skip, $count, $filter, $order_by, $search, $select, $expand, $is_empty): \OpenAPI\Client\Model\FileUploadDtoEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$top = 56; // int
$skip = 56; // int
$count = True; // bool
$filter = 'filter_example'; // string
$order_by = 'order_by_example'; // string
$search = 'search_example'; // string
$select = 'select_example'; // string
$expand = 'expand_example'; // string
$is_empty = True; // bool

try {
    $result = $apiInstance->getFilesAsync($tenant_id, $api_version, $x_api_version, $top, $skip, $count, $filter, $order_by, $search, $select, $expand, $is_empty);
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
| **top** | **int**|  | [optional] |
| **skip** | **int**|  | [optional] |
| **count** | **bool**|  | [optional] |
| **filter** | **string**|  | [optional] |
| **order_by** | **string**|  | [optional] |
| **search** | **string**|  | [optional] |
| **select** | **string**|  | [optional] |
| **expand** | **string**|  | [optional] |
| **is_empty** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileUploadDtoEnvelope**](../Model/FileUploadDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`, `image/png`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFilesCountAsync()`

```php
getFilesCountAsync($tenant_id, $api_version, $x_api_version, $top, $skip, $count, $filter, $order_by, $search, $select, $expand, $is_empty): int
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$top = 56; // int
$skip = 56; // int
$count = True; // bool
$filter = 'filter_example'; // string
$order_by = 'order_by_example'; // string
$search = 'search_example'; // string
$select = 'select_example'; // string
$expand = 'expand_example'; // string
$is_empty = True; // bool

try {
    $result = $apiInstance->getFilesCountAsync($tenant_id, $api_version, $x_api_version, $top, $skip, $count, $filter, $order_by, $search, $select, $expand, $is_empty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFilesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **top** | **int**|  | [optional] |
| **skip** | **int**|  | [optional] |
| **count** | **bool**|  | [optional] |
| **filter** | **string**|  | [optional] |
| **order_by** | **string**|  | [optional] |
| **search** | **string**|  | [optional] |
| **select** | **string**|  | [optional] |
| **expand** | **string**|  | [optional] |
| **is_empty** | **bool**|  | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`, `image/png`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFileAsync()`

```php
updateFileAsync($file_id, $tenant_id, $api_version, $x_api_version, $file, $notes, $metadata, $title, $author, $is_folder, $file_name, $abstract, $key_words, $valid_response, $parent_file_upload_id, $file_path, $app_file_content, $app_file_sha256, $app_file_created_at_utc, $app_file_user_id_value, $app_file_tenant_id_value, $app_file_enrollment_id_value, $app_file_source, $app_file_length, $app_file_name, $app_file_file_name, $app_file_last_modified, $app_file_size, $app_file_content_type, $app_file_content_disposition, $app_file_headers): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 'file_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$file = "/path/to/file.txt"; // \SplFileObject
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
$app_file_content = 'app_file_content_example'; // string
$app_file_sha256 = 'app_file_sha256_example'; // string
$app_file_created_at_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$app_file_user_id_value = 'app_file_user_id_value_example'; // string
$app_file_tenant_id_value = 'app_file_tenant_id_value_example'; // string
$app_file_enrollment_id_value = 'app_file_enrollment_id_value_example'; // string
$app_file_source = 'app_file_source_example'; // string
$app_file_length = 56; // int
$app_file_name = 'app_file_name_example'; // string
$app_file_file_name = 'app_file_file_name_example'; // string
$app_file_last_modified = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$app_file_size = 56; // int
$app_file_content_type = 'app_file_content_type_example'; // string
$app_file_content_disposition = 'app_file_content_disposition_example'; // string
$app_file_headers = NULL; // array<string,string>

try {
    $result = $apiInstance->updateFileAsync($file_id, $tenant_id, $api_version, $x_api_version, $file, $notes, $metadata, $title, $author, $is_folder, $file_name, $abstract, $key_words, $valid_response, $parent_file_upload_id, $file_path, $app_file_content, $app_file_sha256, $app_file_created_at_utc, $app_file_user_id_value, $app_file_tenant_id_value, $app_file_enrollment_id_value, $app_file_source, $app_file_length, $app_file_name, $app_file_file_name, $app_file_last_modified, $app_file_size, $app_file_content_type, $app_file_content_disposition, $app_file_headers);
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
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |
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
| **app_file_content** | **string**|  | [optional] |
| **app_file_sha256** | **string**|  | [optional] |
| **app_file_created_at_utc** | **\DateTime**|  | [optional] |
| **app_file_user_id_value** | **string**|  | [optional] |
| **app_file_tenant_id_value** | **string**|  | [optional] |
| **app_file_enrollment_id_value** | **string**|  | [optional] |
| **app_file_source** | **string**|  | [optional] |
| **app_file_length** | **int**|  | [optional] |
| **app_file_name** | **string**|  | [optional] |
| **app_file_file_name** | **string**|  | [optional] |
| **app_file_last_modified** | **\DateTime**|  | [optional] |
| **app_file_size** | **int**|  | [optional] |
| **app_file_content_type** | **string**|  | [optional] |
| **app_file_content_disposition** | **string**|  | [optional] |
| **app_file_headers** | [**array<string,string>**](../Model/array.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`, `image/png`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
