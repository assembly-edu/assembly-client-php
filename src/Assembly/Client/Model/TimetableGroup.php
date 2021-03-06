<?php

/**
 * Assembly Developer API PHP Client
 * SDK Version 1.2.475
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
 * TimetableGroup Class Doc Comment
 *
 * @category Class
 * @description A grouping of students. A teaching or registration group for example.
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class TimetableGroup implements ModelInterface, ArrayAccess
{
  const DISCRIMINATOR = null;

  /**
    * The original name of the model.
    *
    * @var string
    */
  protected static $swaggerModelName = 'TimetableGroup';

  /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerTypes = [
    'object' => 'string',
    'id' => 'int',
    'name' => 'string',
    'code' => 'string',
    'type' => 'string',
    'mis_subject' => '\Assembly\Client\Model\TimetableGroupMisSubject',
    'subject' => '\Assembly\Client\Model\MisSubjectSubject'
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
    'code' => null,
    'type' => null,
    'mis_subject' => null,
    'subject' => null
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
    'code' => 'code',
    'type' => 'type',
    'mis_subject' => 'mis_subject',
    'subject' => 'subject'
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
    'code' => 'setCode',
    'type' => 'setType',
    'mis_subject' => 'setMisSubject',
    'subject' => 'setSubject'
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
    'code' => 'getCode',
    'type' => 'getType',
    'mis_subject' => 'getMisSubject',
    'subject' => 'getSubject'
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

  const TYPE_YEAR_GROUP = 'YearGroup';
  const TYPE_TEACHING_GROUP = 'TeachingGroup';
  const TYPE_REGISTRATION_GROUP = 'RegistrationGroup';
  const TYPE_HOUSE_GROUP = 'HouseGroup';
  const TYPE_NON_TEACHING_GROUP = 'NonTeachingGroup';
  

  
  /**
   * Gets allowable values of the enum
   *
   * @return string[]
   */
  public function getTypeAllowableValues()
  {
    return [
      self::TYPE_YEAR_GROUP,
      self::TYPE_TEACHING_GROUP,
      self::TYPE_REGISTRATION_GROUP,
      self::TYPE_HOUSE_GROUP,
      self::TYPE_NON_TEACHING_GROUP,
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
    $this->container['object'] = isset($data['object']) ? $data['object'] : 'group';
    $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    $this->container['code'] = isset($data['code']) ? $data['code'] : null;
    $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    $this->container['mis_subject'] = isset($data['mis_subject']) ? $data['mis_subject'] : null;
    $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
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
   * @param string $name Name of the group
   *
   * @return $this
   */
  public function setName($name)
  {
    $this->container['name'] = $name;

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
   * @param string $code The code of the year that the group belongs to
   *
   * @return $this
   */
  public function setCode($code)
  {
    $this->container['code'] = $code;

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
   * @param string $type The type of group
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
   * Gets mis_subject
   *
   * @return \Assembly\Client\Model\TimetableGroupMisSubject
   */
  public function getMisSubject()
  {
    return $this->container['mis_subject'];
  }

  /**
   * Sets mis_subject
   *
   * @param \Assembly\Client\Model\TimetableGroupMisSubject $mis_subject mis_subject
   *
   * @return $this
   */
  public function setMisSubject($mis_subject)
  {
    $this->container['mis_subject'] = $mis_subject;

    return $this;
  }

  /**
   * Gets subject
   *
   * @return \Assembly\Client\Model\MisSubjectSubject
   */
  public function getSubject()
  {
    return $this->container['subject'];
  }

  /**
   * Sets subject
   *
   * @param \Assembly\Client\Model\MisSubjectSubject $subject subject
   *
   * @return $this
   */
  public function setSubject($subject)
  {
    $this->container['subject'] = $subject;

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


