<?php
/**
 * HandoverDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  Bol\Retailer
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * v9 - Retailer API
 *
 * The bol.com API for retailers.
 *
 * OpenAPI spec version: 9.x
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.32
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Bol\Retailer\Model;

use \ArrayAccess;
use \Bol\Retailer\ObjectSerializer;

/**
 * HandoverDetails Class Doc Comment
 *
 * @category Class
 * @package  Bol\Retailer
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HandoverDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HandoverDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'meets_customer_expectation' => 'bool',
        'earliest_handover_date_time' => '\DateTime',
        'latest_handover_date_time' => '\DateTime',
        'collection_method' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'meets_customer_expectation' => null,
        'earliest_handover_date_time' => 'date-time',
        'latest_handover_date_time' => 'date-time',
        'collection_method' => null
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
        'meets_customer_expectation' => 'meetsCustomerExpectation',
        'earliest_handover_date_time' => 'earliestHandoverDateTime',
        'latest_handover_date_time' => 'latestHandoverDateTime',
        'collection_method' => 'collectionMethod'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'meets_customer_expectation' => 'setMeetsCustomerExpectation',
        'earliest_handover_date_time' => 'setEarliestHandoverDateTime',
        'latest_handover_date_time' => 'setLatestHandoverDateTime',
        'collection_method' => 'setCollectionMethod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'meets_customer_expectation' => 'getMeetsCustomerExpectation',
        'earliest_handover_date_time' => 'getEarliestHandoverDateTime',
        'latest_handover_date_time' => 'getLatestHandoverDateTime',
        'collection_method' => 'getCollectionMethod'
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

    const COLLECTION_METHOD_DROP_OFF = 'DROP_OFF';
    const COLLECTION_METHOD_PICK_UP = 'PICK_UP';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCollectionMethodAllowableValues()
    {
        return [
            self::COLLECTION_METHOD_DROP_OFF,
            self::COLLECTION_METHOD_PICK_UP,
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
        $this->container['meets_customer_expectation'] = isset($data['meets_customer_expectation']) ? $data['meets_customer_expectation'] : null;
        $this->container['earliest_handover_date_time'] = isset($data['earliest_handover_date_time']) ? $data['earliest_handover_date_time'] : null;
        $this->container['latest_handover_date_time'] = isset($data['latest_handover_date_time']) ? $data['latest_handover_date_time'] : null;
        $this->container['collection_method'] = isset($data['collection_method']) ? $data['collection_method'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCollectionMethodAllowableValues();
        if (!is_null($this->container['collection_method']) && !in_array($this->container['collection_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'collection_method', must be one of '%s'",
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
     * Gets meets_customer_expectation
     *
     * @return bool
     */
    public function getMeetsCustomerExpectation()
    {
        return $this->container['meets_customer_expectation'];
    }

    /**
     * Sets meets_customer_expectation
     *
     * @param bool $meets_customer_expectation Indicates if you can use this label without receiving a strike if you handover before the latestHandoverDateTime. If this field is 'false' you can still buy and use this label but it will have negative consequences on your performance score because the order will be delivered too early or too late.
     *
     * @return $this
     */
    public function setMeetsCustomerExpectation($meets_customer_expectation)
    {
        $this->container['meets_customer_expectation'] = $meets_customer_expectation;

        return $this;
    }

    /**
     * Gets earliest_handover_date_time
     *
     * @return \DateTime
     */
    public function getEarliestHandoverDateTime()
    {
        return $this->container['earliest_handover_date_time'];
    }

    /**
     * Sets earliest_handover_date_time
     *
     * @param \DateTime $earliest_handover_date_time The date and time at which the parcel can be earliest  at the transporter to make sure your parcel is delivered on time.
     *
     * @return $this
     */
    public function setEarliestHandoverDateTime($earliest_handover_date_time)
    {
        $this->container['earliest_handover_date_time'] = $earliest_handover_date_time;

        return $this;
    }

    /**
     * Gets latest_handover_date_time
     *
     * @return \DateTime
     */
    public function getLatestHandoverDateTime()
    {
        return $this->container['latest_handover_date_time'];
    }

    /**
     * Sets latest_handover_date_time
     *
     * @param \DateTime $latest_handover_date_time The date and time at which the parcel must ultimately be at the transporter to make sure your parcel is delivered on time. If you handover after this date you will receive a strike because you order will be delivered too late.
     *
     * @return $this
     */
    public function setLatestHandoverDateTime($latest_handover_date_time)
    {
        $this->container['latest_handover_date_time'] = $latest_handover_date_time;

        return $this;
    }

    /**
     * Gets collection_method
     *
     * @return string
     */
    public function getCollectionMethod()
    {
        return $this->container['collection_method'];
    }

    /**
     * Sets collection_method
     *
     * @param string $collection_method The type of collection for this parcel.
     *
     * @return $this
     */
    public function setCollectionMethod($collection_method)
    {
        $allowedValues = $this->getCollectionMethodAllowableValues();
        if (!is_null($collection_method) && !in_array($collection_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'collection_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['collection_method'] = $collection_method;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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


