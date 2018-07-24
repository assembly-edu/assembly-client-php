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
 * StudentDemographics Class Doc Comment
 *
 * @category Class
 * @description Demographics information about the student.
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
    protected static $swaggerModelName = 'student_demographics';

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
        'in_care' => 'bool',
        'is_eal' => 'bool',
        'is_fsm' => 'bool',
        'fsm_review_date' => '\DateTime',
        'is_pp' => 'bool',
        'sen_category' => 'string',
        'sen_needs' => '\Assembly\Client\Model\StudentDemographicsSenNeeds',
        'country_of_birth' => 'string',
        'nationalities' => 'string[]'
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
        'in_care' => null,
        'is_eal' => null,
        'is_fsm' => null,
        'fsm_review_date' => 'date-time',
        'is_pp' => null,
        'sen_category' => null,
        'sen_needs' => null,
        'country_of_birth' => null,
        'nationalities' => null
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
        'in_care' => 'in_care',
        'is_eal' => 'is_eal',
        'is_fsm' => 'is_fsm',
        'fsm_review_date' => 'fsm_review_date',
        'is_pp' => 'is_pp',
        'sen_category' => 'sen_category',
        'sen_needs' => 'sen_needs',
        'country_of_birth' => 'country_of_birth',
        'nationalities' => 'nationalities'
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
        'in_care' => 'setInCare',
        'is_eal' => 'setIsEal',
        'is_fsm' => 'setIsFsm',
        'fsm_review_date' => 'setFsmReviewDate',
        'is_pp' => 'setIsPp',
        'sen_category' => 'setSenCategory',
        'sen_needs' => 'setSenNeeds',
        'country_of_birth' => 'setCountryOfBirth',
        'nationalities' => 'setNationalities'
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
        'in_care' => 'getInCare',
        'is_eal' => 'getIsEal',
        'is_fsm' => 'getIsFsm',
        'fsm_review_date' => 'getFsmReviewDate',
        'is_pp' => 'getIsPp',
        'sen_category' => 'getSenCategory',
        'sen_needs' => 'getSenNeeds',
        'country_of_birth' => 'getCountryOfBirth',
        'nationalities' => 'getNationalities'
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

    const GENDER_F = 'F';
    const GENDER_M = 'M';
    const SEN_CATEGORY_A = 'A';
    const SEN_CATEGORY_E = 'E';
    const SEN_CATEGORY_K = 'K';
    const SEN_CATEGORY_N = 'N';
    const SEN_CATEGORY_P = 'P';
    const SEN_CATEGORY_S = 'S';
    const SEN_CATEGORY_NULL = 'null';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGenderAllowableValues()
    {
        return [
            self::GENDER_F,
            self::GENDER_M,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSenCategoryAllowableValues()
    {
        return [
            self::SEN_CATEGORY_A,
            self::SEN_CATEGORY_E,
            self::SEN_CATEGORY_K,
            self::SEN_CATEGORY_N,
            self::SEN_CATEGORY_P,
            self::SEN_CATEGORY_S,
            self::SEN_CATEGORY_NULL,
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
        $this->container['ethnicity_code'] = isset($data['ethnicity_code']) ? $data['ethnicity_code'] : null;
        $this->container['ethnicity_group'] = isset($data['ethnicity_group']) ? $data['ethnicity_group'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['in_care'] = isset($data['in_care']) ? $data['in_care'] : null;
        $this->container['is_eal'] = isset($data['is_eal']) ? $data['is_eal'] : null;
        $this->container['is_fsm'] = isset($data['is_fsm']) ? $data['is_fsm'] : null;
        $this->container['fsm_review_date'] = isset($data['fsm_review_date']) ? $data['fsm_review_date'] : null;
        $this->container['is_pp'] = isset($data['is_pp']) ? $data['is_pp'] : null;
        $this->container['sen_category'] = isset($data['sen_category']) ? $data['sen_category'] : null;
        $this->container['sen_needs'] = isset($data['sen_needs']) ? $data['sen_needs'] : null;
        $this->container['country_of_birth'] = isset($data['country_of_birth']) ? $data['country_of_birth'] : null;
        $this->container['nationalities'] = isset($data['nationalities']) ? $data['nationalities'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getGenderAllowableValues();
        if (!in_array($this->container['gender'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'gender', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSenCategoryAllowableValues();
        if (!in_array($this->container['sen_category'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'sen_category', must be one of '%s'",
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

        $allowedValues = $this->getGenderAllowableValues();
        if (!in_array($this->container['gender'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getSenCategoryAllowableValues();
        if (!in_array($this->container['sen_category'], $allowedValues)) {
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
     * @param string $gender The gender of the student *Values*  |Value|Description| |---|---| |`F`|Female| |`M`|Male|
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $allowedValues = $this->getGenderAllowableValues();
        if (!is_null($gender) && !in_array($gender, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'gender', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['gender'] = $gender;

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
     * @param bool $in_care Looked after status - indicates whether the student is 'looked after' by the local authority (this field will only be returned if &demographics=true and &care=true is included in your request)
     *
     * @return $this
     */
    public function setInCare($in_care)
    {
        $this->container['in_care'] = $in_care;

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
     * Gets fsm_review_date
     *
     * @return \DateTime
     */
    public function getFsmReviewDate()
    {
        return $this->container['fsm_review_date'];
    }

    /**
     * Sets fsm_review_date
     *
     * @param \DateTime $fsm_review_date Free school meal review date -Review date for pupil's free school meal eligibility
     *
     * @return $this
     */
    public function setFsmReviewDate($fsm_review_date)
    {
        $this->container['fsm_review_date'] = $fsm_review_date;

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
     * @param string $sen_category Special Education Need (SEN) - indicates a student has learning difficulties and requires special education provision. *Values*  |Value|Description| |---|---| |`A`|School Action (no longer valid)| |`E`|Education, Health and Care Plan| |`K`|SEN Support| |`N`|None| |`P`|School Action Plus (no longer valid)| |`S`|Statement| |`null`|Not eligable|
     *
     * @return $this
     */
    public function setSenCategory($sen_category)
    {
        $allowedValues = $this->getSenCategoryAllowableValues();
        if (!is_null($sen_category) && !in_array($sen_category, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sen_category', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sen_category'] = $sen_category;

        return $this;
    }

    /**
     * Gets sen_needs
     *
     * @return \Assembly\Client\Model\StudentDemographicsSenNeeds
     */
    public function getSenNeeds()
    {
        return $this->container['sen_needs'];
    }

    /**
     * Sets sen_needs
     *
     * @param \Assembly\Client\Model\StudentDemographicsSenNeeds $sen_needs sen_needs
     *
     * @return $this
     */
    public function setSenNeeds($sen_needs)
    {
        $this->container['sen_needs'] = $sen_needs;

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


