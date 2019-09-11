# Swagger\Client\MembershipApi

All URIs are relative to *https://api.daxko.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**acceptMembershipAgreements**](MembershipApi.md#acceptMembershipAgreements) | **PUT** /v3/membership/{cart_id}/agreements | Accept membership agreements
[**deleteMembershipMember**](MembershipApi.md#deleteMembershipMember) | **DELETE** /v3/membership/{cart_id}/members/{member_guid} | Delete member in cart
[**getAgeGroups**](MembershipApi.md#getAgeGroups) | **GET** /v3/membership/age_groups | List age groups
[**getDiscountGroups**](MembershipApi.md#getDiscountGroups) | **GET** /v3/membership/discount_groups | List discount groups
[**getMembershipAgreements**](MembershipApi.md#getMembershipAgreements) | **GET** /v3/membership/{cart_id}/agreements | Get membership agreements
[**getMembershipBranches**](MembershipApi.md#getMembershipBranches) | **GET** /v3/membership/branches | List membership branches
[**getMembershipCart**](MembershipApi.md#getMembershipCart) | **GET** /v3/membership/{cart_id} | Get review information
[**getMembershipMember**](MembershipApi.md#getMembershipMember) | **GET** /v3/membership/{cart_id}/members/{member_guid} | Get member in cart
[**getMembershipQuestions**](MembershipApi.md#getMembershipQuestions) | **GET** /v3/membership/{cart_id}/member_questions | Get member questions
[**getMembershipReceipt**](MembershipApi.md#getMembershipReceipt) | **GET** /v3/membership/{cart_id}/receipt | Get receipt
[**getMembershipTypes**](MembershipApi.md#getMembershipTypes) | **GET** /v3/membership/membership_types | List membership types
[**postCartMember**](MembershipApi.md#postCartMember) | **POST** /v3/membership/{cart_id}/members | Add member to cart
[**postMembershipCheckout**](MembershipApi.md#postMembershipCheckout) | **POST** /v3/membership/{cart_id}/checkout | Checkout
[**postMembershipDiscountGroups**](MembershipApi.md#postMembershipDiscountGroups) | **POST** /v3/membership/{cart_id}/discount_groups | Apply discount groups
[**postMembershipEmailValidation**](MembershipApi.md#postMembershipEmailValidation) | **POST** /v3/membership/{cart_id}/email_validation | Validate email
[**postMembershipRenewal**](MembershipApi.md#postMembershipRenewal) | **POST** /v3/membership/renewal | Start renewal process
[**putMembershipMember**](MembershipApi.md#putMembershipMember) | **PUT** /v3/membership/{cart_id}/members/{member_guid} | Update member in cart
[**setCartMembersStatus**](MembershipApi.md#setCartMembersStatus) | **PUT** /v3/membership/{cart_id}/status | Set members status in cart
[**startMemberJoin**](MembershipApi.md#startMemberJoin) | **POST** /v3/membership/join | Start join process


# **acceptMembershipAgreements**
> \Swagger\Client\Model\InlineResponse2009 acceptMembershipAgreements($cart_id, $body)

Accept membership agreements

This call is used to save and sign agreements associated with a membership.  Either `signee_name` or `signature_image_base64` is required.  Example body with `signee_name`: ```json {   \"agreement_ids\": [\"W293\"],   \"signee_name\": \"John Doe\" } ```  Example body with `signature_image_base64`: ```json {   \"agreement_ids\": [\"W293\"],   \"signature_image_base64\": \"iVBORw0KGgoAAAANSUhEUgAAAV8AAAA6...\" } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "\"77ae13b3-c645-4bca-bb01-d8855ecd879a\""; // string | The ID of the cart.
$body = new \Swagger\Client\Model\Body10(); // \Swagger\Client\Model\Body10 | 

try {
    $result = $apiInstance->acceptMembershipAgreements($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipApi->acceptMembershipAgreements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The ID of the cart. |
 **body** | [**\Swagger\Client\Model\Body10**](../Model/Body10.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMembershipMember**
> \Swagger\Client\Model\InlineResponse2007 deleteMembershipMember($cart_id, $member_guid)

Delete member in cart

Deletes a member in the cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "\"77ae13b3-c645-4bca-bb01-d8855ecd879a\""; // string | The ID of the cart.
$member_guid = "\"88ae13b3-e645-abca-7b01-d8755ecd87ff\""; // string | The temporary GUID of the member.

try {
    $result = $apiInstance->deleteMembershipMember($cart_id, $member_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipApi->deleteMembershipMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The ID of the cart. |
 **member_guid** | **string**| The temporary GUID of the member. |

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgeGroups**
> object getAgeGroups()

List age groups

This lists out age groups set up by the client.  If the client has not set up explicit age groups (see Membership : Settings : Age Groups in Daxko Operations), then this will return the `any_adult` and `any_child` as the only results.  The value `any_adult` or `any_child` may be used in place of any call that requires `age_group_id` as an input parameter if you do not with to be forced to use the granual age groups set up by the client.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAgeGroups();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipApi->getAgeGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDiscountGroups**
> object getDiscountGroups($branch_id, $registration_type)

List discount groups

This endpoint returns a list of membership discount groups.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$branch_id = "branch_id_example"; // string | Restricts the list of discount groups to a particular branch.
$registration_type = "online"; // string | Restricts the list of discount groups to only include membership types associated with in-house or online membership join.

try {
    $result = $apiInstance->getDiscountGroups($branch_id, $registration_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipApi->getDiscountGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **branch_id** | **string**| Restricts the list of discount groups to a particular branch. |
 **registration_type** | **string**| Restricts the list of discount groups to only include membership types associated with in-house or online membership join. | [optional] [default to online]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMembershipAgreements**
> \Swagger\Client\Model\InlineResponse2008 getMembershipAgreements($cart_id)

Get membership agreements

This call is used to retrieve all agreements associated with this membership.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "\"77ae13b3-c645-4bca-bb01-d8855ecd879a\""; // string | The ID of the cart.

try {
    $result = $apiInstance->getMembershipAgreements($cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipApi->getMembershipAgreements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The ID of the cart. |

### Return type

[**\Swagger\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMembershipBranches**
> object getMembershipBranches($registration_type, $renew)

List membership branches

This endpoint returns a list of branches that can handle membership join.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$registration_type = "online"; // string | Restricts the list of branches to only be associated with in-house or online membership join.
$renew = false; // bool | When `true`, the `renew` parameter restricts the list of branches to only include branches that allow members to renew their membership. When `false`, the `renew` parameter does not restrict the list of branches.

try {
    $result = $apiInstance->getMembershipBranches($registration_type, $renew);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipApi->getMembershipBranches: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registration_type** | **string**| Restricts the list of branches to only be associated with in-house or online membership join. | [optional] [default to online]
 **renew** | **bool**| When &#x60;true&#x60;, the &#x60;renew&#x60; parameter restricts the list of branches to only include branches that allow members to renew their membership. When &#x60;false&#x60;, the &#x60;renew&#x60; parameter does not restrict the list of branches. | [optional] [default to false]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMembershipCart**
> \Swagger\Client\Model\InlineResponse20010 getMembershipCart($cart_id)

Get review information

This call is used to retrieve all of the information needed to review the cart before checkout.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "\"77ae13b3-c645-4bca-bb01-d8855ecd879a\""; // string | The ID of the cart.

try {
    $result = $apiInstance->getMembershipCart($cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipApi->getMembershipCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The ID of the cart. |

### Return type

[**\Swagger\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMembershipMember**
> \Swagger\Client\Model\InlineResponse2006 getMembershipMember($cart_id, $member_guid)

Get member in cart

Gets a member in the cart based on temporary GUID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "\"77ae13b3-c645-4bca-bb01-d8855ecd879a\""; // string | The ID of the cart.
$member_guid = "\"88ae13b3-e645-abca-7b01-d8755ecd87ff\""; // string | The temporary GUID of the member.

try {
    $result = $apiInstance->getMembershipMember($cart_id, $member_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipApi->getMembershipMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The ID of the cart. |
 **member_guid** | **string**| The temporary GUID of the member. |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMembershipQuestions**
> \Swagger\Client\Model\InlineResponse2005 getMembershipQuestions($cart_id, $age_group_id)

Get member questions

Gets member questions so that you can know which answers to provide when adding a new member

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "\"77ae13b3-c645-4bca-bb01-d8855ecd879a\""; // string | The ID of the cart.
$age_group_id = "\"any_adult\""; // string | The age group of the member being added.  This can be any of the following: `any_child`, `any_adult` or a specific age group id such as `CDAG1111` that is returned from the [List Age Groups](index.html#getAgeGroups) api call.  This is required because the member must be marked as an adult or child in the system (there currently is not a feature in Daxko Operations to automatically assign based on age)

try {
    $result = $apiInstance->getMembershipQuestions($cart_id, $age_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipApi->getMembershipQuestions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The ID of the cart. |
 **age_group_id** | **string**| The age group of the member being added.  This can be any of the following: &#x60;any_child&#x60;, &#x60;any_adult&#x60; or a specific age group id such as &#x60;CDAG1111&#x60; that is returned from the [List Age Groups](index.html#getAgeGroups) api call.  This is required because the member must be marked as an adult or child in the system (there currently is not a feature in Daxko Operations to automatically assign based on age) |

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMembershipReceipt**
> \Swagger\Client\Model\InlineResponse20012 getMembershipReceipt($cart_id)

Get receipt

This call is used to retrive receipt after a member join/renew has been completed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "\"77ae13b3-c645-4bca-bb01-d8855ecd879a\""; // string | The ID of the cart.

try {
    $result = $apiInstance->getMembershipReceipt($cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipApi->getMembershipReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The ID of the cart. |

### Return type

[**\Swagger\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMembershipTypes**
> object getMembershipTypes($branch_id, $discount_group_ids, $registration_type)

List membership types

This endpoint returns a list of membership types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$branch_id = "branch_id_example"; // string | Restricts the list of membership types to a particular branch.
$discount_group_ids = "discount_group_ids_example"; // string | Allows the supplied discount group ids to be applied to the fees for the membership type (if the discount is applicable to the membership type).
$registration_type = "online"; // string | Restricts the list of membership types to only be associated with in-house or online membership join.

try {
    $result = $apiInstance->getMembershipTypes($branch_id, $discount_group_ids, $registration_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipApi->getMembershipTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **branch_id** | **string**| Restricts the list of membership types to a particular branch. |
 **discount_group_ids** | **string**| Allows the supplied discount group ids to be applied to the fees for the membership type (if the discount is applicable to the membership type). | [optional]
 **registration_type** | **string**| Restricts the list of membership types to only be associated with in-house or online membership join. | [optional] [default to online]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCartMember**
> \Swagger\Client\Model\InlineResponse2011 postCartMember($cart_id, $age_group_id, $body)

Add member to cart

Adds a member to the cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "\"77ae13b3-c645-4bca-bb01-d8855ecd879a\""; // string | The ID of the cart.
$age_group_id = "\"any_adult\""; // string | The age group of the member being added.  This can be any of the following: `any_child`, `any_adult` or a specific age group id such as `CDAG1111` that is returned from the [List Age Groups](index.html#getAgeGroups) api call.  This is required because the member must be marked as an adult or child in the system (there currently is not a feature in Daxko Operations to automatically assign based on age)
$body = new \Swagger\Client\Model\Body6(); // \Swagger\Client\Model\Body6 | 

try {
    $result = $apiInstance->postCartMember($cart_id, $age_group_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipApi->postCartMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The ID of the cart. |
 **age_group_id** | **string**| The age group of the member being added.  This can be any of the following: &#x60;any_child&#x60;, &#x60;any_adult&#x60; or a specific age group id such as &#x60;CDAG1111&#x60; that is returned from the [List Age Groups](index.html#getAgeGroups) api call.  This is required because the member must be marked as an adult or child in the system (there currently is not a feature in Daxko Operations to automatically assign based on age) |
 **body** | [**\Swagger\Client\Model\Body6**](../Model/Body6.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2011**](../Model/InlineResponse2011.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postMembershipCheckout**
> \Swagger\Client\Model\InlineResponse20011 postMembershipCheckout($cart_id, $body)

Checkout

This call completes the registration.  Once the registration is submitted, it is processed synchronously (the unit/members are created immediately).      You can use the returned `unit_id` to call the {{{ html_link_to_api_call 'get' '/v3/units/{unit_id}' }}} API call.  Example request body:  ```json {   \"version\": \"AAAAAAmirMM=\",   \"customer\": {     \"name\": \"John Doe\",     \"email\": \"john.doe@example.org\"   },   \"payment_info\": [     {       \"payment_method_amount\": 90,       \"apply_system_credit_amount\": 10,       \"billing_method\": {         \"id\": \"PTLvg3hhYLPUqaBJcHIybjIokxLwR6RHG4zdhF6zZQdZM\",         \"save\": true       },       \"line_item_payments\": [         {           \"line_item_id\": \"4f04bd57-a51b-4d55-85ea-b6f4d7a64090\",           \"amount\": 40,           \"schedule_remaining\": false         },         {           \"line_item_id\": \"fe591b03-79a6-4d07-a0ac-64574a35896d\",           \"amount\": 60,           \"schedule_remaining\": false         }       ]     }   ] } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "\"77ae13b3-c645-4bca-bb01-d8855ecd879a\""; // string | The ID of the cart.
$body = new \Swagger\Client\Model\Body11(); // \Swagger\Client\Model\Body11 | 

try {
    $result = $apiInstance->postMembershipCheckout($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipApi->postMembershipCheckout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The ID of the cart. |
 **body** | [**\Swagger\Client\Model\Body11**](../Model/Body11.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postMembershipDiscountGroups**
> postMembershipDiscountGroups($cart_id, $body)

Apply discount groups

Apply Discount Groups to the cart in order to reduce the price of the membership.  The changes in price can be seen in the [Get Review Information](index.html#getMembershipCart) API call.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "\"77ae13b3-c645-4bca-bb01-d8855ecd879a\""; // string | The ID of the cart.
$body = new \Swagger\Client\Model\Body9(); // \Swagger\Client\Model\Body9 | 

try {
    $apiInstance->postMembershipDiscountGroups($cart_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling MembershipApi->postMembershipDiscountGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The ID of the cart. |
 **body** | [**\Swagger\Client\Model\Body9**](../Model/Body9.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postMembershipEmailValidation**
> object postMembershipEmailValidation($cart_id, $body)

Validate email

Validates email address against other members in the system and also other members that are currently in the cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "\"77ae13b3-c645-4bca-bb01-d8855ecd879a\""; // string | The ID of the cart.
$body = new \Swagger\Client\Model\Body5(); // \Swagger\Client\Model\Body5 | 

try {
    $result = $apiInstance->postMembershipEmailValidation($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipApi->postMembershipEmailValidation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The ID of the cart. |
 **body** | [**\Swagger\Client\Model\Body5**](../Model/Body5.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postMembershipRenewal**
> \Swagger\Client\Model\InlineResponse201 postMembershipRenewal($body)

Start renewal process

Starts the renewal process for a given `membership_type_id` and `unit_id`.  The returned `cart_id` will be required on subsequent calls to build up the membership. A renewal is signing up a unit that already has an account but is inactive.  If you try to start a renewal for a unit that is already active, then you will get an error. Once all changes are complete, use the [Checkout](index.html#postMembershipCheckout) API to finalize the changes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body4(); // \Swagger\Client\Model\Body4 | 

try {
    $result = $apiInstance->postMembershipRenewal($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipApi->postMembershipRenewal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body4**](../Model/Body4.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putMembershipMember**
> \Swagger\Client\Model\InlineResponse2012 putMembershipMember($cart_id, $member_guid, $body)

Update member in cart

Updates a member in the cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "\"77ae13b3-c645-4bca-bb01-d8855ecd879a\""; // string | The ID of the cart.
$member_guid = "\"88ae13b3-e645-abca-7b01-d8755ecd87ff\""; // string | The temporary GUID of the member.
$body = new \Swagger\Client\Model\Body7(); // \Swagger\Client\Model\Body7 | 

try {
    $result = $apiInstance->putMembershipMember($cart_id, $member_guid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipApi->putMembershipMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The ID of the cart. |
 **member_guid** | **string**| The temporary GUID of the member. |
 **body** | [**\Swagger\Client\Model\Body7**](../Model/Body7.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2012**](../Model/InlineResponse2012.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setCartMembersStatus**
> setCartMembersStatus($cart_id, $body)

Set members status in cart

Sets status to active or inactive for one or more members.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "\"77ae13b3-c645-4bca-bb01-d8855ecd879a\""; // string | The ID of the cart.
$body = new \Swagger\Client\Model\Body8(); // \Swagger\Client\Model\Body8 | 

try {
    $apiInstance->setCartMembersStatus($cart_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling MembershipApi->setCartMembersStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The ID of the cart. |
 **body** | [**\Swagger\Client\Model\Body8**](../Model/Body8.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startMemberJoin**
> \Swagger\Client\Model\InlineResponse201 startMemberJoin($body)

Start join process

Starts the join process for a given membership type id.  The returned `cart_id` will be required on subsequent calls to build up the membership.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body3(); // \Swagger\Client\Model\Body3 | 

try {
    $result = $apiInstance->startMemberJoin($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipApi->startMemberJoin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body3**](../Model/Body3.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

