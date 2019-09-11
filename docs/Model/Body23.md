# Body23

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**version** | **string** | The get cart api call returns back this &#x60;version&#x60; value every time the call is made.  The latest &#x60;version&#x60; must be included when performing the final checkout as a check to make sure that the most up to date has been reviewed. | 
**customer** | [**\Swagger\Client\Model\V3membershipcartIdcheckoutCustomer**](V3membershipcartIdcheckoutCustomer.md) |  | 
**payment_info** | [**\Swagger\Client\Model\V3membershipcartIdcheckoutPaymentInfo[]**](V3membershipcartIdcheckoutPaymentInfo.md) | Payment info for payment method.  Only 1 payment method at a time is currently supported. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


