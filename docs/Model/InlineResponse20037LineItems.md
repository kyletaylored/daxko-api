# InlineResponse20037LineItems

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**line_item_id** | **string** | The line item ID. | 
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
**due_date** | **string** | The date when the &#x60;min_payment_amount&#x60; is due. | 
**payment_amount** | **float** | The amount that will be paid by the payment method. | 
**scheduled_amount** | **float** | The balance amount due after &#x60;discounts&#x60;, system credits, and &#x60;payment_amount&#x60; that was scheduled for the future. | 
**discounts** | [**\Swagger\Client\Model\InlineResponse20030Discounts[]**](InlineResponse20030Discounts.md) | A list of discounts applied to the line item. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


