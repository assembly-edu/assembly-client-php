# StudentMedicalCondition

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | Descriminator | [optional] [default to 'student_medical_condition']
**id** | **int** | Internal stable ID | [optional] 
**information_received_on** | [**\DateTime**](\DateTime.md) | The date and time that the medical condition was recorded within the MIS | [optional] 
**code** | **string** | The code of the medical condition | [optional] 
**name** | **string** | The name of the medical condition | [optional] 
**notes** | [**\Assembly\Client\Model\StudentMedicalNote[]**](StudentMedicalNote.md) | Additional information attached to the medical condition | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


