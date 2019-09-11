# Body18

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**instances** | [**\Swagger\Client\Model\V3cartscartIdproductBundlesproductBundleIdinstancesInstances[]**](V3cartscartIdproductBundlesproductBundleIdinstancesInstances.md) | Instances to register for | 
**days** | **float[]** | Which days of week to register for.  This is an ISO8601 day of week ordinal (1&#x3D;Monday, ... , 7&#x3D;Sunday).  For example, &#x60;[1, 3, 5]&#x60; would choose Mon, Wed, and Fri. This property is only valid if &#x60;program.type&#x60; is &#x60;child_care&#x60; | [optional] 
**instructor_id** | **string** | Instructor ID to choose.  This property is only valid if &#x60;program.type&#x60; is &#x60;package&#x60; and is always optional. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


