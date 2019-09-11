# InlineResponse20014Offerings

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Offering ID | 
**name** | **string** | Offering name | 
**description** | **string** | Offering description | 
**start** | [**\DateTime**](\DateTime.md) | Offering start date | 
**end** | [**\DateTime**](\DateTime.md) | Offering end date | 
**locations** | [**\Swagger\Client\Model\InlineResponse20014Locations[]**](InlineResponse20014Locations.md) | Offering locations | 
**availability** | [**\Swagger\Client\Model\InlineResponse20014Availability**](InlineResponse20014Availability.md) |  | 
**groups** | [**\Swagger\Client\Model\InlineResponse20014Groups[]**](InlineResponse20014Groups.md) | Program fee groups | 
**restrictions** | [**\Swagger\Client\Model\InlineResponse20014Restrictions**](InlineResponse20014Restrictions.md) |  | 
**days_offered** | [**\Swagger\Client\Model\InlineResponse20014DaysOffered[]**](InlineResponse20014DaysOffered.md) | Days that the offering is available on.  If the array is empty, this does not necessarily mean that the offering is not available on this day, it means that when the program was set up, this option was not set. | 
**times** | [**\Swagger\Client\Model\InlineResponse20014Times[]**](InlineResponse20014Times.md) | Times that the offering is available.  The date portion is always returned as 1900-01-01.  For example, 1900-01-01T08:00:00.0000000 means that the offering starts at 8:00 AM local time. | 
**registration** | [**\Swagger\Client\Model\InlineResponse20013Registration**](InlineResponse20013Registration.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


