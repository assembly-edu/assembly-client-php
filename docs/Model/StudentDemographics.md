# StudentDemographics

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | Object type | [optional] 
**ethnicity_code** | **string** | A detailed, Dfe standardised way of categorising the ethnicity of a student | [optional] 
**ethnicity_group** | **string** | A broader categorisation of ethnicity that is standardised across the country, with all ethnicity codes grouped in to 8 sections | [optional] 
**gender** | **string** | The gender of the student *Values*  |Value|Description| |---|---| |&#x60;F&#x60;|Female| |&#x60;M&#x60;|Male| | [optional] 
**in_care** | **bool** | Looked after status - indicates whether the student is &#39;looked after&#39; by the local authority (this field will only be returned if &amp;demographics&#x3D;true and &amp;care&#x3D;true is included in your request) | [optional] 
**is_eal** | **bool** | English as an Additional Language (EAL) - this field will be true for a student whose first language is not English | [optional] 
**is_fsm** | **bool** | Free School Meals (FSM) - indicates if the student is eligible for free school meals | [optional] 
**fsm_review_date** | [**\DateTime**](\DateTime.md) | Free school meal review date -Review date for pupil&#39;s free school meal eligibility | [optional] 
**is_pp** | **bool** | Pupil Premium (PP) - schools receive extra funding for students who qualify as Pupil Premium. The includes any student who has qualified for Free School Meals (FSM) in the last 6 years, and any student in local-authority care | [optional] 
**sen_category** | **string** | Special Education Need (SEN) - indicates a student has learning difficulties and requires special education provision. *Values*  |Value|Description| |---|---| |&#x60;A&#x60;|School Action (no longer valid)| |&#x60;E&#x60;|Education, Health and Care Plan| |&#x60;K&#x60;|SEN Support| |&#x60;N&#x60;|None| |&#x60;P&#x60;|School Action Plus (no longer valid)| |&#x60;S&#x60;|Statement| |&#x60;null&#x60;|Not eligable| | [optional] 
**sen_needs** | [**\Assembly\Client\Model\StudentDemographicsSenNeeds**](StudentDemographicsSenNeeds.md) |  | [optional] 
**country_of_birth** | **string** | The country of birth of the student | [optional] 
**nationalities** | **string[]** | The nationality or nationalities of the student | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


