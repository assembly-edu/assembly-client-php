<?php

/**
 * Assembly Developer API PHP Client
 * SDK Version 1.2.472
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
 * GroupMisSubjectSubject Class Doc Comment
 *
 * @category Class
 * @description An Assembly Platform subject. These subjects are mapped to one or multiple subjects within a school&#39;s MIS and are used to normalise school to school variance in subject naming to a known and fixed set within the Assembly Platform.
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class GroupMisSubjectSubject implements ModelInterface, ArrayAccess
{
  const DISCRIMINATOR = null;

  /**
    * The original name of the model.
    *
    * @var string
    */
  protected static $swaggerModelName = 'GroupMisSubjectSubject';

  /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerTypes = [
    'object' => 'string',
    'id' => 'int',
    'code' => 'string',
    'name' => 'string',
    'alt_name' => 'string',
    'alt_code' => 'string'
  ];

  /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerFormats = [
    'object' => null,
    'id' => 'int32',
    'code' => null,
    'name' => null,
    'alt_name' => null,
    'alt_code' => null
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
    'code' => 'code',
    'name' => 'name',
    'alt_name' => 'alt_name',
    'alt_code' => 'alt_code'
  ];

  /**
   * Array of attributes to setter functions (for deserialization of responses)
   *
   * @var string[]
   */
  protected static $setters = [
    'object' => 'setObject',
    'id' => 'setId',
    'code' => 'setCode',
    'name' => 'setName',
    'alt_name' => 'setAltName',
    'alt_code' => 'setAltCode'
  ];

  /**
   * Array of attributes to getter functions (for serialization of requests)
   *
   * @var string[]
   */
  protected static $getters = [
    'object' => 'getObject',
    'id' => 'getId',
    'code' => 'getCode',
    'name' => 'getName',
    'alt_name' => 'getAltName',
    'alt_code' => 'getAltCode'
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
    $this->container['object'] = isset($data['object']) ? $data['object'] : 'subject';
    $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    $this->container['code'] = isset($data['code']) ? $data['code'] : null;
    $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    $this->container['alt_name'] = isset($data['alt_name']) ? $data['alt_name'] : null;
    $this->container['alt_code'] = isset($data['alt_code']) ? $data['alt_code'] : null;
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
   * Gets code
   *
   * @return string
   */
  public function getCode()
  {
    return $this->container['code'];
  }

  /**
   * Sets code
   *
   * @param string $code Shortened code of subject
   *
   * @return $this
   */
  public function setCode($code)
  {
    $this->container['code'] = $code;

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
   * @param string $name Full name of subject
   *
   * @return $this
   */
  public function setName($name)
  {
    $this->container['name'] = $name;

    return $this;
  }

  /**
   * Gets alt_name
   *
   * @return string
   */
  public function getAltName()
  {
    return $this->container['alt_name'];
  }

  /**
   * Sets alt_name
   *
   * @param string $alt_name An alternative name for the subject in the MIS
   *
   * @return $this
   */
  public function setAltName($alt_name)
  {
    $this->container['alt_name'] = $alt_name;

    return $this;
  }

  /**
   * Gets alt_code
   *
   * @return string
   */
  public function getAltCode()
  {
    return $this->container['alt_code'];
  }

  /**
   * Sets alt_code
   *
   * @param string $alt_code An alternative code for the subject in the MIS
   *
   * @return $this
   */
  public function setAltCode($alt_code)
  {
    $this->container['alt_code'] = $alt_code;

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


