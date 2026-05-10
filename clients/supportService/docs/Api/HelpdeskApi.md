# OpenAPI\Client\HelpdeskApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createInquiryRequestAsync()**](HelpdeskApi.md#createInquiryRequestAsync) | **POST** /api/v2/SupportService/InquiryRequests | Create an inquiry request |
| [**createKnowledgeArticleAsync()**](HelpdeskApi.md#createKnowledgeArticleAsync) | **POST** /api/v2/SupportService/KnowledgeArticles | Create a knowledge article |
| [**createMaintenanceVisitAsync()**](HelpdeskApi.md#createMaintenanceVisitAsync) | **POST** /api/v2/SupportService/MaintenanceVisits | Create a maintenance visit |
| [**createRefundRequestAsync()**](HelpdeskApi.md#createRefundRequestAsync) | **POST** /api/v2/SupportService/RefundRequests | Create a refund request |
| [**createReturnRequestAsync()**](HelpdeskApi.md#createReturnRequestAsync) | **POST** /api/v2/SupportService/ReturnRequests | Create a return request |
| [**createWarrantyRequestAsync()**](HelpdeskApi.md#createWarrantyRequestAsync) | **POST** /api/v2/SupportService/WarrantyRequests | Create a warranty request |
| [**deleteInquiryRequestAsync()**](HelpdeskApi.md#deleteInquiryRequestAsync) | **DELETE** /api/v2/SupportService/InquiryRequests/{inquiryRequestId} | Delete an inquiry request |
| [**deleteKnowledgeArticleAsync()**](HelpdeskApi.md#deleteKnowledgeArticleAsync) | **DELETE** /api/v2/SupportService/KnowledgeArticles/{knowledgeArticleId} | Delete a knowledge article |
| [**deleteMaintenanceVisitAsync()**](HelpdeskApi.md#deleteMaintenanceVisitAsync) | **DELETE** /api/v2/SupportService/MaintenanceVisits/{maintenanceVisitId} | Delete a maintenance visit |
| [**deleteRefundRequestAsync()**](HelpdeskApi.md#deleteRefundRequestAsync) | **DELETE** /api/v2/SupportService/RefundRequests/{refundRequestId} | Delete a refund request |
| [**deleteReturnRequestAsync()**](HelpdeskApi.md#deleteReturnRequestAsync) | **DELETE** /api/v2/SupportService/ReturnRequests/{returnRequestId} | Delete a return request |
| [**deleteWarrantyRequestAsync()**](HelpdeskApi.md#deleteWarrantyRequestAsync) | **DELETE** /api/v2/SupportService/WarrantyRequests/{warrantyRequestId} | Delete a warranty request |
| [**getInquiryRequestAsync()**](HelpdeskApi.md#getInquiryRequestAsync) | **GET** /api/v2/SupportService/InquiryRequests/{inquiryRequestId} | Retrieve an inquiry request by ID |
| [**getInquiryRequestsAsync()**](HelpdeskApi.md#getInquiryRequestsAsync) | **GET** /api/v2/SupportService/InquiryRequests | Retrieve inquiry requests |
| [**getInquiryRequestsCountAsync()**](HelpdeskApi.md#getInquiryRequestsCountAsync) | **GET** /api/v2/SupportService/InquiryRequests/Count | Get inquiry requests count |
| [**getKnowledgeArticleAsync()**](HelpdeskApi.md#getKnowledgeArticleAsync) | **GET** /api/v2/SupportService/KnowledgeArticles/{knowledgeArticleId} | Retrieve a knowledge article by ID |
| [**getKnowledgeArticlesAsync()**](HelpdeskApi.md#getKnowledgeArticlesAsync) | **GET** /api/v2/SupportService/KnowledgeArticles | Retrieve knowledge articles |
| [**getKnowledgeArticlesCountAsync()**](HelpdeskApi.md#getKnowledgeArticlesCountAsync) | **GET** /api/v2/SupportService/KnowledgeArticles/Count | Get knowledge articles count |
| [**getMaintenanceVisitAsync()**](HelpdeskApi.md#getMaintenanceVisitAsync) | **GET** /api/v2/SupportService/MaintenanceVisits/{maintenanceVisitId} | Retrieve a maintenance visit by ID |
| [**getMaintenanceVisitsAsync()**](HelpdeskApi.md#getMaintenanceVisitsAsync) | **GET** /api/v2/SupportService/MaintenanceVisits | Retrieve maintenance visits |
| [**getMaintenanceVisitsCountAsync()**](HelpdeskApi.md#getMaintenanceVisitsCountAsync) | **GET** /api/v2/SupportService/MaintenanceVisits/Count | Get maintenance visits count |
| [**getRefundRequestAsync()**](HelpdeskApi.md#getRefundRequestAsync) | **GET** /api/v2/SupportService/RefundRequests/{refundRequestId} | Retrieve a refund request by ID |
| [**getRefundRequestsAsync()**](HelpdeskApi.md#getRefundRequestsAsync) | **GET** /api/v2/SupportService/RefundRequests | Retrieve refund requests |
| [**getRefundRequestsCountAsync()**](HelpdeskApi.md#getRefundRequestsCountAsync) | **GET** /api/v2/SupportService/RefundRequests/Count | Get refund requests count |
| [**getReturnRequestAsync()**](HelpdeskApi.md#getReturnRequestAsync) | **GET** /api/v2/SupportService/ReturnRequests/{returnRequestId} | Retrieve a return request by ID |
| [**getReturnRequestsAsync()**](HelpdeskApi.md#getReturnRequestsAsync) | **GET** /api/v2/SupportService/ReturnRequests | Retrieve return requests |
| [**getReturnRequestsCountAsync()**](HelpdeskApi.md#getReturnRequestsCountAsync) | **GET** /api/v2/SupportService/ReturnRequests/Count | Get return requests count |
| [**getWarrantyRequestAsync()**](HelpdeskApi.md#getWarrantyRequestAsync) | **GET** /api/v2/SupportService/WarrantyRequests/{warrantyRequestId} | Retrieve a warranty request by ID |
| [**getWarrantyRequestsAsync()**](HelpdeskApi.md#getWarrantyRequestsAsync) | **GET** /api/v2/SupportService/WarrantyRequests | Retrieve warranty requests |
| [**getWarrantyRequestsCountAsync()**](HelpdeskApi.md#getWarrantyRequestsCountAsync) | **GET** /api/v2/SupportService/WarrantyRequests/Count | Get warranty requests count |
| [**updateInquiryRequestAsync()**](HelpdeskApi.md#updateInquiryRequestAsync) | **PUT** /api/v2/SupportService/InquiryRequests/{inquiryRequestId} | Update an inquiry request |
| [**updateKnowledgeArticleAsync()**](HelpdeskApi.md#updateKnowledgeArticleAsync) | **PUT** /api/v2/SupportService/KnowledgeArticles/{knowledgeArticleId} | Update a knowledge article |
| [**updateMaintenanceVisitAsync()**](HelpdeskApi.md#updateMaintenanceVisitAsync) | **PUT** /api/v2/SupportService/MaintenanceVisits/{maintenanceVisitId} | Update a maintenance visit |
| [**updateRefundRequestAsync()**](HelpdeskApi.md#updateRefundRequestAsync) | **PUT** /api/v2/SupportService/RefundRequests/{refundRequestId} | Update a refund request |
| [**updateReturnRequestAsync()**](HelpdeskApi.md#updateReturnRequestAsync) | **PUT** /api/v2/SupportService/ReturnRequests/{returnRequestId} | Update a return request |
| [**updateWarrantyRequestAsync()**](HelpdeskApi.md#updateWarrantyRequestAsync) | **PUT** /api/v2/SupportService/WarrantyRequests/{warrantyRequestId} | Update a warranty request |


## `createInquiryRequestAsync()`

```php
createInquiryRequestAsync($tenant_id, $api_version, $x_api_version, $inquiry_request_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create an inquiry request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$inquiry_request_create_dto = new \OpenAPI\Client\Model\InquiryRequestCreateDto(); // \OpenAPI\Client\Model\InquiryRequestCreateDto

try {
    $result = $apiInstance->createInquiryRequestAsync($tenant_id, $api_version, $x_api_version, $inquiry_request_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->createInquiryRequestAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **inquiry_request_create_dto** | [**\OpenAPI\Client\Model\InquiryRequestCreateDto**](../Model/InquiryRequestCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createKnowledgeArticleAsync()`

```php
createKnowledgeArticleAsync($tenant_id, $api_version, $x_api_version, $knowledge_article_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a knowledge article

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$knowledge_article_create_dto = new \OpenAPI\Client\Model\KnowledgeArticleCreateDto(); // \OpenAPI\Client\Model\KnowledgeArticleCreateDto

try {
    $result = $apiInstance->createKnowledgeArticleAsync($tenant_id, $api_version, $x_api_version, $knowledge_article_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->createKnowledgeArticleAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **knowledge_article_create_dto** | [**\OpenAPI\Client\Model\KnowledgeArticleCreateDto**](../Model/KnowledgeArticleCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMaintenanceVisitAsync()`

```php
createMaintenanceVisitAsync($tenant_id, $api_version, $x_api_version, $maintenance_visit_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a maintenance visit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$maintenance_visit_create_dto = new \OpenAPI\Client\Model\MaintenanceVisitCreateDto(); // \OpenAPI\Client\Model\MaintenanceVisitCreateDto

try {
    $result = $apiInstance->createMaintenanceVisitAsync($tenant_id, $api_version, $x_api_version, $maintenance_visit_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->createMaintenanceVisitAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **maintenance_visit_create_dto** | [**\OpenAPI\Client\Model\MaintenanceVisitCreateDto**](../Model/MaintenanceVisitCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRefundRequestAsync()`

```php
createRefundRequestAsync($tenant_id, $api_version, $x_api_version, $refund_request_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a refund request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$refund_request_create_dto = new \OpenAPI\Client\Model\RefundRequestCreateDto(); // \OpenAPI\Client\Model\RefundRequestCreateDto

try {
    $result = $apiInstance->createRefundRequestAsync($tenant_id, $api_version, $x_api_version, $refund_request_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->createRefundRequestAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **refund_request_create_dto** | [**\OpenAPI\Client\Model\RefundRequestCreateDto**](../Model/RefundRequestCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createReturnRequestAsync()`

```php
createReturnRequestAsync($tenant_id, $api_version, $x_api_version, $return_request_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a return request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$return_request_create_dto = new \OpenAPI\Client\Model\ReturnRequestCreateDto(); // \OpenAPI\Client\Model\ReturnRequestCreateDto

try {
    $result = $apiInstance->createReturnRequestAsync($tenant_id, $api_version, $x_api_version, $return_request_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->createReturnRequestAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **return_request_create_dto** | [**\OpenAPI\Client\Model\ReturnRequestCreateDto**](../Model/ReturnRequestCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWarrantyRequestAsync()`

```php
createWarrantyRequestAsync($tenant_id, $api_version, $x_api_version, $warranty_request_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a warranty request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$warranty_request_create_dto = new \OpenAPI\Client\Model\WarrantyRequestCreateDto(); // \OpenAPI\Client\Model\WarrantyRequestCreateDto

try {
    $result = $apiInstance->createWarrantyRequestAsync($tenant_id, $api_version, $x_api_version, $warranty_request_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->createWarrantyRequestAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **warranty_request_create_dto** | [**\OpenAPI\Client\Model\WarrantyRequestCreateDto**](../Model/WarrantyRequestCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteInquiryRequestAsync()`

```php
deleteInquiryRequestAsync($tenant_id, $inquiry_request_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete an inquiry request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$inquiry_request_id = 'inquiry_request_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteInquiryRequestAsync($tenant_id, $inquiry_request_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->deleteInquiryRequestAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **inquiry_request_id** | **string**|  | |
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

## `deleteKnowledgeArticleAsync()`

```php
deleteKnowledgeArticleAsync($tenant_id, $knowledge_article_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a knowledge article

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$knowledge_article_id = 'knowledge_article_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteKnowledgeArticleAsync($tenant_id, $knowledge_article_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->deleteKnowledgeArticleAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **knowledge_article_id** | **string**|  | |
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

## `deleteMaintenanceVisitAsync()`

```php
deleteMaintenanceVisitAsync($tenant_id, $maintenance_visit_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a maintenance visit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$maintenance_visit_id = 'maintenance_visit_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteMaintenanceVisitAsync($tenant_id, $maintenance_visit_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->deleteMaintenanceVisitAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **maintenance_visit_id** | **string**|  | |
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

## `deleteRefundRequestAsync()`

```php
deleteRefundRequestAsync($tenant_id, $refund_request_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a refund request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$refund_request_id = 'refund_request_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteRefundRequestAsync($tenant_id, $refund_request_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->deleteRefundRequestAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **refund_request_id** | **string**|  | |
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

## `deleteReturnRequestAsync()`

```php
deleteReturnRequestAsync($tenant_id, $return_request_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a return request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$return_request_id = 'return_request_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteReturnRequestAsync($tenant_id, $return_request_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->deleteReturnRequestAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **return_request_id** | **string**|  | |
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

## `deleteWarrantyRequestAsync()`

```php
deleteWarrantyRequestAsync($tenant_id, $warranty_request_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a warranty request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$warranty_request_id = 'warranty_request_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteWarrantyRequestAsync($tenant_id, $warranty_request_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->deleteWarrantyRequestAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **warranty_request_id** | **string**|  | |
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

## `getInquiryRequestAsync()`

```php
getInquiryRequestAsync($tenant_id, $inquiry_request_id, $api_version, $x_api_version): \OpenAPI\Client\Model\InquiryRequestDtoEnvelope
```

Retrieve an inquiry request by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$inquiry_request_id = 'inquiry_request_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getInquiryRequestAsync($tenant_id, $inquiry_request_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->getInquiryRequestAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **inquiry_request_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InquiryRequestDtoEnvelope**](../Model/InquiryRequestDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInquiryRequestsAsync()`

```php
getInquiryRequestsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\InquiryRequestDtoListEnvelope
```

Retrieve inquiry requests

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getInquiryRequestsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->getInquiryRequestsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InquiryRequestDtoListEnvelope**](../Model/InquiryRequestDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInquiryRequestsCountAsync()`

```php
getInquiryRequestsCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get inquiry requests count

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getInquiryRequestsCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->getInquiryRequestsCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `getKnowledgeArticleAsync()`

```php
getKnowledgeArticleAsync($tenant_id, $knowledge_article_id, $api_version, $x_api_version): \OpenAPI\Client\Model\KnowledgeArticleDtoEnvelope
```

Retrieve a knowledge article by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$knowledge_article_id = 'knowledge_article_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getKnowledgeArticleAsync($tenant_id, $knowledge_article_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->getKnowledgeArticleAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **knowledge_article_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\KnowledgeArticleDtoEnvelope**](../Model/KnowledgeArticleDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getKnowledgeArticlesAsync()`

```php
getKnowledgeArticlesAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\KnowledgeArticleDtoListEnvelope
```

Retrieve knowledge articles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getKnowledgeArticlesAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->getKnowledgeArticlesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\KnowledgeArticleDtoListEnvelope**](../Model/KnowledgeArticleDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getKnowledgeArticlesCountAsync()`

```php
getKnowledgeArticlesCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get knowledge articles count

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getKnowledgeArticlesCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->getKnowledgeArticlesCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `getMaintenanceVisitAsync()`

```php
getMaintenanceVisitAsync($tenant_id, $maintenance_visit_id, $api_version, $x_api_version): \OpenAPI\Client\Model\MaintenanceVisitDtoEnvelope
```

Retrieve a maintenance visit by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$maintenance_visit_id = 'maintenance_visit_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getMaintenanceVisitAsync($tenant_id, $maintenance_visit_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->getMaintenanceVisitAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **maintenance_visit_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MaintenanceVisitDtoEnvelope**](../Model/MaintenanceVisitDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMaintenanceVisitsAsync()`

```php
getMaintenanceVisitsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\MaintenanceVisitDtoListEnvelope
```

Retrieve maintenance visits

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getMaintenanceVisitsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->getMaintenanceVisitsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MaintenanceVisitDtoListEnvelope**](../Model/MaintenanceVisitDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMaintenanceVisitsCountAsync()`

```php
getMaintenanceVisitsCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get maintenance visits count

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getMaintenanceVisitsCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->getMaintenanceVisitsCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `getRefundRequestAsync()`

```php
getRefundRequestAsync($tenant_id, $refund_request_id, $api_version, $x_api_version): \OpenAPI\Client\Model\RefundRequestDtoEnvelope
```

Retrieve a refund request by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$refund_request_id = 'refund_request_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getRefundRequestAsync($tenant_id, $refund_request_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->getRefundRequestAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **refund_request_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RefundRequestDtoEnvelope**](../Model/RefundRequestDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRefundRequestsAsync()`

```php
getRefundRequestsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\RefundRequestDtoListEnvelope
```

Retrieve refund requests

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getRefundRequestsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->getRefundRequestsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RefundRequestDtoListEnvelope**](../Model/RefundRequestDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRefundRequestsCountAsync()`

```php
getRefundRequestsCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get refund requests count

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getRefundRequestsCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->getRefundRequestsCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `getReturnRequestAsync()`

```php
getReturnRequestAsync($tenant_id, $return_request_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ReturnRequestDtoEnvelope
```

Retrieve a return request by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$return_request_id = 'return_request_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getReturnRequestAsync($tenant_id, $return_request_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->getReturnRequestAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **return_request_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ReturnRequestDtoEnvelope**](../Model/ReturnRequestDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReturnRequestsAsync()`

```php
getReturnRequestsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ReturnRequestDtoListEnvelope
```

Retrieve return requests

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getReturnRequestsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->getReturnRequestsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ReturnRequestDtoListEnvelope**](../Model/ReturnRequestDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReturnRequestsCountAsync()`

```php
getReturnRequestsCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get return requests count

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getReturnRequestsCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->getReturnRequestsCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `getWarrantyRequestAsync()`

```php
getWarrantyRequestAsync($tenant_id, $warranty_request_id, $api_version, $x_api_version): \OpenAPI\Client\Model\WarrantyRequestDtoEnvelope
```

Retrieve a warranty request by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$warranty_request_id = 'warranty_request_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getWarrantyRequestAsync($tenant_id, $warranty_request_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->getWarrantyRequestAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **warranty_request_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WarrantyRequestDtoEnvelope**](../Model/WarrantyRequestDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWarrantyRequestsAsync()`

```php
getWarrantyRequestsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\WarrantyRequestDtoListEnvelope
```

Retrieve warranty requests

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getWarrantyRequestsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->getWarrantyRequestsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WarrantyRequestDtoListEnvelope**](../Model/WarrantyRequestDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWarrantyRequestsCountAsync()`

```php
getWarrantyRequestsCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get warranty requests count

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getWarrantyRequestsCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->getWarrantyRequestsCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateInquiryRequestAsync()`

```php
updateInquiryRequestAsync($tenant_id, $inquiry_request_id, $api_version, $x_api_version, $inquiry_request_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update an inquiry request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$inquiry_request_id = 'inquiry_request_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$inquiry_request_update_dto = new \OpenAPI\Client\Model\InquiryRequestUpdateDto(); // \OpenAPI\Client\Model\InquiryRequestUpdateDto

try {
    $result = $apiInstance->updateInquiryRequestAsync($tenant_id, $inquiry_request_id, $api_version, $x_api_version, $inquiry_request_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->updateInquiryRequestAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **inquiry_request_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **inquiry_request_update_dto** | [**\OpenAPI\Client\Model\InquiryRequestUpdateDto**](../Model/InquiryRequestUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateKnowledgeArticleAsync()`

```php
updateKnowledgeArticleAsync($tenant_id, $knowledge_article_id, $api_version, $x_api_version, $knowledge_article_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a knowledge article

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$knowledge_article_id = 'knowledge_article_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$knowledge_article_update_dto = new \OpenAPI\Client\Model\KnowledgeArticleUpdateDto(); // \OpenAPI\Client\Model\KnowledgeArticleUpdateDto

try {
    $result = $apiInstance->updateKnowledgeArticleAsync($tenant_id, $knowledge_article_id, $api_version, $x_api_version, $knowledge_article_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->updateKnowledgeArticleAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **knowledge_article_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **knowledge_article_update_dto** | [**\OpenAPI\Client\Model\KnowledgeArticleUpdateDto**](../Model/KnowledgeArticleUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMaintenanceVisitAsync()`

```php
updateMaintenanceVisitAsync($tenant_id, $maintenance_visit_id, $api_version, $x_api_version, $body): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a maintenance visit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$maintenance_visit_id = 'maintenance_visit_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->updateMaintenanceVisitAsync($tenant_id, $maintenance_visit_id, $api_version, $x_api_version, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->updateMaintenanceVisitAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **maintenance_visit_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **body** | **object**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRefundRequestAsync()`

```php
updateRefundRequestAsync($tenant_id, $refund_request_id, $api_version, $x_api_version, $refund_request_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a refund request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$refund_request_id = 'refund_request_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$refund_request_update_dto = new \OpenAPI\Client\Model\RefundRequestUpdateDto(); // \OpenAPI\Client\Model\RefundRequestUpdateDto

try {
    $result = $apiInstance->updateRefundRequestAsync($tenant_id, $refund_request_id, $api_version, $x_api_version, $refund_request_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->updateRefundRequestAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **refund_request_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **refund_request_update_dto** | [**\OpenAPI\Client\Model\RefundRequestUpdateDto**](../Model/RefundRequestUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateReturnRequestAsync()`

```php
updateReturnRequestAsync($tenant_id, $return_request_id, $api_version, $x_api_version, $return_request_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a return request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$return_request_id = 'return_request_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$return_request_update_dto = new \OpenAPI\Client\Model\ReturnRequestUpdateDto(); // \OpenAPI\Client\Model\ReturnRequestUpdateDto

try {
    $result = $apiInstance->updateReturnRequestAsync($tenant_id, $return_request_id, $api_version, $x_api_version, $return_request_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->updateReturnRequestAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **return_request_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **return_request_update_dto** | [**\OpenAPI\Client\Model\ReturnRequestUpdateDto**](../Model/ReturnRequestUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWarrantyRequestAsync()`

```php
updateWarrantyRequestAsync($tenant_id, $warranty_request_id, $api_version, $x_api_version, $warranty_request_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a warranty request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$warranty_request_id = 'warranty_request_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$warranty_request_update_dto = new \OpenAPI\Client\Model\WarrantyRequestUpdateDto(); // \OpenAPI\Client\Model\WarrantyRequestUpdateDto

try {
    $result = $apiInstance->updateWarrantyRequestAsync($tenant_id, $warranty_request_id, $api_version, $x_api_version, $warranty_request_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->updateWarrantyRequestAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **warranty_request_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **warranty_request_update_dto** | [**\OpenAPI\Client\Model\WarrantyRequestUpdateDto**](../Model/WarrantyRequestUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
