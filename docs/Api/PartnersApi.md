# Swagger\Client\PartnersApi

All URIs are relative to *https://api.daxko.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMemberOAuthSettings**](PartnersApi.md#getMemberOAuthSettings) | **GET** /v3/partners/oauth2/members/settings | Get member oauth2 settings
[**memberTokenOAuth2**](PartnersApi.md#memberTokenOAuth2) | **POST** /v3/partners/oauth2/members/token | Create member access token
[**partnerOAuth2**](PartnersApi.md#partnerOAuth2) | **POST** /v3/partners/oauth2/token | Create partner access token
[**postMemberOAuthSettings**](PartnersApi.md#postMemberOAuthSettings) | **PUT** /v3/partners/oauth2/members/settings | Save member oauth2 settings


# **getMemberOAuthSettings**
> getMemberOAuthSettings()

Get member oauth2 settings

Get member authentication OAuth form Settings.  See [Member Authentication Tutorial](../tutorials/member_authentication/index.html)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->getMemberOAuthSettings();
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->getMemberOAuthSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **memberTokenOAuth2**
> \Swagger\Client\Model\InlineResponse2001 memberTokenOAuth2($body)

Create member access token

This is an OAuth 2.0 authorization endpoint for retrieving member scoped access tokens. See [Member Authentication Tutorial](../tutorials/member_authentication/index.html)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body1(); // \Swagger\Client\Model\Body1 | 

try {
    $result = $apiInstance->memberTokenOAuth2($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->memberTokenOAuth2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body1**](../Model/Body1.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnerOAuth2**
> \Swagger\Client\Model\InlineResponse200 partnerOAuth2($body)

Create partner access token

This is an OAuth 2.0 authorization endpoint for retrieving partner tokens. It returns a JSON web token (JWT) to use for access to  API resources. This token provides scoped access to data specified with the `scope` parameter. See the [Authorization tutorial]({{sitedir}}/tutorials/authentication/index.html) for more information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body(); // \Swagger\Client\Model\Body | 

try {
    $result = $apiInstance->partnerOAuth2($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnerOAuth2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body**](../Model/Body.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postMemberOAuthSettings**
> postMemberOAuthSettings($body)

Save member oauth2 settings

Configure member authentication OAuth form.  See [Member Authentication Tutorial](../tutorials/member_authentication/index.html)  NOTE: the `Authorization` header should use the main access token used for other api calls.  Example Headers:  ``` \"Authorization\": \"Bearer <your_access_token>\" \"Content-Type\": \"application/json\" \"Accept\": \"application/json\" ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body2(); // \Swagger\Client\Model\Body2 | 

try {
    $apiInstance->postMemberOAuthSettings($body);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->postMemberOAuthSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body2**](../Model/Body2.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

