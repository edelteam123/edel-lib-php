<?php
/**
 * CommodityTradeApi
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
 * CommodityTradeApi Class Doc Comment
 *
 * @category Class
 * @package  com\edel
 * @author   Edelweiss
 * @link     https://www.edelweiss.in
 */
class CommodityTradeApi
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
     * Operation cancelAMOTradeCommodity
     *
     * Cancel a trade for a client
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\TradeRequest $body nstOID is mandatory (required)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \com\edel\edelconnect\models\CancelTradeDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse
     */
    public function cancelAMOTradeCommodity($userID, $body)
    {
        list($response) = $this->cancelAMOTradeCommodityWithHttpInfo($userID, $body);
        return $response;
    }

    /**
     * Operation cancelAMOTradeCommodityWithHttpInfo
     *
     * Cancel a trade for a client
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\TradeRequest $body nstOID is mandatory (required)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \com\edel\edelconnect\models\CancelTradeDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function cancelAMOTradeCommodityWithHttpInfo($userID, $body)
    {
        $request = $this->cancelAMOTradeCommodityRequest($userID, $body);

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
     * Operation cancelAMOTradeCommodityAsync
     *
     * Cancel a trade for a client
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\TradeRequest $body nstOID is mandatory (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelAMOTradeCommodityAsync($userID, $body)
    {
        return $this->cancelAMOTradeCommodityAsyncWithHttpInfo($userID, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation cancelAMOTradeCommodityAsyncWithHttpInfo
     *
     * Cancel a trade for a client
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\TradeRequest $body nstOID is mandatory (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelAMOTradeCommodityAsyncWithHttpInfo($userID, $body)
    {
        $returnType = '\com\edel\edelconnect\models\CancelTradeDao';
        $request = $this->cancelAMOTradeCommodityRequest($userID, $body);

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
     * Create request for operation 'cancelAMOTradeCommodity'
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\TradeRequest $body nstOID is mandatory (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function cancelAMOTradeCommodityRequest($userID, $body)
    {
        // verify the required parameter 'userID' is set
        if ($userID === null || (is_array($userID) && count($userID) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $userID when calling cancelAMOTradeCommodity'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling cancelAMOTradeCommodity'
            );
        }

        $resourcePath = '/comm/trade/amo/canceltrade/{userID}';
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

        $operationHosts = ["https://emtuat.edelweiss.in/edelmw-comm-uat"];
        if ($this->hostIndex < 0 || $this->hostIndex >= sizeof($operationHosts)) {
            throw new \InvalidArgumentException("Invalid index {$this->hostIndex} when selecting the host. Must be less than ".sizeof($operationHosts));
        }
        $operationHost = $operationHosts[$this->hostIndex];

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation cancelTradeValVndr
     *
     * Cancel a trade for a client
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\TradeRequest $body nstOID , exc, prdCode &amp; ordTyp are mandatory (required)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \com\edel\edelconnect\models\CancelTradeDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse
     */
    public function cancelTradeValVndr($userID, $body)
    {
        list($response) = $this->cancelTradeValVndrWithHttpInfo($userID, $body);
        return $response;
    }

    /**
     * Operation cancelTradeValVndrWithHttpInfo
     *
     * Cancel a trade for a client
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\TradeRequest $body nstOID , exc, prdCode &amp; ordTyp are mandatory (required)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \com\edel\edelconnect\models\CancelTradeDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function cancelTradeValVndrWithHttpInfo($userID, $body)
    {
        $request = $this->cancelTradeValVndrRequest($userID, $body);

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
     * Operation cancelTradeValVndrAsync
     *
     * Cancel a trade for a client
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\TradeRequest $body nstOID , exc, prdCode &amp; ordTyp are mandatory (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelTradeValVndrAsync($userID, $body)
    {
        return $this->cancelTradeValVndrAsyncWithHttpInfo($userID, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation cancelTradeValVndrAsyncWithHttpInfo
     *
     * Cancel a trade for a client
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\TradeRequest $body nstOID , exc, prdCode &amp; ordTyp are mandatory (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelTradeValVndrAsyncWithHttpInfo($userID, $body)
    {
        $returnType = '\com\edel\edelconnect\models\CancelTradeDao';
        $request = $this->cancelTradeValVndrRequest($userID, $body);

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
     * Create request for operation 'cancelTradeValVndr'
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\TradeRequest $body nstOID , exc, prdCode &amp; ordTyp are mandatory (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function cancelTradeValVndrRequest($userID, $body)
    {
        // verify the required parameter 'userID' is set
        if ($userID === null || (is_array($userID) && count($userID) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $userID when calling cancelTradeValVndr'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling cancelTradeValVndr'
            );
        }

        $resourcePath = '/comm/trade/canceltrade/v1/{userID}';
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

        $operationHosts = ["https://emtuat.edelweiss.in/edelmw-comm-uat"];
        if ($this->hostIndex < 0 || $this->hostIndex >= sizeof($operationHosts)) {
            throw new \InvalidArgumentException("Invalid index {$this->hostIndex} when selecting the host. Must be less than ".sizeof($operationHosts));
        }
        $operationHost = $operationHosts[$this->hostIndex];

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation convertPositionCommodity
     *
     * Convert a position for a client
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\TradeRequest $body nstOID, prdCode  prCodeCh , exc and ordTyp are mandatory (required)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \com\edel\edelconnect\models\ConvertPositionDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse
     */
    public function convertPositionCommodity($userID, $body)
    {
        list($response) = $this->convertPositionCommodityWithHttpInfo($userID, $body);
        return $response;
    }

    /**
     * Operation convertPositionCommodityWithHttpInfo
     *
     * Convert a position for a client
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\TradeRequest $body nstOID, prdCode  prCodeCh , exc and ordTyp are mandatory (required)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \com\edel\edelconnect\models\ConvertPositionDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function convertPositionCommodityWithHttpInfo($userID, $body)
    {
        $request = $this->convertPositionCommodityRequest($userID, $body);

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
                    if ('\com\edel\edelconnect\models\ConvertPositionDao' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com\edel\edelconnect\models\ConvertPositionDao', []),
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

            $returnType = '\com\edel\edelconnect\models\ConvertPositionDao';
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
                        '\com\edel\edelconnect\models\ConvertPositionDao',
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
     * Operation convertPositionCommodityAsync
     *
     * Convert a position for a client
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\TradeRequest $body nstOID, prdCode  prCodeCh , exc and ordTyp are mandatory (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertPositionCommodityAsync($userID, $body)
    {
        return $this->convertPositionCommodityAsyncWithHttpInfo($userID, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation convertPositionCommodityAsyncWithHttpInfo
     *
     * Convert a position for a client
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\TradeRequest $body nstOID, prdCode  prCodeCh , exc and ordTyp are mandatory (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertPositionCommodityAsyncWithHttpInfo($userID, $body)
    {
        $returnType = '\com\edel\edelconnect\models\ConvertPositionDao';
        $request = $this->convertPositionCommodityRequest($userID, $body);

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
     * Create request for operation 'convertPositionCommodity'
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\TradeRequest $body nstOID, prdCode  prCodeCh , exc and ordTyp are mandatory (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function convertPositionCommodityRequest($userID, $body)
    {
        // verify the required parameter 'userID' is set
        if ($userID === null || (is_array($userID) && count($userID) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $userID when calling convertPositionCommodity'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling convertPositionCommodity'
            );
        }

        $resourcePath = '/comm/trade/convertposition/v1/{userID}';
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

        $operationHosts = ["https://emtuat.edelweiss.in/edelmw-comm-uat"];
        if ($this->hostIndex < 0 || $this->hostIndex >= sizeof($operationHosts)) {
            throw new \InvalidArgumentException("Invalid index {$this->hostIndex} when selecting the host. Must be less than ".sizeof($operationHosts));
        }
        $operationHost = $operationHosts[$this->hostIndex];

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getAMOFlagCommodity
     *
     * Get AMO Flag
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \com\edel\edelconnect\models\CommAMODao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse
     */
    public function getAMOFlagCommodity()
    {
        list($response) = $this->getAMOFlagCommodityWithHttpInfo();
        return $response;
    }

    /**
     * Operation getAMOFlagCommodityWithHttpInfo
     *
     * Get AMO Flag
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \com\edel\edelconnect\models\CommAMODao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAMOFlagCommodityWithHttpInfo()
    {
        $request = $this->getAMOFlagCommodityRequest();

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
     * Operation getAMOFlagCommodityAsync
     *
     * Get AMO Flag
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAMOFlagCommodityAsync()
    {
        return $this->getAMOFlagCommodityAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAMOFlagCommodityAsyncWithHttpInfo
     *
     * Get AMO Flag
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAMOFlagCommodityAsyncWithHttpInfo()
    {
        $returnType = '\com\edel\edelconnect\models\CommAMODao';
        $request = $this->getAMOFlagCommodityRequest();

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
     * Create request for operation 'getAMOFlagCommodity'
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAMOFlagCommodityRequest()
    {

        $resourcePath = '/comm/trade/amoflag';
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

        $operationHosts = ["https://emtuat.edelweiss.in/edelmw-comm-uat"];
        if ($this->hostIndex < 0 || $this->hostIndex >= sizeof($operationHosts)) {
            throw new \InvalidArgumentException("Invalid index {$this->hostIndex} when selecting the host. Must be less than ".sizeof($operationHosts));
        }
        $operationHost = $operationHosts[$this->hostIndex];

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation modifyAMOTradeCommodity
     *
     * Modify a Trade for a client
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\TradeRequest $body nstOID is mandatory, At least one of dur, sym, lmPrc, orTyp, action, prCode, exc, qty, trSym is required for successful modification (required)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \com\edel\edelconnect\models\ModifyTradeDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse
     */
    public function modifyAMOTradeCommodity($userID, $body)
    {
        list($response) = $this->modifyAMOTradeCommodityWithHttpInfo($userID, $body);
        return $response;
    }

    /**
     * Operation modifyAMOTradeCommodityWithHttpInfo
     *
     * Modify a Trade for a client
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\TradeRequest $body nstOID is mandatory, At least one of dur, sym, lmPrc, orTyp, action, prCode, exc, qty, trSym is required for successful modification (required)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \com\edel\edelconnect\models\ModifyTradeDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function modifyAMOTradeCommodityWithHttpInfo($userID, $body)
    {
        $request = $this->modifyAMOTradeCommodityRequest($userID, $body);

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
     * Operation modifyAMOTradeCommodityAsync
     *
     * Modify a Trade for a client
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\TradeRequest $body nstOID is mandatory, At least one of dur, sym, lmPrc, orTyp, action, prCode, exc, qty, trSym is required for successful modification (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function modifyAMOTradeCommodityAsync($userID, $body)
    {
        return $this->modifyAMOTradeCommodityAsyncWithHttpInfo($userID, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation modifyAMOTradeCommodityAsyncWithHttpInfo
     *
     * Modify a Trade for a client
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\TradeRequest $body nstOID is mandatory, At least one of dur, sym, lmPrc, orTyp, action, prCode, exc, qty, trSym is required for successful modification (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function modifyAMOTradeCommodityAsyncWithHttpInfo($userID, $body)
    {
        $returnType = '\com\edel\edelconnect\models\ModifyTradeDao';
        $request = $this->modifyAMOTradeCommodityRequest($userID, $body);

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
     * Create request for operation 'modifyAMOTradeCommodity'
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\TradeRequest $body nstOID is mandatory, At least one of dur, sym, lmPrc, orTyp, action, prCode, exc, qty, trSym is required for successful modification (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function modifyAMOTradeCommodityRequest($userID, $body)
    {
        // verify the required parameter 'userID' is set
        if ($userID === null || (is_array($userID) && count($userID) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $userID when calling modifyAMOTradeCommodity'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling modifyAMOTradeCommodity'
            );
        }

        $resourcePath = '/comm/trade/amo/modifytrade/{userID}';
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

        $operationHosts = ["https://emtuat.edelweiss.in/edelmw-comm-uat"];
        if ($this->hostIndex < 0 || $this->hostIndex >= sizeof($operationHosts)) {
            throw new \InvalidArgumentException("Invalid index {$this->hostIndex} when selecting the host. Must be less than ".sizeof($operationHosts));
        }
        $operationHost = $operationHosts[$this->hostIndex];

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation modifyTradeCommodity
     *
     * Modify a Trade for a client
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\TradeRequest $body nstOID is mandatory, At least one of dur, sym, lmPrc, orTyp, action, prCode, exc, qty, trSym is required for successfull modification (required)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \com\edel\edelconnect\models\ModifyTradeDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse
     */
    public function modifyTradeCommodity($userID, $body)
    {
        list($response) = $this->modifyTradeCommodityWithHttpInfo($userID, $body);
        return $response;
    }

    /**
     * Operation modifyTradeCommodityWithHttpInfo
     *
     * Modify a Trade for a client
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\TradeRequest $body nstOID is mandatory, At least one of dur, sym, lmPrc, orTyp, action, prCode, exc, qty, trSym is required for successfull modification (required)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \com\edel\edelconnect\models\ModifyTradeDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function modifyTradeCommodityWithHttpInfo($userID, $body)
    {
        $request = $this->modifyTradeCommodityRequest($userID, $body);

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
     * Operation modifyTradeCommodityAsync
     *
     * Modify a Trade for a client
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\TradeRequest $body nstOID is mandatory, At least one of dur, sym, lmPrc, orTyp, action, prCode, exc, qty, trSym is required for successfull modification (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function modifyTradeCommodityAsync($userID, $body)
    {
        return $this->modifyTradeCommodityAsyncWithHttpInfo($userID, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation modifyTradeCommodityAsyncWithHttpInfo
     *
     * Modify a Trade for a client
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\TradeRequest $body nstOID is mandatory, At least one of dur, sym, lmPrc, orTyp, action, prCode, exc, qty, trSym is required for successfull modification (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function modifyTradeCommodityAsyncWithHttpInfo($userID, $body)
    {
        $returnType = '\com\edel\edelconnect\models\ModifyTradeDao';
        $request = $this->modifyTradeCommodityRequest($userID, $body);

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
     * Create request for operation 'modifyTradeCommodity'
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\TradeRequest $body nstOID is mandatory, At least one of dur, sym, lmPrc, orTyp, action, prCode, exc, qty, trSym is required for successfull modification (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function modifyTradeCommodityRequest($userID, $body)
    {
        // verify the required parameter 'userID' is set
        if ($userID === null || (is_array($userID) && count($userID) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $userID when calling modifyTradeCommodity'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling modifyTradeCommodity'
            );
        }

        $resourcePath = '/comm/trade/modifytrade/{userID}';
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

        $operationHosts = ["https://emtuat.edelweiss.in/edelmw-comm-uat"];
        if ($this->hostIndex < 0 || $this->hostIndex >= sizeof($operationHosts)) {
            throw new \InvalidArgumentException("Invalid index {$this->hostIndex} when selecting the host. Must be less than ".sizeof($operationHosts));
        }
        $operationHost = $operationHosts[$this->hostIndex];

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation placeAMOTradeCommodity
     *
     * Place a Trade for a client
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\TradeRequest $body dur, sym, lmPrc, orTyp, action, prCode, exc, qty, trSym are mandatory parameters (required)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \com\edel\edelconnect\models\PlaceTradeDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse
     */
    public function placeAMOTradeCommodity($userID, $body)
    {
        list($response) = $this->placeAMOTradeCommodityWithHttpInfo($userID, $body);
        return $response;
    }

    /**
     * Operation placeAMOTradeCommodityWithHttpInfo
     *
     * Place a Trade for a client
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\TradeRequest $body dur, sym, lmPrc, orTyp, action, prCode, exc, qty, trSym are mandatory parameters (required)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \com\edel\edelconnect\models\PlaceTradeDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function placeAMOTradeCommodityWithHttpInfo($userID, $body)
    {
        $request = $this->placeAMOTradeCommodityRequest($userID, $body);

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
     * Operation placeAMOTradeCommodityAsync
     *
     * Place a Trade for a client
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\TradeRequest $body dur, sym, lmPrc, orTyp, action, prCode, exc, qty, trSym are mandatory parameters (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function placeAMOTradeCommodityAsync($userID, $body)
    {
        return $this->placeAMOTradeCommodityAsyncWithHttpInfo($userID, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation placeAMOTradeCommodityAsyncWithHttpInfo
     *
     * Place a Trade for a client
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\TradeRequest $body dur, sym, lmPrc, orTyp, action, prCode, exc, qty, trSym are mandatory parameters (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function placeAMOTradeCommodityAsyncWithHttpInfo($userID, $body)
    {
        $returnType = '\com\edel\edelconnect\models\PlaceTradeDao';
        $request = $this->placeAMOTradeCommodityRequest($userID, $body);

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
     * Create request for operation 'placeAMOTradeCommodity'
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\TradeRequest $body dur, sym, lmPrc, orTyp, action, prCode, exc, qty, trSym are mandatory parameters (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function placeAMOTradeCommodityRequest($userID, $body)
    {
        // verify the required parameter 'userID' is set
        if ($userID === null || (is_array($userID) && count($userID) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $userID when calling placeAMOTradeCommodity'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling placeAMOTradeCommodity'
            );
        }

        $resourcePath = '/comm/trade/amo/placetrade/{userID}';
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

        $operationHosts = ["https://emtuat.edelweiss.in/edelmw-comm-uat"];
        if ($this->hostIndex < 0 || $this->hostIndex >= sizeof($operationHosts)) {
            throw new \InvalidArgumentException("Invalid index {$this->hostIndex} when selecting the host. Must be less than ".sizeof($operationHosts));
        }
        $operationHost = $operationHosts[$this->hostIndex];

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation placeTradeCommodity
     *
     * Place a Trade for a client
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\TradeRequest $body dur, sym, lmPrc, orTyp, action, prCode, exc, qty, trSym are mandatory parameters (required)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \com\edel\edelconnect\models\PlaceTradeDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse
     */
    public function placeTradeCommodity($userID, $body)
    {
        list($response) = $this->placeTradeCommodityWithHttpInfo($userID, $body);
        return $response;
    }

    /**
     * Operation placeTradeCommodityWithHttpInfo
     *
     * Place a Trade for a client
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\TradeRequest $body dur, sym, lmPrc, orTyp, action, prCode, exc, qty, trSym are mandatory parameters (required)
     *
     * @throws \com\edel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \com\edel\edelconnect\models\PlaceTradeDao|\com\edel\edelconnect\models\SessionExpired|\com\edel\edelconnect\models\CommonErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function placeTradeCommodityWithHttpInfo($userID, $body)
    {
        $request = $this->placeTradeCommodityRequest($userID, $body);

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
     * Operation placeTradeCommodityAsync
     *
     * Place a Trade for a client
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\TradeRequest $body dur, sym, lmPrc, orTyp, action, prCode, exc, qty, trSym are mandatory parameters (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function placeTradeCommodityAsync($userID, $body)
    {
        return $this->placeTradeCommodityAsyncWithHttpInfo($userID, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation placeTradeCommodityAsyncWithHttpInfo
     *
     * Place a Trade for a client
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\TradeRequest $body dur, sym, lmPrc, orTyp, action, prCode, exc, qty, trSym are mandatory parameters (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function placeTradeCommodityAsyncWithHttpInfo($userID, $body)
    {
        $returnType = '\com\edel\edelconnect\models\PlaceTradeDao';
        $request = $this->placeTradeCommodityRequest($userID, $body);

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
     * Create request for operation 'placeTradeCommodity'
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://emtuat.edelweiss.in/edelmw-comm-uat
     *
     * @param  string $userID USER ID of the client (required)
     * @param  \com\edel\edelconnect\models\TradeRequest $body dur, sym, lmPrc, orTyp, action, prCode, exc, qty, trSym are mandatory parameters (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function placeTradeCommodityRequest($userID, $body)
    {
        // verify the required parameter 'userID' is set
        if ($userID === null || (is_array($userID) && count($userID) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $userID when calling placeTradeCommodity'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling placeTradeCommodity'
            );
        }

        $resourcePath = '/comm/trade/placetrade/{userID}';
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

        $operationHosts = ["https://emtuat.edelweiss.in/edelmw-comm-uat"];
        if ($this->hostIndex < 0 || $this->hostIndex >= sizeof($operationHosts)) {
            throw new \InvalidArgumentException("Invalid index {$this->hostIndex} when selecting the host. Must be less than ".sizeof($operationHosts));
        }
        $operationHost = $operationHosts[$this->hostIndex];

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
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
