# InlineResponse20026

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**info** | [**\Swagger\Client\Model\InlineResponse20023Info**](InlineResponse20023Info.md) |  | 
**mode** | **string** | Whether answers will be edited or created.  If mode is &#x60;create&#x60;, then no answers exist yet.  If mode is &#x60;edit&#x60;, then answers already exist and will be edited. | 
**questions** | [**map[string,\Swagger\Client\Model\InlineResponse2005Questions]**](InlineResponse2005Questions.md) | This is a dictionary where the question id is the key mapping to an object that defines the question. &#x60;&#x60;&#x60; \&quot;questions\&quot;: {   \&quot;question_1234\&quot;: { \&quot;title\&quot;: \&quot;My question 1\&quot;, ... },   \&quot;question_5678\&quot;: { \&quot;title\&quot;: \&quot;My question 2\&quot;, ... } } &#x60;&#x60;&#x60; | 
**answers** | **map[string,object]** | This is a dictionary where the question id is the key mapping to an object that defines the answer to that question. &#x60;&#x60;&#x60; \&quot;answers\&quot;: {   \&quot;question_1234\&quot;: \&quot;answer text...\&quot;,   \&quot;question_5678\&quot;: {\&quot;phone\&quot;: \&quot;555-555-5555\&quot;, \&quot;ext\&quot;: \&quot;123\&quot;} } &#x60;&#x60;&#x60; | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


