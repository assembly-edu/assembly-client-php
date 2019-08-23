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
 * StudentMedical Class Doc Comment
 *
 * @category Class
 * @description Student medical information (this will only be returned if &#x60;&amp;medical&#x3D;true&#x60; is included in your request)
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class StudentMedical implements ModelInterface, ArrayAccess
{
  const DISCRIMINATOR = null;

  /**
    * The original name of the model.
    *
    * @var string
    */
  protected static $swaggerModelName = 'StudentMedical';

  /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerTypes = [
    'object' => 'string',
    'nhs_number' => 'string',
    'is_pregnant' => 'bool',
    'has_emergency_consent' => 'bool',
    'conditions' => '\Assembly\Client\Model\StudentMedicalCondition[]',
    'dietary_needs' => 'string[]',
    'notes' => '\Assembly\Client\Model\StudentMedicalNote[]'
  ];

  /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerFormats = [
    'object' => null,
    'nhs_number' => null,
    'is_pregnant' => null,
    'has_emergency_consent' => null,
    'conditions' => null,
    'dietary_needs' => null,
    'notes' => null
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
    'nhs_number' => 'nhs_number',
    'is_pregnant' => 'is_pregnant',
    'has_emergency_consent' => 'has_emergency_consent',
    'conditions' => 'conditions',
    'dietary_needs' => 'dietary_needs',
    'notes' => 'notes'
  ];

  /**
   * Array of attributes to setter functions (for deserialization of responses)
   *
   * @var string[]
   */
  protected static $setters = [
    'object' => 'setObject',
    'nhs_number' => 'setNhsNumber',
    'is_pregnant' => 'setIsPregnant',
    'has_emergency_consent' => 'setHasEmergencyConsent',
    'conditions' => 'setConditions',
    'dietary_needs' => 'setDietaryNeeds',
    'notes' => 'setNotes'
  ];

  /**
   * Array of attributes to getter functions (for serialization of requests)
   *
   * @var string[]
   */
  protected static $getters = [
    'object' => 'getObject',
    'nhs_number' => 'getNhsNumber',
    'is_pregnant' => 'getIsPregnant',
    'has_emergency_consent' => 'getHasEmergencyConsent',
    'conditions' => 'getConditions',
    'dietary_needs' => 'getDietaryNeeds',
    'notes' => 'getNotes'
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
    $this->container['object'] = isset($data['object']) ? $data['object'] : 'student_medical';
    $this->container['nhs_number'] = isset($data['nhs_number']) ? $data['nhs_number'] : null;
    $this->container['is_pregnant'] = isset($data['is_pregnant']) ? $data['is_pregnant'] : null;
    $this->container['has_emergency_consent'] = isset($data['has_emergency_consent']) ? $data['has_emergency_consent'] : null;
    $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
    $this->container['dietary_needs'] = isset($data['dietary_needs']) ? $data['dietary_needs'] : null;
    $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
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
   * Gets nhs_number
   *
   * @return string
   */
  public function getNhsNumber()
  {
    return $this->container['nhs_number'];
  }

  /**
   * Sets nhs_number
   *
   * @param string $nhs_number Student's NHS number
   *
   * @return $this
   */
  public function setNhsNumber($nhs_number)
  {
    $this->container['nhs_number'] = $nhs_number;

    return $this;
  }

  /**
   * Gets is_pregnant
   *
   * @return bool
   */
  public function getIsPregnant()
  {
    return $this->container['is_pregnant'];
  }

  /**
   * Sets is_pregnant
   *
   * @param bool $is_pregnant If the student has been marked as pregnant
   *
   * @return $this
   */
  public function setIsPregnant($is_pregnant)
  {
    $this->container['is_pregnant'] = $is_pregnant;

    return $this;
  }

  /**
   * Gets has_emergency_consent
   *
   * @return bool
   */
  public function getHasEmergencyConsent()
  {
    return $this->container['has_emergency_consent'];
  }

  /**
   * Sets has_emergency_consent
   *
   * @param bool $has_emergency_consent Whether or not medical consent has been given
   *
   * @return $this
   */
  public function setHasEmergencyConsent($has_emergency_consent)
  {
    $this->container['has_emergency_consent'] = $has_emergency_consent;

    return $this;
  }

  /**
   * Gets conditions
   *
   * @return \Assembly\Client\Model\StudentMedicalCondition[]
   */
  public function getConditions()
  {
    return $this->container['conditions'];
  }

  /**
   * Sets conditions
   *
   * @param \Assembly\Client\Model\StudentMedicalCondition[] $conditions The medical conditions associated with the student
   *
   * @return $this
   */
  public function setConditions($conditions)
  {
    $this->container['conditions'] = $conditions;

    return $this;
  }

  /**
   * Gets dietary_needs
   *
   * @return string[]
   */
  public function getDietaryNeeds()
  {
    return $this->container['dietary_needs'];
  }

  /**
   * Sets dietary_needs
   *
   * @param string[] $dietary_needs The dietary need codes associated with the student
   *
   * @return $this
   */
  public function setDietaryNeeds($dietary_needs)
  {
    $this->container['dietary_needs'] = $dietary_needs;

    return $this;
  }

  /**
   * Gets notes
   *
   * @return \Assembly\Client\Model\StudentMedicalNote[]
   */
  public function getNotes()
  {
    return $this->container['notes'];
  }

  /**
   * Sets notes
   *
   * @param \Assembly\Client\Model\StudentMedicalNote[] $notes Additional information attached to the medical condition
   *
   * @return $this
   */
  public function setNotes($notes)
  {
    $this->container['notes'] = $notes;

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


