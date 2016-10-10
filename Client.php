<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     Amazon_FWSInventory
 *  @copyright   Copyright 2008 Amazon Technologies, Inc.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2009-07-31
 */
/******************************************************************************* 
 *    __  _    _  ___ 
 *   (  )( \/\/ )/ __)
 *   /__\ \    / \__ \
 *  (_)(_) \/\/  (___/
 * 
 *  Amazon FWS Inventory PHP5 Library
 *  Generated: Fri Nov 20 09:59:57 PST 2009
 * 
 */

/**
 *  @see Amazon_FWSInventory_Interface
 */
require_once ('Amazon/FWSInventory/Interface.php');

/**
 * Amazon Web Service used to retrieve inventory and fulfillability data
 * based on merchant-owned inventory in Amazon's fulfillment network.
 * 
 * Amazon_FWSInventory_Client is an implementation of Amazon_FWSInventory
 *
 */
class Amazon_FWSInventory_Client implements Amazon_FWSInventory_Interface
{

    const SERVICE_VERSION = '2009-07-31';

    /** @var string */
    private  $_awsAccessKeyId = null;

    /** @var string */
    private  $_awsSecretAccessKey = null;

    /** @var array */
    private  $_config = array ('ServiceURL' => 'https://fba-inventory.amazonaws.com',
                               'UserAgent' => 'Amazon FWSInventory PHP5 Library',
                               'SignatureVersion' => 1,
                               'SignatureMethod' => 'HmacSHA256',
                               'ProxyHost' => null,
                               'ProxyPort' => -1,
                               'MaxErrorRetry' => 3
                               );

    /**
     * Construct new Client
     *
     * @param string $awsAccessKeyId AWS Access Key ID
     * @param string $awsSecretAccessKey AWS Secret Access Key
     * @param array $config configuration options.
     * Valid configuration options are:
     * <ul>
     * <li>ServiceURL</li>
     * <li>UserAgent</li>
     * <li>SignatureVersion</li>
     * <li>TimesRetryOnError</li>
     * <li>ProxyHost</li>
     * <li>ProxyPort</li>
     * <li>MaxErrorRetry</li>
     * </ul>
     */
    public function __construct($awsAccessKeyId, $awsSecretAccessKey, $config = null)
    {
        iconv_set_encoding('output_encoding', 'UTF-8');
        iconv_set_encoding('input_encoding', 'UTF-8');
        iconv_set_encoding('internal_encoding', 'UTF-8');

        $this->_awsAccessKeyId = $awsAccessKeyId;
        $this->_awsSecretAccessKey = $awsSecretAccessKey;
        if (!is_null($config)) $this->_config = array_merge($this->_config, $config);
    }

