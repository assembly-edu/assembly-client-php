<?php

/**
 * Assembly Developer API PHP Client
 * SDK Version 1.2.432
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
 * StaffMember Class Doc Comment
 *
 * @category Class
 * @description A single staff member within a school.
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class StaffMember implements ModelInterface, ArrayAccess
{
  const DISCRIMINATOR = null;

  /**
    * The original name of the model.
    *
    * @var string
    */
  protected static $swaggerModelName = 'StaffMember';

  /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerTypes = [
    'object' => 'string',
    'id' => 'int',
    'mis_id' => 'string',
    'staff_code' => 'string',
    'first_name' => 'string',
    'legal_first_name' => 'string',
    'middle_name' => 'string',
    'last_name' => 'string',
    'legal_last_name' => 'string',
    'former_last_name' => 'string',
    'title' => 'string',
    'salutation' => 'string',
    'dob' => '\DateTime',
    'address' => '\Assembly\Client\Model\StaffMemberAddress',
    'email' => 'string',
    'emails' => '\Assembly\Client\Model\EmailInfo[]',
    'telephone_numbers' => '\Assembly\Client\Model\TelephoneNumberInfo[]',
    'is_teaching_staff' => 'bool',
    'included_in_census' => 'bool',
    'start_date' => '\DateTime',
    'end_date' => '\DateTime',
    'demographics' => '\Assembly\Client\Model\StaffMemberDemographics',
    'qualification_info' => '\Assembly\Client\Model\StaffMemberQualificationInfo'
  ];

  /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerFormats = [
    'object' => null,
    'id' => 'int32',
    'mis_id' => null,
    'staff_code' => null,
    'first_name' => null,
    'legal_first_name' => null,
    'middle_name' => null,
    'last_name' => null,
    'legal_last_name' => null,
    'former_last_name' => null,
    'title' => null,
    'salutation' => null,
    'dob' => 'date-time',
    'address' => null,
    'email' => null,
    'emails' => null,
    'telephone_numbers' => null,
    'is_teaching_staff' => null,
    'included_in_census' => null,
    'start_date' => 'date-time',
    'end_date' => 'date-time',
    'demographics' => null,
    'qualification_info' => null
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
    'mis_id' => 'mis_id',
    'staff_code' => 'staff_code',
    'first_name' => 'first_name',
    'legal_first_name' => 'legal_first_name',
    'middle_name' => 'middle_name',
    'last_name' => 'last_name',
    'legal_last_name' => 'legal_last_name',
    'former_last_name' => 'former_last_name',
    'title' => 'title',
    'salutation' => 'salutation',
    'dob' => 'dob',
    'address' => 'address',
    'email' => 'email',
    'emails' => 'emails',
    'telephone_numbers' => 'telephone_numbers',
    'is_teaching_staff' => 'is_teaching_staff',
    'included_in_census' => 'included_in_census',
    'start_date' => 'start_date',
    'end_date' => 'end_date',
    'demographics' => 'demographics',
    'qualification_info' => 'qualification_info'
  ];

  /**
   * Array of attributes to setter functions (for deserialization of responses)
   *
   * @var string[]
   */
  protected static $setters = [
    'object' => 'setObject',
    'id' => 'setId',
    'mis_id' => 'setMisId',
    'staff_code' => 'setStaffCode',
    'first_name' => 'setFirstName',
    'legal_first_name' => 'setLegalFirstName',
    'middle_name' => 'setMiddleName',
    'last_name' => 'setLastName',
    'legal_last_name' => 'setLegalLastName',
    'former_last_name' => 'setFormerLastName',
    'title' => 'setTitle',
    'salutation' => 'setSalutation',
    'dob' => 'setDob',
    'address' => 'setAddress',
    'email' => 'setEmail',
    'emails' => 'setEmails',
    'telephone_numbers' => 'setTelephoneNumbers',
    'is_teaching_staff' => 'setIsTeachingStaff',
    'included_in_census' => 'setIncludedInCensus',
    'start_date' => 'setStartDate',
    'end_date' => 'setEndDate',
    'demographics' => 'setDemographics',
    'qualification_info' => 'setQualificationInfo'
  ];

  /**
   * Array of attributes to getter functions (for serialization of requests)
   *
   * @var string[]
   */
  protected static $getters = [
    'object' => 'getObject',
    'id' => 'getId',
    'mis_id' => 'getMisId',
    'staff_code' => 'getStaffCode',
    'first_name' => 'getFirstName',
    'legal_first_name' => 'getLegalFirstName',
    'middle_name' => 'getMiddleName',
    'last_name' => 'getLastName',
    'legal_last_name' => 'getLegalLastName',
    'former_last_name' => 'getFormerLastName',
    'title' => 'getTitle',
    'salutation' => 'getSalutation',
    'dob' => 'getDob',
    'address' => 'getAddress',
    'email' => 'getEmail',
    'emails' => 'getEmails',
    'telephone_numbers' => 'getTelephoneNumbers',
    'is_teaching_staff' => 'getIsTeachingStaff',
    'included_in_census' => 'getIncludedInCensus',
    'start_date' => 'getStartDate',
    'end_date' => 'getEndDate',
    'demographics' => 'getDemographics',
    'qualification_info' => 'getQualificationInfo'
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
    $this->container['object'] = isset($data['object']) ? $data['object'] : 'staff_member';
    $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    $this->container['mis_id'] = isset($data['mis_id']) ? $data['mis_id'] : null;
    $this->container['staff_code'] = isset($data['staff_code']) ? $data['staff_code'] : null;
    $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
    $this->container['legal_first_name'] = isset($data['legal_first_name']) ? $data['legal_first_name'] : null;
    $this->container['middle_name'] = isset($data['middle_name']) ? $data['middle_name'] : null;
    $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
    $this->container['legal_last_name'] = isset($data['legal_last_name']) ? $data['legal_last_name'] : null;
    $this->container['former_last_name'] = isset($data['former_last_name']) ? $data['former_last_name'] : null;
    $this->container['title'] = isset($data['title']) ? $data['title'] : null;
    $this->container['salutation'] = isset($data['salutation']) ? $data['salutation'] : null;
    $this->container['dob'] = isset($data['dob']) ? $data['dob'] : null;
    $this->container['address'] = isset($data['address']) ? $data['address'] : null;
    $this->container['email'] = isset($data['email']) ? $data['email'] : null;
    $this->container['emails'] = isset($data['emails']) ? $data['emails'] : null;
    $this->container['telephone_numbers'] = isset($data['telephone_numbers']) ? $data['telephone_numbers'] : null;
    $this->container['is_teaching_staff'] = isset($data['is_teaching_staff']) ? $data['is_teaching_staff'] : null;
    $this->container['included_in_census'] = isset($data['included_in_census']) ? $data['included_in_census'] : null;
    $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
    $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
    $this->container['demographics'] = isset($data['demographics']) ? $data['demographics'] : null;
    $this->container['qualification_info'] = isset($data['qualification_info']) ? $data['qualification_info'] : null;
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
   * Gets mis_id
   *
   * @return string
   */
  public function getMisId()
  {
    return $this->container['mis_id'];
  }

  /**
   * Sets mis_id
   *
   * @param string $mis_id The ID of the staff member from the MIS
   *
   * @return $this
   */
  public function setMisId($mis_id)
  {
    $this->container['mis_id'] = $mis_id;

    return $this;
  }

  /**
   * Gets staff_code
   *
   * @return string
   */
  public function getStaffCode()
  {
    return $this->container['staff_code'];
  }

  /**
   * Sets staff_code
   *
   * @param string $staff_code The staff code from the MIS
   *
   * @return $this
   */
  public function setStaffCode($staff_code)
  {
    $this->container['staff_code'] = $staff_code;

    return $this;
  }

  /**
   * Gets first_name
   *
   * @return string
   */
  public function getFirstName()
  {
    return $this->container['first_name'];
  }

  /**
   * Sets first_name
   *
   * @param string $first_name The first name the staff member wishes to go by, may be the same as `legal_first_name`
   *
   * @return $this
   */
  public function setFirstName($first_name)
  {
    $this->container['first_name'] = $first_name;

    return $this;
  }

  /**
   * Gets legal_first_name
   *
   * @return string
   */
  public function getLegalFirstName()
  {
    return $this->container['legal_first_name'];
  }

  /**
   * Sets legal_first_name
   *
   * @param string $legal_first_name The legal first name of the staff member
   *
   * @return $this
   */
  public function setLegalFirstName($legal_first_name)
  {
    $this->container['legal_first_name'] = $legal_first_name;

    return $this;
  }

  /**
   * Gets middle_name
   *
   * @return string
   */
  public function getMiddleName()
  {
    return $this->container['middle_name'];
  }

  /**
   * Sets middle_name
   *
   * @param string $middle_name The middle name of the staff member
   *
   * @return $this
   */
  public function setMiddleName($middle_name)
  {
    $this->container['middle_name'] = $middle_name;

    return $this;
  }

  /**
   * Gets last_name
   *
   * @return string
   */
  public function getLastName()
  {
    return $this->container['last_name'];
  }

  /**
   * Sets last_name
   *
   * @param string $last_name The last name the staff member wishes to go by, may be the same as `legal_last_name`
   *
   * @return $this
   */
  public function setLastName($last_name)
  {
    $this->container['last_name'] = $last_name;

    return $this;
  }

  /**
   * Gets legal_last_name
   *
   * @return string
   */
  public function getLegalLastName()
  {
    return $this->container['legal_last_name'];
  }

  /**
   * Sets legal_last_name
   *
   * @param string $legal_last_name The legal first name of the staff member, may be the same as `legal_last_name`
   *
   * @return $this
   */
  public function setLegalLastName($legal_last_name)
  {
    $this->container['legal_last_name'] = $legal_last_name;

    return $this;
  }

  /**
   * Gets former_last_name
   *
   * @return string
   */
  public function getFormerLastName()
  {
    return $this->container['former_last_name'];
  }

  /**
   * Sets former_last_name
   *
   * @param string $former_last_name The former last name of the staff member, may be `null`
   *
   * @return $this
   */
  public function setFormerLastName($former_last_name)
  {
    $this->container['former_last_name'] = $former_last_name;

    return $this;
  }

  /**
   * Gets title
   *
   * @return string
   */
  public function getTitle()
  {
    return $this->container['title'];
  }

  /**
   * Sets title
   *
   * @param string $title The title of the staff member
   *
   * @return $this
   */
  public function setTitle($title)
  {
    $this->container['title'] = $title;

    return $this;
  }

  /**
   * Gets salutation
   *
   * @return string
   */
  public function getSalutation()
  {
    return $this->container['salutation'];
  }

  /**
   * Sets salutation
   *
   * @param string $salutation The salutation for the staff member
   *
   * @return $this
   */
  public function setSalutation($salutation)
  {
    $this->container['salutation'] = $salutation;

    return $this;
  }

  /**
   * Gets dob
   *
   * @return \DateTime
   */
  public function getDob()
  {
    return $this->container['dob'];
  }

  /**
   * Sets dob
   *
   * @param \DateTime $dob The staff member's date of birth
   *
   * @return $this
   */
  public function setDob($dob)
  {
    $this->container['dob'] = $dob;

    return $this;
  }

  /**
   * Gets address
   *
   * @return \Assembly\Client\Model\StaffMemberAddress
   */
  public function getAddress()
  {
    return $this->container['address'];
  }

  /**
   * Sets address
   *
   * @param \Assembly\Client\Model\StaffMemberAddress $address address
   *
   * @return $this
   */
  public function setAddress($address)
  {
    $this->container['address'] = $address;

    return $this;
  }

  /**
   * Gets email
   *
   * @return string
   */
  public function getEmail()
  {
    return $this->container['email'];
  }

  /**
   * Sets email
   *
   * @param string $email The email address of the staff member. Deprecated in favour of `emails`
   *
   * @return $this
   */
  public function setEmail($email)
  {
    $this->container['email'] = $email;

    return $this;
  }

  /**
   * Gets emails
   *
   * @return \Assembly\Client\Model\EmailInfo[]
   */
  public function getEmails()
  {
    return $this->container['emails'];
  }

  /**
   * Sets emails
   *
   * @param \Assembly\Client\Model\EmailInfo[] $emails The email addresses of the staff member.
   *
   * @return $this
   */
  public function setEmails($emails)
  {
    $this->container['emails'] = $emails;

    return $this;
  }

  /**
   * Gets telephone_numbers
   *
   * @return \Assembly\Client\Model\TelephoneNumberInfo[]
   */
  public function getTelephoneNumbers()
  {
    return $this->container['telephone_numbers'];
  }

  /**
   * Sets telephone_numbers
   *
   * @param \Assembly\Client\Model\TelephoneNumberInfo[] $telephone_numbers A list of telephone numbers for the staff member
   *
   * @return $this
   */
  public function setTelephoneNumbers($telephone_numbers)
  {
    $this->container['telephone_numbers'] = $telephone_numbers;

    return $this;
  }

  /**
   * Gets is_teaching_staff
   *
   * @return bool
   */
  public function getIsTeachingStaff()
  {
    return $this->container['is_teaching_staff'];
  }

  /**
   * Sets is_teaching_staff
   *
   * @param bool $is_teaching_staff Indicates whether the staff member is a teacher
   *
   * @return $this
   */
  public function setIsTeachingStaff($is_teaching_staff)
  {
    $this->container['is_teaching_staff'] = $is_teaching_staff;

    return $this;
  }

  /**
   * Gets included_in_census
   *
   * @return bool
   */
  public function getIncludedInCensus()
  {
    return $this->container['included_in_census'];
  }

  /**
   * Sets included_in_census
   *
   * @param bool $included_in_census Indicates whether the staff member is included in official statistical returns
   *
   * @return $this
   */
  public function setIncludedInCensus($included_in_census)
  {
    $this->container['included_in_census'] = $included_in_census;

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
   * @param \DateTime $start_date The date the staff member first started working at the school
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
   * @param \DateTime $end_date The date the staff member left the school, or `null` if still active
   *
   * @return $this
   */
  public function setEndDate($end_date)
  {
    $this->container['end_date'] = $end_date;

    return $this;
  }

  /**
   * Gets demographics
   *
   * @return \Assembly\Client\Model\StaffMemberDemographics
   */
  public function getDemographics()
  {
    return $this->container['demographics'];
  }

  /**
   * Sets demographics
   *
   * @param \Assembly\Client\Model\StaffMemberDemographics $demographics demographics
   *
   * @return $this
   */
  public function setDemographics($demographics)
  {
    $this->container['demographics'] = $demographics;

    return $this;
  }

  /**
   * Gets qualification_info
   *
   * @return \Assembly\Client\Model\StaffMemberQualificationInfo
   */
  public function getQualificationInfo()
  {
    return $this->container['qualification_info'];
  }

  /**
   * Sets qualification_info
   *
   * @param \Assembly\Client\Model\StaffMemberQualificationInfo $qualification_info qualification_info
   *
   * @return $this
   */
  public function setQualificationInfo($qualification_info)
  {
    $this->container['qualification_info'] = $qualification_info;

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


