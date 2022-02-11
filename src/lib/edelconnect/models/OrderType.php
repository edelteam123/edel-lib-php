<?php
/**
 * OrderType
 *
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

namespace com\edel\edelconnect\models;
use \com\edel\ObjectSerializer;

/**
 * OrderType Class Doc Comment
 *
 * @category Class
 * @description Order Type
 * @package  com\edel
 * @author   Edelweiss
 * @link     https://www.edelweiss.in
 */
class OrderType
{
    /**
     * Possible values of this enum
     */
    const LIMIT = 'LIMIT';
    const SL_M = 'SL-M';
    const SL = 'SL';
    const MARKET = 'MARKET';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::LIMIT,
            self::SL_M,
            self::SL,
            self::MARKET,
        ];
    }
}


