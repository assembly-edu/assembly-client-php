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
 * API version: 1.0.0
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
     * Operation callList
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
    public function callList($per_page = '100', $page = '1')
    {
        list($response) = $this->callListWithHttpInfo($per_page, $page);
        return $response;
    }

    /**
     * Operation callListWithHttpInfo
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
    public function callListWithHttpInfo($per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\AcademicYear[]';
        $request = $this->callListRequest($per_page, $page);

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
     * Operation callListAsync
     *
     * List Academic Years
     *
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function callListAsync($per_page = '100', $page = '1')
    {
        return $this->callListAsyncWithHttpInfo($per_page, $page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation callListAsyncWithHttpInfo
     *
     * List Academic Years
     *
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function callListAsyncWithHttpInfo($per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\AcademicYear[]';
        $request = $this->callListRequest($per_page, $page);

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
     * Create request for operation 'callList'
     *
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function callListRequest($per_page = '100', $page = '1')
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
     * Operation callList_0
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
    public function callList_0($per_page = '100', $page = '1')
    {
        list($response) = $this->callList_0WithHttpInfo($per_page, $page);
        return $response;
    }

    /**
     * Operation callList_0WithHttpInfo
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
    public function callList_0WithHttpInfo($per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\AssessmentPoint[]';
        $request = $this->callList_0Request($per_page, $page);

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
     * Operation callList_0Async
     *
     * List Assessment Points
     *
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function callList_0Async($per_page = '100', $page = '1')
    {
        return $this->callList_0AsyncWithHttpInfo($per_page, $page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation callList_0AsyncWithHttpInfo
     *
     * List Assessment Points
     *
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function callList_0AsyncWithHttpInfo($per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\AssessmentPoint[]';
        $request = $this->callList_0Request($per_page, $page);

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
     * Create request for operation 'callList_0'
     *
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function callList_0Request($per_page = '100', $page = '1')
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
     * Operation callList_1
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
    public function callList_1($per_page = '100', $page = '1')
    {
        list($response) = $this->callList_1WithHttpInfo($per_page, $page);
        return $response;
    }

    /**
     * Operation callList_1WithHttpInfo
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
    public function callList_1WithHttpInfo($per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\Assessment[]';
        $request = $this->callList_1Request($per_page, $page);

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
     * Operation callList_1Async
     *
     * List Assessments
     *
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function callList_1Async($per_page = '100', $page = '1')
    {
        return $this->callList_1AsyncWithHttpInfo($per_page, $page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation callList_1AsyncWithHttpInfo
     *
     * List Assessments
     *
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function callList_1AsyncWithHttpInfo($per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\Assessment[]';
        $request = $this->callList_1Request($per_page, $page);

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
     * Create request for operation 'callList_1'
     *
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function callList_1Request($per_page = '100', $page = '1')
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
     * Operation callList_10
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
    public function callList_10($if_modified_since = null, $staff_member_id = null, $date = null, $roles = null, $salaries = null, $allowances = null, $per_page = '100', $page = '1')
    {
        list($response) = $this->callList_10WithHttpInfo($if_modified_since, $staff_member_id, $date, $roles, $salaries, $allowances, $per_page, $page);
        return $response;
    }

    /**
     * Operation callList_10WithHttpInfo
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
    public function callList_10WithHttpInfo($if_modified_since = null, $staff_member_id = null, $date = null, $roles = null, $salaries = null, $allowances = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\StaffContract[]';
        $request = $this->callList_10Request($if_modified_since, $staff_member_id, $date, $roles, $salaries, $allowances, $per_page, $page);

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
     * Operation callList_10Async
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
    public function callList_10Async($if_modified_since = null, $staff_member_id = null, $date = null, $roles = null, $salaries = null, $allowances = null, $per_page = '100', $page = '1')
    {
        return $this->callList_10AsyncWithHttpInfo($if_modified_since, $staff_member_id, $date, $roles, $salaries, $allowances, $per_page, $page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation callList_10AsyncWithHttpInfo
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
    public function callList_10AsyncWithHttpInfo($if_modified_since = null, $staff_member_id = null, $date = null, $roles = null, $salaries = null, $allowances = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\StaffContract[]';
        $request = $this->callList_10Request($if_modified_since, $staff_member_id, $date, $roles, $salaries, $allowances, $per_page, $page);

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
     * Create request for operation 'callList_10'
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
    protected function callList_10Request($if_modified_since = null, $staff_member_id = null, $date = null, $roles = null, $salaries = null, $allowances = null, $per_page = '100', $page = '1')
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
     * Operation callList_11
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
    public function callList_11($if_modified_since = null, $teachers_only = null, $demographics = null, $qualifications = null, $per_page = '100', $page = '1')
    {
        list($response) = $this->callList_11WithHttpInfo($if_modified_since, $teachers_only, $demographics, $qualifications, $per_page, $page);
        return $response;
    }

    /**
     * Operation callList_11WithHttpInfo
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
    public function callList_11WithHttpInfo($if_modified_since = null, $teachers_only = null, $demographics = null, $qualifications = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\StaffMember[]';
        $request = $this->callList_11Request($if_modified_since, $teachers_only, $demographics, $qualifications, $per_page, $page);

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
     * Operation callList_11Async
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
    public function callList_11Async($if_modified_since = null, $teachers_only = null, $demographics = null, $qualifications = null, $per_page = '100', $page = '1')
    {
        return $this->callList_11AsyncWithHttpInfo($if_modified_since, $teachers_only, $demographics, $qualifications, $per_page, $page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation callList_11AsyncWithHttpInfo
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
    public function callList_11AsyncWithHttpInfo($if_modified_since = null, $teachers_only = null, $demographics = null, $qualifications = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\StaffMember[]';
        $request = $this->callList_11Request($if_modified_since, $teachers_only, $demographics, $qualifications, $per_page, $page);

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
     * Create request for operation 'callList_11'
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
    protected function callList_11Request($if_modified_since = null, $teachers_only = null, $demographics = null, $qualifications = null, $per_page = '100', $page = '1')
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
     * Operation callList_12
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
    public function callList_12($if_modified_since = null, $students = null, $date = null, $year_code = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null, $per_page = '100', $page = '1')
    {
        list($response) = $this->callList_12WithHttpInfo($if_modified_since, $students, $date, $year_code, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo, $per_page, $page);
        return $response;
    }

    /**
     * Operation callList_12WithHttpInfo
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
    public function callList_12WithHttpInfo($if_modified_since = null, $students = null, $date = null, $year_code = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\Student[]';
        $request = $this->callList_12Request($if_modified_since, $students, $date, $year_code, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo, $per_page, $page);

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
     * Operation callList_12Async
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
    public function callList_12Async($if_modified_since = null, $students = null, $date = null, $year_code = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null, $per_page = '100', $page = '1')
    {
        return $this->callList_12AsyncWithHttpInfo($if_modified_since, $students, $date, $year_code, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo, $per_page, $page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation callList_12AsyncWithHttpInfo
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
    public function callList_12AsyncWithHttpInfo($if_modified_since = null, $students = null, $date = null, $year_code = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\Student[]';
        $request = $this->callList_12Request($if_modified_since, $students, $date, $year_code, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo, $per_page, $page);

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
     * Create request for operation 'callList_12'
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
    protected function callList_12Request($if_modified_since = null, $students = null, $date = null, $year_code = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null, $per_page = '100', $page = '1')
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
     * Operation callList_13
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
    public function callList_13($per_page = '100', $page = '1')
    {
        list($response) = $this->callList_13WithHttpInfo($per_page, $page);
        return $response;
    }

    /**
     * Operation callList_13WithHttpInfo
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
    public function callList_13WithHttpInfo($per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\Subject[]';
        $request = $this->callList_13Request($per_page, $page);

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
     * Operation callList_13Async
     *
     * List Subjects
     *
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function callList_13Async($per_page = '100', $page = '1')
    {
        return $this->callList_13AsyncWithHttpInfo($per_page, $page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation callList_13AsyncWithHttpInfo
     *
     * List Subjects
     *
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function callList_13AsyncWithHttpInfo($per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\Subject[]';
        $request = $this->callList_13Request($per_page, $page);

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
     * Create request for operation 'callList_13'
     *
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function callList_13Request($per_page = '100', $page = '1')
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
     * Operation callList_14
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
    public function callList_14($if_modified_since = null, $subject_code = null, $year_code = null, $date = null, $academic_year_id = null, $per_page = '100', $page = '1')
    {
        list($response) = $this->callList_14WithHttpInfo($if_modified_since, $subject_code, $year_code, $date, $academic_year_id, $per_page, $page);
        return $response;
    }

    /**
     * Operation callList_14WithHttpInfo
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
    public function callList_14WithHttpInfo($if_modified_since = null, $subject_code = null, $year_code = null, $date = null, $academic_year_id = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\TeachingGroup[]';
        $request = $this->callList_14Request($if_modified_since, $subject_code, $year_code, $date, $academic_year_id, $per_page, $page);

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
     * Operation callList_14Async
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
    public function callList_14Async($if_modified_since = null, $subject_code = null, $year_code = null, $date = null, $academic_year_id = null, $per_page = '100', $page = '1')
    {
        return $this->callList_14AsyncWithHttpInfo($if_modified_since, $subject_code, $year_code, $date, $academic_year_id, $per_page, $page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation callList_14AsyncWithHttpInfo
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
    public function callList_14AsyncWithHttpInfo($if_modified_since = null, $subject_code = null, $year_code = null, $date = null, $academic_year_id = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\TeachingGroup[]';
        $request = $this->callList_14Request($if_modified_since, $subject_code, $year_code, $date, $academic_year_id, $per_page, $page);

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
     * Create request for operation 'callList_14'
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
    protected function callList_14Request($if_modified_since = null, $subject_code = null, $year_code = null, $date = null, $academic_year_id = null, $per_page = '100', $page = '1')
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
     * Operation callList_15
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
    public function callList_15($if_modified_since = null, $year_code = null, $date = null, $academic_year_id = null, $per_page = '100', $page = '1')
    {
        list($response) = $this->callList_15WithHttpInfo($if_modified_since, $year_code, $date, $academic_year_id, $per_page, $page);
        return $response;
    }

    /**
     * Operation callList_15WithHttpInfo
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
    public function callList_15WithHttpInfo($if_modified_since = null, $year_code = null, $date = null, $academic_year_id = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\YearGroup[]';
        $request = $this->callList_15Request($if_modified_since, $year_code, $date, $academic_year_id, $per_page, $page);

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
     * Operation callList_15Async
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
    public function callList_15Async($if_modified_since = null, $year_code = null, $date = null, $academic_year_id = null, $per_page = '100', $page = '1')
    {
        return $this->callList_15AsyncWithHttpInfo($if_modified_since, $year_code, $date, $academic_year_id, $per_page, $page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation callList_15AsyncWithHttpInfo
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
    public function callList_15AsyncWithHttpInfo($if_modified_since = null, $year_code = null, $date = null, $academic_year_id = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\YearGroup[]';
        $request = $this->callList_15Request($if_modified_since, $year_code, $date, $academic_year_id, $per_page, $page);

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
     * Create request for operation 'callList_15'
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
    protected function callList_15Request($if_modified_since = null, $year_code = null, $date = null, $academic_year_id = null, $per_page = '100', $page = '1')
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
     * Operation callList_2
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
    public function callList_2($student_id = null, $registration_group_id = null, $start_date = null, $end_date = null, $per_page = '100', $page = '1')
    {
        list($response) = $this->callList_2WithHttpInfo($student_id, $registration_group_id, $start_date, $end_date, $per_page, $page);
        return $response;
    }

    /**
     * Operation callList_2WithHttpInfo
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
    public function callList_2WithHttpInfo($student_id = null, $registration_group_id = null, $start_date = null, $end_date = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\Attendance[]';
        $request = $this->callList_2Request($student_id, $registration_group_id, $start_date, $end_date, $per_page, $page);

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
     * Operation callList_2Async
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
    public function callList_2Async($student_id = null, $registration_group_id = null, $start_date = null, $end_date = null, $per_page = '100', $page = '1')
    {
        return $this->callList_2AsyncWithHttpInfo($student_id, $registration_group_id, $start_date, $end_date, $per_page, $page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation callList_2AsyncWithHttpInfo
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
    public function callList_2AsyncWithHttpInfo($student_id = null, $registration_group_id = null, $start_date = null, $end_date = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\Attendance[]';
        $request = $this->callList_2Request($student_id, $registration_group_id, $start_date, $end_date, $per_page, $page);

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
     * Create request for operation 'callList_2'
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
    protected function callList_2Request($student_id = null, $registration_group_id = null, $start_date = null, $end_date = null, $per_page = '100', $page = '1')
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
     * Operation callList_3
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
    public function callList_3($event_type = null, $per_page = '100', $page = '1')
    {
        list($response) = $this->callList_3WithHttpInfo($event_type, $per_page, $page);
        return $response;
    }

    /**
     * Operation callList_3WithHttpInfo
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
    public function callList_3WithHttpInfo($event_type = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\CalendarEvent[]';
        $request = $this->callList_3Request($event_type, $per_page, $page);

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
     * Operation callList_3Async
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
    public function callList_3Async($event_type = null, $per_page = '100', $page = '1')
    {
        return $this->callList_3AsyncWithHttpInfo($event_type, $per_page, $page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation callList_3AsyncWithHttpInfo
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
    public function callList_3AsyncWithHttpInfo($event_type = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\CalendarEvent[]';
        $request = $this->callList_3Request($event_type, $per_page, $page);

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
     * Create request for operation 'callList_3'
     *
     * @param  string $event_type a calendar object type from the underlying MIS (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function callList_3Request($event_type = null, $per_page = '100', $page = '1')
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
     * Operation callList_4
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
    public function callList_4($student_id = null, $per_page = '100', $page = '1')
    {
        list($response) = $this->callList_4WithHttpInfo($student_id, $per_page, $page);
        return $response;
    }

    /**
     * Operation callList_4WithHttpInfo
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
    public function callList_4WithHttpInfo($student_id = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\Contact[]';
        $request = $this->callList_4Request($student_id, $per_page, $page);

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
     * Operation callList_4Async
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
    public function callList_4Async($student_id = null, $per_page = '100', $page = '1')
    {
        return $this->callList_4AsyncWithHttpInfo($student_id, $per_page, $page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation callList_4AsyncWithHttpInfo
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
    public function callList_4AsyncWithHttpInfo($student_id = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\Contact[]';
        $request = $this->callList_4Request($student_id, $per_page, $page);

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
     * Create request for operation 'callList_4'
     *
     * @param  int $student_id a student_id to filter by (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function callList_4Request($student_id = null, $per_page = '100', $page = '1')
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
     * Operation callList_5
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
    public function callList_5($student_id = null, $start_date = null, $end_date = null, $per_page = '100', $page = '1')
    {
        list($response) = $this->callList_5WithHttpInfo($student_id, $start_date, $end_date, $per_page, $page);
        return $response;
    }

    /**
     * Operation callList_5WithHttpInfo
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
    public function callList_5WithHttpInfo($student_id = null, $start_date = null, $end_date = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\Exclusion[]';
        $request = $this->callList_5Request($student_id, $start_date, $end_date, $per_page, $page);

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
     * Operation callList_5Async
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
    public function callList_5Async($student_id = null, $start_date = null, $end_date = null, $per_page = '100', $page = '1')
    {
        return $this->callList_5AsyncWithHttpInfo($student_id, $start_date, $end_date, $per_page, $page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation callList_5AsyncWithHttpInfo
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
    public function callList_5AsyncWithHttpInfo($student_id = null, $start_date = null, $end_date = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\Exclusion[]';
        $request = $this->callList_5Request($student_id, $start_date, $end_date, $per_page, $page);

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
     * Create request for operation 'callList_5'
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
    protected function callList_5Request($student_id = null, $start_date = null, $end_date = null, $per_page = '100', $page = '1')
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
     * Operation callList_6
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
    public function callList_6($per_page = '100', $page = '1')
    {
        list($response) = $this->callList_6WithHttpInfo($per_page, $page);
        return $response;
    }

    /**
     * Operation callList_6WithHttpInfo
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
    public function callList_6WithHttpInfo($per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\Facet[]';
        $request = $this->callList_6Request($per_page, $page);

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
     * Operation callList_6Async
     *
     * List Facets
     *
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function callList_6Async($per_page = '100', $page = '1')
    {
        return $this->callList_6AsyncWithHttpInfo($per_page, $page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation callList_6AsyncWithHttpInfo
     *
     * List Facets
     *
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function callList_6AsyncWithHttpInfo($per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\Facet[]';
        $request = $this->callList_6Request($per_page, $page);

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
     * Create request for operation 'callList_6'
     *
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function callList_6Request($per_page = '100', $page = '1')
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
     * Operation callList_7
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
    public function callList_7($if_modified_since = null, $year_code = null, $date = null, $academic_year_id = null, $per_page = '100', $page = '1')
    {
        list($response) = $this->callList_7WithHttpInfo($if_modified_since, $year_code, $date, $academic_year_id, $per_page, $page);
        return $response;
    }

    /**
     * Operation callList_7WithHttpInfo
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
    public function callList_7WithHttpInfo($if_modified_since = null, $year_code = null, $date = null, $academic_year_id = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\RegistrationGroup[]';
        $request = $this->callList_7Request($if_modified_since, $year_code, $date, $academic_year_id, $per_page, $page);

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
     * Operation callList_7Async
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
    public function callList_7Async($if_modified_since = null, $year_code = null, $date = null, $academic_year_id = null, $per_page = '100', $page = '1')
    {
        return $this->callList_7AsyncWithHttpInfo($if_modified_since, $year_code, $date, $academic_year_id, $per_page, $page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation callList_7AsyncWithHttpInfo
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
    public function callList_7AsyncWithHttpInfo($if_modified_since = null, $year_code = null, $date = null, $academic_year_id = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\RegistrationGroup[]';
        $request = $this->callList_7Request($if_modified_since, $year_code, $date, $academic_year_id, $per_page, $page);

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
     * Create request for operation 'callList_7'
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
    protected function callList_7Request($if_modified_since = null, $year_code = null, $date = null, $academic_year_id = null, $per_page = '100', $page = '1')
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
     * Operation callList_8
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
    public function callList_8($students, $if_modified_since = null, $per_page = '100', $page = '1')
    {
        list($response) = $this->callList_8WithHttpInfo($students, $if_modified_since, $per_page, $page);
        return $response;
    }

    /**
     * Operation callList_8WithHttpInfo
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
    public function callList_8WithHttpInfo($students, $if_modified_since = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\Result[]';
        $request = $this->callList_8Request($students, $if_modified_since, $per_page, $page);

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
     * Operation callList_8Async
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
    public function callList_8Async($students, $if_modified_since = null, $per_page = '100', $page = '1')
    {
        return $this->callList_8AsyncWithHttpInfo($students, $if_modified_since, $per_page, $page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation callList_8AsyncWithHttpInfo
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
    public function callList_8AsyncWithHttpInfo($students, $if_modified_since = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\Result[]';
        $request = $this->callList_8Request($students, $if_modified_since, $per_page, $page);

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
     * Create request for operation 'callList_8'
     *
     * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (required)
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     * @param  int $per_page Number of results to return (optional, default to 100)
     * @param  int $page Page number to return (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function callList_8Request($students, $if_modified_since = null, $per_page = '100', $page = '1')
    {
        // verify the required parameter 'students' is set
        if ($students === null || (is_array($students) && count($students) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $students when calling callList_8'
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
     * Operation callList_9
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
    public function callList_9($if_modified_since = null, $staff_member_id = null, $start_date = null, $qualifications = null, $per_page = '100', $page = '1')
    {
        list($response) = $this->callList_9WithHttpInfo($if_modified_since, $staff_member_id, $start_date, $qualifications, $per_page, $page);
        return $response;
    }

    /**
     * Operation callList_9WithHttpInfo
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
    public function callList_9WithHttpInfo($if_modified_since = null, $staff_member_id = null, $start_date = null, $qualifications = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\StaffAbsence[]';
        $request = $this->callList_9Request($if_modified_since, $staff_member_id, $start_date, $qualifications, $per_page, $page);

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
     * Operation callList_9Async
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
    public function callList_9Async($if_modified_since = null, $staff_member_id = null, $start_date = null, $qualifications = null, $per_page = '100', $page = '1')
    {
        return $this->callList_9AsyncWithHttpInfo($if_modified_since, $staff_member_id, $start_date, $qualifications, $per_page, $page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation callList_9AsyncWithHttpInfo
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
    public function callList_9AsyncWithHttpInfo($if_modified_since = null, $staff_member_id = null, $start_date = null, $qualifications = null, $per_page = '100', $page = '1')
    {
        $returnType = '\Assembly\Client\Model\StaffAbsence[]';
        $request = $this->callList_9Request($if_modified_since, $staff_member_id, $start_date, $qualifications, $per_page, $page);

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
     * Create request for operation 'callList_9'
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
    protected function callList_9Request($if_modified_since = null, $staff_member_id = null, $start_date = null, $qualifications = null, $per_page = '100', $page = '1')
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
     * Operation find
     *
     * View an Academic Year
     *
     * @param  int $id id of the entity (required)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\AcademicYear
     */
    public function find($id)
    {
        list($response) = $this->findWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation findWithHttpInfo
     *
     * View an Academic Year
     *
     * @param  int $id id of the entity (required)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\AcademicYear, HTTP status code, HTTP response headers (array of strings)
     */
    public function findWithHttpInfo($id)
    {
        $returnType = '\Assembly\Client\Model\AcademicYear';
        $request = $this->findRequest($id);

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
     * Operation findAsync
     *
     * View an Academic Year
     *
     * @param  int $id id of the entity (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findAsync($id)
    {
        return $this->findAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation findAsyncWithHttpInfo
     *
     * View an Academic Year
     *
     * @param  int $id id of the entity (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findAsyncWithHttpInfo($id)
    {
        $returnType = '\Assembly\Client\Model\AcademicYear';
        $request = $this->findRequest($id);

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
     * Create request for operation 'find'
     *
     * @param  int $id id of the entity (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function findRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling find'
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
     * Operation find_0
     *
     * View an Assessment Point
     *
     * @param  int $id id of the entity (required)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\AssessmentPoint
     */
    public function find_0($id)
    {
        list($response) = $this->find_0WithHttpInfo($id);
        return $response;
    }

    /**
     * Operation find_0WithHttpInfo
     *
     * View an Assessment Point
     *
     * @param  int $id id of the entity (required)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\AssessmentPoint, HTTP status code, HTTP response headers (array of strings)
     */
    public function find_0WithHttpInfo($id)
    {
        $returnType = '\Assembly\Client\Model\AssessmentPoint';
        $request = $this->find_0Request($id);

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
     * Operation find_0Async
     *
     * View an Assessment Point
     *
     * @param  int $id id of the entity (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function find_0Async($id)
    {
        return $this->find_0AsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation find_0AsyncWithHttpInfo
     *
     * View an Assessment Point
     *
     * @param  int $id id of the entity (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function find_0AsyncWithHttpInfo($id)
    {
        $returnType = '\Assembly\Client\Model\AssessmentPoint';
        $request = $this->find_0Request($id);

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
     * Create request for operation 'find_0'
     *
     * @param  int $id id of the entity (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function find_0Request($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling find_0'
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
     * Operation find_1
     *
     * View an Assessment
     *
     * @param  int $id id of the entity (required)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\Assessment
     */
    public function find_1($id)
    {
        list($response) = $this->find_1WithHttpInfo($id);
        return $response;
    }

    /**
     * Operation find_1WithHttpInfo
     *
     * View an Assessment
     *
     * @param  int $id id of the entity (required)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\Assessment, HTTP status code, HTTP response headers (array of strings)
     */
    public function find_1WithHttpInfo($id)
    {
        $returnType = '\Assembly\Client\Model\Assessment';
        $request = $this->find_1Request($id);

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
     * Operation find_1Async
     *
     * View an Assessment
     *
     * @param  int $id id of the entity (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function find_1Async($id)
    {
        return $this->find_1AsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation find_1AsyncWithHttpInfo
     *
     * View an Assessment
     *
     * @param  int $id id of the entity (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function find_1AsyncWithHttpInfo($id)
    {
        $returnType = '\Assembly\Client\Model\Assessment';
        $request = $this->find_1Request($id);

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
     * Create request for operation 'find_1'
     *
     * @param  int $id id of the entity (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function find_1Request($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling find_1'
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
     * Operation find_2
     *
     * View a Facet
     *
     * @param  int $id id of the entity (required)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\Facet
     */
    public function find_2($id)
    {
        list($response) = $this->find_2WithHttpInfo($id);
        return $response;
    }

    /**
     * Operation find_2WithHttpInfo
     *
     * View a Facet
     *
     * @param  int $id id of the entity (required)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\Facet, HTTP status code, HTTP response headers (array of strings)
     */
    public function find_2WithHttpInfo($id)
    {
        $returnType = '\Assembly\Client\Model\Facet';
        $request = $this->find_2Request($id);

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
     * Operation find_2Async
     *
     * View a Facet
     *
     * @param  int $id id of the entity (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function find_2Async($id)
    {
        return $this->find_2AsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation find_2AsyncWithHttpInfo
     *
     * View a Facet
     *
     * @param  int $id id of the entity (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function find_2AsyncWithHttpInfo($id)
    {
        $returnType = '\Assembly\Client\Model\Facet';
        $request = $this->find_2Request($id);

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
     * Create request for operation 'find_2'
     *
     * @param  int $id id of the entity (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function find_2Request($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling find_2'
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
     * Operation find_3
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
    public function find_3($id, $date = null, $academic_year_id = null)
    {
        list($response) = $this->find_3WithHttpInfo($id, $date, $academic_year_id);
        return $response;
    }

    /**
     * Operation find_3WithHttpInfo
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
    public function find_3WithHttpInfo($id, $date = null, $academic_year_id = null)
    {
        $returnType = '\Assembly\Client\Model\RegistrationGroup';
        $request = $this->find_3Request($id, $date, $academic_year_id);

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
     * Operation find_3Async
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
    public function find_3Async($id, $date = null, $academic_year_id = null)
    {
        return $this->find_3AsyncWithHttpInfo($id, $date, $academic_year_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation find_3AsyncWithHttpInfo
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
    public function find_3AsyncWithHttpInfo($id, $date = null, $academic_year_id = null)
    {
        $returnType = '\Assembly\Client\Model\RegistrationGroup';
        $request = $this->find_3Request($id, $date, $academic_year_id);

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
     * Create request for operation 'find_3'
     *
     * @param  int $id id of the entity (required)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function find_3Request($id, $date = null, $academic_year_id = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling find_3'
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
     * Operation find_4
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
    public function find_4($id, $demographics = null, $qualifications = null)
    {
        list($response) = $this->find_4WithHttpInfo($id, $demographics, $qualifications);
        return $response;
    }

    /**
     * Operation find_4WithHttpInfo
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
    public function find_4WithHttpInfo($id, $demographics = null, $qualifications = null)
    {
        $returnType = '\Assembly\Client\Model\StaffMember';
        $request = $this->find_4Request($id, $demographics, $qualifications);

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
     * Operation find_4Async
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
    public function find_4Async($id, $demographics = null, $qualifications = null)
    {
        return $this->find_4AsyncWithHttpInfo($id, $demographics, $qualifications)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation find_4AsyncWithHttpInfo
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
    public function find_4AsyncWithHttpInfo($id, $demographics = null, $qualifications = null)
    {
        $returnType = '\Assembly\Client\Model\StaffMember';
        $request = $this->find_4Request($id, $demographics, $qualifications);

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
     * Create request for operation 'find_4'
     *
     * @param  int $id id of the entity (required)
     * @param  bool $demographics include demographics data (optional)
     * @param  bool $qualifications include HLTA status, QT status, QT route and previous degree information (requires &#x60;staff_members.qualifications&#x60; scope) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function find_4Request($id, $demographics = null, $qualifications = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling find_4'
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
     * Operation find_5
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
    public function find_5($id, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        list($response) = $this->find_5WithHttpInfo($id, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo);
        return $response;
    }

    /**
     * Operation find_5WithHttpInfo
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
    public function find_5WithHttpInfo($id, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        $returnType = '\Assembly\Client\Model\Student';
        $request = $this->find_5Request($id, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo);

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
     * Operation find_5Async
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
    public function find_5Async($id, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        return $this->find_5AsyncWithHttpInfo($id, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation find_5AsyncWithHttpInfo
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
    public function find_5AsyncWithHttpInfo($id, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        $returnType = '\Assembly\Client\Model\Student';
        $request = $this->find_5Request($id, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo);

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
     * Create request for operation 'find_5'
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
    protected function find_5Request($id, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling find_5'
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
     * Operation find_6
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
    public function find_6($id, $date = null, $academic_year_id = null, $group_id = null)
    {
        list($response) = $this->find_6WithHttpInfo($id, $date, $academic_year_id, $group_id);
        return $response;
    }

    /**
     * Operation find_6WithHttpInfo
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
    public function find_6WithHttpInfo($id, $date = null, $academic_year_id = null, $group_id = null)
    {
        $returnType = '\Assembly\Client\Model\TeachingGroup';
        $request = $this->find_6Request($id, $date, $academic_year_id, $group_id);

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
     * Operation find_6Async
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
    public function find_6Async($id, $date = null, $academic_year_id = null, $group_id = null)
    {
        return $this->find_6AsyncWithHttpInfo($id, $date, $academic_year_id, $group_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation find_6AsyncWithHttpInfo
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
    public function find_6AsyncWithHttpInfo($id, $date = null, $academic_year_id = null, $group_id = null)
    {
        $returnType = '\Assembly\Client\Model\TeachingGroup';
        $request = $this->find_6Request($id, $date, $academic_year_id, $group_id);

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
     * Create request for operation 'find_6'
     *
     * @param  int $id id of the entity (required)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
     * @param  int $group_id a group_id to filter by (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function find_6Request($id, $date = null, $academic_year_id = null, $group_id = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling find_6'
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
     * Operation find_7
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
    public function find_7($id, $date = null, $academic_year_id = null)
    {
        list($response) = $this->find_7WithHttpInfo($id, $date, $academic_year_id);
        return $response;
    }

    /**
     * Operation find_7WithHttpInfo
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
    public function find_7WithHttpInfo($id, $date = null, $academic_year_id = null)
    {
        $returnType = '\Assembly\Client\Model\YearGroup';
        $request = $this->find_7Request($id, $date, $academic_year_id);

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
     * Operation find_7Async
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
    public function find_7Async($id, $date = null, $academic_year_id = null)
    {
        return $this->find_7AsyncWithHttpInfo($id, $date, $academic_year_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation find_7AsyncWithHttpInfo
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
    public function find_7AsyncWithHttpInfo($id, $date = null, $academic_year_id = null)
    {
        $returnType = '\Assembly\Client\Model\YearGroup';
        $request = $this->find_7Request($id, $date, $academic_year_id);

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
     * Create request for operation 'find_7'
     *
     * @param  int $id id of the entity (required)
     * @param  \DateTime $date returns results for a specific date (optional)
     * @param  int $academic_year_id returns all groups and group memberships from the specified academic year (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function find_7Request($id, $date = null, $academic_year_id = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling find_7'
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
     * Operation gradeSet
     *
     * View Grade Set for an Assessment
     *
     * @param  int $id id of the entity (required)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\GradeSet
     */
    public function gradeSet($id)
    {
        list($response) = $this->gradeSetWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation gradeSetWithHttpInfo
     *
     * View Grade Set for an Assessment
     *
     * @param  int $id id of the entity (required)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\GradeSet, HTTP status code, HTTP response headers (array of strings)
     */
    public function gradeSetWithHttpInfo($id)
    {
        $returnType = '\Assembly\Client\Model\GradeSet';
        $request = $this->gradeSetRequest($id);

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
     * Operation gradeSetAsync
     *
     * View Grade Set for an Assessment
     *
     * @param  int $id id of the entity (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function gradeSetAsync($id)
    {
        return $this->gradeSetAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation gradeSetAsyncWithHttpInfo
     *
     * View Grade Set for an Assessment
     *
     * @param  int $id id of the entity (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function gradeSetAsyncWithHttpInfo($id)
    {
        $returnType = '\Assembly\Client\Model\GradeSet';
        $request = $this->gradeSetRequest($id);

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
     * Create request for operation 'gradeSet'
     *
     * @param  int $id id of the entity (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function gradeSetRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling gradeSet'
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
     * Operation left
     *
     * List Left Students
     *
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\Student[]
     */
    public function left($if_modified_since = null)
    {
        list($response) = $this->leftWithHttpInfo($if_modified_since);
        return $response;
    }

    /**
     * Operation leftWithHttpInfo
     *
     * List Left Students
     *
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\Student[], HTTP status code, HTTP response headers (array of strings)
     */
    public function leftWithHttpInfo($if_modified_since = null)
    {
        $returnType = '\Assembly\Client\Model\Student[]';
        $request = $this->leftRequest($if_modified_since);

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
     * Operation leftAsync
     *
     * List Left Students
     *
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leftAsync($if_modified_since = null)
    {
        return $this->leftAsyncWithHttpInfo($if_modified_since)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leftAsyncWithHttpInfo
     *
     * List Left Students
     *
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leftAsyncWithHttpInfo($if_modified_since = null)
    {
        $returnType = '\Assembly\Client\Model\Student[]';
        $request = $this->leftRequest($if_modified_since);

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
     * Create request for operation 'left'
     *
     * @param  \DateTime $if_modified_since If-Modified-Since is optional (see the page on Conditional Requests for more details). (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leftRequest($if_modified_since = null)
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
     * Operation results
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
    public function results($id, $students, $assessment_point_rank = null)
    {
        list($response) = $this->resultsWithHttpInfo($id, $students, $assessment_point_rank);
        return $response;
    }

    /**
     * Operation resultsWithHttpInfo
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
    public function resultsWithHttpInfo($id, $students, $assessment_point_rank = null)
    {
        $returnType = '\Assembly\Client\Model\Result[]';
        $request = $this->resultsRequest($id, $students, $assessment_point_rank);

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
     * Operation resultsAsync
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
    public function resultsAsync($id, $students, $assessment_point_rank = null)
    {
        return $this->resultsAsyncWithHttpInfo($id, $students, $assessment_point_rank)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation resultsAsyncWithHttpInfo
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
    public function resultsAsyncWithHttpInfo($id, $students, $assessment_point_rank = null)
    {
        $returnType = '\Assembly\Client\Model\Result[]';
        $request = $this->resultsRequest($id, $students, $assessment_point_rank);

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
     * Create request for operation 'results'
     *
     * @param  int $id id of the entity (required)
     * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (required)
     * @param  int $assessment_point_rank the Assessment Point rank (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function resultsRequest($id, $students, $assessment_point_rank = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling results'
            );
        }
        // verify the required parameter 'students' is set
        if ($students === null || (is_array($students) && count($students) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $students when calling results'
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
     * Operation results_0
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
    public function results_0($id, $students)
    {
        list($response) = $this->results_0WithHttpInfo($id, $students);
        return $response;
    }

    /**
     * Operation results_0WithHttpInfo
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
    public function results_0WithHttpInfo($id, $students)
    {
        $returnType = '\Assembly\Client\Model\Result[]';
        $request = $this->results_0Request($id, $students);

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
     * Operation results_0Async
     *
     * View Results for an Assessment
     *
     * @param  int $id id of the entity (required)
     * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function results_0Async($id, $students)
    {
        return $this->results_0AsyncWithHttpInfo($id, $students)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation results_0AsyncWithHttpInfo
     *
     * View Results for an Assessment
     *
     * @param  int $id id of the entity (required)
     * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function results_0AsyncWithHttpInfo($id, $students)
    {
        $returnType = '\Assembly\Client\Model\Result[]';
        $request = $this->results_0Request($id, $students);

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
     * Create request for operation 'results_0'
     *
     * @param  int $id id of the entity (required)
     * @param  int[] $students ID(s) of the student(s) as an Integer. Multiple IDs can be separated with a space (so a + URL encoded). (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function results_0Request($id, $students)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling results_0'
            );
        }
        // verify the required parameter 'students' is set
        if ($students === null || (is_array($students) && count($students) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $students when calling results_0'
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
     * Operation show
     *
     * List School Details
     *
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Assembly\Client\Model\SchoolDetails
     */
    public function show()
    {
        list($response) = $this->showWithHttpInfo();
        return $response;
    }

    /**
     * Operation showWithHttpInfo
     *
     * List School Details
     *
     *
     * @throws \Assembly\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Assembly\Client\Model\SchoolDetails, HTTP status code, HTTP response headers (array of strings)
     */
    public function showWithHttpInfo()
    {
        $returnType = '\Assembly\Client\Model\SchoolDetails';
        $request = $this->showRequest();

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
            }
            throw $e;
        }
    }

    /**
     * Operation showAsync
     *
     * List School Details
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function showAsync()
    {
        return $this->showAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation showAsyncWithHttpInfo
     *
     * List School Details
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function showAsyncWithHttpInfo()
    {
        $returnType = '\Assembly\Client\Model\SchoolDetails';
        $request = $this->showRequest();

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
     * Create request for operation 'show'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function showRequest()
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
     * Operation students
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
    public function students($id, $if_modified_since = null, $date = null, $academic_year_id = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        list($response) = $this->studentsWithHttpInfo($id, $if_modified_since, $date, $academic_year_id, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo);
        return $response;
    }

    /**
     * Operation studentsWithHttpInfo
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
    public function studentsWithHttpInfo($id, $if_modified_since = null, $date = null, $academic_year_id = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        $returnType = '\Assembly\Client\Model\Student[]';
        $request = $this->studentsRequest($id, $if_modified_since, $date, $academic_year_id, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo);

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
     * Operation studentsAsync
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
    public function studentsAsync($id, $if_modified_since = null, $date = null, $academic_year_id = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        return $this->studentsAsyncWithHttpInfo($id, $if_modified_since, $date, $academic_year_id, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation studentsAsyncWithHttpInfo
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
    public function studentsAsyncWithHttpInfo($id, $if_modified_since = null, $date = null, $academic_year_id = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        $returnType = '\Assembly\Client\Model\Student[]';
        $request = $this->studentsRequest($id, $if_modified_since, $date, $academic_year_id, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo);

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
     * Create request for operation 'students'
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
    protected function studentsRequest($id, $if_modified_since = null, $date = null, $academic_year_id = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling students'
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
     * Operation students_0
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
    public function students_0($id, $if_modified_since = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        list($response) = $this->students_0WithHttpInfo($id, $if_modified_since, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo);
        return $response;
    }

    /**
     * Operation students_0WithHttpInfo
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
    public function students_0WithHttpInfo($id, $if_modified_since = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        $returnType = '\Assembly\Client\Model\Student[]';
        $request = $this->students_0Request($id, $if_modified_since, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo);

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
     * Operation students_0Async
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
    public function students_0Async($id, $if_modified_since = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        return $this->students_0AsyncWithHttpInfo($id, $if_modified_since, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation students_0AsyncWithHttpInfo
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
    public function students_0AsyncWithHttpInfo($id, $if_modified_since = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        $returnType = '\Assembly\Client\Model\Student[]';
        $request = $this->students_0Request($id, $if_modified_since, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo);

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
     * Create request for operation 'students_0'
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
    protected function students_0Request($id, $if_modified_since = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling students_0'
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
     * Operation students_1
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
    public function students_1($id, $if_modified_since = null, $date = null, $academic_year_id = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        list($response) = $this->students_1WithHttpInfo($id, $if_modified_since, $date, $academic_year_id, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo);
        return $response;
    }

    /**
     * Operation students_1WithHttpInfo
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
    public function students_1WithHttpInfo($id, $if_modified_since = null, $date = null, $academic_year_id = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        $returnType = '\Assembly\Client\Model\Student[]';
        $request = $this->students_1Request($id, $if_modified_since, $date, $academic_year_id, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo);

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
     * Operation students_1Async
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
    public function students_1Async($id, $if_modified_since = null, $date = null, $academic_year_id = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        return $this->students_1AsyncWithHttpInfo($id, $if_modified_since, $date, $academic_year_id, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation students_1AsyncWithHttpInfo
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
    public function students_1AsyncWithHttpInfo($id, $if_modified_since = null, $date = null, $academic_year_id = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        $returnType = '\Assembly\Client\Model\Student[]';
        $request = $this->students_1Request($id, $if_modified_since, $date, $academic_year_id, $demographics, $contacts, $sen_needs, $addresses, $care, $ever_in_care, $languages, $photo);

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
     * Create request for operation 'students_1'
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
    protected function students_1Request($id, $if_modified_since = null, $date = null, $academic_year_id = null, $demographics = null, $contacts = null, $sen_needs = null, $addresses = null, $care = null, $ever_in_care = null, $languages = null, $photo = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling students_1'
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
