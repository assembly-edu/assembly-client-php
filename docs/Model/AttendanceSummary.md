# AttendanceSummary

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | Descriminator | [optional] [default to 'attendance_summary']
**id** | **int** | Internal stable ID | [optional] 
**student_id** | **int** | The ID of the student | [optional] 
**registration_group_id** | **int** | The ID of the student&#39;s registration group | [optional] 
**academic_year_id** | **int** | The ID of the academic year | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | Start date for the attendance summary | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | End date for the attendance summary | [optional] 
**possible_sessions** | **float** | Number of possible sessions that could have been attended | [optional] 
**attended_sessions** | **float** | Number of sessions with present mark recorded | [optional] 
**late_sessions** | **float** | Number of sessions with late mark recorded | [optional] 
**authorised_absence_sessions** | **float** | Number of sessions with authorised absence recorded | [optional] 
**unauthorised_absence_sessions** | **float** | Number of sessions with unauthorised absence recorded | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


