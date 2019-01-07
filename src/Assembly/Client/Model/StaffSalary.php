<?php

/**
 * Assembly Developer API
 *
 * The Assembly API is built around the REST and a collection of open standards/protocols in order to comply with as many consumers as possible.
 *
 * API version: 1.1.0
 * Contact: help@assembly.education
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 */

namespace Assembly\Client\Model;

use \ArrayAccess;
use \Assembly\Client\ObjectSerializer;

/**
 * StaffSalary Class Doc Comment
 *
 * @category Class
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class StaffSalary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StaffSalary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'hours_per_week' => 'string',
        'fte' => 'string',
        'weeks_per_year' => 'string',
        'pay_range' => 'string',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'pay_scale_framework' => 'string',
        'regional_spine' => 'string',
        'base_pay' => 'string',
        'actual_pay' => 'string',
        'safeguarded_salary' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'hours_per_week' => null,
        'fte' => null,
        'weeks_per_year' => null,
        'pay_range' => null,
        'start_date' => 'date-time',
        'end_date' => 'date-time',
        'pay_scale_framework' => null,
        'regional_spine' => null,
        'base_pay' => null,
        'actual_pay' => null,
        'safeguarded_salary' => null
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
        'hours_per_week' => 'hours_per_week',
        'fte' => 'fte',
        'weeks_per_year' => 'weeks_per_year',
        'pay_range' => 'pay_range',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'pay_scale_framework' => 'pay_scale_framework',
        'regional_spine' => 'regional_spine',
        'base_pay' => 'base_pay',
        'actual_pay' => 'actual_pay',
        'safeguarded_salary' => 'safeguarded_salary'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hours_per_week' => 'setHoursPerWeek',
        'fte' => 'setFte',
        'weeks_per_year' => 'setWeeksPerYear',
        'pay_range' => 'setPayRange',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'pay_scale_framework' => 'setPayScaleFramework',
        'regional_spine' => 'setRegionalSpine',
        'base_pay' => 'setBasePay',
        'actual_pay' => 'setActualPay',
        'safeguarded_salary' => 'setSafeguardedSalary'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hours_per_week' => 'getHoursPerWeek',
        'fte' => 'getFte',
        'weeks_per_year' => 'getWeeksPerYear',
        'pay_range' => 'getPayRange',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'pay_scale_framework' => 'getPayScaleFramework',
        'regional_spine' => 'getRegionalSpine',
        'base_pay' => 'getBasePay',
        'actual_pay' => 'getActualPay',
        'safeguarded_salary' => 'getSafeguardedSalary'
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
        $this->container['hours_per_week'] = isset($data['hours_per_week']) ? $data['hours_per_week'] : null;
        $this->container['fte'] = isset($data['fte']) ? $data['fte'] : null;
        $this->container['weeks_per_year'] = isset($data['weeks_per_year']) ? $data['weeks_per_year'] : null;
        $this->container['pay_range'] = isset($data['pay_range']) ? $data['pay_range'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['pay_scale_framework'] = isset($data['pay_scale_framework']) ? $data['pay_scale_framework'] : null;
        $this->container['regional_spine'] = isset($data['regional_spine']) ? $data['regional_spine'] : null;
        $this->container['base_pay'] = isset($data['base_pay']) ? $data['base_pay'] : null;
        $this->container['actual_pay'] = isset($data['actual_pay']) ? $data['actual_pay'] : null;
        $this->container['safeguarded_salary'] = isset($data['safeguarded_salary']) ? $data['safeguarded_salary'] : null;
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

        return true;
    }


    /**
     * Gets hours_per_week
     *
     * @return string
     */
    public function getHoursPerWeek()
    {
        return $this->container['hours_per_week'];
    }

    /**
     * Sets hours_per_week
     *
     * @param string $hours_per_week hours_per_week
     *
     * @return $this
     */
    public function setHoursPerWeek($hours_per_week)
    {
        $this->container['hours_per_week'] = $hours_per_week;

        return $this;
    }

    /**
     * Gets fte
     *
     * @return string
     */
    public function getFte()
    {
        return $this->container['fte'];
    }

    /**
     * Sets fte
     *
     * @param string $fte fte
     *
     * @return $this
     */
    public function setFte($fte)
    {
        $this->container['fte'] = $fte;

        return $this;
    }

    /**
     * Gets weeks_per_year
     *
     * @return string
     */
    public function getWeeksPerYear()
    {
        return $this->container['weeks_per_year'];
    }

    /**
     * Sets weeks_per_year
     *
     * @param string $weeks_per_year weeks_per_year
     *
     * @return $this
     */
    public function setWeeksPerYear($weeks_per_year)
    {
        $this->container['weeks_per_year'] = $weeks_per_year;

        return $this;
    }

    /**
     * Gets pay_range
     *
     * @return string
     */
    public function getPayRange()
    {
        return $this->container['pay_range'];
    }

    /**
     * Sets pay_range
     *
     * @param string $pay_range pay_range
     *
     * @return $this
     */
    public function setPayRange($pay_range)
    {
        $this->container['pay_range'] = $pay_range;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date start_date
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date end_date
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets pay_scale_framework
     *
     * @return string
     */
    public function getPayScaleFramework()
    {
        return $this->container['pay_scale_framework'];
    }

    /**
     * Sets pay_scale_framework
     *
     * @param string $pay_scale_framework pay_scale_framework
     *
     * @return $this
     */
    public function setPayScaleFramework($pay_scale_framework)
    {
        $this->container['pay_scale_framework'] = $pay_scale_framework;

        return $this;
    }

    /**
     * Gets regional_spine
     *
     * @return string
     */
    public function getRegionalSpine()
    {
        return $this->container['regional_spine'];
    }

    /**
     * Sets regional_spine
     *
     * @param string $regional_spine regional_spine
     *
     * @return $this
     */
    public function setRegionalSpine($regional_spine)
    {
        $this->container['regional_spine'] = $regional_spine;

        return $this;
    }

    /**
     * Gets base_pay
     *
     * @return string
     */
    public function getBasePay()
    {
        return $this->container['base_pay'];
    }

    /**
     * Sets base_pay
     *
     * @param string $base_pay base_pay
     *
     * @return $this
     */
    public function setBasePay($base_pay)
    {
        $this->container['base_pay'] = $base_pay;

        return $this;
    }

    /**
     * Gets actual_pay
     *
     * @return string
     */
    public function getActualPay()
    {
        return $this->container['actual_pay'];
    }

    /**
     * Sets actual_pay
     *
     * @param string $actual_pay actual_pay
     *
     * @return $this
     */
    public function setActualPay($actual_pay)
    {
        $this->container['actual_pay'] = $actual_pay;

        return $this;
    }

    /**
     * Gets safeguarded_salary
     *
     * @return bool
     */
    public function getSafeguardedSalary()
    {
        return $this->container['safeguarded_salary'];
    }

    /**
     * Sets safeguarded_salary
     *
     * @param bool $safeguarded_salary safeguarded_salary
     *
     * @return $this
     */
    public function setSafeguardedSalary($safeguarded_salary)
    {
        $this->container['safeguarded_salary'] = $safeguarded_salary;

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
     * @return mixed
     */
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

