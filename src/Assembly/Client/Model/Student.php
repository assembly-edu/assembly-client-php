<?php

/**
 * assembly.education
 *
 * Developer API for assembly.education.
 *
 * API version: 1.0.0
 * Contact: help@assembly.education
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 */

namespace Assembly\Client\Model;

use \ArrayAccess;
use \Assembly\Client\ObjectSerializer;

/**
 * Student Class Doc Comment
 *
 * @category Class
 * @description A student object represents a single student within a school.
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
    protected static $swaggerModelName = 'student';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'object' => 'string',
        'id' => 'int',
        'first_name' => 'string',
        'legal_first_name' => 'string',
        'middle_name' => 'string',
        'last_name' => 'string',
        'legal_last_name' => 'string',
        'former_last_name' => 'string',
        'dob' => '\DateTime',
        'year_code' => 'string',
        'upn' => 'string',
        'former_upn' => 'string',
        'mis_id' => 'string',
        'pan' => 'string',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'enrolment_status' => 'string',
        'demographics' => '\Assembly\Client\Model\StudentDemographics',
        'contact' => '\Assembly\Client\Model\ContactListData[]',
        'addresses' => '\Assembly\Client\Model\StudentAddresses',
        'languages' => '\Assembly\Client\Model\StudentLanguages'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'object' => null,
        'id' => 'int32',
        'first_name' => null,
        'legal_first_name' => null,
        'middle_name' => null,
        'last_name' => null,
        'legal_last_name' => null,
        'former_last_name' => null,
        'dob' => 'date',
        'year_code' => null,
        'upn' => null,
        'former_upn' => null,
        'mis_id' => null,
        'pan' => null,
        'start_date' => 'date-time',
        'end_date' => 'date-time',
        'enrolment_status' => null,
        'demographics' => null,
        'contact' => null,
        'addresses' => null,
        'languages' => null
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
        'first_name' => 'first_name',
        'legal_first_name' => 'legal_first_name',
        'middle_name' => 'middle_name',
        'last_name' => 'last_name',
        'legal_last_name' => 'legal_last_name',
        'former_last_name' => 'former_last_name',
        'dob' => 'dob',
        'year_code' => 'year_code',
        'upn' => 'upn',
        'former_upn' => 'former_upn',
        'mis_id' => 'mis_id',
        'pan' => 'pan',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'enrolment_status' => 'enrolment_status',
        'demographics' => 'demographics',
        'contact' => 'contact',
        'addresses' => 'addresses',
        'languages' => 'languages'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'object' => 'setObject',
        'id' => 'setId',
        'first_name' => 'setFirstName',
        'legal_first_name' => 'setLegalFirstName',
        'middle_name' => 'setMiddleName',
        'last_name' => 'setLastName',
        'legal_last_name' => 'setLegalLastName',
        'former_last_name' => 'setFormerLastName',
        'dob' => 'setDob',
        'year_code' => 'setYearCode',
        'upn' => 'setUpn',
        'former_upn' => 'setFormerUpn',
        'mis_id' => 'setMisId',
        'pan' => 'setPan',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'enrolment_status' => 'setEnrolmentStatus',
        'demographics' => 'setDemographics',
        'contact' => 'setContact',
        'addresses' => 'setAddresses',
        'languages' => 'setLanguages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'object' => 'getObject',
        'id' => 'getId',
        'first_name' => 'getFirstName',
        'legal_first_name' => 'getLegalFirstName',
        'middle_name' => 'getMiddleName',
        'last_name' => 'getLastName',
        'legal_last_name' => 'getLegalLastName',
        'former_last_name' => 'getFormerLastName',
        'dob' => 'getDob',
        'year_code' => 'getYearCode',
        'upn' => 'getUpn',
        'former_upn' => 'getFormerUpn',
        'mis_id' => 'getMisId',
        'pan' => 'getPan',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'enrolment_status' => 'getEnrolmentStatus',
        'demographics' => 'getDemographics',
        'contact' => 'getContact',
        'addresses' => 'getAddresses',
        'languages' => 'getLanguages'
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

    const YEAR_CODE__1 = '1';
    const YEAR_CODE__2 = '2';
    const YEAR_CODE__3 = '3';
    const YEAR_CODE__4 = '4';
    const YEAR_CODE__5 = '5';
    const YEAR_CODE__6 = '6';
    const YEAR_CODE__7 = '7';
    const YEAR_CODE__8 = '8';
    const YEAR_CODE__9 = '9';
    const YEAR_CODE_R = 'R';
    const YEAR_CODE__10 = '10';
    const YEAR_CODE__11 = '11';
    const YEAR_CODE__12 = '12';
    const YEAR_CODE__13 = '13';
    const YEAR_CODE_N1 = 'N1';
    const YEAR_CODE_N2 = 'N2';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getYearCodeAllowableValues()
    {
        return [
            self::YEAR_CODE__1,
            self::YEAR_CODE__2,
            self::YEAR_CODE__3,
            self::YEAR_CODE__4,
            self::YEAR_CODE__5,
            self::YEAR_CODE__6,
            self::YEAR_CODE__7,
            self::YEAR_CODE__8,
            self::YEAR_CODE__9,
            self::YEAR_CODE_R,
            self::YEAR_CODE__10,
            self::YEAR_CODE__11,
            self::YEAR_CODE__12,
            self::YEAR_CODE__13,
            self::YEAR_CODE_N1,
            self::YEAR_CODE_N2,
        ];
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
        $this->container['object'] = isset($data['object']) ? $data['object'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['legal_first_name'] = isset($data['legal_first_name']) ? $data['legal_first_name'] : null;
        $this->container['middle_name'] = isset($data['middle_name']) ? $data['middle_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['legal_last_name'] = isset($data['legal_last_name']) ? $data['legal_last_name'] : null;
        $this->container['former_last_name'] = isset($data['former_last_name']) ? $data['former_last_name'] : null;
        $this->container['dob'] = isset($data['dob']) ? $data['dob'] : null;
        $this->container['year_code'] = isset($data['year_code']) ? $data['year_code'] : null;
        $this->container['upn'] = isset($data['upn']) ? $data['upn'] : null;
        $this->container['former_upn'] = isset($data['former_upn']) ? $data['former_upn'] : null;
        $this->container['mis_id'] = isset($data['mis_id']) ? $data['mis_id'] : null;
        $this->container['pan'] = isset($data['pan']) ? $data['pan'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['enrolment_status'] = isset($data['enrolment_status']) ? $data['enrolment_status'] : null;
        $this->container['demographics'] = isset($data['demographics']) ? $data['demographics'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['languages'] = isset($data['languages']) ? $data['languages'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getYearCodeAllowableValues();
        if (!in_array($this->container['year_code'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'year_code', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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

        $allowedValues = $this->getYearCodeAllowableValues();
        if (!in_array($this->container['year_code'], $allowedValues)) {
            return false;
        }
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
     * @param string $object Object type
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
     * @param int $id Internal stable ID given to students in the Platform
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $first_name The first name of the student
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
     * @param string $last_name The last name of the student
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
     * @param string $legal_last_name The legal last name of the student
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
     * @param string $former_last_name The former last name of the student
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
     * @param string $year_code The year group the student currently belongs to *Values*  |Value|Description| |---|---| |`1`|Year 1| |`2`|Year 2| |`3`|Year 3| |`4`|Year 4| |`5`|Year 5| |`6`|Year 6| |`7`|Year 7| |`8`|Year 8| |`9`|Year 9| |`R`|Reception| |`10`|Year 10| |`11`|Year 11| |`12`|Year 12| |`13`|Year 13| |`N1`|Nursery first year| |`N2`|Nursery second year|
     *
     * @return $this
     */
    public function setYearCode($year_code)
    {
        $allowedValues = $this->getYearCodeAllowableValues();
        if (!is_null($year_code) && !in_array($year_code, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'year_code', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
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
     * @param string $pan A student's 'Pupil Admission Number'. This field is exposed in the front end of the MIS, and may be the same as mis_id
     *
     * @return $this
     */
    public function setPan($pan)
    {
        $this->container['pan'] = $pan;

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
     * @param \DateTime $start_date Date when the student joined the school
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
     * @param \DateTime $end_date Date when the student left the school (this will default to 2079-06-06T23:59:00.000Z)
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
     * Gets contact
     *
     * @return \Assembly\Client\Model\ContactListData[]
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \Assembly\Client\Model\ContactListData[] $contact List of contact IDs for the student.
     *
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets addresses
     *
     * @return \Assembly\Client\Model\StudentAddresses
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \Assembly\Client\Model\StudentAddresses $addresses addresses
     *
     * @return $this
     */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;

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


