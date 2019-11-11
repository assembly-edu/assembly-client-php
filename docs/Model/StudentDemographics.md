# StudentDemographics

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | Descriminator | [optional] [default to 'student_demographics']
**ethnicity_code** | **string** | A detailed, Dfe standardised way of categorising the ethnicity of a student | [optional] 
**ethnicity_group** | **string** | A broader categorisation of ethnicity that is standardised across the country, with all ethnicity codes grouped in to 8 sections | [optional] 
**gender** | **string** | The gender of the student | [optional] 
**is_pp** | **bool** | Pupil Premium (PP) - schools receive extra funding for students who qualify as Pupil Premium. The includes any student who has qualified for Free School Meals (FSM) in the last 6 years, and any student in local-authority care | [optional] 
**is_eal** | **bool** | English as an Additional Language (EAL) - this field will be true for a student whose first language is not English | [optional] 
**sen_category** | **string** | Special Education Need (SEN) - indicates a student has learning difficulties and requires special education provision. Can be null for those not eligible | [optional] 
**country_of_birth** | **string** | The country of birth of the student | [optional] 
**nationalities** | **string[]** | The nationality or nationalities of the student | [optional] 
**fsm_review_date** | **string** | Free school meal review date -Review date for pupil&#39;s free school meal eligibility | [optional] 
**is_fsm** | **bool** | Free School Meals (FSM) - indicates if the student is eligible for free school meals | [optional] 
**is_fsm6** | **bool** | Free School Meals 6 (FSM6) - indicates if the student has been eligible for free school meals within the last 6 years | [optional] 
**fsm_history** | [**\Assembly\Client\Model\FsmEntitlement[]**](FsmEntitlement.md) | Free School Meal (FSM) entitlement history | [optional] 
**in_care** | **bool** | Looked after status - indicates whether the student is &#39;looked after&#39; by the local authority | [optional] 
**ever_in_care** | **bool** | Ever in care status - indicates whether the student is either currently &#39;looked after&#39;, or has been at any point in the past | [optional] 
**service_child** | **bool** | Service Child - indicates whether the student has parent(s) who are Service personnel serving in regular military units of all forces and exercising parental care and responsibility | [optional] 
**sen_needs** | [**\Assembly\Client\Model\SenNeed[]**](SenNeed.md) | Information about a student&#39;s SEN Needs. This will only be returned if &#x60;&amp;sen_needs&#x3D;true&#x60; is included in your request | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


