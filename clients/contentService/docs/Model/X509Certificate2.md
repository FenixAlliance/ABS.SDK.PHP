# # X509Certificate2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**handle** | **object** |  | [optional]
**issuer** | **string** |  | [optional] [readonly]
**subject** | **string** |  | [optional] [readonly]
**serial_number_bytes** | [**\OpenAPI\Client\Model\ByteReadOnlyMemory**](ByteReadOnlyMemory.md) |  | [optional]
**archived** | **bool** |  | [optional]
**extensions** | [**\OpenAPI\Client\Model\X509Extension[]**](X509Extension.md) |  | [optional] [readonly]
**friendly_name** | **string** |  | [optional]
**has_private_key** | **bool** |  | [optional] [readonly]
**private_key** | [**\OpenAPI\Client\Model\AsymmetricAlgorithm**](AsymmetricAlgorithm.md) |  | [optional]
**issuer_name** | [**\OpenAPI\Client\Model\X500DistinguishedName**](X500DistinguishedName.md) |  | [optional]
**not_after** | **\DateTime** |  | [optional] [readonly]
**not_before** | **\DateTime** |  | [optional] [readonly]
**public_key** | [**\OpenAPI\Client\Model\PublicKey**](PublicKey.md) |  | [optional]
**raw_data** | **string** |  | [optional] [readonly]
**raw_data_memory** | [**\OpenAPI\Client\Model\ByteReadOnlyMemory**](ByteReadOnlyMemory.md) |  | [optional]
**serial_number** | **string** |  | [optional] [readonly]
**signature_algorithm** | [**\OpenAPI\Client\Model\Oid**](Oid.md) |  | [optional]
**subject_name** | [**\OpenAPI\Client\Model\X500DistinguishedName**](X500DistinguishedName.md) |  | [optional]
**thumbprint** | **string** |  | [optional] [readonly]
**version** | **int** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
