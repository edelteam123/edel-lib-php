<?php
/**
 * EQCancelTradeReq
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

use \ArrayAccess;
use \com\edel\ObjectSerializer;

/**
 * EQCancelTradeReq Class Doc Comment
 *
 * @category Class
 * @package  com\edel
 * @author   Edelweiss
 * @link     https://www.edelweiss.in
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EQCancelTradeReq implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelName = 'EQCancelTradeReq';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'nstOID' => 'string',
        'ordTyp' => '\com\edel\edelconnect\models\OrderType',
        'prdCode' => '\com\edel\edelconnect\models\PrdCode',
        'exc' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'nstOID' => null,
        'ordTyp' => null,
        'prdCode' => null,
        'exc' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'nstOID' => 'nstOID',
        'ordTyp' => 'ordTyp',
        'prdCode' => 'prdCode',
        'exc' => 'exc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'nstOID' => 'setNstOID',
        'ordTyp' => 'setOrdTyp',
        'prdCode' => 'setPrdCode',
        'exc' => 'setExc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'nstOID' => 'getNstOID',
        'ordTyp' => 'getOrdTyp',
        'prdCode' => 'getPrdCode',
        'exc' => 'getExc'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$modelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['nstOID'] = $data['nstOID'] ?? null;
        $this->container['ordTyp'] = $data['ordTyp'] ?? null;
        $this->container['prdCode'] = $data['prdCode'] ?? null;
        $this->container['exc'] = $data['exc'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['nstOID'] === null) {
            $invalidProperties[] = "'nstOID' can't be null";
        }
        if ($this->container['ordTyp'] === null) {
            $invalidProperties[] = "'ordTyp' can't be null";
        }
        if ($this->container['prdCode'] === null) {
            $invalidProperties[] = "'prdCode' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets nstOID
     *
     * @return string
     */
    public function getNstOID()
    {
        return $this->container['nstOID'];
    }

    /**
     * Sets nstOID
     *
     * @param string $nstOID Nest Order ID .Order number received from Order book response.
     *
     * @return self
     */
    public function setNstOID($nstOID)
    {
        $this->container['nstOID'] = $nstOID;

        return $this;
    }

    /**
     * Gets ordTyp
     *
     * @return \com\edel\edelconnect\models\OrderType
     */
    public function getOrdTyp()
    {
        return $this->container['ordTyp'];
    }

    /**
     * Sets ordTyp
     *
     * @param \com\edel\edelconnect\models\OrderType $ordTyp ordTyp
     *
     * @return self
     */
    public function setOrdTyp($ordTyp)
    {
        $this->container['ordTyp'] = $ordTyp;

        return $this;
    }

    /**
     * Gets prdCode
     *
     * @return \com\edel\edelconnect\models\PrdCode
     */
    public function getPrdCode()
    {
        return $this->container['prdCode'];
    }

    /**
     * Sets prdCode
     *
     * @param \com\edel\edelconnect\models\PrdCode $prdCode prdCode
     *
     * @return self
     */
    public function setPrdCode($prdCode)
    {
        $this->container['prdCode'] = $prdCode;

        return $this;
    }

    /**
     * Gets exc
     *
     * @return string|null
     */
    public function getExc()
    {
        return $this->container['exc'];
    }

    /**
     * Sets exc
     *
     * @param string|null $exc Name of the exchange, BSE/NSE
     *
     * @return self
     */
    public function setExc($exc)
    {
        $this->container['exc'] = $exc;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


