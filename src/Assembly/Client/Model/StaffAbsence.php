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
 * StaffAbsence Class Doc Comment
 *
 * @category Class
 * @description Detail of a staff&#39;s absence recorded on the MIS.
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class StaffAbsence implements ModelInterface, ArrayAccess
{
  const DISCRIMINATOR = null;

  /**
    * The original name of the model.
    *
    * @var string
    */
  protected static $swaggerModelName = 'StaffAbsence';

  /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerTypes = [
    'object' => 'string',
    'id' => 'int',
    'staff_member_id' => 'int',
    'start_date' => '\DateTime',
    'end_date' => '\DateTime',
    'working_days_lost' => 'float',
    'absence_category' => 'string',
    'absence_category_code' => 'string',
    'illness_category' => 'string',
    'pay_rate' => 'string'
  ];

  /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerFormats = [
    'object' => null,
    'id' => 'int32',
    'staff_member_id' => 'int32',
    'start_date' => 'date-time',
    'end_date' => 'date-time',
    'working_days_lost' => 'float',
    'absence_category' => null,
    'absence_category_code' => null,
    'illness_category' => null,
    'pay_rate' => null
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
    'staff_member_id' => 'staff_member_id',
    'start_date' => 'start_date',
    'end_date' => 'end_date',
    'working_days_lost' => 'working_days_lost',
    'absence_category' => 'absence_category',
    'absence_category_code' => 'absence_category_code',
    'illness_category' => 'illness_category',
    'pay_rate' => 'pay_rate'
  ];

  /**
   * Array of attributes to setter functions (for deserialization of responses)
   *
   * @var string[]
   */
  protected static $setters = [
    'object' => 'setObject',
    'id' => 'setId',
    'staff_member_id' => 'setStaffMemberId',
    'start_date' => 'setStartDate',
    'end_date' => 'setEndDate',
    'working_days_lost' => 'setWorkingDaysLost',
    'absence_category' => 'setAbsenceCategory',
    'absence_category_code' => 'setAbsenceCategoryCode',
    'illness_category' => 'setIllnessCategory',
    'pay_rate' => 'setPayRate'
  ];

  /**
   * Array of attributes to getter functions (for serialization of requests)
   *
   * @var string[]
   */
  protected static $getters = [
    'object' => 'getObject',
    'id' => 'getId',
    'staff_member_id' => 'getStaffMemberId',
    'start_date' => 'getStartDate',
    'end_date' => 'getEndDate',
    'working_days_lost' => 'getWorkingDaysLost',
    'absence_category' => 'getAbsenceCategory',
    'absence_category_code' => 'getAbsenceCategoryCode',
    'illness_category' => 'getIllnessCategory',
    'pay_rate' => 'getPayRate'
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
    $this->container['object'] = isset($data['object']) ? $data['object'] : 'staff_absence';
    $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    $this->container['staff_member_id'] = isset($data['staff_member_id']) ? $data['staff_member_id'] : null;
    $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
    $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
    $this->container['working_days_lost'] = isset($data['working_days_lost']) ? $data['working_days_lost'] : null;
    $this->container['absence_category'] = isset($data['absence_category']) ? $data['absence_category'] : null;
    $this->container['absence_category_code'] = isset($data['absence_category_code']) ? $data['absence_category_code'] : null;
    $this->container['illness_category'] = isset($data['illness_category']) ? $data['illness_category'] : null;
    $this->container['pay_rate'] = isset($data['pay_rate']) ? $data['pay_rate'] : null;
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
   * Gets staff_member_id
   *
   * @return int
   */
  public function getStaffMemberId()
  {
    return $this->container['staff_member_id'];
  }

  /**
   * Sets staff_member_id
   *
   * @param int $staff_member_id The ID of the staff member who the absence is for
   *
   * @return $this
   */
  public function setStaffMemberId($staff_member_id)
  {
    $this->container['staff_member_id'] = $staff_member_id;

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
   * @param \DateTime $start_date The start date of the absence
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
   * @param \DateTime $end_date The end date of the absence
   *
   * @return $this
   */
  public function setEndDate($end_date)
  {
    $this->container['end_date'] = $end_date;

    return $this;
  }

  /**
   * Gets working_days_lost
   *
   * @return float
   */
  public function getWorkingDaysLost()
  {
    return $this->container['working_days_lost'];
  }

  /**
   * Sets working_days_lost
   *
   * @param float $working_days_lost Number of working days that were lost during the absence
   *
   * @return $this
   */
  public function setWorkingDaysLost($working_days_lost)
  {
    $this->container['working_days_lost'] = $working_days_lost;

    return $this;
  }

  /**
   * Gets absence_category
   *
   * @return string
   */
  public function getAbsenceCategory()
  {
    return $this->container['absence_category'];
  }

  /**
   * Sets absence_category
   *
   * @param string $absence_category The category of the absence
   *
   * @return $this
   */
  public function setAbsenceCategory($absence_category)
  {
    $this->container['absence_category'] = $absence_category;

    return $this;
  }

  /**
   * Gets absence_category_code
   *
   * @return string
   */
  public function getAbsenceCategoryCode()
  {
    return $this->container['absence_category_code'];
  }

  /**
   * Sets absence_category_code
   *
   * @param string $absence_category_code The category code of the absence
   *
   * @return $this
   */
  public function setAbsenceCategoryCode($absence_category_code)
  {
    $this->container['absence_category_code'] = $absence_category_code;

    return $this;
  }

  /**
   * Gets illness_category
   *
   * @return string
   */
  public function getIllnessCategory()
  {
    return $this->container['illness_category'];
  }

  /**
   * Sets illness_category
   *
   * @param string $illness_category If the absence category was \"Illness\", the specific code
   *
   * @return $this
   */
  public function setIllnessCategory($illness_category)
  {
    $this->container['illness_category'] = $illness_category;

    return $this;
  }

  /**
   * Gets pay_rate
   *
   * @return string
   */
  public function getPayRate()
  {
    return $this->container['pay_rate'];
  }

  /**
   * Sets pay_rate
   *
   * @param string $pay_rate Whether or not the staff member was paid for the absence
   *
   * @return $this
   */
  public function setPayRate($pay_rate)
  {
    $this->container['pay_rate'] = $pay_rate;

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


