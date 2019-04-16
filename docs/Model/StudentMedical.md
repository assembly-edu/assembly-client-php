# StudentMedical

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | Descriminator | [optional] [default to 'student_medical']
**nhs_number** | **string** | Student&#39;s NHS number | [optional] 
**is_pregnant** | **bool** | If the student has been marked as pregnant | [optional] 
**has_emergency_consent** | **bool** | Whether or not medical consent has been given | [optional] 
**conditions** | [**\Assembly\Client\Model\StudentMedicalCondition[]**](StudentMedicalCondition.md) | The medical conditions associated with the student | [optional] 
**dietary_needs** | **string[]** | The dietary need codes associated with the student | [optional] 
**notes** | [**\Assembly\Client\Model\StudentMedicalNote[]**](StudentMedicalNote.md) | Additional information attached to the medical condition | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


