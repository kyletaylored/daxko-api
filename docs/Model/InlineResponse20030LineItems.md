# InlineResponse20030LineItems

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**line_item_id** | **string** | The line item ID. | 
**product_bundle_id** | **string** | The ID of the product bundle this line item belongs | [optional] 
**type** | **string** | The line item type. A description of each type is detailed in the table below. |type|description| |-|-| |reg_fee|Registration Fee| |question_fee|Question Fee| |inst|Instance Fee| | 
**description** | **string** | The line item full description. | 
**short_description** | **string** | The line item short description. | 
**level1** | **string** | The line item first-level grouping. This is only used for display purposes. | 
**level2** | **string** | The line item second-level grouping. This is only used for display purposes. | 
**level3** | **string** | The line item third-level grouping. This is only used for display purposes. | 
**level4** | **string** | The line item fourth-level grouping. This is only used for display purposes. | 
**unit_price** | **float** | The line item price per unit. | 
**quantity** | **float** | The line item quantity. | 
**extended_price** | **float** | The price for all quantities. Equal to &#x60;quantity&#x60; * &#x60;unit_price&#x60;. | 
**can_remove** | **bool** | Indicates whether the line_item can be deleted from the cart. For example, you can delete a program offering but not a registration fee. | 
**due_date** | **string** | The date when the &#x60;min_payment_amount&#x60; is due. | 
**min_payment_amount** | **float** | How much of the &#x60;extended_price&#x60; is due immediately. | 
**payment_method_amount** | **float** | The amount that will be paid by the payment method. | 
**system_credit_amount** | **float** | The amount that will be paid by system credit. | 
**scheduled_amount** | **float** | The balance amount due after &#x60;discount&#x60;s, &#x60;system_credit_amount&#x60;, and &#x60;payment_method_amount&#x60; | 
**due_later_amount** | **float** | Balance if min_payment_amount is paid. This value is independent of how much is paid toward the line_item. For example, if a unit&#39;s &#x60;extended_price&#x60; is $100, and the &#x60;min_payment_amount&#x60; is $15, then the &#x60;due_later_amount&#x60; will always be $85. | 
**discounts** | [**\Swagger\Client\Model\InlineResponse20030Discounts[]**](InlineResponse20030Discounts.md) | A list of discounts applied to the line item. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


