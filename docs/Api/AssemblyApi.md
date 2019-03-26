# Assembly\Client\AssemblyApi

All URIs are relative to *https://api-sandbox.assembly.education*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkUpdateResults**](AssemblyApi.md#bulkUpdateResults) | **PATCH** /results | Update Multiple Results
[**createResult**](AssemblyApi.md#createResult) | **POST** /results | Write Results
[**findAcademicYear**](AssemblyApi.md#findAcademicYear) | **GET** /academic_years/{id} | View an Academic Year
[**findAssessment**](AssemblyApi.md#findAssessment) | **GET** /assessments/{id} | View an Assessment
[**findAssessmentGradeSet**](AssemblyApi.md#findAssessmentGradeSet) | **GET** /assessments/{id}/grade_set | View Grade Set for an Assessment
[**findAssessmentPoint**](AssemblyApi.md#findAssessmentPoint) | **GET** /assessment_points/{id} | View an Assessment Point
[**findDietaryNeed**](AssemblyApi.md#findDietaryNeed) | **GET** /school/dietary_needs/{id} | View an Dietary Need
[**findFacet**](AssemblyApi.md#findFacet) | **GET** /facets/{id} | View a Facet
[**findGradeSet**](AssemblyApi.md#findGradeSet) | **GET** /grade_sets/{id} | View a Grade Set
[**findMedicalCondition**](AssemblyApi.md#findMedicalCondition) | **GET** /school/medical_conditions/{id} | View an Medical Condition
[**findRegistrationGroup**](AssemblyApi.md#findRegistrationGroup) | **GET** /registration_groups/{id} | View a Registration Group
[**findSchool**](AssemblyApi.md#findSchool) | **GET** /school | Get School Details
[**findStaffMember**](AssemblyApi.md#findStaffMember) | **GET** /staff_members/{id} | View a Staff Member
[**findStudent**](AssemblyApi.md#findStudent) | **GET** /students/{id} | View a Student
[**findTeachingGroup**](AssemblyApi.md#findTeachingGroup) | **GET** /teaching_groups/{id} | View a Teaching Group
[**findYearGroup**](AssemblyApi.md#findYearGroup) | **GET** /year_groups/{id} | View a Year Group
[**getAcademicYears**](AssemblyApi.md#getAcademicYears) | **GET** /academic_years | List Academic Years
[**getAssessmentPointResults**](AssemblyApi.md#getAssessmentPointResults) | **GET** /assessment_points/{id}/results | View Results for an Assessment Point
[**getAssessmentPoints**](AssemblyApi.md#getAssessmentPoints) | **GET** /assessment_points | List Assessment Points
[**getAssessmentResults**](AssemblyApi.md#getAssessmentResults) | **GET** /assessments/{id}/results | View Results for an Assessment
[**getAssessmentSummaries**](AssemblyApi.md#getAssessmentSummaries) | **GET** /attendances/summaries | List Attendance Summaries
[**getAssessments**](AssemblyApi.md#getAssessments) | **GET** /assessments | List Assessments
[**getAttendances**](AssemblyApi.md#getAttendances) | **GET** /attendances | List Attendances
[**getCalendarEvents**](AssemblyApi.md#getCalendarEvents) | **GET** /calendar_events | List Calendar Events
[**getContacts**](AssemblyApi.md#getContacts) | **GET** /contacts | List Contacts
[**getDietaryNeeds**](AssemblyApi.md#getDietaryNeeds) | **GET** /school/dietary_needs | Dietary Needs
[**getExclusions**](AssemblyApi.md#getExclusions) | **GET** /exclusions | List Exclusions
[**getFacets**](AssemblyApi.md#getFacets) | **GET** /facets | List Facets
[**getGradeSets**](AssemblyApi.md#getGradeSets) | **GET** /grade_sets | List Grade Sets
[**getLeftStaffMembers**](AssemblyApi.md#getLeftStaffMembers) | **GET** /staff_members/left | List Left Staff Members
[**getLeftStudents**](AssemblyApi.md#getLeftStudents) | **GET** /students/left | List Left Students
[**getMedicalConditions**](AssemblyApi.md#getMedicalConditions) | **GET** /school/medical_conditions | Medical Conditions
[**getRegistrationGroupStudents**](AssemblyApi.md#getRegistrationGroupStudents) | **GET** /registration_groups/{id}/students | List Students for Registration Group
[**getRegistrationGroups**](AssemblyApi.md#getRegistrationGroups) | **GET** /registration_groups | List Registration Group
[**getResults**](AssemblyApi.md#getResults) | **GET** /results | List Results
[**getStaffAbsences**](AssemblyApi.md#getStaffAbsences) | **GET** /staff_absences | List Staff Absences
[**getStaffContracts**](AssemblyApi.md#getStaffContracts) | **GET** /staff_contracts | List Staff Contracts
[**getStaffMembers**](AssemblyApi.md#getStaffMembers) | **GET** /staff_members | List Staff Members
[**getStudents**](AssemblyApi.md#getStudents) | **GET** /students | List Students
[**getSubjects**](AssemblyApi.md#getSubjects) | **GET** /subjects | List Subjects
[**getTeachingGroupStudents**](AssemblyApi.md#getTeachingGroupStudents) | **GET** /teaching_groups/{id}/students | List Students for Teaching Group
[**getTeachingGroups**](AssemblyApi.md#getTeachingGroups) | **GET** /teaching_groups | List Teaching Groups
[**getYearGroupStudents**](AssemblyApi.md#getYearGroupStudents) | **GET** /year_groups/{id}/students | List Students for Year Group
[**getYearGroups**](AssemblyApi.md#getYearGroups) | **GET** /year_groups | List Year Groups
[**status**](AssemblyApi.md#status) | **GET** /school/status | Get School Sync Status
[**updateResults**](AssemblyApi.md#updateResults) | **PATCH** /results/{id} | Update a Single Result


# **bulkUpdateResults**
> \Assembly\Client\Model\ApiResponse bulkUpdateResults($bulk_results_body)

Update Multiple Results

Multiple results can be updated simultaneously by providing the relevant result_ids in the body of your request. The response will tell you whether the batch of updates has either been successful or failed.

### Example
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

[**\Assembly\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createResult**
> \Assembly\Client\Model\Result[] createResult($result_body)

Write Results

Given a subject_id, facet_id, assessment_point_rank and assessment_id results can be sent to the Platform, along with a student_id, the grade_id and (optionally) the result_date.  **Permissions**: A school level access token with the assessments.write scope is needed to write results back to the Platform.

### Example
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

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findAcademicYear**
> \Assembly\Client\Model\AcademicYear findAcademicYear($id)

View an Academic Year

Returns a single academic year for the school associated with the provided access_token.

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of the entity |

### Return type

[**\Assembly\Client\Model\AcademicYear**](../Model/AcademicYear.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findAssessment**
> \Assembly\Client\Model\Assessment findAssessment($id)

View an Assessment

Returns a single assessment for the given id.

### Example
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
 **id** | **int**| id of the entity |

### Return type

[**\Assembly\Client\Model\Assessment**](../Model/Assessment.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findAssessmentGradeSet**
> \Assembly\Client\Model\GradeSet findAssessmentGradeSet($id)

View Grade Set for an Assessment

Returns a grade_set (an acceptable list of values) for the assessment identified by the assessment_id. Grades should be written back to the Platform using the grade_id.

### Example
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
 **id** | **int**| id of the entity |

### Return type

[**\Assembly\Client\Model\GradeSet**](../Model/GradeSet.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findAssessmentPoint**
> \Assembly\Client\Model\AssessmentPoint findAssessmentPoint($id)

View an Assessment Point

Returns a single assessment point for the given rank.

### Example
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
  $result = $apiInstance->findAssessmentPoint($id);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->findAssessmentPoint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of the entity |

### Return type

[**\Assembly\Client\Model\AssessmentPoint**](../Model/AssessmentPoint.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findDietaryNeed**
> \Assembly\Client\Model\DietaryNeed findDietaryNeed($id)

View an Dietary Need

Returns a single dietary need for the given id.

### Example
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
 **id** | **int**| id of the entity |

### Return type

[**\Assembly\Client\Model\DietaryNeed**](../Model/DietaryNeed.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findFacet**
> \Assembly\Client\Model\Facet findFacet($id)

View a Facet

Returns a single facet for the given id.

### Example
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
 **id** | **int**| id of the entity |

### Return type

[**\Assembly\Client\Model\Facet**](../Model/Facet.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findGradeSet**
> \Assembly\Client\Model\GradeSet findGradeSet($id)

View a Grade Set

Returns a single grade set for the given id.

### Example
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
 **id** | **int**| id of the entity |

### Return type

[**\Assembly\Client\Model\GradeSet**](../Model/GradeSet.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findMedicalCondition**
> \Assembly\Client\Model\MedicalCondition findMedicalCondition($id)

View an Medical Condition

Returns a single medical condition for the given id.

### Example
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
 **id** | **int**| id of the entity |

### Return type

[**\Assembly\Client\Model\MedicalCondition**](../Model/MedicalCondition.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findRegistrationGroup**
> \Assembly\Client\Model\RegistrationGroup findRegistrationGroup($id, $date, $academic_year_id)

View a Registration Group

Returns a list of registration groups that match the given set of filters.

### Example
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
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | returns results for a specific date
$academic_year_id = 56; // int | returns all groups and group memberships from the specified academic year

try {
  $result = $apiInstance->findRegistrationGroup($id, $date, $academic_year_id);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->findRegistrationGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of the entity |
 **date** | **\DateTime**| returns results for a specific date | [optional]
 **academic_year_id** | **int**| returns all groups and group memberships from the specified academic year | [optional]

### Return type

[**\Assembly\Client\Model\RegistrationGroup**](../Model/RegistrationGroup.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findSchool**
> \Assembly\Client\Model\School findSchool($id)

Get School Details

Returns details for the school associated with the provided access_token.

### Example
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
  $result = $apiInstance->findSchool($id);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->findSchool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of the entity |

### Return type

[**\Assembly\Client\Model\School**](../Model/School.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findStaffMember**
> \Assembly\Client\Model\StaffMember findStaffMember($id, $demographics, $qualifications)

View a Staff Member

Returns an individual staff member record for the given ID.  **Note:** Note the `If-Modified-Since` header is optional (see the page on [Conditional Requests](/api#conditional-requests) for more details).

### Example
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
$demographics = True; // bool | include demographics data
$qualifications = True; // bool | include HLTA status, QT status, QT route and previous degree information (requires `staff_members.qualifications` scope)

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
 **id** | **int**| id of the entity |
 **demographics** | **bool**| include demographics data | [optional]
 **qualifications** | **bool**| include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) | [optional]

### Return type

[**\Assembly\Client\Model\StaffMember**](../Model/StaffMember.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findStudent**
> \Assembly\Client\Model\Student findStudent($id, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo)

View a Student

Returns an individual student record for the given ID.  **Note:** the response shown includes student demographics, contacts, student SEN needs, student addresses, photo and student care data but these will only be present if you have permission to access it and pass `demographics`, `contacts`, `sen_needs`, `addresses`, `photo`, `care` and `ever_in_care` respectively  **Note:** Note the `If-Modified-Since` header is optional (see the page on [Conditional Requests](/api#conditional-requests) for more details).  ### Photo Notes When requesting photo information the response includes a `photo.url` property, this URL should be treated as confidential and used to download the students photo to your storage system of choice. The URL is *not designed for hotlinking directly in the browser* for end users. URLs are signed and only valid for 1 hour after which time you will receive a 400 error.  Once downloaded to avoid repeatedly syncing unchanged photos you should code your application to compare the `photo.hash` property to detect changes in student photos since your last sync, it is guaranteed that changes in a photo will change the hash, however the hash is only intended to be used to detect photo changes and is not guaranteed to match a checksum of the files contents.  Photos are currently provided on an \"as is\" basis straight from the source MIS, this means the format, quality, metadata and dimensions are not guaranteed. We reserve the right to normalise this data in the future but your application should be resistant to differing photo formats.

### Example
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
$demographics = True; // bool | include demographics data
$contacts = True; // bool | include contacts data
$sen_needs = True; // bool | include SEN needs data
$addresses = True; // bool | include student address data
$care = True; // bool | include student care data (you must also supply the demographics parameter)
$ever_in_care = True; // bool | include whether the student has ever been in care (you must also supply the demographics parameter)
$languages = True; // bool | include student language data
$photo = True; // bool | include student photo data

try {
  $result = $apiInstance->findStudent($id, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->findStudent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of the entity |
 **demographics** | **bool**| include demographics data | [optional]
 **contacts** | **bool**| include contacts data | [optional]
 **sen_needs** | **bool**| include SEN needs data | [optional]
 **addresses** | **bool**| include student address data | [optional]
 **care** | **bool**| include student care data (you must also supply the demographics parameter) | [optional]
 **ever_in_care** | **bool**| include whether the student has ever been in care (you must also supply the demographics parameter) | [optional]
 **languages** | **bool**| include student language data | [optional]
 **photo** | **bool**| include student photo data | [optional]

### Return type

[**\Assembly\Client\Model\Student**](../Model/Student.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findTeachingGroup**
> \Assembly\Client\Model\TeachingGroup findTeachingGroup($id, $date, $academic_year_id, $group_id)

View a Teaching Group

Returns a list of teaching groups that match the given set of filters.

### Example
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
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | returns results for a specific date
$academic_year_id = 56; // int | returns all groups and group memberships from the specified academic year
$group_id = 56; // int | a group_id to filter by

try {
  $result = $apiInstance->findTeachingGroup($id, $date, $academic_year_id, $group_id);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->findTeachingGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of the entity |
 **date** | **\DateTime**| returns results for a specific date | [optional]
 **academic_year_id** | **int**| returns all groups and group memberships from the specified academic year | [optional]
 **group_id** | **int**| a group_id to filter by | [optional]

### Return type

[**\Assembly\Client\Model\TeachingGroup**](../Model/TeachingGroup.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findYearGroup**
> \Assembly\Client\Model\YearGroup findYearGroup($id, $date, $academic_year_id)

View a Year Group

Returns a list of year groups that match the given set of filters.

### Example
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
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | returns results for a specific date
$academic_year_id = 56; // int | returns all groups and group memberships from the specified academic year

try {
  $result = $apiInstance->findYearGroup($id, $date, $academic_year_id);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->findYearGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of the entity |
 **date** | **\DateTime**| returns results for a specific date | [optional]
 **academic_year_id** | **int**| returns all groups and group memberships from the specified academic year | [optional]

### Return type

[**\Assembly\Client\Model\YearGroup**](../Model/YearGroup.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAcademicYears**
> \Assembly\Client\Model\AcademicYear[] getAcademicYears($per_page, $page)

List Academic Years

Returns a list of academic years for the school associated with the provided access_token. The dates of these academic years can be used to filter data in other API endpoints.

### Example
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
$per_page = 100; // int | Number of results to return
$page = 1; // int | Page number to return

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

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAssessmentPointResults**
> \Assembly\Client\Model\Result[] getAssessmentPointResults($id, $students, $assessment_point_rank)

View Results for an Assessment Point

Returns a list of results for the given assessment_point_rank and students.

### Example
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
$students = array(56); // int[] | ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded).
$assessment_point_rank = 56; // int | the Assessment Point rank

try {
  $result = $apiInstance->getAssessmentPointResults($id, $students, $assessment_point_rank);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getAssessmentPointResults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of the entity |
 **students** | [**int[]**](../Model/int.md)| ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). |
 **assessment_point_rank** | **int**| the Assessment Point rank | [optional]

### Return type

[**\Assembly\Client\Model\Result[]**](../Model/Result.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAssessmentPoints**
> \Assembly\Client\Model\AssessmentPoint[] getAssessmentPoints($per_page, $page)

List Assessment Points

Returns a list of assessment points. An assessment_point object represents a point in the school key stage, year, term or half-term that results can be attached to. When sending results back to the Platform, the assessment_point_rank should be used - this will remain constant across all environments.

### Example
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
$per_page = 100; // int | Number of results to return
$page = 1; // int | Page number to return

try {
  $result = $apiInstance->getAssessmentPoints($per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getAssessmentPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\AssessmentPoint[]**](../Model/AssessmentPoint.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAssessmentResults**
> \Assembly\Client\Model\Result[] getAssessmentResults($id, $students)

View Results for an Assessment

Returns a list of results for the given assessment_id and students. For a full list of national assessment data (Key stage 1 and 2 SATs results) available on the Platform, please see this support article.

### Example
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
$students = array(56); // int[] | ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded).

try {
  $result = $apiInstance->getAssessmentResults($id, $students);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getAssessmentResults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of the entity |
 **students** | [**int[]**](../Model/int.md)| ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). |

### Return type

[**\Assembly\Client\Model\Result[]**](../Model/Result.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAssessmentSummaries**
> \Assembly\Client\Model\AttendanceSummary[] getAssessmentSummaries($student_id, $registration_group_id)

List Attendance Summaries

Returns a list of attendance summaries.  **Note:** Note the `If-Modified-Since` header is optional (see the page on [Conditional Requests](/api#conditional-requests) for more details).

### Example
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
$student_id = 56; // int | a student_id to filter by
$registration_group_id = 56; // int | id of a registration group

try {
  $result = $apiInstance->getAssessmentSummaries($student_id, $registration_group_id);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getAssessmentSummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **student_id** | **int**| a student_id to filter by | [optional]
 **registration_group_id** | **int**| id of a registration group | [optional]

### Return type

[**\Assembly\Client\Model\AttendanceSummary[]**](../Model/AttendanceSummary.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAssessments**
> \Assembly\Client\Model\Assessment[] getAssessments($per_page, $page)

List Assessments

Returns a list of assessment objects. The assessment is the grouping that knits together a range of concepts. The name of the assessment also refers to the source of the result.

### Example
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
$per_page = 100; // int | Number of results to return
$page = 1; // int | Page number to return

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

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAttendances**
> \Assembly\Client\Model\Attendance[] getAttendances($student_id, $registration_group_id, $start_date, $end_date, $per_page, $page)

List Attendances

Returns a list of attendances. By default, attendances are returned from the start to the end of the current week.  **Note:** Note the `If-Modified-Since` header is optional (see the page on [Conditional Requests](/api#conditional-requests) for more details).

### Example
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
$student_id = 56; // int | a student_id to filter by
$registration_group_id = 56; // int | id of a registration group
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | the start date of the period to query
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | the end date of the period to query
$per_page = 100; // int | Number of results to return
$page = 1; // int | Page number to return

try {
  $result = $apiInstance->getAttendances($student_id, $registration_group_id, $start_date, $end_date, $per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getAttendances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **student_id** | **int**| a student_id to filter by | [optional]
 **registration_group_id** | **int**| id of a registration group | [optional]
 **start_date** | **\DateTime**| the start date of the period to query | [optional]
 **end_date** | **\DateTime**| the end date of the period to query | [optional]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\Attendance[]**](../Model/Attendance.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCalendarEvents**
> \Assembly\Client\Model\CalendarEvent[] getCalendarEvents($event_type, $per_page, $page)

List Calendar Events

Returns a list of calendar events from the school calendar. We strongly recommend that you use an object type to filter the events that will be returned to you. Presently, with SIMS only support, we've exposed the raw types from the underlying MIS. As such, it's most likely that you'll mostly be interested in 'User' events. This category includes items such as staff meetings and school assembly times as you can see from the sample response below.  **Note:** Note the `If-Modified-Since` header is optional (see the page on [Conditional Requests](/api#conditional-requests) for more details).

### Example
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
$event_type = 'event_type_example'; // string | a calendar object type from the underlying MIS
$per_page = 100; // int | Number of results to return
$page = 1; // int | Page number to return

try {
  $result = $apiInstance->getCalendarEvents($event_type, $per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getCalendarEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_type** | **string**| a calendar object type from the underlying MIS | [optional]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\CalendarEvent[]**](../Model/CalendarEvent.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContacts**
> \Assembly\Client\Model\Contact[] getContacts($student_id, $per_page, $page)

List Contacts

Returns a list of contacts that match the given set of filters.

### Example
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
$student_id = 56; // int | a student_id to filter by
$per_page = 100; // int | Number of results to return
$page = 1; // int | Page number to return

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
 **student_id** | **int**| a student_id to filter by | [optional]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\Contact[]**](../Model/Contact.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDietaryNeeds**
> \Assembly\Client\Model\DietaryNeed[] getDietaryNeeds($per_page, $page)

Dietary Needs

Returns a list of all the Dietary Needs defined by the school.

### Example
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
$per_page = 100; // int | Number of results to return
$page = 1; // int | Page number to return

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

[bearerAuth](../../README.md#bearerAuth)

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

// Configure OAuth2 access token for authorization: bearerAuth
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$student_id = 56; // int | a student_id to filter by
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | the start date of the period to query
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | the end date of the period to query
$per_page = 100; // int | Number of results to return
$page = 1; // int | Page number to return

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
 **student_id** | **int**| a student_id to filter by | [optional]
 **start_date** | **\DateTime**| the start date of the period to query | [optional]
 **end_date** | **\DateTime**| the end date of the period to query | [optional]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\Exclusion[]**](../Model/Exclusion.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFacets**
> \Assembly\Client\Model\Facet[] getFacets($per_page, $page)

List Facets

Returns a list of facets. The facet is used to reflect a different type of grade and allows 2 grades of the same assessment to be compared.

### Example
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
$per_page = 100; // int | Number of results to return
$page = 1; // int | Page number to return

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

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGradeSets**
> \Assembly\Client\Model\GradeSet[] getGradeSets($per_page, $page)

List Grade Sets

Returns a list of grade sets.

### Example
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
$per_page = 100; // int | Number of results to return
$page = 1; // int | Page number to return

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

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLeftStaffMembers**
> \Assembly\Client\Model\StaffMember[] getLeftStaffMembers($if_modified_since, $teachers_only, $demographics, $qualifications)

List Left Staff Members

Returns a list of staff members who have left the school.  **Note:** The `If-Modified-Since` header is optional (see the page on [Conditional Requests](/api#conditional-requests) for more details).'

### Example
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
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If-Modified-Since is optional (see the page on Conditional Requests for more details).
$teachers_only = True; // bool | return only staff who are teachers
$demographics = True; // bool | include demographics data
$qualifications = True; // bool | include HLTA status, QT status, QT route and previous degree information (requires `staff_members.qualifications` scope)

try {
  $result = $apiInstance->getLeftStaffMembers($if_modified_since, $teachers_only, $demographics, $qualifications);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getLeftStaffMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **\DateTime**| If-Modified-Since is optional (see the page on Conditional Requests for more details). | [optional]
 **teachers_only** | **bool**| return only staff who are teachers | [optional]
 **demographics** | **bool**| include demographics data | [optional]
 **qualifications** | **bool**| include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) | [optional]

### Return type

[**\Assembly\Client\Model\StaffMember[]**](../Model/StaffMember.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLeftStudents**
> \Assembly\Client\Model\Student[] getLeftStudents($if_modified_since)

List Left Students

'Returns a list of students who have left the school.  **Note:** Note the `If-Modified-Since` header is optional (see the page on [Conditional Requests](/api#conditional-requests) for more details).'

### Example
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
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If-Modified-Since is optional (see the page on Conditional Requests for more details).

try {
  $result = $apiInstance->getLeftStudents($if_modified_since);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getLeftStudents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **\DateTime**| If-Modified-Since is optional (see the page on Conditional Requests for more details). | [optional]

### Return type

[**\Assembly\Client\Model\Student[]**](../Model/Student.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMedicalConditions**
> \Assembly\Client\Model\MedicalCondition[] getMedicalConditions($per_page, $page)

Medical Conditions

Returns a list of all the Medical Conditions defined by the school.

### Example
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
$per_page = 100; // int | Number of results to return
$page = 1; // int | Page number to return

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

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegistrationGroupStudents**
> \Assembly\Client\Model\Student[] getRegistrationGroupStudents($id, $if_modified_since, $date, $academic_year_id, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo)

List Students for Registration Group

Returns a list of all the students that are present in the registration group identified by group_id.  **Note:** Note the `If-Modified-Since` header is optional (see the page on [Conditional Requests](/api#conditional-requests) for more details).

### Example
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
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If-Modified-Since is optional (see the page on Conditional Requests for more details).
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | returns results for a specific date
$academic_year_id = 56; // int | returns all groups and group memberships from the specified academic year
$demographics = True; // bool | include demographics data
$contacts = True; // bool | include contacts data
$sen_needs = True; // bool | include SEN needs data
$addresses = True; // bool | include student address data
$care = True; // bool | include student care data (you must also supply the demographics parameter)
$ever_in_care = True; // bool | include whether the student has ever been in care (you must also supply the demographics parameter)
$languages = True; // bool | include student language data
$photo = True; // bool | include student photo data

try {
  $result = $apiInstance->getRegistrationGroupStudents($id, $if_modified_since, $date, $academic_year_id, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getRegistrationGroupStudents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of the entity |
 **if_modified_since** | **\DateTime**| If-Modified-Since is optional (see the page on Conditional Requests for more details). | [optional]
 **date** | **\DateTime**| returns results for a specific date | [optional]
 **academic_year_id** | **int**| returns all groups and group memberships from the specified academic year | [optional]
 **demographics** | **bool**| include demographics data | [optional]
 **contacts** | **bool**| include contacts data | [optional]
 **sen_needs** | **bool**| include SEN needs data | [optional]
 **addresses** | **bool**| include student address data | [optional]
 **care** | **bool**| include student care data (you must also supply the demographics parameter) | [optional]
 **ever_in_care** | **bool**| include whether the student has ever been in care (you must also supply the demographics parameter) | [optional]
 **languages** | **bool**| include student language data | [optional]
 **photo** | **bool**| include student photo data | [optional]

### Return type

[**\Assembly\Client\Model\Student[]**](../Model/Student.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegistrationGroups**
> \Assembly\Client\Model\RegistrationGroup[] getRegistrationGroups($if_modified_since, $year_code, $date, $academic_year_id, $per_page, $page)

List Registration Group

Returns a list of registration groups that match the given set of filters.  If a date parameter is provided then the list of groups returned is filtered to only those where the provided date falls between the groups start_date and end_date. Additionally when a date parameter is provided student_ids and supervior_ids are restricted to only those students who were enrolled in the group on the given date.  **Note:** Note the `If-Modified-Since` header is optional (see the page on [Conditional Requests](/api#conditional-requests) for more details).

### Example
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
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If-Modified-Since is optional (see the page on Conditional Requests for more details).
$year_code = 56; // int | filter by school year (cannot be supplied at the same time as the students parameter)
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | returns results for a specific date
$academic_year_id = 56; // int | returns all groups and group memberships from the specified academic year
$per_page = 100; // int | Number of results to return
$page = 1; // int | Page number to return

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
 **if_modified_since** | **\DateTime**| If-Modified-Since is optional (see the page on Conditional Requests for more details). | [optional]
 **year_code** | **int**| filter by school year (cannot be supplied at the same time as the students parameter) | [optional]
 **date** | **\DateTime**| returns results for a specific date | [optional]
 **academic_year_id** | **int**| returns all groups and group memberships from the specified academic year | [optional]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\RegistrationGroup[]**](../Model/RegistrationGroup.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getResults**
> \Assembly\Client\Model\Result[] getResults($students, $if_modified_since, $per_page, $page)

List Results

Returns a list of results for the student ID(s) specified by the students parameter.

### Example
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
$students = array(56); // int[] | ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded).
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If-Modified-Since is optional (see the page on Conditional Requests for more details).
$per_page = 100; // int | Number of results to return
$page = 1; // int | Page number to return

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
 **students** | [**int[]**](../Model/int.md)| ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). |
 **if_modified_since** | **\DateTime**| If-Modified-Since is optional (see the page on Conditional Requests for more details). | [optional]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\Result[]**](../Model/Result.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStaffAbsences**
> \Assembly\Client\Model\StaffAbsence[] getStaffAbsences($if_modified_since, $staff_member_id, $start_date, $qualifications, $per_page, $page)

List Staff Absences

Returns a list of staff member absences for the school accociated with the provided `access_token`. A school level access token with the `staff_members.absences` scope is required to access staff member absence information.

### Example
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
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If-Modified-Since is optional (see the page on Conditional Requests for more details).
$staff_member_id = 56; // int | show only absences fot the specified staff member
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | the start date of the period to query
$qualifications = 56; // int | include HLTA status, QT status, QT route and previous degree information (requires `staff_members.qualifications` scope)
$per_page = 100; // int | Number of results to return
$page = 1; // int | Page number to return

try {
  $result = $apiInstance->getStaffAbsences($if_modified_since, $staff_member_id, $start_date, $qualifications, $per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getStaffAbsences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **\DateTime**| If-Modified-Since is optional (see the page on Conditional Requests for more details). | [optional]
 **staff_member_id** | **int**| show only absences fot the specified staff member | [optional]
 **start_date** | **\DateTime**| the start date of the period to query | [optional]
 **qualifications** | **int**| include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) | [optional]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\StaffAbsence[]**](../Model/StaffAbsence.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStaffContracts**
> \Assembly\Client\Model\StaffContract[] getStaffContracts($if_modified_since, $staff_member_id, $date, $roles, $salaries, $allowances, $per_page, $page)

List Staff Contracts

Returns a list of staff member contracts for the school accociated with the provided `access_token`. A school level access token with the `staff_members.contracts` scope is required to access staff member contract information.

### Example
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
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If-Modified-Since is optional (see the page on Conditional Requests for more details).
$staff_member_id = 56; // int | show only absences fot the specified staff member
$date = True; // bool | returns results for a specific date
$roles = True; // bool | return roles information along with a staff contract
$salaries = True; // bool | return salaries information along with a staff contract (requires staff_members.salaries scope for full information - only the hours_per_week, fte and weeks_per_year fields are shown without it)
$allowances = True; // bool | return allowances information along with a staff contract (requires staff_members.salaries scope)
$per_page = 100; // int | Number of results to return
$page = 1; // int | Page number to return

try {
  $result = $apiInstance->getStaffContracts($if_modified_since, $staff_member_id, $date, $roles, $salaries, $allowances, $per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getStaffContracts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **\DateTime**| If-Modified-Since is optional (see the page on Conditional Requests for more details). | [optional]
 **staff_member_id** | **int**| show only absences fot the specified staff member | [optional]
 **date** | **bool**| returns results for a specific date | [optional]
 **roles** | **bool**| return roles information along with a staff contract | [optional]
 **salaries** | **bool**| return salaries information along with a staff contract (requires staff_members.salaries scope for full information - only the hours_per_week, fte and weeks_per_year fields are shown without it) | [optional]
 **allowances** | **bool**| return allowances information along with a staff contract (requires staff_members.salaries scope) | [optional]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\StaffContract[]**](../Model/StaffContract.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStaffMembers**
> \Assembly\Client\Model\StaffMember[] getStaffMembers($if_modified_since, $teachers_only, $demographics, $qualifications, $per_page, $page)

List Staff Members

Returns a list of staff members for the school accociated with the provided `access_token`.  **Note:** Note the `If-Modified-Since` header is optional (see the page on [Conditional Requests](/api#conditional-requests) for more details).

### Example
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
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If-Modified-Since is optional (see the page on Conditional Requests for more details).
$teachers_only = True; // bool | return only staff who are teachers
$demographics = True; // bool | include demographics data
$qualifications = True; // bool | include HLTA status, QT status, QT route and previous degree information (requires `staff_members.qualifications` scope)
$per_page = 100; // int | Number of results to return
$page = 1; // int | Page number to return

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
 **if_modified_since** | **\DateTime**| If-Modified-Since is optional (see the page on Conditional Requests for more details). | [optional]
 **teachers_only** | **bool**| return only staff who are teachers | [optional]
 **demographics** | **bool**| include demographics data | [optional]
 **qualifications** | **bool**| include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) | [optional]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\StaffMember[]**](../Model/StaffMember.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStudents**
> \Assembly\Client\Model\Student[] getStudents($if_modified_since, $students, $date, $year_code, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo, $per_page, $page)

List Students

Returns a list of students for the school associated with the provided `access_token.` **Note:** the `If-Modified-Since` header is optional (see the page on [Conditional Requests](/api#conditional-requests) for more details).

### Example
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
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If-Modified-Since is optional (see the page on Conditional Requests for more details).
$students = array(56); // int[] | ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded).
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | returns results for a specific date
$year_code = 56; // int | filter by school year (cannot be supplied at the same time as the students parameter)
$demographics = True; // bool | include demographics data
$contacts = True; // bool | include contacts data
$sen_needs = True; // bool | include SEN needs data
$addresses = True; // bool | include student address data
$care = True; // bool | include student care data (you must also supply the demographics parameter)
$ever_in_care = True; // bool | include whether the student has ever been in care (you must also supply the demographics parameter)
$languages = True; // bool | include student language data
$photo = True; // bool | include student photo data
$per_page = 100; // int | Number of results to return
$page = 1; // int | Page number to return

try {
  $result = $apiInstance->getStudents($if_modified_since, $students, $date, $year_code, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo, $per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getStudents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **\DateTime**| If-Modified-Since is optional (see the page on Conditional Requests for more details). | [optional]
 **students** | [**int[]**](../Model/int.md)| ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). | [optional]
 **date** | **\DateTime**| returns results for a specific date | [optional]
 **year_code** | **int**| filter by school year (cannot be supplied at the same time as the students parameter) | [optional]
 **demographics** | **bool**| include demographics data | [optional]
 **contacts** | **bool**| include contacts data | [optional]
 **sen_needs** | **bool**| include SEN needs data | [optional]
 **addresses** | **bool**| include student address data | [optional]
 **care** | **bool**| include student care data (you must also supply the demographics parameter) | [optional]
 **ever_in_care** | **bool**| include whether the student has ever been in care (you must also supply the demographics parameter) | [optional]
 **languages** | **bool**| include student language data | [optional]
 **photo** | **bool**| include student photo data | [optional]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\Student[]**](../Model/Student.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubjects**
> \Assembly\Client\Model\Subject[] getSubjects($per_page, $page)

List Subjects

Returns a list of the Assembly Platform's subjects.

### Example
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
$per_page = 100; // int | Number of results to return
$page = 1; // int | Page number to return

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

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTeachingGroupStudents**
> \Assembly\Client\Model\Student[] getTeachingGroupStudents($id, $if_modified_since, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo)

List Students for Teaching Group

Returns a list of all the students that are present in the teaching group identified by group_id.  **Note:** Note the `If-Modified-Since` header is optional (see the page on [Conditional Requests](/api#conditional-requests) for more details).

### Example
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
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If-Modified-Since is optional (see the page on Conditional Requests for more details).
$demographics = True; // bool | include demographics data
$contacts = True; // bool | include contacts data
$sen_needs = True; // bool | include SEN needs data
$addresses = True; // bool | include student address data
$care = True; // bool | include student care data (you must also supply the demographics parameter)
$ever_in_care = True; // bool | include whether the student has ever been in care (you must also supply the demographics parameter)
$languages = True; // bool | include student language data
$photo = True; // bool | include student photo data

try {
  $result = $apiInstance->getTeachingGroupStudents($id, $if_modified_since, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getTeachingGroupStudents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of the entity |
 **if_modified_since** | **\DateTime**| If-Modified-Since is optional (see the page on Conditional Requests for more details). | [optional]
 **demographics** | **bool**| include demographics data | [optional]
 **contacts** | **bool**| include contacts data | [optional]
 **sen_needs** | **bool**| include SEN needs data | [optional]
 **addresses** | **bool**| include student address data | [optional]
 **care** | **bool**| include student care data (you must also supply the demographics parameter) | [optional]
 **ever_in_care** | **bool**| include whether the student has ever been in care (you must also supply the demographics parameter) | [optional]
 **languages** | **bool**| include student language data | [optional]
 **photo** | **bool**| include student photo data | [optional]

### Return type

[**\Assembly\Client\Model\Student[]**](../Model/Student.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTeachingGroups**
> \Assembly\Client\Model\TeachingGroup[] getTeachingGroups($if_modified_since, $subject_code, $year_code, $date, $academic_year_id, $per_page, $page)

List Teaching Groups

Returns a list of teaching groups that match the given set of filters.  If a date parameter is provided then the list of groups returned is filtered to only those where the provided date falls between the groups start_date and end_date. Additionally when a date parameter is provided student_ids and supervior_ids are restricted to only those students who were enrolled in the group on the given date.  **Note:** Note the `If-Modified-Since` header is optional (see the page on [Conditional Requests](/api#conditional-requests) for more details).

### Example
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
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If-Modified-Since is optional (see the page on Conditional Requests for more details).
$subject_code = 'subject_code_example'; // string | filter by subject
$year_code = 56; // int | filter by school year (cannot be supplied at the same time as the students parameter)
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | returns results for a specific date
$academic_year_id = 56; // int | returns all groups and group memberships from the specified academic year
$per_page = 100; // int | Number of results to return
$page = 1; // int | Page number to return

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
 **if_modified_since** | **\DateTime**| If-Modified-Since is optional (see the page on Conditional Requests for more details). | [optional]
 **subject_code** | **string**| filter by subject | [optional]
 **year_code** | **int**| filter by school year (cannot be supplied at the same time as the students parameter) | [optional]
 **date** | **\DateTime**| returns results for a specific date | [optional]
 **academic_year_id** | **int**| returns all groups and group memberships from the specified academic year | [optional]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\TeachingGroup[]**](../Model/TeachingGroup.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getYearGroupStudents**
> \Assembly\Client\Model\Student[] getYearGroupStudents($id, $if_modified_since, $date, $academic_year_id, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo)

List Students for Year Group

Returns a list of all the students that are present in the year group identified by group_id.  **Note:** Note the `If-Modified-Since` header is optional (see the page on [Conditional Requests](/api#conditional-requests) for more details).

### Example
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
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If-Modified-Since is optional (see the page on Conditional Requests for more details).
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | returns results for a specific date
$academic_year_id = 56; // int | returns all groups and group memberships from the specified academic year
$demographics = True; // bool | include demographics data
$contacts = True; // bool | include contacts data
$sen_needs = True; // bool | include SEN needs data
$addresses = True; // bool | include student address data
$care = True; // bool | include student care data (you must also supply the demographics parameter)
$ever_in_care = True; // bool | include whether the student has ever been in care (you must also supply the demographics parameter)
$languages = True; // bool | include student language data
$photo = True; // bool | include student photo data

try {
  $result = $apiInstance->getYearGroupStudents($id, $if_modified_since, $date, $academic_year_id, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getYearGroupStudents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of the entity |
 **if_modified_since** | **\DateTime**| If-Modified-Since is optional (see the page on Conditional Requests for more details). | [optional]
 **date** | **\DateTime**| returns results for a specific date | [optional]
 **academic_year_id** | **int**| returns all groups and group memberships from the specified academic year | [optional]
 **demographics** | **bool**| include demographics data | [optional]
 **contacts** | **bool**| include contacts data | [optional]
 **sen_needs** | **bool**| include SEN needs data | [optional]
 **addresses** | **bool**| include student address data | [optional]
 **care** | **bool**| include student care data (you must also supply the demographics parameter) | [optional]
 **ever_in_care** | **bool**| include whether the student has ever been in care (you must also supply the demographics parameter) | [optional]
 **languages** | **bool**| include student language data | [optional]
 **photo** | **bool**| include student photo data | [optional]

### Return type

[**\Assembly\Client\Model\Student[]**](../Model/Student.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getYearGroups**
> \Assembly\Client\Model\YearGroup[] getYearGroups($if_modified_since, $year_code, $date, $academic_year_id, $per_page, $page)

List Year Groups

Returns a list of year groups that match the given set of filters.  If a date parameter is provided then the list of groups returned is filtered to only those where the provided date falls between the groups start_date and end_date. Additionally when a date parameter is provided student_ids and supervior_ids are restricted to only those students who were enrolled in the group on the given date.  **Note:** Note the `If-Modified-Since` header is optional (see the page on [Conditional Requests](/api#conditional-requests) for more details).

### Example
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
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If-Modified-Since is optional (see the page on Conditional Requests for more details).
$year_code = 56; // int | filter by school year (cannot be supplied at the same time as the students parameter)
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | returns results for a specific date
$academic_year_id = 56; // int | returns all groups and group memberships from the specified academic year
$per_page = 100; // int | Number of results to return
$page = 1; // int | Page number to return

try {
  $result = $apiInstance->getYearGroups($if_modified_since, $year_code, $date, $academic_year_id, $per_page, $page);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling AssemblyApi->getYearGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **\DateTime**| If-Modified-Since is optional (see the page on Conditional Requests for more details). | [optional]
 **year_code** | **int**| filter by school year (cannot be supplied at the same time as the students parameter) | [optional]
 **date** | **\DateTime**| returns results for a specific date | [optional]
 **academic_year_id** | **int**| returns all groups and group memberships from the specified academic year | [optional]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **page** | **int**| Page number to return | [optional] [default to 1]

### Return type

[**\Assembly\Client\Model\YearGroup[]**](../Model/YearGroup.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **status**
> \Assembly\Client\Model\SchoolStatus status()

Get School Sync Status

Returns status for the school associated with the provided access_token.

### Example
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

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateResults**
> \Assembly\Client\Model\Result updateResults($id, $result_entry)

Update a Single Result

Once a result has been created, it can be updated on the Platform by passing the required field values in the request body. A list of the fields that were changed are returned in the response.

### Example
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
 **id** | **int**| id of the entity |
 **result_entry** | [**\Assembly\Client\Model\ResultEntry**](../Model/ResultEntry.md)|  | [optional]

### Return type

[**\Assembly\Client\Model\Result**](../Model/Result.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

