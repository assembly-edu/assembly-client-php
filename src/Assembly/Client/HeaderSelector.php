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
class HeaderSelector
{

  /**
   * @param string[] $accept
   * @param string[] $contentTypes
   * @return array
   */
  public function selectHeaders($accept, $contentTypes)
  {
    $headers = [];

    $accept = $this->selectAcceptHeader($accept);
    if ($accept !== null) {
      $headers['Accept'] = $accept;
    }

    $headers['Content-Type'] = $this->selectContentTypeHeader($contentTypes);
    return $headers;
  }

  /**
   * @param string[] $accept
   * @return array
   */
  public function selectHeadersForMultipart($accept)
  {
    $headers = $this->selectHeaders($accept, []);

    unset($headers['Content-Type']);
    return $headers;
  }

  /**
   * Return the header 'Accept' based on an array of Accept provided
   *
   * @param string[] $accept Array of header
   *
   * @return string Accept (e.g. application/json)
   */
  private function selectAcceptHeader($accept)
  {
    if (count($accept) === 0 || (count($accept) === 1 && $accept[0] === '')) {
      return null;
    } elseif (preg_grep("/application\/json/i", $accept)) {
      return 'application/json';
    } else {
      return implode(',', $accept);
    }
  }

  /**
   * Return the content type based on an array of content-type provided
   *
   * @param string[] $contentType Array fo content-type
   *
   * @return string Content-Type (e.g. application/json)
   */
  private function selectContentTypeHeader($contentType)
  {
    if (count($contentType) === 0 || (count($contentType) === 1 && $contentType[0] === '')) {
      return 'application/json';
    } elseif (preg_grep("/application\/json/i", $contentType)) {
      return 'application/json';
    } else {
      return implode(',', $contentType);
    }
  }
}
