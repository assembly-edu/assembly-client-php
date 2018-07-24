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
 * ExclusionListData Class Doc Comment
 *
 * @category Class
 * @description The exclusions resource details official exclusions from a school.
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class ExclusionListData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'exclusion_list_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'object' => 'string',
        'id' => 'int',
        'student_id' => 'int',
        'exclusion_type' => 'string',
        'exclusions_reason' => 'string',
        'start_date' => 'string',
        'start_session' => 'string',
        'end_date' => 'string',
        'end_session' => 'string',
        'exclusion_length' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'object' => null,
        'id' => 'int32',
        'student_id' => 'int32',
        'exclusion_type' => null,
        'exclusions_reason' => null,
        'start_date' => null,
        'start_session' => null,
        'end_date' => null,
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
        'object' => 'object',
        'id' => 'id',
        'student_id' => 'student_id',
        'exclusion_type' => 'exclusion_type',
        'exclusions_reason' => 'exclusions_reason',
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
        'object' => 'setObject',
        'id' => 'setId',
        'student_id' => 'setStudentId',
        'exclusion_type' => 'setExclusionType',
        'exclusions_reason' => 'setExclusionsReason',
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
        'object' => 'getObject',
        'id' => 'getId',
        'student_id' => 'getStudentId',
        'exclusion_type' => 'getExclusionType',
        'exclusions_reason' => 'getExclusionsReason',
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
        $this->container['object'] = isset($data['object']) ? $data['object'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['student_id'] = isset($data['student_id']) ? $data['student_id'] : null;
        $this->container['exclusion_type'] = isset($data['exclusion_type']) ? $data['exclusion_type'] : null;
        $this->container['exclusions_reason'] = isset($data['exclusions_reason']) ? $data['exclusions_reason'] : null;
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
     * @param int $id Internal stable ID given to all exclusions on the Platform
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
     * @param int $student_id The ID of the student that the exclusion is attached to
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
     * @param string $exclusion_type The exclusions type
     *
     * @return $this
     */
    public function setExclusionType($exclusion_type)
    {
        $this->container['exclusion_type'] = $exclusion_type;

        return $this;
    }

    /**
     * Gets exclusions_reason
     *
     * @return string
     */
    public function getExclusionsReason()
    {
        return $this->container['exclusions_reason'];
    }

    /**
     * Sets exclusions_reason
     *
     * @param string $exclusions_reason The exclusion reason
     *
     * @return $this
     */
    public function setExclusionsReason($exclusions_reason)
    {
        $this->container['exclusions_reason'] = $exclusions_reason;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param string $start_date The date on which the exclusions starts
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
     * @param string $start_session The session in which the exclusion starts
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
     * @return string
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param string $end_date The date on which the exclusion ends
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
     * @param string $end_session The session (AM/PM) in which the exclusion ends
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
     * @param int $exclusion_length The total length, in sessions, of the exclusion
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


