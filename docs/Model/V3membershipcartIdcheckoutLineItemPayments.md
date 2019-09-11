# V3membershipcartIdcheckoutLineItemPayments

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**line_item_id** | **string** | The ID of the line item from the get cart api call. | 
**amount** | **float** | Amount of &#x60;payment_method_amount&#x60; + &#x60;apply_system_credit_amount&#x60; that should be applied to this line item.  For example, if &#x60;payment_method_amount&#x60; is $90 and &#x60;apply_system_credit_amount&#x60; is $10 and this amount is $20, this means that $20 of the $100 will be applied to this line item. | 
**schedule_remaining** | **bool** | This only applies if the full balance of this line item is not being immediately paid.  If &#x60;true&#x60;, then a scheduled payment will be automatically created on the line item&#39;s due date for the remaining balance.  If &#x60;false&#x60;, then the balance will remain on the account and must be handled manually within Daxko Operations. | [optional] [default to true]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


