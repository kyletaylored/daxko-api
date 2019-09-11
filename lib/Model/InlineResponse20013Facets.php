<?php
/**
 * InlineResponse20013Facets
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
 * InlineResponse20013Facets Class Doc Comment
 *
 * @category Class
 * @description Statistical information based on the current query.  This property will only exist if &#x60;include_facets&#x60; query parameter is true.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20013Facets implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_13_facets';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'locations' => '\Swagger\Client\Model\InlineResponse20013FacetsLocations[]',
        'categories' => '\Swagger\Client\Model\InlineResponse20013FacetsCategories',
        'days_of_week' => '\Swagger\Client\Model\InlineResponse20013FacetsDaysOfWeek',
        'programs' => '\Swagger\Client\Model\InlineResponse20013FacetsPrograms[]',
        'time_ranges' => '\Swagger\Client\Model\InlineResponse20013FacetsTimeRanges[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'locations' => null,
        'categories' => null,
        'days_of_week' => null,
        'programs' => null,
        'time_ranges' => null
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
        'locations' => 'locations',
        'categories' => 'categories',
        'days_of_week' => 'days_of_week',
        'programs' => 'programs',
        'time_ranges' => 'time_ranges'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'locations' => 'setLocations',
        'categories' => 'setCategories',
        'days_of_week' => 'setDaysOfWeek',
        'programs' => 'setPrograms',
        'time_ranges' => 'setTimeRanges'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'locations' => 'getLocations',
        'categories' => 'getCategories',
        'days_of_week' => 'getDaysOfWeek',
        'programs' => 'getPrograms',
        'time_ranges' => 'getTimeRanges'
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
        $this->container['locations'] = isset($data['locations']) ? $data['locations'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['days_of_week'] = isset($data['days_of_week']) ? $data['days_of_week'] : null;
        $this->container['programs'] = isset($data['programs']) ? $data['programs'] : null;
        $this->container['time_ranges'] = isset($data['time_ranges']) ? $data['time_ranges'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['locations'] === null) {
            $invalidProperties[] = "'locations' can't be null";
        }
        if ($this->container['categories'] === null) {
            $invalidProperties[] = "'categories' can't be null";
        }
        if ($this->container['days_of_week'] === null) {
            $invalidProperties[] = "'days_of_week' can't be null";
        }
        if ($this->container['programs'] === null) {
            $invalidProperties[] = "'programs' can't be null";
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
     * Gets locations
     *
     * @return \Swagger\Client\Model\InlineResponse20013FacetsLocations[]
     */
    public function getLocations()
    {
        return $this->container['locations'];
    }

    /**
     * Sets locations
     *
     * @param \Swagger\Client\Model\InlineResponse20013FacetsLocations[] $locations Location stats
     *
     * @return $this
     */
    public function setLocations($locations)
    {
        $this->container['locations'] = $locations;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return \Swagger\Client\Model\InlineResponse20013FacetsCategories
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param \Swagger\Client\Model\InlineResponse20013FacetsCategories $categories categories
     *
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets days_of_week
     *
     * @return \Swagger\Client\Model\InlineResponse20013FacetsDaysOfWeek
     */
    public function getDaysOfWeek()
    {
        return $this->container['days_of_week'];
    }

    /**
     * Sets days_of_week
     *
     * @param \Swagger\Client\Model\InlineResponse20013FacetsDaysOfWeek $days_of_week days_of_week
     *
     * @return $this
     */
    public function setDaysOfWeek($days_of_week)
    {
        $this->container['days_of_week'] = $days_of_week;

        return $this;
    }

    /**
     * Gets programs
     *
     * @return \Swagger\Client\Model\InlineResponse20013FacetsPrograms[]
     */
    public function getPrograms()
    {
        return $this->container['programs'];
    }

    /**
     * Sets programs
     *
     * @param \Swagger\Client\Model\InlineResponse20013FacetsPrograms[] $programs Program stats
     *
     * @return $this
     */
    public function setPrograms($programs)
    {
        $this->container['programs'] = $programs;

        return $this;
    }

    /**
     * Gets time_ranges
     *
     * @return \Swagger\Client\Model\InlineResponse20013FacetsTimeRanges[]
     */
    public function getTimeRanges()
    {
        return $this->container['time_ranges'];
    }

    /**
     * Sets time_ranges
     *
     * @param \Swagger\Client\Model\InlineResponse20013FacetsTimeRanges[] $time_ranges Time range stats.  This property will only exist if the `time_range_facets` query parameter is supplied.
     *
     * @return $this
     */
    public function setTimeRanges($time_ranges)
    {
        $this->container['time_ranges'] = $time_ranges;

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


