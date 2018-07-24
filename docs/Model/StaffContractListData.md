# StaffContractListData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | Object type | [optional] 
**id** | **int** | Internal stable ID given to each contract in the Platform | [optional] 
**staff_member_id** | **string** | The ID of the staff member | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | Contract start date | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | Contract end date | [optional] 
**national_insurance_number** | **string** | Employee NI number | [optional] 
**payroll_number** | **string** | Employee payroll number | [optional] 
**contract_type** | **string** | Contract type | [optional] 
**post** | **string** | No description | [optional] 
**origin** | **string** | No description | [optional] 
**destination** | **string** | Completed after a contract has been terminated; this captures a post-holder’s destination | [optional] 
**daily_rate** | **bool** | No description | [optional] 
**pay_review_date** | [**\DateTime**](\DateTime.md) | No description | [optional] 
**roles** | [**\Assembly\Client\Model\StaffContractRoles[]**](StaffContractRoles.md) | No description | [optional] 
**salaries** | [**\Assembly\Client\Model\StaffContractSalaries[]**](StaffContractSalaries.md) | No description | [optional] 
**allowances** | [**\Assembly\Client\Model\StaffContractAllowances[]**](StaffContractAllowances.md) | No description | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


