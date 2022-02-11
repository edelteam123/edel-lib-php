<?php
/**
 * ComTradeBookResponseObject
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
 * ComTradeBookResponseObject Class Doc Comment
 *
 * @category Class
 * @package  com\edel
 * @author   Edelweiss
 * @link     https://www.edelweiss.in
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ComTradeBookResponseObject implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelName = 'ComTradeBookResponseObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'exc' => 'string',
        'ordID' => 'string',
        'ordTyp' => '\com\edel\edelconnect\models\OrderType',
        'trsTyp' => 'string',
        'trdSym' => 'string',
        'sym' => 'string',
        'cpName' => 'string',
        'srs' => 'string',
        'dsQty' => 'string',
        'exONo' => 'string',
        'rcvTim' => 'string',
        'prdCode' => '\com\edel\edelconnect\models\PrdCode',
        'flQty' => 'string',
        'qty' => 'string',
        'trdID' => 'string',
        'flPrc' => 'string',
        'ltp' => 'string',
        'chg' => 'string',
        'chgP' => 'string',
        'asTyp' => 'string',
        'dpInsTyp' => 'string',
        'dpExpDt' => 'string',
        'stkPrc' => 'string',
        'opTyp' => 'string',
        'psCnv' => 'string',
        'ntPrc' => 'string',
        'sts' => 'string',
        'tkSz' => 'string',
        'ltSz' => 'string',
        'dpName' => 'string',
        'exp' => 'string',
        'qtyUnits' => 'string',
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
        'exc' => null,
        'ordID' => null,
        'ordTyp' => null,
        'trsTyp' => null,
        'trdSym' => null,
        'sym' => null,
        'cpName' => null,
        'srs' => null,
        'dsQty' => null,
        'exONo' => null,
        'rcvTim' => null,
        'prdCode' => null,
        'flQty' => null,
        'qty' => null,
        'trdID' => null,
        'flPrc' => null,
        'ltp' => null,
        'chg' => null,
        'chgP' => null,
        'asTyp' => null,
        'dpInsTyp' => null,
        'dpExpDt' => null,
        'stkPrc' => null,
        'opTyp' => null,
        'psCnv' => null,
        'ntPrc' => null,
        'sts' => null,
        'tkSz' => null,
        'ltSz' => null,
        'dpName' => null,
        'exp' => null,
        'qtyUnits' => null,
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
        'exc' => 'exc',
        'ordID' => 'ordID',
        'ordTyp' => 'ordTyp',
        'trsTyp' => 'trsTyp',
        'trdSym' => 'trdSym',
        'sym' => 'sym',
        'cpName' => 'cpName',
        'srs' => 'srs',
        'dsQty' => 'dsQty',
        'exONo' => 'exONo',
        'rcvTim' => 'rcvTim',
        'prdCode' => 'prdCode',
        'flQty' => 'flQty',
        'qty' => 'qty',
        'trdID' => 'trdID',
        'flPrc' => 'flPrc',
        'ltp' => 'ltp',
        'chg' => 'chg',
        'chgP' => 'chgP',
        'asTyp' => 'asTyp',
        'dpInsTyp' => 'dpInsTyp',
        'dpExpDt' => 'dpExpDt',
        'stkPrc' => 'stkPrc',
        'opTyp' => 'opTyp',
        'psCnv' => 'psCnv',
        'ntPrc' => 'ntPrc',
        'sts' => 'sts',
        'tkSz' => 'tkSz',
        'ltSz' => 'ltSz',
        'dpName' => 'dpName',
        'exp' => 'exp',
        'qtyUnits' => 'qtyUnits',
        'rmk' => 'rmk'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'exc' => 'setExc',
        'ordID' => 'setOrdID',
        'ordTyp' => 'setOrdTyp',
        'trsTyp' => 'setTrsTyp',
        'trdSym' => 'setTrdSym',
        'sym' => 'setSym',
        'cpName' => 'setCpName',
        'srs' => 'setSrs',
        'dsQty' => 'setDsQty',
        'exONo' => 'setExONo',
        'rcvTim' => 'setRcvTim',
        'prdCode' => 'setPrdCode',
        'flQty' => 'setFlQty',
        'qty' => 'setQty',
        'trdID' => 'setTrdID',
        'flPrc' => 'setFlPrc',
        'ltp' => 'setLtp',
        'chg' => 'setChg',
        'chgP' => 'setChgP',
        'asTyp' => 'setAsTyp',
        'dpInsTyp' => 'setDpInsTyp',
        'dpExpDt' => 'setDpExpDt',
        'stkPrc' => 'setStkPrc',
        'opTyp' => 'setOpTyp',
        'psCnv' => 'setPsCnv',
        'ntPrc' => 'setNtPrc',
        'sts' => 'setSts',
        'tkSz' => 'setTkSz',
        'ltSz' => 'setLtSz',
        'dpName' => 'setDpName',
        'exp' => 'setExp',
        'qtyUnits' => 'setQtyUnits',
        'rmk' => 'setRmk'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'exc' => 'getExc',
        'ordID' => 'getOrdID',
        'ordTyp' => 'getOrdTyp',
        'trsTyp' => 'getTrsTyp',
        'trdSym' => 'getTrdSym',
        'sym' => 'getSym',
        'cpName' => 'getCpName',
        'srs' => 'getSrs',
        'dsQty' => 'getDsQty',
        'exONo' => 'getExONo',
        'rcvTim' => 'getRcvTim',
        'prdCode' => 'getPrdCode',
        'flQty' => 'getFlQty',
        'qty' => 'getQty',
        'trdID' => 'getTrdID',
        'flPrc' => 'getFlPrc',
        'ltp' => 'getLtp',
        'chg' => 'getChg',
        'chgP' => 'getChgP',
        'asTyp' => 'getAsTyp',
        'dpInsTyp' => 'getDpInsTyp',
        'dpExpDt' => 'getDpExpDt',
        'stkPrc' => 'getStkPrc',
        'opTyp' => 'getOpTyp',
        'psCnv' => 'getPsCnv',
        'ntPrc' => 'getNtPrc',
        'sts' => 'getSts',
        'tkSz' => 'getTkSz',
        'ltSz' => 'getLtSz',
        'dpName' => 'getDpName',
        'exp' => 'getExp',
        'qtyUnits' => 'getQtyUnits',
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
        $this->container['ordTyp'] = $data['ordTyp'] ?? null;
        $this->container['trsTyp'] = $data['trsTyp'] ?? null;
        $this->container['trdSym'] = $data['trdSym'] ?? null;
        $this->container['sym'] = $data['sym'] ?? null;
        $this->container['cpName'] = $data['cpName'] ?? null;
        $this->container['srs'] = $data['srs'] ?? null;
        $this->container['dsQty'] = $data['dsQty'] ?? null;
        $this->container['exONo'] = $data['exONo'] ?? null;
        $this->container['rcvTim'] = $data['rcvTim'] ?? null;
        $this->container['prdCode'] = $data['prdCode'] ?? null;
        $this->container['flQty'] = $data['flQty'] ?? null;
        $this->container['qty'] = $data['qty'] ?? null;
        $this->container['trdID'] = $data['trdID'] ?? null;
        $this->container['flPrc'] = $data['flPrc'] ?? null;
        $this->container['ltp'] = $data['ltp'] ?? null;
        $this->container['chg'] = $data['chg'] ?? null;
        $this->container['chgP'] = $data['chgP'] ?? null;
        $this->container['asTyp'] = $data['asTyp'] ?? null;
        $this->container['dpInsTyp'] = $data['dpInsTyp'] ?? null;
        $this->container['dpExpDt'] = $data['dpExpDt'] ?? null;
        $this->container['stkPrc'] = $data['stkPrc'] ?? null;
        $this->container['opTyp'] = $data['opTyp'] ?? null;
        $this->container['psCnv'] = $data['psCnv'] ?? null;
        $this->container['ntPrc'] = $data['ntPrc'] ?? null;
        $this->container['sts'] = $data['sts'] ?? null;
        $this->container['tkSz'] = $data['tkSz'] ?? null;
        $this->container['ltSz'] = $data['ltSz'] ?? null;
        $this->container['dpName'] = $data['dpName'] ?? null;
        $this->container['exp'] = $data['exp'] ?? null;
        $this->container['qtyUnits'] = $data['qtyUnits'] ?? null;
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
     * Gets srs
     *
     * @return string|null
     */
    public function getSrs()
    {
        return $this->container['srs'];
    }

    /**
     * Sets srs
     *
     * @param string|null $srs srs
     *
     * @return self
     */
    public function setSrs($srs)
    {
        $this->container['srs'] = $srs;

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
     * Gets exONo
     *
     * @return string|null
     */
    public function getExONo()
    {
        return $this->container['exONo'];
    }

    /**
     * Sets exONo
     *
     * @param string|null $exONo exONo
     *
     * @return self
     */
    public function setExONo($exONo)
    {
        $this->container['exONo'] = $exONo;

        return $this;
    }

    /**
     * Gets rcvTim
     *
     * @return string|null
     */
    public function getRcvTim()
    {
        return $this->container['rcvTim'];
    }

    /**
     * Sets rcvTim
     *
     * @param string|null $rcvTim rcvTim
     *
     * @return self
     */
    public function setRcvTim($rcvTim)
    {
        $this->container['rcvTim'] = $rcvTim;

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
     * @param string|null $qty qty
     *
     * @return self
     */
    public function setQty($qty)
    {
        $this->container['qty'] = $qty;

        return $this;
    }

    /**
     * Gets trdID
     *
     * @return string|null
     */
    public function getTrdID()
    {
        return $this->container['trdID'];
    }

    /**
     * Sets trdID
     *
     * @param string|null $trdID trdID
     *
     * @return self
     */
    public function setTrdID($trdID)
    {
        $this->container['trdID'] = $trdID;

        return $this;
    }

    /**
     * Gets flPrc
     *
     * @return string|null
     */
    public function getFlPrc()
    {
        return $this->container['flPrc'];
    }

    /**
     * Sets flPrc
     *
     * @param string|null $flPrc flPrc
     *
     * @return self
     */
    public function setFlPrc($flPrc)
    {
        $this->container['flPrc'] = $flPrc;

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
     * Gets chg
     *
     * @return string|null
     */
    public function getChg()
    {
        return $this->container['chg'];
    }

    /**
     * Sets chg
     *
     * @param string|null $chg chg
     *
     * @return self
     */
    public function setChg($chg)
    {
        $this->container['chg'] = $chg;

        return $this;
    }

    /**
     * Gets chgP
     *
     * @return string|null
     */
    public function getChgP()
    {
        return $this->container['chgP'];
    }

    /**
     * Sets chgP
     *
     * @param string|null $chgP chgP
     *
     * @return self
     */
    public function setChgP($chgP)
    {
        $this->container['chgP'] = $chgP;

        return $this;
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
     * Gets dpInsTyp
     *
     * @return string|null
     */
    public function getDpInsTyp()
    {
        return $this->container['dpInsTyp'];
    }

    /**
     * Sets dpInsTyp
     *
     * @param string|null $dpInsTyp dpInsTyp
     *
     * @return self
     */
    public function setDpInsTyp($dpInsTyp)
    {
        $this->container['dpInsTyp'] = $dpInsTyp;

        return $this;
    }

    /**
     * Gets dpExpDt
     *
     * @return string|null
     */
    public function getDpExpDt()
    {
        return $this->container['dpExpDt'];
    }

    /**
     * Sets dpExpDt
     *
     * @param string|null $dpExpDt dpExpDt
     *
     * @return self
     */
    public function setDpExpDt($dpExpDt)
    {
        $this->container['dpExpDt'] = $dpExpDt;

        return $this;
    }

    /**
     * Gets stkPrc
     *
     * @return string|null
     */
    public function getStkPrc()
    {
        return $this->container['stkPrc'];
    }

    /**
     * Sets stkPrc
     *
     * @param string|null $stkPrc stkPrc
     *
     * @return self
     */
    public function setStkPrc($stkPrc)
    {
        $this->container['stkPrc'] = $stkPrc;

        return $this;
    }

    /**
     * Gets opTyp
     *
     * @return string|null
     */
    public function getOpTyp()
    {
        return $this->container['opTyp'];
    }

    /**
     * Sets opTyp
     *
     * @param string|null $opTyp opTyp
     *
     * @return self
     */
    public function setOpTyp($opTyp)
    {
        $this->container['opTyp'] = $opTyp;

        return $this;
    }

    /**
     * Gets psCnv
     *
     * @return string|null
     */
    public function getPsCnv()
    {
        return $this->container['psCnv'];
    }

    /**
     * Sets psCnv
     *
     * @param string|null $psCnv psCnv
     *
     * @return self
     */
    public function setPsCnv($psCnv)
    {
        $this->container['psCnv'] = $psCnv;

        return $this;
    }

    /**
     * Gets ntPrc
     *
     * @return string|null
     */
    public function getNtPrc()
    {
        return $this->container['ntPrc'];
    }

    /**
     * Sets ntPrc
     *
     * @param string|null $ntPrc ntPrc
     *
     * @return self
     */
    public function setNtPrc($ntPrc)
    {
        $this->container['ntPrc'] = $ntPrc;

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
     * Gets exp
     *
     * @return string|null
     */
    public function getExp()
    {
        return $this->container['exp'];
    }

    /**
     * Sets exp
     *
     * @param string|null $exp exp
     *
     * @return self
     */
    public function setExp($exp)
    {
        $this->container['exp'] = $exp;

        return $this;
    }

    /**
     * Gets qtyUnits
     *
     * @return string|null
     */
    public function getQtyUnits()
    {
        return $this->container['qtyUnits'];
    }

    /**
     * Sets qtyUnits
     *
     * @param string|null $qtyUnits qtyUnits
     *
     * @return self
     */
    public function setQtyUnits($qtyUnits)
    {
        $this->container['qtyUnits'] = $qtyUnits;

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
     * @param string|null $rmk rmk
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


