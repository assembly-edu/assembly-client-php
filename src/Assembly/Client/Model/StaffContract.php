<?php

/**
 * Assembly Developer API PHP Client
 * SDK Version 1.2.463
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
 * StaffContract Class Doc Comment
 *
 * @category Class
 * @description A contract held by a staff member.
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class StaffContract implements ModelInterface, ArrayAccess
{
  const DISCRIMINATOR = null;

  /**
    * The original name of the model.
    *
    * @var string
    */
  protected static $swaggerModelName = 'StaffContract';

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
    'national_insurance_number' => 'string',
    'payroll_number' => 'string',
    'contract_type' => 'string',
    'post' => 'string',
    'origin' => 'string',
    'destination' => 'string',
    'daily_rate' => 'bool',
    'pay_review_date' => '\DateTime',
    'roles' => '\Assembly\Client\Model\StaffRole[]',
    'salaries' => '\Assembly\Client\Model\StaffSalary[]',
    'allowances' => '\Assembly\Client\Model\StaffAllowance[]'
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
    'national_insurance_number' => null,
    'payroll_number' => null,
    'contract_type' => null,
    'post' => null,
    'origin' => null,
    'destination' => null,
    'daily_rate' => null,
    'pay_review_date' => 'date-time',
    'roles' => null,
    'salaries' => null,
    'allowances' => null
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
    'national_insurance_number' => 'national_insurance_number',
    'payroll_number' => 'payroll_number',
    'contract_type' => 'contract_type',
    'post' => 'post',
    'origin' => 'origin',
    'destination' => 'destination',
    'daily_rate' => 'daily_rate',
    'pay_review_date' => 'pay_review_date',
    'roles' => 'roles',
    'salaries' => 'salaries',
    'allowances' => 'allowances'
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
    'national_insurance_number' => 'setNationalInsuranceNumber',
    'payroll_number' => 'setPayrollNumber',
    'contract_type' => 'setContractType',
    'post' => 'setPost',
    'origin' => 'setOrigin',
    'destination' => 'setDestination',
    'daily_rate' => 'setDailyRate',
    'pay_review_date' => 'setPayReviewDate',
    'roles' => 'setRoles',
    'salaries' => 'setSalaries',
    'allowances' => 'setAllowances'
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
    'national_insurance_number' => 'getNationalInsuranceNumber',
    'payroll_number' => 'getPayrollNumber',
    'contract_type' => 'getContractType',
    'post' => 'getPost',
    'origin' => 'getOrigin',
    'destination' => 'getDestination',
    'daily_rate' => 'getDailyRate',
    'pay_review_date' => 'getPayReviewDate',
    'roles' => 'getRoles',
    'salaries' => 'getSalaries',
    'allowances' => 'getAllowances'
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
    $this->container['object'] = isset($data['object']) ? $data['object'] : 'staff_contract';
    $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    $this->container['staff_member_id'] = isset($data['staff_member_id']) ? $data['staff_member_id'] : null;
    $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
    $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
    $this->container['national_insurance_number'] = isset($data['national_insurance_number']) ? $data['national_insurance_number'] : null;
    $this->container['payroll_number'] = isset($data['payroll_number']) ? $data['payroll_number'] : null;
    $this->container['contract_type'] = isset($data['contract_type']) ? $data['contract_type'] : null;
    $this->container['post'] = isset($data['post']) ? $data['post'] : null;
    $this->container['origin'] = isset($data['origin']) ? $data['origin'] : null;
    $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
    $this->container['daily_rate'] = isset($data['daily_rate']) ? $data['daily_rate'] : null;
    $this->container['pay_review_date'] = isset($data['pay_review_date']) ? $data['pay_review_date'] : null;
    $this->container['roles'] = isset($data['roles']) ? $data['roles'] : null;
    $this->container['salaries'] = isset($data['salaries']) ? $data['salaries'] : null;
    $this->container['allowances'] = isset($data['allowances']) ? $data['allowances'] : null;
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
   * @param int $staff_member_id The ID of the staff member
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
   * @param \DateTime $start_date The start date of the contract
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
   * @param \DateTime $end_date The end date of the contract
   *
   * @return $this
   */
  public function setEndDate($end_date)
  {
    $this->container['end_date'] = $end_date;

    return $this;
  }

  /**
   * Gets national_insurance_number
   *
   * @return string
   */
  public function getNationalInsuranceNumber()
  {
    return $this->container['national_insurance_number'];
  }

  /**
   * Sets national_insurance_number
   *
   * @param string $national_insurance_number The staff member's NI Number
   *
   * @return $this
   */
  public function setNationalInsuranceNumber($national_insurance_number)
  {
    $this->container['national_insurance_number'] = $national_insurance_number;

    return $this;
  }

  /**
   * Gets payroll_number
   *
   * @return string
   */
  public function getPayrollNumber()
  {
    return $this->container['payroll_number'];
  }

  /**
   * Sets payroll_number
   *
   * @param string $payroll_number The staff member's payroll number
   *
   * @return $this
   */
  public function setPayrollNumber($payroll_number)
  {
    $this->container['payroll_number'] = $payroll_number;

    return $this;
  }

  /**
   * Gets contract_type
   *
   * @return string
   */
  public function getContractType()
  {
    return $this->container['contract_type'];
  }

  /**
   * Sets contract_type
   *
   * @param string $contract_type The type of contract
   *
   * @return $this
   */
  public function setContractType($contract_type)
  {
    $this->container['contract_type'] = $contract_type;

    return $this;
  }

  /**
   * Gets post
   *
   * @return string
   */
  public function getPost()
  {
    return $this->container['post'];
  }

  /**
   * Sets post
   *
   * @param string $post The post of the contract
   *
   * @return $this
   */
  public function setPost($post)
  {
    $this->container['post'] = $post;

    return $this;
  }

  /**
   * Gets origin
   *
   * @return string
   */
  public function getOrigin()
  {
    return $this->container['origin'];
  }

  /**
   * Sets origin
   *
   * @param string $origin Indicates the role undertaken by the staff member before this contract
   *
   * @return $this
   */
  public function setOrigin($origin)
  {
    $this->container['origin'] = $origin;

    return $this;
  }

  /**
   * Gets destination
   *
   * @return string
   */
  public function getDestination()
  {
    return $this->container['destination'];
  }

  /**
   * Sets destination
   *
   * @param string $destination The destination of the staff member if they have moved on from this contract
   *
   * @return $this
   */
  public function setDestination($destination)
  {
    $this->container['destination'] = $destination;

    return $this;
  }

  /**
   * Gets daily_rate
   *
   * @return bool
   */
  public function getDailyRate()
  {
    return $this->container['daily_rate'];
  }

  /**
   * Sets daily_rate
   *
   * @param bool $daily_rate Indicates if the staff member is paid a daily rate
   *
   * @return $this
   */
  public function setDailyRate($daily_rate)
  {
    $this->container['daily_rate'] = $daily_rate;

    return $this;
  }

  /**
   * Gets pay_review_date
   *
   * @return \DateTime
   */
  public function getPayReviewDate()
  {
    return $this->container['pay_review_date'];
  }

  /**
   * Sets pay_review_date
   *
   * @param \DateTime $pay_review_date Shows the date of the staff member's most recent pay review
   *
   * @return $this
   */
  public function setPayReviewDate($pay_review_date)
  {
    $this->container['pay_review_date'] = $pay_review_date;

    return $this;
  }

  /**
   * Gets roles
   *
   * @return \Assembly\Client\Model\StaffRole[]
   */
  public function getRoles()
  {
    return $this->container['roles'];
  }

  /**
   * Sets roles
   *
   * @param \Assembly\Client\Model\StaffRole[] $roles The roles associated to this contract
   *
   * @return $this
   */
  public function setRoles($roles)
  {
    $this->container['roles'] = $roles;

    return $this;
  }

  /**
   * Gets salaries
   *
   * @return \Assembly\Client\Model\StaffSalary[]
   */
  public function getSalaries()
  {
    return $this->container['salaries'];
  }

  /**
   * Sets salaries
   *
   * @param \Assembly\Client\Model\StaffSalary[] $salaries The salaries associated with this contract
   *
   * @return $this
   */
  public function setSalaries($salaries)
  {
    $this->container['salaries'] = $salaries;

    return $this;
  }

  /**
   * Gets allowances
   *
   * @return \Assembly\Client\Model\StaffAllowance[]
   */
  public function getAllowances()
  {
    return $this->container['allowances'];
  }

  /**
   * Sets allowances
   *
   * @param \Assembly\Client\Model\StaffAllowance[] $allowances The allowances associated with this contract
   *
   * @return $this
   */
  public function setAllowances($allowances)
  {
    $this->container['allowances'] = $allowances;

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


