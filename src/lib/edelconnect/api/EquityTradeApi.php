<?php
/**
 * EquityTradeApi
 * PHP version 7.2
 *
 * @category Class
 * @package  com\edel
 * @author   Edelweiss
 * @link     https://www.edelweiss.in
 */

/**
 * Swagger spec for our Equity REST Project - Uat Version
 *
 * This page has details of all the resources related to equity that are a part of the REST API project. You can find request and response of all our APIs. You can try to generate a sample response by using the 'Try now' option as well. All APIs under the REST project have to be called by passing certain Authentication credentials as part of the request header. AppId and AppIdKey are the Authentication credentials that we expect for non logged in APIs whereas the logged in section will continue to accept JSESSIONID as a part of the cookie. We are working on it. Watch this space for any updates on the same.
 *
 * The version of the document: v1
 */

/**
 * Do not edit the class manually.
 */

namespace com\edel\edelconnect\api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use com\edel\ApiException;
use com\edel\Configuration;
use com\edel\HeaderSelector;
use com\edel\ObjectSerializer;
use Logger;
use com\edel\LogConfig;

/**
 * EquityTradeApi Class Doc Comment
 *
 * @category Class
 * @package  com\edel
 * @author   Edelweiss
 * @link     https://www.edelweiss.in
 */
