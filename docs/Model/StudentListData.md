# StudentListData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | Object type | [optional] 
**id** | **int** | Internal stable ID given to students in the Platform | [optional] 
**first_name** | **string** | The first name of the student | [optional] 
**legal_first_name** | **string** | The legal first name of the student | [optional] 
**middle_name** | **string** | The middle name of the student | [optional] 
**last_name** | **string** | The last name of the student | [optional] 
**legal_last_name** | **string** | The legal last name of the student | [optional] 
**former_last_name** | **string** | The former last name of the student | [optional] 
**dob** | [**\DateTime**](\DateTime.md) | The date of birth of the student | [optional] 
**year_code** | **string** | The year group the student currently belongs to *Values*  |Value|Description| |---|---| |&#x60;1&#x60;|Year 1| |&#x60;2&#x60;|Year 2| |&#x60;3&#x60;|Year 3| |&#x60;4&#x60;|Year 4| |&#x60;5&#x60;|Year 5| |&#x60;6&#x60;|Year 6| |&#x60;7&#x60;|Year 7| |&#x60;8&#x60;|Year 8| |&#x60;9&#x60;|Year 9| |&#x60;R&#x60;|Reception| |&#x60;10&#x60;|Year 10| |&#x60;11&#x60;|Year 11| |&#x60;12&#x60;|Year 12| |&#x60;13&#x60;|Year 13| |&#x60;N1&#x60;|Nursery first year| |&#x60;N2&#x60;|Nursery second year| | [optional] 
**upn** | **string** | Unique Pupil Number (UPN) - a DfE-mandated 13-character code that identifies each pupil | [optional] 
**former_upn** | **string** | The previous UPN where a pupil has held another UPN whilst at a school | [optional] 
**mis_id** | **string** | The ID of a student from the MIS | [optional] 
**pan** | **string** | A student&#39;s &#39;Pupil Admission Number&#39;. This field is exposed in the front end of the MIS, and may be the same as mis_id | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | Date when the student joined the school | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | Date when the student left the school (this will default to 2079-06-06T23:59:00.000Z) | [optional] 
**enrolment_status** | **string** | The enrolment status of the student | [optional] 
**demographics** | [**\Assembly\Client\Model\StudentDemographics**](StudentDemographics.md) |  | [optional] 
**contact** | [**\Assembly\Client\Model\ContactListData[]**](ContactListData.md) | List of contact IDs for the student. | [optional] 
**addresses** | [**\Assembly\Client\Model\StudentAddresses**](StudentAddresses.md) |  | [optional] 
**languages** | [**\Assembly\Client\Model\StudentLanguages**](StudentLanguages.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


