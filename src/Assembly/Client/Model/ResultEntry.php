<?php

/**
 * Assembly Developer API PHP Client
 * SDK Version 1.2.407
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
 * ResultEntry Class Doc Comment
 *
 * @category Class
 * @description A result for a student to be created on the Platform
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class ResultEntry implements ModelInterface, ArrayAccess
{
  const DISCRIMINATOR = null;

  /**
    * The original name of the model.
    *
    * @var string
    */
  protected static $swaggerModelName = 'ResultEntry';

  /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerTypes = [
    'student_id' => 'int',
    'result_id' => 'int',
    'grade_id' => 'int',
    'result_date' => '\DateTime'
  ];

  /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerFormats = [
    'student_id' => 'int32',
    'result_id' => 'int32',
    'grade_id' => 'int32',
    'result_date' => 'date-time'
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
    'student_id' => 'student_id',
    'result_id' => 'result_id',
    'grade_id' => 'grade_id',
    'result_date' => 'result_date'
  ];

  /**
   * Array of attributes to setter functions (for deserialization of responses)
   *
   * @var string[]
   */
  protected static $setters = [
    'student_id' => 'setStudentId',
    'result_id' => 'setResultId',
    'grade_id' => 'setGradeId',
    'result_date' => 'setResultDate'
  ];

  /**
   * Array of attributes to getter functions (for serialization of requests)
   *
   * @var string[]
   */
  protected static $getters = [
    'student_id' => 'getStudentId',
    'result_id' => 'getResultId',
    'grade_id' => 'getGradeId',
    'result_date' => 'getResultDate'
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
    $this->container['student_id'] = isset($data['student_id']) ? $data['student_id'] : null;
    $this->container['result_id'] = isset($data['result_id']) ? $data['result_id'] : null;
    $this->container['grade_id'] = isset($data['grade_id']) ? $data['grade_id'] : null;
    $this->container['result_date'] = isset($data['result_date']) ? $data['result_date'] : null;
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
   * Gets student_id
   *
   * @return int
   */
  public function getStudentId()
  {
    return $this->container['student_id'];
  }

  /**
   * Sets student_id
   *
   * @param int $student_id The ID of the student
   *
   * @return $this
   */
  public function setStudentId($student_id)
  {
    $this->container['student_id'] = $student_id;

    return $this;
  }

  /**
   * Gets result_id
   *
   * @return int
   */
  public function getResultId()
  {
    return $this->container['result_id'];
  }

  /**
   * Sets result_id
   *
   * @param int $result_id The ID of the result
   *
   * @return $this
   */
  public function setResultId($result_id)
  {
    $this->container['result_id'] = $result_id;

    return $this;
  }

  /**
   * Gets grade_id
   *
   * @return int
   */
  public function getGradeId()
  {
    return $this->container['grade_id'];
  }

  /**
   * Sets grade_id
   *
   * @param int $grade_id The ID of the grade
   *
   * @return $this
   */
  public function setGradeId($grade_id)
  {
    $this->container['grade_id'] = $grade_id;

    return $this;
  }

  /**
   * Gets result_date
   *
   * @return \DateTime
   */
  public function getResultDate()
  {
    return $this->container['result_date'];
  }

  /**
   * Sets result_date
   *
   * @param \DateTime $result_date The date/time that this result was recorded
   *
   * @return $this
   */
  public function setResultDate($result_date)
  {
    $this->container['result_date'] = $result_date;

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


