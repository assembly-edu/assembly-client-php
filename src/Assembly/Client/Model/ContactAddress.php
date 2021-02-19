<?php

/**
 * Assembly Developer API PHP Client
 * SDK Version 1.2.472
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
 * ContactAddress Class Doc Comment
 *
 * @category Class
 * @description The address of the contact
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class ContactAddress implements ModelInterface, ArrayAccess
{
  const DISCRIMINATOR = null;

  /**
    * The original name of the model.
    *
    * @var string
    */
  protected static $swaggerModelName = 'ContactAddress';

  /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerTypes = [
    'object' => 'string',
    'address_line_1' => 'string',
    'address_line_2' => 'string',
    'town_city' => 'string',
    'county' => 'string',
    'country' => 'string',
    'postcode' => 'string'
  ];

  /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerFormats = [
    'object' => null,
    'address_line_1' => null,
    'address_line_2' => null,
    'town_city' => null,
    'county' => null,
    'country' => null,
    'postcode' => null
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
    'address_line_1' => 'address_line_1',
    'address_line_2' => 'address_line_2',
    'town_city' => 'town_city',
    'county' => 'county',
    'country' => 'country',
    'postcode' => 'postcode'
  ];

  /**
   * Array of attributes to setter functions (for deserialization of responses)
   *
   * @var string[]
   */
  protected static $setters = [
    'object' => 'setObject',
    'address_line_1' => 'setAddressLine1',
    'address_line_2' => 'setAddressLine2',
    'town_city' => 'setTownCity',
    'county' => 'setCounty',
    'country' => 'setCountry',
    'postcode' => 'setPostcode'
  ];

  /**
   * Array of attributes to getter functions (for serialization of requests)
   *
   * @var string[]
   */
  protected static $getters = [
    'object' => 'getObject',
    'address_line_1' => 'getAddressLine1',
    'address_line_2' => 'getAddressLine2',
    'town_city' => 'getTownCity',
    'county' => 'getCounty',
    'country' => 'getCountry',
    'postcode' => 'getPostcode'
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
    $this->container['object'] = isset($data['object']) ? $data['object'] : 'address';
    $this->container['address_line_1'] = isset($data['address_line_1']) ? $data['address_line_1'] : null;
    $this->container['address_line_2'] = isset($data['address_line_2']) ? $data['address_line_2'] : null;
    $this->container['town_city'] = isset($data['town_city']) ? $data['town_city'] : null;
    $this->container['county'] = isset($data['county']) ? $data['county'] : null;
    $this->container['country'] = isset($data['country']) ? $data['country'] : null;
    $this->container['postcode'] = isset($data['postcode']) ? $data['postcode'] : null;
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
   * Gets address_line_1
   *
   * @return string
   */
  public function getAddressLine1()
  {
    return $this->container['address_line_1'];
  }

  /**
   * Sets address_line_1
   *
   * @param string $address_line_1 The first line of the address (PAON and street)
   *
   * @return $this
   */
  public function setAddressLine1($address_line_1)
  {
    $this->container['address_line_1'] = $address_line_1;

    return $this;
  }

  /**
   * Gets address_line_2
   *
   * @return string
   */
  public function getAddressLine2()
  {
    return $this->container['address_line_2'];
  }

  /**
   * Sets address_line_2
   *
   * @param string $address_line_2 The second line of the address (SAON)
   *
   * @return $this
   */
  public function setAddressLine2($address_line_2)
  {
    $this->container['address_line_2'] = $address_line_2;

    return $this;
  }

  /**
   * Gets town_city
   *
   * @return string
   */
  public function getTownCity()
  {
    return $this->container['town_city'];
  }

  /**
   * Sets town_city
   *
   * @param string $town_city The town or city
   *
   * @return $this
   */
  public function setTownCity($town_city)
  {
    $this->container['town_city'] = $town_city;

    return $this;
  }

  /**
   * Gets county
   *
   * @return string
   */
  public function getCounty()
  {
    return $this->container['county'];
  }

  /**
   * Sets county
   *
   * @param string $county The county
   *
   * @return $this
   */
  public function setCounty($county)
  {
    $this->container['county'] = $county;

    return $this;
  }

  /**
   * Gets country
   *
   * @return string
   */
  public function getCountry()
  {
    return $this->container['country'];
  }

  /**
   * Sets country
   *
   * @param string $country The country
   *
   * @return $this
   */
  public function setCountry($country)
  {
    $this->container['country'] = $country;

    return $this;
  }

  /**
   * Gets postcode
   *
   * @return string
   */
  public function getPostcode()
  {
    return $this->container['postcode'];
  }

  /**
   * Sets postcode
   *
   * @param string $postcode The postcode
   *
   * @return $this
   */
  public function setPostcode($postcode)
  {
    $this->container['postcode'] = $postcode;

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


