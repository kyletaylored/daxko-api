# InlineResponse20015Details

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | 
**name** | **string** |  | 
**description** | **string** |  | 
**start** | [**\DateTime**](\DateTime.md) | Start date | 
**end** | [**\DateTime**](\DateTime.md) | End date | 
**due** | [**\Swagger\Client\Model\InlineResponse20015Due**](InlineResponse20015Due.md) |  | 
**availability** | [**\Swagger\Client\Model\InlineResponse20015Availability**](InlineResponse20015Availability.md) |  | 
**registration_summaries** | [**\Swagger\Client\Model\InlineResponse20015RegistrationSummaries[]**](InlineResponse20015RegistrationSummaries.md) | Summary of registration status per registration type.  All of these values can be derived from other values in this response, but these are here as a helpful shortcut to control a UI. | [optional] 
**groups** | [**\Swagger\Client\Model\InlineResponse20015Groups[]**](InlineResponse20015Groups.md) | Program fee groups | 
**days_offered** | [**\Swagger\Client\Model\InlineResponse20015DaysOffered[]**](InlineResponse20015DaysOffered.md) | Days of week that are available | 
**times** | [**\Swagger\Client\Model\InlineResponse20015Times[]**](InlineResponse20015Times.md) | Times that are available.  The date part will always be 1900-01-01, so you should only care about the time portion. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


