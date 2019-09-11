# InlineResponse20013Offerings

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Offering id | 
**type** | **string** | Offering type | 
**name** | **string** | Offering name | 
**description** | **string** | Offering description | 
**start_date** | [**\DateTime**](\DateTime.md) | Offering start date | 
**end_date** | [**\DateTime**](\DateTime.md) | Offering end date | 
**program** | [**\Swagger\Client\Model\InlineResponse20013Program**](InlineResponse20013Program.md) |  | 
**groups** | [**\Swagger\Client\Model\InlineResponse20013Groups[]**](InlineResponse20013Groups.md) |  | 
**times** | [**\Swagger\Client\Model\InlineResponse20013Times[]**](InlineResponse20013Times.md) | Times that the offering occurs on.  Offering types of &#x60;camp_instance&#x60; and &#x60;rate_plan&#x60; will always return an empty array.  For offering type of &#x60;session&#x60;, times are optional based on the set-up in Daxko Operations. | [optional] 
**restrictions** | [**\Swagger\Client\Model\InlineResponse20013Restrictions[]**](InlineResponse20013Restrictions.md) | Restriction Information | 
**days_offered** | [**\Swagger\Client\Model\InlineResponse20013DaysOffered**](InlineResponse20013DaysOffered.md) |  | [optional] 
**score** | **float** | Relative score of offering based on search parameters.  Results with higher relevance will have a higher number. | 
**highlights** | [**\Swagger\Client\Model\InlineResponse20013Highlights[]**](InlineResponse20013Highlights.md) | If &#x60;keywords&#x60; is specified as a query parameter, then this return snippets of matched text surrounded by &amp;lt;mark&amp;gt; tags.  Otherwise, this property will be an empty array. | [optional] 
**registration** | [**\Swagger\Client\Model\InlineResponse20013Registration**](InlineResponse20013Registration.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


