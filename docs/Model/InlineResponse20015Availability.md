# InlineResponse20015Availability

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**limited** | **bool** | If true, then there is a limit to number of seats available. | 
**full** | **bool** | If true, there are no spots available. | 
**max** | **int** | If &#x60;limited&#x60; is true, then this property will exist and indicate the maximum number of seats.  If limited is false, then this property will not exist. | [optional] 
**taken** | **int** | Number of seats taken.  (NOTE: For child care programs, this value is always -1 to indicate that the value is unavailable at this level since child care seat counts are calculated at the instance level once a registration has been started.  You should use the &#x60;registration_summaries.can_register&#x60; flag to control whether a registration can be started.) | 
**available** | **int** | If &#x60;limited&#x60; is true, then this indicates the number of seats available.  If limited is false, then this property does not exist.  (NOTE: For child care programs, this value is always -1 to indicate that the value is unavailable at this level since child care seat counts are calculated at the instance level once a registration has been started.  You should use the &#x60;registration_summaries.can_register&#x60; flag to control whether a registration can be started.) | [optional] 
**has_waiting_list** | **bool** | If &#x60;limited&#x60; is true, then this indicates whether a waiting list is available once the maximum number of seats has been reached. | 
**waiting_list_count** | **int** | If &#x60;has_waiting_list&#x60; is true, then this indicates how many members are on the waiting list. | [optional] 
**show_waiting_list_count** | **bool** | If &#x60;has_waiting_list&#x60; is true, then this indicates whether the offering should display the waiting list count. This is currently only available for traditional program offerings. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


