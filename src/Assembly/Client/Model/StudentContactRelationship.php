<?php

/**
 * Assembly Developer API PHP Client
 * SDK Version 1.2.419
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
 * StudentContactRelationship Class Doc Comment
 *
 * @category Class
 * @description The relationship between a student and a contact person.
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class StudentContactRelationship implements ModelInterface, ArrayAccess
{
  const DISCRIMINATOR = null;

  /**
    * The original name of the model.
    *
    * @var string
    */
  protected static $swaggerModelName = 'StudentContactRelationship';

  /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerTypes = [
    'object' => 'string',
    'relationship_type' => 'string',
    'priority' => 'int',
    'parental_responsibility' => 'bool'
  ];

  /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerFormats = [
    'object' => null,
    'relationship_type' => null,
    'priority' => 'int32',
    'parental_responsibility' => null
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
    'relationship_type' => 'relationship_type',
    'priority' => 'priority',
    'parental_responsibility' => 'parental_responsibility'
  ];

  /**
   * Array of attributes to setter functions (for deserialization of responses)
   *
   * @var string[]
   */
  protected static $setters = [
    'object' => 'setObject',
    'relationship_type' => 'setRelationshipType',
    'priority' => 'setPriority',
    'parental_responsibility' => 'setParentalResponsibility'
  ];

  /**
   * Array of attributes to getter functions (for serialization of requests)
   *
   * @var string[]
   */
  protected static $getters = [
    'object' => 'getObject',
    'relationship_type' => 'getRelationshipType',
    'priority' => 'getPriority',
    'parental_responsibility' => 'getParentalResponsibility'
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
    $this->container['object'] = isset($data['object']) ? $data['object'] : 'relationship';
    $this->container['relationship_type'] = isset($data['relationship_type']) ? $data['relationship_type'] : null;
    $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
    $this->container['parental_responsibility'] = isset($data['parental_responsibility']) ? $data['parental_responsibility'] : null;
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
   * Gets relationship_type
   *
   * @return string
   */
  public function getRelationshipType()
  {
    return $this->container['relationship_type'];
  }

  /**
   * Sets relationship_type
   *
   * @param string $relationship_type The (unnormalized) relationship between the contact and the student
   *
   * @return $this
   */
  public function setRelationshipType($relationship_type)
  {
    $this->container['relationship_type'] = $relationship_type;

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
   * @param int $priority The priority of this contact for the student
   *
   * @return $this
   */
  public function setPriority($priority)
  {
    $this->container['priority'] = $priority;

    return $this;
  }

  /**
   * Gets parental_responsibility
   *
   * @return bool
   */
  public function getParentalResponsibility()
  {
    return $this->container['parental_responsibility'];
  }

  /**
   * Sets parental_responsibility
   *
   * @param bool $parental_responsibility Indicates whether the contact has parental responsibility for the student, they are a parent or guardian for example
   *
   * @return $this
   */
  public function setParentalResponsibility($parental_responsibility)
  {
    $this->container['parental_responsibility'] = $parental_responsibility;

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


