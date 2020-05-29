<?php

/**
 * Assembly Developer API PHP Client
 * SDK Version 1.2.464
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
 * StandardError Class Doc Comment
 *
 * @category Class
 * @description Error object. All properties are optional, though typically an instance of this will have a concise &#x60;error&#x60; message and a &#x60;message&#x60; string with more detail
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class StandardError implements ModelInterface, ArrayAccess
{
  const DISCRIMINATOR = null;

  /**
    * The original name of the model.
    *
    * @var string
    */
  protected static $swaggerModelName = 'StandardError';

  /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerTypes = [
    'error' => 'string',
    'message' => 'string',
    'data' => '\Assembly\Client\Model\StandardErrorData'
  ];

  /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerFormats = [
    'error' => null,
    'message' => null,
    'data' => null
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
    'error' => 'error',
    'message' => 'message',
    'data' => 'data'
  ];

  /**
   * Array of attributes to setter functions (for deserialization of responses)
   *
   * @var string[]
   */
  protected static $setters = [
    'error' => 'setError',
    'message' => 'setMessage',
    'data' => 'setData'
  ];

  /**
   * Array of attributes to getter functions (for serialization of requests)
   *
   * @var string[]
   */
  protected static $getters = [
    'error' => 'getError',
    'message' => 'getMessage',
    'data' => 'getData'
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
    $this->container['error'] = isset($data['error']) ? $data['error'] : null;
    $this->container['message'] = isset($data['message']) ? $data['message'] : null;
    $this->container['data'] = isset($data['data']) ? $data['data'] : null;
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
   * Gets error
   *
   * @return string
   */
  public function getError()
  {
    return $this->container['error'];
  }

  /**
   * Sets error
   *
   * @param string $error An indication of error, such as:  - `invalid_request` (401, no API token presented in header) - `invalid_token` (401, bad token presented in header) - `insufficient_scope` (401, asked for more data than authorized) - `unsupported_version` (406, bad API version in accept header)
   *
   * @return $this
   */
  public function setError($error)
  {
    $this->container['error'] = $error;

    return $this;
  }

  /**
   * Gets message
   *
   * @return string
   */
  public function getMessage()
  {
    return $this->container['message'];
  }

  /**
   * Sets message
   *
   * @param string $message Explanation of the error, such as:  - `malformed date parameter: '32-13-2019'` (400) - `an access_token is required.` (401) - `not found` (404)
   *
   * @return $this
   */
  public function setMessage($message)
  {
    $this->container['message'] = $message;

    return $this;
  }

  /**
   * Gets data
   *
   * @return \Assembly\Client\Model\StandardErrorData
   */
  public function getData()
  {
    return $this->container['data'];
  }

  /**
   * Sets data
   *
   * @param \Assembly\Client\Model\StandardErrorData $data data
   *
   * @return $this
   */
  public function setData($data)
  {
    $this->container['data'] = $data;

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


