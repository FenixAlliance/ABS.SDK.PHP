# OpenAPI\Client\NewsletterSubscriptionsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNewsletterSubscriptionAsync()**](NewsletterSubscriptionsApi.md#createNewsletterSubscriptionAsync) | **POST** /api/v2/MarketingService/NewsletterSubscriptions | Create a newsletter subscription |
| [**deleteNewsletterSubscriptionAsync()**](NewsletterSubscriptionsApi.md#deleteNewsletterSubscriptionAsync) | **DELETE** /api/v2/MarketingService/NewsletterSubscriptions/{newsletterSubscriptionId} | Delete a newsletter subscription |
| [**getNewsletterSubscriptionByIdAsync()**](NewsletterSubscriptionsApi.md#getNewsletterSubscriptionByIdAsync) | **GET** /api/v2/MarketingService/NewsletterSubscriptions/{newsletterSubscriptionId} | Get newsletter subscription by ID |
| [**getNewsletterSubscriptionsAsync()**](NewsletterSubscriptionsApi.md#getNewsletterSubscriptionsAsync) | **GET** /api/v2/MarketingService/NewsletterSubscriptions | Get newsletter subscriptions |
| [**getNewsletterSubscriptionsCountAsync()**](NewsletterSubscriptionsApi.md#getNewsletterSubscriptionsCountAsync) | **GET** /api/v2/MarketingService/NewsletterSubscriptions/Count | Get newsletter subscriptions count |
| [**updateNewsletterSubscriptionAsync()**](NewsletterSubscriptionsApi.md#updateNewsletterSubscriptionAsync) | **PUT** /api/v2/MarketingService/NewsletterSubscriptions/{newsletterSubscriptionId} | Update a newsletter subscription |


## `createNewsletterSubscriptionAsync()`

```php
createNewsletterSubscriptionAsync($tenant_id, $newsletter_subscription_create_dto, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a newsletter subscription

Creates a new newsletter subscription for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NewsletterSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$newsletter_subscription_create_dto = new \OpenAPI\Client\Model\NewsletterSubscriptionCreateDto(); // \OpenAPI\Client\Model\NewsletterSubscriptionCreateDto
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->createNewsletterSubscriptionAsync($tenant_id, $newsletter_subscription_create_dto, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterSubscriptionsApi->createNewsletterSubscriptionAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **newsletter_subscription_create_dto** | [**\OpenAPI\Client\Model\NewsletterSubscriptionCreateDto**](../Model/NewsletterSubscriptionCreateDto.md)|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

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

## `deleteNewsletterSubscriptionAsync()`

```php
deleteNewsletterSubscriptionAsync($tenant_id, $newsletter_subscription_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a newsletter subscription

Deletes a newsletter subscription by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NewsletterSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$newsletter_subscription_id = 'newsletter_subscription_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteNewsletterSubscriptionAsync($tenant_id, $newsletter_subscription_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterSubscriptionsApi->deleteNewsletterSubscriptionAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **newsletter_subscription_id** | **string**|  | |
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

## `getNewsletterSubscriptionByIdAsync()`

```php
getNewsletterSubscriptionByIdAsync($tenant_id, $newsletter_subscription_id, $api_version, $x_api_version): \OpenAPI\Client\Model\NewsletterSubscriptionDtoEnvelope
```

Get newsletter subscription by ID

Retrieves the details of a specific newsletter subscription by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NewsletterSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$newsletter_subscription_id = 'newsletter_subscription_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getNewsletterSubscriptionByIdAsync($tenant_id, $newsletter_subscription_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterSubscriptionsApi->getNewsletterSubscriptionByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **newsletter_subscription_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\NewsletterSubscriptionDtoEnvelope**](../Model/NewsletterSubscriptionDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNewsletterSubscriptionsAsync()`

```php
getNewsletterSubscriptionsAsync($tenant_id, $api_version, $x_api_version, $newsletter_subscription_dto_collection_query_parameters): \OpenAPI\Client\Model\NewsletterSubscriptionDtoListEnvelope
```

Get newsletter subscriptions

Retrieves a collection of newsletter subscriptions for the specified tenant using OData query options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NewsletterSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$newsletter_subscription_dto_collection_query_parameters = new \OpenAPI\Client\Model\NewsletterSubscriptionDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\NewsletterSubscriptionDtoCollectionQueryParameters

try {
    $result = $apiInstance->getNewsletterSubscriptionsAsync($tenant_id, $api_version, $x_api_version, $newsletter_subscription_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterSubscriptionsApi->getNewsletterSubscriptionsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **newsletter_subscription_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\NewsletterSubscriptionDtoCollectionQueryParameters**](../Model/NewsletterSubscriptionDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\NewsletterSubscriptionDtoListEnvelope**](../Model/NewsletterSubscriptionDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNewsletterSubscriptionsCountAsync()`

```php
getNewsletterSubscriptionsCountAsync($tenant_id, $api_version, $x_api_version, $newsletter_subscription_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get newsletter subscriptions count

Returns the count of newsletter subscriptions for the specified tenant using OData query options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NewsletterSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$newsletter_subscription_dto_collection_query_parameters = new \OpenAPI\Client\Model\NewsletterSubscriptionDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\NewsletterSubscriptionDtoCollectionQueryParameters

try {
    $result = $apiInstance->getNewsletterSubscriptionsCountAsync($tenant_id, $api_version, $x_api_version, $newsletter_subscription_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterSubscriptionsApi->getNewsletterSubscriptionsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **newsletter_subscription_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\NewsletterSubscriptionDtoCollectionQueryParameters**](../Model/NewsletterSubscriptionDtoCollectionQueryParameters.md)|  | [optional] |

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

## `updateNewsletterSubscriptionAsync()`

```php
updateNewsletterSubscriptionAsync($tenant_id, $newsletter_subscription_id, $newsletter_subscription_update_dto, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a newsletter subscription

Updates an existing newsletter subscription by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NewsletterSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$newsletter_subscription_id = 'newsletter_subscription_id_example'; // string
$newsletter_subscription_update_dto = new \OpenAPI\Client\Model\NewsletterSubscriptionUpdateDto(); // \OpenAPI\Client\Model\NewsletterSubscriptionUpdateDto
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->updateNewsletterSubscriptionAsync($tenant_id, $newsletter_subscription_id, $newsletter_subscription_update_dto, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterSubscriptionsApi->updateNewsletterSubscriptionAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **newsletter_subscription_id** | **string**|  | |
| **newsletter_subscription_update_dto** | [**\OpenAPI\Client\Model\NewsletterSubscriptionUpdateDto**](../Model/NewsletterSubscriptionUpdateDto.md)|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

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
