<?php

/**
 * Assembly Developer API PHP Client
 * SDK Version 1.2.363
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
 * AttendanceSummary Class Doc Comment
 *
 * @category Class
 * @description A statiscital summary of a student&#39;s attendance for an academic year.
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class AttendanceSummary implements ModelInterface, ArrayAccess
{
  const DISCRIMINATOR = null;

  /**
    * The original name of the model.
    *
    * @var string
    */
  protected static $swaggerModelName = 'AttendanceSummary';

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
    'academic_year_id' => 'int',
    'start_date' => '\DateTime',
    'end_date' => '\DateTime',
    'possible_sessions' => 'float',
    'attended_sessions' => 'float',
    'late_sessions' => 'float',
    'authorised_absence_sessions' => 'float',
    'unauthorised_absence_sessions' => 'float'
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
    'academic_year_id' => 'int32',
    'start_date' => 'date-time',
    'end_date' => 'date-time',
    'possible_sessions' => 'float',
    'attended_sessions' => 'float',
    'late_sessions' => 'float',
    'authorised_absence_sessions' => 'float',
    'unauthorised_absence_sessions' => 'float'
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
    'academic_year_id' => 'academic_year_id',
    'start_date' => 'start_date',
    'end_date' => 'end_date',
    'possible_sessions' => 'possible_sessions',
    'attended_sessions' => 'attended_sessions',
    'late_sessions' => 'late_sessions',
    'authorised_absence_sessions' => 'authorised_absence_sessions',
    'unauthorised_absence_sessions' => 'unauthorised_absence_sessions'
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
    'academic_year_id' => 'setAcademicYearId',
    'start_date' => 'setStartDate',
    'end_date' => 'setEndDate',
    'possible_sessions' => 'setPossibleSessions',
    'attended_sessions' => 'setAttendedSessions',
    'late_sessions' => 'setLateSessions',
    'authorised_absence_sessions' => 'setAuthorisedAbsenceSessions',
    'unauthorised_absence_sessions' => 'setUnauthorisedAbsenceSessions'
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
    'academic_year_id' => 'getAcademicYearId',
    'start_date' => 'getStartDate',
    'end_date' => 'getEndDate',
    'possible_sessions' => 'getPossibleSessions',
    'attended_sessions' => 'getAttendedSessions',
    'late_sessions' => 'getLateSessions',
    'authorised_absence_sessions' => 'getAuthorisedAbsenceSessions',
    'unauthorised_absence_sessions' => 'getUnauthorisedAbsenceSessions'
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
    $this->container['object'] = isset($data['object']) ? $data['object'] : 'attendance_summary';
    $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    $this->container['student_id'] = isset($data['student_id']) ? $data['student_id'] : null;
    $this->container['registration_group_id'] = isset($data['registration_group_id']) ? $data['registration_group_id'] : null;
    $this->container['academic_year_id'] = isset($data['academic_year_id']) ? $data['academic_year_id'] : null;
    $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
    $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
    $this->container['possible_sessions'] = isset($data['possible_sessions']) ? $data['possible_sessions'] : null;
    $this->container['attended_sessions'] = isset($data['attended_sessions']) ? $data['attended_sessions'] : null;
    $this->container['late_sessions'] = isset($data['late_sessions']) ? $data['late_sessions'] : null;
    $this->container['authorised_absence_sessions'] = isset($data['authorised_absence_sessions']) ? $data['authorised_absence_sessions'] : null;
    $this->container['unauthorised_absence_sessions'] = isset($data['unauthorised_absence_sessions']) ? $data['unauthorised_absence_sessions'] : null;
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
   * @param int $registration_group_id The ID of the student's registration group
   *
   * @return $this
   */
  public function setRegistrationGroupId($registration_group_id)
  {
    $this->container['registration_group_id'] = $registration_group_id;

    return $this;
  }

  /**
   * Gets academic_year_id
   *
   * @return int
   */
  public function getAcademicYearId()
  {
    return $this->container['academic_year_id'];
  }

  /**
   * Sets academic_year_id
   *
   * @param int $academic_year_id The ID of the academic year
   *
   * @return $this
   */
  public function setAcademicYearId($academic_year_id)
  {
    $this->container['academic_year_id'] = $academic_year_id;

    return $this;
  }

  /**
   * Gets start_date
   *
   * @return \DateTime
   */
  public function getStartDate()
  {
    return $this->container['start_date'];
  }

  /**
   * Sets start_date
   *
   * @param \DateTime $start_date Start date for the attendance summary
   *
   * @return $this
   */
  public function setStartDate($start_date)
  {
    $this->container['start_date'] = $start_date;

    return $this;
  }

  /**
   * Gets end_date
   *
   * @return \DateTime
   */
  public function getEndDate()
  {
    return $this->container['end_date'];
  }

  /**
   * Sets end_date
   *
   * @param \DateTime $end_date End date for the attendance summary
   *
   * @return $this
   */
  public function setEndDate($end_date)
  {
    $this->container['end_date'] = $end_date;

    return $this;
  }

  /**
   * Gets possible_sessions
   *
   * @return float
   */
  public function getPossibleSessions()
  {
    return $this->container['possible_sessions'];
  }

  /**
   * Sets possible_sessions
   *
   * @param float $possible_sessions Number of possible sessions that could have been attended
   *
   * @return $this
   */
  public function setPossibleSessions($possible_sessions)
  {
    $this->container['possible_sessions'] = $possible_sessions;

    return $this;
  }

  /**
   * Gets attended_sessions
   *
   * @return float
   */
  public function getAttendedSessions()
  {
    return $this->container['attended_sessions'];
  }

  /**
   * Sets attended_sessions
   *
   * @param float $attended_sessions Number of sessions with present mark recorded
   *
   * @return $this
   */
  public function setAttendedSessions($attended_sessions)
  {
    $this->container['attended_sessions'] = $attended_sessions;

    return $this;
  }

  /**
   * Gets late_sessions
   *
   * @return float
   */
  public function getLateSessions()
  {
    return $this->container['late_sessions'];
  }

  /**
   * Sets late_sessions
   *
   * @param float $late_sessions Number of sessions with late mark recorded
   *
   * @return $this
   */
  public function setLateSessions($late_sessions)
  {
    $this->container['late_sessions'] = $late_sessions;

    return $this;
  }

  /**
   * Gets authorised_absence_sessions
   *
   * @return float
   */
  public function getAuthorisedAbsenceSessions()
  {
    return $this->container['authorised_absence_sessions'];
  }

  /**
   * Sets authorised_absence_sessions
   *
   * @param float $authorised_absence_sessions Number of sessions with authorised absence recorded
   *
   * @return $this
   */
  public function setAuthorisedAbsenceSessions($authorised_absence_sessions)
  {
    $this->container['authorised_absence_sessions'] = $authorised_absence_sessions;

    return $this;
  }

  /**
   * Gets unauthorised_absence_sessions
   *
   * @return float
   */
  public function getUnauthorisedAbsenceSessions()
  {
    return $this->container['unauthorised_absence_sessions'];
  }

  /**
   * Sets unauthorised_absence_sessions
   *
   * @param float $unauthorised_absence_sessions Number of sessions with unauthorised absence recorded
   *
   * @return $this
   */
  public function setUnauthorisedAbsenceSessions($unauthorised_absence_sessions)
  {
    $this->container['unauthorised_absence_sessions'] = $unauthorised_absence_sessions;

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


