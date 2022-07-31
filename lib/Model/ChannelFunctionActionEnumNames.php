<?php
/**
 * ChannelFunctionActionEnumNames
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
use \Supla\ApiClient\ObjectSerializer;

/**
 * ChannelFunctionActionEnumNames Class Doc Comment
 *
 * @category Class
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ChannelFunctionActionEnumNames
{
    /**
     * Possible values of this enum
     */
    const READ = 'READ';

    const SET = 'SET';

    const EXECUTE = 'EXECUTE';

    const INTERRUPT = 'INTERRUPT';

    const INTERRUPT_AND_EXECUTE = 'INTERRUPT_AND_EXECUTE';

    const OPEN = 'OPEN';

    const CLOSE = 'CLOSE';

    const SHUT = 'SHUT';

    const REVEAL = 'REVEAL';

    const REVEAL_PARTIALLY = 'REVEAL_PARTIALLY';

    const SHUT_PARTIALLY = 'SHUT_PARTIALLY';

    const TURN_ON = 'TURN_ON';

    const TURN_OFF = 'TURN_OFF';

    const SET_RGBW_PARAMETERS = 'SET_RGBW_PARAMETERS';

    const OPEN_CLOSE = 'OPEN_CLOSE';

    const STOP = 'STOP';

    const TOGGLE = 'TOGGLE';

    const OPEN_PARTIALLY = 'OPEN_PARTIALLY';

    const CLOSE_PARTIALLY = 'CLOSE_PARTIALLY';

    const UP_OR_STOP = 'UP_OR_STOP';

    const DOWN_OR_STOP = 'DOWN_OR_STOP';

    const STEP_BY_STEP = 'STEP_BY_STEP';

    const COPY = 'COPY';

    const AT_FORWARD_OUTSIDE = 'AT_FORWARD_OUTSIDE';

    const AT_DISABLE_LOCAL_FUNCTION = 'AT_DISABLE_LOCAL_FUNCTION';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::READ,
            self::SET,
            self::EXECUTE,
            self::INTERRUPT,
            self::INTERRUPT_AND_EXECUTE,
            self::OPEN,
            self::CLOSE,
            self::SHUT,
            self::REVEAL,
            self::REVEAL_PARTIALLY,
            self::SHUT_PARTIALLY,
            self::TURN_ON,
            self::TURN_OFF,
            self::SET_RGBW_PARAMETERS,
            self::OPEN_CLOSE,
            self::STOP,
            self::TOGGLE,
            self::OPEN_PARTIALLY,
            self::CLOSE_PARTIALLY,
            self::UP_OR_STOP,
            self::DOWN_OR_STOP,
            self::STEP_BY_STEP,
            self::COPY,
            self::AT_FORWARD_OUTSIDE,
            self::AT_DISABLE_LOCAL_FUNCTION
        ];
    }
}


