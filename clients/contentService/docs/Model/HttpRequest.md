# # HttpRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**http_context** | [**\OpenAPI\Client\Model\HttpContext**](HttpContext.md) |  | [optional]
**method** | **string** |  | [optional]
**scheme** | **string** |  | [optional]
**is_https** | **bool** |  | [optional]
**host** | [**\OpenAPI\Client\Model\HostString**](HostString.md) |  | [optional]
**path_base** | [**\OpenAPI\Client\Model\PathString**](PathString.md) |  | [optional]
**path** | [**\OpenAPI\Client\Model\PathString**](PathString.md) |  | [optional]
**query_string** | [**\OpenAPI\Client\Model\QueryString**](QueryString.md) |  | [optional]
**query** | [**\OpenAPI\Client\Model\StringStringValuesKeyValuePair[]**](StringStringValuesKeyValuePair.md) |  | [optional]
**protocol** | **string** |  | [optional]
**headers** | **array<string,string[]>** |  | [optional] [readonly]
**cookies** | [**\OpenAPI\Client\Model\StringStringKeyValuePair[]**](StringStringKeyValuePair.md) |  | [optional]
**content_length** | **int** |  | [optional]
**content_type** | **string** |  | [optional]
**body** | **\SplFileObject** |  | [optional]
**body_reader** | **\SplFileObject** |  | [optional] [readonly]
**has_form_content_type** | **bool** |  | [optional] [readonly]
**form** | [**\OpenAPI\Client\Model\StringStringValuesKeyValuePair[]**](StringStringValuesKeyValuePair.md) |  | [optional]
**route_values** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
