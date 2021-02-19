<?php

/**
 * Assembly Developer API PHP Client
 * SDK Version 1.2.473
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
 * Attendance Class Doc Comment
 *
 * @category Class
 * @description An AM or PM roll call attendance mark for a student.
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class Attendance implements ModelInterface, ArrayAccess
{
  const DISCRIMINATOR = null;

  /**
    * The original name of the model.
    *
    * @var string
    */
  protected static $swaggerModelName = 'Attendance';

  /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerTypes = [
    'object' => 'string',
    'id' => 'int',
    'student_id' => 'int',
    'registration_group_id' => 'int',
    'group_id' => 'int',
    'session_date' => '\DateTime',
    'session_name' => 'string',
    'attendance_mark' => 'string',
    'minutes_late' => 'int',
    'comments' => 'string'
  ];

  /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerFormats = [
    'object' => null,
    'id' => 'int32',
    'student_id' => 'int32',
    'registration_group_id' => 'int32',
    'group_id' => 'int32',
    'session_date' => 'date-time',
    'session_name' => null,
    'attendance_mark' => null,
    'minutes_late' => 'int32',
    'comments' => null
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
    'student_id' => 'student_id',
    'registration_group_id' => 'registration_group_id',
    'group_id' => 'group_id',
    'session_date' => 'session_date',
    'session_name' => 'session_name',
    'attendance_mark' => 'attendance_mark',
    'minutes_late' => 'minutes_late',
    'comments' => 'comments'
  ];

  /**
   * Array of attributes to setter functions (for deserialization of responses)
   *
   * @var string[]
   */
  protected static $setters = [
    'object' => 'setObject',
    'id' => 'setId',
    'student_id' => 'setStudentId',
    'registration_group_id' => 'setRegistrationGroupId',
    'group_id' => 'setGroupId',
    'session_date' => 'setSessionDate',
    'session_name' => 'setSessionName',
    'attendance_mark' => 'setAttendanceMark',
    'minutes_late' => 'setMinutesLate',
    'comments' => 'setComments'
  ];

  /**
   * Array of attributes to getter functions (for serialization of requests)
   *
   * @var string[]
   */
  protected static $getters = [
    'object' => 'getObject',
    'id' => 'getId',
    'student_id' => 'getStudentId',
    'registration_group_id' => 'getRegistrationGroupId',
    'group_id' => 'getGroupId',
    'session_date' => 'getSessionDate',
    'session_name' => 'getSessionName',
    'attendance_mark' => 'getAttendanceMark',
    'minutes_late' => 'getMinutesLate',
    'comments' => 'getComments'
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
    $this->container['object'] = isset($data['object']) ? $data['object'] : 'attendance';
    $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    $this->container['student_id'] = isset($data['student_id']) ? $data['student_id'] : null;
    $this->container['registration_group_id'] = isset($data['registration_group_id']) ? $data['registration_group_id'] : null;
    $this->container['group_id'] = isset($data['group_id']) ? $data['group_id'] : null;
    $this->container['session_date'] = isset($data['session_date']) ? $data['session_date'] : null;
    $this->container['session_name'] = isset($data['session_name']) ? $data['session_name'] : null;
    $this->container['attendance_mark'] = isset($data['attendance_mark']) ? $data['attendance_mark'] : null;
    $this->container['minutes_late'] = isset($data['minutes_late']) ? $data['minutes_late'] : null;
    $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
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
   * @param int $student_id The ID of the student that the attendance is attached to
   *
   * @return $this
   */
  public function setStudentId($student_id)
  {
    $this->container['student_id'] = $student_id;

    return $this;
  }

  /**
   * Gets registration_group_id
   *
   * @return int
   */
  public function getRegistrationGroupId()
  {
    return $this->container['registration_group_id'];
  }

  /**
   * Sets registration_group_id
   *
   * @param int $registration_group_id The ID of the registration group that the attendance is attached to
   *
   * @return $this
   */
  public function setRegistrationGroupId($registration_group_id)
  {
    $this->container['registration_group_id'] = $registration_group_id;

    return $this;
  }

  /**
   * Gets group_id
   *
   * @return int
   */
  public function getGroupId()
  {
    return $this->container['group_id'];
  }

  /**
   * Sets group_id
   *
   * @param int $group_id The ID of the group that the attendance is attached to (requires `groups` scope)
   *
   * @return $this
   */
  public function setGroupId($group_id)
  {
    $this->container['group_id'] = $group_id;

    return $this;
  }

  /**
   * Gets session_date
   *
   * @return \DateTime
   */
  public function getSessionDate()
  {
    return $this->container['session_date'];
  }

  /**
   * Sets session_date
   *
   * @param \DateTime $session_date The date of the attendance
   *
   * @return $this
   */
  public function setSessionDate($session_date)
  {
    $this->container['session_date'] = $session_date;

    return $this;
  }

  /**
   * Gets session_name
   *
   * @return string
   */
  public function getSessionName()
  {
    return $this->container['session_name'];
  }

  /**
   * Sets session_name
   *
   * @param string $session_name Denotes whether the attendance is an AM session or PM session (morning or afternoon)
   *
   * @return $this
   */
  public function setSessionName($session_name)
  {
    $this->container['session_name'] = $session_name;

    return $this;
  }

  /**
   * Gets attendance_mark
   *
   * @return string
   */
  public function getAttendanceMark()
  {
    return $this->container['attendance_mark'];
  }

  /**
   * Sets attendance_mark
   *
   * @param string $attendance_mark The attendance mark standardised to code set CS066/D00225 in CBDS
   *
   * @return $this
   */
  public function setAttendanceMark($attendance_mark)
  {
    $this->container['attendance_mark'] = $attendance_mark;

    return $this;
  }

  /**
   * Gets minutes_late
   *
   * @return int
   */
  public function getMinutesLate()
  {
    return $this->container['minutes_late'];
  }

  /**
   * Sets minutes_late
   *
   * @param int $minutes_late If the attendance mark is \"L\" for \"Late\", how many minutes late the student was
   *
   * @return $this
   */
  public function setMinutesLate($minutes_late)
  {
    $this->container['minutes_late'] = $minutes_late;

    return $this;
  }

  /**
   * Gets comments
   *
   * @return string
   */
  public function getComments()
  {
    return $this->container['comments'];
  }

  /**
   * Sets comments
   *
   * @param string $comments Any additional comments
   *
   * @return $this
   */
  public function setComments($comments)
  {
    $this->container['comments'] = $comments;

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


