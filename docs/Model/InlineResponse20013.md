# InlineResponse20013

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**after** | **string** | A pagination cursor to use when fetching the next page of results. This value will be omitted if the respose contains the last page of results. View the Paging section of the [Getting Started Tutorial](../tutorials/getting_started/index.html#pagination) for more information. | [optional] 
**limit** | **int** | The maximum number of items requested. This value is the same value as the &#x60;limit&#x60; query parameter on the request. | 
**links** | [**\Swagger\Client\Model\InlineResponse20013Links[]**](InlineResponse20013Links.md) | A list of related resources and their corresponding URL links. | [optional] 
**total** | **int** | The total number of documents found that match the query criteria. This number can be greater than the number of results returned and is independent of the &#x60;limit&#x60; request query parameter value. | [optional] 
**offerings** | [**\Swagger\Client\Model\InlineResponse20013Offerings[]**](InlineResponse20013Offerings.md) | Search results.  This property will only have results if the &#x60;limit&#x60; property is greater than 0 and there are matching results based on the input query parameters. | 
**facets** | [**\Swagger\Client\Model\InlineResponse20013Facets**](InlineResponse20013Facets.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


