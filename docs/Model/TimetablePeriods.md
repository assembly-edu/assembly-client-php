# TimetablePeriods

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | Descriminator | [optional] [default to 'period']
**id** | **int** | Internal stable ID | [optional] 
**short_name** | **string** | The period short name | [optional] 
**long_name** | **string** | The period long name | [optional] 
**start_time** | **string** | The start time of the period | [optional] 
**end_time** | **string** | The end time of the period | [optional] 
**display_order** | **int** | The order in which periods should be displayed | [optional] 
**lessons** | [**\Assembly\Client\Model\TimetableLessons[]**](TimetableLessons.md) | Provides details of the individual lessons that make up the period | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


