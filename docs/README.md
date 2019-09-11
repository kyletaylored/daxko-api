# Daxko Operations API

## Documentation for API Endpoints

All URIs are relative to *https://api.daxko.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*MembersApi* | [**getMemberCheckins**](Api/MembersApi.md#getmembercheckins) | **GET** /v3/members/{member_id}/check_ins | Member Check-ins
*MembersApi* | [**getMemberDetails**](Api/MembersApi.md#getmemberdetails) | **GET** /v3/members/{member_id} | Get Member Details
*MembersApi* | [**getMembersMe**](Api/MembersApi.md#getmembersme) | **GET** /v3/members/me | Get my member info
*MembershipApi* | [**acceptMembershipAgreements**](Api/MembershipApi.md#acceptmembershipagreements) | **PUT** /v3/membership/{cart_id}/agreements | Accept membership agreements
*MembershipApi* | [**deleteMembershipMember**](Api/MembershipApi.md#deletemembershipmember) | **DELETE** /v3/membership/{cart_id}/members/{member_guid} | Delete member in cart
*MembershipApi* | [**getAgeGroups**](Api/MembershipApi.md#getagegroups) | **GET** /v3/membership/age_groups | List age groups
*MembershipApi* | [**getDiscountGroups**](Api/MembershipApi.md#getdiscountgroups) | **GET** /v3/membership/discount_groups | List discount groups
*MembershipApi* | [**getMembershipAgreements**](Api/MembershipApi.md#getmembershipagreements) | **GET** /v3/membership/{cart_id}/agreements | Get membership agreements
*MembershipApi* | [**getMembershipBranches**](Api/MembershipApi.md#getmembershipbranches) | **GET** /v3/membership/branches | List membership branches
*MembershipApi* | [**getMembershipCart**](Api/MembershipApi.md#getmembershipcart) | **GET** /v3/membership/{cart_id} | Get review information
*MembershipApi* | [**getMembershipMember**](Api/MembershipApi.md#getmembershipmember) | **GET** /v3/membership/{cart_id}/members/{member_guid} | Get member in cart
*MembershipApi* | [**getMembershipQuestions**](Api/MembershipApi.md#getmembershipquestions) | **GET** /v3/membership/{cart_id}/member_questions | Get member questions
*MembershipApi* | [**getMembershipReceipt**](Api/MembershipApi.md#getmembershipreceipt) | **GET** /v3/membership/{cart_id}/receipt | Get receipt
*MembershipApi* | [**getMembershipTypes**](Api/MembershipApi.md#getmembershiptypes) | **GET** /v3/membership/membership_types | List membership types
*MembershipApi* | [**postCartMember**](Api/MembershipApi.md#postcartmember) | **POST** /v3/membership/{cart_id}/members | Add member to cart
*MembershipApi* | [**postMembershipCheckout**](Api/MembershipApi.md#postmembershipcheckout) | **POST** /v3/membership/{cart_id}/checkout | Checkout
*MembershipApi* | [**postMembershipDiscountGroups**](Api/MembershipApi.md#postmembershipdiscountgroups) | **POST** /v3/membership/{cart_id}/discount_groups | Apply discount groups
*MembershipApi* | [**postMembershipEmailValidation**](Api/MembershipApi.md#postmembershipemailvalidation) | **POST** /v3/membership/{cart_id}/email_validation | Validate email
*MembershipApi* | [**postMembershipRenewal**](Api/MembershipApi.md#postmembershiprenewal) | **POST** /v3/membership/renewal | Start renewal process
*MembershipApi* | [**putMembershipMember**](Api/MembershipApi.md#putmembershipmember) | **PUT** /v3/membership/{cart_id}/members/{member_guid} | Update member in cart
*MembershipApi* | [**setCartMembersStatus**](Api/MembershipApi.md#setcartmembersstatus) | **PUT** /v3/membership/{cart_id}/status | Set members status in cart
*MembershipApi* | [**startMemberJoin**](Api/MembershipApi.md#startmemberjoin) | **POST** /v3/membership/join | Start join process
*PartnersApi* | [**getMemberOAuthSettings**](Api/PartnersApi.md#getmemberoauthsettings) | **GET** /v3/partners/oauth2/members/settings | Get member oauth2 settings
*PartnersApi* | [**memberTokenOAuth2**](Api/PartnersApi.md#membertokenoauth2) | **POST** /v3/partners/oauth2/members/token | Create member access token
*PartnersApi* | [**partnerOAuth2**](Api/PartnersApi.md#partneroauth2) | **POST** /v3/partners/oauth2/token | Create partner access token
*PartnersApi* | [**postMemberOAuthSettings**](Api/PartnersApi.md#postmemberoauthsettings) | **PUT** /v3/partners/oauth2/members/settings | Save member oauth2 settings
*PasswordRecoveryApi* | [**changeMemberPassword**](Api/PasswordRecoveryApi.md#changememberpassword) | **POST** /v3/password_recovery/token/{id} | Change member password
*PasswordRecoveryApi* | [**createPasswordRecoveryToken**](Api/PasswordRecoveryApi.md#createpasswordrecoverytoken) | **POST** /v3/password_recovery/token | Create password recovery token
*PasswordRecoveryApi* | [**sendPasswordRecoveryEmail**](Api/PasswordRecoveryApi.md#sendpasswordrecoveryemail) | **POST** /v3/password_recovery/email | Send password recovery email
*PasswordRecoveryApi* | [**verifyPasswordRecoveryToken**](Api/PasswordRecoveryApi.md#verifypasswordrecoverytoken) | **GET** /v3/password_recovery/token/{id} | Verify password recovery token
*ProgramRegistrationApi* | [**acceptAgreements**](Api/ProgramRegistrationApi.md#acceptagreements) | **PUT** /v3/carts/{cart_id}/product_bundles/{product_bundle_id}/agreements | Accept agreements
*ProgramRegistrationApi* | [**addRegistrationOfferingToCart**](Api/ProgramRegistrationApi.md#addregistrationofferingtocart) | **POST** /v3/carts/{cart_id}/offerings | Start program offering registration
*ProgramRegistrationApi* | [**createCart**](Api/ProgramRegistrationApi.md#createcart) | **POST** /v3/carts/ | Create a cart
*ProgramRegistrationApi* | [**deleteCart**](Api/ProgramRegistrationApi.md#deletecart) | **DELETE** /v3/carts/{cart_id} | Delete a cart
*ProgramRegistrationApi* | [**deleteCartPromoCodes**](Api/ProgramRegistrationApi.md#deletecartpromocodes) | **DELETE** /v3/carts/{cart_id}/promo_codes | Delete promo code from cart
*ProgramRegistrationApi* | [**deleteLineItem**](Api/ProgramRegistrationApi.md#deletelineitem) | **DELETE** /v3/carts/{cart_id}/line_items/{line_item_id} | Delete line item
*ProgramRegistrationApi* | [**getAgreements**](Api/ProgramRegistrationApi.md#getagreements) | **GET** /v3/carts/{cart_id}/product_bundles/{product_bundle_id}/agreements | Get agreements
*ProgramRegistrationApi* | [**getCartDetails**](Api/ProgramRegistrationApi.md#getcartdetails) | **GET** /v3/carts/{cart_id} | Get Cart Details
*ProgramRegistrationApi* | [**getCartProductBundleInstances**](Api/ProgramRegistrationApi.md#getcartproductbundleinstances) | **GET** /v3/carts/{cart_id}/product_bundles/{product_bundle_id}/instances | Get possible instances to register for
*ProgramRegistrationApi* | [**getCartProductBundleQuestions**](Api/ProgramRegistrationApi.md#getcartproductbundlequestions) | **GET** /v3/carts/{cart_id}/product_bundles/{product_bundle_id}/questions | Get custom questions
*ProgramRegistrationApi* | [**getCartReceipt**](Api/ProgramRegistrationApi.md#getcartreceipt) | **GET** /v3/carts/{cart_id}/receipt | Get Cart Receipt
*ProgramRegistrationApi* | [**getCartStatus**](Api/ProgramRegistrationApi.md#getcartstatus) | **GET** /v3/carts/{cart_id}/status | Get Cart Status
*ProgramRegistrationApi* | [**postCartCheckout**](Api/ProgramRegistrationApi.md#postcartcheckout) | **POST** /v3/carts/{cart_id}/checkout | Checkout
*ProgramRegistrationApi* | [**postCartPromoCodes**](Api/ProgramRegistrationApi.md#postcartpromocodes) | **POST** /v3/carts/{cart_id}/promo_codes | Apply promo code to cart
*ProgramRegistrationApi* | [**putCartPaymentAmount**](Api/ProgramRegistrationApi.md#putcartpaymentamount) | **PUT** /v3/carts/{cart_id}/payment_amount | Apply payment amounts
*ProgramRegistrationApi* | [**putCartProductBundleAnswers**](Api/ProgramRegistrationApi.md#putcartproductbundleanswers) | **PUT** /v3/carts/{cart_id}/product_bundles/{product_bundle_id}/answers | Save answers
*ProgramRegistrationApi* | [**putCartProductBundleInstances**](Api/ProgramRegistrationApi.md#putcartproductbundleinstances) | **PUT** /v3/carts/{cart_id}/product_bundles/{product_bundle_id}/instances | Choose instances to register for
*ProgramRegistrationApi* | [**removeProductBundle**](Api/ProgramRegistrationApi.md#removeproductbundle) | **DELETE** /v3/carts/{cart_id}/product_bundles/{product_bundle_id} | Remove product bundle from cart
*ProgramsApi* | [**getOfferingDetails**](Api/ProgramsApi.md#getofferingdetails) | **GET** /v3/programs/{program_id}/offerings/{offering_id} | Get program offering details
*ProgramsApi* | [**listProgramCategories**](Api/ProgramsApi.md#listprogramcategories) | **GET** /v3/programs/categories | List program categories
*ProgramsApi* | [**listProgramLocations**](Api/ProgramsApi.md#listprogramlocations) | **GET** /v3/programs/locations | List program locations
*ProgramsApi* | [**listProgramOfferings**](Api/ProgramsApi.md#listprogramofferings) | **GET** /v3/programs/{program_id}/offerings | Get list of offerings for particular program
*ProgramsApi* | [**searchProgramOfferings**](Api/ProgramsApi.md#searchprogramofferings) | **GET** /v3/programs/offerings/search | Search program offerings
*UnitsApi* | [**createUnitRelationships**](Api/UnitsApi.md#createunitrelationships) | **POST** /v3/units/{unit_id}/relationships/sources | Create Relationship Source
*UnitsApi* | [**deleteUnitRelationshipSource**](Api/UnitsApi.md#deleteunitrelationshipsource) | **DELETE** /v3/units/{unit_id}/relationships/sources/{source_id} | Delete Relationship Source
*UnitsApi* | [**getUnitBillingMethods**](Api/UnitsApi.md#getunitbillingmethods) | **GET** /v3/units/{unit_id}/billing_methods | Get Unit Billing Methods
*UnitsApi* | [**getUnitDetails**](Api/UnitsApi.md#getunitdetails) | **GET** /v3/units/{unit_id} | Get Unit Details
*UnitsApi* | [**getUnitRelationshipTypes**](Api/UnitsApi.md#getunitrelationshiptypes) | **GET** /v3/units/relationships/types | List Relationship Types
*UnitsApi* | [**getUnitRelationships**](Api/UnitsApi.md#getunitrelationships) | **GET** /v3/units/{unit_id}/relationships/sources | List Relationship Sources
*UnitsApi* | [**updateUnitRelationshipSource**](Api/UnitsApi.md#updateunitrelationshipsource) | **PUT** /v3/units/{unit_id}/relationships/sources/{source_id} | Update Relationship Source


## Documentation For Models

 - [Body](Model/Body.md)
 - [Body1](Model/Body1.md)
 - [Body10](Model/Body10.md)
 - [Body11](Model/Body11.md)
 - [Body12](Model/Body12.md)
 - [Body13](Model/Body13.md)
 - [Body14](Model/Body14.md)
 - [Body15](Model/Body15.md)
 - [Body16](Model/Body16.md)
 - [Body17](Model/Body17.md)
 - [Body18](Model/Body18.md)
 - [Body19](Model/Body19.md)
 - [Body2](Model/Body2.md)
 - [Body20](Model/Body20.md)
 - [Body21](Model/Body21.md)
 - [Body22](Model/Body22.md)
 - [Body23](Model/Body23.md)
 - [Body3](Model/Body3.md)
 - [Body4](Model/Body4.md)
 - [Body5](Model/Body5.md)
 - [Body6](Model/Body6.md)
 - [Body7](Model/Body7.md)
 - [Body8](Model/Body8.md)
 - [Body9](Model/Body9.md)
 - [InlineResponse200](Model/InlineResponse200.md)
 - [InlineResponse2001](Model/InlineResponse2001.md)
 - [InlineResponse20010](Model/InlineResponse20010.md)
 - [InlineResponse20010AgeGroup](Model/InlineResponse20010AgeGroup.md)
 - [InlineResponse20010AgeGroupRules](Model/InlineResponse20010AgeGroupRules.md)
 - [InlineResponse20010AgeGroupRulesRules](Model/InlineResponse20010AgeGroupRulesRules.md)
 - [InlineResponse20010BillingCycle](Model/InlineResponse20010BillingCycle.md)
 - [InlineResponse20010DraftDays](Model/InlineResponse20010DraftDays.md)
 - [InlineResponse20010Errors](Model/InlineResponse20010Errors.md)
 - [InlineResponse20010HomeBranch](Model/InlineResponse20010HomeBranch.md)
 - [InlineResponse20010Members](Model/InlineResponse20010Members.md)
 - [InlineResponse20010MembershipType](Model/InlineResponse20010MembershipType.md)
 - [InlineResponse20010MembershipTypeTerm](Model/InlineResponse20010MembershipTypeTerm.md)
 - [InlineResponse20010OneTimeFees](Model/InlineResponse20010OneTimeFees.md)
 - [InlineResponse20010RecurringFees](Model/InlineResponse20010RecurringFees.md)
 - [InlineResponse20010Steps](Model/InlineResponse20010Steps.md)
 - [InlineResponse20010Taxes](Model/InlineResponse20010Taxes.md)
 - [InlineResponse20011](Model/InlineResponse20011.md)
 - [InlineResponse20012](Model/InlineResponse20012.md)
 - [InlineResponse20012Customer](Model/InlineResponse20012Customer.md)
 - [InlineResponse20012CustomerAddress](Model/InlineResponse20012CustomerAddress.md)
 - [InlineResponse20012Discounts](Model/InlineResponse20012Discounts.md)
 - [InlineResponse20012MembershipType](Model/InlineResponse20012MembershipType.md)
 - [InlineResponse20012OneTimeFees](Model/InlineResponse20012OneTimeFees.md)
 - [InlineResponse20012Payments](Model/InlineResponse20012Payments.md)
 - [InlineResponse20012RecurringFees](Model/InlineResponse20012RecurringFees.md)
 - [InlineResponse20012ScheduledPayments](Model/InlineResponse20012ScheduledPayments.md)
 - [InlineResponse20012Vendor](Model/InlineResponse20012Vendor.md)
 - [InlineResponse20013](Model/InlineResponse20013.md)
 - [InlineResponse20013Age](Model/InlineResponse20013Age.md)
 - [InlineResponse20013DaysOffered](Model/InlineResponse20013DaysOffered.md)
 - [InlineResponse20013Dob](Model/InlineResponse20013Dob.md)
 - [InlineResponse20013Facets](Model/InlineResponse20013Facets.md)
 - [InlineResponse20013FacetsCategories](Model/InlineResponse20013FacetsCategories.md)
 - [InlineResponse20013FacetsDaysOfWeek](Model/InlineResponse20013FacetsDaysOfWeek.md)
 - [InlineResponse20013FacetsLocations](Model/InlineResponse20013FacetsLocations.md)
 - [InlineResponse20013FacetsPrograms](Model/InlineResponse20013FacetsPrograms.md)
 - [InlineResponse20013FacetsTimeRanges](Model/InlineResponse20013FacetsTimeRanges.md)
 - [InlineResponse20013Genders](Model/InlineResponse20013Genders.md)
 - [InlineResponse20013Groups](Model/InlineResponse20013Groups.md)
 - [InlineResponse20013Highlights](Model/InlineResponse20013Highlights.md)
 - [InlineResponse20013Links](Model/InlineResponse20013Links.md)
 - [InlineResponse20013Offerings](Model/InlineResponse20013Offerings.md)
 - [InlineResponse20013Program](Model/InlineResponse20013Program.md)
 - [InlineResponse20013Rate](Model/InlineResponse20013Rate.md)
 - [InlineResponse20013Registration](Model/InlineResponse20013Registration.md)
 - [InlineResponse20013Restrictions](Model/InlineResponse20013Restrictions.md)
 - [InlineResponse20013Times](Model/InlineResponse20013Times.md)
 - [InlineResponse20014](Model/InlineResponse20014.md)
 - [InlineResponse20014Availability](Model/InlineResponse20014Availability.md)
 - [InlineResponse20014DaysOffered](Model/InlineResponse20014DaysOffered.md)
 - [InlineResponse20014Groups](Model/InlineResponse20014Groups.md)
 - [InlineResponse20014Locations](Model/InlineResponse20014Locations.md)
 - [InlineResponse20014Offerings](Model/InlineResponse20014Offerings.md)
 - [InlineResponse20014Program](Model/InlineResponse20014Program.md)
 - [InlineResponse20014Restrictions](Model/InlineResponse20014Restrictions.md)
 - [InlineResponse20014RestrictionsAge](Model/InlineResponse20014RestrictionsAge.md)
 - [InlineResponse20014RestrictionsDob](Model/InlineResponse20014RestrictionsDob.md)
 - [InlineResponse20014RestrictionsGenders](Model/InlineResponse20014RestrictionsGenders.md)
 - [InlineResponse20014Times](Model/InlineResponse20014Times.md)
 - [InlineResponse20015](Model/InlineResponse20015.md)
 - [InlineResponse20015Agreements](Model/InlineResponse20015Agreements.md)
 - [InlineResponse20015Availability](Model/InlineResponse20015Availability.md)
 - [InlineResponse20015Categories](Model/InlineResponse20015Categories.md)
 - [InlineResponse20015DaysOffered](Model/InlineResponse20015DaysOffered.md)
 - [InlineResponse20015Details](Model/InlineResponse20015Details.md)
 - [InlineResponse20015Due](Model/InlineResponse20015Due.md)
 - [InlineResponse20015Fees](Model/InlineResponse20015Fees.md)
 - [InlineResponse20015Groups](Model/InlineResponse20015Groups.md)
 - [InlineResponse20015Location](Model/InlineResponse20015Location.md)
 - [InlineResponse20015LocationPeople](Model/InlineResponse20015LocationPeople.md)
 - [InlineResponse20015Program](Model/InlineResponse20015Program.md)
 - [InlineResponse20015Rate](Model/InlineResponse20015Rate.md)
 - [InlineResponse20015RegistrationDates](Model/InlineResponse20015RegistrationDates.md)
 - [InlineResponse20015RegistrationSummaries](Model/InlineResponse20015RegistrationSummaries.md)
 - [InlineResponse20015Restrictions](Model/InlineResponse20015Restrictions.md)
 - [InlineResponse20015Times](Model/InlineResponse20015Times.md)
 - [InlineResponse20016](Model/InlineResponse20016.md)
 - [InlineResponse20016Categories](Model/InlineResponse20016Categories.md)
 - [InlineResponse20017](Model/InlineResponse20017.md)
 - [InlineResponse20017Locations](Model/InlineResponse20017Locations.md)
 - [InlineResponse20018](Model/InlineResponse20018.md)
 - [InlineResponse20018HomeLocation](Model/InlineResponse20018HomeLocation.md)
 - [InlineResponse20018Links](Model/InlineResponse20018Links.md)
 - [InlineResponse20018Members](Model/InlineResponse20018Members.md)
 - [InlineResponse20019](Model/InlineResponse20019.md)
 - [InlineResponse20019BillingMethods](Model/InlineResponse20019BillingMethods.md)
 - [InlineResponse2002](Model/InlineResponse2002.md)
 - [InlineResponse20020](Model/InlineResponse20020.md)
 - [InlineResponse20020Children](Model/InlineResponse20020Children.md)
 - [InlineResponse20020Person](Model/InlineResponse20020Person.md)
 - [InlineResponse20020PersonAddress](Model/InlineResponse20020PersonAddress.md)
 - [InlineResponse20020PersonName](Model/InlineResponse20020PersonName.md)
 - [InlineResponse20020PersonPhone](Model/InlineResponse20020PersonPhone.md)
 - [InlineResponse20020PersonRelationships](Model/InlineResponse20020PersonRelationships.md)
 - [InlineResponse20020Sources](Model/InlineResponse20020Sources.md)
 - [InlineResponse20021](Model/InlineResponse20021.md)
 - [InlineResponse20022](Model/InlineResponse20022.md)
 - [InlineResponse20022RelationshipTypes](Model/InlineResponse20022RelationshipTypes.md)
 - [InlineResponse20023](Model/InlineResponse20023.md)
 - [InlineResponse20023Info](Model/InlineResponse20023Info.md)
 - [InlineResponse20023InfoChildren](Model/InlineResponse20023InfoChildren.md)
 - [InlineResponse20023InfoPerson](Model/InlineResponse20023InfoPerson.md)
 - [InlineResponse20023InfoProducts](Model/InlineResponse20023InfoProducts.md)
 - [InlineResponse20023InfoSteps](Model/InlineResponse20023InfoSteps.md)
 - [InlineResponse20024](Model/InlineResponse20024.md)
 - [InlineResponse20024Days](Model/InlineResponse20024Days.md)
 - [InlineResponse20024Discounts](Model/InlineResponse20024Discounts.md)
 - [InlineResponse20024Fees](Model/InlineResponse20024Fees.md)
 - [InlineResponse20024Instances](Model/InlineResponse20024Instances.md)
 - [InlineResponse20024Instructors](Model/InlineResponse20024Instructors.md)
 - [InlineResponse20024Offering](Model/InlineResponse20024Offering.md)
 - [InlineResponse20024Program](Model/InlineResponse20024Program.md)
 - [InlineResponse20025](Model/InlineResponse20025.md)
 - [InlineResponse20026](Model/InlineResponse20026.md)
 - [InlineResponse20027](Model/InlineResponse20027.md)
 - [InlineResponse20028](Model/InlineResponse20028.md)
 - [InlineResponse20028Agreements](Model/InlineResponse20028Agreements.md)
 - [InlineResponse20029](Model/InlineResponse20029.md)
 - [InlineResponse2002Addresses](Model/InlineResponse2002Addresses.md)
 - [InlineResponse2002Emails](Model/InlineResponse2002Emails.md)
 - [InlineResponse2002Gender](Model/InlineResponse2002Gender.md)
 - [InlineResponse2002HomeLocation](Model/InlineResponse2002HomeLocation.md)
 - [InlineResponse2002Name](Model/InlineResponse2002Name.md)
 - [InlineResponse2002Phones](Model/InlineResponse2002Phones.md)
 - [InlineResponse2002Photos](Model/InlineResponse2002Photos.md)
 - [InlineResponse2003](Model/InlineResponse2003.md)
 - [InlineResponse20030](Model/InlineResponse20030.md)
 - [InlineResponse20030Discounts](Model/InlineResponse20030Discounts.md)
 - [InlineResponse20030LineItemPayments](Model/InlineResponse20030LineItemPayments.md)
 - [InlineResponse20030LineItems](Model/InlineResponse20030LineItems.md)
 - [InlineResponse20030ProductBundles](Model/InlineResponse20030ProductBundles.md)
 - [InlineResponse20031](Model/InlineResponse20031.md)
 - [InlineResponse20032](Model/InlineResponse20032.md)
 - [InlineResponse20033](Model/InlineResponse20033.md)
 - [InlineResponse20034](Model/InlineResponse20034.md)
 - [InlineResponse20035](Model/InlineResponse20035.md)
 - [InlineResponse20036](Model/InlineResponse20036.md)
 - [InlineResponse20037](Model/InlineResponse20037.md)
 - [InlineResponse20037LineItems](Model/InlineResponse20037LineItems.md)
 - [InlineResponse2003Name](Model/InlineResponse2003Name.md)
 - [InlineResponse2004](Model/InlineResponse2004.md)
 - [InlineResponse2004CheckIns](Model/InlineResponse2004CheckIns.md)
 - [InlineResponse2004Location](Model/InlineResponse2004Location.md)
 - [InlineResponse2005](Model/InlineResponse2005.md)
 - [InlineResponse2005CaProvinces](Model/InlineResponse2005CaProvinces.md)
 - [InlineResponse2005Countries](Model/InlineResponse2005Countries.md)
 - [InlineResponse2005PossibleAnswers](Model/InlineResponse2005PossibleAnswers.md)
 - [InlineResponse2005Prefixes](Model/InlineResponse2005Prefixes.md)
 - [InlineResponse2005Questions](Model/InlineResponse2005Questions.md)
 - [InlineResponse2005Suffixes](Model/InlineResponse2005Suffixes.md)
 - [InlineResponse2006](Model/InlineResponse2006.md)
 - [InlineResponse2007](Model/InlineResponse2007.md)
 - [InlineResponse2008](Model/InlineResponse2008.md)
 - [InlineResponse2008Agreements](Model/InlineResponse2008Agreements.md)
 - [InlineResponse2009](Model/InlineResponse2009.md)
 - [InlineResponse201](Model/InlineResponse201.md)
 - [InlineResponse2011](Model/InlineResponse2011.md)
 - [InlineResponse2012](Model/InlineResponse2012.md)
 - [InlineResponse2013](Model/InlineResponse2013.md)
 - [InlineResponse2014](Model/InlineResponse2014.md)
 - [InlineResponse201Links](Model/InlineResponse201Links.md)
 - [InlineResponse400](Model/InlineResponse400.md)
 - [InlineResponse4001](Model/InlineResponse4001.md)
 - [InlineResponse4002](Model/InlineResponse4002.md)
 - [V3cartscartIdofferingsOfferings](Model/V3cartscartIdofferingsOfferings.md)
 - [V3cartscartIdproductBundlesproductBundleIdinstancesInstances](Model/V3cartscartIdproductBundlesproductBundleIdinstancesInstances.md)
 - [V3membershipcartIdcheckoutBillingMethod](Model/V3membershipcartIdcheckoutBillingMethod.md)
 - [V3membershipcartIdcheckoutCustomer](Model/V3membershipcartIdcheckoutCustomer.md)
 - [V3membershipcartIdcheckoutLineItemPayments](Model/V3membershipcartIdcheckoutLineItemPayments.md)
 - [V3membershipcartIdcheckoutPaymentInfo](Model/V3membershipcartIdcheckoutPaymentInfo.md)
 - [V3membershipcartIdmembersEmergencyContact](Model/V3membershipcartIdmembersEmergencyContact.md)
 - [V3membershipcartIdmembersEmergencyPhone](Model/V3membershipcartIdmembersEmergencyPhone.md)
 - [V3membershipcartIdmembersName](Model/V3membershipcartIdmembersName.md)
 - [V3membershipcartIdmembersPrimaryAddress](Model/V3membershipcartIdmembersPrimaryAddress.md)
 - [V3membershipcartIdmembersPrimaryPhone](Model/V3membershipcartIdmembersPrimaryPhone.md)
 - [V3membershipcartIdstatusMembers](Model/V3membershipcartIdstatusMembers.md)
 - [V3partnersoauth2memberssettingsSettings](Model/V3partnersoauth2memberssettingsSettings.md)
 - [V3partnersoauth2memberssettingsSettingsLinks](Model/V3partnersoauth2memberssettingsSettingsLinks.md)
 - [V3partnersoauth2memberssettingsSettingsLinksForgotPassword](Model/V3partnersoauth2memberssettingsSettingsLinksForgotPassword.md)
 - [V3partnersoauth2memberssettingsSettingsLinksSignUp](Model/V3partnersoauth2memberssettingsSettingsLinksSignUp.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author

support@daxko.com


