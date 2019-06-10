<?php

/**
 * Assembly Developer API PHP Client
 * SDK Version 1.2.368
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
 * StaffAllowance Class Doc Comment
 *
 * @category Class
 * @description An allowance associated with a staff member.
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class StaffAllowance implements ModelInterface, ArrayAccess
{
  const DISCRIMINATOR = null;

  /**
    * The original name of the model.
    *
    * @var string
    */
  protected static $swaggerModelName = 'StaffAllowance';

  /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerTypes = [
    'object' => 'string',
    'id' => 'int',
    'additional_payment_type' => 'string',
    'additional_payment_amount' => 'float',
    'start_date' => '\DateTime',
    'end_date' => '\DateTime'
  ];

  /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerFormats = [
    'object' => null,
    'id' => 'int32',
    'additional_payment_type' => null,
    'additional_payment_amount' => 'float',
    'start_date' => 'date-time',
    'end_date' => 'date-time'
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
    'additional_payment_type' => 'additional_payment_type',
    'additional_payment_amount' => 'additional_payment_amount',
    'start_date' => 'start_date',
    'end_date' => 'end_date'
  ];

  /**
   * Array of attributes to setter functions (for deserialization of responses)
   *
   * @var string[]
   */
  protected static $setters = [
    'object' => 'setObject',
    'id' => 'setId',
    'additional_payment_type' => 'setAdditionalPaymentType',
    'additional_payment_amount' => 'setAdditionalPaymentAmount',
    'start_date' => 'setStartDate',
    'end_date' => 'setEndDate'
  ];

  /**
   * Array of attributes to getter functions (for serialization of requests)
   *
   * @var string[]
   */
  protected static $getters = [
    'object' => 'getObject',
    'id' => 'getId',
    'additional_payment_type' => 'getAdditionalPaymentType',
    'additional_payment_amount' => 'getAdditionalPaymentAmount',
    'start_date' => 'getStartDate',
    'end_date' => 'getEndDate'
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
    $this->container['object'] = isset($data['object']) ? $data['object'] : 'staff_allowance';
    $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    $this->container['additional_payment_type'] = isset($data['additional_payment_type']) ? $data['additional_payment_type'] : null;
    $this->container['additional_payment_amount'] = isset($data['additional_payment_amount']) ? $data['additional_payment_amount'] : null;
    $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
    $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
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
   * Gets additional_payment_type
   *
   * @return string
   */
  public function getAdditionalPaymentType()
  {
    return $this->container['additional_payment_type'];
  }

  /**
   * Sets additional_payment_type
   *
   * @param string $additional_payment_type Type of additional payment
   *
   * @return $this
   */
  public function setAdditionalPaymentType($additional_payment_type)
  {
    $this->container['additional_payment_type'] = $additional_payment_type;

    return $this;
  }

  /**
   * Gets additional_payment_amount
   *
   * @return float
   */
  public function getAdditionalPaymentAmount()
  {
    return $this->container['additional_payment_amount'];
  }

  /**
   * Sets additional_payment_amount
   *
   * @param float $additional_payment_amount Amount of additional payment
   *
   * @return $this
   */
  public function setAdditionalPaymentAmount($additional_payment_amount)
  {
    $this->container['additional_payment_amount'] = $additional_payment_amount;

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
   * @param \DateTime $start_date Start date of additional payment
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
   * @param \DateTime $end_date End date of additional payment
   *
   * @return $this
   */
  public function setEndDate($end_date)
  {
    $this->container['end_date'] = $end_date;

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


