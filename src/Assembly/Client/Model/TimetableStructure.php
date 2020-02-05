<?php

/**
 * Assembly Developer API PHP Client
 * SDK Version 1.2.450
 * API Version 1.1.0
 *
 * Support
 * Email: help@assembly.education
 * URL:   http://developers.assembly.education
 *
 * Terms of Service: http://assembly.education/terms/
 * License:          MIT, https://spdx.org/licenses/MIT.html
 */


namespace Assembly\Client\Model;

use \ArrayAccess;
use \Assembly\Client\ObjectSerializer;

/**
 * TimetableStructure Class Doc Comment
 *
 * @category Class
 * @description A timetable
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class TimetableStructure implements ModelInterface, ArrayAccess
{
  const DISCRIMINATOR = null;

  /**
    * The original name of the model.
    *
    * @var string
    */
  protected static $swaggerModelName = 'TimetableStructure';

  /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerTypes = [
    'object' => 'string',
    'id' => 'int',
    'name' => 'string',
    'description' => 'string',
    'start_date' => '\DateTime',
    'end_date' => '\DateTime',
    'weeks' => 'int',
    'days_per_week' => 'int',
    'periods_per_day' => 'int',
    'days' => '\Assembly\Client\Model\TimetableStructureDays[]'
  ];

  /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerFormats = [
    'object' => null,
    'id' => 'int32',
    'name' => null,
    'description' => null,
    'start_date' => 'date-time',
    'end_date' => 'date-time',
    'weeks' => 'int32',
    'days_per_week' => 'int32',
    'periods_per_day' => 'int32',
    'days' => null
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
    'object' => 'object',
    'id' => 'id',
    'name' => 'name',
    'description' => 'description',
    'start_date' => 'start_date',
    'end_date' => 'end_date',
    'weeks' => 'weeks',
    'days_per_week' => 'days_per_week',
    'periods_per_day' => 'periods_per_day',
    'days' => 'days'
  ];

  /**
   * Array of attributes to setter functions (for deserialization of responses)
   *
   * @var string[]
   */
  protected static $setters = [
    'object' => 'setObject',
    'id' => 'setId',
    'name' => 'setName',
    'description' => 'setDescription',
    'start_date' => 'setStartDate',
    'end_date' => 'setEndDate',
    'weeks' => 'setWeeks',
    'days_per_week' => 'setDaysPerWeek',
    'periods_per_day' => 'setPeriodsPerDay',
    'days' => 'setDays'
  ];

  /**
   * Array of attributes to getter functions (for serialization of requests)
   *
   * @var string[]
   */
  protected static $getters = [
    'object' => 'getObject',
    'id' => 'getId',
    'name' => 'getName',
    'description' => 'getDescription',
    'start_date' => 'getStartDate',
    'end_date' => 'getEndDate',
    'weeks' => 'getWeeks',
    'days_per_week' => 'getDaysPerWeek',
    'periods_per_day' => 'getPeriodsPerDay',
    'days' => 'getDays'
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
    $this->container['object'] = isset($data['object']) ? $data['object'] : 'timetable';
    $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
    $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
    $this->container['weeks'] = isset($data['weeks']) ? $data['weeks'] : null;
    $this->container['days_per_week'] = isset($data['days_per_week']) ? $data['days_per_week'] : null;
    $this->container['periods_per_day'] = isset($data['periods_per_day']) ? $data['periods_per_day'] : null;
    $this->container['days'] = isset($data['days']) ? $data['days'] : null;
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
   * Gets object
   *
   * @return string
   */
  public function getObject()
  {
    return $this->container['object'];
  }

  /**
   * Sets object
   *
   * @param string $object Descriminator
   *
   * @return $this
   */
  public function setObject($object)
  {
    $this->container['object'] = $object;

    return $this;
  }

  /**
   * Gets id
   *
   * @return int
   */
  public function getId()
  {
    return $this->container['id'];
  }

  /**
   * Sets id
   *
   * @param int $id Internal stable ID
   *
   * @return $this
   */
  public function setId($id)
  {
    $this->container['id'] = $id;

    return $this;
  }

  /**
   * Gets name
   *
   * @return string
   */
  public function getName()
  {
    return $this->container['name'];
  }

  /**
   * Sets name
   *
   * @param string $name The name of the timetable
   *
   * @return $this
   */
  public function setName($name)
  {
    $this->container['name'] = $name;

    return $this;
  }

  /**
   * Gets description
   *
   * @return string
   */
  public function getDescription()
  {
    return $this->container['description'];
  }

  /**
   * Sets description
   *
   * @param string $description The description of the timetable cycle
   *
   * @return $this
   */
  public function setDescription($description)
  {
    $this->container['description'] = $description;

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
   * @param \DateTime $start_date The start date of the timetable cycle
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
   * @param \DateTime $end_date The end date of the timetable cycle
   *
   * @return $this
   */
  public function setEndDate($end_date)
  {
    $this->container['end_date'] = $end_date;

    return $this;
  }

  /**
   * Gets weeks
   *
   * @return int
   */
  public function getWeeks()
  {
    return $this->container['weeks'];
  }

  /**
   * Sets weeks
   *
   * @param int $weeks The number of weeks in the timetable cycle
   *
   * @return $this
   */
  public function setWeeks($weeks)
  {
    $this->container['weeks'] = $weeks;

    return $this;
  }

  /**
   * Gets days_per_week
   *
   * @return int
   */
  public function getDaysPerWeek()
  {
    return $this->container['days_per_week'];
  }

  /**
   * Sets days_per_week
   *
   * @param int $days_per_week Number of days per week
   *
   * @return $this
   */
  public function setDaysPerWeek($days_per_week)
  {
    $this->container['days_per_week'] = $days_per_week;

    return $this;
  }

  /**
   * Gets periods_per_day
   *
   * @return int
   */
  public function getPeriodsPerDay()
  {
    return $this->container['periods_per_day'];
  }

  /**
   * Sets periods_per_day
   *
   * @param int $periods_per_day Number of periods per day
   *
   * @return $this
   */
  public function setPeriodsPerDay($periods_per_day)
  {
    $this->container['periods_per_day'] = $periods_per_day;

    return $this;
  }

  /**
   * Gets days
   *
   * @return \Assembly\Client\Model\TimetableStructureDays[]
   */
  public function getDays()
  {
    return $this->container['days'];
  }

  /**
   * Sets days
   *
   * @param \Assembly\Client\Model\TimetableStructureDays[] $days Provides details of the individual days that make up the timetable
   *
   * @return $this
   */
  public function setDays($days)
  {
    $this->container['days'] = $days;

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


