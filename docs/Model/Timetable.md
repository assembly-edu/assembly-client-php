# Timetable

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | Descriminator | [optional] [default to 'timetable']
**id** | **int** | Internal stable ID | [optional] 
**name** | **string** | The name of the timetable | [optional] 
**description** | **string** | The description of the timetable cycle | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | The start date of the timetable cycle | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | The end date of the timetable cycle | [optional] 
**weeks** | **int** | The number of weeks in the timetable cycle | [optional] 
**days_per_week** | **int** | Number of days per week | [optional] 
**periods_per_day** | **int** | Number of periods per day | [optional] 
**days** | [**\Assembly\Client\Model\TimetableDays[]**](TimetableDays.md) | Provides details of the individual days that make up the timetable | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


