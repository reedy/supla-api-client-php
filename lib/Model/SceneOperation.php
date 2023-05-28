<?php
/**
 * SceneOperation
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
 * The version of the OpenAPI document: 23.05
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
 * SceneOperation Class Doc Comment
 *
 * @category Class
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SceneOperation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SceneOperation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'actionId' => '\Supla\ApiClient\Model\ChannelFunctionActionIds',
        'actionParam' => '\Supla\ApiClient\Model\ChannelActionParams',
        'delayMs' => 'int',
        'waitForCompletion' => 'bool',
        'subjectType' => '\Supla\ApiClient\Model\ActionableSubjectTypeNames',
        'subjectId' => 'int',
        'owningSceneId' => 'int',
        'subject' => '\Supla\ApiClient\Model\ActionableSubject'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'actionId' => null,
        'actionParam' => null,
        'delayMs' => null,
        'waitForCompletion' => null,
        'subjectType' => null,
        'subjectId' => null,
        'owningSceneId' => null,
        'subject' => null
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
        'actionId' => 'actionId',
        'actionParam' => 'actionParam',
        'delayMs' => 'delayMs',
        'waitForCompletion' => 'waitForCompletion',
        'subjectType' => 'subjectType',
        'subjectId' => 'subjectId',
        'owningSceneId' => 'owningSceneId',
        'subject' => 'subject'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'actionId' => 'setActionId',
        'actionParam' => 'setActionParam',
        'delayMs' => 'setDelayMs',
        'waitForCompletion' => 'setWaitForCompletion',
        'subjectType' => 'setSubjectType',
        'subjectId' => 'setSubjectId',
        'owningSceneId' => 'setOwningSceneId',
        'subject' => 'setSubject'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'actionId' => 'getActionId',
        'actionParam' => 'getActionParam',
        'delayMs' => 'getDelayMs',
        'waitForCompletion' => 'getWaitForCompletion',
        'subjectType' => 'getSubjectType',
        'subjectId' => 'getSubjectId',
        'owningSceneId' => 'getOwningSceneId',
        'subject' => 'getSubject'
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
        $this->container['actionId'] = $data['actionId'] ?? null;
        $this->container['actionParam'] = $data['actionParam'] ?? null;
        $this->container['delayMs'] = $data['delayMs'] ?? null;
        $this->container['waitForCompletion'] = $data['waitForCompletion'] ?? null;
        $this->container['subjectType'] = $data['subjectType'] ?? null;
        $this->container['subjectId'] = $data['subjectId'] ?? null;
        $this->container['owningSceneId'] = $data['owningSceneId'] ?? null;
        $this->container['subject'] = $data['subject'] ?? null;
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
     * Gets actionId
     *
     * @return \Supla\ApiClient\Model\ChannelFunctionActionIds|null
     */
    public function getActionId()
    {
        return $this->container['actionId'];
    }

    /**
     * Sets actionId
     *
     * @param \Supla\ApiClient\Model\ChannelFunctionActionIds|null $actionId actionId
     *
     * @return self
     */
    public function setActionId($actionId)
    {
        $this->container['actionId'] = $actionId;

        return $this;
    }

    /**
     * Gets actionParam
     *
     * @return \Supla\ApiClient\Model\ChannelActionParams|null
     */
    public function getActionParam()
    {
        return $this->container['actionParam'];
    }

    /**
     * Sets actionParam
     *
     * @param \Supla\ApiClient\Model\ChannelActionParams|null $actionParam actionParam
     *
     * @return self
     */
    public function setActionParam($actionParam)
    {
        $this->container['actionParam'] = $actionParam;

        return $this;
    }

    /**
     * Gets delayMs
     *
     * @return int|null
     */
    public function getDelayMs()
    {
        return $this->container['delayMs'];
    }

    /**
     * Sets delayMs
     *
     * @param int|null $delayMs Delay before this operation in scene, in milliseconds.
     *
     * @return self
     */
    public function setDelayMs($delayMs)
    {
        $this->container['delayMs'] = $delayMs;

        return $this;
    }

    /**
     * Gets waitForCompletion
     *
     * @return bool|null
     */
    public function getWaitForCompletion()
    {
        return $this->container['waitForCompletion'];
    }

    /**
     * Sets waitForCompletion
     *
     * @param bool|null $waitForCompletion Whether to wait before proceeding with the scene until this operation completes.
     *
     * @return self
     */
    public function setWaitForCompletion($waitForCompletion)
    {
        $this->container['waitForCompletion'] = $waitForCompletion;

        return $this;
    }

    /**
     * Gets subjectType
     *
     * @return \Supla\ApiClient\Model\ActionableSubjectTypeNames|null
     */
    public function getSubjectType()
    {
        return $this->container['subjectType'];
    }

    /**
     * Sets subjectType
     *
     * @param \Supla\ApiClient\Model\ActionableSubjectTypeNames|null $subjectType subjectType
     *
     * @return self
     */
    public function setSubjectType($subjectType)
    {
        $this->container['subjectType'] = $subjectType;

        return $this;
    }

    /**
     * Gets subjectId
     *
     * @return int|null
     */
    public function getSubjectId()
    {
        return $this->container['subjectId'];
    }

    /**
     * Sets subjectId
     *
     * @param int|null $subjectId subjectId
     *
     * @return self
     */
    public function setSubjectId($subjectId)
    {
        $this->container['subjectId'] = $subjectId;

        return $this;
    }

    /**
     * Gets owningSceneId
     *
     * @return int|null
     */
    public function getOwningSceneId()
    {
        return $this->container['owningSceneId'];
    }

    /**
     * Sets owningSceneId
     *
     * @param int|null $owningSceneId ID of the scene that this operation belongs to.
     *
     * @return self
     */
    public function setOwningSceneId($owningSceneId)
    {
        $this->container['owningSceneId'] = $owningSceneId;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return \Supla\ApiClient\Model\ActionableSubject|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param \Supla\ApiClient\Model\ActionableSubject|null $subject subject
     *
     * @return self
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

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

