<?php

/**
 * Assembly Developer API PHP Client
 * SDK Version 1.2.474
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
 * TeachingGroup Class Doc Comment
 *
 * @category Class
 * @description A grouping in which students are taught a subject.
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class TeachingGroup implements ModelInterface, ArrayAccess
{
  const DISCRIMINATOR = null;

  /**
    * The original name of the model.
    *
    * @var string
    */
  protected static $swaggerModelName = 'TeachingGroup';

  /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerTypes = [
    'object' => 'string',
    'id' => 'int',
    'name' => 'string',
    'start_date' => '\DateTime',
    'end_date' => '\DateTime',
    'academic_year_id' => 'int',
    'supervisor_ids' => 'int[]',
    'student_ids' => 'int[]',
    'subject' => '\Assembly\Client\Model\Subject',
    'mis_level' => 'string',
    'assessment' => '\Assembly\Client\Model\Assessment'
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
    'start_date' => 'date-time',
    'end_date' => 'date-time',
    'academic_year_id' => 'int32',
    'supervisor_ids' => 'int32',
    'student_ids' => 'int32',
    'subject' => null,
    'mis_level' => null,
    'assessment' => null
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
    'start_date' => 'start_date',
    'end_date' => 'end_date',
    'academic_year_id' => 'academic_year_id',
    'supervisor_ids' => 'supervisor_ids',
    'student_ids' => 'student_ids',
    'subject' => 'subject',
    'mis_level' => 'mis_level',
    'assessment' => 'assessment'
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
    'start_date' => 'setStartDate',
    'end_date' => 'setEndDate',
    'academic_year_id' => 'setAcademicYearId',
    'supervisor_ids' => 'setSupervisorIds',
    'student_ids' => 'setStudentIds',
    'subject' => 'setSubject',
    'mis_level' => 'setMisLevel',
    'assessment' => 'setAssessment'
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
    'start_date' => 'getStartDate',
    'end_date' => 'getEndDate',
    'academic_year_id' => 'getAcademicYearId',
    'supervisor_ids' => 'getSupervisorIds',
    'student_ids' => 'getStudentIds',
    'subject' => 'getSubject',
    'mis_level' => 'getMisLevel',
    'assessment' => 'getAssessment'
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
    $this->container['object'] = isset($data['object']) ? $data['object'] : 'teaching_group';
    $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
    $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
    $this->container['academic_year_id'] = isset($data['academic_year_id']) ? $data['academic_year_id'] : null;
    $this->container['supervisor_ids'] = isset($data['supervisor_ids']) ? $data['supervisor_ids'] : null;
    $this->container['student_ids'] = isset($data['student_ids']) ? $data['student_ids'] : null;
    $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
    $this->container['mis_level'] = isset($data['mis_level']) ? $data['mis_level'] : null;
    $this->container['assessment'] = isset($data['assessment']) ? $data['assessment'] : null;
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
   * @param string $name Name of teaching group
   *
   * @return $this
   */
  public function setName($name)
  {
    $this->container['name'] = $name;

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
   * @param \DateTime $start_date The start date of the teaching group
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
   * @param \DateTime $end_date The end date of the teaching group
   *
   * @return $this
   */
  public function setEndDate($end_date)
  {
    $this->container['end_date'] = $end_date;

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
   * Gets supervisor_ids
   *
   * @return int[]
   */
  public function getSupervisorIds()
  {
    return $this->container['supervisor_ids'];
  }

  /**
   * Sets supervisor_ids
   *
   * @param int[] $supervisor_ids The IDs of supervisors (staff members) associated with the teaching group
   *
   * @return $this
   */
  public function setSupervisorIds($supervisor_ids)
  {
    $this->container['supervisor_ids'] = $supervisor_ids;

    return $this;
  }

  /**
   * Gets student_ids
   *
   * @return int[]
   */
  public function getStudentIds()
  {
    return $this->container['student_ids'];
  }

  /**
   * Sets student_ids
   *
   * @param int[] $student_ids The IDs of members (students) associated with the teaching group
   *
   * @return $this
   */
  public function setStudentIds($student_ids)
  {
    $this->container['student_ids'] = $student_ids;

    return $this;
  }

  /**
   * Gets subject
   *
   * @return \Assembly\Client\Model\Subject
   */
  public function getSubject()
  {
    return $this->container['subject'];
  }

  /**
   * Sets subject
   *
   * @param \Assembly\Client\Model\Subject $subject subject
   *
   * @return $this
   */
  public function setSubject($subject)
  {
    $this->container['subject'] = $subject;

    return $this;
  }

  /**
   * Gets mis_level
   *
   * @return string
   */
  public function getMisLevel()
  {
    return $this->container['mis_level'];
  }

  /**
   * Sets mis_level
   *
   * @param string $mis_level The official examination or assessment \"level\" of the teaching group taken directly from the MIS
   *
   * @return $this
   */
  public function setMisLevel($mis_level)
  {
    $this->container['mis_level'] = $mis_level;

    return $this;
  }

  /**
   * Gets assessment
   *
   * @return \Assembly\Client\Model\Assessment
   */
  public function getAssessment()
  {
    return $this->container['assessment'];
  }

  /**
   * Sets assessment
   *
   * @param \Assembly\Client\Model\Assessment $assessment assessment
   *
   * @return $this
   */
  public function setAssessment($assessment)
  {
    $this->container['assessment'] = $assessment;

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


