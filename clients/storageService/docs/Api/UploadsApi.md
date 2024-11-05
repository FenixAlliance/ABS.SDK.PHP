# OpenAPI\Client\UploadsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2StorageServiceUploadsPost()**](UploadsApi.md#apiV2StorageServiceUploadsPost) | **POST** /api/v2/StorageService/Uploads |  |


## `apiV2StorageServiceUploadsPost()`

```php
apiV2StorageServiceUploadsPost($tenant_id, $api_version, $x_api_version, $notes, $title, $author, $is_folder, $file_name, $abstract, $key_words, $valid_response, $parent_file_upload_id, $file_path, $file, $i_d, $timestamp): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UploadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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
$file = "/path/to/file.txt"; // \SplFileObject
$i_d = 'i_d_example'; // string
$timestamp = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->apiV2StorageServiceUploadsPost($tenant_id, $api_version, $x_api_version, $notes, $title, $author, $is_folder, $file_name, $abstract, $key_words, $valid_response, $parent_file_upload_id, $file_path, $file, $i_d, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadsApi->apiV2StorageServiceUploadsPost: ', $e->getMessage(), PHP_EOL;
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
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |
| **i_d** | **string**|  | [optional] |
| **timestamp** | **\DateTime**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
