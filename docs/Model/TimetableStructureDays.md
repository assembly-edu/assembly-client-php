# TimetableStructureDays

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | Descriminator | [optional] [default to 'day']
**id** | **int** | Internal stable ID | [optional] 
**short_name** | **string** | The day short name | [optional] 
**long_name** | **string** | The day long name | [optional] 
**display_order** | **int** | The order in which days should be displayed | [optional] 
**occurs_on** | [**\DateTime[]**](\DateTime.md) | An array of dates for when the timetabled day occurs. | [optional] 
**periods** | [**\Assembly\Client\Model\TimetableStructurePeriods[]**](TimetableStructurePeriods.md) | Provides details of the individual periods that make up the day | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


