# InlineResponse20030

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**version** | **string** | The cart &#x60;version&#x60; serves as a verification value that an order has been reviewed before being finalized. It will need to be passed into the cart checkout API call. | 
**line_items** | [**\Swagger\Client\Model\InlineResponse20030LineItems[]**](InlineResponse20030LineItems.md) | A list of line items that have been added to the cart | 
**line_item_payments** | [**\Swagger\Client\Model\InlineResponse20030LineItemPayments[]**](InlineResponse20030LineItemPayments.md) | A list of the amount that will be paid for each line item. This is provided for convenience so that it doesn&#39;t have to be manually constructed. However, for more advanced payment scenarios (if your application wants to specify per line item payments), your application will need to construct it. It will be required for the finalize payment API call. | 
**product_bundles** | [**\Swagger\Client\Model\InlineResponse20030ProductBundles[]**](InlineResponse20030ProductBundles.md) | List of all product bundles in the cart.  Use the &#x60;product_bundle_id&#x60; in the &#x60;line_items&#x60; collection to reference the product bundle. | 
**require_payment_method** | **bool** | Indicates if the cart requires payment now or at some point in the future. | 
**max_payment_method_amount** | **float** | Indicates the max amount that can be applied to the entire cart. This can be used for validation purposes to ensure that an error is not returned from the API for specifying an amount that exceeds the total amount. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