    // Public API ------------------------------------------------------------//


            
    /**
     * Get Service Status 
     * Gets a brief status message from the service.
     * 
     * @see http://docs.amazonwebservices.com/${docPath}GetServiceStatus.html
     * @param mixed $request array of parameters for Amazon_FWSInventory_Model_GetServiceStatusRequest request
     * or Amazon_FWSInventory_Model_GetServiceStatusRequest object itself
     * @see Amazon_FWSInventory_Model_GetServiceStatus
     * @return Amazon_FWSInventory_Model_GetServiceStatusResponse Amazon_FWSInventory_Model_GetServiceStatusResponse
     *
     * @throws Amazon_FWSInventory_Exception
     */
    public function getServiceStatus($request)
    {
        if (!$request instanceof Amazon_FWSInventory_Model_GetServiceStatusRequest) {
            require_once ('Amazon/FWSInventory/Model/GetServiceStatusRequest.php');
            $request = new Amazon_FWSInventory_Model_GetServiceStatusRequest($request);
        }
        require_once ('Amazon/FWSInventory/Model/GetServiceStatusResponse.php');
        return Amazon_FWSInventory_Model_GetServiceStatusResponse::fromXML($this->_invoke($this->_convertGetServiceStatus($request)));
    }


            
    /**
     * Get Inventory Supply 
     * Get information about the supply of merchant-owned inventory in
     * Amazon's fulfillment network. "Supply" is inventory that is available
     * for fulfilling (a.k.a. Multi-Channel Fulfillment) orders. In general
     * this includes all sellable inventory that has been received by Amazon,
     * that is not reserved for existing orders or for internal FC processes,
     * and also inventory expected to be received from inbound shipments.
     * 
     * @see http://docs.amazonwebservices.com/${docPath}GetInventorySupply.html
     * @param mixed $request array of parameters for Amazon_FWSInventory_Model_GetInventorySupplyRequest request
     * or Amazon_FWSInventory_Model_GetInventorySupplyRequest object itself
     * @see Amazon_FWSInventory_Model_GetInventorySupply
     * @return Amazon_FWSInventory_Model_GetInventorySupplyResponse Amazon_FWSInventory_Model_GetInventorySupplyResponse
     *
     * @throws Amazon_FWSInventory_Exception
     */
    public function getInventorySupply($request)
    {
        if (!$request instanceof Amazon_FWSInventory_Model_GetInventorySupplyRequest) {
            require_once ('Amazon/FWSInventory/Model/GetInventorySupplyRequest.php');
            $request = new Amazon_FWSInventory_Model_GetInventorySupplyRequest($request);
        }
        require_once ('Amazon/FWSInventory/Model/GetInventorySupplyResponse.php');
        return Amazon_FWSInventory_Model_GetInventorySupplyResponse::fromXML($this->_invoke($this->_convertGetInventorySupply($request)));
    }


            
    /**
     * List Updated Inventory Supply 
     * Get information about the supply of merchant-owned inventory in
     * Amazon's fulfillment network, for inventory items that may have had
     * recent changes in inventory levels. The type of inventory data returned
     * by this operation is the same as that returned by GetInventorySupply.
     * This operation provides the most efficient mechanism for clients to
     * maintain local copies of inventory supply data.
     * 
     * This operation is used with ListUpdatedInventorySupplyByNextToken
     * to paginate over the resultset. Begin pagination by invoking the
     * ListUpdatedInventorySupply operation, and retrieve the first set of
     * results. If the HasNext flag indicates more results are available,
     * continuing iteratively requesting further pages results by invoking the
     * ListUpdatedInventorySupplyByNextToken operation (each time passing in the
     * NextToken value from the previous result), until the returned HasNext
     * flag is false, indicating no further results are available.
     * 
     * @see http://docs.amazonwebservices.com/${docPath}ListUpdatedInventorySupply.html
     * @param mixed $request array of parameters for Amazon_FWSInventory_Model_ListUpdatedInventorySupplyRequest request
     * or Amazon_FWSInventory_Model_ListUpdatedInventorySupplyRequest object itself
     * @see Amazon_FWSInventory_Model_ListUpdatedInventorySupply
     * @return Amazon_FWSInventory_Model_ListUpdatedInventorySupplyResponse Amazon_FWSInventory_Model_ListUpdatedInventorySupplyResponse
     *
     * @throws Amazon_FWSInventory_Exception
     */
    public function listUpdatedInventorySupply($request)
    {
        if (!$request instanceof Amazon_FWSInventory_Model_ListUpdatedInventorySupplyRequest) {
            require_once ('Amazon/FWSInventory/Model/ListUpdatedInventorySupplyRequest.php');
            $request = new Amazon_FWSInventory_Model_ListUpdatedInventorySupplyRequest($request);
        }
        require_once ('Amazon/FWSInventory/Model/ListUpdatedInventorySupplyResponse.php');
        return Amazon_FWSInventory_Model_ListUpdatedInventorySupplyResponse::fromXML($this->_invoke($this->_convertListUpdatedInventorySupply($request)));
    }


            
    /**
     * List Updated Inventory Supply By Next Token 
     * Continues pagination over a resultset of inventory data for inventory
     * items that may have had recent changes in inventory levels.
     * 
     * This operation is used in conjunction with ListUpdatedInventorySupply.
     * Please refer to documentation for that operation for further details.
     * 
     * @see http://docs.amazonwebservices.com/${docPath}ListUpdatedInventorySupplyByNextToken.html
     * @param mixed $request array of parameters for Amazon_FWSInventory_Model_ListUpdatedInventorySupplyByNextTokenRequest request
     * or Amazon_FWSInventory_Model_ListUpdatedInventorySupplyByNextTokenRequest object itself
     * @see Amazon_FWSInventory_Model_ListUpdatedInventorySupplyByNextToken
     * @return Amazon_FWSInventory_Model_ListUpdatedInventorySupplyByNextTokenResponse Amazon_FWSInventory_Model_ListUpdatedInventorySupplyByNextTokenResponse
     *
     * @throws Amazon_FWSInventory_Exception
     */
    public function listUpdatedInventorySupplyByNextToken($request)
    {
        if (!$request instanceof Amazon_FWSInventory_Model_ListUpdatedInventorySupplyByNextTokenRequest) {
            require_once ('Amazon/FWSInventory/Model/ListUpdatedInventorySupplyByNextTokenRequest.php');
            $request = new Amazon_FWSInventory_Model_ListUpdatedInventorySupplyByNextTokenRequest($request);
        }
        require_once ('Amazon/FWSInventory/Model/ListUpdatedInventorySupplyByNextTokenResponse.php');
        return Amazon_FWSInventory_Model_ListUpdatedInventorySupplyByNextTokenResponse::fromXML($this->_invoke($this->_convertListUpdatedInventorySupplyByNextToken($request)));
    }

