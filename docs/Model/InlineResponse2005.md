# InlineResponse2005

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**questions** | [**map[string,\Swagger\Client\Model\InlineResponse2005Questions]**](InlineResponse2005Questions.md) | This is a dictionary where the question id is the key mapping to an object that defines the question. &#x60;&#x60;&#x60; \&quot;questions\&quot;: {   \&quot;name\&quot;: { \&quot;title\&quot;: \&quot;Name\&quot;, ... },   \&quot;address\&quot;: { \&quot;title\&quot;: \&quot;Address\&quot;, ... },   ... } &#x60;&#x60;&#x60; | 
**answers** | **map[string,object]** | This is a dictionary where the question id is the key mapping to an object that defines the answer to that question.  Any values that are returned are default values to use in your UI. &#x60;&#x60;&#x60; \&quot;answers\&quot;: {   \&quot;name\&quot;: \&quot;answer text...\&quot;,   \&quot;address\&quot;: {\&quot;line1\&quot;: \&quot;111 Some Dr.\&quot;, \&quot;city\&quot;: \&quot;Hollywood\&quot;, \&quot;state\&quot;: \&quot;CA\&quot;, \&quot;zip\&quot;: \&quot;90210\&quot; },   ... } &#x60;&#x60;&#x60; | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


