# Swagger\Client\ProgramRegistrationApi

All URIs are relative to *https://api.daxko.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**acceptAgreements**](ProgramRegistrationApi.md#acceptAgreements) | **PUT** /v3/carts/{cart_id}/product_bundles/{product_bundle_id}/agreements | Accept agreements
[**addRegistrationOfferingToCart**](ProgramRegistrationApi.md#addRegistrationOfferingToCart) | **POST** /v3/carts/{cart_id}/offerings | Start program offering registration
[**createCart**](ProgramRegistrationApi.md#createCart) | **POST** /v3/carts/ | Create a cart
[**deleteCart**](ProgramRegistrationApi.md#deleteCart) | **DELETE** /v3/carts/{cart_id} | Delete a cart
[**deleteCartPromoCodes**](ProgramRegistrationApi.md#deleteCartPromoCodes) | **DELETE** /v3/carts/{cart_id}/promo_codes | Delete promo code from cart
[**deleteLineItem**](ProgramRegistrationApi.md#deleteLineItem) | **DELETE** /v3/carts/{cart_id}/line_items/{line_item_id} | Delete line item
[**getAgreements**](ProgramRegistrationApi.md#getAgreements) | **GET** /v3/carts/{cart_id}/product_bundles/{product_bundle_id}/agreements | Get agreements
[**getCartDetails**](ProgramRegistrationApi.md#getCartDetails) | **GET** /v3/carts/{cart_id} | Get Cart Details
[**getCartProductBundleInstances**](ProgramRegistrationApi.md#getCartProductBundleInstances) | **GET** /v3/carts/{cart_id}/product_bundles/{product_bundle_id}/instances | Get possible instances to register for
[**getCartProductBundleQuestions**](ProgramRegistrationApi.md#getCartProductBundleQuestions) | **GET** /v3/carts/{cart_id}/product_bundles/{product_bundle_id}/questions | Get custom questions
[**getCartReceipt**](ProgramRegistrationApi.md#getCartReceipt) | **GET** /v3/carts/{cart_id}/receipt | Get Cart Receipt
[**getCartStatus**](ProgramRegistrationApi.md#getCartStatus) | **GET** /v3/carts/{cart_id}/status | Get Cart Status
[**postCartCheckout**](ProgramRegistrationApi.md#postCartCheckout) | **POST** /v3/carts/{cart_id}/checkout | Checkout
[**postCartPromoCodes**](ProgramRegistrationApi.md#postCartPromoCodes) | **POST** /v3/carts/{cart_id}/promo_codes | Apply promo code to cart
[**putCartPaymentAmount**](ProgramRegistrationApi.md#putCartPaymentAmount) | **PUT** /v3/carts/{cart_id}/payment_amount | Apply payment amounts
[**putCartProductBundleAnswers**](ProgramRegistrationApi.md#putCartProductBundleAnswers) | **PUT** /v3/carts/{cart_id}/product_bundles/{product_bundle_id}/answers | Save answers
[**putCartProductBundleInstances**](ProgramRegistrationApi.md#putCartProductBundleInstances) | **PUT** /v3/carts/{cart_id}/product_bundles/{product_bundle_id}/instances | Choose instances to register for
[**removeProductBundle**](ProgramRegistrationApi.md#removeProductBundle) | **DELETE** /v3/carts/{cart_id}/product_bundles/{product_bundle_id} | Remove product bundle from cart


# **acceptAgreements**
> \Swagger\Client\Model\InlineResponse20029 acceptAgreements($cart_id, $product_bundle_id, $body)

Accept agreements

This call is used to save and sign agreements associated with a program.  Either `signee_name` or `signature_image_base64` is required.  Example body with `signee_name`: ```json {   \"agreement_ids\": [\"W293\"],   \"signee_name\": \"John Doe\" } ```  Example body with `signature_image_base64`: ```json {   \"agreement_ids\": [\"W293\"],   \"signature_image_base64\": \"iVBORw0KGgoAAAANSUhEUgAAAV8AAAA6...\" } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProgramRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "\"77ae13b3-c645-4bca-bb01-d8855ecd879a\""; // string | The ID of the cart.
$product_bundle_id = "\"97ae13b3-c646-abca-fb01-e8855ecd879b\""; // string | The ID of the product bundle (registration).
$body = new \Swagger\Client\Model\Body19(); // \Swagger\Client\Model\Body19 | 

try {
    $result = $apiInstance->acceptAgreements($cart_id, $product_bundle_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramRegistrationApi->acceptAgreements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The ID of the cart. |
 **product_bundle_id** | **string**| The ID of the product bundle (registration). |
 **body** | [**\Swagger\Client\Model\Body19**](../Model/Body19.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse20029**](../Model/InlineResponse20029.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addRegistrationOfferingToCart**
> \Swagger\Client\Model\InlineResponse20023 addRegistrationOfferingToCart($cart_id, $body)

Start program offering registration

This call starts the process of registering a member for offerings of a single program by adding it to the cart.  Depending on how the program is set up, additional calls may be needed in order for this member and offering combination to be available for checkout.  For example, if the `program.type` is anything but `camp`, then the \"Choose instances to register for\" step must be completed.  If custom questions must be answered, then the questions step must be completed before checking out.  Rules:  > - If the offering is a child care or package program, only one offering can be passed in. > - If the offering is a camp or traditional program, more than one offering is allowed.  Example: ```json {     \"program_id\": \"CC1234\",     \"offerings\": [{          \"offering_id\": \"RP445555\",          \"location_id\": \"B2222\"     }],     \"member_id\": \"10000-01\",     \"registration_type\": \"online\",     \"dry_run\": false } ```  The `product_bundle_id` value that is returned from this call in combination with the `cart_id` value will be used in subsequent calls to build up the rest of the registration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProgramRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "\"aa46bcf4-b65a-4a37-bed9-5dcb4674d0a3\""; // string | The ID used to uniquely represent the cart
$body = new \Swagger\Client\Model\Body17(); // \Swagger\Client\Model\Body17 | 

try {
    $result = $apiInstance->addRegistrationOfferingToCart($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramRegistrationApi->addRegistrationOfferingToCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The ID used to uniquely represent the cart |
 **body** | [**\Swagger\Client\Model\Body17**](../Model/Body17.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCart**
> \Swagger\Client\Model\InlineResponse2014 createCart()

Create a cart

Creates a cart that can be used for subsequent cart API calls.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProgramRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->createCart();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramRegistrationApi->createCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse2014**](../Model/InlineResponse2014.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCart**
> \Swagger\Client\Model\InlineResponse20031 deleteCart($cart_id)

Delete a cart

Deletes a cart, and all product bundles, and frees any reserved spots.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProgramRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "\"77ae13b3-c645-4bca-bb01-d8855ecd879a\""; // string | The ID of the cart to delete

try {
    $result = $apiInstance->deleteCart($cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramRegistrationApi->deleteCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The ID of the cart to delete |

### Return type

[**\Swagger\Client\Model\InlineResponse20031**](../Model/InlineResponse20031.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCartPromoCodes**
> \Swagger\Client\Model\InlineResponse20034 deleteCartPromoCodes($cart_id, $body)

Delete promo code from cart

Once a promo code has been applied to the cart, use this call to remove it.  Example Body: ```json {   \"promo_code\": \"FALL20OFF\" } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProgramRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "\"77ae13b3-c645-4bca-bb01-d8855ecd879a\""; // string | The ID of the cart.
$body = new \Swagger\Client\Model\Body21(); // \Swagger\Client\Model\Body21 | 

try {
    $result = $apiInstance->deleteCartPromoCodes($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramRegistrationApi->deleteCartPromoCodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The ID of the cart. |
 **body** | [**\Swagger\Client\Model\Body21**](../Model/Body21.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse20034**](../Model/InlineResponse20034.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLineItem**
> \Swagger\Client\Model\InlineResponse20033 deleteLineItem($cart_id, $line_item_id)

Delete line item

Deletes a line item from cart (if possible), recalculates cart total and frees any reserved spots. A call to `GET /v3/carts/{cart_id}` will return the updated cart information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProgramRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "\"77ae13b3-c645-4bca-bb01-d8855ecd879a\""; // string | The ID of the cart which the line item belongs
$line_item_id = "line_item_id_example"; // string | The ID of the lineitem to delete

try {
    $result = $apiInstance->deleteLineItem($cart_id, $line_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramRegistrationApi->deleteLineItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The ID of the cart which the line item belongs |
 **line_item_id** | **string**| The ID of the lineitem to delete |

### Return type

[**\Swagger\Client\Model\InlineResponse20033**](../Model/InlineResponse20033.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgreements**
> \Swagger\Client\Model\InlineResponse20028 getAgreements($cart_id, $product_bundle_id)

Get agreements

This call is used to retrieve all agreements associated with a product bundle.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProgramRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "\"77ae13b3-c645-4bca-bb01-d8855ecd879a\""; // string | The ID of the cart.
$product_bundle_id = "\"97ae13b3-c646-abca-fb01-e8855ecd879b\""; // string | The ID of the product bundle (registration).

try {
    $result = $apiInstance->getAgreements($cart_id, $product_bundle_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramRegistrationApi->getAgreements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The ID of the cart. |
 **product_bundle_id** | **string**| The ID of the product bundle (registration). |

### Return type

[**\Swagger\Client\Model\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCartDetails**
> \Swagger\Client\Model\InlineResponse20030 getCartDetails($cart_id)

Get Cart Details

Retrieves the line items of a cart. This call must be made prior to finalizing an order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProgramRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "\"77ae13b3-c645-4bca-bb01-d8855ecd879a\""; // string | The ID of the cart.

try {
    $result = $apiInstance->getCartDetails($cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramRegistrationApi->getCartDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The ID of the cart. |

### Return type

[**\Swagger\Client\Model\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCartProductBundleInstances**
> \Swagger\Client\Model\InlineResponse20024 getCartProductBundleInstances($cart_id, $product_bundle_id)

Get possible instances to register for

After an offering registration has been started and added to the cart, this returns the list of instances that are available for registration.  #### Program Package Notes  The following is an axample of the additional property that will be included when the `program.type` is `package` ``` ... \"instructors\": [   {     \"id\": \"INS22124\",     \"first_name\": \"John\",     \"last_name\": \"Doe\",     \"gender\": \"M\"   },   {     \"id\": \"INS22125\",     \"first_name\": \"Sally\",     \"last_name\": \"Jones\",     \"gender\": \"F\"   } ] ```  #### Child Care Notes  The following is an example of additional properties that will be included when the `program.type` is `child_care` ``` ... \"days\": [ {   \"id\": 1,   \"name\": \"Monday\",   \"enabled\": true,   \"selected\": false }, {   \"id\": 2,   \"name\": \"Tuesday\",   \"enabled\": false,   \"selected\": false } ], \"min_required_days\": 1 ```  #### Camp Notes  If the `program.type` is `camp`, then this step is not valid since all of the offerings have been chosen in the add to cart step and there is not additional information that needs to be collected.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProgramRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "\"77ae13b3-c645-4bca-bb01-d8855ecd879a\""; // string | The ID of the cart.
$product_bundle_id = "\"97ae13b3-c646-abca-fb01-e8855ecd879b\""; // string | The ID of the product bundle (registration).

try {
    $result = $apiInstance->getCartProductBundleInstances($cart_id, $product_bundle_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramRegistrationApi->getCartProductBundleInstances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The ID of the cart. |
 **product_bundle_id** | **string**| The ID of the product bundle (registration). |

### Return type

[**\Swagger\Client\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCartProductBundleQuestions**
> \Swagger\Client\Model\InlineResponse20026 getCartProductBundleQuestions($cart_id, $product_bundle_id)

Get custom questions

After an offering registration has been started and added to the cart, this returns the list of custom questions that are available for answering.  Use this to build answers to pass to the [Save answers](#putCartProductBundleAnswers) api call.  See the [dxp-questions-ui javascript library on github](https://www.github.com/daxko/dxp-questions-ui) for an example implmentation of rendering and answering custom questions.  Feel free to use this library directly or fork it to customize it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProgramRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "\"77ae13b3-c645-4bca-bb01-d8855ecd879a\""; // string | The ID of the cart.
$product_bundle_id = "\"97ae13b3-c646-abca-fb01-e8855ecd879b\""; // string | The ID of the product bundle (registration).

try {
    $result = $apiInstance->getCartProductBundleQuestions($cart_id, $product_bundle_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramRegistrationApi->getCartProductBundleQuestions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The ID of the cart. |
 **product_bundle_id** | **string**| The ID of the product bundle (registration). |

### Return type

[**\Swagger\Client\Model\InlineResponse20026**](../Model/InlineResponse20026.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCartReceipt**
> \Swagger\Client\Model\InlineResponse20037 getCartReceipt($cart_id)

Get Cart Receipt

This call gets the receipt of a submitted cart.  The receipt is immediately available, but the cart is processed asynchronously and the status can be checked with the [Get cart status](#getCartStatus) api call.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProgramRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "\"77ae13b3-c645-4bca-bb01-d8855ecd879a\""; // string | The ID of the cart.

try {
    $result = $apiInstance->getCartReceipt($cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramRegistrationApi->getCartReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The ID of the cart. |

### Return type

[**\Swagger\Client\Model\InlineResponse20037**](../Model/InlineResponse20037.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCartStatus**
> \Swagger\Client\Model\InlineResponse20036 getCartStatus($cart_id)

Get Cart Status

Retrieves the status of a cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProgramRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "\"77ae13b3-c645-4bca-bb01-d8855ecd879a\""; // string | The ID of the cart.

try {
    $result = $apiInstance->getCartStatus($cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramRegistrationApi->getCartStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The ID of the cart. |

### Return type

[**\Swagger\Client\Model\InlineResponse20036**](../Model/InlineResponse20036.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCartCheckout**
> \Swagger\Client\Model\InlineResponse20035 postCartCheckout($cart_id, $body)

Checkout

This call completes the registration.  Once the registration is submitted, it is processed asynchronously.  The status can be checked using the [get cart status](#getCartStatus) api call.  However, the [Get Receipt](#getCartReceipt) call is immediately available.  Example request body:  ```json {   \"version\": \"AAAAAAmirMM=\",   \"customer\": {     \"name\": \"John Doe\",     \"email\": \"john.doe@example.org\"   },   \"payment_info\": [     {       \"payment_method_amount\": 90,       \"apply_system_credit_amount\": 10,       \"billing_method\": {         \"id\": \"PTLvg3hhYLPUqaBJcHIybjIokxLwR6RHG4zdhF6zZQdZM\",         \"save\": true       },       \"line_item_payments\": [         {           \"line_item_id\": \"4f04bd57-a51b-4d55-85ea-b6f4d7a64090\",           \"amount\": 40,           \"schedule_remaining\": false         },         {           \"line_item_id\": \"fe591b03-79a6-4d07-a0ac-64574a35896d\",           \"amount\": 60,           \"schedule_remaining\": false         }       ]     }   ] } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProgramRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "\"77ae13b3-c645-4bca-bb01-d8855ecd879a\""; // string | The ID of the cart.
$body = new \Swagger\Client\Model\Body23(); // \Swagger\Client\Model\Body23 | 

try {
    $result = $apiInstance->postCartCheckout($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramRegistrationApi->postCartCheckout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The ID of the cart. |
 **body** | [**\Swagger\Client\Model\Body23**](../Model/Body23.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse20035**](../Model/InlineResponse20035.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCartPromoCodes**
> \Swagger\Client\Model\InlineResponse20034 postCartPromoCodes($cart_id, $body)

Apply promo code to cart

Apply promo code to cart.  Once the promo code is applied, call [get cart details](#getCartDetails) and inspect `line_items.discounts` where type is `promo` to see result of promo code.  Example Body: ```json {   \"promo_code\": \"FALL20OFF\" } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProgramRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "\"77ae13b3-c645-4bca-bb01-d8855ecd879a\""; // string | The ID of the cart.
$body = new \Swagger\Client\Model\Body20(); // \Swagger\Client\Model\Body20 | 

try {
    $result = $apiInstance->postCartPromoCodes($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramRegistrationApi->postCartPromoCodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The ID of the cart. |
 **body** | [**\Swagger\Client\Model\Body20**](../Model/Body20.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse20034**](../Model/InlineResponse20034.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putCartPaymentAmount**
> \Swagger\Client\Model\InlineResponse20035 putCartPaymentAmount($cart_id, $body)

Apply payment amounts

This call allows you to optionally apply payment amounts top down to items in the cart.  On the final checkout api call, you must provide the `line_item_payments` mapping, which is a mapping of `line_item_id` to `amount`. This represents how much money (payment method amount plus system credit amount) will applied to each line item.  If you do not want to manually calculate this mapping, you can use this api call as a convenient way to calculate this mapping for you.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProgramRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "\"77ae13b3-c645-4bca-bb01-d8855ecd879a\""; // string | The ID of the cart.
$body = new \Swagger\Client\Model\Body22(); // \Swagger\Client\Model\Body22 | 

try {
    $result = $apiInstance->putCartPaymentAmount($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramRegistrationApi->putCartPaymentAmount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The ID of the cart. |
 **body** | [**\Swagger\Client\Model\Body22**](../Model/Body22.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse20035**](../Model/InlineResponse20035.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putCartProductBundleAnswers**
> \Swagger\Client\Model\InlineResponse20027 putCartProductBundleAnswers($cart_id, $product_bundle_id)

Save answers

This call is used to save custom question answers.  In the example below, the key is the question id from [Get custom questions](#getCartProductBundleQuestions) and the value is the answser.  Example body: ```json {   \"program_mediumtext-213704\": \"purple\",   \"program_phone-213705\": {     \"phone\": \"555-555-5555\",     \"ext\": \"123\"   },   \"program_answerlist-213706\": \"program_possible_answer-104589\",   \"program_answerlist-213707\": [     \"program_possible_answer-104591\",     \"program_possible_answer-104592\"   ],   \"program_address-213708\": {     \"line1\": \"111 Some Dr\",     \"line2\": \"Ste 208\",     \"city\": \"Homewood\",     \"state\": \"AL\",     \"zip\": \"35209\",     \"country\": \"US\"   },   \"program_answerlist-213709\": \"program_possible_answer-104594\",   \"program_datetime-213710\": \"1/1/2010\",   \"program_email-213711\": \"me@example.com\",   \"program_name-213712\": {     \"first\": \"Sally\",     \"last\": \"Doe\",     \"suffix\": \"III\"   } } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProgramRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "\"77ae13b3-c645-4bca-bb01-d8855ecd879a\""; // string | The ID of the cart.
$product_bundle_id = "\"97ae13b3-c646-abca-fb01-e8855ecd879b\""; // string | The ID of the product bundle (registration).

try {
    $result = $apiInstance->putCartProductBundleAnswers($cart_id, $product_bundle_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramRegistrationApi->putCartProductBundleAnswers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The ID of the cart. |
 **product_bundle_id** | **string**| The ID of the product bundle (registration). |

### Return type

[**\Swagger\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putCartProductBundleInstances**
> \Swagger\Client\Model\InlineResponse20025 putCartProductBundleInstances($cart_id, $product_bundle_id, $body)

Choose instances to register for

This call is used to choose which instances to register for after adding an offering to the cart and getting the list of possible instances from the `GET` call.  If the `program.type` is `camp`, then this step is not valid.  Example: ```json {     \"instances\": [       { \"id\": \"b90d74c1-9d9d-4ecc-8414-04cdf398337b\" },       { \"id\": \"b2bb1212-7830-46d0-b76d-21a9d3a42044\" }     ],     \"days\": [1, 3, 5],     \"instructor_id\": \"INS1234\" } ```  The `info.steps.required` property and the `links` property of the response can be used to determine what the next step in the process should be.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProgramRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "\"77ae13b3-c645-4bca-bb01-d8855ecd879a\""; // string | The ID of the cart.
$product_bundle_id = "\"97ae13b3-c646-abca-fb01-e8855ecd879b\""; // string | The ID of the product bundle (registration).
$body = new \Swagger\Client\Model\Body18(); // \Swagger\Client\Model\Body18 | 

try {
    $result = $apiInstance->putCartProductBundleInstances($cart_id, $product_bundle_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramRegistrationApi->putCartProductBundleInstances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The ID of the cart. |
 **product_bundle_id** | **string**| The ID of the product bundle (registration). |
 **body** | [**\Swagger\Client\Model\Body18**](../Model/Body18.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeProductBundle**
> \Swagger\Client\Model\InlineResponse20032 removeProductBundle($cart_id, $product_bundle_id)

Remove product bundle from cart

Removes a product bundle from the cart, and frees any reserved spots. A call to `GET /v3/carts/{cart_id}` will return the updated cart information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProgramRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "\"77ae13b3-c645-4bca-bb01-d8855ecd879a\""; // string | The ID of the cart with the product bundle to delete
$product_bundle_id = "\"97ae13b3-c646-abca-fb01-e8855ecd879b\""; // string | The ID of the product bundle to delete

try {
    $result = $apiInstance->removeProductBundle($cart_id, $product_bundle_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramRegistrationApi->removeProductBundle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The ID of the cart with the product bundle to delete |
 **product_bundle_id** | **string**| The ID of the product bundle to delete |

### Return type

[**\Swagger\Client\Model\InlineResponse20032**](../Model/InlineResponse20032.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

