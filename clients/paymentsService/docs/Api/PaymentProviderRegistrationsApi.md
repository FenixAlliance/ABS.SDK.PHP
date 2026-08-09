# OpenAPI\Client\PaymentProviderRegistrationsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAsync()**](PaymentProviderRegistrationsApi.md#createAsync) | **POST** /api/v2/PaymentsService/PaymentProviderRegistrations | Provisions a provider webhook registration |
| [**getAsync()**](PaymentProviderRegistrationsApi.md#getAsync) | **GET** /api/v2/PaymentsService/PaymentProviderRegistrations | Lists the tenant&#39;s provider registrations |
| [**getCountAsync()**](PaymentProviderRegistrationsApi.md#getCountAsync) | **GET** /api/v2/PaymentsService/PaymentProviderRegistrations/Count | Counts the tenant&#39;s provider registrations |
| [**rotateKeyAsync()**](PaymentProviderRegistrationsApi.md#rotateKeyAsync) | **POST** /api/v2/PaymentsService/PaymentProviderRegistrations/{registrationId}/RotateKey | Rotates a registration&#39;s webhook key |


## `createAsync()`

```php
createAsync($tenant_id, $create_provider_webhook_registration_request): \OpenAPI\Client\Model\ProviderWebhookRegistrationCreatedDtoEnvelope
```

Provisions a provider webhook registration

Stores the BYO signing secret in the tenant options store, creates + activates the registration, and reveals the one-time plaintext webhook key plus its fully-composed inbound URL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentProviderRegistrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$create_provider_webhook_registration_request = new \OpenAPI\Client\Model\CreateProviderWebhookRegistrationRequest(); // \OpenAPI\Client\Model\CreateProviderWebhookRegistrationRequest

try {
    $result = $apiInstance->createAsync($tenant_id, $create_provider_webhook_registration_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentProviderRegistrationsApi->createAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **create_provider_webhook_registration_request** | [**\OpenAPI\Client\Model\CreateProviderWebhookRegistrationRequest**](../Model/CreateProviderWebhookRegistrationRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProviderWebhookRegistrationCreatedDtoEnvelope**](../Model/ProviderWebhookRegistrationCreatedDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAsync()`

```php
getAsync($tenant_id, $payment_provider_registration_dto_collection_query_parameters): \OpenAPI\Client\Model\PaymentProviderRegistrationDtoListEnvelope
```

Lists the tenant's provider registrations

Gets all provider registrations for the current tenant with OData support (no secret is ever returned).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentProviderRegistrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$payment_provider_registration_dto_collection_query_parameters = new \OpenAPI\Client\Model\PaymentProviderRegistrationDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\PaymentProviderRegistrationDtoCollectionQueryParameters

try {
    $result = $apiInstance->getAsync($tenant_id, $payment_provider_registration_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentProviderRegistrationsApi->getAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **payment_provider_registration_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\PaymentProviderRegistrationDtoCollectionQueryParameters**](../Model/PaymentProviderRegistrationDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaymentProviderRegistrationDtoListEnvelope**](../Model/PaymentProviderRegistrationDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCountAsync()`

```php
getCountAsync($tenant_id, $payment_provider_registration_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Counts the tenant's provider registrations

Gets the count of provider registrations for the current tenant (OData sibling of the list).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentProviderRegistrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$payment_provider_registration_dto_collection_query_parameters = new \OpenAPI\Client\Model\PaymentProviderRegistrationDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\PaymentProviderRegistrationDtoCollectionQueryParameters

try {
    $result = $apiInstance->getCountAsync($tenant_id, $payment_provider_registration_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentProviderRegistrationsApi->getCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **payment_provider_registration_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\PaymentProviderRegistrationDtoCollectionQueryParameters**](../Model/PaymentProviderRegistrationDtoCollectionQueryParameters.md)|  | [optional] |

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

## `rotateKeyAsync()`

```php
rotateKeyAsync($tenant_id, $registration_id): \OpenAPI\Client\Model\ProviderWebhookRegistrationCreatedDtoEnvelope
```

Rotates a registration's webhook key

Mints a fresh webhook key (invalidating the previous one) and reveals it once, plus its composed URL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentProviderRegistrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$registration_id = 'registration_id_example'; // string

try {
    $result = $apiInstance->rotateKeyAsync($tenant_id, $registration_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentProviderRegistrationsApi->rotateKeyAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **registration_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ProviderWebhookRegistrationCreatedDtoEnvelope**](../Model/ProviderWebhookRegistrationCreatedDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