        // Private API ------------------------------------------------------------//

    /**
     * Invoke request and return response
     */
    private function _invoke(array $parameters)
    {
        $actionName = $parameters["Action"];
        $response = array();
        $responseBody = null;
        $statusCode = 200;

        /* Submit the request and read response body */
        try {

            /* Add required request parameters */
            $parameters = $this->_addRequiredParameters($parameters);

            $shouldRetry = true;
            $retries = 0;
            do {
                try {
                        $response = $this->_httpPost($parameters);
                        if ($response['Status'] === 200) {
                            $shouldRetry = false;
                        } else {
                            if ($response['Status'] === 500 || $response['Status'] === 503) {
                                $shouldRetry = true;
                                $this->_pauseOnRetry(++$retries, $response['Status']);
                            } else {
                                throw $this->_reportAnyErrors($response['ResponseBody'], $response['Status']);
                            }
                       }
                /* Rethrow on deserializer error */
                } catch (Exception $e) {
                    require_once ('Amazon/FWSInventory/Exception.php');
                    if ($e instanceof Amazon_FWSInventory_Exception) {
                        throw $e;
                    } else {
                        require_once ('Amazon/FWSInventory/Exception.php');
                        throw new Amazon_FWSInventory_Exception(array('Exception' => $e, 'Message' => $e->getMessage()));
                    }
                }

            } while ($shouldRetry);

        } catch (Amazon_FWSInventory_Exception $se) {
            throw $se;
        } catch (Exception $t) {
            throw new Amazon_FWSInventory_Exception(array('Exception' => $t, 'Message' => $t->getMessage()));
        }

        return $response['ResponseBody'];
    }

