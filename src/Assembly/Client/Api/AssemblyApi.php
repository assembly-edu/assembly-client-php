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
 * @author   Assembly Developer Team
 * @link     https://github.com/assembly-edu/assembly-client-php
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
     * Operation getAcademicYears
     *
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\AcademicYearList
     */
    public function getAcademicYears($page = '1', $per_page = '100')
    {
        list($response) = $this->getAcademicYearsWithHttpInfo($page, $per_page);
        return $response;
    }

    /**
     * Operation getAcademicYearsWithHttpInfo
     *
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\AcademicYearList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAcademicYearsWithHttpInfo($page = '1', $per_page = '100')
    {
        $returnType = '\Assembly\Client\Model\AcademicYearList';
        $request = $this->getAcademicYearsRequest($page, $per_page);

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
                        '\Assembly\Client\Model\AcademicYearList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
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
     * 
     *
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAcademicYearsAsync($page = '1', $per_page = '100')
    {
        return $this->getAcademicYearsAsyncWithHttpInfo($page, $per_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAcademicYearsAsyncWithHttpInfo
     *
     * 
     *
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAcademicYearsAsyncWithHttpInfo($page = '1', $per_page = '100')
    {
        $returnType = '\Assembly\Client\Model\AcademicYearList';
        $request = $this->getAcademicYearsRequest($page, $per_page);

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
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAcademicYearsRequest($page = '1', $per_page = '100')
    {

        $resourcePath = '/academic_years';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.assembly+json; version=1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.assembly+json; version=1'],
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getAssessmentPoints
     *
     * @param  string $year_code Filter by a specific NC year code (optional)
     * @param  string $type Filter by assessment point type (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\AssessmentPointList
     */
    public function getAssessmentPoints($year_code = null, $type = null, $page = '1', $per_page = '100')
    {
        list($response) = $this->getAssessmentPointsWithHttpInfo($year_code, $type, $page, $per_page);
        return $response;
    }

    /**
     * Operation getAssessmentPointsWithHttpInfo
     *
     * @param  string $year_code Filter by a specific NC year code (optional)
     * @param  string $type Filter by assessment point type (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\AssessmentPointList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAssessmentPointsWithHttpInfo($year_code = null, $type = null, $page = '1', $per_page = '100')
    {
        $returnType = '\Assembly\Client\Model\AssessmentPointList';
        $request = $this->getAssessmentPointsRequest($year_code, $type, $page, $per_page);

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
                        '\Assembly\Client\Model\AssessmentPointList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
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
     * 
     *
     * @param  string $year_code Filter by a specific NC year code (optional)
     * @param  string $type Filter by assessment point type (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAssessmentPointsAsync($year_code = null, $type = null, $page = '1', $per_page = '100')
    {
        return $this->getAssessmentPointsAsyncWithHttpInfo($year_code, $type, $page, $per_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAssessmentPointsAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $year_code Filter by a specific NC year code (optional)
     * @param  string $type Filter by assessment point type (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAssessmentPointsAsyncWithHttpInfo($year_code = null, $type = null, $page = '1', $per_page = '100')
    {
        $returnType = '\Assembly\Client\Model\AssessmentPointList';
        $request = $this->getAssessmentPointsRequest($year_code, $type, $page, $per_page);

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
     * @param  string $year_code Filter by a specific NC year code (optional)
     * @param  string $type Filter by assessment point type (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAssessmentPointsRequest($year_code = null, $type = null, $page = '1', $per_page = '100')
    {

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
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.assembly+json; version=1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.assembly+json; version=1'],
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getAssessmentPointsAssessmentPointRank
     *
     * @param  string $assessment_point_rank The rank of the assessment point as an Integer (required)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\AssessmentPoint
     */
    public function getAssessmentPointsAssessmentPointRank($assessment_point_rank)
    {
        list($response) = $this->getAssessmentPointsAssessmentPointRankWithHttpInfo($assessment_point_rank);
        return $response;
    }

    /**
     * Operation getAssessmentPointsAssessmentPointRankWithHttpInfo
     *
     * @param  string $assessment_point_rank The rank of the assessment point as an Integer (required)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\AssessmentPoint, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAssessmentPointsAssessmentPointRankWithHttpInfo($assessment_point_rank)
    {
        $returnType = '\Assembly\Client\Model\AssessmentPoint';
        $request = $this->getAssessmentPointsAssessmentPointRankRequest($assessment_point_rank);

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
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAssessmentPointsAssessmentPointRankAsync
     *
     * 
     *
     * @param  string $assessment_point_rank The rank of the assessment point as an Integer (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAssessmentPointsAssessmentPointRankAsync($assessment_point_rank)
    {
        return $this->getAssessmentPointsAssessmentPointRankAsyncWithHttpInfo($assessment_point_rank)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAssessmentPointsAssessmentPointRankAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $assessment_point_rank The rank of the assessment point as an Integer (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAssessmentPointsAssessmentPointRankAsyncWithHttpInfo($assessment_point_rank)
    {
        $returnType = '\Assembly\Client\Model\AssessmentPoint';
        $request = $this->getAssessmentPointsAssessmentPointRankRequest($assessment_point_rank);

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
     * Create request for operation 'getAssessmentPointsAssessmentPointRank'
     *
     * @param  string $assessment_point_rank The rank of the assessment point as an Integer (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAssessmentPointsAssessmentPointRankRequest($assessment_point_rank)
    {
        // verify the required parameter 'assessment_point_rank' is set
        if ($assessment_point_rank === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $assessment_point_rank when calling getAssessmentPointsAssessmentPointRank'
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
                ['application/vnd.assembly+json; version=1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.assembly+json; version=1'],
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getAssessmentPointsAssessmentPointRankResults
     *
     * @param  string $assessment_point_rank The rank of the assessment point as an Integer (required)
     * @param  string $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\ResultList
     */
    public function getAssessmentPointsAssessmentPointRankResults($assessment_point_rank, $students = null, $page = '1', $per_page = '100')
    {
        list($response) = $this->getAssessmentPointsAssessmentPointRankResultsWithHttpInfo($assessment_point_rank, $students, $page, $per_page);
        return $response;
    }

    /**
     * Operation getAssessmentPointsAssessmentPointRankResultsWithHttpInfo
     *
     * @param  string $assessment_point_rank The rank of the assessment point as an Integer (required)
     * @param  string $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\ResultList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAssessmentPointsAssessmentPointRankResultsWithHttpInfo($assessment_point_rank, $students = null, $page = '1', $per_page = '100')
    {
        $returnType = '\Assembly\Client\Model\ResultList';
        $request = $this->getAssessmentPointsAssessmentPointRankResultsRequest($assessment_point_rank, $students, $page, $per_page);

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
                        '\Assembly\Client\Model\ResultList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAssessmentPointsAssessmentPointRankResultsAsync
     *
     * 
     *
     * @param  string $assessment_point_rank The rank of the assessment point as an Integer (required)
     * @param  string $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAssessmentPointsAssessmentPointRankResultsAsync($assessment_point_rank, $students = null, $page = '1', $per_page = '100')
    {
        return $this->getAssessmentPointsAssessmentPointRankResultsAsyncWithHttpInfo($assessment_point_rank, $students, $page, $per_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAssessmentPointsAssessmentPointRankResultsAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $assessment_point_rank The rank of the assessment point as an Integer (required)
     * @param  string $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAssessmentPointsAssessmentPointRankResultsAsyncWithHttpInfo($assessment_point_rank, $students = null, $page = '1', $per_page = '100')
    {
        $returnType = '\Assembly\Client\Model\ResultList';
        $request = $this->getAssessmentPointsAssessmentPointRankResultsRequest($assessment_point_rank, $students, $page, $per_page);

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
     * Create request for operation 'getAssessmentPointsAssessmentPointRankResults'
     *
     * @param  string $assessment_point_rank The rank of the assessment point as an Integer (required)
     * @param  string $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAssessmentPointsAssessmentPointRankResultsRequest($assessment_point_rank, $students = null, $page = '1', $per_page = '100')
    {
        // verify the required parameter 'assessment_point_rank' is set
        if ($assessment_point_rank === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $assessment_point_rank when calling getAssessmentPointsAssessmentPointRankResults'
            );
        }

        $resourcePath = '/assessment_points/{assessment_point_rank}/results';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($students !== null) {
            $queryParams['students'] = ObjectSerializer::toQueryValue($students);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
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
                ['application/vnd.assembly+json; version=1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.assembly+json; version=1'],
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getAssessments
     *
     * @param  bool $mis_mappings Includes the names of any MIS components to this object (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\AssessmentList
     */
    public function getAssessments($mis_mappings = 'false', $page = '1', $per_page = '100')
    {
        list($response) = $this->getAssessmentsWithHttpInfo($mis_mappings, $page, $per_page);
        return $response;
    }

    /**
     * Operation getAssessmentsWithHttpInfo
     *
     * @param  bool $mis_mappings Includes the names of any MIS components to this object (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\AssessmentList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAssessmentsWithHttpInfo($mis_mappings = 'false', $page = '1', $per_page = '100')
    {
        $returnType = '\Assembly\Client\Model\AssessmentList';
        $request = $this->getAssessmentsRequest($mis_mappings, $page, $per_page);

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
                        '\Assembly\Client\Model\AssessmentList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
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
     * 
     *
     * @param  bool $mis_mappings Includes the names of any MIS components to this object (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAssessmentsAsync($mis_mappings = 'false', $page = '1', $per_page = '100')
    {
        return $this->getAssessmentsAsyncWithHttpInfo($mis_mappings, $page, $per_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAssessmentsAsyncWithHttpInfo
     *
     * 
     *
     * @param  bool $mis_mappings Includes the names of any MIS components to this object (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAssessmentsAsyncWithHttpInfo($mis_mappings = 'false', $page = '1', $per_page = '100')
    {
        $returnType = '\Assembly\Client\Model\AssessmentList';
        $request = $this->getAssessmentsRequest($mis_mappings, $page, $per_page);

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
     * @param  bool $mis_mappings Includes the names of any MIS components to this object (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAssessmentsRequest($mis_mappings = 'false', $page = '1', $per_page = '100')
    {

        $resourcePath = '/assessments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($mis_mappings !== null) {
            $queryParams['mis_mappings'] = ObjectSerializer::toQueryValue($mis_mappings);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.assembly+json; version=1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.assembly+json; version=1'],
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getAssessmentsAssessmentId
     *
     * @param  string $assessment_id ID of the assessment as an Integer. (required)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\Assessment
     */
    public function getAssessmentsAssessmentId($assessment_id)
    {
        list($response) = $this->getAssessmentsAssessmentIdWithHttpInfo($assessment_id);
        return $response;
    }

    /**
     * Operation getAssessmentsAssessmentIdWithHttpInfo
     *
     * @param  string $assessment_id ID of the assessment as an Integer. (required)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\Assessment, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAssessmentsAssessmentIdWithHttpInfo($assessment_id)
    {
        $returnType = '\Assembly\Client\Model\Assessment';
        $request = $this->getAssessmentsAssessmentIdRequest($assessment_id);

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
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAssessmentsAssessmentIdAsync
     *
     * 
     *
     * @param  string $assessment_id ID of the assessment as an Integer. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAssessmentsAssessmentIdAsync($assessment_id)
    {
        return $this->getAssessmentsAssessmentIdAsyncWithHttpInfo($assessment_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAssessmentsAssessmentIdAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $assessment_id ID of the assessment as an Integer. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAssessmentsAssessmentIdAsyncWithHttpInfo($assessment_id)
    {
        $returnType = '\Assembly\Client\Model\Assessment';
        $request = $this->getAssessmentsAssessmentIdRequest($assessment_id);

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
     * Create request for operation 'getAssessmentsAssessmentId'
     *
     * @param  string $assessment_id ID of the assessment as an Integer. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAssessmentsAssessmentIdRequest($assessment_id)
    {
        // verify the required parameter 'assessment_id' is set
        if ($assessment_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $assessment_id when calling getAssessmentsAssessmentId'
            );
        }

        $resourcePath = '/assessments/{assessment_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($assessment_id !== null) {
            $resourcePath = str_replace(
                '{' . 'assessment_id' . '}',
                ObjectSerializer::toPathValue($assessment_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.assembly+json; version=1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.assembly+json; version=1'],
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getAssessmentsAssessmentIdGradeSet
     *
     * @param  string $assessment_id ID of the assessment as an Integer. (required)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\Gradeset
     */
    public function getAssessmentsAssessmentIdGradeSet($assessment_id)
    {
        list($response) = $this->getAssessmentsAssessmentIdGradeSetWithHttpInfo($assessment_id);
        return $response;
    }

    /**
     * Operation getAssessmentsAssessmentIdGradeSetWithHttpInfo
     *
     * @param  string $assessment_id ID of the assessment as an Integer. (required)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\Gradeset, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAssessmentsAssessmentIdGradeSetWithHttpInfo($assessment_id)
    {
        $returnType = '\Assembly\Client\Model\Gradeset';
        $request = $this->getAssessmentsAssessmentIdGradeSetRequest($assessment_id);

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
                        '\Assembly\Client\Model\Gradeset',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAssessmentsAssessmentIdGradeSetAsync
     *
     * 
     *
     * @param  string $assessment_id ID of the assessment as an Integer. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAssessmentsAssessmentIdGradeSetAsync($assessment_id)
    {
        return $this->getAssessmentsAssessmentIdGradeSetAsyncWithHttpInfo($assessment_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAssessmentsAssessmentIdGradeSetAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $assessment_id ID of the assessment as an Integer. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAssessmentsAssessmentIdGradeSetAsyncWithHttpInfo($assessment_id)
    {
        $returnType = '\Assembly\Client\Model\Gradeset';
        $request = $this->getAssessmentsAssessmentIdGradeSetRequest($assessment_id);

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
     * Create request for operation 'getAssessmentsAssessmentIdGradeSet'
     *
     * @param  string $assessment_id ID of the assessment as an Integer. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAssessmentsAssessmentIdGradeSetRequest($assessment_id)
    {
        // verify the required parameter 'assessment_id' is set
        if ($assessment_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $assessment_id when calling getAssessmentsAssessmentIdGradeSet'
            );
        }

        $resourcePath = '/assessments/{assessment_id}/grade_set';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($assessment_id !== null) {
            $resourcePath = str_replace(
                '{' . 'assessment_id' . '}',
                ObjectSerializer::toPathValue($assessment_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.assembly+json; version=1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.assembly+json; version=1'],
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getAssessmentsAssessmentIdResults
     *
     * @param  string $assessment_id ID of the assessment as an Integer. (required)
     * @param  string $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\Result
     */
    public function getAssessmentsAssessmentIdResults($assessment_id, $students = null)
    {
        list($response) = $this->getAssessmentsAssessmentIdResultsWithHttpInfo($assessment_id, $students);
        return $response;
    }

    /**
     * Operation getAssessmentsAssessmentIdResultsWithHttpInfo
     *
     * @param  string $assessment_id ID of the assessment as an Integer. (required)
     * @param  string $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\Result, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAssessmentsAssessmentIdResultsWithHttpInfo($assessment_id, $students = null)
    {
        $returnType = '\Assembly\Client\Model\Result';
        $request = $this->getAssessmentsAssessmentIdResultsRequest($assessment_id, $students);

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
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAssessmentsAssessmentIdResultsAsync
     *
     * 
     *
     * @param  string $assessment_id ID of the assessment as an Integer. (required)
     * @param  string $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAssessmentsAssessmentIdResultsAsync($assessment_id, $students = null)
    {
        return $this->getAssessmentsAssessmentIdResultsAsyncWithHttpInfo($assessment_id, $students)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAssessmentsAssessmentIdResultsAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $assessment_id ID of the assessment as an Integer. (required)
     * @param  string $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAssessmentsAssessmentIdResultsAsyncWithHttpInfo($assessment_id, $students = null)
    {
        $returnType = '\Assembly\Client\Model\Result';
        $request = $this->getAssessmentsAssessmentIdResultsRequest($assessment_id, $students);

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
     * Create request for operation 'getAssessmentsAssessmentIdResults'
     *
     * @param  string $assessment_id ID of the assessment as an Integer. (required)
     * @param  string $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAssessmentsAssessmentIdResultsRequest($assessment_id, $students = null)
    {
        // verify the required parameter 'assessment_id' is set
        if ($assessment_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $assessment_id when calling getAssessmentsAssessmentIdResults'
            );
        }

        $resourcePath = '/assessments/{assessment_id}/results';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($students !== null) {
            $queryParams['students'] = ObjectSerializer::toQueryValue($students);
        }

        // path params
        if ($assessment_id !== null) {
            $resourcePath = str_replace(
                '{' . 'assessment_id' . '}',
                ObjectSerializer::toPathValue($assessment_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.assembly+json; version=1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.assembly+json; version=1'],
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getAttendances
     *
     * @param  int $student_id ID of the Student as an Integer (optional)
     * @param  int $registration_group_id ID of the registration group as an Integer (optional)
     * @param  string $start_date The start date of the period to return data for (optional)
     * @param  string $end_date The end date of the period to return data for (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\AttendanceList
     */
    public function getAttendances($student_id = null, $registration_group_id = null, $start_date = null, $end_date = null, $page = '1', $per_page = '100', $if_modified_since = null)
    {
        list($response) = $this->getAttendancesWithHttpInfo($student_id, $registration_group_id, $start_date, $end_date, $page, $per_page, $if_modified_since);
        return $response;
    }

    /**
     * Operation getAttendancesWithHttpInfo
     *
     * @param  int $student_id ID of the Student as an Integer (optional)
     * @param  int $registration_group_id ID of the registration group as an Integer (optional)
     * @param  string $start_date The start date of the period to return data for (optional)
     * @param  string $end_date The end date of the period to return data for (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\AttendanceList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAttendancesWithHttpInfo($student_id = null, $registration_group_id = null, $start_date = null, $end_date = null, $page = '1', $per_page = '100', $if_modified_since = null)
    {
        $returnType = '\Assembly\Client\Model\AttendanceList';
        $request = $this->getAttendancesRequest($student_id, $registration_group_id, $start_date, $end_date, $page, $per_page, $if_modified_since);

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
                        '\Assembly\Client\Model\AttendanceList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
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
     * 
     *
     * @param  int $student_id ID of the Student as an Integer (optional)
     * @param  int $registration_group_id ID of the registration group as an Integer (optional)
     * @param  string $start_date The start date of the period to return data for (optional)
     * @param  string $end_date The end date of the period to return data for (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAttendancesAsync($student_id = null, $registration_group_id = null, $start_date = null, $end_date = null, $page = '1', $per_page = '100', $if_modified_since = null)
    {
        return $this->getAttendancesAsyncWithHttpInfo($student_id, $registration_group_id, $start_date, $end_date, $page, $per_page, $if_modified_since)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAttendancesAsyncWithHttpInfo
     *
     * 
     *
     * @param  int $student_id ID of the Student as an Integer (optional)
     * @param  int $registration_group_id ID of the registration group as an Integer (optional)
     * @param  string $start_date The start date of the period to return data for (optional)
     * @param  string $end_date The end date of the period to return data for (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAttendancesAsyncWithHttpInfo($student_id = null, $registration_group_id = null, $start_date = null, $end_date = null, $page = '1', $per_page = '100', $if_modified_since = null)
    {
        $returnType = '\Assembly\Client\Model\AttendanceList';
        $request = $this->getAttendancesRequest($student_id, $registration_group_id, $start_date, $end_date, $page, $per_page, $if_modified_since);

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
     * @param  int $student_id ID of the Student as an Integer (optional)
     * @param  int $registration_group_id ID of the registration group as an Integer (optional)
     * @param  string $start_date The start date of the period to return data for (optional)
     * @param  string $end_date The end date of the period to return data for (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAttendancesRequest($student_id = null, $registration_group_id = null, $start_date = null, $end_date = null, $page = '1', $per_page = '100', $if_modified_since = null)
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
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
        }
        // header params
        if ($if_modified_since !== null) {
            $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.assembly+json; version=1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.assembly+json; version=1'],
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getCalendarEvents
     *
     * @param  string $event_type Return a calendar object type from the underlying MIS (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\CalendarEventList
     */
    public function getCalendarEvents($event_type = null, $page = '1', $per_page = '100', $if_modified_since = null)
    {
        list($response) = $this->getCalendarEventsWithHttpInfo($event_type, $page, $per_page, $if_modified_since);
        return $response;
    }

    /**
     * Operation getCalendarEventsWithHttpInfo
     *
     * @param  string $event_type Return a calendar object type from the underlying MIS (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\CalendarEventList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCalendarEventsWithHttpInfo($event_type = null, $page = '1', $per_page = '100', $if_modified_since = null)
    {
        $returnType = '\Assembly\Client\Model\CalendarEventList';
        $request = $this->getCalendarEventsRequest($event_type, $page, $per_page, $if_modified_since);

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
                        '\Assembly\Client\Model\CalendarEventList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
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
     * 
     *
     * @param  string $event_type Return a calendar object type from the underlying MIS (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCalendarEventsAsync($event_type = null, $page = '1', $per_page = '100', $if_modified_since = null)
    {
        return $this->getCalendarEventsAsyncWithHttpInfo($event_type, $page, $per_page, $if_modified_since)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCalendarEventsAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $event_type Return a calendar object type from the underlying MIS (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCalendarEventsAsyncWithHttpInfo($event_type = null, $page = '1', $per_page = '100', $if_modified_since = null)
    {
        $returnType = '\Assembly\Client\Model\CalendarEventList';
        $request = $this->getCalendarEventsRequest($event_type, $page, $per_page, $if_modified_since);

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
     * @param  string $event_type Return a calendar object type from the underlying MIS (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCalendarEventsRequest($event_type = null, $page = '1', $per_page = '100', $if_modified_since = null)
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
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
        }
        // header params
        if ($if_modified_since !== null) {
            $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.assembly+json; version=1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.assembly+json; version=1'],
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getContacts
     *
     * @param  int $student_id ID of the Student as an Integer (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\ContactList
     */
    public function getContacts($student_id = null, $page = '1', $per_page = '100')
    {
        list($response) = $this->getContactsWithHttpInfo($student_id, $page, $per_page);
        return $response;
    }

    /**
     * Operation getContactsWithHttpInfo
     *
     * @param  int $student_id ID of the Student as an Integer (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\ContactList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getContactsWithHttpInfo($student_id = null, $page = '1', $per_page = '100')
    {
        $returnType = '\Assembly\Client\Model\ContactList';
        $request = $this->getContactsRequest($student_id, $page, $per_page);

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
                        '\Assembly\Client\Model\ContactList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
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
     * 
     *
     * @param  int $student_id ID of the Student as an Integer (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getContactsAsync($student_id = null, $page = '1', $per_page = '100')
    {
        return $this->getContactsAsyncWithHttpInfo($student_id, $page, $per_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getContactsAsyncWithHttpInfo
     *
     * 
     *
     * @param  int $student_id ID of the Student as an Integer (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getContactsAsyncWithHttpInfo($student_id = null, $page = '1', $per_page = '100')
    {
        $returnType = '\Assembly\Client\Model\ContactList';
        $request = $this->getContactsRequest($student_id, $page, $per_page);

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
     * @param  int $student_id ID of the Student as an Integer (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getContactsRequest($student_id = null, $page = '1', $per_page = '100')
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
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.assembly+json; version=1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.assembly+json; version=1'],
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getExclusions
     *
     * @param  string $start_date The start date of the period to return data for (optional)
     * @param  string $end_date The end date of the period to return data for (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\ExclusionList
     */
    public function getExclusions($start_date = null, $end_date = null, $page = '1', $per_page = '100')
    {
        list($response) = $this->getExclusionsWithHttpInfo($start_date, $end_date, $page, $per_page);
        return $response;
    }

    /**
     * Operation getExclusionsWithHttpInfo
     *
     * @param  string $start_date The start date of the period to return data for (optional)
     * @param  string $end_date The end date of the period to return data for (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\ExclusionList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getExclusionsWithHttpInfo($start_date = null, $end_date = null, $page = '1', $per_page = '100')
    {
        $returnType = '\Assembly\Client\Model\ExclusionList';
        $request = $this->getExclusionsRequest($start_date, $end_date, $page, $per_page);

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
                        '\Assembly\Client\Model\ExclusionList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
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
     * 
     *
     * @param  string $start_date The start date of the period to return data for (optional)
     * @param  string $end_date The end date of the period to return data for (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getExclusionsAsync($start_date = null, $end_date = null, $page = '1', $per_page = '100')
    {
        return $this->getExclusionsAsyncWithHttpInfo($start_date, $end_date, $page, $per_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getExclusionsAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $start_date The start date of the period to return data for (optional)
     * @param  string $end_date The end date of the period to return data for (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getExclusionsAsyncWithHttpInfo($start_date = null, $end_date = null, $page = '1', $per_page = '100')
    {
        $returnType = '\Assembly\Client\Model\ExclusionList';
        $request = $this->getExclusionsRequest($start_date, $end_date, $page, $per_page);

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
     * @param  string $start_date The start date of the period to return data for (optional)
     * @param  string $end_date The end date of the period to return data for (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getExclusionsRequest($start_date = null, $end_date = null, $page = '1', $per_page = '100')
    {

        $resourcePath = '/exclusions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($start_date !== null) {
            $queryParams['start_date'] = ObjectSerializer::toQueryValue($start_date);
        }
        // query params
        if ($end_date !== null) {
            $queryParams['end_date'] = ObjectSerializer::toQueryValue($end_date);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.assembly+json; version=1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.assembly+json; version=1'],
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getExclusionsStudentId
     *
     * @param  string $student_id ID of the Student as an Integer (required)
     * @param  string $start_date The start date of the period to return data for (optional)
     * @param  string $end_date The end date of the period to return data for (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\ExclusionList
     */
    public function getExclusionsStudentId($student_id, $start_date = null, $end_date = null, $page = '1', $per_page = '100')
    {
        list($response) = $this->getExclusionsStudentIdWithHttpInfo($student_id, $start_date, $end_date, $page, $per_page);
        return $response;
    }

    /**
     * Operation getExclusionsStudentIdWithHttpInfo
     *
     * @param  string $student_id ID of the Student as an Integer (required)
     * @param  string $start_date The start date of the period to return data for (optional)
     * @param  string $end_date The end date of the period to return data for (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\ExclusionList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getExclusionsStudentIdWithHttpInfo($student_id, $start_date = null, $end_date = null, $page = '1', $per_page = '100')
    {
        $returnType = '\Assembly\Client\Model\ExclusionList';
        $request = $this->getExclusionsStudentIdRequest($student_id, $start_date, $end_date, $page, $per_page);

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
                        '\Assembly\Client\Model\ExclusionList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getExclusionsStudentIdAsync
     *
     * 
     *
     * @param  string $student_id ID of the Student as an Integer (required)
     * @param  string $start_date The start date of the period to return data for (optional)
     * @param  string $end_date The end date of the period to return data for (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getExclusionsStudentIdAsync($student_id, $start_date = null, $end_date = null, $page = '1', $per_page = '100')
    {
        return $this->getExclusionsStudentIdAsyncWithHttpInfo($student_id, $start_date, $end_date, $page, $per_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getExclusionsStudentIdAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $student_id ID of the Student as an Integer (required)
     * @param  string $start_date The start date of the period to return data for (optional)
     * @param  string $end_date The end date of the period to return data for (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getExclusionsStudentIdAsyncWithHttpInfo($student_id, $start_date = null, $end_date = null, $page = '1', $per_page = '100')
    {
        $returnType = '\Assembly\Client\Model\ExclusionList';
        $request = $this->getExclusionsStudentIdRequest($student_id, $start_date, $end_date, $page, $per_page);

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
     * Create request for operation 'getExclusionsStudentId'
     *
     * @param  string $student_id ID of the Student as an Integer (required)
     * @param  string $start_date The start date of the period to return data for (optional)
     * @param  string $end_date The end date of the period to return data for (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getExclusionsStudentIdRequest($student_id, $start_date = null, $end_date = null, $page = '1', $per_page = '100')
    {
        // verify the required parameter 'student_id' is set
        if ($student_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $student_id when calling getExclusionsStudentId'
            );
        }

        $resourcePath = '/exclusions/{student_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($start_date !== null) {
            $queryParams['start_date'] = ObjectSerializer::toQueryValue($start_date);
        }
        // query params
        if ($end_date !== null) {
            $queryParams['end_date'] = ObjectSerializer::toQueryValue($end_date);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
        }

        // path params
        if ($student_id !== null) {
            $resourcePath = str_replace(
                '{' . 'student_id' . '}',
                ObjectSerializer::toPathValue($student_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.assembly+json; version=1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.assembly+json; version=1'],
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getFacetFacetId
     *
     * @param  string $facet_id ID of the facet as an Integer. (required)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\Facet
     */
    public function getFacetFacetId($facet_id)
    {
        list($response) = $this->getFacetFacetIdWithHttpInfo($facet_id);
        return $response;
    }

    /**
     * Operation getFacetFacetIdWithHttpInfo
     *
     * @param  string $facet_id ID of the facet as an Integer. (required)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\Facet, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFacetFacetIdWithHttpInfo($facet_id)
    {
        $returnType = '\Assembly\Client\Model\Facet';
        $request = $this->getFacetFacetIdRequest($facet_id);

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
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getFacetFacetIdAsync
     *
     * 
     *
     * @param  string $facet_id ID of the facet as an Integer. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFacetFacetIdAsync($facet_id)
    {
        return $this->getFacetFacetIdAsyncWithHttpInfo($facet_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFacetFacetIdAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $facet_id ID of the facet as an Integer. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFacetFacetIdAsyncWithHttpInfo($facet_id)
    {
        $returnType = '\Assembly\Client\Model\Facet';
        $request = $this->getFacetFacetIdRequest($facet_id);

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
     * Create request for operation 'getFacetFacetId'
     *
     * @param  string $facet_id ID of the facet as an Integer. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getFacetFacetIdRequest($facet_id)
    {
        // verify the required parameter 'facet_id' is set
        if ($facet_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $facet_id when calling getFacetFacetId'
            );
        }

        $resourcePath = '/facet/{facet_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($facet_id !== null) {
            $resourcePath = str_replace(
                '{' . 'facet_id' . '}',
                ObjectSerializer::toPathValue($facet_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.assembly+json; version=1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.assembly+json; version=1'],
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getFacets
     *
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\FacetList
     */
    public function getFacets($page = '1', $per_page = '100')
    {
        list($response) = $this->getFacetsWithHttpInfo($page, $per_page);
        return $response;
    }

    /**
     * Operation getFacetsWithHttpInfo
     *
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\FacetList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFacetsWithHttpInfo($page = '1', $per_page = '100')
    {
        $returnType = '\Assembly\Client\Model\FacetList';
        $request = $this->getFacetsRequest($page, $per_page);

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
                        '\Assembly\Client\Model\FacetList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
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
     * 
     *
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFacetsAsync($page = '1', $per_page = '100')
    {
        return $this->getFacetsAsyncWithHttpInfo($page, $per_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFacetsAsyncWithHttpInfo
     *
     * 
     *
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFacetsAsyncWithHttpInfo($page = '1', $per_page = '100')
    {
        $returnType = '\Assembly\Client\Model\FacetList';
        $request = $this->getFacetsRequest($page, $per_page);

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
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getFacetsRequest($page = '1', $per_page = '100')
    {

        $resourcePath = '/facets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.assembly+json; version=1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.assembly+json; version=1'],
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getRegistrationGroups
     *
     * @param  string $year_code Filter by a specific NC year code (optional)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\RegistrationGroupList
     */
    public function getRegistrationGroups($year_code = null, $date = null, $academic_year_id = null, $page = '1', $per_page = '100', $if_modified_since = null)
    {
        list($response) = $this->getRegistrationGroupsWithHttpInfo($year_code, $date, $academic_year_id, $page, $per_page, $if_modified_since);
        return $response;
    }

    /**
     * Operation getRegistrationGroupsWithHttpInfo
     *
     * @param  string $year_code Filter by a specific NC year code (optional)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\RegistrationGroupList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRegistrationGroupsWithHttpInfo($year_code = null, $date = null, $academic_year_id = null, $page = '1', $per_page = '100', $if_modified_since = null)
    {
        $returnType = '\Assembly\Client\Model\RegistrationGroupList';
        $request = $this->getRegistrationGroupsRequest($year_code, $date, $academic_year_id, $page, $per_page, $if_modified_since);

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
                        '\Assembly\Client\Model\RegistrationGroupList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
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
     * 
     *
     * @param  string $year_code Filter by a specific NC year code (optional)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRegistrationGroupsAsync($year_code = null, $date = null, $academic_year_id = null, $page = '1', $per_page = '100', $if_modified_since = null)
    {
        return $this->getRegistrationGroupsAsyncWithHttpInfo($year_code, $date, $academic_year_id, $page, $per_page, $if_modified_since)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getRegistrationGroupsAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $year_code Filter by a specific NC year code (optional)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRegistrationGroupsAsyncWithHttpInfo($year_code = null, $date = null, $academic_year_id = null, $page = '1', $per_page = '100', $if_modified_since = null)
    {
        $returnType = '\Assembly\Client\Model\RegistrationGroupList';
        $request = $this->getRegistrationGroupsRequest($year_code, $date, $academic_year_id, $page, $per_page, $if_modified_since);

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
     * @param  string $year_code Filter by a specific NC year code (optional)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getRegistrationGroupsRequest($year_code = null, $date = null, $academic_year_id = null, $page = '1', $per_page = '100', $if_modified_since = null)
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
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
        }
        // header params
        if ($if_modified_since !== null) {
            $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.assembly+json; version=1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.assembly+json; version=1'],
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getRegistrationGroupsGroupId
     *
     * @param  string $group_id ID of the Year Group as an Integer (required)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\RegistrationGroup
     */
    public function getRegistrationGroupsGroupId($group_id, $date = null, $academic_year_id = null, $if_modified_since = null)
    {
        list($response) = $this->getRegistrationGroupsGroupIdWithHttpInfo($group_id, $date, $academic_year_id, $if_modified_since);
        return $response;
    }

    /**
     * Operation getRegistrationGroupsGroupIdWithHttpInfo
     *
     * @param  string $group_id ID of the Year Group as an Integer (required)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\RegistrationGroup, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRegistrationGroupsGroupIdWithHttpInfo($group_id, $date = null, $academic_year_id = null, $if_modified_since = null)
    {
        $returnType = '\Assembly\Client\Model\RegistrationGroup';
        $request = $this->getRegistrationGroupsGroupIdRequest($group_id, $date, $academic_year_id, $if_modified_since);

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
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getRegistrationGroupsGroupIdAsync
     *
     * 
     *
     * @param  string $group_id ID of the Year Group as an Integer (required)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRegistrationGroupsGroupIdAsync($group_id, $date = null, $academic_year_id = null, $if_modified_since = null)
    {
        return $this->getRegistrationGroupsGroupIdAsyncWithHttpInfo($group_id, $date, $academic_year_id, $if_modified_since)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getRegistrationGroupsGroupIdAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $group_id ID of the Year Group as an Integer (required)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRegistrationGroupsGroupIdAsyncWithHttpInfo($group_id, $date = null, $academic_year_id = null, $if_modified_since = null)
    {
        $returnType = '\Assembly\Client\Model\RegistrationGroup';
        $request = $this->getRegistrationGroupsGroupIdRequest($group_id, $date, $academic_year_id, $if_modified_since);

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
     * Create request for operation 'getRegistrationGroupsGroupId'
     *
     * @param  string $group_id ID of the Year Group as an Integer (required)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getRegistrationGroupsGroupIdRequest($group_id, $date = null, $academic_year_id = null, $if_modified_since = null)
    {
        // verify the required parameter 'group_id' is set
        if ($group_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $group_id when calling getRegistrationGroupsGroupId'
            );
        }

        $resourcePath = '/registration_groups/{group_id}';
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
        // header params
        if ($if_modified_since !== null) {
            $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
        }

        // path params
        if ($group_id !== null) {
            $resourcePath = str_replace(
                '{' . 'group_id' . '}',
                ObjectSerializer::toPathValue($group_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.assembly+json; version=1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.assembly+json; version=1'],
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getRegistrationGroupsGroupIdStudents
     *
     * @param  string $group_id ID of the Year Group as an Integer (required)
     * @param  string $year_code Filter by a specific NC year code (optional)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     * @param  bool $demographics Return demographic information along with the person (requires appropriate scope) (optional, default to false)
     * @param  bool $care Return care information along with this object, depends on inclusion of demographics (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\StudentList
     */
    public function getRegistrationGroupsGroupIdStudents($group_id, $year_code = null, $date = null, $academic_year_id = null, $demographics = 'false', $care = 'false', $page = '1', $per_page = '100', $if_modified_since = null)
    {
        list($response) = $this->getRegistrationGroupsGroupIdStudentsWithHttpInfo($group_id, $year_code, $date, $academic_year_id, $demographics, $care, $page, $per_page, $if_modified_since);
        return $response;
    }

    /**
     * Operation getRegistrationGroupsGroupIdStudentsWithHttpInfo
     *
     * @param  string $group_id ID of the Year Group as an Integer (required)
     * @param  string $year_code Filter by a specific NC year code (optional)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     * @param  bool $demographics Return demographic information along with the person (requires appropriate scope) (optional, default to false)
     * @param  bool $care Return care information along with this object, depends on inclusion of demographics (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\StudentList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRegistrationGroupsGroupIdStudentsWithHttpInfo($group_id, $year_code = null, $date = null, $academic_year_id = null, $demographics = 'false', $care = 'false', $page = '1', $per_page = '100', $if_modified_since = null)
    {
        $returnType = '\Assembly\Client\Model\StudentList';
        $request = $this->getRegistrationGroupsGroupIdStudentsRequest($group_id, $year_code, $date, $academic_year_id, $demographics, $care, $page, $per_page, $if_modified_since);

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
                        '\Assembly\Client\Model\StudentList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getRegistrationGroupsGroupIdStudentsAsync
     *
     * 
     *
     * @param  string $group_id ID of the Year Group as an Integer (required)
     * @param  string $year_code Filter by a specific NC year code (optional)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     * @param  bool $demographics Return demographic information along with the person (requires appropriate scope) (optional, default to false)
     * @param  bool $care Return care information along with this object, depends on inclusion of demographics (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRegistrationGroupsGroupIdStudentsAsync($group_id, $year_code = null, $date = null, $academic_year_id = null, $demographics = 'false', $care = 'false', $page = '1', $per_page = '100', $if_modified_since = null)
    {
        return $this->getRegistrationGroupsGroupIdStudentsAsyncWithHttpInfo($group_id, $year_code, $date, $academic_year_id, $demographics, $care, $page, $per_page, $if_modified_since)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getRegistrationGroupsGroupIdStudentsAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $group_id ID of the Year Group as an Integer (required)
     * @param  string $year_code Filter by a specific NC year code (optional)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     * @param  bool $demographics Return demographic information along with the person (requires appropriate scope) (optional, default to false)
     * @param  bool $care Return care information along with this object, depends on inclusion of demographics (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRegistrationGroupsGroupIdStudentsAsyncWithHttpInfo($group_id, $year_code = null, $date = null, $academic_year_id = null, $demographics = 'false', $care = 'false', $page = '1', $per_page = '100', $if_modified_since = null)
    {
        $returnType = '\Assembly\Client\Model\StudentList';
        $request = $this->getRegistrationGroupsGroupIdStudentsRequest($group_id, $year_code, $date, $academic_year_id, $demographics, $care, $page, $per_page, $if_modified_since);

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
     * Create request for operation 'getRegistrationGroupsGroupIdStudents'
     *
     * @param  string $group_id ID of the Year Group as an Integer (required)
     * @param  string $year_code Filter by a specific NC year code (optional)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     * @param  bool $demographics Return demographic information along with the person (requires appropriate scope) (optional, default to false)
     * @param  bool $care Return care information along with this object, depends on inclusion of demographics (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getRegistrationGroupsGroupIdStudentsRequest($group_id, $year_code = null, $date = null, $academic_year_id = null, $demographics = 'false', $care = 'false', $page = '1', $per_page = '100', $if_modified_since = null)
    {
        // verify the required parameter 'group_id' is set
        if ($group_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $group_id when calling getRegistrationGroupsGroupIdStudents'
            );
        }

        $resourcePath = '/registration_groups/{group_id}/students';
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
        if ($demographics !== null) {
            $queryParams['demographics'] = ObjectSerializer::toQueryValue($demographics);
        }
        // query params
        if ($care !== null) {
            $queryParams['care'] = ObjectSerializer::toQueryValue($care);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
        }
        // header params
        if ($if_modified_since !== null) {
            $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
        }

        // path params
        if ($group_id !== null) {
            $resourcePath = str_replace(
                '{' . 'group_id' . '}',
                ObjectSerializer::toPathValue($group_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.assembly+json; version=1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.assembly+json; version=1'],
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getSchoolDetails
     *
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\SchoolDetails
     */
    public function getSchoolDetails()
    {
        list($response) = $this->getSchoolDetailsWithHttpInfo();
        return $response;
    }

    /**
     * Operation getSchoolDetailsWithHttpInfo
     *
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\SchoolDetails, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSchoolDetailsWithHttpInfo()
    {
        $returnType = '\Assembly\Client\Model\SchoolDetails';
        $request = $this->getSchoolDetailsRequest();

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
                        '\Assembly\Client\Model\SchoolDetails',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getSchoolDetailsAsync
     *
     * 
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSchoolDetailsAsync()
    {
        return $this->getSchoolDetailsAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getSchoolDetailsAsyncWithHttpInfo
     *
     * 
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSchoolDetailsAsyncWithHttpInfo()
    {
        $returnType = '\Assembly\Client\Model\SchoolDetails';
        $request = $this->getSchoolDetailsRequest();

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
     * Create request for operation 'getSchoolDetails'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSchoolDetailsRequest()
    {

        $resourcePath = '/school_details';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.assembly+json; version=1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.assembly+json; version=1'],
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getStaffAbsences
     *
     * @param  string $start_date The start date of the period to return data for (optional)
     * @param  string $end_date The end date of the period to return data for (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\StaffAbsenceList
     */
    public function getStaffAbsences($start_date = null, $end_date = null, $page = '1', $per_page = '100', $if_modified_since = null)
    {
        list($response) = $this->getStaffAbsencesWithHttpInfo($start_date, $end_date, $page, $per_page, $if_modified_since);
        return $response;
    }

    /**
     * Operation getStaffAbsencesWithHttpInfo
     *
     * @param  string $start_date The start date of the period to return data for (optional)
     * @param  string $end_date The end date of the period to return data for (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\StaffAbsenceList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getStaffAbsencesWithHttpInfo($start_date = null, $end_date = null, $page = '1', $per_page = '100', $if_modified_since = null)
    {
        $returnType = '\Assembly\Client\Model\StaffAbsenceList';
        $request = $this->getStaffAbsencesRequest($start_date, $end_date, $page, $per_page, $if_modified_since);

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
                        '\Assembly\Client\Model\StaffAbsenceList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
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
     * 
     *
     * @param  string $start_date The start date of the period to return data for (optional)
     * @param  string $end_date The end date of the period to return data for (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getStaffAbsencesAsync($start_date = null, $end_date = null, $page = '1', $per_page = '100', $if_modified_since = null)
    {
        return $this->getStaffAbsencesAsyncWithHttpInfo($start_date, $end_date, $page, $per_page, $if_modified_since)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getStaffAbsencesAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $start_date The start date of the period to return data for (optional)
     * @param  string $end_date The end date of the period to return data for (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getStaffAbsencesAsyncWithHttpInfo($start_date = null, $end_date = null, $page = '1', $per_page = '100', $if_modified_since = null)
    {
        $returnType = '\Assembly\Client\Model\StaffAbsenceList';
        $request = $this->getStaffAbsencesRequest($start_date, $end_date, $page, $per_page, $if_modified_since);

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
     * @param  string $start_date The start date of the period to return data for (optional)
     * @param  string $end_date The end date of the period to return data for (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getStaffAbsencesRequest($start_date = null, $end_date = null, $page = '1', $per_page = '100', $if_modified_since = null)
    {

        $resourcePath = '/staff_absences';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($start_date !== null) {
            $queryParams['start_date'] = ObjectSerializer::toQueryValue($start_date);
        }
        // query params
        if ($end_date !== null) {
            $queryParams['end_date'] = ObjectSerializer::toQueryValue($end_date);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
        }
        // header params
        if ($if_modified_since !== null) {
            $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.assembly+json; version=1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.assembly+json; version=1'],
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getStaffContracts
     *
     * @param  string $date Filter for a specific date (optional)
     * @param  bool $roles Return roles information along with this object (optional, default to false)
     * @param  bool $salaries Return salary information along with this object (optional, default to false)
     * @param  bool $allowances Return allowances information along with this object (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\StaffContractList
     */
    public function getStaffContracts($date = null, $roles = 'false', $salaries = 'false', $allowances = 'false', $page = '1', $per_page = '100', $if_modified_since = null)
    {
        list($response) = $this->getStaffContractsWithHttpInfo($date, $roles, $salaries, $allowances, $page, $per_page, $if_modified_since);
        return $response;
    }

    /**
     * Operation getStaffContractsWithHttpInfo
     *
     * @param  string $date Filter for a specific date (optional)
     * @param  bool $roles Return roles information along with this object (optional, default to false)
     * @param  bool $salaries Return salary information along with this object (optional, default to false)
     * @param  bool $allowances Return allowances information along with this object (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\StaffContractList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getStaffContractsWithHttpInfo($date = null, $roles = 'false', $salaries = 'false', $allowances = 'false', $page = '1', $per_page = '100', $if_modified_since = null)
    {
        $returnType = '\Assembly\Client\Model\StaffContractList';
        $request = $this->getStaffContractsRequest($date, $roles, $salaries, $allowances, $page, $per_page, $if_modified_since);

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
                        '\Assembly\Client\Model\StaffContractList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
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
     * 
     *
     * @param  string $date Filter for a specific date (optional)
     * @param  bool $roles Return roles information along with this object (optional, default to false)
     * @param  bool $salaries Return salary information along with this object (optional, default to false)
     * @param  bool $allowances Return allowances information along with this object (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getStaffContractsAsync($date = null, $roles = 'false', $salaries = 'false', $allowances = 'false', $page = '1', $per_page = '100', $if_modified_since = null)
    {
        return $this->getStaffContractsAsyncWithHttpInfo($date, $roles, $salaries, $allowances, $page, $per_page, $if_modified_since)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getStaffContractsAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $date Filter for a specific date (optional)
     * @param  bool $roles Return roles information along with this object (optional, default to false)
     * @param  bool $salaries Return salary information along with this object (optional, default to false)
     * @param  bool $allowances Return allowances information along with this object (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getStaffContractsAsyncWithHttpInfo($date = null, $roles = 'false', $salaries = 'false', $allowances = 'false', $page = '1', $per_page = '100', $if_modified_since = null)
    {
        $returnType = '\Assembly\Client\Model\StaffContractList';
        $request = $this->getStaffContractsRequest($date, $roles, $salaries, $allowances, $page, $per_page, $if_modified_since);

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
     * @param  string $date Filter for a specific date (optional)
     * @param  bool $roles Return roles information along with this object (optional, default to false)
     * @param  bool $salaries Return salary information along with this object (optional, default to false)
     * @param  bool $allowances Return allowances information along with this object (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getStaffContractsRequest($date = null, $roles = 'false', $salaries = 'false', $allowances = 'false', $page = '1', $per_page = '100', $if_modified_since = null)
    {

        $resourcePath = '/staff_contracts';
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
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
        }
        // header params
        if ($if_modified_since !== null) {
            $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.assembly+json; version=1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.assembly+json; version=1'],
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getStaffContractsStaffMemberId
     *
     * @param  string $staff_member_id ID of the Staff Member as an Integer (required)
     * @param  string $date Filter for a specific date (optional)
     * @param  bool $roles Return roles information along with this object (optional, default to false)
     * @param  bool $salaries Return salary information along with this object (optional, default to false)
     * @param  bool $allowances Return allowances information along with this object (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\StaffContractList
     */
    public function getStaffContractsStaffMemberId($staff_member_id, $date = null, $roles = 'false', $salaries = 'false', $allowances = 'false', $page = '1', $per_page = '100', $if_modified_since = null)
    {
        list($response) = $this->getStaffContractsStaffMemberIdWithHttpInfo($staff_member_id, $date, $roles, $salaries, $allowances, $page, $per_page, $if_modified_since);
        return $response;
    }

    /**
     * Operation getStaffContractsStaffMemberIdWithHttpInfo
     *
     * @param  string $staff_member_id ID of the Staff Member as an Integer (required)
     * @param  string $date Filter for a specific date (optional)
     * @param  bool $roles Return roles information along with this object (optional, default to false)
     * @param  bool $salaries Return salary information along with this object (optional, default to false)
     * @param  bool $allowances Return allowances information along with this object (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\StaffContractList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getStaffContractsStaffMemberIdWithHttpInfo($staff_member_id, $date = null, $roles = 'false', $salaries = 'false', $allowances = 'false', $page = '1', $per_page = '100', $if_modified_since = null)
    {
        $returnType = '\Assembly\Client\Model\StaffContractList';
        $request = $this->getStaffContractsStaffMemberIdRequest($staff_member_id, $date, $roles, $salaries, $allowances, $page, $per_page, $if_modified_since);

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
                        '\Assembly\Client\Model\StaffContractList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getStaffContractsStaffMemberIdAsync
     *
     * 
     *
     * @param  string $staff_member_id ID of the Staff Member as an Integer (required)
     * @param  string $date Filter for a specific date (optional)
     * @param  bool $roles Return roles information along with this object (optional, default to false)
     * @param  bool $salaries Return salary information along with this object (optional, default to false)
     * @param  bool $allowances Return allowances information along with this object (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getStaffContractsStaffMemberIdAsync($staff_member_id, $date = null, $roles = 'false', $salaries = 'false', $allowances = 'false', $page = '1', $per_page = '100', $if_modified_since = null)
    {
        return $this->getStaffContractsStaffMemberIdAsyncWithHttpInfo($staff_member_id, $date, $roles, $salaries, $allowances, $page, $per_page, $if_modified_since)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getStaffContractsStaffMemberIdAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $staff_member_id ID of the Staff Member as an Integer (required)
     * @param  string $date Filter for a specific date (optional)
     * @param  bool $roles Return roles information along with this object (optional, default to false)
     * @param  bool $salaries Return salary information along with this object (optional, default to false)
     * @param  bool $allowances Return allowances information along with this object (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getStaffContractsStaffMemberIdAsyncWithHttpInfo($staff_member_id, $date = null, $roles = 'false', $salaries = 'false', $allowances = 'false', $page = '1', $per_page = '100', $if_modified_since = null)
    {
        $returnType = '\Assembly\Client\Model\StaffContractList';
        $request = $this->getStaffContractsStaffMemberIdRequest($staff_member_id, $date, $roles, $salaries, $allowances, $page, $per_page, $if_modified_since);

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
     * Create request for operation 'getStaffContractsStaffMemberId'
     *
     * @param  string $staff_member_id ID of the Staff Member as an Integer (required)
     * @param  string $date Filter for a specific date (optional)
     * @param  bool $roles Return roles information along with this object (optional, default to false)
     * @param  bool $salaries Return salary information along with this object (optional, default to false)
     * @param  bool $allowances Return allowances information along with this object (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getStaffContractsStaffMemberIdRequest($staff_member_id, $date = null, $roles = 'false', $salaries = 'false', $allowances = 'false', $page = '1', $per_page = '100', $if_modified_since = null)
    {
        // verify the required parameter 'staff_member_id' is set
        if ($staff_member_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $staff_member_id when calling getStaffContractsStaffMemberId'
            );
        }

        $resourcePath = '/staff_contracts/{staff_member_id}';
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
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
        }
        // header params
        if ($if_modified_since !== null) {
            $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
        }

        // path params
        if ($staff_member_id !== null) {
            $resourcePath = str_replace(
                '{' . 'staff_member_id' . '}',
                ObjectSerializer::toPathValue($staff_member_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.assembly+json; version=1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.assembly+json; version=1'],
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getStaffMembers
     *
     * @param  bool $teachers_only Return only staff who are teachers (optional, default to false)
     * @param  bool $demographics Return demographic information along with the person (requires appropriate scope) (optional, default to false)
     * @param  bool $qualifications Include HLTA status, QT status, QT route and previous degree information (requires appropriate scope) (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\StaffMemberList
     */
    public function getStaffMembers($teachers_only = 'false', $demographics = 'false', $qualifications = 'false', $page = '1', $per_page = '100', $if_modified_since = null)
    {
        list($response) = $this->getStaffMembersWithHttpInfo($teachers_only, $demographics, $qualifications, $page, $per_page, $if_modified_since);
        return $response;
    }

    /**
     * Operation getStaffMembersWithHttpInfo
     *
     * @param  bool $teachers_only Return only staff who are teachers (optional, default to false)
     * @param  bool $demographics Return demographic information along with the person (requires appropriate scope) (optional, default to false)
     * @param  bool $qualifications Include HLTA status, QT status, QT route and previous degree information (requires appropriate scope) (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\StaffMemberList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getStaffMembersWithHttpInfo($teachers_only = 'false', $demographics = 'false', $qualifications = 'false', $page = '1', $per_page = '100', $if_modified_since = null)
    {
        $returnType = '\Assembly\Client\Model\StaffMemberList';
        $request = $this->getStaffMembersRequest($teachers_only, $demographics, $qualifications, $page, $per_page, $if_modified_since);

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
                        '\Assembly\Client\Model\StaffMemberList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
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
     * 
     *
     * @param  bool $teachers_only Return only staff who are teachers (optional, default to false)
     * @param  bool $demographics Return demographic information along with the person (requires appropriate scope) (optional, default to false)
     * @param  bool $qualifications Include HLTA status, QT status, QT route and previous degree information (requires appropriate scope) (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getStaffMembersAsync($teachers_only = 'false', $demographics = 'false', $qualifications = 'false', $page = '1', $per_page = '100', $if_modified_since = null)
    {
        return $this->getStaffMembersAsyncWithHttpInfo($teachers_only, $demographics, $qualifications, $page, $per_page, $if_modified_since)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getStaffMembersAsyncWithHttpInfo
     *
     * 
     *
     * @param  bool $teachers_only Return only staff who are teachers (optional, default to false)
     * @param  bool $demographics Return demographic information along with the person (requires appropriate scope) (optional, default to false)
     * @param  bool $qualifications Include HLTA status, QT status, QT route and previous degree information (requires appropriate scope) (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getStaffMembersAsyncWithHttpInfo($teachers_only = 'false', $demographics = 'false', $qualifications = 'false', $page = '1', $per_page = '100', $if_modified_since = null)
    {
        $returnType = '\Assembly\Client\Model\StaffMemberList';
        $request = $this->getStaffMembersRequest($teachers_only, $demographics, $qualifications, $page, $per_page, $if_modified_since);

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
     * @param  bool $teachers_only Return only staff who are teachers (optional, default to false)
     * @param  bool $demographics Return demographic information along with the person (requires appropriate scope) (optional, default to false)
     * @param  bool $qualifications Include HLTA status, QT status, QT route and previous degree information (requires appropriate scope) (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getStaffMembersRequest($teachers_only = 'false', $demographics = 'false', $qualifications = 'false', $page = '1', $per_page = '100', $if_modified_since = null)
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
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
        }
        // header params
        if ($if_modified_since !== null) {
            $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.assembly+json; version=1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.assembly+json; version=1'],
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getStaffMembersStaffMemberId
     *
     * @param  string $staff_member_id ID of the Staff Member as an Integer (required)
     * @param  bool $demographics Return demographic information along with the person (requires appropriate scope) (optional, default to false)
     * @param  bool $qualifications Include HLTA status, QT status, QT route and previous degree information (requires appropriate scope) (optional, default to false)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\StaffMember
     */
    public function getStaffMembersStaffMemberId($staff_member_id, $demographics = 'false', $qualifications = 'false', $if_modified_since = null)
    {
        list($response) = $this->getStaffMembersStaffMemberIdWithHttpInfo($staff_member_id, $demographics, $qualifications, $if_modified_since);
        return $response;
    }

    /**
     * Operation getStaffMembersStaffMemberIdWithHttpInfo
     *
     * @param  string $staff_member_id ID of the Staff Member as an Integer (required)
     * @param  bool $demographics Return demographic information along with the person (requires appropriate scope) (optional, default to false)
     * @param  bool $qualifications Include HLTA status, QT status, QT route and previous degree information (requires appropriate scope) (optional, default to false)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\StaffMember, HTTP status code, HTTP response headers (array of strings)
     */
    public function getStaffMembersStaffMemberIdWithHttpInfo($staff_member_id, $demographics = 'false', $qualifications = 'false', $if_modified_since = null)
    {
        $returnType = '\Assembly\Client\Model\StaffMember';
        $request = $this->getStaffMembersStaffMemberIdRequest($staff_member_id, $demographics, $qualifications, $if_modified_since);

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
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getStaffMembersStaffMemberIdAsync
     *
     * 
     *
     * @param  string $staff_member_id ID of the Staff Member as an Integer (required)
     * @param  bool $demographics Return demographic information along with the person (requires appropriate scope) (optional, default to false)
     * @param  bool $qualifications Include HLTA status, QT status, QT route and previous degree information (requires appropriate scope) (optional, default to false)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getStaffMembersStaffMemberIdAsync($staff_member_id, $demographics = 'false', $qualifications = 'false', $if_modified_since = null)
    {
        return $this->getStaffMembersStaffMemberIdAsyncWithHttpInfo($staff_member_id, $demographics, $qualifications, $if_modified_since)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getStaffMembersStaffMemberIdAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $staff_member_id ID of the Staff Member as an Integer (required)
     * @param  bool $demographics Return demographic information along with the person (requires appropriate scope) (optional, default to false)
     * @param  bool $qualifications Include HLTA status, QT status, QT route and previous degree information (requires appropriate scope) (optional, default to false)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getStaffMembersStaffMemberIdAsyncWithHttpInfo($staff_member_id, $demographics = 'false', $qualifications = 'false', $if_modified_since = null)
    {
        $returnType = '\Assembly\Client\Model\StaffMember';
        $request = $this->getStaffMembersStaffMemberIdRequest($staff_member_id, $demographics, $qualifications, $if_modified_since);

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
     * Create request for operation 'getStaffMembersStaffMemberId'
     *
     * @param  string $staff_member_id ID of the Staff Member as an Integer (required)
     * @param  bool $demographics Return demographic information along with the person (requires appropriate scope) (optional, default to false)
     * @param  bool $qualifications Include HLTA status, QT status, QT route and previous degree information (requires appropriate scope) (optional, default to false)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getStaffMembersStaffMemberIdRequest($staff_member_id, $demographics = 'false', $qualifications = 'false', $if_modified_since = null)
    {
        // verify the required parameter 'staff_member_id' is set
        if ($staff_member_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $staff_member_id when calling getStaffMembersStaffMemberId'
            );
        }

        $resourcePath = '/staff_members/{staff_member_id}';
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
        // header params
        if ($if_modified_since !== null) {
            $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
        }

        // path params
        if ($staff_member_id !== null) {
            $resourcePath = str_replace(
                '{' . 'staff_member_id' . '}',
                ObjectSerializer::toPathValue($staff_member_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.assembly+json; version=1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.assembly+json; version=1'],
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getStudents
     *
     * @param  string $year_code Filter by a specific NC year code (optional)
     * @param  string $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (optional)
     * @param  string $date Filter for a specific date (optional)
     * @param  bool $demographics Return demographic information along with the person (requires appropriate scope) (optional, default to false)
     * @param  bool $contacts Return contact information along with this object (optional, default to false)
     * @param  bool $sen_needs Return Special Educational Need information along with this object (optional, default to false)
     * @param  bool $addresses Return address information along with this object (optional, default to false)
     * @param  bool $care Return care information along with this object, depends on inclusion of demographics (optional, default to false)
     * @param  bool $languages Return language information along with this object (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\StudentList
     */
    public function getStudents($year_code = null, $students = null, $date = null, $demographics = 'false', $contacts = 'false', $sen_needs = 'false', $addresses = 'false', $care = 'false', $languages = 'false', $page = '1', $per_page = '100', $if_modified_since = null)
    {
        list($response) = $this->getStudentsWithHttpInfo($year_code, $students, $date, $demographics, $contacts, $sen_needs, $addresses, $care, $languages, $page, $per_page, $if_modified_since);
        return $response;
    }

    /**
     * Operation getStudentsWithHttpInfo
     *
     * @param  string $year_code Filter by a specific NC year code (optional)
     * @param  string $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (optional)
     * @param  string $date Filter for a specific date (optional)
     * @param  bool $demographics Return demographic information along with the person (requires appropriate scope) (optional, default to false)
     * @param  bool $contacts Return contact information along with this object (optional, default to false)
     * @param  bool $sen_needs Return Special Educational Need information along with this object (optional, default to false)
     * @param  bool $addresses Return address information along with this object (optional, default to false)
     * @param  bool $care Return care information along with this object, depends on inclusion of demographics (optional, default to false)
     * @param  bool $languages Return language information along with this object (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\StudentList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getStudentsWithHttpInfo($year_code = null, $students = null, $date = null, $demographics = 'false', $contacts = 'false', $sen_needs = 'false', $addresses = 'false', $care = 'false', $languages = 'false', $page = '1', $per_page = '100', $if_modified_since = null)
    {
        $returnType = '\Assembly\Client\Model\StudentList';
        $request = $this->getStudentsRequest($year_code, $students, $date, $demographics, $contacts, $sen_needs, $addresses, $care, $languages, $page, $per_page, $if_modified_since);

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
                        '\Assembly\Client\Model\StudentList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
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
     * 
     *
     * @param  string $year_code Filter by a specific NC year code (optional)
     * @param  string $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (optional)
     * @param  string $date Filter for a specific date (optional)
     * @param  bool $demographics Return demographic information along with the person (requires appropriate scope) (optional, default to false)
     * @param  bool $contacts Return contact information along with this object (optional, default to false)
     * @param  bool $sen_needs Return Special Educational Need information along with this object (optional, default to false)
     * @param  bool $addresses Return address information along with this object (optional, default to false)
     * @param  bool $care Return care information along with this object, depends on inclusion of demographics (optional, default to false)
     * @param  bool $languages Return language information along with this object (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getStudentsAsync($year_code = null, $students = null, $date = null, $demographics = 'false', $contacts = 'false', $sen_needs = 'false', $addresses = 'false', $care = 'false', $languages = 'false', $page = '1', $per_page = '100', $if_modified_since = null)
    {
        return $this->getStudentsAsyncWithHttpInfo($year_code, $students, $date, $demographics, $contacts, $sen_needs, $addresses, $care, $languages, $page, $per_page, $if_modified_since)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getStudentsAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $year_code Filter by a specific NC year code (optional)
     * @param  string $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (optional)
     * @param  string $date Filter for a specific date (optional)
     * @param  bool $demographics Return demographic information along with the person (requires appropriate scope) (optional, default to false)
     * @param  bool $contacts Return contact information along with this object (optional, default to false)
     * @param  bool $sen_needs Return Special Educational Need information along with this object (optional, default to false)
     * @param  bool $addresses Return address information along with this object (optional, default to false)
     * @param  bool $care Return care information along with this object, depends on inclusion of demographics (optional, default to false)
     * @param  bool $languages Return language information along with this object (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getStudentsAsyncWithHttpInfo($year_code = null, $students = null, $date = null, $demographics = 'false', $contacts = 'false', $sen_needs = 'false', $addresses = 'false', $care = 'false', $languages = 'false', $page = '1', $per_page = '100', $if_modified_since = null)
    {
        $returnType = '\Assembly\Client\Model\StudentList';
        $request = $this->getStudentsRequest($year_code, $students, $date, $demographics, $contacts, $sen_needs, $addresses, $care, $languages, $page, $per_page, $if_modified_since);

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
     * @param  string $year_code Filter by a specific NC year code (optional)
     * @param  string $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (optional)
     * @param  string $date Filter for a specific date (optional)
     * @param  bool $demographics Return demographic information along with the person (requires appropriate scope) (optional, default to false)
     * @param  bool $contacts Return contact information along with this object (optional, default to false)
     * @param  bool $sen_needs Return Special Educational Need information along with this object (optional, default to false)
     * @param  bool $addresses Return address information along with this object (optional, default to false)
     * @param  bool $care Return care information along with this object, depends on inclusion of demographics (optional, default to false)
     * @param  bool $languages Return language information along with this object (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getStudentsRequest($year_code = null, $students = null, $date = null, $demographics = 'false', $contacts = 'false', $sen_needs = 'false', $addresses = 'false', $care = 'false', $languages = 'false', $page = '1', $per_page = '100', $if_modified_since = null)
    {

        $resourcePath = '/students';
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
        if ($students !== null) {
            $queryParams['students'] = ObjectSerializer::toQueryValue($students);
        }
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
        if ($addresses !== null) {
            $queryParams['addresses'] = ObjectSerializer::toQueryValue($addresses);
        }
        // query params
        if ($care !== null) {
            $queryParams['care'] = ObjectSerializer::toQueryValue($care);
        }
        // query params
        if ($languages !== null) {
            $queryParams['languages'] = ObjectSerializer::toQueryValue($languages);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
        }
        // header params
        if ($if_modified_since !== null) {
            $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.assembly+json; version=1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.assembly+json; version=1'],
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getStudentsStudentId
     *
     * @param  string $student_id ID of the Student as an Integer (required)
     * @param  string $date Filter for a specific date (optional)
     * @param  bool $demographics Return demographic information along with the person (requires appropriate scope) (optional, default to false)
     * @param  bool $contacts Return contact information along with this object (optional, default to false)
     * @param  bool $sen_needs Return Special Educational Need information along with this object (optional, default to false)
     * @param  bool $addresses Return address information along with this object (optional, default to false)
     * @param  bool $care Return care information along with this object, depends on inclusion of demographics (optional, default to false)
     * @param  bool $languages Return language information along with this object (optional, default to false)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\Student
     */
    public function getStudentsStudentId($student_id, $date = null, $demographics = 'false', $contacts = 'false', $sen_needs = 'false', $addresses = 'false', $care = 'false', $languages = 'false', $if_modified_since = null)
    {
        list($response) = $this->getStudentsStudentIdWithHttpInfo($student_id, $date, $demographics, $contacts, $sen_needs, $addresses, $care, $languages, $if_modified_since);
        return $response;
    }

    /**
     * Operation getStudentsStudentIdWithHttpInfo
     *
     * @param  string $student_id ID of the Student as an Integer (required)
     * @param  string $date Filter for a specific date (optional)
     * @param  bool $demographics Return demographic information along with the person (requires appropriate scope) (optional, default to false)
     * @param  bool $contacts Return contact information along with this object (optional, default to false)
     * @param  bool $sen_needs Return Special Educational Need information along with this object (optional, default to false)
     * @param  bool $addresses Return address information along with this object (optional, default to false)
     * @param  bool $care Return care information along with this object, depends on inclusion of demographics (optional, default to false)
     * @param  bool $languages Return language information along with this object (optional, default to false)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\Student, HTTP status code, HTTP response headers (array of strings)
     */
    public function getStudentsStudentIdWithHttpInfo($student_id, $date = null, $demographics = 'false', $contacts = 'false', $sen_needs = 'false', $addresses = 'false', $care = 'false', $languages = 'false', $if_modified_since = null)
    {
        $returnType = '\Assembly\Client\Model\Student';
        $request = $this->getStudentsStudentIdRequest($student_id, $date, $demographics, $contacts, $sen_needs, $addresses, $care, $languages, $if_modified_since);

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
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getStudentsStudentIdAsync
     *
     * 
     *
     * @param  string $student_id ID of the Student as an Integer (required)
     * @param  string $date Filter for a specific date (optional)
     * @param  bool $demographics Return demographic information along with the person (requires appropriate scope) (optional, default to false)
     * @param  bool $contacts Return contact information along with this object (optional, default to false)
     * @param  bool $sen_needs Return Special Educational Need information along with this object (optional, default to false)
     * @param  bool $addresses Return address information along with this object (optional, default to false)
     * @param  bool $care Return care information along with this object, depends on inclusion of demographics (optional, default to false)
     * @param  bool $languages Return language information along with this object (optional, default to false)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getStudentsStudentIdAsync($student_id, $date = null, $demographics = 'false', $contacts = 'false', $sen_needs = 'false', $addresses = 'false', $care = 'false', $languages = 'false', $if_modified_since = null)
    {
        return $this->getStudentsStudentIdAsyncWithHttpInfo($student_id, $date, $demographics, $contacts, $sen_needs, $addresses, $care, $languages, $if_modified_since)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getStudentsStudentIdAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $student_id ID of the Student as an Integer (required)
     * @param  string $date Filter for a specific date (optional)
     * @param  bool $demographics Return demographic information along with the person (requires appropriate scope) (optional, default to false)
     * @param  bool $contacts Return contact information along with this object (optional, default to false)
     * @param  bool $sen_needs Return Special Educational Need information along with this object (optional, default to false)
     * @param  bool $addresses Return address information along with this object (optional, default to false)
     * @param  bool $care Return care information along with this object, depends on inclusion of demographics (optional, default to false)
     * @param  bool $languages Return language information along with this object (optional, default to false)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getStudentsStudentIdAsyncWithHttpInfo($student_id, $date = null, $demographics = 'false', $contacts = 'false', $sen_needs = 'false', $addresses = 'false', $care = 'false', $languages = 'false', $if_modified_since = null)
    {
        $returnType = '\Assembly\Client\Model\Student';
        $request = $this->getStudentsStudentIdRequest($student_id, $date, $demographics, $contacts, $sen_needs, $addresses, $care, $languages, $if_modified_since);

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
     * Create request for operation 'getStudentsStudentId'
     *
     * @param  string $student_id ID of the Student as an Integer (required)
     * @param  string $date Filter for a specific date (optional)
     * @param  bool $demographics Return demographic information along with the person (requires appropriate scope) (optional, default to false)
     * @param  bool $contacts Return contact information along with this object (optional, default to false)
     * @param  bool $sen_needs Return Special Educational Need information along with this object (optional, default to false)
     * @param  bool $addresses Return address information along with this object (optional, default to false)
     * @param  bool $care Return care information along with this object, depends on inclusion of demographics (optional, default to false)
     * @param  bool $languages Return language information along with this object (optional, default to false)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getStudentsStudentIdRequest($student_id, $date = null, $demographics = 'false', $contacts = 'false', $sen_needs = 'false', $addresses = 'false', $care = 'false', $languages = 'false', $if_modified_since = null)
    {
        // verify the required parameter 'student_id' is set
        if ($student_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $student_id when calling getStudentsStudentId'
            );
        }

        $resourcePath = '/students/{student_id}';
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
        if ($addresses !== null) {
            $queryParams['addresses'] = ObjectSerializer::toQueryValue($addresses);
        }
        // query params
        if ($care !== null) {
            $queryParams['care'] = ObjectSerializer::toQueryValue($care);
        }
        // query params
        if ($languages !== null) {
            $queryParams['languages'] = ObjectSerializer::toQueryValue($languages);
        }
        // header params
        if ($if_modified_since !== null) {
            $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
        }

        // path params
        if ($student_id !== null) {
            $resourcePath = str_replace(
                '{' . 'student_id' . '}',
                ObjectSerializer::toPathValue($student_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.assembly+json; version=1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.assembly+json; version=1'],
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getSubjects
     *
     * @param  bool $mis_mappings Includes the names of any MIS components to this object (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\SubjectList
     */
    public function getSubjects($mis_mappings = 'false', $page = '1', $per_page = '100')
    {
        list($response) = $this->getSubjectsWithHttpInfo($mis_mappings, $page, $per_page);
        return $response;
    }

    /**
     * Operation getSubjectsWithHttpInfo
     *
     * @param  bool $mis_mappings Includes the names of any MIS components to this object (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\SubjectList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSubjectsWithHttpInfo($mis_mappings = 'false', $page = '1', $per_page = '100')
    {
        $returnType = '\Assembly\Client\Model\SubjectList';
        $request = $this->getSubjectsRequest($mis_mappings, $page, $per_page);

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
                        '\Assembly\Client\Model\SubjectList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
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
     * 
     *
     * @param  bool $mis_mappings Includes the names of any MIS components to this object (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSubjectsAsync($mis_mappings = 'false', $page = '1', $per_page = '100')
    {
        return $this->getSubjectsAsyncWithHttpInfo($mis_mappings, $page, $per_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getSubjectsAsyncWithHttpInfo
     *
     * 
     *
     * @param  bool $mis_mappings Includes the names of any MIS components to this object (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSubjectsAsyncWithHttpInfo($mis_mappings = 'false', $page = '1', $per_page = '100')
    {
        $returnType = '\Assembly\Client\Model\SubjectList';
        $request = $this->getSubjectsRequest($mis_mappings, $page, $per_page);

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
     * @param  bool $mis_mappings Includes the names of any MIS components to this object (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSubjectsRequest($mis_mappings = 'false', $page = '1', $per_page = '100')
    {

        $resourcePath = '/subjects';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($mis_mappings !== null) {
            $queryParams['mis_mappings'] = ObjectSerializer::toQueryValue($mis_mappings);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.assembly+json; version=1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.assembly+json; version=1'],
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getTeachingGroups
     *
     * @param  string $subject_code Filter by subject (optional)
     * @param  string $year_code Filter by a specific NC year code (optional)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\TeachingGroupList
     */
    public function getTeachingGroups($subject_code = null, $year_code = null, $date = null, $academic_year_id = null, $page = '1', $per_page = '100')
    {
        list($response) = $this->getTeachingGroupsWithHttpInfo($subject_code, $year_code, $date, $academic_year_id, $page, $per_page);
        return $response;
    }

    /**
     * Operation getTeachingGroupsWithHttpInfo
     *
     * @param  string $subject_code Filter by subject (optional)
     * @param  string $year_code Filter by a specific NC year code (optional)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\TeachingGroupList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTeachingGroupsWithHttpInfo($subject_code = null, $year_code = null, $date = null, $academic_year_id = null, $page = '1', $per_page = '100')
    {
        $returnType = '\Assembly\Client\Model\TeachingGroupList';
        $request = $this->getTeachingGroupsRequest($subject_code, $year_code, $date, $academic_year_id, $page, $per_page);

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
                        '\Assembly\Client\Model\TeachingGroupList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
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
     * 
     *
     * @param  string $subject_code Filter by subject (optional)
     * @param  string $year_code Filter by a specific NC year code (optional)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTeachingGroupsAsync($subject_code = null, $year_code = null, $date = null, $academic_year_id = null, $page = '1', $per_page = '100')
    {
        return $this->getTeachingGroupsAsyncWithHttpInfo($subject_code, $year_code, $date, $academic_year_id, $page, $per_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTeachingGroupsAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $subject_code Filter by subject (optional)
     * @param  string $year_code Filter by a specific NC year code (optional)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTeachingGroupsAsyncWithHttpInfo($subject_code = null, $year_code = null, $date = null, $academic_year_id = null, $page = '1', $per_page = '100')
    {
        $returnType = '\Assembly\Client\Model\TeachingGroupList';
        $request = $this->getTeachingGroupsRequest($subject_code, $year_code, $date, $academic_year_id, $page, $per_page);

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
     * @param  string $subject_code Filter by subject (optional)
     * @param  string $year_code Filter by a specific NC year code (optional)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getTeachingGroupsRequest($subject_code = null, $year_code = null, $date = null, $academic_year_id = null, $page = '1', $per_page = '100')
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
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.assembly+json; version=1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.assembly+json; version=1'],
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getTeachingGroupsGroupId
     *
     * @param  string $group_id ID of the Year Group as an Integer (required)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\TeachingGroup
     */
    public function getTeachingGroupsGroupId($group_id, $date = null, $academic_year_id = null)
    {
        list($response) = $this->getTeachingGroupsGroupIdWithHttpInfo($group_id, $date, $academic_year_id);
        return $response;
    }

    /**
     * Operation getTeachingGroupsGroupIdWithHttpInfo
     *
     * @param  string $group_id ID of the Year Group as an Integer (required)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\TeachingGroup, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTeachingGroupsGroupIdWithHttpInfo($group_id, $date = null, $academic_year_id = null)
    {
        $returnType = '\Assembly\Client\Model\TeachingGroup';
        $request = $this->getTeachingGroupsGroupIdRequest($group_id, $date, $academic_year_id);

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
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getTeachingGroupsGroupIdAsync
     *
     * 
     *
     * @param  string $group_id ID of the Year Group as an Integer (required)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTeachingGroupsGroupIdAsync($group_id, $date = null, $academic_year_id = null)
    {
        return $this->getTeachingGroupsGroupIdAsyncWithHttpInfo($group_id, $date, $academic_year_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTeachingGroupsGroupIdAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $group_id ID of the Year Group as an Integer (required)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTeachingGroupsGroupIdAsyncWithHttpInfo($group_id, $date = null, $academic_year_id = null)
    {
        $returnType = '\Assembly\Client\Model\TeachingGroup';
        $request = $this->getTeachingGroupsGroupIdRequest($group_id, $date, $academic_year_id);

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
     * Create request for operation 'getTeachingGroupsGroupId'
     *
     * @param  string $group_id ID of the Year Group as an Integer (required)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getTeachingGroupsGroupIdRequest($group_id, $date = null, $academic_year_id = null)
    {
        // verify the required parameter 'group_id' is set
        if ($group_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $group_id when calling getTeachingGroupsGroupId'
            );
        }

        $resourcePath = '/teaching_groups/{group_id}';
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
        if ($group_id !== null) {
            $resourcePath = str_replace(
                '{' . 'group_id' . '}',
                ObjectSerializer::toPathValue($group_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.assembly+json; version=1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.assembly+json; version=1'],
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getTeachingGroupsGroupIdStudents
     *
     * @param  string $group_id ID of the Year Group as an Integer (required)
     * @param  string $year_code Filter by a specific NC year code (optional)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     * @param  bool $demographics Return demographic information along with the person (requires appropriate scope) (optional, default to false)
     * @param  bool $care Return care information along with this object, depends on inclusion of demographics (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\StudentList
     */
    public function getTeachingGroupsGroupIdStudents($group_id, $year_code = null, $date = null, $academic_year_id = null, $demographics = 'false', $care = 'false', $page = '1', $per_page = '100', $if_modified_since = null)
    {
        list($response) = $this->getTeachingGroupsGroupIdStudentsWithHttpInfo($group_id, $year_code, $date, $academic_year_id, $demographics, $care, $page, $per_page, $if_modified_since);
        return $response;
    }

    /**
     * Operation getTeachingGroupsGroupIdStudentsWithHttpInfo
     *
     * @param  string $group_id ID of the Year Group as an Integer (required)
     * @param  string $year_code Filter by a specific NC year code (optional)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     * @param  bool $demographics Return demographic information along with the person (requires appropriate scope) (optional, default to false)
     * @param  bool $care Return care information along with this object, depends on inclusion of demographics (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\StudentList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTeachingGroupsGroupIdStudentsWithHttpInfo($group_id, $year_code = null, $date = null, $academic_year_id = null, $demographics = 'false', $care = 'false', $page = '1', $per_page = '100', $if_modified_since = null)
    {
        $returnType = '\Assembly\Client\Model\StudentList';
        $request = $this->getTeachingGroupsGroupIdStudentsRequest($group_id, $year_code, $date, $academic_year_id, $demographics, $care, $page, $per_page, $if_modified_since);

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
                        '\Assembly\Client\Model\StudentList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getTeachingGroupsGroupIdStudentsAsync
     *
     * 
     *
     * @param  string $group_id ID of the Year Group as an Integer (required)
     * @param  string $year_code Filter by a specific NC year code (optional)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     * @param  bool $demographics Return demographic information along with the person (requires appropriate scope) (optional, default to false)
     * @param  bool $care Return care information along with this object, depends on inclusion of demographics (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTeachingGroupsGroupIdStudentsAsync($group_id, $year_code = null, $date = null, $academic_year_id = null, $demographics = 'false', $care = 'false', $page = '1', $per_page = '100', $if_modified_since = null)
    {
        return $this->getTeachingGroupsGroupIdStudentsAsyncWithHttpInfo($group_id, $year_code, $date, $academic_year_id, $demographics, $care, $page, $per_page, $if_modified_since)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTeachingGroupsGroupIdStudentsAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $group_id ID of the Year Group as an Integer (required)
     * @param  string $year_code Filter by a specific NC year code (optional)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     * @param  bool $demographics Return demographic information along with the person (requires appropriate scope) (optional, default to false)
     * @param  bool $care Return care information along with this object, depends on inclusion of demographics (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTeachingGroupsGroupIdStudentsAsyncWithHttpInfo($group_id, $year_code = null, $date = null, $academic_year_id = null, $demographics = 'false', $care = 'false', $page = '1', $per_page = '100', $if_modified_since = null)
    {
        $returnType = '\Assembly\Client\Model\StudentList';
        $request = $this->getTeachingGroupsGroupIdStudentsRequest($group_id, $year_code, $date, $academic_year_id, $demographics, $care, $page, $per_page, $if_modified_since);

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
     * Create request for operation 'getTeachingGroupsGroupIdStudents'
     *
     * @param  string $group_id ID of the Year Group as an Integer (required)
     * @param  string $year_code Filter by a specific NC year code (optional)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     * @param  bool $demographics Return demographic information along with the person (requires appropriate scope) (optional, default to false)
     * @param  bool $care Return care information along with this object, depends on inclusion of demographics (optional, default to false)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getTeachingGroupsGroupIdStudentsRequest($group_id, $year_code = null, $date = null, $academic_year_id = null, $demographics = 'false', $care = 'false', $page = '1', $per_page = '100', $if_modified_since = null)
    {
        // verify the required parameter 'group_id' is set
        if ($group_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $group_id when calling getTeachingGroupsGroupIdStudents'
            );
        }

        $resourcePath = '/teaching_groups/{group_id}/students';
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
        if ($demographics !== null) {
            $queryParams['demographics'] = ObjectSerializer::toQueryValue($demographics);
        }
        // query params
        if ($care !== null) {
            $queryParams['care'] = ObjectSerializer::toQueryValue($care);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
        }
        // header params
        if ($if_modified_since !== null) {
            $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
        }

        // path params
        if ($group_id !== null) {
            $resourcePath = str_replace(
                '{' . 'group_id' . '}',
                ObjectSerializer::toPathValue($group_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.assembly+json; version=1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.assembly+json; version=1'],
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getYearGroups
     *
     * @param  string $year_code Filter by a specific NC year code (optional)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\YearGroupList
     */
    public function getYearGroups($year_code = null, $date = null, $academic_year_id = null, $page = '1', $per_page = '100', $if_modified_since = null)
    {
        list($response) = $this->getYearGroupsWithHttpInfo($year_code, $date, $academic_year_id, $page, $per_page, $if_modified_since);
        return $response;
    }

    /**
     * Operation getYearGroupsWithHttpInfo
     *
     * @param  string $year_code Filter by a specific NC year code (optional)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\YearGroupList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getYearGroupsWithHttpInfo($year_code = null, $date = null, $academic_year_id = null, $page = '1', $per_page = '100', $if_modified_since = null)
    {
        $returnType = '\Assembly\Client\Model\YearGroupList';
        $request = $this->getYearGroupsRequest($year_code, $date, $academic_year_id, $page, $per_page, $if_modified_since);

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
                        '\Assembly\Client\Model\YearGroupList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
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
     * 
     *
     * @param  string $year_code Filter by a specific NC year code (optional)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getYearGroupsAsync($year_code = null, $date = null, $academic_year_id = null, $page = '1', $per_page = '100', $if_modified_since = null)
    {
        return $this->getYearGroupsAsyncWithHttpInfo($year_code, $date, $academic_year_id, $page, $per_page, $if_modified_since)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getYearGroupsAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $year_code Filter by a specific NC year code (optional)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getYearGroupsAsyncWithHttpInfo($year_code = null, $date = null, $academic_year_id = null, $page = '1', $per_page = '100', $if_modified_since = null)
    {
        $returnType = '\Assembly\Client\Model\YearGroupList';
        $request = $this->getYearGroupsRequest($year_code, $date, $academic_year_id, $page, $per_page, $if_modified_since);

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
     * @param  string $year_code Filter by a specific NC year code (optional)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getYearGroupsRequest($year_code = null, $date = null, $academic_year_id = null, $page = '1', $per_page = '100', $if_modified_since = null)
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
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
        }
        // header params
        if ($if_modified_since !== null) {
            $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.assembly+json; version=1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.assembly+json; version=1'],
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getYearGroupsGroupId
     *
     * @param  string $group_id ID of the Year Group as an Integer (required)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\YearGroup
     */
    public function getYearGroupsGroupId($group_id, $date = null, $academic_year_id = null)
    {
        list($response) = $this->getYearGroupsGroupIdWithHttpInfo($group_id, $date, $academic_year_id);
        return $response;
    }

    /**
     * Operation getYearGroupsGroupIdWithHttpInfo
     *
     * @param  string $group_id ID of the Year Group as an Integer (required)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\YearGroup, HTTP status code, HTTP response headers (array of strings)
     */
    public function getYearGroupsGroupIdWithHttpInfo($group_id, $date = null, $academic_year_id = null)
    {
        $returnType = '\Assembly\Client\Model\YearGroup';
        $request = $this->getYearGroupsGroupIdRequest($group_id, $date, $academic_year_id);

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
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getYearGroupsGroupIdAsync
     *
     * 
     *
     * @param  string $group_id ID of the Year Group as an Integer (required)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getYearGroupsGroupIdAsync($group_id, $date = null, $academic_year_id = null)
    {
        return $this->getYearGroupsGroupIdAsyncWithHttpInfo($group_id, $date, $academic_year_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getYearGroupsGroupIdAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $group_id ID of the Year Group as an Integer (required)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getYearGroupsGroupIdAsyncWithHttpInfo($group_id, $date = null, $academic_year_id = null)
    {
        $returnType = '\Assembly\Client\Model\YearGroup';
        $request = $this->getYearGroupsGroupIdRequest($group_id, $date, $academic_year_id);

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
     * Create request for operation 'getYearGroupsGroupId'
     *
     * @param  string $group_id ID of the Year Group as an Integer (required)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getYearGroupsGroupIdRequest($group_id, $date = null, $academic_year_id = null)
    {
        // verify the required parameter 'group_id' is set
        if ($group_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $group_id when calling getYearGroupsGroupId'
            );
        }

        $resourcePath = '/year_groups/{group_id}';
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
        if ($group_id !== null) {
            $resourcePath = str_replace(
                '{' . 'group_id' . '}',
                ObjectSerializer::toPathValue($group_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.assembly+json; version=1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.assembly+json; version=1'],
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getYearGroupsGroupIdStudents
     *
     * @param  string $group_id ID of the Year Group as an Integer (required)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\StudentList
     */
    public function getYearGroupsGroupIdStudents($group_id, $date = null, $academic_year_id = null, $page = '1', $per_page = '100', $if_modified_since = null)
    {
        list($response) = $this->getYearGroupsGroupIdStudentsWithHttpInfo($group_id, $date, $academic_year_id, $page, $per_page, $if_modified_since);
        return $response;
    }

    /**
     * Operation getYearGroupsGroupIdStudentsWithHttpInfo
     *
     * @param  string $group_id ID of the Year Group as an Integer (required)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\StudentList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getYearGroupsGroupIdStudentsWithHttpInfo($group_id, $date = null, $academic_year_id = null, $page = '1', $per_page = '100', $if_modified_since = null)
    {
        $returnType = '\Assembly\Client\Model\StudentList';
        $request = $this->getYearGroupsGroupIdStudentsRequest($group_id, $date, $academic_year_id, $page, $per_page, $if_modified_since);

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
                        '\Assembly\Client\Model\StudentList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getYearGroupsGroupIdStudentsAsync
     *
     * 
     *
     * @param  string $group_id ID of the Year Group as an Integer (required)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getYearGroupsGroupIdStudentsAsync($group_id, $date = null, $academic_year_id = null, $page = '1', $per_page = '100', $if_modified_since = null)
    {
        return $this->getYearGroupsGroupIdStudentsAsyncWithHttpInfo($group_id, $date, $academic_year_id, $page, $per_page, $if_modified_since)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getYearGroupsGroupIdStudentsAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $group_id ID of the Year Group as an Integer (required)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getYearGroupsGroupIdStudentsAsyncWithHttpInfo($group_id, $date = null, $academic_year_id = null, $page = '1', $per_page = '100', $if_modified_since = null)
    {
        $returnType = '\Assembly\Client\Model\StudentList';
        $request = $this->getYearGroupsGroupIdStudentsRequest($group_id, $date, $academic_year_id, $page, $per_page, $if_modified_since);

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
     * Create request for operation 'getYearGroupsGroupIdStudents'
     *
     * @param  string $group_id ID of the Year Group as an Integer (required)
     * @param  string $date Filter for a specific date (optional)
     * @param  int $academic_year_id Filter based on the specified academic year (optional)
     * @param  int $page Page number to return (optional, default to 1)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  string $if_modified_since Timestamp of the last response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getYearGroupsGroupIdStudentsRequest($group_id, $date = null, $academic_year_id = null, $page = '1', $per_page = '100', $if_modified_since = null)
    {
        // verify the required parameter 'group_id' is set
        if ($group_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $group_id when calling getYearGroupsGroupIdStudents'
            );
        }

        $resourcePath = '/year_groups/{group_id}/students';
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
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
        }
        // header params
        if ($if_modified_since !== null) {
            $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
        }

        // path params
        if ($group_id !== null) {
            $resourcePath = str_replace(
                '{' . 'group_id' . '}',
                ObjectSerializer::toPathValue($group_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.assembly+json; version=1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.assembly+json; version=1'],
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation patchResults
     *
     * @param  \Assembly\Client\Model\UpdateMultipleResultResponse $update_multiple_result_payload Payload for update multiple Result request (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\UpdateMultipleResultResponse
     */
    public function patchResults($update_multiple_result_payload = null)
    {
        list($response) = $this->patchResultsWithHttpInfo($update_multiple_result_payload);
        return $response;
    }

    /**
     * Operation patchResultsWithHttpInfo
     *
     * @param  \Assembly\Client\Model\UpdateMultipleResultResponse $update_multiple_result_payload Payload for update multiple Result request (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\UpdateMultipleResultResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function patchResultsWithHttpInfo($update_multiple_result_payload = null)
    {
        $returnType = '\Assembly\Client\Model\UpdateMultipleResultResponse';
        $request = $this->patchResultsRequest($update_multiple_result_payload);

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
                        '\Assembly\Client\Model\UpdateMultipleResultResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation patchResultsAsync
     *
     * 
     *
     * @param  \Assembly\Client\Model\UpdateMultipleResultResponse $update_multiple_result_payload Payload for update multiple Result request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchResultsAsync($update_multiple_result_payload = null)
    {
        return $this->patchResultsAsyncWithHttpInfo($update_multiple_result_payload)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation patchResultsAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Assembly\Client\Model\UpdateMultipleResultResponse $update_multiple_result_payload Payload for update multiple Result request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchResultsAsyncWithHttpInfo($update_multiple_result_payload = null)
    {
        $returnType = '\Assembly\Client\Model\UpdateMultipleResultResponse';
        $request = $this->patchResultsRequest($update_multiple_result_payload);

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
     * Create request for operation 'patchResults'
     *
     * @param  \Assembly\Client\Model\UpdateMultipleResultResponse $update_multiple_result_payload Payload for update multiple Result request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function patchResultsRequest($update_multiple_result_payload = null)
    {

        $resourcePath = '/results';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($update_multiple_result_payload)) {
            $_tempBody = $update_multiple_result_payload;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.assembly+json; version=1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.assembly+json; version=1'],
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
     * Operation patchResultsResultId
     *
     * @param  string $result_id ID of the Result as an Integer (required)
     * @param  \Assembly\Client\Model\Result $update_result_payload Payload for update Result request (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\Result
     */
    public function patchResultsResultId($result_id, $update_result_payload = null)
    {
        list($response) = $this->patchResultsResultIdWithHttpInfo($result_id, $update_result_payload);
        return $response;
    }

    /**
     * Operation patchResultsResultIdWithHttpInfo
     *
     * @param  string $result_id ID of the Result as an Integer (required)
     * @param  \Assembly\Client\Model\Result $update_result_payload Payload for update Result request (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\Result, HTTP status code, HTTP response headers (array of strings)
     */
    public function patchResultsResultIdWithHttpInfo($result_id, $update_result_payload = null)
    {
        $returnType = '\Assembly\Client\Model\Result';
        $request = $this->patchResultsResultIdRequest($result_id, $update_result_payload);

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
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Assembly\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation patchResultsResultIdAsync
     *
     * 
     *
     * @param  string $result_id ID of the Result as an Integer (required)
     * @param  \Assembly\Client\Model\Result $update_result_payload Payload for update Result request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchResultsResultIdAsync($result_id, $update_result_payload = null)
    {
        return $this->patchResultsResultIdAsyncWithHttpInfo($result_id, $update_result_payload)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation patchResultsResultIdAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $result_id ID of the Result as an Integer (required)
     * @param  \Assembly\Client\Model\Result $update_result_payload Payload for update Result request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchResultsResultIdAsyncWithHttpInfo($result_id, $update_result_payload = null)
    {
        $returnType = '\Assembly\Client\Model\Result';
        $request = $this->patchResultsResultIdRequest($result_id, $update_result_payload);

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
     * Create request for operation 'patchResultsResultId'
     *
     * @param  string $result_id ID of the Result as an Integer (required)
     * @param  \Assembly\Client\Model\Result $update_result_payload Payload for update Result request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function patchResultsResultIdRequest($result_id, $update_result_payload = null)
    {
        // verify the required parameter 'result_id' is set
        if ($result_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $result_id when calling patchResultsResultId'
            );
        }

        $resourcePath = '/results/{result_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($result_id !== null) {
            $resourcePath = str_replace(
                '{' . 'result_id' . '}',
                ObjectSerializer::toPathValue($result_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($update_result_payload)) {
            $_tempBody = $update_result_payload;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.assembly+json; version=1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.assembly+json; version=1'],
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
