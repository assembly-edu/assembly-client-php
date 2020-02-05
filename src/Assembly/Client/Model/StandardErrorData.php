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
 * StandardErrorData Class Doc Comment
 *
 * @category Class
 * @description Present in the case of a 429 error, giving detail of how much the rate limit has been exceeded by and how long the client should wait before retrying
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class StandardErrorData implements ModelInterface, ArrayAccess
{
  const DISCRIMINATOR = null;

  /**
    * The original name of the model.
    *
    * @var string
    */
  protected static $swaggerModelName = 'StandardErrorData';

  /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerTypes = [
    'count' => 'int',
    'period' => 'int',
    'limit' => 'int'
  ];

  /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerFormats = [
    'count' => 'int32',
    'period' => 'int32',
    'limit' => 'int32'
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
    'count' => 'count',
    'period' => 'period',
    'limit' => 'limit'
  ];

  /**
   * Array of attributes to setter functions (for deserialization of responses)
   *
   * @var string[]
   */
  protected static $setters = [
    'count' => 'setCount',
    'period' => 'setPeriod',
    'limit' => 'setLimit'
  ];

  /**
   * Array of attributes to getter functions (for serialization of requests)
   *
   * @var string[]
   */
  protected static $getters = [
    'count' => 'getCount',
    'period' => 'getPeriod',
    'limit' => 'getLimit'
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
    $this->container['count'] = isset($data['count']) ? $data['count'] : null;
    $this->container['period'] = isset($data['period']) ? $data['period'] : null;
    $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
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
   * Gets count
   *
   * @return int
   */
  public function getCount()
  {
    return $this->container['count'];
  }

  /**
   * Sets count
   *
   * @param int $count The number of requests you have made with the current token
   *
   * @return $this
   */
  public function setCount($count)
  {
    $this->container['count'] = $count;

    return $this;
  }

  /**
   * Gets period
   *
   * @return int
   */
  public function getPeriod()
  {
    return $this->container['period'];
  }

  /**
   * Sets period
   *
   * @param int $period The number of seconds until the current token may make another request
   *
   * @return $this
   */
  public function setPeriod($period)
  {
    $this->container['period'] = $period;

    return $this;
  }

  /**
   * Gets limit
   *
   * @return int
   */
  public function getLimit()
  {
    return $this->container['limit'];
  }

  /**
   * Sets limit
   *
   * @param int $limit The total number of requests the current token may make within a 5 minute window
   *
   * @return $this
   */
  public function setLimit($limit)
  {
    $this->container['limit'] = $limit;

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


