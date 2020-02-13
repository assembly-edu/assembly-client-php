<?php

/**
 * Assembly Developer API PHP Client
 * SDK Version 1.2.463
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
 * TimetableStructurePeriods Class Doc Comment
 *
 * @category Class
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class TimetableStructurePeriods implements ModelInterface, ArrayAccess
{
  const DISCRIMINATOR = null;

  /**
    * The original name of the model.
    *
    * @var string
    */
  protected static $swaggerModelName = 'TimetableStructurePeriods';

  /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerTypes = [
    'object' => 'string',
    'id' => 'int',
    'short_name' => 'string',
    'long_name' => 'string',
    'start_time' => 'string',
    'end_time' => 'string',
    'display_order' => 'int'
  ];

  /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerFormats = [
    'object' => null,
    'id' => 'int32',
    'short_name' => null,
    'long_name' => null,
    'start_time' => null,
    'end_time' => null,
    'display_order' => 'int32'
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
    'short_name' => 'short_name',
    'long_name' => 'long_name',
    'start_time' => 'start_time',
    'end_time' => 'end_time',
    'display_order' => 'display_order'
  ];

  /**
   * Array of attributes to setter functions (for deserialization of responses)
   *
   * @var string[]
   */
  protected static $setters = [
    'object' => 'setObject',
    'id' => 'setId',
    'short_name' => 'setShortName',
    'long_name' => 'setLongName',
    'start_time' => 'setStartTime',
    'end_time' => 'setEndTime',
    'display_order' => 'setDisplayOrder'
  ];

  /**
   * Array of attributes to getter functions (for serialization of requests)
   *
   * @var string[]
   */
  protected static $getters = [
    'object' => 'getObject',
    'id' => 'getId',
    'short_name' => 'getShortName',
    'long_name' => 'getLongName',
    'start_time' => 'getStartTime',
    'end_time' => 'getEndTime',
    'display_order' => 'getDisplayOrder'
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
    $this->container['object'] = isset($data['object']) ? $data['object'] : 'period';
    $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    $this->container['short_name'] = isset($data['short_name']) ? $data['short_name'] : null;
    $this->container['long_name'] = isset($data['long_name']) ? $data['long_name'] : null;
    $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
    $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
    $this->container['display_order'] = isset($data['display_order']) ? $data['display_order'] : null;
  }

  /**
   * Show all the invalid properties with reasons.
   *
   * @return array invalid properties with reasons
   */
  public function listInvalidProperties()
  {
    $invalidProperties = [];

    if (!is_null($this->container['start_time']) && !preg_match("/^\\d{2}:\\d{2}$/", $this->container['start_time'])) {
      $invalidProperties[] = "invalid value for 'start_time', must be conform to the pattern /^\\d{2}:\\d{2}$/.";
    }

    if (!is_null($this->container['end_time']) && !preg_match("/^\\d{2}:\\d{2}$/", $this->container['end_time'])) {
      $invalidProperties[] = "invalid value for 'end_time', must be conform to the pattern /^\\d{2}:\\d{2}$/.";
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

    if (!preg_match("/^\\d{2}:\\d{2}$/", $this->container['start_time'])) {
      return false;
    }
    if (!preg_match("/^\\d{2}:\\d{2}$/", $this->container['end_time'])) {
      return false;
    }
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
   * Gets short_name
   *
   * @return string
   */
  public function getShortName()
  {
    return $this->container['short_name'];
  }

  /**
   * Sets short_name
   *
   * @param string $short_name The period short name
   *
   * @return $this
   */
  public function setShortName($short_name)
  {
    $this->container['short_name'] = $short_name;

    return $this;
  }

  /**
   * Gets long_name
   *
   * @return string
   */
  public function getLongName()
  {
    return $this->container['long_name'];
  }

  /**
   * Sets long_name
   *
   * @param string $long_name The period long name
   *
   * @return $this
   */
  public function setLongName($long_name)
  {
    $this->container['long_name'] = $long_name;

    return $this;
  }

  /**
   * Gets start_time
   *
   * @return string
   */
  public function getStartTime()
  {
    return $this->container['start_time'];
  }

  /**
   * Sets start_time
   *
   * @param string $start_time The start time of the period
   *
   * @return $this
   */
  public function setStartTime($start_time)
  {

    if (!is_null($start_time) && (!preg_match("/^\\d{2}:\\d{2}$/", $start_time))) {
      throw new \InvalidArgumentException("invalid value for $start_time when calling TimetableStructurePeriods., must conform to the pattern /^\\d{2}:\\d{2}$/.");
    }

    $this->container['start_time'] = $start_time;

    return $this;
  }

  /**
   * Gets end_time
   *
   * @return string
   */
  public function getEndTime()
  {
    return $this->container['end_time'];
  }

  /**
   * Sets end_time
   *
   * @param string $end_time The end time of the period
   *
   * @return $this
   */
  public function setEndTime($end_time)
  {

    if (!is_null($end_time) && (!preg_match("/^\\d{2}:\\d{2}$/", $end_time))) {
      throw new \InvalidArgumentException("invalid value for $end_time when calling TimetableStructurePeriods., must conform to the pattern /^\\d{2}:\\d{2}$/.");
    }

    $this->container['end_time'] = $end_time;

    return $this;
  }

  /**
   * Gets display_order
   *
   * @return int
   */
  public function getDisplayOrder()
  {
    return $this->container['display_order'];
  }

  /**
   * Sets display_order
   *
   * @param int $display_order The order in which periods should be displayed
   *
   * @return $this
   */
  public function setDisplayOrder($display_order)
  {
    $this->container['display_order'] = $display_order;

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


