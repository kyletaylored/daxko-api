<?php
/**
 * InlineResponse20014Availability
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
 * InlineResponse20014Availability Class Doc Comment
 *
 * @category Class
 * @description Availability information
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20014Availability implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_14_availability';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'limited' => 'bool',
        'full' => 'bool',
        'has_waiting_list' => 'bool',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'limited' => null,
        'full' => null,
        'has_waiting_list' => null,
        'status' => null
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
        'limited' => 'limited',
        'full' => 'full',
        'has_waiting_list' => 'has_waiting_list',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'limited' => 'setLimited',
        'full' => 'setFull',
        'has_waiting_list' => 'setHasWaitingList',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'limited' => 'getLimited',
        'full' => 'getFull',
        'has_waiting_list' => 'getHasWaitingList',
        'status' => 'getStatus'
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

    const STATUS_UNKNOWN = 'unknown';
    const STATUS_FULL = 'full';
    const STATUS_AVAILABILE = 'availabile';
    const STATUS_FULL_WITH_WAITING_LIST = 'full_with_waiting_list';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_UNKNOWN,
            self::STATUS_FULL,
            self::STATUS_AVAILABILE,
            self::STATUS_FULL_WITH_WAITING_LIST,
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
        $this->container['limited'] = isset($data['limited']) ? $data['limited'] : null;
        $this->container['full'] = isset($data['full']) ? $data['full'] : null;
        $this->container['has_waiting_list'] = isset($data['has_waiting_list']) ? $data['has_waiting_list'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['limited'] === null) {
            $invalidProperties[] = "'limited' can't be null";
        }
        if ($this->container['full'] === null) {
            $invalidProperties[] = "'full' can't be null";
        }
        if ($this->container['has_waiting_list'] === null) {
            $invalidProperties[] = "'has_waiting_list' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * Gets limited
     *
     * @return bool
     */
    public function getLimited()
    {
        return $this->container['limited'];
    }

    /**
     * Sets limited
     *
     * @param bool $limited `true` if the offering has a limited number of seats, `false` if offering has an unlimited number of seats
     *
     * @return $this
     */
    public function setLimited($limited)
    {
        $this->container['limited'] = $limited;

        return $this;
    }

    /**
     * Gets full
     *
     * @return bool
     */
    public function getFull()
    {
        return $this->container['full'];
    }

    /**
     * Sets full
     *
     * @param bool $full `true` if the offering has reached maximum number of seats.  NOTE: for Child Care programs, this field is deprecated and the value will always be false for maintain backwards compatibility.  Use the `status` for Child Care programs.
     *
     * @return $this
     */
    public function setFull($full)
    {
        $this->container['full'] = $full;

        return $this;
    }

    /**
     * Gets has_waiting_list
     *
     * @return bool
     */
    public function getHasWaitingList()
    {
        return $this->container['has_waiting_list'];
    }

    /**
     * Sets has_waiting_list
     *
     * @param bool $has_waiting_list `true` if the offering has the waiting list option enabled
     *
     * @return $this
     */
    public function setHasWaitingList($has_waiting_list)
    {
        $this->container['has_waiting_list'] = $has_waiting_list;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Status of availability.  `unknown` will always be the value for child care programs (in order to determine availability of a child care program, you must use the Get program offering details API call.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

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

