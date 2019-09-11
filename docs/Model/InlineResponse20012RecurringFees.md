# InlineResponse20012RecurringFees

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**line_item_id** | **string** | The line item ID. | 
**type** | **string** | The line item type. A description of each type is detailed in the table below. |type|description| |-|-| |mebership_fee|Membership Fee| | 
**short_description** | **string** | The line item short description. | 
**unit_price** | **float** | The line item price per unit. | 
**quantity** | **float** | The line item quantity. | 
**extended_price** | **float** | The price for all quantities. Equal to &#x60;quantity&#x60; * &#x60;unit_price&#x60;. | 
**due_date** | **string** | The date when the &#x60;min_payment_amount&#x60; is due. | 
**payment_amount** | **float** | The amount that will be paid by the payment method. | 
**scheduled_amount** | **float** | The balance amount due after &#x60;discount&#x60;s, &#x60;system_credit_amount&#x60;, and &#x60;payment_method_amount&#x60; | 
**discounts** | [**\Swagger\Client\Model\InlineResponse20012Discounts[]**](InlineResponse20012Discounts.md) | A list of discounts applied to the line item. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


