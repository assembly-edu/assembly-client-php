# Assembly\Client\AssemblyApi

All URIs are relative to *https://api-sandbox.assembly.education*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callList**](AssemblyApi.md#callList) | **GET** /academic_years | List Academic Years
[**callList_0**](AssemblyApi.md#callList_0) | **GET** /assessment_points | List Assessment Points
[**callList_1**](AssemblyApi.md#callList_1) | **GET** /assessments | List Assessments
[**callList_10**](AssemblyApi.md#callList_10) | **GET** /staff_contracts | List Staff Contracts
[**callList_11**](AssemblyApi.md#callList_11) | **GET** /staff_members | List Staff Members
[**callList_12**](AssemblyApi.md#callList_12) | **GET** /students | List Students
[**callList_13**](AssemblyApi.md#callList_13) | **GET** /subjects | List Subjects
[**callList_14**](AssemblyApi.md#callList_14) | **GET** /teaching_groups | List Teaching Groups
[**callList_15**](AssemblyApi.md#callList_15) | **GET** /year_groups | List Year Groups
[**callList_2**](AssemblyApi.md#callList_2) | **GET** /attendances | List Attendances
[**callList_3**](AssemblyApi.md#callList_3) | **GET** /calendar_events | List Calendar Events
[**callList_4**](AssemblyApi.md#callList_4) | **GET** /contacts | List Contacts
[**callList_5**](AssemblyApi.md#callList_5) | **GET** /exclusions | List Exclusions
[**callList_6**](AssemblyApi.md#callList_6) | **GET** /facets | List Facets
[**callList_7**](AssemblyApi.md#callList_7) | **GET** /registration_groups | List Registration Group
[**callList_8**](AssemblyApi.md#callList_8) | **GET** /results | List Results
[**callList_9**](AssemblyApi.md#callList_9) | **GET** /staff_absences | List Staff Absences
[**find**](AssemblyApi.md#find) | **GET** /academic_years/{id} | View an Academic Year
[**find_0**](AssemblyApi.md#find_0) | **GET** /assessment_points/{id} | View an Assessment Point
[**find_1**](AssemblyApi.md#find_1) | **GET** /assessments/{id} | View an Assessment
[**find_2**](AssemblyApi.md#find_2) | **GET** /facets/{id} | View a Facet
[**find_3**](AssemblyApi.md#find_3) | **GET** /registration_groups/{id} | View a Registration Group
[**find_4**](AssemblyApi.md#find_4) | **GET** /staff_members/{id} | View a Staff Member
[**find_5**](AssemblyApi.md#find_5) | **GET** /students/{id} | View a Student
[**find_6**](AssemblyApi.md#find_6) | **GET** /teaching_groups/{id} | View a Teaching Group
[**find_7**](AssemblyApi.md#find_7) | **GET** /year_groups/{id} | View a Year Group
[**gradeSet**](AssemblyApi.md#gradeSet) | **GET** /assessments/{id}/grade_set | View Grade Set for an Assessment
[**left**](AssemblyApi.md#left) | **GET** /students/left | List Left Students
[**results**](AssemblyApi.md#results) | **GET** /assessment_points/{id}/results | View Results for an Assessment Point
[**results_0**](AssemblyApi.md#results_0) | **GET** /assessments/{id}/results | View Results for an Assessment
[**show**](AssemblyApi.md#show) | **GET** /school_details | List School Details
[**students**](AssemblyApi.md#students) | **GET** /registration_groups/{id}/students | List Students for Registration Group
[**students_0**](AssemblyApi.md#students_0) | **GET** /teaching_groups/{id}/students | List Students for Teaching Group
[**students_1**](AssemblyApi.md#students_1) | **GET** /year_groups/{id}/students | List Students for Year Group


# **callList**
> \Assembly\Client\Model\AcademicYear[] callList($per_page, $page)

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
    $result = $apiInstance->callList($per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->callList: ', $e->getMessage(), PHP_EOL;
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

# **callList_0**
> \Assembly\Client\Model\AssessmentPoint[] callList_0($per_page, $page)

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
    $result = $apiInstance->callList_0($per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->callList_0: ', $e->getMessage(), PHP_EOL;
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

# **callList_1**
> \Assembly\Client\Model\Assessment[] callList_1($per_page, $page)

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
    $result = $apiInstance->callList_1($per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->callList_1: ', $e->getMessage(), PHP_EOL;
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

# **callList_10**
> \Assembly\Client\Model\StaffContract[] callList_10($if_modified_since, $staff_member_id, $date, $roles, $salaries, $allowances, $per_page, $page)

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
    $result = $apiInstance->callList_10($if_modified_since, $staff_member_id, $date, $roles, $salaries, $allowances, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->callList_10: ', $e->getMessage(), PHP_EOL;
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

# **callList_11**
> \Assembly\Client\Model\StaffMember[] callList_11($if_modified_since, $teachers_only, $demographics, $qualifications, $per_page, $page)

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
    $result = $apiInstance->callList_11($if_modified_since, $teachers_only, $demographics, $qualifications, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->callList_11: ', $e->getMessage(), PHP_EOL;
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

# **callList_12**
> \Assembly\Client\Model\Student[] callList_12($if_modified_since, $students, $date, $year_code, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo, $per_page, $page)

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
    $result = $apiInstance->callList_12($if_modified_since, $students, $date, $year_code, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->callList_12: ', $e->getMessage(), PHP_EOL;
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

# **callList_13**
> \Assembly\Client\Model\Subject[] callList_13($per_page, $page)

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
    $result = $apiInstance->callList_13($per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->callList_13: ', $e->getMessage(), PHP_EOL;
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

# **callList_14**
> \Assembly\Client\Model\TeachingGroup[] callList_14($if_modified_since, $subject_code, $year_code, $date, $academic_year_id, $per_page, $page)

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
    $result = $apiInstance->callList_14($if_modified_since, $subject_code, $year_code, $date, $academic_year_id, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->callList_14: ', $e->getMessage(), PHP_EOL;
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

# **callList_15**
> \Assembly\Client\Model\YearGroup[] callList_15($if_modified_since, $year_code, $date, $academic_year_id, $per_page, $page)

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
    $result = $apiInstance->callList_15($if_modified_since, $year_code, $date, $academic_year_id, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->callList_15: ', $e->getMessage(), PHP_EOL;
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

# **callList_2**
> \Assembly\Client\Model\Attendance[] callList_2($student_id, $registration_group_id, $start_date, $end_date, $per_page, $page)

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
    $result = $apiInstance->callList_2($student_id, $registration_group_id, $start_date, $end_date, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->callList_2: ', $e->getMessage(), PHP_EOL;
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

# **callList_3**
> \Assembly\Client\Model\CalendarEvent[] callList_3($event_type, $per_page, $page)

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
    $result = $apiInstance->callList_3($event_type, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->callList_3: ', $e->getMessage(), PHP_EOL;
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

# **callList_4**
> \Assembly\Client\Model\Contact[] callList_4($student_id, $per_page, $page)

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
    $result = $apiInstance->callList_4($student_id, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->callList_4: ', $e->getMessage(), PHP_EOL;
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

# **callList_5**
> \Assembly\Client\Model\Exclusion[] callList_5($student_id, $start_date, $end_date, $per_page, $page)

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
    $result = $apiInstance->callList_5($student_id, $start_date, $end_date, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->callList_5: ', $e->getMessage(), PHP_EOL;
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

# **callList_6**
> \Assembly\Client\Model\Facet[] callList_6($per_page, $page)

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
    $result = $apiInstance->callList_6($per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->callList_6: ', $e->getMessage(), PHP_EOL;
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

# **callList_7**
> \Assembly\Client\Model\RegistrationGroup[] callList_7($if_modified_since, $year_code, $date, $academic_year_id, $per_page, $page)

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
    $result = $apiInstance->callList_7($if_modified_since, $year_code, $date, $academic_year_id, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->callList_7: ', $e->getMessage(), PHP_EOL;
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

# **callList_8**
> \Assembly\Client\Model\Result[] callList_8($students, $if_modified_since, $per_page, $page)

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
    $result = $apiInstance->callList_8($students, $if_modified_since, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->callList_8: ', $e->getMessage(), PHP_EOL;
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

# **callList_9**
> \Assembly\Client\Model\StaffAbsence[] callList_9($if_modified_since, $staff_member_id, $start_date, $qualifications, $per_page, $page)

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
    $result = $apiInstance->callList_9($if_modified_since, $staff_member_id, $start_date, $qualifications, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->callList_9: ', $e->getMessage(), PHP_EOL;
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

# **find**
> \Assembly\Client\Model\AcademicYear find($id)

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
    $result = $apiInstance->find($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->find: ', $e->getMessage(), PHP_EOL;
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

# **find_0**
> \Assembly\Client\Model\AssessmentPoint find_0($id)

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
    $result = $apiInstance->find_0($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->find_0: ', $e->getMessage(), PHP_EOL;
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

# **find_1**
> \Assembly\Client\Model\Assessment find_1($id)

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
    $result = $apiInstance->find_1($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->find_1: ', $e->getMessage(), PHP_EOL;
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

# **find_2**
> \Assembly\Client\Model\Facet find_2($id)

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
    $result = $apiInstance->find_2($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->find_2: ', $e->getMessage(), PHP_EOL;
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

# **find_3**
> \Assembly\Client\Model\RegistrationGroup find_3($id, $date, $academic_year_id)

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
    $result = $apiInstance->find_3($id, $date, $academic_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->find_3: ', $e->getMessage(), PHP_EOL;
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

# **find_4**
> \Assembly\Client\Model\StaffMember find_4($id, $demographics, $qualifications)

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
    $result = $apiInstance->find_4($id, $demographics, $qualifications);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->find_4: ', $e->getMessage(), PHP_EOL;
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

# **find_5**
> \Assembly\Client\Model\Student find_5($id, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo)

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
    $result = $apiInstance->find_5($id, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->find_5: ', $e->getMessage(), PHP_EOL;
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

# **find_6**
> \Assembly\Client\Model\TeachingGroup find_6($id, $date, $academic_year_id, $group_id)

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
    $result = $apiInstance->find_6($id, $date, $academic_year_id, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->find_6: ', $e->getMessage(), PHP_EOL;
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

# **find_7**
> \Assembly\Client\Model\YearGroup find_7($id, $date, $academic_year_id)

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
    $result = $apiInstance->find_7($id, $date, $academic_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->find_7: ', $e->getMessage(), PHP_EOL;
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

# **gradeSet**
> \Assembly\Client\Model\GradeSet gradeSet($id)

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
    $result = $apiInstance->gradeSet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->gradeSet: ', $e->getMessage(), PHP_EOL;
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

# **left**
> \Assembly\Client\Model\Student[] left($if_modified_since)

List Left Students

Returns a list of students who have left the school.<br><br>**Note:** This will include any students who have left the school during the current academic year. If the school has been connected to Assembly for more than one academic year, all left students will be returned. The `If-Modified-Since` header is optional (see the page on [Conditional Requests](/api#conditional-requests) for more details).

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
    $result = $apiInstance->left($if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->left: ', $e->getMessage(), PHP_EOL;
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

# **results**
> \Assembly\Client\Model\Result[] results($id, $students, $assessment_point_rank)

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
    $result = $apiInstance->results($id, $students, $assessment_point_rank);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->results: ', $e->getMessage(), PHP_EOL;
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

# **results_0**
> \Assembly\Client\Model\Result[] results_0($id, $students)

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
    $result = $apiInstance->results_0($id, $students);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->results_0: ', $e->getMessage(), PHP_EOL;
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

# **show**
> \Assembly\Client\Model\SchoolDetails show()

List School Details

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

try {
    $result = $apiInstance->show();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->show: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Assembly\Client\Model\SchoolDetails**](../Model/SchoolDetails.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.assembly+json; version=1.1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **students**
> \Assembly\Client\Model\Student[] students($id, $if_modified_since, $date, $academic_year_id, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo)

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
    $result = $apiInstance->students($id, $if_modified_since, $date, $academic_year_id, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->students: ', $e->getMessage(), PHP_EOL;
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

# **students_0**
> \Assembly\Client\Model\Student[] students_0($id, $if_modified_since, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo)

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
    $result = $apiInstance->students_0($id, $if_modified_since, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->students_0: ', $e->getMessage(), PHP_EOL;
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

# **students_1**
> \Assembly\Client\Model\Student[] students_1($id, $if_modified_since, $date, $academic_year_id, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo)

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
    $result = $apiInstance->students_1($id, $if_modified_since, $date, $academic_year_id, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssemblyApi->students_1: ', $e->getMessage(), PHP_EOL;
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

