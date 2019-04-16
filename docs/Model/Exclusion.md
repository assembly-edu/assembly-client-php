# Exclusion

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | Descriminator | [optional] [default to 'exclusion']
**id** | **int** | Internal stable ID | [optional] 
**student_id** | **int** | The ID of the student that the exclusion is attached to | [optional] 
**exclusion_type** | **string** | The exclusions type, where &#x60;Reinstated&#x60; may be from a fixed term or permanent exclusion | [optional] 
**exclusion_reason** | **string** | The exclusion reason, normalized to values as in Pupil Exclusion Reason (CS010/D00024) in CBDS | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | The date on which the exclusions starts | [optional] 
**start_session** | **string** | The session (AM/PM) in which the exclusion starts | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | The date on which the exclusion ends | [optional] 
**end_session** | **string** | The session (AM/PM) in which the exclusion ends | [optional] 
**exclusion_length** | **int** | The total length, in sessions, of the exclusion | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


