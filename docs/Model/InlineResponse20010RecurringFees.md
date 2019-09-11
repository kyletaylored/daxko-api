# InlineResponse20010RecurringFees

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**line_item_id** | **string** | ID of the line item | 
**short_description** | **string** | Short description of the fee | 
**type** | **string** | The line item type. A description of each type is detailed in the table below. |type|description| |-|-| |join|Join Fee| |membership|Membership Fee| |recurring|Pro-rated one-time fee based on future recurring fee| | 
**unit_price** | **float** | The line item price per unit | 
**quantity** | **int** | The line item quantity | 
**can_remove** | **bool** | Valie is &#x60;true&#x60; if this line item is able to be deleted. | 
**discounts** | **object[]** | A list of discounts applied to the line item. | 
**taxes** | [**\Swagger\Client\Model\InlineResponse20010Taxes[]**](InlineResponse20010Taxes.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


