<?php

/**
 * Assembly Developer API PHP Client
 * SDK Version 1.2.368
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
 * Student Class Doc Comment
 *
 * @category Class
 * @description A single student within a school.
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class Student implements ModelInterface, ArrayAccess
{
  const DISCRIMINATOR = null;

  /**
    * The original name of the model.
    *
    * @var string
    */
  protected static $swaggerModelName = 'Student';

  /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerTypes = [
    'object' => 'string',
    'id' => 'int',
    'year_code' => 'string',
    'upn' => 'string',
    'former_upn' => 'string',
    'uln' => 'string',
    'mis_id' => 'string',
    'pan' => 'string',
    'first_name' => 'string',
    'legal_first_name' => 'string',
    'middle_name' => 'string',
    'last_name' => 'string',
    'legal_last_name' => 'string',
    'former_last_name' => 'string',
    'dob' => '\DateTime',
    'start_date' => '\DateTime',
    'end_date' => '\DateTime',
    'enrolment_status' => 'string',
    'demographics' => '\Assembly\Client\Model\StudentDemographics',
    'medical' => '\Assembly\Client\Model\StudentMedical',
    'contacts' => '\Assembly\Client\Model\StudentContacts[]',
    'address' => '\Assembly\Client\Model\StudentAddress',
    'languages' => '\Assembly\Client\Model\StudentLanguages',
    'photo' => '\Assembly\Client\Model\StudentPhoto'
  ];

  /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerFormats = [
    'object' => null,
    'id' => 'int32',
    'year_code' => null,
    'upn' => null,
    'former_upn' => null,
    'uln' => null,
    'mis_id' => null,
    'pan' => null,
    'first_name' => null,
    'legal_first_name' => null,
    'middle_name' => null,
    'last_name' => null,
    'legal_last_name' => null,
    'former_last_name' => null,
    'dob' => 'date-time',
    'start_date' => 'date-time',
    'end_date' => 'date-time',
    'enrolment_status' => null,
    'demographics' => null,
    'medical' => null,
    'contacts' => null,
    'address' => null,
    'languages' => null,
    'photo' => null
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
    'year_code' => 'year_code',
    'upn' => 'upn',
    'former_upn' => 'former_upn',
    'uln' => 'uln',
    'mis_id' => 'mis_id',
    'pan' => 'pan',
    'first_name' => 'first_name',
    'legal_first_name' => 'legal_first_name',
    'middle_name' => 'middle_name',
    'last_name' => 'last_name',
    'legal_last_name' => 'legal_last_name',
    'former_last_name' => 'former_last_name',
    'dob' => 'dob',
    'start_date' => 'start_date',
    'end_date' => 'end_date',
    'enrolment_status' => 'enrolment_status',
    'demographics' => 'demographics',
    'medical' => 'medical',
    'contacts' => 'contacts',
    'address' => 'address',
    'languages' => 'languages',
    'photo' => 'photo'
  ];

  /**
   * Array of attributes to setter functions (for deserialization of responses)
   *
   * @var string[]
   */
  protected static $setters = [
    'object' => 'setObject',
    'id' => 'setId',
    'year_code' => 'setYearCode',
    'upn' => 'setUpn',
    'former_upn' => 'setFormerUpn',
    'uln' => 'setUln',
    'mis_id' => 'setMisId',
    'pan' => 'setPan',
    'first_name' => 'setFirstName',
    'legal_first_name' => 'setLegalFirstName',
    'middle_name' => 'setMiddleName',
    'last_name' => 'setLastName',
    'legal_last_name' => 'setLegalLastName',
    'former_last_name' => 'setFormerLastName',
    'dob' => 'setDob',
    'start_date' => 'setStartDate',
    'end_date' => 'setEndDate',
    'enrolment_status' => 'setEnrolmentStatus',
    'demographics' => 'setDemographics',
    'medical' => 'setMedical',
    'contacts' => 'setContacts',
    'address' => 'setAddress',
    'languages' => 'setLanguages',
    'photo' => 'setPhoto'
  ];

  /**
   * Array of attributes to getter functions (for serialization of requests)
   *
   * @var string[]
   */
  protected static $getters = [
    'object' => 'getObject',
    'id' => 'getId',
    'year_code' => 'getYearCode',
    'upn' => 'getUpn',
    'former_upn' => 'getFormerUpn',
    'uln' => 'getUln',
    'mis_id' => 'getMisId',
    'pan' => 'getPan',
    'first_name' => 'getFirstName',
    'legal_first_name' => 'getLegalFirstName',
    'middle_name' => 'getMiddleName',
    'last_name' => 'getLastName',
    'legal_last_name' => 'getLegalLastName',
    'former_last_name' => 'getFormerLastName',
    'dob' => 'getDob',
    'start_date' => 'getStartDate',
    'end_date' => 'getEndDate',
    'enrolment_status' => 'getEnrolmentStatus',
    'demographics' => 'getDemographics',
    'medical' => 'getMedical',
    'contacts' => 'getContacts',
    'address' => 'getAddress',
    'languages' => 'getLanguages',
    'photo' => 'getPhoto'
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
    $this->container['object'] = isset($data['object']) ? $data['object'] : 'student';
    $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    $this->container['year_code'] = isset($data['year_code']) ? $data['year_code'] : null;
    $this->container['upn'] = isset($data['upn']) ? $data['upn'] : null;
    $this->container['former_upn'] = isset($data['former_upn']) ? $data['former_upn'] : null;
    $this->container['uln'] = isset($data['uln']) ? $data['uln'] : null;
    $this->container['mis_id'] = isset($data['mis_id']) ? $data['mis_id'] : null;
    $this->container['pan'] = isset($data['pan']) ? $data['pan'] : null;
    $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
    $this->container['legal_first_name'] = isset($data['legal_first_name']) ? $data['legal_first_name'] : null;
    $this->container['middle_name'] = isset($data['middle_name']) ? $data['middle_name'] : null;
    $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
    $this->container['legal_last_name'] = isset($data['legal_last_name']) ? $data['legal_last_name'] : null;
    $this->container['former_last_name'] = isset($data['former_last_name']) ? $data['former_last_name'] : null;
    $this->container['dob'] = isset($data['dob']) ? $data['dob'] : null;
    $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
    $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
    $this->container['enrolment_status'] = isset($data['enrolment_status']) ? $data['enrolment_status'] : null;
    $this->container['demographics'] = isset($data['demographics']) ? $data['demographics'] : null;
    $this->container['medical'] = isset($data['medical']) ? $data['medical'] : null;
    $this->container['contacts'] = isset($data['contacts']) ? $data['contacts'] : null;
    $this->container['address'] = isset($data['address']) ? $data['address'] : null;
    $this->container['languages'] = isset($data['languages']) ? $data['languages'] : null;
    $this->container['photo'] = isset($data['photo']) ? $data['photo'] : null;
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
   * Gets year_code
   *
   * @return string
   */
  public function getYearCode()
  {
    return $this->container['year_code'];
  }

  /**
   * Sets year_code
   *
   * @param string $year_code The year group the student currently belongs to
   *
   * @return $this
   */
  public function setYearCode($year_code)
  {
    $this->container['year_code'] = $year_code;

    return $this;
  }

  /**
   * Gets upn
   *
   * @return string
   */
  public function getUpn()
  {
    return $this->container['upn'];
  }

  /**
   * Sets upn
   *
   * @param string $upn Unique Pupil Number (UPN) - a DfE-mandated 13-character code that identifies each pupil
   *
   * @return $this
   */
  public function setUpn($upn)
  {
    $this->container['upn'] = $upn;

    return $this;
  }

  /**
   * Gets former_upn
   *
   * @return string
   */
  public function getFormerUpn()
  {
    return $this->container['former_upn'];
  }

  /**
   * Sets former_upn
   *
   * @param string $former_upn The previous UPN where a pupil has held another UPN whilst at a school
   *
   * @return $this
   */
  public function setFormerUpn($former_upn)
  {
    $this->container['former_upn'] = $former_upn;

    return $this;
  }

  /**
   * Gets uln
   *
   * @return string
   */
  public function getUln()
  {
    return $this->container['uln'];
  }

  /**
   * Sets uln
   *
   * @param string $uln Unique Learner Number (ULN) - a LRS-mandated 10-character code that identifies each pupil
   *
   * @return $this
   */
  public function setUln($uln)
  {
    $this->container['uln'] = $uln;

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
   * @param string $mis_id The ID of a student from the MIS
   *
   * @return $this
   */
  public function setMisId($mis_id)
  {
    $this->container['mis_id'] = $mis_id;

    return $this;
  }

  /**
   * Gets pan
   *
   * @return string
   */
  public function getPan()
  {
    return $this->container['pan'];
  }

  /**
   * Sets pan
   *
   * @param string $pan A student's \"pupil admission number\". This field is often exposed in the front end of the MIS, and may be the same as `mis_id`
   *
   * @return $this
   */
  public function setPan($pan)
  {
    $this->container['pan'] = $pan;

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
   * @param string $first_name The first name the student wishes to go by, may be the same as `legal_first_name`
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
   * @param string $legal_first_name The legal first name of the student
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
   * @param string $middle_name The middle name of the student
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
   * @param string $last_name The last name the student wishes to go by, may be the same as `legal_last_name`
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
   * @param string $legal_last_name The legal first name of the student, may be the same as `legal_last_name`
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
   * @param string $former_last_name The former last name of the student, may be `null`
   *
   * @return $this
   */
  public function setFormerLastName($former_last_name)
  {
    $this->container['former_last_name'] = $former_last_name;

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
   * @param \DateTime $dob The date of birth of the student
   *
   * @return $this
   */
  public function setDob($dob)
  {
    $this->container['dob'] = $dob;

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
   * @param \DateTime $start_date The date that the student first joined the school
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
   * @param \DateTime $end_date The date that the student left the school, or `null` if still a current student
   *
   * @return $this
   */
  public function setEndDate($end_date)
  {
    $this->container['end_date'] = $end_date;

    return $this;
  }

  /**
   * Gets enrolment_status
   *
   * @return string
   */
  public function getEnrolmentStatus()
  {
    return $this->container['enrolment_status'];
  }

  /**
   * Sets enrolment_status
   *
   * @param string $enrolment_status The enrolment status of the student
   *
   * @return $this
   */
  public function setEnrolmentStatus($enrolment_status)
  {
    $this->container['enrolment_status'] = $enrolment_status;

    return $this;
  }

  /**
   * Gets demographics
   *
   * @return \Assembly\Client\Model\StudentDemographics
   */
  public function getDemographics()
  {
    return $this->container['demographics'];
  }

  /**
   * Sets demographics
   *
   * @param \Assembly\Client\Model\StudentDemographics $demographics demographics
   *
   * @return $this
   */
  public function setDemographics($demographics)
  {
    $this->container['demographics'] = $demographics;

    return $this;
  }

  /**
   * Gets medical
   *
   * @return \Assembly\Client\Model\StudentMedical
   */
  public function getMedical()
  {
    return $this->container['medical'];
  }

  /**
   * Sets medical
   *
   * @param \Assembly\Client\Model\StudentMedical $medical medical
   *
   * @return $this
   */
  public function setMedical($medical)
  {
    $this->container['medical'] = $medical;

    return $this;
  }

  /**
   * Gets contacts
   *
   * @return \Assembly\Client\Model\StudentContacts[]
   */
  public function getContacts()
  {
    return $this->container['contacts'];
  }

  /**
   * Sets contacts
   *
   * @param \Assembly\Client\Model\StudentContacts[] $contacts A list of contact IDs which are associated with this student, and their relationship
   *
   * @return $this
   */
  public function setContacts($contacts)
  {
    $this->container['contacts'] = $contacts;

    return $this;
  }

  /**
   * Gets address
   *
   * @return \Assembly\Client\Model\StudentAddress
   */
  public function getAddress()
  {
    return $this->container['address'];
  }

  /**
   * Sets address
   *
   * @param \Assembly\Client\Model\StudentAddress $address address
   *
   * @return $this
   */
  public function setAddress($address)
  {
    $this->container['address'] = $address;

    return $this;
  }

  /**
   * Gets languages
   *
   * @return \Assembly\Client\Model\StudentLanguages
   */
  public function getLanguages()
  {
    return $this->container['languages'];
  }

  /**
   * Sets languages
   *
   * @param \Assembly\Client\Model\StudentLanguages $languages languages
   *
   * @return $this
   */
  public function setLanguages($languages)
  {
    $this->container['languages'] = $languages;

    return $this;
  }

  /**
   * Gets photo
   *
   * @return \Assembly\Client\Model\StudentPhoto
   */
  public function getPhoto()
  {
    return $this->container['photo'];
  }

  /**
   * Sets photo
   *
   * @param \Assembly\Client\Model\StudentPhoto $photo photo
   *
   * @return $this
   */
  public function setPhoto($photo)
  {
    $this->container['photo'] = $photo;

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


