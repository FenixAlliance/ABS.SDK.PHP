# OpenAPI\Client\CourseTeamMembershipsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCourseTeamMembershipAsync()**](CourseTeamMembershipsApi.md#createCourseTeamMembershipAsync) | **POST** /api/v2/LearningService/CourseTeamMemberships | Create a course team membership |
| [**deleteCourseTeamMembershipAsync()**](CourseTeamMembershipsApi.md#deleteCourseTeamMembershipAsync) | **DELETE** /api/v2/LearningService/CourseTeamMemberships/{membershipId} | Delete a course team membership |
| [**getCourseTeamMembershipByIdAsync()**](CourseTeamMembershipsApi.md#getCourseTeamMembershipByIdAsync) | **GET** /api/v2/LearningService/CourseTeamMemberships/{membershipId} | Get course team membership by ID |
| [**getCourseTeamMembershipsAsync()**](CourseTeamMembershipsApi.md#getCourseTeamMembershipsAsync) | **GET** /api/v2/LearningService/CourseTeamMemberships | Get all course team memberships |
| [**getCourseTeamMembershipsCountAsync()**](CourseTeamMembershipsApi.md#getCourseTeamMembershipsCountAsync) | **GET** /api/v2/LearningService/CourseTeamMemberships/Count | Get course team memberships count |
| [**updateCourseTeamMembershipAsync()**](CourseTeamMembershipsApi.md#updateCourseTeamMembershipAsync) | **PUT** /api/v2/LearningService/CourseTeamMemberships/{membershipId} | Update a course team membership |


## `createCourseTeamMembershipAsync()`

```php
createCourseTeamMembershipAsync($tenant_id, $api_version, $x_api_version, $course_team_membership_create_dto)
```

Create a course team membership

Creates a new course team membership for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseTeamMembershipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_team_membership_create_dto = new \OpenAPI\Client\Model\CourseTeamMembershipCreateDto(); // \OpenAPI\Client\Model\CourseTeamMembershipCreateDto

try {
    $apiInstance->createCourseTeamMembershipAsync($tenant_id, $api_version, $x_api_version, $course_team_membership_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling CourseTeamMembershipsApi->createCourseTeamMembershipAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_team_membership_create_dto** | [**\OpenAPI\Client\Model\CourseTeamMembershipCreateDto**](../Model/CourseTeamMembershipCreateDto.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCourseTeamMembershipAsync()`

```php
deleteCourseTeamMembershipAsync($tenant_id, $membership_id, $api_version, $x_api_version)
```

Delete a course team membership

Deletes a course team membership by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseTeamMembershipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$membership_id = 'membership_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteCourseTeamMembershipAsync($tenant_id, $membership_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling CourseTeamMembershipsApi->deleteCourseTeamMembershipAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **membership_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseTeamMembershipByIdAsync()`

```php
getCourseTeamMembershipByIdAsync($membership_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CourseTeamMembershipDto
```

Get course team membership by ID

Retrieves a specific course team membership by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseTeamMembershipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$membership_id = 'membership_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseTeamMembershipByIdAsync($membership_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseTeamMembershipsApi->getCourseTeamMembershipByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **membership_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseTeamMembershipDto**](../Model/CourseTeamMembershipDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseTeamMembershipsAsync()`

```php
getCourseTeamMembershipsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CourseTeamMembershipDto[]
```

Get all course team memberships

Retrieves all course team memberships for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseTeamMembershipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseTeamMembershipsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseTeamMembershipsApi->getCourseTeamMembershipsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseTeamMembershipDto[]**](../Model/CourseTeamMembershipDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseTeamMembershipsCountAsync()`

```php
getCourseTeamMembershipsCountAsync($tenant_id, $api_version, $x_api_version): int
```

Get course team memberships count

Returns the count of course team memberships for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseTeamMembershipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseTeamMembershipsCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseTeamMembershipsApi->getCourseTeamMembershipsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCourseTeamMembershipAsync()`

```php
updateCourseTeamMembershipAsync($tenant_id, $membership_id, $api_version, $x_api_version, $course_team_membership_update_dto)
```

Update a course team membership

Updates an existing course team membership.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseTeamMembershipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$membership_id = 'membership_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_team_membership_update_dto = new \OpenAPI\Client\Model\CourseTeamMembershipUpdateDto(); // \OpenAPI\Client\Model\CourseTeamMembershipUpdateDto

try {
    $apiInstance->updateCourseTeamMembershipAsync($tenant_id, $membership_id, $api_version, $x_api_version, $course_team_membership_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling CourseTeamMembershipsApi->updateCourseTeamMembershipAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **membership_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_team_membership_update_dto** | [**\OpenAPI\Client\Model\CourseTeamMembershipUpdateDto**](../Model/CourseTeamMembershipUpdateDto.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
