<?php
/**
 * EQBracketTradeRequestDao
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
 * EQBracketTradeRequestDao Class Doc Comment
 *
 * @category Class
 * @package  com\edel
 * @author   Edelweiss
 * @link     https://www.edelweiss.in
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EQBracketTradeRequestDao implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelName = 'EQBracketTradeRequestDao';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'exc' => 'string',
        'sym' => 'string',
        'trnsTyp' => '\com\edel\edelconnect\models\Action',
        'qty' => 'string',
        'dur' => '\com\edel\edelconnect\models\Duration',
        'dsQty' => 'string',
        'prc' => 'string',
        'trdBsdOn' => 'string',
        'sqOffBsdOn' => 'string',
        'sqOffVal' => 'string',
        'slBsdOn' => 'string',
        'slVal' => 'string',
        'trlSl' => 'string',
        'trlSlVal' => 'string',
        'ordSrc' => 'string'
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
        'sym' => null,
        'trnsTyp' => null,
        'qty' => null,
        'dur' => null,
        'dsQty' => null,
        'prc' => null,
        'trdBsdOn' => null,
        'sqOffBsdOn' => null,
        'sqOffVal' => null,
        'slBsdOn' => null,
        'slVal' => null,
        'trlSl' => null,
        'trlSlVal' => null,
        'ordSrc' => null
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
        'sym' => 'sym',
        'trnsTyp' => 'trnsTyp',
        'qty' => 'qty',
        'dur' => 'dur',
        'dsQty' => 'dsQty',
        'prc' => 'prc',
        'trdBsdOn' => 'trdBsdOn',
        'sqOffBsdOn' => 'sqOffBsdOn',
        'sqOffVal' => 'sqOffVal',
        'slBsdOn' => 'slBsdOn',
        'slVal' => 'slVal',
        'trlSl' => 'trlSl',
        'trlSlVal' => 'trlSlVal',
        'ordSrc' => 'ordSrc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'exc' => 'setExc',
        'sym' => 'setSym',
        'trnsTyp' => 'setTrnsTyp',
        'qty' => 'setQty',
        'dur' => 'setDur',
        'dsQty' => 'setDsQty',
        'prc' => 'setPrc',
        'trdBsdOn' => 'setTrdBsdOn',
        'sqOffBsdOn' => 'setSqOffBsdOn',
        'sqOffVal' => 'setSqOffVal',
        'slBsdOn' => 'setSlBsdOn',
        'slVal' => 'setSlVal',
        'trlSl' => 'setTrlSl',
        'trlSlVal' => 'setTrlSlVal',
        'ordSrc' => 'setOrdSrc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'exc' => 'getExc',
        'sym' => 'getSym',
        'trnsTyp' => 'getTrnsTyp',
        'qty' => 'getQty',
        'dur' => 'getDur',
        'dsQty' => 'getDsQty',
        'prc' => 'getPrc',
        'trdBsdOn' => 'getTrdBsdOn',
        'sqOffBsdOn' => 'getSqOffBsdOn',
        'sqOffVal' => 'getSqOffVal',
        'slBsdOn' => 'getSlBsdOn',
        'slVal' => 'getSlVal',
        'trlSl' => 'getTrlSl',
        'trlSlVal' => 'getTrlSlVal',
        'ordSrc' => 'getOrdSrc'
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

    const TRD_BSD_ON_LTP = 'LTP';
    const TRD_BSD_ON_ATP = 'ATP';
    const SQ_OFF_BSD_ON_ABSOLUTE = 'Absolute';
    const SQ_OFF_BSD_ON_TICKS = 'Ticks';
    const SL_BSD_ON_ABSOLUTE = 'Absolute';
    const SL_BSD_ON_TICKS = 'Ticks';
    const TRL_SL_Y = 'Y';
    const TRL_SL_N = 'N';
    const ORD_SRC_EMT = 'EMT';
    const ORD_SRC_WEB = 'WEB';
    const ORD_SRC_XMLAPI = 'XMLAPI';
    const ORD_SRC_TOC = 'TOC';
    const ORD_SRC_TX3 = 'TX3';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTrdBsdOnAllowableValues()
    {
        return [
            self::TRD_BSD_ON_LTP,
            self::TRD_BSD_ON_ATP,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSqOffBsdOnAllowableValues()
    {
        return [
            self::SQ_OFF_BSD_ON_ABSOLUTE,
            self::SQ_OFF_BSD_ON_TICKS,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSlBsdOnAllowableValues()
    {
        return [
            self::SL_BSD_ON_ABSOLUTE,
            self::SL_BSD_ON_TICKS,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTrlSlAllowableValues()
    {
        return [
            self::TRL_SL_Y,
            self::TRL_SL_N,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrdSrcAllowableValues()
    {
        return [
            self::ORD_SRC_EMT,
            self::ORD_SRC_WEB,
            self::ORD_SRC_XMLAPI,
            self::ORD_SRC_TOC,
            self::ORD_SRC_TX3,
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
        $this->container['sym'] = $data['sym'] ?? null;
        $this->container['trnsTyp'] = $data['trnsTyp'] ?? null;
        $this->container['qty'] = $data['qty'] ?? null;
        $this->container['dur'] = $data['dur'] ?? null;
        $this->container['dsQty'] = $data['dsQty'] ?? null;
        $this->container['prc'] = $data['prc'] ?? null;
        $this->container['trdBsdOn'] = $data['trdBsdOn'] ?? null;
        $this->container['sqOffBsdOn'] = $data['sqOffBsdOn'] ?? null;
        $this->container['sqOffVal'] = $data['sqOffVal'] ?? null;
        $this->container['slBsdOn'] = $data['slBsdOn'] ?? null;
        $this->container['slVal'] = $data['slVal'] ?? null;
        $this->container['trlSl'] = $data['trlSl'] ?? null;
        $this->container['trlSlVal'] = $data['trlSlVal'] ?? null;
        $this->container['ordSrc'] = $data['ordSrc'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTrdBsdOnAllowableValues();
        if (!is_null($this->container['trdBsdOn']) && !in_array($this->container['trdBsdOn'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'trdBsdOn', must be one of '%s'",
                $this->container['trdBsdOn'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSqOffBsdOnAllowableValues();
        if (!is_null($this->container['sqOffBsdOn']) && !in_array($this->container['sqOffBsdOn'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'sqOffBsdOn', must be one of '%s'",
                $this->container['sqOffBsdOn'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSlBsdOnAllowableValues();
        if (!is_null($this->container['slBsdOn']) && !in_array($this->container['slBsdOn'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'slBsdOn', must be one of '%s'",
                $this->container['slBsdOn'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTrlSlAllowableValues();
        if (!is_null($this->container['trlSl']) && !in_array($this->container['trlSl'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'trlSl', must be one of '%s'",
                $this->container['trlSl'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getOrdSrcAllowableValues();
        if (!is_null($this->container['ordSrc']) && !in_array($this->container['ordSrc'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'ordSrc', must be one of '%s'",
                $this->container['ordSrc'],
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
     * @param string|null $sym Symbol
     *
     * @return self
     */
    public function setSym($sym)
    {
        $this->container['sym'] = $sym;

        return $this;
    }

    /**
     * Gets trnsTyp
     *
     * @return \com\edel\edelconnect\models\Action|null
     */
    public function getTrnsTyp()
    {
        return $this->container['trnsTyp'];
    }

    /**
     * Sets trnsTyp
     *
     * @param \com\edel\edelconnect\models\Action|null $trnsTyp trnsTyp
     *
     * @return self
     */
    public function setTrnsTyp($trnsTyp)
    {
        $this->container['trnsTyp'] = $trnsTyp;

        return $this;
    }

    /**
     * Gets qty
     *
     * @return string|null
     */
    public function getQty()
    {
        return $this->container['qty'];
    }

    /**
     * Sets qty
     *
     * @param string|null $qty Quantity of the scrip to transact
     *
     * @return self
     */
    public function setQty($qty)
    {
        $this->container['qty'] = $qty;

        return $this;
    }

    /**
     * Gets dur
     *
     * @return \com\edel\edelconnect\models\Duration|null
     */
    public function getDur()
    {
        return $this->container['dur'];
    }

    /**
     * Sets dur
     *
     * @param \com\edel\edelconnect\models\Duration|null $dur dur
     *
     * @return self
     */
    public function setDur($dur)
    {
        $this->container['dur'] = $dur;

        return $this;
    }

    /**
     * Gets dsQty
     *
     * @return string|null
     */
    public function getDsQty()
    {
        return $this->container['dsQty'];
    }

    /**
     * Sets dsQty
     *
     * @param string|null $dsQty Quantity to be disclosed publicly while order placement (default 0)
     *
     * @return self
     */
    public function setDsQty($dsQty)
    {
        $this->container['dsQty'] = $dsQty;

        return $this;
    }

    /**
     * Gets prc
     *
     * @return string|null
     */
    public function getPrc()
    {
        return $this->container['prc'];
    }

    /**
     * Sets prc
     *
     * @param string|null $prc Price
     *
     * @return self
     */
    public function setPrc($prc)
    {
        $this->container['prc'] = $prc;

        return $this;
    }

    /**
     * Gets trdBsdOn
     *
     * @return string|null
     */
    public function getTrdBsdOn()
    {
        return $this->container['trdBsdOn'];
    }

    /**
     * Sets trdBsdOn
     *
     * @param string|null $trdBsdOn Trade Based On, (ATP is optional)
     *
     * @return self
     */
    public function setTrdBsdOn($trdBsdOn)
    {
        $allowedValues = $this->getTrdBsdOnAllowableValues();
        if (!is_null($trdBsdOn) && !in_array($trdBsdOn, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'trdBsdOn', must be one of '%s'",
                    $trdBsdOn,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['trdBsdOn'] = $trdBsdOn;

        return $this;
    }

    /**
     * Gets sqOffBsdOn
     *
     * @return string|null
     */
    public function getSqOffBsdOn()
    {
        return $this->container['sqOffBsdOn'];
    }

    /**
     * Sets sqOffBsdOn
     *
     * @param string|null $sqOffBsdOn Square Off Based On, (Ticks is optional)
     *
     * @return self
     */
    public function setSqOffBsdOn($sqOffBsdOn)
    {
        $allowedValues = $this->getSqOffBsdOnAllowableValues();
        if (!is_null($sqOffBsdOn) && !in_array($sqOffBsdOn, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'sqOffBsdOn', must be one of '%s'",
                    $sqOffBsdOn,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sqOffBsdOn'] = $sqOffBsdOn;

        return $this;
    }

    /**
     * Gets sqOffVal
     *
     * @return string|null
     */
    public function getSqOffVal()
    {
        return $this->container['sqOffVal'];
    }

    /**
     * Sets sqOffVal
     *
     * @param string|null $sqOffVal Square Off Value
     *
     * @return self
     */
    public function setSqOffVal($sqOffVal)
    {
        $this->container['sqOffVal'] = $sqOffVal;

        return $this;
    }

    /**
     * Gets slBsdOn
     *
     * @return string|null
     */
    public function getSlBsdOn()
    {
        return $this->container['slBsdOn'];
    }

    /**
     * Sets slBsdOn
     *
     * @param string|null $slBsdOn Stop Loss Based On Absolute/Ticks ,(Ticks is optional)
     *
     * @return self
     */
    public function setSlBsdOn($slBsdOn)
    {
        $allowedValues = $this->getSlBsdOnAllowableValues();
        if (!is_null($slBsdOn) && !in_array($slBsdOn, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'slBsdOn', must be one of '%s'",
                    $slBsdOn,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['slBsdOn'] = $slBsdOn;

        return $this;
    }

    /**
     * Gets slVal
     *
     * @return string|null
     */
    public function getSlVal()
    {
        return $this->container['slVal'];
    }

    /**
     * Sets slVal
     *
     * @param string|null $slVal Stop Loss Value
     *
     * @return self
     */
    public function setSlVal($slVal)
    {
        $this->container['slVal'] = $slVal;

        return $this;
    }

    /**
     * Gets trlSl
     *
     * @return string|null
     */
    public function getTrlSl()
    {
        return $this->container['trlSl'];
    }

    /**
     * Sets trlSl
     *
     * @param string|null $trlSl Trailing Stop Loss Flag, Y/N (default Y)
     *
     * @return self
     */
    public function setTrlSl($trlSl)
    {
        $allowedValues = $this->getTrlSlAllowableValues();
        if (!is_null($trlSl) && !in_array($trlSl, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'trlSl', must be one of '%s'",
                    $trlSl,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['trlSl'] = $trlSl;

        return $this;
    }

    /**
     * Gets trlSlVal
     *
     * @return string|null
     */
    public function getTrlSlVal()
    {
        return $this->container['trlSlVal'];
    }

    /**
     * Sets trlSlVal
     *
     * @param string|null $trlSlVal Trailing Stop Loss Value, Number (default 1)
     *
     * @return self
     */
    public function setTrlSlVal($trlSlVal)
    {
        $this->container['trlSlVal'] = $trlSlVal;

        return $this;
    }

    /**
     * Gets ordSrc
     *
     * @return string|null
     */
    public function getOrdSrc()
    {
        return $this->container['ordSrc'];
    }

    /**
     * Sets ordSrc
     *
     * @param string|null $ordSrc Location Indicator
     *
     * @return self
     */
    public function setOrdSrc($ordSrc)
    {
        $allowedValues = $this->getOrdSrcAllowableValues();
        if (!is_null($ordSrc) && !in_array($ordSrc, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'ordSrc', must be one of '%s'",
                    $ordSrc,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['ordSrc'] = $ordSrc;

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


