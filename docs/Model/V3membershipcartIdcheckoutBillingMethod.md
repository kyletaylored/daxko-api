# V3membershipcartIdcheckoutBillingMethod

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of billing method.  Is either a Daxko Payment Token (prefixed with &#39;PT&#39;) or a stored billing method in Daxko Operations (prefixed with &#39;BM&#39;) | 
**save** | **bool** | Should the information on the Daxko Payment Token be stored for future use as a stored billing method in Daxko Operations?  (This property is ignored if using an &#x60;id&#x60; prefixed with BM since it is already stored in Daxko Operations). | [optional] [default to false]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


