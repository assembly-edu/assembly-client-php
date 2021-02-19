# PHP SDK for the Assembly API

- API version: 1.1.0
- Package version: 1.2.474

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

The following variables can to be defined in your `.env` file.
```
ASSEMBLY_ENVIRONMENT=[sandbox / production]
ASSEMBLY_CLIENT_ID=[YOUR_CLIENT_ID]
ASSEMBLY_CLIENT_SECRET=[YOUR_CLIENT_SECRET]
```

or passed to the `AssemblyAuth` constructor as parameters

```
[
  'clientId' => [YOUR_CLIENT_ID],
  'clientSecret' => [YOUR_CLIENT_SECRET],
  'environment' => [sandbox / production]
]
```

## Request School Authorization

There is more information available on our [developer documentation](https://developers.assembly.education/#section/Authentication) site.
**Note:** The `redirectUri` must match the uri defined in the application settings on the Assmebly Platform.

```php
<?php
  $provider = new \Assembly\Client\Auth\AssemblyAuth([
    'redirectUri' => 'http://example.com/your-redirect-url/',
]);

  $state = ''; // Set a state value that will be link to s chool in your data store.
  $authorizationUrl = $provider->getAuthorizationUrl([
  'scope'      => ['school:required'], // Add additional scopes are required
	'state' => $state
  ]);

  //SaveSateToDataStore is a implementation placeholder which should be replace with your own data storage process.
  SaveSateToDataStore($state);

  // Redirect the user to the authorization URL.
  header('Location: ' . $authorizationUrl);
?>
```

## Handle School Authorization Callback

```php
<?php

  $provider = new \Assembly\Client\Auth\AssemblyAuth([
    'redirectUri' => 'http://example.com/your-redirect-url/',
  ]);

  //GetStateFromDataStore is a implementation placeholder which should be replace with your own data retrieval process.
  $state = GetStateFromDataStore();

  if (empty($_GET['state']) || (empty($state) && $_GET['state'] !== $state)) {
    exit('Invalid state');
  }

  // Try to get an access token using the authorization code grant.
  $accessToken = $provider->getAccessToken('authorization_code', [
    'code' => $_GET['code']
  ]);

  // We have an access token, which we may use in authenticated requests against the service provider's API.
  echo 'Access Token: ' . $accessToken->getToken() . "<br>";
  echo 'Refresh Token: ' . $accessToken->getRefreshToken() . "<br>";
  echo 'Expired in: ' . $accessToken->getExpires() . "<br>";
  echo 'Already expired? ' . ($accessToken->hasExpired() ? 'expired' : 'not expired') . "<br>";

  //SaveTokenToDatastore is a implementation placeholder which should be replace with your own data storage process.
  SaveTokenToDatastore($accessToken->jsonSerialize());

  $accessToken->jsonSerialize() will return the following
  /*
    {
      "access_token": "ABCDE",
      "refresh_token": "WXYZ",
      "token_type": "bearer",
      "level": "school",
      "expires_in": 108000,
      "school_id": 123,
      "scopes": ["school", "students"]
    }
  */
?>
```

## Request School Data

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$provider = new \Assembly\Client\Auth\AssemblyAuth();

//GetTokenFromDatastore is a implementation placeholder which should be replace with your own data retrieval process.
$accessToken = new \League\OAuth2\Client\Token\AccessToken(GetTokenFromDatastore());

if ($accessToken->hasExpired()) {
  $accessToken = $provider->getAccessToken('refresh_token', ['refresh_token' => $accessToken->getRefreshToken()]);

  //SaveTokenToDatastore is a implementation placeholder which should be replace with your own data storage process.
  SaveTokenToDatastore($accessToken->jsonSerialize())
}

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration($provider);
// $config = $config->setDebug(true);
// $config = $config->setDebugFile('LOCATION_OF_FILE');
$config->setAccessToken($accessToken->getToken());

$handler = new \GuzzleHttp\Handler\StreamHandler();
$client = new \GuzzleHttp\Client(['handler' => $handler]);

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  $client,
  $config
);

