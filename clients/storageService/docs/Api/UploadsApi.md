# OpenAPI\Client\UploadsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**saveFileAsync()**](UploadsApi.md#saveFileAsync) | **POST** /api/v2/StorageService/Uploads | Upload a file |


## `saveFileAsync()`

```php
saveFileAsync($tenant_id, $api_version, $x_api_version, $notes, $title, $author, $is_folder, $file_name, $abstract, $key_words, $valid_response, $parent_file_upload_id, $file_path, $app_file_content, $app_file_sha256, $app_file_created_at_utc, $app_file_user_id_value, $app_file_tenant_id_value, $app_file_enrollment_id_value, $app_file_source, $app_file_length, $app_file_name, $app_file_file_name, $app_file_last_modified, $app_file_size, $app_file_content_type, $app_file_content_disposition, $app_file_headers, $id, $timestamp): \OpenAPI\Client\Model\EmptyEnvelope
```

Upload a file

Uploads a file to tenant or user storage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UploadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
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
    $result = $apiInstance->saveFileAsync($tenant_id, $api_version, $x_api_version, $notes, $title, $author, $is_folder, $file_name, $abstract, $key_words, $valid_response, $parent_file_upload_id, $file_path, $app_file_content, $app_file_sha256, $app_file_created_at_utc, $app_file_user_id_value, $app_file_tenant_id_value, $app_file_enrollment_id_value, $app_file_source, $app_file_length, $app_file_name, $app_file_file_name, $app_file_last_modified, $app_file_size, $app_file_content_type, $app_file_content_disposition, $app_file_headers, $id, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadsApi->saveFileAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
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
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
