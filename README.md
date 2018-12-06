# PHP SDK for the Assembly API 
## Description
The Assembly API is built around the REST and a collection of open standards/protocols in order to comply with as many consumers as possible.

- API version: 1.1.0
- Package version: 1.1.0

For more information, please visit [http://developers.assembly.education](http://developers.assembly.education)

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/):

Run `composer require assembly-edu/assembly-client-php`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to//vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearerAuth
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | id of the entity

try {
    $result = $apiInstance->findAcademicYear($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->findAcademicYear: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api-sandbox.assembly.education*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AssemblyApi* | [**findAcademicYear**](docs/Api/AssemblyApi.md#findacademicyear) | **GET** /academic_years/{id} | View an Academic Year
*AssemblyApi* | [**findAssessment**](docs/Api/AssemblyApi.md#findassessment) | **GET** /assessments/{id} | View an Assessment
*AssemblyApi* | [**findAssessmentGradeSet**](docs/Api/AssemblyApi.md#findassessmentgradeset) | **GET** /assessments/{id}/grade_set | View Grade Set for an Assessment
*AssemblyApi* | [**findAssessmentPoint**](docs/Api/AssemblyApi.md#findassessmentpoint) | **GET** /assessment_points/{id} | View an Assessment Point
*AssemblyApi* | [**findFacet**](docs/Api/AssemblyApi.md#findfacet) | **GET** /facets/{id} | View a Facet
*AssemblyApi* | [**findRegistrationGroup**](docs/Api/AssemblyApi.md#findregistrationgroup) | **GET** /registration_groups/{id} | View a Registration Group
*AssemblyApi* | [**findStaffMember**](docs/Api/AssemblyApi.md#findstaffmember) | **GET** /staff_members/{id} | View a Staff Member
*AssemblyApi* | [**findStudent**](docs/Api/AssemblyApi.md#findstudent) | **GET** /students/{id} | View a Student
*AssemblyApi* | [**findTeachingGroup**](docs/Api/AssemblyApi.md#findteachinggroup) | **GET** /teaching_groups/{id} | View a Teaching Group
*AssemblyApi* | [**findYearGroup**](docs/Api/AssemblyApi.md#findyeargroup) | **GET** /year_groups/{id} | View a Year Group
*AssemblyApi* | [**getAcademicYears**](docs/Api/AssemblyApi.md#getacademicyears) | **GET** /academic_years | List Academic Years
*AssemblyApi* | [**getAssessmentPointResults**](docs/Api/AssemblyApi.md#getassessmentpointresults) | **GET** /assessment_points/{id}/results | View Results for an Assessment Point
*AssemblyApi* | [**getAssessmentPoints**](docs/Api/AssemblyApi.md#getassessmentpoints) | **GET** /assessment_points | List Assessment Points
*AssemblyApi* | [**getAssessmentResults**](docs/Api/AssemblyApi.md#getassessmentresults) | **GET** /assessments/{id}/results | View Results for an Assessment
*AssemblyApi* | [**getAssessments**](docs/Api/AssemblyApi.md#getassessments) | **GET** /assessments | List Assessments
*AssemblyApi* | [**getAttendances**](docs/Api/AssemblyApi.md#getattendances) | **GET** /attendances | List Attendances
*AssemblyApi* | [**getCalendarEvents**](docs/Api/AssemblyApi.md#getcalendarevents) | **GET** /calendar_events | List Calendar Events
*AssemblyApi* | [**getContacts**](docs/Api/AssemblyApi.md#getcontacts) | **GET** /contacts | List Contacts
*AssemblyApi* | [**getExclusions**](docs/Api/AssemblyApi.md#getexclusions) | **GET** /exclusions | List Exclusions
*AssemblyApi* | [**getFacets**](docs/Api/AssemblyApi.md#getfacets) | **GET** /facets | List Facets
*AssemblyApi* | [**getLeftStudents**](docs/Api/AssemblyApi.md#getleftstudents) | **GET** /students/left | List Left Students
*AssemblyApi* | [**getRegistrationGroupStudents**](docs/Api/AssemblyApi.md#getregistrationgroupstudents) | **GET** /registration_groups/{id}/students | List Students for Registration Group
*AssemblyApi* | [**getRegistrationGroups**](docs/Api/AssemblyApi.md#getregistrationgroups) | **GET** /registration_groups | List Registration Group
*AssemblyApi* | [**getResults**](docs/Api/AssemblyApi.md#getresults) | **GET** /results | List Results
*AssemblyApi* | [**getStaffAbsences**](docs/Api/AssemblyApi.md#getstaffabsences) | **GET** /staff_absences | List Staff Absences
*AssemblyApi* | [**getStaffContracts**](docs/Api/AssemblyApi.md#getstaffcontracts) | **GET** /staff_contracts | List Staff Contracts
*AssemblyApi* | [**getStaffMembers**](docs/Api/AssemblyApi.md#getstaffmembers) | **GET** /staff_members | List Staff Members
*AssemblyApi* | [**getStudents**](docs/Api/AssemblyApi.md#getstudents) | **GET** /students | List Students
*AssemblyApi* | [**getSubjects**](docs/Api/AssemblyApi.md#getsubjects) | **GET** /subjects | List Subjects
*AssemblyApi* | [**getTeachingGroupStudents**](docs/Api/AssemblyApi.md#getteachinggroupstudents) | **GET** /teaching_groups/{id}/students | List Students for Teaching Group
*AssemblyApi* | [**getTeachingGroups**](docs/Api/AssemblyApi.md#getteachinggroups) | **GET** /teaching_groups | List Teaching Groups
*AssemblyApi* | [**getYearGroupStudents**](docs/Api/AssemblyApi.md#getyeargroupstudents) | **GET** /year_groups/{id}/students | List Students for Year Group
*AssemblyApi* | [**getYearGroups**](docs/Api/AssemblyApi.md#getyeargroups) | **GET** /year_groups | List Year Groups


## Documentation For Models

 - [AcademicYear](docs/Model/AcademicYear.md)
 - [AcademicYearTerms](docs/Model/AcademicYearTerms.md)
 - [Assessment](docs/Model/Assessment.md)
 - [AssessmentMisAssessments](docs/Model/AssessmentMisAssessments.md)
 - [AssessmentPoint](docs/Model/AssessmentPoint.md)
 - [Attendance](docs/Model/Attendance.md)
 - [CalendarEvent](docs/Model/CalendarEvent.md)
 - [CalendarEventMisType](docs/Model/CalendarEventMisType.md)
 - [Contact](docs/Model/Contact.md)
 - [Email](docs/Model/Email.md)
 - [Exclusion](docs/Model/Exclusion.md)
 - [Facet](docs/Model/Facet.md)
 - [Grade](docs/Model/Grade.md)
 - [GradeSet](docs/Model/GradeSet.md)
 - [MisSubject](docs/Model/MisSubject.md)
 - [RegistrationGroup](docs/Model/RegistrationGroup.md)
 - [Result](docs/Model/Result.md)
 - [SenNeed](docs/Model/SenNeed.md)
 - [StaffAbsence](docs/Model/StaffAbsence.md)
 - [StaffAllowance](docs/Model/StaffAllowance.md)
 - [StaffContract](docs/Model/StaffContract.md)
 - [StaffMember](docs/Model/StaffMember.md)
 - [StaffMemberDemographics](docs/Model/StaffMemberDemographics.md)
 - [StaffMemberQualificationInfo](docs/Model/StaffMemberQualificationInfo.md)
 - [StaffQualification](docs/Model/StaffQualification.md)
 - [StaffRole](docs/Model/StaffRole.md)
 - [StaffSalary](docs/Model/StaffSalary.md)
 - [Student](docs/Model/Student.md)
 - [StudentAddress](docs/Model/StudentAddress.md)
 - [StudentDemographics](docs/Model/StudentDemographics.md)
 - [StudentLanguages](docs/Model/StudentLanguages.md)
 - [StudentMedical](docs/Model/StudentMedical.md)
 - [StudentPhoto](docs/Model/StudentPhoto.md)
 - [Subject](docs/Model/Subject.md)
 - [TeachingGroup](docs/Model/TeachingGroup.md)
 - [TelephoneNumber](docs/Model/TelephoneNumber.md)
 - [YearGroup](docs/Model/YearGroup.md)


## Documentation For Authorization


## bearerAuth

- **Type**: HTTP basic authentication


## Author

help@assembly.education


