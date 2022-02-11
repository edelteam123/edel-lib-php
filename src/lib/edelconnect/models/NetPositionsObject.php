<?php
/**
 * NetPositionsObject
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
 * NetPositionsObject Class Doc Comment
 *
 * @category Class
 * @package  com\edel
 * @author   Edelweiss
 * @link     https://www.edelweiss.in
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class NetPositionsObject implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelName = 'NetPositionsObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sym' => 'string',
        'ltp' => 'string',
        'ltt' => 'string',
        'chg' => 'string',
        'chgP' => 'string',
        'exc' => 'string',
        'vol' => 'string',
        'dpName' => 'string',
        'trdSym' => 'string',
        'asTyp' => 'string',
        'ltSz' => 'string',
        'tkSz' => 'string',
        'dpInsTyp' => 'string',
        'desc' => 'string',
        'dpVal' => 'string',
        'stkPrc' => 'string',
        'opTyp' => 'string',
        'exp' => 'string',
        'dpExpDt' => 'string',
        'opInt' => 'string',
        'opIntChg' => 'string',
        'opIntChgP' => 'string',
        'spot' => 'string',
        'rlOvrP' => 'string',
        'rlCAbs' => 'string',
        'trsTyp' => 'string',
        'prdCode' => '\com\edel\edelconnect\models\PrdCode',
        'avgSlPrc' => 'string',
        'avgByPrc' => 'string',
        'byAmt' => 'string',
        'byQty' => 'string',
        'slAmt' => 'string',
        'slQty' => 'string',
        'ntQty' => 'string',
        'ntAmt' => 'string',
        'rlzPL' => 'string',
        'urlzPL' => 'string',
        'ntPL' => 'string',
        'mtm' => 'string',
        'prc' => 'string',
        'sqOff' => 'string',
        'mul' => 'string',
        'cpName' => 'string',
        'rchFlg' => 'string',
        'nwsFlg' => 'string',
        'cfAvgSlPrc' => 'string',
        'cfAvgByPrc' => 'string',
        'cfSlQty' => 'string',
        'cfByQty' => 'string',
        'cfSlAmt' => 'string',
        'cfByAmt' => 'string',
        'ntSlQty' => 'string',
        'ntByQty' => 'string',
        'ntSlAmt' => 'string',
        'ntByAmt' => 'string',
        'brkEvnPrc' => 'string',
        'uniqKey' => 'string',
        'pn' => 'string',
        'gn' => 'string',
        'gd' => 'string',
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
        'sym' => null,
        'ltp' => null,
        'ltt' => null,
        'chg' => null,
        'chgP' => null,
        'exc' => null,
        'vol' => null,
        'dpName' => null,
        'trdSym' => null,
        'asTyp' => null,
        'ltSz' => null,
        'tkSz' => null,
        'dpInsTyp' => null,
        'desc' => null,
        'dpVal' => null,
        'stkPrc' => null,
        'opTyp' => null,
        'exp' => null,
        'dpExpDt' => null,
        'opInt' => null,
        'opIntChg' => null,
        'opIntChgP' => null,
        'spot' => null,
        'rlOvrP' => null,
        'rlCAbs' => null,
        'trsTyp' => null,
        'prdCode' => null,
        'avgSlPrc' => null,
        'avgByPrc' => null,
        'byAmt' => null,
        'byQty' => null,
        'slAmt' => null,
        'slQty' => null,
        'ntQty' => null,
        'ntAmt' => null,
        'rlzPL' => null,
        'urlzPL' => null,
        'ntPL' => null,
        'mtm' => null,
        'prc' => null,
        'sqOff' => null,
        'mul' => null,
        'cpName' => null,
        'rchFlg' => null,
        'nwsFlg' => null,
        'cfAvgSlPrc' => null,
        'cfAvgByPrc' => null,
        'cfSlQty' => null,
        'cfByQty' => null,
        'cfSlAmt' => null,
        'cfByAmt' => null,
        'ntSlQty' => null,
        'ntByQty' => null,
        'ntSlAmt' => null,
        'ntByAmt' => null,
        'brkEvnPrc' => null,
        'uniqKey' => null,
        'pn' => null,
        'gn' => null,
        'gd' => null,
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
        'sym' => 'sym',
        'ltp' => 'ltp',
        'ltt' => 'ltt',
        'chg' => 'chg',
        'chgP' => 'chgP',
        'exc' => 'exc',
        'vol' => 'vol',
        'dpName' => 'dpName',
        'trdSym' => 'trdSym',
        'asTyp' => 'asTyp',
        'ltSz' => 'ltSz',
        'tkSz' => 'tkSz',
        'dpInsTyp' => 'dpInsTyp',
        'desc' => 'desc',
        'dpVal' => 'dpVal',
        'stkPrc' => 'stkPrc',
        'opTyp' => 'opTyp',
        'exp' => 'exp',
        'dpExpDt' => 'dpExpDt',
        'opInt' => 'opInt',
        'opIntChg' => 'opIntChg',
        'opIntChgP' => 'opIntChgP',
        'spot' => 'spot',
        'rlOvrP' => 'rlOvrP',
        'rlCAbs' => 'rlCAbs',
        'trsTyp' => 'trsTyp',
        'prdCode' => 'prdCode',
        'avgSlPrc' => 'avgSlPrc',
        'avgByPrc' => 'avgByPrc',
        'byAmt' => 'byAmt',
        'byQty' => 'byQty',
        'slAmt' => 'slAmt',
        'slQty' => 'slQty',
        'ntQty' => 'ntQty',
        'ntAmt' => 'ntAmt',
        'rlzPL' => 'rlzPL',
        'urlzPL' => 'urlzPL',
        'ntPL' => 'ntPL',
        'mtm' => 'mtm',
        'prc' => 'prc',
        'sqOff' => 'sqOff',
        'mul' => 'mul',
        'cpName' => 'cpName',
        'rchFlg' => 'rchFlg',
        'nwsFlg' => 'nwsFlg',
        'cfAvgSlPrc' => 'cfAvgSlPrc',
        'cfAvgByPrc' => 'cfAvgByPrc',
        'cfSlQty' => 'cfSlQty',
        'cfByQty' => 'cfByQty',
        'cfSlAmt' => 'cfSlAmt',
        'cfByAmt' => 'cfByAmt',
        'ntSlQty' => 'ntSlQty',
        'ntByQty' => 'ntByQty',
        'ntSlAmt' => 'ntSlAmt',
        'ntByAmt' => 'ntByAmt',
        'brkEvnPrc' => 'brkEvnPrc',
        'uniqKey' => 'uniqKey',
        'pn' => 'pn',
        'gn' => 'gn',
        'gd' => 'gd',
        'pd' => 'pd'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sym' => 'setSym',
        'ltp' => 'setLtp',
        'ltt' => 'setLtt',
        'chg' => 'setChg',
        'chgP' => 'setChgP',
        'exc' => 'setExc',
        'vol' => 'setVol',
        'dpName' => 'setDpName',
        'trdSym' => 'setTrdSym',
        'asTyp' => 'setAsTyp',
        'ltSz' => 'setLtSz',
        'tkSz' => 'setTkSz',
        'dpInsTyp' => 'setDpInsTyp',
        'desc' => 'setDesc',
        'dpVal' => 'setDpVal',
        'stkPrc' => 'setStkPrc',
        'opTyp' => 'setOpTyp',
        'exp' => 'setExp',
        'dpExpDt' => 'setDpExpDt',
        'opInt' => 'setOpInt',
        'opIntChg' => 'setOpIntChg',
        'opIntChgP' => 'setOpIntChgP',
        'spot' => 'setSpot',
        'rlOvrP' => 'setRlOvrP',
        'rlCAbs' => 'setRlCAbs',
        'trsTyp' => 'setTrsTyp',
        'prdCode' => 'setPrdCode',
        'avgSlPrc' => 'setAvgSlPrc',
        'avgByPrc' => 'setAvgByPrc',
        'byAmt' => 'setByAmt',
        'byQty' => 'setByQty',
        'slAmt' => 'setSlAmt',
        'slQty' => 'setSlQty',
        'ntQty' => 'setNtQty',
        'ntAmt' => 'setNtAmt',
        'rlzPL' => 'setRlzPL',
        'urlzPL' => 'setUrlzPL',
        'ntPL' => 'setNtPL',
        'mtm' => 'setMtm',
        'prc' => 'setPrc',
        'sqOff' => 'setSqOff',
        'mul' => 'setMul',
        'cpName' => 'setCpName',
        'rchFlg' => 'setRchFlg',
        'nwsFlg' => 'setNwsFlg',
        'cfAvgSlPrc' => 'setCfAvgSlPrc',
        'cfAvgByPrc' => 'setCfAvgByPrc',
        'cfSlQty' => 'setCfSlQty',
        'cfByQty' => 'setCfByQty',
        'cfSlAmt' => 'setCfSlAmt',
        'cfByAmt' => 'setCfByAmt',
        'ntSlQty' => 'setNtSlQty',
        'ntByQty' => 'setNtByQty',
        'ntSlAmt' => 'setNtSlAmt',
        'ntByAmt' => 'setNtByAmt',
        'brkEvnPrc' => 'setBrkEvnPrc',
        'uniqKey' => 'setUniqKey',
        'pn' => 'setPn',
        'gn' => 'setGn',
        'gd' => 'setGd',
        'pd' => 'setPd'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sym' => 'getSym',
        'ltp' => 'getLtp',
        'ltt' => 'getLtt',
        'chg' => 'getChg',
        'chgP' => 'getChgP',
        'exc' => 'getExc',
        'vol' => 'getVol',
        'dpName' => 'getDpName',
        'trdSym' => 'getTrdSym',
        'asTyp' => 'getAsTyp',
        'ltSz' => 'getLtSz',
        'tkSz' => 'getTkSz',
        'dpInsTyp' => 'getDpInsTyp',
        'desc' => 'getDesc',
        'dpVal' => 'getDpVal',
        'stkPrc' => 'getStkPrc',
        'opTyp' => 'getOpTyp',
        'exp' => 'getExp',
        'dpExpDt' => 'getDpExpDt',
        'opInt' => 'getOpInt',
        'opIntChg' => 'getOpIntChg',
        'opIntChgP' => 'getOpIntChgP',
        'spot' => 'getSpot',
        'rlOvrP' => 'getRlOvrP',
        'rlCAbs' => 'getRlCAbs',
        'trsTyp' => 'getTrsTyp',
        'prdCode' => 'getPrdCode',
        'avgSlPrc' => 'getAvgSlPrc',
        'avgByPrc' => 'getAvgByPrc',
        'byAmt' => 'getByAmt',
        'byQty' => 'getByQty',
        'slAmt' => 'getSlAmt',
        'slQty' => 'getSlQty',
        'ntQty' => 'getNtQty',
        'ntAmt' => 'getNtAmt',
        'rlzPL' => 'getRlzPL',
        'urlzPL' => 'getUrlzPL',
        'ntPL' => 'getNtPL',
        'mtm' => 'getMtm',
        'prc' => 'getPrc',
        'sqOff' => 'getSqOff',
        'mul' => 'getMul',
        'cpName' => 'getCpName',
        'rchFlg' => 'getRchFlg',
        'nwsFlg' => 'getNwsFlg',
        'cfAvgSlPrc' => 'getCfAvgSlPrc',
        'cfAvgByPrc' => 'getCfAvgByPrc',
        'cfSlQty' => 'getCfSlQty',
        'cfByQty' => 'getCfByQty',
        'cfSlAmt' => 'getCfSlAmt',
        'cfByAmt' => 'getCfByAmt',
        'ntSlQty' => 'getNtSlQty',
        'ntByQty' => 'getNtByQty',
        'ntSlAmt' => 'getNtSlAmt',
        'ntByAmt' => 'getNtByAmt',
        'brkEvnPrc' => 'getBrkEvnPrc',
        'uniqKey' => 'getUniqKey',
        'pn' => 'getPn',
        'gn' => 'getGn',
        'gd' => 'getGd',
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
        $this->container['sym'] = $data['sym'] ?? null;
        $this->container['ltp'] = $data['ltp'] ?? null;
        $this->container['ltt'] = $data['ltt'] ?? null;
        $this->container['chg'] = $data['chg'] ?? null;
        $this->container['chgP'] = $data['chgP'] ?? null;
        $this->container['exc'] = $data['exc'] ?? null;
        $this->container['vol'] = $data['vol'] ?? null;
        $this->container['dpName'] = $data['dpName'] ?? null;
        $this->container['trdSym'] = $data['trdSym'] ?? null;
        $this->container['asTyp'] = $data['asTyp'] ?? null;
        $this->container['ltSz'] = $data['ltSz'] ?? null;
        $this->container['tkSz'] = $data['tkSz'] ?? null;
        $this->container['dpInsTyp'] = $data['dpInsTyp'] ?? null;
        $this->container['desc'] = $data['desc'] ?? null;
        $this->container['dpVal'] = $data['dpVal'] ?? null;
        $this->container['stkPrc'] = $data['stkPrc'] ?? null;
        $this->container['opTyp'] = $data['opTyp'] ?? null;
        $this->container['exp'] = $data['exp'] ?? null;
        $this->container['dpExpDt'] = $data['dpExpDt'] ?? null;
        $this->container['opInt'] = $data['opInt'] ?? null;
        $this->container['opIntChg'] = $data['opIntChg'] ?? null;
        $this->container['opIntChgP'] = $data['opIntChgP'] ?? null;
        $this->container['spot'] = $data['spot'] ?? null;
        $this->container['rlOvrP'] = $data['rlOvrP'] ?? null;
        $this->container['rlCAbs'] = $data['rlCAbs'] ?? null;
        $this->container['trsTyp'] = $data['trsTyp'] ?? null;
        $this->container['prdCode'] = $data['prdCode'] ?? null;
        $this->container['avgSlPrc'] = $data['avgSlPrc'] ?? null;
        $this->container['avgByPrc'] = $data['avgByPrc'] ?? null;
        $this->container['byAmt'] = $data['byAmt'] ?? null;
        $this->container['byQty'] = $data['byQty'] ?? null;
        $this->container['slAmt'] = $data['slAmt'] ?? null;
        $this->container['slQty'] = $data['slQty'] ?? null;
        $this->container['ntQty'] = $data['ntQty'] ?? null;
        $this->container['ntAmt'] = $data['ntAmt'] ?? null;
        $this->container['rlzPL'] = $data['rlzPL'] ?? null;
        $this->container['urlzPL'] = $data['urlzPL'] ?? null;
        $this->container['ntPL'] = $data['ntPL'] ?? null;
        $this->container['mtm'] = $data['mtm'] ?? null;
        $this->container['prc'] = $data['prc'] ?? null;
        $this->container['sqOff'] = $data['sqOff'] ?? null;
        $this->container['mul'] = $data['mul'] ?? null;
        $this->container['cpName'] = $data['cpName'] ?? null;
        $this->container['rchFlg'] = $data['rchFlg'] ?? null;
        $this->container['nwsFlg'] = $data['nwsFlg'] ?? null;
        $this->container['cfAvgSlPrc'] = $data['cfAvgSlPrc'] ?? null;
        $this->container['cfAvgByPrc'] = $data['cfAvgByPrc'] ?? null;
        $this->container['cfSlQty'] = $data['cfSlQty'] ?? null;
        $this->container['cfByQty'] = $data['cfByQty'] ?? null;
        $this->container['cfSlAmt'] = $data['cfSlAmt'] ?? null;
        $this->container['cfByAmt'] = $data['cfByAmt'] ?? null;
        $this->container['ntSlQty'] = $data['ntSlQty'] ?? null;
        $this->container['ntByQty'] = $data['ntByQty'] ?? null;
        $this->container['ntSlAmt'] = $data['ntSlAmt'] ?? null;
        $this->container['ntByAmt'] = $data['ntByAmt'] ?? null;
        $this->container['brkEvnPrc'] = $data['brkEvnPrc'] ?? null;
        $this->container['uniqKey'] = $data['uniqKey'] ?? null;
        $this->container['pn'] = $data['pn'] ?? null;
        $this->container['gn'] = $data['gn'] ?? null;
        $this->container['gd'] = $data['gd'] ?? null;
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
     * Gets ltt
     *
     * @return string|null
     */
    public function getLtt()
    {
        return $this->container['ltt'];
    }

    /**
     * Sets ltt
     *
     * @param string|null $ltt ltt
     *
     * @return self
     */
    public function setLtt($ltt)
    {
        $this->container['ltt'] = $ltt;

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
     * Gets vol
     *
     * @return string|null
     */
    public function getVol()
    {
        return $this->container['vol'];
    }

    /**
     * Sets vol
     *
     * @param string|null $vol vol
     *
     * @return self
     */
    public function setVol($vol)
    {
        $this->container['vol'] = $vol;

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
     * @param string|null $dpVal dpVal
     *
     * @return self
     */
    public function setDpVal($dpVal)
    {
        $this->container['dpVal'] = $dpVal;

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
     * Gets opInt
     *
     * @return string|null
     */
    public function getOpInt()
    {
        return $this->container['opInt'];
    }

    /**
     * Sets opInt
     *
     * @param string|null $opInt opInt
     *
     * @return self
     */
    public function setOpInt($opInt)
    {
        $this->container['opInt'] = $opInt;

        return $this;
    }

    /**
     * Gets opIntChg
     *
     * @return string|null
     */
    public function getOpIntChg()
    {
        return $this->container['opIntChg'];
    }

    /**
     * Sets opIntChg
     *
     * @param string|null $opIntChg opIntChg
     *
     * @return self
     */
    public function setOpIntChg($opIntChg)
    {
        $this->container['opIntChg'] = $opIntChg;

        return $this;
    }

    /**
     * Gets opIntChgP
     *
     * @return string|null
     */
    public function getOpIntChgP()
    {
        return $this->container['opIntChgP'];
    }

    /**
     * Sets opIntChgP
     *
     * @param string|null $opIntChgP opIntChgP
     *
     * @return self
     */
    public function setOpIntChgP($opIntChgP)
    {
        $this->container['opIntChgP'] = $opIntChgP;

        return $this;
    }

    /**
     * Gets spot
     *
     * @return string|null
     */
    public function getSpot()
    {
        return $this->container['spot'];
    }

    /**
     * Sets spot
     *
     * @param string|null $spot spot
     *
     * @return self
     */
    public function setSpot($spot)
    {
        $this->container['spot'] = $spot;

        return $this;
    }

    /**
     * Gets rlOvrP
     *
     * @return string|null
     */
    public function getRlOvrP()
    {
        return $this->container['rlOvrP'];
    }

    /**
     * Sets rlOvrP
     *
     * @param string|null $rlOvrP rlOvrP
     *
     * @return self
     */
    public function setRlOvrP($rlOvrP)
    {
        $this->container['rlOvrP'] = $rlOvrP;

        return $this;
    }

    /**
     * Gets rlCAbs
     *
     * @return string|null
     */
    public function getRlCAbs()
    {
        return $this->container['rlCAbs'];
    }

    /**
     * Sets rlCAbs
     *
     * @param string|null $rlCAbs rlCAbs
     *
     * @return self
     */
    public function setRlCAbs($rlCAbs)
    {
        $this->container['rlCAbs'] = $rlCAbs;

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
     * Gets cfAvgSlPrc
     *
     * @return string|null
     */
    public function getCfAvgSlPrc()
    {
        return $this->container['cfAvgSlPrc'];
    }

    /**
     * Sets cfAvgSlPrc
     *
     * @param string|null $cfAvgSlPrc cfAvgSlPrc
     *
     * @return self
     */
    public function setCfAvgSlPrc($cfAvgSlPrc)
    {
        $this->container['cfAvgSlPrc'] = $cfAvgSlPrc;

        return $this;
    }

    /**
     * Gets cfAvgByPrc
     *
     * @return string|null
     */
    public function getCfAvgByPrc()
    {
        return $this->container['cfAvgByPrc'];
    }

    /**
     * Sets cfAvgByPrc
     *
     * @param string|null $cfAvgByPrc cfAvgByPrc
     *
     * @return self
     */
    public function setCfAvgByPrc($cfAvgByPrc)
    {
        $this->container['cfAvgByPrc'] = $cfAvgByPrc;

        return $this;
    }

    /**
     * Gets cfSlQty
     *
     * @return string|null
     */
    public function getCfSlQty()
    {
        return $this->container['cfSlQty'];
    }

    /**
     * Sets cfSlQty
     *
     * @param string|null $cfSlQty cfSlQty
     *
     * @return self
     */
    public function setCfSlQty($cfSlQty)
    {
        $this->container['cfSlQty'] = $cfSlQty;

        return $this;
    }

    /**
     * Gets cfByQty
     *
     * @return string|null
     */
    public function getCfByQty()
    {
        return $this->container['cfByQty'];
    }

    /**
     * Sets cfByQty
     *
     * @param string|null $cfByQty cfByQty
     *
     * @return self
     */
    public function setCfByQty($cfByQty)
    {
        $this->container['cfByQty'] = $cfByQty;

        return $this;
    }

    /**
     * Gets cfSlAmt
     *
     * @return string|null
     */
    public function getCfSlAmt()
    {
        return $this->container['cfSlAmt'];
    }

    /**
     * Sets cfSlAmt
     *
     * @param string|null $cfSlAmt cfSlAmt
     *
     * @return self
     */
    public function setCfSlAmt($cfSlAmt)
    {
        $this->container['cfSlAmt'] = $cfSlAmt;

        return $this;
    }

    /**
     * Gets cfByAmt
     *
     * @return string|null
     */
    public function getCfByAmt()
    {
        return $this->container['cfByAmt'];
    }

    /**
     * Sets cfByAmt
     *
     * @param string|null $cfByAmt cfByAmt
     *
     * @return self
     */
    public function setCfByAmt($cfByAmt)
    {
        $this->container['cfByAmt'] = $cfByAmt;

        return $this;
    }

    /**
     * Gets ntSlQty
     *
     * @return string|null
     */
    public function getNtSlQty()
    {
        return $this->container['ntSlQty'];
    }

    /**
     * Sets ntSlQty
     *
     * @param string|null $ntSlQty ntSlQty
     *
     * @return self
     */
    public function setNtSlQty($ntSlQty)
    {
        $this->container['ntSlQty'] = $ntSlQty;

        return $this;
    }

    /**
     * Gets ntByQty
     *
     * @return string|null
     */
    public function getNtByQty()
    {
        return $this->container['ntByQty'];
    }

    /**
     * Sets ntByQty
     *
     * @param string|null $ntByQty ntByQty
     *
     * @return self
     */
    public function setNtByQty($ntByQty)
    {
        $this->container['ntByQty'] = $ntByQty;

        return $this;
    }

    /**
     * Gets ntSlAmt
     *
     * @return string|null
     */
    public function getNtSlAmt()
    {
        return $this->container['ntSlAmt'];
    }

    /**
     * Sets ntSlAmt
     *
     * @param string|null $ntSlAmt ntSlAmt
     *
     * @return self
     */
    public function setNtSlAmt($ntSlAmt)
    {
        $this->container['ntSlAmt'] = $ntSlAmt;

        return $this;
    }

    /**
     * Gets ntByAmt
     *
     * @return string|null
     */
    public function getNtByAmt()
    {
        return $this->container['ntByAmt'];
    }

    /**
     * Sets ntByAmt
     *
     * @param string|null $ntByAmt ntByAmt
     *
     * @return self
     */
    public function setNtByAmt($ntByAmt)
    {
        $this->container['ntByAmt'] = $ntByAmt;

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
     * Gets uniqKey
     *
     * @return string|null
     */
    public function getUniqKey()
    {
        return $this->container['uniqKey'];
    }

    /**
     * Sets uniqKey
     *
     * @param string|null $uniqKey uniqKey
     *
     * @return self
     */
    public function setUniqKey($uniqKey)
    {
        $this->container['uniqKey'] = $uniqKey;

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


