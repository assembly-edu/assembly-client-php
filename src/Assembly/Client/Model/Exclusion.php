<?php

/**
 * Assembly Developer API
 * Version 1.1.0
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
 * Exclusion Class Doc Comment
 *
 * @category Class
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class Exclusion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Exclusion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'student_id' => 'int',
        'exclusion_type' => 'string',
        'exclusion_reason' => 'string',
        'start_date' => '\DateTime',
        'start_session' => 'string',
        'end_date' => '\DateTime',
        'end_session' => 'string',
        'exclusion_length' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'student_id' => 'int32',
        'exclusion_type' => null,
        'exclusion_reason' => null,
        'start_date' => 'date-time',
        'start_session' => null,
        'end_date' => 'date-time',
        'end_session' => null,
        'exclusion_length' => 'int32'
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
        'student_id' => 'student_id',
        'exclusion_type' => 'exclusion_type',
        'exclusion_reason' => 'exclusion_reason',
        'start_date' => 'start_date',
        'start_session' => 'start_session',
        'end_date' => 'end_date',
        'end_session' => 'end_session',
        'exclusion_length' => 'exclusion_length'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'student_id' => 'setStudentId',
        'exclusion_type' => 'setExclusionType',
        'exclusion_reason' => 'setExclusionReason',
        'start_date' => 'setStartDate',
        'start_session' => 'setStartSession',
        'end_date' => 'setEndDate',
        'end_session' => 'setEndSession',
        'exclusion_length' => 'setExclusionLength'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'student_id' => 'getStudentId',
        'exclusion_type' => 'getExclusionType',
        'exclusion_reason' => 'getExclusionReason',
        'start_date' => 'getStartDate',
        'start_session' => 'getStartSession',
        'end_date' => 'getEndDate',
        'end_session' => 'getEndSession',
        'exclusion_length' => 'getExclusionLength'
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
        $this->container['student_id'] = isset($data['student_id']) ? $data['student_id'] : null;
        $this->container['exclusion_type'] = isset($data['exclusion_type']) ? $data['exclusion_type'] : null;
        $this->container['exclusion_reason'] = isset($data['exclusion_reason']) ? $data['exclusion_reason'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['start_session'] = isset($data['start_session']) ? $data['start_session'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['end_session'] = isset($data['end_session']) ? $data['end_session'] : null;
        $this->container['exclusion_length'] = isset($data['exclusion_length']) ? $data['exclusion_length'] : null;
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
     * Gets student_id
     *
     * @return int
     */
    public function getStudentId()
    {
        return $this->container['student_id'];
    }

    /**
     * Sets student_id
     *
     * @param int $student_id student_id
     *
     * @return $this
     */
    public function setStudentId($student_id)
    {
        $this->container['student_id'] = $student_id;

        return $this;
    }

    /**
     * Gets exclusion_type
     *
     * @return string
     */
    public function getExclusionType()
    {
        return $this->container['exclusion_type'];
    }

    /**
     * Sets exclusion_type
     *
     * @param string $exclusion_type exclusion_type
     *
     * @return $this
     */
    public function setExclusionType($exclusion_type)
    {
        $this->container['exclusion_type'] = $exclusion_type;

        return $this;
    }

    /**
     * Gets exclusion_reason
     *
     * @return string
     */
    public function getExclusionReason()
    {
        return $this->container['exclusion_reason'];
    }

    /**
     * Sets exclusion_reason
     *
     * @param string $exclusion_reason exclusion_reason
     *
     * @return $this
     */
    public function setExclusionReason($exclusion_reason)
    {
        $this->container['exclusion_reason'] = $exclusion_reason;

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
     * @param \DateTime $start_date start_date
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets start_session
     *
     * @return string
     */
    public function getStartSession()
    {
        return $this->container['start_session'];
    }

    /**
     * Sets start_session
     *
     * @param string $start_session start_session
     *
     * @return $this
     */
    public function setStartSession($start_session)
    {
        $this->container['start_session'] = $start_session;

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
     * @param \DateTime $end_date end_date
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets end_session
     *
     * @return string
     */
    public function getEndSession()
    {
        return $this->container['end_session'];
    }

    /**
     * Sets end_session
     *
     * @param string $end_session end_session
     *
     * @return $this
     */
    public function setEndSession($end_session)
    {
        $this->container['end_session'] = $end_session;

        return $this;
    }

    /**
     * Gets exclusion_length
     *
     * @return int
     */
    public function getExclusionLength()
    {
        return $this->container['exclusion_length'];
    }

    /**
     * Sets exclusion_length
     *
     * @param int $exclusion_length exclusion_length
     *
     * @return $this
     */
    public function setExclusionLength($exclusion_length)
    {
        $this->container['exclusion_length'] = $exclusion_length;

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


