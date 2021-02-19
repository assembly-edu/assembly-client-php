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
 * Result Class Doc Comment
 *
 * @category Class
 * @description A result combines the other assessment principles and attaches them to a student.
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class Result implements ModelInterface, ArrayAccess
{
  const DISCRIMINATOR = null;

  /**
    * The original name of the model.
    *
    * @var string
    */
  protected static $swaggerModelName = 'Result';

  /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerTypes = [
    'object' => 'string',
    'id' => 'int',
    'student_id' => 'int',
    'subject_id' => 'int',
    'assessment_id' => 'int',
    'assessment_point_rank' => 'int',
    'facet_id' => 'int',
    'grade_id' => 'int',
    'result_date' => '\DateTime',
    'created_at' => '\DateTime',
    'updated_at' => '\DateTime'
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
    'subject_id' => 'int32',
    'assessment_id' => 'int32',
    'assessment_point_rank' => 'int32',
    'facet_id' => 'int32',
    'grade_id' => 'int32',
    'result_date' => 'date-time',
    'created_at' => 'date-time',
    'updated_at' => 'date-time'
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
    'subject_id' => 'subject_id',
    'assessment_id' => 'assessment_id',
    'assessment_point_rank' => 'assessment_point_rank',
    'facet_id' => 'facet_id',
    'grade_id' => 'grade_id',
    'result_date' => 'result_date',
    'created_at' => 'created_at',
    'updated_at' => 'updated_at'
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
    'subject_id' => 'setSubjectId',
    'assessment_id' => 'setAssessmentId',
    'assessment_point_rank' => 'setAssessmentPointRank',
    'facet_id' => 'setFacetId',
    'grade_id' => 'setGradeId',
    'result_date' => 'setResultDate',
    'created_at' => 'setCreatedAt',
    'updated_at' => 'setUpdatedAt'
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
    'subject_id' => 'getSubjectId',
    'assessment_id' => 'getAssessmentId',
    'assessment_point_rank' => 'getAssessmentPointRank',
    'facet_id' => 'getFacetId',
    'grade_id' => 'getGradeId',
    'result_date' => 'getResultDate',
    'created_at' => 'getCreatedAt',
    'updated_at' => 'getUpdatedAt'
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
    $this->container['object'] = isset($data['object']) ? $data['object'] : 'result_date';
    $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    $this->container['student_id'] = isset($data['student_id']) ? $data['student_id'] : null;
    $this->container['subject_id'] = isset($data['subject_id']) ? $data['subject_id'] : null;
    $this->container['assessment_id'] = isset($data['assessment_id']) ? $data['assessment_id'] : null;
    $this->container['assessment_point_rank'] = isset($data['assessment_point_rank']) ? $data['assessment_point_rank'] : null;
    $this->container['facet_id'] = isset($data['facet_id']) ? $data['facet_id'] : null;
    $this->container['grade_id'] = isset($data['grade_id']) ? $data['grade_id'] : null;
    $this->container['result_date'] = isset($data['result_date']) ? $data['result_date'] : null;
    $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
    $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
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
   * @param int $student_id The ID of the student that the result is attached to
   *
   * @return $this
   */
  public function setStudentId($student_id)
  {
    $this->container['student_id'] = $student_id;

    return $this;
  }

  /**
   * Gets subject_id
   *
   * @return int
   */
  public function getSubjectId()
  {
    return $this->container['subject_id'];
  }

  /**
   * Sets subject_id
   *
   * @param int $subject_id The ID of the subject that the result is attached to
   *
   * @return $this
   */
  public function setSubjectId($subject_id)
  {
    $this->container['subject_id'] = $subject_id;

    return $this;
  }

  /**
   * Gets assessment_id
   *
   * @return int
   */
  public function getAssessmentId()
  {
    return $this->container['assessment_id'];
  }

  /**
   * Sets assessment_id
   *
   * @param int $assessment_id The ID of the assessment that the result is attached to
   *
   * @return $this
   */
  public function setAssessmentId($assessment_id)
  {
    $this->container['assessment_id'] = $assessment_id;

    return $this;
  }

  /**
   * Gets assessment_point_rank
   *
   * @return int
   */
  public function getAssessmentPointRank()
  {
    return $this->container['assessment_point_rank'];
  }

  /**
   * Sets assessment_point_rank
   *
   * @param int $assessment_point_rank The rank of the assessment point
   *
   * @return $this
   */
  public function setAssessmentPointRank($assessment_point_rank)
  {
    $this->container['assessment_point_rank'] = $assessment_point_rank;

    return $this;
  }

  /**
   * Gets facet_id
   *
   * @return int
   */
  public function getFacetId()
  {
    return $this->container['facet_id'];
  }

  /**
   * Sets facet_id
   *
   * @param int $facet_id The ID of the facet that the result is attached to
   *
   * @return $this
   */
  public function setFacetId($facet_id)
  {
    $this->container['facet_id'] = $facet_id;

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
   * @param int $grade_id The ID of the grade that this result is attached to
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
   * @param \DateTime $result_date The date on which the result was recorded in the MIS or standardised assessment system
   *
   * @return $this
   */
  public function setResultDate($result_date)
  {
    $this->container['result_date'] = $result_date;

    return $this;
  }

  /**
   * Gets created_at
   *
   * @return \DateTime
   */
  public function getCreatedAt()
  {
    return $this->container['created_at'];
  }

  /**
   * Sets created_at
   *
   * @param \DateTime $created_at The date and time that the result was first created on Assembly
   *
   * @return $this
   */
  public function setCreatedAt($created_at)
  {
    $this->container['created_at'] = $created_at;

    return $this;
  }

  /**
   * Gets updated_at
   *
   * @return \DateTime
   */
  public function getUpdatedAt()
  {
    return $this->container['updated_at'];
  }

  /**
   * Sets updated_at
   *
   * @param \DateTime $updated_at The date and time that the result was last updated on Assembly
   *
   * @return $this
   */
  public function setUpdatedAt($updated_at)
  {
    $this->container['updated_at'] = $updated_at;

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


