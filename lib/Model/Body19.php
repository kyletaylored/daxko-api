<?php
/**
 * Body19
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
 * Body19 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Body19 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'body_19';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'agreement_ids' => 'string[]',
        'signee_name' => 'string',
        'signature_image_base64' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'agreement_ids' => null,
        'signee_name' => null,
        'signature_image_base64' => null
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
        'agreement_ids' => 'agreement_ids',
        'signee_name' => 'signee_name',
        'signature_image_base64' => 'signature_image_base64'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agreement_ids' => 'setAgreementIds',
        'signee_name' => 'setSigneeName',
        'signature_image_base64' => 'setSignatureImageBase64'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agreement_ids' => 'getAgreementIds',
        'signee_name' => 'getSigneeName',
        'signature_image_base64' => 'getSignatureImageBase64'
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
        $this->container['agreement_ids'] = isset($data['agreement_ids']) ? $data['agreement_ids'] : null;
        $this->container['signee_name'] = isset($data['signee_name']) ? $data['signee_name'] : null;
        $this->container['signature_image_base64'] = isset($data['signature_image_base64']) ? $data['signature_image_base64'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['agreement_ids'] === null) {
            $invalidProperties[] = "'agreement_ids' can't be null";
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
     * Gets agreement_ids
     *
     * @return string[]
     */
    public function getAgreementIds()
    {
        return $this->container['agreement_ids'];
    }

    /**
     * Sets agreement_ids
     *
     * @param string[] $agreement_ids A list of required `agreement_id`s for the product bundle.
     *
     * @return $this
     */
    public function setAgreementIds($agreement_ids)
    {
        $this->container['agreement_ids'] = $agreement_ids;

        return $this;
    }

    /**
     * Gets signee_name
     *
     * @return string
     */
    public function getSigneeName()
    {
        return $this->container['signee_name'];
    }

    /**
     * Sets signee_name
     *
     * @param string $signee_name The name of the signee.
     *
     * @return $this
     */
    public function setSigneeName($signee_name)
    {
        $this->container['signee_name'] = $signee_name;

        return $this;
    }

    /**
     * Gets signature_image_base64
     *
     * @return string
     */
    public function getSignatureImageBase64()
    {
        return $this->container['signature_image_base64'];
    }

    /**
     * Sets signature_image_base64
     *
     * @param string $signature_image_base64 Base64 encoded PNG signature image.  This should be a black and white image with the pen stroke being black like the one being generated by this [signature pad plugin](http://szimek.github.io/signature_pad/).
     *
     * @return $this
     */
    public function setSignatureImageBase64($signature_image_base64)
    {
        $this->container['signature_image_base64'] = $signature_image_base64;

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


