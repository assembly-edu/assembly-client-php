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
 * StaffMemberQualificationInfo Class Doc Comment
 *
 * @category Class
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class StaffMemberQualificationInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StaffMemberQualificationInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'teacher_number' => 'string',
        'qt_status' => 'bool',
        'hlta_status' => 'bool',
        'qts_route' => 'string',
        'qualifications' => '\Assembly\Client\Model\StaffQualification[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'teacher_number' => null,
        'qt_status' => null,
        'hlta_status' => null,
        'qts_route' => null,
        'qualifications' => null
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
        'teacher_number' => 'teacher_number',
        'qt_status' => 'qt_status',
        'hlta_status' => 'hlta_status',
        'qts_route' => 'qts_route',
        'qualifications' => 'qualifications'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'teacher_number' => 'setTeacherNumber',
        'qt_status' => 'setQtStatus',
        'hlta_status' => 'setHltaStatus',
        'qts_route' => 'setQtsRoute',
        'qualifications' => 'setQualifications'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'teacher_number' => 'getTeacherNumber',
        'qt_status' => 'getQtStatus',
        'hlta_status' => 'getHltaStatus',
        'qts_route' => 'getQtsRoute',
        'qualifications' => 'getQualifications'
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
        $this->container['teacher_number'] = isset($data['teacher_number']) ? $data['teacher_number'] : null;
        $this->container['qt_status'] = isset($data['qt_status']) ? $data['qt_status'] : null;
        $this->container['hlta_status'] = isset($data['hlta_status']) ? $data['hlta_status'] : null;
        $this->container['qts_route'] = isset($data['qts_route']) ? $data['qts_route'] : null;
        $this->container['qualifications'] = isset($data['qualifications']) ? $data['qualifications'] : null;
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
     * Gets teacher_number
     *
     * @return string
     */
    public function getTeacherNumber()
    {
        return $this->container['teacher_number'];
    }

    /**
     * Sets teacher_number
     *
     * @param string $teacher_number teacher_number
     *
     * @return $this
     */
    public function setTeacherNumber($teacher_number)
    {
        $this->container['teacher_number'] = $teacher_number;

        return $this;
    }

    /**
     * Gets qt_status
     *
     * @return bool
     */
    public function getQtStatus()
    {
        return $this->container['qt_status'];
    }

    /**
     * Sets qt_status
     *
     * @param bool $qt_status qt_status
     *
     * @return $this
     */
    public function setQtStatus($qt_status)
    {
        $this->container['qt_status'] = $qt_status;

        return $this;
    }

    /**
     * Gets hlta_status
     *
     * @return bool
     */
    public function getHltaStatus()
    {
        return $this->container['hlta_status'];
    }

    /**
     * Sets hlta_status
     *
     * @param bool $hlta_status hlta_status
     *
     * @return $this
     */
    public function setHltaStatus($hlta_status)
    {
        $this->container['hlta_status'] = $hlta_status;

        return $this;
    }

    /**
     * Gets qts_route
     *
     * @return string
     */
    public function getQtsRoute()
    {
        return $this->container['qts_route'];
    }

    /**
     * Sets qts_route
     *
     * @param string $qts_route qts_route
     *
     * @return $this
     */
    public function setQtsRoute($qts_route)
    {
        $this->container['qts_route'] = $qts_route;

        return $this;
    }

    /**
     * Gets qualifications
     *
     * @return \Assembly\Client\Model\StaffQualification[]
     */
    public function getQualifications()
    {
        return $this->container['qualifications'];
    }

    /**
     * Sets qualifications
     *
     * @param \Assembly\Client\Model\StaffQualification[] $qualifications qualifications
     *
     * @return $this
     */
    public function setQualifications($qualifications)
    {
        $this->container['qualifications'] = $qualifications;

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