try {
  $bulk_results_body = new \Assembly\Client\Model\BulkResultsBody(); // \Assembly\Client\Model\BulkResultsBody | 

  $result = $apiInstance->bulkUpdateResults($bulk_results_body);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->bulkUpdateResults: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api-sandbox.assembly.education*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AssemblyApi* | [**bulkUpdateResults**](docs/Api/AssemblyApi.md#bulkupdateresults) | **PATCH** /results | Update Multiple Results
*AssemblyApi* | [**createResult**](docs/Api/AssemblyApi.md#createresult) | **POST** /results | Write Results
*AssemblyApi* | [**deauthorize**](docs/Api/AssemblyApi.md#deauthorize) | **POST** /school/deauthorize | Deauthorize School
*AssemblyApi* | [**findAcademicYear**](docs/Api/AssemblyApi.md#findacademicyear) | **GET** /academic_years/{id} | View an Academic Year
*AssemblyApi* | [**findAssessment**](docs/Api/AssemblyApi.md#findassessment) | **GET** /assessments/{id} | View an Assessment
*AssemblyApi* | [**findAssessmentGradeSet**](docs/Api/AssemblyApi.md#findassessmentgradeset) | **GET** /assessments/{id}/grade_set | View Grade Set for an Assessment
*AssemblyApi* | [**findAssessmentPoint**](docs/Api/AssemblyApi.md#findassessmentpoint) | **GET** /assessment_points/{assessment_point_rank} | View an Assessment Point
*AssemblyApi* | [**findDietaryNeed**](docs/Api/AssemblyApi.md#finddietaryneed) | **GET** /school/dietary_needs/{id} | View a Dietary Need
*AssemblyApi* | [**findFacet**](docs/Api/AssemblyApi.md#findfacet) | **GET** /facets/{id} | View a Facet
*AssemblyApi* | [**findGradeSet**](docs/Api/AssemblyApi.md#findgradeset) | **GET** /grade_sets/{id} | View a Grade Set
*AssemblyApi* | [**findGroup**](docs/Api/AssemblyApi.md#findgroup) | **GET** /groups/{id} | View a Group
*AssemblyApi* | [**findLearningAim**](docs/Api/AssemblyApi.md#findlearningaim) | **GET** /school/learning_aims/{id} | View a Post-16 Learning Aim
*AssemblyApi* | [**findMedicalCondition**](docs/Api/AssemblyApi.md#findmedicalcondition) | **GET** /school/medical_conditions/{id} | View a Medical Condition
*AssemblyApi* | [**findRegistrationGroup**](docs/Api/AssemblyApi.md#findregistrationgroup) | **GET** /registration_groups/{id} | View a Registration Group
*AssemblyApi* | [**findRoom**](docs/Api/AssemblyApi.md#findroom) | **GET** /rooms/{id} | View a Room
*AssemblyApi* | [**findSchool**](docs/Api/AssemblyApi.md#findschool) | **GET** /school | View School Details
*AssemblyApi* | [**findStaffMember**](docs/Api/AssemblyApi.md#findstaffmember) | **GET** /staff_members/{id} | View a Staff Member
*AssemblyApi* | [**findStudent**](docs/Api/AssemblyApi.md#findstudent) | **GET** /students/{id} | View a Student
*AssemblyApi* | [**findTeachingGroup**](docs/Api/AssemblyApi.md#findteachinggroup) | **GET** /teaching_groups/{id} | View a Teaching Group
*AssemblyApi* | [**findTimetable**](docs/Api/AssemblyApi.md#findtimetable) | **GET** /timetables/{id} | View a Timetable
*AssemblyApi* | [**findYearGroup**](docs/Api/AssemblyApi.md#findyeargroup) | **GET** /year_groups/{id} | View a Year Group
*AssemblyApi* | [**getAcademicYears**](docs/Api/AssemblyApi.md#getacademicyears) | **GET** /academic_years | List Academic Years
*AssemblyApi* | [**getAssessmentPointResults**](docs/Api/AssemblyApi.md#getassessmentpointresults) | **GET** /assessment_points/{assessment_point_rank}/results | View Results for an Assessment Point
*AssemblyApi* | [**getAssessmentPoints**](docs/Api/AssemblyApi.md#getassessmentpoints) | **GET** /assessment_points | List Assessment Points
*AssemblyApi* | [**getAssessmentResults**](docs/Api/AssemblyApi.md#getassessmentresults) | **GET** /assessments/{id}/results | View Results for an Assessment
*AssemblyApi* | [**getAssessments**](docs/Api/AssemblyApi.md#getassessments) | **GET** /assessments | List Assessments
*AssemblyApi* | [**getAttendanceSummaries**](docs/Api/AssemblyApi.md#getattendancesummaries) | **GET** /attendances/summaries | List Attendance Summaries
*AssemblyApi* | [**getAttendances**](docs/Api/AssemblyApi.md#getattendances) | **GET** /attendances | List Attendances
*AssemblyApi* | [**getCalendarEvents**](docs/Api/AssemblyApi.md#getcalendarevents) | **GET** /calendar_events | List Calendar Events
*AssemblyApi* | [**getClosures**](docs/Api/AssemblyApi.md#getclosures) | **GET** /rooms/{id}/closures | List Closures For a Room
*AssemblyApi* | [**getContacts**](docs/Api/AssemblyApi.md#getcontacts) | **GET** /contacts | List Contacts
*AssemblyApi* | [**getDietaryNeeds**](docs/Api/AssemblyApi.md#getdietaryneeds) | **GET** /school/dietary_needs | List Dietary Needs
*AssemblyApi* | [**getExclusions**](docs/Api/AssemblyApi.md#getexclusions) | **GET** /exclusions | List Exclusions
*AssemblyApi* | [**getFacets**](docs/Api/AssemblyApi.md#getfacets) | **GET** /facets | List Facets
*AssemblyApi* | [**getGradeSets**](docs/Api/AssemblyApi.md#getgradesets) | **GET** /grade_sets | List Grade Sets
*AssemblyApi* | [**getGroupEnrolments**](docs/Api/AssemblyApi.md#getgroupenrolments) | **GET** /groups/enrolments | List Group Enrolments
*AssemblyApi* | [**getGroupStudents**](docs/Api/AssemblyApi.md#getgroupstudents) | **GET** /groups/{id}/students | List Students for Group
*AssemblyApi* | [**getGroups**](docs/Api/AssemblyApi.md#getgroups) | **GET** /groups | List Groups
*AssemblyApi* | [**getLearningAims**](docs/Api/AssemblyApi.md#getlearningaims) | **GET** /school/learning_aims | List Post-16 Learning Aims
*AssemblyApi* | [**getLeftStaffMembers**](docs/Api/AssemblyApi.md#getleftstaffmembers) | **GET** /staff_members/left | List Left Staff Members
*AssemblyApi* | [**getLeftStudents**](docs/Api/AssemblyApi.md#getleftstudents) | **GET** /students/left | List Left Students
*AssemblyApi* | [**getLessons**](docs/Api/AssemblyApi.md#getlessons) | **GET** /rooms/{id}/lessons | List Lessons For a Room
*AssemblyApi* | [**getMedicalConditions**](docs/Api/AssemblyApi.md#getmedicalconditions) | **GET** /school/medical_conditions | List Medical Conditions
*AssemblyApi* | [**getMisSubjects**](docs/Api/AssemblyApi.md#getmissubjects) | **GET** /mis_subjects | List MIS Subjects
*AssemblyApi* | [**getRegistrationGroupStudents**](docs/Api/AssemblyApi.md#getregistrationgroupstudents) | **GET** /registration_groups/{id}/students | List Students for Registration Group
*AssemblyApi* | [**getRegistrationGroups**](docs/Api/AssemblyApi.md#getregistrationgroups) | **GET** /registration_groups | List Registration Groups
*AssemblyApi* | [**getResults**](docs/Api/AssemblyApi.md#getresults) | **GET** /results | List Results
*AssemblyApi* | [**getRooms**](docs/Api/AssemblyApi.md#getrooms) | **GET** /rooms | List Rooms
*AssemblyApi* | [**getStaffAbsences**](docs/Api/AssemblyApi.md#getstaffabsences) | **GET** /staff_absences | List Staff Absences
*AssemblyApi* | [**getStaffContracts**](docs/Api/AssemblyApi.md#getstaffcontracts) | **GET** /staff_contracts | List Staff Contracts
*AssemblyApi* | [**getStaffMembers**](docs/Api/AssemblyApi.md#getstaffmembers) | **GET** /staff_members | List Staff Members
*AssemblyApi* | [**getStudents**](docs/Api/AssemblyApi.md#getstudents) | **GET** /students | List Students
*AssemblyApi* | [**getSubjects**](docs/Api/AssemblyApi.md#getsubjects) | **GET** /subjects | List Subjects
*AssemblyApi* | [**getTeachingGroupStudents**](docs/Api/AssemblyApi.md#getteachinggroupstudents) | **GET** /teaching_groups/{id}/students | List Students for Teaching Group
*AssemblyApi* | [**getTeachingGroups**](docs/Api/AssemblyApi.md#getteachinggroups) | **GET** /teaching_groups | List Teaching Groups
*AssemblyApi* | [**getTimetables**](docs/Api/AssemblyApi.md#gettimetables) | **GET** /timetables | List Timetables
*AssemblyApi* | [**getYearGroupStudents**](docs/Api/AssemblyApi.md#getyeargroupstudents) | **GET** /year_groups/{id}/students | List Students for Year Group
*AssemblyApi* | [**getYearGroups**](docs/Api/AssemblyApi.md#getyeargroups) | **GET** /year_groups | List Year Groups
*AssemblyApi* | [**status**](docs/Api/AssemblyApi.md#status) | **GET** /school/status | View School Sync Status
*AssemblyApi* | [**sync**](docs/Api/AssemblyApi.md#sync) | **POST** /school/sync | Request a School Sync
*AssemblyApi* | [**updateResults**](docs/Api/AssemblyApi.md#updateresults) | **PATCH** /results/{id} | Update a Single Result


## Documentation For Models

 - [AcademicYear](docs/Model/AcademicYear.md)
 - [AcademicYearTerms](docs/Model/AcademicYearTerms.md)
 - [Assessment](docs/Model/Assessment.md)
 - [AssessmentPoint](docs/Model/AssessmentPoint.md)
 - [Attendance](docs/Model/Attendance.md)
 - [AttendanceSummary](docs/Model/AttendanceSummary.md)
 - [BulkResultResponse](docs/Model/BulkResultResponse.md)
 - [BulkResultsBody](docs/Model/BulkResultsBody.md)
 - [CalendarEvent](docs/Model/CalendarEvent.md)
 - [Closure](docs/Model/Closure.md)
 - [Contact](docs/Model/Contact.md)
 - [ContactAddress](docs/Model/ContactAddress.md)
 - [ContactStudents](docs/Model/ContactStudents.md)
 - [DietaryNeed](docs/Model/DietaryNeed.md)
 - [EmailInfo](docs/Model/EmailInfo.md)
 - [Enrolment](docs/Model/Enrolment.md)
 - [Exclusion](docs/Model/Exclusion.md)
 - [Facet](docs/Model/Facet.md)
 - [FsmEntitlement](docs/Model/FsmEntitlement.md)
 - [Grade](docs/Model/Grade.md)
 - [GradeSet](docs/Model/GradeSet.md)
 - [Group](docs/Model/Group.md)
 - [GroupMisSubject](docs/Model/GroupMisSubject.md)
 - [GroupMisSubjectSubject](docs/Model/GroupMisSubjectSubject.md)
 - [LearningAim](docs/Model/LearningAim.md)
 - [Lesson](docs/Model/Lesson.md)
 - [LessonGroup](docs/Model/LessonGroup.md)
 - [LessonGroupMisSubject](docs/Model/LessonGroupMisSubject.md)
 - [LessonRooms](docs/Model/LessonRooms.md)
 - [Me](docs/Model/Me.md)
 - [MeToken](docs/Model/MeToken.md)
 - [MedicalCondition](docs/Model/MedicalCondition.md)
 - [MisSubject](docs/Model/MisSubject.md)
 - [MisSubjectSubject](docs/Model/MisSubjectSubject.md)
 - [PpEntitlement](docs/Model/PpEntitlement.md)
 - [RegistrationGroup](docs/Model/RegistrationGroup.md)
 - [Result](docs/Model/Result.md)
 - [ResultBody](docs/Model/ResultBody.md)
 - [ResultEntry](docs/Model/ResultEntry.md)
 - [ResultUpdate](docs/Model/ResultUpdate.md)
 - [Room](docs/Model/Room.md)
 - [School](docs/Model/School.md)
 - [SchoolStatus](docs/Model/SchoolStatus.md)
 - [SenCategory](docs/Model/SenCategory.md)
 - [SenNeed](docs/Model/SenNeed.md)
 - [StaffAbsence](docs/Model/StaffAbsence.md)
 - [StaffAllowance](docs/Model/StaffAllowance.md)
 - [StaffContract](docs/Model/StaffContract.md)
 - [StaffMember](docs/Model/StaffMember.md)
 - [StaffMemberAddress](docs/Model/StaffMemberAddress.md)
 - [StaffMemberDemographics](docs/Model/StaffMemberDemographics.md)
 - [StaffMemberQualificationInfo](docs/Model/StaffMemberQualificationInfo.md)
 - [StaffQualification](docs/Model/StaffQualification.md)
 - [StaffRole](docs/Model/StaffRole.md)
 - [StaffSalary](docs/Model/StaffSalary.md)
 - [StandardError](docs/Model/StandardError.md)
 - [StandardErrorData](docs/Model/StandardErrorData.md)
 - [Student](docs/Model/Student.md)
 - [StudentAddress](docs/Model/StudentAddress.md)
 - [StudentContactRelationship](docs/Model/StudentContactRelationship.md)
 - [StudentContacts](docs/Model/StudentContacts.md)
 - [StudentDemographics](docs/Model/StudentDemographics.md)
 - [StudentLanguages](docs/Model/StudentLanguages.md)
 - [StudentLearningAims](docs/Model/StudentLearningAims.md)
 - [StudentMedical](docs/Model/StudentMedical.md)
 - [StudentMedicalCondition](docs/Model/StudentMedicalCondition.md)
 - [StudentMedicalNote](docs/Model/StudentMedicalNote.md)
 - [StudentPhoto](docs/Model/StudentPhoto.md)
 - [Subject](docs/Model/Subject.md)
 - [Supervisor](docs/Model/Supervisor.md)
 - [TeachingGroup](docs/Model/TeachingGroup.md)
 - [TelephoneNumberInfo](docs/Model/TelephoneNumberInfo.md)
 - [Timetable](docs/Model/Timetable.md)
 - [TimetableDays](docs/Model/TimetableDays.md)
 - [TimetableGroup](docs/Model/TimetableGroup.md)
 - [TimetableGroupMisSubject](docs/Model/TimetableGroupMisSubject.md)
 - [TimetableLessons](docs/Model/TimetableLessons.md)
 - [TimetablePeriods](docs/Model/TimetablePeriods.md)
 - [TimetableStructure](docs/Model/TimetableStructure.md)
 - [TimetableStructureDays](docs/Model/TimetableStructureDays.md)
 - [TimetableStructurePeriods](docs/Model/TimetableStructurePeriods.md)
 - [TimetableSupervisors](docs/Model/TimetableSupervisors.md)
 - [YearGroup](docs/Model/YearGroup.md)


## Author

help@assembly.education

