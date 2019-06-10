# Student

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | Descriminator | [optional] [default to 'student']
**id** | **int** | Internal stable ID | [optional] 
**year_code** | **string** | The year group the student currently belongs to | [optional] 
**upn** | **string** | Unique Pupil Number (UPN) - a DfE-mandated 13-character code that identifies each pupil | [optional] 
**former_upn** | **string** | The previous UPN where a pupil has held another UPN whilst at a school | [optional] 
**uln** | **string** | Unique Learner Number (ULN) - a LRS-mandated 10-character code that identifies each pupil | [optional] 
**mis_id** | **string** | The ID of a student from the MIS | [optional] 
**pan** | **string** | A student&#39;s \&quot;pupil admission number\&quot;. This field is often exposed in the front end of the MIS, and may be the same as &#x60;mis_id&#x60; | [optional] 
**first_name** | **string** | The first name the student wishes to go by, may be the same as &#x60;legal_first_name&#x60; | [optional] 
**legal_first_name** | **string** | The legal first name of the student | [optional] 
**middle_name** | **string** | The middle name of the student | [optional] 
**last_name** | **string** | The last name the student wishes to go by, may be the same as &#x60;legal_last_name&#x60; | [optional] 
**legal_last_name** | **string** | The legal first name of the student, may be the same as &#x60;legal_last_name&#x60; | [optional] 
**former_last_name** | **string** | The former last name of the student, may be &#x60;null&#x60; | [optional] 
**dob** | [**\DateTime**](\DateTime.md) | The date of birth of the student | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | The date that the student first joined the school | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | The date that the student left the school, or &#x60;null&#x60; if still a current student | [optional] 
**enrolment_status** | **string** | The enrolment status of the student | [optional] 
**demographics** | [**\Assembly\Client\Model\StudentDemographics**](StudentDemographics.md) |  | [optional] 
**medical** | [**\Assembly\Client\Model\StudentMedical**](StudentMedical.md) |  | [optional] 
**contacts** | [**\Assembly\Client\Model\StudentContacts[]**](StudentContacts.md) | A list of contact IDs which are associated with this student, and their relationship | [optional] 
**address** | [**\Assembly\Client\Model\StudentAddress**](StudentAddress.md) |  | [optional] 
**languages** | [**\Assembly\Client\Model\StudentLanguages**](StudentLanguages.md) |  | [optional] 
**photo** | [**\Assembly\Client\Model\StudentPhoto**](StudentPhoto.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


