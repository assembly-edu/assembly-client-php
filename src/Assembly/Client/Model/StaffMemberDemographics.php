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
 * StaffMemberDemographics Class Doc Comment
 *
 * @category Class
 * @description Demographic information about a staff member.
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
    protected static $swaggerModelName = 'staff_member_demographics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'gender' => 'string',
        'ethnicity_code' => 'string',
        'ethnicity_group' => 'string',
        'disability' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'gender' => null,
        'ethnicity_code' => null,
        'ethnicity_group' => null,
        'disability' => null
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
        'gender' => 'gender',
        'ethnicity_code' => 'ethnicity_code',
        'ethnicity_group' => 'ethnicity_group',
        'disability' => 'disability'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'gender' => 'setGender',
        'ethnicity_code' => 'setEthnicityCode',
        'ethnicity_group' => 'setEthnicityGroup',
        'disability' => 'setDisability'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'gender' => 'getGender',
        'ethnicity_code' => 'getEthnicityCode',
        'ethnicity_group' => 'getEthnicityGroup',
        'disability' => 'getDisability'
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
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['ethnicity_code'] = isset($data['ethnicity_code']) ? $data['ethnicity_code'] : null;
        $this->container['ethnicity_group'] = isset($data['ethnicity_group']) ? $data['ethnicity_group'] : null;
        $this->container['disability'] = isset($data['disability']) ? $data['disability'] : null;
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
        return true;
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
     * @param string $gender The gender of a staff member *Values*  |Value|Description| |---|---| |`F`|Female| |`M`|Male|
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


