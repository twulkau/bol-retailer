<?php
/**
 * ProductListRequest
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
 * ProductListRequest Class Doc Comment
 *
 * @category Class
 * @package  Bol\Retailer
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductListRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductListRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'country_code' => 'string',
        'search_term' => 'string',
        'category_id' => 'string',
        'filter_ranges' => '\Bol\Retailer\Model\ProductListFilterRange[]',
        'filter_values' => '\Bol\Retailer\Model\ProductListFilterValue[]',
        'sort' => 'string',
        'page' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'country_code' => null,
        'search_term' => null,
        'category_id' => null,
        'filter_ranges' => null,
        'filter_values' => null,
        'sort' => null,
        'page' => 'int32'
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
        'country_code' => 'countryCode',
        'search_term' => 'searchTerm',
        'category_id' => 'categoryId',
        'filter_ranges' => 'filterRanges',
        'filter_values' => 'filterValues',
        'sort' => 'sort',
        'page' => 'page'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country_code' => 'setCountryCode',
        'search_term' => 'setSearchTerm',
        'category_id' => 'setCategoryId',
        'filter_ranges' => 'setFilterRanges',
        'filter_values' => 'setFilterValues',
        'sort' => 'setSort',
        'page' => 'setPage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country_code' => 'getCountryCode',
        'search_term' => 'getSearchTerm',
        'category_id' => 'getCategoryId',
        'filter_ranges' => 'getFilterRanges',
        'filter_values' => 'getFilterValues',
        'sort' => 'getSort',
        'page' => 'getPage'
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

    const COUNTRY_CODE_NL = 'NL';
    const COUNTRY_CODE_BE = 'BE';
    const SORT_RELEVANCE = 'RELEVANCE';
    const SORT_POPULARITY = 'POPULARITY';
    const SORT_PRICE_ASC = 'PRICE_ASC';
    const SORT_PRICE_DESC = 'PRICE_DESC';
    const SORT_RELEASE_DATE = 'RELEASE_DATE';
    const SORT_RATING = 'RATING';
    const SORT_WISHLIST = 'WISHLIST';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCountryCodeAllowableValues()
    {
        return [
            self::COUNTRY_CODE_NL,
            self::COUNTRY_CODE_BE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSortAllowableValues()
    {
        return [
            self::SORT_RELEVANCE,
            self::SORT_POPULARITY,
            self::SORT_PRICE_ASC,
            self::SORT_PRICE_DESC,
            self::SORT_RELEASE_DATE,
            self::SORT_RATING,
            self::SORT_WISHLIST,
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
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['search_term'] = isset($data['search_term']) ? $data['search_term'] : null;
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['filter_ranges'] = isset($data['filter_ranges']) ? $data['filter_ranges'] : null;
        $this->container['filter_values'] = isset($data['filter_values']) ? $data['filter_values'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCountryCodeAllowableValues();
        if (!is_null($this->container['country_code']) && !in_array($this->container['country_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'country_code', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['search_term']) && (mb_strlen($this->container['search_term']) > 50)) {
            $invalidProperties[] = "invalid value for 'search_term', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['search_term']) && (mb_strlen($this->container['search_term']) < 1)) {
            $invalidProperties[] = "invalid value for 'search_term', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['category_id']) && (mb_strlen($this->container['category_id']) > 11)) {
            $invalidProperties[] = "invalid value for 'category_id', the character length must be smaller than or equal to 11.";
        }

        if (!is_null($this->container['category_id']) && (mb_strlen($this->container['category_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'category_id', the character length must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getSortAllowableValues();
        if (!is_null($this->container['sort']) && !in_array($this->container['sort'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'sort', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['page']) && ($this->container['page'] < 1)) {
            $invalidProperties[] = "invalid value for 'page', must be bigger than or equal to 1.";
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
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code The country for which the products will be retrieved. Default value: NL
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $allowedValues = $this->getCountryCodeAllowableValues();
        if (!is_null($country_code) && !in_array($country_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'country_code', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets search_term
     *
     * @return string
     */
    public function getSearchTerm()
    {
        return $this->container['search_term'];
    }

    /**
     * Sets search_term
     *
     * @param string $search_term The search term to get the associated products for.
     *
     * @return $this
     */
    public function setSearchTerm($search_term)
    {
        if (!is_null($search_term) && (mb_strlen($search_term) > 50)) {
            throw new \InvalidArgumentException('invalid length for $search_term when calling ProductListRequest., must be smaller than or equal to 50.');
        }
        if (!is_null($search_term) && (mb_strlen($search_term) < 1)) {
            throw new \InvalidArgumentException('invalid length for $search_term when calling ProductListRequest., must be bigger than or equal to 1.');
        }

        $this->container['search_term'] = $search_term;

        return $this;
    }

    /**
     * Gets category_id
     *
     * @return string
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param string $category_id The category to get the associated products for.
     *
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        if (!is_null($category_id) && (mb_strlen($category_id) > 11)) {
            throw new \InvalidArgumentException('invalid length for $category_id when calling ProductListRequest., must be smaller than or equal to 11.');
        }
        if (!is_null($category_id) && (mb_strlen($category_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $category_id when calling ProductListRequest., must be bigger than or equal to 1.');
        }

        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets filter_ranges
     *
     * @return \Bol\Retailer\Model\ProductListFilterRange[]
     */
    public function getFilterRanges()
    {
        return $this->container['filter_ranges'];
    }

    /**
     * Sets filter_ranges
     *
     * @param \Bol\Retailer\Model\ProductListFilterRange[] $filter_ranges The list of range filters to get associated products for.
     *
     * @return $this
     */
    public function setFilterRanges($filter_ranges)
    {
        $this->container['filter_ranges'] = $filter_ranges;

        return $this;
    }

    /**
     * Gets filter_values
     *
     * @return \Bol\Retailer\Model\ProductListFilterValue[]
     */
    public function getFilterValues()
    {
        return $this->container['filter_values'];
    }

    /**
     * Sets filter_values
     *
     * @param \Bol\Retailer\Model\ProductListFilterValue[] $filter_values The list of filter values in this filter.
     *
     * @return $this
     */
    public function setFilterValues($filter_values)
    {
        $this->container['filter_values'] = $filter_values;

        return $this;
    }

    /**
     * Gets sort
     *
     * @return string
     */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
     * Sets sort
     *
     * @param string $sort Determines the order of the products.
     *
     * @return $this
     */
    public function setSort($sort)
    {
        $allowedValues = $this->getSortAllowableValues();
        if (!is_null($sort) && !in_array($sort, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sort', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sort'] = $sort;

        return $this;
    }

    /**
     * Gets page
     *
     * @return int
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     *
     * @param int $page The requested page number with a page size of 50 items.
     *
     * @return $this
     */
    public function setPage($page)
    {

        if (!is_null($page) && ($page < 1)) {
            throw new \InvalidArgumentException('invalid value for $page when calling ProductListRequest., must be bigger than or equal to 1.');
        }

        $this->container['page'] = $page;

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

