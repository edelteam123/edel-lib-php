<?php
/**
 * CommonLoginApiTest
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
 * Please update the test case below to test the endpoint.
 */

namespace com\edel\Test\Api;

use \com\edel\Configuration;
use \com\edel\ApiException;
use \com\edel\ObjectSerializer;
use PHPUnit\Framework\TestCase;
use com\edel\edelconnect\api\CommonLoginApi;
use com\edel\EdelweissAPIConnect;

/**
 * CommonLoginApiTest Class Doc Comment
 *
 * @category Class
 * @package  com\edel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

class CommonLoginApiTest extends TestCase
{
    
    /**
     * @var apiInstance
     */
    protected $apiInstance;

    /*  public function __construct($apiInstance=null) {
   
        $this->apiInstance=new EdelweissAPIConnect('testAPI024','abc123','383866dbf323d0a5',true);
     }  */

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
        
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

   

    
     /**
     * Test case for validateUserCrdntials
     *
     * To validate User id and password & generate request id.
     *
     */
    public function testValidateVendorCrdntials() 
    {
       $apiInstance=new EdelweissAPIConnect('testAPI124','abc123','353535dcb66a77a4',true,'Settings.ini');
       /*  $apiInstance=new CommonLoginApi;
        $vendor_id = 'testAPI024'; 
        $source = 'testAPI024'; 
        $body =array('pwd'=>'abc123');  
        $result = $apiInstance->validateVendorCrdntials($vendor_id, $source, $body);
        $this->assertEquals(1,$result['success']); 
        return $result['msg'];  */
     //   return "true";
        
    }
    /**
     * Test case for loginData
     *
     * Returns login data for requested request id.
     *
     */
    public function testLoginData()
    {
       /*  $apiInstance=new CommonLoginApi;
        $source_token =  $token;
        $app_id_key = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhcHAiOjAsImZmIjoiVyIsImJkIjoid2ViLXBjIiwibmJmIjoxNjE2Mzk3NDQxLCJzcmMiOiJlbXRtdyIsImF2IjoiMS4wLjAiLCJhcHBpZCI6IjE2OTExYTA1ZDU4ZTI5YjVmNTMyZTE3MzRkYzQyMjI2IiwiaXNzIjoiZW10IiwiZXhwIjoxNjE2NDM3ODAwLCJpYXQiOjE2MTYzOTc3NDF9.X2L9kMZjK2yzK5wLiOk2gnF73j5q4WnQtAq26W9XFM4"; // string | key obtained from the generate sesion.
        $body = array('reqId'=>'336632dfea0e6785'); 
        $result = $apiInstance->loginData($source_token, $app_id_key, $body); */
      //  print_r($result['data']['auth']);
        
        ///$this->assertEquals(1,$result['success']); 
    
    }
     /**
     * Test case for endSession
     *
     * logs out user.
     *
     */
    public function testEndSession()
    {
		$apiInstance=new EdelweissAPIConnect('testAPI124','abc123','346335ae35ba2922',true,'Settings.ini');
		$result = $apiInstance->Logout();
        //$apiInstance=new EdelweissAPIConnect('testAPI024','abc123','383866dbf323d0a5',true);
        //$apiInstance=new CommonLoginApi;
        //$result = $apiInstance->Logout();
       // $result = $apiInstance->endSession('https://emtuat.edelweiss.in/edelmw-login-uat/login','VU00004');
       // print_r($result);
         ///$this->assertEquals(1,$result['success']); 
        
    }
}
