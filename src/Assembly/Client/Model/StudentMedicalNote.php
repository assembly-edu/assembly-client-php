<?php

/**
 * Assembly Developer API PHP Client
 * SDK Version 1.2.404
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
 * StudentMedicalNote Class Doc Comment
 *
 * @category Class
 * @description A medical note about a student, possibly related to a medical condition
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class StudentMedicalNote implements ModelInterface, ArrayAccess
{
  const DISCRIMINATOR = null;

  /**
    * The original name of the model.
    *
    * @var string
    */
  protected static $swaggerModelName = 'StudentMedicalNote';

  /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerTypes = [
    'object' => 'string',
    'id' => 'int',
    'status' => 'string',
    'summary' => 'string',
    'detail' => 'string',
    'created_by_id' => 'int',
    'last_modified_by_id' => 'int',
    'last_modified_date' => '\DateTime'
  ];

  /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerFormats = [
    'object' => null,
    'id' => 'int32',
    'status' => null,
    'summary' => null,
    'detail' => null,
    'created_by_id' => 'int32',
    'last_modified_by_id' => 'int32',
    'last_modified_date' => 'date-time'
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
    'status' => 'status',
    'summary' => 'summary',
    'detail' => 'detail',
    'created_by_id' => 'created_by_id',
    'last_modified_by_id' => 'last_modified_by_id',
    'last_modified_date' => 'last_modified_date'
  ];

  /**
   * Array of attributes to setter functions (for deserialization of responses)
   *
   * @var string[]
   */
  protected static $setters = [
    'object' => 'setObject',
    'id' => 'setId',
    'status' => 'setStatus',
    'summary' => 'setSummary',
    'detail' => 'setDetail',
    'created_by_id' => 'setCreatedById',
    'last_modified_by_id' => 'setLastModifiedById',
    'last_modified_date' => 'setLastModifiedDate'
  ];

  /**
   * Array of attributes to getter functions (for serialization of requests)
   *
   * @var string[]
   */
  protected static $getters = [
    'object' => 'getObject',
    'id' => 'getId',
    'status' => 'getStatus',
    'summary' => 'getSummary',
    'detail' => 'getDetail',
    'created_by_id' => 'getCreatedById',
    'last_modified_by_id' => 'getLastModifiedById',
    'last_modified_date' => 'getLastModifiedDate'
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
    $this->container['object'] = isset($data['object']) ? $data['object'] : 'student_medical_note';
    $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
    $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
    $this->container['created_by_id'] = isset($data['created_by_id']) ? $data['created_by_id'] : null;
    $this->container['last_modified_by_id'] = isset($data['last_modified_by_id']) ? $data['last_modified_by_id'] : null;
    $this->container['last_modified_date'] = isset($data['last_modified_date']) ? $data['last_modified_date'] : null;
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
   * Gets status
   *
   * @return string
   */
  public function getStatus()
  {
    return $this->container['status'];
  }

  /**
   * Sets status
   *
   * @param string $status The status of the medical note, such as `PUBLIC`
   *
   * @return $this
   */
  public function setStatus($status)
  {
    $this->container['status'] = $status;

    return $this;
  }

  /**
   * Gets summary
   *
   * @return string
   */
  public function getSummary()
  {
    return $this->container['summary'];
  }

  /**
   * Sets summary
   *
   * @param string $summary A summary of the note's content
   *
   * @return $this
   */
  public function setSummary($summary)
  {
    $this->container['summary'] = $summary;

    return $this;
  }

  /**
   * Gets detail
   *
   * @return string
   */
  public function getDetail()
  {
    return $this->container['detail'];
  }

  /**
   * Sets detail
   *
   * @param string $detail Further detail of the medical note
   *
   * @return $this
   */
  public function setDetail($detail)
  {
    $this->container['detail'] = $detail;

    return $this;
  }

  /**
   * Gets created_by_id
   *
   * @return int
   */
  public function getCreatedById()
  {
    return $this->container['created_by_id'];
  }

  /**
   * Sets created_by_id
   *
   * @param int $created_by_id The ID of the staff member who created the note
   *
   * @return $this
   */
  public function setCreatedById($created_by_id)
  {
    $this->container['created_by_id'] = $created_by_id;

    return $this;
  }

  /**
   * Gets last_modified_by_id
   *
   * @return int
   */
  public function getLastModifiedById()
  {
    return $this->container['last_modified_by_id'];
  }

  /**
   * Sets last_modified_by_id
   *
   * @param int $last_modified_by_id The ID of the staff member who last modified the note
   *
   * @return $this
   */
  public function setLastModifiedById($last_modified_by_id)
  {
    $this->container['last_modified_by_id'] = $last_modified_by_id;

    return $this;
  }

  /**
   * Gets last_modified_date
   *
   * @return \DateTime
   */
  public function getLastModifiedDate()
  {
    return $this->container['last_modified_date'];
  }

  /**
   * Sets last_modified_date
   *
   * @param \DateTime $last_modified_date The date and time that the note was last changed
   *
   * @return $this
   */
  public function setLastModifiedDate($last_modified_date)
  {
    $this->container['last_modified_date'] = $last_modified_date;

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


