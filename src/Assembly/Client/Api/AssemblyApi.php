<?php
/**
 * AssemblyApi
 * PHP version 5
 *
 * @category Class
 * @package  Assembly\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Assembly Developer API PHP Client
 * SDK Version 1.2.436
 * API Version 1.1.0
 *
 * Support
 * Email: help@assembly.education
 * URL:   http://developers.assembly.education
 *
 * Terms of Service: http://assembly.education/terms/
 * License:          MIT, https://spdx.org/licenses/MIT.html
 */

/**
 * NOTE: This class is auto generated.
 * Do not edit the class manually.
 */

namespace Assembly\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Assembly\Client\ApiException;
use Assembly\Client\Configuration;
use Assembly\Client\HeaderSelector;
use Assembly\Client\ObjectSerializer;

/**
 * AssemblyApi Class Doc Comment
 *
 * @category Class
 * @package  Assembly\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AssemblyApi
{
  /**
   * @var ClientInterface
   */
  protected $client;

  /**
   * @var Configuration
   */
  protected $config;

  /**
   * @var HeaderSelector
   */
  protected $headerSelector;

  /**
   * @param ClientInterface $client
   * @param Configuration   $config
   * @param HeaderSelector  $selector
   */
  public function __construct(
    ClientInterface $client = null,
    Configuration $config = null,
    HeaderSelector $selector = null
  ) {
    $this->client = $client ?: new Client();
    $this->config = $config ?: new Configuration();
    $this->headerSelector = $selector ?: new HeaderSelector();
  }

  /**
   * @return Configuration
   */
  public function getConfig()
  {
    return $this->config;
  }

  /**
   * Operation bulkUpdateResults
   *
   * Update Multiple Results
   *
   * @param  \Assembly\Client\Model\BulkResultsBody $bulk_results_body bulk_results_body (optional)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\BulkResultResponse
   */
  public function bulkUpdateResults($bulk_results_body = null)
  {
    list($response) = $this->bulkUpdateResultsWithHttpInfo($bulk_results_body);
    return $response;
  }

  /**
   * Operation bulkUpdateResultsWithHttpInfo
   *
   * Update Multiple Results
   *
   * @param  \Assembly\Client\Model\BulkResultsBody $bulk_results_body (optional)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\BulkResultResponse, HTTP status code, HTTP response headers (array of strings)
   */
  public function bulkUpdateResultsWithHttpInfo($bulk_results_body = null)
  {
    $returnType = '\Assembly\Client\Model\BulkResultResponse';
    $request = $this->bulkUpdateResultsRequest($bulk_results_body);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\BulkResultResponse',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation bulkUpdateResultsAsync
   *
   * Update Multiple Results
   *
   * @param  \Assembly\Client\Model\BulkResultsBody $bulk_results_body (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function bulkUpdateResultsAsync($bulk_results_body = null)
  {
    return $this->bulkUpdateResultsAsyncWithHttpInfo($bulk_results_body)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation bulkUpdateResultsAsyncWithHttpInfo
   *
   * Update Multiple Results
   *
   * @param  \Assembly\Client\Model\BulkResultsBody $bulk_results_body (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function bulkUpdateResultsAsyncWithHttpInfo($bulk_results_body = null)
  {
    $returnType = '\Assembly\Client\Model\BulkResultResponse';
    $request = $this->bulkUpdateResultsRequest($bulk_results_body);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'bulkUpdateResults'
   *
   * @param  \Assembly\Client\Model\BulkResultsBody $bulk_results_body (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function bulkUpdateResultsRequest($bulk_results_body = null)
  {

    $resourcePath = '/results';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;



    // body params
    $_tempBody = null;
    if (isset($bulk_results_body)) {
      $_tempBody = $bulk_results_body;
    }

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        ['application/json']
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'PATCH',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation createResult
   *
   * Write Results
   *
   * @param  \Assembly\Client\Model\ResultBody $result_body result_body (optional)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\Result[]
   */
  public function createResult($result_body = null)
  {
    list($response) = $this->createResultWithHttpInfo($result_body);
    return $response;
  }

  /**
   * Operation createResultWithHttpInfo
   *
   * Write Results
   *
   * @param  \Assembly\Client\Model\ResultBody $result_body (optional)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\Result[], HTTP status code, HTTP response headers (array of strings)
   */
  public function createResultWithHttpInfo($result_body = null)
  {
    $returnType = '\Assembly\Client\Model\Result[]';
    $request = $this->createResultRequest($result_body);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\Result[]',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation createResultAsync
   *
   * Write Results
   *
   * @param  \Assembly\Client\Model\ResultBody $result_body (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function createResultAsync($result_body = null)
  {
    return $this->createResultAsyncWithHttpInfo($result_body)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation createResultAsyncWithHttpInfo
   *
   * Write Results
   *
   * @param  \Assembly\Client\Model\ResultBody $result_body (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function createResultAsyncWithHttpInfo($result_body = null)
  {
    $returnType = '\Assembly\Client\Model\Result[]';
    $request = $this->createResultRequest($result_body);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'createResult'
   *
   * @param  \Assembly\Client\Model\ResultBody $result_body (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function createResultRequest($result_body = null)
  {

    $resourcePath = '/results';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;



    // body params
    $_tempBody = null;
    if (isset($result_body)) {
      $_tempBody = $result_body;
    }

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        ['application/json']
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'POST',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation findAcademicYear
   *
   * View an Academic Year
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\AcademicYear
   */
  public function findAcademicYear($id)
  {
    list($response) = $this->findAcademicYearWithHttpInfo($id);
    return $response;
  }

  /**
   * Operation findAcademicYearWithHttpInfo
   *
   * View an Academic Year
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\AcademicYear, HTTP status code, HTTP response headers (array of strings)
   */
  public function findAcademicYearWithHttpInfo($id)
  {
    $returnType = '\Assembly\Client\Model\AcademicYear';
    $request = $this->findAcademicYearRequest($id);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\AcademicYear',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 404:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation findAcademicYearAsync
   *
   * View an Academic Year
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function findAcademicYearAsync($id)
  {
    return $this->findAcademicYearAsyncWithHttpInfo($id)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation findAcademicYearAsyncWithHttpInfo
   *
   * View an Academic Year
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function findAcademicYearAsyncWithHttpInfo($id)
  {
    $returnType = '\Assembly\Client\Model\AcademicYear';
    $request = $this->findAcademicYearRequest($id);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'findAcademicYear'
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function findAcademicYearRequest($id)
  {
    // verify the required parameter 'id' is set
    if ($id === null || (is_array($id) && count($id) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $id when calling findAcademicYear'
      );
    }

    $resourcePath = '/academic_years/{id}';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;


    // path params
    if ($id !== null) {
      $resourcePath = str_replace(
        '{' . 'id' . '}',
        ObjectSerializer::toPathValue($id),
        $resourcePath
      );
    }

    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation findAssessment
   *
   * View an Assessment
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\Assessment
   */
  public function findAssessment($id)
  {
    list($response) = $this->findAssessmentWithHttpInfo($id);
    return $response;
  }

  /**
   * Operation findAssessmentWithHttpInfo
   *
   * View an Assessment
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\Assessment, HTTP status code, HTTP response headers (array of strings)
   */
  public function findAssessmentWithHttpInfo($id)
  {
    $returnType = '\Assembly\Client\Model\Assessment';
    $request = $this->findAssessmentRequest($id);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\Assessment',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 404:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation findAssessmentAsync
   *
   * View an Assessment
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function findAssessmentAsync($id)
  {
    return $this->findAssessmentAsyncWithHttpInfo($id)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation findAssessmentAsyncWithHttpInfo
   *
   * View an Assessment
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function findAssessmentAsyncWithHttpInfo($id)
  {
    $returnType = '\Assembly\Client\Model\Assessment';
    $request = $this->findAssessmentRequest($id);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'findAssessment'
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function findAssessmentRequest($id)
  {
    // verify the required parameter 'id' is set
    if ($id === null || (is_array($id) && count($id) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $id when calling findAssessment'
      );
    }

    $resourcePath = '/assessments/{id}';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;


    // path params
    if ($id !== null) {
      $resourcePath = str_replace(
        '{' . 'id' . '}',
        ObjectSerializer::toPathValue($id),
        $resourcePath
      );
    }

    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation findAssessmentGradeSet
   *
   * View Grade Set for an Assessment
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\GradeSet
   */
  public function findAssessmentGradeSet($id)
  {
    list($response) = $this->findAssessmentGradeSetWithHttpInfo($id);
    return $response;
  }

  /**
   * Operation findAssessmentGradeSetWithHttpInfo
   *
   * View Grade Set for an Assessment
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\GradeSet, HTTP status code, HTTP response headers (array of strings)
   */
  public function findAssessmentGradeSetWithHttpInfo($id)
  {
    $returnType = '\Assembly\Client\Model\GradeSet';
    $request = $this->findAssessmentGradeSetRequest($id);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\GradeSet',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation findAssessmentGradeSetAsync
   *
   * View Grade Set for an Assessment
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function findAssessmentGradeSetAsync($id)
  {
    return $this->findAssessmentGradeSetAsyncWithHttpInfo($id)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation findAssessmentGradeSetAsyncWithHttpInfo
   *
   * View Grade Set for an Assessment
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function findAssessmentGradeSetAsyncWithHttpInfo($id)
  {
    $returnType = '\Assembly\Client\Model\GradeSet';
    $request = $this->findAssessmentGradeSetRequest($id);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'findAssessmentGradeSet'
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function findAssessmentGradeSetRequest($id)
  {
    // verify the required parameter 'id' is set
    if ($id === null || (is_array($id) && count($id) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $id when calling findAssessmentGradeSet'
      );
    }

    $resourcePath = '/assessments/{id}/grade_set';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;


    // path params
    if ($id !== null) {
      $resourcePath = str_replace(
        '{' . 'id' . '}',
        ObjectSerializer::toPathValue($id),
        $resourcePath
      );
    }

    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation findAssessmentPoint
   *
   * View an Assessment Point
   *
   * @param  int $assessment_point_rank The rank of the assessment point as an Integer (required)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\AssessmentPoint
   */
  public function findAssessmentPoint($assessment_point_rank)
  {
    list($response) = $this->findAssessmentPointWithHttpInfo($assessment_point_rank);
    return $response;
  }

  /**
   * Operation findAssessmentPointWithHttpInfo
   *
   * View an Assessment Point
   *
   * @param  int $assessment_point_rank The rank of the assessment point as an Integer (required)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\AssessmentPoint, HTTP status code, HTTP response headers (array of strings)
   */
  public function findAssessmentPointWithHttpInfo($assessment_point_rank)
  {
    $returnType = '\Assembly\Client\Model\AssessmentPoint';
    $request = $this->findAssessmentPointRequest($assessment_point_rank);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\AssessmentPoint',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 404:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation findAssessmentPointAsync
   *
   * View an Assessment Point
   *
   * @param  int $assessment_point_rank The rank of the assessment point as an Integer (required)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function findAssessmentPointAsync($assessment_point_rank)
  {
    return $this->findAssessmentPointAsyncWithHttpInfo($assessment_point_rank)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation findAssessmentPointAsyncWithHttpInfo
   *
   * View an Assessment Point
   *
   * @param  int $assessment_point_rank The rank of the assessment point as an Integer (required)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function findAssessmentPointAsyncWithHttpInfo($assessment_point_rank)
  {
    $returnType = '\Assembly\Client\Model\AssessmentPoint';
    $request = $this->findAssessmentPointRequest($assessment_point_rank);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'findAssessmentPoint'
   *
   * @param  int $assessment_point_rank The rank of the assessment point as an Integer (required)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function findAssessmentPointRequest($assessment_point_rank)
  {
    // verify the required parameter 'assessment_point_rank' is set
    if ($assessment_point_rank === null || (is_array($assessment_point_rank) && count($assessment_point_rank) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $assessment_point_rank when calling findAssessmentPoint'
      );
    }

    $resourcePath = '/assessment_points/{assessment_point_rank}';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;


    // path params
    if ($assessment_point_rank !== null) {
      $resourcePath = str_replace(
        '{' . 'assessment_point_rank' . '}',
        ObjectSerializer::toPathValue($assessment_point_rank),
        $resourcePath
      );
    }

    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation findDietaryNeed
   *
   * View a Dietary Need
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\DietaryNeed
   */
  public function findDietaryNeed($id)
  {
    list($response) = $this->findDietaryNeedWithHttpInfo($id);
    return $response;
  }

  /**
   * Operation findDietaryNeedWithHttpInfo
   *
   * View a Dietary Need
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\DietaryNeed, HTTP status code, HTTP response headers (array of strings)
   */
  public function findDietaryNeedWithHttpInfo($id)
  {
    $returnType = '\Assembly\Client\Model\DietaryNeed';
    $request = $this->findDietaryNeedRequest($id);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\DietaryNeed',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 404:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation findDietaryNeedAsync
   *
   * View a Dietary Need
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function findDietaryNeedAsync($id)
  {
    return $this->findDietaryNeedAsyncWithHttpInfo($id)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation findDietaryNeedAsyncWithHttpInfo
   *
   * View a Dietary Need
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function findDietaryNeedAsyncWithHttpInfo($id)
  {
    $returnType = '\Assembly\Client\Model\DietaryNeed';
    $request = $this->findDietaryNeedRequest($id);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'findDietaryNeed'
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function findDietaryNeedRequest($id)
  {
    // verify the required parameter 'id' is set
    if ($id === null || (is_array($id) && count($id) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $id when calling findDietaryNeed'
      );
    }

    $resourcePath = '/school/dietary_needs/{id}';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;


    // path params
    if ($id !== null) {
      $resourcePath = str_replace(
        '{' . 'id' . '}',
        ObjectSerializer::toPathValue($id),
        $resourcePath
      );
    }

    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation findFacet
   *
   * View a Facet
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\Facet
   */
  public function findFacet($id)
  {
    list($response) = $this->findFacetWithHttpInfo($id);
    return $response;
  }

  /**
   * Operation findFacetWithHttpInfo
   *
   * View a Facet
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\Facet, HTTP status code, HTTP response headers (array of strings)
   */
  public function findFacetWithHttpInfo($id)
  {
    $returnType = '\Assembly\Client\Model\Facet';
    $request = $this->findFacetRequest($id);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\Facet',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 404:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation findFacetAsync
   *
   * View a Facet
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function findFacetAsync($id)
  {
    return $this->findFacetAsyncWithHttpInfo($id)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation findFacetAsyncWithHttpInfo
   *
   * View a Facet
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function findFacetAsyncWithHttpInfo($id)
  {
    $returnType = '\Assembly\Client\Model\Facet';
    $request = $this->findFacetRequest($id);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'findFacet'
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function findFacetRequest($id)
  {
    // verify the required parameter 'id' is set
    if ($id === null || (is_array($id) && count($id) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $id when calling findFacet'
      );
    }

    $resourcePath = '/facets/{id}';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;


    // path params
    if ($id !== null) {
      $resourcePath = str_replace(
        '{' . 'id' . '}',
        ObjectSerializer::toPathValue($id),
        $resourcePath
      );
    }

    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation findGradeSet
   *
   * View a Grade Set
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\GradeSet
   */
  public function findGradeSet($id)
  {
    list($response) = $this->findGradeSetWithHttpInfo($id);
    return $response;
  }

  /**
   * Operation findGradeSetWithHttpInfo
   *
   * View a Grade Set
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\GradeSet, HTTP status code, HTTP response headers (array of strings)
   */
  public function findGradeSetWithHttpInfo($id)
  {
    $returnType = '\Assembly\Client\Model\GradeSet';
    $request = $this->findGradeSetRequest($id);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\GradeSet',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 404:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation findGradeSetAsync
   *
   * View a Grade Set
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function findGradeSetAsync($id)
  {
    return $this->findGradeSetAsyncWithHttpInfo($id)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation findGradeSetAsyncWithHttpInfo
   *
   * View a Grade Set
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function findGradeSetAsyncWithHttpInfo($id)
  {
    $returnType = '\Assembly\Client\Model\GradeSet';
    $request = $this->findGradeSetRequest($id);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'findGradeSet'
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function findGradeSetRequest($id)
  {
    // verify the required parameter 'id' is set
    if ($id === null || (is_array($id) && count($id) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $id when calling findGradeSet'
      );
    }

    $resourcePath = '/grade_sets/{id}';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;


    // path params
    if ($id !== null) {
      $resourcePath = str_replace(
        '{' . 'id' . '}',
        ObjectSerializer::toPathValue($id),
        $resourcePath
      );
    }

    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation findGroup
   *
   * View a Group
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\Group
   */
  public function findGroup($id, $date = null)
  {
    list($response) = $this->findGroupWithHttpInfo($id, $date);
    return $response;
  }

  /**
   * Operation findGroupWithHttpInfo
   *
   * View a Group
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\Group, HTTP status code, HTTP response headers (array of strings)
   */
  public function findGroupWithHttpInfo($id, $date = null)
  {
    $returnType = '\Assembly\Client\Model\Group';
    $request = $this->findGroupRequest($id, $date);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\Group',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 404:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation findGroupAsync
   *
   * View a Group
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function findGroupAsync($id, $date = null)
  {
    return $this->findGroupAsyncWithHttpInfo($id, $date)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation findGroupAsyncWithHttpInfo
   *
   * View a Group
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function findGroupAsyncWithHttpInfo($id, $date = null)
  {
    $returnType = '\Assembly\Client\Model\Group';
    $request = $this->findGroupRequest($id, $date);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'findGroup'
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function findGroupRequest($id, $date = null)
  {
    // verify the required parameter 'id' is set
    if ($id === null || (is_array($id) && count($id) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $id when calling findGroup'
      );
    }

    $resourcePath = '/groups/{id}';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($date !== null) {
      $queryParams['date'] = ObjectSerializer::toQueryValue($date);
    }

    // path params
    if ($id !== null) {
      $resourcePath = str_replace(
        '{' . 'id' . '}',
        ObjectSerializer::toPathValue($id),
        $resourcePath
      );
    }

    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation findLearningAim
   *
   * View a Post-16 Learning Aim
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\LearningAim
   */
  public function findLearningAim($id)
  {
    list($response) = $this->findLearningAimWithHttpInfo($id);
    return $response;
  }

  /**
   * Operation findLearningAimWithHttpInfo
   *
   * View a Post-16 Learning Aim
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\LearningAim, HTTP status code, HTTP response headers (array of strings)
   */
  public function findLearningAimWithHttpInfo($id)
  {
    $returnType = '\Assembly\Client\Model\LearningAim';
    $request = $this->findLearningAimRequest($id);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\LearningAim',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 404:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation findLearningAimAsync
   *
   * View a Post-16 Learning Aim
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function findLearningAimAsync($id)
  {
    return $this->findLearningAimAsyncWithHttpInfo($id)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation findLearningAimAsyncWithHttpInfo
   *
   * View a Post-16 Learning Aim
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function findLearningAimAsyncWithHttpInfo($id)
  {
    $returnType = '\Assembly\Client\Model\LearningAim';
    $request = $this->findLearningAimRequest($id);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'findLearningAim'
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function findLearningAimRequest($id)
  {
    // verify the required parameter 'id' is set
    if ($id === null || (is_array($id) && count($id) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $id when calling findLearningAim'
      );
    }

    $resourcePath = '/school/learning_aims/{id}';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;


    // path params
    if ($id !== null) {
      $resourcePath = str_replace(
        '{' . 'id' . '}',
        ObjectSerializer::toPathValue($id),
        $resourcePath
      );
    }

    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation findMedicalCondition
   *
   * View a Medical Condition
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\MedicalCondition
   */
  public function findMedicalCondition($id)
  {
    list($response) = $this->findMedicalConditionWithHttpInfo($id);
    return $response;
  }

  /**
   * Operation findMedicalConditionWithHttpInfo
   *
   * View a Medical Condition
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\MedicalCondition, HTTP status code, HTTP response headers (array of strings)
   */
  public function findMedicalConditionWithHttpInfo($id)
  {
    $returnType = '\Assembly\Client\Model\MedicalCondition';
    $request = $this->findMedicalConditionRequest($id);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\MedicalCondition',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 404:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation findMedicalConditionAsync
   *
   * View a Medical Condition
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function findMedicalConditionAsync($id)
  {
    return $this->findMedicalConditionAsyncWithHttpInfo($id)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation findMedicalConditionAsyncWithHttpInfo
   *
   * View a Medical Condition
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function findMedicalConditionAsyncWithHttpInfo($id)
  {
    $returnType = '\Assembly\Client\Model\MedicalCondition';
    $request = $this->findMedicalConditionRequest($id);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'findMedicalCondition'
   *
   * @param  int $id Internal identifier of the entity (required)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function findMedicalConditionRequest($id)
  {
    // verify the required parameter 'id' is set
    if ($id === null || (is_array($id) && count($id) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $id when calling findMedicalCondition'
      );
    }

    $resourcePath = '/school/medical_conditions/{id}';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;


    // path params
    if ($id !== null) {
      $resourcePath = str_replace(
        '{' . 'id' . '}',
        ObjectSerializer::toPathValue($id),
        $resourcePath
      );
    }

    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation findRegistrationGroup
   *
   * View a Registration Group
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\RegistrationGroup
   */
  public function findRegistrationGroup($id, $date = null)
  {
    list($response) = $this->findRegistrationGroupWithHttpInfo($id, $date);
    return $response;
  }

  /**
   * Operation findRegistrationGroupWithHttpInfo
   *
   * View a Registration Group
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\RegistrationGroup, HTTP status code, HTTP response headers (array of strings)
   */
  public function findRegistrationGroupWithHttpInfo($id, $date = null)
  {
    $returnType = '\Assembly\Client\Model\RegistrationGroup';
    $request = $this->findRegistrationGroupRequest($id, $date);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\RegistrationGroup',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 404:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation findRegistrationGroupAsync
   *
   * View a Registration Group
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function findRegistrationGroupAsync($id, $date = null)
  {
    return $this->findRegistrationGroupAsyncWithHttpInfo($id, $date)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation findRegistrationGroupAsyncWithHttpInfo
   *
   * View a Registration Group
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function findRegistrationGroupAsyncWithHttpInfo($id, $date = null)
  {
    $returnType = '\Assembly\Client\Model\RegistrationGroup';
    $request = $this->findRegistrationGroupRequest($id, $date);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'findRegistrationGroup'
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function findRegistrationGroupRequest($id, $date = null)
  {
    // verify the required parameter 'id' is set
    if ($id === null || (is_array($id) && count($id) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $id when calling findRegistrationGroup'
      );
    }

    $resourcePath = '/registration_groups/{id}';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($date !== null) {
      $queryParams['date'] = ObjectSerializer::toQueryValue($date);
    }

    // path params
    if ($id !== null) {
      $resourcePath = str_replace(
        '{' . 'id' . '}',
        ObjectSerializer::toPathValue($id),
        $resourcePath
      );
    }

    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation findRoom
   *
   * View a Room
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  string $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  string $start_date The start date of the period to filter by (optional)
   * @param  string $end_date The end date of the period to filter by (optional)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\Room
   */
  public function findRoom($id, $if_modified_since = null, $date = null, $start_date = null, $end_date = null)
  {
    list($response) = $this->findRoomWithHttpInfo($id, $if_modified_since, $date, $start_date, $end_date);
    return $response;
  }

  /**
   * Operation findRoomWithHttpInfo
   *
   * View a Room
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  string $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  string $start_date The start date of the period to filter by (optional)
   * @param  string $end_date The end date of the period to filter by (optional)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\Room, HTTP status code, HTTP response headers (array of strings)
   */
  public function findRoomWithHttpInfo($id, $if_modified_since = null, $date = null, $start_date = null, $end_date = null)
  {
    $returnType = '\Assembly\Client\Model\Room';
    $request = $this->findRoomRequest($id, $if_modified_since, $date, $start_date, $end_date);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\Room',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 404:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation findRoomAsync
   *
   * View a Room
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  string $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  string $start_date The start date of the period to filter by (optional)
   * @param  string $end_date The end date of the period to filter by (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function findRoomAsync($id, $if_modified_since = null, $date = null, $start_date = null, $end_date = null)
  {
    return $this->findRoomAsyncWithHttpInfo($id, $if_modified_since, $date, $start_date, $end_date)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation findRoomAsyncWithHttpInfo
   *
   * View a Room
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  string $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  string $start_date The start date of the period to filter by (optional)
   * @param  string $end_date The end date of the period to filter by (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function findRoomAsyncWithHttpInfo($id, $if_modified_since = null, $date = null, $start_date = null, $end_date = null)
  {
    $returnType = '\Assembly\Client\Model\Room';
    $request = $this->findRoomRequest($id, $if_modified_since, $date, $start_date, $end_date);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'findRoom'
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  string $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  string $start_date The start date of the period to filter by (optional)
   * @param  string $end_date The end date of the period to filter by (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function findRoomRequest($id, $if_modified_since = null, $date = null, $start_date = null, $end_date = null)
  {
    // verify the required parameter 'id' is set
    if ($id === null || (is_array($id) && count($id) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $id when calling findRoom'
      );
    }

    $resourcePath = '/rooms/{id}';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($date !== null) {
      $queryParams['date'] = ObjectSerializer::toQueryValue($date);
    }
    // query params
    if ($start_date !== null) {
      $queryParams['start_date'] = ObjectSerializer::toQueryValue($start_date);
    }
    // query params
    if ($end_date !== null) {
      $queryParams['end_date'] = ObjectSerializer::toQueryValue($end_date);
    }
    // header params
    if ($if_modified_since !== null) {
      $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
    }

    // path params
    if ($id !== null) {
      $resourcePath = str_replace(
        '{' . 'id' . '}',
        ObjectSerializer::toPathValue($id),
        $resourcePath
      );
    }

    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation findSchool
   *
   * View School Details
   *
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\School
   */
  public function findSchool()
  {
    list($response) = $this->findSchoolWithHttpInfo();
    return $response;
  }

  /**
   * Operation findSchoolWithHttpInfo
   *
   * View School Details
   *
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\School, HTTP status code, HTTP response headers (array of strings)
   */
  public function findSchoolWithHttpInfo()
  {
    $returnType = '\Assembly\Client\Model\School';
    $request = $this->findSchoolRequest();

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\School',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 404:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation findSchoolAsync
   *
   * View School Details
   *
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function findSchoolAsync()
  {
    return $this->findSchoolAsyncWithHttpInfo()
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation findSchoolAsyncWithHttpInfo
   *
   * View School Details
   *
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function findSchoolAsyncWithHttpInfo()
  {
    $returnType = '\Assembly\Client\Model\School';
    $request = $this->findSchoolRequest();

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'findSchool'
   *
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function findSchoolRequest()
  {

    $resourcePath = '/school';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;



    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation findStaffMember
   *
   * View a Staff Member
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $qualifications Include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) (optional)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\StaffMember
   */
  public function findStaffMember($id, $addresses = null, $demographics = null, $qualifications = null)
  {
    list($response) = $this->findStaffMemberWithHttpInfo($id, $addresses, $demographics, $qualifications);
    return $response;
  }

  /**
   * Operation findStaffMemberWithHttpInfo
   *
   * View a Staff Member
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $qualifications Include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) (optional)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\StaffMember, HTTP status code, HTTP response headers (array of strings)
   */
  public function findStaffMemberWithHttpInfo($id, $addresses = null, $demographics = null, $qualifications = null)
  {
    $returnType = '\Assembly\Client\Model\StaffMember';
    $request = $this->findStaffMemberRequest($id, $addresses, $demographics, $qualifications);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StaffMember',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 404:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation findStaffMemberAsync
   *
   * View a Staff Member
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $qualifications Include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function findStaffMemberAsync($id, $addresses = null, $demographics = null, $qualifications = null)
  {
    return $this->findStaffMemberAsyncWithHttpInfo($id, $addresses, $demographics, $qualifications)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation findStaffMemberAsyncWithHttpInfo
   *
   * View a Staff Member
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $qualifications Include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function findStaffMemberAsyncWithHttpInfo($id, $addresses = null, $demographics = null, $qualifications = null)
  {
    $returnType = '\Assembly\Client\Model\StaffMember';
    $request = $this->findStaffMemberRequest($id, $addresses, $demographics, $qualifications);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'findStaffMember'
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $qualifications Include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function findStaffMemberRequest($id, $addresses = null, $demographics = null, $qualifications = null)
  {
    // verify the required parameter 'id' is set
    if ($id === null || (is_array($id) && count($id) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $id when calling findStaffMember'
      );
    }

    $resourcePath = '/staff_members/{id}';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($addresses !== null) {
      $queryParams['addresses'] = ObjectSerializer::toQueryValue($addresses);
    }
    // query params
    if ($demographics !== null) {
      $queryParams['demographics'] = ObjectSerializer::toQueryValue($demographics);
    }
    // query params
    if ($qualifications !== null) {
      $queryParams['qualifications'] = ObjectSerializer::toQueryValue($qualifications);
    }

    // path params
    if ($id !== null) {
      $resourcePath = str_replace(
        '{' . 'id' . '}',
        ObjectSerializer::toPathValue($id),
        $resourcePath
      );
    }

    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation findStudent
   *
   * View a Student
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $contacts Include contacts data (optional)
   * @param  bool $sen_needs Include SEN needs data (optional)
   * @param  bool $emails Include email addresses (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $care Include student care data (you must also supply the demographics parameter) (optional)
   * @param  bool $ever_in_care Include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
   * @param  bool $languages Include student language data (optional)
   * @param  bool $photo Include student photo data (optional)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\Student
   */
  public function findStudent($id, $demographics = null, $contacts = null, $sen_needs = null, $emails = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
  {
    list($response) = $this->findStudentWithHttpInfo($id, $demographics, $contacts, $sen_needs, $emails, $addresses, $care, $ever_in_care, $languages, $photo);
    return $response;
  }

  /**
   * Operation findStudentWithHttpInfo
   *
   * View a Student
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $contacts Include contacts data (optional)
   * @param  bool $sen_needs Include SEN needs data (optional)
   * @param  bool $emails Include email addresses (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $care Include student care data (you must also supply the demographics parameter) (optional)
   * @param  bool $ever_in_care Include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
   * @param  bool $languages Include student language data (optional)
   * @param  bool $photo Include student photo data (optional)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\Student, HTTP status code, HTTP response headers (array of strings)
   */
  public function findStudentWithHttpInfo($id, $demographics = null, $contacts = null, $sen_needs = null, $emails = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
  {
    $returnType = '\Assembly\Client\Model\Student';
    $request = $this->findStudentRequest($id, $demographics, $contacts, $sen_needs, $emails, $addresses, $care, $ever_in_care, $languages, $photo);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\Student',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 404:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation findStudentAsync
   *
   * View a Student
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $contacts Include contacts data (optional)
   * @param  bool $sen_needs Include SEN needs data (optional)
   * @param  bool $emails Include email addresses (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $care Include student care data (you must also supply the demographics parameter) (optional)
   * @param  bool $ever_in_care Include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
   * @param  bool $languages Include student language data (optional)
   * @param  bool $photo Include student photo data (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function findStudentAsync($id, $demographics = null, $contacts = null, $sen_needs = null, $emails = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
  {
    return $this->findStudentAsyncWithHttpInfo($id, $demographics, $contacts, $sen_needs, $emails, $addresses, $care, $ever_in_care, $languages, $photo)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation findStudentAsyncWithHttpInfo
   *
   * View a Student
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $contacts Include contacts data (optional)
   * @param  bool $sen_needs Include SEN needs data (optional)
   * @param  bool $emails Include email addresses (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $care Include student care data (you must also supply the demographics parameter) (optional)
   * @param  bool $ever_in_care Include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
   * @param  bool $languages Include student language data (optional)
   * @param  bool $photo Include student photo data (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function findStudentAsyncWithHttpInfo($id, $demographics = null, $contacts = null, $sen_needs = null, $emails = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
  {
    $returnType = '\Assembly\Client\Model\Student';
    $request = $this->findStudentRequest($id, $demographics, $contacts, $sen_needs, $emails, $addresses, $care, $ever_in_care, $languages, $photo);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'findStudent'
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $contacts Include contacts data (optional)
   * @param  bool $sen_needs Include SEN needs data (optional)
   * @param  bool $emails Include email addresses (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $care Include student care data (you must also supply the demographics parameter) (optional)
   * @param  bool $ever_in_care Include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
   * @param  bool $languages Include student language data (optional)
   * @param  bool $photo Include student photo data (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function findStudentRequest($id, $demographics = null, $contacts = null, $sen_needs = null, $emails = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
  {
    // verify the required parameter 'id' is set
    if ($id === null || (is_array($id) && count($id) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $id when calling findStudent'
      );
    }

    $resourcePath = '/students/{id}';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($demographics !== null) {
      $queryParams['demographics'] = ObjectSerializer::toQueryValue($demographics);
    }
    // query params
    if ($contacts !== null) {
      $queryParams['contacts'] = ObjectSerializer::toQueryValue($contacts);
    }
    // query params
    if ($sen_needs !== null) {
      $queryParams['sen_needs'] = ObjectSerializer::toQueryValue($sen_needs);
    }
    // query params
    if ($emails !== null) {
      $queryParams['emails'] = ObjectSerializer::toQueryValue($emails);
    }
    // query params
    if ($addresses !== null) {
      $queryParams['addresses'] = ObjectSerializer::toQueryValue($addresses);
    }
    // query params
    if ($care !== null) {
      $queryParams['care'] = ObjectSerializer::toQueryValue($care);
    }
    // query params
    if ($ever_in_care !== null) {
      $queryParams['ever_in_care'] = ObjectSerializer::toQueryValue($ever_in_care);
    }
    // query params
    if ($languages !== null) {
      $queryParams['languages'] = ObjectSerializer::toQueryValue($languages);
    }
    // query params
    if ($photo !== null) {
      $queryParams['photo'] = ObjectSerializer::toQueryValue($photo);
    }

    // path params
    if ($id !== null) {
      $resourcePath = str_replace(
        '{' . 'id' . '}',
        ObjectSerializer::toPathValue($id),
        $resourcePath
      );
    }

    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation findTeachingGroup
   *
   * View a Teaching Group
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\TeachingGroup
   */
  public function findTeachingGroup($id, $date = null)
  {
    list($response) = $this->findTeachingGroupWithHttpInfo($id, $date);
    return $response;
  }

  /**
   * Operation findTeachingGroupWithHttpInfo
   *
   * View a Teaching Group
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\TeachingGroup, HTTP status code, HTTP response headers (array of strings)
   */
  public function findTeachingGroupWithHttpInfo($id, $date = null)
  {
    $returnType = '\Assembly\Client\Model\TeachingGroup';
    $request = $this->findTeachingGroupRequest($id, $date);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\TeachingGroup',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 404:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation findTeachingGroupAsync
   *
   * View a Teaching Group
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function findTeachingGroupAsync($id, $date = null)
  {
    return $this->findTeachingGroupAsyncWithHttpInfo($id, $date)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation findTeachingGroupAsyncWithHttpInfo
   *
   * View a Teaching Group
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function findTeachingGroupAsyncWithHttpInfo($id, $date = null)
  {
    $returnType = '\Assembly\Client\Model\TeachingGroup';
    $request = $this->findTeachingGroupRequest($id, $date);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'findTeachingGroup'
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function findTeachingGroupRequest($id, $date = null)
  {
    // verify the required parameter 'id' is set
    if ($id === null || (is_array($id) && count($id) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $id when calling findTeachingGroup'
      );
    }

    $resourcePath = '/teaching_groups/{id}';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($date !== null) {
      $queryParams['date'] = ObjectSerializer::toQueryValue($date);
    }

    // path params
    if ($id !== null) {
      $resourcePath = str_replace(
        '{' . 'id' . '}',
        ObjectSerializer::toPathValue($id),
        $resourcePath
      );
    }

    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation findTimetable
   *
   * View a Timetable
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  \DateTime $start_date The start date of the period to filter by (optional)
   * @param  \DateTime $end_date The end date of the period to filter by (optional)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\Timetable
   */
  public function findTimetable($id, $if_modified_since = null, $date = null, $start_date = null, $end_date = null)
  {
    list($response) = $this->findTimetableWithHttpInfo($id, $if_modified_since, $date, $start_date, $end_date);
    return $response;
  }

  /**
   * Operation findTimetableWithHttpInfo
   *
   * View a Timetable
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  \DateTime $start_date The start date of the period to filter by (optional)
   * @param  \DateTime $end_date The end date of the period to filter by (optional)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\Timetable, HTTP status code, HTTP response headers (array of strings)
   */
  public function findTimetableWithHttpInfo($id, $if_modified_since = null, $date = null, $start_date = null, $end_date = null)
  {
    $returnType = '\Assembly\Client\Model\Timetable';
    $request = $this->findTimetableRequest($id, $if_modified_since, $date, $start_date, $end_date);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\Timetable',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 404:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation findTimetableAsync
   *
   * View a Timetable
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  \DateTime $start_date The start date of the period to filter by (optional)
   * @param  \DateTime $end_date The end date of the period to filter by (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function findTimetableAsync($id, $if_modified_since = null, $date = null, $start_date = null, $end_date = null)
  {
    return $this->findTimetableAsyncWithHttpInfo($id, $if_modified_since, $date, $start_date, $end_date)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation findTimetableAsyncWithHttpInfo
   *
   * View a Timetable
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  \DateTime $start_date The start date of the period to filter by (optional)
   * @param  \DateTime $end_date The end date of the period to filter by (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function findTimetableAsyncWithHttpInfo($id, $if_modified_since = null, $date = null, $start_date = null, $end_date = null)
  {
    $returnType = '\Assembly\Client\Model\Timetable';
    $request = $this->findTimetableRequest($id, $if_modified_since, $date, $start_date, $end_date);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'findTimetable'
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  \DateTime $start_date The start date of the period to filter by (optional)
   * @param  \DateTime $end_date The end date of the period to filter by (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function findTimetableRequest($id, $if_modified_since = null, $date = null, $start_date = null, $end_date = null)
  {
    // verify the required parameter 'id' is set
    if ($id === null || (is_array($id) && count($id) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $id when calling findTimetable'
      );
    }

    $resourcePath = '/timetables/{id}';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($date !== null) {
      $queryParams['date'] = ObjectSerializer::toQueryValue($date);
    }
    // query params
    if ($start_date !== null) {
      $queryParams['start_date'] = ObjectSerializer::toQueryValue($start_date);
    }
    // query params
    if ($end_date !== null) {
      $queryParams['end_date'] = ObjectSerializer::toQueryValue($end_date);
    }
    // header params
    if ($if_modified_since !== null) {
      $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
    }

    // path params
    if ($id !== null) {
      $resourcePath = str_replace(
        '{' . 'id' . '}',
        ObjectSerializer::toPathValue($id),
        $resourcePath
      );
    }

    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation findYearGroup
   *
   * View a Year Group
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\YearGroup
   */
  public function findYearGroup($id, $date = null)
  {
    list($response) = $this->findYearGroupWithHttpInfo($id, $date);
    return $response;
  }

  /**
   * Operation findYearGroupWithHttpInfo
   *
   * View a Year Group
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\YearGroup, HTTP status code, HTTP response headers (array of strings)
   */
  public function findYearGroupWithHttpInfo($id, $date = null)
  {
    $returnType = '\Assembly\Client\Model\YearGroup';
    $request = $this->findYearGroupRequest($id, $date);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\YearGroup',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 404:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation findYearGroupAsync
   *
   * View a Year Group
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function findYearGroupAsync($id, $date = null)
  {
    return $this->findYearGroupAsyncWithHttpInfo($id, $date)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation findYearGroupAsyncWithHttpInfo
   *
   * View a Year Group
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function findYearGroupAsyncWithHttpInfo($id, $date = null)
  {
    $returnType = '\Assembly\Client\Model\YearGroup';
    $request = $this->findYearGroupRequest($id, $date);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'findYearGroup'
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function findYearGroupRequest($id, $date = null)
  {
    // verify the required parameter 'id' is set
    if ($id === null || (is_array($id) && count($id) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $id when calling findYearGroup'
      );
    }

    $resourcePath = '/year_groups/{id}';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($date !== null) {
      $queryParams['date'] = ObjectSerializer::toQueryValue($date);
    }

    // path params
    if ($id !== null) {
      $resourcePath = str_replace(
        '{' . 'id' . '}',
        ObjectSerializer::toPathValue($id),
        $resourcePath
      );
    }

    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation getAcademicYears
   *
   * List Academic Years
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\AcademicYear[]
   */
  public function getAcademicYears($per_page = '100', $page = '1')
  {
    list($response) = $this->getAcademicYearsWithHttpInfo($per_page, $page);
    return $response;
  }

  /**
   * Operation getAcademicYearsWithHttpInfo
   *
   * List Academic Years
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\AcademicYear[], HTTP status code, HTTP response headers (array of strings)
   */
  public function getAcademicYearsWithHttpInfo($per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\AcademicYear[]';
    $request = $this->getAcademicYearsRequest($per_page, $page);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\AcademicYear[]',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation getAcademicYearsAsync
   *
   * List Academic Years
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getAcademicYearsAsync($per_page = '100', $page = '1')
  {
    return $this->getAcademicYearsAsyncWithHttpInfo($per_page, $page)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation getAcademicYearsAsyncWithHttpInfo
   *
   * List Academic Years
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getAcademicYearsAsyncWithHttpInfo($per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\AcademicYear[]';
    $request = $this->getAcademicYearsRequest($per_page, $page);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'getAcademicYears'
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function getAcademicYearsRequest($per_page = '100', $page = '1')
  {
    if ($per_page !== null && $per_page > 1500) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getAcademicYears, must be smaller than or equal to 1500.');
    }
    if ($per_page !== null && $per_page < 1) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getAcademicYears, must be bigger than or equal to 1.');
    }

    if ($page !== null && $page < 1) {
      throw new \InvalidArgumentException('invalid value for "$page" when calling AssemblyApi.getAcademicYears, must be bigger than or equal to 1.');
    }


    $resourcePath = '/academic_years';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($per_page !== null) {
      $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
    }
    // query params
    if ($page !== null) {
      $queryParams['page'] = ObjectSerializer::toQueryValue($page);
    }


    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation getAssessmentPointResults
   *
   * View Results for an Assessment Point
   *
   * @param  int $assessment_point_rank The rank of the assessment point as an Integer (required)
   * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded) (required)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\Result[]
   */
  public function getAssessmentPointResults($assessment_point_rank, $students, $per_page = '100', $page = '1')
  {
    list($response) = $this->getAssessmentPointResultsWithHttpInfo($assessment_point_rank, $students, $per_page, $page);
    return $response;
  }

  /**
   * Operation getAssessmentPointResultsWithHttpInfo
   *
   * View Results for an Assessment Point
   *
   * @param  int $assessment_point_rank The rank of the assessment point as an Integer (required)
   * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded) (required)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\Result[], HTTP status code, HTTP response headers (array of strings)
   */
  public function getAssessmentPointResultsWithHttpInfo($assessment_point_rank, $students, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\Result[]';
    $request = $this->getAssessmentPointResultsRequest($assessment_point_rank, $students, $per_page, $page);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\Result[]',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation getAssessmentPointResultsAsync
   *
   * View Results for an Assessment Point
   *
   * @param  int $assessment_point_rank The rank of the assessment point as an Integer (required)
   * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded) (required)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getAssessmentPointResultsAsync($assessment_point_rank, $students, $per_page = '100', $page = '1')
  {
    return $this->getAssessmentPointResultsAsyncWithHttpInfo($assessment_point_rank, $students, $per_page, $page)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation getAssessmentPointResultsAsyncWithHttpInfo
   *
   * View Results for an Assessment Point
   *
   * @param  int $assessment_point_rank The rank of the assessment point as an Integer (required)
   * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded) (required)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getAssessmentPointResultsAsyncWithHttpInfo($assessment_point_rank, $students, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\Result[]';
    $request = $this->getAssessmentPointResultsRequest($assessment_point_rank, $students, $per_page, $page);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'getAssessmentPointResults'
   *
   * @param  int $assessment_point_rank The rank of the assessment point as an Integer (required)
   * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded) (required)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function getAssessmentPointResultsRequest($assessment_point_rank, $students, $per_page = '100', $page = '1')
  {
    // verify the required parameter 'assessment_point_rank' is set
    if ($assessment_point_rank === null || (is_array($assessment_point_rank) && count($assessment_point_rank) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $assessment_point_rank when calling getAssessmentPointResults'
      );
    }
    // verify the required parameter 'students' is set
    if ($students === null || (is_array($students) && count($students) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $students when calling getAssessmentPointResults'
      );
    }
    if ($per_page !== null && $per_page > 1500) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getAssessmentPointResults, must be smaller than or equal to 1500.');
    }
    if ($per_page !== null && $per_page < 1) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getAssessmentPointResults, must be bigger than or equal to 1.');
    }

    if ($page !== null && $page < 1) {
      throw new \InvalidArgumentException('invalid value for "$page" when calling AssemblyApi.getAssessmentPointResults, must be bigger than or equal to 1.');
    }


    $resourcePath = '/assessment_points/{assessment_point_rank}/results';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if (is_array($students)) {
      $students = ObjectSerializer::serializeCollection($students, 'multi', true);
    }
    if ($students !== null) {
      $queryParams['students[]'] = ObjectSerializer::toQueryValue($students);
    }
    // query params
    if ($per_page !== null) {
      $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
    }
    // query params
    if ($page !== null) {
      $queryParams['page'] = ObjectSerializer::toQueryValue($page);
    }

    // path params
    if ($assessment_point_rank !== null) {
      $resourcePath = str_replace(
        '{' . 'assessment_point_rank' . '}',
        ObjectSerializer::toPathValue($assessment_point_rank),
        $resourcePath
      );
    }

    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation getAssessmentPoints
   *
   * List Assessment Points
   *
   * @param  int $year_code Filter by school year (optional)
   * @param  string $type Filter by type (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\AssessmentPoint[]
   */
  public function getAssessmentPoints($year_code = null, $type = null, $per_page = '100', $page = '1')
  {
    list($response) = $this->getAssessmentPointsWithHttpInfo($year_code, $type, $per_page, $page);
    return $response;
  }

  /**
   * Operation getAssessmentPointsWithHttpInfo
   *
   * List Assessment Points
   *
   * @param  int $year_code Filter by school year (optional)
   * @param  string $type Filter by type (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\AssessmentPoint[], HTTP status code, HTTP response headers (array of strings)
   */
  public function getAssessmentPointsWithHttpInfo($year_code = null, $type = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\AssessmentPoint[]';
    $request = $this->getAssessmentPointsRequest($year_code, $type, $per_page, $page);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\AssessmentPoint[]',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation getAssessmentPointsAsync
   *
   * List Assessment Points
   *
   * @param  int $year_code Filter by school year (optional)
   * @param  string $type Filter by type (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getAssessmentPointsAsync($year_code = null, $type = null, $per_page = '100', $page = '1')
  {
    return $this->getAssessmentPointsAsyncWithHttpInfo($year_code, $type, $per_page, $page)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation getAssessmentPointsAsyncWithHttpInfo
   *
   * List Assessment Points
   *
   * @param  int $year_code Filter by school year (optional)
   * @param  string $type Filter by type (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getAssessmentPointsAsyncWithHttpInfo($year_code = null, $type = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\AssessmentPoint[]';
    $request = $this->getAssessmentPointsRequest($year_code, $type, $per_page, $page);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'getAssessmentPoints'
   *
   * @param  int $year_code Filter by school year (optional)
   * @param  string $type Filter by type (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function getAssessmentPointsRequest($year_code = null, $type = null, $per_page = '100', $page = '1')
  {
    if ($per_page !== null && $per_page > 1500) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getAssessmentPoints, must be smaller than or equal to 1500.');
    }
    if ($per_page !== null && $per_page < 1) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getAssessmentPoints, must be bigger than or equal to 1.');
    }

    if ($page !== null && $page < 1) {
      throw new \InvalidArgumentException('invalid value for "$page" when calling AssemblyApi.getAssessmentPoints, must be bigger than or equal to 1.');
    }


    $resourcePath = '/assessment_points';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($year_code !== null) {
      $queryParams['year_code'] = ObjectSerializer::toQueryValue($year_code);
    }
    // query params
    if ($type !== null) {
      $queryParams['type'] = ObjectSerializer::toQueryValue($type);
    }
    // query params
    if ($per_page !== null) {
      $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
    }
    // query params
    if ($page !== null) {
      $queryParams['page'] = ObjectSerializer::toQueryValue($page);
    }


    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation getAssessmentResults
   *
   * View Results for an Assessment
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded) (required)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\Result[]
   */
  public function getAssessmentResults($id, $students, $per_page = '100', $page = '1')
  {
    list($response) = $this->getAssessmentResultsWithHttpInfo($id, $students, $per_page, $page);
    return $response;
  }

  /**
   * Operation getAssessmentResultsWithHttpInfo
   *
   * View Results for an Assessment
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded) (required)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\Result[], HTTP status code, HTTP response headers (array of strings)
   */
  public function getAssessmentResultsWithHttpInfo($id, $students, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\Result[]';
    $request = $this->getAssessmentResultsRequest($id, $students, $per_page, $page);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\Result[]',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation getAssessmentResultsAsync
   *
   * View Results for an Assessment
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded) (required)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getAssessmentResultsAsync($id, $students, $per_page = '100', $page = '1')
  {
    return $this->getAssessmentResultsAsyncWithHttpInfo($id, $students, $per_page, $page)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation getAssessmentResultsAsyncWithHttpInfo
   *
   * View Results for an Assessment
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded) (required)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getAssessmentResultsAsyncWithHttpInfo($id, $students, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\Result[]';
    $request = $this->getAssessmentResultsRequest($id, $students, $per_page, $page);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'getAssessmentResults'
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded) (required)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function getAssessmentResultsRequest($id, $students, $per_page = '100', $page = '1')
  {
    // verify the required parameter 'id' is set
    if ($id === null || (is_array($id) && count($id) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $id when calling getAssessmentResults'
      );
    }
    // verify the required parameter 'students' is set
    if ($students === null || (is_array($students) && count($students) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $students when calling getAssessmentResults'
      );
    }
    if ($per_page !== null && $per_page > 1500) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getAssessmentResults, must be smaller than or equal to 1500.');
    }
    if ($per_page !== null && $per_page < 1) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getAssessmentResults, must be bigger than or equal to 1.');
    }

    if ($page !== null && $page < 1) {
      throw new \InvalidArgumentException('invalid value for "$page" when calling AssemblyApi.getAssessmentResults, must be bigger than or equal to 1.');
    }


    $resourcePath = '/assessments/{id}/results';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if (is_array($students)) {
      $students = ObjectSerializer::serializeCollection($students, 'multi', true);
    }
    if ($students !== null) {
      $queryParams['students[]'] = ObjectSerializer::toQueryValue($students);
    }
    // query params
    if ($per_page !== null) {
      $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
    }
    // query params
    if ($page !== null) {
      $queryParams['page'] = ObjectSerializer::toQueryValue($page);
    }

    // path params
    if ($id !== null) {
      $resourcePath = str_replace(
        '{' . 'id' . '}',
        ObjectSerializer::toPathValue($id),
        $resourcePath
      );
    }

    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation getAssessments
   *
   * List Assessments
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\Assessment[]
   */
  public function getAssessments($per_page = '100', $page = '1')
  {
    list($response) = $this->getAssessmentsWithHttpInfo($per_page, $page);
    return $response;
  }

  /**
   * Operation getAssessmentsWithHttpInfo
   *
   * List Assessments
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\Assessment[], HTTP status code, HTTP response headers (array of strings)
   */
  public function getAssessmentsWithHttpInfo($per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\Assessment[]';
    $request = $this->getAssessmentsRequest($per_page, $page);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\Assessment[]',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation getAssessmentsAsync
   *
   * List Assessments
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getAssessmentsAsync($per_page = '100', $page = '1')
  {
    return $this->getAssessmentsAsyncWithHttpInfo($per_page, $page)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation getAssessmentsAsyncWithHttpInfo
   *
   * List Assessments
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getAssessmentsAsyncWithHttpInfo($per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\Assessment[]';
    $request = $this->getAssessmentsRequest($per_page, $page);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'getAssessments'
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function getAssessmentsRequest($per_page = '100', $page = '1')
  {
    if ($per_page !== null && $per_page > 1500) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getAssessments, must be smaller than or equal to 1500.');
    }
    if ($per_page !== null && $per_page < 1) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getAssessments, must be bigger than or equal to 1.');
    }

    if ($page !== null && $page < 1) {
      throw new \InvalidArgumentException('invalid value for "$page" when calling AssemblyApi.getAssessments, must be bigger than or equal to 1.');
    }


    $resourcePath = '/assessments';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($per_page !== null) {
      $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
    }
    // query params
    if ($page !== null) {
      $queryParams['page'] = ObjectSerializer::toQueryValue($page);
    }


    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation getAttendanceSummaries
   *
   * List Attendance Summaries
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $student_id Filter to the specified student (optional)
   * @param  int $registration_group_id ID of a registration group (optional)
   * @param  int $group_id Filter to the specified group (optional)
   * @param  int $academic_year_id Include all groups and group memberships from the specified academic year (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\AttendanceSummary[]
   */
  public function getAttendanceSummaries($if_modified_since = null, $student_id = null, $registration_group_id = null, $group_id = null, $academic_year_id = null, $per_page = '100', $page = '1')
  {
    list($response) = $this->getAttendanceSummariesWithHttpInfo($if_modified_since, $student_id, $registration_group_id, $group_id, $academic_year_id, $per_page, $page);
    return $response;
  }

  /**
   * Operation getAttendanceSummariesWithHttpInfo
   *
   * List Attendance Summaries
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $student_id Filter to the specified student (optional)
   * @param  int $registration_group_id ID of a registration group (optional)
   * @param  int $group_id Filter to the specified group (optional)
   * @param  int $academic_year_id Include all groups and group memberships from the specified academic year (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\AttendanceSummary[], HTTP status code, HTTP response headers (array of strings)
   */
  public function getAttendanceSummariesWithHttpInfo($if_modified_since = null, $student_id = null, $registration_group_id = null, $group_id = null, $academic_year_id = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\AttendanceSummary[]';
    $request = $this->getAttendanceSummariesRequest($if_modified_since, $student_id, $registration_group_id, $group_id, $academic_year_id, $per_page, $page);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\AttendanceSummary[]',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation getAttendanceSummariesAsync
   *
   * List Attendance Summaries
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $student_id Filter to the specified student (optional)
   * @param  int $registration_group_id ID of a registration group (optional)
   * @param  int $group_id Filter to the specified group (optional)
   * @param  int $academic_year_id Include all groups and group memberships from the specified academic year (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getAttendanceSummariesAsync($if_modified_since = null, $student_id = null, $registration_group_id = null, $group_id = null, $academic_year_id = null, $per_page = '100', $page = '1')
  {
    return $this->getAttendanceSummariesAsyncWithHttpInfo($if_modified_since, $student_id, $registration_group_id, $group_id, $academic_year_id, $per_page, $page)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation getAttendanceSummariesAsyncWithHttpInfo
   *
   * List Attendance Summaries
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $student_id Filter to the specified student (optional)
   * @param  int $registration_group_id ID of a registration group (optional)
   * @param  int $group_id Filter to the specified group (optional)
   * @param  int $academic_year_id Include all groups and group memberships from the specified academic year (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getAttendanceSummariesAsyncWithHttpInfo($if_modified_since = null, $student_id = null, $registration_group_id = null, $group_id = null, $academic_year_id = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\AttendanceSummary[]';
    $request = $this->getAttendanceSummariesRequest($if_modified_since, $student_id, $registration_group_id, $group_id, $academic_year_id, $per_page, $page);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'getAttendanceSummaries'
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $student_id Filter to the specified student (optional)
   * @param  int $registration_group_id ID of a registration group (optional)
   * @param  int $group_id Filter to the specified group (optional)
   * @param  int $academic_year_id Include all groups and group memberships from the specified academic year (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function getAttendanceSummariesRequest($if_modified_since = null, $student_id = null, $registration_group_id = null, $group_id = null, $academic_year_id = null, $per_page = '100', $page = '1')
  {
    if ($per_page !== null && $per_page > 1500) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getAttendanceSummaries, must be smaller than or equal to 1500.');
    }
    if ($per_page !== null && $per_page < 1) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getAttendanceSummaries, must be bigger than or equal to 1.');
    }

    if ($page !== null && $page < 1) {
      throw new \InvalidArgumentException('invalid value for "$page" when calling AssemblyApi.getAttendanceSummaries, must be bigger than or equal to 1.');
    }


    $resourcePath = '/attendances/summaries';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($student_id !== null) {
      $queryParams['student_id'] = ObjectSerializer::toQueryValue($student_id);
    }
    // query params
    if ($registration_group_id !== null) {
      $queryParams['registration_group_id'] = ObjectSerializer::toQueryValue($registration_group_id);
    }
    // query params
    if ($group_id !== null) {
      $queryParams['group_id'] = ObjectSerializer::toQueryValue($group_id);
    }
    // query params
    if ($academic_year_id !== null) {
      $queryParams['academic_year_id'] = ObjectSerializer::toQueryValue($academic_year_id);
    }
    // query params
    if ($per_page !== null) {
      $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
    }
    // query params
    if ($page !== null) {
      $queryParams['page'] = ObjectSerializer::toQueryValue($page);
    }
    // header params
    if ($if_modified_since !== null) {
      $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
    }


    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation getAttendances
   *
   * List Attendances
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $student_id Filter to the specified student (optional)
   * @param  int $registration_group_id ID of a registration group (optional)
   * @param  int $group_id Filter to the specified group (optional)
   * @param  \DateTime $start_date The start date of the period to filter by (optional)
   * @param  \DateTime $end_date The end date of the period to filter by (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\Attendance[]
   */
  public function getAttendances($if_modified_since = null, $student_id = null, $registration_group_id = null, $group_id = null, $start_date = null, $end_date = null, $per_page = '100', $page = '1')
  {
    list($response) = $this->getAttendancesWithHttpInfo($if_modified_since, $student_id, $registration_group_id, $group_id, $start_date, $end_date, $per_page, $page);
    return $response;
  }

  /**
   * Operation getAttendancesWithHttpInfo
   *
   * List Attendances
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $student_id Filter to the specified student (optional)
   * @param  int $registration_group_id ID of a registration group (optional)
   * @param  int $group_id Filter to the specified group (optional)
   * @param  \DateTime $start_date The start date of the period to filter by (optional)
   * @param  \DateTime $end_date The end date of the period to filter by (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\Attendance[], HTTP status code, HTTP response headers (array of strings)
   */
  public function getAttendancesWithHttpInfo($if_modified_since = null, $student_id = null, $registration_group_id = null, $group_id = null, $start_date = null, $end_date = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\Attendance[]';
    $request = $this->getAttendancesRequest($if_modified_since, $student_id, $registration_group_id, $group_id, $start_date, $end_date, $per_page, $page);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\Attendance[]',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation getAttendancesAsync
   *
   * List Attendances
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $student_id Filter to the specified student (optional)
   * @param  int $registration_group_id ID of a registration group (optional)
   * @param  int $group_id Filter to the specified group (optional)
   * @param  \DateTime $start_date The start date of the period to filter by (optional)
   * @param  \DateTime $end_date The end date of the period to filter by (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getAttendancesAsync($if_modified_since = null, $student_id = null, $registration_group_id = null, $group_id = null, $start_date = null, $end_date = null, $per_page = '100', $page = '1')
  {
    return $this->getAttendancesAsyncWithHttpInfo($if_modified_since, $student_id, $registration_group_id, $group_id, $start_date, $end_date, $per_page, $page)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation getAttendancesAsyncWithHttpInfo
   *
   * List Attendances
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $student_id Filter to the specified student (optional)
   * @param  int $registration_group_id ID of a registration group (optional)
   * @param  int $group_id Filter to the specified group (optional)
   * @param  \DateTime $start_date The start date of the period to filter by (optional)
   * @param  \DateTime $end_date The end date of the period to filter by (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getAttendancesAsyncWithHttpInfo($if_modified_since = null, $student_id = null, $registration_group_id = null, $group_id = null, $start_date = null, $end_date = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\Attendance[]';
    $request = $this->getAttendancesRequest($if_modified_since, $student_id, $registration_group_id, $group_id, $start_date, $end_date, $per_page, $page);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'getAttendances'
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $student_id Filter to the specified student (optional)
   * @param  int $registration_group_id ID of a registration group (optional)
   * @param  int $group_id Filter to the specified group (optional)
   * @param  \DateTime $start_date The start date of the period to filter by (optional)
   * @param  \DateTime $end_date The end date of the period to filter by (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function getAttendancesRequest($if_modified_since = null, $student_id = null, $registration_group_id = null, $group_id = null, $start_date = null, $end_date = null, $per_page = '100', $page = '1')
  {
    if ($per_page !== null && $per_page > 1500) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getAttendances, must be smaller than or equal to 1500.');
    }
    if ($per_page !== null && $per_page < 1) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getAttendances, must be bigger than or equal to 1.');
    }

    if ($page !== null && $page < 1) {
      throw new \InvalidArgumentException('invalid value for "$page" when calling AssemblyApi.getAttendances, must be bigger than or equal to 1.');
    }


    $resourcePath = '/attendances';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($student_id !== null) {
      $queryParams['student_id'] = ObjectSerializer::toQueryValue($student_id);
    }
    // query params
    if ($registration_group_id !== null) {
      $queryParams['registration_group_id'] = ObjectSerializer::toQueryValue($registration_group_id);
    }
    // query params
    if ($group_id !== null) {
      $queryParams['group_id'] = ObjectSerializer::toQueryValue($group_id);
    }
    // query params
    if ($start_date !== null) {
      $queryParams['start_date'] = ObjectSerializer::toQueryValue($start_date);
    }
    // query params
    if ($end_date !== null) {
      $queryParams['end_date'] = ObjectSerializer::toQueryValue($end_date);
    }
    // query params
    if ($per_page !== null) {
      $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
    }
    // query params
    if ($page !== null) {
      $queryParams['page'] = ObjectSerializer::toQueryValue($page);
    }
    // header params
    if ($if_modified_since !== null) {
      $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
    }


    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation getCalendarEvents
   *
   * List Calendar Events
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  string $type Filter by type (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\CalendarEvent[]
   */
  public function getCalendarEvents($if_modified_since = null, $type = null, $per_page = '100', $page = '1')
  {
    list($response) = $this->getCalendarEventsWithHttpInfo($if_modified_since, $type, $per_page, $page);
    return $response;
  }

  /**
   * Operation getCalendarEventsWithHttpInfo
   *
   * List Calendar Events
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  string $type Filter by type (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\CalendarEvent[], HTTP status code, HTTP response headers (array of strings)
   */
  public function getCalendarEventsWithHttpInfo($if_modified_since = null, $type = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\CalendarEvent[]';
    $request = $this->getCalendarEventsRequest($if_modified_since, $type, $per_page, $page);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\CalendarEvent[]',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation getCalendarEventsAsync
   *
   * List Calendar Events
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  string $type Filter by type (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getCalendarEventsAsync($if_modified_since = null, $type = null, $per_page = '100', $page = '1')
  {
    return $this->getCalendarEventsAsyncWithHttpInfo($if_modified_since, $type, $per_page, $page)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation getCalendarEventsAsyncWithHttpInfo
   *
   * List Calendar Events
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  string $type Filter by type (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getCalendarEventsAsyncWithHttpInfo($if_modified_since = null, $type = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\CalendarEvent[]';
    $request = $this->getCalendarEventsRequest($if_modified_since, $type, $per_page, $page);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'getCalendarEvents'
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  string $type Filter by type (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function getCalendarEventsRequest($if_modified_since = null, $type = null, $per_page = '100', $page = '1')
  {
    if ($per_page !== null && $per_page > 1500) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getCalendarEvents, must be smaller than or equal to 1500.');
    }
    if ($per_page !== null && $per_page < 1) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getCalendarEvents, must be bigger than or equal to 1.');
    }

    if ($page !== null && $page < 1) {
      throw new \InvalidArgumentException('invalid value for "$page" when calling AssemblyApi.getCalendarEvents, must be bigger than or equal to 1.');
    }


    $resourcePath = '/calendar_events';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($type !== null) {
      $queryParams['type'] = ObjectSerializer::toQueryValue($type);
    }
    // query params
    if ($per_page !== null) {
      $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
    }
    // query params
    if ($page !== null) {
      $queryParams['page'] = ObjectSerializer::toQueryValue($page);
    }
    // header params
    if ($if_modified_since !== null) {
      $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
    }


    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation getClosures
   *
   * List Closures For a Room
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  \DateTime $start_date The start date of the period to filter by (optional)
   * @param  \DateTime $end_date The end date of the period to filter by (optional)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\Closure[]
   */
  public function getClosures($id, $if_modified_since = null, $date = null, $start_date = null, $end_date = null)
  {
    list($response) = $this->getClosuresWithHttpInfo($id, $if_modified_since, $date, $start_date, $end_date);
    return $response;
  }

  /**
   * Operation getClosuresWithHttpInfo
   *
   * List Closures For a Room
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  \DateTime $start_date The start date of the period to filter by (optional)
   * @param  \DateTime $end_date The end date of the period to filter by (optional)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\Closure[], HTTP status code, HTTP response headers (array of strings)
   */
  public function getClosuresWithHttpInfo($id, $if_modified_since = null, $date = null, $start_date = null, $end_date = null)
  {
    $returnType = '\Assembly\Client\Model\Closure[]';
    $request = $this->getClosuresRequest($id, $if_modified_since, $date, $start_date, $end_date);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\Closure[]',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation getClosuresAsync
   *
   * List Closures For a Room
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  \DateTime $start_date The start date of the period to filter by (optional)
   * @param  \DateTime $end_date The end date of the period to filter by (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getClosuresAsync($id, $if_modified_since = null, $date = null, $start_date = null, $end_date = null)
  {
    return $this->getClosuresAsyncWithHttpInfo($id, $if_modified_since, $date, $start_date, $end_date)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation getClosuresAsyncWithHttpInfo
   *
   * List Closures For a Room
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  \DateTime $start_date The start date of the period to filter by (optional)
   * @param  \DateTime $end_date The end date of the period to filter by (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getClosuresAsyncWithHttpInfo($id, $if_modified_since = null, $date = null, $start_date = null, $end_date = null)
  {
    $returnType = '\Assembly\Client\Model\Closure[]';
    $request = $this->getClosuresRequest($id, $if_modified_since, $date, $start_date, $end_date);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'getClosures'
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  \DateTime $start_date The start date of the period to filter by (optional)
   * @param  \DateTime $end_date The end date of the period to filter by (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function getClosuresRequest($id, $if_modified_since = null, $date = null, $start_date = null, $end_date = null)
  {
    // verify the required parameter 'id' is set
    if ($id === null || (is_array($id) && count($id) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $id when calling getClosures'
      );
    }

    $resourcePath = '/rooms/{id}/closures';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($date !== null) {
      $queryParams['date'] = ObjectSerializer::toQueryValue($date);
    }
    // query params
    if ($start_date !== null) {
      $queryParams['start_date'] = ObjectSerializer::toQueryValue($start_date);
    }
    // query params
    if ($end_date !== null) {
      $queryParams['end_date'] = ObjectSerializer::toQueryValue($end_date);
    }
    // header params
    if ($if_modified_since !== null) {
      $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
    }

    // path params
    if ($id !== null) {
      $resourcePath = str_replace(
        '{' . 'id' . '}',
        ObjectSerializer::toPathValue($id),
        $resourcePath
      );
    }

    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation getContacts
   *
   * List Contacts
   *
   * @param  int $student_id Filter to the specified student (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\Contact[]
   */
  public function getContacts($student_id = null, $addresses = null, $per_page = '100', $page = '1')
  {
    list($response) = $this->getContactsWithHttpInfo($student_id, $addresses, $per_page, $page);
    return $response;
  }

  /**
   * Operation getContactsWithHttpInfo
   *
   * List Contacts
   *
   * @param  int $student_id Filter to the specified student (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\Contact[], HTTP status code, HTTP response headers (array of strings)
   */
  public function getContactsWithHttpInfo($student_id = null, $addresses = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\Contact[]';
    $request = $this->getContactsRequest($student_id, $addresses, $per_page, $page);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\Contact[]',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation getContactsAsync
   *
   * List Contacts
   *
   * @param  int $student_id Filter to the specified student (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getContactsAsync($student_id = null, $addresses = null, $per_page = '100', $page = '1')
  {
    return $this->getContactsAsyncWithHttpInfo($student_id, $addresses, $per_page, $page)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation getContactsAsyncWithHttpInfo
   *
   * List Contacts
   *
   * @param  int $student_id Filter to the specified student (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getContactsAsyncWithHttpInfo($student_id = null, $addresses = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\Contact[]';
    $request = $this->getContactsRequest($student_id, $addresses, $per_page, $page);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'getContacts'
   *
   * @param  int $student_id Filter to the specified student (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function getContactsRequest($student_id = null, $addresses = null, $per_page = '100', $page = '1')
  {
    if ($per_page !== null && $per_page > 1500) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getContacts, must be smaller than or equal to 1500.');
    }
    if ($per_page !== null && $per_page < 1) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getContacts, must be bigger than or equal to 1.');
    }

    if ($page !== null && $page < 1) {
      throw new \InvalidArgumentException('invalid value for "$page" when calling AssemblyApi.getContacts, must be bigger than or equal to 1.');
    }


    $resourcePath = '/contacts';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($student_id !== null) {
      $queryParams['student_id'] = ObjectSerializer::toQueryValue($student_id);
    }
    // query params
    if ($addresses !== null) {
      $queryParams['addresses'] = ObjectSerializer::toQueryValue($addresses);
    }
    // query params
    if ($per_page !== null) {
      $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
    }
    // query params
    if ($page !== null) {
      $queryParams['page'] = ObjectSerializer::toQueryValue($page);
    }


    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation getDietaryNeeds
   *
   * List Dietary Needs
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\DietaryNeed[]
   */
  public function getDietaryNeeds($per_page = '100', $page = '1')
  {
    list($response) = $this->getDietaryNeedsWithHttpInfo($per_page, $page);
    return $response;
  }

  /**
   * Operation getDietaryNeedsWithHttpInfo
   *
   * List Dietary Needs
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\DietaryNeed[], HTTP status code, HTTP response headers (array of strings)
   */
  public function getDietaryNeedsWithHttpInfo($per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\DietaryNeed[]';
    $request = $this->getDietaryNeedsRequest($per_page, $page);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\DietaryNeed[]',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation getDietaryNeedsAsync
   *
   * List Dietary Needs
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getDietaryNeedsAsync($per_page = '100', $page = '1')
  {
    return $this->getDietaryNeedsAsyncWithHttpInfo($per_page, $page)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation getDietaryNeedsAsyncWithHttpInfo
   *
   * List Dietary Needs
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getDietaryNeedsAsyncWithHttpInfo($per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\DietaryNeed[]';
    $request = $this->getDietaryNeedsRequest($per_page, $page);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'getDietaryNeeds'
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function getDietaryNeedsRequest($per_page = '100', $page = '1')
  {
    if ($per_page !== null && $per_page > 1500) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getDietaryNeeds, must be smaller than or equal to 1500.');
    }
    if ($per_page !== null && $per_page < 1) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getDietaryNeeds, must be bigger than or equal to 1.');
    }

    if ($page !== null && $page < 1) {
      throw new \InvalidArgumentException('invalid value for "$page" when calling AssemblyApi.getDietaryNeeds, must be bigger than or equal to 1.');
    }


    $resourcePath = '/school/dietary_needs';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($per_page !== null) {
      $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
    }
    // query params
    if ($page !== null) {
      $queryParams['page'] = ObjectSerializer::toQueryValue($page);
    }


    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation getExclusions
   *
   * List Exclusions
   *
   * @param  int $student_id Filter to the specified student (optional)
   * @param  \DateTime $start_date The start date of the period to filter by (optional)
   * @param  \DateTime $end_date The end date of the period to filter by (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\Exclusion[]
   */
  public function getExclusions($student_id = null, $start_date = null, $end_date = null, $per_page = '100', $page = '1')
  {
    list($response) = $this->getExclusionsWithHttpInfo($student_id, $start_date, $end_date, $per_page, $page);
    return $response;
  }

  /**
   * Operation getExclusionsWithHttpInfo
   *
   * List Exclusions
   *
   * @param  int $student_id Filter to the specified student (optional)
   * @param  \DateTime $start_date The start date of the period to filter by (optional)
   * @param  \DateTime $end_date The end date of the period to filter by (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\Exclusion[], HTTP status code, HTTP response headers (array of strings)
   */
  public function getExclusionsWithHttpInfo($student_id = null, $start_date = null, $end_date = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\Exclusion[]';
    $request = $this->getExclusionsRequest($student_id, $start_date, $end_date, $per_page, $page);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\Exclusion[]',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation getExclusionsAsync
   *
   * List Exclusions
   *
   * @param  int $student_id Filter to the specified student (optional)
   * @param  \DateTime $start_date The start date of the period to filter by (optional)
   * @param  \DateTime $end_date The end date of the period to filter by (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getExclusionsAsync($student_id = null, $start_date = null, $end_date = null, $per_page = '100', $page = '1')
  {
    return $this->getExclusionsAsyncWithHttpInfo($student_id, $start_date, $end_date, $per_page, $page)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation getExclusionsAsyncWithHttpInfo
   *
   * List Exclusions
   *
   * @param  int $student_id Filter to the specified student (optional)
   * @param  \DateTime $start_date The start date of the period to filter by (optional)
   * @param  \DateTime $end_date The end date of the period to filter by (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getExclusionsAsyncWithHttpInfo($student_id = null, $start_date = null, $end_date = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\Exclusion[]';
    $request = $this->getExclusionsRequest($student_id, $start_date, $end_date, $per_page, $page);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'getExclusions'
   *
   * @param  int $student_id Filter to the specified student (optional)
   * @param  \DateTime $start_date The start date of the period to filter by (optional)
   * @param  \DateTime $end_date The end date of the period to filter by (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function getExclusionsRequest($student_id = null, $start_date = null, $end_date = null, $per_page = '100', $page = '1')
  {
    if ($per_page !== null && $per_page > 1500) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getExclusions, must be smaller than or equal to 1500.');
    }
    if ($per_page !== null && $per_page < 1) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getExclusions, must be bigger than or equal to 1.');
    }

    if ($page !== null && $page < 1) {
      throw new \InvalidArgumentException('invalid value for "$page" when calling AssemblyApi.getExclusions, must be bigger than or equal to 1.');
    }


    $resourcePath = '/exclusions';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($student_id !== null) {
      $queryParams['student_id'] = ObjectSerializer::toQueryValue($student_id);
    }
    // query params
    if ($start_date !== null) {
      $queryParams['start_date'] = ObjectSerializer::toQueryValue($start_date);
    }
    // query params
    if ($end_date !== null) {
      $queryParams['end_date'] = ObjectSerializer::toQueryValue($end_date);
    }
    // query params
    if ($per_page !== null) {
      $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
    }
    // query params
    if ($page !== null) {
      $queryParams['page'] = ObjectSerializer::toQueryValue($page);
    }


    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation getFacets
   *
   * List Facets
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\Facet[]
   */
  public function getFacets($per_page = '100', $page = '1')
  {
    list($response) = $this->getFacetsWithHttpInfo($per_page, $page);
    return $response;
  }

  /**
   * Operation getFacetsWithHttpInfo
   *
   * List Facets
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\Facet[], HTTP status code, HTTP response headers (array of strings)
   */
  public function getFacetsWithHttpInfo($per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\Facet[]';
    $request = $this->getFacetsRequest($per_page, $page);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\Facet[]',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation getFacetsAsync
   *
   * List Facets
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getFacetsAsync($per_page = '100', $page = '1')
  {
    return $this->getFacetsAsyncWithHttpInfo($per_page, $page)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation getFacetsAsyncWithHttpInfo
   *
   * List Facets
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getFacetsAsyncWithHttpInfo($per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\Facet[]';
    $request = $this->getFacetsRequest($per_page, $page);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'getFacets'
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function getFacetsRequest($per_page = '100', $page = '1')
  {
    if ($per_page !== null && $per_page > 1500) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getFacets, must be smaller than or equal to 1500.');
    }
    if ($per_page !== null && $per_page < 1) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getFacets, must be bigger than or equal to 1.');
    }

    if ($page !== null && $page < 1) {
      throw new \InvalidArgumentException('invalid value for "$page" when calling AssemblyApi.getFacets, must be bigger than or equal to 1.');
    }


    $resourcePath = '/facets';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($per_page !== null) {
      $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
    }
    // query params
    if ($page !== null) {
      $queryParams['page'] = ObjectSerializer::toQueryValue($page);
    }


    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation getGradeSets
   *
   * List Grade Sets
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\GradeSet[]
   */
  public function getGradeSets($per_page = '100', $page = '1')
  {
    list($response) = $this->getGradeSetsWithHttpInfo($per_page, $page);
    return $response;
  }

  /**
   * Operation getGradeSetsWithHttpInfo
   *
   * List Grade Sets
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\GradeSet[], HTTP status code, HTTP response headers (array of strings)
   */
  public function getGradeSetsWithHttpInfo($per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\GradeSet[]';
    $request = $this->getGradeSetsRequest($per_page, $page);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\GradeSet[]',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation getGradeSetsAsync
   *
   * List Grade Sets
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getGradeSetsAsync($per_page = '100', $page = '1')
  {
    return $this->getGradeSetsAsyncWithHttpInfo($per_page, $page)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation getGradeSetsAsyncWithHttpInfo
   *
   * List Grade Sets
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getGradeSetsAsyncWithHttpInfo($per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\GradeSet[]';
    $request = $this->getGradeSetsRequest($per_page, $page);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'getGradeSets'
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function getGradeSetsRequest($per_page = '100', $page = '1')
  {
    if ($per_page !== null && $per_page > 1500) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getGradeSets, must be smaller than or equal to 1500.');
    }
    if ($per_page !== null && $per_page < 1) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getGradeSets, must be bigger than or equal to 1.');
    }

    if ($page !== null && $page < 1) {
      throw new \InvalidArgumentException('invalid value for "$page" when calling AssemblyApi.getGradeSets, must be bigger than or equal to 1.');
    }


    $resourcePath = '/grade_sets';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($per_page !== null) {
      $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
    }
    // query params
    if ($page !== null) {
      $queryParams['page'] = ObjectSerializer::toQueryValue($page);
    }


    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation getGroupStudents
   *
   * List Students for Group
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $academic_year_id Include all groups and group memberships from the specified academic year (optional)
   * @param  string $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  string $year_code Filter by school year (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $contacts Include contacts data (optional)
   * @param  bool $sen_needs Include SEN needs data (optional)
   * @param  bool $emails Include email addresses (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $care Include student care data (you must also supply the demographics parameter) (optional)
   * @param  bool $ever_in_care Include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
   * @param  bool $languages Include student language data (optional)
   * @param  bool $photo Include student photo data (optional)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\Student[]
   */
  public function getGroupStudents($id, $if_modified_since = null, $academic_year_id = null, $date = null, $year_code = null, $demographics = null, $contacts = null, $sen_needs = null, $emails = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
  {
    list($response) = $this->getGroupStudentsWithHttpInfo($id, $if_modified_since, $academic_year_id, $date, $year_code, $demographics, $contacts, $sen_needs, $emails, $addresses, $care, $ever_in_care, $languages, $photo);
    return $response;
  }

  /**
   * Operation getGroupStudentsWithHttpInfo
   *
   * List Students for Group
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $academic_year_id Include all groups and group memberships from the specified academic year (optional)
   * @param  string $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  string $year_code Filter by school year (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $contacts Include contacts data (optional)
   * @param  bool $sen_needs Include SEN needs data (optional)
   * @param  bool $emails Include email addresses (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $care Include student care data (you must also supply the demographics parameter) (optional)
   * @param  bool $ever_in_care Include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
   * @param  bool $languages Include student language data (optional)
   * @param  bool $photo Include student photo data (optional)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\Student[], HTTP status code, HTTP response headers (array of strings)
   */
  public function getGroupStudentsWithHttpInfo($id, $if_modified_since = null, $academic_year_id = null, $date = null, $year_code = null, $demographics = null, $contacts = null, $sen_needs = null, $emails = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
  {
    $returnType = '\Assembly\Client\Model\Student[]';
    $request = $this->getGroupStudentsRequest($id, $if_modified_since, $academic_year_id, $date, $year_code, $demographics, $contacts, $sen_needs, $emails, $addresses, $care, $ever_in_care, $languages, $photo);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\Student[]',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation getGroupStudentsAsync
   *
   * List Students for Group
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $academic_year_id Include all groups and group memberships from the specified academic year (optional)
   * @param  string $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  string $year_code Filter by school year (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $contacts Include contacts data (optional)
   * @param  bool $sen_needs Include SEN needs data (optional)
   * @param  bool $emails Include email addresses (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $care Include student care data (you must also supply the demographics parameter) (optional)
   * @param  bool $ever_in_care Include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
   * @param  bool $languages Include student language data (optional)
   * @param  bool $photo Include student photo data (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getGroupStudentsAsync($id, $if_modified_since = null, $academic_year_id = null, $date = null, $year_code = null, $demographics = null, $contacts = null, $sen_needs = null, $emails = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
  {
    return $this->getGroupStudentsAsyncWithHttpInfo($id, $if_modified_since, $academic_year_id, $date, $year_code, $demographics, $contacts, $sen_needs, $emails, $addresses, $care, $ever_in_care, $languages, $photo)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation getGroupStudentsAsyncWithHttpInfo
   *
   * List Students for Group
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $academic_year_id Include all groups and group memberships from the specified academic year (optional)
   * @param  string $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  string $year_code Filter by school year (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $contacts Include contacts data (optional)
   * @param  bool $sen_needs Include SEN needs data (optional)
   * @param  bool $emails Include email addresses (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $care Include student care data (you must also supply the demographics parameter) (optional)
   * @param  bool $ever_in_care Include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
   * @param  bool $languages Include student language data (optional)
   * @param  bool $photo Include student photo data (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getGroupStudentsAsyncWithHttpInfo($id, $if_modified_since = null, $academic_year_id = null, $date = null, $year_code = null, $demographics = null, $contacts = null, $sen_needs = null, $emails = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
  {
    $returnType = '\Assembly\Client\Model\Student[]';
    $request = $this->getGroupStudentsRequest($id, $if_modified_since, $academic_year_id, $date, $year_code, $demographics, $contacts, $sen_needs, $emails, $addresses, $care, $ever_in_care, $languages, $photo);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'getGroupStudents'
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $academic_year_id Include all groups and group memberships from the specified academic year (optional)
   * @param  string $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  string $year_code Filter by school year (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $contacts Include contacts data (optional)
   * @param  bool $sen_needs Include SEN needs data (optional)
   * @param  bool $emails Include email addresses (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $care Include student care data (you must also supply the demographics parameter) (optional)
   * @param  bool $ever_in_care Include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
   * @param  bool $languages Include student language data (optional)
   * @param  bool $photo Include student photo data (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function getGroupStudentsRequest($id, $if_modified_since = null, $academic_year_id = null, $date = null, $year_code = null, $demographics = null, $contacts = null, $sen_needs = null, $emails = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
  {
    // verify the required parameter 'id' is set
    if ($id === null || (is_array($id) && count($id) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $id when calling getGroupStudents'
      );
    }

    $resourcePath = '/groups/{id}/students';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($academic_year_id !== null) {
      $queryParams['academic_year_id'] = ObjectSerializer::toQueryValue($academic_year_id);
    }
    // query params
    if ($date !== null) {
      $queryParams['date'] = ObjectSerializer::toQueryValue($date);
    }
    // query params
    if ($year_code !== null) {
      $queryParams['year_code'] = ObjectSerializer::toQueryValue($year_code);
    }
    // query params
    if ($demographics !== null) {
      $queryParams['demographics'] = ObjectSerializer::toQueryValue($demographics);
    }
    // query params
    if ($contacts !== null) {
      $queryParams['contacts'] = ObjectSerializer::toQueryValue($contacts);
    }
    // query params
    if ($sen_needs !== null) {
      $queryParams['sen_needs'] = ObjectSerializer::toQueryValue($sen_needs);
    }
    // query params
    if ($emails !== null) {
      $queryParams['emails'] = ObjectSerializer::toQueryValue($emails);
    }
    // query params
    if ($addresses !== null) {
      $queryParams['addresses'] = ObjectSerializer::toQueryValue($addresses);
    }
    // query params
    if ($care !== null) {
      $queryParams['care'] = ObjectSerializer::toQueryValue($care);
    }
    // query params
    if ($ever_in_care !== null) {
      $queryParams['ever_in_care'] = ObjectSerializer::toQueryValue($ever_in_care);
    }
    // query params
    if ($languages !== null) {
      $queryParams['languages'] = ObjectSerializer::toQueryValue($languages);
    }
    // query params
    if ($photo !== null) {
      $queryParams['photo'] = ObjectSerializer::toQueryValue($photo);
    }
    // header params
    if ($if_modified_since !== null) {
      $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
    }

    // path params
    if ($id !== null) {
      $resourcePath = str_replace(
        '{' . 'id' . '}',
        ObjectSerializer::toPathValue($id),
        $resourcePath
      );
    }

    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation getGroups
   *
   * List Groups
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  string $year_code Filter by school year (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  int $academic_year_id Include all groups and group memberships from the specified academic year (optional)
   * @param  string $type Filter by type (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\Group[]
   */
  public function getGroups($if_modified_since = null, $year_code = null, $date = null, $academic_year_id = null, $type = null, $per_page = '100', $page = '1')
  {
    list($response) = $this->getGroupsWithHttpInfo($if_modified_since, $year_code, $date, $academic_year_id, $type, $per_page, $page);
    return $response;
  }

  /**
   * Operation getGroupsWithHttpInfo
   *
   * List Groups
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  string $year_code Filter by school year (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  int $academic_year_id Include all groups and group memberships from the specified academic year (optional)
   * @param  string $type Filter by type (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\Group[], HTTP status code, HTTP response headers (array of strings)
   */
  public function getGroupsWithHttpInfo($if_modified_since = null, $year_code = null, $date = null, $academic_year_id = null, $type = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\Group[]';
    $request = $this->getGroupsRequest($if_modified_since, $year_code, $date, $academic_year_id, $type, $per_page, $page);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\Group[]',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation getGroupsAsync
   *
   * List Groups
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  string $year_code Filter by school year (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  int $academic_year_id Include all groups and group memberships from the specified academic year (optional)
   * @param  string $type Filter by type (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getGroupsAsync($if_modified_since = null, $year_code = null, $date = null, $academic_year_id = null, $type = null, $per_page = '100', $page = '1')
  {
    return $this->getGroupsAsyncWithHttpInfo($if_modified_since, $year_code, $date, $academic_year_id, $type, $per_page, $page)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation getGroupsAsyncWithHttpInfo
   *
   * List Groups
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  string $year_code Filter by school year (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  int $academic_year_id Include all groups and group memberships from the specified academic year (optional)
   * @param  string $type Filter by type (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getGroupsAsyncWithHttpInfo($if_modified_since = null, $year_code = null, $date = null, $academic_year_id = null, $type = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\Group[]';
    $request = $this->getGroupsRequest($if_modified_since, $year_code, $date, $academic_year_id, $type, $per_page, $page);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'getGroups'
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  string $year_code Filter by school year (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  int $academic_year_id Include all groups and group memberships from the specified academic year (optional)
   * @param  string $type Filter by type (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function getGroupsRequest($if_modified_since = null, $year_code = null, $date = null, $academic_year_id = null, $type = null, $per_page = '100', $page = '1')
  {
    if ($per_page !== null && $per_page > 1500) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getGroups, must be smaller than or equal to 1500.');
    }
    if ($per_page !== null && $per_page < 1) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getGroups, must be bigger than or equal to 1.');
    }

    if ($page !== null && $page < 1) {
      throw new \InvalidArgumentException('invalid value for "$page" when calling AssemblyApi.getGroups, must be bigger than or equal to 1.');
    }


    $resourcePath = '/groups';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($year_code !== null) {
      $queryParams['year_code'] = ObjectSerializer::toQueryValue($year_code);
    }
    // query params
    if ($date !== null) {
      $queryParams['date'] = ObjectSerializer::toQueryValue($date);
    }
    // query params
    if ($academic_year_id !== null) {
      $queryParams['academic_year_id'] = ObjectSerializer::toQueryValue($academic_year_id);
    }
    // query params
    if ($type !== null) {
      $queryParams['type'] = ObjectSerializer::toQueryValue($type);
    }
    // query params
    if ($per_page !== null) {
      $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
    }
    // query params
    if ($page !== null) {
      $queryParams['page'] = ObjectSerializer::toQueryValue($page);
    }
    // header params
    if ($if_modified_since !== null) {
      $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
    }


    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation getLearningAims
   *
   * List Post-16 Learning Aims
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\LearningAim[]
   */
  public function getLearningAims($per_page = '100', $page = '1')
  {
    list($response) = $this->getLearningAimsWithHttpInfo($per_page, $page);
    return $response;
  }

  /**
   * Operation getLearningAimsWithHttpInfo
   *
   * List Post-16 Learning Aims
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\LearningAim[], HTTP status code, HTTP response headers (array of strings)
   */
  public function getLearningAimsWithHttpInfo($per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\LearningAim[]';
    $request = $this->getLearningAimsRequest($per_page, $page);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\LearningAim[]',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation getLearningAimsAsync
   *
   * List Post-16 Learning Aims
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getLearningAimsAsync($per_page = '100', $page = '1')
  {
    return $this->getLearningAimsAsyncWithHttpInfo($per_page, $page)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation getLearningAimsAsyncWithHttpInfo
   *
   * List Post-16 Learning Aims
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getLearningAimsAsyncWithHttpInfo($per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\LearningAim[]';
    $request = $this->getLearningAimsRequest($per_page, $page);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'getLearningAims'
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function getLearningAimsRequest($per_page = '100', $page = '1')
  {
    if ($per_page !== null && $per_page > 1500) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getLearningAims, must be smaller than or equal to 1500.');
    }
    if ($per_page !== null && $per_page < 1) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getLearningAims, must be bigger than or equal to 1.');
    }

    if ($page !== null && $page < 1) {
      throw new \InvalidArgumentException('invalid value for "$page" when calling AssemblyApi.getLearningAims, must be bigger than or equal to 1.');
    }


    $resourcePath = '/school/learning_aims';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($per_page !== null) {
      $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
    }
    // query params
    if ($page !== null) {
      $queryParams['page'] = ObjectSerializer::toQueryValue($page);
    }


    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation getLeftStaffMembers
   *
   * List Left Staff Members
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  bool $teachers_only Filter to staff who are teachers (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $qualifications Include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\StaffMember[]
   */
  public function getLeftStaffMembers($if_modified_since = null, $teachers_only = null, $addresses = null, $demographics = null, $qualifications = null, $per_page = '100', $page = '1')
  {
    list($response) = $this->getLeftStaffMembersWithHttpInfo($if_modified_since, $teachers_only, $addresses, $demographics, $qualifications, $per_page, $page);
    return $response;
  }

  /**
   * Operation getLeftStaffMembersWithHttpInfo
   *
   * List Left Staff Members
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  bool $teachers_only Filter to staff who are teachers (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $qualifications Include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\StaffMember[], HTTP status code, HTTP response headers (array of strings)
   */
  public function getLeftStaffMembersWithHttpInfo($if_modified_since = null, $teachers_only = null, $addresses = null, $demographics = null, $qualifications = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\StaffMember[]';
    $request = $this->getLeftStaffMembersRequest($if_modified_since, $teachers_only, $addresses, $demographics, $qualifications, $per_page, $page);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StaffMember[]',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation getLeftStaffMembersAsync
   *
   * List Left Staff Members
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  bool $teachers_only Filter to staff who are teachers (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $qualifications Include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getLeftStaffMembersAsync($if_modified_since = null, $teachers_only = null, $addresses = null, $demographics = null, $qualifications = null, $per_page = '100', $page = '1')
  {
    return $this->getLeftStaffMembersAsyncWithHttpInfo($if_modified_since, $teachers_only, $addresses, $demographics, $qualifications, $per_page, $page)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation getLeftStaffMembersAsyncWithHttpInfo
   *
   * List Left Staff Members
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  bool $teachers_only Filter to staff who are teachers (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $qualifications Include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getLeftStaffMembersAsyncWithHttpInfo($if_modified_since = null, $teachers_only = null, $addresses = null, $demographics = null, $qualifications = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\StaffMember[]';
    $request = $this->getLeftStaffMembersRequest($if_modified_since, $teachers_only, $addresses, $demographics, $qualifications, $per_page, $page);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'getLeftStaffMembers'
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  bool $teachers_only Filter to staff who are teachers (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $qualifications Include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function getLeftStaffMembersRequest($if_modified_since = null, $teachers_only = null, $addresses = null, $demographics = null, $qualifications = null, $per_page = '100', $page = '1')
  {
    if ($per_page !== null && $per_page > 1500) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getLeftStaffMembers, must be smaller than or equal to 1500.');
    }
    if ($per_page !== null && $per_page < 1) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getLeftStaffMembers, must be bigger than or equal to 1.');
    }

    if ($page !== null && $page < 1) {
      throw new \InvalidArgumentException('invalid value for "$page" when calling AssemblyApi.getLeftStaffMembers, must be bigger than or equal to 1.');
    }


    $resourcePath = '/staff_members/left';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($teachers_only !== null) {
      $queryParams['teachers_only'] = ObjectSerializer::toQueryValue($teachers_only);
    }
    // query params
    if ($addresses !== null) {
      $queryParams['addresses'] = ObjectSerializer::toQueryValue($addresses);
    }
    // query params
    if ($demographics !== null) {
      $queryParams['demographics'] = ObjectSerializer::toQueryValue($demographics);
    }
    // query params
    if ($qualifications !== null) {
      $queryParams['qualifications'] = ObjectSerializer::toQueryValue($qualifications);
    }
    // query params
    if ($per_page !== null) {
      $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
    }
    // query params
    if ($page !== null) {
      $queryParams['page'] = ObjectSerializer::toQueryValue($page);
    }
    // header params
    if ($if_modified_since !== null) {
      $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
    }


    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation getLeftStudents
   *
   * List Left Students
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\Student[]
   */
  public function getLeftStudents($if_modified_since = null, $per_page = '100', $page = '1')
  {
    list($response) = $this->getLeftStudentsWithHttpInfo($if_modified_since, $per_page, $page);
    return $response;
  }

  /**
   * Operation getLeftStudentsWithHttpInfo
   *
   * List Left Students
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\Student[], HTTP status code, HTTP response headers (array of strings)
   */
  public function getLeftStudentsWithHttpInfo($if_modified_since = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\Student[]';
    $request = $this->getLeftStudentsRequest($if_modified_since, $per_page, $page);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\Student[]',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation getLeftStudentsAsync
   *
   * List Left Students
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getLeftStudentsAsync($if_modified_since = null, $per_page = '100', $page = '1')
  {
    return $this->getLeftStudentsAsyncWithHttpInfo($if_modified_since, $per_page, $page)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation getLeftStudentsAsyncWithHttpInfo
   *
   * List Left Students
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getLeftStudentsAsyncWithHttpInfo($if_modified_since = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\Student[]';
    $request = $this->getLeftStudentsRequest($if_modified_since, $per_page, $page);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'getLeftStudents'
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function getLeftStudentsRequest($if_modified_since = null, $per_page = '100', $page = '1')
  {
    if ($per_page !== null && $per_page > 1500) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getLeftStudents, must be smaller than or equal to 1500.');
    }
    if ($per_page !== null && $per_page < 1) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getLeftStudents, must be bigger than or equal to 1.');
    }

    if ($page !== null && $page < 1) {
      throw new \InvalidArgumentException('invalid value for "$page" when calling AssemblyApi.getLeftStudents, must be bigger than or equal to 1.');
    }


    $resourcePath = '/students/left';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($per_page !== null) {
      $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
    }
    // query params
    if ($page !== null) {
      $queryParams['page'] = ObjectSerializer::toQueryValue($page);
    }
    // header params
    if ($if_modified_since !== null) {
      $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
    }


    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation getLessons
   *
   * List Lessons For a Room
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  \DateTime $start_date The start date of the period to filter by (optional)
   * @param  \DateTime $end_date The end date of the period to filter by (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\Lesson[]
   */
  public function getLessons($id, $if_modified_since = null, $date = null, $start_date = null, $end_date = null, $per_page = '100', $page = '1')
  {
    list($response) = $this->getLessonsWithHttpInfo($id, $if_modified_since, $date, $start_date, $end_date, $per_page, $page);
    return $response;
  }

  /**
   * Operation getLessonsWithHttpInfo
   *
   * List Lessons For a Room
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  \DateTime $start_date The start date of the period to filter by (optional)
   * @param  \DateTime $end_date The end date of the period to filter by (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\Lesson[], HTTP status code, HTTP response headers (array of strings)
   */
  public function getLessonsWithHttpInfo($id, $if_modified_since = null, $date = null, $start_date = null, $end_date = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\Lesson[]';
    $request = $this->getLessonsRequest($id, $if_modified_since, $date, $start_date, $end_date, $per_page, $page);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\Lesson[]',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation getLessonsAsync
   *
   * List Lessons For a Room
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  \DateTime $start_date The start date of the period to filter by (optional)
   * @param  \DateTime $end_date The end date of the period to filter by (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getLessonsAsync($id, $if_modified_since = null, $date = null, $start_date = null, $end_date = null, $per_page = '100', $page = '1')
  {
    return $this->getLessonsAsyncWithHttpInfo($id, $if_modified_since, $date, $start_date, $end_date, $per_page, $page)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation getLessonsAsyncWithHttpInfo
   *
   * List Lessons For a Room
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  \DateTime $start_date The start date of the period to filter by (optional)
   * @param  \DateTime $end_date The end date of the period to filter by (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getLessonsAsyncWithHttpInfo($id, $if_modified_since = null, $date = null, $start_date = null, $end_date = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\Lesson[]';
    $request = $this->getLessonsRequest($id, $if_modified_since, $date, $start_date, $end_date, $per_page, $page);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'getLessons'
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  \DateTime $start_date The start date of the period to filter by (optional)
   * @param  \DateTime $end_date The end date of the period to filter by (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function getLessonsRequest($id, $if_modified_since = null, $date = null, $start_date = null, $end_date = null, $per_page = '100', $page = '1')
  {
    // verify the required parameter 'id' is set
    if ($id === null || (is_array($id) && count($id) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $id when calling getLessons'
      );
    }
    if ($per_page !== null && $per_page > 1500) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getLessons, must be smaller than or equal to 1500.');
    }
    if ($per_page !== null && $per_page < 1) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getLessons, must be bigger than or equal to 1.');
    }

    if ($page !== null && $page < 1) {
      throw new \InvalidArgumentException('invalid value for "$page" when calling AssemblyApi.getLessons, must be bigger than or equal to 1.');
    }


    $resourcePath = '/rooms/{id}/lessons';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($date !== null) {
      $queryParams['date'] = ObjectSerializer::toQueryValue($date);
    }
    // query params
    if ($start_date !== null) {
      $queryParams['start_date'] = ObjectSerializer::toQueryValue($start_date);
    }
    // query params
    if ($end_date !== null) {
      $queryParams['end_date'] = ObjectSerializer::toQueryValue($end_date);
    }
    // query params
    if ($per_page !== null) {
      $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
    }
    // query params
    if ($page !== null) {
      $queryParams['page'] = ObjectSerializer::toQueryValue($page);
    }
    // header params
    if ($if_modified_since !== null) {
      $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
    }

    // path params
    if ($id !== null) {
      $resourcePath = str_replace(
        '{' . 'id' . '}',
        ObjectSerializer::toPathValue($id),
        $resourcePath
      );
    }

    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation getMedicalConditions
   *
   * List Medical Conditions
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\MedicalCondition[]
   */
  public function getMedicalConditions($per_page = '100', $page = '1')
  {
    list($response) = $this->getMedicalConditionsWithHttpInfo($per_page, $page);
    return $response;
  }

  /**
   * Operation getMedicalConditionsWithHttpInfo
   *
   * List Medical Conditions
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\MedicalCondition[], HTTP status code, HTTP response headers (array of strings)
   */
  public function getMedicalConditionsWithHttpInfo($per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\MedicalCondition[]';
    $request = $this->getMedicalConditionsRequest($per_page, $page);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\MedicalCondition[]',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation getMedicalConditionsAsync
   *
   * List Medical Conditions
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getMedicalConditionsAsync($per_page = '100', $page = '1')
  {
    return $this->getMedicalConditionsAsyncWithHttpInfo($per_page, $page)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation getMedicalConditionsAsyncWithHttpInfo
   *
   * List Medical Conditions
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getMedicalConditionsAsyncWithHttpInfo($per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\MedicalCondition[]';
    $request = $this->getMedicalConditionsRequest($per_page, $page);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'getMedicalConditions'
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function getMedicalConditionsRequest($per_page = '100', $page = '1')
  {
    if ($per_page !== null && $per_page > 1500) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getMedicalConditions, must be smaller than or equal to 1500.');
    }
    if ($per_page !== null && $per_page < 1) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getMedicalConditions, must be bigger than or equal to 1.');
    }

    if ($page !== null && $page < 1) {
      throw new \InvalidArgumentException('invalid value for "$page" when calling AssemblyApi.getMedicalConditions, must be bigger than or equal to 1.');
    }


    $resourcePath = '/school/medical_conditions';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($per_page !== null) {
      $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
    }
    // query params
    if ($page !== null) {
      $queryParams['page'] = ObjectSerializer::toQueryValue($page);
    }


    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation getRegistrationGroupStudents
   *
   * List Students for Registration Group
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  int $year_code Filter by school year (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $contacts Include contacts data (optional)
   * @param  bool $sen_needs Include SEN needs data (optional)
   * @param  bool $emails Include email addresses (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $care Include student care data (you must also supply the demographics parameter) (optional)
   * @param  bool $ever_in_care Include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
   * @param  bool $languages Include student language data (optional)
   * @param  bool $photo Include student photo data (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\Student[]
   */
  public function getRegistrationGroupStudents($id, $if_modified_since = null, $date = null, $year_code = null, $demographics = null, $contacts = null, $sen_needs = null, $emails = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null, $per_page = '100', $page = '1')
  {
    list($response) = $this->getRegistrationGroupStudentsWithHttpInfo($id, $if_modified_since, $date, $year_code, $demographics, $contacts, $sen_needs, $emails, $addresses, $care, $ever_in_care, $languages, $photo, $per_page, $page);
    return $response;
  }

  /**
   * Operation getRegistrationGroupStudentsWithHttpInfo
   *
   * List Students for Registration Group
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  int $year_code Filter by school year (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $contacts Include contacts data (optional)
   * @param  bool $sen_needs Include SEN needs data (optional)
   * @param  bool $emails Include email addresses (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $care Include student care data (you must also supply the demographics parameter) (optional)
   * @param  bool $ever_in_care Include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
   * @param  bool $languages Include student language data (optional)
   * @param  bool $photo Include student photo data (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\Student[], HTTP status code, HTTP response headers (array of strings)
   */
  public function getRegistrationGroupStudentsWithHttpInfo($id, $if_modified_since = null, $date = null, $year_code = null, $demographics = null, $contacts = null, $sen_needs = null, $emails = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\Student[]';
    $request = $this->getRegistrationGroupStudentsRequest($id, $if_modified_since, $date, $year_code, $demographics, $contacts, $sen_needs, $emails, $addresses, $care, $ever_in_care, $languages, $photo, $per_page, $page);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\Student[]',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation getRegistrationGroupStudentsAsync
   *
   * List Students for Registration Group
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  int $year_code Filter by school year (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $contacts Include contacts data (optional)
   * @param  bool $sen_needs Include SEN needs data (optional)
   * @param  bool $emails Include email addresses (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $care Include student care data (you must also supply the demographics parameter) (optional)
   * @param  bool $ever_in_care Include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
   * @param  bool $languages Include student language data (optional)
   * @param  bool $photo Include student photo data (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getRegistrationGroupStudentsAsync($id, $if_modified_since = null, $date = null, $year_code = null, $demographics = null, $contacts = null, $sen_needs = null, $emails = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null, $per_page = '100', $page = '1')
  {
    return $this->getRegistrationGroupStudentsAsyncWithHttpInfo($id, $if_modified_since, $date, $year_code, $demographics, $contacts, $sen_needs, $emails, $addresses, $care, $ever_in_care, $languages, $photo, $per_page, $page)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation getRegistrationGroupStudentsAsyncWithHttpInfo
   *
   * List Students for Registration Group
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  int $year_code Filter by school year (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $contacts Include contacts data (optional)
   * @param  bool $sen_needs Include SEN needs data (optional)
   * @param  bool $emails Include email addresses (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $care Include student care data (you must also supply the demographics parameter) (optional)
   * @param  bool $ever_in_care Include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
   * @param  bool $languages Include student language data (optional)
   * @param  bool $photo Include student photo data (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getRegistrationGroupStudentsAsyncWithHttpInfo($id, $if_modified_since = null, $date = null, $year_code = null, $demographics = null, $contacts = null, $sen_needs = null, $emails = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\Student[]';
    $request = $this->getRegistrationGroupStudentsRequest($id, $if_modified_since, $date, $year_code, $demographics, $contacts, $sen_needs, $emails, $addresses, $care, $ever_in_care, $languages, $photo, $per_page, $page);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'getRegistrationGroupStudents'
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  int $year_code Filter by school year (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $contacts Include contacts data (optional)
   * @param  bool $sen_needs Include SEN needs data (optional)
   * @param  bool $emails Include email addresses (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $care Include student care data (you must also supply the demographics parameter) (optional)
   * @param  bool $ever_in_care Include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
   * @param  bool $languages Include student language data (optional)
   * @param  bool $photo Include student photo data (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function getRegistrationGroupStudentsRequest($id, $if_modified_since = null, $date = null, $year_code = null, $demographics = null, $contacts = null, $sen_needs = null, $emails = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null, $per_page = '100', $page = '1')
  {
    // verify the required parameter 'id' is set
    if ($id === null || (is_array($id) && count($id) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $id when calling getRegistrationGroupStudents'
      );
    }
    if ($per_page !== null && $per_page > 1500) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getRegistrationGroupStudents, must be smaller than or equal to 1500.');
    }
    if ($per_page !== null && $per_page < 1) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getRegistrationGroupStudents, must be bigger than or equal to 1.');
    }

    if ($page !== null && $page < 1) {
      throw new \InvalidArgumentException('invalid value for "$page" when calling AssemblyApi.getRegistrationGroupStudents, must be bigger than or equal to 1.');
    }


    $resourcePath = '/registration_groups/{id}/students';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($date !== null) {
      $queryParams['date'] = ObjectSerializer::toQueryValue($date);
    }
    // query params
    if ($year_code !== null) {
      $queryParams['year_code'] = ObjectSerializer::toQueryValue($year_code);
    }
    // query params
    if ($demographics !== null) {
      $queryParams['demographics'] = ObjectSerializer::toQueryValue($demographics);
    }
    // query params
    if ($contacts !== null) {
      $queryParams['contacts'] = ObjectSerializer::toQueryValue($contacts);
    }
    // query params
    if ($sen_needs !== null) {
      $queryParams['sen_needs'] = ObjectSerializer::toQueryValue($sen_needs);
    }
    // query params
    if ($emails !== null) {
      $queryParams['emails'] = ObjectSerializer::toQueryValue($emails);
    }
    // query params
    if ($addresses !== null) {
      $queryParams['addresses'] = ObjectSerializer::toQueryValue($addresses);
    }
    // query params
    if ($care !== null) {
      $queryParams['care'] = ObjectSerializer::toQueryValue($care);
    }
    // query params
    if ($ever_in_care !== null) {
      $queryParams['ever_in_care'] = ObjectSerializer::toQueryValue($ever_in_care);
    }
    // query params
    if ($languages !== null) {
      $queryParams['languages'] = ObjectSerializer::toQueryValue($languages);
    }
    // query params
    if ($photo !== null) {
      $queryParams['photo'] = ObjectSerializer::toQueryValue($photo);
    }
    // query params
    if ($per_page !== null) {
      $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
    }
    // query params
    if ($page !== null) {
      $queryParams['page'] = ObjectSerializer::toQueryValue($page);
    }
    // header params
    if ($if_modified_since !== null) {
      $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
    }

    // path params
    if ($id !== null) {
      $resourcePath = str_replace(
        '{' . 'id' . '}',
        ObjectSerializer::toPathValue($id),
        $resourcePath
      );
    }

    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation getRegistrationGroups
   *
   * List Registration Groups
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $year_code Filter by school year (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  int $academic_year_id Include all groups and group memberships from the specified academic year (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\RegistrationGroup[]
   */
  public function getRegistrationGroups($if_modified_since = null, $year_code = null, $date = null, $academic_year_id = null, $per_page = '100', $page = '1')
  {
    list($response) = $this->getRegistrationGroupsWithHttpInfo($if_modified_since, $year_code, $date, $academic_year_id, $per_page, $page);
    return $response;
  }

  /**
   * Operation getRegistrationGroupsWithHttpInfo
   *
   * List Registration Groups
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $year_code Filter by school year (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  int $academic_year_id Include all groups and group memberships from the specified academic year (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\RegistrationGroup[], HTTP status code, HTTP response headers (array of strings)
   */
  public function getRegistrationGroupsWithHttpInfo($if_modified_since = null, $year_code = null, $date = null, $academic_year_id = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\RegistrationGroup[]';
    $request = $this->getRegistrationGroupsRequest($if_modified_since, $year_code, $date, $academic_year_id, $per_page, $page);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\RegistrationGroup[]',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation getRegistrationGroupsAsync
   *
   * List Registration Groups
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $year_code Filter by school year (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  int $academic_year_id Include all groups and group memberships from the specified academic year (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getRegistrationGroupsAsync($if_modified_since = null, $year_code = null, $date = null, $academic_year_id = null, $per_page = '100', $page = '1')
  {
    return $this->getRegistrationGroupsAsyncWithHttpInfo($if_modified_since, $year_code, $date, $academic_year_id, $per_page, $page)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation getRegistrationGroupsAsyncWithHttpInfo
   *
   * List Registration Groups
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $year_code Filter by school year (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  int $academic_year_id Include all groups and group memberships from the specified academic year (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getRegistrationGroupsAsyncWithHttpInfo($if_modified_since = null, $year_code = null, $date = null, $academic_year_id = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\RegistrationGroup[]';
    $request = $this->getRegistrationGroupsRequest($if_modified_since, $year_code, $date, $academic_year_id, $per_page, $page);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'getRegistrationGroups'
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $year_code Filter by school year (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  int $academic_year_id Include all groups and group memberships from the specified academic year (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function getRegistrationGroupsRequest($if_modified_since = null, $year_code = null, $date = null, $academic_year_id = null, $per_page = '100', $page = '1')
  {
    if ($per_page !== null && $per_page > 1500) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getRegistrationGroups, must be smaller than or equal to 1500.');
    }
    if ($per_page !== null && $per_page < 1) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getRegistrationGroups, must be bigger than or equal to 1.');
    }

    if ($page !== null && $page < 1) {
      throw new \InvalidArgumentException('invalid value for "$page" when calling AssemblyApi.getRegistrationGroups, must be bigger than or equal to 1.');
    }


    $resourcePath = '/registration_groups';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($year_code !== null) {
      $queryParams['year_code'] = ObjectSerializer::toQueryValue($year_code);
    }
    // query params
    if ($date !== null) {
      $queryParams['date'] = ObjectSerializer::toQueryValue($date);
    }
    // query params
    if ($academic_year_id !== null) {
      $queryParams['academic_year_id'] = ObjectSerializer::toQueryValue($academic_year_id);
    }
    // query params
    if ($per_page !== null) {
      $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
    }
    // query params
    if ($page !== null) {
      $queryParams['page'] = ObjectSerializer::toQueryValue($page);
    }
    // header params
    if ($if_modified_since !== null) {
      $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
    }


    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation getResults
   *
   * List Results
   *
   * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded) (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\Result[]
   */
  public function getResults($students, $if_modified_since = null, $per_page = '100', $page = '1')
  {
    list($response) = $this->getResultsWithHttpInfo($students, $if_modified_since, $per_page, $page);
    return $response;
  }

  /**
   * Operation getResultsWithHttpInfo
   *
   * List Results
   *
   * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded) (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\Result[], HTTP status code, HTTP response headers (array of strings)
   */
  public function getResultsWithHttpInfo($students, $if_modified_since = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\Result[]';
    $request = $this->getResultsRequest($students, $if_modified_since, $per_page, $page);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\Result[]',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation getResultsAsync
   *
   * List Results
   *
   * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded) (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getResultsAsync($students, $if_modified_since = null, $per_page = '100', $page = '1')
  {
    return $this->getResultsAsyncWithHttpInfo($students, $if_modified_since, $per_page, $page)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation getResultsAsyncWithHttpInfo
   *
   * List Results
   *
   * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded) (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getResultsAsyncWithHttpInfo($students, $if_modified_since = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\Result[]';
    $request = $this->getResultsRequest($students, $if_modified_since, $per_page, $page);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'getResults'
   *
   * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded) (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function getResultsRequest($students, $if_modified_since = null, $per_page = '100', $page = '1')
  {
    // verify the required parameter 'students' is set
    if ($students === null || (is_array($students) && count($students) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $students when calling getResults'
      );
    }
    if ($per_page !== null && $per_page > 1500) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getResults, must be smaller than or equal to 1500.');
    }
    if ($per_page !== null && $per_page < 1) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getResults, must be bigger than or equal to 1.');
    }

    if ($page !== null && $page < 1) {
      throw new \InvalidArgumentException('invalid value for "$page" when calling AssemblyApi.getResults, must be bigger than or equal to 1.');
    }


    $resourcePath = '/results';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if (is_array($students)) {
      $students = ObjectSerializer::serializeCollection($students, 'multi', true);
    }
    if ($students !== null) {
      $queryParams['students[]'] = ObjectSerializer::toQueryValue($students);
    }
    // query params
    if ($per_page !== null) {
      $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
    }
    // query params
    if ($page !== null) {
      $queryParams['page'] = ObjectSerializer::toQueryValue($page);
    }
    // header params
    if ($if_modified_since !== null) {
      $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
    }


    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation getRooms
   *
   * List Rooms
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\Room[]
   */
  public function getRooms($if_modified_since = null, $per_page = '100', $page = '1')
  {
    list($response) = $this->getRoomsWithHttpInfo($if_modified_since, $per_page, $page);
    return $response;
  }

  /**
   * Operation getRoomsWithHttpInfo
   *
   * List Rooms
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\Room[], HTTP status code, HTTP response headers (array of strings)
   */
  public function getRoomsWithHttpInfo($if_modified_since = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\Room[]';
    $request = $this->getRoomsRequest($if_modified_since, $per_page, $page);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\Room[]',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation getRoomsAsync
   *
   * List Rooms
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getRoomsAsync($if_modified_since = null, $per_page = '100', $page = '1')
  {
    return $this->getRoomsAsyncWithHttpInfo($if_modified_since, $per_page, $page)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation getRoomsAsyncWithHttpInfo
   *
   * List Rooms
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getRoomsAsyncWithHttpInfo($if_modified_since = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\Room[]';
    $request = $this->getRoomsRequest($if_modified_since, $per_page, $page);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'getRooms'
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function getRoomsRequest($if_modified_since = null, $per_page = '100', $page = '1')
  {
    if ($per_page !== null && $per_page > 1500) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getRooms, must be smaller than or equal to 1500.');
    }
    if ($per_page !== null && $per_page < 1) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getRooms, must be bigger than or equal to 1.');
    }

    if ($page !== null && $page < 1) {
      throw new \InvalidArgumentException('invalid value for "$page" when calling AssemblyApi.getRooms, must be bigger than or equal to 1.');
    }


    $resourcePath = '/rooms';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($per_page !== null) {
      $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
    }
    // query params
    if ($page !== null) {
      $queryParams['page'] = ObjectSerializer::toQueryValue($page);
    }
    // header params
    if ($if_modified_since !== null) {
      $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
    }


    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation getStaffAbsences
   *
   * List Staff Absences
   *
   * @param  int $staff_member_id Filter to the specified staff member (optional)
   * @param  \DateTime $start_date The start date of the period to filter by (optional)
   * @param  \DateTime $end_date The end date of the period to filter by (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\StaffAbsence[]
   */
  public function getStaffAbsences($staff_member_id = null, $start_date = null, $end_date = null, $per_page = '100', $page = '1')
  {
    list($response) = $this->getStaffAbsencesWithHttpInfo($staff_member_id, $start_date, $end_date, $per_page, $page);
    return $response;
  }

  /**
   * Operation getStaffAbsencesWithHttpInfo
   *
   * List Staff Absences
   *
   * @param  int $staff_member_id Filter to the specified staff member (optional)
   * @param  \DateTime $start_date The start date of the period to filter by (optional)
   * @param  \DateTime $end_date The end date of the period to filter by (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\StaffAbsence[], HTTP status code, HTTP response headers (array of strings)
   */
  public function getStaffAbsencesWithHttpInfo($staff_member_id = null, $start_date = null, $end_date = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\StaffAbsence[]';
    $request = $this->getStaffAbsencesRequest($staff_member_id, $start_date, $end_date, $per_page, $page);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StaffAbsence[]',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation getStaffAbsencesAsync
   *
   * List Staff Absences
   *
   * @param  int $staff_member_id Filter to the specified staff member (optional)
   * @param  \DateTime $start_date The start date of the period to filter by (optional)
   * @param  \DateTime $end_date The end date of the period to filter by (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getStaffAbsencesAsync($staff_member_id = null, $start_date = null, $end_date = null, $per_page = '100', $page = '1')
  {
    return $this->getStaffAbsencesAsyncWithHttpInfo($staff_member_id, $start_date, $end_date, $per_page, $page)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation getStaffAbsencesAsyncWithHttpInfo
   *
   * List Staff Absences
   *
   * @param  int $staff_member_id Filter to the specified staff member (optional)
   * @param  \DateTime $start_date The start date of the period to filter by (optional)
   * @param  \DateTime $end_date The end date of the period to filter by (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getStaffAbsencesAsyncWithHttpInfo($staff_member_id = null, $start_date = null, $end_date = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\StaffAbsence[]';
    $request = $this->getStaffAbsencesRequest($staff_member_id, $start_date, $end_date, $per_page, $page);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'getStaffAbsences'
   *
   * @param  int $staff_member_id Filter to the specified staff member (optional)
   * @param  \DateTime $start_date The start date of the period to filter by (optional)
   * @param  \DateTime $end_date The end date of the period to filter by (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function getStaffAbsencesRequest($staff_member_id = null, $start_date = null, $end_date = null, $per_page = '100', $page = '1')
  {
    if ($per_page !== null && $per_page > 1500) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getStaffAbsences, must be smaller than or equal to 1500.');
    }
    if ($per_page !== null && $per_page < 1) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getStaffAbsences, must be bigger than or equal to 1.');
    }

    if ($page !== null && $page < 1) {
      throw new \InvalidArgumentException('invalid value for "$page" when calling AssemblyApi.getStaffAbsences, must be bigger than or equal to 1.');
    }


    $resourcePath = '/staff_absences';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($staff_member_id !== null) {
      $queryParams['staff_member_id'] = ObjectSerializer::toQueryValue($staff_member_id);
    }
    // query params
    if ($start_date !== null) {
      $queryParams['start_date'] = ObjectSerializer::toQueryValue($start_date);
    }
    // query params
    if ($end_date !== null) {
      $queryParams['end_date'] = ObjectSerializer::toQueryValue($end_date);
    }
    // query params
    if ($per_page !== null) {
      $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
    }
    // query params
    if ($page !== null) {
      $queryParams['page'] = ObjectSerializer::toQueryValue($page);
    }


    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation getStaffContracts
   *
   * List Staff Contracts
   *
   * @param  int $staff_member_id Filter to the specified staff member (optional)
   * @param  string $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  bool $roles Include role information along with a staff contract (optional)
   * @param  bool $salaries Include salaries information along with a staff contract (requires &#x60;staff_members.salaries&#x60; scope for full information - only the &#x60;hours_per_week&#x60;, &#x60;fte&#x60; and &#x60;weeks_per_year&#x60; fields are shown without it) (optional)
   * @param  bool $allowances Include allowances information along with a staff contract (requires &#x60;staff_members.salaries&#x60; scope) (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\StaffContract[]
   */
  public function getStaffContracts($staff_member_id = null, $date = null, $roles = null, $salaries = null, $allowances = null, $per_page = '100', $page = '1')
  {
    list($response) = $this->getStaffContractsWithHttpInfo($staff_member_id, $date, $roles, $salaries, $allowances, $per_page, $page);
    return $response;
  }

  /**
   * Operation getStaffContractsWithHttpInfo
   *
   * List Staff Contracts
   *
   * @param  int $staff_member_id Filter to the specified staff member (optional)
   * @param  string $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  bool $roles Include role information along with a staff contract (optional)
   * @param  bool $salaries Include salaries information along with a staff contract (requires &#x60;staff_members.salaries&#x60; scope for full information - only the &#x60;hours_per_week&#x60;, &#x60;fte&#x60; and &#x60;weeks_per_year&#x60; fields are shown without it) (optional)
   * @param  bool $allowances Include allowances information along with a staff contract (requires &#x60;staff_members.salaries&#x60; scope) (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\StaffContract[], HTTP status code, HTTP response headers (array of strings)
   */
  public function getStaffContractsWithHttpInfo($staff_member_id = null, $date = null, $roles = null, $salaries = null, $allowances = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\StaffContract[]';
    $request = $this->getStaffContractsRequest($staff_member_id, $date, $roles, $salaries, $allowances, $per_page, $page);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StaffContract[]',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation getStaffContractsAsync
   *
   * List Staff Contracts
   *
   * @param  int $staff_member_id Filter to the specified staff member (optional)
   * @param  string $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  bool $roles Include role information along with a staff contract (optional)
   * @param  bool $salaries Include salaries information along with a staff contract (requires &#x60;staff_members.salaries&#x60; scope for full information - only the &#x60;hours_per_week&#x60;, &#x60;fte&#x60; and &#x60;weeks_per_year&#x60; fields are shown without it) (optional)
   * @param  bool $allowances Include allowances information along with a staff contract (requires &#x60;staff_members.salaries&#x60; scope) (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getStaffContractsAsync($staff_member_id = null, $date = null, $roles = null, $salaries = null, $allowances = null, $per_page = '100', $page = '1')
  {
    return $this->getStaffContractsAsyncWithHttpInfo($staff_member_id, $date, $roles, $salaries, $allowances, $per_page, $page)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation getStaffContractsAsyncWithHttpInfo
   *
   * List Staff Contracts
   *
   * @param  int $staff_member_id Filter to the specified staff member (optional)
   * @param  string $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  bool $roles Include role information along with a staff contract (optional)
   * @param  bool $salaries Include salaries information along with a staff contract (requires &#x60;staff_members.salaries&#x60; scope for full information - only the &#x60;hours_per_week&#x60;, &#x60;fte&#x60; and &#x60;weeks_per_year&#x60; fields are shown without it) (optional)
   * @param  bool $allowances Include allowances information along with a staff contract (requires &#x60;staff_members.salaries&#x60; scope) (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getStaffContractsAsyncWithHttpInfo($staff_member_id = null, $date = null, $roles = null, $salaries = null, $allowances = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\StaffContract[]';
    $request = $this->getStaffContractsRequest($staff_member_id, $date, $roles, $salaries, $allowances, $per_page, $page);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'getStaffContracts'
   *
   * @param  int $staff_member_id Filter to the specified staff member (optional)
   * @param  string $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  bool $roles Include role information along with a staff contract (optional)
   * @param  bool $salaries Include salaries information along with a staff contract (requires &#x60;staff_members.salaries&#x60; scope for full information - only the &#x60;hours_per_week&#x60;, &#x60;fte&#x60; and &#x60;weeks_per_year&#x60; fields are shown without it) (optional)
   * @param  bool $allowances Include allowances information along with a staff contract (requires &#x60;staff_members.salaries&#x60; scope) (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function getStaffContractsRequest($staff_member_id = null, $date = null, $roles = null, $salaries = null, $allowances = null, $per_page = '100', $page = '1')
  {
    if ($per_page !== null && $per_page > 1500) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getStaffContracts, must be smaller than or equal to 1500.');
    }
    if ($per_page !== null && $per_page < 1) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getStaffContracts, must be bigger than or equal to 1.');
    }

    if ($page !== null && $page < 1) {
      throw new \InvalidArgumentException('invalid value for "$page" when calling AssemblyApi.getStaffContracts, must be bigger than or equal to 1.');
    }


    $resourcePath = '/staff_contracts';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($staff_member_id !== null) {
      $queryParams['staff_member_id'] = ObjectSerializer::toQueryValue($staff_member_id);
    }
    // query params
    if ($date !== null) {
      $queryParams['date'] = ObjectSerializer::toQueryValue($date);
    }
    // query params
    if ($roles !== null) {
      $queryParams['roles'] = ObjectSerializer::toQueryValue($roles);
    }
    // query params
    if ($salaries !== null) {
      $queryParams['salaries'] = ObjectSerializer::toQueryValue($salaries);
    }
    // query params
    if ($allowances !== null) {
      $queryParams['allowances'] = ObjectSerializer::toQueryValue($allowances);
    }
    // query params
    if ($per_page !== null) {
      $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
    }
    // query params
    if ($page !== null) {
      $queryParams['page'] = ObjectSerializer::toQueryValue($page);
    }


    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation getStaffMembers
   *
   * List Staff Members
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  bool $teachers_only Filter to staff who are teachers (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $qualifications Include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\StaffMember[]
   */
  public function getStaffMembers($if_modified_since = null, $teachers_only = null, $addresses = null, $demographics = null, $qualifications = null, $per_page = '100', $page = '1')
  {
    list($response) = $this->getStaffMembersWithHttpInfo($if_modified_since, $teachers_only, $addresses, $demographics, $qualifications, $per_page, $page);
    return $response;
  }

  /**
   * Operation getStaffMembersWithHttpInfo
   *
   * List Staff Members
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  bool $teachers_only Filter to staff who are teachers (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $qualifications Include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\StaffMember[], HTTP status code, HTTP response headers (array of strings)
   */
  public function getStaffMembersWithHttpInfo($if_modified_since = null, $teachers_only = null, $addresses = null, $demographics = null, $qualifications = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\StaffMember[]';
    $request = $this->getStaffMembersRequest($if_modified_since, $teachers_only, $addresses, $demographics, $qualifications, $per_page, $page);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StaffMember[]',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation getStaffMembersAsync
   *
   * List Staff Members
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  bool $teachers_only Filter to staff who are teachers (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $qualifications Include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getStaffMembersAsync($if_modified_since = null, $teachers_only = null, $addresses = null, $demographics = null, $qualifications = null, $per_page = '100', $page = '1')
  {
    return $this->getStaffMembersAsyncWithHttpInfo($if_modified_since, $teachers_only, $addresses, $demographics, $qualifications, $per_page, $page)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation getStaffMembersAsyncWithHttpInfo
   *
   * List Staff Members
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  bool $teachers_only Filter to staff who are teachers (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $qualifications Include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getStaffMembersAsyncWithHttpInfo($if_modified_since = null, $teachers_only = null, $addresses = null, $demographics = null, $qualifications = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\StaffMember[]';
    $request = $this->getStaffMembersRequest($if_modified_since, $teachers_only, $addresses, $demographics, $qualifications, $per_page, $page);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'getStaffMembers'
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  bool $teachers_only Filter to staff who are teachers (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $qualifications Include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function getStaffMembersRequest($if_modified_since = null, $teachers_only = null, $addresses = null, $demographics = null, $qualifications = null, $per_page = '100', $page = '1')
  {
    if ($per_page !== null && $per_page > 1500) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getStaffMembers, must be smaller than or equal to 1500.');
    }
    if ($per_page !== null && $per_page < 1) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getStaffMembers, must be bigger than or equal to 1.');
    }

    if ($page !== null && $page < 1) {
      throw new \InvalidArgumentException('invalid value for "$page" when calling AssemblyApi.getStaffMembers, must be bigger than or equal to 1.');
    }


    $resourcePath = '/staff_members';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($teachers_only !== null) {
      $queryParams['teachers_only'] = ObjectSerializer::toQueryValue($teachers_only);
    }
    // query params
    if ($addresses !== null) {
      $queryParams['addresses'] = ObjectSerializer::toQueryValue($addresses);
    }
    // query params
    if ($demographics !== null) {
      $queryParams['demographics'] = ObjectSerializer::toQueryValue($demographics);
    }
    // query params
    if ($qualifications !== null) {
      $queryParams['qualifications'] = ObjectSerializer::toQueryValue($qualifications);
    }
    // query params
    if ($per_page !== null) {
      $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
    }
    // query params
    if ($page !== null) {
      $queryParams['page'] = ObjectSerializer::toQueryValue($page);
    }
    // header params
    if ($if_modified_since !== null) {
      $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
    }


    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation getStudents
   *
   * List Students
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded) (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  string $year_code Filter by school year (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $contacts Include contacts data (optional)
   * @param  bool $sen_needs Include SEN needs data (optional)
   * @param  bool $emails Include email addresses (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $care Include student care data (you must also supply the demographics parameter) (optional)
   * @param  bool $ever_in_care Include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
   * @param  bool $languages Include student language data (optional)
   * @param  bool $photo Include student photo data (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\Student[]
   */
  public function getStudents($if_modified_since = null, $students = null, $date = null, $year_code = null, $demographics = null, $contacts = null, $sen_needs = null, $emails = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null, $per_page = '100', $page = '1')
  {
    list($response) = $this->getStudentsWithHttpInfo($if_modified_since, $students, $date, $year_code, $demographics, $contacts, $sen_needs, $emails, $addresses, $care, $ever_in_care, $languages, $photo, $per_page, $page);
    return $response;
  }

  /**
   * Operation getStudentsWithHttpInfo
   *
   * List Students
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded) (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  string $year_code Filter by school year (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $contacts Include contacts data (optional)
   * @param  bool $sen_needs Include SEN needs data (optional)
   * @param  bool $emails Include email addresses (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $care Include student care data (you must also supply the demographics parameter) (optional)
   * @param  bool $ever_in_care Include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
   * @param  bool $languages Include student language data (optional)
   * @param  bool $photo Include student photo data (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\Student[], HTTP status code, HTTP response headers (array of strings)
   */
  public function getStudentsWithHttpInfo($if_modified_since = null, $students = null, $date = null, $year_code = null, $demographics = null, $contacts = null, $sen_needs = null, $emails = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\Student[]';
    $request = $this->getStudentsRequest($if_modified_since, $students, $date, $year_code, $demographics, $contacts, $sen_needs, $emails, $addresses, $care, $ever_in_care, $languages, $photo, $per_page, $page);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\Student[]',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation getStudentsAsync
   *
   * List Students
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded) (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  string $year_code Filter by school year (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $contacts Include contacts data (optional)
   * @param  bool $sen_needs Include SEN needs data (optional)
   * @param  bool $emails Include email addresses (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $care Include student care data (you must also supply the demographics parameter) (optional)
   * @param  bool $ever_in_care Include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
   * @param  bool $languages Include student language data (optional)
   * @param  bool $photo Include student photo data (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getStudentsAsync($if_modified_since = null, $students = null, $date = null, $year_code = null, $demographics = null, $contacts = null, $sen_needs = null, $emails = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null, $per_page = '100', $page = '1')
  {
    return $this->getStudentsAsyncWithHttpInfo($if_modified_since, $students, $date, $year_code, $demographics, $contacts, $sen_needs, $emails, $addresses, $care, $ever_in_care, $languages, $photo, $per_page, $page)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation getStudentsAsyncWithHttpInfo
   *
   * List Students
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded) (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  string $year_code Filter by school year (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $contacts Include contacts data (optional)
   * @param  bool $sen_needs Include SEN needs data (optional)
   * @param  bool $emails Include email addresses (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $care Include student care data (you must also supply the demographics parameter) (optional)
   * @param  bool $ever_in_care Include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
   * @param  bool $languages Include student language data (optional)
   * @param  bool $photo Include student photo data (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getStudentsAsyncWithHttpInfo($if_modified_since = null, $students = null, $date = null, $year_code = null, $demographics = null, $contacts = null, $sen_needs = null, $emails = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\Student[]';
    $request = $this->getStudentsRequest($if_modified_since, $students, $date, $year_code, $demographics, $contacts, $sen_needs, $emails, $addresses, $care, $ever_in_care, $languages, $photo, $per_page, $page);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'getStudents'
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded) (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  string $year_code Filter by school year (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $contacts Include contacts data (optional)
   * @param  bool $sen_needs Include SEN needs data (optional)
   * @param  bool $emails Include email addresses (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $care Include student care data (you must also supply the demographics parameter) (optional)
   * @param  bool $ever_in_care Include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
   * @param  bool $languages Include student language data (optional)
   * @param  bool $photo Include student photo data (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function getStudentsRequest($if_modified_since = null, $students = null, $date = null, $year_code = null, $demographics = null, $contacts = null, $sen_needs = null, $emails = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null, $per_page = '100', $page = '1')
  {
    if ($per_page !== null && $per_page > 1500) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getStudents, must be smaller than or equal to 1500.');
    }
    if ($per_page !== null && $per_page < 1) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getStudents, must be bigger than or equal to 1.');
    }

    if ($page !== null && $page < 1) {
      throw new \InvalidArgumentException('invalid value for "$page" when calling AssemblyApi.getStudents, must be bigger than or equal to 1.');
    }


    $resourcePath = '/students';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if (is_array($students)) {
      $students = ObjectSerializer::serializeCollection($students, 'multi', true);
    }
    if ($students !== null) {
      $queryParams['students[]'] = ObjectSerializer::toQueryValue($students);
    }
    // query params
    if ($date !== null) {
      $queryParams['date'] = ObjectSerializer::toQueryValue($date);
    }
    // query params
    if ($year_code !== null) {
      $queryParams['year_code'] = ObjectSerializer::toQueryValue($year_code);
    }
    // query params
    if ($demographics !== null) {
      $queryParams['demographics'] = ObjectSerializer::toQueryValue($demographics);
    }
    // query params
    if ($contacts !== null) {
      $queryParams['contacts'] = ObjectSerializer::toQueryValue($contacts);
    }
    // query params
    if ($sen_needs !== null) {
      $queryParams['sen_needs'] = ObjectSerializer::toQueryValue($sen_needs);
    }
    // query params
    if ($emails !== null) {
      $queryParams['emails'] = ObjectSerializer::toQueryValue($emails);
    }
    // query params
    if ($addresses !== null) {
      $queryParams['addresses'] = ObjectSerializer::toQueryValue($addresses);
    }
    // query params
    if ($care !== null) {
      $queryParams['care'] = ObjectSerializer::toQueryValue($care);
    }
    // query params
    if ($ever_in_care !== null) {
      $queryParams['ever_in_care'] = ObjectSerializer::toQueryValue($ever_in_care);
    }
    // query params
    if ($languages !== null) {
      $queryParams['languages'] = ObjectSerializer::toQueryValue($languages);
    }
    // query params
    if ($photo !== null) {
      $queryParams['photo'] = ObjectSerializer::toQueryValue($photo);
    }
    // query params
    if ($per_page !== null) {
      $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
    }
    // query params
    if ($page !== null) {
      $queryParams['page'] = ObjectSerializer::toQueryValue($page);
    }
    // header params
    if ($if_modified_since !== null) {
      $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
    }


    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation getSubjects
   *
   * List Subjects
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\Subject[]
   */
  public function getSubjects($per_page = '100', $page = '1')
  {
    list($response) = $this->getSubjectsWithHttpInfo($per_page, $page);
    return $response;
  }

  /**
   * Operation getSubjectsWithHttpInfo
   *
   * List Subjects
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\Subject[], HTTP status code, HTTP response headers (array of strings)
   */
  public function getSubjectsWithHttpInfo($per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\Subject[]';
    $request = $this->getSubjectsRequest($per_page, $page);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\Subject[]',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation getSubjectsAsync
   *
   * List Subjects
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getSubjectsAsync($per_page = '100', $page = '1')
  {
    return $this->getSubjectsAsyncWithHttpInfo($per_page, $page)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation getSubjectsAsyncWithHttpInfo
   *
   * List Subjects
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getSubjectsAsyncWithHttpInfo($per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\Subject[]';
    $request = $this->getSubjectsRequest($per_page, $page);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'getSubjects'
   *
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function getSubjectsRequest($per_page = '100', $page = '1')
  {
    if ($per_page !== null && $per_page > 1500) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getSubjects, must be smaller than or equal to 1500.');
    }
    if ($per_page !== null && $per_page < 1) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getSubjects, must be bigger than or equal to 1.');
    }

    if ($page !== null && $page < 1) {
      throw new \InvalidArgumentException('invalid value for "$page" when calling AssemblyApi.getSubjects, must be bigger than or equal to 1.');
    }


    $resourcePath = '/subjects';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($per_page !== null) {
      $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
    }
    // query params
    if ($page !== null) {
      $queryParams['page'] = ObjectSerializer::toQueryValue($page);
    }


    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation getTeachingGroupStudents
   *
   * List Students for Teaching Group
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $academic_year_id Include all groups and group memberships from the specified academic year (optional)
   * @param  string $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  int $year_code Filter by school year (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $contacts Include contacts data (optional)
   * @param  bool $sen_needs Include SEN needs data (optional)
   * @param  bool $emails Include email addresses (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $care Include student care data (you must also supply the demographics parameter) (optional)
   * @param  bool $ever_in_care Include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
   * @param  bool $languages Include student language data (optional)
   * @param  bool $photo Include student photo data (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\Student[]
   */
  public function getTeachingGroupStudents($id, $if_modified_since = null, $academic_year_id = null, $date = null, $year_code = null, $demographics = null, $contacts = null, $sen_needs = null, $emails = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null, $per_page = '100', $page = '1')
  {
    list($response) = $this->getTeachingGroupStudentsWithHttpInfo($id, $if_modified_since, $academic_year_id, $date, $year_code, $demographics, $contacts, $sen_needs, $emails, $addresses, $care, $ever_in_care, $languages, $photo, $per_page, $page);
    return $response;
  }

  /**
   * Operation getTeachingGroupStudentsWithHttpInfo
   *
   * List Students for Teaching Group
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $academic_year_id Include all groups and group memberships from the specified academic year (optional)
   * @param  string $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  int $year_code Filter by school year (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $contacts Include contacts data (optional)
   * @param  bool $sen_needs Include SEN needs data (optional)
   * @param  bool $emails Include email addresses (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $care Include student care data (you must also supply the demographics parameter) (optional)
   * @param  bool $ever_in_care Include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
   * @param  bool $languages Include student language data (optional)
   * @param  bool $photo Include student photo data (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\Student[], HTTP status code, HTTP response headers (array of strings)
   */
  public function getTeachingGroupStudentsWithHttpInfo($id, $if_modified_since = null, $academic_year_id = null, $date = null, $year_code = null, $demographics = null, $contacts = null, $sen_needs = null, $emails = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\Student[]';
    $request = $this->getTeachingGroupStudentsRequest($id, $if_modified_since, $academic_year_id, $date, $year_code, $demographics, $contacts, $sen_needs, $emails, $addresses, $care, $ever_in_care, $languages, $photo, $per_page, $page);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\Student[]',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation getTeachingGroupStudentsAsync
   *
   * List Students for Teaching Group
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $academic_year_id Include all groups and group memberships from the specified academic year (optional)
   * @param  string $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  int $year_code Filter by school year (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $contacts Include contacts data (optional)
   * @param  bool $sen_needs Include SEN needs data (optional)
   * @param  bool $emails Include email addresses (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $care Include student care data (you must also supply the demographics parameter) (optional)
   * @param  bool $ever_in_care Include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
   * @param  bool $languages Include student language data (optional)
   * @param  bool $photo Include student photo data (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getTeachingGroupStudentsAsync($id, $if_modified_since = null, $academic_year_id = null, $date = null, $year_code = null, $demographics = null, $contacts = null, $sen_needs = null, $emails = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null, $per_page = '100', $page = '1')
  {
    return $this->getTeachingGroupStudentsAsyncWithHttpInfo($id, $if_modified_since, $academic_year_id, $date, $year_code, $demographics, $contacts, $sen_needs, $emails, $addresses, $care, $ever_in_care, $languages, $photo, $per_page, $page)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation getTeachingGroupStudentsAsyncWithHttpInfo
   *
   * List Students for Teaching Group
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $academic_year_id Include all groups and group memberships from the specified academic year (optional)
   * @param  string $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  int $year_code Filter by school year (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $contacts Include contacts data (optional)
   * @param  bool $sen_needs Include SEN needs data (optional)
   * @param  bool $emails Include email addresses (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $care Include student care data (you must also supply the demographics parameter) (optional)
   * @param  bool $ever_in_care Include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
   * @param  bool $languages Include student language data (optional)
   * @param  bool $photo Include student photo data (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getTeachingGroupStudentsAsyncWithHttpInfo($id, $if_modified_since = null, $academic_year_id = null, $date = null, $year_code = null, $demographics = null, $contacts = null, $sen_needs = null, $emails = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\Student[]';
    $request = $this->getTeachingGroupStudentsRequest($id, $if_modified_since, $academic_year_id, $date, $year_code, $demographics, $contacts, $sen_needs, $emails, $addresses, $care, $ever_in_care, $languages, $photo, $per_page, $page);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'getTeachingGroupStudents'
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $academic_year_id Include all groups and group memberships from the specified academic year (optional)
   * @param  string $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  int $year_code Filter by school year (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $contacts Include contacts data (optional)
   * @param  bool $sen_needs Include SEN needs data (optional)
   * @param  bool $emails Include email addresses (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $care Include student care data (you must also supply the demographics parameter) (optional)
   * @param  bool $ever_in_care Include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
   * @param  bool $languages Include student language data (optional)
   * @param  bool $photo Include student photo data (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function getTeachingGroupStudentsRequest($id, $if_modified_since = null, $academic_year_id = null, $date = null, $year_code = null, $demographics = null, $contacts = null, $sen_needs = null, $emails = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null, $per_page = '100', $page = '1')
  {
    // verify the required parameter 'id' is set
    if ($id === null || (is_array($id) && count($id) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $id when calling getTeachingGroupStudents'
      );
    }
    if ($per_page !== null && $per_page > 1500) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getTeachingGroupStudents, must be smaller than or equal to 1500.');
    }
    if ($per_page !== null && $per_page < 1) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getTeachingGroupStudents, must be bigger than or equal to 1.');
    }

    if ($page !== null && $page < 1) {
      throw new \InvalidArgumentException('invalid value for "$page" when calling AssemblyApi.getTeachingGroupStudents, must be bigger than or equal to 1.');
    }


    $resourcePath = '/teaching_groups/{id}/students';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($academic_year_id !== null) {
      $queryParams['academic_year_id'] = ObjectSerializer::toQueryValue($academic_year_id);
    }
    // query params
    if ($date !== null) {
      $queryParams['date'] = ObjectSerializer::toQueryValue($date);
    }
    // query params
    if ($year_code !== null) {
      $queryParams['year_code'] = ObjectSerializer::toQueryValue($year_code);
    }
    // query params
    if ($demographics !== null) {
      $queryParams['demographics'] = ObjectSerializer::toQueryValue($demographics);
    }
    // query params
    if ($contacts !== null) {
      $queryParams['contacts'] = ObjectSerializer::toQueryValue($contacts);
    }
    // query params
    if ($sen_needs !== null) {
      $queryParams['sen_needs'] = ObjectSerializer::toQueryValue($sen_needs);
    }
    // query params
    if ($emails !== null) {
      $queryParams['emails'] = ObjectSerializer::toQueryValue($emails);
    }
    // query params
    if ($addresses !== null) {
      $queryParams['addresses'] = ObjectSerializer::toQueryValue($addresses);
    }
    // query params
    if ($care !== null) {
      $queryParams['care'] = ObjectSerializer::toQueryValue($care);
    }
    // query params
    if ($ever_in_care !== null) {
      $queryParams['ever_in_care'] = ObjectSerializer::toQueryValue($ever_in_care);
    }
    // query params
    if ($languages !== null) {
      $queryParams['languages'] = ObjectSerializer::toQueryValue($languages);
    }
    // query params
    if ($photo !== null) {
      $queryParams['photo'] = ObjectSerializer::toQueryValue($photo);
    }
    // query params
    if ($per_page !== null) {
      $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
    }
    // query params
    if ($page !== null) {
      $queryParams['page'] = ObjectSerializer::toQueryValue($page);
    }
    // header params
    if ($if_modified_since !== null) {
      $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
    }

    // path params
    if ($id !== null) {
      $resourcePath = str_replace(
        '{' . 'id' . '}',
        ObjectSerializer::toPathValue($id),
        $resourcePath
      );
    }

    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation getTeachingGroups
   *
   * List Teaching Groups
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  string $subject_code Filter by subject (optional)
   * @param  int $year_code Filter by school year (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  int $academic_year_id Include all groups and group memberships from the specified academic year (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\TeachingGroup[]
   */
  public function getTeachingGroups($if_modified_since = null, $subject_code = null, $year_code = null, $date = null, $academic_year_id = null, $per_page = '100', $page = '1')
  {
    list($response) = $this->getTeachingGroupsWithHttpInfo($if_modified_since, $subject_code, $year_code, $date, $academic_year_id, $per_page, $page);
    return $response;
  }

  /**
   * Operation getTeachingGroupsWithHttpInfo
   *
   * List Teaching Groups
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  string $subject_code Filter by subject (optional)
   * @param  int $year_code Filter by school year (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  int $academic_year_id Include all groups and group memberships from the specified academic year (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\TeachingGroup[], HTTP status code, HTTP response headers (array of strings)
   */
  public function getTeachingGroupsWithHttpInfo($if_modified_since = null, $subject_code = null, $year_code = null, $date = null, $academic_year_id = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\TeachingGroup[]';
    $request = $this->getTeachingGroupsRequest($if_modified_since, $subject_code, $year_code, $date, $academic_year_id, $per_page, $page);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\TeachingGroup[]',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation getTeachingGroupsAsync
   *
   * List Teaching Groups
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  string $subject_code Filter by subject (optional)
   * @param  int $year_code Filter by school year (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  int $academic_year_id Include all groups and group memberships from the specified academic year (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getTeachingGroupsAsync($if_modified_since = null, $subject_code = null, $year_code = null, $date = null, $academic_year_id = null, $per_page = '100', $page = '1')
  {
    return $this->getTeachingGroupsAsyncWithHttpInfo($if_modified_since, $subject_code, $year_code, $date, $academic_year_id, $per_page, $page)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation getTeachingGroupsAsyncWithHttpInfo
   *
   * List Teaching Groups
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  string $subject_code Filter by subject (optional)
   * @param  int $year_code Filter by school year (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  int $academic_year_id Include all groups and group memberships from the specified academic year (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getTeachingGroupsAsyncWithHttpInfo($if_modified_since = null, $subject_code = null, $year_code = null, $date = null, $academic_year_id = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\TeachingGroup[]';
    $request = $this->getTeachingGroupsRequest($if_modified_since, $subject_code, $year_code, $date, $academic_year_id, $per_page, $page);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'getTeachingGroups'
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  string $subject_code Filter by subject (optional)
   * @param  int $year_code Filter by school year (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  int $academic_year_id Include all groups and group memberships from the specified academic year (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function getTeachingGroupsRequest($if_modified_since = null, $subject_code = null, $year_code = null, $date = null, $academic_year_id = null, $per_page = '100', $page = '1')
  {
    if ($per_page !== null && $per_page > 1500) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getTeachingGroups, must be smaller than or equal to 1500.');
    }
    if ($per_page !== null && $per_page < 1) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getTeachingGroups, must be bigger than or equal to 1.');
    }

    if ($page !== null && $page < 1) {
      throw new \InvalidArgumentException('invalid value for "$page" when calling AssemblyApi.getTeachingGroups, must be bigger than or equal to 1.');
    }


    $resourcePath = '/teaching_groups';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($subject_code !== null) {
      $queryParams['subject_code'] = ObjectSerializer::toQueryValue($subject_code);
    }
    // query params
    if ($year_code !== null) {
      $queryParams['year_code'] = ObjectSerializer::toQueryValue($year_code);
    }
    // query params
    if ($date !== null) {
      $queryParams['date'] = ObjectSerializer::toQueryValue($date);
    }
    // query params
    if ($academic_year_id !== null) {
      $queryParams['academic_year_id'] = ObjectSerializer::toQueryValue($academic_year_id);
    }
    // query params
    if ($per_page !== null) {
      $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
    }
    // query params
    if ($page !== null) {
      $queryParams['page'] = ObjectSerializer::toQueryValue($page);
    }
    // header params
    if ($if_modified_since !== null) {
      $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
    }


    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation getTimetables
   *
   * List Timetables
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\Timetable[]
   */
  public function getTimetables($if_modified_since = null, $per_page = '100', $page = '1')
  {
    list($response) = $this->getTimetablesWithHttpInfo($if_modified_since, $per_page, $page);
    return $response;
  }

  /**
   * Operation getTimetablesWithHttpInfo
   *
   * List Timetables
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\Timetable[], HTTP status code, HTTP response headers (array of strings)
   */
  public function getTimetablesWithHttpInfo($if_modified_since = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\Timetable[]';
    $request = $this->getTimetablesRequest($if_modified_since, $per_page, $page);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\Timetable[]',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation getTimetablesAsync
   *
   * List Timetables
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getTimetablesAsync($if_modified_since = null, $per_page = '100', $page = '1')
  {
    return $this->getTimetablesAsyncWithHttpInfo($if_modified_since, $per_page, $page)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation getTimetablesAsyncWithHttpInfo
   *
   * List Timetables
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getTimetablesAsyncWithHttpInfo($if_modified_since = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\Timetable[]';
    $request = $this->getTimetablesRequest($if_modified_since, $per_page, $page);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'getTimetables'
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function getTimetablesRequest($if_modified_since = null, $per_page = '100', $page = '1')
  {
    if ($per_page !== null && $per_page > 1500) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getTimetables, must be smaller than or equal to 1500.');
    }
    if ($per_page !== null && $per_page < 1) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getTimetables, must be bigger than or equal to 1.');
    }

    if ($page !== null && $page < 1) {
      throw new \InvalidArgumentException('invalid value for "$page" when calling AssemblyApi.getTimetables, must be bigger than or equal to 1.');
    }


    $resourcePath = '/timetables';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($per_page !== null) {
      $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
    }
    // query params
    if ($page !== null) {
      $queryParams['page'] = ObjectSerializer::toQueryValue($page);
    }
    // header params
    if ($if_modified_since !== null) {
      $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
    }


    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation getYearGroupStudents
   *
   * List Students for Year Group
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $contacts Include contacts data (optional)
   * @param  bool $sen_needs Include SEN needs data (optional)
   * @param  bool $emails Include email addresses (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $care Include student care data (you must also supply the demographics parameter) (optional)
   * @param  bool $ever_in_care Include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
   * @param  bool $languages Include student language data (optional)
   * @param  bool $photo Include student photo data (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\Student[]
   */
  public function getYearGroupStudents($id, $if_modified_since = null, $date = null, $demographics = null, $contacts = null, $sen_needs = null, $emails = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null, $per_page = '100', $page = '1')
  {
    list($response) = $this->getYearGroupStudentsWithHttpInfo($id, $if_modified_since, $date, $demographics, $contacts, $sen_needs, $emails, $addresses, $care, $ever_in_care, $languages, $photo, $per_page, $page);
    return $response;
  }

  /**
   * Operation getYearGroupStudentsWithHttpInfo
   *
   * List Students for Year Group
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $contacts Include contacts data (optional)
   * @param  bool $sen_needs Include SEN needs data (optional)
   * @param  bool $emails Include email addresses (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $care Include student care data (you must also supply the demographics parameter) (optional)
   * @param  bool $ever_in_care Include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
   * @param  bool $languages Include student language data (optional)
   * @param  bool $photo Include student photo data (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\Student[], HTTP status code, HTTP response headers (array of strings)
   */
  public function getYearGroupStudentsWithHttpInfo($id, $if_modified_since = null, $date = null, $demographics = null, $contacts = null, $sen_needs = null, $emails = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\Student[]';
    $request = $this->getYearGroupStudentsRequest($id, $if_modified_since, $date, $demographics, $contacts, $sen_needs, $emails, $addresses, $care, $ever_in_care, $languages, $photo, $per_page, $page);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\Student[]',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation getYearGroupStudentsAsync
   *
   * List Students for Year Group
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $contacts Include contacts data (optional)
   * @param  bool $sen_needs Include SEN needs data (optional)
   * @param  bool $emails Include email addresses (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $care Include student care data (you must also supply the demographics parameter) (optional)
   * @param  bool $ever_in_care Include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
   * @param  bool $languages Include student language data (optional)
   * @param  bool $photo Include student photo data (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getYearGroupStudentsAsync($id, $if_modified_since = null, $date = null, $demographics = null, $contacts = null, $sen_needs = null, $emails = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null, $per_page = '100', $page = '1')
  {
    return $this->getYearGroupStudentsAsyncWithHttpInfo($id, $if_modified_since, $date, $demographics, $contacts, $sen_needs, $emails, $addresses, $care, $ever_in_care, $languages, $photo, $per_page, $page)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation getYearGroupStudentsAsyncWithHttpInfo
   *
   * List Students for Year Group
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $contacts Include contacts data (optional)
   * @param  bool $sen_needs Include SEN needs data (optional)
   * @param  bool $emails Include email addresses (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $care Include student care data (you must also supply the demographics parameter) (optional)
   * @param  bool $ever_in_care Include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
   * @param  bool $languages Include student language data (optional)
   * @param  bool $photo Include student photo data (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getYearGroupStudentsAsyncWithHttpInfo($id, $if_modified_since = null, $date = null, $demographics = null, $contacts = null, $sen_needs = null, $emails = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\Student[]';
    $request = $this->getYearGroupStudentsRequest($id, $if_modified_since, $date, $demographics, $contacts, $sen_needs, $emails, $addresses, $care, $ever_in_care, $languages, $photo, $per_page, $page);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'getYearGroupStudents'
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  bool $demographics Include demographics data (optional)
   * @param  bool $contacts Include contacts data (optional)
   * @param  bool $sen_needs Include SEN needs data (optional)
   * @param  bool $emails Include email addresses (optional)
   * @param  bool $addresses Include address data (optional)
   * @param  bool $care Include student care data (you must also supply the demographics parameter) (optional)
   * @param  bool $ever_in_care Include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
   * @param  bool $languages Include student language data (optional)
   * @param  bool $photo Include student photo data (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function getYearGroupStudentsRequest($id, $if_modified_since = null, $date = null, $demographics = null, $contacts = null, $sen_needs = null, $emails = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null, $per_page = '100', $page = '1')
  {
    // verify the required parameter 'id' is set
    if ($id === null || (is_array($id) && count($id) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $id when calling getYearGroupStudents'
      );
    }
    if ($per_page !== null && $per_page > 1500) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getYearGroupStudents, must be smaller than or equal to 1500.');
    }
    if ($per_page !== null && $per_page < 1) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getYearGroupStudents, must be bigger than or equal to 1.');
    }

    if ($page !== null && $page < 1) {
      throw new \InvalidArgumentException('invalid value for "$page" when calling AssemblyApi.getYearGroupStudents, must be bigger than or equal to 1.');
    }


    $resourcePath = '/year_groups/{id}/students';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($date !== null) {
      $queryParams['date'] = ObjectSerializer::toQueryValue($date);
    }
    // query params
    if ($demographics !== null) {
      $queryParams['demographics'] = ObjectSerializer::toQueryValue($demographics);
    }
    // query params
    if ($contacts !== null) {
      $queryParams['contacts'] = ObjectSerializer::toQueryValue($contacts);
    }
    // query params
    if ($sen_needs !== null) {
      $queryParams['sen_needs'] = ObjectSerializer::toQueryValue($sen_needs);
    }
    // query params
    if ($emails !== null) {
      $queryParams['emails'] = ObjectSerializer::toQueryValue($emails);
    }
    // query params
    if ($addresses !== null) {
      $queryParams['addresses'] = ObjectSerializer::toQueryValue($addresses);
    }
    // query params
    if ($care !== null) {
      $queryParams['care'] = ObjectSerializer::toQueryValue($care);
    }
    // query params
    if ($ever_in_care !== null) {
      $queryParams['ever_in_care'] = ObjectSerializer::toQueryValue($ever_in_care);
    }
    // query params
    if ($languages !== null) {
      $queryParams['languages'] = ObjectSerializer::toQueryValue($languages);
    }
    // query params
    if ($photo !== null) {
      $queryParams['photo'] = ObjectSerializer::toQueryValue($photo);
    }
    // query params
    if ($per_page !== null) {
      $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
    }
    // query params
    if ($page !== null) {
      $queryParams['page'] = ObjectSerializer::toQueryValue($page);
    }
    // header params
    if ($if_modified_since !== null) {
      $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
    }

    // path params
    if ($id !== null) {
      $resourcePath = str_replace(
        '{' . 'id' . '}',
        ObjectSerializer::toPathValue($id),
        $resourcePath
      );
    }

    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation getYearGroups
   *
   * List Year Groups
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  string $year_code Filter by school year (optional)
   * @param  int $academic_year_id Include all groups and group memberships from the specified academic year (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\YearGroup[]
   */
  public function getYearGroups($if_modified_since = null, $date = null, $year_code = null, $academic_year_id = null, $per_page = '100', $page = '1')
  {
    list($response) = $this->getYearGroupsWithHttpInfo($if_modified_since, $date, $year_code, $academic_year_id, $per_page, $page);
    return $response;
  }

  /**
   * Operation getYearGroupsWithHttpInfo
   *
   * List Year Groups
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  string $year_code Filter by school year (optional)
   * @param  int $academic_year_id Include all groups and group memberships from the specified academic year (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\YearGroup[], HTTP status code, HTTP response headers (array of strings)
   */
  public function getYearGroupsWithHttpInfo($if_modified_since = null, $date = null, $year_code = null, $academic_year_id = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\YearGroup[]';
    $request = $this->getYearGroupsRequest($if_modified_since, $date, $year_code, $academic_year_id, $per_page, $page);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\YearGroup[]',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation getYearGroupsAsync
   *
   * List Year Groups
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  string $year_code Filter by school year (optional)
   * @param  int $academic_year_id Include all groups and group memberships from the specified academic year (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getYearGroupsAsync($if_modified_since = null, $date = null, $year_code = null, $academic_year_id = null, $per_page = '100', $page = '1')
  {
    return $this->getYearGroupsAsyncWithHttpInfo($if_modified_since, $date, $year_code, $academic_year_id, $per_page, $page)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation getYearGroupsAsyncWithHttpInfo
   *
   * List Year Groups
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  string $year_code Filter by school year (optional)
   * @param  int $academic_year_id Include all groups and group memberships from the specified academic year (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function getYearGroupsAsyncWithHttpInfo($if_modified_since = null, $date = null, $year_code = null, $academic_year_id = null, $per_page = '100', $page = '1')
  {
    $returnType = '\Assembly\Client\Model\YearGroup[]';
    $request = $this->getYearGroupsRequest($if_modified_since, $date, $year_code, $academic_year_id, $per_page, $page);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'getYearGroups'
   *
   * @param  \DateTime $if_modified_since Filter results since it was last fetched (see [Conditional Requests](/#section/Concepts/Conditional-Requests)) (optional)
   * @param  \DateTime $date Filter by a specific date, used as the &#x60;start_date&#x60; and &#x60;end_date&#x60; where applicable (optional)
   * @param  string $year_code Filter by school year (optional)
   * @param  int $academic_year_id Include all groups and group memberships from the specified academic year (optional)
   * @param  int $per_page Number of results to return (optional, default to 100)
   * @param  int $page Page number to return (optional, default to 1)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function getYearGroupsRequest($if_modified_since = null, $date = null, $year_code = null, $academic_year_id = null, $per_page = '100', $page = '1')
  {
    if ($per_page !== null && $per_page > 1500) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getYearGroups, must be smaller than or equal to 1500.');
    }
    if ($per_page !== null && $per_page < 1) {
      throw new \InvalidArgumentException('invalid value for "$per_page" when calling AssemblyApi.getYearGroups, must be bigger than or equal to 1.');
    }

    if ($page !== null && $page < 1) {
      throw new \InvalidArgumentException('invalid value for "$page" when calling AssemblyApi.getYearGroups, must be bigger than or equal to 1.');
    }


    $resourcePath = '/year_groups';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;

    // query params
    if ($date !== null) {
      $queryParams['date'] = ObjectSerializer::toQueryValue($date);
    }
    // query params
    if ($year_code !== null) {
      $queryParams['year_code'] = ObjectSerializer::toQueryValue($year_code);
    }
    // query params
    if ($academic_year_id !== null) {
      $queryParams['academic_year_id'] = ObjectSerializer::toQueryValue($academic_year_id);
    }
    // query params
    if ($per_page !== null) {
      $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
    }
    // query params
    if ($page !== null) {
      $queryParams['page'] = ObjectSerializer::toQueryValue($page);
    }
    // header params
    if ($if_modified_since !== null) {
      $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
    }


    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation status
   *
   * View School Sync Status
   *
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\SchoolStatus
   */
  public function status()
  {
    list($response) = $this->statusWithHttpInfo();
    return $response;
  }

  /**
   * Operation statusWithHttpInfo
   *
   * View School Sync Status
   *
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\SchoolStatus, HTTP status code, HTTP response headers (array of strings)
   */
  public function statusWithHttpInfo()
  {
    $returnType = '\Assembly\Client\Model\SchoolStatus';
    $request = $this->statusRequest();

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\SchoolStatus',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation statusAsync
   *
   * View School Sync Status
   *
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function statusAsync()
  {
    return $this->statusAsyncWithHttpInfo()
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation statusAsyncWithHttpInfo
   *
   * View School Sync Status
   *
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function statusAsyncWithHttpInfo()
  {
    $returnType = '\Assembly\Client\Model\SchoolStatus';
    $request = $this->statusRequest();

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'status'
   *
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function statusRequest()
  {

    $resourcePath = '/school/status';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;



    // body params
    $_tempBody = null;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        []
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation updateResults
   *
   * Update a Single Result
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \Assembly\Client\Model\ResultUpdate $result_update result_update (optional)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \Assembly\Client\Model\Result
   */
  public function updateResults($id, $result_update = null)
  {
    list($response) = $this->updateResultsWithHttpInfo($id, $result_update);
    return $response;
  }

  /**
   * Operation updateResultsWithHttpInfo
   *
   * Update a Single Result
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \Assembly\Client\Model\ResultUpdate $result_update (optional)
   *
   * @throws \Assembly\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return array of \Assembly\Client\Model\Result, HTTP status code, HTTP response headers (array of strings)
   */
  public function updateResultsWithHttpInfo($id, $result_update = null)
  {
    $returnType = '\Assembly\Client\Model\Result';
    $request = $this->updateResultsRequest($id, $result_update);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      } catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : null,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

    } catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\Result',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 401:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 406:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 429:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\Assembly\Client\Model\StandardError',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation updateResultsAsync
   *
   * Update a Single Result
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \Assembly\Client\Model\ResultUpdate $result_update (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function updateResultsAsync($id, $result_update = null)
  {
    return $this->updateResultsAsyncWithHttpInfo($id, $result_update)
      ->then(
        function ($response) {
          return $response[0];
        }
      );
  }

  /**
   * Operation updateResultsAsyncWithHttpInfo
   *
   * Update a Single Result
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \Assembly\Client\Model\ResultUpdate $result_update (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function updateResultsAsyncWithHttpInfo($id, $result_update = null)
  {
    $returnType = '\Assembly\Client\Model\Result';
    $request = $this->updateResultsRequest($id, $result_update);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
        function ($response) use ($returnType) {
          $responseBody = $response->getBody();
          if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
              $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        },
        function ($exception) {
          $response = $exception->getResponse();
          $statusCode = $response->getStatusCode();
          throw new ApiException(
            sprintf(
              '[%d] Error connecting to the API (%s)',
              $statusCode,
              $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
          );
        }
      );
  }

  /**
   * Create request for operation 'updateResults'
   *
   * @param  int $id Internal identifier of the entity (required)
   * @param  \Assembly\Client\Model\ResultUpdate $result_update (optional)
   *
   * @throws \InvalidArgumentException
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function updateResultsRequest($id, $result_update = null)
  {
    // verify the required parameter 'id' is set
    if ($id === null || (is_array($id) && count($id) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $id when calling updateResults'
      );
    }

    $resourcePath = '/results/{id}';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = false;


    // path params
    if ($id !== null) {
      $resourcePath = str_replace(
        '{' . 'id' . '}',
        ObjectSerializer::toPathValue($id),
        $resourcePath
      );
    }

    // body params
    $_tempBody = null;
    if (isset($result_update)) {
      $_tempBody = $result_update;
    }

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/vnd.assembly+json; version=1.1']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/vnd.assembly+json; version=1.1'],
        ['application/json']
      );
    }

    // for model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // for HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // for HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // this endpoint requires OAuth (access token)
    if ($this->config->getAccessToken() !== null) {
      $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'PATCH',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Create http client option
   *
   * @throws \RuntimeException on file opening failure
   * @return array of http client options
   */
  protected function createHttpClientOption()
  {
    $options = [];
    if ($this->config->getDebug()) {
      $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
      if (!$options[RequestOptions::DEBUG]) {
        throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
      }
    }

    return $options;
  }
}
