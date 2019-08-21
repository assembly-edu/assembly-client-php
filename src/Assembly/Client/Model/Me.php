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
 * Me Class Doc Comment
 *
 * @category Class
 * @description The application connecting to the API
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class Me implements ModelInterface, ArrayAccess
{
  const DISCRIMINATOR = null;

  /**
    * The original name of the model.
    *
    * @var string
    */
  protected static $swaggerModelName = 'Me';

  /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerTypes = [
    'object' => 'string',
    'id' => 'int',
    'name' => 'string',
    'decription' => 'string',
    'website_uri' => 'string',
    'support_uri' => 'string',
    'privacy_policy_uri' => 'string',
    'redirect_uri' => 'string',
    'install_uri' => 'string',
    'listed' => 'bool',
    'sandbox' => 'bool',
    'force_urn_check' => 'bool',
    'created_at' => '\DateTime',
    'updated_at' => '\DateTime',
    'token' => '\Assembly\Client\Model\MeToken'
  ];

  /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerFormats = [
    'object' => null,
    'id' => 'int32',
    'name' => null,
    'decription' => null,
    'website_uri' => null,
    'support_uri' => null,
    'privacy_policy_uri' => null,
    'redirect_uri' => null,
    'install_uri' => null,
    'listed' => null,
    'sandbox' => null,
    'force_urn_check' => null,
    'created_at' => 'date-time',
    'updated_at' => 'date-time',
    'token' => null
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
    'name' => 'name',
    'decription' => 'decription',
    'website_uri' => 'website_uri',
    'support_uri' => 'support_uri',
    'privacy_policy_uri' => 'privacy_policy_uri',
    'redirect_uri' => 'redirect_uri',
    'install_uri' => 'install_uri',
    'listed' => 'listed',
    'sandbox' => 'sandbox',
    'force_urn_check' => 'force_urn_check',
    'created_at' => 'created_at',
    'updated_at' => 'updated_at',
    'token' => 'token'
  ];

  /**
   * Array of attributes to setter functions (for deserialization of responses)
   *
   * @var string[]
   */
  protected static $setters = [
    'object' => 'setObject',
    'id' => 'setId',
    'name' => 'setName',
    'decription' => 'setDecription',
    'website_uri' => 'setWebsiteUri',
    'support_uri' => 'setSupportUri',
    'privacy_policy_uri' => 'setPrivacyPolicyUri',
    'redirect_uri' => 'setRedirectUri',
    'install_uri' => 'setInstallUri',
    'listed' => 'setListed',
    'sandbox' => 'setSandbox',
    'force_urn_check' => 'setForceUrnCheck',
    'created_at' => 'setCreatedAt',
    'updated_at' => 'setUpdatedAt',
    'token' => 'setToken'
  ];

  /**
   * Array of attributes to getter functions (for serialization of requests)
   *
   * @var string[]
   */
  protected static $getters = [
    'object' => 'getObject',
    'id' => 'getId',
    'name' => 'getName',
    'decription' => 'getDecription',
    'website_uri' => 'getWebsiteUri',
    'support_uri' => 'getSupportUri',
    'privacy_policy_uri' => 'getPrivacyPolicyUri',
    'redirect_uri' => 'getRedirectUri',
    'install_uri' => 'getInstallUri',
    'listed' => 'getListed',
    'sandbox' => 'getSandbox',
    'force_urn_check' => 'getForceUrnCheck',
    'created_at' => 'getCreatedAt',
    'updated_at' => 'getUpdatedAt',
    'token' => 'getToken'
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
    $this->container['object'] = isset($data['object']) ? $data['object'] : 'application';
    $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    $this->container['decription'] = isset($data['decription']) ? $data['decription'] : null;
    $this->container['website_uri'] = isset($data['website_uri']) ? $data['website_uri'] : null;
    $this->container['support_uri'] = isset($data['support_uri']) ? $data['support_uri'] : null;
    $this->container['privacy_policy_uri'] = isset($data['privacy_policy_uri']) ? $data['privacy_policy_uri'] : null;
    $this->container['redirect_uri'] = isset($data['redirect_uri']) ? $data['redirect_uri'] : null;
    $this->container['install_uri'] = isset($data['install_uri']) ? $data['install_uri'] : null;
    $this->container['listed'] = isset($data['listed']) ? $data['listed'] : null;
    $this->container['sandbox'] = isset($data['sandbox']) ? $data['sandbox'] : null;
    $this->container['force_urn_check'] = isset($data['force_urn_check']) ? $data['force_urn_check'] : null;
    $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
    $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
    $this->container['token'] = isset($data['token']) ? $data['token'] : null;
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
   * @param string $name Application name
   *
   * @return $this
   */
  public function setName($name)
  {
    $this->container['name'] = $name;

    return $this;
  }

  /**
   * Gets decription
   *
   * @return string
   */
  public function getDecription()
  {
    return $this->container['decription'];
  }

  /**
   * Sets decription
   *
   * @param string $decription Application description
   *
   * @return $this
   */
  public function setDecription($decription)
  {
    $this->container['decription'] = $decription;

    return $this;
  }

  /**
   * Gets website_uri
   *
   * @return string
   */
  public function getWebsiteUri()
  {
    return $this->container['website_uri'];
  }

  /**
   * Sets website_uri
   *
   * @param string $website_uri Main application/company URI
   *
   * @return $this
   */
  public function setWebsiteUri($website_uri)
  {
    $this->container['website_uri'] = $website_uri;

    return $this;
  }

  /**
   * Gets support_uri
   *
   * @return string
   */
  public function getSupportUri()
  {
    return $this->container['support_uri'];
  }

  /**
   * Sets support_uri
   *
   * @param string $support_uri Support URI
   *
   * @return $this
   */
  public function setSupportUri($support_uri)
  {
    $this->container['support_uri'] = $support_uri;

    return $this;
  }

  /**
   * Gets privacy_policy_uri
   *
   * @return string
   */
  public function getPrivacyPolicyUri()
  {
    return $this->container['privacy_policy_uri'];
  }

  /**
   * Sets privacy_policy_uri
   *
   * @param string $privacy_policy_uri Privacy Policy URI
   *
   * @return $this
   */
  public function setPrivacyPolicyUri($privacy_policy_uri)
  {
    $this->container['privacy_policy_uri'] = $privacy_policy_uri;

    return $this;
  }

  /**
   * Gets redirect_uri
   *
   * @return string
   */
  public function getRedirectUri()
  {
    return $this->container['redirect_uri'];
  }

  /**
   * Sets redirect_uri
   *
   * @param string $redirect_uri The URL on your site for OAuth responses
   *
   * @return $this
   */
  public function setRedirectUri($redirect_uri)
  {
    $this->container['redirect_uri'] = $redirect_uri;

    return $this;
  }

  /**
   * Gets install_uri
   *
   * @return string
   */
  public function getInstallUri()
  {
    return $this->container['install_uri'];
  }

  /**
   * Sets install_uri
   *
   * @param string $install_uri The URL where we will send users to install your app
   *
   * @return $this
   */
  public function setInstallUri($install_uri)
  {
    $this->container['install_uri'] = $install_uri;

    return $this;
  }

  /**
   * Gets listed
   *
   * @return bool
   */
  public function getListed()
  {
    return $this->container['listed'];
  }

  /**
   * Sets listed
   *
   * @param bool $listed Whether this application is publicly listed for schools to find
   *
   * @return $this
   */
  public function setListed($listed)
  {
    $this->container['listed'] = $listed;

    return $this;
  }

  /**
   * Gets sandbox
   *
   * @return bool
   */
  public function getSandbox()
  {
    return $this->container['sandbox'];
  }

  /**
   * Sets sandbox
   *
   * @param bool $sandbox Whether this application is a sandbox app
   *
   * @return $this
   */
  public function setSandbox($sandbox)
  {
    $this->container['sandbox'] = $sandbox;

    return $this;
  }

  /**
   * Gets force_urn_check
   *
   * @return bool
   */
  public function getForceUrnCheck()
  {
    return $this->container['force_urn_check'];
  }

  /**
   * Sets force_urn_check
   *
   * @param bool $force_urn_check Whether schools are forced to have their URN checked when authorizint this application
   *
   * @return $this
   */
  public function setForceUrnCheck($force_urn_check)
  {
    $this->container['force_urn_check'] = $force_urn_check;

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
   * @param \DateTime $created_at When the application was created
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
   * @param \DateTime $updated_at When the application was last updated
   *
   * @return $this
   */
  public function setUpdatedAt($updated_at)
  {
    $this->container['updated_at'] = $updated_at;

    return $this;
  }

  /**
   * Gets token
   *
   * @return \Assembly\Client\Model\MeToken
   */
  public function getToken()
  {
    return $this->container['token'];
  }

  /**
   * Sets token
   *
   * @param \Assembly\Client\Model\MeToken $token token
   *
   * @return $this
   */
  public function setToken($token)
  {
    $this->container['token'] = $token;

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