class EquityTradeApi
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
     * @var int Host index
     */
    protected $hostIndex;

     /**
     * @var log 
     */
    protected $log;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
        $logConfig=new LogConfig;
        $iniConfig= parse_ini_file($this->config->getIniFilePath());
        Logger::configure($logConfig->getLogConfig($iniConfig['LogLevel'],$iniConfig['LogFilePath']));
        $this->log=Logger::getRootLogger();
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation cancelAMOTrade
     *
     * Cancel AMO trade for a client in equity
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\EQCancelTradeRequestDao $body body (optional)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \com\edel\edelconnect\models\CancelTradeDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse
     */
    public function cancelAMOTrade($userID, $body = null)
    {
        $this->log->info("Inside method : cancelAMOTrade");
        $this->log->debug("Parameters userID :".$userID.",Body:".json_encode($body));
        list($response) = $this->cancelAMOTradeWithHttpInfo($userID, $body);
        $this->log->debug("Response cancelAMOTrade :".\json_encode($response));
        return $response;
    }

    /**
     * Operation cancelAMOTradeWithHttpInfo
     *
     * Cancel AMO trade for a client in equity
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\EQCancelTradeRequestDao $body (optional)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \com\edel\edelconnect\models\CancelTradeDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function cancelAMOTradeWithHttpInfo($userID, $body = null)
    {
        $request = $this->cancelAMOTradeRequest($userID, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\com\edel\edelconnect\models\CancelTradeDao' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\CancelTradeDao', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\com\edel\edelconnect\models\SessionExpired' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\SessionExpired', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\com\edel\edelconnect\models\CommonErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\CommonErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\com\edel\edelconnect\models\CancelTradeDao';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\com\edel\edelconnect\models\CancelTradeDao',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\edel\edelconnect\models\SessionExpired',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\edel\edelconnect\models\CommonErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation cancelAMOTradeAsync
     *
     * Cancel AMO trade for a client in equity
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\EQCancelTradeRequestDao $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelAMOTradeAsync($userID, $body = null)
    {
        return $this->cancelAMOTradeAsyncWithHttpInfo($userID, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation cancelAMOTradeAsyncWithHttpInfo
     *
     * Cancel AMO trade for a client in equity
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\EQCancelTradeRequestDao $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelAMOTradeAsyncWithHttpInfo($userID, $body = null)
    {
        $returnType = '\com\edel\edelconnect\models\CancelTradeDao';
        $request = $this->cancelAMOTradeRequest($userID, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'cancelAMOTrade'
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\EQCancelTradeRequestDao $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function cancelAMOTradeRequest($userID, $body = null)
    {
        // verify the required parameter 'userID' is set
        if ($userID === null || (is_array($userID) && count($userID) === 0)) {
            $this->log->error("Missing the required parameter $userID when calling cancelAMOTrade");
            throw new \InvalidArgumentException(
                'Missing the required parameter $userID when calling cancelAMOTrade'
            );
        }

        $resourcePath = '/eq/trade/amo/canceltrade/{userID}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($userID !== null) {
            $resourcePath = str_replace(
                '{' . 'userID' . '}',
                ObjectSerializer::toPathValue($userID),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($body)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
        $this->log->debug("Headers cancelAMOTrade:".\json_encode($headers));
        $this->log->debug("URL PUT cancelAMOTrade:".$this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''));
        return new Request(
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation cancelTradeV1
     *
     * Cancel trade for a client in equity. An order can be cancelled, as long as on order is open or pending in the system
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\EQCancelTradeReq $body nstOID, exc, ordTyp, prdCode are mandatory (required)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \com\edel\edelconnect\models\CancelTradeDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse
     */
    public function cancelTradeV1($userID, $body)
    {
        $this->log->info("Inside method : cancelTradeV1");
        $this->log->debug("Parameters userID :".$userID.",Body:".json_encode($body));
        list($response) = $this->cancelTradeV1WithHttpInfo($userID, $body);
        $this->log->debug("Response cancelTradeV1 :".\json_encode($response));
        return $response;
    }

    /**
     * Operation cancelTradeV1WithHttpInfo
     *
     * Cancel trade for a client in equity. An order can be cancelled, as long as on order is open or pending in the system
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\EQCancelTradeReq $body nstOID, exc, ordTyp, prdCode are mandatory (required)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \com\edel\edelconnect\models\CancelTradeDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function cancelTradeV1WithHttpInfo($userID, $body)
    {
        $request = $this->cancelTradeV1Request($userID, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\com\edel\edelconnect\models\CancelTradeDao' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\CancelTradeDao', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\com\edel\edelconnect\models\SessionExpired' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\SessionExpired', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\com\edel\edelconnect\models\CommonErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\CommonErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\com\edel\edelconnect\models\CancelTradeDao';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\com\edel\edelconnect\models\CancelTradeDao',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\edel\edelconnect\models\SessionExpired',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\edel\edelconnect\models\CommonErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation cancelTradeV1Async
     *
     * Cancel trade for a client in equity. An order can be cancelled, as long as on order is open or pending in the system
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\EQCancelTradeReq $body nstOID, exc, ordTyp, prdCode are mandatory (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelTradeV1Async($userID, $body)
    {
        return $this->cancelTradeV1AsyncWithHttpInfo($userID, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation cancelTradeV1AsyncWithHttpInfo
     *
     * Cancel trade for a client in equity. An order can be cancelled, as long as on order is open or pending in the system
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\EQCancelTradeReq $body nstOID, exc, ordTyp, prdCode are mandatory (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelTradeV1AsyncWithHttpInfo($userID, $body)
    {
        $returnType = '\com\edel\edelconnect\models\CancelTradeDao';
        $request = $this->cancelTradeV1Request($userID, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'cancelTradeV1'
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\EQCancelTradeReq $body nstOID, exc, ordTyp, prdCode are mandatory (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function cancelTradeV1Request($userID, $body)
    {
        // verify the required parameter 'userID' is set
        if ($userID === null || (is_array($userID) && count($userID) === 0)) {
            $this->log->error("Missing the required parameter $userID when calling cancelTradeV1");
            throw new \InvalidArgumentException(
                'Missing the required parameter $userID when calling cancelTradeV1'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            $this->log->error("Missing the required parameter $body when calling cancelTradeV1");
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling cancelTradeV1'
            );
        }

        $resourcePath = '/eq/trade/canceltrade/v1/{userID}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($userID !== null) {
            $resourcePath = str_replace(
                '{' . 'userID' . '}',
                ObjectSerializer::toPathValue($userID),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($body)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
        $this->log->debug("Headers cancelTradeV1:".json_encode($headers));
        $this->log->debug("URL PUT cancelTradeV1:".$this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''));
        return new Request(
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation convertPositionEquity
     *
     * Convert a position for a client
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\EQConvertPositionReq $body body (optional)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \com\edel\edelconnect\models\EqConvertPositionDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse
     */
    public function convertPositionEquity($userID, $body = null)
    {
        $this->log->info("Inside method : convertPositionEquity");
        $this->log->debug("Parameters userID :".$userID.",Body:".json_encode($body));
        list($response) = $this->convertPositionEquityWithHttpInfo($userID, $body);
        $this->log->debug("Response convertPositionEquity :".\json_encode($response));
        return $response;
    }

    /**
     * Operation convertPositionEquityWithHttpInfo
     *
     * Convert a position for a client
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\EQConvertPositionReq $body (optional)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \com\edel\edelconnect\models\EqConvertPositionDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function convertPositionEquityWithHttpInfo($userID, $body = null)
    {
        $request = $this->convertPositionEquityRequest($userID, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\com\edel\edelconnect\models\EqConvertPositionDao' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\EqConvertPositionDao', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\com\edel\edelconnect\models\SessionExpired' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\SessionExpired', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\com\edel\edelconnect\models\CommonErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\CommonErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\com\edel\edelconnect\models\EqConvertPositionDao';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\com\edel\edelconnect\models\EqConvertPositionDao',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\edel\edelconnect\models\SessionExpired',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\edel\edelconnect\models\CommonErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation convertPositionEquityAsync
     *
     * Convert a position for a client
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\EQConvertPositionReq $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertPositionEquityAsync($userID, $body = null)
    {
        return $this->convertPositionEquityAsyncWithHttpInfo($userID, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation convertPositionEquityAsyncWithHttpInfo
     *
     * Convert a position for a client
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\EQConvertPositionReq $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertPositionEquityAsyncWithHttpInfo($userID, $body = null)
    {
        $returnType = '\com\edel\edelconnect\models\EqConvertPositionDao';
        $request = $this->convertPositionEquityRequest($userID, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'convertPositionEquity'
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\EQConvertPositionReq $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function convertPositionEquityRequest($userID, $body = null)
    {
        // verify the required parameter 'userID' is set
        if ($userID === null || (is_array($userID) && count($userID) === 0)) {
            $this->log->error("Missing the required parameter $userID when calling convertPositionEquity");
            throw new \InvalidArgumentException(
                'Missing the required parameter $userID when calling convertPositionEquity'
            );
        }

        $resourcePath = '/eq/trade/convertposition/v1/{userID}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($userID !== null) {
            $resourcePath = str_replace(
                '{' . 'userID' . '}',
                ObjectSerializer::toPathValue($userID),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($body)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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

        $this->log->debug("Headers convertPositionEquity".\json_encode($headers));
        $this->log->debug("URL PUT convertPositionEquity".$this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''));
       
        return new Request(
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation coverTrade
     *
     * Place  trade for a client in equity
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\EQPlaceTradeRequestDao $body body (optional)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \com\edel\edelconnect\models\PlaceTradeDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse
     */
    public function coverTrade($userID, $body = null)
    {
        $this->log->info("Inside method : coverTrade");
        $this->log->debug("Parameters userID :".$userID.",body:".json_encode($body));
        list($response) = $this->coverTradeWithHttpInfo($userID, $body);
        $this->log->debug("Response coverTrade :".\json_encode($response));
        return $response;
    }

    /**
     * Operation coverTradeWithHttpInfo
     *
     * Place  trade for a client in equity
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\EQPlaceTradeRequestDao $body (optional)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \com\edel\edelconnect\models\PlaceTradeDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function coverTradeWithHttpInfo($userID, $body = null)
    {
        $request = $this->coverTradeRequest($userID, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\com\edel\edelconnect\models\PlaceTradeDao' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\PlaceTradeDao', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\com\edel\edelconnect\models\SessionExpired' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\SessionExpired', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\com\edel\edelconnect\models\CommonErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\CommonErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\com\edel\edelconnect\models\PlaceTradeDao';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\com\edel\edelconnect\models\PlaceTradeDao',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\edel\edelconnect\models\SessionExpired',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\edel\edelconnect\models\CommonErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation coverTradeAsync
     *
     * Place  trade for a client in equity
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\EQPlaceTradeRequestDao $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function coverTradeAsync($userID, $body = null)
    {
        return $this->coverTradeAsyncWithHttpInfo($userID, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation coverTradeAsyncWithHttpInfo
     *
     * Place  trade for a client in equity
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\EQPlaceTradeRequestDao $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function coverTradeAsyncWithHttpInfo($userID, $body = null)
    {
        $returnType = '\com\edel\edelconnect\models\PlaceTradeDao';
        $request = $this->coverTradeRequest($userID, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'coverTrade'
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\EQPlaceTradeRequestDao $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function coverTradeRequest($userID, $body = null)
    {
        // verify the required parameter 'userID' is set
        if ($userID === null || (is_array($userID) && count($userID) === 0)) {
            $this->log->error("Missing the required parameter $userID when calling coverTrade");
            throw new \InvalidArgumentException(
                'Missing the required parameter $userID when calling coverTrade'
            );
        }

        $resourcePath = '/eq/trade/covertrade/{userID}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($userID !== null) {
            $resourcePath = str_replace(
                '{' . 'userID' . '}',
                ObjectSerializer::toPathValue($userID),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($body)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
        $this->log->debug("Headers coverTrade:".json_encode($headers));
        $this->log->debug("URL POST coverTrade:".$this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''));
        $this->log->debug("Body coverTrade:".json_encode($httpBody));

        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation exitBracketTrade
     *
     * To Exit a Bracket trade for a client in equity
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\EQBracketExitRequestDao $body body (optional)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \com\edel\edelconnect\models\CancelTradeDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse
     */
    public function exitBracketTrade($userID, $body = null)
    {
        $this->log->info("Inside method : exitBracketTrade");
        $this->log->debug("Parameters userID :".$userID.", body:".json_encode($body));
        list($response) = $this->exitBracketTradeWithHttpInfo($userID, $body);
        $this->log->debug("Response exitBracketTrade :".\json_encode($response));
        return $response;
    }

    /**
     * Operation exitBracketTradeWithHttpInfo
     *
     * To Exit a Bracket trade for a client in equity
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\EQBracketExitRequestDao $body (optional)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \com\edel\edelconnect\models\CancelTradeDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function exitBracketTradeWithHttpInfo($userID, $body = null)
    {
        $request = $this->exitBracketTradeRequest($userID, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\com\edel\edelconnect\models\CancelTradeDao' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\CancelTradeDao', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\com\edel\edelconnect\models\SessionExpired' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\SessionExpired', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\com\edel\edelconnect\models\CommonErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\CommonErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\com\edel\edelconnect\models\CancelTradeDao';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\com\edel\edelconnect\models\CancelTradeDao',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\edel\edelconnect\models\SessionExpired',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\edel\edelconnect\models\CommonErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation exitBracketTradeAsync
     *
     * To Exit a Bracket trade for a client in equity
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\EQBracketExitRequestDao $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function exitBracketTradeAsync($userID, $body = null)
    {
        return $this->exitBracketTradeAsyncWithHttpInfo($userID, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation exitBracketTradeAsyncWithHttpInfo
     *
     * To Exit a Bracket trade for a client in equity
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\EQBracketExitRequestDao $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function exitBracketTradeAsyncWithHttpInfo($userID, $body = null)
    {
        $returnType = '\com\edel\edelconnect\models\CancelTradeDao';
        $request = $this->exitBracketTradeRequest($userID, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'exitBracketTrade'
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\EQBracketExitRequestDao $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function exitBracketTradeRequest($userID, $body = null)
    {
        // verify the required parameter 'userID' is set
        if ($userID === null || (is_array($userID) && count($userID) === 0)) {
            $this->log->error("Missing the required parameter $userID when calling exitBracketTrade");
            throw new \InvalidArgumentException(
                'Missing the required parameter $userID when calling exitBracketTrade'
            );
        }

        $resourcePath = '/eq/trade/exitbrackettrade/{userID}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($userID !== null) {
            $resourcePath = str_replace(
                '{' . 'userID' . '}',
                ObjectSerializer::toPathValue($userID),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($body)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
        $this->log->debug("Headers exitBracketTrade:".\json_encode($headers));
        $this->log->debug("URL DELETE exitBracketTrade:".$this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''));
        
        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation exitCoverTrade
     *
     * Exits from cover trade for a client in equity
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\EQCancelTradeRequestDao $body nstOID is mandatory to exit from cover order (required)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \com\edel\edelconnect\models\CancelTradeCoverDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse
     */
    public function exitCoverTrade($userID, $body)
    {
        $this->log->info("Inside method : exitCoverTrade");
        $this->log->debug("Parameters userID :".$userID.", body:".json_encode($body));
        list($response) = $this->exitCoverTradeWithHttpInfo($userID, $body);
        $this->log->debug("Response exitCoverTrade :".\json_encode($response));
        return $response;
    }

    /**
     * Operation exitCoverTradeWithHttpInfo
     *
     * Exits from cover trade for a client in equity
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\EQCancelTradeRequestDao $body nstOID is mandatory to exit from cover order (required)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \com\edel\edelconnect\models\CancelTradeCoverDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function exitCoverTradeWithHttpInfo($userID, $body)
    {
        $request = $this->exitCoverTradeRequest($userID, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\com\edel\edelconnect\models\CancelTradeCoverDao' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\CancelTradeCoverDao', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\com\edel\edelconnect\models\SessionExpired' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\SessionExpired', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\com\edel\edelconnect\models\CommonErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\CommonErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\com\edel\edelconnect\models\CancelTradeCoverDao';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\com\edel\edelconnect\models\CancelTradeCoverDao',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\edel\edelconnect\models\SessionExpired',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\edel\edelconnect\models\CommonErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation exitCoverTradeAsync
     *
     * Exits from cover trade for a client in equity
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\EQCancelTradeRequestDao $body nstOID is mandatory to exit from cover order (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function exitCoverTradeAsync($userID, $body)
    {
        return $this->exitCoverTradeAsyncWithHttpInfo($userID, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation exitCoverTradeAsyncWithHttpInfo
     *
     * Exits from cover trade for a client in equity
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\EQCancelTradeRequestDao $body nstOID is mandatory to exit from cover order (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function exitCoverTradeAsyncWithHttpInfo($userID, $body)
    {
        $returnType = '\com\edel\edelconnect\models\CancelTradeCoverDao';
        $request = $this->exitCoverTradeRequest($userID, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'exitCoverTrade'
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\EQCancelTradeRequestDao $body nstOID is mandatory to exit from cover order (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function exitCoverTradeRequest($userID, $body)
    {
        // verify the required parameter 'userID' is set
        if ($userID === null || (is_array($userID) && count($userID) === 0)) {
            $this->log->error("Missing the required parameter $userID when calling exitCoverTrade");
            throw new \InvalidArgumentException(
                'Missing the required parameter $userID when calling exitCoverTrade'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            $this->log->error("Missing the required parameter $body when calling exitCoverTrade");
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling exitCoverTrade'
            );
        }

        $resourcePath = '/eq/trade/exitcovertrade/{userID}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($userID !== null) {
            $resourcePath = str_replace(
                '{' . 'userID' . '}',
                ObjectSerializer::toPathValue($userID),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($body)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
        $this->log->debug("Headers exitCoverTrade:".json_encode($headers));
        $this->log->debug("URL PUT exitCoverTrade:".$this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''));
        $this->log->debug("Body exitCoverTrade:".json_encode($httpBody));
        
        return new Request(
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getAMOFlag
     *
     * Get AMO Flag
     *
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \com\edel\edelconnect\models\CommAMODao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse
     */
    public function getAMOFlag()
    {
        $this->log->info("Inside method : getAMOFlag");
        list($response) = $this->getAMOFlagWithHttpInfo();
        $this->log->debug("Response getAMOFlag :".\json_encode($response));
        return $response;
    }

    /**
     * Operation getAMOFlagWithHttpInfo
     *
     * Get AMO Flag
     *
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \com\edel\edelconnect\models\CommAMODao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAMOFlagWithHttpInfo()
    {
        $request = $this->getAMOFlagRequest();

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\com\edel\edelconnect\models\CommAMODao' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\CommAMODao', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\com\edel\edelconnect\models\SessionExpired' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\SessionExpired', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\com\edel\edelconnect\models\CommonErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\CommonErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\com\edel\edelconnect\models\CommAMODao';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\com\edel\edelconnect\models\CommAMODao',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\edel\edelconnect\models\SessionExpired',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\edel\edelconnect\models\CommonErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAMOFlagAsync
     *
     * Get AMO Flag
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAMOFlagAsync()
    {
        return $this->getAMOFlagAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAMOFlagAsyncWithHttpInfo
     *
     * Get AMO Flag
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAMOFlagAsyncWithHttpInfo()
    {
        $returnType = '\com\edel\edelconnect\models\CommAMODao';
        $request = $this->getAMOFlagRequest();

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getAMOFlag'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAMOFlagRequest()
    {

        $resourcePath = '/eq/trade/amoflag';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
     * Operation modifyAMOTrade
     *
     * Modify amo Trade for a client
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\EQModifyTradeRequestDao $body body (optional)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \com\edel\edelconnect\models\ModifyTradeDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse
     */
    public function modifyAMOTrade($userID, $body = null)
    {
        $this->log->info("Inside method : modifyAMOTrade");
        $this->log->debug("Parameters userID :".$userID.", body:".json_encode($body));
        list($response) = $this->modifyAMOTradeWithHttpInfo($userID, $body);
        $this->log->debug("Response modifyAMOTrade :".\json_encode($response));
        return $response;
    }

    /**
     * Operation modifyAMOTradeWithHttpInfo
     *
     * Modify amo Trade for a client
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\EQModifyTradeRequestDao $body (optional)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \com\edel\edelconnect\models\ModifyTradeDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function modifyAMOTradeWithHttpInfo($userID, $body = null)
    {
        $request = $this->modifyAMOTradeRequest($userID, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\com\edel\edelconnect\models\ModifyTradeDao' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\ModifyTradeDao', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\com\edel\edelconnect\models\SessionExpired' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\SessionExpired', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\com\edel\edelconnect\models\CommonErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\CommonErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\com\edel\edelconnect\models\ModifyTradeDao';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\com\edel\edelconnect\models\ModifyTradeDao',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\edel\edelconnect\models\SessionExpired',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\edel\edelconnect\models\CommonErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation modifyAMOTradeAsync
     *
     * Modify amo Trade for a client
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\EQModifyTradeRequestDao $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function modifyAMOTradeAsync($userID, $body = null)
    {
        return $this->modifyAMOTradeAsyncWithHttpInfo($userID, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation modifyAMOTradeAsyncWithHttpInfo
     *
     * Modify amo Trade for a client
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\EQModifyTradeRequestDao $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function modifyAMOTradeAsyncWithHttpInfo($userID, $body = null)
    {
        $returnType = '\com\edel\edelconnect\models\ModifyTradeDao';
        $request = $this->modifyAMOTradeRequest($userID, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'modifyAMOTrade'
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\EQModifyTradeRequestDao $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function modifyAMOTradeRequest($userID, $body = null)
    {
        // verify the required parameter 'userID' is set
        if ($userID === null || (is_array($userID) && count($userID) === 0)) {
            $this->log->error("Missing the required parameter $userID when calling modifyAMOTrade");
            throw new \InvalidArgumentException(
                'Missing the required parameter $userID when calling modifyAMOTrade'
            );
        }

        $resourcePath = '/eq/trade/amo/modifytrade/{userID}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($userID !== null) {
            $resourcePath = str_replace(
                '{' . 'userID' . '}',
                ObjectSerializer::toPathValue($userID),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($body)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
        $this->log->debug("Headers modifyAMOTrade:".json_encode($headers));
        $this->log->debug("URL PUT modifyAMOTrade:".$this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''));
        
        return new Request(
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation modifyCoverTrade
     *
     * Modify a Cover Trade for a client
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\EQModifyTradeRequestDao $body body (required)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \com\edel\edelconnect\models\ModifyTradeDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse
     */
    public function modifyCoverTrade($userID, $body)
    {
        $this->log->info("Inside method : modifyCoverTrade");
        $this->log->debug("Parameters userID :".$userID.", body:".json_encode($body));
        list($response) = $this->modifyCoverTradeWithHttpInfo($userID, $body);
        $this->log->debug("Response modifyCoverTrade :".\json_encode($response));
        return $response;
    }

    /**
     * Operation modifyCoverTradeWithHttpInfo
     *
     * Modify a Cover Trade for a client
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\EQModifyTradeRequestDao $body (required)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \com\edel\edelconnect\models\ModifyTradeDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function modifyCoverTradeWithHttpInfo($userID, $body)
    {
        $request = $this->modifyCoverTradeRequest($userID, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\com\edel\edelconnect\models\ModifyTradeDao' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\ModifyTradeDao', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\com\edel\edelconnect\models\SessionExpired' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\SessionExpired', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\com\edel\edelconnect\models\CommonErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\CommonErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\com\edel\edelconnect\models\ModifyTradeDao';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\com\edel\edelconnect\models\ModifyTradeDao',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\edel\edelconnect\models\SessionExpired',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\edel\edelconnect\models\CommonErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation modifyCoverTradeAsync
     *
     * Modify a Cover Trade for a client
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\EQModifyTradeRequestDao $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function modifyCoverTradeAsync($userID, $body)
    {
        return $this->modifyCoverTradeAsyncWithHttpInfo($userID, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation modifyCoverTradeAsyncWithHttpInfo
     *
     * Modify a Cover Trade for a client
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\EQModifyTradeRequestDao $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function modifyCoverTradeAsyncWithHttpInfo($userID, $body)
    {
        $returnType = '\com\edel\edelconnect\models\ModifyTradeDao';
        $request = $this->modifyCoverTradeRequest($userID, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'modifyCoverTrade'
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\EQModifyTradeRequestDao $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function modifyCoverTradeRequest($userID, $body)
    {
        // verify the required parameter 'userID' is set
        if ($userID === null || (is_array($userID) && count($userID) === 0)) {
            $this->log->error("Missing the required parameter $userID when calling modifyCoverTrade");
            throw new \InvalidArgumentException(
                'Missing the required parameter $userID when calling modifyCoverTrade'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            $this->log->error("Missing the required parameter $body when calling modifyCoverTrade");
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling modifyCoverTrade'
            );
        }

        $resourcePath = '/eq/trade/modifycovertrade/{userID}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($userID !== null) {
            $resourcePath = str_replace(
                '{' . 'userID' . '}',
                ObjectSerializer::toPathValue($userID),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($body)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
        $this->log->debug("Headers modifyCoverTrade:".json_encode($headers));
        $this->log->debug("URL PUT modifyCoverTrade:".$this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''));
        $this->log->debug("Body modifyCoverTrade:".json_encode($httpBody));
        return new Request(
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation modifyTrade
     *
     * Modify a Trade for a client
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\EQModifyTradeRequestDao $body body (optional)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \com\edel\edelconnect\models\ModifyTradeDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse
     */
    public function modifyTrade($userID, $body = null)
    {
        $this->log->info("Inside method : modifyTrade");
        $this->log->debug("Parameters userID :".$userID.", body:".json_encode($body));
        list($response) = $this->modifyTradeWithHttpInfo($userID, $body);
        $this->log->debug("Response modifyTrade :".\json_encode($response));
        return $response;
    }

    /**
     * Operation modifyTradeWithHttpInfo
     *
     * Modify a Trade for a client
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\EQModifyTradeRequestDao $body (optional)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \com\edel\edelconnect\models\ModifyTradeDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function modifyTradeWithHttpInfo($userID, $body = null)
    {
        $request = $this->modifyTradeRequest($userID, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\com\edel\edelconnect\models\ModifyTradeDao' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\ModifyTradeDao', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\com\edel\edelconnect\models\SessionExpired' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\SessionExpired', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\com\edel\edelconnect\models\CommonErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\CommonErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\com\edel\edelconnect\models\ModifyTradeDao';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\com\edel\edelconnect\models\ModifyTradeDao',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\edel\edelconnect\models\SessionExpired',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\edel\edelconnect\models\CommonErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation modifyTradeAsync
     *
     * Modify a Trade for a client
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\EQModifyTradeRequestDao $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function modifyTradeAsync($userID, $body = null)
    {
        return $this->modifyTradeAsyncWithHttpInfo($userID, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation modifyTradeAsyncWithHttpInfo
     *
     * Modify a Trade for a client
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\EQModifyTradeRequestDao $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function modifyTradeAsyncWithHttpInfo($userID, $body = null)
    {
        $returnType = '\com\edel\edelconnect\models\ModifyTradeDao';
        $request = $this->modifyTradeRequest($userID, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'modifyTrade'
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\EQModifyTradeRequestDao $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function modifyTradeRequest($userID, $body = null)
    {
        // verify the required parameter 'userID' is set
        if ($userID === null || (is_array($userID) && count($userID) === 0)) {
            $this->log->error("Missing the required parameter $userID when calling modifyCoverTrade");            
            throw new \InvalidArgumentException(
                'Missing the required parameter $userID when calling modifyTrade'
            );
        }

        $resourcePath = '/eq/trade/modifytrade/{userID}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($userID !== null) {
            $resourcePath = str_replace(
                '{' . 'userID' . '}',
                ObjectSerializer::toPathValue($userID),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($body)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
        $this->log->debug("Headers modifyCoverTrade:".json_encode($headers));
        $this->log->debug("URL PUT modifyCoverTrade:".$this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''));
        $this->log->debug("Body modifyCoverTrade:".json_encode($httpBody));
        return new Request(
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation placeAMOTrade
     *
     * Place AMO trade for a client in equity
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\EQPlaceTradeRequestDao $body body (optional)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \com\edel\edelconnect\models\PlaceTradeDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse
     */
    public function placeAMOTrade($userID, $body = null)
    {
        $this->log->info("Inside method : placeAMOTrade");
        $this->log->debug("Parameters userID :".$userID.", body:".json_encode($body));
        list($response) = $this->placeAMOTradeWithHttpInfo($userID, $body);
        $this->log->debug("Response placeAMOTrade :".\json_encode($response));
        return $response;
    }

    /**
     * Operation placeAMOTradeWithHttpInfo
     *
     * Place AMO trade for a client in equity
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\EQPlaceTradeRequestDao $body (optional)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \com\edel\edelconnect\models\PlaceTradeDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function placeAMOTradeWithHttpInfo($userID, $body = null)
    {
        $request = $this->placeAMOTradeRequest($userID, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\com\edel\edelconnect\models\PlaceTradeDao' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\PlaceTradeDao', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\com\edel\edelconnect\models\SessionExpired' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\SessionExpired', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\com\edel\edelconnect\models\CommonErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\CommonErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\com\edel\edelconnect\models\PlaceTradeDao';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\com\edel\edelconnect\models\PlaceTradeDao',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\edel\edelconnect\models\SessionExpired',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\edel\edelconnect\models\CommonErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation placeAMOTradeAsync
     *
     * Place AMO trade for a client in equity
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\EQPlaceTradeRequestDao $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function placeAMOTradeAsync($userID, $body = null)
    {
        return $this->placeAMOTradeAsyncWithHttpInfo($userID, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation placeAMOTradeAsyncWithHttpInfo
     *
     * Place AMO trade for a client in equity
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\EQPlaceTradeRequestDao $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function placeAMOTradeAsyncWithHttpInfo($userID, $body = null)
    {
        $returnType = '\com\edel\edelconnect\models\PlaceTradeDao';
        $request = $this->placeAMOTradeRequest($userID, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'placeAMOTrade'
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\EQPlaceTradeRequestDao $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function placeAMOTradeRequest($userID, $body = null)
    {
        // verify the required parameter 'userID' is set
        if ($userID === null || (is_array($userID) && count($userID) === 0)) {
            $this->log->error("Missing the required parameter $userID when calling placeAMOTrade");
            throw new \InvalidArgumentException(
                'Missing the required parameter $userID when calling placeAMOTrade'
            );
        }

        $resourcePath = '/eq/trade/amo/placetrade/{userID}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($userID !== null) {
            $resourcePath = str_replace(
                '{' . 'userID' . '}',
                ObjectSerializer::toPathValue($userID),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($body)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
        $this->log->debug("Headers placeAMOTrade:".\json_encode($headers));
        $this->log->debug("URL POST placeAMOTrade:".$this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''));
         $this->log->debug("Body placeAMOTrade:".\json_encode($httpBody));
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation placeBasketOrder
     *
     * Place Basket Order
     *
     * @param  string $userID user ID (required)
     * @param  \com\edel\edelconnect\models\BasketOrderRequestDao $body body (optional)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \com\edel\edelconnect\models\PlaceTradeBaseketDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse
     */
    public function placeBasketOrder($userID, $body = null)
    {
        $this->log->info("Inside method : placeBasketOrder");
        $this->log->debug("Parameters userID :".$userID.", body:".json_encode($body));
        list($response) = $this->placeBasketOrderWithHttpInfo($userID, $body);
        $this->log->debug("Response getTradeBook :".\json_encode($response));
        return $response;
    }

    /**
     * Operation placeBasketOrderWithHttpInfo
     *
     * Place Basket Order
     *
     * @param  string $userID user ID (required)
     * @param  \com\edel\edelconnect\models\BasketOrderRequestDao $body (optional)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \com\edel\edelconnect\models\PlaceTradeBaseketDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function placeBasketOrderWithHttpInfo($userID, $body = null)
    {
        $request = $this->placeBasketOrderRequest($userID, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\com\edel\edelconnect\models\PlaceTradeBaseketDao' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\PlaceTradeBaseketDao', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\com\edel\edelconnect\models\SessionExpired' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\SessionExpired', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\com\edel\edelconnect\models\CommonErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\CommonErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\com\edel\edelconnect\models\PlaceTradeBaseketDao';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\com\edel\edelconnect\models\PlaceTradeBaseketDao',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\edel\edelconnect\models\SessionExpired',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\edel\edelconnect\models\CommonErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation placeBasketOrderAsync
     *
     * Place Basket Order
     *
     * @param  string $userID user ID (required)
     * @param  \com\edel\edelconnect\models\BasketOrderRequestDao $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function placeBasketOrderAsync($userID, $body = null)
    {
        return $this->placeBasketOrderAsyncWithHttpInfo($userID, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation placeBasketOrderAsyncWithHttpInfo
     *
     * Place Basket Order
     *
     * @param  string $userID user ID (required)
     * @param  \com\edel\edelconnect\models\BasketOrderRequestDao $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function placeBasketOrderAsyncWithHttpInfo($userID, $body = null)
    {
        $returnType = '\com\edel\edelconnect\models\PlaceTradeBaseketDao';
        $request = $this->placeBasketOrderRequest($userID, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'placeBasketOrder'
     *
     * @param  string $userID user ID (required)
     * @param  \com\edel\edelconnect\models\BasketOrderRequestDao $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function placeBasketOrderRequest($userID, $body = null)
    {
        // verify the required parameter 'userID' is set
        if ($userID === null || (is_array($userID) && count($userID) === 0)) {
            $this->log->error("Missing the required parameter $userID when calling placeBasketOrder");
            throw new \InvalidArgumentException(
                'Missing the required parameter $userID when calling placeBasketOrder'
            );
        }

        $resourcePath = '/eq/trade/basketorder/{userID}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($userID !== null) {
            $resourcePath = str_replace(
                '{' . 'userID' . '}',
                ObjectSerializer::toPathValue($userID),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($body)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
        $this->log->debug("Headers placeBasketOrder:".\json_encode($headers));
        $this->log->debug("URL POST placeBasketOrder:".$this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''));
         $this->log->debug("Body placeBasketOrder:".\json_encode($httpBody));
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation placeBracketOrder
     *
     * Bracket Place  trade for a client in equity
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\EQBracketTradeRequestDao $body body (required)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \com\edel\edelconnect\models\PlaceTradeDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse
     */
    public function placeBracketOrder($userID, $body)
    {
        $this->log->info("Inside method : placeBracketOrder");
        $this->log->debug("Parameters userID :".$userID.", body:".json_encode($body));
        list($response) = $this->placeBracketOrderWithHttpInfo($userID, $body);
        $this->log->debug("Response placeBracketOrder :".\json_encode($response));
        return $response;
    }

    /**
     * Operation placeBracketOrderWithHttpInfo
     *
     * Bracket Place  trade for a client in equity
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\EQBracketTradeRequestDao $body (required)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \com\edel\edelconnect\models\PlaceTradeDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function placeBracketOrderWithHttpInfo($userID, $body)
    {
        $request = $this->placeBracketOrderRequest($userID, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\com\edel\edelconnect\models\PlaceTradeDao' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\PlaceTradeDao', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\com\edel\edelconnect\models\SessionExpired' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\SessionExpired', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\com\edel\edelconnect\models\CommonErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\CommonErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\com\edel\edelconnect\models\PlaceTradeDao';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\com\edel\edelconnect\models\PlaceTradeDao',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\edel\edelconnect\models\SessionExpired',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\edel\edelconnect\models\CommonErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation placeBracketOrderAsync
     *
     * Bracket Place  trade for a client in equity
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\EQBracketTradeRequestDao $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function placeBracketOrderAsync($userID, $body)
    {
        return $this->placeBracketOrderAsyncWithHttpInfo($userID, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation placeBracketOrderAsyncWithHttpInfo
     *
     * Bracket Place  trade for a client in equity
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\EQBracketTradeRequestDao $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function placeBracketOrderAsyncWithHttpInfo($userID, $body)
    {
        $returnType = '\com\edel\edelconnect\models\PlaceTradeDao';
        $request = $this->placeBracketOrderRequest($userID, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'placeBracketOrder'
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\EQBracketTradeRequestDao $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function placeBracketOrderRequest($userID, $body)
    {
        // verify the required parameter 'userID' is set
        if ($userID === null || (is_array($userID) && count($userID) === 0)) {
            $this->log->error("Missing the required parameter $userID when calling placeBracketOrder");
            throw new \InvalidArgumentException(
                'Missing the required parameter $userID when calling placeBracketOrder'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            $this->log->error("Missing the required parameter $body when calling placeBracketOrder");
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling placeBracketOrder'
            );
        }

        $resourcePath = '/eq/trade/placebrackettrade/{userID}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($userID !== null) {
            $resourcePath = str_replace(
                '{' . 'userID' . '}',
                ObjectSerializer::toPathValue($userID),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($body)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
        $this->log->debug("Headers placeBracketOrder:".\json_encode($headers));
        $this->log->debug("URL POST placeBracketOrder:".$this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''));
        $this->log->debug("Body placeBracketOrder:".\json_encode($httpBody));
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation placeGtcGtdTrade
     *
     * Place gtd/gtc  trade for a client in equity
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\PlaceGtcGtdTradeRequestDao $body body (required)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \com\edel\edelconnect\models\PlaceGtcGtdTradeDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse
     */
    public function placeGtcGtdTrade($userID, $body)
    {
        $this->log->info("Inside method : placeGtcGtdTrade");
        $this->log->debug("Parameters userID :".$userID.", body:".json_encode($body));
        list($response) = $this->placeGtcGtdTradeWithHttpInfo($userID, $body);
        $this->log->debug("Response placeGtcGtdTrade :".\json_encode($response));
        return $response;
    }

    /**
     * Operation placeGtcGtdTradeWithHttpInfo
     *
     * Place gtd/gtc  trade for a client in equity
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\PlaceGtcGtdTradeRequestDao $body (required)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \com\edel\edelconnect\models\PlaceGtcGtdTradeDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function placeGtcGtdTradeWithHttpInfo($userID, $body)
    {
        $request = $this->placeGtcGtdTradeRequest($userID, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\com\edel\edelconnect\models\PlaceGtcGtdTradeDao' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\PlaceGtcGtdTradeDao', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\com\edel\edelconnect\models\SessionExpired' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\SessionExpired', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\com\edel\edelconnect\models\CommonErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\CommonErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\com\edel\edelconnect\models\PlaceGtcGtdTradeDao';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\com\edel\edelconnect\models\PlaceGtcGtdTradeDao',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\edel\edelconnect\models\SessionExpired',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\edel\edelconnect\models\CommonErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation placeGtcGtdTradeAsync
     *
     * Place gtd/gtc  trade for a client in equity
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\PlaceGtcGtdTradeRequestDao $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function placeGtcGtdTradeAsync($userID, $body)
    {
        return $this->placeGtcGtdTradeAsyncWithHttpInfo($userID, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation placeGtcGtdTradeAsyncWithHttpInfo
     *
     * Place gtd/gtc  trade for a client in equity
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\PlaceGtcGtdTradeRequestDao $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function placeGtcGtdTradeAsyncWithHttpInfo($userID, $body)
    {
        $returnType = '\com\edel\edelconnect\models\PlaceGtcGtdTradeDao';
        $request = $this->placeGtcGtdTradeRequest($userID, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'placeGtcGtdTrade'
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\PlaceGtcGtdTradeRequestDao $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function placeGtcGtdTradeRequest($userID, $body)
    {
        // verify the required parameter 'userID' is set
        if ($userID === null || (is_array($userID) && count($userID) === 0)) {
            $this->log->error("Missing the required parameter $userID when calling placeGtcGtdTrade");
            throw new \InvalidArgumentException(
                'Missing the required parameter $userID when calling placeGtcGtdTrade'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            $this->log->error("Missing the required parameter $body when calling placeGtcGtdTrade");
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling placeGtcGtdTrade'
            );
        }

        $resourcePath = '/eq/trade/placegtcgtdtrade/{userID}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($userID !== null) {
            $resourcePath = str_replace(
                '{' . 'userID' . '}',
                ObjectSerializer::toPathValue($userID),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($body)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
        $this->log->debug("Headers placeGtcGtdTrade:".\json_encode($headers));
        $this->log->debug("URL POST placeGtcGtdTrade:".$this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''));
        $this->log->debug("Body placeGtcGtdTrade:".\json_encode($httpBody));
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation placeTrade
     *
     * Place  trade for a client in equity
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\EQPlaceTradeRequestDao $body body (required)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \com\edel\edelconnect\models\PlaceTradeDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse
     */
    public function placeTrade($userID, $body)
    {
        $this->log->info("Inside method : placeTrade");
        $this->log->debug("Parameters userID :".$userID.",body:".json_encode($body));
        list($response) = $this->placeTradeWithHttpInfo($userID, $body);
        $this->log->debug("Response placeTrade :".\json_encode($response));
        return $response;
    }

    /**
     * Operation placeTradeWithHttpInfo
     *
     * Place  trade for a client in equity
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\EQPlaceTradeRequestDao $body (required)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \com\edel\edelconnect\models\PlaceTradeDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function placeTradeWithHttpInfo($userID, $body)
    {
        $request = $this->placeTradeRequest($userID, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\com\edel\edelconnect\models\PlaceTradeDao' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\PlaceTradeDao', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\com\edel\edelconnect\models\SessionExpired' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\SessionExpired', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\com\edel\edelconnect\models\CommonErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\CommonErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\com\edel\edelconnect\models\PlaceTradeDao';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\com\edel\edelconnect\models\PlaceTradeDao',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\edel\edelconnect\models\SessionExpired',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\edel\edelconnect\models\CommonErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation placeTradeAsync
     *
     * Place  trade for a client in equity
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\EQPlaceTradeRequestDao $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function placeTradeAsync($userID, $body)
    {
        return $this->placeTradeAsyncWithHttpInfo($userID, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation placeTradeAsyncWithHttpInfo
     *
     * Place  trade for a client in equity
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\EQPlaceTradeRequestDao $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function placeTradeAsyncWithHttpInfo($userID, $body)
    {
        $returnType = '\com\edel\edelconnect\models\PlaceTradeDao';
        $request = $this->placeTradeRequest($userID, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'placeTrade'
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\EQPlaceTradeRequestDao $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function placeTradeRequest($userID, $body)
    {
        // verify the required parameter 'userID' is set
        if ($userID === null || (is_array($userID) && count($userID) === 0)) {
            $this->log->error("Missing the required parameter $userID when calling placeTrade");
            throw new \InvalidArgumentException(
                'Missing the required parameter $userID when calling placeTrade'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            $this->log->error("Missing the required parameter $body when calling placeTrade");
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling placeTrade'
            );
        }

        $resourcePath = '/eq/trade/placetrade/{userID}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($userID !== null) {
            $resourcePath = str_replace(
                '{' . 'userID' . '}',
                ObjectSerializer::toPathValue($userID),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($body)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
        $this->log->debug("Headers placeTrade:".\json_encode($headers));
        $this->log->debug("URL POST placeTrade:".$this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''));
        $this->log->debug("Body placeTrade:".\json_encode($httpBody));
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation positionSquareOff
     *
     * Position squareOff API For Equity/Commodity
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\PositionSquareOffRequestDto[] $body Position square off Request Fields (required)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \com\edel\edelconnect\models\PositionSquareOffResponseDto|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\ErrorResponseDao|\com\edel\edelconnect\models\ErrorResponseDao|\com\edel\edelconnect\models\CommonErrorResponse
     */
    public function positionSquareOff($userID, $body)
    {
        $this->log->info("Inside method : positionSquareOff");
        $this->log->debug("Parameters userID :".$userID.", body:".json_encode($body));
        list($response) = $this->positionSquareOffWithHttpInfo($userID, $body);
        $this->log->debug("Response positionSquareOff :".\json_encode($response));
        return $response;
    }

    /**
     * Operation positionSquareOffWithHttpInfo
     *
     * Position squareOff API For Equity/Commodity
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\PositionSquareOffRequestDto[] $body Position square off Request Fields (required)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \com\edel\edelconnect\models\PositionSquareOffResponseDto|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\ErrorResponseDao|\com\edel\edelconnect\models\ErrorResponseDao|\com\edel\edelconnect\models\CommonErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function positionSquareOffWithHttpInfo($userID, $body)
    {
        $request = $this->positionSquareOffRequest($userID, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\com\edel\edelconnect\models\PositionSquareOffResponseDto' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\PositionSquareOffResponseDto', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\com\edel\edelconnect\models\SessionExpired' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\SessionExpired', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\com\edel\edelconnect\models\ErrorResponseDao' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\ErrorResponseDao', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\com\edel\edelconnect\models\ErrorResponseDao' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\ErrorResponseDao', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\com\edel\edelconnect\models\CommonErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\CommonErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\com\edel\edelconnect\models\PositionSquareOffResponseDto';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\com\edel\edelconnect\models\PositionSquareOffResponseDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\edel\edelconnect\models\SessionExpired',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\edel\edelconnect\models\ErrorResponseDao',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\edel\edelconnect\models\ErrorResponseDao',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\edel\edelconnect\models\CommonErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation positionSquareOffAsync
     *
     * Position squareOff API For Equity/Commodity
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\PositionSquareOffRequestDto[] $body Position square off Request Fields (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function positionSquareOffAsync($userID, $body)
    {
        return $this->positionSquareOffAsyncWithHttpInfo($userID, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation positionSquareOffAsyncWithHttpInfo
     *
     * Position squareOff API For Equity/Commodity
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\PositionSquareOffRequestDto[] $body Position square off Request Fields (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function positionSquareOffAsyncWithHttpInfo($userID, $body)
    {
        $returnType = '\com\edel\edelconnect\models\PositionSquareOffResponseDto';
        $request = $this->positionSquareOffRequest($userID, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'positionSquareOff'
     *
     * @param  string $userID UserId of the client (required)
     * @param  \com\edel\edelconnect\models\PositionSquareOffRequestDto[] $body Position square off Request Fields (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function positionSquareOffRequest($userID, $body)
    {
        // verify the required parameter 'userID' is set
        if ($userID === null || (is_array($userID) && count($userID) === 0)) {
            $this->log->error("Missing the required parameter $userID when calling positionSquareOff");
            throw new \InvalidArgumentException(
                'Missing the required parameter $userID when calling positionSquareOff'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            $this->log->error("Missing the required parameter $body when calling positionSquareOff");
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling positionSquareOff'
            );
        }

        $resourcePath = '/eq/trade/position/sqroff/{userID}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($userID !== null) {
            $resourcePath = str_replace(
                '{' . 'userID' . '}',
                ObjectSerializer::toPathValue($userID),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($body)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
        $this->log->debug("Headers positionSquareOff:".\json_encode($headers));
        $this->log->debug("URL POST positionSquareOff:".$this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''));
        $this->log->debug("Body positionSquareOff:".\json_encode($httpBody));
        return new Request(
            'POST',
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
