<?php
/**
 * OrderBookCommonResponseObject
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
 * OrderBookCommonResponseObject Class Doc Comment
 *
 * @category Class
 * @package  com\edel
 * @author   Edelweiss
 * @link     https://www.edelweiss.in
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OrderBookCommonResponseObject implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelName = 'OrderBookCommonResponseObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'lstPos' => 'int',
        'stkPrc' => 'string',
        'isCOSecLeg' => 'string',
        'dur' => '\com\edel\edelconnect\models\Duration',
        'vlDt' => 'string',
        'rcvTim' => 'string',
        'rcvEpTim' => 'string',
        'sym' => 'string',
        'cpName' => 'string',
        'exit' => 'string',
        'syomID' => 'string',
        'exc' => 'string',
        'ntQty' => 'string',
        'dpName' => 'string',
        'cancel' => 'string',
        'sipID' => 'string',
        'nstReqID' => 'string',
        'ordTyp' => '\com\edel\edelconnect\models\OrderType',
        'qtyUnits' => 'string',
        'opTyp' => 'string',
        'trsTyp' => 'string',
        'srs' => 'string',
        'reqQty' => 'string',
        'prdCode' => '\com\edel\edelconnect\models\PrdCode',
        'ogt' => 'string',
        'flQty' => 'string',
        'trdSym' => 'string',
        'edit' => 'string',
        'asTyp' => 'string',
        'trgPrc' => 'string',
        'avgPrc' => 'string',
        'dsQty' => 'string',
        'ordID' => 'string',
        'sts' => 'string',
        'dpInsTyp' => 'string',
        'rjRsn' => 'string',
        'userID' => 'string',
        'dpExpDt' => 'string',
        'ltSz' => 'string',
        'tkSz' => 'string',
        'desc' => 'string',
        'prc' => 'string',
        'exONo' => 'string',
        'exp' => 'string',
        'rcvDt' => 'string',
        'pdQty' => 'string',
        'userCmnt' => 'string',
        'isSL' => 'bool',
        'isTgt' => 'bool',
        'flId' => 'string',
        'rmk' => 'string',
        'boSeqId' => 'string',
        'epochTim' => 'string',
        'ordTim' => 'string',
        'trgId' => 'string',
        'dpVal' => 'string',
        'cta' => 'string',
        'ltp' => 'string',
        'vndSrc' => 'string',
        'bsktOrdId' => 'string',
        'bsktEpch' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'lstPos' => 'int32',
        'stkPrc' => null,
        'isCOSecLeg' => null,
        'dur' => null,
        'vlDt' => null,
        'rcvTim' => null,
        'rcvEpTim' => null,
        'sym' => null,
        'cpName' => null,
        'exit' => null,
        'syomID' => null,
        'exc' => null,
        'ntQty' => null,
        'dpName' => null,
        'cancel' => null,
        'sipID' => null,
        'nstReqID' => null,
        'ordTyp' => null,
        'qtyUnits' => null,
        'opTyp' => null,
        'trsTyp' => null,
        'srs' => null,
        'reqQty' => null,
        'prdCode' => null,
        'ogt' => null,
        'flQty' => null,
        'trdSym' => null,
        'edit' => null,
        'asTyp' => null,
        'trgPrc' => null,
        'avgPrc' => null,
        'dsQty' => null,
        'ordID' => null,
        'sts' => null,
        'dpInsTyp' => null,
        'rjRsn' => null,
        'userID' => null,
        'dpExpDt' => null,
        'ltSz' => null,
        'tkSz' => null,
        'desc' => null,
        'prc' => null,
        'exONo' => null,
        'exp' => null,
        'rcvDt' => null,
        'pdQty' => null,
        'userCmnt' => null,
        'isSL' => null,
        'isTgt' => null,
        'flId' => null,
        'rmk' => null,
        'boSeqId' => null,
        'epochTim' => null,
        'ordTim' => null,
        'trgId' => null,
        'dpVal' => null,
        'cta' => null,
        'ltp' => null,
        'vndSrc' => null,
        'bsktOrdId' => null,
        'bsktEpch' => null
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
        'lstPos' => 'lstPos',
        'stkPrc' => 'stkPrc',
        'isCOSecLeg' => 'isCOSecLeg',
        'dur' => 'dur',
        'vlDt' => 'vlDt',
        'rcvTim' => 'rcvTim',
        'rcvEpTim' => 'rcvEpTim',
        'sym' => 'sym',
        'cpName' => 'cpName',
        'exit' => 'exit',
        'syomID' => 'syomID',
        'exc' => 'exc',
        'ntQty' => 'ntQty',
        'dpName' => 'dpName',
        'cancel' => 'cancel',
        'sipID' => 'sipID',
        'nstReqID' => 'nstReqID',
        'ordTyp' => 'ordTyp',
        'qtyUnits' => 'qtyUnits',
        'opTyp' => 'opTyp',
        'trsTyp' => 'trsTyp',
        'srs' => 'srs',
        'reqQty' => 'reqQty',
        'prdCode' => 'prdCode',
        'ogt' => 'ogt',
        'flQty' => 'flQty',
        'trdSym' => 'trdSym',
        'edit' => 'edit',
        'asTyp' => 'asTyp',
        'trgPrc' => 'trgPrc',
        'avgPrc' => 'avgPrc',
        'dsQty' => 'dsQty',
        'ordID' => 'ordID',
        'sts' => 'sts',
        'dpInsTyp' => 'dpInsTyp',
        'rjRsn' => 'rjRsn',
        'userID' => 'userID',
        'dpExpDt' => 'dpExpDt',
        'ltSz' => 'ltSz',
        'tkSz' => 'tkSz',
        'desc' => 'desc',
        'prc' => 'prc',
        'exONo' => 'exONo',
        'exp' => 'exp',
        'rcvDt' => 'rcvDt',
        'pdQty' => 'pdQty',
        'userCmnt' => 'userCmnt',
        'isSL' => 'isSL',
        'isTgt' => 'isTgt',
        'flId' => 'flId',
        'rmk' => 'rmk',
        'boSeqId' => 'boSeqId',
        'epochTim' => 'epochTim',
        'ordTim' => 'ordTim',
        'trgId' => 'trgId',
        'dpVal' => 'dpVal',
        'cta' => 'cta',
        'ltp' => 'ltp',
        'vndSrc' => 'vndSrc',
        'bsktOrdId' => 'bsktOrdId',
        'bsktEpch' => 'bsktEpch'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lstPos' => 'setLstPos',
        'stkPrc' => 'setStkPrc',
        'isCOSecLeg' => 'setIsCOSecLeg',
        'dur' => 'setDur',
        'vlDt' => 'setVlDt',
        'rcvTim' => 'setRcvTim',
        'rcvEpTim' => 'setRcvEpTim',
        'sym' => 'setSym',
        'cpName' => 'setCpName',
        'exit' => 'setExit',
        'syomID' => 'setSyomID',
        'exc' => 'setExc',
        'ntQty' => 'setNtQty',
        'dpName' => 'setDpName',
        'cancel' => 'setCancel',
        'sipID' => 'setSipID',
        'nstReqID' => 'setNstReqID',
        'ordTyp' => 'setOrdTyp',
        'qtyUnits' => 'setQtyUnits',
        'opTyp' => 'setOpTyp',
        'trsTyp' => 'setTrsTyp',
        'srs' => 'setSrs',
        'reqQty' => 'setReqQty',
        'prdCode' => 'setPrdCode',
        'ogt' => 'setOgt',
        'flQty' => 'setFlQty',
        'trdSym' => 'setTrdSym',
        'edit' => 'setEdit',
        'asTyp' => 'setAsTyp',
        'trgPrc' => 'setTrgPrc',
        'avgPrc' => 'setAvgPrc',
        'dsQty' => 'setDsQty',
        'ordID' => 'setOrdID',
        'sts' => 'setSts',
        'dpInsTyp' => 'setDpInsTyp',
        'rjRsn' => 'setRjRsn',
        'userID' => 'setUserID',
        'dpExpDt' => 'setDpExpDt',
        'ltSz' => 'setLtSz',
        'tkSz' => 'setTkSz',
        'desc' => 'setDesc',
        'prc' => 'setPrc',
        'exONo' => 'setExONo',
        'exp' => 'setExp',
        'rcvDt' => 'setRcvDt',
        'pdQty' => 'setPdQty',
        'userCmnt' => 'setUserCmnt',
        'isSL' => 'setIsSL',
        'isTgt' => 'setIsTgt',
        'flId' => 'setFlId',
        'rmk' => 'setRmk',
        'boSeqId' => 'setBoSeqId',
        'epochTim' => 'setEpochTim',
        'ordTim' => 'setOrdTim',
        'trgId' => 'setTrgId',
        'dpVal' => 'setDpVal',
        'cta' => 'setCta',
        'ltp' => 'setLtp',
        'vndSrc' => 'setVndSrc',
        'bsktOrdId' => 'setBsktOrdId',
        'bsktEpch' => 'setBsktEpch'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lstPos' => 'getLstPos',
        'stkPrc' => 'getStkPrc',
        'isCOSecLeg' => 'getIsCOSecLeg',
        'dur' => 'getDur',
        'vlDt' => 'getVlDt',
        'rcvTim' => 'getRcvTim',
        'rcvEpTim' => 'getRcvEpTim',
        'sym' => 'getSym',
        'cpName' => 'getCpName',
        'exit' => 'getExit',
        'syomID' => 'getSyomID',
        'exc' => 'getExc',
        'ntQty' => 'getNtQty',
        'dpName' => 'getDpName',
        'cancel' => 'getCancel',
        'sipID' => 'getSipID',
        'nstReqID' => 'getNstReqID',
        'ordTyp' => 'getOrdTyp',
        'qtyUnits' => 'getQtyUnits',
        'opTyp' => 'getOpTyp',
        'trsTyp' => 'getTrsTyp',
        'srs' => 'getSrs',
        'reqQty' => 'getReqQty',
        'prdCode' => 'getPrdCode',
        'ogt' => 'getOgt',
        'flQty' => 'getFlQty',
        'trdSym' => 'getTrdSym',
        'edit' => 'getEdit',
        'asTyp' => 'getAsTyp',
        'trgPrc' => 'getTrgPrc',
        'avgPrc' => 'getAvgPrc',
        'dsQty' => 'getDsQty',
        'ordID' => 'getOrdID',
        'sts' => 'getSts',
        'dpInsTyp' => 'getDpInsTyp',
        'rjRsn' => 'getRjRsn',
        'userID' => 'getUserID',
        'dpExpDt' => 'getDpExpDt',
        'ltSz' => 'getLtSz',
        'tkSz' => 'getTkSz',
        'desc' => 'getDesc',
        'prc' => 'getPrc',
        'exONo' => 'getExONo',
        'exp' => 'getExp',
        'rcvDt' => 'getRcvDt',
        'pdQty' => 'getPdQty',
        'userCmnt' => 'getUserCmnt',
        'isSL' => 'getIsSL',
        'isTgt' => 'getIsTgt',
        'flId' => 'getFlId',
        'rmk' => 'getRmk',
        'boSeqId' => 'getBoSeqId',
        'epochTim' => 'getEpochTim',
        'ordTim' => 'getOrdTim',
        'trgId' => 'getTrgId',
        'dpVal' => 'getDpVal',
        'cta' => 'getCta',
        'ltp' => 'getLtp',
        'vndSrc' => 'getVndSrc',
        'bsktOrdId' => 'getBsktOrdId',
        'bsktEpch' => 'getBsktEpch'
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
        $this->container['lstPos'] = $data['lstPos'] ?? null;
        $this->container['stkPrc'] = $data['stkPrc'] ?? null;
        $this->container['isCOSecLeg'] = $data['isCOSecLeg'] ?? null;
        $this->container['dur'] = $data['dur'] ?? null;
        $this->container['vlDt'] = $data['vlDt'] ?? null;
        $this->container['rcvTim'] = $data['rcvTim'] ?? null;
        $this->container['rcvEpTim'] = $data['rcvEpTim'] ?? null;
        $this->container['sym'] = $data['sym'] ?? null;
        $this->container['cpName'] = $data['cpName'] ?? null;
        $this->container['exit'] = $data['exit'] ?? null;
        $this->container['syomID'] = $data['syomID'] ?? null;
        $this->container['exc'] = $data['exc'] ?? null;
        $this->container['ntQty'] = $data['ntQty'] ?? null;
        $this->container['dpName'] = $data['dpName'] ?? null;
        $this->container['cancel'] = $data['cancel'] ?? null;
        $this->container['sipID'] = $data['sipID'] ?? null;
        $this->container['nstReqID'] = $data['nstReqID'] ?? null;
        $this->container['ordTyp'] = $data['ordTyp'] ?? null;
        $this->container['qtyUnits'] = $data['qtyUnits'] ?? null;
        $this->container['opTyp'] = $data['opTyp'] ?? null;
        $this->container['trsTyp'] = $data['trsTyp'] ?? null;
        $this->container['srs'] = $data['srs'] ?? null;
        $this->container['reqQty'] = $data['reqQty'] ?? null;
        $this->container['prdCode'] = $data['prdCode'] ?? null;
        $this->container['ogt'] = $data['ogt'] ?? null;
        $this->container['flQty'] = $data['flQty'] ?? null;
        $this->container['trdSym'] = $data['trdSym'] ?? null;
        $this->container['edit'] = $data['edit'] ?? null;
        $this->container['asTyp'] = $data['asTyp'] ?? null;
        $this->container['trgPrc'] = $data['trgPrc'] ?? null;
        $this->container['avgPrc'] = $data['avgPrc'] ?? null;
        $this->container['dsQty'] = $data['dsQty'] ?? null;
        $this->container['ordID'] = $data['ordID'] ?? null;
        $this->container['sts'] = $data['sts'] ?? null;
        $this->container['dpInsTyp'] = $data['dpInsTyp'] ?? null;
        $this->container['rjRsn'] = $data['rjRsn'] ?? null;
        $this->container['userID'] = $data['userID'] ?? null;
        $this->container['dpExpDt'] = $data['dpExpDt'] ?? null;
        $this->container['ltSz'] = $data['ltSz'] ?? null;
        $this->container['tkSz'] = $data['tkSz'] ?? null;
        $this->container['desc'] = $data['desc'] ?? null;
        $this->container['prc'] = $data['prc'] ?? null;
        $this->container['exONo'] = $data['exONo'] ?? null;
        $this->container['exp'] = $data['exp'] ?? null;
        $this->container['rcvDt'] = $data['rcvDt'] ?? null;
        $this->container['pdQty'] = $data['pdQty'] ?? null;
        $this->container['userCmnt'] = $data['userCmnt'] ?? null;
        $this->container['isSL'] = $data['isSL'] ?? false;
        $this->container['isTgt'] = $data['isTgt'] ?? false;
        $this->container['flId'] = $data['flId'] ?? null;
        $this->container['rmk'] = $data['rmk'] ?? null;
        $this->container['boSeqId'] = $data['boSeqId'] ?? null;
        $this->container['epochTim'] = $data['epochTim'] ?? null;
        $this->container['ordTim'] = $data['ordTim'] ?? null;
        $this->container['trgId'] = $data['trgId'] ?? null;
        $this->container['dpVal'] = $data['dpVal'] ?? null;
        $this->container['cta'] = $data['cta'] ?? null;
        $this->container['ltp'] = $data['ltp'] ?? null;
        $this->container['vndSrc'] = $data['vndSrc'] ?? null;
        $this->container['bsktOrdId'] = $data['bsktOrdId'] ?? null;
        $this->container['bsktEpch'] = $data['bsktEpch'] ?? null;
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
     * Gets lstPos
     *
     * @return int|null
     */
    public function getLstPos()
    {
        return $this->container['lstPos'];
    }

    /**
     * Sets lstPos
     *
     * @param int|null $lstPos lstPos
     *
     * @return self
     */
    public function setLstPos($lstPos)
    {
        $this->container['lstPos'] = $lstPos;

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
     * @param string|null $stkPrc Strike price
     *
     * @return self
     */
    public function setStkPrc($stkPrc)
    {
        $this->container['stkPrc'] = $stkPrc;

        return $this;
    }

    /**
     * Gets isCOSecLeg
     *
     * @return string|null
     */
    public function getIsCOSecLeg()
    {
        return $this->container['isCOSecLeg'];
    }

    /**
     * Sets isCOSecLeg
     *
     * @param string|null $isCOSecLeg Cover Order second leg flag
     *
     * @return self
     */
    public function setIsCOSecLeg($isCOSecLeg)
    {
        $this->container['isCOSecLeg'] = $isCOSecLeg;

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
     * @param string|null $vlDt Order validity data -GTC/GTD
     *
     * @return self
     */
    public function setVlDt($vlDt)
    {
        $this->container['vlDt'] = $vlDt;

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
     * @param string|null $rcvTim Time
     *
     * @return self
     */
    public function setRcvTim($rcvTim)
    {
        $this->container['rcvTim'] = $rcvTim;

        return $this;
    }

    /**
     * Gets rcvEpTim
     *
     * @return string|null
     */
    public function getRcvEpTim()
    {
        return $this->container['rcvEpTim'];
    }

    /**
     * Sets rcvEpTim
     *
     * @param string|null $rcvEpTim Epoch time
     *
     * @return self
     */
    public function setRcvEpTim($rcvEpTim)
    {
        $this->container['rcvEpTim'] = $rcvEpTim;

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
     * @param string|null $sym Streaming symbol
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
     * @param string|null $cpName Company name
     *
     * @return self
     */
    public function setCpName($cpName)
    {
        $this->container['cpName'] = $cpName;

        return $this;
    }

    /**
     * Gets exit
     *
     * @return string|null
     */
    public function getExit()
    {
        return $this->container['exit'];
    }

    /**
     * Sets exit
     *
     * @param string|null $exit Exit flag
     *
     * @return self
     */
    public function setExit($exit)
    {
        $this->container['exit'] = $exit;

        return $this;
    }

    /**
     * Gets syomID
     *
     * @return string|null
     */
    public function getSyomID()
    {
        return $this->container['syomID'];
    }

    /**
     * Sets syomID
     *
     * @param string|null $syomID Traded order id
     *
     * @return self
     */
    public function setSyomID($syomID)
    {
        $this->container['syomID'] = $syomID;

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
     * Gets ntQty
     *
     * @return string|null
     */
    public function getNtQty()
    {
        return $this->container['ntQty'];
    }

    /**
     * Sets ntQty
     *
     * @param string|null $ntQty Net quantity
     *
     * @return self
     */
    public function setNtQty($ntQty)
    {
        $this->container['ntQty'] = $ntQty;

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
     * @param string|null $dpName Display scrip name
     *
     * @return self
     */
    public function setDpName($dpName)
    {
        $this->container['dpName'] = $dpName;

        return $this;
    }

    /**
     * Gets cancel
     *
     * @return string|null
     */
    public function getCancel()
    {
        return $this->container['cancel'];
    }

    /**
     * Sets cancel
     *
     * @param string|null $cancel Order Cancellatiion flag
     *
     * @return self
     */
    public function setCancel($cancel)
    {
        $this->container['cancel'] = $cancel;

        return $this;
    }

    /**
     * Gets sipID
     *
     * @return string|null
     */
    public function getSipID()
    {
        return $this->container['sipID'];
    }

    /**
     * Sets sipID
     *
     * @param string|null $sipID SIP Indicator
     *
     * @return self
     */
    public function setSipID($sipID)
    {
        $this->container['sipID'] = $sipID;

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
     * @param string|null $nstReqID Nest request id
     *
     * @return self
     */
    public function setNstReqID($nstReqID)
    {
        $this->container['nstReqID'] = $nstReqID;

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
     * @param string|null $qtyUnits Quantity -- commodity
     *
     * @return self
     */
    public function setQtyUnits($qtyUnits)
    {
        $this->container['qtyUnits'] = $qtyUnits;

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
     * @param string|null $opTyp Option type
     *
     * @return self
     */
    public function setOpTyp($opTyp)
    {
        $this->container['opTyp'] = $opTyp;

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
     * @param string|null $trsTyp Transaction type
     *
     * @return self
     */
    public function setTrsTyp($trsTyp)
    {
        $this->container['trsTyp'] = $trsTyp;

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
     * @param string|null $srs Series
     *
     * @return self
     */
    public function setSrs($srs)
    {
        $this->container['srs'] = $srs;

        return $this;
    }

    /**
     * Gets reqQty
     *
     * @return string|null
     */
    public function getReqQty()
    {
        return $this->container['reqQty'];
    }

    /**
     * Sets reqQty
     *
     * @param string|null $reqQty Requested quantity - not using
     *
     * @return self
     */
    public function setReqQty($reqQty)
    {
        $this->container['reqQty'] = $reqQty;

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
     * Gets ogt
     *
     * @return string|null
     */
    public function getOgt()
    {
        return $this->container['ogt'];
    }

    /**
     * Sets ogt
     *
     * @param string|null $ogt Order generation type
     *
     * @return self
     */
    public function setOgt($ogt)
    {
        $this->container['ogt'] = $ogt;

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
     * @param string|null $flQty Quantity traded
     *
     * @return self
     */
    public function setFlQty($flQty)
    {
        $this->container['flQty'] = $flQty;

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
     * @param string|null $trdSym Trading symbol
     *
     * @return self
     */
    public function setTrdSym($trdSym)
    {
        $this->container['trdSym'] = $trdSym;

        return $this;
    }

    /**
     * Gets edit
     *
     * @return string|null
     */
    public function getEdit()
    {
        return $this->container['edit'];
    }

    /**
     * Sets edit
     *
     * @param string|null $edit Order modification flag
     *
     * @return self
     */
    public function setEdit($edit)
    {
        $this->container['edit'] = $edit;

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
     * @param string|null $asTyp Asset type
     *
     * @return self
     */
    public function setAsTyp($asTyp)
    {
        $this->container['asTyp'] = $asTyp;

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
     * @param string|null $trgPrc Trigger price
     *
     * @return self
     */
    public function setTrgPrc($trgPrc)
    {
        $this->container['trgPrc'] = $trgPrc;

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
     * @param string|null $avgPrc Average price
     *
     * @return self
     */
    public function setAvgPrc($avgPrc)
    {
        $this->container['avgPrc'] = $avgPrc;

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
     * @param string|null $dsQty Disclosed quantity
     *
     * @return self
     */
    public function setDsQty($dsQty)
    {
        $this->container['dsQty'] = $dsQty;

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
     * @param string|null $ordID Order number
     *
     * @return self
     */
    public function setOrdID($ordID)
    {
        $this->container['ordID'] = $ordID;

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
     * @param string|null $sts Order Status
     *
     * @return self
     */
    public function setSts($sts)
    {
        $this->container['sts'] = $sts;

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
     * @param string|null $dpInsTyp Display instrument type
     *
     * @return self
     */
    public function setDpInsTyp($dpInsTyp)
    {
        $this->container['dpInsTyp'] = $dpInsTyp;

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
     * @param string|null $rjRsn Rejection reason
     *
     * @return self
     */
    public function setRjRsn($rjRsn)
    {
        $this->container['rjRsn'] = $rjRsn;

        return $this;
    }

    /**
     * Gets userID
     *
     * @return string|null
     */
    public function getUserID()
    {
        return $this->container['userID'];
    }

    /**
     * Sets userID
     *
     * @param string|null $userID User id
     *
     * @return self
     */
    public function setUserID($userID)
    {
        $this->container['userID'] = $userID;

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
     * @param string|null $dpExpDt Display expiry date
     *
     * @return self
     */
    public function setDpExpDt($dpExpDt)
    {
        $this->container['dpExpDt'] = $dpExpDt;

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
     * @param string|null $ltSz Lot size
     *
     * @return self
     */
    public function setLtSz($ltSz)
    {
        $this->container['ltSz'] = $ltSz;

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
     * @param string|null $tkSz Tick size
     *
     * @return self
     */
    public function setTkSz($tkSz)
    {
        $this->container['tkSz'] = $tkSz;

        return $this;
    }

    /**
     * Gets desc
     *
     * @return string|null
     */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
     * Sets desc
     *
     * @param string|null $desc Order description
     *
     * @return self
     */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;

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
     * @param string|null $exONo Exchange order number
     *
     * @return self
     */
    public function setExONo($exONo)
    {
        $this->container['exONo'] = $exONo;

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
     * @param string|null $exp Scrip expiry
     *
     * @return self
     */
    public function setExp($exp)
    {
        $this->container['exp'] = $exp;

        return $this;
    }

    /**
     * Gets rcvDt
     *
     * @return string|null
     */
    public function getRcvDt()
    {
        return $this->container['rcvDt'];
    }

    /**
     * Sets rcvDt
     *
     * @param string|null $rcvDt Order recieved date
     *
     * @return self
     */
    public function setRcvDt($rcvDt)
    {
        $this->container['rcvDt'] = $rcvDt;

        return $this;
    }

    /**
     * Gets pdQty
     *
     * @return string|null
     */
    public function getPdQty()
    {
        return $this->container['pdQty'];
    }

    /**
     * Sets pdQty
     *
     * @param string|null $pdQty Pending quantity
     *
     * @return self
     */
    public function setPdQty($pdQty)
    {
        $this->container['pdQty'] = $pdQty;

        return $this;
    }

    /**
     * Gets userCmnt
     *
     * @return string|null
     */
    public function getUserCmnt()
    {
        return $this->container['userCmnt'];
    }

    /**
     * Sets userCmnt
     *
     * @param string|null $userCmnt Comment added by user while placing the order
     *
     * @return self
     */
    public function setUserCmnt($userCmnt)
    {
        $this->container['userCmnt'] = $userCmnt;

        return $this;
    }

    /**
     * Gets isSL
     *
     * @return bool|null
     */
    public function getIsSL()
    {
        return $this->container['isSL'];
    }

    /**
     * Sets isSL
     *
     * @param bool|null $isSL Bracket order SL leg flag
     *
     * @return self
     */
    public function setIsSL($isSL)
    {
        $this->container['isSL'] = $isSL;

        return $this;
    }

    /**
     * Gets isTgt
     *
     * @return bool|null
     */
    public function getIsTgt()
    {
        return $this->container['isTgt'];
    }

    /**
     * Sets isTgt
     *
     * @param bool|null $isTgt Flag for target leg of bracket order
     *
     * @return self
     */
    public function setIsTgt($isTgt)
    {
        $this->container['isTgt'] = $isTgt;

        return $this;
    }

    /**
     * Gets flId
     *
     * @return string|null
     */
    public function getFlId()
    {
        return $this->container['flId'];
    }

    /**
     * Sets flId
     *
     * @param string|null $flId Fill id comes when order is traded (fully or partially)
     *
     * @return self
     */
    public function setFlId($flId)
    {
        $this->container['flId'] = $flId;

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
     * @param string|null $rmk Remark added by the small case user while placing the order
     *
     * @return self
     */
    public function setRmk($rmk)
    {
        $this->container['rmk'] = $rmk;

        return $this;
    }

    /**
     * Gets boSeqId
     *
     * @return string|null
     */
    public function getBoSeqId()
    {
        return $this->container['boSeqId'];
    }

    /**
     * Sets boSeqId
     *
     * @param string|null $boSeqId Sequence id for bracket order legs
     *
     * @return self
     */
    public function setBoSeqId($boSeqId)
    {
        $this->container['boSeqId'] = $boSeqId;

        return $this;
    }

    /**
     * Gets epochTim
     *
     * @return string|null
     */
    public function getEpochTim()
    {
        return $this->container['epochTim'];
    }

    /**
     * Sets epochTim
     *
     * @param string|null $epochTim epochTim
     *
     * @return self
     */
    public function setEpochTim($epochTim)
    {
        $this->container['epochTim'] = $epochTim;

        return $this;
    }

    /**
     * Gets ordTim
     *
     * @return string|null
     */
    public function getOrdTim()
    {
        return $this->container['ordTim'];
    }

    /**
     * Sets ordTim
     *
     * @param string|null $ordTim Time stamp
     *
     * @return self
     */
    public function setOrdTim($ordTim)
    {
        $this->container['ordTim'] = $ordTim;

        return $this;
    }

    /**
     * Gets trgId
     *
     * @return string|null
     */
    public function getTrgId()
    {
        return $this->container['trgId'];
    }

    /**
     * Sets trgId
     *
     * @param string|null $trgId Trigger ID
     *
     * @return self
     */
    public function setTrgId($trgId)
    {
        $this->container['trgId'] = $trgId;

        return $this;
    }

    /**
     * Gets dpVal
     *
     * @return string|null
     */
    public function getDpVal()
    {
        return $this->container['dpVal'];
    }

    /**
     * Sets dpVal
     *
     * @param string|null $dpVal display real scrip name
     *
     * @return self
     */
    public function setDpVal($dpVal)
    {
        $this->container['dpVal'] = $dpVal;

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
     * @param string|null $cta Call to action based on rejection reason
     *
     * @return self
     */
    public function setCta($cta)
    {
        $this->container['cta'] = $cta;

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
     * @param string|null $ltp Last Traded Price
     *
     * @return self
     */
    public function setLtp($ltp)
    {
        $this->container['ltp'] = $ltp;

        return $this;
    }

    /**
     * Gets vndSrc
     *
     * @return string|null
     */
    public function getVndSrc()
    {
        return $this->container['vndSrc'];
    }

    /**
     * Sets vndSrc
     *
     * @param string|null $vndSrc Order source vendor (value may be null if unavailable)
     *
     * @return self
     */
    public function setVndSrc($vndSrc)
    {
        $this->container['vndSrc'] = $vndSrc;

        return $this;
    }

    /**
     * Gets bsktOrdId
     *
     * @return string|null
     */
    public function getBsktOrdId()
    {
        return $this->container['bsktOrdId'];
    }

    /**
     * Sets bsktOrdId
     *
     * @param string|null $bsktOrdId Basket Order Id
     *
     * @return self
     */
    public function setBsktOrdId($bsktOrdId)
    {
        $this->container['bsktOrdId'] = $bsktOrdId;

        return $this;
    }

    /**
     * Gets bsktEpch
     *
     * @return string|null
     */
    public function getBsktEpch()
    {
        return $this->container['bsktEpch'];
    }

    /**
     * Sets bsktEpch
     *
     * @param string|null $bsktEpch Basket Order Placement Time
     *
     * @return self
     */
    public function setBsktEpch($bsktEpch)
    {
        $this->container['bsktEpch'] = $bsktEpch;

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


