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
 * StaffMemberDemographics Class Doc Comment
 *
 * @category Class
 * @description Demographic information about the staff member.
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class StaffMemberDemographics implements ModelInterface, ArrayAccess
{
  const DISCRIMINATOR = null;

  /**
    * The original name of the model.
    *
    * @var string
    */
  protected static $swaggerModelName = 'StaffMemberDemographics';

  /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerTypes = [
    'object' => 'string',
    'ethnicity_code' => 'string',
    'ethnicity_group' => 'string',
    'gender' => 'string',
    'disability' => 'string',
    'disability_cdoe' => 'string'
  ];

  /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerFormats = [
    'object' => null,
    'ethnicity_code' => null,
    'ethnicity_group' => null,
    'gender' => null,
    'disability' => null,
    'disability_cdoe' => null
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
    'ethnicity_code' => 'ethnicity_code',
    'ethnicity_group' => 'ethnicity_group',
    'gender' => 'gender',
    'disability' => 'disability',
    'disability_cdoe' => 'disability_cdoe'
  ];

  /**
   * Array of attributes to setter functions (for deserialization of responses)
   *
   * @var string[]
   */
  protected static $setters = [
    'object' => 'setObject',
    'ethnicity_code' => 'setEthnicityCode',
    'ethnicity_group' => 'setEthnicityGroup',
    'gender' => 'setGender',
    'disability' => 'setDisability',
    'disability_cdoe' => 'setDisabilityCdoe'
  ];

  /**
   * Array of attributes to getter functions (for serialization of requests)
   *
   * @var string[]
   */
  protected static $getters = [
    'object' => 'getObject',
    'ethnicity_code' => 'getEthnicityCode',
    'ethnicity_group' => 'getEthnicityGroup',
    'gender' => 'getGender',
    'disability' => 'getDisability',
    'disability_cdoe' => 'getDisabilityCdoe'
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
    $this->container['object'] = isset($data['object']) ? $data['object'] : 'staff_demographics';
    $this->container['ethnicity_code'] = isset($data['ethnicity_code']) ? $data['ethnicity_code'] : null;
    $this->container['ethnicity_group'] = isset($data['ethnicity_group']) ? $data['ethnicity_group'] : null;
    $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
    $this->container['disability'] = isset($data['disability']) ? $data['disability'] : null;
    $this->container['disability_cdoe'] = isset($data['disability_cdoe']) ? $data['disability_cdoe'] : null;
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
   * Gets ethnicity_code
   *
   * @return string
   */
  public function getEthnicityCode()
  {
    return $this->container['ethnicity_code'];
  }

  /**
   * Sets ethnicity_code
   *
   * @param string $ethnicity_code A detailed, Dfe standardised way of categorising the ethnicity of a staff member
   *
   * @return $this
   */
  public function setEthnicityCode($ethnicity_code)
  {
    $this->container['ethnicity_code'] = $ethnicity_code;

    return $this;
  }

  /**
   * Gets ethnicity_group
   *
   * @return string
   */
  public function getEthnicityGroup()
  {
    return $this->container['ethnicity_group'];
  }

  /**
   * Sets ethnicity_group
   *
   * @param string $ethnicity_group A broader categorisation of ethnicity that is standardised across the country, with all ethnicity codes grouped in to 8 sections
   *
   * @return $this
   */
  public function setEthnicityGroup($ethnicity_group)
  {
    $this->container['ethnicity_group'] = $ethnicity_group;

    return $this;
  }

  /**
   * Gets gender
   *
   * @return string
   */
  public function getGender()
  {
    return $this->container['gender'];
  }

  /**
   * Sets gender
   *
   * @param string $gender The gender of a staff member
   *
   * @return $this
   */
  public function setGender($gender)
  {
    $this->container['gender'] = $gender;

    return $this;
  }

  /**
   * Gets disability
   *
   * @return string
   */
  public function getDisability()
  {
    return $this->container['disability'];
  }

  /**
   * Sets disability
   *
   * @param string $disability The disability status of a staff member
   *
   * @return $this
   */
  public function setDisability($disability)
  {
    $this->container['disability'] = $disability;

    return $this;
  }

  /**
   * Gets disability_cdoe
   *
   * @return string
   */
  public function getDisabilityCdoe()
  {
    return $this->container['disability_cdoe'];
  }

  /**
   * Sets disability_cdoe
   *
   * @param string $disability_cdoe The disability status code of a staff member
   *
   * @return $this
   */
  public function setDisabilityCdoe($disability_cdoe)
  {
    $this->container['disability_cdoe'] = $disability_cdoe;

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


