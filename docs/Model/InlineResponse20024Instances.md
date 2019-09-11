# InlineResponse20024Instances

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Instance ID that will be used in the Choose Instances call | 
**name** | **string** | Descriptive name of the instance (will only have a value if &#x60;program.type&#x60; is &#x60;package&#x60;). | [optional] 
**start_date** | **string** | Start date of instance (will not have value if &#x60;program.type&#x60; is &#x60;package&#x60; since package programs are on-going). | [optional] 
**end_date** | **string** | End date of instance (will not have value if &#x60;program.type&#x60; is &#x60;package&#x60; since package programs are on-going). | [optional] 
**due_date** | **string** | Due date for payment of instance (will not have value if &#x60;program.type&#x60; is &#x60;package&#x60; since package programs are on-going). | [optional] 
**enabled** | **bool** | Value is &#x60;true&#x60; if instance is available to be registered for.  An example of a case where this will be &#x60;false&#x60; is if there is a child care availability exception or if the instance is full. | 
**selected** | **bool** | Whether or not the is selected for registration.  For example, if you choose this instance in the PUT call and later make the GET call, this will be &#x60;true&#x60;.  This value is not actually used for registration, but is a helper to keep track of state. | 
**amount** | **float** | Fee amount for this instance.  In order to calculate how much will actually cost the member with scholarships taken into account, the formula is &#x60;amount&#x60; - sum(&#x60;discounts.amount&#x60;). | 
**waiting_list** | **bool** | Whether or not the member will be on the waiting list if this instance is selected for registration. | 
**offering** | [**\Swagger\Client\Model\InlineResponse20024Offering**](InlineResponse20024Offering.md) |  | 
**discounts** | [**\Swagger\Client\Model\InlineResponse20024Discounts[]**](InlineResponse20024Discounts.md) | Discounts (for example, scholarship) that will be automatically applied during registration. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


