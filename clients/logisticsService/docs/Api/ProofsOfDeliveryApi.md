# OpenAPI\Client\ProofsOfDeliveryApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addProofOfDeliveryLineAsync()**](ProofsOfDeliveryApi.md#addProofOfDeliveryLineAsync) | **POST** /api/v2/LogisticsService/ProofsOfDelivery/{podId}/Lines | Add a line to proof of delivery |
| [**attachDeliveryNoteAsync()**](ProofsOfDeliveryApi.md#attachDeliveryNoteAsync) | **POST** /api/v2/LogisticsService/ProofsOfDelivery/{podId}/DeliveryNotes/{noteId} | Attach a delivery note |
| [**createProofOfDeliveryAsync()**](ProofsOfDeliveryApi.md#createProofOfDeliveryAsync) | **POST** /api/v2/LogisticsService/ProofsOfDelivery | Create a proof of delivery |
| [**deleteProofOfDeliveryAsync()**](ProofsOfDeliveryApi.md#deleteProofOfDeliveryAsync) | **DELETE** /api/v2/LogisticsService/ProofsOfDelivery/{podId} | Delete a proof of delivery |
| [**detachDeliveryNoteAsync()**](ProofsOfDeliveryApi.md#detachDeliveryNoteAsync) | **DELETE** /api/v2/LogisticsService/ProofsOfDelivery/{podId}/DeliveryNotes/{noteId} | Detach a delivery note |
| [**disputeProofOfDeliveryAsync()**](ProofsOfDeliveryApi.md#disputeProofOfDeliveryAsync) | **POST** /api/v2/LogisticsService/ProofsOfDelivery/{podId}/Dispute | Dispute a proof of delivery |
| [**getProofOfDeliveryByIdAsync()**](ProofsOfDeliveryApi.md#getProofOfDeliveryByIdAsync) | **GET** /api/v2/LogisticsService/ProofsOfDelivery/{podId} | Get proof of delivery by ID |
| [**getProofOfDeliveryDeliveryNotesAsync()**](ProofsOfDeliveryApi.md#getProofOfDeliveryDeliveryNotesAsync) | **GET** /api/v2/LogisticsService/ProofsOfDelivery/{podId}/DeliveryNotes | Get attached delivery notes |
| [**getProofOfDeliveryDeliveryNotesCountAsync()**](ProofsOfDeliveryApi.md#getProofOfDeliveryDeliveryNotesCountAsync) | **GET** /api/v2/LogisticsService/ProofsOfDelivery/{podId}/DeliveryNotes/Count | Get delivery notes count |
| [**getProofOfDeliveryLinesAsync()**](ProofsOfDeliveryApi.md#getProofOfDeliveryLinesAsync) | **GET** /api/v2/LogisticsService/ProofsOfDelivery/{podId}/Lines | Get proof of delivery lines |
| [**getProofOfDeliveryLinesCountAsync()**](ProofsOfDeliveryApi.md#getProofOfDeliveryLinesCountAsync) | **GET** /api/v2/LogisticsService/ProofsOfDelivery/{podId}/Lines/Count | Get proof of delivery lines count |
| [**getProofsOfDeliveryAsync()**](ProofsOfDeliveryApi.md#getProofsOfDeliveryAsync) | **GET** /api/v2/LogisticsService/ProofsOfDelivery | Get all proofs of delivery |
| [**getProofsOfDeliveryCountAsync()**](ProofsOfDeliveryApi.md#getProofsOfDeliveryCountAsync) | **GET** /api/v2/LogisticsService/ProofsOfDelivery/Count | Get proofs of delivery count |
| [**patchProofOfDeliveryAsync()**](ProofsOfDeliveryApi.md#patchProofOfDeliveryAsync) | **PATCH** /api/v2/LogisticsService/ProofsOfDelivery/{podId} | Patch a proof of delivery |
| [**patchProofOfDeliveryLineAsync()**](ProofsOfDeliveryApi.md#patchProofOfDeliveryLineAsync) | **PATCH** /api/v2/LogisticsService/ProofsOfDelivery/{podId}/Lines/{lineId} | Patch a proof of delivery line |
| [**rejectProofOfDeliveryAsync()**](ProofsOfDeliveryApi.md#rejectProofOfDeliveryAsync) | **POST** /api/v2/LogisticsService/ProofsOfDelivery/{podId}/Reject | Reject a proof of delivery |
| [**removeProofOfDeliveryLineAsync()**](ProofsOfDeliveryApi.md#removeProofOfDeliveryLineAsync) | **DELETE** /api/v2/LogisticsService/ProofsOfDelivery/{podId}/Lines/{lineId} | Remove a proof of delivery line |
| [**signProofOfDeliveryAsync()**](ProofsOfDeliveryApi.md#signProofOfDeliveryAsync) | **POST** /api/v2/LogisticsService/ProofsOfDelivery/{podId}/Sign | Sign a proof of delivery |
| [**updateProofOfDeliveryAsync()**](ProofsOfDeliveryApi.md#updateProofOfDeliveryAsync) | **PUT** /api/v2/LogisticsService/ProofsOfDelivery/{podId} | Update a proof of delivery |
| [**updateProofOfDeliveryLineAsync()**](ProofsOfDeliveryApi.md#updateProofOfDeliveryLineAsync) | **PUT** /api/v2/LogisticsService/ProofsOfDelivery/{podId}/Lines/{lineId} | Update a proof of delivery line |


## `addProofOfDeliveryLineAsync()`

```php
addProofOfDeliveryLineAsync($tenant_id, $pod_id, $api_version, $x_api_version, $proof_of_delivery_line_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Add a line to proof of delivery

Adds a new line to a proof of delivery.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProofsOfDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$pod_id = 'pod_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$proof_of_delivery_line_create_dto = new \OpenAPI\Client\Model\ProofOfDeliveryLineCreateDto(); // \OpenAPI\Client\Model\ProofOfDeliveryLineCreateDto

try {
    $result = $apiInstance->addProofOfDeliveryLineAsync($tenant_id, $pod_id, $api_version, $x_api_version, $proof_of_delivery_line_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProofsOfDeliveryApi->addProofOfDeliveryLineAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **pod_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **proof_of_delivery_line_create_dto** | [**\OpenAPI\Client\Model\ProofOfDeliveryLineCreateDto**](../Model/ProofOfDeliveryLineCreateDto.md)|  | [optional] |

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

## `attachDeliveryNoteAsync()`

```php
attachDeliveryNoteAsync($tenant_id, $pod_id, $note_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Attach a delivery note

Attaches a delivery note to a proof of delivery.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProofsOfDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$pod_id = 'pod_id_example'; // string
$note_id = 'note_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->attachDeliveryNoteAsync($tenant_id, $pod_id, $note_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProofsOfDeliveryApi->attachDeliveryNoteAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **pod_id** | **string**|  | |
| **note_id** | **string**|  | |
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

## `createProofOfDeliveryAsync()`

```php
createProofOfDeliveryAsync($tenant_id, $api_version, $x_api_version, $proof_of_delivery_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a proof of delivery

Creates a new proof of delivery for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProofsOfDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$proof_of_delivery_create_dto = new \OpenAPI\Client\Model\ProofOfDeliveryCreateDto(); // \OpenAPI\Client\Model\ProofOfDeliveryCreateDto

try {
    $result = $apiInstance->createProofOfDeliveryAsync($tenant_id, $api_version, $x_api_version, $proof_of_delivery_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProofsOfDeliveryApi->createProofOfDeliveryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **proof_of_delivery_create_dto** | [**\OpenAPI\Client\Model\ProofOfDeliveryCreateDto**](../Model/ProofOfDeliveryCreateDto.md)|  | [optional] |

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

## `deleteProofOfDeliveryAsync()`

```php
deleteProofOfDeliveryAsync($tenant_id, $pod_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a proof of delivery

Deletes a proof of delivery.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProofsOfDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$pod_id = 'pod_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteProofOfDeliveryAsync($tenant_id, $pod_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProofsOfDeliveryApi->deleteProofOfDeliveryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **pod_id** | **string**|  | |
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

## `detachDeliveryNoteAsync()`

```php
detachDeliveryNoteAsync($tenant_id, $pod_id, $note_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Detach a delivery note

Detaches a delivery note from a proof of delivery.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProofsOfDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$pod_id = 'pod_id_example'; // string
$note_id = 'note_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->detachDeliveryNoteAsync($tenant_id, $pod_id, $note_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProofsOfDeliveryApi->detachDeliveryNoteAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **pod_id** | **string**|  | |
| **note_id** | **string**|  | |
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

## `disputeProofOfDeliveryAsync()`

```php
disputeProofOfDeliveryAsync($tenant_id, $pod_id, $api_version, $x_api_version, $dispute_proof_of_delivery_request): \OpenAPI\Client\Model\EmptyEnvelope
```

Dispute a proof of delivery

Disputes a proof of delivery.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProofsOfDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$pod_id = 'pod_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$dispute_proof_of_delivery_request = new \OpenAPI\Client\Model\DisputeProofOfDeliveryRequest(); // \OpenAPI\Client\Model\DisputeProofOfDeliveryRequest

try {
    $result = $apiInstance->disputeProofOfDeliveryAsync($tenant_id, $pod_id, $api_version, $x_api_version, $dispute_proof_of_delivery_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProofsOfDeliveryApi->disputeProofOfDeliveryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **pod_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **dispute_proof_of_delivery_request** | [**\OpenAPI\Client\Model\DisputeProofOfDeliveryRequest**](../Model/DisputeProofOfDeliveryRequest.md)|  | [optional] |

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

## `getProofOfDeliveryByIdAsync()`

```php
getProofOfDeliveryByIdAsync($tenant_id, $pod_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ProofOfDeliveryDtoEnvelope
```

Get proof of delivery by ID

Retrieves a specific proof of delivery by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProofsOfDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$pod_id = 'pod_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getProofOfDeliveryByIdAsync($tenant_id, $pod_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProofsOfDeliveryApi->getProofOfDeliveryByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **pod_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProofOfDeliveryDtoEnvelope**](../Model/ProofOfDeliveryDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProofOfDeliveryDeliveryNotesAsync()`

```php
getProofOfDeliveryDeliveryNotesAsync($tenant_id, $pod_id, $api_version, $x_api_version): \OpenAPI\Client\Model\DeliveryNoteDtoListEnvelope
```

Get attached delivery notes

Retrieves all delivery notes attached to a proof of delivery.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProofsOfDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$pod_id = 'pod_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getProofOfDeliveryDeliveryNotesAsync($tenant_id, $pod_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProofsOfDeliveryApi->getProofOfDeliveryDeliveryNotesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **pod_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DeliveryNoteDtoListEnvelope**](../Model/DeliveryNoteDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProofOfDeliveryDeliveryNotesCountAsync()`

```php
getProofOfDeliveryDeliveryNotesCountAsync($tenant_id, $pod_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get delivery notes count

Returns the count of delivery notes attached to a proof of delivery.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProofsOfDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$pod_id = 'pod_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getProofOfDeliveryDeliveryNotesCountAsync($tenant_id, $pod_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProofsOfDeliveryApi->getProofOfDeliveryDeliveryNotesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **pod_id** | **string**|  | |
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

## `getProofOfDeliveryLinesAsync()`

```php
getProofOfDeliveryLinesAsync($tenant_id, $pod_id, $api_version, $x_api_version, $proof_of_delivery_line_dto_collection_query_parameters): \OpenAPI\Client\Model\ProofOfDeliveryLineDtoListEnvelope
```

Get proof of delivery lines

Retrieves all lines for a specific proof of delivery.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProofsOfDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$pod_id = 'pod_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$proof_of_delivery_line_dto_collection_query_parameters = new \OpenAPI\Client\Model\ProofOfDeliveryLineDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ProofOfDeliveryLineDtoCollectionQueryParameters

try {
    $result = $apiInstance->getProofOfDeliveryLinesAsync($tenant_id, $pod_id, $api_version, $x_api_version, $proof_of_delivery_line_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProofsOfDeliveryApi->getProofOfDeliveryLinesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **pod_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **proof_of_delivery_line_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ProofOfDeliveryLineDtoCollectionQueryParameters**](../Model/ProofOfDeliveryLineDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProofOfDeliveryLineDtoListEnvelope**](../Model/ProofOfDeliveryLineDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProofOfDeliveryLinesCountAsync()`

```php
getProofOfDeliveryLinesCountAsync($tenant_id, $pod_id, $api_version, $x_api_version, $proof_of_delivery_line_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get proof of delivery lines count

Returns the count of lines for a specific proof of delivery.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProofsOfDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$pod_id = 'pod_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$proof_of_delivery_line_dto_collection_query_parameters = new \OpenAPI\Client\Model\ProofOfDeliveryLineDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ProofOfDeliveryLineDtoCollectionQueryParameters

try {
    $result = $apiInstance->getProofOfDeliveryLinesCountAsync($tenant_id, $pod_id, $api_version, $x_api_version, $proof_of_delivery_line_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProofsOfDeliveryApi->getProofOfDeliveryLinesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **pod_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **proof_of_delivery_line_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ProofOfDeliveryLineDtoCollectionQueryParameters**](../Model/ProofOfDeliveryLineDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Int32Envelope**](../Model/Int32Envelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProofsOfDeliveryAsync()`

```php
getProofsOfDeliveryAsync($tenant_id, $api_version, $x_api_version, $proof_of_delivery_dto_collection_query_parameters): \OpenAPI\Client\Model\ProofOfDeliveryDtoListEnvelope
```

Get all proofs of delivery

Retrieves all proofs of delivery for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProofsOfDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$proof_of_delivery_dto_collection_query_parameters = new \OpenAPI\Client\Model\ProofOfDeliveryDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ProofOfDeliveryDtoCollectionQueryParameters

try {
    $result = $apiInstance->getProofsOfDeliveryAsync($tenant_id, $api_version, $x_api_version, $proof_of_delivery_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProofsOfDeliveryApi->getProofsOfDeliveryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **proof_of_delivery_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ProofOfDeliveryDtoCollectionQueryParameters**](../Model/ProofOfDeliveryDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProofOfDeliveryDtoListEnvelope**](../Model/ProofOfDeliveryDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProofsOfDeliveryCountAsync()`

```php
getProofsOfDeliveryCountAsync($tenant_id, $api_version, $x_api_version, $proof_of_delivery_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get proofs of delivery count

Returns the count of proofs of delivery for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProofsOfDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$proof_of_delivery_dto_collection_query_parameters = new \OpenAPI\Client\Model\ProofOfDeliveryDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ProofOfDeliveryDtoCollectionQueryParameters

try {
    $result = $apiInstance->getProofsOfDeliveryCountAsync($tenant_id, $api_version, $x_api_version, $proof_of_delivery_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProofsOfDeliveryApi->getProofsOfDeliveryCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **proof_of_delivery_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ProofOfDeliveryDtoCollectionQueryParameters**](../Model/ProofOfDeliveryDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Int32Envelope**](../Model/Int32Envelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchProofOfDeliveryAsync()`

```php
patchProofOfDeliveryAsync($tenant_id, $pod_id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a proof of delivery

Partially updates an existing proof of delivery using JSON Patch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProofsOfDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$pod_id = 'pod_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchProofOfDeliveryAsync($tenant_id, $pod_id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProofsOfDeliveryApi->patchProofOfDeliveryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **pod_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **patch_operation** | [**\OpenAPI\Client\Model\PatchOperation[]**](../Model/PatchOperation.md)|  | [optional] |

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

## `patchProofOfDeliveryLineAsync()`

```php
patchProofOfDeliveryLineAsync($tenant_id, $pod_id, $line_id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a proof of delivery line

Partially updates an existing proof of delivery line using JSON Patch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProofsOfDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$pod_id = 'pod_id_example'; // string
$line_id = 'line_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchProofOfDeliveryLineAsync($tenant_id, $pod_id, $line_id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProofsOfDeliveryApi->patchProofOfDeliveryLineAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **pod_id** | **string**|  | |
| **line_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **patch_operation** | [**\OpenAPI\Client\Model\PatchOperation[]**](../Model/PatchOperation.md)|  | [optional] |

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

## `rejectProofOfDeliveryAsync()`

```php
rejectProofOfDeliveryAsync($tenant_id, $pod_id, $api_version, $x_api_version, $reject_proof_of_delivery_request): \OpenAPI\Client\Model\EmptyEnvelope
```

Reject a proof of delivery

Rejects a proof of delivery.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProofsOfDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$pod_id = 'pod_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$reject_proof_of_delivery_request = new \OpenAPI\Client\Model\RejectProofOfDeliveryRequest(); // \OpenAPI\Client\Model\RejectProofOfDeliveryRequest

try {
    $result = $apiInstance->rejectProofOfDeliveryAsync($tenant_id, $pod_id, $api_version, $x_api_version, $reject_proof_of_delivery_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProofsOfDeliveryApi->rejectProofOfDeliveryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **pod_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **reject_proof_of_delivery_request** | [**\OpenAPI\Client\Model\RejectProofOfDeliveryRequest**](../Model/RejectProofOfDeliveryRequest.md)|  | [optional] |

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

## `removeProofOfDeliveryLineAsync()`

```php
removeProofOfDeliveryLineAsync($tenant_id, $pod_id, $line_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Remove a proof of delivery line

Removes a line from a proof of delivery.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProofsOfDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$pod_id = 'pod_id_example'; // string
$line_id = 'line_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->removeProofOfDeliveryLineAsync($tenant_id, $pod_id, $line_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProofsOfDeliveryApi->removeProofOfDeliveryLineAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **pod_id** | **string**|  | |
| **line_id** | **string**|  | |
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

## `signProofOfDeliveryAsync()`

```php
signProofOfDeliveryAsync($tenant_id, $pod_id, $api_version, $x_api_version, $sign_proof_of_delivery_request): \OpenAPI\Client\Model\EmptyEnvelope
```

Sign a proof of delivery

Signs a proof of delivery.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProofsOfDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$pod_id = 'pod_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$sign_proof_of_delivery_request = new \OpenAPI\Client\Model\SignProofOfDeliveryRequest(); // \OpenAPI\Client\Model\SignProofOfDeliveryRequest

try {
    $result = $apiInstance->signProofOfDeliveryAsync($tenant_id, $pod_id, $api_version, $x_api_version, $sign_proof_of_delivery_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProofsOfDeliveryApi->signProofOfDeliveryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **pod_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **sign_proof_of_delivery_request** | [**\OpenAPI\Client\Model\SignProofOfDeliveryRequest**](../Model/SignProofOfDeliveryRequest.md)|  | [optional] |

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

## `updateProofOfDeliveryAsync()`

```php
updateProofOfDeliveryAsync($tenant_id, $pod_id, $api_version, $x_api_version, $proof_of_delivery_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a proof of delivery

Updates an existing proof of delivery.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProofsOfDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$pod_id = 'pod_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$proof_of_delivery_update_dto = new \OpenAPI\Client\Model\ProofOfDeliveryUpdateDto(); // \OpenAPI\Client\Model\ProofOfDeliveryUpdateDto

try {
    $result = $apiInstance->updateProofOfDeliveryAsync($tenant_id, $pod_id, $api_version, $x_api_version, $proof_of_delivery_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProofsOfDeliveryApi->updateProofOfDeliveryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **pod_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **proof_of_delivery_update_dto** | [**\OpenAPI\Client\Model\ProofOfDeliveryUpdateDto**](../Model/ProofOfDeliveryUpdateDto.md)|  | [optional] |

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

## `updateProofOfDeliveryLineAsync()`

```php
updateProofOfDeliveryLineAsync($tenant_id, $pod_id, $line_id, $api_version, $x_api_version, $proof_of_delivery_line_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a proof of delivery line

Updates an existing line on a proof of delivery.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProofsOfDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$pod_id = 'pod_id_example'; // string
$line_id = 'line_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$proof_of_delivery_line_update_dto = new \OpenAPI\Client\Model\ProofOfDeliveryLineUpdateDto(); // \OpenAPI\Client\Model\ProofOfDeliveryLineUpdateDto

try {
    $result = $apiInstance->updateProofOfDeliveryLineAsync($tenant_id, $pod_id, $line_id, $api_version, $x_api_version, $proof_of_delivery_line_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProofsOfDeliveryApi->updateProofOfDeliveryLineAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **pod_id** | **string**|  | |
| **line_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **proof_of_delivery_line_update_dto** | [**\OpenAPI\Client\Model\ProofOfDeliveryLineUpdateDto**](../Model/ProofOfDeliveryLineUpdateDto.md)|  | [optional] |

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
