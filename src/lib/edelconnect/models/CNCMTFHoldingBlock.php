<?php
/**
 * CNCMTFHoldingBlock
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
 * CNCMTFHoldingBlock Class Doc Comment
 *
 * @category Class
 * @package  com\edel
 * @author   Edelweiss
 * @link     https://www.edelweiss.in
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CNCMTFHoldingBlock implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelName = 'CNCMTFHoldingBlock';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'asTyp' => 'string',
        'cpName' => 'string',
        'dpName' => 'string',
        'exc' => 'string',
        'isin' => 'string',
        'ltSz' => 'string',
        'ltp' => 'string',
        'tkSz' => 'string',
        'trdSym' => 'string',
        'totalQty' => 'string',
        'totalVal' => 'string',
        'sym' => 'string',
        'cncRmsHdg' => '\com\edel\edelconnect\models\HoldingRMSObject',
        'mtfRmsHdg' => '\com\edel\edelconnect\models\HoldingRMSObject'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'asTyp' => null,
        'cpName' => null,
        'dpName' => null,
        'exc' => null,
        'isin' => null,
        'ltSz' => null,
        'ltp' => null,
        'tkSz' => null,
        'trdSym' => null,
        'totalQty' => null,
        'totalVal' => null,
        'sym' => null,
        'cncRmsHdg' => null,
        'mtfRmsHdg' => null
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
        'asTyp' => 'asTyp',
        'cpName' => 'cpName',
        'dpName' => 'dpName',
        'exc' => 'exc',
        'isin' => 'isin',
        'ltSz' => 'ltSz',
        'ltp' => 'ltp',
        'tkSz' => 'tkSz',
        'trdSym' => 'trdSym',
        'totalQty' => 'totalQty',
        'totalVal' => 'totalVal',
        'sym' => 'sym',
        'cncRmsHdg' => 'cncRmsHdg',
        'mtfRmsHdg' => 'mtfRmsHdg'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asTyp' => 'setAsTyp',
        'cpName' => 'setCpName',
        'dpName' => 'setDpName',
        'exc' => 'setExc',
        'isin' => 'setIsin',
        'ltSz' => 'setLtSz',
        'ltp' => 'setLtp',
        'tkSz' => 'setTkSz',
        'trdSym' => 'setTrdSym',
        'totalQty' => 'setTotalQty',
        'totalVal' => 'setTotalVal',
        'sym' => 'setSym',
        'cncRmsHdg' => 'setCncRmsHdg',
        'mtfRmsHdg' => 'setMtfRmsHdg'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asTyp' => 'getAsTyp',
        'cpName' => 'getCpName',
        'dpName' => 'getDpName',
        'exc' => 'getExc',
        'isin' => 'getIsin',
        'ltSz' => 'getLtSz',
        'ltp' => 'getLtp',
        'tkSz' => 'getTkSz',
        'trdSym' => 'getTrdSym',
        'totalQty' => 'getTotalQty',
        'totalVal' => 'getTotalVal',
        'sym' => 'getSym',
        'cncRmsHdg' => 'getCncRmsHdg',
        'mtfRmsHdg' => 'getMtfRmsHdg'
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
        $this->container['asTyp'] = $data['asTyp'] ?? null;
        $this->container['cpName'] = $data['cpName'] ?? null;
        $this->container['dpName'] = $data['dpName'] ?? null;
        $this->container['exc'] = $data['exc'] ?? null;
        $this->container['isin'] = $data['isin'] ?? null;
        $this->container['ltSz'] = $data['ltSz'] ?? null;
        $this->container['ltp'] = $data['ltp'] ?? null;
        $this->container['tkSz'] = $data['tkSz'] ?? null;
        $this->container['trdSym'] = $data['trdSym'] ?? null;
        $this->container['totalQty'] = $data['totalQty'] ?? null;
        $this->container['totalVal'] = $data['totalVal'] ?? null;
        $this->container['sym'] = $data['sym'] ?? null;
        $this->container['cncRmsHdg'] = $data['cncRmsHdg'] ?? null;
        $this->container['mtfRmsHdg'] = $data['mtfRmsHdg'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets asTyp
     *
     * @return string|null
     */
    public function getAsTyp()
    {
        return $this->container['asTyp'];
    }

    /**
     * Sets asTyp
     *
     * @param string|null $asTyp asTyp
     *
     * @return self
     */
    public function setAsTyp($asTyp)
    {
        $this->container['asTyp'] = $asTyp;

        return $this;
    }

    /**
     * Gets cpName
     *
     * @return string|null
     */
    public function getCpName()
    {
        return $this->container['cpName'];
    }

    /**
     * Sets cpName
     *
     * @param string|null $cpName cpName
     *
     * @return self
     */
    public function setCpName($cpName)
    {
        $this->container['cpName'] = $cpName;

        return $this;
    }

    /**
     * Gets dpName
     *
     * @return string|null
     */
    public function getDpName()
    {
        return $this->container['dpName'];
    }

    /**
     * Sets dpName
     *
     * @param string|null $dpName dpName
     *
     * @return self
     */
    public function setDpName($dpName)
    {
        $this->container['dpName'] = $dpName;

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
     * @param string|null $exc exc
     *
     * @return self
     */
    public function setExc($exc)
    {
        $this->container['exc'] = $exc;

        return $this;
    }

    /**
     * Gets isin
     *
     * @return string|null
     */
    public function getIsin()
    {
        return $this->container['isin'];
    }

    /**
     * Sets isin
     *
     * @param string|null $isin isin
     *
     * @return self
     */
    public function setIsin($isin)
    {
        $this->container['isin'] = $isin;

        return $this;
    }

    /**
     * Gets ltSz
     *
     * @return string|null
     */
    public function getLtSz()
    {
        return $this->container['ltSz'];
    }

    /**
     * Sets ltSz
     *
     * @param string|null $ltSz ltSz
     *
     * @return self
     */
    public function setLtSz($ltSz)
    {
        $this->container['ltSz'] = $ltSz;

        return $this;
    }

    /**
     * Gets ltp
     *
     * @return string|null
     */
    public function getLtp()
    {
        return $this->container['ltp'];
    }

    /**
     * Sets ltp
     *
     * @param string|null $ltp ltp
     *
     * @return self
     */
    public function setLtp($ltp)
    {
        $this->container['ltp'] = $ltp;

        return $this;
    }

    /**
     * Gets tkSz
     *
     * @return string|null
     */
    public function getTkSz()
    {
        return $this->container['tkSz'];
    }

    /**
     * Sets tkSz
     *
     * @param string|null $tkSz tkSz
     *
     * @return self
     */
    public function setTkSz($tkSz)
    {
        $this->container['tkSz'] = $tkSz;

        return $this;
    }

    /**
     * Gets trdSym
     *
     * @return string|null
     */
    public function getTrdSym()
    {
        return $this->container['trdSym'];
    }

    /**
     * Sets trdSym
     *
     * @param string|null $trdSym trdSym
     *
     * @return self
     */
    public function setTrdSym($trdSym)
    {
        $this->container['trdSym'] = $trdSym;

        return $this;
    }

    /**
     * Gets totalQty
     *
     * @return string|null
     */
    public function getTotalQty()
    {
        return $this->container['totalQty'];
    }

    /**
     * Sets totalQty
     *
     * @param string|null $totalQty totalQty
     *
     * @return self
     */
    public function setTotalQty($totalQty)
    {
        $this->container['totalQty'] = $totalQty;

        return $this;
    }

    /**
     * Gets totalVal
     *
     * @return string|null
     */
    public function getTotalVal()
    {
        return $this->container['totalVal'];
    }

    /**
     * Sets totalVal
     *
     * @param string|null $totalVal totalVal
     *
     * @return self
     */
    public function setTotalVal($totalVal)
    {
        $this->container['totalVal'] = $totalVal;

        return $this;
    }

    /**
     * Gets sym
     *
     * @return string|null
     */
    public function getSym()
    {
        return $this->container['sym'];
    }

    /**
     * Sets sym
     *
     * @param string|null $sym sym
     *
     * @return self
     */
    public function setSym($sym)
    {
        $this->container['sym'] = $sym;

        return $this;
    }

    /**
     * Gets cncRmsHdg
     *
     * @return \com\edel\edelconnect\models\HoldingRMSObject|null
     */
    public function getCncRmsHdg()
    {
        return $this->container['cncRmsHdg'];
    }

    /**
     * Sets cncRmsHdg
     *
     * @param \com\edel\edelconnect\models\HoldingRMSObject|null $cncRmsHdg cncRmsHdg
     *
     * @return self
     */
    public function setCncRmsHdg($cncRmsHdg)
    {
        $this->container['cncRmsHdg'] = $cncRmsHdg;

        return $this;
    }

    /**
     * Gets mtfRmsHdg
     *
     * @return \com\edel\edelconnect\models\HoldingRMSObject|null
     */
    public function getMtfRmsHdg()
    {
        return $this->container['mtfRmsHdg'];
    }

    /**
     * Sets mtfRmsHdg
     *
     * @param \com\edel\edelconnect\models\HoldingRMSObject|null $mtfRmsHdg mtfRmsHdg
     *
     * @return self
     */
    public function setMtfRmsHdg($mtfRmsHdg)
    {
        $this->container['mtfRmsHdg'] = $mtfRmsHdg;

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


