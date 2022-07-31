<?php
/**
 * InlineObject9
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SUPLA Cloud API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 22.07
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Supla\ApiClient\Model;

use \ArrayAccess;
use \Supla\ApiClient\ObjectSerializer;

/**
 * InlineObject9 Class Doc Comment
 *
 * @category Class
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineObject9 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_9';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'function' => '\Supla\ApiClient\Model\ChannelFunctionEnumNames',
        'sourceIcon' => 'int',
        'image1' => 'string',
        'image2' => 'string',
        'image3' => 'string',
        'image4' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'function' => null,
        'sourceIcon' => null,
        'image1' => 'byte',
        'image2' => 'byte',
        'image3' => 'byte',
        'image4' => 'byte'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'function' => 'function',
        'sourceIcon' => 'sourceIcon',
        'image1' => 'image1',
        'image2' => 'image2',
        'image3' => 'image3',
        'image4' => 'image4'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'function' => 'setFunction',
        'sourceIcon' => 'setSourceIcon',
        'image1' => 'setImage1',
        'image2' => 'setImage2',
        'image3' => 'setImage3',
        'image4' => 'setImage4'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'function' => 'getFunction',
        'sourceIcon' => 'getSourceIcon',
        'image1' => 'getImage1',
        'image2' => 'getImage2',
        'image3' => 'getImage3',
        'image4' => 'getImage4'
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
        return self::$openAPIModelName;
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
        $this->container['function'] = $data['function'] ?? null;
        $this->container['sourceIcon'] = $data['sourceIcon'] ?? null;
        $this->container['image1'] = $data['image1'] ?? null;
        $this->container['image2'] = $data['image2'] ?? null;
        $this->container['image3'] = $data['image3'] ?? null;
        $this->container['image4'] = $data['image4'] ?? null;
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
     * Gets function
     *
     * @return \Supla\ApiClient\Model\ChannelFunctionEnumNames|null
     */
    public function getFunction()
    {
        return $this->container['function'];
    }

    /**
     * Sets function
     *
     * @param \Supla\ApiClient\Model\ChannelFunctionEnumNames|null $function function
     *
     * @return self
     */
    public function setFunction($function)
    {
        $this->container['function'] = $function;

        return $this;
    }

    /**
     * Gets sourceIcon
     *
     * @return int|null
     */
    public function getSourceIcon()
    {
        return $this->container['sourceIcon'];
    }

    /**
     * Sets sourceIcon
     *
     * @param int|null $sourceIcon ID of an existing user icon to replace with these new files. Optional.
     *
     * @return self
     */
    public function setSourceIcon($sourceIcon)
    {
        $this->container['sourceIcon'] = $sourceIcon;

        return $this;
    }

    /**
     * Gets image1
     *
     * @return string|null
     */
    public function getImage1()
    {
        return $this->container['image1'];
    }

    /**
     * Sets image1
     *
     * @param string|null $image1 image1
     *
     * @return self
     */
    public function setImage1($image1)
    {
        $this->container['image1'] = $image1;

        return $this;
    }

    /**
     * Gets image2
     *
     * @return string|null
     */
    public function getImage2()
    {
        return $this->container['image2'];
    }

    /**
     * Sets image2
     *
     * @param string|null $image2 image2
     *
     * @return self
     */
    public function setImage2($image2)
    {
        $this->container['image2'] = $image2;

        return $this;
    }

    /**
     * Gets image3
     *
     * @return string|null
     */
    public function getImage3()
    {
        return $this->container['image3'];
    }

    /**
     * Sets image3
     *
     * @param string|null $image3 image3
     *
     * @return self
     */
    public function setImage3($image3)
    {
        $this->container['image3'] = $image3;

        return $this;
    }

    /**
     * Gets image4
     *
     * @return string|null
     */
    public function getImage4()
    {
        return $this->container['image4'];
    }

    /**
     * Sets image4
     *
     * @param string|null $image4 image4
     *
     * @return self
     */
    public function setImage4($image4)
    {
        $this->container['image4'] = $image4;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


