# OpenAPI\Client\DiscountListsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDiscountList()**](DiscountListsApi.md#createDiscountList) | **POST** /api/v2/PricingService/DiscountLists | Creates a new discount list |
| [**createDiscountListEntry()**](DiscountListsApi.md#createDiscountListEntry) | **POST** /api/v2/PricingService/DiscountLists/{discountListId}/Discounts | Creates a discount list entry |
| [**deleteDiscountList()**](DiscountListsApi.md#deleteDiscountList) | **DELETE** /api/v2/PricingService/DiscountLists/{discountListId} | Deletes a discount list |
| [**deleteDiscountListEntry()**](DiscountListsApi.md#deleteDiscountListEntry) | **DELETE** /api/v2/PricingService/DiscountLists/{discountListId}/Discounts/{discountListEntryId} | Deletes a discount list entry |
| [**getDiscountList()**](DiscountListsApi.md#getDiscountList) | **GET** /api/v2/PricingService/DiscountLists/{discountListId} | Gets a discount list by ID |
| [**getDiscountListEntries()**](DiscountListsApi.md#getDiscountListEntries) | **GET** /api/v2/PricingService/DiscountLists/{discountListId}/Discounts | Retrieves discounts in a discount list |
| [**getDiscountListEntriesCount()**](DiscountListsApi.md#getDiscountListEntriesCount) | **GET** /api/v2/PricingService/DiscountLists/{discountListId}/Discounts/Count | Counts discounts in a discount list |
| [**getDiscountListEntry()**](DiscountListsApi.md#getDiscountListEntry) | **GET** /api/v2/PricingService/DiscountLists/{discountListId}/Discounts/{discountListEntryId} | Gets a discount list entry by ID |
| [**getDiscountLists()**](DiscountListsApi.md#getDiscountLists) | **GET** /api/v2/PricingService/DiscountLists | Retrieves all discount lists |
| [**getDiscountListsCount()**](DiscountListsApi.md#getDiscountListsCount) | **GET** /api/v2/PricingService/DiscountLists/Count | Counts discount lists |
| [**updateDiscountList()**](DiscountListsApi.md#updateDiscountList) | **PUT** /api/v2/PricingService/DiscountLists/{discountListId} | Updates a discount list |
| [**updateDiscountListEntry()**](DiscountListsApi.md#updateDiscountListEntry) | **PUT** /api/v2/PricingService/DiscountLists/{discountListId}/Discounts/{discountListEntryId} | Updates a discount list entry |


## `createDiscountList()`

```php
createDiscountList($tenant_id, $discount_list_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Creates a new discount list

Creates a new discount list for the current tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DiscountListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$discount_list_create_dto = new \OpenAPI\Client\Model\DiscountListCreateDto(); // \OpenAPI\Client\Model\DiscountListCreateDto

try {
    $result = $apiInstance->createDiscountList($tenant_id, $discount_list_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountListsApi->createDiscountList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **discount_list_create_dto** | [**\OpenAPI\Client\Model\DiscountListCreateDto**](../Model/DiscountListCreateDto.md)|  | [optional] |

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

## `createDiscountListEntry()`

```php
createDiscountListEntry($tenant_id, $discount_list_id, $discount_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Creates a discount list entry

Creates a new discount entry in the specified discount list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DiscountListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$discount_list_id = 'discount_list_id_example'; // string
$discount_create_dto = new \OpenAPI\Client\Model\DiscountCreateDto(); // \OpenAPI\Client\Model\DiscountCreateDto

try {
    $result = $apiInstance->createDiscountListEntry($tenant_id, $discount_list_id, $discount_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountListsApi->createDiscountListEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **discount_list_id** | **string**|  | |
| **discount_create_dto** | [**\OpenAPI\Client\Model\DiscountCreateDto**](../Model/DiscountCreateDto.md)|  | [optional] |

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

## `deleteDiscountList()`

```php
deleteDiscountList($tenant_id, $discount_list_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Deletes a discount list

Deletes the specified discount list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DiscountListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$discount_list_id = 'discount_list_id_example'; // string

try {
    $result = $apiInstance->deleteDiscountList($tenant_id, $discount_list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountListsApi->deleteDiscountList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **discount_list_id** | **string**|  | |

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

## `deleteDiscountListEntry()`

```php
deleteDiscountListEntry($tenant_id, $discount_list_id, $discount_list_entry_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Deletes a discount list entry

Deletes the specified discount entry from a discount list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DiscountListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$discount_list_id = 'discount_list_id_example'; // string
$discount_list_entry_id = 'discount_list_entry_id_example'; // string

try {
    $result = $apiInstance->deleteDiscountListEntry($tenant_id, $discount_list_id, $discount_list_entry_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountListsApi->deleteDiscountListEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **discount_list_id** | **string**|  | |
| **discount_list_entry_id** | **string**|  | |

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

## `getDiscountList()`

```php
getDiscountList($tenant_id, $discount_list_id): \OpenAPI\Client\Model\DiscountListDtoEnvelope
```

Gets a discount list by ID

Retrieves the details of a discount list using its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DiscountListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$discount_list_id = 'discount_list_id_example'; // string

try {
    $result = $apiInstance->getDiscountList($tenant_id, $discount_list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountListsApi->getDiscountList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **discount_list_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\DiscountListDtoEnvelope**](../Model/DiscountListDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDiscountListEntries()`

```php
getDiscountListEntries($tenant_id, $discount_list_id): \OpenAPI\Client\Model\DiscountDtoListEnvelope
```

Retrieves discounts in a discount list

Gets all discount entries for a specific discount list with OData support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DiscountListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$discount_list_id = 'discount_list_id_example'; // string

try {
    $result = $apiInstance->getDiscountListEntries($tenant_id, $discount_list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountListsApi->getDiscountListEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **discount_list_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\DiscountDtoListEnvelope**](../Model/DiscountDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDiscountListEntriesCount()`

```php
getDiscountListEntriesCount($tenant_id, $discount_list_id): \OpenAPI\Client\Model\Int32Envelope
```

Counts discounts in a discount list

Gets the count of discount entries for a specific discount list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DiscountListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$discount_list_id = 'discount_list_id_example'; // string

try {
    $result = $apiInstance->getDiscountListEntriesCount($tenant_id, $discount_list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountListsApi->getDiscountListEntriesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **discount_list_id** | **string**|  | |

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

## `getDiscountListEntry()`

```php
getDiscountListEntry($tenant_id, $discount_list_id, $discount_list_entry_id): \OpenAPI\Client\Model\DiscountDtoEnvelope
```

Gets a discount list entry by ID

Retrieves a specific discount entry from a discount list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DiscountListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$discount_list_id = 'discount_list_id_example'; // string
$discount_list_entry_id = 'discount_list_entry_id_example'; // string

try {
    $result = $apiInstance->getDiscountListEntry($tenant_id, $discount_list_id, $discount_list_entry_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountListsApi->getDiscountListEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **discount_list_id** | **string**|  | |
| **discount_list_entry_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\DiscountDtoEnvelope**](../Model/DiscountDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDiscountLists()`

```php
getDiscountLists($tenant_id): \OpenAPI\Client\Model\DiscountListDtoListEnvelope
```

Retrieves all discount lists

Gets all discount lists for the current tenant with OData support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DiscountListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getDiscountLists($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountListsApi->getDiscountLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\DiscountListDtoListEnvelope**](../Model/DiscountListDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDiscountListsCount()`

```php
getDiscountListsCount($tenant_id): \OpenAPI\Client\Model\Int32Envelope
```

Counts discount lists

Gets the count of discount lists for the current tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DiscountListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getDiscountListsCount($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountListsApi->getDiscountListsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

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

## `updateDiscountList()`

```php
updateDiscountList($tenant_id, $discount_list_id, $discount_list_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Updates a discount list

Updates the specified discount list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DiscountListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$discount_list_id = 'discount_list_id_example'; // string
$discount_list_update_dto = new \OpenAPI\Client\Model\DiscountListUpdateDto(); // \OpenAPI\Client\Model\DiscountListUpdateDto

try {
    $result = $apiInstance->updateDiscountList($tenant_id, $discount_list_id, $discount_list_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountListsApi->updateDiscountList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **discount_list_id** | **string**|  | |
| **discount_list_update_dto** | [**\OpenAPI\Client\Model\DiscountListUpdateDto**](../Model/DiscountListUpdateDto.md)|  | [optional] |

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

## `updateDiscountListEntry()`

```php
updateDiscountListEntry($tenant_id, $discount_list_id, $discount_list_entry_id, $discount_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Updates a discount list entry

Updates the specified discount entry in a discount list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DiscountListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$discount_list_id = 'discount_list_id_example'; // string
$discount_list_entry_id = 'discount_list_entry_id_example'; // string
$discount_update_dto = new \OpenAPI\Client\Model\DiscountUpdateDto(); // \OpenAPI\Client\Model\DiscountUpdateDto

try {
    $result = $apiInstance->updateDiscountListEntry($tenant_id, $discount_list_id, $discount_list_entry_id, $discount_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountListsApi->updateDiscountListEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **discount_list_id** | **string**|  | |
| **discount_list_entry_id** | **string**|  | |
| **discount_update_dto** | [**\OpenAPI\Client\Model\DiscountUpdateDto**](../Model/DiscountUpdateDto.md)|  | [optional] |

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