    /**
     * Look for additional error strings in the response and return formatted exception
     */
    private function _reportAnyErrors($responseBody, $status, Exception $e =  null)
    {
        $ex = null;
        if (!is_null($responseBody) && strpos($responseBody, '<') === 0) {
            if (preg_match('@<RequestId>(.*)</RequestId>.*<Error><Code>(.*)</Code><Message>(.*)</Message></Error>.*(<Error>)?@mi',
                $responseBody, $errorMatcherOne)) {

                $requestId = $errorMatcherOne[1];
                $code = $errorMatcherOne[2];
                $message = $errorMatcherOne[3];

                require_once ('Amazon/FWSInventory/Exception.php');
                $ex = new Amazon_FWSInventory_Exception(array ('Message' => $message, 'StatusCode' => $status, 'ErrorCode' => $code,
                                                           'ErrorType' => 'Unknown', 'RequestId' => $requestId, 'XML' => $responseBody));

            } elseif (preg_match('@<Error><Code>(.*)</Code><Message>(.*)</Message></Error>.*(<Error>)?.*<RequestID>(.*)</RequestID>@mi',
                $responseBody, $errorMatcherTwo)) {

                $code = $errorMatcherTwo[1];
                $message = $errorMatcherTwo[2];
                $requestId = $errorMatcherTwo[4];
                require_once ('Amazon/FWSInventory/Exception.php');
                $ex = new Amazon_FWSInventory_Exception(array ('Message' => $message, 'StatusCode' => $status, 'ErrorCode' => $code,
                                                              'ErrorType' => 'Unknown', 'RequestId' => $requestId, 'XML' => $responseBody));
            } elseif (preg_match('@<Error><Type>(.*)</Type><Code>(.*)</Code><Message>(.*)</Message>.*</Error>.*(<Error>)?.*<RequestId>(.*)</RequestId>@mi',
                $responseBody, $errorMatcherThree)) {

                $type = $errorMatcherThree[1];
                $code = $errorMatcherThree[2];
                $message = $errorMatcherThree[3];
                $requestId = $errorMatcherThree[5];
                require_once ('Amazon/FWSInventory/Exception.php');
                $ex = new Amazon_FWSInventory_Exception(array ('Message' => $message, 'StatusCode' => $status, 'ErrorCode' => $code,
                                                              'ErrorType' => $type, 'RequestId' => $requestId, 'XML' => $responseBody));

            } else {
                require_once ('Amazon/FWSInventory/Exception.php');
                $ex = new Amazon_FWSInventory_Exception(array('Message' => 'Internal Error', 'StatusCode' => $status));
            }
        } else {
            require_once ('Amazon/FWSInventory/Exception.php');
            $ex = new Amazon_FWSInventory_Exception(array('Message' => 'Internal Error', 'StatusCode' => $status));
        }
        return $ex;
    }



    /**
     * Perform HTTP post with exponential retries on error 500 and 503
     *
     */
    private function _httpPost(array $parameters)
    {

        $query = $this->_getParametersAsString($parameters);
        $url = parse_url ($this->_config['ServiceURL']);
        $post  = "POST / HTTP/1.0\r\n";
        $post .= "Host: " . $url['host'] . "\r\n";
        $post .= "Content-Type: application/x-www-form-urlencoded; charset=utf-8\r\n";
        $post .= "Content-Length: " . strlen($query) . "\r\n";
        $post .= "User-Agent: " . $this->_config['UserAgent'] . "\r\n";
        $post .= "\r\n";
        $post .= $query;
        $port = array_key_exists('port',$url) ? $url['port'] : null;
        $scheme = '';

        switch ($url['scheme']) {
            case 'https':
                $scheme = 'ssl://';
                $port = $port === null ? 443 : $port;
                break;
            default:
                $scheme = '';
                $port = $port === null ? 80 : $port;
        }

        $response = '';
        if ($socket = @fsockopen($scheme . $url['host'], $port, $errno, $errstr, 10)) {

            fwrite($socket, $post);

            while (!feof($socket)) {
                $response .= fgets($socket, 1160);
            }
            fclose($socket);

            list($other, $responseBody) = explode("\r\n\r\n", $response, 2);
            $other = preg_split("/\r\n|\n|\r/", $other);
            list($protocol, $code, $text) = explode(' ', trim(array_shift($other)), 3);
        } else {
            throw new Exception ("Unable to establish connection to host " . $url['host'] . " $errstr");
        }


        return array ('Status' => (int)$code, 'ResponseBody' => $responseBody);
    }

