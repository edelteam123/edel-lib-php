<?php
/**
 * TradeRequest
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
 * TradeRequest Class Doc Comment
 *
 * @category Class
 * @package  com\edel
 * @author   Edelweiss
 * @link     https://www.edelweiss.in
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TradeRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelName = 'TradeRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ordTyp' => '\com\edel\edelconnect\models\OrderType',
        'exc' => '\com\edel\edelconnect\models\Exchange',
        'nstOID' => 'string',
        'dur' => 'string',
        'vlDt' => 'string',
        'sym' => 'string',
        'lmPrc' => 'string',
        'action' => '\com\edel\edelconnect\models\Action',
        'prdCode' => '\com\edel\edelconnect\models\PrdCode',
        'qty' => 'string',
        'trdSym' => 'string',
        'trgPrc' => 'string',
        'dsQty' => 'string',
        'rmk' => 'string',
        'locInd' => 'string',
        'ordSrc' => 'string',
        'vnCode' => 'string',
        'flQty' => 'string',
        'nstReqID' => 'string',
        'flID' => 'string',
        'prdCodeCh' => '\com\edel\edelconnect\models\PrdCode'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ordTyp' => null,
        'exc' => null,
        'nstOID' => null,
        'dur' => null,
        'vlDt' => null,
        'sym' => null,
        'lmPrc' => null,
        'action' => null,
        'prdCode' => null,
        'qty' => null,
        'trdSym' => null,
        'trgPrc' => null,
        'dsQty' => null,
        'rmk' => null,
        'locInd' => null,
        'ordSrc' => null,
        'vnCode' => null,
        'flQty' => null,
        'nstReqID' => null,
        'flID' => null,
        'prdCodeCh' => null
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
        'ordTyp' => 'ordTyp',
        'exc' => 'exc',
        'nstOID' => 'nstOID',
        'dur' => 'dur',
        'vlDt' => 'vlDt',
        'sym' => 'sym',
        'lmPrc' => 'lmPrc',
        'action' => 'action',
        'prdCode' => 'prdCode',
        'qty' => 'qty',
        'trdSym' => 'trdSym',
        'trgPrc' => 'trgPrc',
        'dsQty' => 'dsQty',
        'rmk' => 'rmk',
        'locInd' => 'locInd',
        'ordSrc' => 'ordSrc',
        'vnCode' => 'vnCode',
        'flQty' => 'flQty',
        'nstReqID' => 'nstReqID',
        'flID' => 'flID',
        'prdCodeCh' => 'prdCodeCh'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ordTyp' => 'setOrdTyp',
        'exc' => 'setExc',
        'nstOID' => 'setNstOID',
        'dur' => 'setDur',
        'vlDt' => 'setVlDt',
        'sym' => 'setSym',
        'lmPrc' => 'setLmPrc',
        'action' => 'setAction',
        'prdCode' => 'setPrdCode',
        'qty' => 'setQty',
        'trdSym' => 'setTrdSym',
        'trgPrc' => 'setTrgPrc',
        'dsQty' => 'setDsQty',
        'rmk' => 'setRmk',
        'locInd' => 'setLocInd',
        'ordSrc' => 'setOrdSrc',
        'vnCode' => 'setVnCode',
        'flQty' => 'setFlQty',
        'nstReqID' => 'setNstReqID',
        'flID' => 'setFlID',
        'prdCodeCh' => 'setPrdCodeCh'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ordTyp' => 'getOrdTyp',
        'exc' => 'getExc',
        'nstOID' => 'getNstOID',
        'dur' => 'getDur',
        'vlDt' => 'getVlDt',
        'sym' => 'getSym',
        'lmPrc' => 'getLmPrc',
        'action' => 'getAction',
        'prdCode' => 'getPrdCode',
        'qty' => 'getQty',
        'trdSym' => 'getTrdSym',
        'trgPrc' => 'getTrgPrc',
        'dsQty' => 'getDsQty',
        'rmk' => 'getRmk',
        'locInd' => 'getLocInd',
        'ordSrc' => 'getOrdSrc',
        'vnCode' => 'getVnCode',
        'flQty' => 'getFlQty',
        'nstReqID' => 'getNstReqID',
        'flID' => 'getFlID',
        'prdCodeCh' => 'getPrdCodeCh'
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

    const DUR_DAY = 'DAY';
    const DUR_IOC = 'IOC';
    const DUR_GTC = 'GTC';
    const DUR_GTD = 'GTD';
    const DUR_GT_DYS = 'GTDys';
    const DUR_EOS = 'EOS';
    const LOC_IND_MOB = 'MOB';
    const LOC_IND_WEB = 'WEB';
    const LOC_IND_TOC = 'TOC';
    const ORD_SRC_MOB = 'MOB';
    const ORD_SRC_WEB = 'WEB';
    const ORD_SRC_XMLAPI = 'XMLAPI';
    const ORD_SRC_TOC = 'TOC';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDurAllowableValues()
    {
        return [
            self::DUR_DAY,
            self::DUR_IOC,
            self::DUR_GTC,
            self::DUR_GTD,
            self::DUR_GT_DYS,
            self::DUR_EOS,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLocIndAllowableValues()
    {
        return [
            self::LOC_IND_MOB,
            self::LOC_IND_WEB,
            self::LOC_IND_TOC,
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
        $this->container['ordTyp'] = $data['ordTyp'] ?? null;
        $this->container['exc'] = $data['exc'] ?? null;
        $this->container['nstOID'] = $data['nstOID'] ?? null;
        $this->container['dur'] = $data['dur'] ?? null;
        $this->container['vlDt'] = $data['vlDt'] ?? null;
        $this->container['sym'] = $data['sym'] ?? null;
        $this->container['lmPrc'] = $data['lmPrc'] ?? null;
        $this->container['action'] = $data['action'] ?? null;
        $this->container['prdCode'] = $data['prdCode'] ?? null;
        $this->container['qty'] = $data['qty'] ?? null;
        $this->container['trdSym'] = $data['trdSym'] ?? null;
        $this->container['trgPrc'] = $data['trgPrc'] ?? null;
        $this->container['dsQty'] = $data['dsQty'] ?? null;
        $this->container['rmk'] = $data['rmk'] ?? null;
        $this->container['locInd'] = $data['locInd'] ?? null;
        $this->container['ordSrc'] = $data['ordSrc'] ?? null;
        $this->container['vnCode'] = $data['vnCode'] ?? null;
        $this->container['flQty'] = $data['flQty'] ?? null;
        $this->container['nstReqID'] = $data['nstReqID'] ?? null;
        $this->container['flID'] = $data['flID'] ?? null;
        $this->container['prdCodeCh'] = $data['prdCodeCh'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['ordTyp'] === null) {
            $invalidProperties[] = "'ordTyp' can't be null";
        }
        if ($this->container['exc'] === null) {
            $invalidProperties[] = "'exc' can't be null";
        }
        if ($this->container['nstOID'] === null) {
            $invalidProperties[] = "'nstOID' can't be null";
        }
        $allowedValues = $this->getDurAllowableValues();
        if (!is_null($this->container['dur']) && !in_array($this->container['dur'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'dur', must be one of '%s'",
                $this->container['dur'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLocIndAllowableValues();
        if (!is_null($this->container['locInd']) && !in_array($this->container['locInd'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'locInd', must be one of '%s'",
                $this->container['locInd'],
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
     * Gets exc
     *
     * @return \com\edel\edelconnect\models\Exchange
     */
    public function getExc()
    {
        return $this->container['exc'];
    }

    /**
     * Sets exc
     *
     * @param \com\edel\edelconnect\models\Exchange $exc exc
     *
     * @return self
     */
    public function setExc($exc)
    {
        $this->container['exc'] = $exc;

        return $this;
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
     * @param string $nstOID Nest Order ID.Order number received from Order book response. It is mandatory for modifying/cancelling an order
     *
     * @return self
     */
    public function setNstOID($nstOID)
    {
        $this->container['nstOID'] = $nstOID;

        return $this;
    }

    /**
     * Gets dur
     *
     * @return string|null
     */
    public function getDur()
    {
        return $this->container['dur'];
    }

    /**
     * Sets dur
     *
     * @param string|null $dur Order duration / Retention
     *
     * @return self
     */
    public function setDur($dur)
    {
        $allowedValues = $this->getDurAllowableValues();
        if (!is_null($dur) && !in_array($dur, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'dur', must be one of '%s'",
                    $dur,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['dur'] = $dur;

        return $this;
    }

    /**
     * Gets vlDt
     *
     * @return string|null
     */
    public function getVlDt()
    {
        return $this->container['vlDt'];
    }

    /**
     * Sets vlDt
     *
     * @param string|null $vlDt Validity Date of order (DD-MM-YYYY)
     *
     * @return self
     */
    public function setVlDt($vlDt)
    {
        $this->container['vlDt'] = $vlDt;

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
     * @param string|null $sym Symbol of the contract that is being traded (SYMBOL_EXCHANGE From MW)
     *
     * @return self
     */
    public function setSym($sym)
    {
        $this->container['sym'] = $sym;

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
     * @param string|null $lmPrc Limit Price(<Price in multiple of tick size>)
     *
     * @return self
     */
    public function setLmPrc($lmPrc)
    {
        $this->container['lmPrc'] = $lmPrc;

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
     * @param string|null $qty Quantity (<Quantity in multiple of Lot size/Board lot qty>)
     *
     * @return self
     */
    public function setQty($qty)
    {
        $this->container['qty'] = $qty;

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
     * @param string|null $trdSym Trading of the contract that is being traded (TRADINGSYMBOL From MW)
     *
     * @return self
     */
    public function setTrdSym($trdSym)
    {
        $this->container['trdSym'] = $trdSym;

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
     * @param string|null $trgPrc Trigger Price (<Price in multiple of tick size>)
     *
     * @return self
     */
    public function setTrgPrc($trgPrc)
    {
        $this->container['trgPrc'] = $trgPrc;

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
     * @param string|null $dsQty Disclosed Quantity (<Quantity in multiple of Lot size/Board lot qty>)
     *
     * @return self
     */
    public function setDsQty($dsQty)
    {
        $this->container['dsQty'] = $dsQty;

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
     * @param string|null $rmk Remarks. Any remarks that you may need to store against an order
     *
     * @return self
     */
    public function setRmk($rmk)
    {
        $this->container['rmk'] = $rmk;

        return $this;
    }

    /**
     * Gets locInd
     *
     * @return string|null
     */
    public function getLocInd()
    {
        return $this->container['locInd'];
    }

    /**
     * Sets locInd
     *
     * @param string|null $locInd Location Indicator
     *
     * @return self
     */
    public function setLocInd($locInd)
    {
        $allowedValues = $this->getLocIndAllowableValues();
        if (!is_null($locInd) && !in_array($locInd, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'locInd', must be one of '%s'",
                    $locInd,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['locInd'] = $locInd;

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
     * @param string|null $vnCode Vendor Code (NA)
     *
     * @return self
     */
    public function setVnCode($vnCode)
    {
        $this->container['vnCode'] = $vnCode;

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
     * @param string|null $flQty Fill Quantity. <Quantity in multiple of Lot size/Board lot qty>. It is mandatory in case of Modify Order
     *
     * @return self
     */
    public function setFlQty($flQty)
    {
        $this->container['flQty'] = $flQty;

        return $this;
    }

    /**
     * Gets nstReqID
     *
     * @return string|null
     */
    public function getNstReqID()
    {
        return $this->container['nstReqID'];
    }

    /**
     * Sets nstReqID
     *
     * @param string|null $nstReqID Nest Order Req ID.Order number received from Order book response. It is mandatory for modifying/cancelling an AMO order
     *
     * @return self
     */
    public function setNstReqID($nstReqID)
    {
        $this->container['nstReqID'] = $nstReqID;

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
     * @param string|null $flID FILL ID. FILL ID received from Order book response. It is mandatory for position conversion
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
     * @return \com\edel\edelconnect\models\PrdCode|null
     */
    public function getPrdCodeCh()
    {
        return $this->container['prdCodeCh'];
    }

    /**
     * Sets prdCodeCh
     *
     * @param \com\edel\edelconnect\models\PrdCode|null $prdCodeCh prdCodeCh
     *
     * @return self
     */
    public function setPrdCodeCh($prdCodeCh)
    {
        $this->container['prdCodeCh'] = $prdCodeCh;

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


