# # PostingExecutionDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**timestamp** | **\DateTime** |  | [optional]
**tenant_id** | **string** |  | [optional]
**enrollment_id** | **string** |  | [optional]
**posting_intent_id** | **string** |  | [optional]
**posting_idempotency_key** | **string** |  | [optional]
**intent_type** | **string** |  | [optional]
**posting_operation** | **string** |  | [optional]
**source_document_type** | **string** |  | [optional]
**source_document_id** | **string** |  | [optional]
**status** | **string** |  | [optional]
**failure_kind** | **string** |  | [optional]
**failure_code** | **string** |  | [optional]
**retryable** | **bool** |  | [optional]
**correlation_id** | **string** |  | [optional]
**causation_id** | **string** |  | [optional]
**received_at_utc** | **\DateTime** |  | [optional]
**processing_started_at_utc** | **\DateTime** |  | [optional]
**completed_at_utc** | **\DateTime** |  | [optional]
**book_results** | [**\OpenAPI\Client\Model\PostingBookResultDto[]**](PostingBookResultDto.md) |  | [optional]
**failure_class** | **string** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
