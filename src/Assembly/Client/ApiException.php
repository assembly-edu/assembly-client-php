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


namespace Assembly\Client;

use \Exception;

/**
 * ApiException Class Doc Comment
 *
 * @category Class
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class ApiException extends Exception
{

  /**
   * The HTTP body of the server response either as Json or string.
   *
   * @var mixed
   */
  protected $responseBody;

  /**
   * The HTTP header of the server response.
   *
   * @var string[]|null
   */
  protected $responseHeaders;

  /**
   * The deserialized response object
   *
   * @var $responseObject;
   */
  protected $responseObject;

  /**
   * Constructor
   *
   * @param string        $message         Error message
   * @param int           $code            HTTP status code
   * @param string[]|null $responseHeaders HTTP response header
   * @param mixed         $responseBody    HTTP decoded body of the server response either as \stdClass or string
   */
  public function __construct($message = "", $code = 0, $responseHeaders = [], $responseBody = null)
  {
    parent::__construct($message, $code);
    $this->responseHeaders = $responseHeaders;
    $this->responseBody = $responseBody;
  }

  /**
   * Gets the HTTP response header
   *
   * @return string[]|null HTTP response header
   */
  public function getResponseHeaders()
  {
    return $this->responseHeaders;
  }

  /**
   * Gets the HTTP body of the server response either as Json or string
   *
   * @return mixed HTTP body of the server response either as \stdClass or string
   */
  public function getResponseBody()
  {
    return $this->responseBody;
  }

  /**
   * Sets the deseralized response object (during deserialization)
   *
   * @param mixed $obj Deserialized response object
   *
   * @return void
   */
  public function setResponseObject($obj)
  {
    $this->responseObject = $obj;
  }

  /**
   * Gets the deseralized response object (during deserialization)
   *
   * @return mixed the deserialized response object
   */
  public function getResponseObject()
  {
    return $this->responseObject;
  }
}
