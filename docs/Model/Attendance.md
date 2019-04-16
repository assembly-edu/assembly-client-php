# Attendance

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | Descriminator | [optional] [default to 'attendance']
**id** | **int** | Internal stable ID | [optional] 
**student_id** | **int** | The ID of the student that the attendance is attached to | [optional] 
**registration_group_id** | **int** | The ID of the subject that the attendance is attached to | [optional] 
**session_date** | [**\DateTime**](\DateTime.md) | The date of the attendance | [optional] 
**session_name** | **string** | Denotes whether the attendance is an AM session or PM session (morning or afternoon) | [optional] 
**attendance_mark** | **string** | The attendance mark standardised to code set CS066/D00225 in CBDS | [optional] 
**minutes_late** | **int** | If the attendance mark is \&quot;L\&quot; for \&quot;Late\&quot;, how many minutes late the student was | [optional] 
**comments** | **string** | Any additional comments | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


