<?php
/**
 * OrderFulfilment
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
 * OrderFulfilment Class Doc Comment
 *
 * @category Class
 * @package  Bol\Retailer
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderFulfilment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderFulfilment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'method' => 'string',
        'distribution_party' => 'string',
        'latest_delivery_date' => '\DateTime',
        'exact_delivery_date' => '\DateTime',
        'expiry_date' => '\DateTime',
        'time_frame_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'method' => null,
        'distribution_party' => null,
        'latest_delivery_date' => 'date',
        'exact_delivery_date' => 'date',
        'expiry_date' => 'date',
        'time_frame_type' => null
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
        'method' => 'method',
        'distribution_party' => 'distributionParty',
        'latest_delivery_date' => 'latestDeliveryDate',
        'exact_delivery_date' => 'exactDeliveryDate',
        'expiry_date' => 'expiryDate',
        'time_frame_type' => 'timeFrameType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'method' => 'setMethod',
        'distribution_party' => 'setDistributionParty',
        'latest_delivery_date' => 'setLatestDeliveryDate',
        'exact_delivery_date' => 'setExactDeliveryDate',
        'expiry_date' => 'setExpiryDate',
        'time_frame_type' => 'setTimeFrameType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'method' => 'getMethod',
        'distribution_party' => 'getDistributionParty',
        'latest_delivery_date' => 'getLatestDeliveryDate',
        'exact_delivery_date' => 'getExactDeliveryDate',
        'expiry_date' => 'getExpiryDate',
        'time_frame_type' => 'getTimeFrameType'
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

    const DISTRIBUTION_PARTY_RETAILER = 'RETAILER';
    const DISTRIBUTION_PARTY_BOL = 'BOL';
    const TIME_FRAME_TYPE_REGULAR = 'REGULAR';
    const TIME_FRAME_TYPE_EVENING = 'EVENING';
    const TIME_FRAME_TYPE_APPOINTMENT = 'APPOINTMENT';
    const TIME_FRAME_TYPE_SAMEDAY = 'SAMEDAY';
    const TIME_FRAME_TYPE_SUNDAY = 'SUNDAY';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDistributionPartyAllowableValues()
    {
        return [
            self::DISTRIBUTION_PARTY_RETAILER,
            self::DISTRIBUTION_PARTY_BOL,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTimeFrameTypeAllowableValues()
    {
        return [
            self::TIME_FRAME_TYPE_REGULAR,
            self::TIME_FRAME_TYPE_EVENING,
            self::TIME_FRAME_TYPE_APPOINTMENT,
            self::TIME_FRAME_TYPE_SAMEDAY,
            self::TIME_FRAME_TYPE_SUNDAY,
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
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['distribution_party'] = isset($data['distribution_party']) ? $data['distribution_party'] : null;
        $this->container['latest_delivery_date'] = isset($data['latest_delivery_date']) ? $data['latest_delivery_date'] : null;
        $this->container['exact_delivery_date'] = isset($data['exact_delivery_date']) ? $data['exact_delivery_date'] : null;
        $this->container['expiry_date'] = isset($data['expiry_date']) ? $data['expiry_date'] : null;
        $this->container['time_frame_type'] = isset($data['time_frame_type']) ? $data['time_frame_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['method'] === null) {
            $invalidProperties[] = "'method' can't be null";
        }
        $allowedValues = $this->getDistributionPartyAllowableValues();
        if (!is_null($this->container['distribution_party']) && !in_array($this->container['distribution_party'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'distribution_party', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['time_frame_type'] === null) {
            $invalidProperties[] = "'time_frame_type' can't be null";
        }
        $allowedValues = $this->getTimeFrameTypeAllowableValues();
        if (!is_null($this->container['time_frame_type']) && !in_array($this->container['time_frame_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'time_frame_type', must be one of '%s'",
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
     * Gets method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param string $method The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB).
     *
     * @return $this
     */
    public function setMethod($method)
    {
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets distribution_party
     *
     * @return string
     */
    public function getDistributionParty()
    {
        return $this->container['distribution_party'];
    }

    /**
     * Sets distribution_party
     *
     * @param string $distribution_party The party that manages the distribution, either bol.com or the retailer itself.
     *
     * @return $this
     */
    public function setDistributionParty($distribution_party)
    {
        $allowedValues = $this->getDistributionPartyAllowableValues();
        if (!is_null($distribution_party) && !in_array($distribution_party, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'distribution_party', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['distribution_party'] = $distribution_party;

        return $this;
    }

    /**
     * Gets latest_delivery_date
     *
     * @return \DateTime
     */
    public function getLatestDeliveryDate()
    {
        return $this->container['latest_delivery_date'];
    }

    /**
     * Sets latest_delivery_date
     *
     * @param \DateTime $latest_delivery_date The ultimate delivery date at which this order must be delivered at the customer's shipping address. This field is empty in case the exactDeliveryDate is filled.
     *
     * @return $this
     */
    public function setLatestDeliveryDate($latest_delivery_date)
    {
        $this->container['latest_delivery_date'] = $latest_delivery_date;

        return $this;
    }

    /**
     * Gets exact_delivery_date
     *
     * @return \DateTime
     */
    public function getExactDeliveryDate()
    {
        return $this->container['exact_delivery_date'];
    }

    /**
     * Sets exact_delivery_date
     *
     * @param \DateTime $exact_delivery_date The exact delivery date at which this order must be delivered at the customer's shipping address. This field is only filled when the customer chose an exact date for delivery. This field is empty in case the latestDeliveryDate is filled.
     *
     * @return $this
     */
    public function setExactDeliveryDate($exact_delivery_date)
    {
        $this->container['exact_delivery_date'] = $exact_delivery_date;

        return $this;
    }

    /**
     * Gets expiry_date
     *
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->container['expiry_date'];
    }

    /**
     * Sets expiry_date
     *
     * @param \DateTime $expiry_date The date this order item will automatically expire and thereby cancelling this order item from the order.
     *
     * @return $this
     */
    public function setExpiryDate($expiry_date)
    {
        $this->container['expiry_date'] = $expiry_date;

        return $this;
    }

    /**
     * Gets time_frame_type
     *
     * @return string
     */
    public function getTimeFrameType()
    {
        return $this->container['time_frame_type'];
    }

    /**
     * Sets time_frame_type
     *
     * @param string $time_frame_type Delivery option selected by the customer.
     *
     * @return $this
     */
    public function setTimeFrameType($time_frame_type)
    {
        $allowedValues = $this->getTimeFrameTypeAllowableValues();
        if (!in_array($time_frame_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'time_frame_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['time_frame_type'] = $time_frame_type;

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
