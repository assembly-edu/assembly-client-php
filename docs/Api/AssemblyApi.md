# Assembly\Client\AssemblyApi

All URIs are relative to *https://api-sandbox.assembly.education*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAcademicYears**](AssemblyApi.md#getAcademicYears) | **GET** /academic_years | 
[**getAssessmentPoints**](AssemblyApi.md#getAssessmentPoints) | **GET** /assessment_points | 
[**getAssessmentPointsAssessmentPointRank**](AssemblyApi.md#getAssessmentPointsAssessmentPointRank) | **GET** /assessment_points/{assessment_point_rank} | 
[**getAssessmentPointsAssessmentPointRankResults**](AssemblyApi.md#getAssessmentPointsAssessmentPointRankResults) | **GET** /assessment_points/{assessment_point_rank}/results | 
[**getAssessments**](AssemblyApi.md#getAssessments) | **GET** /assessments | 
[**getAssessmentsAssessmentId**](AssemblyApi.md#getAssessmentsAssessmentId) | **GET** /assessments/{assessment_id} | 
[**getAssessmentsAssessmentIdGradeSet**](AssemblyApi.md#getAssessmentsAssessmentIdGradeSet) | **GET** /assessments/{assessment_id}/grade_set | 
[**getAssessmentsAssessmentIdResults**](AssemblyApi.md#getAssessmentsAssessmentIdResults) | **GET** /assessments/{assessment_id}/results | 
[**getAttendances**](AssemblyApi.md#getAttendances) | **GET** /attendances | 
[**getCalendarEvents**](AssemblyApi.md#getCalendarEvents) | **GET** /calendar_events | 
[**getContacts**](AssemblyApi.md#getContacts) | **GET** /contacts | 
[**getExclusions**](AssemblyApi.md#getExclusions) | **GET** /exclusions | 
[**getExclusionsStudentId**](AssemblyApi.md#getExclusionsStudentId) | **GET** /exclusions/{student_id} | 
[**getFacetFacetId**](AssemblyApi.md#getFacetFacetId) | **GET** /facet/{facet_id} | 
[**getFacets**](AssemblyApi.md#getFacets) | **GET** /facets | 
[**getRegistrationGroups**](AssemblyApi.md#getRegistrationGroups) | **GET** /registration_groups | 
[**getRegistrationGroupsGroupId**](AssemblyApi.md#getRegistrationGroupsGroupId) | **GET** /registration_groups/{group_id} | 
[**getRegistrationGroupsGroupIdStudents**](AssemblyApi.md#getRegistrationGroupsGroupIdStudents) | **GET** /registration_groups/{group_id}/students | 
[**getSchoolDetails**](AssemblyApi.md#getSchoolDetails) | **GET** /school_details | 
[**getStaffAbsences**](AssemblyApi.md#getStaffAbsences) | **GET** /staff_absences | 
[**getStaffContracts**](AssemblyApi.md#getStaffContracts) | **GET** /staff_contracts | 
[**getStaffContractsStaffMemberId**](AssemblyApi.md#getStaffContractsStaffMemberId) | **GET** /staff_contracts/{staff_member_id} | 
[**getStaffMembers**](AssemblyApi.md#getStaffMembers) | **GET** /staff_members | 
[**getStaffMembersStaffMemberId**](AssemblyApi.md#getStaffMembersStaffMemberId) | **GET** /staff_members/{staff_member_id} | 
[**getStudents**](AssemblyApi.md#getStudents) | **GET** /students | 
[**getStudentsStudentId**](AssemblyApi.md#getStudentsStudentId) | **GET** /students/{student_id} | 
[**getSubjects**](AssemblyApi.md#getSubjects) | **GET** /subjects | 
[**getTeachingGroups**](AssemblyApi.md#getTeachingGroups) | **GET** /teaching_groups | 
[**getTeachingGroupsGroupId**](AssemblyApi.md#getTeachingGroupsGroupId) | **GET** /teaching_groups/{group_id} | 
[**getTeachingGroupsGroupIdStudents**](AssemblyApi.md#getTeachingGroupsGroupIdStudents) | **GET** /teaching_groups/{group_id}/students | 
[**getYearGroups**](AssemblyApi.md#getYearGroups) | **GET** /year_groups | 
[**getYearGroupsGroupId**](AssemblyApi.md#getYearGroupsGroupId) | **GET** /year_groups/{group_id} | 
[**getYearGroupsGroupIdStudents**](AssemblyApi.md#getYearGroupsGroupIdStudents) | **GET** /year_groups/{group_id}/students | 
[**patchResults**](AssemblyApi.md#patchResults) | **PATCH** /results | 
[**patchResultsResultId**](AssemblyApi.md#patchResultsResultId) | **PATCH** /results/{result_id} | 


# **getAcademicYears**
> \Assembly\Client\Model\AcademicYearList getAcademicYears($page, $per_page)



Returns a list of academic years for the school associated with the provided access_token. The dates of these academic years can be used to filter data in other API endpoints.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number to return
$per_page = 100; // int | Number of results to return

try {
    $result = $apiInstance->getAcademicYears($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->getAcademicYears: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number to return | [optional] [default to 1]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]

### Return type

[**\Assembly\Client\Model\AcademicYearList**](../Model/AcademicYearList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAssessmentPoints**
> \Assembly\Client\Model\AssessmentPointList getAssessmentPoints($year_code, $type, $page, $per_page)



Returns a list of assessment points. An assessment_point object represents a point in the school key stage, year, term or half-term that results can be attached to. When sending results back to the Platform, the `assessment_point_rank` should be used - this will remain constant across all environments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$year_code = "year_code_example"; // string | Filter by a specific NC year code
$type = "type_example"; // string | Filter by assessment point type
$page = 1; // int | Page number to return
$per_page = 100; // int | Number of results to return

try {
    $result = $apiInstance->getAssessmentPoints($year_code, $type, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->getAssessmentPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year_code** | **string**| Filter by a specific NC year code | [optional]
 **type** | **string**| Filter by assessment point type | [optional]
 **page** | **int**| Page number to return | [optional] [default to 1]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]

### Return type

[**\Assembly\Client\Model\AssessmentPointList**](../Model/AssessmentPointList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAssessmentPointsAssessmentPointRank**
> \Assembly\Client\Model\AssessmentPoint getAssessmentPointsAssessmentPointRank($assessment_point_rank)



Returns a single assessment point for the given rank.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$assessment_point_rank = "assessment_point_rank_example"; // string | The rank of the assessment point as an Integer

try {
    $result = $apiInstance->getAssessmentPointsAssessmentPointRank($assessment_point_rank);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->getAssessmentPointsAssessmentPointRank: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assessment_point_rank** | **string**| The rank of the assessment point as an Integer |

### Return type

[**\Assembly\Client\Model\AssessmentPoint**](../Model/AssessmentPoint.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAssessmentPointsAssessmentPointRankResults**
> \Assembly\Client\Model\ResultList getAssessmentPointsAssessmentPointRankResults($assessment_point_rank, $students, $page, $per_page)



Returns a list of results for the given assessment_point_rank and students.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$assessment_point_rank = "assessment_point_rank_example"; // string | The rank of the assessment point as an Integer
$students = "students_example"; // string | ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded).
$page = 1; // int | Page number to return
$per_page = 100; // int | Number of results to return

try {
    $result = $apiInstance->getAssessmentPointsAssessmentPointRankResults($assessment_point_rank, $students, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->getAssessmentPointsAssessmentPointRankResults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assessment_point_rank** | **string**| The rank of the assessment point as an Integer |
 **students** | **string**| ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). | [optional]
 **page** | **int**| Page number to return | [optional] [default to 1]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]

### Return type

[**\Assembly\Client\Model\ResultList**](../Model/ResultList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAssessments**
> \Assembly\Client\Model\AssessmentList getAssessments($mis_mappings, $page, $per_page)



Returns a list of assessment objects.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mis_mappings = false; // bool | Includes the names of any MIS components to this object
$page = 1; // int | Page number to return
$per_page = 100; // int | Number of results to return

try {
    $result = $apiInstance->getAssessments($mis_mappings, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->getAssessments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mis_mappings** | **bool**| Includes the names of any MIS components to this object | [optional] [default to false]
 **page** | **int**| Page number to return | [optional] [default to 1]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]

### Return type

[**\Assembly\Client\Model\AssessmentList**](../Model/AssessmentList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAssessmentsAssessmentId**
> \Assembly\Client\Model\Assessment getAssessmentsAssessmentId($assessment_id)



Returns a single assessment for the given ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$assessment_id = "assessment_id_example"; // string | ID of the assessment as an Integer.

try {
    $result = $apiInstance->getAssessmentsAssessmentId($assessment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->getAssessmentsAssessmentId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assessment_id** | **string**| ID of the assessment as an Integer. |

### Return type

[**\Assembly\Client\Model\Assessment**](../Model/Assessment.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAssessmentsAssessmentIdGradeSet**
> \Assembly\Client\Model\Gradeset getAssessmentsAssessmentIdGradeSet($assessment_id)



Returns a gradeset (an acceptable list of values) for the assessment identified by the assessment_id. Grades should be written back to the Platform using the grade_id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$assessment_id = "assessment_id_example"; // string | ID of the assessment as an Integer.

try {
    $result = $apiInstance->getAssessmentsAssessmentIdGradeSet($assessment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->getAssessmentsAssessmentIdGradeSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assessment_id** | **string**| ID of the assessment as an Integer. |

### Return type

[**\Assembly\Client\Model\Gradeset**](../Model/Gradeset.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAssessmentsAssessmentIdResults**
> \Assembly\Client\Model\Result getAssessmentsAssessmentIdResults($assessment_id, $students)



Returns a list of results for the given assessment_id and students. For a full list of national assessment data (Key stage 1 and 2 SATs results) available on the Platform, please see this support article.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$assessment_id = "assessment_id_example"; // string | ID of the assessment as an Integer.
$students = "students_example"; // string | ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded).

try {
    $result = $apiInstance->getAssessmentsAssessmentIdResults($assessment_id, $students);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->getAssessmentsAssessmentIdResults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assessment_id** | **string**| ID of the assessment as an Integer. |
 **students** | **string**| ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). | [optional]

### Return type

[**\Assembly\Client\Model\Result**](../Model/Result.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAttendances**
> \Assembly\Client\Model\AttendanceList getAttendances($student_id, $registration_group_id, $start_date, $end_date, $page, $per_page, $if_modified_since)



Returns a list of attendances, filtered by date, student, or registration group. By default, attendances are returned from the start to the end of the current week.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$student_id = 56; // int | ID of the Student as an Integer
$registration_group_id = 56; // int | ID of the registration group as an Integer
$start_date = "start_date_example"; // string | The start date of the period to return data for
$end_date = "end_date_example"; // string | The end date of the period to return data for
$page = 1; // int | Page number to return
$per_page = 100; // int | Number of results to return
$if_modified_since = "if_modified_since_example"; // string | Timestamp of the last response.

try {
    $result = $apiInstance->getAttendances($student_id, $registration_group_id, $start_date, $end_date, $page, $per_page, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->getAttendances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **student_id** | **int**| ID of the Student as an Integer | [optional]
 **registration_group_id** | **int**| ID of the registration group as an Integer | [optional]
 **start_date** | **string**| The start date of the period to return data for | [optional]
 **end_date** | **string**| The end date of the period to return data for | [optional]
 **page** | **int**| Page number to return | [optional] [default to 1]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **if_modified_since** | **string**| Timestamp of the last response. | [optional]

### Return type

[**\Assembly\Client\Model\AttendanceList**](../Model/AttendanceList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCalendarEvents**
> \Assembly\Client\Model\CalendarEventList getCalendarEvents($event_type, $page, $per_page, $if_modified_since)



Returns a list of calendar events from the school calendar. We strongly recommend that you use an object type to filter the events that will be returned to you. Presently, with SIMS only support, we've exposed the raw types from the underlying MIS. As such, it's most likely that you'll mostly be interested in 'User' events. This category includes items such as staff meetings and school assembly times as you can see from the sample response below.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_type = "event_type_example"; // string | Return a calendar object type from the underlying MIS
$page = 1; // int | Page number to return
$per_page = 100; // int | Number of results to return
$if_modified_since = "if_modified_since_example"; // string | Timestamp of the last response.

try {
    $result = $apiInstance->getCalendarEvents($event_type, $page, $per_page, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->getCalendarEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_type** | **string**| Return a calendar object type from the underlying MIS | [optional]
 **page** | **int**| Page number to return | [optional] [default to 1]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **if_modified_since** | **string**| Timestamp of the last response. | [optional]

### Return type

[**\Assembly\Client\Model\CalendarEventList**](../Model/CalendarEventList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContacts**
> \Assembly\Client\Model\ContactList getContacts($student_id, $page, $per_page)



Returns a list of contacts that match the given set of filters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$student_id = 56; // int | ID of the Student as an Integer
$page = 1; // int | Page number to return
$per_page = 100; // int | Number of results to return

try {
    $result = $apiInstance->getContacts($student_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->getContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **student_id** | **int**| ID of the Student as an Integer | [optional]
 **page** | **int**| Page number to return | [optional] [default to 1]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]

### Return type

[**\Assembly\Client\Model\ContactList**](../Model/ContactList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExclusions**
> \Assembly\Client\Model\ExclusionList getExclusions($start_date, $end_date, $page, $per_page)



Returns a list of exclusions. By default, exclusions are returned that occurred during the current academic year.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = "start_date_example"; // string | The start date of the period to return data for
$end_date = "end_date_example"; // string | The end date of the period to return data for
$page = 1; // int | Page number to return
$per_page = 100; // int | Number of results to return

try {
    $result = $apiInstance->getExclusions($start_date, $end_date, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->getExclusions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **string**| The start date of the period to return data for | [optional]
 **end_date** | **string**| The end date of the period to return data for | [optional]
 **page** | **int**| Page number to return | [optional] [default to 1]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]

### Return type

[**\Assembly\Client\Model\ExclusionList**](../Model/ExclusionList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExclusionsStudentId**
> \Assembly\Client\Model\ExclusionList getExclusionsStudentId($student_id, $start_date, $end_date, $page, $per_page)



Returns a list of exclusions for a given student. By default, exclusions are returned that occurred during the current academic year.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$student_id = "student_id_example"; // string | ID of the Student as an Integer
$start_date = "start_date_example"; // string | The start date of the period to return data for
$end_date = "end_date_example"; // string | The end date of the period to return data for
$page = 1; // int | Page number to return
$per_page = 100; // int | Number of results to return

try {
    $result = $apiInstance->getExclusionsStudentId($student_id, $start_date, $end_date, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->getExclusionsStudentId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **student_id** | **string**| ID of the Student as an Integer |
 **start_date** | **string**| The start date of the period to return data for | [optional]
 **end_date** | **string**| The end date of the period to return data for | [optional]
 **page** | **int**| Page number to return | [optional] [default to 1]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]

### Return type

[**\Assembly\Client\Model\ExclusionList**](../Model/ExclusionList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFacetFacetId**
> \Assembly\Client\Model\Facet getFacetFacetId($facet_id)



Returns a single facet for the given ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$facet_id = "facet_id_example"; // string | ID of the facet as an Integer.

try {
    $result = $apiInstance->getFacetFacetId($facet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->getFacetFacetId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facet_id** | **string**| ID of the facet as an Integer. |

### Return type

[**\Assembly\Client\Model\Facet**](../Model/Facet.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFacets**
> \Assembly\Client\Model\FacetList getFacets($page, $per_page)



Returns a list of facets. The facet is used to reflect a different type of grade and allows 2 grades of the same assessment to be compared.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number to return
$per_page = 100; // int | Number of results to return

try {
    $result = $apiInstance->getFacets($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->getFacets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number to return | [optional] [default to 1]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]

### Return type

[**\Assembly\Client\Model\FacetList**](../Model/FacetList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegistrationGroups**
> \Assembly\Client\Model\RegistrationGroupList getRegistrationGroups($year_code, $date, $academic_year_id, $page, $per_page, $if_modified_since)



Returns a list of registration groups that match the given set of filters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$year_code = "year_code_example"; // string | Filter by a specific NC year code
$date = "date_example"; // string | Filter for a specific date
$academic_year_id = 56; // int | Filter based on the specified academic year
$page = 1; // int | Page number to return
$per_page = 100; // int | Number of results to return
$if_modified_since = "if_modified_since_example"; // string | Timestamp of the last response.

try {
    $result = $apiInstance->getRegistrationGroups($year_code, $date, $academic_year_id, $page, $per_page, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->getRegistrationGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year_code** | **string**| Filter by a specific NC year code | [optional]
 **date** | **string**| Filter for a specific date | [optional]
 **academic_year_id** | **int**| Filter based on the specified academic year | [optional]
 **page** | **int**| Page number to return | [optional] [default to 1]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **if_modified_since** | **string**| Timestamp of the last response. | [optional]

### Return type

[**\Assembly\Client\Model\RegistrationGroupList**](../Model/RegistrationGroupList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegistrationGroupsGroupId**
> \Assembly\Client\Model\RegistrationGroup getRegistrationGroupsGroupId($group_id, $date, $academic_year_id, $if_modified_since)



Returns a single registration group whose code matches the provided group_id. Additionally includes a list of all the student identifiers that are present in the group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = "group_id_example"; // string | ID of the Year Group as an Integer
$date = "date_example"; // string | Filter for a specific date
$academic_year_id = 56; // int | Filter based on the specified academic year
$if_modified_since = "if_modified_since_example"; // string | Timestamp of the last response.

try {
    $result = $apiInstance->getRegistrationGroupsGroupId($group_id, $date, $academic_year_id, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->getRegistrationGroupsGroupId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| ID of the Year Group as an Integer |
 **date** | **string**| Filter for a specific date | [optional]
 **academic_year_id** | **int**| Filter based on the specified academic year | [optional]
 **if_modified_since** | **string**| Timestamp of the last response. | [optional]

### Return type

[**\Assembly\Client\Model\RegistrationGroup**](../Model/RegistrationGroup.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegistrationGroupsGroupIdStudents**
> \Assembly\Client\Model\StudentList getRegistrationGroupsGroupIdStudents($group_id, $year_code, $date, $academic_year_id, $demographics, $care, $page, $per_page, $if_modified_since)



Returns a list of all the students that are present in the registration group identified by group_id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = "group_id_example"; // string | ID of the Year Group as an Integer
$year_code = "year_code_example"; // string | Filter by a specific NC year code
$date = "date_example"; // string | Filter for a specific date
$academic_year_id = 56; // int | Filter based on the specified academic year
$demographics = false; // bool | Return demographic information along with the person (requires appropriate scope)
$care = false; // bool | Return care information along with this object, depends on inclusion of demographics
$page = 1; // int | Page number to return
$per_page = 100; // int | Number of results to return
$if_modified_since = "if_modified_since_example"; // string | Timestamp of the last response.

try {
    $result = $apiInstance->getRegistrationGroupsGroupIdStudents($group_id, $year_code, $date, $academic_year_id, $demographics, $care, $page, $per_page, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->getRegistrationGroupsGroupIdStudents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| ID of the Year Group as an Integer |
 **year_code** | **string**| Filter by a specific NC year code | [optional]
 **date** | **string**| Filter for a specific date | [optional]
 **academic_year_id** | **int**| Filter based on the specified academic year | [optional]
 **demographics** | **bool**| Return demographic information along with the person (requires appropriate scope) | [optional] [default to false]
 **care** | **bool**| Return care information along with this object, depends on inclusion of demographics | [optional] [default to false]
 **page** | **int**| Page number to return | [optional] [default to 1]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **if_modified_since** | **string**| Timestamp of the last response. | [optional]

### Return type

[**\Assembly\Client\Model\StudentList**](../Model/StudentList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSchoolDetails**
> \Assembly\Client\Model\SchoolDetails getSchoolDetails()



Returns details for the school associated with the provided access_token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSchoolDetails();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->getSchoolDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Assembly\Client\Model\SchoolDetails**](../Model/SchoolDetails.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStaffAbsences**
> \Assembly\Client\Model\StaffAbsenceList getStaffAbsences($start_date, $end_date, $page, $per_page, $if_modified_since)



Returns a list of staff member absences for the school accociated with the provided access_token. A school level access token with the staff_members.absences scope is required to access staff member absence information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = "start_date_example"; // string | The start date of the period to return data for
$end_date = "end_date_example"; // string | The end date of the period to return data for
$page = 1; // int | Page number to return
$per_page = 100; // int | Number of results to return
$if_modified_since = "if_modified_since_example"; // string | Timestamp of the last response.

try {
    $result = $apiInstance->getStaffAbsences($start_date, $end_date, $page, $per_page, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->getStaffAbsences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **string**| The start date of the period to return data for | [optional]
 **end_date** | **string**| The end date of the period to return data for | [optional]
 **page** | **int**| Page number to return | [optional] [default to 1]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **if_modified_since** | **string**| Timestamp of the last response. | [optional]

### Return type

[**\Assembly\Client\Model\StaffAbsenceList**](../Model/StaffAbsenceList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStaffContracts**
> \Assembly\Client\Model\StaffContractList getStaffContracts($date, $roles, $salaries, $allowances, $page, $per_page, $if_modified_since)



Returns a list of staff member contracts for the school accociated with the provided access_token. A school level access token with the staff_members.contracts scope is required to access staff member contract information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date = "date_example"; // string | Filter for a specific date
$roles = false; // bool | Return roles information along with this object
$salaries = false; // bool | Return salary information along with this object
$allowances = false; // bool | Return allowances information along with this object
$page = 1; // int | Page number to return
$per_page = 100; // int | Number of results to return
$if_modified_since = "if_modified_since_example"; // string | Timestamp of the last response.

try {
    $result = $apiInstance->getStaffContracts($date, $roles, $salaries, $allowances, $page, $per_page, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->getStaffContracts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **string**| Filter for a specific date | [optional]
 **roles** | **bool**| Return roles information along with this object | [optional] [default to false]
 **salaries** | **bool**| Return salary information along with this object | [optional] [default to false]
 **allowances** | **bool**| Return allowances information along with this object | [optional] [default to false]
 **page** | **int**| Page number to return | [optional] [default to 1]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **if_modified_since** | **string**| Timestamp of the last response. | [optional]

### Return type

[**\Assembly\Client\Model\StaffContractList**](../Model/StaffContractList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStaffContractsStaffMemberId**
> \Assembly\Client\Model\StaffContractList getStaffContractsStaffMemberId($staff_member_id, $date, $roles, $salaries, $allowances, $page, $per_page, $if_modified_since)



Returns a list of staff member contracts for the school accociated with the provided access_token. A school level access token with the staff_members.contracts scope is required to access staff member contract information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$staff_member_id = "staff_member_id_example"; // string | ID of the Staff Member as an Integer
$date = "date_example"; // string | Filter for a specific date
$roles = false; // bool | Return roles information along with this object
$salaries = false; // bool | Return salary information along with this object
$allowances = false; // bool | Return allowances information along with this object
$page = 1; // int | Page number to return
$per_page = 100; // int | Number of results to return
$if_modified_since = "if_modified_since_example"; // string | Timestamp of the last response.

try {
    $result = $apiInstance->getStaffContractsStaffMemberId($staff_member_id, $date, $roles, $salaries, $allowances, $page, $per_page, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->getStaffContractsStaffMemberId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **staff_member_id** | **string**| ID of the Staff Member as an Integer |
 **date** | **string**| Filter for a specific date | [optional]
 **roles** | **bool**| Return roles information along with this object | [optional] [default to false]
 **salaries** | **bool**| Return salary information along with this object | [optional] [default to false]
 **allowances** | **bool**| Return allowances information along with this object | [optional] [default to false]
 **page** | **int**| Page number to return | [optional] [default to 1]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **if_modified_since** | **string**| Timestamp of the last response. | [optional]

### Return type

[**\Assembly\Client\Model\StaffContractList**](../Model/StaffContractList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStaffMembers**
> \Assembly\Client\Model\StaffMemberList getStaffMembers($teachers_only, $demographics, $qualifications, $page, $per_page, $if_modified_since)



Returns a list of staff members for the school accociated with the provided access_token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$teachers_only = false; // bool | Return only staff who are teachers
$demographics = false; // bool | Return demographic information along with the person (requires appropriate scope)
$qualifications = false; // bool | Include HLTA status, QT status, QT route and previous degree information (requires appropriate scope)
$page = 1; // int | Page number to return
$per_page = 100; // int | Number of results to return
$if_modified_since = "if_modified_since_example"; // string | Timestamp of the last response.

try {
    $result = $apiInstance->getStaffMembers($teachers_only, $demographics, $qualifications, $page, $per_page, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->getStaffMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teachers_only** | **bool**| Return only staff who are teachers | [optional] [default to false]
 **demographics** | **bool**| Return demographic information along with the person (requires appropriate scope) | [optional] [default to false]
 **qualifications** | **bool**| Include HLTA status, QT status, QT route and previous degree information (requires appropriate scope) | [optional] [default to false]
 **page** | **int**| Page number to return | [optional] [default to 1]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **if_modified_since** | **string**| Timestamp of the last response. | [optional]

### Return type

[**\Assembly\Client\Model\StaffMemberList**](../Model/StaffMemberList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStaffMembersStaffMemberId**
> \Assembly\Client\Model\StaffMember getStaffMembersStaffMemberId($staff_member_id, $demographics, $qualifications, $if_modified_since)



Returns an individual staff member record for the given ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$staff_member_id = "staff_member_id_example"; // string | ID of the Staff Member as an Integer
$demographics = false; // bool | Return demographic information along with the person (requires appropriate scope)
$qualifications = false; // bool | Include HLTA status, QT status, QT route and previous degree information (requires appropriate scope)
$if_modified_since = "if_modified_since_example"; // string | Timestamp of the last response.

try {
    $result = $apiInstance->getStaffMembersStaffMemberId($staff_member_id, $demographics, $qualifications, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->getStaffMembersStaffMemberId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **staff_member_id** | **string**| ID of the Staff Member as an Integer |
 **demographics** | **bool**| Return demographic information along with the person (requires appropriate scope) | [optional] [default to false]
 **qualifications** | **bool**| Include HLTA status, QT status, QT route and previous degree information (requires appropriate scope) | [optional] [default to false]
 **if_modified_since** | **string**| Timestamp of the last response. | [optional]

### Return type

[**\Assembly\Client\Model\StaffMember**](../Model/StaffMember.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStudents**
> \Assembly\Client\Model\StudentList getStudents($year_code, $students, $date, $demographics, $contacts, $sen_needs, $addresses, $care, $languages, $page, $per_page, $if_modified_since)



Returns a list of students for the school associated with the provided access_token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$year_code = "year_code_example"; // string | Filter by a specific NC year code
$students = "students_example"; // string | ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded).
$date = "date_example"; // string | Filter for a specific date
$demographics = false; // bool | Return demographic information along with the person (requires appropriate scope)
$contacts = false; // bool | Return contact information along with this object
$sen_needs = false; // bool | Return Special Educational Need information along with this object
$addresses = false; // bool | Return address information along with this object
$care = false; // bool | Return care information along with this object, depends on inclusion of demographics
$languages = false; // bool | Return language information along with this object
$page = 1; // int | Page number to return
$per_page = 100; // int | Number of results to return
$if_modified_since = "if_modified_since_example"; // string | Timestamp of the last response.

try {
    $result = $apiInstance->getStudents($year_code, $students, $date, $demographics, $contacts, $sen_needs, $addresses, $care, $languages, $page, $per_page, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->getStudents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year_code** | **string**| Filter by a specific NC year code | [optional]
 **students** | **string**| ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). | [optional]
 **date** | **string**| Filter for a specific date | [optional]
 **demographics** | **bool**| Return demographic information along with the person (requires appropriate scope) | [optional] [default to false]
 **contacts** | **bool**| Return contact information along with this object | [optional] [default to false]
 **sen_needs** | **bool**| Return Special Educational Need information along with this object | [optional] [default to false]
 **addresses** | **bool**| Return address information along with this object | [optional] [default to false]
 **care** | **bool**| Return care information along with this object, depends on inclusion of demographics | [optional] [default to false]
 **languages** | **bool**| Return language information along with this object | [optional] [default to false]
 **page** | **int**| Page number to return | [optional] [default to 1]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **if_modified_since** | **string**| Timestamp of the last response. | [optional]

### Return type

[**\Assembly\Client\Model\StudentList**](../Model/StudentList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStudentsStudentId**
> \Assembly\Client\Model\Student getStudentsStudentId($student_id, $date, $demographics, $contacts, $sen_needs, $addresses, $care, $languages, $if_modified_since)



Returns an individual student record for the given ID. Note: the response shown includes student demographics, contacts, student SEN needs, student addresses and student care data but these will only be present if you have permission to access it and pass demographics=true, contacts=true, sen_needs=true, addresses=true and care=true respectively

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$student_id = "student_id_example"; // string | ID of the Student as an Integer
$date = "date_example"; // string | Filter for a specific date
$demographics = false; // bool | Return demographic information along with the person (requires appropriate scope)
$contacts = false; // bool | Return contact information along with this object
$sen_needs = false; // bool | Return Special Educational Need information along with this object
$addresses = false; // bool | Return address information along with this object
$care = false; // bool | Return care information along with this object, depends on inclusion of demographics
$languages = false; // bool | Return language information along with this object
$if_modified_since = "if_modified_since_example"; // string | Timestamp of the last response.

try {
    $result = $apiInstance->getStudentsStudentId($student_id, $date, $demographics, $contacts, $sen_needs, $addresses, $care, $languages, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->getStudentsStudentId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **student_id** | **string**| ID of the Student as an Integer |
 **date** | **string**| Filter for a specific date | [optional]
 **demographics** | **bool**| Return demographic information along with the person (requires appropriate scope) | [optional] [default to false]
 **contacts** | **bool**| Return contact information along with this object | [optional] [default to false]
 **sen_needs** | **bool**| Return Special Educational Need information along with this object | [optional] [default to false]
 **addresses** | **bool**| Return address information along with this object | [optional] [default to false]
 **care** | **bool**| Return care information along with this object, depends on inclusion of demographics | [optional] [default to false]
 **languages** | **bool**| Return language information along with this object | [optional] [default to false]
 **if_modified_since** | **string**| Timestamp of the last response. | [optional]

### Return type

[**\Assembly\Client\Model\Student**](../Model/Student.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubjects**
> \Assembly\Client\Model\SubjectList getSubjects($mis_mappings, $page, $per_page)



Returns a list of the Assembly Platform's subjects.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mis_mappings = false; // bool | Includes the names of any MIS components to this object
$page = 1; // int | Page number to return
$per_page = 100; // int | Number of results to return

try {
    $result = $apiInstance->getSubjects($mis_mappings, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->getSubjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mis_mappings** | **bool**| Includes the names of any MIS components to this object | [optional] [default to false]
 **page** | **int**| Page number to return | [optional] [default to 1]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]

### Return type

[**\Assembly\Client\Model\SubjectList**](../Model/SubjectList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTeachingGroups**
> \Assembly\Client\Model\TeachingGroupList getTeachingGroups($subject_code, $year_code, $date, $academic_year_id, $page, $per_page)



Returns a list of teaching groups that match the given set of filters. If a date parameter is provided then the list of groups returned is filtered to only those where the provided date falls between the groups start_date and end_date. Additionally when a date parameter is provided student_ids and supervior_ids are restricted to only those students who were enrolled in the group on the given date.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subject_code = "subject_code_example"; // string | Filter by subject
$year_code = "year_code_example"; // string | Filter by a specific NC year code
$date = "date_example"; // string | Filter for a specific date
$academic_year_id = 56; // int | Filter based on the specified academic year
$page = 1; // int | Page number to return
$per_page = 100; // int | Number of results to return

try {
    $result = $apiInstance->getTeachingGroups($subject_code, $year_code, $date, $academic_year_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->getTeachingGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subject_code** | **string**| Filter by subject | [optional]
 **year_code** | **string**| Filter by a specific NC year code | [optional]
 **date** | **string**| Filter for a specific date | [optional]
 **academic_year_id** | **int**| Filter based on the specified academic year | [optional]
 **page** | **int**| Page number to return | [optional] [default to 1]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]

### Return type

[**\Assembly\Client\Model\TeachingGroupList**](../Model/TeachingGroupList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTeachingGroupsGroupId**
> \Assembly\Client\Model\TeachingGroup getTeachingGroupsGroupId($group_id, $date, $academic_year_id)



Returns a single teaching group whose ID matches the provided group_id. Additionally includes a list of all the student and supervisor identifiers that have ever been enrolled in the group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = "group_id_example"; // string | ID of the Year Group as an Integer
$date = "date_example"; // string | Filter for a specific date
$academic_year_id = 56; // int | Filter based on the specified academic year

try {
    $result = $apiInstance->getTeachingGroupsGroupId($group_id, $date, $academic_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->getTeachingGroupsGroupId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| ID of the Year Group as an Integer |
 **date** | **string**| Filter for a specific date | [optional]
 **academic_year_id** | **int**| Filter based on the specified academic year | [optional]

### Return type

[**\Assembly\Client\Model\TeachingGroup**](../Model/TeachingGroup.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTeachingGroupsGroupIdStudents**
> \Assembly\Client\Model\StudentList getTeachingGroupsGroupIdStudents($group_id, $year_code, $date, $academic_year_id, $demographics, $care, $page, $per_page, $if_modified_since)



Returns a list of all the students that are present in the teaching group identified by group_id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = "group_id_example"; // string | ID of the Year Group as an Integer
$year_code = "year_code_example"; // string | Filter by a specific NC year code
$date = "date_example"; // string | Filter for a specific date
$academic_year_id = 56; // int | Filter based on the specified academic year
$demographics = false; // bool | Return demographic information along with the person (requires appropriate scope)
$care = false; // bool | Return care information along with this object, depends on inclusion of demographics
$page = 1; // int | Page number to return
$per_page = 100; // int | Number of results to return
$if_modified_since = "if_modified_since_example"; // string | Timestamp of the last response.

try {
    $result = $apiInstance->getTeachingGroupsGroupIdStudents($group_id, $year_code, $date, $academic_year_id, $demographics, $care, $page, $per_page, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->getTeachingGroupsGroupIdStudents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| ID of the Year Group as an Integer |
 **year_code** | **string**| Filter by a specific NC year code | [optional]
 **date** | **string**| Filter for a specific date | [optional]
 **academic_year_id** | **int**| Filter based on the specified academic year | [optional]
 **demographics** | **bool**| Return demographic information along with the person (requires appropriate scope) | [optional] [default to false]
 **care** | **bool**| Return care information along with this object, depends on inclusion of demographics | [optional] [default to false]
 **page** | **int**| Page number to return | [optional] [default to 1]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **if_modified_since** | **string**| Timestamp of the last response. | [optional]

### Return type

[**\Assembly\Client\Model\StudentList**](../Model/StudentList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getYearGroups**
> \Assembly\Client\Model\YearGroupList getYearGroups($year_code, $date, $academic_year_id, $page, $per_page, $if_modified_since)



Returns a list of year groups that match the given set of filters. The default behaviour is to return the year groups for the school's current academic year.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$year_code = "year_code_example"; // string | Filter by a specific NC year code
$date = "date_example"; // string | Filter for a specific date
$academic_year_id = 56; // int | Filter based on the specified academic year
$page = 1; // int | Page number to return
$per_page = 100; // int | Number of results to return
$if_modified_since = "if_modified_since_example"; // string | Timestamp of the last response.

try {
    $result = $apiInstance->getYearGroups($year_code, $date, $academic_year_id, $page, $per_page, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->getYearGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year_code** | **string**| Filter by a specific NC year code | [optional]
 **date** | **string**| Filter for a specific date | [optional]
 **academic_year_id** | **int**| Filter based on the specified academic year | [optional]
 **page** | **int**| Page number to return | [optional] [default to 1]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **if_modified_since** | **string**| Timestamp of the last response. | [optional]

### Return type

[**\Assembly\Client\Model\YearGroupList**](../Model/YearGroupList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getYearGroupsGroupId**
> \Assembly\Client\Model\YearGroup getYearGroupsGroupId($group_id, $date, $academic_year_id)



Returns a single year group whose code matches the provided year_code. Additionally includes a list of all the student identifiers that are present in the group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = "group_id_example"; // string | ID of the Year Group as an Integer
$date = "date_example"; // string | Filter for a specific date
$academic_year_id = 56; // int | Filter based on the specified academic year

try {
    $result = $apiInstance->getYearGroupsGroupId($group_id, $date, $academic_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->getYearGroupsGroupId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| ID of the Year Group as an Integer |
 **date** | **string**| Filter for a specific date | [optional]
 **academic_year_id** | **int**| Filter based on the specified academic year | [optional]

### Return type

[**\Assembly\Client\Model\YearGroup**](../Model/YearGroup.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getYearGroupsGroupIdStudents**
> \Assembly\Client\Model\StudentList getYearGroupsGroupIdStudents($group_id, $date, $academic_year_id, $page, $per_page, $if_modified_since)



Returns a list of all the students that are present in the year group identified by year_code.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = "group_id_example"; // string | ID of the Year Group as an Integer
$date = "date_example"; // string | Filter for a specific date
$academic_year_id = 56; // int | Filter based on the specified academic year
$page = 1; // int | Page number to return
$per_page = 100; // int | Number of results to return
$if_modified_since = "if_modified_since_example"; // string | Timestamp of the last response.

try {
    $result = $apiInstance->getYearGroupsGroupIdStudents($group_id, $date, $academic_year_id, $page, $per_page, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->getYearGroupsGroupIdStudents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| ID of the Year Group as an Integer |
 **date** | **string**| Filter for a specific date | [optional]
 **academic_year_id** | **int**| Filter based on the specified academic year | [optional]
 **page** | **int**| Page number to return | [optional] [default to 1]
 **per_page** | **int**| Number of results to return | [optional] [default to 100]
 **if_modified_since** | **string**| Timestamp of the last response. | [optional]

### Return type

[**\Assembly\Client\Model\StudentList**](../Model/StudentList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchResults**
> \Assembly\Client\Model\UpdateMultipleResultResponse patchResults($update_multiple_result_payload)



Multiple results can be updated simultaneously by providing the relevant result_ids in the body of your request. The response will tell you whether the batch of updates has either been successful or failed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_multiple_result_payload = new \Assembly\Client\Model\UpdateMultipleResultResponse(); // \Assembly\Client\Model\UpdateMultipleResultResponse | Payload for update multiple Result request

try {
    $result = $apiInstance->patchResults($update_multiple_result_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->patchResults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_multiple_result_payload** | [**\Assembly\Client\Model\UpdateMultipleResultResponse**](../Model/UpdateMultipleResultResponse.md)| Payload for update multiple Result request | [optional]

### Return type

[**\Assembly\Client\Model\UpdateMultipleResultResponse**](../Model/UpdateMultipleResultResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchResultsResultId**
> \Assembly\Client\Model\Result patchResultsResultId($result_id, $update_result_payload)



Once a result has been created, it can be updated on the Platform by passing the required field values in the request body. A list of the fields that were changed are returned in the response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Assembly\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Assembly\Client\Api\AssemblyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$result_id = "result_id_example"; // string | ID of the Result as an Integer
$update_result_payload = new \Assembly\Client\Model\Result(); // \Assembly\Client\Model\Result | Payload for update Result request

try {
    $result = $apiInstance->patchResultsResultId($result_id, $update_result_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->patchResultsResultId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **result_id** | **string**| ID of the Result as an Integer |
 **update_result_payload** | [**\Assembly\Client\Model\Result**](../Model/Result.md)| Payload for update Result request | [optional]

### Return type

[**\Assembly\Client\Model\Result**](../Model/Result.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.assembly+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

