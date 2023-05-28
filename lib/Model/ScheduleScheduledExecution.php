<?php
/**
 * ScheduleScheduledExecution
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
 * ScheduleScheduledExecution Class Doc Comment
 *
 * @category Class
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ScheduleScheduledExecution implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ScheduleScheduledExecution';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'actionId' => '\Supla\ApiClient\Model\ChannelFunctionActionIds',
        'actionParam' => '\Supla\ApiClient\Model\ChannelActionParams',
        'plannedTimestamp' => '\DateTime',
        'resultTimestamp' => '\DateTime',
        'failed' => 'bool',
        'result' => '\Supla\ApiClient\Model\ScheduleScheduledExecutionResult'
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
        'plannedTimestamp' => 'date-time',
        'resultTimestamp' => 'date-time',
        'failed' => null,
        'result' => null
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
        'plannedTimestamp' => 'plannedTimestamp',
        'resultTimestamp' => 'resultTimestamp',
        'failed' => 'failed',
        'result' => 'result'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'actionId' => 'setActionId',
        'actionParam' => 'setActionParam',
        'plannedTimestamp' => 'setPlannedTimestamp',
        'resultTimestamp' => 'setResultTimestamp',
        'failed' => 'setFailed',
        'result' => 'setResult'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'actionId' => 'getActionId',
        'actionParam' => 'getActionParam',
        'plannedTimestamp' => 'getPlannedTimestamp',
        'resultTimestamp' => 'getResultTimestamp',
        'failed' => 'getFailed',
        'result' => 'getResult'
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
        $this->container['plannedTimestamp'] = $data['plannedTimestamp'] ?? null;
        $this->container['resultTimestamp'] = $data['resultTimestamp'] ?? null;
        $this->container['failed'] = $data['failed'] ?? null;
        $this->container['result'] = $data['result'] ?? null;
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
     * Gets plannedTimestamp
     *
     * @return \DateTime|null
     */
    public function getPlannedTimestamp()
    {
        return $this->container['plannedTimestamp'];
    }

    /**
     * Sets plannedTimestamp
     *
     * @param \DateTime|null $plannedTimestamp plannedTimestamp
     *
     * @return self
     */
    public function setPlannedTimestamp($plannedTimestamp)
    {
        $this->container['plannedTimestamp'] = $plannedTimestamp;

        return $this;
    }

    /**
     * Gets resultTimestamp
     *
     * @return \DateTime|null
     */
    public function getResultTimestamp()
    {
        return $this->container['resultTimestamp'];
    }

    /**
     * Sets resultTimestamp
     *
     * @param \DateTime|null $resultTimestamp resultTimestamp
     *
     * @return self
     */
    public function setResultTimestamp($resultTimestamp)
    {
        $this->container['resultTimestamp'] = $resultTimestamp;

        return $this;
    }

    /**
     * Gets failed
     *
     * @return bool|null
     */
    public function getFailed()
    {
        return $this->container['failed'];
    }

    /**
     * Sets failed
     *
     * @param bool|null $failed failed
     *
     * @return self
     */
    public function setFailed($failed)
    {
        $this->container['failed'] = $failed;

        return $this;
    }

    /**
     * Gets result
     *
     * @return \Supla\ApiClient\Model\ScheduleScheduledExecutionResult|null
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     *
     * @param \Supla\ApiClient\Model\ScheduleScheduledExecutionResult|null $result result
     *
     * @return self
     */
    public function setResult($result)
    {
        $this->container['result'] = $result;

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

