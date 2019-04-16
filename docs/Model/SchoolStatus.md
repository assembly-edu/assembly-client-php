# SchoolStatus

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | Descriminator | [optional] [default to 'school_status']
**last_changes_at** | [**\DateTime**](\DateTime.md) | When the data in the Platform was last changed, this may be recent or several days in the past as it depends  on how regularly the school update their MIS records | [optional] 
**last_sync_at** | [**\DateTime**](\DateTime.md) | The last time data has been collected (synced) from the source MIS, typically within the last 24 hours. | [optional] 
**last_sync_status** | **string** | Whether the last sync was a &#x60;success&#x60;, &#x60;failure&#x60;, or that there were &#x60;no_changes&#x60; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


