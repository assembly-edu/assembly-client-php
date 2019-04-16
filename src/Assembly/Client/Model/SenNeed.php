<?php

/**
 * Assembly Developer API
 * Version 1.1.0
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
 * SenNeed Class Doc Comment
 *
 * @category Class
 * @description A student&#39;s SEN Need information.
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class SenNeed implements ModelInterface, ArrayAccess
{
  const DISCRIMINATOR = null;

  /**
    * The original name of the model.
    *
    * @var string
    */
  protected static $swaggerModelName = 'SenNeed';

  /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerTypes = [
    'object' => 'string',
    'id' => 'int',
    'start_date' => 'string',
    'sen_need_code' => 'string',
    'sen_need_name' => 'string',
    'sen_broad_need_type_code' => 'string',
    'sen_broad_need_type_name' => 'string',
    'priority' => 'int'
  ];

  /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerFormats = [
    'object' => null,
    'id' => 'int32',
    'start_date' => null,
    'sen_need_code' => null,
    'sen_need_name' => null,
    'sen_broad_need_type_code' => null,
    'sen_broad_need_type_name' => null,
    'priority' => 'int32'
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
    'start_date' => 'start_date',
    'sen_need_code' => 'sen_need_code',
    'sen_need_name' => 'sen_need_name',
    'sen_broad_need_type_code' => 'sen_broad_need_type_code',
    'sen_broad_need_type_name' => 'sen_broad_need_type_name',
    'priority' => 'priority'
  ];

  /**
   * Array of attributes to setter functions (for deserialization of responses)
   *
   * @var string[]
   */
  protected static $setters = [
    'object' => 'setObject',
    'id' => 'setId',
    'start_date' => 'setStartDate',
    'sen_need_code' => 'setSenNeedCode',
    'sen_need_name' => 'setSenNeedName',
    'sen_broad_need_type_code' => 'setSenBroadNeedTypeCode',
    'sen_broad_need_type_name' => 'setSenBroadNeedTypeName',
    'priority' => 'setPriority'
  ];

  /**
   * Array of attributes to getter functions (for serialization of requests)
   *
   * @var string[]
   */
  protected static $getters = [
    'object' => 'getObject',
    'id' => 'getId',
    'start_date' => 'getStartDate',
    'sen_need_code' => 'getSenNeedCode',
    'sen_need_name' => 'getSenNeedName',
    'sen_broad_need_type_code' => 'getSenBroadNeedTypeCode',
    'sen_broad_need_type_name' => 'getSenBroadNeedTypeName',
    'priority' => 'getPriority'
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
    $this->container['object'] = isset($data['object']) ? $data['object'] : 'sen_need';
    $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
    $this->container['sen_need_code'] = isset($data['sen_need_code']) ? $data['sen_need_code'] : null;
    $this->container['sen_need_name'] = isset($data['sen_need_name']) ? $data['sen_need_name'] : null;
    $this->container['sen_broad_need_type_code'] = isset($data['sen_broad_need_type_code']) ? $data['sen_broad_need_type_code'] : null;
    $this->container['sen_broad_need_type_name'] = isset($data['sen_broad_need_type_name']) ? $data['sen_broad_need_type_name'] : null;
    $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
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
   * Gets start_date
   *
   * @return string
   */
  public function getStartDate()
  {
    return $this->container['start_date'];
  }

  /**
   * Sets start_date
   *
   * @param string $start_date The start date for the need
   *
   * @return $this
   */
  public function setStartDate($start_date)
  {
    $this->container['start_date'] = $start_date;

    return $this;
  }

  /**
   * Gets sen_need_code
   *
   * @return string
   */
  public function getSenNeedCode()
  {
    return $this->container['sen_need_code'];
  }

  /**
   * Sets sen_need_code
   *
   * @param string $sen_need_code The code of the sen need
   *
   * @return $this
   */
  public function setSenNeedCode($sen_need_code)
  {
    $this->container['sen_need_code'] = $sen_need_code;

    return $this;
  }

  /**
   * Gets sen_need_name
   *
   * @return string
   */
  public function getSenNeedName()
  {
    return $this->container['sen_need_name'];
  }

  /**
   * Sets sen_need_name
   *
   * @param string $sen_need_name The name of the sen need
   *
   * @return $this
   */
  public function setSenNeedName($sen_need_name)
  {
    $this->container['sen_need_name'] = $sen_need_name;

    return $this;
  }

  /**
   * Gets sen_broad_need_type_code
   *
   * @return string
   */
  public function getSenBroadNeedTypeCode()
  {
    return $this->container['sen_broad_need_type_code'];
  }

  /**
   * Sets sen_broad_need_type_code
   *
   * @param string $sen_broad_need_type_code The code for the broad need
   *
   * @return $this
   */
  public function setSenBroadNeedTypeCode($sen_broad_need_type_code)
  {
    $this->container['sen_broad_need_type_code'] = $sen_broad_need_type_code;

    return $this;
  }

  /**
   * Gets sen_broad_need_type_name
   *
   * @return string
   */
  public function getSenBroadNeedTypeName()
  {
    return $this->container['sen_broad_need_type_name'];
  }

  /**
   * Sets sen_broad_need_type_name
   *
   * @param string $sen_broad_need_type_name The name of the broad need
   *
   * @return $this
   */
  public function setSenBroadNeedTypeName($sen_broad_need_type_name)
  {
    $this->container['sen_broad_need_type_name'] = $sen_broad_need_type_name;

    return $this;
  }

  /**
   * Gets priority
   *
   * @return int
   */
  public function getPriority()
  {
    return $this->container['priority'];
  }

  /**
   * Sets priority
   *
   * @param int $priority The priority of the sen need
   *
   * @return $this
   */
  public function setPriority($priority)
  {
    $this->container['priority'] = $priority;

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


