# InlineResponse2005Questions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of question | 
**title** | **string** | Question title | 
**description** | **string** | Question description/additional instructions. | 
**required** | **bool** | Value is &#x60;true&#x60; if an answer to the question is required. | [optional] 
**read_only** | **bool** | Value is &#x60;true&#x60; if the question should be rendered in the UI as read only. | [optional] 
**max_length** | **float** | Maximum text length allowed for questions of type &#x60;text&#x60; and &#x60;email&#x60;. | [optional] 
**default_value** | **string** | Default value.  Exists only for questions of type &#x60;dropdown&#x60;, &#x60;checkboxes&#x60;, and &#x60;radio&#x60;. | [optional] 
**possible_answers** | [**\Swagger\Client\Model\InlineResponse2005PossibleAnswers[]**](InlineResponse2005PossibleAnswers.md) | List of possible answers.  Exists only for questions of type &#x60;dropdown&#x60;, &#x60;checkboxes&#x60;, and &#x60;radio&#x60;. | [optional] 
**hide_empty_option** | **bool** | Value is &#x60;true&#x60; if the UI should not show an empty option.  For example, the dropdown might by default say &#39;Select One&#39;, but if this value is true then &#39;Select One&#39; should not be shown. | [optional] 
**empty_value** | **string** | Defines what is considered an empty value for this question.  For example, the value &#39;U&#39; might be considered an empty value and will throw a validation error if this value is selected.  Exists only for questions of type &#x60;dropdown&#x60;, &#x60;checkboxes&#x60;, and &#x60;radio&#x60;. | [optional] 
**pattern** | **string** | Regular expression to validate input against.  Exists only for questions of type &#x60;email&#x60;. | [optional] 
**show_extension** | **bool** | Value is &#x60;true&#x60; if phone extension number should be rendered in UI.  Exists only for questions of type &#x60;phone&#x60;. | [optional] 
**intl** | **bool** | Value is &#x60;true&#x60; if this is an international address or phone number question.  Exists only for questions of type &#x60;phone&#x60; and &#x60;address&#x60;. | [optional] 
**show_first** | **bool** | Value is &#x60;true&#x60; if first name should be rendered in UI.  Exists only for questions of type &#x60;name&#x60;. | [optional] 
**show_middle** | **bool** | Value is &#x60;true&#x60; if middle name should be rendered in UI.  Exists only for questions of type &#x60;name&#x60;. | [optional] 
**show_last** | **bool** | Value is &#x60;true&#x60; if last name should be rendered in UI.  Exists only for questions of type &#x60;name&#x60;. | [optional] 
**show_prefix** | **bool** | Value is &#x60;true&#x60; if name prefix should be rendered in UI.  Exists only for questions of type &#x60;name&#x60;. | [optional] 
**show_suffix** | **bool** | Value is &#x60;true&#x60; if name suffix should be rendered in UI.  Exists only for questions of type &#x60;name&#x60;. | [optional] 
**required_first** | **bool** | Value is &#x60;true&#x60; if first name is required.  Exists only for questions of type &#x60;name&#x60;. | [optional] 
**required_middle** | **bool** | Value is &#x60;true&#x60; if middle name is required.  Exists only for questions of type &#x60;name&#x60;. | [optional] 
**required_last** | **bool** | Value is &#x60;true&#x60; if last name is required.  Exists only for questions of type &#x60;name&#x60;. | [optional] 
**prefixes** | [**\Swagger\Client\Model\InlineResponse2005Prefixes[]**](InlineResponse2005Prefixes.md) | List of available name prefixes. | [optional] 
**suffixes** | [**\Swagger\Client\Model\InlineResponse2005Suffixes[]**](InlineResponse2005Suffixes.md) | List of available name suffixes. | [optional] 
**ca_provinces** | [**\Swagger\Client\Model\InlineResponse2005CaProvinces[]**](InlineResponse2005CaProvinces.md) | Canada province list.  Exists only for questions of type &#x60;address&#x60; when &#x60;intl&#x60; is true. | [optional] 
**countries** | [**\Swagger\Client\Model\InlineResponse2005Countries[]**](InlineResponse2005Countries.md) | Country list.  Exists only for questions of type &#x60;address&#x60; when &#x60;intl&#x60; is true. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


