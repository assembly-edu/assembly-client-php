<?php

/**
 * Assembly Developer API PHP Client
 * SDK Version 1.2.363
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
 * SchoolStatus Class Doc Comment
 *
 * @category Class
 * @description Details the last time a school&#39;s data was synced, and when it last changed.
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class SchoolStatus implements ModelInterface, ArrayAccess
{
  const DISCRIMINATOR = null;

  /**
    * The original name of the model.
    *
    * @var string
    */
  protected static $swaggerModelName = 'SchoolStatus';

  /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerTypes = [
    'object' => 'string',
    'last_changes_at' => '\DateTime',
    'last_sync_at' => '\DateTime',
    'last_sync_status' => 'string'
  ];

  /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerFormats = [
    'object' => null,
    'last_changes_at' => 'date-time',
    'last_sync_at' => 'date-time',
    'last_sync_status' => null
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
    'last_changes_at' => 'last_changes_at',
    'last_sync_at' => 'last_sync_at',
    'last_sync_status' => 'last_sync_status'
  ];

  /**
   * Array of attributes to setter functions (for deserialization of responses)
   *
   * @var string[]
   */
  protected static $setters = [
    'object' => 'setObject',
    'last_changes_at' => 'setLastChangesAt',
    'last_sync_at' => 'setLastSyncAt',
    'last_sync_status' => 'setLastSyncStatus'
  ];

  /**
   * Array of attributes to getter functions (for serialization of requests)
   *
   * @var string[]
   */
  protected static $getters = [
    'object' => 'getObject',
    'last_changes_at' => 'getLastChangesAt',
    'last_sync_at' => 'getLastSyncAt',
    'last_sync_status' => 'getLastSyncStatus'
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
    $this->container['object'] = isset($data['object']) ? $data['object'] : 'school_status';
    $this->container['last_changes_at'] = isset($data['last_changes_at']) ? $data['last_changes_at'] : null;
    $this->container['last_sync_at'] = isset($data['last_sync_at']) ? $data['last_sync_at'] : null;
    $this->container['last_sync_status'] = isset($data['last_sync_status']) ? $data['last_sync_status'] : null;
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
   * Gets last_changes_at
   *
   * @return \DateTime
   */
  public function getLastChangesAt()
  {
    return $this->container['last_changes_at'];
  }

  /**
   * Sets last_changes_at
   *
   * @param \DateTime $last_changes_at When the data in the Platform was last changed, this may be recent or several days in the past as it depends  on how regularly the school update their MIS records
   *
   * @return $this
   */
  public function setLastChangesAt($last_changes_at)
  {
    $this->container['last_changes_at'] = $last_changes_at;

    return $this;
  }

  /**
   * Gets last_sync_at
   *
   * @return \DateTime
   */
  public function getLastSyncAt()
  {
    return $this->container['last_sync_at'];
  }

  /**
   * Sets last_sync_at
   *
   * @param \DateTime $last_sync_at The last time data has been collected (synced) from the source MIS, typically within the last 24 hours.
   *
   * @return $this
   */
  public function setLastSyncAt($last_sync_at)
  {
    $this->container['last_sync_at'] = $last_sync_at;

    return $this;
  }

  /**
   * Gets last_sync_status
   *
   * @return string
   */
  public function getLastSyncStatus()
  {
    return $this->container['last_sync_status'];
  }

  /**
   * Sets last_sync_status
   *
   * @param string $last_sync_status Whether the last sync was a `success`, `failure`, or that there were `no_changes`
   *
   * @return $this
   */
  public function setLastSyncStatus($last_sync_status)
  {
    $this->container['last_sync_status'] = $last_sync_status;

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


