<?php
/**
 * InlineResponse20010Members
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Daxko Operations API
 *
 * description
 *
 * OpenAPI spec version: 0.1.0
 * Contact: support@daxko.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.8
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * InlineResponse20010Members Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20010Members implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_10_members';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'member_guid' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'primary_member' => 'bool',
        'active' => 'bool',
        'age_group' => '\Swagger\Client\Model\InlineResponse20010AgeGroup',
        'email' => 'string',
        'can_change_status' => 'bool',
        'can_remove' => 'bool',
        'birth_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'member_guid' => null,
        'first_name' => null,
        'last_name' => null,
        'primary_member' => null,
        'active' => null,
        'age_group' => null,
        'email' => null,
        'can_change_status' => null,
        'can_remove' => null,
        'birth_date' => 'datetime'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'member_guid' => 'member_guid',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'primary_member' => 'primary_member',
        'active' => 'active',
        'age_group' => 'age_group',
        'email' => 'email',
        'can_change_status' => 'can_change_status',
        'can_remove' => 'can_remove',
        'birth_date' => 'birth_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'member_guid' => 'setMemberGuid',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'primary_member' => 'setPrimaryMember',
        'active' => 'setActive',
        'age_group' => 'setAgeGroup',
        'email' => 'setEmail',
        'can_change_status' => 'setCanChangeStatus',
        'can_remove' => 'setCanRemove',
        'birth_date' => 'setBirthDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'member_guid' => 'getMemberGuid',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'primary_member' => 'getPrimaryMember',
        'active' => 'getActive',
        'age_group' => 'getAgeGroup',
        'email' => 'getEmail',
        'can_change_status' => 'getCanChangeStatus',
        'can_remove' => 'getCanRemove',
        'birth_date' => 'getBirthDate'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['member_guid'] = isset($data['member_guid']) ? $data['member_guid'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['primary_member'] = isset($data['primary_member']) ? $data['primary_member'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['age_group'] = isset($data['age_group']) ? $data['age_group'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['can_change_status'] = isset($data['can_change_status']) ? $data['can_change_status'] : null;
        $this->container['can_remove'] = isset($data['can_remove']) ? $data['can_remove'] : null;
        $this->container['birth_date'] = isset($data['birth_date']) ? $data['birth_date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['member_guid'] === null) {
            $invalidProperties[] = "'member_guid' can't be null";
        }
        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ($this->container['last_name'] === null) {
            $invalidProperties[] = "'last_name' can't be null";
        }
        if ($this->container['primary_member'] === null) {
            $invalidProperties[] = "'primary_member' can't be null";
        }
        if ($this->container['active'] === null) {
            $invalidProperties[] = "'active' can't be null";
        }
        if ($this->container['age_group'] === null) {
            $invalidProperties[] = "'age_group' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['can_change_status'] === null) {
            $invalidProperties[] = "'can_change_status' can't be null";
        }
        if ($this->container['can_remove'] === null) {
            $invalidProperties[] = "'can_remove' can't be null";
        }
        if ($this->container['birth_date'] === null) {
            $invalidProperties[] = "'birth_date' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets member_guid
     *
     * @return string
     */
    public function getMemberGuid()
    {
        return $this->container['member_guid'];
    }

    /**
     * Sets member_guid
     *
     * @param string $member_guid Unique ID that only can only be used to modify or delete members in the cart.  Once the checkout is complete or canceled, this ID no longer has any meaning.
     *
     * @return $this
     */
    public function setMemberGuid($member_guid)
    {
        $this->container['member_guid'] = $member_guid;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name First name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name Last name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets primary_member
     *
     * @return bool
     */
    public function getPrimaryMember()
    {
        return $this->container['primary_member'];
    }

    /**
     * Sets primary_member
     *
     * @param bool $primary_member Value is `true` if this is the primary member.  There can only be 1 primary member.
     *
     * @return $this
     */
    public function setPrimaryMember($primary_member)
    {
        $this->container['primary_member'] = $primary_member;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active Value is `true` if the member will be active in the membership once checkout is complete.
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets age_group
     *
     * @return \Swagger\Client\Model\InlineResponse20010AgeGroup
     */
    public function getAgeGroup()
    {
        return $this->container['age_group'];
    }

    /**
     * Sets age_group
     *
     * @param \Swagger\Client\Model\InlineResponse20010AgeGroup $age_group age_group
     *
     * @return $this
     */
    public function setAgeGroup($age_group)
    {
        $this->container['age_group'] = $age_group;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Email address
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets can_change_status
     *
     * @return bool
     */
    public function getCanChangeStatus()
    {
        return $this->container['can_change_status'];
    }

    /**
     * Sets can_change_status
     *
     * @param bool $can_change_status Value is `true` if the `active` flag can be changed depending on membership type.
     *
     * @return $this
     */
    public function setCanChangeStatus($can_change_status)
    {
        $this->container['can_change_status'] = $can_change_status;

        return $this;
    }

    /**
     * Gets can_remove
     *
     * @return bool
     */
    public function getCanRemove()
    {
        return $this->container['can_remove'];
    }

    /**
     * Sets can_remove
     *
     * @param bool $can_remove Value is `true` if this member is allowed to be removed from the cart.
     *
     * @return $this
     */
    public function setCanRemove($can_remove)
    {
        $this->container['can_remove'] = $can_remove;

        return $this;
    }

    /**
     * Gets birth_date
     *
     * @return string
     */
    public function getBirthDate()
    {
        return $this->container['birth_date'];
    }

    /**
     * Sets birth_date
     *
     * @param string $birth_date Birth date
     *
     * @return $this
     */
    public function setBirthDate($birth_date)
    {
        $this->container['birth_date'] = $birth_date;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


