<?php
/**
 * DIONReportReconciliation
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
 * DIONReportReconciliation Class Doc Comment
 *
 * @category Class
 * @package  com\edel
 * @author   Edelweiss
 * @link     https://www.edelweiss.in
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DIONReportReconciliation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelName = 'DIONReportReconciliation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'txnID' => 'string',
        'clientID' => 'string',
        'schemeID' => 'string',
        'txnType' => 'string',
        'units' => 'string',
        'amount' => 'string',
        'closeAccountFlag' => 'string',
        'reinvestmentFlag' => 'string',
        'toSchemeID' => 'string',
        'isNFO' => 'bool',
        'txnDate' => 'string',
        'txnTime' => 'string',
        'folioNo' => 'string',
        'checkDigNo' => 'string',
        'redPyMec' => 'string',
        'status' => 'string',
        'fileGeneratedFreq' => 'string',
        'remarks' => 'string',
        'orderedBy' => 'string',
        'lastModifiedBy' => 'string',
        'lastModifiedOn' => 'string',
        'sysRefNo' => 'string',
        'referenceNO' => 'string',
        'token' => 'string',
        'schemeCode' => 'string',
        'rnTSchemeCode' => 'string',
        'inBatchID' => 'string',
        'inSubBatchID' => 'string',
        'physicalFlag' => 'string',
        'minRedeemFlag' => 'string',
        'redeemDate' => 'string',
        'redeemAmount' => 'string',
        'vcOrderRemarks' => 'string',
        'clientCode' => 'string',
        'isSpread' => 'string',
        'orderSource' => 'string',
        'startDay' => 'string',
        'startDate' => 'string',
        'endDate' => 'string',
        'genrateToday' => 'string',
        'tenure' => 'string',
        'mandateID' => 'string',
        'brokerage' => 'string',
        'switchSchemeCode' => 'string',
        'switchISIN' => 'string',
        'createdBy' => 'string',
        'createdOn' => 'string',
        'exchangeRefNo' => 'string',
        'mode' => 'string',
        'validateMargin' => 'string',
        'brokerRefNo' => 'string',
        'limitValidation' => 'string',
        'checkHoldings' => 'string',
        'modelPortFolioName' => 'string',
        'orderType' => 'string',
        'uniqueNumber' => 'string',
        'subBrokerCode' => 'string',
        'paymentMode' => 'string',
        'mandateSts' => 'string',
        'ordStatus' => 'string',
        'isModify' => 'bool',
        'isCancel' => 'bool',
        'schemeName' => 'string',
        'isin' => 'string',
        'nav' => 'double',
        'sipfrequency' => 'string',
        'dpc' => 'string',
        'euinflag' => 'string',
        'mfimfdflag' => 'string',
        'arn' => 'string',
        'euinnumber' => 'string',
        'settlementType' => 'string',
        'sipregDate' => 'string',
        'rmcode' => 'string',
        'navasNoDate' => 'string',
        'kycflag' => 'string',
        'amcschemeCode' => 'string',
        'amccode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'txnID' => null,
        'clientID' => null,
        'schemeID' => null,
        'txnType' => null,
        'units' => null,
        'amount' => null,
        'closeAccountFlag' => null,
        'reinvestmentFlag' => null,
        'toSchemeID' => null,
        'isNFO' => null,
        'txnDate' => null,
        'txnTime' => null,
        'folioNo' => null,
        'checkDigNo' => null,
        'redPyMec' => null,
        'status' => null,
        'fileGeneratedFreq' => null,
        'remarks' => null,
        'orderedBy' => null,
        'lastModifiedBy' => null,
        'lastModifiedOn' => null,
        'sysRefNo' => null,
        'referenceNO' => null,
        'token' => null,
        'schemeCode' => null,
        'rnTSchemeCode' => null,
        'inBatchID' => null,
        'inSubBatchID' => null,
        'physicalFlag' => null,
        'minRedeemFlag' => null,
        'redeemDate' => null,
        'redeemAmount' => null,
        'vcOrderRemarks' => null,
        'clientCode' => null,
        'isSpread' => null,
        'orderSource' => null,
        'startDay' => null,
        'startDate' => null,
        'endDate' => null,
        'genrateToday' => null,
        'tenure' => null,
        'mandateID' => null,
        'brokerage' => null,
        'switchSchemeCode' => null,
        'switchISIN' => null,
        'createdBy' => null,
        'createdOn' => null,
        'exchangeRefNo' => null,
        'mode' => null,
        'validateMargin' => null,
        'brokerRefNo' => null,
        'limitValidation' => null,
        'checkHoldings' => null,
        'modelPortFolioName' => null,
        'orderType' => null,
        'uniqueNumber' => null,
        'subBrokerCode' => null,
        'paymentMode' => null,
        'mandateSts' => null,
        'ordStatus' => null,
        'isModify' => null,
        'isCancel' => null,
        'schemeName' => null,
        'isin' => null,
        'nav' => 'double',
        'sipfrequency' => null,
        'dpc' => null,
        'euinflag' => null,
        'mfimfdflag' => null,
        'arn' => null,
        'euinnumber' => null,
        'settlementType' => null,
        'sipregDate' => null,
        'rmcode' => null,
        'navasNoDate' => null,
        'kycflag' => null,
        'amcschemeCode' => null,
        'amccode' => null
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
        'txnID' => 'txnID',
        'clientID' => 'clientID',
        'schemeID' => 'schemeID',
        'txnType' => 'txnType',
        'units' => 'units',
        'amount' => 'amount',
        'closeAccountFlag' => 'closeAccountFlag',
        'reinvestmentFlag' => 'reinvestmentFlag',
        'toSchemeID' => 'toSchemeID',
        'isNFO' => 'isNFO',
        'txnDate' => 'txnDate',
        'txnTime' => 'txnTime',
        'folioNo' => 'folioNo',
        'checkDigNo' => 'checkDigNo',
        'redPyMec' => 'redPyMec',
        'status' => 'status',
        'fileGeneratedFreq' => 'fileGeneratedFreq',
        'remarks' => 'remarks',
        'orderedBy' => 'orderedBy',
        'lastModifiedBy' => 'lastModifiedBy',
        'lastModifiedOn' => 'lastModifiedOn',
        'sysRefNo' => 'sysRefNo',
        'referenceNO' => 'referenceNO',
        'token' => 'token',
        'schemeCode' => 'schemeCode',
        'rnTSchemeCode' => 'rnTSchemeCode',
        'inBatchID' => 'inBatchID',
        'inSubBatchID' => 'inSubBatchID',
        'physicalFlag' => 'physicalFlag',
        'minRedeemFlag' => 'minRedeemFlag',
        'redeemDate' => 'redeemDate',
        'redeemAmount' => 'redeemAmount',
        'vcOrderRemarks' => 'vcOrderRemarks',
        'clientCode' => 'clientCode',
        'isSpread' => 'isSpread',
        'orderSource' => 'orderSource',
        'startDay' => 'startDay',
        'startDate' => 'startDate',
        'endDate' => 'endDate',
        'genrateToday' => 'genrateToday',
        'tenure' => 'tenure',
        'mandateID' => 'mandateID',
        'brokerage' => 'brokerage',
        'switchSchemeCode' => 'switchSchemeCode',
        'switchISIN' => 'switchISIN',
        'createdBy' => 'createdBy',
        'createdOn' => 'createdOn',
        'exchangeRefNo' => 'exchangeRefNo',
        'mode' => 'mode',
        'validateMargin' => 'validateMargin',
        'brokerRefNo' => 'brokerRefNo',
        'limitValidation' => 'limitValidation',
        'checkHoldings' => 'checkHoldings',
        'modelPortFolioName' => 'modelPortFolioName',
        'orderType' => 'orderType',
        'uniqueNumber' => 'uniqueNumber',
        'subBrokerCode' => 'subBrokerCode',
        'paymentMode' => 'paymentMode',
        'mandateSts' => 'mandateSts',
        'ordStatus' => 'ordStatus',
        'isModify' => 'isModify',
        'isCancel' => 'isCancel',
        'schemeName' => 'schemeName',
        'isin' => 'isin',
        'nav' => 'nav',
        'sipfrequency' => 'sipfrequency',
        'dpc' => 'dpc',
        'euinflag' => 'euinflag',
        'mfimfdflag' => 'mfimfdflag',
        'arn' => 'arn',
        'euinnumber' => 'euinnumber',
        'settlementType' => 'settlementType',
        'sipregDate' => 'sipregDate',
        'rmcode' => 'rmcode',
        'navasNoDate' => 'navasNoDate',
        'kycflag' => 'kycflag',
        'amcschemeCode' => 'amcschemeCode',
        'amccode' => 'amccode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'txnID' => 'setTxnID',
        'clientID' => 'setClientID',
        'schemeID' => 'setSchemeID',
        'txnType' => 'setTxnType',
        'units' => 'setUnits',
        'amount' => 'setAmount',
        'closeAccountFlag' => 'setCloseAccountFlag',
        'reinvestmentFlag' => 'setReinvestmentFlag',
        'toSchemeID' => 'setToSchemeID',
        'isNFO' => 'setIsNFO',
        'txnDate' => 'setTxnDate',
        'txnTime' => 'setTxnTime',
        'folioNo' => 'setFolioNo',
        'checkDigNo' => 'setCheckDigNo',
        'redPyMec' => 'setRedPyMec',
        'status' => 'setStatus',
        'fileGeneratedFreq' => 'setFileGeneratedFreq',
        'remarks' => 'setRemarks',
        'orderedBy' => 'setOrderedBy',
        'lastModifiedBy' => 'setLastModifiedBy',
        'lastModifiedOn' => 'setLastModifiedOn',
        'sysRefNo' => 'setSysRefNo',
        'referenceNO' => 'setReferenceNO',
        'token' => 'setToken',
        'schemeCode' => 'setSchemeCode',
        'rnTSchemeCode' => 'setRnTSchemeCode',
        'inBatchID' => 'setInBatchID',
        'inSubBatchID' => 'setInSubBatchID',
        'physicalFlag' => 'setPhysicalFlag',
        'minRedeemFlag' => 'setMinRedeemFlag',
        'redeemDate' => 'setRedeemDate',
        'redeemAmount' => 'setRedeemAmount',
        'vcOrderRemarks' => 'setVcOrderRemarks',
        'clientCode' => 'setClientCode',
        'isSpread' => 'setIsSpread',
        'orderSource' => 'setOrderSource',
        'startDay' => 'setStartDay',
        'startDate' => 'setStartDate',
        'endDate' => 'setEndDate',
        'genrateToday' => 'setGenrateToday',
        'tenure' => 'setTenure',
        'mandateID' => 'setMandateID',
        'brokerage' => 'setBrokerage',
        'switchSchemeCode' => 'setSwitchSchemeCode',
        'switchISIN' => 'setSwitchISIN',
        'createdBy' => 'setCreatedBy',
        'createdOn' => 'setCreatedOn',
        'exchangeRefNo' => 'setExchangeRefNo',
        'mode' => 'setMode',
        'validateMargin' => 'setValidateMargin',
        'brokerRefNo' => 'setBrokerRefNo',
        'limitValidation' => 'setLimitValidation',
        'checkHoldings' => 'setCheckHoldings',
        'modelPortFolioName' => 'setModelPortFolioName',
        'orderType' => 'setOrderType',
        'uniqueNumber' => 'setUniqueNumber',
        'subBrokerCode' => 'setSubBrokerCode',
        'paymentMode' => 'setPaymentMode',
        'mandateSts' => 'setMandateSts',
        'ordStatus' => 'setOrdStatus',
        'isModify' => 'setIsModify',
        'isCancel' => 'setIsCancel',
        'schemeName' => 'setSchemeName',
        'isin' => 'setIsin',
        'nav' => 'setNav',
        'sipfrequency' => 'setSipfrequency',
        'dpc' => 'setDpc',
        'euinflag' => 'setEuinflag',
        'mfimfdflag' => 'setMfimfdflag',
        'arn' => 'setArn',
        'euinnumber' => 'setEuinnumber',
        'settlementType' => 'setSettlementType',
        'sipregDate' => 'setSipregDate',
        'rmcode' => 'setRmcode',
        'navasNoDate' => 'setNavasNoDate',
        'kycflag' => 'setKycflag',
        'amcschemeCode' => 'setAmcschemeCode',
        'amccode' => 'setAmccode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'txnID' => 'getTxnID',
        'clientID' => 'getClientID',
        'schemeID' => 'getSchemeID',
        'txnType' => 'getTxnType',
        'units' => 'getUnits',
        'amount' => 'getAmount',
        'closeAccountFlag' => 'getCloseAccountFlag',
        'reinvestmentFlag' => 'getReinvestmentFlag',
        'toSchemeID' => 'getToSchemeID',
        'isNFO' => 'getIsNFO',
        'txnDate' => 'getTxnDate',
        'txnTime' => 'getTxnTime',
        'folioNo' => 'getFolioNo',
        'checkDigNo' => 'getCheckDigNo',
        'redPyMec' => 'getRedPyMec',
        'status' => 'getStatus',
        'fileGeneratedFreq' => 'getFileGeneratedFreq',
        'remarks' => 'getRemarks',
        'orderedBy' => 'getOrderedBy',
        'lastModifiedBy' => 'getLastModifiedBy',
        'lastModifiedOn' => 'getLastModifiedOn',
        'sysRefNo' => 'getSysRefNo',
        'referenceNO' => 'getReferenceNO',
        'token' => 'getToken',
        'schemeCode' => 'getSchemeCode',
        'rnTSchemeCode' => 'getRnTSchemeCode',
        'inBatchID' => 'getInBatchID',
        'inSubBatchID' => 'getInSubBatchID',
        'physicalFlag' => 'getPhysicalFlag',
        'minRedeemFlag' => 'getMinRedeemFlag',
        'redeemDate' => 'getRedeemDate',
        'redeemAmount' => 'getRedeemAmount',
        'vcOrderRemarks' => 'getVcOrderRemarks',
        'clientCode' => 'getClientCode',
        'isSpread' => 'getIsSpread',
        'orderSource' => 'getOrderSource',
        'startDay' => 'getStartDay',
        'startDate' => 'getStartDate',
        'endDate' => 'getEndDate',
        'genrateToday' => 'getGenrateToday',
        'tenure' => 'getTenure',
        'mandateID' => 'getMandateID',
        'brokerage' => 'getBrokerage',
        'switchSchemeCode' => 'getSwitchSchemeCode',
        'switchISIN' => 'getSwitchISIN',
        'createdBy' => 'getCreatedBy',
        'createdOn' => 'getCreatedOn',
        'exchangeRefNo' => 'getExchangeRefNo',
        'mode' => 'getMode',
        'validateMargin' => 'getValidateMargin',
        'brokerRefNo' => 'getBrokerRefNo',
        'limitValidation' => 'getLimitValidation',
        'checkHoldings' => 'getCheckHoldings',
        'modelPortFolioName' => 'getModelPortFolioName',
        'orderType' => 'getOrderType',
        'uniqueNumber' => 'getUniqueNumber',
        'subBrokerCode' => 'getSubBrokerCode',
        'paymentMode' => 'getPaymentMode',
        'mandateSts' => 'getMandateSts',
        'ordStatus' => 'getOrdStatus',
        'isModify' => 'getIsModify',
        'isCancel' => 'getIsCancel',
        'schemeName' => 'getSchemeName',
        'isin' => 'getIsin',
        'nav' => 'getNav',
        'sipfrequency' => 'getSipfrequency',
        'dpc' => 'getDpc',
        'euinflag' => 'getEuinflag',
        'mfimfdflag' => 'getMfimfdflag',
        'arn' => 'getArn',
        'euinnumber' => 'getEuinnumber',
        'settlementType' => 'getSettlementType',
        'sipregDate' => 'getSipregDate',
        'rmcode' => 'getRmcode',
        'navasNoDate' => 'getNavasNoDate',
        'kycflag' => 'getKycflag',
        'amcschemeCode' => 'getAmcschemeCode',
        'amccode' => 'getAmccode'
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
        $this->container['txnID'] = $data['txnID'] ?? null;
        $this->container['clientID'] = $data['clientID'] ?? null;
        $this->container['schemeID'] = $data['schemeID'] ?? null;
        $this->container['txnType'] = $data['txnType'] ?? null;
        $this->container['units'] = $data['units'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['closeAccountFlag'] = $data['closeAccountFlag'] ?? null;
        $this->container['reinvestmentFlag'] = $data['reinvestmentFlag'] ?? null;
        $this->container['toSchemeID'] = $data['toSchemeID'] ?? null;
        $this->container['isNFO'] = $data['isNFO'] ?? false;
        $this->container['txnDate'] = $data['txnDate'] ?? null;
        $this->container['txnTime'] = $data['txnTime'] ?? null;
        $this->container['folioNo'] = $data['folioNo'] ?? null;
        $this->container['checkDigNo'] = $data['checkDigNo'] ?? null;
        $this->container['redPyMec'] = $data['redPyMec'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['fileGeneratedFreq'] = $data['fileGeneratedFreq'] ?? null;
        $this->container['remarks'] = $data['remarks'] ?? null;
        $this->container['orderedBy'] = $data['orderedBy'] ?? null;
        $this->container['lastModifiedBy'] = $data['lastModifiedBy'] ?? null;
        $this->container['lastModifiedOn'] = $data['lastModifiedOn'] ?? null;
        $this->container['sysRefNo'] = $data['sysRefNo'] ?? null;
        $this->container['referenceNO'] = $data['referenceNO'] ?? null;
        $this->container['token'] = $data['token'] ?? null;
        $this->container['schemeCode'] = $data['schemeCode'] ?? null;
        $this->container['rnTSchemeCode'] = $data['rnTSchemeCode'] ?? null;
        $this->container['inBatchID'] = $data['inBatchID'] ?? null;
        $this->container['inSubBatchID'] = $data['inSubBatchID'] ?? null;
        $this->container['physicalFlag'] = $data['physicalFlag'] ?? null;
        $this->container['minRedeemFlag'] = $data['minRedeemFlag'] ?? null;
        $this->container['redeemDate'] = $data['redeemDate'] ?? null;
        $this->container['redeemAmount'] = $data['redeemAmount'] ?? null;
        $this->container['vcOrderRemarks'] = $data['vcOrderRemarks'] ?? null;
        $this->container['clientCode'] = $data['clientCode'] ?? null;
        $this->container['isSpread'] = $data['isSpread'] ?? null;
        $this->container['orderSource'] = $data['orderSource'] ?? null;
        $this->container['startDay'] = $data['startDay'] ?? null;
        $this->container['startDate'] = $data['startDate'] ?? null;
        $this->container['endDate'] = $data['endDate'] ?? null;
        $this->container['genrateToday'] = $data['genrateToday'] ?? null;
        $this->container['tenure'] = $data['tenure'] ?? null;
        $this->container['mandateID'] = $data['mandateID'] ?? null;
        $this->container['brokerage'] = $data['brokerage'] ?? null;
        $this->container['switchSchemeCode'] = $data['switchSchemeCode'] ?? null;
        $this->container['switchISIN'] = $data['switchISIN'] ?? null;
        $this->container['createdBy'] = $data['createdBy'] ?? null;
        $this->container['createdOn'] = $data['createdOn'] ?? null;
        $this->container['exchangeRefNo'] = $data['exchangeRefNo'] ?? null;
        $this->container['mode'] = $data['mode'] ?? null;
        $this->container['validateMargin'] = $data['validateMargin'] ?? null;
        $this->container['brokerRefNo'] = $data['brokerRefNo'] ?? null;
        $this->container['limitValidation'] = $data['limitValidation'] ?? null;
        $this->container['checkHoldings'] = $data['checkHoldings'] ?? null;
        $this->container['modelPortFolioName'] = $data['modelPortFolioName'] ?? null;
        $this->container['orderType'] = $data['orderType'] ?? null;
        $this->container['uniqueNumber'] = $data['uniqueNumber'] ?? null;
        $this->container['subBrokerCode'] = $data['subBrokerCode'] ?? null;
        $this->container['paymentMode'] = $data['paymentMode'] ?? null;
        $this->container['mandateSts'] = $data['mandateSts'] ?? null;
        $this->container['ordStatus'] = $data['ordStatus'] ?? null;
        $this->container['isModify'] = $data['isModify'] ?? false;
        $this->container['isCancel'] = $data['isCancel'] ?? false;
        $this->container['schemeName'] = $data['schemeName'] ?? null;
        $this->container['isin'] = $data['isin'] ?? null;
        $this->container['nav'] = $data['nav'] ?? null;
        $this->container['sipfrequency'] = $data['sipfrequency'] ?? null;
        $this->container['dpc'] = $data['dpc'] ?? null;
        $this->container['euinflag'] = $data['euinflag'] ?? null;
        $this->container['mfimfdflag'] = $data['mfimfdflag'] ?? null;
        $this->container['arn'] = $data['arn'] ?? null;
        $this->container['euinnumber'] = $data['euinnumber'] ?? null;
        $this->container['settlementType'] = $data['settlementType'] ?? null;
        $this->container['sipregDate'] = $data['sipregDate'] ?? null;
        $this->container['rmcode'] = $data['rmcode'] ?? null;
        $this->container['navasNoDate'] = $data['navasNoDate'] ?? null;
        $this->container['kycflag'] = $data['kycflag'] ?? null;
        $this->container['amcschemeCode'] = $data['amcschemeCode'] ?? null;
        $this->container['amccode'] = $data['amccode'] ?? null;
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
     * Gets txnID
     *
     * @return string|null
     */
    public function getTxnID()
    {
        return $this->container['txnID'];
    }

    /**
     * Sets txnID
     *
     * @param string|null $txnID txnID
     *
     * @return self
     */
    public function setTxnID($txnID)
    {
        $this->container['txnID'] = $txnID;

        return $this;
    }

    /**
     * Gets clientID
     *
     * @return string|null
     */
    public function getClientID()
    {
        return $this->container['clientID'];
    }

    /**
     * Sets clientID
     *
     * @param string|null $clientID clientID
     *
     * @return self
     */
    public function setClientID($clientID)
    {
        $this->container['clientID'] = $clientID;

        return $this;
    }

    /**
     * Gets schemeID
     *
     * @return string|null
     */
    public function getSchemeID()
    {
        return $this->container['schemeID'];
    }

    /**
     * Sets schemeID
     *
     * @param string|null $schemeID schemeID
     *
     * @return self
     */
    public function setSchemeID($schemeID)
    {
        $this->container['schemeID'] = $schemeID;

        return $this;
    }

    /**
     * Gets txnType
     *
     * @return string|null
     */
    public function getTxnType()
    {
        return $this->container['txnType'];
    }

    /**
     * Sets txnType
     *
     * @param string|null $txnType txnType
     *
     * @return self
     */
    public function setTxnType($txnType)
    {
        $this->container['txnType'] = $txnType;

        return $this;
    }

    /**
     * Gets units
     *
     * @return string|null
     */
    public function getUnits()
    {
        return $this->container['units'];
    }

    /**
     * Sets units
     *
     * @param string|null $units units
     *
     * @return self
     */
    public function setUnits($units)
    {
        $this->container['units'] = $units;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return string|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets closeAccountFlag
     *
     * @return string|null
     */
    public function getCloseAccountFlag()
    {
        return $this->container['closeAccountFlag'];
    }

    /**
     * Sets closeAccountFlag
     *
     * @param string|null $closeAccountFlag closeAccountFlag
     *
     * @return self
     */
    public function setCloseAccountFlag($closeAccountFlag)
    {
        $this->container['closeAccountFlag'] = $closeAccountFlag;

        return $this;
    }

    /**
     * Gets reinvestmentFlag
     *
     * @return string|null
     */
    public function getReinvestmentFlag()
    {
        return $this->container['reinvestmentFlag'];
    }

    /**
     * Sets reinvestmentFlag
     *
     * @param string|null $reinvestmentFlag reinvestmentFlag
     *
     * @return self
     */
    public function setReinvestmentFlag($reinvestmentFlag)
    {
        $this->container['reinvestmentFlag'] = $reinvestmentFlag;

        return $this;
    }

    /**
     * Gets toSchemeID
     *
     * @return string|null
     */
    public function getToSchemeID()
    {
        return $this->container['toSchemeID'];
    }

    /**
     * Sets toSchemeID
     *
     * @param string|null $toSchemeID toSchemeID
     *
     * @return self
     */
    public function setToSchemeID($toSchemeID)
    {
        $this->container['toSchemeID'] = $toSchemeID;

        return $this;
    }

    /**
     * Gets isNFO
     *
     * @return bool|null
     */
    public function getIsNFO()
    {
        return $this->container['isNFO'];
    }

    /**
     * Sets isNFO
     *
     * @param bool|null $isNFO isNFO
     *
     * @return self
     */
    public function setIsNFO($isNFO)
    {
        $this->container['isNFO'] = $isNFO;

        return $this;
    }

    /**
     * Gets txnDate
     *
     * @return string|null
     */
    public function getTxnDate()
    {
        return $this->container['txnDate'];
    }

    /**
     * Sets txnDate
     *
     * @param string|null $txnDate txnDate
     *
     * @return self
     */
    public function setTxnDate($txnDate)
    {
        $this->container['txnDate'] = $txnDate;

        return $this;
    }

    /**
     * Gets txnTime
     *
     * @return string|null
     */
    public function getTxnTime()
    {
        return $this->container['txnTime'];
    }

    /**
     * Sets txnTime
     *
     * @param string|null $txnTime txnTime
     *
     * @return self
     */
    public function setTxnTime($txnTime)
    {
        $this->container['txnTime'] = $txnTime;

        return $this;
    }

    /**
     * Gets folioNo
     *
     * @return string|null
     */
    public function getFolioNo()
    {
        return $this->container['folioNo'];
    }

    /**
     * Sets folioNo
     *
     * @param string|null $folioNo folioNo
     *
     * @return self
     */
    public function setFolioNo($folioNo)
    {
        $this->container['folioNo'] = $folioNo;

        return $this;
    }

    /**
     * Gets checkDigNo
     *
     * @return string|null
     */
    public function getCheckDigNo()
    {
        return $this->container['checkDigNo'];
    }

    /**
     * Sets checkDigNo
     *
     * @param string|null $checkDigNo checkDigNo
     *
     * @return self
     */
    public function setCheckDigNo($checkDigNo)
    {
        $this->container['checkDigNo'] = $checkDigNo;

        return $this;
    }

    /**
     * Gets redPyMec
     *
     * @return string|null
     */
    public function getRedPyMec()
    {
        return $this->container['redPyMec'];
    }

    /**
     * Sets redPyMec
     *
     * @param string|null $redPyMec redPyMec
     *
     * @return self
     */
    public function setRedPyMec($redPyMec)
    {
        $this->container['redPyMec'] = $redPyMec;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets fileGeneratedFreq
     *
     * @return string|null
     */
    public function getFileGeneratedFreq()
    {
        return $this->container['fileGeneratedFreq'];
    }

    /**
     * Sets fileGeneratedFreq
     *
     * @param string|null $fileGeneratedFreq fileGeneratedFreq
     *
     * @return self
     */
    public function setFileGeneratedFreq($fileGeneratedFreq)
    {
        $this->container['fileGeneratedFreq'] = $fileGeneratedFreq;

        return $this;
    }

    /**
     * Gets remarks
     *
     * @return string|null
     */
    public function getRemarks()
    {
        return $this->container['remarks'];
    }

    /**
     * Sets remarks
     *
     * @param string|null $remarks remarks
     *
     * @return self
     */
    public function setRemarks($remarks)
    {
        $this->container['remarks'] = $remarks;

        return $this;
    }

    /**
     * Gets orderedBy
     *
     * @return string|null
     */
    public function getOrderedBy()
    {
        return $this->container['orderedBy'];
    }

    /**
     * Sets orderedBy
     *
     * @param string|null $orderedBy orderedBy
     *
     * @return self
     */
    public function setOrderedBy($orderedBy)
    {
        $this->container['orderedBy'] = $orderedBy;

        return $this;
    }

    /**
     * Gets lastModifiedBy
     *
     * @return string|null
     */
    public function getLastModifiedBy()
    {
        return $this->container['lastModifiedBy'];
    }

    /**
     * Sets lastModifiedBy
     *
     * @param string|null $lastModifiedBy lastModifiedBy
     *
     * @return self
     */
    public function setLastModifiedBy($lastModifiedBy)
    {
        $this->container['lastModifiedBy'] = $lastModifiedBy;

        return $this;
    }

    /**
     * Gets lastModifiedOn
     *
     * @return string|null
     */
    public function getLastModifiedOn()
    {
        return $this->container['lastModifiedOn'];
    }

    /**
     * Sets lastModifiedOn
     *
     * @param string|null $lastModifiedOn lastModifiedOn
     *
     * @return self
     */
    public function setLastModifiedOn($lastModifiedOn)
    {
        $this->container['lastModifiedOn'] = $lastModifiedOn;

        return $this;
    }

    /**
     * Gets sysRefNo
     *
     * @return string|null
     */
    public function getSysRefNo()
    {
        return $this->container['sysRefNo'];
    }

    /**
     * Sets sysRefNo
     *
     * @param string|null $sysRefNo sysRefNo
     *
     * @return self
     */
    public function setSysRefNo($sysRefNo)
    {
        $this->container['sysRefNo'] = $sysRefNo;

        return $this;
    }

    /**
     * Gets referenceNO
     *
     * @return string|null
     */
    public function getReferenceNO()
    {
        return $this->container['referenceNO'];
    }

    /**
     * Sets referenceNO
     *
     * @param string|null $referenceNO referenceNO
     *
     * @return self
     */
    public function setReferenceNO($referenceNO)
    {
        $this->container['referenceNO'] = $referenceNO;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string|null
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string|null $token token
     *
     * @return self
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets schemeCode
     *
     * @return string|null
     */
    public function getSchemeCode()
    {
        return $this->container['schemeCode'];
    }

    /**
     * Sets schemeCode
     *
     * @param string|null $schemeCode schemeCode
     *
     * @return self
     */
    public function setSchemeCode($schemeCode)
    {
        $this->container['schemeCode'] = $schemeCode;

        return $this;
    }

    /**
     * Gets rnTSchemeCode
     *
     * @return string|null
     */
    public function getRnTSchemeCode()
    {
        return $this->container['rnTSchemeCode'];
    }

    /**
     * Sets rnTSchemeCode
     *
     * @param string|null $rnTSchemeCode rnTSchemeCode
     *
     * @return self
     */
    public function setRnTSchemeCode($rnTSchemeCode)
    {
        $this->container['rnTSchemeCode'] = $rnTSchemeCode;

        return $this;
    }

    /**
     * Gets inBatchID
     *
     * @return string|null
     */
    public function getInBatchID()
    {
        return $this->container['inBatchID'];
    }

    /**
     * Sets inBatchID
     *
     * @param string|null $inBatchID inBatchID
     *
     * @return self
     */
    public function setInBatchID($inBatchID)
    {
        $this->container['inBatchID'] = $inBatchID;

        return $this;
    }

    /**
     * Gets inSubBatchID
     *
     * @return string|null
     */
    public function getInSubBatchID()
    {
        return $this->container['inSubBatchID'];
    }

    /**
     * Sets inSubBatchID
     *
     * @param string|null $inSubBatchID inSubBatchID
     *
     * @return self
     */
    public function setInSubBatchID($inSubBatchID)
    {
        $this->container['inSubBatchID'] = $inSubBatchID;

        return $this;
    }

    /**
     * Gets physicalFlag
     *
     * @return string|null
     */
    public function getPhysicalFlag()
    {
        return $this->container['physicalFlag'];
    }

    /**
     * Sets physicalFlag
     *
     * @param string|null $physicalFlag physicalFlag
     *
     * @return self
     */
    public function setPhysicalFlag($physicalFlag)
    {
        $this->container['physicalFlag'] = $physicalFlag;

        return $this;
    }

    /**
     * Gets minRedeemFlag
     *
     * @return string|null
     */
    public function getMinRedeemFlag()
    {
        return $this->container['minRedeemFlag'];
    }

    /**
     * Sets minRedeemFlag
     *
     * @param string|null $minRedeemFlag minRedeemFlag
     *
     * @return self
     */
    public function setMinRedeemFlag($minRedeemFlag)
    {
        $this->container['minRedeemFlag'] = $minRedeemFlag;

        return $this;
    }

    /**
     * Gets redeemDate
     *
     * @return string|null
     */
    public function getRedeemDate()
    {
        return $this->container['redeemDate'];
    }

    /**
     * Sets redeemDate
     *
     * @param string|null $redeemDate redeemDate
     *
     * @return self
     */
    public function setRedeemDate($redeemDate)
    {
        $this->container['redeemDate'] = $redeemDate;

        return $this;
    }

    /**
     * Gets redeemAmount
     *
     * @return string|null
     */
    public function getRedeemAmount()
    {
        return $this->container['redeemAmount'];
    }

    /**
     * Sets redeemAmount
     *
     * @param string|null $redeemAmount redeemAmount
     *
     * @return self
     */
    public function setRedeemAmount($redeemAmount)
    {
        $this->container['redeemAmount'] = $redeemAmount;

        return $this;
    }

    /**
     * Gets vcOrderRemarks
     *
     * @return string|null
     */
    public function getVcOrderRemarks()
    {
        return $this->container['vcOrderRemarks'];
    }

    /**
     * Sets vcOrderRemarks
     *
     * @param string|null $vcOrderRemarks vcOrderRemarks
     *
     * @return self
     */
    public function setVcOrderRemarks($vcOrderRemarks)
    {
        $this->container['vcOrderRemarks'] = $vcOrderRemarks;

        return $this;
    }

    /**
     * Gets clientCode
     *
     * @return string|null
     */
    public function getClientCode()
    {
        return $this->container['clientCode'];
    }

    /**
     * Sets clientCode
     *
     * @param string|null $clientCode clientCode
     *
     * @return self
     */
    public function setClientCode($clientCode)
    {
        $this->container['clientCode'] = $clientCode;

        return $this;
    }

    /**
     * Gets isSpread
     *
     * @return string|null
     */
    public function getIsSpread()
    {
        return $this->container['isSpread'];
    }

    /**
     * Sets isSpread
     *
     * @param string|null $isSpread isSpread
     *
     * @return self
     */
    public function setIsSpread($isSpread)
    {
        $this->container['isSpread'] = $isSpread;

        return $this;
    }

    /**
     * Gets orderSource
     *
     * @return string|null
     */
    public function getOrderSource()
    {
        return $this->container['orderSource'];
    }

    /**
     * Sets orderSource
     *
     * @param string|null $orderSource orderSource
     *
     * @return self
     */
    public function setOrderSource($orderSource)
    {
        $this->container['orderSource'] = $orderSource;

        return $this;
    }

    /**
     * Gets startDay
     *
     * @return string|null
     */
    public function getStartDay()
    {
        return $this->container['startDay'];
    }

    /**
     * Sets startDay
     *
     * @param string|null $startDay startDay
     *
     * @return self
     */
    public function setStartDay($startDay)
    {
        $this->container['startDay'] = $startDay;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param string|null $startDate startDate
     *
     * @return self
     */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets endDate
     *
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     *
     * @param string|null $endDate endDate
     *
     * @return self
     */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;

        return $this;
    }

    /**
     * Gets genrateToday
     *
     * @return string|null
     */
    public function getGenrateToday()
    {
        return $this->container['genrateToday'];
    }

    /**
     * Sets genrateToday
     *
     * @param string|null $genrateToday genrateToday
     *
     * @return self
     */
    public function setGenrateToday($genrateToday)
    {
        $this->container['genrateToday'] = $genrateToday;

        return $this;
    }

    /**
     * Gets tenure
     *
     * @return string|null
     */
    public function getTenure()
    {
        return $this->container['tenure'];
    }

    /**
     * Sets tenure
     *
     * @param string|null $tenure tenure
     *
     * @return self
     */
    public function setTenure($tenure)
    {
        $this->container['tenure'] = $tenure;

        return $this;
    }

    /**
     * Gets mandateID
     *
     * @return string|null
     */
    public function getMandateID()
    {
        return $this->container['mandateID'];
    }

    /**
     * Sets mandateID
     *
     * @param string|null $mandateID mandateID
     *
     * @return self
     */
    public function setMandateID($mandateID)
    {
        $this->container['mandateID'] = $mandateID;

        return $this;
    }

    /**
     * Gets brokerage
     *
     * @return string|null
     */
    public function getBrokerage()
    {
        return $this->container['brokerage'];
    }

    /**
     * Sets brokerage
     *
     * @param string|null $brokerage brokerage
     *
     * @return self
     */
    public function setBrokerage($brokerage)
    {
        $this->container['brokerage'] = $brokerage;

        return $this;
    }

    /**
     * Gets switchSchemeCode
     *
     * @return string|null
     */
    public function getSwitchSchemeCode()
    {
        return $this->container['switchSchemeCode'];
    }

    /**
     * Sets switchSchemeCode
     *
     * @param string|null $switchSchemeCode switchSchemeCode
     *
     * @return self
     */
    public function setSwitchSchemeCode($switchSchemeCode)
    {
        $this->container['switchSchemeCode'] = $switchSchemeCode;

        return $this;
    }

    /**
     * Gets switchISIN
     *
     * @return string|null
     */
    public function getSwitchISIN()
    {
        return $this->container['switchISIN'];
    }

    /**
     * Sets switchISIN
     *
     * @param string|null $switchISIN switchISIN
     *
     * @return self
     */
    public function setSwitchISIN($switchISIN)
    {
        $this->container['switchISIN'] = $switchISIN;

        return $this;
    }

    /**
     * Gets createdBy
     *
     * @return string|null
     */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
     * Sets createdBy
     *
     * @param string|null $createdBy createdBy
     *
     * @return self
     */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;

        return $this;
    }

    /**
     * Gets createdOn
     *
     * @return string|null
     */
    public function getCreatedOn()
    {
        return $this->container['createdOn'];
    }

    /**
     * Sets createdOn
     *
     * @param string|null $createdOn createdOn
     *
     * @return self
     */
    public function setCreatedOn($createdOn)
    {
        $this->container['createdOn'] = $createdOn;

        return $this;
    }

    /**
     * Gets exchangeRefNo
     *
     * @return string|null
     */
    public function getExchangeRefNo()
    {
        return $this->container['exchangeRefNo'];
    }

    /**
     * Sets exchangeRefNo
     *
     * @param string|null $exchangeRefNo exchangeRefNo
     *
     * @return self
     */
    public function setExchangeRefNo($exchangeRefNo)
    {
        $this->container['exchangeRefNo'] = $exchangeRefNo;

        return $this;
    }

    /**
     * Gets mode
     *
     * @return string|null
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param string|null $mode mode
     *
     * @return self
     */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets validateMargin
     *
     * @return string|null
     */
    public function getValidateMargin()
    {
        return $this->container['validateMargin'];
    }

    /**
     * Sets validateMargin
     *
     * @param string|null $validateMargin validateMargin
     *
     * @return self
     */
    public function setValidateMargin($validateMargin)
    {
        $this->container['validateMargin'] = $validateMargin;

        return $this;
    }

    /**
     * Gets brokerRefNo
     *
     * @return string|null
     */
    public function getBrokerRefNo()
    {
        return $this->container['brokerRefNo'];
    }

    /**
     * Sets brokerRefNo
     *
     * @param string|null $brokerRefNo brokerRefNo
     *
     * @return self
     */
    public function setBrokerRefNo($brokerRefNo)
    {
        $this->container['brokerRefNo'] = $brokerRefNo;

        return $this;
    }

    /**
     * Gets limitValidation
     *
     * @return string|null
     */
    public function getLimitValidation()
    {
        return $this->container['limitValidation'];
    }

    /**
     * Sets limitValidation
     *
     * @param string|null $limitValidation limitValidation
     *
     * @return self
     */
    public function setLimitValidation($limitValidation)
    {
        $this->container['limitValidation'] = $limitValidation;

        return $this;
    }

    /**
     * Gets checkHoldings
     *
     * @return string|null
     */
    public function getCheckHoldings()
    {
        return $this->container['checkHoldings'];
    }

    /**
     * Sets checkHoldings
     *
     * @param string|null $checkHoldings checkHoldings
     *
     * @return self
     */
    public function setCheckHoldings($checkHoldings)
    {
        $this->container['checkHoldings'] = $checkHoldings;

        return $this;
    }

    /**
     * Gets modelPortFolioName
     *
     * @return string|null
     */
    public function getModelPortFolioName()
    {
        return $this->container['modelPortFolioName'];
    }

    /**
     * Sets modelPortFolioName
     *
     * @param string|null $modelPortFolioName modelPortFolioName
     *
     * @return self
     */
    public function setModelPortFolioName($modelPortFolioName)
    {
        $this->container['modelPortFolioName'] = $modelPortFolioName;

        return $this;
    }

    /**
     * Gets orderType
     *
     * @return string|null
     */
    public function getOrderType()
    {
        return $this->container['orderType'];
    }

    /**
     * Sets orderType
     *
     * @param string|null $orderType orderType
     *
     * @return self
     */
    public function setOrderType($orderType)
    {
        $this->container['orderType'] = $orderType;

        return $this;
    }

    /**
     * Gets uniqueNumber
     *
     * @return string|null
     */
    public function getUniqueNumber()
    {
        return $this->container['uniqueNumber'];
    }

    /**
     * Sets uniqueNumber
     *
     * @param string|null $uniqueNumber uniqueNumber
     *
     * @return self
     */
    public function setUniqueNumber($uniqueNumber)
    {
        $this->container['uniqueNumber'] = $uniqueNumber;

        return $this;
    }

    /**
     * Gets subBrokerCode
     *
     * @return string|null
     */
    public function getSubBrokerCode()
    {
        return $this->container['subBrokerCode'];
    }

    /**
     * Sets subBrokerCode
     *
     * @param string|null $subBrokerCode subBrokerCode
     *
     * @return self
     */
    public function setSubBrokerCode($subBrokerCode)
    {
        $this->container['subBrokerCode'] = $subBrokerCode;

        return $this;
    }

    /**
     * Gets paymentMode
     *
     * @return string|null
     */
    public function getPaymentMode()
    {
        return $this->container['paymentMode'];
    }

    /**
     * Sets paymentMode
     *
     * @param string|null $paymentMode paymentMode
     *
     * @return self
     */
    public function setPaymentMode($paymentMode)
    {
        $this->container['paymentMode'] = $paymentMode;

        return $this;
    }

    /**
     * Gets mandateSts
     *
     * @return string|null
     */
    public function getMandateSts()
    {
        return $this->container['mandateSts'];
    }

    /**
     * Sets mandateSts
     *
     * @param string|null $mandateSts mandateSts
     *
     * @return self
     */
    public function setMandateSts($mandateSts)
    {
        $this->container['mandateSts'] = $mandateSts;

        return $this;
    }

    /**
     * Gets ordStatus
     *
     * @return string|null
     */
    public function getOrdStatus()
    {
        return $this->container['ordStatus'];
    }

    /**
     * Sets ordStatus
     *
     * @param string|null $ordStatus ordStatus
     *
     * @return self
     */
    public function setOrdStatus($ordStatus)
    {
        $this->container['ordStatus'] = $ordStatus;

        return $this;
    }

    /**
     * Gets isModify
     *
     * @return bool|null
     */
    public function getIsModify()
    {
        return $this->container['isModify'];
    }

    /**
     * Sets isModify
     *
     * @param bool|null $isModify Is modifiable True/False
     *
     * @return self
     */
    public function setIsModify($isModify)
    {
        $this->container['isModify'] = $isModify;

        return $this;
    }

    /**
     * Gets isCancel
     *
     * @return bool|null
     */
    public function getIsCancel()
    {
        return $this->container['isCancel'];
    }

    /**
     * Sets isCancel
     *
     * @param bool|null $isCancel Is cancellable True/False
     *
     * @return self
     */
    public function setIsCancel($isCancel)
    {
        $this->container['isCancel'] = $isCancel;

        return $this;
    }

    /**
     * Gets schemeName
     *
     * @return string|null
     */
    public function getSchemeName()
    {
        return $this->container['schemeName'];
    }

    /**
     * Sets schemeName
     *
     * @param string|null $schemeName schemeName
     *
     * @return self
     */
    public function setSchemeName($schemeName)
    {
        $this->container['schemeName'] = $schemeName;

        return $this;
    }

    /**
     * Gets isin
     *
     * @return string|null
     */
    public function getIsin()
    {
        return $this->container['isin'];
    }

    /**
     * Sets isin
     *
     * @param string|null $isin isin
     *
     * @return self
     */
    public function setIsin($isin)
    {
        $this->container['isin'] = $isin;

        return $this;
    }

    /**
     * Gets nav
     *
     * @return double|null
     */
    public function getNav()
    {
        return $this->container['nav'];
    }

    /**
     * Sets nav
     *
     * @param double|null $nav nav
     *
     * @return self
     */
    public function setNav($nav)
    {
        $this->container['nav'] = $nav;

        return $this;
    }

    /**
     * Gets sipfrequency
     *
     * @return string|null
     */
    public function getSipfrequency()
    {
        return $this->container['sipfrequency'];
    }

    /**
     * Sets sipfrequency
     *
     * @param string|null $sipfrequency sipfrequency
     *
     * @return self
     */
    public function setSipfrequency($sipfrequency)
    {
        $this->container['sipfrequency'] = $sipfrequency;

        return $this;
    }

    /**
     * Gets dpc
     *
     * @return string|null
     */
    public function getDpc()
    {
        return $this->container['dpc'];
    }

    /**
     * Sets dpc
     *
     * @param string|null $dpc dpc
     *
     * @return self
     */
    public function setDpc($dpc)
    {
        $this->container['dpc'] = $dpc;

        return $this;
    }

    /**
     * Gets euinflag
     *
     * @return string|null
     */
    public function getEuinflag()
    {
        return $this->container['euinflag'];
    }

    /**
     * Sets euinflag
     *
     * @param string|null $euinflag euinflag
     *
     * @return self
     */
    public function setEuinflag($euinflag)
    {
        $this->container['euinflag'] = $euinflag;

        return $this;
    }

    /**
     * Gets mfimfdflag
     *
     * @return string|null
     */
    public function getMfimfdflag()
    {
        return $this->container['mfimfdflag'];
    }

    /**
     * Sets mfimfdflag
     *
     * @param string|null $mfimfdflag mfimfdflag
     *
     * @return self
     */
    public function setMfimfdflag($mfimfdflag)
    {
        $this->container['mfimfdflag'] = $mfimfdflag;

        return $this;
    }

    /**
     * Gets arn
     *
     * @return string|null
     */
    public function getArn()
    {
        return $this->container['arn'];
    }

    /**
     * Sets arn
     *
     * @param string|null $arn arn
     *
     * @return self
     */
    public function setArn($arn)
    {
        $this->container['arn'] = $arn;

        return $this;
    }

    /**
     * Gets euinnumber
     *
     * @return string|null
     */
    public function getEuinnumber()
    {
        return $this->container['euinnumber'];
    }

    /**
     * Sets euinnumber
     *
     * @param string|null $euinnumber euinnumber
     *
     * @return self
     */
    public function setEuinnumber($euinnumber)
    {
        $this->container['euinnumber'] = $euinnumber;

        return $this;
    }

    /**
     * Gets settlementType
     *
     * @return string|null
     */
    public function getSettlementType()
    {
        return $this->container['settlementType'];
    }

    /**
     * Sets settlementType
     *
     * @param string|null $settlementType settlementType
     *
     * @return self
     */
    public function setSettlementType($settlementType)
    {
        $this->container['settlementType'] = $settlementType;

        return $this;
    }

    /**
     * Gets sipregDate
     *
     * @return string|null
     */
    public function getSipregDate()
    {
        return $this->container['sipregDate'];
    }

    /**
     * Sets sipregDate
     *
     * @param string|null $sipregDate sipregDate
     *
     * @return self
     */
    public function setSipregDate($sipregDate)
    {
        $this->container['sipregDate'] = $sipregDate;

        return $this;
    }

    /**
     * Gets rmcode
     *
     * @return string|null
     */
    public function getRmcode()
    {
        return $this->container['rmcode'];
    }

    /**
     * Sets rmcode
     *
     * @param string|null $rmcode rmcode
     *
     * @return self
     */
    public function setRmcode($rmcode)
    {
        $this->container['rmcode'] = $rmcode;

        return $this;
    }

    /**
     * Gets navasNoDate
     *
     * @return string|null
     */
    public function getNavasNoDate()
    {
        return $this->container['navasNoDate'];
    }

    /**
     * Sets navasNoDate
     *
     * @param string|null $navasNoDate navasNoDate
     *
     * @return self
     */
    public function setNavasNoDate($navasNoDate)
    {
        $this->container['navasNoDate'] = $navasNoDate;

        return $this;
    }

    /**
     * Gets kycflag
     *
     * @return string|null
     */
    public function getKycflag()
    {
        return $this->container['kycflag'];
    }

    /**
     * Sets kycflag
     *
     * @param string|null $kycflag kycflag
     *
     * @return self
     */
    public function setKycflag($kycflag)
    {
        $this->container['kycflag'] = $kycflag;

        return $this;
    }

    /**
     * Gets amcschemeCode
     *
     * @return string|null
     */
    public function getAmcschemeCode()
    {
        return $this->container['amcschemeCode'];
    }

    /**
     * Sets amcschemeCode
     *
     * @param string|null $amcschemeCode amcschemeCode
     *
     * @return self
     */
    public function setAmcschemeCode($amcschemeCode)
    {
        $this->container['amcschemeCode'] = $amcschemeCode;

        return $this;
    }

    /**
     * Gets amccode
     *
     * @return string|null
     */
    public function getAmccode()
    {
        return $this->container['amccode'];
    }

    /**
     * Sets amccode
     *
     * @param string|null $amccode amccode
     *
     * @return self
     */
    public function setAmccode($amccode)
    {
        $this->container['amccode'] = $amccode;

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


