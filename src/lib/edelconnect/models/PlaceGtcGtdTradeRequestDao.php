<?php
/**
 * PlaceGtcGtdTradeRequestDao
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
 * PlaceGtcGtdTradeRequestDao Class Doc Comment
 *
 * @category Class
 * @package  com\edel
 * @author   Edelweiss
 * @link     https://www.edelweiss.in
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PlaceGtcGtdTradeRequestDao implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelName = 'PlaceGtcGtdTradeRequestDao';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'trdSym' => 'string',
        'exc' => 'string',
        'action' => '\com\edel\edelconnect\models\Action',
        'dur' => '\com\edel\edelconnect\models\GTCGTD',
        'ordTyp' => '\com\edel\edelconnect\models\OrderType',
        'qty' => 'string',
        'lmPrc' => 'string',
        'prdCode' => '\com\edel\edelconnect\models\PrdCode',
        'dtDays' => 'string',
        'ordSrc' => 'string',
        'vnCode' => 'string',
        'oprtn' => 'string',
        'srcExp' => 'string',
        'tgtId' => 'string',
        'brnchNm' => 'string',
        'brk' => 'string',
        'amo' => 'bool'
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
        'ordTyp' => null,
        'qty' => null,
        'lmPrc' => null,
        'prdCode' => null,
        'dtDays' => null,
        'ordSrc' => null,
        'vnCode' => null,
        'oprtn' => null,
        'srcExp' => null,
        'tgtId' => null,
        'brnchNm' => null,
        'brk' => null,
        'amo' => null
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
        'ordTyp' => 'ordTyp',
        'qty' => 'qty',
        'lmPrc' => 'lmPrc',
        'prdCode' => 'prdCode',
        'dtDays' => 'dtDays',
        'ordSrc' => 'ordSrc',
        'vnCode' => 'vnCode',
        'oprtn' => 'oprtn',
        'srcExp' => 'srcExp',
        'tgtId' => 'tgtId',
        'brnchNm' => 'brnchNm',
        'brk' => 'brk',
        'amo' => 'amo'
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
        'ordTyp' => 'setOrdTyp',
        'qty' => 'setQty',
        'lmPrc' => 'setLmPrc',
        'prdCode' => 'setPrdCode',
        'dtDays' => 'setDtDays',
        'ordSrc' => 'setOrdSrc',
        'vnCode' => 'setVnCode',
        'oprtn' => 'setOprtn',
        'srcExp' => 'setSrcExp',
        'tgtId' => 'setTgtId',
        'brnchNm' => 'setBrnchNm',
        'brk' => 'setBrk',
        'amo' => 'setAmo'
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
        'ordTyp' => 'getOrdTyp',
        'qty' => 'getQty',
        'lmPrc' => 'getLmPrc',
        'prdCode' => 'getPrdCode',
        'dtDays' => 'getDtDays',
        'ordSrc' => 'getOrdSrc',
        'vnCode' => 'getVnCode',
        'oprtn' => 'getOprtn',
        'srcExp' => 'getSrcExp',
        'tgtId' => 'getTgtId',
        'brnchNm' => 'getBrnchNm',
        'brk' => 'getBrk',
        'amo' => 'getAmo'
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
    const VN_CODE_NA = 'NA';
    const OPRTN_LESS_THAN_OR_EQUAL_TO = '<=';

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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVnCodeAllowableValues()
    {
        return [
            self::VN_CODE_NA,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOprtnAllowableValues()
    {
        return [
            self::OPRTN_LESS_THAN_OR_EQUAL_TO,
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
        $this->container['ordTyp'] = $data['ordTyp'] ?? null;
        $this->container['qty'] = $data['qty'] ?? null;
        $this->container['lmPrc'] = $data['lmPrc'] ?? null;
        $this->container['prdCode'] = $data['prdCode'] ?? null;
        $this->container['dtDays'] = $data['dtDays'] ?? null;
        $this->container['ordSrc'] = $data['ordSrc'] ?? null;
        $this->container['vnCode'] = $data['vnCode'] ?? null;
        $this->container['oprtn'] = $data['oprtn'] ?? null;
        $this->container['srcExp'] = $data['srcExp'] ?? null;
        $this->container['tgtId'] = $data['tgtId'] ?? null;
        $this->container['brnchNm'] = $data['brnchNm'] ?? null;
        $this->container['brk'] = $data['brk'] ?? null;
        $this->container['amo'] = $data['amo'] ?? false;
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

        $allowedValues = $this->getVnCodeAllowableValues();
        if (!is_null($this->container['vnCode']) && !in_array($this->container['vnCode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'vnCode', must be one of '%s'",
                $this->container['vnCode'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getOprtnAllowableValues();
        if (!is_null($this->container['oprtn']) && !in_array($this->container['oprtn'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'oprtn', must be one of '%s'",
                $this->container['oprtn'],
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
     * @param string|null $trdSym Trading Symbol of the Scrip, to be obtained from Contract file downloaded
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
     * @return \com\edel\edelconnect\models\GTCGTD|null
     */
    public function getDur()
    {
        return $this->container['dur'];
    }

    /**
     * Sets dur
     *
     * @param \com\edel\edelconnect\models\GTCGTD|null $dur dur
     *
     * @return self
     */
    public function setDur($dur)
    {
        $this->container['dur'] = $dur;

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
     * @param string|null $qty Quantity of the scrip to transact in multiple of Lot size/Board lot qty
     *
     * @return self
     */
    public function setQty($qty)
    {
        $this->container['qty'] = $qty;

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
     * @param string|null $lmPrc Limit price of scrip in multiple of tick size
     *
     * @return self
     */
    public function setLmPrc($lmPrc)
    {
        $this->container['lmPrc'] = $lmPrc;

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
     * @param string|null $dtDays Date for Orders in dd-MM-yyyy format
     *
     * @return self
     */
    public function setDtDays($dtDays)
    {
        $this->container['dtDays'] = $dtDays;

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
        $allowedValues = $this->getVnCodeAllowableValues();
        if (!is_null($vnCode) && !in_array($vnCode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'vnCode', must be one of '%s'",
                    $vnCode,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['vnCode'] = $vnCode;

        return $this;
    }

    /**
     * Gets oprtn
     *
     * @return string|null
     */
    public function getOprtn()
    {
        return $this->container['oprtn'];
    }

    /**
     * Sets oprtn
     *
     * @param string|null $oprtn Operation
     *
     * @return self
     */
    public function setOprtn($oprtn)
    {
        $allowedValues = $this->getOprtnAllowableValues();
        if (!is_null($oprtn) && !in_array($oprtn, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'oprtn', must be one of '%s'",
                    $oprtn,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['oprtn'] = $oprtn;

        return $this;
    }

    /**
     * Gets srcExp
     *
     * @return string|null
     */
    public function getSrcExp()
    {
        return $this->container['srcExp'];
    }

    /**
     * Sets srcExp
     *
     * @param string|null $srcExp Source Expiry
     *
     * @return self
     */
    public function setSrcExp($srcExp)
    {
        $this->container['srcExp'] = $srcExp;

        return $this;
    }

    /**
     * Gets tgtId
     *
     * @return string|null
     */
    public function getTgtId()
    {
        return $this->container['tgtId'];
    }

    /**
     * Sets tgtId
     *
     * @param string|null $tgtId Target ID
     *
     * @return self
     */
    public function setTgtId($tgtId)
    {
        $this->container['tgtId'] = $tgtId;

        return $this;
    }

    /**
     * Gets brnchNm
     *
     * @return string|null
     */
    public function getBrnchNm()
    {
        return $this->container['brnchNm'];
    }

    /**
     * Sets brnchNm
     *
     * @param string|null $brnchNm Branch Name
     *
     * @return self
     */
    public function setBrnchNm($brnchNm)
    {
        $this->container['brnchNm'] = $brnchNm;

        return $this;
    }

    /**
     * Gets brk
     *
     * @return string|null
     */
    public function getBrk()
    {
        return $this->container['brk'];
    }

    /**
     * Sets brk
     *
     * @param string|null $brk Broker
     *
     * @return self
     */
    public function setBrk($brk)
    {
        $this->container['brk'] = $brk;

        return $this;
    }

    /**
     * Gets amo
     *
     * @return bool|null
     */
    public function getAmo()
    {
        return $this->container['amo'];
    }

    /**
     * Sets amo
     *
     * @param bool|null $amo After Market Order
     *
     * @return self
     */
    public function setAmo($amo)
    {
        $this->container['amo'] = $amo;

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


