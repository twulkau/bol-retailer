<?php
/**
 * InventoryApi
 * PHP version 5
 *
 * @category Class
 * @package  Bol\Retailer
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * v9 - Retailer API
 *
 * The bol.com API for retailers.
 *
 * OpenAPI spec version: 9.x
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.32
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Bol\Retailer\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Bol\Retailer\ApiException;
use Bol\Retailer\Configuration;
use Bol\Retailer\HeaderSelector;
use Bol\Retailer\ObjectSerializer;

/**
 * InventoryApi Class Doc Comment
 *
 * @category Class
 * @package  Bol\Retailer
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InventoryApi
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
     * Operation getInventory
     *
     * Get LVB/FBB inventory
     *
     * @param  int $page The requested page number with a page size of 50 items. (optional, default to 1)
     * @param  string[] $quantity Filter inventory by providing a range of quantity (min-range)-(max-range). Note that if no state query is submitted in the same request, then the quantity will be filtered on regularStock by default. (optional)
     * @param  string $stock Filter inventory by stock level. (optional)
     * @param  string $state Filter inventory by stock type. (optional)
     * @param  string $query Filter inventory by EAN or product title. (optional)
     *
     * @throws \Bol\Retailer\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bol\Retailer\Model\InventoryResponse
     */
    public function getInventory($page = '1', $quantity = null, $stock = null, $state = null, $query = null)
    {
        list($response) = $this->getInventoryWithHttpInfo($page, $quantity, $stock, $state, $query);
        return $response;
    }

    /**
     * Operation getInventoryWithHttpInfo
     *
     * Get LVB/FBB inventory
     *
     * @param  int $page The requested page number with a page size of 50 items. (optional, default to 1)
     * @param  string[] $quantity Filter inventory by providing a range of quantity (min-range)-(max-range). Note that if no state query is submitted in the same request, then the quantity will be filtered on regularStock by default. (optional)
     * @param  string $stock Filter inventory by stock level. (optional)
     * @param  string $state Filter inventory by stock type. (optional)
     * @param  string $query Filter inventory by EAN or product title. (optional)
     *
     * @throws \Bol\Retailer\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bol\Retailer\Model\InventoryResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getInventoryWithHttpInfo($page = '1', $quantity = null, $stock = null, $state = null, $query = null)
    {
        $returnType = '\Bol\Retailer\Model\InventoryResponse';
        $request = $this->getInventoryRequest($page, $quantity, $stock, $state, $query);

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
                        '\Bol\Retailer\Model\InventoryResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Bol\Retailer\Model\Problem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getInventoryAsync
     *
     * Get LVB/FBB inventory
     *
     * @param  int $page The requested page number with a page size of 50 items. (optional, default to 1)
     * @param  string[] $quantity Filter inventory by providing a range of quantity (min-range)-(max-range). Note that if no state query is submitted in the same request, then the quantity will be filtered on regularStock by default. (optional)
     * @param  string $stock Filter inventory by stock level. (optional)
     * @param  string $state Filter inventory by stock type. (optional)
     * @param  string $query Filter inventory by EAN or product title. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInventoryAsync($page = '1', $quantity = null, $stock = null, $state = null, $query = null)
    {
        return $this->getInventoryAsyncWithHttpInfo($page, $quantity, $stock, $state, $query)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getInventoryAsyncWithHttpInfo
     *
     * Get LVB/FBB inventory
     *
     * @param  int $page The requested page number with a page size of 50 items. (optional, default to 1)
     * @param  string[] $quantity Filter inventory by providing a range of quantity (min-range)-(max-range). Note that if no state query is submitted in the same request, then the quantity will be filtered on regularStock by default. (optional)
     * @param  string $stock Filter inventory by stock level. (optional)
     * @param  string $state Filter inventory by stock type. (optional)
     * @param  string $query Filter inventory by EAN or product title. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInventoryAsyncWithHttpInfo($page = '1', $quantity = null, $stock = null, $state = null, $query = null)
    {
        $returnType = '\Bol\Retailer\Model\InventoryResponse';
        $request = $this->getInventoryRequest($page, $quantity, $stock, $state, $query);

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
     * Create request for operation 'getInventory'
     *
     * @param  int $page The requested page number with a page size of 50 items. (optional, default to 1)
     * @param  string[] $quantity Filter inventory by providing a range of quantity (min-range)-(max-range). Note that if no state query is submitted in the same request, then the quantity will be filtered on regularStock by default. (optional)
     * @param  string $stock Filter inventory by stock level. (optional)
     * @param  string $state Filter inventory by stock type. (optional)
     * @param  string $query Filter inventory by EAN or product title. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getInventoryRequest($page = '1', $quantity = null, $stock = null, $state = null, $query = null)
    {
        if ($page !== null && $page < 1) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling InventoryApi.getInventory, must be bigger than or equal to 1.');
        }


        $resourcePath = '/retailer/inventory';
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
        if (is_array($quantity)) {
            $queryParams['quantity'] = $quantity;
        } else
        if ($quantity !== null) {
            $queryParams['quantity'] = ObjectSerializer::toQueryValue($quantity);
        }
        // query params
        if ($stock !== null) {
            $queryParams['stock'] = ObjectSerializer::toQueryValue($stock);
        }
        // query params
        if ($state !== null) {
            $queryParams['state'] = ObjectSerializer::toQueryValue($state);
        }
        // query params
        if ($query !== null) {
            $queryParams['query'] = ObjectSerializer::toQueryValue($query);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.retailer.v9+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.retailer.v9+json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
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
