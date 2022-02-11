<?php
/**
 * MFTradeRequestDao
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
 * MFTradeRequestDao Class Doc Comment
 *
 * @category Class
 * @package  com\edel
 * @author   Edelweiss
 * @link     https://www.edelweiss.in
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MFTradeRequestDao implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelName = 'MFTradeRequestDao';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'currentOrdSts' => 'string',
        'token' => 'string',
        'isin' => 'string',
        'txnTyp' => 'string',
        'clientCode' => 'string',
        'qty' => 'double',
        'amt' => 'double',
        'reInvFlg' => 'string',
        'reqstdBy' => 'string',
        'folioNo' => 'string',
        'ordTyp' => 'string',
        'txnId' => 'int',
        'schemeName' => 'string',
        'rmrk' => 'string',
        'mnRdmFlg' => 'string',
        'ordSrc' => 'string',
        'strtDy' => 'int',
        'strtDt' => 'string',
        'endDt' => 'string',
        'sipFrq' => 'string',
        'gfot' => 'string',
        'tnr' => 'string',
        'mdtId' => 'string',
        'sipregno' => 'string',
        'siporderno' => 'string',
        'schemePlan' => 'string',
        'schemeCode' => 'string',
        'closeAccountFlag' => 'string',
        'kycflag' => 'string',
        'dpc' => 'string',
        'euinflag' => 'string',
        'euinnumber' => 'string',
        'physicalFlag' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'currentOrdSts' => null,
        'token' => null,
        'isin' => null,
        'txnTyp' => null,
        'clientCode' => null,
        'qty' => 'double',
        'amt' => 'double',
        'reInvFlg' => null,
        'reqstdBy' => null,
        'folioNo' => null,
        'ordTyp' => null,
        'txnId' => 'int64',
        'schemeName' => null,
        'rmrk' => null,
        'mnRdmFlg' => null,
        'ordSrc' => null,
        'strtDy' => 'int32',
        'strtDt' => null,
        'endDt' => null,
        'sipFrq' => null,
        'gfot' => null,
        'tnr' => null,
        'mdtId' => null,
        'sipregno' => null,
        'siporderno' => null,
        'schemePlan' => null,
        'schemeCode' => null,
        'closeAccountFlag' => null,
        'kycflag' => null,
        'dpc' => null,
        'euinflag' => null,
        'euinnumber' => null,
        'physicalFlag' => null
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
        'currentOrdSts' => 'currentOrdSts',
        'token' => 'token',
        'isin' => 'isin',
        'txnTyp' => 'txnTyp',
        'clientCode' => 'clientCode',
        'qty' => 'qty',
        'amt' => 'amt',
        'reInvFlg' => 'reInvFlg',
        'reqstdBy' => 'reqstdBy',
        'folioNo' => 'folioNo',
        'ordTyp' => 'ordTyp',
        'txnId' => 'txnId',
        'schemeName' => 'schemeName',
        'rmrk' => 'rmrk',
        'mnRdmFlg' => 'mnRdmFlg',
        'ordSrc' => 'ordSrc',
        'strtDy' => 'strtDy',
        'strtDt' => 'strtDt',
        'endDt' => 'endDt',
        'sipFrq' => 'sipFrq',
        'gfot' => 'gfot',
        'tnr' => 'tnr',
        'mdtId' => 'mdtId',
        'sipregno' => 'sipregno',
        'siporderno' => 'siporderno',
        'schemePlan' => 'schemePlan',
        'schemeCode' => 'schemeCode',
        'closeAccountFlag' => 'closeAccountFlag',
        'kycflag' => 'kycflag',
        'dpc' => 'dpc',
        'euinflag' => 'euinflag',
        'euinnumber' => 'euinnumber',
        'physicalFlag' => 'physicalFlag'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currentOrdSts' => 'setCurrentOrdSts',
        'token' => 'setToken',
        'isin' => 'setIsin',
        'txnTyp' => 'setTxnTyp',
        'clientCode' => 'setClientCode',
        'qty' => 'setQty',
        'amt' => 'setAmt',
        'reInvFlg' => 'setReInvFlg',
        'reqstdBy' => 'setReqstdBy',
        'folioNo' => 'setFolioNo',
        'ordTyp' => 'setOrdTyp',
        'txnId' => 'setTxnId',
        'schemeName' => 'setSchemeName',
        'rmrk' => 'setRmrk',
        'mnRdmFlg' => 'setMnRdmFlg',
        'ordSrc' => 'setOrdSrc',
        'strtDy' => 'setStrtDy',
        'strtDt' => 'setStrtDt',
        'endDt' => 'setEndDt',
        'sipFrq' => 'setSipFrq',
        'gfot' => 'setGfot',
        'tnr' => 'setTnr',
        'mdtId' => 'setMdtId',
        'sipregno' => 'setSipregno',
        'siporderno' => 'setSiporderno',
        'schemePlan' => 'setSchemePlan',
        'schemeCode' => 'setSchemeCode',
        'closeAccountFlag' => 'setCloseAccountFlag',
        'kycflag' => 'setKycflag',
        'dpc' => 'setDpc',
        'euinflag' => 'setEuinflag',
        'euinnumber' => 'setEuinnumber',
        'physicalFlag' => 'setPhysicalFlag'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currentOrdSts' => 'getCurrentOrdSts',
        'token' => 'getToken',
        'isin' => 'getIsin',
        'txnTyp' => 'getTxnTyp',
        'clientCode' => 'getClientCode',
        'qty' => 'getQty',
        'amt' => 'getAmt',
        'reInvFlg' => 'getReInvFlg',
        'reqstdBy' => 'getReqstdBy',
        'folioNo' => 'getFolioNo',
        'ordTyp' => 'getOrdTyp',
        'txnId' => 'getTxnId',
        'schemeName' => 'getSchemeName',
        'rmrk' => 'getRmrk',
        'mnRdmFlg' => 'getMnRdmFlg',
        'ordSrc' => 'getOrdSrc',
        'strtDy' => 'getStrtDy',
        'strtDt' => 'getStrtDt',
        'endDt' => 'getEndDt',
        'sipFrq' => 'getSipFrq',
        'gfot' => 'getGfot',
        'tnr' => 'getTnr',
        'mdtId' => 'getMdtId',
        'sipregno' => 'getSipregno',
        'siporderno' => 'getSiporderno',
        'schemePlan' => 'getSchemePlan',
        'schemeCode' => 'getSchemeCode',
        'closeAccountFlag' => 'getCloseAccountFlag',
        'kycflag' => 'getKycflag',
        'dpc' => 'getDpc',
        'euinflag' => 'getEuinflag',
        'euinnumber' => 'getEuinnumber',
        'physicalFlag' => 'getPhysicalFlag'
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

    const CURRENT_ORD_STS_ACCEPTED = 'ACCEPTED';
    const CURRENT_ORD_STS_REJECTED = 'REJECTED';
    const CURRENT_ORD_STS_CANCELLED = 'CANCELLED';
    const CURRENT_ORD_STS_AMO___ = 'AMO ...';
    const SCHEME_PLAN_DIRECT = 'Direct';
    const SCHEME_PLAN_NORMAL = 'Normal';
    const SCHEME_CODE_SCHEME_CODE = 'schemeCode';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCurrentOrdStsAllowableValues()
    {
        return [
            self::CURRENT_ORD_STS_ACCEPTED,
            self::CURRENT_ORD_STS_REJECTED,
            self::CURRENT_ORD_STS_CANCELLED,
            self::CURRENT_ORD_STS_AMO___,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSchemePlanAllowableValues()
    {
        return [
            self::SCHEME_PLAN_DIRECT,
            self::SCHEME_PLAN_NORMAL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSchemeCodeAllowableValues()
    {
        return [
            self::SCHEME_CODE_SCHEME_CODE,
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
        $this->container['currentOrdSts'] = $data['currentOrdSts'] ?? null;
        $this->container['token'] = $data['token'] ?? null;
        $this->container['isin'] = $data['isin'] ?? null;
        $this->container['txnTyp'] = $data['txnTyp'] ?? null;
        $this->container['clientCode'] = $data['clientCode'] ?? null;
        $this->container['qty'] = $data['qty'] ?? null;
        $this->container['amt'] = $data['amt'] ?? null;
        $this->container['reInvFlg'] = $data['reInvFlg'] ?? null;
        $this->container['reqstdBy'] = $data['reqstdBy'] ?? null;
        $this->container['folioNo'] = $data['folioNo'] ?? null;
        $this->container['ordTyp'] = $data['ordTyp'] ?? null;
        $this->container['txnId'] = $data['txnId'] ?? null;
        $this->container['schemeName'] = $data['schemeName'] ?? null;
        $this->container['rmrk'] = $data['rmrk'] ?? null;
        $this->container['mnRdmFlg'] = $data['mnRdmFlg'] ?? null;
        $this->container['ordSrc'] = $data['ordSrc'] ?? null;
        $this->container['strtDy'] = $data['strtDy'] ?? null;
        $this->container['strtDt'] = $data['strtDt'] ?? null;
        $this->container['endDt'] = $data['endDt'] ?? null;
        $this->container['sipFrq'] = $data['sipFrq'] ?? null;
        $this->container['gfot'] = $data['gfot'] ?? null;
        $this->container['tnr'] = $data['tnr'] ?? null;
        $this->container['mdtId'] = $data['mdtId'] ?? null;
        $this->container['sipregno'] = $data['sipregno'] ?? null;
        $this->container['siporderno'] = $data['siporderno'] ?? null;
        $this->container['schemePlan'] = $data['schemePlan'] ?? null;
        $this->container['schemeCode'] = $data['schemeCode'] ?? null;
        $this->container['closeAccountFlag'] = $data['closeAccountFlag'] ?? null;
        $this->container['kycflag'] = $data['kycflag'] ?? null;
        $this->container['dpc'] = $data['dpc'] ?? null;
        $this->container['euinflag'] = $data['euinflag'] ?? null;
        $this->container['euinnumber'] = $data['euinnumber'] ?? null;
        $this->container['physicalFlag'] = $data['physicalFlag'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCurrentOrdStsAllowableValues();
        if (!is_null($this->container['currentOrdSts']) && !in_array($this->container['currentOrdSts'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'currentOrdSts', must be one of '%s'",
                $this->container['currentOrdSts'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSchemePlanAllowableValues();
        if (!is_null($this->container['schemePlan']) && !in_array($this->container['schemePlan'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'schemePlan', must be one of '%s'",
                $this->container['schemePlan'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSchemeCodeAllowableValues();
        if (!is_null($this->container['schemeCode']) && !in_array($this->container['schemeCode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'schemeCode', must be one of '%s'",
                $this->container['schemeCode'],
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
     * Gets currentOrdSts
     *
     * @return string|null
     */
    public function getCurrentOrdSts()
    {
        return $this->container['currentOrdSts'];
    }

    /**
     * Sets currentOrdSts
     *
     * @param string|null $currentOrdSts Order Status in case of Modify or Cancel
     *
     * @return self
     */
    public function setCurrentOrdSts($currentOrdSts)
    {
        $allowedValues = $this->getCurrentOrdStsAllowableValues();
        if (!is_null($currentOrdSts) && !in_array($currentOrdSts, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'currentOrdSts', must be one of '%s'",
                    $currentOrdSts,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['currentOrdSts'] = $currentOrdSts;

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
     * @param string|null $token Token of scheme
     *
     * @return self
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

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
     * @param string|null $isin ISIN of scheme
     *
     * @return self
     */
    public function setIsin($isin)
    {
        $this->container['isin'] = $isin;

        return $this;
    }

    /**
     * Gets txnTyp
     *
     * @return string|null
     */
    public function getTxnTyp()
    {
        return $this->container['txnTyp'];
    }

    /**
     * Sets txnTyp
     *
     * @param string|null $txnTyp FP – Fresh Purchase    AP – Additional Purchase    R – Redemption    SIP – SIP    XSIP - XSIP
     *
     * @return self
     */
    public function setTxnTyp($txnTyp)
    {
        $this->container['txnTyp'] = $txnTyp;

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
     * @param string|null $clientCode Client code of user, mandatory for GPS
     *
     * @return self
     */
    public function setClientCode($clientCode)
    {
        $this->container['clientCode'] = $clientCode;

        return $this;
    }

    /**
     * Gets qty
     *
     * @return double|null
     */
    public function getQty()
    {
        return $this->container['qty'];
    }

    /**
     * Sets qty
     *
     * @param double|null $qty Units to redeem
     *
     * @return self
     */
    public function setQty($qty)
    {
        $this->container['qty'] = $qty;

        return $this;
    }

    /**
     * Gets amt
     *
     * @return double|null
     */
    public function getAmt()
    {
        return $this->container['amt'];
    }

    /**
     * Sets amt
     *
     * @param double|null $amt for Fresh Purchase/ Additional Purchase/ SIP/XSIP/ISIP
     *
     * @return self
     */
    public function setAmt($amt)
    {
        $this->container['amt'] = $amt;

        return $this;
    }

    /**
     * Gets reInvFlg
     *
     * @return string|null
     */
    public function getReInvFlg()
    {
        return $this->container['reInvFlg'];
    }

    /**
     * Sets reInvFlg
     *
     * @param string|null $reInvFlg Z- Growth Y- Div Reinvest N- Div Payout
     *
     * @return self
     */
    public function setReInvFlg($reInvFlg)
    {
        $this->container['reInvFlg'] = $reInvFlg;

        return $this;
    }

    /**
     * Gets reqstdBy
     *
     * @return string|null
     */
    public function getReqstdBy()
    {
        return $this->container['reqstdBy'];
    }

    /**
     * Sets reqstdBy
     *
     * @param string|null $reqstdBy DealerCode/Clientcode
     *
     * @return self
     */
    public function setReqstdBy($reqstdBy)
    {
        $this->container['reqstdBy'] = $reqstdBy;

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
     * @param string|null $folioNo Blank for Fresh Purchase For Redeem/Additional Purchase/ SWITCH     For physical Order Type Mandatory,For Demat On mandatory
     *
     * @return self
     */
    public function setFolioNo($folioNo)
    {
        $this->container['folioNo'] = $folioNo;

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
     * @param string|null $ordTyp Order type : Fresh, Modify or Cancel
     *
     * @return self
     */
    public function setOrdTyp($ordTyp)
    {
        $this->container['ordTyp'] = $ordTyp;

        return $this;
    }

    /**
     * Gets txnId
     *
     * @return int|null
     */
    public function getTxnId()
    {
        return $this->container['txnId'];
    }

    /**
     * Sets txnId
     *
     * @param int|null $txnId 0 for New Order ,OrderID for Modify ,Order OrderID for Cancel Order
     *
     * @return self
     */
    public function setTxnId($txnId)
    {
        $this->container['txnId'] = $txnId;

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
     * @param string|null $schemeName Scheme Name
     *
     * @return self
     */
    public function setSchemeName($schemeName)
    {
        $this->container['schemeName'] = $schemeName;

        return $this;
    }

    /**
     * Gets rmrk
     *
     * @return string|null
     */
    public function getRmrk()
    {
        return $this->container['rmrk'];
    }

    /**
     * Sets rmrk
     *
     * @param string|null $rmrk remarks
     *
     * @return self
     */
    public function setRmrk($rmrk)
    {
        $this->container['rmrk'] = $rmrk;

        return $this;
    }

    /**
     * Gets mnRdmFlg
     *
     * @return string|null
     */
    public function getMnRdmFlg()
    {
        return $this->container['mnRdmFlg'];
    }

    /**
     * Sets mnRdmFlg
     *
     * @param string|null $mnRdmFlg Y/N (Y- for Full Redeem)
     *
     * @return self
     */
    public function setMnRdmFlg($mnRdmFlg)
    {
        $this->container['mnRdmFlg'] = $mnRdmFlg;

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
     * @param string|null $ordSrc WEB/EMT/Admin
     *
     * @return self
     */
    public function setOrdSrc($ordSrc)
    {
        $this->container['ordSrc'] = $ordSrc;

        return $this;
    }

    /**
     * Gets strtDy
     *
     * @return int|null
     */
    public function getStrtDy()
    {
        return $this->container['strtDy'];
    }

    /**
     * Sets strtDy
     *
     * @param int|null $strtDy For SIP/XSIP - 09 (DAY of SIP Start Date) Mandatory for SIP/ISIP/XSIP/SWP/STP
     *
     * @return self
     */
    public function setStrtDy($strtDy)
    {
        $this->container['strtDy'] = $strtDy;

        return $this;
    }

    /**
     * Gets strtDt
     *
     * @return string|null
     */
    public function getStrtDt()
    {
        return $this->container['strtDt'];
    }

    /**
     * Sets strtDt
     *
     * @param string|null $strtDt SIP / XSIP/ISIP/STP/SWP Start Date (Mandatory for SIP/ISIP/XSIP/SWP/STP)
     *
     * @return self
     */
    public function setStrtDt($strtDt)
    {
        $this->container['strtDt'] = $strtDt;

        return $this;
    }

    /**
     * Gets endDt
     *
     * @return string|null
     */
    public function getEndDt()
    {
        return $this->container['endDt'];
    }

    /**
     * Sets endDt
     *
     * @param string|null $endDt SIP / XSIP/ISIP/STP/SWP Start Date (Mandatory for SIP/ISIP/XSIP/SWP/STP)
     *
     * @return self
     */
    public function setEndDt($endDt)
    {
        $this->container['endDt'] = $endDt;

        return $this;
    }

    /**
     * Gets sipFrq
     *
     * @return string|null
     */
    public function getSipFrq()
    {
        return $this->container['sipFrq'];
    }

    /**
     * Sets sipFrq
     *
     * @param string|null $sipFrq Monthly – (SIP/ XSIP/ISIP/STP/SWP Frequency Mandatory for SIP/ISIP/XSIP/SWP/STP)
     *
     * @return self
     */
    public function setSipFrq($sipFrq)
    {
        $this->container['sipFrq'] = $sipFrq;

        return $this;
    }

    /**
     * Gets gfot
     *
     * @return string|null
     */
    public function getGfot()
    {
        return $this->container['gfot'];
    }

    /**
     * Sets gfot
     *
     * @param string|null $gfot Y/N – (Genrate first order today Mandatory for SIP/ISIP/XSIP/SWP/STP)
     *
     * @return self
     */
    public function setGfot($gfot)
    {
        $this->container['gfot'] = $gfot;

        return $this;
    }

    /**
     * Gets tnr
     *
     * @return string|null
     */
    public function getTnr()
    {
        return $this->container['tnr'];
    }

    /**
     * Sets tnr
     *
     * @param string|null $tnr Tenure Period Like 99 Mandatory for SIP/ISIP/XSIP/SWP/STP
     *
     * @return self
     */
    public function setTnr($tnr)
    {
        $this->container['tnr'] = $tnr;

        return $this;
    }

    /**
     * Gets mdtId
     *
     * @return string|null
     */
    public function getMdtId()
    {
        return $this->container['mdtId'];
    }

    /**
     * Sets mdtId
     *
     * @param string|null $mdtId Mandate id selected by client
     *
     * @return self
     */
    public function setMdtId($mdtId)
    {
        $this->container['mdtId'] = $mdtId;

        return $this;
    }

    /**
     * Gets sipregno
     *
     * @return string|null
     */
    public function getSipregno()
    {
        return $this->container['sipregno'];
    }

    /**
     * Sets sipregno
     *
     * @param string|null $sipregno SIP Registration Number
     *
     * @return self
     */
    public function setSipregno($sipregno)
    {
        $this->container['sipregno'] = $sipregno;

        return $this;
    }

    /**
     * Gets siporderno
     *
     * @return string|null
     */
    public function getSiporderno()
    {
        return $this->container['siporderno'];
    }

    /**
     * Sets siporderno
     *
     * @param string|null $siporderno SIP Order Number
     *
     * @return self
     */
    public function setSiporderno($siporderno)
    {
        $this->container['siporderno'] = $siporderno;

        return $this;
    }

    /**
     * Gets schemePlan
     *
     * @return string|null
     */
    public function getSchemePlan()
    {
        return $this->container['schemePlan'];
    }

    /**
     * Sets schemePlan
     *
     * @param string|null $schemePlan Scheme Plan
     *
     * @return self
     */
    public function setSchemePlan($schemePlan)
    {
        $allowedValues = $this->getSchemePlanAllowableValues();
        if (!is_null($schemePlan) && !in_array($schemePlan, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'schemePlan', must be one of '%s'",
                    $schemePlan,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['schemePlan'] = $schemePlan;

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
     * @param string|null $schemeCode Scheme Code
     *
     * @return self
     */
    public function setSchemeCode($schemeCode)
    {
        $allowedValues = $this->getSchemeCodeAllowableValues();
        if (!is_null($schemeCode) && !in_array($schemeCode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'schemeCode', must be one of '%s'",
                    $schemeCode,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['schemeCode'] = $schemeCode;

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


