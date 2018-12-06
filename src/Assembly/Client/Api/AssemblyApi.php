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
 * Assembly Developer API
 *
 * The Assembly API is built around the REST and a collection of open standards/protocols in order to comply with as many consumers as possible.
 *
 * API version: 1.1.0
 * Contact: help@assembly.education
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
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
     * Operation findAcademicYear
     *
     * View an Academic Year
     *
     * @param  int $id id of the entity (required)
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
     * @param  int $id id of the entity (required)
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
            }
            throw $e;
        }
    }

    /**
     * Operation findAcademicYearAsync
     *
     * View an Academic Year
     *
     * @param  int $id id of the entity (required)
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
     * @param  int $id id of the entity (required)
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
     * @param  int $id id of the entity (required)
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * @param  int $id id of the entity (required)
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
     * @param  int $id id of the entity (required)
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
            }
            throw $e;
        }
    }

    /**
     * Operation findAssessmentAsync
     *
     * View an Assessment
     *
     * @param  int $id id of the entity (required)
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
     * @param  int $id id of the entity (required)
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
     * @param  int $id id of the entity (required)
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * @param  int $id id of the entity (required)
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
     * @param  int $id id of the entity (required)
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
            }
            throw $e;
        }
    }

    /**
     * Operation findAssessmentGradeSetAsync
     *
     * View Grade Set for an Assessment
     *
     * @param  int $id id of the entity (required)
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
     * @param  int $id id of the entity (required)
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
     * @param  int $id id of the entity (required)
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * @param  int $id id of the entity (required)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\AssessmentPoint
     */
    public function findAssessmentPoint($id)
    {
        list($response) = $this->findAssessmentPointWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation findAssessmentPointWithHttpInfo
     *
     * View an Assessment Point
     *
     * @param  int $id id of the entity (required)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\AssessmentPoint, HTTP status code, HTTP response headers (array of strings)
     */
    public function findAssessmentPointWithHttpInfo($id)
    {
        $returnType = '\Assembly\Client\Model\AssessmentPoint';
        $request = $this->findAssessmentPointRequest($id);

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
            }
            throw $e;
        }
    }

    /**
     * Operation findAssessmentPointAsync
     *
     * View an Assessment Point
     *
     * @param  int $id id of the entity (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findAssessmentPointAsync($id)
    {
        return $this->findAssessmentPointAsyncWithHttpInfo($id)
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
     * @param  int $id id of the entity (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findAssessmentPointAsyncWithHttpInfo($id)
    {
        $returnType = '\Assembly\Client\Model\AssessmentPoint';
        $request = $this->findAssessmentPointRequest($id);

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
     * @param  int $id id of the entity (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function findAssessmentPointRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling findAssessmentPoint'
            );
        }

        $resourcePath = '/assessment_points/{id}';
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * @param  int $id id of the entity (required)
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
     * @param  int $id id of the entity (required)
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
            }
            throw $e;
        }
    }

    /**
     * Operation findFacetAsync
     *
     * View a Facet
     *
     * @param  int $id id of the entity (required)
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
     * @param  int $id id of the entity (required)
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
     * @param  int $id id of the entity (required)
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * @param  int $id id of the entity (required)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\RegistrationGroup
     */
    public function findRegistrationGroup($id, $date = null, $academic_year_id = null)
    {
        list($response) = $this->findRegistrationGroupWithHttpInfo($id, $date, $academic_year_id);
        return $response;
    }

    /**
     * Operation findRegistrationGroupWithHttpInfo
     *
     * View a Registration Group
     *
     * @param  int $id id of the entity (required)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\RegistrationGroup, HTTP status code, HTTP response headers (array of strings)
     */
    public function findRegistrationGroupWithHttpInfo($id, $date = null, $academic_year_id = null)
    {
        $returnType = '\Assembly\Client\Model\RegistrationGroup';
        $request = $this->findRegistrationGroupRequest($id, $date, $academic_year_id);

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
            }
            throw $e;
        }
    }

    /**
     * Operation findRegistrationGroupAsync
     *
     * View a Registration Group
     *
     * @param  int $id id of the entity (required)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findRegistrationGroupAsync($id, $date = null, $academic_year_id = null)
    {
        return $this->findRegistrationGroupAsyncWithHttpInfo($id, $date, $academic_year_id)
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
     * @param  int $id id of the entity (required)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findRegistrationGroupAsyncWithHttpInfo($id, $date = null, $academic_year_id = null)
    {
        $returnType = '\Assembly\Client\Model\RegistrationGroup';
        $request = $this->findRegistrationGroupRequest($id, $date, $academic_year_id);

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
     * @param  int $id id of the entity (required)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function findRegistrationGroupRequest($id, $date = null, $academic_year_id = null)
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
        // query params
        if ($academic_year_id !== null) {
            $queryParams['academic_year_id'] = ObjectSerializer::toQueryValue($academic_year_id);
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * @param  int $id id of the entity (required)
     * @param  bool $demographics include demographics data (optional)
     * @param  bool $qualifications include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\StaffMember
     */
    public function findStaffMember($id, $demographics = null, $qualifications = null)
    {
        list($response) = $this->findStaffMemberWithHttpInfo($id, $demographics, $qualifications);
        return $response;
    }

    /**
     * Operation findStaffMemberWithHttpInfo
     *
     * View a Staff Member
     *
     * @param  int $id id of the entity (required)
     * @param  bool $demographics include demographics data (optional)
     * @param  bool $qualifications include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\StaffMember, HTTP status code, HTTP response headers (array of strings)
     */
    public function findStaffMemberWithHttpInfo($id, $demographics = null, $qualifications = null)
    {
        $returnType = '\Assembly\Client\Model\StaffMember';
        $request = $this->findStaffMemberRequest($id, $demographics, $qualifications);

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
            }
            throw $e;
        }
    }

    /**
     * Operation findStaffMemberAsync
     *
     * View a Staff Member
     *
     * @param  int $id id of the entity (required)
     * @param  bool $demographics include demographics data (optional)
     * @param  bool $qualifications include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findStaffMemberAsync($id, $demographics = null, $qualifications = null)
    {
        return $this->findStaffMemberAsyncWithHttpInfo($id, $demographics, $qualifications)
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
     * @param  int $id id of the entity (required)
     * @param  bool $demographics include demographics data (optional)
     * @param  bool $qualifications include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findStaffMemberAsyncWithHttpInfo($id, $demographics = null, $qualifications = null)
    {
        $returnType = '\Assembly\Client\Model\StaffMember';
        $request = $this->findStaffMemberRequest($id, $demographics, $qualifications);

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
     * @param  int $id id of the entity (required)
     * @param  bool $demographics include demographics data (optional)
     * @param  bool $qualifications include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function findStaffMemberRequest($id, $demographics = null, $qualifications = null)
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * @param  int $id id of the entity (required)
     * @param  bool $demographics include demographics data (optional)
     * @param  bool $contacts include contacts data (optional)
     * @param  bool $sen_needs include SEN needs data (optional)
     * @param  bool $addresses include student address data (optional)
     * @param  bool $care include student care data (you must also supply the demographics parameter) (optional)
     * @param  bool $ever_in_care include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
     * @param  bool $languages include student language data (optional)
     * @param  bool $photo include student photo data (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\Student
     */
    public function findStudent($id, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        list($response) = $this->findStudentWithHttpInfo($id, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo);
        return $response;
    }

    /**
     * Operation findStudentWithHttpInfo
     *
     * View a Student
     *
     * @param  int $id id of the entity (required)
     * @param  bool $demographics include demographics data (optional)
     * @param  bool $contacts include contacts data (optional)
     * @param  bool $sen_needs include SEN needs data (optional)
     * @param  bool $addresses include student address data (optional)
     * @param  bool $care include student care data (you must also supply the demographics parameter) (optional)
     * @param  bool $ever_in_care include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
     * @param  bool $languages include student language data (optional)
     * @param  bool $photo include student photo data (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\Student, HTTP status code, HTTP response headers (array of strings)
     */
    public function findStudentWithHttpInfo($id, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        $returnType = '\Assembly\Client\Model\Student';
        $request = $this->findStudentRequest($id, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo);

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
            }
            throw $e;
        }
    }

    /**
     * Operation findStudentAsync
     *
     * View a Student
     *
     * @param  int $id id of the entity (required)
     * @param  bool $demographics include demographics data (optional)
     * @param  bool $contacts include contacts data (optional)
     * @param  bool $sen_needs include SEN needs data (optional)
     * @param  bool $addresses include student address data (optional)
     * @param  bool $care include student care data (you must also supply the demographics parameter) (optional)
     * @param  bool $ever_in_care include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
     * @param  bool $languages include student language data (optional)
     * @param  bool $photo include student photo data (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findStudentAsync($id, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        return $this->findStudentAsyncWithHttpInfo($id, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo)
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
     * @param  int $id id of the entity (required)
     * @param  bool $demographics include demographics data (optional)
     * @param  bool $contacts include contacts data (optional)
     * @param  bool $sen_needs include SEN needs data (optional)
     * @param  bool $addresses include student address data (optional)
     * @param  bool $care include student care data (you must also supply the demographics parameter) (optional)
     * @param  bool $ever_in_care include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
     * @param  bool $languages include student language data (optional)
     * @param  bool $photo include student photo data (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findStudentAsyncWithHttpInfo($id, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        $returnType = '\Assembly\Client\Model\Student';
        $request = $this->findStudentRequest($id, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo);

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
     * @param  int $id id of the entity (required)
     * @param  bool $demographics include demographics data (optional)
     * @param  bool $contacts include contacts data (optional)
     * @param  bool $sen_needs include SEN needs data (optional)
     * @param  bool $addresses include student address data (optional)
     * @param  bool $care include student care data (you must also supply the demographics parameter) (optional)
     * @param  bool $ever_in_care include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
     * @param  bool $languages include student language data (optional)
     * @param  bool $photo include student photo data (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function findStudentRequest($id, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * @param  int $id id of the entity (required)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
     * @param  int $group_id a group_id to filter by (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\TeachingGroup
     */
    public function findTeachingGroup($id, $date = null, $academic_year_id = null, $group_id = null)
    {
        list($response) = $this->findTeachingGroupWithHttpInfo($id, $date, $academic_year_id, $group_id);
        return $response;
    }

    /**
     * Operation findTeachingGroupWithHttpInfo
     *
     * View a Teaching Group
     *
     * @param  int $id id of the entity (required)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
     * @param  int $group_id a group_id to filter by (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\TeachingGroup, HTTP status code, HTTP response headers (array of strings)
     */
    public function findTeachingGroupWithHttpInfo($id, $date = null, $academic_year_id = null, $group_id = null)
    {
        $returnType = '\Assembly\Client\Model\TeachingGroup';
        $request = $this->findTeachingGroupRequest($id, $date, $academic_year_id, $group_id);

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
            }
            throw $e;
        }
    }

    /**
     * Operation findTeachingGroupAsync
     *
     * View a Teaching Group
     *
     * @param  int $id id of the entity (required)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
     * @param  int $group_id a group_id to filter by (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findTeachingGroupAsync($id, $date = null, $academic_year_id = null, $group_id = null)
    {
        return $this->findTeachingGroupAsyncWithHttpInfo($id, $date, $academic_year_id, $group_id)
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
     * @param  int $id id of the entity (required)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
     * @param  int $group_id a group_id to filter by (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findTeachingGroupAsyncWithHttpInfo($id, $date = null, $academic_year_id = null, $group_id = null)
    {
        $returnType = '\Assembly\Client\Model\TeachingGroup';
        $request = $this->findTeachingGroupRequest($id, $date, $academic_year_id, $group_id);

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
     * @param  int $id id of the entity (required)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
     * @param  int $group_id a group_id to filter by (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function findTeachingGroupRequest($id, $date = null, $academic_year_id = null, $group_id = null)
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
        // query params
        if ($academic_year_id !== null) {
            $queryParams['academic_year_id'] = ObjectSerializer::toQueryValue($academic_year_id);
        }
        // query params
        if ($group_id !== null) {
            $queryParams['group_id'] = ObjectSerializer::toQueryValue($group_id);
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * @param  int $id id of the entity (required)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\YearGroup
     */
    public function findYearGroup($id, $date = null, $academic_year_id = null)
    {
        list($response) = $this->findYearGroupWithHttpInfo($id, $date, $academic_year_id);
        return $response;
    }

    /**
     * Operation findYearGroupWithHttpInfo
     *
     * View a Year Group
     *
     * @param  int $id id of the entity (required)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\YearGroup, HTTP status code, HTTP response headers (array of strings)
     */
    public function findYearGroupWithHttpInfo($id, $date = null, $academic_year_id = null)
    {
        $returnType = '\Assembly\Client\Model\YearGroup';
        $request = $this->findYearGroupRequest($id, $date, $academic_year_id);

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
            }
            throw $e;
        }
    }

    /**
     * Operation findYearGroupAsync
     *
     * View a Year Group
     *
     * @param  int $id id of the entity (required)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findYearGroupAsync($id, $date = null, $academic_year_id = null)
    {
        return $this->findYearGroupAsyncWithHttpInfo($id, $date, $academic_year_id)
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
     * @param  int $id id of the entity (required)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findYearGroupAsyncWithHttpInfo($id, $date = null, $academic_year_id = null)
    {
        $returnType = '\Assembly\Client\Model\YearGroup';
        $request = $this->findYearGroupRequest($id, $date, $academic_year_id);

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
     * @param  int $id id of the entity (required)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function findYearGroupRequest($id, $date = null, $academic_year_id = null)
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
        // query params
        if ($academic_year_id !== null) {
            $queryParams['academic_year_id'] = ObjectSerializer::toQueryValue($academic_year_id);
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * @param  int $id id of the entity (required)
     * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (required)
     * @param  int $assessment_point_rank the Assessment Point rank (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\Result[]
     */
    public function getAssessmentPointResults($id, $students, $assessment_point_rank = null)
    {
        list($response) = $this->getAssessmentPointResultsWithHttpInfo($id, $students, $assessment_point_rank);
        return $response;
    }

    /**
     * Operation getAssessmentPointResultsWithHttpInfo
     *
     * View Results for an Assessment Point
     *
     * @param  int $id id of the entity (required)
     * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (required)
     * @param  int $assessment_point_rank the Assessment Point rank (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\Result[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getAssessmentPointResultsWithHttpInfo($id, $students, $assessment_point_rank = null)
    {
        $returnType = '\Assembly\Client\Model\Result[]';
        $request = $this->getAssessmentPointResultsRequest($id, $students, $assessment_point_rank);

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
            }
            throw $e;
        }
    }

    /**
     * Operation getAssessmentPointResultsAsync
     *
     * View Results for an Assessment Point
     *
     * @param  int $id id of the entity (required)
     * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (required)
     * @param  int $assessment_point_rank the Assessment Point rank (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAssessmentPointResultsAsync($id, $students, $assessment_point_rank = null)
    {
        return $this->getAssessmentPointResultsAsyncWithHttpInfo($id, $students, $assessment_point_rank)
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
     * @param  int $id id of the entity (required)
     * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (required)
     * @param  int $assessment_point_rank the Assessment Point rank (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAssessmentPointResultsAsyncWithHttpInfo($id, $students, $assessment_point_rank = null)
    {
        $returnType = '\Assembly\Client\Model\Result[]';
        $request = $this->getAssessmentPointResultsRequest($id, $students, $assessment_point_rank);

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
     * @param  int $id id of the entity (required)
     * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (required)
     * @param  int $assessment_point_rank the Assessment Point rank (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAssessmentPointResultsRequest($id, $students, $assessment_point_rank = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getAssessmentPointResults'
            );
        }
        // verify the required parameter 'students' is set
        if ($students === null || (is_array($students) && count($students) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $students when calling getAssessmentPointResults'
            );
        }

        $resourcePath = '/assessment_points/{id}/results';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($assessment_point_rank !== null) {
            $queryParams['assessment_point_rank'] = ObjectSerializer::toQueryValue($assessment_point_rank);
        }
        // query params
        if (is_array($students)) {
            $students = ObjectSerializer::serializeCollection($students, 'multi', true);
        }
        if ($students !== null) {
            $queryParams['students[]'] = ObjectSerializer::toQueryValue($students);
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\AssessmentPoint[]
     */
    public function getAssessmentPoints($per_page = '100', $page = '1')
    {
        list($response) = $this->getAssessmentPointsWithHttpInfo($per_page, $page);
        return $response;
    }

    /**
     * Operation getAssessmentPointsWithHttpInfo
     *
     * List Assessment Points
     *
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\AssessmentPoint[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getAssessmentPointsWithHttpInfo($per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\AssessmentPoint[]';
        $request = $this->getAssessmentPointsRequest($per_page, $page);

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
            }
            throw $e;
        }
    }

    /**
     * Operation getAssessmentPointsAsync
     *
     * List Assessment Points
     *
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAssessmentPointsAsync($per_page = '100', $page = '1')
    {
        return $this->getAssessmentPointsAsyncWithHttpInfo($per_page, $page)
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
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAssessmentPointsAsyncWithHttpInfo($per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\AssessmentPoint[]';
        $request = $this->getAssessmentPointsRequest($per_page, $page);

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
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAssessmentPointsRequest($per_page = '100', $page = '1')
    {

        $resourcePath = '/assessment_points';
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * @param  int $id id of the entity (required)
     * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (required)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\Result[]
     */
    public function getAssessmentResults($id, $students)
    {
        list($response) = $this->getAssessmentResultsWithHttpInfo($id, $students);
        return $response;
    }

    /**
     * Operation getAssessmentResultsWithHttpInfo
     *
     * View Results for an Assessment
     *
     * @param  int $id id of the entity (required)
     * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (required)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\Result[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getAssessmentResultsWithHttpInfo($id, $students)
    {
        $returnType = '\Assembly\Client\Model\Result[]';
        $request = $this->getAssessmentResultsRequest($id, $students);

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
            }
            throw $e;
        }
    }

    /**
     * Operation getAssessmentResultsAsync
     *
     * View Results for an Assessment
     *
     * @param  int $id id of the entity (required)
     * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAssessmentResultsAsync($id, $students)
    {
        return $this->getAssessmentResultsAsyncWithHttpInfo($id, $students)
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
     * @param  int $id id of the entity (required)
     * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAssessmentResultsAsyncWithHttpInfo($id, $students)
    {
        $returnType = '\Assembly\Client\Model\Result[]';
        $request = $this->getAssessmentResultsRequest($id, $students);

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
     * @param  int $id id of the entity (required)
     * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAssessmentResultsRequest($id, $students)
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * @param  int $student_id a student_id to filter by (optional)
     * @param  int $registration_group_id id of a registration group (optional)
     * @param  \DateTime $start_date the start date of the period to query (optional)
     * @param  \DateTime $end_date the end date of the period to query (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\Attendance[]
     */
    public function getAttendances($student_id = null, $registration_group_id = null, $start_date = null, $end_date = null, $per_page = '100', $page = '1')
    {
        list($response) = $this->getAttendancesWithHttpInfo($student_id, $registration_group_id, $start_date, $end_date, $per_page, $page);
        return $response;
    }

    /**
     * Operation getAttendancesWithHttpInfo
     *
     * List Attendances
     *
     * @param  int $student_id a student_id to filter by (optional)
     * @param  int $registration_group_id id of a registration group (optional)
     * @param  \DateTime $start_date the start date of the period to query (optional)
     * @param  \DateTime $end_date the end date of the period to query (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\Attendance[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getAttendancesWithHttpInfo($student_id = null, $registration_group_id = null, $start_date = null, $end_date = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\Attendance[]';
        $request = $this->getAttendancesRequest($student_id, $registration_group_id, $start_date, $end_date, $per_page, $page);

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
            }
            throw $e;
        }
    }

    /**
     * Operation getAttendancesAsync
     *
     * List Attendances
     *
     * @param  int $student_id a student_id to filter by (optional)
     * @param  int $registration_group_id id of a registration group (optional)
     * @param  \DateTime $start_date the start date of the period to query (optional)
     * @param  \DateTime $end_date the end date of the period to query (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAttendancesAsync($student_id = null, $registration_group_id = null, $start_date = null, $end_date = null, $per_page = '100', $page = '1')
    {
        return $this->getAttendancesAsyncWithHttpInfo($student_id, $registration_group_id, $start_date, $end_date, $per_page, $page)
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
     * @param  int $student_id a student_id to filter by (optional)
     * @param  int $registration_group_id id of a registration group (optional)
     * @param  \DateTime $start_date the start date of the period to query (optional)
     * @param  \DateTime $end_date the end date of the period to query (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAttendancesAsyncWithHttpInfo($student_id = null, $registration_group_id = null, $start_date = null, $end_date = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\Attendance[]';
        $request = $this->getAttendancesRequest($student_id, $registration_group_id, $start_date, $end_date, $per_page, $page);

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
     * @param  int $student_id a student_id to filter by (optional)
     * @param  int $registration_group_id id of a registration group (optional)
     * @param  \DateTime $start_date the start date of the period to query (optional)
     * @param  \DateTime $end_date the end date of the period to query (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAttendancesRequest($student_id = null, $registration_group_id = null, $start_date = null, $end_date = null, $per_page = '100', $page = '1')
    {

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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * @param  string $event_type a calendar object type from the underlying MIS (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\CalendarEvent[]
     */
    public function getCalendarEvents($event_type = null, $per_page = '100', $page = '1')
    {
        list($response) = $this->getCalendarEventsWithHttpInfo($event_type, $per_page, $page);
        return $response;
    }

    /**
     * Operation getCalendarEventsWithHttpInfo
     *
     * List Calendar Events
     *
     * @param  string $event_type a calendar object type from the underlying MIS (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\CalendarEvent[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getCalendarEventsWithHttpInfo($event_type = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\CalendarEvent[]';
        $request = $this->getCalendarEventsRequest($event_type, $per_page, $page);

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
            }
            throw $e;
        }
    }

    /**
     * Operation getCalendarEventsAsync
     *
     * List Calendar Events
     *
     * @param  string $event_type a calendar object type from the underlying MIS (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCalendarEventsAsync($event_type = null, $per_page = '100', $page = '1')
    {
        return $this->getCalendarEventsAsyncWithHttpInfo($event_type, $per_page, $page)
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
     * @param  string $event_type a calendar object type from the underlying MIS (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCalendarEventsAsyncWithHttpInfo($event_type = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\CalendarEvent[]';
        $request = $this->getCalendarEventsRequest($event_type, $per_page, $page);

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
     * @param  string $event_type a calendar object type from the underlying MIS (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCalendarEventsRequest($event_type = null, $per_page = '100', $page = '1')
    {

        $resourcePath = '/calendar_events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($event_type !== null) {
            $queryParams['event_type'] = ObjectSerializer::toQueryValue($event_type);
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * @param  int $student_id a student_id to filter by (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\Contact[]
     */
    public function getContacts($student_id = null, $per_page = '100', $page = '1')
    {
        list($response) = $this->getContactsWithHttpInfo($student_id, $per_page, $page);
        return $response;
    }

    /**
     * Operation getContactsWithHttpInfo
     *
     * List Contacts
     *
     * @param  int $student_id a student_id to filter by (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\Contact[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getContactsWithHttpInfo($student_id = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\Contact[]';
        $request = $this->getContactsRequest($student_id, $per_page, $page);

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
            }
            throw $e;
        }
    }

    /**
     * Operation getContactsAsync
     *
     * List Contacts
     *
     * @param  int $student_id a student_id to filter by (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getContactsAsync($student_id = null, $per_page = '100', $page = '1')
    {
        return $this->getContactsAsyncWithHttpInfo($student_id, $per_page, $page)
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
     * @param  int $student_id a student_id to filter by (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getContactsAsyncWithHttpInfo($student_id = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\Contact[]';
        $request = $this->getContactsRequest($student_id, $per_page, $page);

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
     * @param  int $student_id a student_id to filter by (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getContactsRequest($student_id = null, $per_page = '100', $page = '1')
    {

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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * @param  int $student_id a student_id to filter by (optional)
     * @param  \DateTime $start_date the start date of the period to query (optional)
     * @param  \DateTime $end_date the end date of the period to query (optional)
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
     * @param  int $student_id a student_id to filter by (optional)
     * @param  \DateTime $start_date the start date of the period to query (optional)
     * @param  \DateTime $end_date the end date of the period to query (optional)
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
            }
            throw $e;
        }
    }

    /**
     * Operation getExclusionsAsync
     *
     * List Exclusions
     *
     * @param  int $student_id a student_id to filter by (optional)
     * @param  \DateTime $start_date the start date of the period to query (optional)
     * @param  \DateTime $end_date the end date of the period to query (optional)
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
     * @param  int $student_id a student_id to filter by (optional)
     * @param  \DateTime $start_date the start date of the period to query (optional)
     * @param  \DateTime $end_date the end date of the period to query (optional)
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
     * @param  int $student_id a student_id to filter by (optional)
     * @param  \DateTime $start_date the start date of the period to query (optional)
     * @param  \DateTime $end_date the end date of the period to query (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getExclusionsRequest($student_id = null, $start_date = null, $end_date = null, $per_page = '100', $page = '1')
    {

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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\Student[]
     */
    public function getLeftStudents($if_modified_since = null)
    {
        list($response) = $this->getLeftStudentsWithHttpInfo($if_modified_since);
        return $response;
    }

    /**
     * Operation getLeftStudentsWithHttpInfo
     *
     * List Left Students
     *
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\Student[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getLeftStudentsWithHttpInfo($if_modified_since = null)
    {
        $returnType = '\Assembly\Client\Model\Student[]';
        $request = $this->getLeftStudentsRequest($if_modified_since);

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
            }
            throw $e;
        }
    }

    /**
     * Operation getLeftStudentsAsync
     *
     * List Left Students
     *
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLeftStudentsAsync($if_modified_since = null)
    {
        return $this->getLeftStudentsAsyncWithHttpInfo($if_modified_since)
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
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLeftStudentsAsyncWithHttpInfo($if_modified_since = null)
    {
        $returnType = '\Assembly\Client\Model\Student[]';
        $request = $this->getLeftStudentsRequest($if_modified_since);

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
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getLeftStudentsRequest($if_modified_since = null)
    {

        $resourcePath = '/students/left';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * @param  int $id id of the entity (required)
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
     * @param  bool $demographics include demographics data (optional)
     * @param  bool $contacts include contacts data (optional)
     * @param  bool $sen_needs include SEN needs data (optional)
     * @param  bool $addresses include student address data (optional)
     * @param  bool $care include student care data (you must also supply the demographics parameter) (optional)
     * @param  bool $ever_in_care include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
     * @param  bool $languages include student language data (optional)
     * @param  bool $photo include student photo data (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\Student[]
     */
    public function getRegistrationGroupStudents($id, $if_modified_since = null, $date = null, $academic_year_id = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        list($response) = $this->getRegistrationGroupStudentsWithHttpInfo($id, $if_modified_since, $date, $academic_year_id, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo);
        return $response;
    }

    /**
     * Operation getRegistrationGroupStudentsWithHttpInfo
     *
     * List Students for Registration Group
     *
     * @param  int $id id of the entity (required)
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
     * @param  bool $demographics include demographics data (optional)
     * @param  bool $contacts include contacts data (optional)
     * @param  bool $sen_needs include SEN needs data (optional)
     * @param  bool $addresses include student address data (optional)
     * @param  bool $care include student care data (you must also supply the demographics parameter) (optional)
     * @param  bool $ever_in_care include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
     * @param  bool $languages include student language data (optional)
     * @param  bool $photo include student photo data (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\Student[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getRegistrationGroupStudentsWithHttpInfo($id, $if_modified_since = null, $date = null, $academic_year_id = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        $returnType = '\Assembly\Client\Model\Student[]';
        $request = $this->getRegistrationGroupStudentsRequest($id, $if_modified_since, $date, $academic_year_id, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo);

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
            }
            throw $e;
        }
    }

    /**
     * Operation getRegistrationGroupStudentsAsync
     *
     * List Students for Registration Group
     *
     * @param  int $id id of the entity (required)
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
     * @param  bool $demographics include demographics data (optional)
     * @param  bool $contacts include contacts data (optional)
     * @param  bool $sen_needs include SEN needs data (optional)
     * @param  bool $addresses include student address data (optional)
     * @param  bool $care include student care data (you must also supply the demographics parameter) (optional)
     * @param  bool $ever_in_care include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
     * @param  bool $languages include student language data (optional)
     * @param  bool $photo include student photo data (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRegistrationGroupStudentsAsync($id, $if_modified_since = null, $date = null, $academic_year_id = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        return $this->getRegistrationGroupStudentsAsyncWithHttpInfo($id, $if_modified_since, $date, $academic_year_id, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo)
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
     * @param  int $id id of the entity (required)
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
     * @param  bool $demographics include demographics data (optional)
     * @param  bool $contacts include contacts data (optional)
     * @param  bool $sen_needs include SEN needs data (optional)
     * @param  bool $addresses include student address data (optional)
     * @param  bool $care include student care data (you must also supply the demographics parameter) (optional)
     * @param  bool $ever_in_care include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
     * @param  bool $languages include student language data (optional)
     * @param  bool $photo include student photo data (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRegistrationGroupStudentsAsyncWithHttpInfo($id, $if_modified_since = null, $date = null, $academic_year_id = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        $returnType = '\Assembly\Client\Model\Student[]';
        $request = $this->getRegistrationGroupStudentsRequest($id, $if_modified_since, $date, $academic_year_id, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo);

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
     * @param  int $id id of the entity (required)
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
     * @param  bool $demographics include demographics data (optional)
     * @param  bool $contacts include contacts data (optional)
     * @param  bool $sen_needs include SEN needs data (optional)
     * @param  bool $addresses include student address data (optional)
     * @param  bool $care include student care data (you must also supply the demographics parameter) (optional)
     * @param  bool $ever_in_care include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
     * @param  bool $languages include student language data (optional)
     * @param  bool $photo include student photo data (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getRegistrationGroupStudentsRequest($id, $if_modified_since = null, $date = null, $academic_year_id = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getRegistrationGroupStudents'
            );
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
        if ($academic_year_id !== null) {
            $queryParams['academic_year_id'] = ObjectSerializer::toQueryValue($academic_year_id);
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * List Registration Group
     *
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  int $year_code filter by school year (cannot be supplied at the same time as the students parameter) (optional)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
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
     * List Registration Group
     *
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  int $year_code filter by school year (cannot be supplied at the same time as the students parameter) (optional)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
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
            }
            throw $e;
        }
    }

    /**
     * Operation getRegistrationGroupsAsync
     *
     * List Registration Group
     *
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  int $year_code filter by school year (cannot be supplied at the same time as the students parameter) (optional)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
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
     * List Registration Group
     *
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  int $year_code filter by school year (cannot be supplied at the same time as the students parameter) (optional)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
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
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  int $year_code filter by school year (cannot be supplied at the same time as the students parameter) (optional)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getRegistrationGroupsRequest($if_modified_since = null, $year_code = null, $date = null, $academic_year_id = null, $per_page = '100', $page = '1')
    {

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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (required)
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
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
     * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (required)
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
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
            }
            throw $e;
        }
    }

    /**
     * Operation getResultsAsync
     *
     * List Results
     *
     * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (required)
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
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
     * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (required)
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
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
     * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (required)
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  int $staff_member_id show only absences fot the specified staff member (optional)
     * @param  \DateTime $start_date the start date of the period to query (optional)
     * @param  int $qualifications include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\StaffAbsence[]
     */
    public function getStaffAbsences($if_modified_since = null, $staff_member_id = null, $start_date = null, $qualifications = null, $per_page = '100', $page = '1')
    {
        list($response) = $this->getStaffAbsencesWithHttpInfo($if_modified_since, $staff_member_id, $start_date, $qualifications, $per_page, $page);
        return $response;
    }

    /**
     * Operation getStaffAbsencesWithHttpInfo
     *
     * List Staff Absences
     *
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  int $staff_member_id show only absences fot the specified staff member (optional)
     * @param  \DateTime $start_date the start date of the period to query (optional)
     * @param  int $qualifications include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\StaffAbsence[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getStaffAbsencesWithHttpInfo($if_modified_since = null, $staff_member_id = null, $start_date = null, $qualifications = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\StaffAbsence[]';
        $request = $this->getStaffAbsencesRequest($if_modified_since, $staff_member_id, $start_date, $qualifications, $per_page, $page);

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
            }
            throw $e;
        }
    }

    /**
     * Operation getStaffAbsencesAsync
     *
     * List Staff Absences
     *
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  int $staff_member_id show only absences fot the specified staff member (optional)
     * @param  \DateTime $start_date the start date of the period to query (optional)
     * @param  int $qualifications include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getStaffAbsencesAsync($if_modified_since = null, $staff_member_id = null, $start_date = null, $qualifications = null, $per_page = '100', $page = '1')
    {
        return $this->getStaffAbsencesAsyncWithHttpInfo($if_modified_since, $staff_member_id, $start_date, $qualifications, $per_page, $page)
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
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  int $staff_member_id show only absences fot the specified staff member (optional)
     * @param  \DateTime $start_date the start date of the period to query (optional)
     * @param  int $qualifications include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getStaffAbsencesAsyncWithHttpInfo($if_modified_since = null, $staff_member_id = null, $start_date = null, $qualifications = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\StaffAbsence[]';
        $request = $this->getStaffAbsencesRequest($if_modified_since, $staff_member_id, $start_date, $qualifications, $per_page, $page);

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
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  int $staff_member_id show only absences fot the specified staff member (optional)
     * @param  \DateTime $start_date the start date of the period to query (optional)
     * @param  int $qualifications include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getStaffAbsencesRequest($if_modified_since = null, $staff_member_id = null, $start_date = null, $qualifications = null, $per_page = '100', $page = '1')
    {

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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  int $staff_member_id show only absences fot the specified staff member (optional)
     * @param  bool $date returns results for a specific date (optional)
     * @param  bool $roles return roles information along with a staff contract (optional)
     * @param  bool $salaries return salaries information along with a staff contract (requires staff_members.salaries scope for full information - only the hours_per_week, fte and weeks_per_year fields are shown without it) (optional)
     * @param  bool $allowances return allowances information along with a staff contract (requires staff_members.salaries scope) (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\StaffContract[]
     */
    public function getStaffContracts($if_modified_since = null, $staff_member_id = null, $date = null, $roles = null, $salaries = null, $allowances = null, $per_page = '100', $page = '1')
    {
        list($response) = $this->getStaffContractsWithHttpInfo($if_modified_since, $staff_member_id, $date, $roles, $salaries, $allowances, $per_page, $page);
        return $response;
    }

    /**
     * Operation getStaffContractsWithHttpInfo
     *
     * List Staff Contracts
     *
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  int $staff_member_id show only absences fot the specified staff member (optional)
     * @param  bool $date returns results for a specific date (optional)
     * @param  bool $roles return roles information along with a staff contract (optional)
     * @param  bool $salaries return salaries information along with a staff contract (requires staff_members.salaries scope for full information - only the hours_per_week, fte and weeks_per_year fields are shown without it) (optional)
     * @param  bool $allowances return allowances information along with a staff contract (requires staff_members.salaries scope) (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\StaffContract[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getStaffContractsWithHttpInfo($if_modified_since = null, $staff_member_id = null, $date = null, $roles = null, $salaries = null, $allowances = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\StaffContract[]';
        $request = $this->getStaffContractsRequest($if_modified_since, $staff_member_id, $date, $roles, $salaries, $allowances, $per_page, $page);

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
            }
            throw $e;
        }
    }

    /**
     * Operation getStaffContractsAsync
     *
     * List Staff Contracts
     *
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  int $staff_member_id show only absences fot the specified staff member (optional)
     * @param  bool $date returns results for a specific date (optional)
     * @param  bool $roles return roles information along with a staff contract (optional)
     * @param  bool $salaries return salaries information along with a staff contract (requires staff_members.salaries scope for full information - only the hours_per_week, fte and weeks_per_year fields are shown without it) (optional)
     * @param  bool $allowances return allowances information along with a staff contract (requires staff_members.salaries scope) (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getStaffContractsAsync($if_modified_since = null, $staff_member_id = null, $date = null, $roles = null, $salaries = null, $allowances = null, $per_page = '100', $page = '1')
    {
        return $this->getStaffContractsAsyncWithHttpInfo($if_modified_since, $staff_member_id, $date, $roles, $salaries, $allowances, $per_page, $page)
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
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  int $staff_member_id show only absences fot the specified staff member (optional)
     * @param  bool $date returns results for a specific date (optional)
     * @param  bool $roles return roles information along with a staff contract (optional)
     * @param  bool $salaries return salaries information along with a staff contract (requires staff_members.salaries scope for full information - only the hours_per_week, fte and weeks_per_year fields are shown without it) (optional)
     * @param  bool $allowances return allowances information along with a staff contract (requires staff_members.salaries scope) (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getStaffContractsAsyncWithHttpInfo($if_modified_since = null, $staff_member_id = null, $date = null, $roles = null, $salaries = null, $allowances = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\StaffContract[]';
        $request = $this->getStaffContractsRequest($if_modified_since, $staff_member_id, $date, $roles, $salaries, $allowances, $per_page, $page);

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
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  int $staff_member_id show only absences fot the specified staff member (optional)
     * @param  bool $date returns results for a specific date (optional)
     * @param  bool $roles return roles information along with a staff contract (optional)
     * @param  bool $salaries return salaries information along with a staff contract (requires staff_members.salaries scope for full information - only the hours_per_week, fte and weeks_per_year fields are shown without it) (optional)
     * @param  bool $allowances return allowances information along with a staff contract (requires staff_members.salaries scope) (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getStaffContractsRequest($if_modified_since = null, $staff_member_id = null, $date = null, $roles = null, $salaries = null, $allowances = null, $per_page = '100', $page = '1')
    {

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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  bool $teachers_only return only staff who are teachers (optional)
     * @param  bool $demographics include demographics data (optional)
     * @param  bool $qualifications include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\StaffMember[]
     */
    public function getStaffMembers($if_modified_since = null, $teachers_only = null, $demographics = null, $qualifications = null, $per_page = '100', $page = '1')
    {
        list($response) = $this->getStaffMembersWithHttpInfo($if_modified_since, $teachers_only, $demographics, $qualifications, $per_page, $page);
        return $response;
    }

    /**
     * Operation getStaffMembersWithHttpInfo
     *
     * List Staff Members
     *
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  bool $teachers_only return only staff who are teachers (optional)
     * @param  bool $demographics include demographics data (optional)
     * @param  bool $qualifications include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\StaffMember[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getStaffMembersWithHttpInfo($if_modified_since = null, $teachers_only = null, $demographics = null, $qualifications = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\StaffMember[]';
        $request = $this->getStaffMembersRequest($if_modified_since, $teachers_only, $demographics, $qualifications, $per_page, $page);

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
            }
            throw $e;
        }
    }

    /**
     * Operation getStaffMembersAsync
     *
     * List Staff Members
     *
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  bool $teachers_only return only staff who are teachers (optional)
     * @param  bool $demographics include demographics data (optional)
     * @param  bool $qualifications include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getStaffMembersAsync($if_modified_since = null, $teachers_only = null, $demographics = null, $qualifications = null, $per_page = '100', $page = '1')
    {
        return $this->getStaffMembersAsyncWithHttpInfo($if_modified_since, $teachers_only, $demographics, $qualifications, $per_page, $page)
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
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  bool $teachers_only return only staff who are teachers (optional)
     * @param  bool $demographics include demographics data (optional)
     * @param  bool $qualifications include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getStaffMembersAsyncWithHttpInfo($if_modified_since = null, $teachers_only = null, $demographics = null, $qualifications = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\StaffMember[]';
        $request = $this->getStaffMembersRequest($if_modified_since, $teachers_only, $demographics, $qualifications, $per_page, $page);

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
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  bool $teachers_only return only staff who are teachers (optional)
     * @param  bool $demographics include demographics data (optional)
     * @param  bool $qualifications include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getStaffMembersRequest($if_modified_since = null, $teachers_only = null, $demographics = null, $qualifications = null, $per_page = '100', $page = '1')
    {

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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (optional)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $year_code filter by school year (cannot be supplied at the same time as the students parameter) (optional)
     * @param  bool $demographics include demographics data (optional)
     * @param  bool $contacts include contacts data (optional)
     * @param  bool $sen_needs include SEN needs data (optional)
     * @param  bool $addresses include student address data (optional)
     * @param  bool $care include student care data (you must also supply the demographics parameter) (optional)
     * @param  bool $ever_in_care include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
     * @param  bool $languages include student language data (optional)
     * @param  bool $photo include student photo data (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\Student[]
     */
    public function getStudents($if_modified_since = null, $students = null, $date = null, $year_code = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null, $per_page = '100', $page = '1')
    {
        list($response) = $this->getStudentsWithHttpInfo($if_modified_since, $students, $date, $year_code, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo, $per_page, $page);
        return $response;
    }

    /**
     * Operation getStudentsWithHttpInfo
     *
     * List Students
     *
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (optional)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $year_code filter by school year (cannot be supplied at the same time as the students parameter) (optional)
     * @param  bool $demographics include demographics data (optional)
     * @param  bool $contacts include contacts data (optional)
     * @param  bool $sen_needs include SEN needs data (optional)
     * @param  bool $addresses include student address data (optional)
     * @param  bool $care include student care data (you must also supply the demographics parameter) (optional)
     * @param  bool $ever_in_care include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
     * @param  bool $languages include student language data (optional)
     * @param  bool $photo include student photo data (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\Student[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getStudentsWithHttpInfo($if_modified_since = null, $students = null, $date = null, $year_code = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\Student[]';
        $request = $this->getStudentsRequest($if_modified_since, $students, $date, $year_code, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo, $per_page, $page);

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
            }
            throw $e;
        }
    }

    /**
     * Operation getStudentsAsync
     *
     * List Students
     *
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (optional)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $year_code filter by school year (cannot be supplied at the same time as the students parameter) (optional)
     * @param  bool $demographics include demographics data (optional)
     * @param  bool $contacts include contacts data (optional)
     * @param  bool $sen_needs include SEN needs data (optional)
     * @param  bool $addresses include student address data (optional)
     * @param  bool $care include student care data (you must also supply the demographics parameter) (optional)
     * @param  bool $ever_in_care include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
     * @param  bool $languages include student language data (optional)
     * @param  bool $photo include student photo data (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getStudentsAsync($if_modified_since = null, $students = null, $date = null, $year_code = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null, $per_page = '100', $page = '1')
    {
        return $this->getStudentsAsyncWithHttpInfo($if_modified_since, $students, $date, $year_code, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo, $per_page, $page)
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
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (optional)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $year_code filter by school year (cannot be supplied at the same time as the students parameter) (optional)
     * @param  bool $demographics include demographics data (optional)
     * @param  bool $contacts include contacts data (optional)
     * @param  bool $sen_needs include SEN needs data (optional)
     * @param  bool $addresses include student address data (optional)
     * @param  bool $care include student care data (you must also supply the demographics parameter) (optional)
     * @param  bool $ever_in_care include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
     * @param  bool $languages include student language data (optional)
     * @param  bool $photo include student photo data (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getStudentsAsyncWithHttpInfo($if_modified_since = null, $students = null, $date = null, $year_code = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\Student[]';
        $request = $this->getStudentsRequest($if_modified_since, $students, $date, $year_code, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo, $per_page, $page);

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
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (optional)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $year_code filter by school year (cannot be supplied at the same time as the students parameter) (optional)
     * @param  bool $demographics include demographics data (optional)
     * @param  bool $contacts include contacts data (optional)
     * @param  bool $sen_needs include SEN needs data (optional)
     * @param  bool $addresses include student address data (optional)
     * @param  bool $care include student care data (you must also supply the demographics parameter) (optional)
     * @param  bool $ever_in_care include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
     * @param  bool $languages include student language data (optional)
     * @param  bool $photo include student photo data (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getStudentsRequest($if_modified_since = null, $students = null, $date = null, $year_code = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null, $per_page = '100', $page = '1')
    {

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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * @param  int $id id of the entity (required)
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  bool $demographics include demographics data (optional)
     * @param  bool $contacts include contacts data (optional)
     * @param  bool $sen_needs include SEN needs data (optional)
     * @param  bool $addresses include student address data (optional)
     * @param  bool $care include student care data (you must also supply the demographics parameter) (optional)
     * @param  bool $ever_in_care include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
     * @param  bool $languages include student language data (optional)
     * @param  bool $photo include student photo data (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\Student[]
     */
    public function getTeachingGroupStudents($id, $if_modified_since = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        list($response) = $this->getTeachingGroupStudentsWithHttpInfo($id, $if_modified_since, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo);
        return $response;
    }

    /**
     * Operation getTeachingGroupStudentsWithHttpInfo
     *
     * List Students for Teaching Group
     *
     * @param  int $id id of the entity (required)
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  bool $demographics include demographics data (optional)
     * @param  bool $contacts include contacts data (optional)
     * @param  bool $sen_needs include SEN needs data (optional)
     * @param  bool $addresses include student address data (optional)
     * @param  bool $care include student care data (you must also supply the demographics parameter) (optional)
     * @param  bool $ever_in_care include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
     * @param  bool $languages include student language data (optional)
     * @param  bool $photo include student photo data (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\Student[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getTeachingGroupStudentsWithHttpInfo($id, $if_modified_since = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        $returnType = '\Assembly\Client\Model\Student[]';
        $request = $this->getTeachingGroupStudentsRequest($id, $if_modified_since, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo);

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
            }
            throw $e;
        }
    }

    /**
     * Operation getTeachingGroupStudentsAsync
     *
     * List Students for Teaching Group
     *
     * @param  int $id id of the entity (required)
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  bool $demographics include demographics data (optional)
     * @param  bool $contacts include contacts data (optional)
     * @param  bool $sen_needs include SEN needs data (optional)
     * @param  bool $addresses include student address data (optional)
     * @param  bool $care include student care data (you must also supply the demographics parameter) (optional)
     * @param  bool $ever_in_care include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
     * @param  bool $languages include student language data (optional)
     * @param  bool $photo include student photo data (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTeachingGroupStudentsAsync($id, $if_modified_since = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        return $this->getTeachingGroupStudentsAsyncWithHttpInfo($id, $if_modified_since, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo)
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
     * @param  int $id id of the entity (required)
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  bool $demographics include demographics data (optional)
     * @param  bool $contacts include contacts data (optional)
     * @param  bool $sen_needs include SEN needs data (optional)
     * @param  bool $addresses include student address data (optional)
     * @param  bool $care include student care data (you must also supply the demographics parameter) (optional)
     * @param  bool $ever_in_care include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
     * @param  bool $languages include student language data (optional)
     * @param  bool $photo include student photo data (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTeachingGroupStudentsAsyncWithHttpInfo($id, $if_modified_since = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        $returnType = '\Assembly\Client\Model\Student[]';
        $request = $this->getTeachingGroupStudentsRequest($id, $if_modified_since, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo);

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
     * @param  int $id id of the entity (required)
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  bool $demographics include demographics data (optional)
     * @param  bool $contacts include contacts data (optional)
     * @param  bool $sen_needs include SEN needs data (optional)
     * @param  bool $addresses include student address data (optional)
     * @param  bool $care include student care data (you must also supply the demographics parameter) (optional)
     * @param  bool $ever_in_care include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
     * @param  bool $languages include student language data (optional)
     * @param  bool $photo include student photo data (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getTeachingGroupStudentsRequest($id, $if_modified_since = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getTeachingGroupStudents'
            );
        }

        $resourcePath = '/teaching_groups/{id}/students';
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  string $subject_code filter by subject (optional)
     * @param  int $year_code filter by school year (cannot be supplied at the same time as the students parameter) (optional)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
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
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  string $subject_code filter by subject (optional)
     * @param  int $year_code filter by school year (cannot be supplied at the same time as the students parameter) (optional)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
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
            }
            throw $e;
        }
    }

    /**
     * Operation getTeachingGroupsAsync
     *
     * List Teaching Groups
     *
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  string $subject_code filter by subject (optional)
     * @param  int $year_code filter by school year (cannot be supplied at the same time as the students parameter) (optional)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
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
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  string $subject_code filter by subject (optional)
     * @param  int $year_code filter by school year (cannot be supplied at the same time as the students parameter) (optional)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
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
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  string $subject_code filter by subject (optional)
     * @param  int $year_code filter by school year (cannot be supplied at the same time as the students parameter) (optional)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getTeachingGroupsRequest($if_modified_since = null, $subject_code = null, $year_code = null, $date = null, $academic_year_id = null, $per_page = '100', $page = '1')
    {

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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * @param  int $id id of the entity (required)
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
     * @param  bool $demographics include demographics data (optional)
     * @param  bool $contacts include contacts data (optional)
     * @param  bool $sen_needs include SEN needs data (optional)
     * @param  bool $addresses include student address data (optional)
     * @param  bool $care include student care data (you must also supply the demographics parameter) (optional)
     * @param  bool $ever_in_care include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
     * @param  bool $languages include student language data (optional)
     * @param  bool $photo include student photo data (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\Student[]
     */
    public function getYearGroupStudents($id, $if_modified_since = null, $date = null, $academic_year_id = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        list($response) = $this->getYearGroupStudentsWithHttpInfo($id, $if_modified_since, $date, $academic_year_id, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo);
        return $response;
    }

    /**
     * Operation getYearGroupStudentsWithHttpInfo
     *
     * List Students for Year Group
     *
     * @param  int $id id of the entity (required)
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
     * @param  bool $demographics include demographics data (optional)
     * @param  bool $contacts include contacts data (optional)
     * @param  bool $sen_needs include SEN needs data (optional)
     * @param  bool $addresses include student address data (optional)
     * @param  bool $care include student care data (you must also supply the demographics parameter) (optional)
     * @param  bool $ever_in_care include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
     * @param  bool $languages include student language data (optional)
     * @param  bool $photo include student photo data (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\Student[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getYearGroupStudentsWithHttpInfo($id, $if_modified_since = null, $date = null, $academic_year_id = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        $returnType = '\Assembly\Client\Model\Student[]';
        $request = $this->getYearGroupStudentsRequest($id, $if_modified_since, $date, $academic_year_id, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo);

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
            }
            throw $e;
        }
    }

    /**
     * Operation getYearGroupStudentsAsync
     *
     * List Students for Year Group
     *
     * @param  int $id id of the entity (required)
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
     * @param  bool $demographics include demographics data (optional)
     * @param  bool $contacts include contacts data (optional)
     * @param  bool $sen_needs include SEN needs data (optional)
     * @param  bool $addresses include student address data (optional)
     * @param  bool $care include student care data (you must also supply the demographics parameter) (optional)
     * @param  bool $ever_in_care include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
     * @param  bool $languages include student language data (optional)
     * @param  bool $photo include student photo data (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getYearGroupStudentsAsync($id, $if_modified_since = null, $date = null, $academic_year_id = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        return $this->getYearGroupStudentsAsyncWithHttpInfo($id, $if_modified_since, $date, $academic_year_id, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo)
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
     * @param  int $id id of the entity (required)
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
     * @param  bool $demographics include demographics data (optional)
     * @param  bool $contacts include contacts data (optional)
     * @param  bool $sen_needs include SEN needs data (optional)
     * @param  bool $addresses include student address data (optional)
     * @param  bool $care include student care data (you must also supply the demographics parameter) (optional)
     * @param  bool $ever_in_care include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
     * @param  bool $languages include student language data (optional)
     * @param  bool $photo include student photo data (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getYearGroupStudentsAsyncWithHttpInfo($id, $if_modified_since = null, $date = null, $academic_year_id = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        $returnType = '\Assembly\Client\Model\Student[]';
        $request = $this->getYearGroupStudentsRequest($id, $if_modified_since, $date, $academic_year_id, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo);

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
     * @param  int $id id of the entity (required)
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
     * @param  bool $demographics include demographics data (optional)
     * @param  bool $contacts include contacts data (optional)
     * @param  bool $sen_needs include SEN needs data (optional)
     * @param  bool $addresses include student address data (optional)
     * @param  bool $care include student care data (you must also supply the demographics parameter) (optional)
     * @param  bool $ever_in_care include whether the student has ever been in care (you must also supply the demographics parameter) (optional)
     * @param  bool $languages include student language data (optional)
     * @param  bool $photo include student photo data (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getYearGroupStudentsRequest($id, $if_modified_since = null, $date = null, $academic_year_id = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getYearGroupStudents'
            );
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
        if ($academic_year_id !== null) {
            $queryParams['academic_year_id'] = ObjectSerializer::toQueryValue($academic_year_id);
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  int $year_code filter by school year (cannot be supplied at the same time as the students parameter) (optional)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\YearGroup[]
     */
    public function getYearGroups($if_modified_since = null, $year_code = null, $date = null, $academic_year_id = null, $per_page = '100', $page = '1')
    {
        list($response) = $this->getYearGroupsWithHttpInfo($if_modified_since, $year_code, $date, $academic_year_id, $per_page, $page);
        return $response;
    }

    /**
     * Operation getYearGroupsWithHttpInfo
     *
     * List Year Groups
     *
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  int $year_code filter by school year (cannot be supplied at the same time as the students parameter) (optional)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\YearGroup[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getYearGroupsWithHttpInfo($if_modified_since = null, $year_code = null, $date = null, $academic_year_id = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\YearGroup[]';
        $request = $this->getYearGroupsRequest($if_modified_since, $year_code, $date, $academic_year_id, $per_page, $page);

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
            }
            throw $e;
        }
    }

    /**
     * Operation getYearGroupsAsync
     *
     * List Year Groups
     *
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  int $year_code filter by school year (cannot be supplied at the same time as the students parameter) (optional)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getYearGroupsAsync($if_modified_since = null, $year_code = null, $date = null, $academic_year_id = null, $per_page = '100', $page = '1')
    {
        return $this->getYearGroupsAsyncWithHttpInfo($if_modified_since, $year_code, $date, $academic_year_id, $per_page, $page)
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
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  int $year_code filter by school year (cannot be supplied at the same time as the students parameter) (optional)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getYearGroupsAsyncWithHttpInfo($if_modified_since = null, $year_code = null, $date = null, $academic_year_id = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\YearGroup[]';
        $request = $this->getYearGroupsRequest($if_modified_since, $year_code, $date, $academic_year_id, $per_page, $page);

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
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  int $year_code filter by school year (cannot be supplied at the same time as the students parameter) (optional)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getYearGroupsRequest($if_modified_since = null, $year_code = null, $date = null, $academic_year_id = null, $per_page = '100', $page = '1')
    {

        $resourcePath = '/year_groups';
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
