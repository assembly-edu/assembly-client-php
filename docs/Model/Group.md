# Group

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | Descriminator | [optional] [default to 'group']
**id** | **int** | Internal stable ID | [optional] 
**name** | **string** | Name of the group | [optional] 
**code** | **string** | The code of the year that the group belongs to | [optional] 
**type** | **string** | The type of group | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | The start date of the group | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | The end date of the group | [optional] 
**supervisors** | [**\Assembly\Client\Model\Supervisor[]**](Supervisor.md) | The IDs of supervisors (staff members) associated with the group and their role | [optional] 
**student_ids** | **int[]** | The IDs of members (students) associated with the group | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


