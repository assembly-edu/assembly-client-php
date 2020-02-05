<?php

/**
 * Assembly Developer API PHP Client
 * SDK Version 1.2.450
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
 * StudentDemographics Class Doc Comment
 *
 * @category Class
 * @description Demographic information about the student.
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class StudentDemographics implements ModelInterface, ArrayAccess
{
  const DISCRIMINATOR = null;

  /**
    * The original name of the model.
    *
    * @var string
    */
  protected static $swaggerModelName = 'StudentDemographics';

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
    'is_pp' => 'bool',
    'pp_history' => '\Assembly\Client\Model\PpEntitlement[]',
    'is_eal' => 'bool',
    'sen_category' => 'string',
    'sen_category_history' => '\Assembly\Client\Model\SenCategory[]',
    'country_of_birth' => 'string',
    'nationalities' => 'string[]',
    'fsm_review_date' => 'string',
    'is_fsm' => 'bool',
    'is_fsm6' => 'bool',
    'fsm_history' => '\Assembly\Client\Model\FsmEntitlement[]',
    'in_care' => 'bool',
    'ever_in_care' => 'bool',
    'service_child' => 'bool',
    'sen_needs' => '\Assembly\Client\Model\SenNeed[]'
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
    'is_pp' => null,
    'pp_history' => null,
    'is_eal' => null,
    'sen_category' => null,
    'sen_category_history' => null,
    'country_of_birth' => null,
    'nationalities' => null,
    'fsm_review_date' => null,
    'is_fsm' => null,
    'is_fsm6' => null,
    'fsm_history' => null,
    'in_care' => null,
    'ever_in_care' => null,
    'service_child' => null,
    'sen_needs' => null
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
    'is_pp' => 'is_pp',
    'pp_history' => 'pp_history',
    'is_eal' => 'is_eal',
    'sen_category' => 'sen_category',
    'sen_category_history' => 'sen_category_history',
    'country_of_birth' => 'country_of_birth',
    'nationalities' => 'nationalities',
    'fsm_review_date' => 'fsm_review_date',
    'is_fsm' => 'is_fsm',
    'is_fsm6' => 'is_fsm6',
    'fsm_history' => 'fsm_history',
    'in_care' => 'in_care',
    'ever_in_care' => 'ever_in_care',
    'service_child' => 'service_child',
    'sen_needs' => 'sen_needs'
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
    'is_pp' => 'setIsPp',
    'pp_history' => 'setPpHistory',
    'is_eal' => 'setIsEal',
    'sen_category' => 'setSenCategory',
    'sen_category_history' => 'setSenCategoryHistory',
    'country_of_birth' => 'setCountryOfBirth',
    'nationalities' => 'setNationalities',
    'fsm_review_date' => 'setFsmReviewDate',
    'is_fsm' => 'setIsFsm',
    'is_fsm6' => 'setIsFsm6',
    'fsm_history' => 'setFsmHistory',
    'in_care' => 'setInCare',
    'ever_in_care' => 'setEverInCare',
    'service_child' => 'setServiceChild',
    'sen_needs' => 'setSenNeeds'
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
    'is_pp' => 'getIsPp',
    'pp_history' => 'getPpHistory',
    'is_eal' => 'getIsEal',
    'sen_category' => 'getSenCategory',
    'sen_category_history' => 'getSenCategoryHistory',
    'country_of_birth' => 'getCountryOfBirth',
    'nationalities' => 'getNationalities',
    'fsm_review_date' => 'getFsmReviewDate',
    'is_fsm' => 'getIsFsm',
    'is_fsm6' => 'getIsFsm6',
    'fsm_history' => 'getFsmHistory',
    'in_care' => 'getInCare',
    'ever_in_care' => 'getEverInCare',
    'service_child' => 'getServiceChild',
    'sen_needs' => 'getSenNeeds'
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
    $this->container['object'] = isset($data['object']) ? $data['object'] : 'student_demographics';
    $this->container['ethnicity_code'] = isset($data['ethnicity_code']) ? $data['ethnicity_code'] : null;
    $this->container['ethnicity_group'] = isset($data['ethnicity_group']) ? $data['ethnicity_group'] : null;
    $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
    $this->container['is_pp'] = isset($data['is_pp']) ? $data['is_pp'] : null;
    $this->container['pp_history'] = isset($data['pp_history']) ? $data['pp_history'] : null;
    $this->container['is_eal'] = isset($data['is_eal']) ? $data['is_eal'] : null;
    $this->container['sen_category'] = isset($data['sen_category']) ? $data['sen_category'] : null;
    $this->container['sen_category_history'] = isset($data['sen_category_history']) ? $data['sen_category_history'] : null;
    $this->container['country_of_birth'] = isset($data['country_of_birth']) ? $data['country_of_birth'] : null;
    $this->container['nationalities'] = isset($data['nationalities']) ? $data['nationalities'] : null;
    $this->container['fsm_review_date'] = isset($data['fsm_review_date']) ? $data['fsm_review_date'] : null;
    $this->container['is_fsm'] = isset($data['is_fsm']) ? $data['is_fsm'] : null;
    $this->container['is_fsm6'] = isset($data['is_fsm6']) ? $data['is_fsm6'] : null;
    $this->container['fsm_history'] = isset($data['fsm_history']) ? $data['fsm_history'] : null;
    $this->container['in_care'] = isset($data['in_care']) ? $data['in_care'] : null;
    $this->container['ever_in_care'] = isset($data['ever_in_care']) ? $data['ever_in_care'] : null;
    $this->container['service_child'] = isset($data['service_child']) ? $data['service_child'] : null;
    $this->container['sen_needs'] = isset($data['sen_needs']) ? $data['sen_needs'] : null;
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
   * @param string $ethnicity_code A detailed, Dfe standardised way of categorising the ethnicity of a student
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
   * @param string $gender The gender of the student
   *
   * @return $this
   */
  public function setGender($gender)
  {
    $this->container['gender'] = $gender;

    return $this;
  }

  /**
   * Gets is_pp
   *
   * @return bool
   */
  public function getIsPp()
  {
    return $this->container['is_pp'];
  }

  /**
   * Sets is_pp
   *
   * @param bool $is_pp Pupil Premium (PP) - schools receive extra funding for students who qualify as Pupil Premium. The includes any student who has qualified for Free School Meals (FSM) in the last 6 years, and any student in local-authority care
   *
   * @return $this
   */
  public function setIsPp($is_pp)
  {
    $this->container['is_pp'] = $is_pp;

    return $this;
  }

  /**
   * Gets pp_history
   *
   * @return \Assembly\Client\Model\PpEntitlement[]
   */
  public function getPpHistory()
  {
    return $this->container['pp_history'];
  }

  /**
   * Sets pp_history
   *
   * @param \Assembly\Client\Model\PpEntitlement[] $pp_history Pupil Premium (PP) entitlement history
   *
   * @return $this
   */
  public function setPpHistory($pp_history)
  {
    $this->container['pp_history'] = $pp_history;

    return $this;
  }

  /**
   * Gets is_eal
   *
   * @return bool
   */
  public function getIsEal()
  {
    return $this->container['is_eal'];
  }

  /**
   * Sets is_eal
   *
   * @param bool $is_eal English as an Additional Language (EAL) - this field will be true for a student whose first language is not English
   *
   * @return $this
   */
  public function setIsEal($is_eal)
  {
    $this->container['is_eal'] = $is_eal;

    return $this;
  }

  /**
   * Gets sen_category
   *
   * @return string
   */
  public function getSenCategory()
  {
    return $this->container['sen_category'];
  }

  /**
   * Sets sen_category
   *
   * @param string $sen_category Special Education Need (SEN) - indicates a student has learning difficulties and requires special education provision. Can be null for those not eligible
   *
   * @return $this
   */
  public function setSenCategory($sen_category)
  {
    $this->container['sen_category'] = $sen_category;

    return $this;
  }

  /**
   * Gets sen_category_history
   *
   * @return \Assembly\Client\Model\SenCategory[]
   */
  public function getSenCategoryHistory()
  {
    return $this->container['sen_category_history'];
  }

  /**
   * Sets sen_category_history
   *
   * @param \Assembly\Client\Model\SenCategory[] $sen_category_history Special Education Need (SEN) category history
   *
   * @return $this
   */
  public function setSenCategoryHistory($sen_category_history)
  {
    $this->container['sen_category_history'] = $sen_category_history;

    return $this;
  }

  /**
   * Gets country_of_birth
   *
   * @return string
   */
  public function getCountryOfBirth()
  {
    return $this->container['country_of_birth'];
  }

  /**
   * Sets country_of_birth
   *
   * @param string $country_of_birth The country of birth of the student
   *
   * @return $this
   */
  public function setCountryOfBirth($country_of_birth)
  {
    $this->container['country_of_birth'] = $country_of_birth;

    return $this;
  }

  /**
   * Gets nationalities
   *
   * @return string[]
   */
  public function getNationalities()
  {
    return $this->container['nationalities'];
  }

  /**
   * Sets nationalities
   *
   * @param string[] $nationalities The nationality or nationalities of the student
   *
   * @return $this
   */
  public function setNationalities($nationalities)
  {
    $this->container['nationalities'] = $nationalities;

    return $this;
  }

  /**
   * Gets fsm_review_date
   *
   * @return string
   */
  public function getFsmReviewDate()
  {
    return $this->container['fsm_review_date'];
  }

  /**
   * Sets fsm_review_date
   *
   * @param string $fsm_review_date Free school meal review date -Review date for pupil's free school meal eligibility
   *
   * @return $this
   */
  public function setFsmReviewDate($fsm_review_date)
  {
    $this->container['fsm_review_date'] = $fsm_review_date;

    return $this;
  }

  /**
   * Gets is_fsm
   *
   * @return bool
   */
  public function getIsFsm()
  {
    return $this->container['is_fsm'];
  }

  /**
   * Sets is_fsm
   *
   * @param bool $is_fsm Free School Meals (FSM) - indicates if the student is eligible for free school meals
   *
   * @return $this
   */
  public function setIsFsm($is_fsm)
  {
    $this->container['is_fsm'] = $is_fsm;

    return $this;
  }

  /**
   * Gets is_fsm6
   *
   * @return bool
   */
  public function getIsFsm6()
  {
    return $this->container['is_fsm6'];
  }

  /**
   * Sets is_fsm6
   *
   * @param bool $is_fsm6 Free School Meals 6 (FSM6) - indicates if the student has been eligible for free school meals within the last 6 years
   *
   * @return $this
   */
  public function setIsFsm6($is_fsm6)
  {
    $this->container['is_fsm6'] = $is_fsm6;

    return $this;
  }

  /**
   * Gets fsm_history
   *
   * @return \Assembly\Client\Model\FsmEntitlement[]
   */
  public function getFsmHistory()
  {
    return $this->container['fsm_history'];
  }

  /**
   * Sets fsm_history
   *
   * @param \Assembly\Client\Model\FsmEntitlement[] $fsm_history Free School Meal (FSM) entitlement history
   *
   * @return $this
   */
  public function setFsmHistory($fsm_history)
  {
    $this->container['fsm_history'] = $fsm_history;

    return $this;
  }

  /**
   * Gets in_care
   *
   * @return bool
   */
  public function getInCare()
  {
    return $this->container['in_care'];
  }

  /**
   * Sets in_care
   *
   * @param bool $in_care Looked after status - indicates whether the student is 'looked after' by the local authority
   *
   * @return $this
   */
  public function setInCare($in_care)
  {
    $this->container['in_care'] = $in_care;

    return $this;
  }

  /**
   * Gets ever_in_care
   *
   * @return bool
   */
  public function getEverInCare()
  {
    return $this->container['ever_in_care'];
  }

  /**
   * Sets ever_in_care
   *
   * @param bool $ever_in_care Ever in care status - indicates whether the student is either currently 'looked after', or has been at any point in the past
   *
   * @return $this
   */
  public function setEverInCare($ever_in_care)
  {
    $this->container['ever_in_care'] = $ever_in_care;

    return $this;
  }

  /**
   * Gets service_child
   *
   * @return bool
   */
  public function getServiceChild()
  {
    return $this->container['service_child'];
  }

  /**
   * Sets service_child
   *
   * @param bool $service_child Service Child - indicates whether the student has parent(s) who are Service personnel serving in regular military units of all forces and exercising parental care and responsibility
   *
   * @return $this
   */
  public function setServiceChild($service_child)
  {
    $this->container['service_child'] = $service_child;

    return $this;
  }

  /**
   * Gets sen_needs
   *
   * @return \Assembly\Client\Model\SenNeed[]
   */
  public function getSenNeeds()
  {
    return $this->container['sen_needs'];
  }

  /**
   * Sets sen_needs
   *
   * @param \Assembly\Client\Model\SenNeed[] $sen_needs Information about a student's SEN Needs. This will only be returned if `&sen_needs=true` is included in your request
   *
   * @return $this
   */
  public function setSenNeeds($sen_needs)
  {
    $this->container['sen_needs'] = $sen_needs;

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


