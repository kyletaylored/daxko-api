# InlineResponse20012Payments

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_method** | **string** | Display name of the payment payment_method | 
**name_on_account** | **string** | Name on the payment method name_on_account | 
**description** | **string** | Additional information about the payment method.  For example, for EFT and credit card payments, will be a description with the last 4 digits of the account. | 
**amount** | **float** | Payment amount | 
**scheduled_payments** | [**\Swagger\Client\Model\InlineResponse20012ScheduledPayments[]**](InlineResponse20012ScheduledPayments.md) | Payments that have been scheduled for the future as a part of this cart.  If no payments were scheduled, then this will be empty. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


