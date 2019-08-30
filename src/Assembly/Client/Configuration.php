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


namespace Assembly\Client;

/**
 * Configuration Class Doc Comment
 * PHP version 5
 *
 * @category Class
 * @package  Assembly\Client
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
 */
class Configuration
{
  private static $defaultConfiguration;

  /**
   * Associate array to store API key(s)
   *
   * @var string[]
   */
  protected $apiKeys = [];

  /**
   * Associate array to store API prefix (e.g. Bearer)
   *
   * @var string[]
   */
  protected $apiKeyPrefixes = [];

  /**
   * Access token for OAuth
   *
   * @var string
   */
  protected $accessToken = '';

  /**
   * Username for HTTP basic authentication
   *
   * @var string
   */
  protected $username = '';

  /**
   * Password for HTTP basic authentication
   *
   * @var string
   */
  protected $password = '';

  /**
   * The oauth provider
   *
   * @var $provider
   */
  protected $povider;

  /**
   * User agent of the HTTP request, set to "PHP-Swagger" by default
   *
   * @var string
   */
  protected $userAgent = '1.2.412/php';

  /**
   * Debug switch (default set to false)
   *
   * @var bool
   */
  protected $debug = false;

  /**
   * Debug file location (log to STDOUT by default)
   *
   * @var string
   */
  protected $debugFile = 'php://output';

  /**
   * Debug file location (log to STDOUT by default)
   *
   * @var string
   */
  protected $tempFolderPath;

  /**
   * Constructor
   */
  public function __construct(\Assembly\Client\Auth\AssemblyAuth $provider = null)
  {
    $this->tempFolderPath = sys_get_temp_dir();

    if ($provider == null) {
      throw new Exception('Provider required');
    }

    $this->provider = $provider;
  }

  /**
   * Sets the access token for OAuth
   *
   * @param string $accessToken Token for OAuth
   *
   * @return $this
   */
  public function setAccessToken($accessToken)
  {
    $this->accessToken = $accessToken;
    return $this;
  }

  /**
   * Gets the access token for OAuth
   *
   * @return string Access token for OAuth
   */
  public function getAccessToken()
  {
    return $this->accessToken;
  }

  /**
   * Gets the host
   *
   * @return string Host
   */
  public function getHost()
  {
    return $this->provider->baseApiUrl();
  }

  /**
   * Sets the user agent of the api client
   *
   * @param string $userAgent the user agent of the api client
   *
   * @throws \InvalidArgumentException
   * @return $this
   */
  public function setUserAgent($userAgent)
  {
    if (!is_string($userAgent)) {
      throw new \InvalidArgumentException('User-agent must be a string.');
    }

    $this->userAgent = $userAgent;
    return $this;
  }

  /**
   * Gets the user agent of the api client
   *
   * @return string user agent
   */
  public function getUserAgent()
  {
    return $this->userAgent;
  }

  /**
   * Sets debug flag
   *
   * @param bool $debug Debug flag
   *
   * @return $this
   */
  public function setDebug($debug)
  {
    $this->debug = $debug;
    return $this;
  }

  /**
   * Gets the debug flag
   *
   * @return bool
   */
  public function getDebug()
  {
    return $this->debug;
  }

  /**
   * Sets the debug file
   *
   * @param string $debugFile Debug file
   *
   * @return $this
   */
  public function setDebugFile($debugFile)
  {
    $this->debugFile = $debugFile;
    return $this;
  }

  /**
   * Gets the debug file
   *
   * @return string
   */
  public function getDebugFile()
  {
    return $this->debugFile;
  }

  /**
   * Sets the temp folder path
   *
   * @param string $tempFolderPath Temp folder path
   *
   * @return $this
   */
  public function setTempFolderPath($tempFolderPath)
  {
    $this->tempFolderPath = $tempFolderPath;
    return $this;
  }

  /**
   * Gets the temp folder path
   *
   * @return string Temp folder path
   */
  public function getTempFolderPath()
  {
    return $this->tempFolderPath;
  }

  /**
   * Gets the default configuration instance
   *
   * @return Configuration
   */
  public static function getDefaultConfiguration(\Assembly\Client\Auth\AssemblyAuth $provider = null)
  {
    if (self::$defaultConfiguration === null) {
      self::$defaultConfiguration = new Configuration($provider);
    }

    return self::$defaultConfiguration;
  }

  /**
   * Sets the detault configuration instance
   *
   * @param Configuration $config An instance of the Configuration Object
   *
   * @return void
   */
  public static function setDefaultConfiguration(Configuration $config)
  {
    self::$defaultConfiguration = $config;
  }

  /**
   * Gets the essential information for debugging
   *
   * @return string The report for debugging
   */
  public static function toDebugReport()
  {
    $report  = 'PHP SDK (Assembly\Client) Debug Report:' . PHP_EOL;
    $report .= '    OS: ' . php_uname() . PHP_EOL;
    $report .= '    PHP Version: ' . PHP_VERSION . PHP_EOL;
    $report .= '    OpenAPI Spec Version: 1.1.0' . PHP_EOL;
    $report .= '    SDK Package Version: 1.2.412' . PHP_EOL;
    $report .= '    Temp Folder Path: ' . self::getDefaultConfiguration()->getTempFolderPath() . PHP_EOL;

    return $report;
  }
}
