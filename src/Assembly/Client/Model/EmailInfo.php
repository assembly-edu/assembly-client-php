<?php

/**
 * Assembly Developer API PHP Client
 * SDK Version 1.2.412
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
 * EmailInfo Class Doc Comment
 *
 * @category Class
 * @description An email address.
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class EmailInfo implements ModelInterface, ArrayAccess
{
  const DISCRIMINATOR = null;

  /**
    * The original name of the model.
    *
    * @var string
    */
  protected static $swaggerModelName = 'EmailInfo';

  /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerTypes = [
    'object' => 'string',
    'id' => 'int',
    'email' => 'string',
    'type' => 'string',
    'is_primary' => 'bool'
  ];

  /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerFormats = [
    'object' => null,
    'id' => 'int32',
    'email' => null,
    'type' => null,
    'is_primary' => null
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
    'email' => 'email',
    'type' => 'type',
    'is_primary' => 'is_primary'
  ];

  /**
   * Array of attributes to setter functions (for deserialization of responses)
   *
   * @var string[]
   */
  protected static $setters = [
    'object' => 'setObject',
    'id' => 'setId',
    'email' => 'setEmail',
    'type' => 'setType',
    'is_primary' => 'setIsPrimary'
  ];

  /**
   * Array of attributes to getter functions (for serialization of requests)
   *
   * @var string[]
   */
  protected static $getters = [
    'object' => 'getObject',
    'id' => 'getId',
    'email' => 'getEmail',
    'type' => 'getType',
    'is_primary' => 'getIsPrimary'
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

  const TYPE_HOME = 'Home';
  const TYPE_WORK = 'Work';
  const TYPE_OTHER = 'Other';
  const TYPE_NULL = 'null';
  

  
  /**
   * Gets allowable values of the enum
   *
   * @return string[]
   */
  public function getTypeAllowableValues()
  {
    return [
      self::TYPE_HOME,
      self::TYPE_WORK,
      self::TYPE_OTHER,
      self::TYPE_NULL,
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
    $this->container['object'] = isset($data['object']) ? $data['object'] : 'email';
    $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    $this->container['email'] = isset($data['email']) ? $data['email'] : null;
    $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    $this->container['is_primary'] = isset($data['is_primary']) ? $data['is_primary'] : null;
  }

  /**
   * Show all the invalid properties with reasons.
   *
   * @return array invalid properties with reasons
   */
  public function listInvalidProperties()
  {
    $invalidProperties = [];

    $allowedValues = $this->getTypeAllowableValues();
    if (!in_array($this->container['type'], $allowedValues)) {
      $invalidProperties[] = sprintf(
        "invalid value for 'type', must be one of '%s'",
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

    $allowedValues = $this->getTypeAllowableValues();
    if (!in_array($this->container['type'], $allowedValues)) {
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
   * Gets email
   *
   * @return string
   */
  public function getEmail()
  {
    return $this->container['email'];
  }

  /**
   * Sets email
   *
   * @param string $email The email address
   *
   * @return $this
   */
  public function setEmail($email)
  {
    $this->container['email'] = $email;

    return $this;
  }

  /**
   * Gets type
   *
   * @return string
   */
  public function getType()
  {
    return $this->container['type'];
  }

  /**
   * Sets type
   *
   * @param string $type The location associated with the email address
   *
   * @return $this
   */
  public function setType($type)
  {
    $allowedValues = $this->getTypeAllowableValues();
    if (!is_null($type) && !in_array($type, $allowedValues)) {
      throw new \InvalidArgumentException(
        sprintf(
          "Invalid value for 'type', must be one of '%s'",
          implode("', '", $allowedValues)
        )
      );
    }
    $this->container['type'] = $type;

    return $this;
  }

  /**
   * Gets is_primary
   *
   * @return bool
   */
  public function getIsPrimary()
  {
    return $this->container['is_primary'];
  }

  /**
   * Sets is_primary
   *
   * @param bool $is_primary Indicates whether this is the primary email address
   *
   * @return $this
   */
  public function setIsPrimary($is_primary)
  {
    $this->container['is_primary'] = $is_primary;

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


