# # AccountingEntryDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**tenant_id** | **string** |  | [optional]
**enrollment_id** | **string** |  | [optional]
**journal_entry_id** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**account_name** | **string** |  | [optional]
**direction** | **string** |  | [optional]
**description** | **string** |  | [optional]
**transaction_amount** | **float** |  | [optional]
**transaction_currency_id** | **string** |  | [optional]
**functional_amount** | **float** |  | [optional]
**functional_currency_id** | **string** |  | [optional]
**account_amount** | **float** |  | [optional]
**account_currency_id** | **string** |  | [optional]
**reporting_amount_in_usd** | **float** |  | [optional]
**forex_rate** | **float** |  | [optional]
**forex_rates_snapshot** | **string** |  | [optional]
**cost_centre_id** | **string** |  | [optional]
**project_id** | **string** |  | [optional]
**timestamp** | **\DateTime** |  | [optional]
**debit** | **float** |  | [optional] [readonly]
**credit** | **float** |  | [optional] [readonly]
**amount** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**amount_in_usd** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
