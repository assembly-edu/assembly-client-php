<?php

/**
 * Assembly Developer API PHP Client
 * SDK Version 1.2.419
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
 * StudentLearningAims Class Doc Comment
 *
 * @category Class
 * @description Post-16 Learning Aim studied by this student
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class StudentLearningAims implements ModelInterface, ArrayAccess
{
  const DISCRIMINATOR = null;

  /**
    * The original name of the model.
    *
    * @var string
    */
  protected static $swaggerModelName = 'StudentLearningAims';

  /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerTypes = [
    'object' => 'string',
    'learning_aim_source_id' => 'int',
    'start_date' => '\DateTime',
    'planned_end_date' => '\DateTime',
    'actual_end_date' => '\DateTime',
    'completion_status' => 'string',
    'withdrawal_reason' => 'string',
    'core_aim_indicator' => 'bool'
  ];

  /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerFormats = [
    'object' => null,
    'learning_aim_source_id' => 'int32',
    'start_date' => 'date-time',
    'planned_end_date' => 'date-time',
    'actual_end_date' => 'date-time',
    'completion_status' => null,
    'withdrawal_reason' => null,
    'core_aim_indicator' => null
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
    'learning_aim_source_id' => 'learning_aim_source_id',
    'start_date' => 'start_date',
    'planned_end_date' => 'planned_end_date',
    'actual_end_date' => 'actual_end_date',
    'completion_status' => 'completion_status',
    'withdrawal_reason' => 'withdrawal_reason',
    'core_aim_indicator' => 'core_aim_indicator'
  ];

  /**
   * Array of attributes to setter functions (for deserialization of responses)
   *
   * @var string[]
   */
  protected static $setters = [
    'object' => 'setObject',
    'learning_aim_source_id' => 'setLearningAimSourceId',
    'start_date' => 'setStartDate',
    'planned_end_date' => 'setPlannedEndDate',
    'actual_end_date' => 'setActualEndDate',
    'completion_status' => 'setCompletionStatus',
    'withdrawal_reason' => 'setWithdrawalReason',
    'core_aim_indicator' => 'setCoreAimIndicator'
  ];

  /**
   * Array of attributes to getter functions (for serialization of requests)
   *
   * @var string[]
   */
  protected static $getters = [
    'object' => 'getObject',
    'learning_aim_source_id' => 'getLearningAimSourceId',
    'start_date' => 'getStartDate',
    'planned_end_date' => 'getPlannedEndDate',
    'actual_end_date' => 'getActualEndDate',
    'completion_status' => 'getCompletionStatus',
    'withdrawal_reason' => 'getWithdrawalReason',
    'core_aim_indicator' => 'getCoreAimIndicator'
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
    $this->container['object'] = isset($data['object']) ? $data['object'] : 'learning_aim_learner';
    $this->container['learning_aim_source_id'] = isset($data['learning_aim_source_id']) ? $data['learning_aim_source_id'] : null;
    $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
    $this->container['planned_end_date'] = isset($data['planned_end_date']) ? $data['planned_end_date'] : null;
    $this->container['actual_end_date'] = isset($data['actual_end_date']) ? $data['actual_end_date'] : null;
    $this->container['completion_status'] = isset($data['completion_status']) ? $data['completion_status'] : null;
    $this->container['withdrawal_reason'] = isset($data['withdrawal_reason']) ? $data['withdrawal_reason'] : null;
    $this->container['core_aim_indicator'] = isset($data['core_aim_indicator']) ? $data['core_aim_indicator'] : null;
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
   * Gets learning_aim_source_id
   *
   * @return int
   */
  public function getLearningAimSourceId()
  {
    return $this->container['learning_aim_source_id'];
  }

  /**
   * Sets learning_aim_source_id
   *
   * @param int $learning_aim_source_id ID of the associated learning aim
   *
   * @return $this
   */
  public function setLearningAimSourceId($learning_aim_source_id)
  {
    $this->container['learning_aim_source_id'] = $learning_aim_source_id;

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
   * @param \DateTime $start_date Date the student started the learning aim
   *
   * @return $this
   */
  public function setStartDate($start_date)
  {
    $this->container['start_date'] = $start_date;

    return $this;
  }

  /**
   * Gets planned_end_date
   *
   * @return \DateTime
   */
  public function getPlannedEndDate()
  {
    return $this->container['planned_end_date'];
  }

  /**
   * Sets planned_end_date
   *
   * @param \DateTime $planned_end_date Date the student is expected to complete the learning aim
   *
   * @return $this
   */
  public function setPlannedEndDate($planned_end_date)
  {
    $this->container['planned_end_date'] = $planned_end_date;

    return $this;
  }

  /**
   * Gets actual_end_date
   *
   * @return \DateTime
   */
  public function getActualEndDate()
  {
    return $this->container['actual_end_date'];
  }

  /**
   * Sets actual_end_date
   *
   * @param \DateTime $actual_end_date Date the student actually completed the learning aim
   *
   * @return $this
   */
  public function setActualEndDate($actual_end_date)
  {
    $this->container['actual_end_date'] = $actual_end_date;

    return $this;
  }

  /**
   * Gets completion_status
   *
   * @return string
   */
  public function getCompletionStatus()
  {
    return $this->container['completion_status'];
  }

  /**
   * Sets completion_status
   *
   * @param string $completion_status Completion Status
   *
   * @return $this
   */
  public function setCompletionStatus($completion_status)
  {
    $this->container['completion_status'] = $completion_status;

    return $this;
  }

  /**
   * Gets withdrawal_reason
   *
   * @return string
   */
  public function getWithdrawalReason()
  {
    return $this->container['withdrawal_reason'];
  }

  /**
   * Sets withdrawal_reason
   *
   * @param string $withdrawal_reason Withdrawl Reason
   *
   * @return $this
   */
  public function setWithdrawalReason($withdrawal_reason)
  {
    $this->container['withdrawal_reason'] = $withdrawal_reason;

    return $this;
  }

  /**
   * Gets core_aim_indicator
   *
   * @return bool
   */
  public function getCoreAimIndicator()
  {
    return $this->container['core_aim_indicator'];
  }

  /**
   * Sets core_aim_indicator
   *
   * @param bool $core_aim_indicator Core Aim Indicator
   *
   * @return $this
   */
  public function setCoreAimIndicator($core_aim_indicator)
  {
    $this->container['core_aim_indicator'] = $core_aim_indicator;

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


