# Swagger\Client\MembersApi

All URIs are relative to *https://api.daxko.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMemberCheckins**](MembersApi.md#getMemberCheckins) | **GET** /v3/members/{member_id}/check_ins | Member Check-ins
[**getMemberDetails**](MembersApi.md#getMemberDetails) | **GET** /v3/members/{member_id} | Get Member Details
[**getMembersMe**](MembersApi.md#getMembersMe) | **GET** /v3/members/me | Get my member info


# **getMemberCheckins**
> \Swagger\Client\Model\InlineResponse2004 getMemberCheckins($member_id, $start_date, $end_date)

Member Check-ins

Retrieves a list of check-ins for a specified member along with the location where the check-in occurred. You must specify a custom time frame to retrieve check-ins with the `start_date` and `end_date` query parameters.   For example, `GET /v3/members/9999-99/check_ins?start_date=2017-03-02T00:00:00Z&end_date=2017-03-03T00:00:00Z` would return the check-ins for member `9999-99` from midnight March 2, 2017 (UTC time) to midnight March 3, 2017 (UTC time).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$member_id = "member_id_example"; // string | The ID of the member returned from the /v3/member/login endpoint.
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date in UTC time (ISO 8601 format).
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date in UTC time (ISO 8601 format).

try {
    $result = $apiInstance->getMemberCheckins($member_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->getMemberCheckins: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **member_id** | **string**| The ID of the member returned from the /v3/member/login endpoint. |
 **start_date** | **\DateTime**| The start date in UTC time (ISO 8601 format). |
 **end_date** | **\DateTime**| The end date in UTC time (ISO 8601 format). |

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMemberDetails**
> \Swagger\Client\Model\InlineResponse2002 getMemberDetails($member_id)

Get Member Details

Retrieves detailed information about a specific member.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$member_id = "member_id_example"; // string | The ID of the member

try {
    $result = $apiInstance->getMemberDetails($member_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->getMemberDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **member_id** | **string**| The ID of the member |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMembersMe**
> \Swagger\Client\Model\InlineResponse2003 getMembersMe()

Get my member info

Retrieves basic information about a member using a member scoped `access_token`.  See [Member Authentication Tutorial](../tutorials/member_authentication/index.html)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getMembersMe();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->getMembersMe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

