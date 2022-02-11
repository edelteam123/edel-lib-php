<?php
/**
 * ComOrderBookResponseObject
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
 * ComOrderBookResponseObject Class Doc Comment
 *
 * @category Class
 * @package  com\edel
 * @author   Edelweiss
 * @link     https://www.edelweiss.in
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ComOrderBookResponseObject implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelName = 'ComOrderBookResponseObject';

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
        'trdSym' => 'string',
        'sym' => 'string',
        'srs' => 'string',
        'cpName' => 'string',
        'prc' => 'string',
        'avgPrc' => 'string',
        'ntQty' => 'string',
        'dsQty' => 'string',
        'flQty' => 'string',
        'trgPrc' => 'string',
        'exONo' => 'string',
        'sts' => 'string',
        'rjRsn' => 'string',
        'ordTyp' => '\com\edel\edelconnect\models\OrderType',
        'rcvTim' => 'string',
        'dur' => 'string',
        'vlDt' => 'string',
        'prdCode' => '\com\edel\edelconnect\models\PrdCode',
        'ogt' => 'string',
        'sipID' => 'string',
        'userID' => 'string',
        'pdQty' => 'string',
        'desc' => 'string',
        'dpInsTyp' => 'string',
        'dpExpDt' => 'string',
        'stkPrc' => 'string',
        'opTyp' => 'string',
        'edit' => 'string',
        'cancel' => 'string',
        'exit' => 'string',
        'asTyp' => 'string',
        'tkSz' => 'string',
        'ltSz' => 'string',
        'isCOSecLeg' => 'string',
        'exp' => 'string',
        'dpName' => 'string',
        'qtyUnits' => 'string',
        'rcvEpTim' => 'string',
        'rmk' => 'string',
        'trgId' => 'string',
        'userCmnt' => 'string',
        'cta' => 'string',
        'ltp' => 'string'
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
        'trdSym' => null,
        'sym' => null,
        'srs' => null,
        'cpName' => null,
        'prc' => null,
        'avgPrc' => null,
        'ntQty' => null,
        'dsQty' => null,
        'flQty' => null,
        'trgPrc' => null,
        'exONo' => null,
        'sts' => null,
        'rjRsn' => null,
        'ordTyp' => null,
        'rcvTim' => null,
        'dur' => null,
        'vlDt' => null,
        'prdCode' => null,
        'ogt' => null,
        'sipID' => null,
        'userID' => null,
        'pdQty' => null,
        'desc' => null,
        'dpInsTyp' => null,
        'dpExpDt' => null,
        'stkPrc' => null,
        'opTyp' => null,
        'edit' => null,
        'cancel' => null,
        'exit' => null,
        'asTyp' => null,
        'tkSz' => null,
        'ltSz' => null,
        'isCOSecLeg' => null,
        'exp' => null,
        'dpName' => null,
        'qtyUnits' => null,
        'rcvEpTim' => null,
        'rmk' => null,
        'trgId' => null,
        'userCmnt' => null,
        'cta' => null,
        'ltp' => null
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
        'trdSym' => 'trdSym',
        'sym' => 'sym',
        'srs' => 'srs',
        'cpName' => 'cpName',
        'prc' => 'prc',
        'avgPrc' => 'avgPrc',
        'ntQty' => 'ntQty',
        'dsQty' => 'dsQty',
        'flQty' => 'flQty',
        'trgPrc' => 'trgPrc',
        'exONo' => 'exONo',
        'sts' => 'sts',
        'rjRsn' => 'rjRsn',
        'ordTyp' => 'ordTyp',
        'rcvTim' => 'rcvTim',
        'dur' => 'dur',
        'vlDt' => 'vlDt',
        'prdCode' => 'prdCode',
        'ogt' => 'ogt',
        'sipID' => 'sipID',
        'userID' => 'userID',
        'pdQty' => 'pdQty',
        'desc' => 'desc',
        'dpInsTyp' => 'dpInsTyp',
        'dpExpDt' => 'dpExpDt',
        'stkPrc' => 'stkPrc',
        'opTyp' => 'opTyp',
        'edit' => 'edit',
        'cancel' => 'cancel',
        'exit' => 'exit',
        'asTyp' => 'asTyp',
        'tkSz' => 'tkSz',
        'ltSz' => 'ltSz',
        'isCOSecLeg' => 'isCOSecLeg',
        'exp' => 'exp',
        'dpName' => 'dpName',
        'qtyUnits' => 'qtyUnits',
        'rcvEpTim' => 'rcvEpTim',
        'rmk' => 'rmk',
        'trgId' => 'trgId',
        'userCmnt' => 'userCmnt',
        'cta' => 'cta',
        'ltp' => 'ltp'
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
        'trdSym' => 'setTrdSym',
        'sym' => 'setSym',
        'srs' => 'setSrs',
        'cpName' => 'setCpName',
        'prc' => 'setPrc',
        'avgPrc' => 'setAvgPrc',
        'ntQty' => 'setNtQty',
        'dsQty' => 'setDsQty',
        'flQty' => 'setFlQty',
        'trgPrc' => 'setTrgPrc',
        'exONo' => 'setExONo',
        'sts' => 'setSts',
        'rjRsn' => 'setRjRsn',
        'ordTyp' => 'setOrdTyp',
        'rcvTim' => 'setRcvTim',
        'dur' => 'setDur',
        'vlDt' => 'setVlDt',
        'prdCode' => 'setPrdCode',
        'ogt' => 'setOgt',
        'sipID' => 'setSipID',
        'userID' => 'setUserID',
        'pdQty' => 'setPdQty',
        'desc' => 'setDesc',
        'dpInsTyp' => 'setDpInsTyp',
        'dpExpDt' => 'setDpExpDt',
        'stkPrc' => 'setStkPrc',
        'opTyp' => 'setOpTyp',
        'edit' => 'setEdit',
        'cancel' => 'setCancel',
        'exit' => 'setExit',
        'asTyp' => 'setAsTyp',
        'tkSz' => 'setTkSz',
        'ltSz' => 'setLtSz',
        'isCOSecLeg' => 'setIsCOSecLeg',
        'exp' => 'setExp',
        'dpName' => 'setDpName',
        'qtyUnits' => 'setQtyUnits',
        'rcvEpTim' => 'setRcvEpTim',
        'rmk' => 'setRmk',
        'trgId' => 'setTrgId',
        'userCmnt' => 'setUserCmnt',
        'cta' => 'setCta',
        'ltp' => 'setLtp'
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
        'trdSym' => 'getTrdSym',
        'sym' => 'getSym',
        'srs' => 'getSrs',
        'cpName' => 'getCpName',
        'prc' => 'getPrc',
        'avgPrc' => 'getAvgPrc',
        'ntQty' => 'getNtQty',
        'dsQty' => 'getDsQty',
        'flQty' => 'getFlQty',
        'trgPrc' => 'getTrgPrc',
        'exONo' => 'getExONo',
        'sts' => 'getSts',
        'rjRsn' => 'getRjRsn',
        'ordTyp' => 'getOrdTyp',
        'rcvTim' => 'getRcvTim',
        'dur' => 'getDur',
        'vlDt' => 'getVlDt',
        'prdCode' => 'getPrdCode',
        'ogt' => 'getOgt',
        'sipID' => 'getSipID',
        'userID' => 'getUserID',
        'pdQty' => 'getPdQty',
        'desc' => 'getDesc',
        'dpInsTyp' => 'getDpInsTyp',
        'dpExpDt' => 'getDpExpDt',
        'stkPrc' => 'getStkPrc',
        'opTyp' => 'getOpTyp',
        'edit' => 'getEdit',
        'cancel' => 'getCancel',
        'exit' => 'getExit',
        'asTyp' => 'getAsTyp',
        'tkSz' => 'getTkSz',
        'ltSz' => 'getLtSz',
        'isCOSecLeg' => 'getIsCOSecLeg',
        'exp' => 'getExp',
        'dpName' => 'getDpName',
        'qtyUnits' => 'getQtyUnits',
        'rcvEpTim' => 'getRcvEpTim',
        'rmk' => 'getRmk',
        'trgId' => 'getTrgId',
        'userCmnt' => 'getUserCmnt',
        'cta' => 'getCta',
        'ltp' => 'getLtp'
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
        $this->container['trdSym'] = $data['trdSym'] ?? null;
        $this->container['sym'] = $data['sym'] ?? null;
        $this->container['srs'] = $data['srs'] ?? null;
        $this->container['cpName'] = $data['cpName'] ?? null;
        $this->container['prc'] = $data['prc'] ?? null;
        $this->container['avgPrc'] = $data['avgPrc'] ?? null;
        $this->container['ntQty'] = $data['ntQty'] ?? null;
        $this->container['dsQty'] = $data['dsQty'] ?? null;
        $this->container['flQty'] = $data['flQty'] ?? null;
        $this->container['trgPrc'] = $data['trgPrc'] ?? null;
        $this->container['exONo'] = $data['exONo'] ?? null;
        $this->container['sts'] = $data['sts'] ?? null;
        $this->container['rjRsn'] = $data['rjRsn'] ?? null;
        $this->container['ordTyp'] = $data['ordTyp'] ?? null;
        $this->container['rcvTim'] = $data['rcvTim'] ?? null;
        $this->container['dur'] = $data['dur'] ?? null;
        $this->container['vlDt'] = $data['vlDt'] ?? null;
        $this->container['prdCode'] = $data['prdCode'] ?? null;
        $this->container['ogt'] = $data['ogt'] ?? null;
        $this->container['sipID'] = $data['sipID'] ?? null;
        $this->container['userID'] = $data['userID'] ?? null;
        $this->container['pdQty'] = $data['pdQty'] ?? null;
        $this->container['desc'] = $data['desc'] ?? null;
        $this->container['dpInsTyp'] = $data['dpInsTyp'] ?? null;
        $this->container['dpExpDt'] = $data['dpExpDt'] ?? null;
        $this->container['stkPrc'] = $data['stkPrc'] ?? null;
        $this->container['opTyp'] = $data['opTyp'] ?? null;
        $this->container['edit'] = $data['edit'] ?? null;
        $this->container['cancel'] = $data['cancel'] ?? null;
        $this->container['exit'] = $data['exit'] ?? null;
        $this->container['asTyp'] = $data['asTyp'] ?? null;
        $this->container['tkSz'] = $data['tkSz'] ?? null;
        $this->container['ltSz'] = $data['ltSz'] ?? null;
        $this->container['isCOSecLeg'] = $data['isCOSecLeg'] ?? null;
        $this->container['exp'] = $data['exp'] ?? null;
        $this->container['dpName'] = $data['dpName'] ?? null;
        $this->container['qtyUnits'] = $data['qtyUnits'] ?? null;
        $this->container['rcvEpTim'] = $data['rcvEpTim'] ?? null;
        $this->container['rmk'] = $data['rmk'] ?? null;
        $this->container['trgId'] = $data['trgId'] ?? null;
        $this->container['userCmnt'] = $data['userCmnt'] ?? null;
        $this->container['cta'] = $data['cta'] ?? null;
        $this->container['ltp'] = $data['ltp'] ?? null;
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
     * @param string|null $prc prc
     *
     * @return self
     */
    public function setPrc($prc)
    {
        $this->container['prc'] = $prc;

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
     * @param string|null $ntQty ntQty
     *
     * @return self
     */
    public function setNtQty($ntQty)
    {
        $this->container['ntQty'] = $ntQty;

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
     * @param string|null $ogt ogt
     *
     * @return self
     */
    public function setOgt($ogt)
    {
        $this->container['ogt'] = $ogt;

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
     * @param string|null $sipID sipID
     *
     * @return self
     */
    public function setSipID($sipID)
    {
        $this->container['sipID'] = $sipID;

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
     * @param string|null $userID userID
     *
     * @return self
     */
    public function setUserID($userID)
    {
        $this->container['userID'] = $userID;

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
     * @param string|null $pdQty pdQty
     *
     * @return self
     */
    public function setPdQty($pdQty)
    {
        $this->container['pdQty'] = $pdQty;

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
     * @param string|null $desc desc
     *
     * @return self
     */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;

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
     * @param string|null $edit edit
     *
     * @return self
     */
    public function setEdit($edit)
    {
        $this->container['edit'] = $edit;

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
     * @param string|null $cancel cancel
     *
     * @return self
     */
    public function setCancel($cancel)
    {
        $this->container['cancel'] = $cancel;

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
     * @param string|null $exit exit
     *
     * @return self
     */
    public function setExit($exit)
    {
        $this->container['exit'] = $exit;

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
     * @param string|null $isCOSecLeg isCOSecLeg
     *
     * @return self
     */
    public function setIsCOSecLeg($isCOSecLeg)
    {
        $this->container['isCOSecLeg'] = $isCOSecLeg;

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
     * @param string|null $rcvEpTim rcvEpTim
     *
     * @return self
     */
    public function setRcvEpTim($rcvEpTim)
    {
        $this->container['rcvEpTim'] = $rcvEpTim;

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


