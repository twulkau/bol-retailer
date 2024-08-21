<?php
/**
 * RetailerReview
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
 * RetailerReview Class Doc Comment
 *
 * @category Class
 * @package  Bol\Retailer
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RetailerReview implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RetailerReview';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'total_review_count' => 'int',
        'approval_percentage' => 'int',
        'positive_review_count' => 'int',
        'neutral_review_count' => 'int',
        'negative_review_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'total_review_count' => 'int32',
        'approval_percentage' => 'int32',
        'positive_review_count' => 'int32',
        'neutral_review_count' => 'int32',
        'negative_review_count' => 'int32'
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
        'total_review_count' => 'totalReviewCount',
        'approval_percentage' => 'approvalPercentage',
        'positive_review_count' => 'positiveReviewCount',
        'neutral_review_count' => 'neutralReviewCount',
        'negative_review_count' => 'negativeReviewCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total_review_count' => 'setTotalReviewCount',
        'approval_percentage' => 'setApprovalPercentage',
        'positive_review_count' => 'setPositiveReviewCount',
        'neutral_review_count' => 'setNeutralReviewCount',
        'negative_review_count' => 'setNegativeReviewCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total_review_count' => 'getTotalReviewCount',
        'approval_percentage' => 'getApprovalPercentage',
        'positive_review_count' => 'getPositiveReviewCount',
        'neutral_review_count' => 'getNeutralReviewCount',
        'negative_review_count' => 'getNegativeReviewCount'
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
        $this->container['total_review_count'] = isset($data['total_review_count']) ? $data['total_review_count'] : null;
        $this->container['approval_percentage'] = isset($data['approval_percentage']) ? $data['approval_percentage'] : null;
        $this->container['positive_review_count'] = isset($data['positive_review_count']) ? $data['positive_review_count'] : null;
        $this->container['neutral_review_count'] = isset($data['neutral_review_count']) ? $data['neutral_review_count'] : null;
        $this->container['negative_review_count'] = isset($data['negative_review_count']) ? $data['negative_review_count'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['total_review_count'] === null) {
            $invalidProperties[] = "'total_review_count' can't be null";
        }
        if ($this->container['positive_review_count'] === null) {
            $invalidProperties[] = "'positive_review_count' can't be null";
        }
        if ($this->container['neutral_review_count'] === null) {
            $invalidProperties[] = "'neutral_review_count' can't be null";
        }
        if ($this->container['negative_review_count'] === null) {
            $invalidProperties[] = "'negative_review_count' can't be null";
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
     * Gets total_review_count
     *
     * @return int
     */
    public function getTotalReviewCount()
    {
        return $this->container['total_review_count'];
    }

    /**
     * Sets total_review_count
     *
     * @param int $total_review_count The total amount of customer review during that rating method period.
     *
     * @return $this
     */
    public function setTotalReviewCount($total_review_count)
    {
        $this->container['total_review_count'] = $total_review_count;

        return $this;
    }

    /**
     * Gets approval_percentage
     *
     * @return int
     */
    public function getApprovalPercentage()
    {
        return $this->container['approval_percentage'];
    }

    /**
     * Sets approval_percentage
     *
     * @param int $approval_percentage The percentage of the amount of customer that rated the retailer either neutral or positive during the rating method period.
     *
     * @return $this
     */
    public function setApprovalPercentage($approval_percentage)
    {
        $this->container['approval_percentage'] = $approval_percentage;

        return $this;
    }

    /**
     * Gets positive_review_count
     *
     * @return int
     */
    public function getPositiveReviewCount()
    {
        return $this->container['positive_review_count'];
    }

    /**
     * Sets positive_review_count
     *
     * @param int $positive_review_count The amount of positive customer reviews during that rating method period.
     *
     * @return $this
     */
    public function setPositiveReviewCount($positive_review_count)
    {
        $this->container['positive_review_count'] = $positive_review_count;

        return $this;
    }

    /**
     * Gets neutral_review_count
     *
     * @return int
     */
    public function getNeutralReviewCount()
    {
        return $this->container['neutral_review_count'];
    }

    /**
     * Sets neutral_review_count
     *
     * @param int $neutral_review_count The amount of neutral customer reviews during that rating method period.
     *
     * @return $this
     */
    public function setNeutralReviewCount($neutral_review_count)
    {
        $this->container['neutral_review_count'] = $neutral_review_count;

        return $this;
    }

    /**
     * Gets negative_review_count
     *
     * @return int
     */
    public function getNegativeReviewCount()
    {
        return $this->container['negative_review_count'];
    }

    /**
     * Sets negative_review_count
     *
     * @param int $negative_review_count The amount of negative customer reviews during that rating method period.
     *
     * @return $this
     */
    public function setNegativeReviewCount($negative_review_count)
    {
        $this->container['negative_review_count'] = $negative_review_count;

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
