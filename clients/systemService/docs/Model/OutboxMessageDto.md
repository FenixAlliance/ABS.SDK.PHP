# # OutboxMessageDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**timestamp** | **\DateTime** |  | [optional]
**tenant_id** | **string** |  | [optional]
**kind** | **string** |  | [optional]
**message_type** | **string** |  | [optional]
**status** | **string** |  | [optional]
**attempts** | **int** |  | [optional]
**max_attempts** | **int** |  | [optional]
**failure_code** | **string** |  | [optional]
**failure_reason** | **string** |  | [optional]
**idempotency_key** | **string** |  | [optional]
**correlation_id** | **string** |  | [optional]
**locked_by** | **string** |  | [optional]
**locked_until_utc** | **\DateTime** |  | [optional]
**available_at_utc** | **\DateTime** |  | [optional]
**created_at_utc** | **\DateTime** |  | [optional]
**last_attempt_at_utc** | **\DateTime** |  | [optional]
**processed_at_utc** | **\DateTime** |  | [optional]
**failed_at_utc** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
