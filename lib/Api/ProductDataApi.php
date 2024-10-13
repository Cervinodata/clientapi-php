<?php
/**
 * ProductDataApi
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Cervinodata API documentation
 *
 * <div style='margin: 2em 0;'> <p> Before you get going with the Cervinodata API, set up Cervinodata (read the support page here: <a href='https://support.cervinodata.com/hc/en-nl/articles/360004363237' target='_blank'>How to set up the Cervinodata API</a>). </p> <h3>To use the Cervinodata API, you need all of the following:</h3> <p> <ol> <li>An active Cervinodata account, you can start a free trial <a href='https://app.cervinodata.com/register' target='_blank'>here</a></li> <li>At least one connection to a platform (check <a href='https://app.cervinodata.com/data-sources-connections' target='_blank'>here</a>)</li> <li>At least one account switched ON (check <a href='https://app.cervinodata.com/accounts' target='_blank'>here</a>)</li> <li>At least one data refresh executed (check <a href='https://app.cervinodata.com/manual-data-refresh' target='_blank'>here</a>)</li> <li>An active API token (check <a href='https://app.cervinodata.com/settings#/api' target='_blank'>here</a>)</li> </ol> </p> <p> Note that limits apply for <a href='https://support.cervinodata.com/hc/articles/360014265139' target='_blank'>Free plan users</a>. </p> <p> If you wish to automate your Cervinodata API connection, check out the list of client API's at <a href='https://github.com/Cervinodata' target='_blank'>https://github.com/Cervinodata</a>. </p> </div>
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: support@cervinodata.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * ProductDataApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProductDataApi
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

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'getGA4ReportPerChannelGroupPerProductNamePerOrganisationPerPropertyPerMonth_0' => [
            'application/json',
        ],
    ];

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
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
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
     * Operation getGA4ReportPerChannelGroupPerProductNamePerOrganisationPerPropertyPerMonth_0
     *
     * Return GA4 report per channel group per product name per organisation per property per month
     *
     * @param  string[] $organisation_uuids Organisation uuids (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getGA4ReportPerChannelGroupPerProductNamePerOrganisationPerPropertyPerMonth_0'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return string
     */
    public function getGA4ReportPerChannelGroupPerProductNamePerOrganisationPerPropertyPerMonth_0($organisation_uuids, string $contentType = self::contentTypes['getGA4ReportPerChannelGroupPerProductNamePerOrganisationPerPropertyPerMonth_0'][0])
    {
        list($response) = $this->getGA4ReportPerChannelGroupPerProductNamePerOrganisationPerPropertyPerMonth_0WithHttpInfo($organisation_uuids, $contentType);
        return $response;
    }

    /**
     * Operation getGA4ReportPerChannelGroupPerProductNamePerOrganisationPerPropertyPerMonth_0WithHttpInfo
     *
     * Return GA4 report per channel group per product name per organisation per property per month
     *
     * @param  string[] $organisation_uuids Organisation uuids (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getGA4ReportPerChannelGroupPerProductNamePerOrganisationPerPropertyPerMonth_0'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function getGA4ReportPerChannelGroupPerProductNamePerOrganisationPerPropertyPerMonth_0WithHttpInfo($organisation_uuids, string $contentType = self::contentTypes['getGA4ReportPerChannelGroupPerProductNamePerOrganisationPerPropertyPerMonth_0'][0])
    {
        $request = $this->getGA4ReportPerChannelGroupPerProductNamePerOrganisationPerPropertyPerMonth_0Request($organisation_uuids, $contentType);

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
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    if ('string' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('string' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'string', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

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

            $returnType = 'string';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
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
                        'string',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getGA4ReportPerChannelGroupPerProductNamePerOrganisationPerPropertyPerMonth_0Async
     *
     * Return GA4 report per channel group per product name per organisation per property per month
     *
     * @param  string[] $organisation_uuids Organisation uuids (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getGA4ReportPerChannelGroupPerProductNamePerOrganisationPerPropertyPerMonth_0'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getGA4ReportPerChannelGroupPerProductNamePerOrganisationPerPropertyPerMonth_0Async($organisation_uuids, string $contentType = self::contentTypes['getGA4ReportPerChannelGroupPerProductNamePerOrganisationPerPropertyPerMonth_0'][0])
    {
        return $this->getGA4ReportPerChannelGroupPerProductNamePerOrganisationPerPropertyPerMonth_0AsyncWithHttpInfo($organisation_uuids, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getGA4ReportPerChannelGroupPerProductNamePerOrganisationPerPropertyPerMonth_0AsyncWithHttpInfo
     *
     * Return GA4 report per channel group per product name per organisation per property per month
     *
     * @param  string[] $organisation_uuids Organisation uuids (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getGA4ReportPerChannelGroupPerProductNamePerOrganisationPerPropertyPerMonth_0'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getGA4ReportPerChannelGroupPerProductNamePerOrganisationPerPropertyPerMonth_0AsyncWithHttpInfo($organisation_uuids, string $contentType = self::contentTypes['getGA4ReportPerChannelGroupPerProductNamePerOrganisationPerPropertyPerMonth_0'][0])
    {
        $returnType = 'string';
        $request = $this->getGA4ReportPerChannelGroupPerProductNamePerOrganisationPerPropertyPerMonth_0Request($organisation_uuids, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getGA4ReportPerChannelGroupPerProductNamePerOrganisationPerPropertyPerMonth_0'
     *
     * @param  string[] $organisation_uuids Organisation uuids (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getGA4ReportPerChannelGroupPerProductNamePerOrganisationPerPropertyPerMonth_0'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getGA4ReportPerChannelGroupPerProductNamePerOrganisationPerPropertyPerMonth_0Request($organisation_uuids, string $contentType = self::contentTypes['getGA4ReportPerChannelGroupPerProductNamePerOrganisationPerPropertyPerMonth_0'][0])
    {

        // verify the required parameter 'organisation_uuids' is set
        if ($organisation_uuids === null || (is_array($organisation_uuids) && count($organisation_uuids) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organisation_uuids when calling getGA4ReportPerChannelGroupPerProductNamePerOrganisationPerPropertyPerMonth_0'
            );
        }


        $resourcePath = '/data/ga4-report-per-channel-group-per-product-name-per-organisation-per-property-per-month/{organisationUuids}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if (is_array($organisation_uuids)) {
            $organisation_uuids = ObjectSerializer::serializeCollection($organisation_uuids, 'csv');
        }
        if ($organisation_uuids !== null) {
            $resourcePath = str_replace(
                '{' . 'organisationUuids' . '}',
                ObjectSerializer::toPathValue($organisation_uuids),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['text/csv', ],
            $contentType,
            $multipart
        );

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

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
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
