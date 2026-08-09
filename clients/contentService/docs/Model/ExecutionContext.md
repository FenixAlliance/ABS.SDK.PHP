# # ExecutionContext

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_authenticated** | **bool** |  | [optional]
**current_cart_id** | **string** |  | [optional] [readonly]
**current_user_id** | **string** |  | [optional] [readonly]
**current_tenant_id** | **string** |  | [optional] [readonly]
**current_portal_id** | **string** |  | [optional] [readonly]
**current_enrollment_id** | **string** |  | [optional] [readonly]
**currency_id** | **string** |  | [optional] [readonly]
**page_size** | **int** |  | [optional]
**date_format** | **string** |  | [optional]
**currency_format** | **string** |  | [optional]
**date_time_format** | **string** |  | [optional]
**to_date_data_summaries** | **\DateTime** |  | [optional]
**from_date_data_summaries** | **\DateTime** |  | [optional]
**authorization** | [**\OpenAPI\Client\Model\AuthResult**](AuthResult.md) |  | [optional]
**user** | [**\OpenAPI\Client\Model\ExtendedUserDto**](ExtendedUserDto.md) |  | [optional]
**current_tenant** | [**\OpenAPI\Client\Model\ExtendedTenantDto**](ExtendedTenantDto.md) |  | [optional]
**current_enrollment** | [**\OpenAPI\Client\Model\TenantEnrollmentDto**](TenantEnrollmentDto.md) |  | [optional]
**selected_tenant_mappings** | [**\OpenAPI\Client\Model\CrmContext**](CrmContext.md) |  | [optional]
**portal_owner_mappings** | [**\OpenAPI\Client\Model\CrmContext**](CrmContext.md) |  | [optional]
**root_tenant_mappings** | [**\OpenAPI\Client\Model\CrmContext**](CrmContext.md) |  | [optional]
**cart** | [**\OpenAPI\Client\Model\CartDto**](CartDto.md) |  | [optional]
**currency** | [**\OpenAPI\Client\Model\CurrencyDto**](CurrencyDto.md) |  | [optional]
**forex_rates** | [**\OpenAPI\Client\Model\ForexRatesDto**](ForexRatesDto.md) |  | [optional]
**exchange_rate** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**country** | [**\OpenAPI\Client\Model\CountryDto**](CountryDto.md) |  | [optional]
**root_tenant** | [**\OpenAPI\Client\Model\TenantDto**](TenantDto.md) |  | [optional]
**current_portal** | [**\OpenAPI\Client\Model\WebPortalDto**](WebPortalDto.md) |  | [optional]
**tenants** | [**\OpenAPI\Client\Model\ExtendedTenantDto[]**](ExtendedTenantDto.md) |  | [optional]
**enrollments** | [**\OpenAPI\Client\Model\ExtendedTenantEnrollmentDto[]**](ExtendedTenantEnrollmentDto.md) |  | [optional]
**available_portals** | [**\OpenAPI\Client\Model\WebPortalDto[]**](WebPortalDto.md) |  | [optional]
**invitations** | [**\OpenAPI\Client\Model\ExtendedInviteDto[]**](ExtendedInviteDto.md) |  | [optional]
**granted_permissions** | **string[]** |  | [optional]
**accessible_features** | [**\OpenAPI\Client\Model\SuiteLicenseFeatureDto[]**](SuiteLicenseFeatureDto.md) |  | [optional]
**culture_name** | **string** |  | [optional] [readonly]
**timezone_id** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
