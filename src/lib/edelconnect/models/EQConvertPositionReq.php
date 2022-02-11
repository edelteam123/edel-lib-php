<?php
/**
 * EQConvertPositionReq
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
 * EQConvertPositionReq Class Doc Comment
 *
 * @category Class
 * @package  com\edel
 * @author   Edelweiss
 * @link     https://www.edelweiss.in
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EQConvertPositionReq implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelName = 'EQConvertPositionReq';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'exc' => 'string',
        'ordTyp' => '\com\edel\edelconnect\models\OrderType',
        'nstOID' => 'string',
        'flID' => 'string',
        'prdCodeCh' => 'string',
        'prdCode' => '\com\edel\edelconnect\models\PrdCode'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'exc' => null,
        'ordTyp' => null,
        'nstOID' => null,
        'flID' => null,
        'prdCodeCh' => null,
        'prdCode' => null
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
        'exc' => 'exc',
        'ordTyp' => 'ordTyp',
        'nstOID' => 'nstOID',
        'flID' => 'flID',
        'prdCodeCh' => 'prdCodeCh',
        'prdCode' => 'prdCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'exc' => 'setExc',
        'ordTyp' => 'setOrdTyp',
        'nstOID' => 'setNstOID',
        'flID' => 'setFlID',
        'prdCodeCh' => 'setPrdCodeCh',
        'prdCode' => 'setPrdCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'exc' => 'getExc',
        'ordTyp' => 'getOrdTyp',
        'nstOID' => 'getNstOID',
        'flID' => 'getFlID',
        'prdCodeCh' => 'getPrdCodeCh',
        'prdCode' => 'getPrdCode'
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

    const PRD_CODE_CH_CNC = 'CNC';
    const PRD_CODE_CH_MIS = 'MIS';
    const PRD_CODE_CH_NRML = 'NRML';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPrdCodeChAllowableValues()
    {
        return [
            self::PRD_CODE_CH_CNC,
            self::PRD_CODE_CH_MIS,
            self::PRD_CODE_CH_NRML,
        ];
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
        $this->container['exc'] = $data['exc'] ?? null;
        $this->container['ordTyp'] = $data['ordTyp'] ?? null;
        $this->container['nstOID'] = $data['nstOID'] ?? null;
        $this->container['flID'] = $data['flID'] ?? null;
        $this->container['prdCodeCh'] = $data['prdCodeCh'] ?? null;
        $this->container['prdCode'] = $data['prdCode'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['exc'] === null) {
            $invalidProperties[] = "'exc' can't be null";
        }
        if ($this->container['ordTyp'] === null) {
            $invalidProperties[] = "'ordTyp' can't be null";
        }
        $allowedValues = $this->getPrdCodeChAllowableValues();
        if (!is_null($this->container['prdCodeCh']) && !in_array($this->container['prdCodeCh'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'prdCodeCh', must be one of '%s'",
                $this->container['prdCodeCh'],
                implode("', '", $allowedValues)
            );
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
     * Gets exc
     *
     * @return string
     */
    public function getExc()
    {
        return $this->container['exc'];
    }

    /**
     * Sets exc
     *
     * @param string $exc Name of the exchange, BSE/NSE etc
     *
     * @return self
     */
    public function setExc($exc)
    {
        $this->container['exc'] = $exc;

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
     * Gets nstOID
     *
     * @return string|null
     */
    public function getNstOID()
    {
        return $this->container['nstOID'];
    }

    /**
     * Sets nstOID
     *
     * @param string|null $nstOID Nest Order ID .Order number received from Order book response. It is mandatory for modifying/cancelling an order
     *
     * @return self
     */
    public function setNstOID($nstOID)
    {
        $this->container['nstOID'] = $nstOID;

        return $this;
    }

    /**
     * Gets flID
     *
     * @return string|null
     */
    public function getFlID()
    {
        return $this->container['flID'];
    }

    /**
     * Sets flID
     *
     * @param string|null $flID Fill Id of the trade obtained from TradeBook API
     *
     * @return self
     */
    public function setFlID($flID)
    {
        $this->container['flID'] = $flID;

        return $this;
    }

    /**
     * Gets prdCodeCh
     *
     * @return string|null
     */
    public function getPrdCodeCh()
    {
        return $this->container['prdCodeCh'];
    }

    /**
     * Sets prdCodeCh
     *
     * @param string|null $prdCodeCh New Product code of the trade
     *
     * @return self
     */
    public function setPrdCodeCh($prdCodeCh)
    {
        $allowedValues = $this->getPrdCodeChAllowableValues();
        if (!is_null($prdCodeCh) && !in_array($prdCodeCh, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'prdCodeCh', must be one of '%s'",
                    $prdCodeCh,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['prdCodeCh'] = $prdCodeCh;

        return $this;
    }

    /**
     * Gets prdCode
     *
     * @return \com\edel\edelconnect\models\PrdCode|null
     */
    public function getPrdCode()
    {
        return $this->container['prdCode'];
    }

    /**
     * Sets prdCode
     *
     * @param \com\edel\edelconnect\models\PrdCode|null $prdCode prdCode
     *
     * @return self
     */
    public function setPrdCode($prdCode)
    {
        $this->container['prdCode'] = $prdCode;

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


