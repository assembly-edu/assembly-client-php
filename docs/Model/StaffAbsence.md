# StaffAbsence

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | Descriminator | [optional] [default to 'staff_absence']
**id** | **int** | Internal stable ID | [optional] 
**staff_member_id** | **int** | The ID of the staff member who the absence is for | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | The start date of the absence | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | The end date of the absence | [optional] 
**working_days_lost** | **float** | Number of working days that were lost during the absence | [optional] 
**absence_category** | **string** | The category of the absence | [optional] 
**illness_category** | **string** | If the absence category was \&quot;Illness\&quot;, the specific code | [optional] 
**pay_rate** | **string** | Whether or not the staff member was paid for the absence | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


