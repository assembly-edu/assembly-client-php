<?php

/**
 * Assembly Developer API PHP Client
 * SDK Version 1.2.384
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
 * LearningAim Class Doc Comment
 *
 * @category Class
 * @description A Post-16 Learning Aim.
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class LearningAim implements ModelInterface, ArrayAccess
{
  const DISCRIMINATOR = null;

  /**
    * The original name of the model.
    *
    * @var string
    */
  protected static $swaggerModelName = 'LearningAim';

  /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerTypes = [
    'object' => 'string',
    'qualification_name' => 'string',
    'qualification_number' => 'string',
    'discount_code' => 'string',
    'qan_subject' => 'string',
    'expiry_date' => '\DateTime'
  ];

  /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerFormats = [
    'object' => null,
    'qualification_name' => null,
    'qualification_number' => null,
    'discount_code' => null,
    'qan_subject' => null,
    'expiry_date' => 'date-time'
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
    'qualification_name' => 'qualification_name',
    'qualification_number' => 'qualification_number',
    'discount_code' => 'discount_code',
    'qan_subject' => 'qan_subject',
    'expiry_date' => 'expiry_date'
  ];

  /**
   * Array of attributes to setter functions (for deserialization of responses)
   *
   * @var string[]
   */
  protected static $setters = [
    'object' => 'setObject',
    'qualification_name' => 'setQualificationName',
    'qualification_number' => 'setQualificationNumber',
    'discount_code' => 'setDiscountCode',
    'qan_subject' => 'setQanSubject',
    'expiry_date' => 'setExpiryDate'
  ];

  /**
   * Array of attributes to getter functions (for serialization of requests)
   *
   * @var string[]
   */
  protected static $getters = [
    'object' => 'getObject',
    'qualification_name' => 'getQualificationName',
    'qualification_number' => 'getQualificationNumber',
    'discount_code' => 'getDiscountCode',
    'qan_subject' => 'getQanSubject',
    'expiry_date' => 'getExpiryDate'
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
    $this->container['object'] = isset($data['object']) ? $data['object'] : 'learning_aim';
    $this->container['qualification_name'] = isset($data['qualification_name']) ? $data['qualification_name'] : null;
    $this->container['qualification_number'] = isset($data['qualification_number']) ? $data['qualification_number'] : null;
    $this->container['discount_code'] = isset($data['discount_code']) ? $data['discount_code'] : null;
    $this->container['qan_subject'] = isset($data['qan_subject']) ? $data['qan_subject'] : null;
    $this->container['expiry_date'] = isset($data['expiry_date']) ? $data['expiry_date'] : null;
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
   * Gets qualification_name
   *
   * @return string
   */
  public function getQualificationName()
  {
    return $this->container['qualification_name'];
  }

  /**
   * Sets qualification_name
   *
   * @param string $qualification_name Title of the learning aim
   *
   * @return $this
   */
  public function setQualificationName($qualification_name)
  {
    $this->container['qualification_name'] = $qualification_name;

    return $this;
  }

  /**
   * Gets qualification_number
   *
   * @return string
   */
  public function getQualificationNumber()
  {
    return $this->container['qualification_number'];
  }

  /**
   * Sets qualification_number
   *
   * @param string $qualification_number Qualification number of the learning aim
   *
   * @return $this
   */
  public function setQualificationNumber($qualification_number)
  {
    $this->container['qualification_number'] = $qualification_number;

    return $this;
  }

  /**
   * Gets discount_code
   *
   * @return string
   */
  public function getDiscountCode()
  {
    return $this->container['discount_code'];
  }

  /**
   * Sets discount_code
   *
   * @param string $discount_code Discount code of the learning aim
   *
   * @return $this
   */
  public function setDiscountCode($discount_code)
  {
    $this->container['discount_code'] = $discount_code;

    return $this;
  }

  /**
   * Gets qan_subject
   *
   * @return string
   */
  public function getQanSubject()
  {
    return $this->container['qan_subject'];
  }

  /**
   * Sets qan_subject
   *
   * @param string $qan_subject QAN subject
   *
   * @return $this
   */
  public function setQanSubject($qan_subject)
  {
    $this->container['qan_subject'] = $qan_subject;

    return $this;
  }

  /**
   * Gets expiry_date
   *
   * @return \DateTime
   */
  public function getExpiryDate()
  {
    return $this->container['expiry_date'];
  }

  /**
   * Sets expiry_date
   *
   * @param \DateTime $expiry_date Expiry date
   *
   * @return $this
   */
  public function setExpiryDate($expiry_date)
  {
    $this->container['expiry_date'] = $expiry_date;

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


