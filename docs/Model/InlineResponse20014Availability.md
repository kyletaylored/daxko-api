# InlineResponse20014Availability

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**limited** | **bool** | &#x60;true&#x60; if the offering has a limited number of seats, &#x60;false&#x60; if offering has an unlimited number of seats | 
**full** | **bool** | &#x60;true&#x60; if the offering has reached maximum number of seats.  NOTE: for Child Care programs, this field is deprecated and the value will always be false for maintain backwards compatibility.  Use the &#x60;status&#x60; for Child Care programs. | 
**has_waiting_list** | **bool** | &#x60;true&#x60; if the offering has the waiting list option enabled | 
**status** | **string** | Status of availability.  &#x60;unknown&#x60; will always be the value for child care programs (in order to determine availability of a child care program, you must use the Get program offering details API call. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


