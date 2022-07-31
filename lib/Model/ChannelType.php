<?php
/**
 * ChannelType
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
 * ChannelType Class Doc Comment
 *
 * @category Class
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ChannelType implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChannelType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'caption' => 'string'
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
        'name' => null,
        'caption' => null
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
        'name' => 'name',
        'caption' => 'caption'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'caption' => 'setCaption'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'caption' => 'getCaption'
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

    const ID_MINUS_1 = -1;
    const ID_1000 = 1000;
    const ID_1010 = 1010;
    const ID_1020 = 1020;
    const ID_1500 = 1500;
    const ID_2000 = 2000;
    const ID_2010 = 2010;
    const ID_2020 = 2020;
    const ID_2900 = 2900;
    const ID_3000 = 3000;
    const ID_3010 = 3010;
    const ID_3022 = 3022;
    const ID_3020 = 3020;
    const ID_3032 = 3032;
    const ID_3030 = 3030;
    const ID_3034 = 3034;
    const ID_3036 = 3036;
    const ID_3038 = 3038;
    const ID_3042 = 3042;
    const ID_3044 = 3044;
    const ID_3048 = 3048;
    const ID_3050 = 3050;
    const ID_3100 = 3100;
    const ID_4000 = 4000;
    const ID_4010 = 4010;
    const ID_4020 = 4020;
    const ID_5000 = 5000;
    const ID_5010 = 5010;
    const ID_6000 = 6000;
    const ID_6010 = 6010;
    const ID_7000 = 7000;
    const ID_7010 = 7010;
    const ID_8000 = 8000;
    const ID_9000 = 9000;
    const ID_11000 = 11000;
    const ID_12000 = 12000;
    const NAME_UNSUPPORTED = 'UNSUPPORTED';
    const NAME_SENSORNO = 'SENSORNO';
    const NAME_SENSORNC = 'SENSORNC';
    const NAME_DISTANCESENSOR = 'DISTANCESENSOR';
    const NAME_CALLBUTTON = 'CALLBUTTON';
    const NAME_RELAYHFD4 = 'RELAYHFD4';
    const NAME_RELAYG5_LA1_A = 'RELAYG5LA1A';
    const NAME_RELAY2_XG5_LA1_A = 'RELAY2XG5LA1A';
    const NAME_RELAY = 'RELAY';
    const NAME_THERMOMETERDS18_B20 = 'THERMOMETERDS18B20';
    const NAME_DHT11 = 'DHT11';
    const NAME_DHT21 = 'DHT21';
    const NAME_DHT22 = 'DHT22';
    const NAME_AM2301 = 'AM2301';
    const NAME_AM2302 = 'AM2302';
    const NAME_THERMOMETER = 'THERMOMETER';
    const NAME_HUMIDITYSENSOR = 'HUMIDITYSENSOR';
    const NAME_HUMIDITYANDTEMPSENSOR = 'HUMIDITYANDTEMPSENSOR';
    const NAME_WINDSENSOR = 'WINDSENSOR';
    const NAME_PRESSURESENSOR = 'PRESSURESENSOR';
    const NAME_RAINSENSOR = 'RAINSENSOR';
    const NAME_WEIGHTSENSOR = 'WEIGHTSENSOR';
    const NAME_WEATHER_STATION = 'WEATHER_STATION';
    const NAME_DIMMER = 'DIMMER';
    const NAME_RGBLEDCONTROLLER = 'RGBLEDCONTROLLER';
    const NAME_DIMMERANDRGBLED = 'DIMMERANDRGBLED';
    const NAME_ELECTRICITYMETER = 'ELECTRICITYMETER';
    const NAME_IMPULSECOUNTER = 'IMPULSECOUNTER';
    const NAME_THERMOSTAT = 'THERMOSTAT';
    const NAME_THERMOSTATHEATPOLHOMEPLUS = 'THERMOSTATHEATPOLHOMEPLUS';
    const NAME_VALVEOPENCLOSE = 'VALVEOPENCLOSE';
    const NAME_VALVEPERCENTAGE = 'VALVEPERCENTAGE';
    const NAME_BRIDGE = 'BRIDGE';
    const NAME_GENERAL_PURPOSE_MEASUREMENT = 'GENERAL_PURPOSE_MEASUREMENT';
    const NAME_ACTION_TRIGGER = 'ACTION_TRIGGER';
    const NAME_DIGIGLASS = 'DIGIGLASS';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIdAllowableValues()
    {
        return [
            self::ID_MINUS_1,
            self::ID_1000,
            self::ID_1010,
            self::ID_1020,
            self::ID_1500,
            self::ID_2000,
            self::ID_2010,
            self::ID_2020,
            self::ID_2900,
            self::ID_3000,
            self::ID_3010,
            self::ID_3022,
            self::ID_3020,
            self::ID_3032,
            self::ID_3030,
            self::ID_3034,
            self::ID_3036,
            self::ID_3038,
            self::ID_3042,
            self::ID_3044,
            self::ID_3048,
            self::ID_3050,
            self::ID_3100,
            self::ID_4000,
            self::ID_4010,
            self::ID_4020,
            self::ID_5000,
            self::ID_5010,
            self::ID_6000,
            self::ID_6010,
            self::ID_7000,
            self::ID_7010,
            self::ID_8000,
            self::ID_9000,
            self::ID_11000,
            self::ID_12000,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNameAllowableValues()
    {
        return [
            self::NAME_UNSUPPORTED,
            self::NAME_SENSORNO,
            self::NAME_SENSORNC,
            self::NAME_DISTANCESENSOR,
            self::NAME_CALLBUTTON,
            self::NAME_RELAYHFD4,
            self::NAME_RELAYG5_LA1_A,
            self::NAME_RELAY2_XG5_LA1_A,
            self::NAME_RELAY,
            self::NAME_THERMOMETERDS18_B20,
            self::NAME_DHT11,
            self::NAME_DHT21,
            self::NAME_DHT22,
            self::NAME_AM2301,
            self::NAME_AM2302,
            self::NAME_THERMOMETER,
            self::NAME_HUMIDITYSENSOR,
            self::NAME_HUMIDITYANDTEMPSENSOR,
            self::NAME_WINDSENSOR,
            self::NAME_PRESSURESENSOR,
            self::NAME_RAINSENSOR,
            self::NAME_WEIGHTSENSOR,
            self::NAME_WEATHER_STATION,
            self::NAME_DIMMER,
            self::NAME_RGBLEDCONTROLLER,
            self::NAME_DIMMERANDRGBLED,
            self::NAME_ELECTRICITYMETER,
            self::NAME_IMPULSECOUNTER,
            self::NAME_THERMOSTAT,
            self::NAME_THERMOSTATHEATPOLHOMEPLUS,
            self::NAME_VALVEOPENCLOSE,
            self::NAME_VALVEPERCENTAGE,
            self::NAME_BRIDGE,
            self::NAME_GENERAL_PURPOSE_MEASUREMENT,
            self::NAME_ACTION_TRIGGER,
            self::NAME_DIGIGLASS,
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['caption'] = $data['caption'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getIdAllowableValues();
        if (!is_null($this->container['id']) && !in_array($this->container['id'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'id', must be one of '%s'",
                $this->container['id'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getNameAllowableValues();
        if (!is_null($this->container['name']) && !in_array($this->container['name'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'name', must be one of '%s'",
                $this->container['name'],
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
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $allowedValues = $this->getIdAllowableValues();
        if (!is_null($id) && !in_array($id, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'id', must be one of '%s'",
                    $id,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $allowedValues = $this->getNameAllowableValues();
        if (!is_null($name) && !in_array($name, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'name', must be one of '%s'",
                    $name,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['name'] = $name;

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
     * @param string|null $caption caption
     *
     * @return self
     */
    public function setCaption($caption)
    {
        $this->container['caption'] = $caption;

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


