# StaffMemberQualificationInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | Descriminator | [optional] [default to 'staff_qualification_info']
**teacher_number** | **string** | The DfE Teacher Reference number (also known as GTC number). For members of staff who have one this is a unique identifier | [optional] 
**qt_status** | **bool** | Whether or not the staff member holds Qualified Teacher Status | [optional] 
**hlta_status** | **bool** | Whether or not the staff member holds Higher Level Teaching Assistant Status | [optional] 
**qts_route** | **string** | The route by which a teacher obtains Qualified Teacher Status (e.g. the Graduate Teacher programme). | [optional] 
**qualifications** | [**\Assembly\Client\Model\StaffQualification[]**](StaffQualification.md) | A list of all qualifications/degrees completed by a staff member | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


