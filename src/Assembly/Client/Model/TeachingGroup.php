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
 * TeachingGroup Class Doc Comment
 *
 * @category Class
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class TeachingGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TeachingGroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'school_id' => 'int',
        'source_id' => 'string',
        'name' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'academic_year_id' => 'int',
        'subject_id' => 'int',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'level' => 'string',
        'assessment_id' => 'int',
        'effective_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'school_id' => 'int32',
        'source_id' => null,
        'name' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'academic_year_id' => 'int32',
        'subject_id' => 'int32',
        'start_date' => 'date-time',
        'end_date' => 'date-time',
        'level' => null,
        'assessment_id' => 'int32',
        'effective_at' => 'date-time'
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
        'school_id' => 'school_id',
        'source_id' => 'source_id',
        'name' => 'name',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'academic_year_id' => 'academic_year_id',
        'subject_id' => 'subject_id',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'level' => 'level',
        'assessment_id' => 'assessment_id',
        'effective_at' => 'effective_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'school_id' => 'setSchoolId',
        'source_id' => 'setSourceId',
        'name' => 'setName',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'academic_year_id' => 'setAcademicYearId',
        'subject_id' => 'setSubjectId',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'level' => 'setLevel',
        'assessment_id' => 'setAssessmentId',
        'effective_at' => 'setEffectiveAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'school_id' => 'getSchoolId',
        'source_id' => 'getSourceId',
        'name' => 'getName',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'academic_year_id' => 'getAcademicYearId',
        'subject_id' => 'getSubjectId',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'level' => 'getLevel',
        'assessment_id' => 'getAssessmentId',
        'effective_at' => 'getEffectiveAt'
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
        $this->container['school_id'] = isset($data['school_id']) ? $data['school_id'] : null;
        $this->container['source_id'] = isset($data['source_id']) ? $data['source_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['academic_year_id'] = isset($data['academic_year_id']) ? $data['academic_year_id'] : null;
        $this->container['subject_id'] = isset($data['subject_id']) ? $data['subject_id'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['assessment_id'] = isset($data['assessment_id']) ? $data['assessment_id'] : null;
        $this->container['effective_at'] = isset($data['effective_at']) ? $data['effective_at'] : null;
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
     * Gets school_id
     *
     * @return int
     */
    public function getSchoolId()
    {
        return $this->container['school_id'];
    }

    /**
     * Sets school_id
     *
     * @param int $school_id school_id
     *
     * @return $this
     */
    public function setSchoolId($school_id)
    {
        $this->container['school_id'] = $school_id;

        return $this;
    }

    /**
     * Gets source_id
     *
     * @return string
     */
    public function getSourceId()
    {
        return $this->container['source_id'];
    }

    /**
     * Sets source_id
     *
     * @param string $source_id source_id
     *
     * @return $this
     */
    public function setSourceId($source_id)
    {
        $this->container['source_id'] = $source_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets academic_year_id
     *
     * @return int
     */
    public function getAcademicYearId()
    {
        return $this->container['academic_year_id'];
    }

    /**
     * Sets academic_year_id
     *
     * @param int $academic_year_id academic_year_id
     *
     * @return $this
     */
    public function setAcademicYearId($academic_year_id)
    {
        $this->container['academic_year_id'] = $academic_year_id;

        return $this;
    }

    /**
     * Gets subject_id
     *
     * @return int
     */
    public function getSubjectId()
    {
        return $this->container['subject_id'];
    }

    /**
     * Sets subject_id
     *
     * @param int $subject_id subject_id
     *
     * @return $this
     */
    public function setSubjectId($subject_id)
    {
        $this->container['subject_id'] = $subject_id;

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
     * Gets level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     *
     * @param string $level level
     *
     * @return $this
     */
    public function setLevel($level)
    {
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets assessment_id
     *
     * @return int
     */
    public function getAssessmentId()
    {
        return $this->container['assessment_id'];
    }

    /**
     * Sets assessment_id
     *
     * @param int $assessment_id assessment_id
     *
     * @return $this
     */
    public function setAssessmentId($assessment_id)
    {
        $this->container['assessment_id'] = $assessment_id;

        return $this;
    }

    /**
     * Gets effective_at
     *
     * @return \DateTime
     */
    public function getEffectiveAt()
    {
        return $this->container['effective_at'];
    }

    /**
     * Sets effective_at
     *
     * @param \DateTime $effective_at effective_at
     *
     * @return $this
     */
    public function setEffectiveAt($effective_at)
    {
        $this->container['effective_at'] = $effective_at;

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