    /**
     * Exponential sleep on failed request
     * @param retries current retry
     * @throws Amazon_FWSInventory_Exception if maximum number of retries has been reached
     */
    private function _pauseOnRetry($retries, $status)
    {
        if ($retries <= $this->_config['MaxErrorRetry']) {
            $delay = (int) (pow(4, $retries) * 100000) ;
            usleep($delay);
        } else {
            require_once ('Amazon/FWSInventory/Exception.php');
            throw new Amazon_FWSInventory_Exception (array ('Message' => "Maximum number of retry attempts reached :  $retries", 'StatusCode' => $status));
        }
    }

    /**
     * Add authentication related and version parameters
     */
    private function _addRequiredParameters(array $parameters)
    {
        $parameters['AWSAccessKeyId'] = $this->_awsAccessKeyId;
        $parameters['Timestamp'] = $this->_getFormattedTimestamp();
        $parameters['Version'] = self::SERVICE_VERSION;
        $parameters['SignatureVersion'] = $this->_config['SignatureVersion'];
        if ($parameters['SignatureVersion'] > 1) {
            $parameters['SignatureMethod'] = $this->_config['SignatureMethod'];
        }
        $parameters['Signature'] = $this->_signParameters($parameters, $this->_awsSecretAccessKey);

        return $parameters;
    }

    /**
     * Convert paremeters to Url encoded query string
     */
    private function _getParametersAsString(array $parameters)
    {
        $queryParameters = array();
        foreach ($parameters as $key => $value) {
            $queryParameters[] = $key . '=' . $this->_urlencode($value);
        }
        return implode('&', $queryParameters);
    }


    /**
     * Computes RFC 2104-compliant HMAC signature for request parameters
     * Implements AWS Signature, as per following spec:
     *
     * If Signature Version is 0, it signs concatenated Action and Timestamp
     *
     * If Signature Version is 1, it performs the following:
     *
     * Sorts all  parameters (including SignatureVersion and excluding Signature,
     * the value of which is being created), ignoring case.
     *
     * Iterate over the sorted list and append the parameter name (in original case)
     * and then its value. It will not URL-encode the parameter values before
     * constructing this string. There are no separators.
     *
     * If Signature Version is 2, string to sign is based on following:
     *
     *    1. The HTTP Request Method followed by an ASCII newline (%0A)
     *    2. The HTTP Host header in the form of lowercase host, followed by an ASCII newline.
     *    3. The URL encoded HTTP absolute path component of the URI
     *       (up to but not including the query string parameters);
     *       if this is empty use a forward '/'. This parameter is followed by an ASCII newline.
     *    4. The concatenation of all query string components (names and values)
     *       as UTF-8 characters which are URL encoded as per RFC 3986
     *       (hex characters MUST be uppercase), sorted using lexicographic byte ordering.
     *       Parameter names are separated from their values by the '=' character
     *       (ASCII character 61), even if the value is empty.
     *       Pairs of parameter and values are separated by the '&' character (ASCII code 38).
     *
     */
    private function _signParameters(array $parameters, $key) {
        $signatureVersion = $parameters['SignatureVersion'];
        $algorithm = "HmacSHA1";
        $stringToSign = null;
        if (0 === $signatureVersion) {
            $stringToSign = $this->_calculateStringToSignV0($parameters);
        } else if (1 === $signatureVersion) {
            $stringToSign = $this->_calculateStringToSignV1($parameters);
        } else if (2 === $signatureVersion) {
            $algorithm = $this->_config['SignatureMethod'];
            $parameters['SignatureMethod'] = $algorithm;
            $stringToSign = $this->_calculateStringToSignV2($parameters);
        } else {
            throw new Exception("Invalid Signature Version specified");
        }
        return $this->_sign($stringToSign, $key, $algorithm);
    }

    /**
     * Calculate String to Sign for SignatureVersion 0
     * @param array $parameters request parameters
     * @return String to Sign
     */
    private function _calculateStringToSignV0(array $parameters) {
        return $parameters['Action'] .  $parameters['Timestamp'];
    }

