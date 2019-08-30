<?php

/**
 * Assembly Developer API PHP Client
 * SDK Version 1.2.412
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
 * MeToken Class Doc Comment
 *
 * @category Class
 * @description Information about the token used to access this endpoint
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class MeToken implements ModelInterface, ArrayAccess
{
  const DISCRIMINATOR = null;

  /**
    * The original name of the model.
    *
    * @var string
    */
  protected static $swaggerModelName = 'MeToken';

  /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerTypes = [
    'access_level' => 'string',
    'scopes' => 'string[]'
  ];

  /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerFormats = [
    'access_level' => null,
    'scopes' => null
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
    'access_level' => 'access_level',
    'scopes' => 'scopes'
  ];

  /**
   * Array of attributes to setter functions (for deserialization of responses)
   *
   * @var string[]
   */
  protected static $setters = [
    'access_level' => 'setAccessLevel',
    'scopes' => 'setScopes'
  ];

  /**
   * Array of attributes to getter functions (for serialization of requests)
   *
   * @var string[]
   */
  protected static $getters = [
    'access_level' => 'getAccessLevel',
    'scopes' => 'getScopes'
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

  const ACCESS_LEVEL_APP = 'app';
  const ACCESS_LEVEL_SCHOOL = 'school';
  

  
  /**
   * Gets allowable values of the enum
   *
   * @return string[]
   */
  public function getAccessLevelAllowableValues()
  {
    return [
      self::ACCESS_LEVEL_APP,
      self::ACCESS_LEVEL_SCHOOL,
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
    $this->container['access_level'] = isset($data['access_level']) ? $data['access_level'] : null;
    $this->container['scopes'] = isset($data['scopes']) ? $data['scopes'] : null;
  }

  /**
   * Show all the invalid properties with reasons.
   *
   * @return array invalid properties with reasons
   */
  public function listInvalidProperties()
  {
    $invalidProperties = [];

    $allowedValues = $this->getAccessLevelAllowableValues();
    if (!in_array($this->container['access_level'], $allowedValues)) {
      $invalidProperties[] = sprintf(
        "invalid value for 'access_level', must be one of '%s'",
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

    $allowedValues = $this->getAccessLevelAllowableValues();
    if (!in_array($this->container['access_level'], $allowedValues)) {
      return false;
    }
    return true;
  }


  /**
   * Gets access_level
   *
   * @return string
   */
  public function getAccessLevel()
  {
    return $this->container['access_level'];
  }

  /**
   * Sets access_level
   *
   * @param string $access_level What kind of token was used to access this resource
   *
   * @return $this
   */
  public function setAccessLevel($access_level)
  {
    $allowedValues = $this->getAccessLevelAllowableValues();
    if (!is_null($access_level) && !in_array($access_level, $allowedValues)) {
      throw new \InvalidArgumentException(
        sprintf(
          "Invalid value for 'access_level', must be one of '%s'",
          implode("', '", $allowedValues)
        )
      );
    }
    $this->container['access_level'] = $access_level;

    return $this;
  }

  /**
   * Gets scopes
   *
   * @return string[]
   */
  public function getScopes()
  {
    return $this->container['scopes'];
  }

  /**
   * Sets scopes
   *
   * @param string[] $scopes The scopes this token has access to. Will be empty in the case of an application token.
   *
   * @return $this
   */
  public function setScopes($scopes)
  {
    $this->container['scopes'] = $scopes;

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


