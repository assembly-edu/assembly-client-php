# Assembly\Client\AssemblyApi

All URIs are relative to *https://api-sandbox.assembly.education*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkUpdateResults**](AssemblyApi.md#bulkUpdateResults) | **PATCH** /results | Update Multiple Results
[**createResult**](AssemblyApi.md#createResult) | **POST** /results | Write Results
[**findAcademicYear**](AssemblyApi.md#findAcademicYear) | **GET** /academic_years/{id} | View an Academic Year
[**findAssessment**](AssemblyApi.md#findAssessment) | **GET** /assessments/{id} | View an Assessment
[**findAssessmentGradeSet**](AssemblyApi.md#findAssessmentGradeSet) | **GET** /assessments/{id}/grade_set | View Grade Set for an Assessment
[**findAssessmentPoint**](AssemblyApi.md#findAssessmentPoint) | **GET** /assessment_points/{assessment_point_rank} | View an Assessment Point
[**findDietaryNeed**](AssemblyApi.md#findDietaryNeed) | **GET** /school/dietary_needs/{id} | View a Dietary Need
[**findFacet**](AssemblyApi.md#findFacet) | **GET** /facets/{id} | View a Facet
[**findGradeSet**](AssemblyApi.md#findGradeSet) | **GET** /grade_sets/{id} | View a Grade Set
[**findGroup**](AssemblyApi.md#findGroup) | **GET** /groups/{id} | View a Group
[**findLearningAim**](AssemblyApi.md#findLearningAim) | **GET** /school/learning_aims/{id} | View a Post-16 Learning Aim
[**findMedicalCondition**](AssemblyApi.md#findMedicalCondition) | **GET** /school/medical_conditions/{id} | View a Medical Condition
[**findRegistrationGroup**](AssemblyApi.md#findRegistrationGroup) | **GET** /registration_groups/{id} | View a Registration Group
[**findRoom**](AssemblyApi.md#findRoom) | **GET** /rooms/{id} | View a Room
[**findSchool**](AssemblyApi.md#findSchool) | **GET** /school | View School Details
[**findStaffMember**](AssemblyApi.md#findStaffMember) | **GET** /staff_members/{id} | View a Staff Member
[**findStudent**](AssemblyApi.md#findStudent) | **GET** /students/{id} | View a Student
[**findTeachingGroup**](AssemblyApi.md#findTeachingGroup) | **GET** /teaching_groups/{id} | View a Teaching Group
[**findTimetable**](AssemblyApi.md#findTimetable) | **GET** /timetables/{id} | View a Timetable
[**findYearGroup**](AssemblyApi.md#findYearGroup) | **GET** /year_groups/{id} | View a Year Group
[**getAcademicYears**](AssemblyApi.md#getAcademicYears) | **GET** /academic_years | List Academic Years
[**getAssessmentPointResults**](AssemblyApi.md#getAssessmentPointResults) | **GET** /assessment_points/{assessment_point_rank}/results | View Results for an Assessment Point
[**getAssessmentPoints**](AssemblyApi.md#getAssessmentPoints) | **GET** /assessment_points | List Assessment Points
[**getAssessmentResults**](AssemblyApi.md#getAssessmentResults) | **GET** /assessments/{id}/results | View Results for an Assessment
[**getAssessments**](AssemblyApi.md#getAssessments) | **GET** /assessments | List Assessments
[**getAttendanceSummaries**](AssemblyApi.md#getAttendanceSummaries) | **GET** /attendances/summaries | List Attendance Summaries
[**getAttendances**](AssemblyApi.md#getAttendances) | **GET** /attendances | List Attendances
[**getCalendarEvents**](AssemblyApi.md#getCalendarEvents) | **GET** /calendar_events | List Calendar Events
[**getClosures**](AssemblyApi.md#getClosures) | **GET** /rooms/{id}/closures | List Closures For a Room
[**getContacts**](AssemblyApi.md#getContacts) | **GET** /contacts | List Contacts
[**getDietaryNeeds**](AssemblyApi.md#getDietaryNeeds) | **GET** /school/dietary_needs | List Dietary Needs
[**getExclusions**](AssemblyApi.md#getExclusions) | **GET** /exclusions | List Exclusions
[**getFacets**](AssemblyApi.md#getFacets) | **GET** /facets | List Facets
[**getGradeSets**](AssemblyApi.md#getGradeSets) | **GET** /grade_sets | List Grade Sets
[**getGroups**](AssemblyApi.md#getGroups) | **GET** /groups | List Groups
[**getLearningAims**](AssemblyApi.md#getLearningAims) | **GET** /school/learning_aims | List Post-16 Learning Aims
[**getLeftStaffMembers**](AssemblyApi.md#getLeftStaffMembers) | **GET** /staff_members/left | List Left Staff Members
[**getLeftStudents**](AssemblyApi.md#getLeftStudents) | **GET** /students/left | List Left Students
[**getLessons**](AssemblyApi.md#getLessons) | **GET** /rooms/{id}/lessons | List Lessons For a Room
[**getMedicalConditions**](AssemblyApi.md#getMedicalConditions) | **GET** /school/medical_conditions | List Medical Conditions
[**getRegistrationGroupStudents**](AssemblyApi.md#getRegistrationGroupStudents) | **GET** /registration_groups/{id}/students | List Students for Registration Group
[**getRegistrationGroups**](AssemblyApi.md#getRegistrationGroups) | **GET** /registration_groups | List Registration Groups
[**getResults**](AssemblyApi.md#getResults) | **GET** /results | List Results
[**getRooms**](AssemblyApi.md#getRooms) | **GET** /rooms | List Rooms
[**getStaffAbsences**](AssemblyApi.md#getStaffAbsences) | **GET** /staff_absences | List Staff Absences
[**getStaffContracts**](AssemblyApi.md#getStaffContracts) | **GET** /staff_contracts | List Staff Contracts
[**getStaffMembers**](AssemblyApi.md#getStaffMembers) | **GET** /staff_members | List Staff Members
[**getStudents**](AssemblyApi.md#getStudents) | **GET** /students | List Students
[**getSubjects**](AssemblyApi.md#getSubjects) | **GET** /subjects | List Subjects
[**getTeachingGroupStudents**](AssemblyApi.md#getTeachingGroupStudents) | **GET** /teaching_groups/{id}/students | List Students for Teaching Group
[**getTeachingGroups**](AssemblyApi.md#getTeachingGroups) | **GET** /teaching_groups | List Teaching Groups
[**getTimetables**](AssemblyApi.md#getTimetables) | **GET** /timetables | List Timetables
[**getYearGroupStudents**](AssemblyApi.md#getYearGroupStudents) | **GET** /year_groups/{id}/students | List Students for Year Group
[**getYearGroups**](AssemblyApi.md#getYearGroups) | **GET** /year_groups | List Year Groups
[**status**](AssemblyApi.md#status) | **GET** /school/status | View School Sync Status
[**updateResults**](AssemblyApi.md#updateResults) | **PATCH** /results/{id} | Update a Single Result


# **bulkUpdateResults**
> \Assembly\Client\Model\BulkResultResponse bulkUpdateResults($bulk_results_body)

Update Multiple Results

Multiple results can be updated simultaneously by providing the relevant `result_ids` in the body of your request. The response will tell you whether the batch of updates has either been successful or failed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$bulk_results_body = new \Assembly\Client\Model\BulkResultsBody(); // \Assembly\Client\Model\BulkResultsBody | 

try {
  $result = $apiInstance->bulkUpdateResults($bulk_results_body);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->bulkUpdateResults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bulk_results_body** | [**\Assembly\Client\Model\BulkResultsBody**](../Model/BulkResultsBody.md)|  | [optional]

### Return type

[**\Assembly\Client\Model\BulkResultResponse**](../Model/BulkResultResponse.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createResult**
> \Assembly\Client\Model\Result[] createResult($result_body)

Write Results

Given a `subject_id`, `facet_id`, `assessment_point_rank` and `assessment_id` results can be sent to the Platform, along with a `student_id`, the `grade_id` and (optionally) the `result_date`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$result_body = new \Assembly\Client\Model\ResultBody(); // \Assembly\Client\Model\ResultBody | 

try {
  $result = $apiInstance->createResult($result_body);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->createResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **result_body** | [**\Assembly\Client\Model\ResultBody**](../Model/ResultBody.md)|  | [optional]

### Return type

[**\Assembly\Client\Model\Result[]**](../Model/Result.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findAcademicYear**
> \Assembly\Client\Model\AcademicYear findAcademicYear($id)

View an Academic Year

Returns a single academic year for the school associated with the provided `access_token`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$id = 56; // int | Internal identifier of the entity

try {
  $result = $apiInstance->findAcademicYear($id);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->findAcademicYear: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Internal identifier of the entity |

### Return type

[**\Assembly\Client\Model\AcademicYear**](../Model/AcademicYear.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findAssessment**
> \Assembly\Client\Model\Assessment findAssessment($id)

View an Assessment

Returns a single assessment for the given ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$id = 56; // int | Internal identifier of the entity

try {
  $result = $apiInstance->findAssessment($id);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->findAssessment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Internal identifier of the entity |

### Return type

[**\Assembly\Client\Model\Assessment**](../Model/Assessment.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findAssessmentGradeSet**
> \Assembly\Client\Model\GradeSet findAssessmentGradeSet($id)

View Grade Set for an Assessment

Returns a `grade_set` (an acceptable list of values) for the assessment identifierentified by the `assessment_id`. Grades should be written back to the Platform using the `grade_id`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$id = 56; // int | Internal identifier of the entity

try {
  $result = $apiInstance->findAssessmentGradeSet($id);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->findAssessmentGradeSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Internal identifier of the entity |

### Return type

[**\Assembly\Client\Model\GradeSet**](../Model/GradeSet.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findAssessmentPoint**
> \Assembly\Client\Model\AssessmentPoint findAssessmentPoint($assessment_point_rank)

View an Assessment Point

Returns a single assessment point for the given rank

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$assessment_point_rank = 56; // int | The rank of the assessment point as an Integer

try {
  $result = $apiInstance->findAssessmentPoint($assessment_point_rank);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->findAssessmentPoint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assessment_point_rank** | **int**| The rank of the assessment point as an Integer |

### Return type

[**\Assembly\Client\Model\AssessmentPoint**](../Model/AssessmentPoint.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findDietaryNeed**
> \Assembly\Client\Model\DietaryNeed findDietaryNeed($id)

View a Dietary Need

Returns a single dietary need for the given ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$id = 56; // int | Internal identifier of the entity

try {
  $result = $apiInstance->findDietaryNeed($id);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->findDietaryNeed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Internal identifier of the entity |

### Return type

[**\Assembly\Client\Model\DietaryNeed**](../Model/DietaryNeed.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findFacet**
> \Assembly\Client\Model\Facet findFacet($id)

View a Facet

Returns a single facet for the given ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$id = 56; // int | Internal identifier of the entity

try {
  $result = $apiInstance->findFacet($id);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->findFacet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Internal identifier of the entity |

### Return type

[**\Assembly\Client\Model\Facet**](../Model/Facet.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findGradeSet**
> \Assembly\Client\Model\GradeSet findGradeSet($id)

View a Grade Set

Returns a single grade set for the given ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$id = 56; // int | Internal identifier of the entity

try {
  $result = $apiInstance->findGradeSet($id);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->findGradeSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Internal identifier of the entity |

### Return type

[**\Assembly\Client\Model\GradeSet**](../Model/GradeSet.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findGroup**
> \Assembly\Client\Model\Group findGroup($id)

View a Group

Returns a list of groups that match the given set of filters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$id = 56; // int | Internal identifier of the entity

try {
  $result = $apiInstance->findGroup($id);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->findGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Internal identifier of the entity |

### Return type

[**\Assembly\Client\Model\Group**](../Model/Group.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findLearningAim**
> \Assembly\Client\Model\LearningAim findLearningAim($id)

View a Post-16 Learning Aim

Returns a Post-16 Learning Aim retrieved by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$id = 56; // int | Internal identifier of the entity

try {
  $result = $apiInstance->findLearningAim($id);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->findLearningAim: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Internal identifier of the entity |

### Return type

[**\Assembly\Client\Model\LearningAim**](../Model/LearningAim.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findMedicalCondition**
> \Assembly\Client\Model\MedicalCondition findMedicalCondition($id)

View a Medical Condition

Returns a single medical condition for the given ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$id = 56; // int | Internal identifier of the entity

try {
  $result = $apiInstance->findMedicalCondition($id);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->findMedicalCondition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Internal identifier of the entity |

### Return type

[**\Assembly\Client\Model\MedicalCondition**](../Model/MedicalCondition.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findRegistrationGroup**
> \Assembly\Client\Model\RegistrationGroup findRegistrationGroup($id, $date)

View a Registration Group

Returns a list of registration groups that match the given set of filters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$id = 56; // int | Internal identifier of the entity
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by a specific date, used as the `start_date` and `end_date` where applicable

try {
  $result = $apiInstance->findRegistrationGroup($id, $date);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->findRegistrationGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Internal identifier of the entity |
 **date** | **\DateTime**| Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable | [optional]

### Return type

[**\Assembly\Client\Model\RegistrationGroup**](../Model/RegistrationGroup.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findRoom**
> \Assembly\Client\Model\Room findRoom($id, $if_modified_since, $date, $start_date, $end_date)

View a Room

Returns a single room for the school associated with the provided `access_token`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$id = 56; // int | Internal identifier of the entity
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests))
$date = 'date_example'; // string | Filter by a specific date, used as the `start_date` and `end_date` where applicable
$start_date = 'start_date_example'; // string | The start date of the period to filter by
$end_date = 'end_date_example'; // string | The end date of the period to filter by

try {
  $result = $apiInstance->findRoom($id, $if_modified_since, $date, $start_date, $end_date);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->findRoom: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Internal identifier of the entity |
 **if_modified_since** | **\DateTime**| Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) | [optional]
 **date** | **string**| Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable | [optional]
 **start_date** | **string**| The start date of the period to filter by | [optional]
 **end_date** | **string**| The end date of the period to filter by | [optional]

### Return type

[**\Assembly\Client\Model\Room**](../Model/Room.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findSchool**
> \Assembly\Client\Model\School findSchool()

View School Details

Returns details for the school associated with the provided `access_token`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);

try {
  $result = $apiInstance->findSchool();
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->findSchool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Assembly\Client\Model\School**](../Model/School.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findStaffMember**
> \Assembly\Client\Model\StaffMember findStaffMember($id, $demographics, $qualifications)

View a Staff Member

Returns an individual staff member record for the given ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$id = 56; // int | Internal identifier of the entity
$demographics = True; // bool | Include demographics data
$qualifications = True; // bool | Include HLTA status, QT status, QT route and previous degree information (requires `staff_members.qualifications` scope)

try {
  $result = $apiInstance->findStaffMember($id, $demographics, $qualifications);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->findStaffMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Internal identifier of the entity |
 **demographics** | **bool**| Include demographics data | [optional]
 **qualifications** | **bool**| Include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) | [optional]

### Return type

[**\Assembly\Client\Model\StaffMember**](../Model/StaffMember.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findStudent**
> \Assembly\Client\Model\Student findStudent($id, $demographics, $contacts, $sen_needs, $emails, $addresses, $care, $ever_in_care, $languages, $photo)

View a Student

Returns an individual student record for the given ID.  **Note:** the response shown includes student demographics, contacts, student SEN needs, student addresses, photo and student care data but these will only be present if you have permission to access it and pass `demographics`, `contacts`, `sen_needs`, `addresses`, `photo`, `care` and `ever_in_care` respectively.  ### Photo Notes When requesting photo information the response includes a `photo.url` property, this URL should be treated as confidential and used to download the students photo to your storage system of choice. The URL is *not designed for hotlinking directly in the browser* for end users. URLs are signed and only valid for 1 hour after which time you will receive a 400 error.  Once downloaded to avoid repeatedly syncing unchanged photos you should code your application to compare the `photo.hash` property to detect changes in student photos since your last sync, it is guaranteed that changes in a photo will change the hash, however the hash is only intended to be used to detect photo changes and is not guaranteed to match a checksum of the files contents.  Photos are currently provided on an \"as is\" basis straight from the source MIS, this means the format, quality, metadata and dimensions are not guaranteed. We reserve the right to normalise this data in the future but your application should be resistant to differing photo formats.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$id = 56; // int | Internal identifier of the entity
$demographics = True; // bool | Include demographics data
$contacts = True; // bool | Include contacts data
$sen_needs = True; // bool | Include SEN needs data
$emails = True; // bool | Include email addresses
$addresses = True; // bool | Include student address data
$care = True; // bool | Include student care data (you must also supply the demographics parameter)
$ever_in_care = True; // bool | Include whether the student has ever been in care (you must also supply the demographics parameter)
$languages = True; // bool | Include student language data
$photo = True; // bool | Include student photo data

try {
  $result = $apiInstance->findStudent($id, $demographics, $contacts, $sen_needs, $emails, $addresses, $care, $ever_in_care, $languages, $photo);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->findStudent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Internal identifier of the entity |
 **demographics** | **bool**| Include demographics data | [optional]
 **contacts** | **bool**| Include contacts data | [optional]
 **sen_needs** | **bool**| Include SEN needs data | [optional]
 **emails** | **bool**| Include email addresses | [optional]
 **addresses** | **bool**| Include student address data | [optional]
 **care** | **bool**| Include student care data (you must also supply the demographics parameter) | [optional]
 **ever_in_care** | **bool**| Include whether the student has ever been in care (you must also supply the demographics parameter) | [optional]
 **languages** | **bool**| Include student language data | [optional]
 **photo** | **bool**| Include student photo data | [optional]

### Return type

[**\Assembly\Client\Model\Student**](../Model/Student.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findTeachingGroup**
> \Assembly\Client\Model\TeachingGroup findTeachingGroup($id, $date)

View a Teaching Group

Returns a list of teaching groups that match the given set of filters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$id = 56; // int | Internal identifier of the entity
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by a specific date, used as the `start_date` and `end_date` where applicable

try {
  $result = $apiInstance->findTeachingGroup($id, $date);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->findTeachingGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Internal identifier of the entity |
 **date** | **\DateTime**| Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable | [optional]

### Return type

[**\Assembly\Client\Model\TeachingGroup**](../Model/TeachingGroup.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findTimetable**
> \Assembly\Client\Model\Timetable findTimetable($id, $if_modified_since, $date, $start_date, $end_date)

View a Timetable

Returns an individual timetable for the given ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$id = 56; // int | Internal identifier of the entity
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests))
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by a specific date, used as the `start_date` and `end_date` where applicable
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date of the period to filter by
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date of the period to filter by

try {
  $result = $apiInstance->findTimetable($id, $if_modified_since, $date, $start_date, $end_date);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->findTimetable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Internal identifier of the entity |
 **if_modified_since** | **\DateTime**| Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) | [optional]
 **date** | **\DateTime**| Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable | [optional]
 **start_date** | **\DateTime**| The start date of the period to filter by | [optional]
 **end_date** | **\DateTime**| The end date of the period to filter by | [optional]

### Return type

[**\Assembly\Client\Model\Timetable**](../Model/Timetable.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findYearGroup**
> \Assembly\Client\Model\YearGroup findYearGroup($id, $date)

View a Year Group

Returns a list of year groups that match the given set of filters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$id = 56; // int | Internal identifier of the entity
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by a specific date, used as the `start_date` and `end_date` where applicable

try {
  $result = $apiInstance->findYearGroup($id, $date);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->findYearGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Internal identifier of the entity |
 **date** | **\DateTime**| Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable | [optional]

### Return type

[**\Assembly\Client\Model\YearGroup**](../Model/YearGroup.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAcademicYears**
> \Assembly\Client\Model\AcademicYear[] getAcademicYears($per_page, $page)

List Academic Years

Returns a list of academic years for the school associated with the provided `access_token`. The dates of these academic years can be used to filter data in other API endpoints

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$per_page = 50; // int | Number of results to return
$page = 5; // int | Page number to return

try {
  $result = $apiInstance->getAcademicYears($per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getAcademicYears: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\AcademicYear[]**](../Model/AcademicYear.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAssessmentPointResults**
> \Assembly\Client\Model\Result[] getAssessmentPointResults($assessment_point_rank, $students, $per_page, $page)

View Results for an Assessment Point

Returns a list of results for the given `assessment_point_rank` and students

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$assessment_point_rank = 56; // int | The rank of the assessment point as an Integer
$students = array(56); // int[] | ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded)
$per_page = 50; // int | Number of results to return
$page = 5; // int | Page number to return

try {
  $result = $apiInstance->getAssessmentPointResults($assessment_point_rank, $students, $per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getAssessmentPointResults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assessment_point_rank** | **int**| The rank of the assessment point as an Integer |
 **students** | [**int[]**](../Model/int.md)| ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded) |
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\Result[]**](../Model/Result.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAssessmentPoints**
> \Assembly\Client\Model\AssessmentPoint[] getAssessmentPoints($year_code, $type, $per_page, $page)

List Assessment Points

Returns a list of assessment points. An `assessment_point` object represents a point in the school key stage, year, term or half-term that results can be attached to. When sending results back to the Platform, the `assessment_point_rank` should be used - this will remain constant across all environments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$year_code = 56; // int | Filter by school year
$type = 'type_example'; // string | Filter by assessment point type
$per_page = 50; // int | Number of results to return
$page = 5; // int | Page number to return

try {
  $result = $apiInstance->getAssessmentPoints($year_code, $type, $per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getAssessmentPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year_code** | **int**| Filter by school year | [optional]
 **type** | **string**| Filter by assessment point type | [optional]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\AssessmentPoint[]**](../Model/AssessmentPoint.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAssessmentResults**
> \Assembly\Client\Model\Result[] getAssessmentResults($id, $students, $per_page, $page)

View Results for an Assessment

Returns a list of results for the given `assessment_id` and students. For a full list of national assessment data (Key stage 1 and 2 SATs results) available on the Platform, please see this [support article](http://help.assembly.education/article/89-getting-prior-attainment-from-the-platform)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$id = 56; // int | Internal identifier of the entity
$students = array(56); // int[] | ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded)
$per_page = 50; // int | Number of results to return
$page = 5; // int | Page number to return

try {
  $result = $apiInstance->getAssessmentResults($id, $students, $per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getAssessmentResults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Internal identifier of the entity |
 **students** | [**int[]**](../Model/int.md)| ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded) |
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\Result[]**](../Model/Result.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAssessments**
> \Assembly\Client\Model\Assessment[] getAssessments($per_page, $page)

List Assessments

Returns a list of assessment objects. The assessment is the grouping that knits together a range of concepts. The name of the assessment also refers to the source of the result

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$per_page = 50; // int | Number of results to return
$page = 5; // int | Page number to return

try {
  $result = $apiInstance->getAssessments($per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getAssessments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\Assessment[]**](../Model/Assessment.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAttendanceSummaries**
> \Assembly\Client\Model\AttendanceSummary[] getAttendanceSummaries($if_modified_since, $student_id, $registration_group_id, $academic_year_id, $per_page, $page)

List Attendance Summaries

Returns a list of attendance summaries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests))
$student_id = 56; // int | Filter to the specified student
$registration_group_id = 56; // int | ID of a registration group
$academic_year_id = 56; // int | Include all groups and group memberships from the specified academic year
$per_page = 50; // int | Number of results to return
$page = 5; // int | Page number to return

try {
  $result = $apiInstance->getAttendanceSummaries($if_modified_since, $student_id, $registration_group_id, $academic_year_id, $per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getAttendanceSummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **\DateTime**| Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) | [optional]
 **student_id** | **int**| Filter to the specified student | [optional]
 **registration_group_id** | **int**| ID of a registration group | [optional]
 **academic_year_id** | **int**| Include all groups and group memberships from the specified academic year | [optional]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\AttendanceSummary[]**](../Model/AttendanceSummary.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAttendances**
> \Assembly\Client\Model\Attendance[] getAttendances($if_modified_since, $student_id, $registration_group_id, $start_date, $end_date, $per_page, $page)

List Attendances

Returns a list of attendances. By default, attendances are returned from the start to the end of the current week

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests))
$student_id = 56; // int | Filter to the specified student
$registration_group_id = 56; // int | ID of a registration group
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date of the period to filter by
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date of the period to filter by
$per_page = 50; // int | Number of results to return
$page = 5; // int | Page number to return

try {
  $result = $apiInstance->getAttendances($if_modified_since, $student_id, $registration_group_id, $start_date, $end_date, $per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getAttendances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **\DateTime**| Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) | [optional]
 **student_id** | **int**| Filter to the specified student | [optional]
 **registration_group_id** | **int**| ID of a registration group | [optional]
 **start_date** | **\DateTime**| The start date of the period to filter by | [optional]
 **end_date** | **\DateTime**| The end date of the period to filter by | [optional]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\Attendance[]**](../Model/Attendance.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCalendarEvents**
> \Assembly\Client\Model\CalendarEvent[] getCalendarEvents($if_modified_since, $type, $per_page, $page)

List Calendar Events

Returns a list of calendar events from the school calendar. This category includes items such as staff meetings and school assembly times as you can see from the sample response below

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests))
$type = 'type_example'; // string | Filter by assessment point type
$per_page = 50; // int | Number of results to return
$page = 5; // int | Page number to return

try {
  $result = $apiInstance->getCalendarEvents($if_modified_since, $type, $per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getCalendarEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **\DateTime**| Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) | [optional]
 **type** | **string**| Filter by assessment point type | [optional]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\CalendarEvent[]**](../Model/CalendarEvent.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClosures**
> \Assembly\Client\Model\Closure[] getClosures($id, $if_modified_since, $date, $start_date, $end_date)

List Closures For a Room

Returns a list of room closures for the school associated with the provided `access_token`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$id = 56; // int | Internal identifier of the entity
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests))
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by a specific date, used as the `start_date` and `end_date` where applicable
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date of the period to filter by
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date of the period to filter by

try {
  $result = $apiInstance->getClosures($id, $if_modified_since, $date, $start_date, $end_date);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getClosures: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Internal identifier of the entity |
 **if_modified_since** | **\DateTime**| Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) | [optional]
 **date** | **\DateTime**| Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable | [optional]
 **start_date** | **\DateTime**| The start date of the period to filter by | [optional]
 **end_date** | **\DateTime**| The end date of the period to filter by | [optional]

### Return type

[**\Assembly\Client\Model\Closure[]**](../Model/Closure.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContacts**
> \Assembly\Client\Model\Contact[] getContacts($student_id, $per_page, $page)

List Contacts

Returns a list of contacts that match the given set of filters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$student_id = 56; // int | Filter to the specified student
$per_page = 50; // int | Number of results to return
$page = 5; // int | Page number to return

try {
  $result = $apiInstance->getContacts($student_id, $per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **student_id** | **int**| Filter to the specified student | [optional]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\Contact[]**](../Model/Contact.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDietaryNeeds**
> \Assembly\Client\Model\DietaryNeed[] getDietaryNeeds($per_page, $page)

List Dietary Needs

Returns a list of all the Dietary Needs defined by the school

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$per_page = 50; // int | Number of results to return
$page = 5; // int | Page number to return

try {
  $result = $apiInstance->getDietaryNeeds($per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getDietaryNeeds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\DietaryNeed[]**](../Model/DietaryNeed.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExclusions**
> \Assembly\Client\Model\Exclusion[] getExclusions($student_id, $start_date, $end_date, $per_page, $page)

List Exclusions

Returns a list of exclusions. *By default, exclusions are returned that occurred during the current academic year.*

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$student_id = 56; // int | Filter to the specified student
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date of the period to filter by
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date of the period to filter by
$per_page = 50; // int | Number of results to return
$page = 5; // int | Page number to return

try {
  $result = $apiInstance->getExclusions($student_id, $start_date, $end_date, $per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getExclusions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **student_id** | **int**| Filter to the specified student | [optional]
 **start_date** | **\DateTime**| The start date of the period to filter by | [optional]
 **end_date** | **\DateTime**| The end date of the period to filter by | [optional]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\Exclusion[]**](../Model/Exclusion.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFacets**
> \Assembly\Client\Model\Facet[] getFacets($per_page, $page)

List Facets

Returns a list of facets. The facet is used to reflect a different type of grade and allows 2 grades of the same assessment to be compared

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$per_page = 50; // int | Number of results to return
$page = 5; // int | Page number to return

try {
  $result = $apiInstance->getFacets($per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getFacets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\Facet[]**](../Model/Facet.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGradeSets**
> \Assembly\Client\Model\GradeSet[] getGradeSets($per_page, $page)

List Grade Sets

Returns a list of grade sets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$per_page = 50; // int | Number of results to return
$page = 5; // int | Page number to return

try {
  $result = $apiInstance->getGradeSets($per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getGradeSets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\GradeSet[]**](../Model/GradeSet.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroups**
> \Assembly\Client\Model\Group[] getGroups($if_modified_since, $academic_year_id, $per_page, $page)

List Groups

Returns a list of groups that match the given set of filters.  If a date parameter is provided then the list of groups returned is filtered to only those where the provided date falls between the groups `start_date` and `end_date`. Additionally when a date parameter is provided `student_ids` and `supervior_ids` are restricted to only those students who were enrolled in the group on the given date.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests))
$academic_year_id = 56; // int | Include all groups and group memberships from the specified academic year
$per_page = 50; // int | Number of results to return
$page = 5; // int | Page number to return

try {
  $result = $apiInstance->getGroups($if_modified_since, $academic_year_id, $per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **\DateTime**| Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) | [optional]
 **academic_year_id** | **int**| Include all groups and group memberships from the specified academic year | [optional]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\Group[]**](../Model/Group.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLearningAims**
> \Assembly\Client\Model\LearningAim[] getLearningAims($per_page, $page)

List Post-16 Learning Aims

Returns a list of Post-16 Learning Aims defined within the school

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$per_page = 50; // int | Number of results to return
$page = 5; // int | Page number to return

try {
  $result = $apiInstance->getLearningAims($per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getLearningAims: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\LearningAim[]**](../Model/LearningAim.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLeftStaffMembers**
> \Assembly\Client\Model\StaffMember[] getLeftStaffMembers($if_modified_since, $teachers_only, $demographics, $qualifications, $per_page, $page)

List Left Staff Members

Returns a list of staff members who have left the school

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests))
$teachers_only = True; // bool | Filter to staff who are teachers
$demographics = True; // bool | Include demographics data
$qualifications = True; // bool | Include HLTA status, QT status, QT route and previous degree information (requires `staff_members.qualifications` scope)
$per_page = 50; // int | Number of results to return
$page = 5; // int | Page number to return

try {
  $result = $apiInstance->getLeftStaffMembers($if_modified_since, $teachers_only, $demographics, $qualifications, $per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getLeftStaffMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **\DateTime**| Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) | [optional]
 **teachers_only** | **bool**| Filter to staff who are teachers | [optional]
 **demographics** | **bool**| Include demographics data | [optional]
 **qualifications** | **bool**| Include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) | [optional]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\StaffMember[]**](../Model/StaffMember.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLeftStudents**
> \Assembly\Client\Model\Student[] getLeftStudents($if_modified_since, $per_page, $page)

List Left Students

Returns a list of students who have left the school

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests))
$per_page = 50; // int | Number of results to return
$page = 5; // int | Page number to return

try {
  $result = $apiInstance->getLeftStudents($if_modified_since, $per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getLeftStudents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **\DateTime**| Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) | [optional]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\Student[]**](../Model/Student.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLessons**
> \Assembly\Client\Model\Lesson[] getLessons($id, $if_modified_since, $date, $start_date, $end_date, $per_page, $page)

List Lessons For a Room

Returns a list of lessons in a room for the school associated with the provided `access_token`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$id = 56; // int | Internal identifier of the entity
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests))
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by a specific date, used as the `start_date` and `end_date` where applicable
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date of the period to filter by
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date of the period to filter by
$per_page = 50; // int | Number of results to return
$page = 5; // int | Page number to return

try {
  $result = $apiInstance->getLessons($id, $if_modified_since, $date, $start_date, $end_date, $per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getLessons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Internal identifier of the entity |
 **if_modified_since** | **\DateTime**| Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) | [optional]
 **date** | **\DateTime**| Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable | [optional]
 **start_date** | **\DateTime**| The start date of the period to filter by | [optional]
 **end_date** | **\DateTime**| The end date of the period to filter by | [optional]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\Lesson[]**](../Model/Lesson.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMedicalConditions**
> \Assembly\Client\Model\MedicalCondition[] getMedicalConditions($per_page, $page)

List Medical Conditions

Returns a list of all the Medical Conditions defined by the school

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$per_page = 50; // int | Number of results to return
$page = 5; // int | Page number to return

try {
  $result = $apiInstance->getMedicalConditions($per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getMedicalConditions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\MedicalCondition[]**](../Model/MedicalCondition.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegistrationGroupStudents**
> \Assembly\Client\Model\Student[] getRegistrationGroupStudents($id, $if_modified_since, $date, $year_code, $demographics, $contacts, $sen_needs, $emails, $addresses, $care, $ever_in_care, $languages, $photo, $per_page, $page)

List Students for Registration Group

Returns a list of all the students that are present in the registration group identified by `group_id`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$id = 56; // int | Internal identifier of the entity
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests))
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by a specific date, used as the `start_date` and `end_date` where applicable
$year_code = 56; // int | Filter by school year
$demographics = True; // bool | Include demographics data
$contacts = True; // bool | Include contacts data
$sen_needs = True; // bool | Include SEN needs data
$emails = True; // bool | Include email addresses
$addresses = True; // bool | Include student address data
$care = True; // bool | Include student care data (you must also supply the demographics parameter)
$ever_in_care = True; // bool | Include whether the student has ever been in care (you must also supply the demographics parameter)
$languages = True; // bool | Include student language data
$photo = True; // bool | Include student photo data
$per_page = 50; // int | Number of results to return
$page = 5; // int | Page number to return

try {
  $result = $apiInstance->getRegistrationGroupStudents($id, $if_modified_since, $date, $year_code, $demographics, $contacts, $sen_needs, $emails, $addresses, $care, $ever_in_care, $languages, $photo, $per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getRegistrationGroupStudents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Internal identifier of the entity |
 **if_modified_since** | **\DateTime**| Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) | [optional]
 **date** | **\DateTime**| Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable | [optional]
 **year_code** | **int**| Filter by school year | [optional]
 **demographics** | **bool**| Include demographics data | [optional]
 **contacts** | **bool**| Include contacts data | [optional]
 **sen_needs** | **bool**| Include SEN needs data | [optional]
 **emails** | **bool**| Include email addresses | [optional]
 **addresses** | **bool**| Include student address data | [optional]
 **care** | **bool**| Include student care data (you must also supply the demographics parameter) | [optional]
 **ever_in_care** | **bool**| Include whether the student has ever been in care (you must also supply the demographics parameter) | [optional]
 **languages** | **bool**| Include student language data | [optional]
 **photo** | **bool**| Include student photo data | [optional]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\Student[]**](../Model/Student.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegistrationGroups**
> \Assembly\Client\Model\RegistrationGroup[] getRegistrationGroups($if_modified_since, $year_code, $date, $academic_year_id, $per_page, $page)

List Registration Groups

Returns a list of registration groups that match the given set of filters.  If a date parameter is provided then the list of groups returned is filtered to only those where the provided date falls between the groups `start_date` and `end_date`. Additionally when a date parameter is provided `student_ids` and `supervior_ids` are restricted to only those students who were enrolled in the group on the given date.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests))
$year_code = 56; // int | Filter by school year
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by a specific date, used as the `start_date` and `end_date` where applicable
$academic_year_id = 56; // int | Include all groups and group memberships from the specified academic year
$per_page = 50; // int | Number of results to return
$page = 5; // int | Page number to return

try {
  $result = $apiInstance->getRegistrationGroups($if_modified_since, $year_code, $date, $academic_year_id, $per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getRegistrationGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **\DateTime**| Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) | [optional]
 **year_code** | **int**| Filter by school year | [optional]
 **date** | **\DateTime**| Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable | [optional]
 **academic_year_id** | **int**| Include all groups and group memberships from the specified academic year | [optional]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\RegistrationGroup[]**](../Model/RegistrationGroup.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getResults**
> \Assembly\Client\Model\Result[] getResults($students, $if_modified_since, $per_page, $page)

List Results

Returns a list of results for the student ID(s) specified by the students parameter

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$students = array(56); // int[] | ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded)
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests))
$per_page = 50; // int | Number of results to return
$page = 5; // int | Page number to return

try {
  $result = $apiInstance->getResults($students, $if_modified_since, $per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getResults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **students** | [**int[]**](../Model/int.md)| ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded) |
 **if_modified_since** | **\DateTime**| Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) | [optional]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\Result[]**](../Model/Result.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRooms**
> \Assembly\Client\Model\Room[] getRooms($if_modified_since, $per_page, $page)

List Rooms

Returns a list of rooms for the school associated with the provided `access_token`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests))
$per_page = 50; // int | Number of results to return
$page = 5; // int | Page number to return

try {
  $result = $apiInstance->getRooms($if_modified_since, $per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getRooms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **\DateTime**| Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) | [optional]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\Room[]**](../Model/Room.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStaffAbsences**
> \Assembly\Client\Model\StaffAbsence[] getStaffAbsences($staff_member_id, $start_date, $end_date, $per_page, $page)

List Staff Absences

Returns a list of staff member absences for the school accociated with the provided `access_token`. A school level access token with the `staff_members.absences` scope is required to access staff member absence information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$staff_member_id = 56; // int | Filter to the specified staff member
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date of the period to filter by
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date of the period to filter by
$per_page = 50; // int | Number of results to return
$page = 5; // int | Page number to return

try {
  $result = $apiInstance->getStaffAbsences($staff_member_id, $start_date, $end_date, $per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getStaffAbsences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **staff_member_id** | **int**| Filter to the specified staff member | [optional]
 **start_date** | **\DateTime**| The start date of the period to filter by | [optional]
 **end_date** | **\DateTime**| The end date of the period to filter by | [optional]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\StaffAbsence[]**](../Model/StaffAbsence.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStaffContracts**
> \Assembly\Client\Model\StaffContract[] getStaffContracts($staff_member_id, $date, $roles, $salaries, $allowances, $per_page, $page)

List Staff Contracts

Returns a list of staff member contracts for the school accociated with the provided `access_token`. A school level access token with the `staff_members.contracts` scope is required to access staff member contract information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$staff_member_id = 56; // int | Filter to the specified staff member
$date = 'date_example'; // string | Filter by a specific date, used as the `start_date` and `end_date` where applicable
$roles = True; // bool | Include role information along with a staff contract
$salaries = True; // bool | Include salaries information along with a staff contract (requires `staff_members.salaries` scope for full information - only the `hours_per_week`, `fte` and `weeks_per_year` fields are shown without it)
$allowances = True; // bool | Include allowances information along with a staff contract (requires `staff_members.salaries` scope)
$per_page = 50; // int | Number of results to return
$page = 5; // int | Page number to return

try {
  $result = $apiInstance->getStaffContracts($staff_member_id, $date, $roles, $salaries, $allowances, $per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getStaffContracts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **staff_member_id** | **int**| Filter to the specified staff member | [optional]
 **date** | **string**| Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable | [optional]
 **roles** | **bool**| Include role information along with a staff contract | [optional]
 **salaries** | **bool**| Include salaries information along with a staff contract (requires &#x60;staff_members.salaries&#x60; scope for full information - only the &#x60;hours_per_week&#x60;, &#x60;fte&#x60; and &#x60;weeks_per_year&#x60; fields are shown without it) | [optional]
 **allowances** | **bool**| Include allowances information along with a staff contract (requires &#x60;staff_members.salaries&#x60; scope) | [optional]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\StaffContract[]**](../Model/StaffContract.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStaffMembers**
> \Assembly\Client\Model\StaffMember[] getStaffMembers($if_modified_since, $teachers_only, $demographics, $qualifications, $per_page, $page)

List Staff Members

Returns a list of staff members for the school accociated with the provided `access_token`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests))
$teachers_only = True; // bool | Filter to staff who are teachers
$demographics = True; // bool | Include demographics data
$qualifications = True; // bool | Include HLTA status, QT status, QT route and previous degree information (requires `staff_members.qualifications` scope)
$per_page = 50; // int | Number of results to return
$page = 5; // int | Page number to return

try {
  $result = $apiInstance->getStaffMembers($if_modified_since, $teachers_only, $demographics, $qualifications, $per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getStaffMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **\DateTime**| Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) | [optional]
 **teachers_only** | **bool**| Filter to staff who are teachers | [optional]
 **demographics** | **bool**| Include demographics data | [optional]
 **qualifications** | **bool**| Include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) | [optional]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\StaffMember[]**](../Model/StaffMember.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStudents**
> \Assembly\Client\Model\Student[] getStudents($if_modified_since, $students, $date, $year_code, $demographics, $contacts, $sen_needs, $emails, $addresses, $care, $ever_in_care, $languages, $photo, $per_page, $page)

List Students

Returns a list of students for the school associated with the provided `access_token`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests))
$students = array(56); // int[] | ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded)
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by a specific date, used as the `start_date` and `end_date` where applicable
$year_code = 56; // int | Filter by school year
$demographics = True; // bool | Include demographics data
$contacts = True; // bool | Include contacts data
$sen_needs = True; // bool | Include SEN needs data
$emails = True; // bool | Include email addresses
$addresses = True; // bool | Include student address data
$care = True; // bool | Include student care data (you must also supply the demographics parameter)
$ever_in_care = True; // bool | Include whether the student has ever been in care (you must also supply the demographics parameter)
$languages = True; // bool | Include student language data
$photo = True; // bool | Include student photo data
$per_page = 50; // int | Number of results to return
$page = 5; // int | Page number to return

try {
  $result = $apiInstance->getStudents($if_modified_since, $students, $date, $year_code, $demographics, $contacts, $sen_needs, $emails, $addresses, $care, $ever_in_care, $languages, $photo, $per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getStudents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **\DateTime**| Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) | [optional]
 **students** | [**int[]**](../Model/int.md)| ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded) | [optional]
 **date** | **\DateTime**| Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable | [optional]
 **year_code** | **int**| Filter by school year | [optional]
 **demographics** | **bool**| Include demographics data | [optional]
 **contacts** | **bool**| Include contacts data | [optional]
 **sen_needs** | **bool**| Include SEN needs data | [optional]
 **emails** | **bool**| Include email addresses | [optional]
 **addresses** | **bool**| Include student address data | [optional]
 **care** | **bool**| Include student care data (you must also supply the demographics parameter) | [optional]
 **ever_in_care** | **bool**| Include whether the student has ever been in care (you must also supply the demographics parameter) | [optional]
 **languages** | **bool**| Include student language data | [optional]
 **photo** | **bool**| Include student photo data | [optional]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\Student[]**](../Model/Student.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubjects**
> \Assembly\Client\Model\Subject[] getSubjects($per_page, $page)

List Subjects

Returns a list of the Assembly Platform's subjects

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$per_page = 50; // int | Number of results to return
$page = 5; // int | Page number to return

try {
  $result = $apiInstance->getSubjects($per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getSubjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\Subject[]**](../Model/Subject.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTeachingGroupStudents**
> \Assembly\Client\Model\Student[] getTeachingGroupStudents($id, $if_modified_since, $academic_year_id, $date, $year_code, $demographics, $contacts, $sen_needs, $emails, $addresses, $care, $ever_in_care, $languages, $photo, $per_page, $page)

List Students for Teaching Group

Returns a list of all the students that are present in the teaching group identified by `group_id`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$id = 56; // int | Internal identifier of the entity
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests))
$academic_year_id = 56; // int | Include all groups and group memberships from the specified academic year
$date = 'date_example'; // string | Filter by a specific date, used as the `start_date` and `end_date` where applicable
$year_code = 56; // int | Filter by school year
$demographics = True; // bool | Include demographics data
$contacts = True; // bool | Include contacts data
$sen_needs = True; // bool | Include SEN needs data
$emails = True; // bool | Include email addresses
$addresses = True; // bool | Include student address data
$care = True; // bool | Include student care data (you must also supply the demographics parameter)
$ever_in_care = True; // bool | Include whether the student has ever been in care (you must also supply the demographics parameter)
$languages = True; // bool | Include student language data
$photo = True; // bool | Include student photo data
$per_page = 50; // int | Number of results to return
$page = 5; // int | Page number to return

try {
  $result = $apiInstance->getTeachingGroupStudents($id, $if_modified_since, $academic_year_id, $date, $year_code, $demographics, $contacts, $sen_needs, $emails, $addresses, $care, $ever_in_care, $languages, $photo, $per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getTeachingGroupStudents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Internal identifier of the entity |
 **if_modified_since** | **\DateTime**| Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) | [optional]
 **academic_year_id** | **int**| Include all groups and group memberships from the specified academic year | [optional]
 **date** | **string**| Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable | [optional]
 **year_code** | **int**| Filter by school year | [optional]
 **demographics** | **bool**| Include demographics data | [optional]
 **contacts** | **bool**| Include contacts data | [optional]
 **sen_needs** | **bool**| Include SEN needs data | [optional]
 **emails** | **bool**| Include email addresses | [optional]
 **addresses** | **bool**| Include student address data | [optional]
 **care** | **bool**| Include student care data (you must also supply the demographics parameter) | [optional]
 **ever_in_care** | **bool**| Include whether the student has ever been in care (you must also supply the demographics parameter) | [optional]
 **languages** | **bool**| Include student language data | [optional]
 **photo** | **bool**| Include student photo data | [optional]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\Student[]**](../Model/Student.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTeachingGroups**
> \Assembly\Client\Model\TeachingGroup[] getTeachingGroups($if_modified_since, $subject_code, $year_code, $date, $academic_year_id, $per_page, $page)

List Teaching Groups

Returns a list of teaching groups that match the given set of filters.  If a date parameter is provided then the list of groups returned is filtered to only those where the provided date falls between the groups start_date and end_date. Additionally when a date parameter is provided student_ids and supervior_ids are restricted to only those students who were enrolled in the group on the given date.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests))
$subject_code = 'subject_code_example'; // string | Filter by subject
$year_code = 56; // int | Filter by school year
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by a specific date, used as the `start_date` and `end_date` where applicable
$academic_year_id = 56; // int | Include all groups and group memberships from the specified academic year
$per_page = 50; // int | Number of results to return
$page = 5; // int | Page number to return

try {
  $result = $apiInstance->getTeachingGroups($if_modified_since, $subject_code, $year_code, $date, $academic_year_id, $per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getTeachingGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **\DateTime**| Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) | [optional]
 **subject_code** | **string**| Filter by subject | [optional]
 **year_code** | **int**| Filter by school year | [optional]
 **date** | **\DateTime**| Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable | [optional]
 **academic_year_id** | **int**| Include all groups and group memberships from the specified academic year | [optional]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\TeachingGroup[]**](../Model/TeachingGroup.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTimetables**
> \Assembly\Client\Model\Timetable[] getTimetables($if_modified_since, $per_page, $page)

List Timetables

Returns a list of timetables that match the given set of filters.  If a date parameter is provided then the list of groups returned is filtered to only those where the provided date falls between the groups start_date and end_date. Additionally when a date parameter is provided student_ids and supervior_ids are restricted to only those students who were enrolled in the group on the given date.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests))
$per_page = 50; // int | Number of results to return
$page = 5; // int | Page number to return

try {
  $result = $apiInstance->getTimetables($if_modified_since, $per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getTimetables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **\DateTime**| Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) | [optional]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\Timetable[]**](../Model/Timetable.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getYearGroupStudents**
> \Assembly\Client\Model\Student[] getYearGroupStudents($id, $if_modified_since, $date, $demographics, $contacts, $sen_needs, $emails, $addresses, $care, $ever_in_care, $languages, $photo, $per_page, $page)

List Students for Year Group

Returns a list of all the students that are present in the year group identified by `group_id`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$id = 56; // int | Internal identifier of the entity
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests))
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by a specific date, used as the `start_date` and `end_date` where applicable
$demographics = True; // bool | Include demographics data
$contacts = True; // bool | Include contacts data
$sen_needs = True; // bool | Include SEN needs data
$emails = True; // bool | Include email addresses
$addresses = True; // bool | Include student address data
$care = True; // bool | Include student care data (you must also supply the demographics parameter)
$ever_in_care = True; // bool | Include whether the student has ever been in care (you must also supply the demographics parameter)
$languages = True; // bool | Include student language data
$photo = True; // bool | Include student photo data
$per_page = 50; // int | Number of results to return
$page = 5; // int | Page number to return

try {
  $result = $apiInstance->getYearGroupStudents($id, $if_modified_since, $date, $demographics, $contacts, $sen_needs, $emails, $addresses, $care, $ever_in_care, $languages, $photo, $per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getYearGroupStudents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Internal identifier of the entity |
 **if_modified_since** | **\DateTime**| Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) | [optional]
 **date** | **\DateTime**| Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable | [optional]
 **demographics** | **bool**| Include demographics data | [optional]
 **contacts** | **bool**| Include contacts data | [optional]
 **sen_needs** | **bool**| Include SEN needs data | [optional]
 **emails** | **bool**| Include email addresses | [optional]
 **addresses** | **bool**| Include student address data | [optional]
 **care** | **bool**| Include student care data (you must also supply the demographics parameter) | [optional]
 **ever_in_care** | **bool**| Include whether the student has ever been in care (you must also supply the demographics parameter) | [optional]
 **languages** | **bool**| Include student language data | [optional]
 **photo** | **bool**| Include student photo data | [optional]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\Student[]**](../Model/Student.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getYearGroups**
> \Assembly\Client\Model\YearGroup[] getYearGroups($if_modified_since, $date, $year_code, $academic_year_id, $per_page, $page)

List Year Groups

Returns a list of year groups that match the given set of filters.  If a date parameter is provided then the list of groups returned is filtered to only those where the provided date falls between the groups `start_date` and `end_date`. Additionally when a date parameter is provided `student_ids` and `supervior_ids` are restricted to only those students who were enrolled in the group on the given date.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests))
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by a specific date, used as the `start_date` and `end_date` where applicable
$year_code = 'year_code_example'; // string | Filter by school year
$academic_year_id = 56; // int | Include all groups and group memberships from the specified academic year
$per_page = 50; // int | Number of results to return
$page = 5; // int | Page number to return

try {
  $result = $apiInstance->getYearGroups($if_modified_since, $date, $year_code, $academic_year_id, $per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getYearGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **\DateTime**| Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) | [optional]
 **date** | **\DateTime**| Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable | [optional]
 **year_code** | **string**| Filter by school year | [optional]
 **academic_year_id** | **int**| Include all groups and group memberships from the specified academic year | [optional]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\YearGroup[]**](../Model/YearGroup.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **status**
> \Assembly\Client\Model\SchoolStatus status()

View School Sync Status

Returns status for the school associated with the provided `access_token`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);

try {
  $result = $apiInstance->status();
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->status: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Assembly\Client\Model\SchoolStatus**](../Model/SchoolStatus.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateResults**
> \Assembly\Client\Model\Result updateResults($id, $result_entry)

Update a Single Result

Once a result has been created, it can be updated on the Platform by passing the required field values in the request body. A list of the fields that were changed are returned in the response

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: SchoolToken
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$id = 56; // int | Internal identifier of the entity
$result_entry = new \Assembly\Client\Model\ResultEntry(); // \Assembly\Client\Model\ResultEntry | 

try {
  $result = $apiInstance->updateResults($id, $result_entry);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->updateResults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Internal identifier of the entity |
 **result_entry** | [**\Assembly\Client\Model\ResultEntry**](../Model/ResultEntry.md)|  | [optional]

### Return type

[**\Assembly\Client\Model\Result**](../Model/Result.md)

### Authorization

[SchoolToken](../../README.md#SchoolToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

