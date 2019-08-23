# Contact

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | Descriminator | [optional] [default to 'contact']
**id** | **int** | Internal stable ID | [optional] 
**mis_id** | **string** | The ID of the contact from the MIS | [optional] 
**first_name** | **string** | The first name of the contact | [optional] 
**middle_name** | **string** | The middle name of the contact | [optional] 
**last_name** | **string** | The last name of the contact | [optional] 
**gender** | **string** | The gender of the contact | [optional] 
**title** | **string** | The title of the contact | [optional] 
**salutation** | **string** | The salutation for the contact | [optional] 
**emails** | [**\Assembly\Client\Model\EmailInfo[]**](EmailInfo.md) | A list of emails for the contact | [optional] 
**telephone_numbers** | [**\Assembly\Client\Model\TelephoneNumberInfo[]**](TelephoneNumberInfo.md) | A list of telephone numbers for the contact | [optional] 
**students** | [**\Assembly\Client\Model\ContactStudents[]**](ContactStudents.md) | A list of student IDs which are associated with this contact, and their relationship | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


