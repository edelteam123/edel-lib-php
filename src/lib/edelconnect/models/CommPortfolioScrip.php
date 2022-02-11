<?php
/**
 * CommPortfolioScrip
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
 * CommPortfolioScrip Class Doc Comment
 *
 * @category Class
 * @package  com\edel
 * @author   Edelweiss
 * @link     https://www.edelweiss.in
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CommPortfolioScrip implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelName = 'CommPortfolioScrip';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'trdSym' => 'string',
        'sym' => 'string',
        'asTyp' => 'string',
        'yrLw' => 'string',
        'yrH' => 'string',
        'o' => 'string',
        'h' => 'string',
        'l' => 'string',
        'c' => 'string',
        'ltp' => 'string',
        'ltt' => 'string',
        'altt' => 'string',
        'lut' => 'string',
        'atp' => 'string',
        'bidPr' => 'string',
        'askPr' => 'string',
        'vol' => 'string',
        'loCt' => 'string',
        'hiCt' => 'string',
        'chg' => 'string',
        'chgP' => 'string',
        'ltSz' => 'string',
        'tkSz' => 'string',
        'dpNm' => 'string',
        'stkPrc' => 'string',
        'opTyp' => 'string',
        'exp' => 'string',
        'desc' => 'string',
        'exc' => 'string',
        'brdLotQty' => 'string',
        'qtyUnits' => 'string',
        'prcUnits' => 'string',
        'prcQtn' => 'string',
        'dpInsTyp' => 'string',
        'bdSz' => 'string',
        'akSz' => 'string',
        'dpExpDt' => 'string',
        'opInt' => 'string',
        'opIntChg' => 'string',
        'opIntChgP' => 'string',
        'spotSym' => 'string',
        'spot' => 'string',
        'spotChg' => 'string',
        'spotChgP' => 'string',
        'rlOvrP' => 'string',
        'rlCAbs' => 'string',
        'ltTQty' => 'string',
        'tdrStDt' => 'string',
        'tdrEndDt' => 'string',
        'srpStDt' => 'string',
        'mxLtSz' => 'string',
        'trdInfoId' => 'string[]',
        'ntByQty' => 'string',
        'ntSlQty' => 'string',
        'onewkhi' => 'string',
        'onewklo' => 'string',
        'onemnhi' => 'string',
        'onemnlo' => 'string',
        'thrmnhi' => 'string',
        'thrmnlo' => 'string',
        'alltmhi' => 'string',
        'alltmlo' => 'string',
        'askivfut' => 'string',
        'askivspt' => 'string',
        'bidivfut' => 'string',
        'bidivspt' => 'string',
        'ltpivfut' => 'string',
        'ltpivspt' => 'string',
        'ntTrdVal' => 'string',
        'mns' => 'string',
        'isMTFEnabled' => 'bool',
        'rchFlg' => 'string',
        'nwsFlg' => 'string',
        'rlOvrCst' => 'string',
        'rlOvrCstPrc' => 'string',
        'rlOvrPrc' => 'string',
        'bta' => 'string',
        'pe' => 'string',
        'mktCap' => 'string',
        'delta' => 'string',
        'gamma' => 'string',
        'theta' => 'string',
        'vega' => 'string',
        'idxFutTrdSym' => 'string',
        'dpVal' => 'string',
        'pcr' => 'string',
        'pdVal' => 'string',
        'bas' => 'string',
        'qty' => 'string',
        'avgByPrc' => 'string',
        'avgSlPrc' => 'string',
        'urlzPL' => 'string',
        'dyGn' => 'string',
        'invVal' => 'string',
        'ttlPL' => 'string',
        'dpUnit' => 'string'
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
        'sym' => null,
        'asTyp' => null,
        'yrLw' => null,
        'yrH' => null,
        'o' => null,
        'h' => null,
        'l' => null,
        'c' => null,
        'ltp' => null,
        'ltt' => null,
        'altt' => null,
        'lut' => null,
        'atp' => null,
        'bidPr' => null,
        'askPr' => null,
        'vol' => null,
        'loCt' => null,
        'hiCt' => null,
        'chg' => null,
        'chgP' => null,
        'ltSz' => null,
        'tkSz' => null,
        'dpNm' => null,
        'stkPrc' => null,
        'opTyp' => null,
        'exp' => null,
        'desc' => null,
        'exc' => null,
        'brdLotQty' => null,
        'qtyUnits' => null,
        'prcUnits' => null,
        'prcQtn' => null,
        'dpInsTyp' => null,
        'bdSz' => null,
        'akSz' => null,
        'dpExpDt' => null,
        'opInt' => null,
        'opIntChg' => null,
        'opIntChgP' => null,
        'spotSym' => null,
        'spot' => null,
        'spotChg' => null,
        'spotChgP' => null,
        'rlOvrP' => null,
        'rlCAbs' => null,
        'ltTQty' => null,
        'tdrStDt' => null,
        'tdrEndDt' => null,
        'srpStDt' => null,
        'mxLtSz' => null,
        'trdInfoId' => null,
        'ntByQty' => null,
        'ntSlQty' => null,
        'onewkhi' => null,
        'onewklo' => null,
        'onemnhi' => null,
        'onemnlo' => null,
        'thrmnhi' => null,
        'thrmnlo' => null,
        'alltmhi' => null,
        'alltmlo' => null,
        'askivfut' => null,
        'askivspt' => null,
        'bidivfut' => null,
        'bidivspt' => null,
        'ltpivfut' => null,
        'ltpivspt' => null,
        'ntTrdVal' => null,
        'mns' => null,
        'isMTFEnabled' => null,
        'rchFlg' => null,
        'nwsFlg' => null,
        'rlOvrCst' => null,
        'rlOvrCstPrc' => null,
        'rlOvrPrc' => null,
        'bta' => null,
        'pe' => null,
        'mktCap' => null,
        'delta' => null,
        'gamma' => null,
        'theta' => null,
        'vega' => null,
        'idxFutTrdSym' => null,
        'dpVal' => null,
        'pcr' => null,
        'pdVal' => null,
        'bas' => null,
        'qty' => null,
        'avgByPrc' => null,
        'avgSlPrc' => null,
        'urlzPL' => null,
        'dyGn' => null,
        'invVal' => null,
        'ttlPL' => null,
        'dpUnit' => null
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
        'sym' => 'sym',
        'asTyp' => 'asTyp',
        'yrLw' => 'yrLw',
        'yrH' => 'yrH',
        'o' => 'o',
        'h' => 'h',
        'l' => 'l',
        'c' => 'c',
        'ltp' => 'ltp',
        'ltt' => 'ltt',
        'altt' => 'altt',
        'lut' => 'lut',
        'atp' => 'atp',
        'bidPr' => 'bidPr',
        'askPr' => 'askPr',
        'vol' => 'vol',
        'loCt' => 'loCt',
        'hiCt' => 'hiCt',
        'chg' => 'chg',
        'chgP' => 'chgP',
        'ltSz' => 'ltSz',
        'tkSz' => 'tkSz',
        'dpNm' => 'dpNm',
        'stkPrc' => 'stkPrc',
        'opTyp' => 'opTyp',
        'exp' => 'exp',
        'desc' => 'desc',
        'exc' => 'exc',
        'brdLotQty' => 'brdLotQty',
        'qtyUnits' => 'qtyUnits',
        'prcUnits' => 'prcUnits',
        'prcQtn' => 'prcQtn',
        'dpInsTyp' => 'dpInsTyp',
        'bdSz' => 'bdSz',
        'akSz' => 'akSz',
        'dpExpDt' => 'dpExpDt',
        'opInt' => 'opInt',
        'opIntChg' => 'opIntChg',
        'opIntChgP' => 'opIntChgP',
        'spotSym' => 'spotSym',
        'spot' => 'spot',
        'spotChg' => 'spotChg',
        'spotChgP' => 'spotChgP',
        'rlOvrP' => 'rlOvrP',
        'rlCAbs' => 'rlCAbs',
        'ltTQty' => 'ltTQty',
        'tdrStDt' => 'tdrStDt',
        'tdrEndDt' => 'tdrEndDt',
        'srpStDt' => 'srpStDt',
        'mxLtSz' => 'mxLtSz',
        'trdInfoId' => 'trdInfoId',
        'ntByQty' => 'ntByQty',
        'ntSlQty' => 'ntSlQty',
        'onewkhi' => 'onewkhi',
        'onewklo' => 'onewklo',
        'onemnhi' => 'onemnhi',
        'onemnlo' => 'onemnlo',
        'thrmnhi' => 'thrmnhi',
        'thrmnlo' => 'thrmnlo',
        'alltmhi' => 'alltmhi',
        'alltmlo' => 'alltmlo',
        'askivfut' => 'askivfut',
        'askivspt' => 'askivspt',
        'bidivfut' => 'bidivfut',
        'bidivspt' => 'bidivspt',
        'ltpivfut' => 'ltpivfut',
        'ltpivspt' => 'ltpivspt',
        'ntTrdVal' => 'ntTrdVal',
        'mns' => 'mns',
        'isMTFEnabled' => 'isMTFEnabled',
        'rchFlg' => 'rchFlg',
        'nwsFlg' => 'nwsFlg',
        'rlOvrCst' => 'rlOvrCst',
        'rlOvrCstPrc' => 'rlOvrCstPrc',
        'rlOvrPrc' => 'rlOvrPrc',
        'bta' => 'bta',
        'pe' => 'pe',
        'mktCap' => 'mktCap',
        'delta' => 'delta',
        'gamma' => 'gamma',
        'theta' => 'theta',
        'vega' => 'vega',
        'idxFutTrdSym' => 'idxFutTrdSym',
        'dpVal' => 'dpVal',
        'pcr' => 'pcr',
        'pdVal' => 'pdVal',
        'bas' => 'bas',
        'qty' => 'qty',
        'avgByPrc' => 'avgByPrc',
        'avgSlPrc' => 'avgSlPrc',
        'urlzPL' => 'urlzPL',
        'dyGn' => 'dyGn',
        'invVal' => 'invVal',
        'ttlPL' => 'ttlPL',
        'dpUnit' => 'dpUnit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'trdSym' => 'setTrdSym',
        'sym' => 'setSym',
        'asTyp' => 'setAsTyp',
        'yrLw' => 'setYrLw',
        'yrH' => 'setYrH',
        'o' => 'setO',
        'h' => 'setH',
        'l' => 'setL',
        'c' => 'setC',
        'ltp' => 'setLtp',
        'ltt' => 'setLtt',
        'altt' => 'setAltt',
        'lut' => 'setLut',
        'atp' => 'setAtp',
        'bidPr' => 'setBidPr',
        'askPr' => 'setAskPr',
        'vol' => 'setVol',
        'loCt' => 'setLoCt',
        'hiCt' => 'setHiCt',
        'chg' => 'setChg',
        'chgP' => 'setChgP',
        'ltSz' => 'setLtSz',
        'tkSz' => 'setTkSz',
        'dpNm' => 'setDpNm',
        'stkPrc' => 'setStkPrc',
        'opTyp' => 'setOpTyp',
        'exp' => 'setExp',
        'desc' => 'setDesc',
        'exc' => 'setExc',
        'brdLotQty' => 'setBrdLotQty',
        'qtyUnits' => 'setQtyUnits',
        'prcUnits' => 'setPrcUnits',
        'prcQtn' => 'setPrcQtn',
        'dpInsTyp' => 'setDpInsTyp',
        'bdSz' => 'setBdSz',
        'akSz' => 'setAkSz',
        'dpExpDt' => 'setDpExpDt',
        'opInt' => 'setOpInt',
        'opIntChg' => 'setOpIntChg',
        'opIntChgP' => 'setOpIntChgP',
        'spotSym' => 'setSpotSym',
        'spot' => 'setSpot',
        'spotChg' => 'setSpotChg',
        'spotChgP' => 'setSpotChgP',
        'rlOvrP' => 'setRlOvrP',
        'rlCAbs' => 'setRlCAbs',
        'ltTQty' => 'setLtTQty',
        'tdrStDt' => 'setTdrStDt',
        'tdrEndDt' => 'setTdrEndDt',
        'srpStDt' => 'setSrpStDt',
        'mxLtSz' => 'setMxLtSz',
        'trdInfoId' => 'setTrdInfoId',
        'ntByQty' => 'setNtByQty',
        'ntSlQty' => 'setNtSlQty',
        'onewkhi' => 'setOnewkhi',
        'onewklo' => 'setOnewklo',
        'onemnhi' => 'setOnemnhi',
        'onemnlo' => 'setOnemnlo',
        'thrmnhi' => 'setThrmnhi',
        'thrmnlo' => 'setThrmnlo',
        'alltmhi' => 'setAlltmhi',
        'alltmlo' => 'setAlltmlo',
        'askivfut' => 'setAskivfut',
        'askivspt' => 'setAskivspt',
        'bidivfut' => 'setBidivfut',
        'bidivspt' => 'setBidivspt',
        'ltpivfut' => 'setLtpivfut',
        'ltpivspt' => 'setLtpivspt',
        'ntTrdVal' => 'setNtTrdVal',
        'mns' => 'setMns',
        'isMTFEnabled' => 'setIsMTFEnabled',
        'rchFlg' => 'setRchFlg',
        'nwsFlg' => 'setNwsFlg',
        'rlOvrCst' => 'setRlOvrCst',
        'rlOvrCstPrc' => 'setRlOvrCstPrc',
        'rlOvrPrc' => 'setRlOvrPrc',
        'bta' => 'setBta',
        'pe' => 'setPe',
        'mktCap' => 'setMktCap',
        'delta' => 'setDelta',
        'gamma' => 'setGamma',
        'theta' => 'setTheta',
        'vega' => 'setVega',
        'idxFutTrdSym' => 'setIdxFutTrdSym',
        'dpVal' => 'setDpVal',
        'pcr' => 'setPcr',
        'pdVal' => 'setPdVal',
        'bas' => 'setBas',
        'qty' => 'setQty',
        'avgByPrc' => 'setAvgByPrc',
        'avgSlPrc' => 'setAvgSlPrc',
        'urlzPL' => 'setUrlzPL',
        'dyGn' => 'setDyGn',
        'invVal' => 'setInvVal',
        'ttlPL' => 'setTtlPL',
        'dpUnit' => 'setDpUnit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'trdSym' => 'getTrdSym',
        'sym' => 'getSym',
        'asTyp' => 'getAsTyp',
        'yrLw' => 'getYrLw',
        'yrH' => 'getYrH',
        'o' => 'getO',
        'h' => 'getH',
        'l' => 'getL',
        'c' => 'getC',
        'ltp' => 'getLtp',
        'ltt' => 'getLtt',
        'altt' => 'getAltt',
        'lut' => 'getLut',
        'atp' => 'getAtp',
        'bidPr' => 'getBidPr',
        'askPr' => 'getAskPr',
        'vol' => 'getVol',
        'loCt' => 'getLoCt',
        'hiCt' => 'getHiCt',
        'chg' => 'getChg',
        'chgP' => 'getChgP',
        'ltSz' => 'getLtSz',
        'tkSz' => 'getTkSz',
        'dpNm' => 'getDpNm',
        'stkPrc' => 'getStkPrc',
        'opTyp' => 'getOpTyp',
        'exp' => 'getExp',
        'desc' => 'getDesc',
        'exc' => 'getExc',
        'brdLotQty' => 'getBrdLotQty',
        'qtyUnits' => 'getQtyUnits',
        'prcUnits' => 'getPrcUnits',
        'prcQtn' => 'getPrcQtn',
        'dpInsTyp' => 'getDpInsTyp',
        'bdSz' => 'getBdSz',
        'akSz' => 'getAkSz',
        'dpExpDt' => 'getDpExpDt',
        'opInt' => 'getOpInt',
        'opIntChg' => 'getOpIntChg',
        'opIntChgP' => 'getOpIntChgP',
        'spotSym' => 'getSpotSym',
        'spot' => 'getSpot',
        'spotChg' => 'getSpotChg',
        'spotChgP' => 'getSpotChgP',
        'rlOvrP' => 'getRlOvrP',
        'rlCAbs' => 'getRlCAbs',
        'ltTQty' => 'getLtTQty',
        'tdrStDt' => 'getTdrStDt',
        'tdrEndDt' => 'getTdrEndDt',
        'srpStDt' => 'getSrpStDt',
        'mxLtSz' => 'getMxLtSz',
        'trdInfoId' => 'getTrdInfoId',
        'ntByQty' => 'getNtByQty',
        'ntSlQty' => 'getNtSlQty',
        'onewkhi' => 'getOnewkhi',
        'onewklo' => 'getOnewklo',
        'onemnhi' => 'getOnemnhi',
        'onemnlo' => 'getOnemnlo',
        'thrmnhi' => 'getThrmnhi',
        'thrmnlo' => 'getThrmnlo',
        'alltmhi' => 'getAlltmhi',
        'alltmlo' => 'getAlltmlo',
        'askivfut' => 'getAskivfut',
        'askivspt' => 'getAskivspt',
        'bidivfut' => 'getBidivfut',
        'bidivspt' => 'getBidivspt',
        'ltpivfut' => 'getLtpivfut',
        'ltpivspt' => 'getLtpivspt',
        'ntTrdVal' => 'getNtTrdVal',
        'mns' => 'getMns',
        'isMTFEnabled' => 'getIsMTFEnabled',
        'rchFlg' => 'getRchFlg',
        'nwsFlg' => 'getNwsFlg',
        'rlOvrCst' => 'getRlOvrCst',
        'rlOvrCstPrc' => 'getRlOvrCstPrc',
        'rlOvrPrc' => 'getRlOvrPrc',
        'bta' => 'getBta',
        'pe' => 'getPe',
        'mktCap' => 'getMktCap',
        'delta' => 'getDelta',
        'gamma' => 'getGamma',
        'theta' => 'getTheta',
        'vega' => 'getVega',
        'idxFutTrdSym' => 'getIdxFutTrdSym',
        'dpVal' => 'getDpVal',
        'pcr' => 'getPcr',
        'pdVal' => 'getPdVal',
        'bas' => 'getBas',
        'qty' => 'getQty',
        'avgByPrc' => 'getAvgByPrc',
        'avgSlPrc' => 'getAvgSlPrc',
        'urlzPL' => 'getUrlzPL',
        'dyGn' => 'getDyGn',
        'invVal' => 'getInvVal',
        'ttlPL' => 'getTtlPL',
        'dpUnit' => 'getDpUnit'
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
        $this->container['sym'] = $data['sym'] ?? null;
        $this->container['asTyp'] = $data['asTyp'] ?? null;
        $this->container['yrLw'] = $data['yrLw'] ?? null;
        $this->container['yrH'] = $data['yrH'] ?? null;
        $this->container['o'] = $data['o'] ?? null;
        $this->container['h'] = $data['h'] ?? null;
        $this->container['l'] = $data['l'] ?? null;
        $this->container['c'] = $data['c'] ?? null;
        $this->container['ltp'] = $data['ltp'] ?? null;
        $this->container['ltt'] = $data['ltt'] ?? null;
        $this->container['altt'] = $data['altt'] ?? null;
        $this->container['lut'] = $data['lut'] ?? null;
        $this->container['atp'] = $data['atp'] ?? null;
        $this->container['bidPr'] = $data['bidPr'] ?? null;
        $this->container['askPr'] = $data['askPr'] ?? null;
        $this->container['vol'] = $data['vol'] ?? null;
        $this->container['loCt'] = $data['loCt'] ?? null;
        $this->container['hiCt'] = $data['hiCt'] ?? null;
        $this->container['chg'] = $data['chg'] ?? null;
        $this->container['chgP'] = $data['chgP'] ?? null;
        $this->container['ltSz'] = $data['ltSz'] ?? null;
        $this->container['tkSz'] = $data['tkSz'] ?? null;
        $this->container['dpNm'] = $data['dpNm'] ?? null;
        $this->container['stkPrc'] = $data['stkPrc'] ?? null;
        $this->container['opTyp'] = $data['opTyp'] ?? null;
        $this->container['exp'] = $data['exp'] ?? null;
        $this->container['desc'] = $data['desc'] ?? null;
        $this->container['exc'] = $data['exc'] ?? null;
        $this->container['brdLotQty'] = $data['brdLotQty'] ?? null;
        $this->container['qtyUnits'] = $data['qtyUnits'] ?? null;
        $this->container['prcUnits'] = $data['prcUnits'] ?? null;
        $this->container['prcQtn'] = $data['prcQtn'] ?? null;
        $this->container['dpInsTyp'] = $data['dpInsTyp'] ?? null;
        $this->container['bdSz'] = $data['bdSz'] ?? null;
        $this->container['akSz'] = $data['akSz'] ?? null;
        $this->container['dpExpDt'] = $data['dpExpDt'] ?? null;
        $this->container['opInt'] = $data['opInt'] ?? null;
        $this->container['opIntChg'] = $data['opIntChg'] ?? null;
        $this->container['opIntChgP'] = $data['opIntChgP'] ?? null;
        $this->container['spotSym'] = $data['spotSym'] ?? null;
        $this->container['spot'] = $data['spot'] ?? null;
        $this->container['spotChg'] = $data['spotChg'] ?? null;
        $this->container['spotChgP'] = $data['spotChgP'] ?? null;
        $this->container['rlOvrP'] = $data['rlOvrP'] ?? null;
        $this->container['rlCAbs'] = $data['rlCAbs'] ?? null;
        $this->container['ltTQty'] = $data['ltTQty'] ?? null;
        $this->container['tdrStDt'] = $data['tdrStDt'] ?? null;
        $this->container['tdrEndDt'] = $data['tdrEndDt'] ?? null;
        $this->container['srpStDt'] = $data['srpStDt'] ?? null;
        $this->container['mxLtSz'] = $data['mxLtSz'] ?? null;
        $this->container['trdInfoId'] = $data['trdInfoId'] ?? null;
        $this->container['ntByQty'] = $data['ntByQty'] ?? null;
        $this->container['ntSlQty'] = $data['ntSlQty'] ?? null;
        $this->container['onewkhi'] = $data['onewkhi'] ?? null;
        $this->container['onewklo'] = $data['onewklo'] ?? null;
        $this->container['onemnhi'] = $data['onemnhi'] ?? null;
        $this->container['onemnlo'] = $data['onemnlo'] ?? null;
        $this->container['thrmnhi'] = $data['thrmnhi'] ?? null;
        $this->container['thrmnlo'] = $data['thrmnlo'] ?? null;
        $this->container['alltmhi'] = $data['alltmhi'] ?? null;
        $this->container['alltmlo'] = $data['alltmlo'] ?? null;
        $this->container['askivfut'] = $data['askivfut'] ?? null;
        $this->container['askivspt'] = $data['askivspt'] ?? null;
        $this->container['bidivfut'] = $data['bidivfut'] ?? null;
        $this->container['bidivspt'] = $data['bidivspt'] ?? null;
        $this->container['ltpivfut'] = $data['ltpivfut'] ?? null;
        $this->container['ltpivspt'] = $data['ltpivspt'] ?? null;
        $this->container['ntTrdVal'] = $data['ntTrdVal'] ?? null;
        $this->container['mns'] = $data['mns'] ?? null;
        $this->container['isMTFEnabled'] = $data['isMTFEnabled'] ?? false;
        $this->container['rchFlg'] = $data['rchFlg'] ?? null;
        $this->container['nwsFlg'] = $data['nwsFlg'] ?? null;
        $this->container['rlOvrCst'] = $data['rlOvrCst'] ?? null;
        $this->container['rlOvrCstPrc'] = $data['rlOvrCstPrc'] ?? null;
        $this->container['rlOvrPrc'] = $data['rlOvrPrc'] ?? null;
        $this->container['bta'] = $data['bta'] ?? null;
        $this->container['pe'] = $data['pe'] ?? null;
        $this->container['mktCap'] = $data['mktCap'] ?? null;
        $this->container['delta'] = $data['delta'] ?? null;
        $this->container['gamma'] = $data['gamma'] ?? null;
        $this->container['theta'] = $data['theta'] ?? null;
        $this->container['vega'] = $data['vega'] ?? null;
        $this->container['idxFutTrdSym'] = $data['idxFutTrdSym'] ?? null;
        $this->container['dpVal'] = $data['dpVal'] ?? null;
        $this->container['pcr'] = $data['pcr'] ?? null;
        $this->container['pdVal'] = $data['pdVal'] ?? null;
        $this->container['bas'] = $data['bas'] ?? null;
        $this->container['qty'] = $data['qty'] ?? null;
        $this->container['avgByPrc'] = $data['avgByPrc'] ?? null;
        $this->container['avgSlPrc'] = $data['avgSlPrc'] ?? null;
        $this->container['urlzPL'] = $data['urlzPL'] ?? null;
        $this->container['dyGn'] = $data['dyGn'] ?? null;
        $this->container['invVal'] = $data['invVal'] ?? null;
        $this->container['ttlPL'] = $data['ttlPL'] ?? null;
        $this->container['dpUnit'] = $data['dpUnit'] ?? null;
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
     * @param string|null $trdSym Trading Symbol / Edelcode
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
     * @param string|null $sym Streaming Symbol : unique identifier for MW
     *
     * @return self
     */
    public function setSym($sym)
    {
        $this->container['sym'] = $sym;

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
     * Gets yrLw
     *
     * @return string|null
     */
    public function getYrLw()
    {
        return $this->container['yrLw'];
    }

    /**
     * Sets yrLw
     *
     * @param string|null $yrLw Year low
     *
     * @return self
     */
    public function setYrLw($yrLw)
    {
        $this->container['yrLw'] = $yrLw;

        return $this;
    }

    /**
     * Gets yrH
     *
     * @return string|null
     */
    public function getYrH()
    {
        return $this->container['yrH'];
    }

    /**
     * Sets yrH
     *
     * @param string|null $yrH Year high
     *
     * @return self
     */
    public function setYrH($yrH)
    {
        $this->container['yrH'] = $yrH;

        return $this;
    }

    /**
     * Gets o
     *
     * @return string|null
     */
    public function getO()
    {
        return $this->container['o'];
    }

    /**
     * Sets o
     *
     * @param string|null $o Open price
     *
     * @return self
     */
    public function setO($o)
    {
        $this->container['o'] = $o;

        return $this;
    }

    /**
     * Gets h
     *
     * @return string|null
     */
    public function getH()
    {
        return $this->container['h'];
    }

    /**
     * Sets h
     *
     * @param string|null $h Day high
     *
     * @return self
     */
    public function setH($h)
    {
        $this->container['h'] = $h;

        return $this;
    }

    /**
     * Gets l
     *
     * @return string|null
     */
    public function getL()
    {
        return $this->container['l'];
    }

    /**
     * Sets l
     *
     * @param string|null $l Day low
     *
     * @return self
     */
    public function setL($l)
    {
        $this->container['l'] = $l;

        return $this;
    }

    /**
     * Gets c
     *
     * @return string|null
     */
    public function getC()
    {
        return $this->container['c'];
    }

    /**
     * Sets c
     *
     * @param string|null $c Day close
     *
     * @return self
     */
    public function setC($c)
    {
        $this->container['c'] = $c;

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
     * @param string|null $ltp Last traded price
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
     * @param string|null $ltt Last traded time
     *
     * @return self
     */
    public function setLtt($ltt)
    {
        $this->container['ltt'] = $ltt;

        return $this;
    }

    /**
     * Gets altt
     *
     * @return string|null
     */
    public function getAltt()
    {
        return $this->container['altt'];
    }

    /**
     * Sets altt
     *
     * @param string|null $altt Actual Last traded time
     *
     * @return self
     */
    public function setAltt($altt)
    {
        $this->container['altt'] = $altt;

        return $this;
    }

    /**
     * Gets lut
     *
     * @return string|null
     */
    public function getLut()
    {
        return $this->container['lut'];
    }

    /**
     * Sets lut
     *
     * @param string|null $lut Last updated time in Date Format
     *
     * @return self
     */
    public function setLut($lut)
    {
        $this->container['lut'] = $lut;

        return $this;
    }

    /**
     * Gets atp
     *
     * @return string|null
     */
    public function getAtp()
    {
        return $this->container['atp'];
    }

    /**
     * Sets atp
     *
     * @param string|null $atp average traded price
     *
     * @return self
     */
    public function setAtp($atp)
    {
        $this->container['atp'] = $atp;

        return $this;
    }

    /**
     * Gets bidPr
     *
     * @return string|null
     */
    public function getBidPr()
    {
        return $this->container['bidPr'];
    }

    /**
     * Sets bidPr
     *
     * @param string|null $bidPr Bid price
     *
     * @return self
     */
    public function setBidPr($bidPr)
    {
        $this->container['bidPr'] = $bidPr;

        return $this;
    }

    /**
     * Gets askPr
     *
     * @return string|null
     */
    public function getAskPr()
    {
        return $this->container['askPr'];
    }

    /**
     * Sets askPr
     *
     * @param string|null $askPr Ask price
     *
     * @return self
     */
    public function setAskPr($askPr)
    {
        $this->container['askPr'] = $askPr;

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
     * @param string|null $vol Vol
     *
     * @return self
     */
    public function setVol($vol)
    {
        $this->container['vol'] = $vol;

        return $this;
    }

    /**
     * Gets loCt
     *
     * @return string|null
     */
    public function getLoCt()
    {
        return $this->container['loCt'];
    }

    /**
     * Sets loCt
     *
     * @param string|null $loCt Lower circuit price
     *
     * @return self
     */
    public function setLoCt($loCt)
    {
        $this->container['loCt'] = $loCt;

        return $this;
    }

    /**
     * Gets hiCt
     *
     * @return string|null
     */
    public function getHiCt()
    {
        return $this->container['hiCt'];
    }

    /**
     * Sets hiCt
     *
     * @param string|null $hiCt Higher circuit price
     *
     * @return self
     */
    public function setHiCt($hiCt)
    {
        $this->container['hiCt'] = $hiCt;

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
     * @param string|null $chg change from previous close
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
     * @param string|null $chgP change percent from previous close
     *
     * @return self
     */
    public function setChgP($chgP)
    {
        $this->container['chgP'] = $chgP;

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
     * Gets dpNm
     *
     * @return string|null
     */
    public function getDpNm()
    {
        return $this->container['dpNm'];
    }

    /**
     * Sets dpNm
     *
     * @param string|null $dpNm Display name
     *
     * @return self
     */
    public function setDpNm($dpNm)
    {
        $this->container['dpNm'] = $dpNm;

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
     * @param string|null $exp Expiry date of contract in milliseconds
     *
     * @return self
     */
    public function setExp($exp)
    {
        $this->container['exp'] = $exp;

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
     * @param string|null $desc Description for the scrip / contract
     *
     * @return self
     */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;

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
     * @param string|null $exc Exchange of the scrip / contract
     *
     * @return self
     */
    public function setExc($exc)
    {
        $this->container['exc'] = $exc;

        return $this;
    }

    /**
     * Gets brdLotQty
     *
     * @return string|null
     */
    public function getBrdLotQty()
    {
        return $this->container['brdLotQty'];
    }

    /**
     * Sets brdLotQty
     *
     * @param string|null $brdLotQty Board lot quantity
     *
     * @return self
     */
    public function setBrdLotQty($brdLotQty)
    {
        $this->container['brdLotQty'] = $brdLotQty;

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
     * @param string|null $qtyUnits Quantity units / deliver units
     *
     * @return self
     */
    public function setQtyUnits($qtyUnits)
    {
        $this->container['qtyUnits'] = $qtyUnits;

        return $this;
    }

    /**
     * Gets prcUnits
     *
     * @return string|null
     */
    public function getPrcUnits()
    {
        return $this->container['prcUnits'];
    }

    /**
     * Sets prcUnits
     *
     * @param string|null $prcUnits prc units
     *
     * @return self
     */
    public function setPrcUnits($prcUnits)
    {
        $this->container['prcUnits'] = $prcUnits;

        return $this;
    }

    /**
     * Gets prcQtn
     *
     * @return string|null
     */
    public function getPrcQtn()
    {
        return $this->container['prcQtn'];
    }

    /**
     * Sets prcQtn
     *
     * @param string|null $prcQtn prc units
     *
     * @return self
     */
    public function setPrcQtn($prcQtn)
    {
        $this->container['prcQtn'] = $prcQtn;

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
     * Gets bdSz
     *
     * @return string|null
     */
    public function getBdSz()
    {
        return $this->container['bdSz'];
    }

    /**
     * Sets bdSz
     *
     * @param string|null $bdSz Bid size
     *
     * @return self
     */
    public function setBdSz($bdSz)
    {
        $this->container['bdSz'] = $bdSz;

        return $this;
    }

    /**
     * Gets akSz
     *
     * @return string|null
     */
    public function getAkSz()
    {
        return $this->container['akSz'];
    }

    /**
     * Sets akSz
     *
     * @param string|null $akSz Ask size
     *
     * @return self
     */
    public function setAkSz($akSz)
    {
        $this->container['akSz'] = $akSz;

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
     * @param string|null $opInt Open interest
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
     * @param string|null $opIntChg Change in Open interest
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
     * @param string|null $opIntChgP Percentage Change in Open interest
     *
     * @return self
     */
    public function setOpIntChgP($opIntChgP)
    {
        $this->container['opIntChgP'] = $opIntChgP;

        return $this;
    }

    /**
     * Gets spotSym
     *
     * @return string|null
     */
    public function getSpotSym()
    {
        return $this->container['spotSym'];
    }

    /**
     * Sets spotSym
     *
     * @param string|null $spotSym Spot price of underlying
     *
     * @return self
     */
    public function setSpotSym($spotSym)
    {
        $this->container['spotSym'] = $spotSym;

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
     * @param string|null $spot Spot price of underlying
     *
     * @return self
     */
    public function setSpot($spot)
    {
        $this->container['spot'] = $spot;

        return $this;
    }

    /**
     * Gets spotChg
     *
     * @return string|null
     */
    public function getSpotChg()
    {
        return $this->container['spotChg'];
    }

    /**
     * Sets spotChg
     *
     * @param string|null $spotChg Spot Change of underlying
     *
     * @return self
     */
    public function setSpotChg($spotChg)
    {
        $this->container['spotChg'] = $spotChg;

        return $this;
    }

    /**
     * Gets spotChgP
     *
     * @return string|null
     */
    public function getSpotChgP()
    {
        return $this->container['spotChgP'];
    }

    /**
     * Sets spotChgP
     *
     * @param string|null $spotChgP Spot Change Percent of underlying
     *
     * @return self
     */
    public function setSpotChgP($spotChgP)
    {
        $this->container['spotChgP'] = $spotChgP;

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
     * @param string|null $rlOvrP Rollover percentage
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
     * @param string|null $rlCAbs Absolute Cost for Rollover
     *
     * @return self
     */
    public function setRlCAbs($rlCAbs)
    {
        $this->container['rlCAbs'] = $rlCAbs;

        return $this;
    }

    /**
     * Gets ltTQty
     *
     * @return string|null
     */
    public function getLtTQty()
    {
        return $this->container['ltTQty'];
    }

    /**
     * Sets ltTQty
     *
     * @param string|null $ltTQty Last traded quantity
     *
     * @return self
     */
    public function setLtTQty($ltTQty)
    {
        $this->container['ltTQty'] = $ltTQty;

        return $this;
    }

    /**
     * Gets tdrStDt
     *
     * @return string|null
     */
    public function getTdrStDt()
    {
        return $this->container['tdrStDt'];
    }

    /**
     * Sets tdrStDt
     *
     * @param string|null $tdrStDt Tender start date in epoch (milliseconds)
     *
     * @return self
     */
    public function setTdrStDt($tdrStDt)
    {
        $this->container['tdrStDt'] = $tdrStDt;

        return $this;
    }

    /**
     * Gets tdrEndDt
     *
     * @return string|null
     */
    public function getTdrEndDt()
    {
        return $this->container['tdrEndDt'];
    }

    /**
     * Sets tdrEndDt
     *
     * @param string|null $tdrEndDt Tender end date in epoch (milliseconds)
     *
     * @return self
     */
    public function setTdrEndDt($tdrEndDt)
    {
        $this->container['tdrEndDt'] = $tdrEndDt;

        return $this;
    }

    /**
     * Gets srpStDt
     *
     * @return string|null
     */
    public function getSrpStDt()
    {
        return $this->container['srpStDt'];
    }

    /**
     * Sets srpStDt
     *
     * @param string|null $srpStDt Scrip start date in epoch (milliseconds)
     *
     * @return self
     */
    public function setSrpStDt($srpStDt)
    {
        $this->container['srpStDt'] = $srpStDt;

        return $this;
    }

    /**
     * Gets mxLtSz
     *
     * @return string|null
     */
    public function getMxLtSz()
    {
        return $this->container['mxLtSz'];
    }

    /**
     * Sets mxLtSz
     *
     * @param string|null $mxLtSz Max Lot size
     *
     * @return self
     */
    public function setMxLtSz($mxLtSz)
    {
        $this->container['mxLtSz'] = $mxLtSz;

        return $this;
    }

    /**
     * Gets trdInfoId
     *
     * @return string[]|null
     */
    public function getTrdInfoId()
    {
        return $this->container['trdInfoId'];
    }

    /**
     * Sets trdInfoId
     *
     * @param string[]|null $trdInfoId t2t text info
     *
     * @return self
     */
    public function setTrdInfoId($trdInfoId)
    {
        $this->container['trdInfoId'] = $trdInfoId;

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
     * @param string|null $ntByQty Total Buy Quantity
     *
     * @return self
     */
    public function setNtByQty($ntByQty)
    {
        $this->container['ntByQty'] = $ntByQty;

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
     * @param string|null $ntSlQty Total Sell Quantity
     *
     * @return self
     */
    public function setNtSlQty($ntSlQty)
    {
        $this->container['ntSlQty'] = $ntSlQty;

        return $this;
    }

    /**
     * Gets onewkhi
     *
     * @return string|null
     */
    public function getOnewkhi()
    {
        return $this->container['onewkhi'];
    }

    /**
     * Sets onewkhi
     *
     * @param string|null $onewkhi One Week High
     *
     * @return self
     */
    public function setOnewkhi($onewkhi)
    {
        $this->container['onewkhi'] = $onewkhi;

        return $this;
    }

    /**
     * Gets onewklo
     *
     * @return string|null
     */
    public function getOnewklo()
    {
        return $this->container['onewklo'];
    }

    /**
     * Sets onewklo
     *
     * @param string|null $onewklo One Week Low
     *
     * @return self
     */
    public function setOnewklo($onewklo)
    {
        $this->container['onewklo'] = $onewklo;

        return $this;
    }

    /**
     * Gets onemnhi
     *
     * @return string|null
     */
    public function getOnemnhi()
    {
        return $this->container['onemnhi'];
    }

    /**
     * Sets onemnhi
     *
     * @param string|null $onemnhi One month high
     *
     * @return self
     */
    public function setOnemnhi($onemnhi)
    {
        $this->container['onemnhi'] = $onemnhi;

        return $this;
    }

    /**
     * Gets onemnlo
     *
     * @return string|null
     */
    public function getOnemnlo()
    {
        return $this->container['onemnlo'];
    }

    /**
     * Sets onemnlo
     *
     * @param string|null $onemnlo one month low
     *
     * @return self
     */
    public function setOnemnlo($onemnlo)
    {
        $this->container['onemnlo'] = $onemnlo;

        return $this;
    }

    /**
     * Gets thrmnhi
     *
     * @return string|null
     */
    public function getThrmnhi()
    {
        return $this->container['thrmnhi'];
    }

    /**
     * Sets thrmnhi
     *
     * @param string|null $thrmnhi Three months high
     *
     * @return self
     */
    public function setThrmnhi($thrmnhi)
    {
        $this->container['thrmnhi'] = $thrmnhi;

        return $this;
    }

    /**
     * Gets thrmnlo
     *
     * @return string|null
     */
    public function getThrmnlo()
    {
        return $this->container['thrmnlo'];
    }

    /**
     * Sets thrmnlo
     *
     * @param string|null $thrmnlo Three months low
     *
     * @return self
     */
    public function setThrmnlo($thrmnlo)
    {
        $this->container['thrmnlo'] = $thrmnlo;

        return $this;
    }

    /**
     * Gets alltmhi
     *
     * @return string|null
     */
    public function getAlltmhi()
    {
        return $this->container['alltmhi'];
    }

    /**
     * Sets alltmhi
     *
     * @param string|null $alltmhi All time high
     *
     * @return self
     */
    public function setAlltmhi($alltmhi)
    {
        $this->container['alltmhi'] = $alltmhi;

        return $this;
    }

    /**
     * Gets alltmlo
     *
     * @return string|null
     */
    public function getAlltmlo()
    {
        return $this->container['alltmlo'];
    }

    /**
     * Sets alltmlo
     *
     * @param string|null $alltmlo All time low
     *
     * @return self
     */
    public function setAlltmlo($alltmlo)
    {
        $this->container['alltmlo'] = $alltmlo;

        return $this;
    }

    /**
     * Gets askivfut
     *
     * @return string|null
     */
    public function getAskivfut()
    {
        return $this->container['askivfut'];
    }

    /**
     * Sets askivfut
     *
     * @param string|null $askivfut Ask IV for future
     *
     * @return self
     */
    public function setAskivfut($askivfut)
    {
        $this->container['askivfut'] = $askivfut;

        return $this;
    }

    /**
     * Gets askivspt
     *
     * @return string|null
     */
    public function getAskivspt()
    {
        return $this->container['askivspt'];
    }

    /**
     * Sets askivspt
     *
     * @param string|null $askivspt Ask IV for spot
     *
     * @return self
     */
    public function setAskivspt($askivspt)
    {
        $this->container['askivspt'] = $askivspt;

        return $this;
    }

    /**
     * Gets bidivfut
     *
     * @return string|null
     */
    public function getBidivfut()
    {
        return $this->container['bidivfut'];
    }

    /**
     * Sets bidivfut
     *
     * @param string|null $bidivfut Bid IV for future
     *
     * @return self
     */
    public function setBidivfut($bidivfut)
    {
        $this->container['bidivfut'] = $bidivfut;

        return $this;
    }

    /**
     * Gets bidivspt
     *
     * @return string|null
     */
    public function getBidivspt()
    {
        return $this->container['bidivspt'];
    }

    /**
     * Sets bidivspt
     *
     * @param string|null $bidivspt Bid IV for spot
     *
     * @return self
     */
    public function setBidivspt($bidivspt)
    {
        $this->container['bidivspt'] = $bidivspt;

        return $this;
    }

    /**
     * Gets ltpivfut
     *
     * @return string|null
     */
    public function getLtpivfut()
    {
        return $this->container['ltpivfut'];
    }

    /**
     * Sets ltpivfut
     *
     * @param string|null $ltpivfut Bid IV for future
     *
     * @return self
     */
    public function setLtpivfut($ltpivfut)
    {
        $this->container['ltpivfut'] = $ltpivfut;

        return $this;
    }

    /**
     * Gets ltpivspt
     *
     * @return string|null
     */
    public function getLtpivspt()
    {
        return $this->container['ltpivspt'];
    }

    /**
     * Sets ltpivspt
     *
     * @param string|null $ltpivspt Bid IV for spot
     *
     * @return self
     */
    public function setLtpivspt($ltpivspt)
    {
        $this->container['ltpivspt'] = $ltpivspt;

        return $this;
    }

    /**
     * Gets ntTrdVal
     *
     * @return string|null
     */
    public function getNtTrdVal()
    {
        return $this->container['ntTrdVal'];
    }

    /**
     * Sets ntTrdVal
     *
     * @param string|null $ntTrdVal Total traded value
     *
     * @return self
     */
    public function setNtTrdVal($ntTrdVal)
    {
        $this->container['ntTrdVal'] = $ntTrdVal;

        return $this;
    }

    /**
     * Gets mns
     *
     * @return string|null
     */
    public function getMns()
    {
        return $this->container['mns'];
    }

    /**
     * Sets mns
     *
     * @param string|null $mns Moneyness Type, note:this field might be null as well i.e the key may not come in the response
     *
     * @return self
     */
    public function setMns($mns)
    {
        $this->container['mns'] = $mns;

        return $this;
    }

    /**
     * Gets isMTFEnabled
     *
     * @return bool|null
     */
    public function getIsMTFEnabled()
    {
        return $this->container['isMTFEnabled'];
    }

    /**
     * Sets isMTFEnabled
     *
     * @param bool|null $isMTFEnabled MTF flag
     *
     * @return self
     */
    public function setIsMTFEnabled($isMTFEnabled)
    {
        $this->container['isMTFEnabled'] = $isMTFEnabled;

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
     * @param string|null $rchFlg Research Flag
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
     * @param string|null $nwsFlg News Flag
     *
     * @return self
     */
    public function setNwsFlg($nwsFlg)
    {
        $this->container['nwsFlg'] = $nwsFlg;

        return $this;
    }

    /**
     * Gets rlOvrCst
     *
     * @return string|null
     */
    public function getRlOvrCst()
    {
        return $this->container['rlOvrCst'];
    }

    /**
     * Sets rlOvrCst
     *
     * @param string|null $rlOvrCst Roll Over Cost , can be null
     *
     * @return self
     */
    public function setRlOvrCst($rlOvrCst)
    {
        $this->container['rlOvrCst'] = $rlOvrCst;

        return $this;
    }

    /**
     * Gets rlOvrCstPrc
     *
     * @return string|null
     */
    public function getRlOvrCstPrc()
    {
        return $this->container['rlOvrCstPrc'];
    }

    /**
     * Sets rlOvrCstPrc
     *
     * @param string|null $rlOvrCstPrc Roll Over Cost Percentage, can be null
     *
     * @return self
     */
    public function setRlOvrCstPrc($rlOvrCstPrc)
    {
        $this->container['rlOvrCstPrc'] = $rlOvrCstPrc;

        return $this;
    }

    /**
     * Gets rlOvrPrc
     *
     * @return string|null
     */
    public function getRlOvrPrc()
    {
        return $this->container['rlOvrPrc'];
    }

    /**
     * Sets rlOvrPrc
     *
     * @param string|null $rlOvrPrc Roll Over Percentage, can be null
     *
     * @return self
     */
    public function setRlOvrPrc($rlOvrPrc)
    {
        $this->container['rlOvrPrc'] = $rlOvrPrc;

        return $this;
    }

    /**
     * Gets bta
     *
     * @return string|null
     */
    public function getBta()
    {
        return $this->container['bta'];
    }

    /**
     * Sets bta
     *
     * @param string|null $bta Beta Value, can be null
     *
     * @return self
     */
    public function setBta($bta)
    {
        $this->container['bta'] = $bta;

        return $this;
    }

    /**
     * Gets pe
     *
     * @return string|null
     */
    public function getPe()
    {
        return $this->container['pe'];
    }

    /**
     * Sets pe
     *
     * @param string|null $pe PE value for for Equity, can be null
     *
     * @return self
     */
    public function setPe($pe)
    {
        $this->container['pe'] = $pe;

        return $this;
    }

    /**
     * Gets mktCap
     *
     * @return string|null
     */
    public function getMktCap()
    {
        return $this->container['mktCap'];
    }

    /**
     * Sets mktCap
     *
     * @param string|null $mktCap Market Cap value for Equity, can be null
     *
     * @return self
     */
    public function setMktCap($mktCap)
    {
        $this->container['mktCap'] = $mktCap;

        return $this;
    }

    /**
     * Gets delta
     *
     * @return string|null
     */
    public function getDelta()
    {
        return $this->container['delta'];
    }

    /**
     * Sets delta
     *
     * @param string|null $delta delta
     *
     * @return self
     */
    public function setDelta($delta)
    {
        $this->container['delta'] = $delta;

        return $this;
    }

    /**
     * Gets gamma
     *
     * @return string|null
     */
    public function getGamma()
    {
        return $this->container['gamma'];
    }

    /**
     * Sets gamma
     *
     * @param string|null $gamma gamma
     *
     * @return self
     */
    public function setGamma($gamma)
    {
        $this->container['gamma'] = $gamma;

        return $this;
    }

    /**
     * Gets theta
     *
     * @return string|null
     */
    public function getTheta()
    {
        return $this->container['theta'];
    }

    /**
     * Sets theta
     *
     * @param string|null $theta theta
     *
     * @return self
     */
    public function setTheta($theta)
    {
        $this->container['theta'] = $theta;

        return $this;
    }

    /**
     * Gets vega
     *
     * @return string|null
     */
    public function getVega()
    {
        return $this->container['vega'];
    }

    /**
     * Sets vega
     *
     * @param string|null $vega vega
     *
     * @return self
     */
    public function setVega($vega)
    {
        $this->container['vega'] = $vega;

        return $this;
    }

    /**
     * Gets idxFutTrdSym
     *
     * @return string|null
     */
    public function getIdxFutTrdSym()
    {
        return $this->container['idxFutTrdSym'];
    }

    /**
     * Sets idxFutTrdSym
     *
     * @param string|null $idxFutTrdSym Nifty future's nearest expiry trading symbol
     *
     * @return self
     */
    public function setIdxFutTrdSym($idxFutTrdSym)
    {
        $this->container['idxFutTrdSym'] = $idxFutTrdSym;

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
     * @param string|null $dpVal DP Value --> Original symbol-name
     *
     * @return self
     */
    public function setDpVal($dpVal)
    {
        $this->container['dpVal'] = $dpVal;

        return $this;
    }

    /**
     * Gets pcr
     *
     * @return string|null
     */
    public function getPcr()
    {
        return $this->container['pcr'];
    }

    /**
     * Sets pcr
     *
     * @param string|null $pcr PC Ratio
     *
     * @return self
     */
    public function setPcr($pcr)
    {
        $this->container['pcr'] = $pcr;

        return $this;
    }

    /**
     * Gets pdVal
     *
     * @return string|null
     */
    public function getPdVal()
    {
        return $this->container['pdVal'];
    }

    /**
     * Sets pdVal
     *
     * @param string|null $pdVal Prem/Disc Value
     *
     * @return self
     */
    public function setPdVal($pdVal)
    {
        $this->container['pdVal'] = $pdVal;

        return $this;
    }

    /**
     * Gets bas
     *
     * @return string|null
     */
    public function getBas()
    {
        return $this->container['bas'];
    }

    /**
     * Sets bas
     *
     * @param string|null $bas Prem/Disc
     *
     * @return self
     */
    public function setBas($bas)
    {
        $this->container['bas'] = $bas;

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
     * Gets dyGn
     *
     * @return string|null
     */
    public function getDyGn()
    {
        return $this->container['dyGn'];
    }

    /**
     * Sets dyGn
     *
     * @param string|null $dyGn dyGn
     *
     * @return self
     */
    public function setDyGn($dyGn)
    {
        $this->container['dyGn'] = $dyGn;

        return $this;
    }

    /**
     * Gets invVal
     *
     * @return string|null
     */
    public function getInvVal()
    {
        return $this->container['invVal'];
    }

    /**
     * Sets invVal
     *
     * @param string|null $invVal invVal
     *
     * @return self
     */
    public function setInvVal($invVal)
    {
        $this->container['invVal'] = $invVal;

        return $this;
    }

    /**
     * Gets ttlPL
     *
     * @return string|null
     */
    public function getTtlPL()
    {
        return $this->container['ttlPL'];
    }

    /**
     * Sets ttlPL
     *
     * @param string|null $ttlPL ttlPL
     *
     * @return self
     */
    public function setTtlPL($ttlPL)
    {
        $this->container['ttlPL'] = $ttlPL;

        return $this;
    }

    /**
     * Gets dpUnit
     *
     * @return string|null
     */
    public function getDpUnit()
    {
        return $this->container['dpUnit'];
    }

    /**
     * Sets dpUnit
     *
     * @param string|null $dpUnit dpUnit
     *
     * @return self
     */
    public function setDpUnit($dpUnit)
    {
        $this->container['dpUnit'] = $dpUnit;

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


