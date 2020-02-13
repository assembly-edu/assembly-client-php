<?php

/**
 * Assembly Developer API PHP Client
 * SDK Version 1.2.463
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
 * Contact Class Doc Comment
 *
 * @category Class
 * @description A parent, guardian, or other point of contact for a student.
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class Contact implements ModelInterface, ArrayAccess
{
  const DISCRIMINATOR = null;

  /**
    * The original name of the model.
    *
    * @var string
    */
  protected static $swaggerModelName = 'Contact';

  /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerTypes = [
    'object' => 'string',
    'id' => 'int',
    'mis_id' => 'string',
    'first_name' => 'string',
    'middle_name' => 'string',
    'last_name' => 'string',
    'gender' => 'string',
    'title' => 'string',
    'salutation' => 'string',
    'address' => '\Assembly\Client\Model\ContactAddress',
    'emails' => '\Assembly\Client\Model\EmailInfo[]',
    'telephone_numbers' => '\Assembly\Client\Model\TelephoneNumberInfo[]',
    'students' => '\Assembly\Client\Model\ContactStudents[]'
  ];

  /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
  protected static $swaggerFormats = [
    'object' => null,
    'id' => 'int32',
    'mis_id' => null,
    'first_name' => null,
    'middle_name' => null,
    'last_name' => null,
    'gender' => null,
    'title' => null,
    'salutation' => null,
    'address' => null,
    'emails' => null,
    'telephone_numbers' => null,
    'students' => null
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
    'mis_id' => 'mis_id',
    'first_name' => 'first_name',
    'middle_name' => 'middle_name',
    'last_name' => 'last_name',
    'gender' => 'gender',
    'title' => 'title',
    'salutation' => 'salutation',
    'address' => 'address',
    'emails' => 'emails',
    'telephone_numbers' => 'telephone_numbers',
    'students' => 'students'
  ];

  /**
   * Array of attributes to setter functions (for deserialization of responses)
   *
   * @var string[]
   */
  protected static $setters = [
    'object' => 'setObject',
    'id' => 'setId',
    'mis_id' => 'setMisId',
    'first_name' => 'setFirstName',
    'middle_name' => 'setMiddleName',
    'last_name' => 'setLastName',
    'gender' => 'setGender',
    'title' => 'setTitle',
    'salutation' => 'setSalutation',
    'address' => 'setAddress',
    'emails' => 'setEmails',
    'telephone_numbers' => 'setTelephoneNumbers',
    'students' => 'setStudents'
  ];

  /**
   * Array of attributes to getter functions (for serialization of requests)
   *
   * @var string[]
   */
  protected static $getters = [
    'object' => 'getObject',
    'id' => 'getId',
    'mis_id' => 'getMisId',
    'first_name' => 'getFirstName',
    'middle_name' => 'getMiddleName',
    'last_name' => 'getLastName',
    'gender' => 'getGender',
    'title' => 'getTitle',
    'salutation' => 'getSalutation',
    'address' => 'getAddress',
    'emails' => 'getEmails',
    'telephone_numbers' => 'getTelephoneNumbers',
    'students' => 'getStudents'
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
    $this->container['object'] = isset($data['object']) ? $data['object'] : 'contact';
    $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    $this->container['mis_id'] = isset($data['mis_id']) ? $data['mis_id'] : null;
    $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
    $this->container['middle_name'] = isset($data['middle_name']) ? $data['middle_name'] : null;
    $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
    $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
    $this->container['title'] = isset($data['title']) ? $data['title'] : null;
    $this->container['salutation'] = isset($data['salutation']) ? $data['salutation'] : null;
    $this->container['address'] = isset($data['address']) ? $data['address'] : null;
    $this->container['emails'] = isset($data['emails']) ? $data['emails'] : null;
    $this->container['telephone_numbers'] = isset($data['telephone_numbers']) ? $data['telephone_numbers'] : null;
    $this->container['students'] = isset($data['students']) ? $data['students'] : null;
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
   * Gets mis_id
   *
   * @return string
   */
  public function getMisId()
  {
    return $this->container['mis_id'];
  }

  /**
   * Sets mis_id
   *
   * @param string $mis_id The ID of the contact from the MIS
   *
   * @return $this
   */
  public function setMisId($mis_id)
  {
    $this->container['mis_id'] = $mis_id;

    return $this;
  }

  /**
   * Gets first_name
   *
   * @return string
   */
  public function getFirstName()
  {
    return $this->container['first_name'];
  }

  /**
   * Sets first_name
   *
   * @param string $first_name The first name of the contact
   *
   * @return $this
   */
  public function setFirstName($first_name)
  {
    $this->container['first_name'] = $first_name;

    return $this;
  }

  /**
   * Gets middle_name
   *
   * @return string
   */
  public function getMiddleName()
  {
    return $this->container['middle_name'];
  }

  /**
   * Sets middle_name
   *
   * @param string $middle_name The middle name of the contact
   *
   * @return $this
   */
  public function setMiddleName($middle_name)
  {
    $this->container['middle_name'] = $middle_name;

    return $this;
  }

  /**
   * Gets last_name
   *
   * @return string
   */
  public function getLastName()
  {
    return $this->container['last_name'];
  }

  /**
   * Sets last_name
   *
   * @param string $last_name The last name of the contact
   *
   * @return $this
   */
  public function setLastName($last_name)
  {
    $this->container['last_name'] = $last_name;

    return $this;
  }

  /**
   * Gets gender
   *
   * @return string
   */
  public function getGender()
  {
    return $this->container['gender'];
  }

  /**
   * Sets gender
   *
   * @param string $gender The gender of the contact
   *
   * @return $this
   */
  public function setGender($gender)
  {
    $this->container['gender'] = $gender;

    return $this;
  }

  /**
   * Gets title
   *
   * @return string
   */
  public function getTitle()
  {
    return $this->container['title'];
  }

  /**
   * Sets title
   *
   * @param string $title The title of the contact
   *
   * @return $this
   */
  public function setTitle($title)
  {
    $this->container['title'] = $title;

    return $this;
  }

  /**
   * Gets salutation
   *
   * @return string
   */
  public function getSalutation()
  {
    return $this->container['salutation'];
  }

  /**
   * Sets salutation
   *
   * @param string $salutation The salutation for the contact
   *
   * @return $this
   */
  public function setSalutation($salutation)
  {
    $this->container['salutation'] = $salutation;

    return $this;
  }

  /**
   * Gets address
   *
   * @return \Assembly\Client\Model\ContactAddress
   */
  public function getAddress()
  {
    return $this->container['address'];
  }

  /**
   * Sets address
   *
   * @param \Assembly\Client\Model\ContactAddress $address address
   *
   * @return $this
   */
  public function setAddress($address)
  {
    $this->container['address'] = $address;

    return $this;
  }

  /**
   * Gets emails
   *
   * @return \Assembly\Client\Model\EmailInfo[]
   */
  public function getEmails()
  {
    return $this->container['emails'];
  }

  /**
   * Sets emails
   *
   * @param \Assembly\Client\Model\EmailInfo[] $emails A list of emails for the contact
   *
   * @return $this
   */
  public function setEmails($emails)
  {
    $this->container['emails'] = $emails;

    return $this;
  }

  /**
   * Gets telephone_numbers
   *
   * @return \Assembly\Client\Model\TelephoneNumberInfo[]
   */
  public function getTelephoneNumbers()
  {
    return $this->container['telephone_numbers'];
  }

  /**
   * Sets telephone_numbers
   *
   * @param \Assembly\Client\Model\TelephoneNumberInfo[] $telephone_numbers A list of telephone numbers for the contact
   *
   * @return $this
   */
  public function setTelephoneNumbers($telephone_numbers)
  {
    $this->container['telephone_numbers'] = $telephone_numbers;

    return $this;
  }

  /**
   * Gets students
   *
   * @return \Assembly\Client\Model\ContactStudents[]
   */
  public function getStudents()
  {
    return $this->container['students'];
  }

  /**
   * Sets students
   *
   * @param \Assembly\Client\Model\ContactStudents[] $students A list of student IDs which are associated with this contact, and their relationship
   *
   * @return $this
   */
  public function setStudents($students)
  {
    $this->container['students'] = $students;

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


