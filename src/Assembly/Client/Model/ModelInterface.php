<?php

/**
 * Assembly Developer API PHP Client
 * SDK Version 1.2.450
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

/**
 * Interface abstracting model access.
 *
 * @package Assembly\Client\Model
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
interface ModelInterface
{
  /**
   * The original name of the model.
   *
   * @return string
   */
  public function getModelName();

  /**
   * Array of property to type mappings. Used for (de)serialization
   *
   * @return array
   */
  public static function swaggerTypes();

  /**
   * Array of property to format mappings. Used for (de)serialization
   *
   * @return array
   */
  public static function swaggerFormats();

  /**
   * Array of attributes where the key is the local name, and the value is the original name
   *
   * @return array
   */
  public static function attributeMap();

  /**
   * Array of attributes to setter functions (for deserialization of responses)
   *
   * @return array
   */
  public static function setters();

  /**
   * Array of attributes to getter functions (for serialization of requests)
   *
   * @return array
   */
  public static function getters();

  /**
   * Show all the invalid properties with reasons.
   *
   * @return array
   */
  public function listInvalidProperties();

  /**
   * Validate all the properties in the model
   * return true if all passed
   *
   * @return bool
   */
  public function valid();
}
