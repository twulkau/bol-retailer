<?php
/**
 * ReducedReturnItem
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
 * ReducedReturnItem Class Doc Comment
 *
 * @category Class
 * @package  Bol\Retailer
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReducedReturnItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReducedReturnItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'rma_id' => 'string',
        'order_id' => 'string',
        'ean' => 'string',
        'expected_quantity' => 'int',
        'return_reason' => '\Bol\Retailer\Model\ReturnReason',
        'handled' => 'bool',
        'processing_results' => '\Bol\Retailer\Model\ReturnProcessingResult[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'rma_id' => null,
        'order_id' => null,
        'ean' => null,
        'expected_quantity' => 'int32',
        'return_reason' => null,
        'handled' => null,
        'processing_results' => null
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
        'rma_id' => 'rmaId',
        'order_id' => 'orderId',
        'ean' => 'ean',
        'expected_quantity' => 'expectedQuantity',
        'return_reason' => 'returnReason',
        'handled' => 'handled',
        'processing_results' => 'processingResults'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rma_id' => 'setRmaId',
        'order_id' => 'setOrderId',
        'ean' => 'setEan',
        'expected_quantity' => 'setExpectedQuantity',
        'return_reason' => 'setReturnReason',
        'handled' => 'setHandled',
        'processing_results' => 'setProcessingResults'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rma_id' => 'getRmaId',
        'order_id' => 'getOrderId',
        'ean' => 'getEan',
        'expected_quantity' => 'getExpectedQuantity',
        'return_reason' => 'getReturnReason',
        'handled' => 'getHandled',
        'processing_results' => 'getProcessingResults'
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
        $this->container['rma_id'] = isset($data['rma_id']) ? $data['rma_id'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['ean'] = isset($data['ean']) ? $data['ean'] : null;
        $this->container['expected_quantity'] = isset($data['expected_quantity']) ? $data['expected_quantity'] : null;
        $this->container['return_reason'] = isset($data['return_reason']) ? $data['return_reason'] : null;
        $this->container['handled'] = isset($data['handled']) ? $data['handled'] : null;
        $this->container['processing_results'] = isset($data['processing_results']) ? $data['processing_results'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['rma_id'] === null) {
            $invalidProperties[] = "'rma_id' can't be null";
        }
        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if ($this->container['ean'] === null) {
            $invalidProperties[] = "'ean' can't be null";
        }
        if ($this->container['expected_quantity'] === null) {
            $invalidProperties[] = "'expected_quantity' can't be null";
        }
        if ($this->container['processing_results'] === null) {
            $invalidProperties[] = "'processing_results' can't be null";
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
     * Gets rma_id
     *
     * @return string
     */
    public function getRmaId()
    {
        return $this->container['rma_id'];
    }

    /**
     * Sets rma_id
     *
     * @param string $rma_id The RMA (Return Merchandise Authorization) identifier of the return.
     *
     * @return $this
     */
    public function setRmaId($rma_id)
    {
        $this->container['rma_id'] = $rma_id;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id The id of the customer order this return item is in.
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets ean
     *
     * @return string
     */
    public function getEan()
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean
     *
     * @param string $ean The EAN number associated with this product.
     *
     * @return $this
     */
    public function setEan($ean)
    {
        $this->container['ean'] = $ean;

        return $this;
    }

    /**
     * Gets expected_quantity
     *
     * @return int
     */
    public function getExpectedQuantity()
    {
        return $this->container['expected_quantity'];
    }

    /**
     * Sets expected_quantity
     *
     * @param int $expected_quantity The quantity that is expected to be returned by the customer. Note: this can be greater than 1 in case the customer ordered a quantity greater than 1 of the same product in the same customer order.
     *
     * @return $this
     */
    public function setExpectedQuantity($expected_quantity)
    {
        $this->container['expected_quantity'] = $expected_quantity;

        return $this;
    }

    /**
     * Gets return_reason
     *
     * @return \Bol\Retailer\Model\ReturnReason
     */
    public function getReturnReason()
    {
        return $this->container['return_reason'];
    }

    /**
     * Sets return_reason
     *
     * @param \Bol\Retailer\Model\ReturnReason $return_reason return_reason
     *
     * @return $this
     */
    public function setReturnReason($return_reason)
    {
        $this->container['return_reason'] = $return_reason;

        return $this;
    }

    /**
     * Gets handled
     *
     * @return bool
     */
    public function getHandled()
    {
        return $this->container['handled'];
    }

    /**
     * Sets handled
     *
     * @param bool $handled Indicates if this return item has been handled (by the retailer).
     *
     * @return $this
     */
    public function setHandled($handled)
    {
        $this->container['handled'] = $handled;

        return $this;
    }

    /**
     * Gets processing_results
     *
     * @return \Bol\Retailer\Model\ReturnProcessingResult[]
     */
    public function getProcessingResults()
    {
        return $this->container['processing_results'];
    }

    /**
     * Sets processing_results
     *
     * @param \Bol\Retailer\Model\ReturnProcessingResult[] $processing_results processing_results
     *
     * @return $this
     */
    public function setProcessingResults($processing_results)
    {
        $this->container['processing_results'] = $processing_results;

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


