# TimetablePeriods

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | Descriminator | [optional] [default to 'period']
**id** | **int** | Internal stable ID | [optional] 
**short_name** | **string** | The period short name | [optional] 
**long_name** | **string** | The period long name | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | The start time of the period | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | The end time of the period | [optional] 
**lessons** | [**\Assembly\Client\Model\TimetableLessons[]**](TimetableLessons.md) | Provides details of the individual lessons that make up the period | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


