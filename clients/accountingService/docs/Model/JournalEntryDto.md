# # JournalEntryDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**timestamp** | **\DateTime** |  | [optional]
**tenant_id** | **string** |  | [optional]
**enrollment_id** | **string** |  | [optional]
**journal_id** | **string** |  | [optional]
**journal_name** | **string** |  | [optional]
**journal_code** | **string** |  | [optional]
**fiscal_period_id** | **string** |  | [optional]
**financial_book_id** | **string** |  | [optional]
**description** | **string** |  | [optional]
**entry_type** | **string** |  | [optional]
**status** | **string** |  | [optional]
**posting_date** | **\DateTime** |  | [optional]
**is_opening_balance** | **bool** |  | [optional]
**transaction_currency_id** | **string** |  | [optional]
**source_document_type** | **string** |  | [optional]
**source_document_id** | **string** |  | [optional]
**idempotency_key** | **string** |  | [optional]
**reversal_of_journal_entry_id** | **string** |  | [optional]
**posted_by** | **string** |  | [optional]
**forex_rate** | **float** |  | [optional]
**forex_rates_snapshot** | **string** |  | [optional]
**debit_in_usd** | **float** |  | [optional]
**credit_in_usd** | **float** |  | [optional]
**accounting_entries** | [**\OpenAPI\Client\Model\AccountingEntryDto[]**](AccountingEntryDto.md) |  | [optional]
**total_debit** | **float** |  | [optional] [readonly]
**total_credit** | **float** |  | [optional] [readonly]
**total_debit_amount** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**total_credit_amount** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**debit_in_usd_amount** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**credit_in_usd_amount** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
