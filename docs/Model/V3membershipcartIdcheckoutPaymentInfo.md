# V3membershipcartIdcheckoutPaymentInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_method_amount** | **float** | Amount that is being paid from the specified payment method (i.e., $100 is being paid by a VISA payment method) | 
**apply_system_credit_amount** | **float** | If system credit is available on the account, this is the amount that is being paid from available system credit. | [optional] 
**billing_method** | [**\Swagger\Client\Model\V3membershipcartIdcheckoutBillingMethod**](V3membershipcartIdcheckoutBillingMethod.md) |  | [optional] 
**line_item_payments** | [**\Swagger\Client\Model\V3membershipcartIdcheckoutLineItemPayments[]**](V3membershipcartIdcheckoutLineItemPayments.md) | This is a mapping of how much of the total payment amount (&#x60;payment_method_amount&#x60; + &#x60;apply_system_credit_amount&#x60;) is applied to each line item.  The sum of all &#x60;line_item_payments.amount&#x60; must equal (&#x60;payment_method_amount&#x60; + &#x60;apply_system_credit_amount&#x60;).  An entry is required for each line item even if applying $0. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


