<?php

/**
 * Assembly Developer API PHP Client
 * SDK Version 1.2.410
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
 * Lesson Class Doc Comment
 *
 * @category Class
 * @description A lesson
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class Lesson implements ModelInterface, ArrayAccess
{
  const DISCRIMINATOR = null;

  /**
    * The original name of the model.
    *
    * @var string
    */
  protected static $swaggerModelName = 'Lesson';

  /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerTypes = [
    'object' => 'string',
    'id' => 'int',
    'type' => 'string',
    'start_date' => '\DateTime',
    'end_date' => '\DateTime',
    'group' => '\Assembly\Client\Model\LessonGroup',
    'supervisors' => '\Assembly\Client\Model\Supervisor[]',
    'rooms' => '\Assembly\Client\Model\LessonRooms[]'
  ];

  /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerFormats = [
    'object' => null,
    'id' => 'int32',
    'type' => null,
    'start_date' => 'date-time',
    'end_date' => 'date-time',
    'group' => null,
    'supervisors' => null,
    'rooms' => null
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
    'type' => 'type',
    'start_date' => 'start_date',
    'end_date' => 'end_date',
    'group' => 'group',
    'supervisors' => 'supervisors',
    'rooms' => 'rooms'
  ];

  /**
   * Array of attributes to setter functions (for deserialization of responses)
   *
   * @var string[]
   */
  protected static $setters = [
    'object' => 'setObject',
    'id' => 'setId',
    'type' => 'setType',
    'start_date' => 'setStartDate',
    'end_date' => 'setEndDate',
    'group' => 'setGroup',
    'supervisors' => 'setSupervisors',
    'rooms' => 'setRooms'
  ];

  /**
   * Array of attributes to getter functions (for serialization of requests)
   *
   * @var string[]
   */
  protected static $getters = [
    'object' => 'getObject',
    'id' => 'getId',
    'type' => 'getType',
    'start_date' => 'getStartDate',
    'end_date' => 'getEndDate',
    'group' => 'getGroup',
    'supervisors' => 'getSupervisors',
    'rooms' => 'getRooms'
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

  const TYPE_SCHEDULED = 'Scheduled';
  const TYPE_ROOM_COVER = 'RoomCover';
  const TYPE_STAFF_COVER = 'StaffCover';
  const TYPE_INVIGULATION_COVER = 'InvigulationCover';
  

  
  /**
   * Gets allowable values of the enum
   *
   * @return string[]
   */
  public function getTypeAllowableValues()
  {
    return [
      self::TYPE_SCHEDULED,
      self::TYPE_ROOM_COVER,
      self::TYPE_STAFF_COVER,
      self::TYPE_INVIGULATION_COVER,
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
    $this->container['object'] = isset($data['object']) ? $data['object'] : 'lesson';
    $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
    $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
    $this->container['group'] = isset($data['group']) ? $data['group'] : null;
    $this->container['supervisors'] = isset($data['supervisors']) ? $data['supervisors'] : null;
    $this->container['rooms'] = isset($data['rooms']) ? $data['rooms'] : null;
  }

  /**
   * Show all the invalid properties with reasons.
   *
   * @return array invalid properties with reasons
   */
  public function listInvalidProperties()
  {
    $invalidProperties = [];

    $allowedValues = $this->getTypeAllowableValues();
    if (!in_array($this->container['type'], $allowedValues)) {
      $invalidProperties[] = sprintf(
        "invalid value for 'type', must be one of '%s'",
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

    $allowedValues = $this->getTypeAllowableValues();
    if (!in_array($this->container['type'], $allowedValues)) {
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
   * Gets type
   *
   * @return string
   */
  public function getType()
  {
    return $this->container['type'];
  }

  /**
   * Sets type
   *
   * @param string $type The start date of the lesson
   *
   * @return $this
   */
  public function setType($type)
  {
    $allowedValues = $this->getTypeAllowableValues();
    if (!is_null($type) && !in_array($type, $allowedValues)) {
      throw new \InvalidArgumentException(
        sprintf(
          "Invalid value for 'type', must be one of '%s'",
          implode("', '", $allowedValues)
        )
      );
    }
    $this->container['type'] = $type;

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
   * @param \DateTime $start_date The start date of the lesson
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
   * @param \DateTime $end_date The end date of the lesson
   *
   * @return $this
   */
  public function setEndDate($end_date)
  {
    $this->container['end_date'] = $end_date;

    return $this;
  }

  /**
   * Gets group
   *
   * @return \Assembly\Client\Model\LessonGroup
   */
  public function getGroup()
  {
    return $this->container['group'];
  }

  /**
   * Sets group
   *
   * @param \Assembly\Client\Model\LessonGroup $group group
   *
   * @return $this
   */
  public function setGroup($group)
  {
    $this->container['group'] = $group;

    return $this;
  }

  /**
   * Gets supervisors
   *
   * @return \Assembly\Client\Model\Supervisor[]
   */
  public function getSupervisors()
  {
    return $this->container['supervisors'];
  }

  /**
   * Sets supervisors
   *
   * @param \Assembly\Client\Model\Supervisor[] $supervisors The IDs of supervisors (staff members) associated with the group and their role
   *
   * @return $this
   */
  public function setSupervisors($supervisors)
  {
    $this->container['supervisors'] = $supervisors;

    return $this;
  }

  /**
   * Gets rooms
   *
   * @return \Assembly\Client\Model\LessonRooms[]
   */
  public function getRooms()
  {
    return $this->container['rooms'];
  }

  /**
   * Sets rooms
   *
   * @param \Assembly\Client\Model\LessonRooms[] $rooms Provides details of the rooms that a lessons is assigned to
   *
   * @return $this
   */
  public function setRooms($rooms)
  {
    $this->container['rooms'] = $rooms;

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


