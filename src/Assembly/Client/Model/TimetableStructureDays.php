<?php

/**
 * Assembly Developer API PHP Client
 * SDK Version 1.2.416
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
 * TimetableStructureDays Class Doc Comment
 *
 * @category Class
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class TimetableStructureDays implements ModelInterface, ArrayAccess
{
  const DISCRIMINATOR = null;

  /**
    * The original name of the model.
    *
    * @var string
    */
  protected static $swaggerModelName = 'TimetableStructureDays';

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
    'display_order' => 'int',
    'periods' => '\Assembly\Client\Model\TimetableStructurePeriods[]'
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
    'display_order' => 'int32',
    'periods' => null
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
    'display_order' => 'display_order',
    'periods' => 'periods'
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
    'display_order' => 'setDisplayOrder',
    'periods' => 'setPeriods'
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
    'display_order' => 'getDisplayOrder',
    'periods' => 'getPeriods'
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
    $this->container['object'] = isset($data['object']) ? $data['object'] : 'day';
    $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    $this->container['short_name'] = isset($data['short_name']) ? $data['short_name'] : null;
    $this->container['long_name'] = isset($data['long_name']) ? $data['long_name'] : null;
    $this->container['display_order'] = isset($data['display_order']) ? $data['display_order'] : null;
    $this->container['periods'] = isset($data['periods']) ? $data['periods'] : null;
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
   * @param string $short_name The day short name
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
   * @param string $long_name The day long name
   *
   * @return $this
   */
  public function setLongName($long_name)
  {
    $this->container['long_name'] = $long_name;

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
   * @param int $display_order The order in which days should be displayed
   *
   * @return $this
   */
  public function setDisplayOrder($display_order)
  {
    $this->container['display_order'] = $display_order;

    return $this;
  }

  /**
   * Gets periods
   *
   * @return \Assembly\Client\Model\TimetableStructurePeriods[]
   */
  public function getPeriods()
  {
    return $this->container['periods'];
  }

  /**
   * Sets periods
   *
   * @param \Assembly\Client\Model\TimetableStructurePeriods[] $periods Provides details of the individual periods that make up the day
   *
   * @return $this
   */
  public function setPeriods($periods)
  {
    $this->container['periods'] = $periods;

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


