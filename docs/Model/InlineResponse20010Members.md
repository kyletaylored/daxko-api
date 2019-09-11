# InlineResponse20010Members

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**member_guid** | **string** | Unique ID that only can only be used to modify or delete members in the cart.  Once the checkout is complete or canceled, this ID no longer has any meaning. | 
**first_name** | **string** | First name | 
**last_name** | **string** | Last name | 
**primary_member** | **bool** | Value is &#x60;true&#x60; if this is the primary member.  There can only be 1 primary member. | 
**active** | **bool** | Value is &#x60;true&#x60; if the member will be active in the membership once checkout is complete. | 
**age_group** | [**\Swagger\Client\Model\InlineResponse20010AgeGroup**](InlineResponse20010AgeGroup.md) |  | 
**email** | **string** | Email address | 
**can_change_status** | **bool** | Value is &#x60;true&#x60; if the &#x60;active&#x60; flag can be changed depending on membership type. | 
**can_remove** | **bool** | Value is &#x60;true&#x60; if this member is allowed to be removed from the cart. | 
**birth_date** | **string** | Birth date | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


