<?php

/**
 * Assembly Developer API PHP Client
 * SDK Version 1.2.471
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
 * StudentLanguages Class Doc Comment
 *
 * @category Class
 * @description Information about a student&#39;s languages (this will only be returned if &#x60;&amp;languages&#x3D;true&#x60; is included in your request)
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class StudentLanguages implements ModelInterface, ArrayAccess
{
  const DISCRIMINATOR = null;

  /**
    * The original name of the model.
    *
    * @var string
    */
  protected static $swaggerModelName = 'StudentLanguages';

  /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerTypes = [
    'object' => 'string',
    'home_language_code' => 'string',
    'home_language_name' => 'string',
    'first_language_code' => 'string',
    'first_language_name' => 'string',
    'proficiency_in_english_code' => 'string',
    'proficiency_in_english_name' => 'string'
  ];

  /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerFormats = [
    'object' => null,
    'home_language_code' => null,
    'home_language_name' => null,
    'first_language_code' => null,
    'first_language_name' => null,
    'proficiency_in_english_code' => null,
    'proficiency_in_english_name' => null
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
    'home_language_code' => 'home_language_code',
    'home_language_name' => 'home_language_name',
    'first_language_code' => 'first_language_code',
    'first_language_name' => 'first_language_name',
    'proficiency_in_english_code' => 'proficiency_in_english_code',
    'proficiency_in_english_name' => 'proficiency_in_english_name'
  ];

  /**
   * Array of attributes to setter functions (for deserialization of responses)
   *
   * @var string[]
   */
  protected static $setters = [
    'object' => 'setObject',
    'home_language_code' => 'setHomeLanguageCode',
    'home_language_name' => 'setHomeLanguageName',
    'first_language_code' => 'setFirstLanguageCode',
    'first_language_name' => 'setFirstLanguageName',
    'proficiency_in_english_code' => 'setProficiencyInEnglishCode',
    'proficiency_in_english_name' => 'setProficiencyInEnglishName'
  ];

  /**
   * Array of attributes to getter functions (for serialization of requests)
   *
   * @var string[]
   */
  protected static $getters = [
    'object' => 'getObject',
    'home_language_code' => 'getHomeLanguageCode',
    'home_language_name' => 'getHomeLanguageName',
    'first_language_code' => 'getFirstLanguageCode',
    'first_language_name' => 'getFirstLanguageName',
    'proficiency_in_english_code' => 'getProficiencyInEnglishCode',
    'proficiency_in_english_name' => 'getProficiencyInEnglishName'
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
    $this->container['object'] = isset($data['object']) ? $data['object'] : 'student_languages';
    $this->container['home_language_code'] = isset($data['home_language_code']) ? $data['home_language_code'] : null;
    $this->container['home_language_name'] = isset($data['home_language_name']) ? $data['home_language_name'] : null;
    $this->container['first_language_code'] = isset($data['first_language_code']) ? $data['first_language_code'] : null;
    $this->container['first_language_name'] = isset($data['first_language_name']) ? $data['first_language_name'] : null;
    $this->container['proficiency_in_english_code'] = isset($data['proficiency_in_english_code']) ? $data['proficiency_in_english_code'] : null;
    $this->container['proficiency_in_english_name'] = isset($data['proficiency_in_english_name']) ? $data['proficiency_in_english_name'] : null;
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
   * Gets home_language_code
   *
   * @return string
   */
  public function getHomeLanguageCode()
  {
    return $this->container['home_language_code'];
  }

  /**
   * Sets home_language_code
   *
   * @param string $home_language_code The code of a student's home language
   *
   * @return $this
   */
  public function setHomeLanguageCode($home_language_code)
  {
    $this->container['home_language_code'] = $home_language_code;

    return $this;
  }

  /**
   * Gets home_language_name
   *
   * @return string
   */
  public function getHomeLanguageName()
  {
    return $this->container['home_language_name'];
  }

  /**
   * Sets home_language_name
   *
   * @param string $home_language_name The name of a student's home language
   *
   * @return $this
   */
  public function setHomeLanguageName($home_language_name)
  {
    $this->container['home_language_name'] = $home_language_name;

    return $this;
  }

  /**
   * Gets first_language_code
   *
   * @return string
   */
  public function getFirstLanguageCode()
  {
    return $this->container['first_language_code'];
  }

  /**
   * Sets first_language_code
   *
   * @param string $first_language_code The code of a student's first language
   *
   * @return $this
   */
  public function setFirstLanguageCode($first_language_code)
  {
    $this->container['first_language_code'] = $first_language_code;

    return $this;
  }

  /**
   * Gets first_language_name
   *
   * @return string
   */
  public function getFirstLanguageName()
  {
    return $this->container['first_language_name'];
  }

  /**
   * Sets first_language_name
   *
   * @param string $first_language_name The name of a student's first language
   *
   * @return $this
   */
  public function setFirstLanguageName($first_language_name)
  {
    $this->container['first_language_name'] = $first_language_name;

    return $this;
  }

  /**
   * Gets proficiency_in_english_code
   *
   * @return string
   */
  public function getProficiencyInEnglishCode()
  {
    return $this->container['proficiency_in_english_code'];
  }

  /**
   * Sets proficiency_in_english_code
   *
   * @param string $proficiency_in_english_code A student's proficiency in English code
   *
   * @return $this
   */
  public function setProficiencyInEnglishCode($proficiency_in_english_code)
  {
    $this->container['proficiency_in_english_code'] = $proficiency_in_english_code;

    return $this;
  }

  /**
   * Gets proficiency_in_english_name
   *
   * @return string
   */
  public function getProficiencyInEnglishName()
  {
    return $this->container['proficiency_in_english_name'];
  }

  /**
   * Sets proficiency_in_english_name
   *
   * @param string $proficiency_in_english_name A student's proficiency in English name
   *
   * @return $this
   */
  public function setProficiencyInEnglishName($proficiency_in_english_name)
  {
    $this->container['proficiency_in_english_name'] = $proficiency_in_english_name;

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


