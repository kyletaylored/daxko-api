<?php
/**
 * InlineResponse2008
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
 * InlineResponse2008 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2008 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_8';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'signature_type' => 'string',
        'agreements' => '\Swagger\Client\Model\InlineResponse2008Agreements[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'signature_type' => null,
        'agreements' => null
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
        'signature_type' => 'signature_type',
        'agreements' => 'agreements'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'signature_type' => 'setSignatureType',
        'agreements' => 'setAgreements'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'signature_type' => 'getSignatureType',
        'agreements' => 'getAgreements'
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

    const SIGNATURE_TYPE_TYPE_NAME = 'type_name';
    const SIGNATURE_TYPE_SIGNATURE = 'signature';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSignatureTypeAllowableValues()
    {
        return [
            self::SIGNATURE_TYPE_TYPE_NAME,
            self::SIGNATURE_TYPE_SIGNATURE,
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
        $this->container['signature_type'] = isset($data['signature_type']) ? $data['signature_type'] : null;
        $this->container['agreements'] = isset($data['agreements']) ? $data['agreements'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['signature_type'] === null) {
            $invalidProperties[] = "'signature_type' can't be null";
        }
        $allowedValues = $this->getSignatureTypeAllowableValues();
        if (!is_null($this->container['signature_type']) && !in_array($this->container['signature_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'signature_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['agreements'] === null) {
            $invalidProperties[] = "'agreements' can't be null";
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
     * Gets signature_type
     *
     * @return string
     */
    public function getSignatureType()
    {
        return $this->container['signature_type'];
    }

    /**
     * Sets signature_type
     *
     * @param string $signature_type If set to `type_name`, then these agreements are set up to accept a typed name as the signature.  If set to `signature`, then these agreements are set up to accept a signature image.
     *
     * @return $this
     */
    public function setSignatureType($signature_type)
    {
        $allowedValues = $this->getSignatureTypeAllowableValues();
        if (!in_array($signature_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'signature_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['signature_type'] = $signature_type;

        return $this;
    }

    /**
     * Gets agreements
     *
     * @return \Swagger\Client\Model\InlineResponse2008Agreements[]
     */
    public function getAgreements()
    {
        return $this->container['agreements'];
    }

    /**
     * Sets agreements
     *
     * @param \Swagger\Client\Model\InlineResponse2008Agreements[] $agreements The list of agreements
     *
     * @return $this
     */
    public function setAgreements($agreements)
    {
        $this->container['agreements'] = $agreements;

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


