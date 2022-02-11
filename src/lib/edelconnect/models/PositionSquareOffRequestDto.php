<?php
/**
 * PositionSquareOffRequestDto
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
 * PositionSquareOffRequestDto Class Doc Comment
 *
 * @category Class
 * @package  com\edel
 * @author   Edelweiss
 * @link     https://www.edelweiss.in
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PositionSquareOffRequestDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelName = 'PositionSquareOffRequestDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'trdSym' => 'string',
        'exc' => 'string',
        'action' => '\com\edel\edelconnect\models\Action',
        'dur' => '\com\edel\edelconnect\models\Duration',
        'flQty' => 'string',
        'ordTyp' => '\com\edel\edelconnect\models\OrderType',
        'qty' => 'string',
        'dscQty' => 'string',
        'sym' => 'string',
        'mktPro' => 'string',
        'lmPrc' => 'string',
        'trgPrc' => 'string',
        'prdCode' => '\com\edel\edelconnect\models\PrdCode',
        'dtDays' => 'string',
        'posSqr' => 'string',
        'minQty' => 'string',
        'ordSrc' => 'string',
        'vnCode' => 'string',
        'rmk' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'trdSym' => null,
        'exc' => null,
        'action' => null,
        'dur' => null,
        'flQty' => null,
        'ordTyp' => null,
        'qty' => null,
        'dscQty' => null,
        'sym' => null,
        'mktPro' => null,
        'lmPrc' => null,
        'trgPrc' => null,
        'prdCode' => null,
        'dtDays' => null,
        'posSqr' => null,
        'minQty' => null,
        'ordSrc' => null,
        'vnCode' => null,
        'rmk' => null
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
        'trdSym' => 'trdSym',
        'exc' => 'exc',
        'action' => 'action',
        'dur' => 'dur',
        'flQty' => 'flQty',
        'ordTyp' => 'ordTyp',
        'qty' => 'qty',
        'dscQty' => 'dscQty',
        'sym' => 'sym',
        'mktPro' => 'mktPro',
        'lmPrc' => 'lmPrc',
        'trgPrc' => 'trgPrc',
        'prdCode' => 'prdCode',
        'dtDays' => 'dtDays',
        'posSqr' => 'posSqr',
        'minQty' => 'minQty',
        'ordSrc' => 'ordSrc',
        'vnCode' => 'vnCode',
        'rmk' => 'rmk'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'trdSym' => 'setTrdSym',
        'exc' => 'setExc',
        'action' => 'setAction',
        'dur' => 'setDur',
        'flQty' => 'setFlQty',
        'ordTyp' => 'setOrdTyp',
        'qty' => 'setQty',
        'dscQty' => 'setDscQty',
        'sym' => 'setSym',
        'mktPro' => 'setMktPro',
        'lmPrc' => 'setLmPrc',
        'trgPrc' => 'setTrgPrc',
        'prdCode' => 'setPrdCode',
        'dtDays' => 'setDtDays',
        'posSqr' => 'setPosSqr',
        'minQty' => 'setMinQty',
        'ordSrc' => 'setOrdSrc',
        'vnCode' => 'setVnCode',
        'rmk' => 'setRmk'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'trdSym' => 'getTrdSym',
        'exc' => 'getExc',
        'action' => 'getAction',
        'dur' => 'getDur',
        'flQty' => 'getFlQty',
        'ordTyp' => 'getOrdTyp',
        'qty' => 'getQty',
        'dscQty' => 'getDscQty',
        'sym' => 'getSym',
        'mktPro' => 'getMktPro',
        'lmPrc' => 'getLmPrc',
        'trgPrc' => 'getTrgPrc',
        'prdCode' => 'getPrdCode',
        'dtDays' => 'getDtDays',
        'posSqr' => 'getPosSqr',
        'minQty' => 'getMinQty',
        'ordSrc' => 'getOrdSrc',
        'vnCode' => 'getVnCode',
        'rmk' => 'getRmk'
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

    const ORD_SRC_MOB = 'MOB';
    const ORD_SRC_WEB = 'WEB';
    const ORD_SRC_XMLAPI = 'XMLAPI';
    const ORD_SRC_TOC = 'TOC';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrdSrcAllowableValues()
    {
        return [
            self::ORD_SRC_MOB,
            self::ORD_SRC_WEB,
            self::ORD_SRC_XMLAPI,
            self::ORD_SRC_TOC,
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
        $this->container['trdSym'] = $data['trdSym'] ?? null;
        $this->container['exc'] = $data['exc'] ?? null;
        $this->container['action'] = $data['action'] ?? null;
        $this->container['dur'] = $data['dur'] ?? null;
        $this->container['flQty'] = $data['flQty'] ?? null;
        $this->container['ordTyp'] = $data['ordTyp'] ?? null;
        $this->container['qty'] = $data['qty'] ?? null;
        $this->container['dscQty'] = $data['dscQty'] ?? null;
        $this->container['sym'] = $data['sym'] ?? null;
        $this->container['mktPro'] = $data['mktPro'] ?? null;
        $this->container['lmPrc'] = $data['lmPrc'] ?? null;
        $this->container['trgPrc'] = $data['trgPrc'] ?? null;
        $this->container['prdCode'] = $data['prdCode'] ?? null;
        $this->container['dtDays'] = $data['dtDays'] ?? null;
        $this->container['posSqr'] = $data['posSqr'] ?? null;
        $this->container['minQty'] = $data['minQty'] ?? null;
        $this->container['ordSrc'] = $data['ordSrc'] ?? null;
        $this->container['vnCode'] = $data['vnCode'] ?? null;
        $this->container['rmk'] = $data['rmk'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * @param string|null $trdSym Trading Symbol
     *
     * @return self
     */
    public function setTrdSym($trdSym)
    {
        $this->container['trdSym'] = $trdSym;

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
     * @param string|null $exc Exchange
     *
     * @return self
     */
    public function setExc($exc)
    {
        $this->container['exc'] = $exc;

        return $this;
    }

    /**
     * Gets action
     *
     * @return \com\edel\edelconnect\models\Action|null
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param \com\edel\edelconnect\models\Action|null $action action
     *
     * @return self
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

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
     * Gets flQty
     *
     * @return string|null
     */
    public function getFlQty()
    {
        return $this->container['flQty'];
    }

    /**
     * Sets flQty
     *
     * @param string|null $flQty Filled Quantity or filled shares.It is mandatory for order modification
     *
     * @return self
     */
    public function setFlQty($flQty)
    {
        $this->container['flQty'] = $flQty;

        return $this;
    }

    /**
     * Gets ordTyp
     *
     * @return \com\edel\edelconnect\models\OrderType|null
     */
    public function getOrdTyp()
    {
        return $this->container['ordTyp'];
    }

    /**
     * Sets ordTyp
     *
     * @param \com\edel\edelconnect\models\OrderType|null $ordTyp ordTyp
     *
     * @return self
     */
    public function setOrdTyp($ordTyp)
    {
        $this->container['ordTyp'] = $ordTyp;

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
     * @param string|null $qty Quantity.<Quantity in multiple of Lot size/Board lot qty>
     *
     * @return self
     */
    public function setQty($qty)
    {
        $this->container['qty'] = $qty;

        return $this;
    }

    /**
     * Gets dscQty
     *
     * @return string|null
     */
    public function getDscQty()
    {
        return $this->container['dscQty'];
    }

    /**
     * Sets dscQty
     *
     * @param string|null $dscQty Disclosed Quantity.<Quantity in multiple of Lot size/Board lot qty>
     *
     * @return self
     */
    public function setDscQty($dscQty)
    {
        $this->container['dscQty'] = $dscQty;

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
     * @param string|null $sym Symbol of the contract that is being traded.SYMBOL_EXCHANGE From MW
     *
     * @return self
     */
    public function setSym($sym)
    {
        $this->container['sym'] = $sym;

        return $this;
    }

    /**
     * Gets mktPro
     *
     * @return string|null
     */
    public function getMktPro()
    {
        return $this->container['mktPro'];
    }

    /**
     * Sets mktPro
     *
     * @param string|null $mktPro Market Protection
     *
     * @return self
     */
    public function setMktPro($mktPro)
    {
        $this->container['mktPro'] = $mktPro;

        return $this;
    }

    /**
     * Gets lmPrc
     *
     * @return string|null
     */
    public function getLmPrc()
    {
        return $this->container['lmPrc'];
    }

    /**
     * Sets lmPrc
     *
     * @param string|null $lmPrc Limit Price.<Price in multiple of tick size>
     *
     * @return self
     */
    public function setLmPrc($lmPrc)
    {
        $this->container['lmPrc'] = $lmPrc;

        return $this;
    }

    /**
     * Gets trgPrc
     *
     * @return string|null
     */
    public function getTrgPrc()
    {
        return $this->container['trgPrc'];
    }

    /**
     * Sets trgPrc
     *
     * @param string|null $trgPrc Trigger Price.<Price in multiple of tick size>
     *
     * @return self
     */
    public function setTrgPrc($trgPrc)
    {
        $this->container['trgPrc'] = $trgPrc;

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
     * Gets dtDays
     *
     * @return string|null
     */
    public function getDtDays()
    {
        return $this->container['dtDays'];
    }

    /**
     * Sets dtDays
     *
     * @param string|null $dtDays Date Days
     *
     * @return self
     */
    public function setDtDays($dtDays)
    {
        $this->container['dtDays'] = $dtDays;

        return $this;
    }

    /**
     * Gets posSqr
     *
     * @return string|null
     */
    public function getPosSqr()
    {
        return $this->container['posSqr'];
    }

    /**
     * Sets posSqr
     *
     * @param string|null $posSqr Position Square Flag
     *
     * @return self
     */
    public function setPosSqr($posSqr)
    {
        $this->container['posSqr'] = $posSqr;

        return $this;
    }

    /**
     * Gets minQty
     *
     * @return string|null
     */
    public function getMinQty()
    {
        return $this->container['minQty'];
    }

    /**
     * Sets minQty
     *
     * @param string|null $minQty Minimum Quantity
     *
     * @return self
     */
    public function setMinQty($minQty)
    {
        $this->container['minQty'] = $minQty;

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
     * Gets vnCode
     *
     * @return string|null
     */
    public function getVnCode()
    {
        return $this->container['vnCode'];
    }

    /**
     * Sets vnCode
     *
     * @param string|null $vnCode Vendor Code
     *
     * @return self
     */
    public function setVnCode($vnCode)
    {
        $this->container['vnCode'] = $vnCode;

        return $this;
    }

    /**
     * Gets rmk
     *
     * @return string|null
     */
    public function getRmk()
    {
        return $this->container['rmk'];
    }

    /**
     * Sets rmk
     *
     * @param string|null $rmk Remarks
     *
     * @return self
     */
    public function setRmk($rmk)
    {
        $this->container['rmk'] = $rmk;

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


