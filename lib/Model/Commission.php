<?php
/**
 * Commission
 *
 * PHP version 5
 *
 * @category Class
 * @package  Bol\Retailer
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * v10 - Retailer API
 *
 * The bol.com API for retailers.  # Authentication Our API requires authentication via OAuth2. The detailed steps to authenticate are explained [here](https://api.bol.com/retailer/public/Retailer-API/authentication.html)   # Demo scenarios Our API specification includes examples of the responses you can expect. For more information as well as more examples, we refer you to the following resources:   - [Demo environment](https://api.bol.com/retailer/public/Retailer-API/demo/demo.html) - [Demo scenarios](https://api.bol.com/retailer/public/Retailer-API/demo/v10-index.html)
 *
 * OpenAPI spec version: 10.x-oas3-oas3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.60
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
 * Commission Class Doc Comment
 *
 * @category Class
 * @package  Bol\Retailer
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Commission implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Commission';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ean' => 'string',
        'condition' => 'string',
        'unit_price' => 'float',
        'fixed_amount' => 'float',
        'percentage' => 'float',
        'total_cost' => 'float',
        'total_cost_without_reduction' => 'float',
        'reductions' => '\Bol\Retailer\Model\Reduction[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ean' => null,
        'condition' => null,
        'unit_price' => null,
        'fixed_amount' => null,
        'percentage' => null,
        'total_cost' => null,
        'total_cost_without_reduction' => null,
        'reductions' => null
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
        'ean' => 'ean',
        'condition' => 'condition',
        'unit_price' => 'unitPrice',
        'fixed_amount' => 'fixedAmount',
        'percentage' => 'percentage',
        'total_cost' => 'totalCost',
        'total_cost_without_reduction' => 'totalCostWithoutReduction',
        'reductions' => 'reductions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ean' => 'setEan',
        'condition' => 'setCondition',
        'unit_price' => 'setUnitPrice',
        'fixed_amount' => 'setFixedAmount',
        'percentage' => 'setPercentage',
        'total_cost' => 'setTotalCost',
        'total_cost_without_reduction' => 'setTotalCostWithoutReduction',
        'reductions' => 'setReductions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ean' => 'getEan',
        'condition' => 'getCondition',
        'unit_price' => 'getUnitPrice',
        'fixed_amount' => 'getFixedAmount',
        'percentage' => 'getPercentage',
        'total_cost' => 'getTotalCost',
        'total_cost_without_reduction' => 'getTotalCostWithoutReduction',
        'reductions' => 'getReductions'
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
        $this->container['ean'] = isset($data['ean']) ? $data['ean'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['unit_price'] = isset($data['unit_price']) ? $data['unit_price'] : null;
        $this->container['fixed_amount'] = isset($data['fixed_amount']) ? $data['fixed_amount'] : null;
        $this->container['percentage'] = isset($data['percentage']) ? $data['percentage'] : null;
        $this->container['total_cost'] = isset($data['total_cost']) ? $data['total_cost'] : null;
        $this->container['total_cost_without_reduction'] = isset($data['total_cost_without_reduction']) ? $data['total_cost_without_reduction'] : null;
        $this->container['reductions'] = isset($data['reductions']) ? $data['reductions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['ean'] === null) {
            $invalidProperties[] = "'ean' can't be null";
        }
        if ($this->container['condition'] === null) {
            $invalidProperties[] = "'condition' can't be null";
        }
        if ($this->container['unit_price'] === null) {
            $invalidProperties[] = "'unit_price' can't be null";
        }
        if ($this->container['fixed_amount'] === null) {
            $invalidProperties[] = "'fixed_amount' can't be null";
        }
        if ($this->container['percentage'] === null) {
            $invalidProperties[] = "'percentage' can't be null";
        }
        if ($this->container['total_cost'] === null) {
            $invalidProperties[] = "'total_cost' can't be null";
        }
        if ($this->container['reductions'] === null) {
            $invalidProperties[] = "'reductions' can't be null";
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
     * Gets condition
     *
     * @return string
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param string $condition The condition of the offer.
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param float $unit_price The intended selling price per single unit up to 2 decimals precision, including VAT.
     *
     * @return $this
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets fixed_amount
     *
     * @return float
     */
    public function getFixedAmount()
    {
        return $this->container['fixed_amount'];
    }

    /**
     * Sets fixed_amount
     *
     * @param float $fixed_amount A fixed commission fee, including VAT.
     *
     * @return $this
     */
    public function setFixedAmount($fixed_amount)
    {
        $this->container['fixed_amount'] = $fixed_amount;

        return $this;
    }

    /**
     * Gets percentage
     *
     * @return float
     */
    public function getPercentage()
    {
        return $this->container['percentage'];
    }

    /**
     * Sets percentage
     *
     * @param float $percentage A percentage of commission, based on the intended selling price per unit, including VAT.
     *
     * @return $this
     */
    public function setPercentage($percentage)
    {
        $this->container['percentage'] = $percentage;

        return $this;
    }

    /**
     * Gets total_cost
     *
     * @return float
     */
    public function getTotalCost()
    {
        return $this->container['total_cost'];
    }

    /**
     * Sets total_cost
     *
     * @param float $total_cost The total commission for selling this product at bol.com. The price includes VAT for Dutch sellers, and excludes VAT for Belgium sellers.
     *
     * @return $this
     */
    public function setTotalCost($total_cost)
    {
        $this->container['total_cost'] = $total_cost;

        return $this;
    }

    /**
     * Gets total_cost_without_reduction
     *
     * @return float
     */
    public function getTotalCostWithoutReduction()
    {
        return $this->container['total_cost_without_reduction'];
    }

    /**
     * Sets total_cost_without_reduction
     *
     * @param float $total_cost_without_reduction The total commission for selling this product at bol.com without reductions including VAT.
     *
     * @return $this
     */
    public function setTotalCostWithoutReduction($total_cost_without_reduction)
    {
        $this->container['total_cost_without_reduction'] = $total_cost_without_reduction;

        return $this;
    }

    /**
     * Gets reductions
     *
     * @return \Bol\Retailer\Model\Reduction[]
     */
    public function getReductions()
    {
        return $this->container['reductions'];
    }

    /**
     * Sets reductions
     *
     * @param \Bol\Retailer\Model\Reduction[] $reductions reductions
     *
     * @return $this
     */
    public function setReductions($reductions)
    {
        $this->container['reductions'] = $reductions;

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
