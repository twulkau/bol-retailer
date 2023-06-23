<?php
/**
 * AudioTracks
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
 * AudioTracks Class Doc Comment
 *
 * @category Class
 * @package  Bol\Retailer
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AudioTracks implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AudioTracks';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'disc_number' => 'string',
        'track_number' => 'string',
        'disc_side' => 'string',
        'title' => 'string',
        'artist_name' => 'string',
        'play_time' => 'string',
        'clip_url' => 'string',
        'clip_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'disc_number' => null,
        'track_number' => null,
        'disc_side' => null,
        'title' => null,
        'artist_name' => null,
        'play_time' => null,
        'clip_url' => null,
        'clip_type' => null
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
        'disc_number' => 'discNumber',
        'track_number' => 'trackNumber',
        'disc_side' => 'discSide',
        'title' => 'title',
        'artist_name' => 'artistName',
        'play_time' => 'playTime',
        'clip_url' => 'clipUrl',
        'clip_type' => 'clipType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'disc_number' => 'setDiscNumber',
        'track_number' => 'setTrackNumber',
        'disc_side' => 'setDiscSide',
        'title' => 'setTitle',
        'artist_name' => 'setArtistName',
        'play_time' => 'setPlayTime',
        'clip_url' => 'setClipUrl',
        'clip_type' => 'setClipType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'disc_number' => 'getDiscNumber',
        'track_number' => 'getTrackNumber',
        'disc_side' => 'getDiscSide',
        'title' => 'getTitle',
        'artist_name' => 'getArtistName',
        'play_time' => 'getPlayTime',
        'clip_url' => 'getClipUrl',
        'clip_type' => 'getClipType'
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
        $this->container['disc_number'] = isset($data['disc_number']) ? $data['disc_number'] : null;
        $this->container['track_number'] = isset($data['track_number']) ? $data['track_number'] : null;
        $this->container['disc_side'] = isset($data['disc_side']) ? $data['disc_side'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['artist_name'] = isset($data['artist_name']) ? $data['artist_name'] : null;
        $this->container['play_time'] = isset($data['play_time']) ? $data['play_time'] : null;
        $this->container['clip_url'] = isset($data['clip_url']) ? $data['clip_url'] : null;
        $this->container['clip_type'] = isset($data['clip_type']) ? $data['clip_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets disc_number
     *
     * @return string
     */
    public function getDiscNumber()
    {
        return $this->container['disc_number'];
    }

    /**
     * Sets disc_number
     *
     * @param string $disc_number The disc number within an album the audio track is stored on.
     *
     * @return $this
     */
    public function setDiscNumber($disc_number)
    {
        $this->container['disc_number'] = $disc_number;

        return $this;
    }

    /**
     * Gets track_number
     *
     * @return string
     */
    public function getTrackNumber()
    {
        return $this->container['track_number'];
    }

    /**
     * Sets track_number
     *
     * @param string $track_number The track number on the album.
     *
     * @return $this
     */
    public function setTrackNumber($track_number)
    {
        $this->container['track_number'] = $track_number;

        return $this;
    }

    /**
     * Gets disc_side
     *
     * @return string
     */
    public function getDiscSide()
    {
        return $this->container['disc_side'];
    }

    /**
     * Sets disc_side
     *
     * @param string $disc_side The disc side on which the audio track is stored on.
     *
     * @return $this
     */
    public function setDiscSide($disc_side)
    {
        $this->container['disc_side'] = $disc_side;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title The title of the audio track.
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets artist_name
     *
     * @return string
     */
    public function getArtistName()
    {
        return $this->container['artist_name'];
    }

    /**
     * Sets artist_name
     *
     * @param string $artist_name The name of the artist(s) performing the audio track.
     *
     * @return $this
     */
    public function setArtistName($artist_name)
    {
        $this->container['artist_name'] = $artist_name;

        return $this;
    }

    /**
     * Gets play_time
     *
     * @return string
     */
    public function getPlayTime()
    {
        return $this->container['play_time'];
    }

    /**
     * Sets play_time
     *
     * @param string $play_time The play time of the audio track.
     *
     * @return $this
     */
    public function setPlayTime($play_time)
    {
        $this->container['play_time'] = $play_time;

        return $this;
    }

    /**
     * Gets clip_url
     *
     * @return string
     */
    public function getClipUrl()
    {
        return $this->container['clip_url'];
    }

    /**
     * Sets clip_url
     *
     * @param string $clip_url The URL on which an audio clip of the audio track has been made available.
     *
     * @return $this
     */
    public function setClipUrl($clip_url)
    {
        $this->container['clip_url'] = $clip_url;

        return $this;
    }

    /**
     * Gets clip_type
     *
     * @return string
     */
    public function getClipType()
    {
        return $this->container['clip_type'];
    }

    /**
     * Sets clip_type
     *
     * @param string $clip_type The format in which the audio clip is available.
     *
     * @return $this
     */
    public function setClipType($clip_type)
    {
        $this->container['clip_type'] = $clip_type;

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


