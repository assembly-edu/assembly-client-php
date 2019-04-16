# StaffMember

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | Descriminator | [optional] [default to 'staff_member']
**id** | **int** | Internal stable ID | [optional] 
**mis_id** | **string** | The ID of the staff member from the MIS | [optional] 
**staff_code** | **string** | The staff code from the MIS | [optional] 
**first_name** | **string** | The first name the staff member wishes to go by, may be the same as &#x60;legal_first_name&#x60; | [optional] 
**legal_first_name** | **string** | The legal first name of the staff member | [optional] 
**middle_name** | **string** | The middle name of the staff member | [optional] 
**last_name** | **string** | The last name the staff member wishes to go by, may be the same as &#x60;legal_last_name&#x60; | [optional] 
**legal_last_name** | **string** | The legal first name of the staff member, may be the same as &#x60;legal_last_name&#x60; | [optional] 
**former_last_name** | **string** | The former last name of the staff member, may be &#x60;null&#x60; | [optional] 
**title** | **string** | The title of the staff member | [optional] 
**dob** | [**\DateTime**](\DateTime.md) | The staff member&#39;s date of birth | [optional] 
**email** | **string** | The email address of the staff member. Deprecated in favour of &#x60;emails&#x60; | [optional] 
**emails** | [**\Assembly\Client\Model\EmailInfo[]**](EmailInfo.md) | The email addresses of the staff member. | [optional] 
**telephone_numbers** | [**\Assembly\Client\Model\TelephoneNumberInfo[]**](TelephoneNumberInfo.md) | A list of telephone numbers for the staff member | [optional] 
**is_teaching_staff** | **bool** | Indicates whether the staff member is a teacher | [optional] 
**included_in_census** | **bool** | Indicates whether the staff member is included in official statistical returns | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | The date the staff member first started working at the school | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | The date the staff member left the school, or &#x60;null&#x60; if still active | [optional] 
**demographics** | [**\Assembly\Client\Model\StaffMemberDemographics**](StaffMemberDemographics.md) |  | [optional] 
**qualification_info** | [**\Assembly\Client\Model\StaffMemberQualificationInfo**](StaffMemberQualificationInfo.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


