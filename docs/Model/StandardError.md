# StandardError

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error** | **string** | An indication of error, such as:  - &#x60;invalid_request&#x60; (401, no API token presented in header) - &#x60;invalid_token&#x60; (401, bad token presented in header) - &#x60;insufficient_scope&#x60; (401, asked for more data than authorized) - &#x60;unsupported_version&#x60; (406, bad API version in accept header) | [optional] 
**message** | **string** | Explanation of the error, such as:  - &#x60;malformed date parameter: &#39;32-13-2019&#39;&#x60; (400) - &#x60;an access_token is required.&#x60; (401) - &#x60;not found&#x60; (404) | [optional] 
**data** | [**\Assembly\Client\Model\StandardErrorData**](StandardErrorData.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


