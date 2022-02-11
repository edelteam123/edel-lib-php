<?php
/**
 * EQModifyTradeRequestDao
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
 * EQModifyTradeRequestDao Class Doc Comment
 *
 * @category Class
 * @package  com\edel
 * @author   Edelweiss
 * @link     https://www.edelweiss.in
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EQModifyTradeRequestDao implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelName = 'EQModifyTradeRequestDao';

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
        'mktPro' => 'string',
        'lmPrc' => 'string',
        'trgPrc' => 'string',
        'prdCode' => '\com\edel\edelconnect\models\PrdCode',
        'dtDays' => 'string',
        'nstOID' => 'string'
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
        'mktPro' => null,
        'lmPrc' => null,
        'trgPrc' => null,
        'prdCode' => null,
        'dtDays' => null,
        'nstOID' => null
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
        'mktPro' => 'mktPro',
        'lmPrc' => 'lmPrc',
        'trgPrc' => 'trgPrc',
        'prdCode' => 'prdCode',
        'dtDays' => 'dtDays',
        'nstOID' => 'nstOID'
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
        'mktPro' => 'setMktPro',
        'lmPrc' => 'setLmPrc',
        'trgPrc' => 'setTrgPrc',
        'prdCode' => 'setPrdCode',
        'dtDays' => 'setDtDays',
        'nstOID' => 'setNstOID'
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
        'mktPro' => 'getMktPro',
        'lmPrc' => 'getLmPrc',
        'trgPrc' => 'getTrgPrc',
        'prdCode' => 'getPrdCode',
        'dtDays' => 'getDtDays',
        'nstOID' => 'getNstOID'
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
        $this->container['trdSym'] = $data['trdSym'] ?? null;
        $this->container['exc'] = $data['exc'] ?? null;
        $this->container['action'] = $data['action'] ?? null;
        $this->container['dur'] = $data['dur'] ?? null;
        $this->container['flQty'] = $data['flQty'] ?? null;
        $this->container['ordTyp'] = $data['ordTyp'] ?? null;
        $this->container['qty'] = $data['qty'] ?? null;
        $this->container['dscQty'] = $data['dscQty'] ?? null;
        $this->container['mktPro'] = $data['mktPro'] ?? null;
        $this->container['lmPrc'] = $data['lmPrc'] ?? null;
        $this->container['trgPrc'] = $data['trgPrc'] ?? null;
        $this->container['prdCode'] = $data['prdCode'] ?? null;
        $this->container['dtDays'] = $data['dtDays'] ?? null;
        $this->container['nstOID'] = $data['nstOID'] ?? null;
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
     * @param string|null $flQty Filled Quantity or filled shares. It is mandatory for order modification
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
     * @param string|null $qty Quantity of the scrip to transact  in multiple of Lot size/Board lot qty
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
     * @param string|null $trgPrc Trigger Price applicable for SL/SL-M Orders (default 0)
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
     * @param string|null $dtDays date in dd/MM/yyyy format
     *
     * @return self
     */
    public function setDtDays($dtDays)
    {
        $this->container['dtDays'] = $dtDays;

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
     * @param string|null $nstOID Nest Order ID .Order number received from Orderbook response. It is mandatory for modifying/cancelling an order
     *
     * @return self
     */
    public function setNstOID($nstOID)
    {
        $this->container['nstOID'] = $nstOID;

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


