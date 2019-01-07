<?php

/**
 * Assembly Developer API
 *
 * The Assembly API is built around the REST and a collection of open standards/protocols in order to comply with as many consumers as possible.
 *
 * API version: 1.1.0
 * Contact: help@assembly.education
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 */

namespace Assembly\Client\Model;

use \ArrayAccess;
use \Assembly\Client\ObjectSerializer;

/**
 * StaffQualification Class Doc Comment
 *
 * @category Class
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class StaffQualification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StaffQualification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'qualification_code' => 'string',
        'degree_class' => 'string',
        'first_subject_code' => 'string',
        'first_subject_name' => 'string',
        'second_subject_code' => 'string',
        'second_subject_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'qualification_code' => null,
        'degree_class' => null,
        'first_subject_code' => null,
        'first_subject_name' => null,
        'second_subject_code' => null,
        'second_subject_name' => null
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
        'id' => 'id',
        'qualification_code' => 'qualification_code',
        'degree_class' => 'degree_class',
        'first_subject_code' => 'first_subject_code',
        'first_subject_name' => 'first_subject_name',
        'second_subject_code' => 'second_subject_code',
        'second_subject_name' => 'second_subject_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'qualification_code' => 'setQualificationCode',
        'degree_class' => 'setDegreeClass',
        'first_subject_code' => 'setFirstSubjectCode',
        'first_subject_name' => 'setFirstSubjectName',
        'second_subject_code' => 'setSecondSubjectCode',
        'second_subject_name' => 'setSecondSubjectName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'qualification_code' => 'getQualificationCode',
        'degree_class' => 'getDegreeClass',
        'first_subject_code' => 'getFirstSubjectCode',
        'first_subject_name' => 'getFirstSubjectName',
        'second_subject_code' => 'getSecondSubjectCode',
        'second_subject_name' => 'getSecondSubjectName'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['qualification_code'] = isset($data['qualification_code']) ? $data['qualification_code'] : null;
        $this->container['degree_class'] = isset($data['degree_class']) ? $data['degree_class'] : null;
        $this->container['first_subject_code'] = isset($data['first_subject_code']) ? $data['first_subject_code'] : null;
        $this->container['first_subject_name'] = isset($data['first_subject_name']) ? $data['first_subject_name'] : null;
        $this->container['second_subject_code'] = isset($data['second_subject_code']) ? $data['second_subject_code'] : null;
        $this->container['second_subject_name'] = isset($data['second_subject_name']) ? $data['second_subject_name'] : null;
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
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets qualification_code
     *
     * @return string
     */
    public function getQualificationCode()
    {
        return $this->container['qualification_code'];
    }

    /**
     * Sets qualification_code
     *
     * @param string $qualification_code qualification_code
     *
     * @return $this
     */
    public function setQualificationCode($qualification_code)
    {
        $this->container['qualification_code'] = $qualification_code;

        return $this;
    }

    /**
     * Gets degree_class
     *
     * @return string
     */
    public function getDegreeClass()
    {
        return $this->container['degree_class'];
    }

    /**
     * Sets degree_class
     *
     * @param string $degree_class degree_class
     *
     * @return $this
     */
    public function setDegreeClass($degree_class)
    {
        $this->container['degree_class'] = $degree_class;

        return $this;
    }

    /**
     * Gets first_subject_code
     *
     * @return string
     */
    public function getFirstSubjectCode()
    {
        return $this->container['first_subject_code'];
    }

    /**
     * Sets first_subject_code
     *
     * @param string $first_subject_code first_subject_code
     *
     * @return $this
     */
    public function setFirstSubjectCode($first_subject_code)
    {
        $this->container['first_subject_code'] = $first_subject_code;

        return $this;
    }

    /**
     * Gets first_subject_name
     *
     * @return string
     */
    public function getFirstSubjectName()
    {
        return $this->container['first_subject_name'];
    }

    /**
     * Sets first_subject_name
     *
     * @param string $first_subject_name first_subject_name
     *
     * @return $this
     */
    public function setFirstSubjectName($first_subject_name)
    {
        $this->container['first_subject_name'] = $first_subject_name;

        return $this;
    }

    /**
     * Gets second_subject_code
     *
     * @return string
     */
    public function getSecondSubjectCode()
    {
        return $this->container['second_subject_code'];
    }

    /**
     * Sets second_subject_code
     *
     * @param string $second_subject_code second_subject_code
     *
     * @return $this
     */
    public function setSecondSubjectCode($second_subject_code)
    {
        $this->container['second_subject_code'] = $second_subject_code;

        return $this;
    }

    /**
     * Gets second_subject_name
     *
     * @return string
     */
    public function getSecondSubjectName()
    {
        return $this->container['second_subject_name'];
    }

    /**
     * Sets second_subject_name
     *
     * @param string $second_subject_name second_subject_name
     *
     * @return $this
     */
    public function setSecondSubjectName($second_subject_name)
    {
        $this->container['second_subject_name'] = $second_subject_name;

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

