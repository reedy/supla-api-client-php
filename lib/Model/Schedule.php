<?php
/**
 * Schedule
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
 * Schedule Class Doc Comment
 *
 * @category Class
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Schedule implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Schedule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'caption' => 'string',
        'subjectType' => '\Supla\ApiClient\Model\ActionableSubjectTypeNames',
        'subjectId' => 'int',
        'dateStart' => '\DateTime',
        'dateEnd' => '\DateTime',
        'retry' => 'bool',
        'enabled' => 'bool',
        'mode' => 'string',
        'config' => '\Supla\ApiClient\Model\ScheduleConfigEntry[]',
        'subject' => '\Supla\ApiClient\Model\ActionableSubject',
        'closestExecutions' => '\Supla\ApiClient\Model\ScheduleClosestExecutions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'caption' => null,
        'subjectType' => null,
        'subjectId' => null,
        'dateStart' => 'date-time',
        'dateEnd' => 'date-time',
        'retry' => null,
        'enabled' => null,
        'mode' => null,
        'config' => null,
        'subject' => null,
        'closestExecutions' => null
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
        'id' => 'id',
        'caption' => 'caption',
        'subjectType' => 'subjectType',
        'subjectId' => 'subjectId',
        'dateStart' => 'dateStart',
        'dateEnd' => 'dateEnd',
        'retry' => 'retry',
        'enabled' => 'enabled',
        'mode' => 'mode',
        'config' => 'config',
        'subject' => 'subject',
        'closestExecutions' => 'closestExecutions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'caption' => 'setCaption',
        'subjectType' => 'setSubjectType',
        'subjectId' => 'setSubjectId',
        'dateStart' => 'setDateStart',
        'dateEnd' => 'setDateEnd',
        'retry' => 'setRetry',
        'enabled' => 'setEnabled',
        'mode' => 'setMode',
        'config' => 'setConfig',
        'subject' => 'setSubject',
        'closestExecutions' => 'setClosestExecutions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'caption' => 'getCaption',
        'subjectType' => 'getSubjectType',
        'subjectId' => 'getSubjectId',
        'dateStart' => 'getDateStart',
        'dateEnd' => 'getDateEnd',
        'retry' => 'getRetry',
        'enabled' => 'getEnabled',
        'mode' => 'getMode',
        'config' => 'getConfig',
        'subject' => 'getSubject',
        'closestExecutions' => 'getClosestExecutions'
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

    const MODE_ONCE = 'once';
    const MODE_MINUTELY = 'minutely';
    const MODE_DAILY = 'daily';
    const MODE_CRONTAB = 'crontab';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getModeAllowableValues()
    {
        return [
            self::MODE_ONCE,
            self::MODE_MINUTELY,
            self::MODE_DAILY,
            self::MODE_CRONTAB,
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['caption'] = $data['caption'] ?? null;
        $this->container['subjectType'] = $data['subjectType'] ?? null;
        $this->container['subjectId'] = $data['subjectId'] ?? null;
        $this->container['dateStart'] = $data['dateStart'] ?? null;
        $this->container['dateEnd'] = $data['dateEnd'] ?? null;
        $this->container['retry'] = $data['retry'] ?? null;
        $this->container['enabled'] = $data['enabled'] ?? null;
        $this->container['mode'] = $data['mode'] ?? null;
        $this->container['config'] = $data['config'] ?? null;
        $this->container['subject'] = $data['subject'] ?? null;
        $this->container['closestExecutions'] = $data['closestExecutions'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getModeAllowableValues();
        if (!is_null($this->container['mode']) && !in_array($this->container['mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'mode', must be one of '%s'",
                $this->container['mode'],
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Identifier
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets caption
     *
     * @return string|null
     */
    public function getCaption()
    {
        return $this->container['caption'];
    }

    /**
     * Sets caption
     *
     * @param string|null $caption Caption
     *
     * @return self
     */
    public function setCaption($caption)
    {
        $this->container['caption'] = $caption;

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
     * Gets dateStart
     *
     * @return \DateTime|null
     */
    public function getDateStart()
    {
        return $this->container['dateStart'];
    }

    /**
     * Sets dateStart
     *
     * @param \DateTime|null $dateStart dateStart
     *
     * @return self
     */
    public function setDateStart($dateStart)
    {
        $this->container['dateStart'] = $dateStart;

        return $this;
    }

    /**
     * Gets dateEnd
     *
     * @return \DateTime|null
     */
    public function getDateEnd()
    {
        return $this->container['dateEnd'];
    }

    /**
     * Sets dateEnd
     *
     * @param \DateTime|null $dateEnd dateEnd
     *
     * @return self
     */
    public function setDateEnd($dateEnd)
    {
        $this->container['dateEnd'] = $dateEnd;

        return $this;
    }

    /**
     * Gets retry
     *
     * @return bool|null
     */
    public function getRetry()
    {
        return $this->container['retry'];
    }

    /**
     * Sets retry
     *
     * @param bool|null $retry retry
     *
     * @return self
     */
    public function setRetry($retry)
    {
        $this->container['retry'] = $retry;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled enabled
     *
     * @return self
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets mode
     *
     * @return string|null
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param string|null $mode mode
     *
     * @return self
     */
    public function setMode($mode)
    {
        $allowedValues = $this->getModeAllowableValues();
        if (!is_null($mode) && !in_array($mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'mode', must be one of '%s'",
                    $mode,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets config
     *
     * @return \Supla\ApiClient\Model\ScheduleConfigEntry[]|null
     */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
     * Sets config
     *
     * @param \Supla\ApiClient\Model\ScheduleConfigEntry[]|null $config config
     *
     * @return self
     */
    public function setConfig($config)
    {
        $this->container['config'] = $config;

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
     * Gets closestExecutions
     *
     * @return \Supla\ApiClient\Model\ScheduleClosestExecutions|null
     */
    public function getClosestExecutions()
    {
        return $this->container['closestExecutions'];
    }

    /**
     * Sets closestExecutions
     *
     * @param \Supla\ApiClient\Model\ScheduleClosestExecutions|null $closestExecutions closestExecutions
     *
     * @return self
     */
    public function setClosestExecutions($closestExecutions)
    {
        $this->container['closestExecutions'] = $closestExecutions;

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

