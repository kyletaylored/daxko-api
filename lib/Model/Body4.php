<?php
/**
 * Body4
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
 * Body4 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Body4 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'body_4';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'membership_type_id' => 'string',
        'unit_id' => 'string',
        'registration_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'membership_type_id' => null,
        'unit_id' => null,
        'registration_type' => null
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
        'membership_type_id' => 'membership_type_id',
        'unit_id' => 'unit_id',
        'registration_type' => 'registration_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'membership_type_id' => 'setMembershipTypeId',
        'unit_id' => 'setUnitId',
        'registration_type' => 'setRegistrationType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'membership_type_id' => 'getMembershipTypeId',
        'unit_id' => 'getUnitId',
        'registration_type' => 'getRegistrationType'
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

    const REGISTRATION_TYPE_ONLINE = 'online';
    const REGISTRATION_TYPE_IN_HOUSE = 'in_house';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRegistrationTypeAllowableValues()
    {
        return [
            self::REGISTRATION_TYPE_ONLINE,
            self::REGISTRATION_TYPE_IN_HOUSE,
        ];
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
        $this->container['membership_type_id'] = isset($data['membership_type_id']) ? $data['membership_type_id'] : null;
        $this->container['unit_id'] = isset($data['unit_id']) ? $data['unit_id'] : null;
        $this->container['registration_type'] = isset($data['registration_type']) ? $data['registration_type'] : 'online';
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['membership_type_id'] === null) {
            $invalidProperties[] = "'membership_type_id' can't be null";
        }
        if ($this->container['unit_id'] === null) {
            $invalidProperties[] = "'unit_id' can't be null";
        }
        $allowedValues = $this->getRegistrationTypeAllowableValues();
        if (!is_null($this->container['registration_type']) && !in_array($this->container['registration_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'registration_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets membership_type_id
     *
     * @return string
     */
    public function getMembershipTypeId()
    {
        return $this->container['membership_type_id'];
    }

    /**
     * Sets membership_type_id
     *
     * @param string $membership_type_id Membership type id to start renewal process with.
     *
     * @return $this
     */
    public function setMembershipTypeId($membership_type_id)
    {
        $this->container['membership_type_id'] = $membership_type_id;

        return $this;
    }

    /**
     * Gets unit_id
     *
     * @return string
     */
    public function getUnitId()
    {
        return $this->container['unit_id'];
    }

    /**
     * Sets unit_id
     *
     * @param string $unit_id Unit ID to renew
     *
     * @return $this
     */
    public function setUnitId($unit_id)
    {
        $this->container['unit_id'] = $unit_id;

        return $this;
    }

    /**
     * Gets registration_type
     *
     * @return string
     */
    public function getRegistrationType()
    {
        return $this->container['registration_type'];
    }

    /**
     * Sets registration_type
     *
     * @param string $registration_type Sets the context of the registration
     *
     * @return $this
     */
    public function setRegistrationType($registration_type)
    {
        $allowedValues = $this->getRegistrationTypeAllowableValues();
        if (!is_null($registration_type) && !in_array($registration_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'registration_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['registration_type'] = $registration_type;

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


