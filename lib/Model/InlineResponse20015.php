<?php
/**
 * InlineResponse20015
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
 * InlineResponse20015 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20015 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_15';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'description' => 'string',
        'program' => '\Swagger\Client\Model\InlineResponse20015Program',
        'restrictions' => '\Swagger\Client\Model\InlineResponse20015Restrictions',
        'location' => '\Swagger\Client\Model\InlineResponse20015Location',
        'categories' => '\Swagger\Client\Model\InlineResponse20015Categories[]',
        'details' => '\Swagger\Client\Model\InlineResponse20015Details[]',
        'fees' => '\Swagger\Client\Model\InlineResponse20015Fees[]',
        'agreements' => '\Swagger\Client\Model\InlineResponse20015Agreements[]',
        'tax_deductible' => 'bool',
        'allow_online_payment_scheduling' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'program' => null,
        'restrictions' => null,
        'location' => null,
        'categories' => null,
        'details' => null,
        'fees' => null,
        'agreements' => null,
        'tax_deductible' => null,
        'allow_online_payment_scheduling' => null
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
        'id' => 'id',
        'name' => 'name',
        'description' => 'description',
        'program' => 'program',
        'restrictions' => 'restrictions',
        'location' => 'location',
        'categories' => 'categories',
        'details' => 'details',
        'fees' => 'fees',
        'agreements' => 'agreements',
        'tax_deductible' => 'tax_deductible',
        'allow_online_payment_scheduling' => 'allow_online_payment_scheduling'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'description' => 'setDescription',
        'program' => 'setProgram',
        'restrictions' => 'setRestrictions',
        'location' => 'setLocation',
        'categories' => 'setCategories',
        'details' => 'setDetails',
        'fees' => 'setFees',
        'agreements' => 'setAgreements',
        'tax_deductible' => 'setTaxDeductible',
        'allow_online_payment_scheduling' => 'setAllowOnlinePaymentScheduling'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'description' => 'getDescription',
        'program' => 'getProgram',
        'restrictions' => 'getRestrictions',
        'location' => 'getLocation',
        'categories' => 'getCategories',
        'details' => 'getDetails',
        'fees' => 'getFees',
        'agreements' => 'getAgreements',
        'tax_deductible' => 'getTaxDeductible',
        'allow_online_payment_scheduling' => 'getAllowOnlinePaymentScheduling'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['program'] = isset($data['program']) ? $data['program'] : null;
        $this->container['restrictions'] = isset($data['restrictions']) ? $data['restrictions'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['fees'] = isset($data['fees']) ? $data['fees'] : null;
        $this->container['agreements'] = isset($data['agreements']) ? $data['agreements'] : null;
        $this->container['tax_deductible'] = isset($data['tax_deductible']) ? $data['tax_deductible'] : null;
        $this->container['allow_online_payment_scheduling'] = isset($data['allow_online_payment_scheduling']) ? $data['allow_online_payment_scheduling'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['program'] === null) {
            $invalidProperties[] = "'program' can't be null";
        }
        if ($this->container['restrictions'] === null) {
            $invalidProperties[] = "'restrictions' can't be null";
        }
        if ($this->container['location'] === null) {
            $invalidProperties[] = "'location' can't be null";
        }
        if ($this->container['categories'] === null) {
            $invalidProperties[] = "'categories' can't be null";
        }
        if ($this->container['details'] === null) {
            $invalidProperties[] = "'details' can't be null";
        }
        if ($this->container['fees'] === null) {
            $invalidProperties[] = "'fees' can't be null";
        }
        if ($this->container['agreements'] === null) {
            $invalidProperties[] = "'agreements' can't be null";
        }
        if ($this->container['tax_deductible'] === null) {
            $invalidProperties[] = "'tax_deductible' can't be null";
        }
        if ($this->container['allow_online_payment_scheduling'] === null) {
            $invalidProperties[] = "'allow_online_payment_scheduling' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Offering id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Offering name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Offering description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets program
     *
     * @return \Swagger\Client\Model\InlineResponse20015Program
     */
    public function getProgram()
    {
        return $this->container['program'];
    }

    /**
     * Sets program
     *
     * @param \Swagger\Client\Model\InlineResponse20015Program $program program
     *
     * @return $this
     */
    public function setProgram($program)
    {
        $this->container['program'] = $program;

        return $this;
    }

    /**
     * Gets restrictions
     *
     * @return \Swagger\Client\Model\InlineResponse20015Restrictions
     */
    public function getRestrictions()
    {
        return $this->container['restrictions'];
    }

    /**
     * Sets restrictions
     *
     * @param \Swagger\Client\Model\InlineResponse20015Restrictions $restrictions restrictions
     *
     * @return $this
     */
    public function setRestrictions($restrictions)
    {
        $this->container['restrictions'] = $restrictions;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \Swagger\Client\Model\InlineResponse20015Location
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \Swagger\Client\Model\InlineResponse20015Location $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return \Swagger\Client\Model\InlineResponse20015Categories[]
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param \Swagger\Client\Model\InlineResponse20015Categories[] $categories Categories that offering is a part of
     *
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets details
     *
     * @return \Swagger\Client\Model\InlineResponse20015Details[]
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param \Swagger\Client\Model\InlineResponse20015Details[] $details details
     *
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets fees
     *
     * @return \Swagger\Client\Model\InlineResponse20015Fees[]
     */
    public function getFees()
    {
        return $this->container['fees'];
    }

    /**
     * Sets fees
     *
     * @param \Swagger\Client\Model\InlineResponse20015Fees[] $fees Extra fees (registration fee, late fee)
     *
     * @return $this
     */
    public function setFees($fees)
    {
        $this->container['fees'] = $fees;

        return $this;
    }

    /**
     * Gets agreements
     *
     * @return \Swagger\Client\Model\InlineResponse20015Agreements[]
     */
    public function getAgreements()
    {
        return $this->container['agreements'];
    }

    /**
     * Sets agreements
     *
     * @param \Swagger\Client\Model\InlineResponse20015Agreements[] $agreements Agreements that must be accepted during registration
     *
     * @return $this
     */
    public function setAgreements($agreements)
    {
        $this->container['agreements'] = $agreements;

        return $this;
    }

    /**
     * Gets tax_deductible
     *
     * @return bool
     */
    public function getTaxDeductible()
    {
        return $this->container['tax_deductible'];
    }

    /**
     * Sets tax_deductible
     *
     * @param bool $tax_deductible Indicates if the offering is tax deductible
     *
     * @return $this
     */
    public function setTaxDeductible($tax_deductible)
    {
        $this->container['tax_deductible'] = $tax_deductible;

        return $this;
    }

    /**
     * Gets allow_online_payment_scheduling
     *
     * @return bool
     */
    public function getAllowOnlinePaymentScheduling()
    {
        return $this->container['allow_online_payment_scheduling'];
    }

    /**
     * Sets allow_online_payment_scheduling
     *
     * @param bool $allow_online_payment_scheduling If true, the member is allowed to register and schedule the future balance based on the due date.  If false, everything is due at time of registration.
     *
     * @return $this
     */
    public function setAllowOnlinePaymentScheduling($allow_online_payment_scheduling)
    {
        $this->container['allow_online_payment_scheduling'] = $allow_online_payment_scheduling;

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


