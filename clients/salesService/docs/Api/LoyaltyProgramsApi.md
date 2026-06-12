# OpenAPI\Client\LoyaltyProgramsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countLoyaltyProgramsAsync()**](LoyaltyProgramsApi.md#countLoyaltyProgramsAsync) | **GET** /api/v2/SalesService/LoyaltyPrograms/Count | Get loyalty programs count |
| [**createLoyaltyProgramAsync()**](LoyaltyProgramsApi.md#createLoyaltyProgramAsync) | **POST** /api/v2/SalesService/LoyaltyPrograms | Create a loyalty program |
| [**deleteLoyaltyProgramAsync()**](LoyaltyProgramsApi.md#deleteLoyaltyProgramAsync) | **DELETE** /api/v2/SalesService/LoyaltyPrograms/{loyaltyProgramId} | Delete a loyalty program |
| [**getLoyaltyProgramAsync()**](LoyaltyProgramsApi.md#getLoyaltyProgramAsync) | **GET** /api/v2/SalesService/LoyaltyPrograms/{loyaltyProgramId} | Get loyalty program by ID |
| [**getLoyaltyProgramsAsync()**](LoyaltyProgramsApi.md#getLoyaltyProgramsAsync) | **GET** /api/v2/SalesService/LoyaltyPrograms | Get loyalty programs |
| [**patchLoyaltyProgramAsync()**](LoyaltyProgramsApi.md#patchLoyaltyProgramAsync) | **PATCH** /api/v2/SalesService/LoyaltyPrograms/{loyaltyProgramId} | Patch a loyalty program |
| [**updateLoyaltyProgramAsync()**](LoyaltyProgramsApi.md#updateLoyaltyProgramAsync) | **PUT** /api/v2/SalesService/LoyaltyPrograms/{loyaltyProgramId} | Update a loyalty program |


## `countLoyaltyProgramsAsync()`

```php
countLoyaltyProgramsAsync($tenant_id): \OpenAPI\Client\Model\Int32Envelope
```

Get loyalty programs count

Returns the total count of loyalty programs for the specified tenant with OData filter support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LoyaltyProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->countLoyaltyProgramsAsync($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyProgramsApi->countLoyaltyProgramsAsync: ', $e->getMessage(), PHP_EOL;
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

## `createLoyaltyProgramAsync()`

```php
createLoyaltyProgramAsync($tenant_id, $loyalty_program_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a loyalty program

Creates a new loyalty program for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LoyaltyProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$loyalty_program_create_dto = new \OpenAPI\Client\Model\LoyaltyProgramCreateDto(); // \OpenAPI\Client\Model\LoyaltyProgramCreateDto

try {
    $result = $apiInstance->createLoyaltyProgramAsync($tenant_id, $loyalty_program_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyProgramsApi->createLoyaltyProgramAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **loyalty_program_create_dto** | [**\OpenAPI\Client\Model\LoyaltyProgramCreateDto**](../Model/LoyaltyProgramCreateDto.md)|  | [optional] |

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

## `deleteLoyaltyProgramAsync()`

```php
deleteLoyaltyProgramAsync($tenant_id, $loyalty_program_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a loyalty program

Deletes an existing loyalty program by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LoyaltyProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$loyalty_program_id = 'loyalty_program_id_example'; // string

try {
    $result = $apiInstance->deleteLoyaltyProgramAsync($tenant_id, $loyalty_program_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyProgramsApi->deleteLoyaltyProgramAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **loyalty_program_id** | **string**|  | |

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

## `getLoyaltyProgramAsync()`

```php
getLoyaltyProgramAsync($tenant_id, $loyalty_program_id): \OpenAPI\Client\Model\LoyaltyProgramDtoEnvelope
```

Get loyalty program by ID

Retrieves a single loyalty program by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LoyaltyProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$loyalty_program_id = 'loyalty_program_id_example'; // string

try {
    $result = $apiInstance->getLoyaltyProgramAsync($tenant_id, $loyalty_program_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyProgramsApi->getLoyaltyProgramAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **loyalty_program_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\LoyaltyProgramDtoEnvelope**](../Model/LoyaltyProgramDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLoyaltyProgramsAsync()`

```php
getLoyaltyProgramsAsync($tenant_id): \OpenAPI\Client\Model\LoyaltyProgramDtoListEnvelope
```

Get loyalty programs

Retrieves a list of loyalty programs for the specified tenant with OData query support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LoyaltyProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getLoyaltyProgramsAsync($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyProgramsApi->getLoyaltyProgramsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\LoyaltyProgramDtoListEnvelope**](../Model/LoyaltyProgramDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchLoyaltyProgramAsync()`

```php
patchLoyaltyProgramAsync($tenant_id, $loyalty_program_id, $operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a loyalty program

Partially updates an existing loyalty program using a JSON Patch document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LoyaltyProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$loyalty_program_id = 'loyalty_program_id_example'; // string
$operation = array(new \OpenAPI\Client\Model\Operation()); // \OpenAPI\Client\Model\Operation[]

try {
    $result = $apiInstance->patchLoyaltyProgramAsync($tenant_id, $loyalty_program_id, $operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyProgramsApi->patchLoyaltyProgramAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **loyalty_program_id** | **string**|  | |
| **operation** | [**\OpenAPI\Client\Model\Operation[]**](../Model/Operation.md)|  | [optional] |

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

## `updateLoyaltyProgramAsync()`

```php
updateLoyaltyProgramAsync($tenant_id, $loyalty_program_id, $loyalty_program_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a loyalty program

Updates an existing loyalty program by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LoyaltyProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$loyalty_program_id = 'loyalty_program_id_example'; // string
$loyalty_program_update_dto = new \OpenAPI\Client\Model\LoyaltyProgramUpdateDto(); // \OpenAPI\Client\Model\LoyaltyProgramUpdateDto

try {
    $result = $apiInstance->updateLoyaltyProgramAsync($tenant_id, $loyalty_program_id, $loyalty_program_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyProgramsApi->updateLoyaltyProgramAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **loyalty_program_id** | **string**|  | |
| **loyalty_program_update_dto** | [**\OpenAPI\Client\Model\LoyaltyProgramUpdateDto**](../Model/LoyaltyProgramUpdateDto.md)|  | [optional] |

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
