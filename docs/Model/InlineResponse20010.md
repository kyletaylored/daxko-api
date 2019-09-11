# InlineResponse20010

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**recurring_fees** | [**\Swagger\Client\Model\InlineResponse20010RecurringFees[]**](InlineResponse20010RecurringFees.md) | Fees that will be charged in the future on a recurring basis (see &#x60;billing_cycle&#x60; for frequency) | 
**one_time_fees** | [**\Swagger\Client\Model\InlineResponse20010OneTimeFees[]**](InlineResponse20010OneTimeFees.md) | Fees that will be charged immediately at time of checkout (but might not be due immediately - see &#x60;one_time_fees.due_today_amount&#x60;) | 
**version** | **string** | The cart &#x60;version&#x60; serves as a verification value that an order has been reviewed before being finalized.  It will need to be passed into the membership checkout API call. | 
**membership_type** | [**\Swagger\Client\Model\InlineResponse20010MembershipType**](InlineResponse20010MembershipType.md) |  | 
**applied_discount_group_ids** | **string[]** | List of discount group ids that have been applied to this cart. | 
**home_branch** | [**\Swagger\Client\Model\InlineResponse20010HomeBranch**](InlineResponse20010HomeBranch.md) |  | 
**billing_cycle** | [**\Swagger\Client\Model\InlineResponse20010BillingCycle**](InlineResponse20010BillingCycle.md) |  | 
**billing_cyles** | [**\Swagger\Client\Model\InlineResponse20010BillingCycle[]**](InlineResponse20010BillingCycle.md) | List of available billing cycles | 
**draft_day** | **int** | Selected draft day (day of month) | 
**draft_days** | [**\Swagger\Client\Model\InlineResponse20010DraftDays[]**](InlineResponse20010DraftDays.md) | List of available draft days | 
**auto_renew** | **bool** | Valie is &#x60;true&#x60; if the membership is set to auto renew. | 
**next_process_date** | **string** | Date when next &#x60;recurring_fees&#x60; will be converted to actual fees. | 
**expiration_date** | **string** | When &#x60;auto_renew&#x60; is true, this property will not exist because there is no expiration date.  When &#x60;auto_renew&#x60; is false, this will be when the membership will expire. | [optional] 
**renew** | **bool** | Value is &#x60;true&#x60; if this cart is in the mode of renewing a unit (vs. joining) | 
**members** | [**\Swagger\Client\Model\InlineResponse20010Members[]**](InlineResponse20010Members.md) | Members that are in the cart | 
**age_group_rules** | [**\Swagger\Client\Model\InlineResponse20010AgeGroupRules**](InlineResponse20010AgeGroupRules.md) |  | 
**allow_payment** | **bool** | Value is &#x60;true&#x60; if a payment method can be supplied.  For example, if the membership is free after discounts have been applied and all recurring fees will be free in the future, the value will be &#x60;false&#x60;. | 
**valid** | **bool** | Value is &#x60;true&#x60; if there are no &#x60;errors&#x60; and all &#x60;age_group_rules&#x60; are valid. | 
**errors** | [**\Swagger\Client\Model\InlineResponse20010Errors[]**](InlineResponse20010Errors.md) | Any errors that must be resolved before checkout can complete | 
**steps** | [**\Swagger\Client\Model\InlineResponse20010Steps**](InlineResponse20010Steps.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


