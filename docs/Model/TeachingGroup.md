# TeachingGroup

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | Descriminator | [optional] [default to 'teaching_group']
**id** | **int** | Internal stable ID | [optional] 
**name** | **string** | Name of teaching group | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | The start date of the teaching group | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | The end date of the teaching group | [optional] 
**academic_year_id** | **int** | The ID of the academic year | [optional] 
**supervisor_ids** | **int[]** | The IDs of supervisors (staff members) associated with the teaching group | [optional] 
**student_ids** | **int[]** | The IDs of members (students) associated with the teaching group | [optional] 
**subject** | [**\Assembly\Client\Model\Subject**](Subject.md) |  | [optional] 
**mis_level** | **string** | The official examination or assessment \&quot;level\&quot; of the teaching group taken directly from the MIS | [optional] 
**assessment** | [**\Assembly\Client\Model\Assessment**](Assessment.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


