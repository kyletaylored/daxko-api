# Swagger\Client\ProgramsApi

All URIs are relative to *https://api.daxko.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOfferingDetails**](ProgramsApi.md#getOfferingDetails) | **GET** /v3/programs/{program_id}/offerings/{offering_id} | Get program offering details
[**listProgramCategories**](ProgramsApi.md#listProgramCategories) | **GET** /v3/programs/categories | List program categories
[**listProgramLocations**](ProgramsApi.md#listProgramLocations) | **GET** /v3/programs/locations | List program locations
[**listProgramOfferings**](ProgramsApi.md#listProgramOfferings) | **GET** /v3/programs/{program_id}/offerings | Get list of offerings for particular program
[**searchProgramOfferings**](ProgramsApi.md#searchProgramOfferings) | **GET** /v3/programs/offerings/search | Search program offerings


# **getOfferingDetails**
> \Swagger\Client\Model\InlineResponse20015 getOfferingDetails($program_id, $offering_id, $location_id)

Get program offering details

This call returns offerings for the different Daxko Operations program types as a common format.  There are some notes specific to the different program types as follows: #### For traditional programs or program packages: * The `details` collection is a list of segments associated with the **{offering_id}** * `details.name` will only have a value if the program type is a package sale * `max_days` property does not exist, as this only applies to child care and camp (maximum number of days that the rate plan pays for). #### For child care programs: * The `details` collection will always have 1 item in the collection. * If the offering is a daily rate, then `details.rate.amount` will be null, and instead `details.rate.amounts` will return a mapping of day to amount, where `rate.amounts.id` is the ISO 8601 representation of the day of the week.  Example: ```` \"rate\": {     \"frequency\": \"daily\",     \"amounts\": [       {         \"amount\": 0,         \"id\": 1,         \"name\": \"Monday\"       },       {         \"amount\": 1,         \"id\": 3,         \"name\": \"Wednesday\"       },       {         \"amount\": 3,         \"id\": 5,         \"name\": \"Friday\"       }     ],     ... } ```` For camp programs: * The `details` collection will always have 1 item in the collection. General notes: * On the `groups.registration_dates` collection, none of the dates are translated to UTC.  This will be the same date that is entered   in the UI.  Example, if the UI shows registration starting on 5/1/2020 at 8:15 AM, then the date in the response will be   '2020-05-01T08:15:00.0000000' * The `restrictions.genders` property will always exist and have the values of only 'M', only 'F', or the combination of 'M' and 'F'. * The `restrictions.dob` property will not exist if there is not a date of birth restriction * The `restrictions.age` property will not exist if there is not an age restriction * The `restrictions.expires_in` property only exist for program packages that have an Expiration configured

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$program_id = "program_id_example"; // string | See /v3/programs/{program_id}/offerings call for how to get program id.
$offering_id = "offering_id_example"; // string | See /v3/programs/{program_id}/offerings call for how to get offering id.
$location_id = "location_id_example"; // string | Example: 'B1234' would be branch with id 1234.  'S5678' would be site with 5678.

try {
    $result = $apiInstance->getOfferingDetails($program_id, $offering_id, $location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->getOfferingDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **program_id** | **string**| See /v3/programs/{program_id}/offerings call for how to get program id. |
 **offering_id** | **string**| See /v3/programs/{program_id}/offerings call for how to get offering id. |
 **location_id** | **string**| Example: &#39;B1234&#39; would be branch with id 1234.  &#39;S5678&#39; would be site with 5678. |

### Return type

[**\Swagger\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listProgramCategories**
> \Swagger\Client\Model\InlineResponse20016 listProgramCategories($as_of, $location_ids, $offering_types, $registration_type, $include_inactive_categories, $include_inactive_locations, $date_ranges, $limit)

List program categories

This endpoints returns a list of program categories that meet the criteria.  Example:  ```bash /v3/programs/categories?as_of={start:2010-01-01T08:00:00,end:2015-01-01T08:00:00,mode:registration_occurs_between}&locations=B123,B567&offering_types=rate_plan,camp_instance&registration_type=online&include_inactive_categories=true&limit=999 ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$as_of = "{start:<datetime for request>,end:<datetime of request>,mode:registration_occurs_between}"; // string | Restricts the list of categories to have the specified `start` and `end` datetime in at least one of the registration datetime ranges.  See [As of date tutorial]({{sitedir}}/tutorials/as_of_date/index.html).
$location_ids = array("\"B27,S34\""); // string[] | Restricts the list of categories to be associated with programs at the specified locations. If omitted, no location-based restrictions will be applied.
$offering_types = array("offering_types_example"); // string[] | Restricts the list of categories to only be associated with certain types of program offerings. If omitted, returns categories associated with all types of program offerings.
$registration_type = "registration_type_example"; // string | Restricts the list of categories to only be associated with in-house or online program offerings. Default behavior is to return categories for both in-house and online program offerings.
$include_inactive_categories = false; // bool | Indicates whether to show inactive categories. Default behavior will omit inactive categories.
$include_inactive_locations = false; // bool | Indicates whether to show categories associated with inactive locations. Defaultbehavior will omit categories associated with inactive locations.
$date_ranges = "\"[{start:2010-01-01,end:2011-01-01},{start:2015-01-01,end:2016-01-01}]\""; // string | Restricts results that occur within at least one of the date ranges.
$limit = 100; // int | Number of results to return.

try {
    $result = $apiInstance->listProgramCategories($as_of, $location_ids, $offering_types, $registration_type, $include_inactive_categories, $include_inactive_locations, $date_ranges, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->listProgramCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **as_of** | **string**| Restricts the list of categories to have the specified &#x60;start&#x60; and &#x60;end&#x60; datetime in at least one of the registration datetime ranges.  See [As of date tutorial]({{sitedir}}/tutorials/as_of_date/index.html). | [optional] [default to {start:&lt;datetime for request&gt;,end:&lt;datetime of request&gt;,mode:registration_occurs_between}]
 **location_ids** | [**string[]**](../Model/string.md)| Restricts the list of categories to be associated with programs at the specified locations. If omitted, no location-based restrictions will be applied. | [optional]
 **offering_types** | [**string[]**](../Model/string.md)| Restricts the list of categories to only be associated with certain types of program offerings. If omitted, returns categories associated with all types of program offerings. | [optional]
 **registration_type** | **string**| Restricts the list of categories to only be associated with in-house or online program offerings. Default behavior is to return categories for both in-house and online program offerings. | [optional]
 **include_inactive_categories** | **bool**| Indicates whether to show inactive categories. Default behavior will omit inactive categories. | [optional] [default to false]
 **include_inactive_locations** | **bool**| Indicates whether to show categories associated with inactive locations. Defaultbehavior will omit categories associated with inactive locations. | [optional] [default to false]
 **date_ranges** | **string**| Restricts results that occur within at least one of the date ranges. | [optional]
 **limit** | **int**| Number of results to return. | [optional] [default to 100]

### Return type

[**\Swagger\Client\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listProgramLocations**
> \Swagger\Client\Model\InlineResponse20017 listProgramLocations($as_of, $category_ids, $offering_types, $registration_type, $include_inactive_categories, $include_inactive_locations, $date_ranges, $limit)

List program locations

This endpoints returns a list of program locations that meet the criteria.  Example:  ```bash /v3/programs/locations?as_of={start:2010-01-01T08:00:00,end:2015-01-01T08:00:00,mode:registration_occurs_between}&locations=B123,B567&offering_types=rate_plan,camp_instance&registration_type=online&include_inactive_locations=true&limit=999 ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$as_of = "{start:<datetime of request>,end:<datetime of request>,mode:registration_occurs_between}"; // string | Restricts the list of locations to have the specified `start` and `end` datetime in at least one of the registration datetime ranges.  See [As of date tutorial]({{sitedir}}/tutorials/as_of_date/index.html).
$category_ids = array("\"TAG27,CAT34\""); // string[] | Restricts the list of locations to be associated with programs that offers programs with the specified categories. If omitted, no category-based restrictions will be applied.
$offering_types = array("offering_types_example"); // string[] | Restricts the list of locations to only be associated with certain types of program offerings. If omitted, returns locations associated with all types of program offerings.
$registration_type = "registration_type_example"; // string | Restricts the list of locations to only be associated with in-house or online program offerings. Default behavior is to return locations for both in-house and online program offerings.
$include_inactive_categories = false; // bool | Indicates whether to show locations associated with inactive categories. Default behavior will omit locations associated with inactive categories. However, if an offering has an inactive category and at least one active category, its location will be returned.
$include_inactive_locations = false; // bool | Indicates whether to show inactive locations. Default behavior will omit inactive locations.
$date_ranges = "\"[{start:2010-01-01,end:2011-01-01},{start:2015-01-01,end:2016-01-01}]\""; // string | Restricts results that occur within at least one of the date ranges.
$limit = 100; // int | Number of results to return.

try {
    $result = $apiInstance->listProgramLocations($as_of, $category_ids, $offering_types, $registration_type, $include_inactive_categories, $include_inactive_locations, $date_ranges, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->listProgramLocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **as_of** | **string**| Restricts the list of locations to have the specified &#x60;start&#x60; and &#x60;end&#x60; datetime in at least one of the registration datetime ranges.  See [As of date tutorial]({{sitedir}}/tutorials/as_of_date/index.html). | [optional] [default to {start:&lt;datetime of request&gt;,end:&lt;datetime of request&gt;,mode:registration_occurs_between}]
 **category_ids** | [**string[]**](../Model/string.md)| Restricts the list of locations to be associated with programs that offers programs with the specified categories. If omitted, no category-based restrictions will be applied. | [optional]
 **offering_types** | [**string[]**](../Model/string.md)| Restricts the list of locations to only be associated with certain types of program offerings. If omitted, returns locations associated with all types of program offerings. | [optional]
 **registration_type** | **string**| Restricts the list of locations to only be associated with in-house or online program offerings. Default behavior is to return locations for both in-house and online program offerings. | [optional]
 **include_inactive_categories** | **bool**| Indicates whether to show locations associated with inactive categories. Default behavior will omit locations associated with inactive categories. However, if an offering has an inactive category and at least one active category, its location will be returned. | [optional] [default to false]
 **include_inactive_locations** | **bool**| Indicates whether to show inactive locations. Default behavior will omit inactive locations. | [optional] [default to false]
 **date_ranges** | **string**| Restricts results that occur within at least one of the date ranges. | [optional]
 **limit** | **int**| Number of results to return. | [optional] [default to 100]

### Return type

[**\Swagger\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listProgramOfferings**
> \Swagger\Client\Model\InlineResponse20014 listProgramOfferings($program_id, $as_of, $category_ids, $location_ids, $registration_type, $offering_ids)

Get list of offerings for particular program

This call returns offerings that are available for registration for the different Daxko Operations program types as a common format. #### For traditional programs and program packages: * The list of offerings is the list of sessions on this program combined with the location (there is only one possible location for a session or package) * **{program_id}** refers to a program or package in Daxko Operations (go to Programs : Browse Programs : Select a tag) and then click then   edit pencil next to the top level item in the tree.  This will take you to _ProgramTemplate.aspx?tid={program_id}_. * The prefix for a traditional program type is 'TMP'.  Example: if you see _ProgramTemplate.aspx?tid=1234_, then the **{program_id}** to pass to this   API call would be 'TMP1234'. * The prefix for a program package type is 'PP'. Example: if you see _ProgramTemplate.aspx?tid=1234_, the the **{program_id}** to pass to this API call   would be 'PP1234'. #### For child care programs: * The list of offerings is rate plans on this program combined with all of the possible locations on this program. * **{program_id}** refers to a child care program in Daxko Operations (go to Child Care : Browse Programs : Filter by Child Care programs   and click the edit pencil).  This will take you to _ProgramsWizard.mvc?program_id={program_id}_. * The prefix of the program type is 'CC'.  Example: if you see _ProgramsWizard.mvc?program_id=1234_, then the **{program_id}** to pass to this   API call would be 'CC1234'. #### For camp programs: * The list of offerings is camp instances on this program combined with all of the possible locations on this program. * **{program_id}** refers to a child care program in Daxko Operations (go to Child Care : Browse Programs : Filter by Camp programs   and click the edit pencil).  This will take you to _ProgramsWizard.mvc?program_id={program_id}_. * The prefix of the program type is 'CMP'.  Example: if you see _ProgramsWizard.mvc?program_id=1234_, then the **{program_id}** to pass to this   API call would be 'CMP1234'.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$program_id = "program_id_example"; // string | See description above for examples of program ids.
$as_of = "{start:<datetime of request>,end:<datetime of request>,mode:registration_occurs_between}"; // string | Restricts results to have the specified `start` and `end` datetime in at least one of the registration datetime ranges. See [As of date tutorial]({{sitedir}}/tutorials/as_of_date/index.html).
$category_ids = "category_ids_example"; // string | Comma delimited list of category ids to filter by.  Example: 'TAG1234' is programs tag with id 1234, 'CAT5678' is a child care/camp category with id 5678
$location_ids = "location_ids_example"; // string | Comma delimited list of location ids to filter by.  Example: 'B1234' is branch with id 1234.  'S5678' is site with id 5678.
$registration_type = "online"; // string | Filters results that are currently open for registration.
$offering_ids = "\"SES12345,SES67890\""; // string | Comma delimited list of offering ids to filter by.

try {
    $result = $apiInstance->listProgramOfferings($program_id, $as_of, $category_ids, $location_ids, $registration_type, $offering_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->listProgramOfferings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **program_id** | **string**| See description above for examples of program ids. |
 **as_of** | **string**| Restricts results to have the specified &#x60;start&#x60; and &#x60;end&#x60; datetime in at least one of the registration datetime ranges. See [As of date tutorial]({{sitedir}}/tutorials/as_of_date/index.html). | [optional] [default to {start:&lt;datetime of request&gt;,end:&lt;datetime of request&gt;,mode:registration_occurs_between}]
 **category_ids** | **string**| Comma delimited list of category ids to filter by.  Example: &#39;TAG1234&#39; is programs tag with id 1234, &#39;CAT5678&#39; is a child care/camp category with id 5678 | [optional]
 **location_ids** | **string**| Comma delimited list of location ids to filter by.  Example: &#39;B1234&#39; is branch with id 1234.  &#39;S5678&#39; is site with id 5678. | [optional]
 **registration_type** | **string**| Filters results that are currently open for registration. | [optional] [default to online]
 **offering_ids** | **string**| Comma delimited list of offering ids to filter by. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchProgramOfferings**
> \Swagger\Client\Model\InlineResponse20013 searchProgramOfferings($as_of, $keywords, $location_ids, $category_ids, $offering_types, $registration_type, $include_inactive_categories, $include_inactive_locations, $days_offered, $time_ranges, $date_ranges, $birth_dates, $include_facets, $time_range_facets, $limit, $sort, $program_id, $after)

Search program offerings

This call returns offerings for the different Daxko Operations program types as a common format and accepts a number of search parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$as_of = "{start:<datetime of request>,end:<datetime of request>,mode:registration_occurs_between}"; // string | Restricts results to have the specified `start` and `end` datetime in at least one of the registration datetime ranges. See [As of date tutorial](../tutorials/as_of_date/index.html).
$keywords = "\"swim lessons\""; // string | Keywords for performing full text search.  The following fields are searched: offering name, offering description, program name, program description, category name, instructor name, contact name.
$location_ids = array("\"B27,S34\""); // string[] | Restricts the results to comma delimited list of locations . If omitted, no location-based restrictions will be applied.
$category_ids = array("\"CAT1234,TAG3455\""); // string[] | Restricts the results to comma delimited list of categories.  If omitted, no category based restrictions will be applied.
$offering_types = array("offering_types_example"); // string[] | Restricts the results to only be associated with certain types of program\\ offerings. If omitted, returns offerings associated with all types of \\ program offerings.  |Program Offering Type|Filter Value| |-|-| |Standard|session| |Package|package| |Childcare|rate_plan| |Camp|camp_instance|
$registration_type = "online"; // string | Restricts the list of offerings to only in-house or online program offerings. Default behavior is to return both in-house and online program offerings.
$include_inactive_categories = false; // bool | Indicates whether to show inactive categories. Default behavior will omit inactive categories.
$include_inactive_locations = false; // bool | Indicates whether to show categories associated with inactive locations. Defaultbehavior will omit categories associated with inactive locations.
$days_offered = "\"1,3,5\""; // string | Restricts results to be match at least 1 of the days as the query parameter.  The `score` on each individual result will be higher if more days match.  NOTE: If the source offering in Daxko Operations does not have days offered defined, then those results will always be returned, but the `score` will be lower.
$time_ranges = "\"[{start:08:00,end:09:00},{start:11:00,end:13:00}]\""; // string | Restricts results to match at least 1 of the specified start time ranges.  NOTE: If the source offering in Daxko Operations does not have a time defined, then those results will always be returned but the `score` will be lower.
$date_ranges = "\"[{start:2010-01-01,end:2011-01-01},{start:2015-01-01,end:2016-01-01}]\""; // string | Restricts results that occur within at least one of the date ranges.
$birth_dates = "\"1982-05-21,1981-06-28\""; // string | Restricts results based on comma-delimited list of birth dates.  At least one of the birth dates in the collection must be eligible for the offering based on the offering set up in Daxko Operations.
$include_facets = false; // bool | Controls whether facets (statistics) of the current search are returned.  This controls whether the `facets` property is returned.
$time_range_facets = "\"[{start:05:00,end:11:59},{start:12:00,end:21:00}]\""; // string | If `include_facets` query parameter is true, this allows customization of what ranges are returned in `facets.time_ranges`.
$limit = 100; // int | Number of offering results to return (max of 100).  If you set to 0 and set `include_facets` to true, you can still get the facet results without the individual offering results.
$sort = array("\"+name,-score\""); // string[] | Determines how the offering results will be sorted. By default, the sorting will be by score (descending order). For more information on sorting options, see the Sorting section of the [Getting Started Tutorial](../tutorials/getting_started/index.html#sorting) for more information. All fields correspond to the fields described in the response body.  The supported fields and their default sort orders for this API call are  |Field|Default sort order| |-|-| |score|descending| |name|ascending| |start_date|ascending|
$program_id = array("\"TMP1234567,TMP8675309\""); // string[] | Restricts the results to comma-delimited list of program ids. If omitted, no category-based restrictions will be applied.
$after = "\"c2FtcGxlIG5hbWUsb2ZmZXJpbmcjOTk5OS1DQzEyMzQtUlA1Njc4\""; // string | This parameter is used as a cursor to fetch the next page of results. Use the `after` value from a previously returned response body, or, use the URL link returned in the `links` response value to avoid having to construct your own URL. View the Paging section of the [Getting Started Tutorial](../tutorials/getting_started/index.html#pagination) for more information.

try {
    $result = $apiInstance->searchProgramOfferings($as_of, $keywords, $location_ids, $category_ids, $offering_types, $registration_type, $include_inactive_categories, $include_inactive_locations, $days_offered, $time_ranges, $date_ranges, $birth_dates, $include_facets, $time_range_facets, $limit, $sort, $program_id, $after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->searchProgramOfferings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **as_of** | **string**| Restricts results to have the specified &#x60;start&#x60; and &#x60;end&#x60; datetime in at least one of the registration datetime ranges. See [As of date tutorial](../tutorials/as_of_date/index.html). | [optional] [default to {start:&lt;datetime of request&gt;,end:&lt;datetime of request&gt;,mode:registration_occurs_between}]
 **keywords** | **string**| Keywords for performing full text search.  The following fields are searched: offering name, offering description, program name, program description, category name, instructor name, contact name. | [optional]
 **location_ids** | [**string[]**](../Model/string.md)| Restricts the results to comma delimited list of locations . If omitted, no location-based restrictions will be applied. | [optional]
 **category_ids** | [**string[]**](../Model/string.md)| Restricts the results to comma delimited list of categories.  If omitted, no category based restrictions will be applied. | [optional]
 **offering_types** | [**string[]**](../Model/string.md)| Restricts the results to only be associated with certain types of program\\ offerings. If omitted, returns offerings associated with all types of \\ program offerings.  |Program Offering Type|Filter Value| |-|-| |Standard|session| |Package|package| |Childcare|rate_plan| |Camp|camp_instance| | [optional]
 **registration_type** | **string**| Restricts the list of offerings to only in-house or online program offerings. Default behavior is to return both in-house and online program offerings. | [optional] [default to online]
 **include_inactive_categories** | **bool**| Indicates whether to show inactive categories. Default behavior will omit inactive categories. | [optional] [default to false]
 **include_inactive_locations** | **bool**| Indicates whether to show categories associated with inactive locations. Defaultbehavior will omit categories associated with inactive locations. | [optional] [default to false]
 **days_offered** | **string**| Restricts results to be match at least 1 of the days as the query parameter.  The &#x60;score&#x60; on each individual result will be higher if more days match.  NOTE: If the source offering in Daxko Operations does not have days offered defined, then those results will always be returned, but the &#x60;score&#x60; will be lower. | [optional]
 **time_ranges** | **string**| Restricts results to match at least 1 of the specified start time ranges.  NOTE: If the source offering in Daxko Operations does not have a time defined, then those results will always be returned but the &#x60;score&#x60; will be lower. | [optional]
 **date_ranges** | **string**| Restricts results that occur within at least one of the date ranges. | [optional]
 **birth_dates** | **string**| Restricts results based on comma-delimited list of birth dates.  At least one of the birth dates in the collection must be eligible for the offering based on the offering set up in Daxko Operations. | [optional]
 **include_facets** | **bool**| Controls whether facets (statistics) of the current search are returned.  This controls whether the &#x60;facets&#x60; property is returned. | [optional] [default to false]
 **time_range_facets** | **string**| If &#x60;include_facets&#x60; query parameter is true, this allows customization of what ranges are returned in &#x60;facets.time_ranges&#x60;. | [optional]
 **limit** | **int**| Number of offering results to return (max of 100).  If you set to 0 and set &#x60;include_facets&#x60; to true, you can still get the facet results without the individual offering results. | [optional] [default to 100]
 **sort** | [**string[]**](../Model/string.md)| Determines how the offering results will be sorted. By default, the sorting will be by score (descending order). For more information on sorting options, see the Sorting section of the [Getting Started Tutorial](../tutorials/getting_started/index.html#sorting) for more information. All fields correspond to the fields described in the response body.  The supported fields and their default sort orders for this API call are  |Field|Default sort order| |-|-| |score|descending| |name|ascending| |start_date|ascending| | [optional]
 **program_id** | [**string[]**](../Model/string.md)| Restricts the results to comma-delimited list of program ids. If omitted, no category-based restrictions will be applied. | [optional]
 **after** | **string**| This parameter is used as a cursor to fetch the next page of results. Use the &#x60;after&#x60; value from a previously returned response body, or, use the URL link returned in the &#x60;links&#x60; response value to avoid having to construct your own URL. View the Paging section of the [Getting Started Tutorial](../tutorials/getting_started/index.html#pagination) for more information. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

