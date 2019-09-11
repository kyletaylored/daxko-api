# InlineResponse20024

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**info** | [**\Swagger\Client\Model\InlineResponse20023Info**](InlineResponse20023Info.md) |  | 
**program** | [**\Swagger\Client\Model\InlineResponse20024Program**](InlineResponse20024Program.md) |  | 
**instances** | [**\Swagger\Client\Model\InlineResponse20024Instances[]**](InlineResponse20024Instances.md) | Instances | 
**fees** | [**\Swagger\Client\Model\InlineResponse20024Fees[]**](InlineResponse20024Fees.md) | Fees that will be charged automaticaly (for example, registration fee) | 
**instructors** | [**\Swagger\Client\Model\InlineResponse20024Instructors[]**](InlineResponse20024Instructors.md) | Available instructors to choose from (property will only exist if &#x60;program.type&#x60; is &#x60;package&#x60;) | [optional] 
**days** | [**\Swagger\Client\Model\InlineResponse20024Days[]**](InlineResponse20024Days.md) | Day options to choose from when registering for a child care program (property will only exist if &#x60;program.type&#x60; is &#x60;child_care&#x60;) | [optional] 
**min_required_days** | **float** | Minimum required days that must be chosen in order to register.  This property will only exist if &#x60;program.type&#x60; is &#x60;child_care&#x60;. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


