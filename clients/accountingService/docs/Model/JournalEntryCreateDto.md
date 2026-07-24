# # JournalEntryCreateDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**timestamp** | **\DateTime** |  | [optional]
**journal_id** | **string** |  |
**fiscal_period_id** | **string** |  |
**transaction_currency_id** | **string** |  |
**description** | **string** |  |
**source_document_type** | **string** |  | [optional]
**source_document_id** | **string** |  | [optional]
**idempotency_key** | **string** |  | [optional]
**is_opening_balance** | **bool** |  | [optional]
**accounting_entries** | [**\OpenAPI\Client\Model\AccountingEntryCreateDto[]**](AccountingEntryCreateDto.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
