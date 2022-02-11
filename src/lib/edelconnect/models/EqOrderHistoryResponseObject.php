<?php
/**
 * EqOrderHistoryResponseObject
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
 * EqOrderHistoryResponseObject Class Doc Comment
 *
 * @category Class
 * @package  com\edel
 * @author   Edelweiss
 * @link     https://www.edelweiss.in
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EqOrderHistoryResponseObject implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelName = 'EqOrderHistoryResponseObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'exc' => 'string',
        'ordID' => 'string',
        'nstReqID' => 'string',
        'trsTyp' => 'string',
        'symName' => 'string',
        'prcTF' => 'string',
        'avgPrc' => 'string',
        'trgPrc' => 'string',
        'qtyTF' => 'string',
        'unFlSz' => 'string',
        'dsQty' => 'string',
        'exOID' => 'string',
        'sts' => 'string',
        'rjRsn' => 'string',
        'ordTyp' => 'string',
        'dur' => 'string',
        'prdCode' => '\com\edel\edelconnect\models\PrdCode',
        'rpTyp' => 'string',
        'trdSym' => 'string',
        'cstFirm' => 'string',
        'flQty' => 'string',
        'exTimStm' => 'string',
        'ordSrc' => 'string',
        'flDtTim' => 'string',
        'ordGenTyp' => 'string',
        'ordEntTyp' => 'string',
        'cta' => 'string'
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
        'ordID' => null,
        'nstReqID' => null,
        'trsTyp' => null,
        'symName' => null,
        'prcTF' => null,
        'avgPrc' => null,
        'trgPrc' => null,
        'qtyTF' => null,
        'unFlSz' => null,
        'dsQty' => null,
        'exOID' => null,
        'sts' => null,
        'rjRsn' => null,
        'ordTyp' => null,
        'dur' => null,
        'prdCode' => null,
        'rpTyp' => null,
        'trdSym' => null,
        'cstFirm' => null,
        'flQty' => null,
        'exTimStm' => null,
        'ordSrc' => null,
        'flDtTim' => null,
        'ordGenTyp' => null,
        'ordEntTyp' => null,
        'cta' => null
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
        'ordID' => 'ordID',
        'nstReqID' => 'nstReqID',
        'trsTyp' => 'trsTyp',
        'symName' => 'symName',
        'prcTF' => 'prcTF',
        'avgPrc' => 'avgPrc',
        'trgPrc' => 'trgPrc',
        'qtyTF' => 'qtyTF',
        'unFlSz' => 'unFlSz',
        'dsQty' => 'dsQty',
        'exOID' => 'exOID',
        'sts' => 'sts',
        'rjRsn' => 'rjRsn',
        'ordTyp' => 'ordTyp',
        'dur' => 'dur',
        'prdCode' => 'prdCode',
        'rpTyp' => 'rpTyp',
        'trdSym' => 'trdSym',
        'cstFirm' => 'cstFirm',
        'flQty' => 'flQty',
        'exTimStm' => 'exTimStm',
        'ordSrc' => 'ordSrc',
        'flDtTim' => 'flDtTim',
        'ordGenTyp' => 'ordGenTyp',
        'ordEntTyp' => 'ordEntTyp',
        'cta' => 'cta'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'exc' => 'setExc',
        'ordID' => 'setOrdID',
        'nstReqID' => 'setNstReqID',
        'trsTyp' => 'setTrsTyp',
        'symName' => 'setSymName',
        'prcTF' => 'setPrcTF',
        'avgPrc' => 'setAvgPrc',
        'trgPrc' => 'setTrgPrc',
        'qtyTF' => 'setQtyTF',
        'unFlSz' => 'setUnFlSz',
        'dsQty' => 'setDsQty',
        'exOID' => 'setExOID',
        'sts' => 'setSts',
        'rjRsn' => 'setRjRsn',
        'ordTyp' => 'setOrdTyp',
        'dur' => 'setDur',
        'prdCode' => 'setPrdCode',
        'rpTyp' => 'setRpTyp',
        'trdSym' => 'setTrdSym',
        'cstFirm' => 'setCstFirm',
        'flQty' => 'setFlQty',
        'exTimStm' => 'setExTimStm',
        'ordSrc' => 'setOrdSrc',
        'flDtTim' => 'setFlDtTim',
        'ordGenTyp' => 'setOrdGenTyp',
        'ordEntTyp' => 'setOrdEntTyp',
        'cta' => 'setCta'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'exc' => 'getExc',
        'ordID' => 'getOrdID',
        'nstReqID' => 'getNstReqID',
        'trsTyp' => 'getTrsTyp',
        'symName' => 'getSymName',
        'prcTF' => 'getPrcTF',
        'avgPrc' => 'getAvgPrc',
        'trgPrc' => 'getTrgPrc',
        'qtyTF' => 'getQtyTF',
        'unFlSz' => 'getUnFlSz',
        'dsQty' => 'getDsQty',
        'exOID' => 'getExOID',
        'sts' => 'getSts',
        'rjRsn' => 'getRjRsn',
        'ordTyp' => 'getOrdTyp',
        'dur' => 'getDur',
        'prdCode' => 'getPrdCode',
        'rpTyp' => 'getRpTyp',
        'trdSym' => 'getTrdSym',
        'cstFirm' => 'getCstFirm',
        'flQty' => 'getFlQty',
        'exTimStm' => 'getExTimStm',
        'ordSrc' => 'getOrdSrc',
        'flDtTim' => 'getFlDtTim',
        'ordGenTyp' => 'getOrdGenTyp',
        'ordEntTyp' => 'getOrdEntTyp',
        'cta' => 'getCta'
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
        $this->container['exc'] = $data['exc'] ?? null;
        $this->container['ordID'] = $data['ordID'] ?? null;
        $this->container['nstReqID'] = $data['nstReqID'] ?? null;
        $this->container['trsTyp'] = $data['trsTyp'] ?? null;
        $this->container['symName'] = $data['symName'] ?? null;
        $this->container['prcTF'] = $data['prcTF'] ?? null;
        $this->container['avgPrc'] = $data['avgPrc'] ?? null;
        $this->container['trgPrc'] = $data['trgPrc'] ?? null;
        $this->container['qtyTF'] = $data['qtyTF'] ?? null;
        $this->container['unFlSz'] = $data['unFlSz'] ?? null;
        $this->container['dsQty'] = $data['dsQty'] ?? null;
        $this->container['exOID'] = $data['exOID'] ?? null;
        $this->container['sts'] = $data['sts'] ?? null;
        $this->container['rjRsn'] = $data['rjRsn'] ?? null;
        $this->container['ordTyp'] = $data['ordTyp'] ?? null;
        $this->container['dur'] = $data['dur'] ?? null;
        $this->container['prdCode'] = $data['prdCode'] ?? null;
        $this->container['rpTyp'] = $data['rpTyp'] ?? null;
        $this->container['trdSym'] = $data['trdSym'] ?? null;
        $this->container['cstFirm'] = $data['cstFirm'] ?? null;
        $this->container['flQty'] = $data['flQty'] ?? null;
        $this->container['exTimStm'] = $data['exTimStm'] ?? null;
        $this->container['ordSrc'] = $data['ordSrc'] ?? null;
        $this->container['flDtTim'] = $data['flDtTim'] ?? null;
        $this->container['ordGenTyp'] = $data['ordGenTyp'] ?? null;
        $this->container['ordEntTyp'] = $data['ordEntTyp'] ?? null;
        $this->container['cta'] = $data['cta'] ?? null;
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
     * Gets ordID
     *
     * @return string|null
     */
    public function getOrdID()
    {
        return $this->container['ordID'];
    }

    /**
     * Sets ordID
     *
     * @param string|null $ordID ordID
     *
     * @return self
     */
    public function setOrdID($ordID)
    {
        $this->container['ordID'] = $ordID;

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
     * @param string|null $nstReqID nstReqID
     *
     * @return self
     */
    public function setNstReqID($nstReqID)
    {
        $this->container['nstReqID'] = $nstReqID;

        return $this;
    }

    /**
     * Gets trsTyp
     *
     * @return string|null
     */
    public function getTrsTyp()
    {
        return $this->container['trsTyp'];
    }

    /**
     * Sets trsTyp
     *
     * @param string|null $trsTyp trsTyp
     *
     * @return self
     */
    public function setTrsTyp($trsTyp)
    {
        $this->container['trsTyp'] = $trsTyp;

        return $this;
    }

    /**
     * Gets symName
     *
     * @return string|null
     */
    public function getSymName()
    {
        return $this->container['symName'];
    }

    /**
     * Sets symName
     *
     * @param string|null $symName symName
     *
     * @return self
     */
    public function setSymName($symName)
    {
        $this->container['symName'] = $symName;

        return $this;
    }

    /**
     * Gets prcTF
     *
     * @return string|null
     */
    public function getPrcTF()
    {
        return $this->container['prcTF'];
    }

    /**
     * Sets prcTF
     *
     * @param string|null $prcTF prcTF
     *
     * @return self
     */
    public function setPrcTF($prcTF)
    {
        $this->container['prcTF'] = $prcTF;

        return $this;
    }

    /**
     * Gets avgPrc
     *
     * @return string|null
     */
    public function getAvgPrc()
    {
        return $this->container['avgPrc'];
    }

    /**
     * Sets avgPrc
     *
     * @param string|null $avgPrc avgPrc
     *
     * @return self
     */
    public function setAvgPrc($avgPrc)
    {
        $this->container['avgPrc'] = $avgPrc;

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
     * @param string|null $trgPrc trgPrc
     *
     * @return self
     */
    public function setTrgPrc($trgPrc)
    {
        $this->container['trgPrc'] = $trgPrc;

        return $this;
    }

    /**
     * Gets qtyTF
     *
     * @return string|null
     */
    public function getQtyTF()
    {
        return $this->container['qtyTF'];
    }

    /**
     * Sets qtyTF
     *
     * @param string|null $qtyTF qtyTF
     *
     * @return self
     */
    public function setQtyTF($qtyTF)
    {
        $this->container['qtyTF'] = $qtyTF;

        return $this;
    }

    /**
     * Gets unFlSz
     *
     * @return string|null
     */
    public function getUnFlSz()
    {
        return $this->container['unFlSz'];
    }

    /**
     * Sets unFlSz
     *
     * @param string|null $unFlSz unFlSz
     *
     * @return self
     */
    public function setUnFlSz($unFlSz)
    {
        $this->container['unFlSz'] = $unFlSz;

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
     * @param string|null $dsQty dsQty
     *
     * @return self
     */
    public function setDsQty($dsQty)
    {
        $this->container['dsQty'] = $dsQty;

        return $this;
    }

    /**
     * Gets exOID
     *
     * @return string|null
     */
    public function getExOID()
    {
        return $this->container['exOID'];
    }

    /**
     * Sets exOID
     *
     * @param string|null $exOID exOID
     *
     * @return self
     */
    public function setExOID($exOID)
    {
        $this->container['exOID'] = $exOID;

        return $this;
    }

    /**
     * Gets sts
     *
     * @return string|null
     */
    public function getSts()
    {
        return $this->container['sts'];
    }

    /**
     * Sets sts
     *
     * @param string|null $sts sts
     *
     * @return self
     */
    public function setSts($sts)
    {
        $this->container['sts'] = $sts;

        return $this;
    }

    /**
     * Gets rjRsn
     *
     * @return string|null
     */
    public function getRjRsn()
    {
        return $this->container['rjRsn'];
    }

    /**
     * Sets rjRsn
     *
     * @param string|null $rjRsn rjRsn
     *
     * @return self
     */
    public function setRjRsn($rjRsn)
    {
        $this->container['rjRsn'] = $rjRsn;

        return $this;
    }

    /**
     * Gets ordTyp
     *
     * @return string|null
     */
    public function getOrdTyp()
    {
        return $this->container['ordTyp'];
    }

    /**
     * Sets ordTyp
     *
     * @param string|null $ordTyp ordTyp
     *
     * @return self
     */
    public function setOrdTyp($ordTyp)
    {
        $this->container['ordTyp'] = $ordTyp;

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
     * @param string|null $dur dur
     *
     * @return self
     */
    public function setDur($dur)
    {
        $this->container['dur'] = $dur;

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
     * Gets rpTyp
     *
     * @return string|null
     */
    public function getRpTyp()
    {
        return $this->container['rpTyp'];
    }

    /**
     * Sets rpTyp
     *
     * @param string|null $rpTyp rpTyp
     *
     * @return self
     */
    public function setRpTyp($rpTyp)
    {
        $this->container['rpTyp'] = $rpTyp;

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
     * Gets cstFirm
     *
     * @return string|null
     */
    public function getCstFirm()
    {
        return $this->container['cstFirm'];
    }

    /**
     * Sets cstFirm
     *
     * @param string|null $cstFirm cstFirm
     *
     * @return self
     */
    public function setCstFirm($cstFirm)
    {
        $this->container['cstFirm'] = $cstFirm;

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
     * @param string|null $flQty flQty
     *
     * @return self
     */
    public function setFlQty($flQty)
    {
        $this->container['flQty'] = $flQty;

        return $this;
    }

    /**
     * Gets exTimStm
     *
     * @return string|null
     */
    public function getExTimStm()
    {
        return $this->container['exTimStm'];
    }

    /**
     * Sets exTimStm
     *
     * @param string|null $exTimStm exTimStm
     *
     * @return self
     */
    public function setExTimStm($exTimStm)
    {
        $this->container['exTimStm'] = $exTimStm;

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
     * @param string|null $ordSrc ordSrc
     *
     * @return self
     */
    public function setOrdSrc($ordSrc)
    {
        $this->container['ordSrc'] = $ordSrc;

        return $this;
    }

    /**
     * Gets flDtTim
     *
     * @return string|null
     */
    public function getFlDtTim()
    {
        return $this->container['flDtTim'];
    }

    /**
     * Sets flDtTim
     *
     * @param string|null $flDtTim flDtTim
     *
     * @return self
     */
    public function setFlDtTim($flDtTim)
    {
        $this->container['flDtTim'] = $flDtTim;

        return $this;
    }

    /**
     * Gets ordGenTyp
     *
     * @return string|null
     */
    public function getOrdGenTyp()
    {
        return $this->container['ordGenTyp'];
    }

    /**
     * Sets ordGenTyp
     *
     * @param string|null $ordGenTyp ordGenTyp
     *
     * @return self
     */
    public function setOrdGenTyp($ordGenTyp)
    {
        $this->container['ordGenTyp'] = $ordGenTyp;

        return $this;
    }

    /**
     * Gets ordEntTyp
     *
     * @return string|null
     */
    public function getOrdEntTyp()
    {
        return $this->container['ordEntTyp'];
    }

    /**
     * Sets ordEntTyp
     *
     * @param string|null $ordEntTyp ordEntTyp
     *
     * @return self
     */
    public function setOrdEntTyp($ordEntTyp)
    {
        $this->container['ordEntTyp'] = $ordEntTyp;

        return $this;
    }

    /**
     * Gets cta
     *
     * @return string|null
     */
    public function getCta()
    {
        return $this->container['cta'];
    }

    /**
     * Sets cta
     *
     * @param string|null $cta cta
     *
     * @return self
     */
    public function setCta($cta)
    {
        $this->container['cta'] = $cta;

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


