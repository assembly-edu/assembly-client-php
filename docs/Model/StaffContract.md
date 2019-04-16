# StaffContract

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | Descriminator | [optional] [default to 'staff_contract']
**id** | **int** | Internal stable ID | [optional] 
**staff_member_id** | **int** | The ID of the staff member | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | The start date of the contract | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | The end date of the contract | [optional] 
**national_insurance_number** | **string** | The staff member&#39;s NI Number | [optional] 
**payroll_number** | **string** | The staff member&#39;s payroll number | [optional] 
**contract_type** | **string** | The type of contract | [optional] 
**post** | **string** | The post of the contract | [optional] 
**origin** | **string** | Indicates the role undertaken by the staff member before this contract | [optional] 
**destination** | **string** | The destination of the staff member if they have moved on from this contract | [optional] 
**daily_rate** | **bool** | Indicates if the staff member is paid a daily rate | [optional] 
**pay_review_date** | [**\DateTime**](\DateTime.md) | Shows the date of the staff member&#39;s most recent pay review | [optional] 
**roles** | [**\Assembly\Client\Model\StaffRole[]**](StaffRole.md) | The roles associated to this contract | [optional] 
**salaries** | [**\Assembly\Client\Model\StaffSalary[]**](StaffSalary.md) | The salaries associated with this contract | [optional] 
**allowances** | [**\Assembly\Client\Model\StaffAllowance[]**](StaffAllowance.md) | The allowances associated with this contract | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


