<?php
/**
 * ReturnRequest
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
 * ReturnRequest Class Doc Comment
 *
 * @category Class
 * @package  Bol\Retailer
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReturnRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReturnRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'handling_result' => 'string',
        'quantity_returned' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'handling_result' => null,
        'quantity_returned' => 'int32'
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
        'handling_result' => 'handlingResult',
        'quantity_returned' => 'quantityReturned'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'handling_result' => 'setHandlingResult',
        'quantity_returned' => 'setQuantityReturned'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'handling_result' => 'getHandlingResult',
        'quantity_returned' => 'getQuantityReturned'
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

    const HANDLING_RESULT_RETURN_RECEIVED = 'RETURN_RECEIVED';
    const HANDLING_RESULT_EXCHANGE_PRODUCT = 'EXCHANGE_PRODUCT';
    const HANDLING_RESULT_RETURN_DOES_NOT_MEET_CONDITIONS = 'RETURN_DOES_NOT_MEET_CONDITIONS';
    const HANDLING_RESULT_REPAIR_PRODUCT = 'REPAIR_PRODUCT';
    const HANDLING_RESULT_CUSTOMER_KEEPS_PRODUCT_PAID = 'CUSTOMER_KEEPS_PRODUCT_PAID';
    const HANDLING_RESULT_STILL_APPROVED = 'STILL_APPROVED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHandlingResultAllowableValues()
    {
        return [
            self::HANDLING_RESULT_RETURN_RECEIVED,
            self::HANDLING_RESULT_EXCHANGE_PRODUCT,
            self::HANDLING_RESULT_RETURN_DOES_NOT_MEET_CONDITIONS,
            self::HANDLING_RESULT_REPAIR_PRODUCT,
            self::HANDLING_RESULT_CUSTOMER_KEEPS_PRODUCT_PAID,
            self::HANDLING_RESULT_STILL_APPROVED,
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
        $this->container['handling_result'] = isset($data['handling_result']) ? $data['handling_result'] : null;
        $this->container['quantity_returned'] = isset($data['quantity_returned']) ? $data['quantity_returned'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getHandlingResultAllowableValues();
        if (!is_null($this->container['handling_result']) && !in_array($this->container['handling_result'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'handling_result', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['quantity_returned'] === null) {
            $invalidProperties[] = "'quantity_returned' can't be null";
        }
        if (($this->container['quantity_returned'] > 9999)) {
            $invalidProperties[] = "invalid value for 'quantity_returned', must be smaller than or equal to 9999.";
        }

        if (($this->container['quantity_returned'] < 1)) {
            $invalidProperties[] = "invalid value for 'quantity_returned', must be bigger than or equal to 1.";
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
     * Gets handling_result
     *
     * @return string
     */
    public function getHandlingResult()
    {
        return $this->container['handling_result'];
    }

    /**
     * Sets handling_result
     *
     * @param string $handling_result The handling result requested by the retailer.
     *
     * @return $this
     */
    public function setHandlingResult($handling_result)
    {
        $allowedValues = $this->getHandlingResultAllowableValues();
        if (!is_null($handling_result) && !in_array($handling_result, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'handling_result', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['handling_result'] = $handling_result;

        return $this;
    }

    /**
     * Gets quantity_returned
     *
     * @return int
     */
    public function getQuantityReturned()
    {
        return $this->container['quantity_returned'];
    }

    /**
     * Sets quantity_returned
     *
     * @param int $quantity_returned The quantity of items returned.
     *
     * @return $this
     */
    public function setQuantityReturned($quantity_returned)
    {

        if (($quantity_returned > 9999)) {
            throw new \InvalidArgumentException('invalid value for $quantity_returned when calling ReturnRequest., must be smaller than or equal to 9999.');
        }
        if (($quantity_returned < 1)) {
            throw new \InvalidArgumentException('invalid value for $quantity_returned when calling ReturnRequest., must be bigger than or equal to 1.');
        }

        $this->container['quantity_returned'] = $quantity_returned;

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


