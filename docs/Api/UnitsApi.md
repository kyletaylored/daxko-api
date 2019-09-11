# Swagger\Client\UnitsApi

All URIs are relative to *https://api.daxko.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUnitRelationships**](UnitsApi.md#createUnitRelationships) | **POST** /v3/units/{unit_id}/relationships/sources | Create Relationship Source
[**deleteUnitRelationshipSource**](UnitsApi.md#deleteUnitRelationshipSource) | **DELETE** /v3/units/{unit_id}/relationships/sources/{source_id} | Delete Relationship Source
[**getUnitBillingMethods**](UnitsApi.md#getUnitBillingMethods) | **GET** /v3/units/{unit_id}/billing_methods | Get Unit Billing Methods
[**getUnitDetails**](UnitsApi.md#getUnitDetails) | **GET** /v3/units/{unit_id} | Get Unit Details
[**getUnitRelationshipTypes**](UnitsApi.md#getUnitRelationshipTypes) | **GET** /v3/units/relationships/types | List Relationship Types
[**getUnitRelationships**](UnitsApi.md#getUnitRelationships) | **GET** /v3/units/{unit_id}/relationships/sources | List Relationship Sources
[**updateUnitRelationshipSource**](UnitsApi.md#updateUnitRelationshipSource) | **PUT** /v3/units/{unit_id}/relationships/sources/{source_id} | Update Relationship Source


# **createUnitRelationships**
> \Swagger\Client\Model\InlineResponse20021 createUnitRelationships($unit_id, $body)

Create Relationship Source

Creates a new person that is not a member in the unit and assigns relationships/authorized pickups.  NOTE: this should be used to capture information about a person that is not a member of this unit.  For example, if Robert is Susie's grandfather (but is not a member on the unit) and needs to be entered as Susie's authorized pickup, then you would create a relationship here. If you want to assign a relationships to existing adults in the unit, you should get a list of existing adults with the  {{{ html_link_to_api_call 'get' '/v3/units/{unit_id}/relationships/sources' }}} and then update this person's relationships with {{{ html_link_to_api_call 'put' '/v3/units/{unit_id}/relationships/sources/{source_id}' }}}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$unit_id = "unit_id_example"; // string | The ID of the unit
$body = new \Swagger\Client\Model\Body15(); // \Swagger\Client\Model\Body15 | 

try {
    $result = $apiInstance->createUnitRelationships($unit_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsApi->createUnitRelationships: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unit_id** | **string**| The ID of the unit |
 **body** | [**\Swagger\Client\Model\Body15**](../Model/Body15.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUnitRelationshipSource**
> \Swagger\Client\Model\InlineResponse20021 deleteUnitRelationshipSource($unit_id, $source_id)

Delete Relationship Source

Deletes all relationships for a source.  If the source is NOT a member in the unit and was created via {{{ html_link_to_api_call 'post' '/v3/units/{unit_id}/relationships/sources' }}}, then the source will be completely deleted. If the source is a member of the unit, then the source will still exist in the {{{ html_link_to_api_call 'get' '/v3/units/{unit_id}/relationships/sources' }}} API call but all relationships to children will be deleted.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$unit_id = "unit_id_example"; // string | The ID of the unit
$source_id = "source_id_example"; // string | The source id of the person.

try {
    $result = $apiInstance->deleteUnitRelationshipSource($unit_id, $source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsApi->deleteUnitRelationshipSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unit_id** | **string**| The ID of the unit |
 **source_id** | **string**| The source id of the person. |

### Return type

[**\Swagger\Client\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUnitBillingMethods**
> \Swagger\Client\Model\InlineResponse20019 getUnitBillingMethods($unit_id, $include_available_system_credit_amount)

Get Unit Billing Methods

Gets stored billing methods for a unit.  This includes all billing methods, even if they are expired (see the `expired` flag).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$unit_id = "unit_id_example"; // string | The ID of the unit
$include_available_system_credit_amount = false; // bool | If true, the `available_system_credit_amount` property will be included in the response.  This can be an expensive call, so only set to `true` when needed.

try {
    $result = $apiInstance->getUnitBillingMethods($unit_id, $include_available_system_credit_amount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsApi->getUnitBillingMethods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unit_id** | **string**| The ID of the unit |
 **include_available_system_credit_amount** | **bool**| If true, the &#x60;available_system_credit_amount&#x60; property will be included in the response.  This can be an expensive call, so only set to &#x60;true&#x60; when needed. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUnitDetails**
> \Swagger\Client\Model\InlineResponse20018 getUnitDetails($unit_id, $include_inactive)

Get Unit Details

Gets info and members for a unit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$unit_id = "unit_id_example"; // string | The ID of the unit
$include_inactive = false; // bool | If true, the members list will include members who are inactive. By default inactive members are filtered.

try {
    $result = $apiInstance->getUnitDetails($unit_id, $include_inactive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsApi->getUnitDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unit_id** | **string**| The ID of the unit |
 **include_inactive** | **bool**| If true, the members list will include members who are inactive. By default inactive members are filtered. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUnitRelationshipTypes**
> \Swagger\Client\Model\InlineResponse20022 getUnitRelationshipTypes()

List Relationship Types

Gets relationship types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getUnitRelationshipTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsApi->getUnitRelationshipTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUnitRelationships**
> \Swagger\Client\Model\InlineResponse20020 getUnitRelationships($unit_id)

List Relationship Sources

Gets relationship information for members in a unit.  People in the `sources` list are people that would be at the root of the relationship.  People in the `children` list are people that can be assigned to people in the `sources` list as related.  For example: if Robert is Susie's grandfather, Robert would be in the `sources` list and Susie would be in the `children` list.  Once Susie is marked as related to Robert, the `sources.person.relationships` array for Robert would contain an entry for Susie's `member_id` and `authorized_pickup` would denote if Robert is allowed to pick up Susie from programs as an authorized pickup.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$unit_id = "unit_id_example"; // string | The ID of the unit

try {
    $result = $apiInstance->getUnitRelationships($unit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsApi->getUnitRelationships: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unit_id** | **string**| The ID of the unit |

### Return type

[**\Swagger\Client\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUnitRelationshipSource**
> \Swagger\Client\Model\InlineResponse20021 updateUnitRelationshipSource($unit_id, $source_id, $body)

Update Relationship Source

Updates a relationship source.  Use `source_id` and child `member_id` from  {{{ html_link_to_api_call 'get' '/v3/units/{unit_id}/relationships/sources' }}} API call.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$unit_id = "unit_id_example"; // string | The ID of the unit
$source_id = "source_id_example"; // string | The source id of the person being updated.
$body = new \Swagger\Client\Model\Body16(); // \Swagger\Client\Model\Body16 | 

try {
    $result = $apiInstance->updateUnitRelationshipSource($unit_id, $source_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsApi->updateUnitRelationshipSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unit_id** | **string**| The ID of the unit |
 **source_id** | **string**| The source id of the person being updated. |
 **body** | [**\Swagger\Client\Model\Body16**](../Model/Body16.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

