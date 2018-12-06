<?php

/**
 * Assembly Developer API
 *
 * The Assembly API is built around the REST and a collection of open standards/protocols in order to comply with as many consumers as possible.
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
        'ethnicity_code' => 'string',
        'ethnicity_group' => 'string',
        'gender' => 'string',
        'is_pp' => 'bool',
        'is_eal' => 'bool',
        'sen_category' => 'string',
        'country_of_birth' => 'string',
        'nationalities' => 'string[]',
        'fsm_review_date' => 'string',
        'is_fsm' => 'bool',
        'looked_after' => 'bool',
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
        'ethnicity_code' => null,
        'ethnicity_group' => null,
        'gender' => null,
        'is_pp' => null,
        'is_eal' => null,
        'sen_category' => null,
        'country_of_birth' => null,
        'nationalities' => null,
        'fsm_review_date' => null,
        'is_fsm' => null,
        'looked_after' => null,
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
        'ethnicity_code' => 'ethnicity_code',
        'ethnicity_group' => 'ethnicity_group',
        'gender' => 'gender',
        'is_pp' => 'is_pp',
        'is_eal' => 'is_eal',
        'sen_category' => 'sen_category',
        'country_of_birth' => 'country_of_birth',
        'nationalities' => 'nationalities',
        'fsm_review_date' => 'fsm_review_date',
        'is_fsm' => 'is_fsm',
        'looked_after' => 'looked_after',
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
        'ethnicity_code' => 'setEthnicityCode',
        'ethnicity_group' => 'setEthnicityGroup',
        'gender' => 'setGender',
        'is_pp' => 'setIsPp',
        'is_eal' => 'setIsEal',
        'sen_category' => 'setSenCategory',
        'country_of_birth' => 'setCountryOfBirth',
        'nationalities' => 'setNationalities',
        'fsm_review_date' => 'setFsmReviewDate',
        'is_fsm' => 'setIsFsm',
        'looked_after' => 'setLookedAfter',
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
        'ethnicity_code' => 'getEthnicityCode',
        'ethnicity_group' => 'getEthnicityGroup',
        'gender' => 'getGender',
        'is_pp' => 'getIsPp',
        'is_eal' => 'getIsEal',
        'sen_category' => 'getSenCategory',
        'country_of_birth' => 'getCountryOfBirth',
        'nationalities' => 'getNationalities',
        'fsm_review_date' => 'getFsmReviewDate',
        'is_fsm' => 'getIsFsm',
        'looked_after' => 'getLookedAfter',
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
        $this->container['ethnicity_code'] = isset($data['ethnicity_code']) ? $data['ethnicity_code'] : null;
        $this->container['ethnicity_group'] = isset($data['ethnicity_group']) ? $data['ethnicity_group'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['is_pp'] = isset($data['is_pp']) ? $data['is_pp'] : null;
        $this->container['is_eal'] = isset($data['is_eal']) ? $data['is_eal'] : null;
        $this->container['sen_category'] = isset($data['sen_category']) ? $data['sen_category'] : null;
        $this->container['country_of_birth'] = isset($data['country_of_birth']) ? $data['country_of_birth'] : null;
        $this->container['nationalities'] = isset($data['nationalities']) ? $data['nationalities'] : null;
        $this->container['fsm_review_date'] = isset($data['fsm_review_date']) ? $data['fsm_review_date'] : null;
        $this->container['is_fsm'] = isset($data['is_fsm']) ? $data['is_fsm'] : null;
        $this->container['looked_after'] = isset($data['looked_after']) ? $data['looked_after'] : null;
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
     * @param string $ethnicity_code ethnicity_code
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
     * @param string $ethnicity_group ethnicity_group
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
     * @param string $gender gender
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
     * @param bool $is_pp is_pp
     *
     * @return $this
     */
    public function setIsPp($is_pp)
    {
        $this->container['is_pp'] = $is_pp;

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
     * @param bool $is_eal is_eal
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
     * @param string $sen_category sen_category
     *
     * @return $this
     */
    public function setSenCategory($sen_category)
    {
        $this->container['sen_category'] = $sen_category;

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
     * @param string $country_of_birth country_of_birth
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
     * @param string[] $nationalities nationalities
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
     * @param string $fsm_review_date fsm_review_date
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
     * @param bool $is_fsm is_fsm
     *
     * @return $this
     */
    public function setIsFsm($is_fsm)
    {
        $this->container['is_fsm'] = $is_fsm;

        return $this;
    }

    /**
     * Gets looked_after
     *
     * @return bool
     */
    public function getLookedAfter()
    {
        return $this->container['looked_after'];
    }

    /**
     * Sets looked_after
     *
     * @param bool $looked_after looked_after
     *
     * @return $this
     */
    public function setLookedAfter($looked_after)
    {
        $this->container['looked_after'] = $looked_after;

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
     * @param bool $ever_in_care ever_in_care
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
     * @param bool $service_child service_child
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
     * @param \Assembly\Client\Model\SenNeed[] $sen_needs sen_needs
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


