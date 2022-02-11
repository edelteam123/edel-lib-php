<?php
/**
 * ComPositionBookObject
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
 * ComPositionBookObject Class Doc Comment
 *
 * @category Class
 * @package  com\edel
 * @author   Edelweiss
 * @link     https://www.edelweiss.in
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ComPositionBookObject implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelName = 'ComPositionBookObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'exc' => 'string',
        'trdSym' => 'string',
        'sym' => 'string',
        'cpName' => 'string',
        'byQty' => 'string',
        'avgByPrc' => 'string',
        'byAmt' => 'string',
        'slQty' => 'string',
        'avgSlPrc' => 'string',
        'slAmt' => 'string',
        'ntAmt' => 'string',
        'ntQty' => 'string',
        'prdCode' => '\com\edel\edelconnect\models\PrdCode',
        'rlzPL' => 'string',
        'urlzPL' => 'string',
        'mtm' => 'string',
        'ltp' => 'string',
        'dpExpDt' => 'string',
        'brkEvnPrc' => 'string',
        'dpInsTyp' => 'string',
        'opTyp' => 'string',
        'stkPrc' => 'string',
        'sqOff' => 'string',
        'asTyp' => 'string',
        'ntPL' => 'string',
        'tkSz' => 'string',
        'ltSz' => 'string',
        'mul' => 'string',
        'trsTyp' => 'string',
        'dpName' => 'string',
        'prc' => 'string',
        'rchFlg' => 'string',
        'nwsFlg' => 'string',
        'gn' => 'string',
        'gd' => 'string',
        'pn' => 'string',
        'pd' => 'string'
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
        'trdSym' => null,
        'sym' => null,
        'cpName' => null,
        'byQty' => null,
        'avgByPrc' => null,
        'byAmt' => null,
        'slQty' => null,
        'avgSlPrc' => null,
        'slAmt' => null,
        'ntAmt' => null,
        'ntQty' => null,
        'prdCode' => null,
        'rlzPL' => null,
        'urlzPL' => null,
        'mtm' => null,
        'ltp' => null,
        'dpExpDt' => null,
        'brkEvnPrc' => null,
        'dpInsTyp' => null,
        'opTyp' => null,
        'stkPrc' => null,
        'sqOff' => null,
        'asTyp' => null,
        'ntPL' => null,
        'tkSz' => null,
        'ltSz' => null,
        'mul' => null,
        'trsTyp' => null,
        'dpName' => null,
        'prc' => null,
        'rchFlg' => null,
        'nwsFlg' => null,
        'gn' => null,
        'gd' => null,
        'pn' => null,
        'pd' => null
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
        'trdSym' => 'trdSym',
        'sym' => 'sym',
        'cpName' => 'cpName',
        'byQty' => 'byQty',
        'avgByPrc' => 'avgByPrc',
        'byAmt' => 'byAmt',
        'slQty' => 'slQty',
        'avgSlPrc' => 'avgSlPrc',
        'slAmt' => 'slAmt',
        'ntAmt' => 'ntAmt',
        'ntQty' => 'ntQty',
        'prdCode' => 'prdCode',
        'rlzPL' => 'rlzPL',
        'urlzPL' => 'urlzPL',
        'mtm' => 'mtm',
        'ltp' => 'ltp',
        'dpExpDt' => 'dpExpDt',
        'brkEvnPrc' => 'brkEvnPrc',
        'dpInsTyp' => 'dpInsTyp',
        'opTyp' => 'opTyp',
        'stkPrc' => 'stkPrc',
        'sqOff' => 'sqOff',
        'asTyp' => 'asTyp',
        'ntPL' => 'ntPL',
        'tkSz' => 'tkSz',
        'ltSz' => 'ltSz',
        'mul' => 'mul',
        'trsTyp' => 'trsTyp',
        'dpName' => 'dpName',
        'prc' => 'prc',
        'rchFlg' => 'rchFlg',
        'nwsFlg' => 'nwsFlg',
        'gn' => 'gn',
        'gd' => 'gd',
        'pn' => 'pn',
        'pd' => 'pd'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'exc' => 'setExc',
        'trdSym' => 'setTrdSym',
        'sym' => 'setSym',
        'cpName' => 'setCpName',
        'byQty' => 'setByQty',
        'avgByPrc' => 'setAvgByPrc',
        'byAmt' => 'setByAmt',
        'slQty' => 'setSlQty',
        'avgSlPrc' => 'setAvgSlPrc',
        'slAmt' => 'setSlAmt',
        'ntAmt' => 'setNtAmt',
        'ntQty' => 'setNtQty',
        'prdCode' => 'setPrdCode',
        'rlzPL' => 'setRlzPL',
        'urlzPL' => 'setUrlzPL',
        'mtm' => 'setMtm',
        'ltp' => 'setLtp',
        'dpExpDt' => 'setDpExpDt',
        'brkEvnPrc' => 'setBrkEvnPrc',
        'dpInsTyp' => 'setDpInsTyp',
        'opTyp' => 'setOpTyp',
        'stkPrc' => 'setStkPrc',
        'sqOff' => 'setSqOff',
        'asTyp' => 'setAsTyp',
        'ntPL' => 'setNtPL',
        'tkSz' => 'setTkSz',
        'ltSz' => 'setLtSz',
        'mul' => 'setMul',
        'trsTyp' => 'setTrsTyp',
        'dpName' => 'setDpName',
        'prc' => 'setPrc',
        'rchFlg' => 'setRchFlg',
        'nwsFlg' => 'setNwsFlg',
        'gn' => 'setGn',
        'gd' => 'setGd',
        'pn' => 'setPn',
        'pd' => 'setPd'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'exc' => 'getExc',
        'trdSym' => 'getTrdSym',
        'sym' => 'getSym',
        'cpName' => 'getCpName',
        'byQty' => 'getByQty',
        'avgByPrc' => 'getAvgByPrc',
        'byAmt' => 'getByAmt',
        'slQty' => 'getSlQty',
        'avgSlPrc' => 'getAvgSlPrc',
        'slAmt' => 'getSlAmt',
        'ntAmt' => 'getNtAmt',
        'ntQty' => 'getNtQty',
        'prdCode' => 'getPrdCode',
        'rlzPL' => 'getRlzPL',
        'urlzPL' => 'getUrlzPL',
        'mtm' => 'getMtm',
        'ltp' => 'getLtp',
        'dpExpDt' => 'getDpExpDt',
        'brkEvnPrc' => 'getBrkEvnPrc',
        'dpInsTyp' => 'getDpInsTyp',
        'opTyp' => 'getOpTyp',
        'stkPrc' => 'getStkPrc',
        'sqOff' => 'getSqOff',
        'asTyp' => 'getAsTyp',
        'ntPL' => 'getNtPL',
        'tkSz' => 'getTkSz',
        'ltSz' => 'getLtSz',
        'mul' => 'getMul',
        'trsTyp' => 'getTrsTyp',
        'dpName' => 'getDpName',
        'prc' => 'getPrc',
        'rchFlg' => 'getRchFlg',
        'nwsFlg' => 'getNwsFlg',
        'gn' => 'getGn',
        'gd' => 'getGd',
        'pn' => 'getPn',
        'pd' => 'getPd'
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
        $this->container['trdSym'] = $data['trdSym'] ?? null;
        $this->container['sym'] = $data['sym'] ?? null;
        $this->container['cpName'] = $data['cpName'] ?? null;
        $this->container['byQty'] = $data['byQty'] ?? null;
        $this->container['avgByPrc'] = $data['avgByPrc'] ?? null;
        $this->container['byAmt'] = $data['byAmt'] ?? null;
        $this->container['slQty'] = $data['slQty'] ?? null;
        $this->container['avgSlPrc'] = $data['avgSlPrc'] ?? null;
        $this->container['slAmt'] = $data['slAmt'] ?? null;
        $this->container['ntAmt'] = $data['ntAmt'] ?? null;
        $this->container['ntQty'] = $data['ntQty'] ?? null;
        $this->container['prdCode'] = $data['prdCode'] ?? null;
        $this->container['rlzPL'] = $data['rlzPL'] ?? null;
        $this->container['urlzPL'] = $data['urlzPL'] ?? null;
        $this->container['mtm'] = $data['mtm'] ?? null;
        $this->container['ltp'] = $data['ltp'] ?? null;
        $this->container['dpExpDt'] = $data['dpExpDt'] ?? null;
        $this->container['brkEvnPrc'] = $data['brkEvnPrc'] ?? null;
        $this->container['dpInsTyp'] = $data['dpInsTyp'] ?? null;
        $this->container['opTyp'] = $data['opTyp'] ?? null;
        $this->container['stkPrc'] = $data['stkPrc'] ?? null;
        $this->container['sqOff'] = $data['sqOff'] ?? null;
        $this->container['asTyp'] = $data['asTyp'] ?? null;
        $this->container['ntPL'] = $data['ntPL'] ?? null;
        $this->container['tkSz'] = $data['tkSz'] ?? null;
        $this->container['ltSz'] = $data['ltSz'] ?? null;
        $this->container['mul'] = $data['mul'] ?? null;
        $this->container['trsTyp'] = $data['trsTyp'] ?? null;
        $this->container['dpName'] = $data['dpName'] ?? null;
        $this->container['prc'] = $data['prc'] ?? null;
        $this->container['rchFlg'] = $data['rchFlg'] ?? null;
        $this->container['nwsFlg'] = $data['nwsFlg'] ?? null;
        $this->container['gn'] = $data['gn'] ?? null;
        $this->container['gd'] = $data['gd'] ?? null;
        $this->container['pn'] = $data['pn'] ?? null;
        $this->container['pd'] = $data['pd'] ?? null;
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
     * Gets byQty
     *
     * @return string|null
     */
    public function getByQty()
    {
        return $this->container['byQty'];
    }

    /**
     * Sets byQty
     *
     * @param string|null $byQty byQty
     *
     * @return self
     */
    public function setByQty($byQty)
    {
        $this->container['byQty'] = $byQty;

        return $this;
    }

    /**
     * Gets avgByPrc
     *
     * @return string|null
     */
    public function getAvgByPrc()
    {
        return $this->container['avgByPrc'];
    }

    /**
     * Sets avgByPrc
     *
     * @param string|null $avgByPrc avgByPrc
     *
     * @return self
     */
    public function setAvgByPrc($avgByPrc)
    {
        $this->container['avgByPrc'] = $avgByPrc;

        return $this;
    }

    /**
     * Gets byAmt
     *
     * @return string|null
     */
    public function getByAmt()
    {
        return $this->container['byAmt'];
    }

    /**
     * Sets byAmt
     *
     * @param string|null $byAmt byAmt
     *
     * @return self
     */
    public function setByAmt($byAmt)
    {
        $this->container['byAmt'] = $byAmt;

        return $this;
    }

    /**
     * Gets slQty
     *
     * @return string|null
     */
    public function getSlQty()
    {
        return $this->container['slQty'];
    }

    /**
     * Sets slQty
     *
     * @param string|null $slQty slQty
     *
     * @return self
     */
    public function setSlQty($slQty)
    {
        $this->container['slQty'] = $slQty;

        return $this;
    }

    /**
     * Gets avgSlPrc
     *
     * @return string|null
     */
    public function getAvgSlPrc()
    {
        return $this->container['avgSlPrc'];
    }

    /**
     * Sets avgSlPrc
     *
     * @param string|null $avgSlPrc avgSlPrc
     *
     * @return self
     */
    public function setAvgSlPrc($avgSlPrc)
    {
        $this->container['avgSlPrc'] = $avgSlPrc;

        return $this;
    }

    /**
     * Gets slAmt
     *
     * @return string|null
     */
    public function getSlAmt()
    {
        return $this->container['slAmt'];
    }

    /**
     * Sets slAmt
     *
     * @param string|null $slAmt slAmt
     *
     * @return self
     */
    public function setSlAmt($slAmt)
    {
        $this->container['slAmt'] = $slAmt;

        return $this;
    }

    /**
     * Gets ntAmt
     *
     * @return string|null
     */
    public function getNtAmt()
    {
        return $this->container['ntAmt'];
    }

    /**
     * Sets ntAmt
     *
     * @param string|null $ntAmt ntAmt
     *
     * @return self
     */
    public function setNtAmt($ntAmt)
    {
        $this->container['ntAmt'] = $ntAmt;

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
     * Gets rlzPL
     *
     * @return string|null
     */
    public function getRlzPL()
    {
        return $this->container['rlzPL'];
    }

    /**
     * Sets rlzPL
     *
     * @param string|null $rlzPL rlzPL
     *
     * @return self
     */
    public function setRlzPL($rlzPL)
    {
        $this->container['rlzPL'] = $rlzPL;

        return $this;
    }

    /**
     * Gets urlzPL
     *
     * @return string|null
     */
    public function getUrlzPL()
    {
        return $this->container['urlzPL'];
    }

    /**
     * Sets urlzPL
     *
     * @param string|null $urlzPL urlzPL
     *
     * @return self
     */
    public function setUrlzPL($urlzPL)
    {
        $this->container['urlzPL'] = $urlzPL;

        return $this;
    }

    /**
     * Gets mtm
     *
     * @return string|null
     */
    public function getMtm()
    {
        return $this->container['mtm'];
    }

    /**
     * Sets mtm
     *
     * @param string|null $mtm mtm
     *
     * @return self
     */
    public function setMtm($mtm)
    {
        $this->container['mtm'] = $mtm;

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
     * Gets brkEvnPrc
     *
     * @return string|null
     */
    public function getBrkEvnPrc()
    {
        return $this->container['brkEvnPrc'];
    }

    /**
     * Sets brkEvnPrc
     *
     * @param string|null $brkEvnPrc brkEvnPrc
     *
     * @return self
     */
    public function setBrkEvnPrc($brkEvnPrc)
    {
        $this->container['brkEvnPrc'] = $brkEvnPrc;

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
     * Gets sqOff
     *
     * @return string|null
     */
    public function getSqOff()
    {
        return $this->container['sqOff'];
    }

    /**
     * Sets sqOff
     *
     * @param string|null $sqOff sqOff
     *
     * @return self
     */
    public function setSqOff($sqOff)
    {
        $this->container['sqOff'] = $sqOff;

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
     * Gets ntPL
     *
     * @return string|null
     */
    public function getNtPL()
    {
        return $this->container['ntPL'];
    }

    /**
     * Sets ntPL
     *
     * @param string|null $ntPL ntPL
     *
     * @return self
     */
    public function setNtPL($ntPL)
    {
        $this->container['ntPL'] = $ntPL;

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
     * Gets mul
     *
     * @return string|null
     */
    public function getMul()
    {
        return $this->container['mul'];
    }

    /**
     * Sets mul
     *
     * @param string|null $mul mul
     *
     * @return self
     */
    public function setMul($mul)
    {
        $this->container['mul'] = $mul;

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
     * Gets rchFlg
     *
     * @return string|null
     */
    public function getRchFlg()
    {
        return $this->container['rchFlg'];
    }

    /**
     * Sets rchFlg
     *
     * @param string|null $rchFlg rchFlg
     *
     * @return self
     */
    public function setRchFlg($rchFlg)
    {
        $this->container['rchFlg'] = $rchFlg;

        return $this;
    }

    /**
     * Gets nwsFlg
     *
     * @return string|null
     */
    public function getNwsFlg()
    {
        return $this->container['nwsFlg'];
    }

    /**
     * Sets nwsFlg
     *
     * @param string|null $nwsFlg nwsFlg
     *
     * @return self
     */
    public function setNwsFlg($nwsFlg)
    {
        $this->container['nwsFlg'] = $nwsFlg;

        return $this;
    }

    /**
     * Gets gn
     *
     * @return string|null
     */
    public function getGn()
    {
        return $this->container['gn'];
    }

    /**
     * Sets gn
     *
     * @param string|null $gn gn
     *
     * @return self
     */
    public function setGn($gn)
    {
        $this->container['gn'] = $gn;

        return $this;
    }

    /**
     * Gets gd
     *
     * @return string|null
     */
    public function getGd()
    {
        return $this->container['gd'];
    }

    /**
     * Sets gd
     *
     * @param string|null $gd gd
     *
     * @return self
     */
    public function setGd($gd)
    {
        $this->container['gd'] = $gd;

        return $this;
    }

    /**
     * Gets pn
     *
     * @return string|null
     */
    public function getPn()
    {
        return $this->container['pn'];
    }

    /**
     * Sets pn
     *
     * @param string|null $pn pn
     *
     * @return self
     */
    public function setPn($pn)
    {
        $this->container['pn'] = $pn;

        return $this;
    }

    /**
     * Gets pd
     *
     * @return string|null
     */
    public function getPd()
    {
        return $this->container['pd'];
    }

    /**
     * Sets pd
     *
     * @param string|null $pd pd
     *
     * @return self
     */
    public function setPd($pd)
    {
        $this->container['pd'] = $pd;

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


