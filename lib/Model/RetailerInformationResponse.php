<?php
/**
 * RetailerInformationResponse
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
 * RetailerInformationResponse Class Doc Comment
 *
 * @category Class
 * @package  Bol\Retailer
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RetailerInformationResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RetailerInformationResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'retailer_id' => 'string',
        'display_name' => 'string',
        'company_name' => 'string',
        'vat_number' => 'string',
        'kvk_number' => 'string',
        'registration_date' => 'string',
        'top_retailer' => 'bool',
        'rating_method' => 'string',
        'retailer_rating' => '\Bol\Retailer\Model\RetailerRating',
        'retailer_review' => '\Bol\Retailer\Model\RetailerReview'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'retailer_id' => null,
        'display_name' => null,
        'company_name' => null,
        'vat_number' => null,
        'kvk_number' => null,
        'registration_date' => null,
        'top_retailer' => null,
        'rating_method' => null,
        'retailer_rating' => null,
        'retailer_review' => null
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
        'retailer_id' => 'retailerId',
        'display_name' => 'displayName',
        'company_name' => 'companyName',
        'vat_number' => 'vatNumber',
        'kvk_number' => 'kvkNumber',
        'registration_date' => 'registrationDate',
        'top_retailer' => 'topRetailer',
        'rating_method' => 'ratingMethod',
        'retailer_rating' => 'retailerRating',
        'retailer_review' => 'retailerReview'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'retailer_id' => 'setRetailerId',
        'display_name' => 'setDisplayName',
        'company_name' => 'setCompanyName',
        'vat_number' => 'setVatNumber',
        'kvk_number' => 'setKvkNumber',
        'registration_date' => 'setRegistrationDate',
        'top_retailer' => 'setTopRetailer',
        'rating_method' => 'setRatingMethod',
        'retailer_rating' => 'setRetailerRating',
        'retailer_review' => 'setRetailerReview'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'retailer_id' => 'getRetailerId',
        'display_name' => 'getDisplayName',
        'company_name' => 'getCompanyName',
        'vat_number' => 'getVatNumber',
        'kvk_number' => 'getKvkNumber',
        'registration_date' => 'getRegistrationDate',
        'top_retailer' => 'getTopRetailer',
        'rating_method' => 'getRatingMethod',
        'retailer_rating' => 'getRetailerRating',
        'retailer_review' => 'getRetailerReview'
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

    const RATING_METHOD_ALL_REVIEWS = 'ALL_REVIEWS';
    const RATING_METHOD_THREE_MONTHS = 'THREE_MONTHS';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRatingMethodAllowableValues()
    {
        return [
            self::RATING_METHOD_ALL_REVIEWS,
            self::RATING_METHOD_THREE_MONTHS,
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
        $this->container['retailer_id'] = isset($data['retailer_id']) ? $data['retailer_id'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['vat_number'] = isset($data['vat_number']) ? $data['vat_number'] : null;
        $this->container['kvk_number'] = isset($data['kvk_number']) ? $data['kvk_number'] : null;
        $this->container['registration_date'] = isset($data['registration_date']) ? $data['registration_date'] : null;
        $this->container['top_retailer'] = isset($data['top_retailer']) ? $data['top_retailer'] : null;
        $this->container['rating_method'] = isset($data['rating_method']) ? $data['rating_method'] : null;
        $this->container['retailer_rating'] = isset($data['retailer_rating']) ? $data['retailer_rating'] : null;
        $this->container['retailer_review'] = isset($data['retailer_review']) ? $data['retailer_review'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['retailer_id'] === null) {
            $invalidProperties[] = "'retailer_id' can't be null";
        }
        if ($this->container['display_name'] === null) {
            $invalidProperties[] = "'display_name' can't be null";
        }
        if ($this->container['company_name'] === null) {
            $invalidProperties[] = "'company_name' can't be null";
        }
        if ($this->container['vat_number'] === null) {
            $invalidProperties[] = "'vat_number' can't be null";
        }
        if ($this->container['kvk_number'] === null) {
            $invalidProperties[] = "'kvk_number' can't be null";
        }
        if ($this->container['registration_date'] === null) {
            $invalidProperties[] = "'registration_date' can't be null";
        }
        $allowedValues = $this->getRatingMethodAllowableValues();
        if (!is_null($this->container['rating_method']) && !in_array($this->container['rating_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'rating_method', must be one of '%s'",
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
     * Gets retailer_id
     *
     * @return string
     */
    public function getRetailerId()
    {
        return $this->container['retailer_id'];
    }

    /**
     * Sets retailer_id
     *
     * @param string $retailer_id The Id of the retailer which information belongs to.
     *
     * @return $this
     */
    public function setRetailerId($retailer_id)
    {
        $this->container['retailer_id'] = $retailer_id;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name The name of the retailer visible on bol.com
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string $company_name The company name of the retailer.
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets vat_number
     *
     * @return string
     */
    public function getVatNumber()
    {
        return $this->container['vat_number'];
    }

    /**
     * Sets vat_number
     *
     * @param string $vat_number The VAT number of the retailer.
     *
     * @return $this
     */
    public function setVatNumber($vat_number)
    {
        $this->container['vat_number'] = $vat_number;

        return $this;
    }

    /**
     * Gets kvk_number
     *
     * @return string
     */
    public function getKvkNumber()
    {
        return $this->container['kvk_number'];
    }

    /**
     * Sets kvk_number
     *
     * @param string $kvk_number The KVK number of the retailer.
     *
     * @return $this
     */
    public function setKvkNumber($kvk_number)
    {
        $this->container['kvk_number'] = $kvk_number;

        return $this;
    }

    /**
     * Gets registration_date
     *
     * @return string
     */
    public function getRegistrationDate()
    {
        return $this->container['registration_date'];
    }

    /**
     * Sets registration_date
     *
     * @param string $registration_date A date representing the registration date for the retailer within bol.com
     *
     * @return $this
     */
    public function setRegistrationDate($registration_date)
    {
        $this->container['registration_date'] = $registration_date;

        return $this;
    }

    /**
     * Gets top_retailer
     *
     * @return bool
     */
    public function getTopRetailer()
    {
        return $this->container['top_retailer'];
    }

    /**
     * Sets top_retailer
     *
     * @param bool $top_retailer Indication of retailer's being the top seller.
     *
     * @return $this
     */
    public function setTopRetailer($top_retailer)
    {
        $this->container['top_retailer'] = $top_retailer;

        return $this;
    }

    /**
     * Gets rating_method
     *
     * @return string
     */
    public function getRatingMethod()
    {
        return $this->container['rating_method'];
    }

    /**
     * Sets rating_method
     *
     * @param string $rating_method An identifier that identifies if the rating is calculated over the past three months or on all reviews for the retailer.
     *
     * @return $this
     */
    public function setRatingMethod($rating_method)
    {
        $allowedValues = $this->getRatingMethodAllowableValues();
        if (!is_null($rating_method) && !in_array($rating_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'rating_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['rating_method'] = $rating_method;

        return $this;
    }

    /**
     * Gets retailer_rating
     *
     * @return \Bol\Retailer\Model\RetailerRating
     */
    public function getRetailerRating()
    {
        return $this->container['retailer_rating'];
    }

    /**
     * Sets retailer_rating
     *
     * @param \Bol\Retailer\Model\RetailerRating $retailer_rating retailer_rating
     *
     * @return $this
     */
    public function setRetailerRating($retailer_rating)
    {
        $this->container['retailer_rating'] = $retailer_rating;

        return $this;
    }

    /**
     * Gets retailer_review
     *
     * @return \Bol\Retailer\Model\RetailerReview
     */
    public function getRetailerReview()
    {
        return $this->container['retailer_review'];
    }

    /**
     * Sets retailer_review
     *
     * @param \Bol\Retailer\Model\RetailerReview $retailer_review retailer_review
     *
     * @return $this
     */
    public function setRetailerReview($retailer_review)
    {
        $this->container['retailer_review'] = $retailer_review;

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
