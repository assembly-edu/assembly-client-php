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
 * ResultBody Class Doc Comment
 *
 * @category Class
 * @description A result to updated on the Platform
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class ResultBody implements ModelInterface, ArrayAccess
{
  const DISCRIMINATOR = null;

  /**
    * The original name of the model.
    *
    * @var string
    */
  protected static $swaggerModelName = 'ResultBody';

  /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerTypes = [
    'subject_id' => 'int',
    'facet_id' => 'int',
    'assessment_point_rank' => 'int',
    'assessment_id' => 'int',
    'results' => '\Assembly\Client\Model\ResultEntry[]'
  ];

  /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerFormats = [
    'subject_id' => 'int32',
    'facet_id' => 'int32',
    'assessment_point_rank' => 'int32',
    'assessment_id' => 'int32',
    'results' => null
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
    'subject_id' => 'subject_id',
    'facet_id' => 'facet_id',
    'assessment_point_rank' => 'assessment_point_rank',
    'assessment_id' => 'assessment_id',
    'results' => 'results'
  ];

  /**
   * Array of attributes to setter functions (for deserialization of responses)
   *
   * @var string[]
   */
  protected static $setters = [
    'subject_id' => 'setSubjectId',
    'facet_id' => 'setFacetId',
    'assessment_point_rank' => 'setAssessmentPointRank',
    'assessment_id' => 'setAssessmentId',
    'results' => 'setResults'
  ];

  /**
   * Array of attributes to getter functions (for serialization of requests)
   *
   * @var string[]
   */
  protected static $getters = [
    'subject_id' => 'getSubjectId',
    'facet_id' => 'getFacetId',
    'assessment_point_rank' => 'getAssessmentPointRank',
    'assessment_id' => 'getAssessmentId',
    'results' => 'getResults'
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
    $this->container['subject_id'] = isset($data['subject_id']) ? $data['subject_id'] : null;
    $this->container['facet_id'] = isset($data['facet_id']) ? $data['facet_id'] : null;
    $this->container['assessment_point_rank'] = isset($data['assessment_point_rank']) ? $data['assessment_point_rank'] : null;
    $this->container['assessment_id'] = isset($data['assessment_id']) ? $data['assessment_id'] : null;
    $this->container['results'] = isset($data['results']) ? $data['results'] : null;
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
   * @param int $subject_id The ID of the associated subject
   *
   * @return $this
   */
  public function setSubjectId($subject_id)
  {
    $this->container['subject_id'] = $subject_id;

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
   * @param int $facet_id The ID of the associated facet
   *
   * @return $this
   */
  public function setFacetId($facet_id)
  {
    $this->container['facet_id'] = $facet_id;

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
   * @param int $assessment_point_rank The rank of the associated assessment point
   *
   * @return $this
   */
  public function setAssessmentPointRank($assessment_point_rank)
  {
    $this->container['assessment_point_rank'] = $assessment_point_rank;

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
   * @param int $assessment_id The ID of the associated assessment
   *
   * @return $this
   */
  public function setAssessmentId($assessment_id)
  {
    $this->container['assessment_id'] = $assessment_id;

    return $this;
  }

  /**
   * Gets results
   *
   * @return \Assembly\Client\Model\ResultEntry[]
   */
  public function getResults()
  {
    return $this->container['results'];
  }

  /**
   * Sets results
   *
   * @param \Assembly\Client\Model\ResultEntry[] $results The results to record
   *
   * @return $this
   */
  public function setResults($results)
  {
    $this->container['results'] = $results;

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


