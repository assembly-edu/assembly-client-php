# CalendarEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | Descriminator | [optional] [default to 'calendar_event']
**id** | **int** | Internal stable ID | [optional] 
**name** | **string** | This details the user-defined \&quot;category\&quot; that the event is assigned to on SIMS. | [optional] 
**description** | **string** | The name of the instance of the event, usually more detailed and specific than the \&quot;name\&quot; | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | Date and time of when the event starts | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | Date and time of when the event ends | [optional] 
**is_active** | **bool** | Whether the event is active or not | [optional] 
**is_recurrent** | **bool** | Whether the event recurs and (soon) details of recurrences | [optional] 
**mis_type** | [**\Assembly\Client\Model\CalendarEventMisType**](CalendarEventMisType.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


