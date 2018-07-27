<?php

/**
 * assembly.education
 *
 * Developer API for assembly.education.
 *
 * API version: 1.0.0
 * Contact: help@assembly.education
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 */

namespace Assembly\Client\Model;

use \ArrayAccess;
use \Assembly\Client\ObjectSerializer;

/**
 * SchoolDetails Class Doc Comment
 *
 * @category Class
 * @description Returns details for the school associated with the provided access_token.
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class SchoolDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'school_details';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'object' => 'string',
        'id' => 'int',
        'name' => 'string',
        'urn' => 'string',
        'la_code' => 'string',
        'la_name' => 'string',
        'establishment_number' => 'string',
        'establishment_type' => 'string',
        'phase' => 'string',
        'street' => 'string',
        'town' => 'string',
        'postcode' => 'string',
        'head_teacher' => 'string'
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
        'urn' => null,
        'la_code' => null,
        'la_name' => null,
        'establishment_number' => null,
        'establishment_type' => null,
        'phase' => null,
        'street' => null,
        'town' => null,
        'postcode' => null,
        'head_teacher' => null
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
        'urn' => 'urn',
        'la_code' => 'la_code',
        'la_name' => 'la_name',
        'establishment_number' => 'establishment_number',
        'establishment_type' => 'establishment_type',
        'phase' => 'phase',
        'street' => 'street',
        'town' => 'town',
        'postcode' => 'postcode',
        'head_teacher' => 'head_teacher'
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
        'urn' => 'setUrn',
        'la_code' => 'setLaCode',
        'la_name' => 'setLaName',
        'establishment_number' => 'setEstablishmentNumber',
        'establishment_type' => 'setEstablishmentType',
        'phase' => 'setPhase',
        'street' => 'setStreet',
        'town' => 'setTown',
        'postcode' => 'setPostcode',
        'head_teacher' => 'setHeadTeacher'
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
        'urn' => 'getUrn',
        'la_code' => 'getLaCode',
        'la_name' => 'getLaName',
        'establishment_number' => 'getEstablishmentNumber',
        'establishment_type' => 'getEstablishmentType',
        'phase' => 'getPhase',
        'street' => 'getStreet',
        'town' => 'getTown',
        'postcode' => 'getPostcode',
        'head_teacher' => 'getHeadTeacher'
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
        $this->container['object'] = isset($data['object']) ? $data['object'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['urn'] = isset($data['urn']) ? $data['urn'] : null;
        $this->container['la_code'] = isset($data['la_code']) ? $data['la_code'] : null;
        $this->container['la_name'] = isset($data['la_name']) ? $data['la_name'] : null;
        $this->container['establishment_number'] = isset($data['establishment_number']) ? $data['establishment_number'] : null;
        $this->container['establishment_type'] = isset($data['establishment_type']) ? $data['establishment_type'] : null;
        $this->container['phase'] = isset($data['phase']) ? $data['phase'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['town'] = isset($data['town']) ? $data['town'] : null;
        $this->container['postcode'] = isset($data['postcode']) ? $data['postcode'] : null;
        $this->container['head_teacher'] = isset($data['head_teacher']) ? $data['head_teacher'] : null;
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
     * @param string $object Object type
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
     * @param int $id Internal stable ID given to all schools on Platform
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
     * @param string $name Name of the school
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets urn
     *
     * @return string
     */
    public function getUrn()
    {
        return $this->container['urn'];
    }

    /**
     * Sets urn
     *
     * @param string $urn Unique Reference Number (URN) of the school
     *
     * @return $this
     */
    public function setUrn($urn)
    {
        $this->container['urn'] = $urn;

        return $this;
    }

    /**
     * Gets la_code
     *
     * @return string
     */
    public function getLaCode()
    {
        return $this->container['la_code'];
    }

    /**
     * Sets la_code
     *
     * @param string $la_code The code of the local authority that the school belongs to
     *
     * @return $this
     */
    public function setLaCode($la_code)
    {
        $this->container['la_code'] = $la_code;

        return $this;
    }

    /**
     * Gets la_name
     *
     * @return string
     */
    public function getLaName()
    {
        return $this->container['la_name'];
    }

    /**
     * Sets la_name
     *
     * @param string $la_name The name of the local authority that the school belongs to
     *
     * @return $this
     */
    public function setLaName($la_name)
    {
        $this->container['la_name'] = $la_name;

        return $this;
    }

    /**
     * Gets establishment_number
     *
     * @return string
     */
    public function getEstablishmentNumber()
    {
        return $this->container['establishment_number'];
    }

    /**
     * Sets establishment_number
     *
     * @param string $establishment_number The school's establishment or 'DfE number'
     *
     * @return $this
     */
    public function setEstablishmentNumber($establishment_number)
    {
        $this->container['establishment_number'] = $establishment_number;

        return $this;
    }

    /**
     * Gets establishment_type
     *
     * @return string
     */
    public function getEstablishmentType()
    {
        return $this->container['establishment_type'];
    }

    /**
     * Sets establishment_type
     *
     * @param string $establishment_type The type of establishment
     *
     * @return $this
     */
    public function setEstablishmentType($establishment_type)
    {
        $this->container['establishment_type'] = $establishment_type;

        return $this;
    }

    /**
     * Gets phase
     *
     * @return string
     */
    public function getPhase()
    {
        return $this->container['phase'];
    }

    /**
     * Sets phase
     *
     * @param string $phase The phase of the school (i.e. 'Secondary', 'Primary' or 'All through')
     *
     * @return $this
     */
    public function setPhase($phase)
    {
        $this->container['phase'] = $phase;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string $street The street that the school is on
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets town
     *
     * @return string
     */
    public function getTown()
    {
        return $this->container['town'];
    }

    /**
     * Sets town
     *
     * @param string $town The town that the school is in
     *
     * @return $this
     */
    public function setTown($town)
    {
        $this->container['town'] = $town;

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
     * @param string $postcode The postcode of the school
     *
     * @return $this
     */
    public function setPostcode($postcode)
    {
        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Gets head_teacher
     *
     * @return string
     */
    public function getHeadTeacher()
    {
        return $this->container['head_teacher'];
    }

    /**
     * Sets head_teacher
     *
     * @param string $head_teacher The school's head teacher name
     *
     * @return $this
     */
    public function setHeadTeacher($head_teacher)
    {
        $this->container['head_teacher'] = $head_teacher;

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