    /**
     * Calculate String to Sign for SignatureVersion 1
     * @param array $parameters request parameters
     * @return String to Sign
     */
    private function _calculateStringToSignV1(array $parameters) {
        $data = '';
        uksort($parameters, 'strcasecmp');
        foreach ($parameters as $parameterName => $parameterValue) {
            $data .= $parameterName . $parameterValue;
        }
        return $data;
    }

    /**
     * Calculate String to Sign for SignatureVersion 2
     * @param array $parameters request parameters
     * @return String to Sign
     */
    private function _calculateStringToSignV2(array $parameters) {
        $data = 'POST';
        $data .= "\n";
        $endpoint = parse_url ($this->_config['ServiceURL']);
        $data .= $endpoint['host'];
        $data .= "\n";
        $uri = array_key_exists('path', $endpoint) ? $endpoint['path'] : null;
        if (!isset ($uri)) {
        	$uri = "/";
        }
		$uriencoded = implode("/", array_map(array($this, "_urlencode"), explode("/", $uri)));
        $data .= $uriencoded;
        $data .= "\n";
        uksort($parameters, 'strcmp');
        $data .= $this->_getParametersAsString($parameters);
        return $data;
    }

    private function _urlencode($value) {
		return str_replace('%7E', '~', rawurlencode($value));
    }


    /**
     * Computes RFC 2104-compliant HMAC signature.
     */
    private function _sign($data, $key, $algorithm)
    {
        if ($algorithm === 'HmacSHA1') {
            $hash = 'sha1';
        } else if ($algorithm === 'HmacSHA256') {
            $hash = 'sha256';
        } else {
            throw new Exception ("Non-supported signing method specified");
        }
        return base64_encode(
            hash_hmac($hash, $data, $key, true)
        );
    }


    /**
     * Formats date as ISO 8601 timestamp
     */
    private function _getFormattedTimestamp()
    {
        return gmdate("Y-m-d\TH:i:s.\\0\\0\\0\\Z", time());
    }


                        
    /**
     * Convert GetServiceStatusRequest to name value pairs
     */
    private function _convertGetServiceStatus($request) {
        
        $parameters = array();
        $parameters['Action'] = 'GetServiceStatus';

        return $parameters;
    }
        
                                        
    /**
     * Convert GetInventorySupplyRequest to name value pairs
     */
    private function _convertGetInventorySupply($request) {
        
        $parameters = array();
        $parameters['Action'] = 'GetInventorySupply';
        foreach  ($request->getMerchantSKU() as $merchantSKUgetInventorySupplyRequestIndex => $merchantSKUgetInventorySupplyRequest) {
            $parameters['MerchantSKU' . '.'  . ($merchantSKUgetInventorySupplyRequestIndex + 1)] =  $merchantSKUgetInventorySupplyRequest;
        }
        if ($request->isSetResponseGroup()) {
            $parameters['ResponseGroup'] =  $request->getResponseGroup();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert ListUpdatedInventorySupplyRequest to name value pairs
     */
    private function _convertListUpdatedInventorySupply($request) {
        
        $parameters = array();
        $parameters['Action'] = 'ListUpdatedInventorySupply';
        if ($request->isSetNumberOfResultsRequested()) {
            $parameters['NumberOfResultsRequested'] =  $request->getNumberOfResultsRequested();
        }
        if ($request->isSetQueryStartDateTime()) {
            $parameters['QueryStartDateTime'] =  $request->getQueryStartDateTime();
        }
        if ($request->isSetResponseGroup()) {
            $parameters['ResponseGroup'] =  $request->getResponseGroup();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert ListUpdatedInventorySupplyByNextTokenRequest to name value pairs
     */
    private function _convertListUpdatedInventorySupplyByNextToken($request) {
        
        $parameters = array();
        $parameters['Action'] = 'ListUpdatedInventorySupplyByNextToken';
        if ($request->isSetNextToken()) {
            $parameters['NextToken'] =  $request->getNextToken();
        }

        return $parameters;
    }
        
                                                                                                                                
}