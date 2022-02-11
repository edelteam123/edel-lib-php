<?php
/**
 * VerifyAnswersResponseDao
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
 * VerifyAnswersResponseDao Class Doc Comment
 *
 * @category Class
 * @package  com\edel
 * @author   Edelweiss
 * @link     https://www.edelweiss.in
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class VerifyAnswersResponseDao implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelName = 'VerifyAnswersResponseDao';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accTyp' => 'string',
        'mrgSts' => 'string',
        'othAccDts' => '\com\edel\edelconnect\models\OtherAccountDetailsResponseObject',
        'mrgPopUp' => 'bool',
        'mrgAccDts' => '\com\edel\edelconnect\models\MergeAccountDetailsResponseObject',
        'prefAccTyp' => 'string',
        'excs' => 'string[]',
        'dfPrds' => '\com\edel\edelconnect\models\DefaultProductTypesObject',
        'dfPrdsMTF' => '\com\edel\edelconnect\models\DefaultProductTypesObject',
        'ordTypes' => '\com\edel\edelconnect\models\KeyValueResponseObject[]',
        'sts' => 'string',
        'accs' => '\com\edel\edelconnect\models\AccountDetailsResponeObject',
        'qlist' => '\com\edel\edelconnect\models\QuestionsResponse[]',
        'mtf' => '\com\edel\edelconnect\models\CommonConsentStatusDao',
        'comOpCnst' => '\com\edel\edelconnect\models\CommonConsentStatusDao',
        'adhrEQ' => '\com\edel\edelconnect\models\AadharStatusDao',
        'adhrCOM' => '\com\edel\edelconnect\models\AadharStatusDao',
        'cnsntLst' => '\com\edel\edelconnect\models\ConsentStatusDao[]',
        'prdcts' => 'array<string,array<string,string[]>>',
        'prds' => '\com\edel\edelconnect\models\ValidityProductsResponseObject[]',
        'val' => '\com\edel\edelconnect\models\ValidityExchangeObject[]',
        'gtdGtcValDays' => 'string',
        'mndtryCnsts' => '\com\edel\edelconnect\models\ConsentStatusDao[]',
        'optCnsts' => '\com\edel\edelconnect\models\ConsentStatusDao[]',
        'srcVendor' => 'string',
        'vndSrc' => 'string',
        'reqId' => 'string',
        'url' => 'string',
        'jsessionId' => 'string',
        'vndCnstPopUp' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'accTyp' => null,
        'mrgSts' => null,
        'othAccDts' => null,
        'mrgPopUp' => null,
        'mrgAccDts' => null,
        'prefAccTyp' => null,
        'excs' => null,
        'dfPrds' => null,
        'dfPrdsMTF' => null,
        'ordTypes' => null,
        'sts' => null,
        'accs' => null,
        'qlist' => null,
        'mtf' => null,
        'comOpCnst' => null,
        'adhrEQ' => null,
        'adhrCOM' => null,
        'cnsntLst' => null,
        'prdcts' => null,
        'prds' => null,
        'val' => null,
        'gtdGtcValDays' => null,
        'mndtryCnsts' => null,
        'optCnsts' => null,
        'srcVendor' => null,
        'vndSrc' => null,
        'reqId' => null,
        'url' => null,
        'jsessionId' => null,
        'vndCnstPopUp' => null
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
        'accTyp' => 'accTyp',
        'mrgSts' => 'mrgSts',
        'othAccDts' => 'othAccDts',
        'mrgPopUp' => 'mrgPopUp',
        'mrgAccDts' => 'mrgAccDts',
        'prefAccTyp' => 'prefAccTyp',
        'excs' => 'excs',
        'dfPrds' => 'dfPrds',
        'dfPrdsMTF' => 'dfPrdsMTF',
        'ordTypes' => 'ordTypes',
        'sts' => 'sts',
        'accs' => 'accs',
        'qlist' => 'qlist',
        'mtf' => 'mtf',
        'comOpCnst' => 'comOpCnst',
        'adhrEQ' => 'adhrEQ',
        'adhrCOM' => 'adhrCOM',
        'cnsntLst' => 'cnsntLst',
        'prdcts' => 'prdcts',
        'prds' => 'prds',
        'val' => 'val',
        'gtdGtcValDays' => 'gtdGtcValDays',
        'mndtryCnsts' => 'mndtryCnsts',
        'optCnsts' => 'optCnsts',
        'srcVendor' => 'srcVendor',
        'vndSrc' => 'vndSrc',
        'reqId' => 'reqId',
        'url' => 'url',
        'jsessionId' => 'jsessionId',
        'vndCnstPopUp' => 'vndCnstPopUp'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accTyp' => 'setAccTyp',
        'mrgSts' => 'setMrgSts',
        'othAccDts' => 'setOthAccDts',
        'mrgPopUp' => 'setMrgPopUp',
        'mrgAccDts' => 'setMrgAccDts',
        'prefAccTyp' => 'setPrefAccTyp',
        'excs' => 'setExcs',
        'dfPrds' => 'setDfPrds',
        'dfPrdsMTF' => 'setDfPrdsMTF',
        'ordTypes' => 'setOrdTypes',
        'sts' => 'setSts',
        'accs' => 'setAccs',
        'qlist' => 'setQlist',
        'mtf' => 'setMtf',
        'comOpCnst' => 'setComOpCnst',
        'adhrEQ' => 'setAdhrEQ',
        'adhrCOM' => 'setAdhrCOM',
        'cnsntLst' => 'setCnsntLst',
        'prdcts' => 'setPrdcts',
        'prds' => 'setPrds',
        'val' => 'setVal',
        'gtdGtcValDays' => 'setGtdGtcValDays',
        'mndtryCnsts' => 'setMndtryCnsts',
        'optCnsts' => 'setOptCnsts',
        'srcVendor' => 'setSrcVendor',
        'vndSrc' => 'setVndSrc',
        'reqId' => 'setReqId',
        'url' => 'setUrl',
        'jsessionId' => 'setJsessionId',
        'vndCnstPopUp' => 'setVndCnstPopUp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accTyp' => 'getAccTyp',
        'mrgSts' => 'getMrgSts',
        'othAccDts' => 'getOthAccDts',
        'mrgPopUp' => 'getMrgPopUp',
        'mrgAccDts' => 'getMrgAccDts',
        'prefAccTyp' => 'getPrefAccTyp',
        'excs' => 'getExcs',
        'dfPrds' => 'getDfPrds',
        'dfPrdsMTF' => 'getDfPrdsMTF',
        'ordTypes' => 'getOrdTypes',
        'sts' => 'getSts',
        'accs' => 'getAccs',
        'qlist' => 'getQlist',
        'mtf' => 'getMtf',
        'comOpCnst' => 'getComOpCnst',
        'adhrEQ' => 'getAdhrEQ',
        'adhrCOM' => 'getAdhrCOM',
        'cnsntLst' => 'getCnsntLst',
        'prdcts' => 'getPrdcts',
        'prds' => 'getPrds',
        'val' => 'getVal',
        'gtdGtcValDays' => 'getGtdGtcValDays',
        'mndtryCnsts' => 'getMndtryCnsts',
        'optCnsts' => 'getOptCnsts',
        'srcVendor' => 'getSrcVendor',
        'vndSrc' => 'getVndSrc',
        'reqId' => 'getReqId',
        'url' => 'getUrl',
        'jsessionId' => 'getJsessionId',
        'vndCnstPopUp' => 'getVndCnstPopUp'
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

    const ACC_TYP_EQ = 'EQ';
    const ACC_TYP_CO = 'CO';
    const ACC_TYP_COMEQ = 'COMEQ';
    const MRG_STS_COMPLETED = 'COMPLETED';
    const MRG_STS_REQUESTED = 'REQUESTED';
    const MRG_STS_ONE_ACCOUNT = 'ONE_ACCOUNT';
    const MRG_STS_PROCESSED = 'PROCESSED';
    const MRG_STS_NOT_REQUESTED = 'NOT_REQUESTED';
    const MRG_STS_NOT_ENABLED = 'NOT_ENABLED';
    const STS_OK = 'OK';
    const STS_INVALID_ANSWERS = 'INVALID_ANSWERS';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccTypAllowableValues()
    {
        return [
            self::ACC_TYP_EQ,
            self::ACC_TYP_CO,
            self::ACC_TYP_COMEQ,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMrgStsAllowableValues()
    {
        return [
            self::MRG_STS_COMPLETED,
            self::MRG_STS_REQUESTED,
            self::MRG_STS_ONE_ACCOUNT,
            self::MRG_STS_PROCESSED,
            self::MRG_STS_NOT_REQUESTED,
            self::MRG_STS_NOT_ENABLED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStsAllowableValues()
    {
        return [
            self::STS_OK,
            self::STS_INVALID_ANSWERS,
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
        $this->container['accTyp'] = $data['accTyp'] ?? null;
        $this->container['mrgSts'] = $data['mrgSts'] ?? null;
        $this->container['othAccDts'] = $data['othAccDts'] ?? null;
        $this->container['mrgPopUp'] = $data['mrgPopUp'] ?? false;
        $this->container['mrgAccDts'] = $data['mrgAccDts'] ?? null;
        $this->container['prefAccTyp'] = $data['prefAccTyp'] ?? null;
        $this->container['excs'] = $data['excs'] ?? null;
        $this->container['dfPrds'] = $data['dfPrds'] ?? null;
        $this->container['dfPrdsMTF'] = $data['dfPrdsMTF'] ?? null;
        $this->container['ordTypes'] = $data['ordTypes'] ?? null;
        $this->container['sts'] = $data['sts'] ?? null;
        $this->container['accs'] = $data['accs'] ?? null;
        $this->container['qlist'] = $data['qlist'] ?? null;
        $this->container['mtf'] = $data['mtf'] ?? null;
        $this->container['comOpCnst'] = $data['comOpCnst'] ?? null;
        $this->container['adhrEQ'] = $data['adhrEQ'] ?? null;
        $this->container['adhrCOM'] = $data['adhrCOM'] ?? null;
        $this->container['cnsntLst'] = $data['cnsntLst'] ?? null;
        $this->container['prdcts'] = $data['prdcts'] ?? null;
        $this->container['prds'] = $data['prds'] ?? null;
        $this->container['val'] = $data['val'] ?? null;
        $this->container['gtdGtcValDays'] = $data['gtdGtcValDays'] ?? null;
        $this->container['mndtryCnsts'] = $data['mndtryCnsts'] ?? null;
        $this->container['optCnsts'] = $data['optCnsts'] ?? null;
        $this->container['srcVendor'] = $data['srcVendor'] ?? null;
        $this->container['vndSrc'] = $data['vndSrc'] ?? null;
        $this->container['reqId'] = $data['reqId'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['jsessionId'] = $data['jsessionId'] ?? null;
        $this->container['vndCnstPopUp'] = $data['vndCnstPopUp'] ?? false;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAccTypAllowableValues();
        if (!is_null($this->container['accTyp']) && !in_array($this->container['accTyp'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'accTyp', must be one of '%s'",
                $this->container['accTyp'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMrgStsAllowableValues();
        if (!is_null($this->container['mrgSts']) && !in_array($this->container['mrgSts'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'mrgSts', must be one of '%s'",
                $this->container['mrgSts'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStsAllowableValues();
        if (!is_null($this->container['sts']) && !in_array($this->container['sts'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'sts', must be one of '%s'",
                $this->container['sts'],
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
     * Gets accTyp
     *
     * @return string|null
     */
    public function getAccTyp()
    {
        return $this->container['accTyp'];
    }

    /**
     * Sets accTyp
     *
     * @param string|null $accTyp Account types for which user is logged in to
     *
     * @return self
     */
    public function setAccTyp($accTyp)
    {
        $allowedValues = $this->getAccTypAllowableValues();
        if (!is_null($accTyp) && !in_array($accTyp, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'accTyp', must be one of '%s'",
                    $accTyp,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['accTyp'] = $accTyp;

        return $this;
    }

    /**
     * Gets mrgSts
     *
     * @return string|null
     */
    public function getMrgSts()
    {
        return $this->container['mrgSts'];
    }

    /**
     * Sets mrgSts
     *
     * @param string|null $mrgSts merge status of userID
     *
     * @return self
     */
    public function setMrgSts($mrgSts)
    {
        $allowedValues = $this->getMrgStsAllowableValues();
        if (!is_null($mrgSts) && !in_array($mrgSts, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'mrgSts', must be one of '%s'",
                    $mrgSts,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mrgSts'] = $mrgSts;

        return $this;
    }

    /**
     * Gets othAccDts
     *
     * @return \com\edel\edelconnect\models\OtherAccountDetailsResponseObject|null
     */
    public function getOthAccDts()
    {
        return $this->container['othAccDts'];
    }

    /**
     * Sets othAccDts
     *
     * @param \com\edel\edelconnect\models\OtherAccountDetailsResponseObject|null $othAccDts othAccDts
     *
     * @return self
     */
    public function setOthAccDts($othAccDts)
    {
        $this->container['othAccDts'] = $othAccDts;

        return $this;
    }

    /**
     * Gets mrgPopUp
     *
     * @return bool|null
     */
    public function getMrgPopUp()
    {
        return $this->container['mrgPopUp'];
    }

    /**
     * Sets mrgPopUp
     *
     * @param bool|null $mrgPopUp mrgPopUp
     *
     * @return self
     */
    public function setMrgPopUp($mrgPopUp)
    {
        $this->container['mrgPopUp'] = $mrgPopUp;

        return $this;
    }

    /**
     * Gets mrgAccDts
     *
     * @return \com\edel\edelconnect\models\MergeAccountDetailsResponseObject|null
     */
    public function getMrgAccDts()
    {
        return $this->container['mrgAccDts'];
    }

    /**
     * Sets mrgAccDts
     *
     * @param \com\edel\edelconnect\models\MergeAccountDetailsResponseObject|null $mrgAccDts mrgAccDts
     *
     * @return self
     */
    public function setMrgAccDts($mrgAccDts)
    {
        $this->container['mrgAccDts'] = $mrgAccDts;

        return $this;
    }

    /**
     * Gets prefAccTyp
     *
     * @return string|null
     */
    public function getPrefAccTyp()
    {
        return $this->container['prefAccTyp'];
    }

    /**
     * Sets prefAccTyp
     *
     * @param string|null $prefAccTyp Field will be sent only when mrg status is completed/Processed. Note : This might be null when status is processed (when userid's are same before merging)
     *
     * @return self
     */
    public function setPrefAccTyp($prefAccTyp)
    {
        $this->container['prefAccTyp'] = $prefAccTyp;

        return $this;
    }

    /**
     * Gets excs
     *
     * @return string[]|null
     */
    public function getExcs()
    {
        return $this->container['excs'];
    }

    /**
     * Sets excs
     *
     * @param string[]|null $excs list of exchanges enabled for the user
     *
     * @return self
     */
    public function setExcs($excs)
    {
        $this->container['excs'] = $excs;

        return $this;
    }

    /**
     * Gets dfPrds
     *
     * @return \com\edel\edelconnect\models\DefaultProductTypesObject|null
     */
    public function getDfPrds()
    {
        return $this->container['dfPrds'];
    }

    /**
     * Sets dfPrds
     *
     * @param \com\edel\edelconnect\models\DefaultProductTypesObject|null $dfPrds dfPrds
     *
     * @return self
     */
    public function setDfPrds($dfPrds)
    {
        $this->container['dfPrds'] = $dfPrds;

        return $this;
    }

    /**
     * Gets dfPrdsMTF
     *
     * @return \com\edel\edelconnect\models\DefaultProductTypesObject|null
     */
    public function getDfPrdsMTF()
    {
        return $this->container['dfPrdsMTF'];
    }

    /**
     * Sets dfPrdsMTF
     *
     * @param \com\edel\edelconnect\models\DefaultProductTypesObject|null $dfPrdsMTF dfPrdsMTF
     *
     * @return self
     */
    public function setDfPrdsMTF($dfPrdsMTF)
    {
        $this->container['dfPrdsMTF'] = $dfPrdsMTF;

        return $this;
    }

    /**
     * Gets ordTypes
     *
     * @return \com\edel\edelconnect\models\KeyValueResponseObject[]|null
     */
    public function getOrdTypes()
    {
        return $this->container['ordTypes'];
    }

    /**
     * Sets ordTypes
     *
     * @param \com\edel\edelconnect\models\KeyValueResponseObject[]|null $ordTypes List of Order types enabled for the user
     *
     * @return self
     */
    public function setOrdTypes($ordTypes)
    {
        $this->container['ordTypes'] = $ordTypes;

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
     * @param string|null $sts Is user successfully logged in then status is ok, else if status is invalid_answers then new 2fa questions should be displayed
     *
     * @return self
     */
    public function setSts($sts)
    {
        $allowedValues = $this->getStsAllowableValues();
        if (!is_null($sts) && !in_array($sts, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'sts', must be one of '%s'",
                    $sts,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sts'] = $sts;

        return $this;
    }

    /**
     * Gets accs
     *
     * @return \com\edel\edelconnect\models\AccountDetailsResponeObject|null
     */
    public function getAccs()
    {
        return $this->container['accs'];
    }

    /**
     * Sets accs
     *
     * @param \com\edel\edelconnect\models\AccountDetailsResponeObject|null $accs accs
     *
     * @return self
     */
    public function setAccs($accs)
    {
        $this->container['accs'] = $accs;

        return $this;
    }

    /**
     * Gets qlist
     *
     * @return \com\edel\edelconnect\models\QuestionsResponse[]|null
     */
    public function getQlist()
    {
        return $this->container['qlist'];
    }

    /**
     * Sets qlist
     *
     * @param \com\edel\edelconnect\models\QuestionsResponse[]|null $qlist If user enters invalid answers to 2fa questions. then new set of questions comes under this field
     *
     * @return self
     */
    public function setQlist($qlist)
    {
        $this->container['qlist'] = $qlist;

        return $this;
    }

    /**
     * Gets mtf
     *
     * @return \com\edel\edelconnect\models\CommonConsentStatusDao|null
     */
    public function getMtf()
    {
        return $this->container['mtf'];
    }

    /**
     * Sets mtf
     *
     * @param \com\edel\edelconnect\models\CommonConsentStatusDao|null $mtf mtf
     *
     * @return self
     */
    public function setMtf($mtf)
    {
        $this->container['mtf'] = $mtf;

        return $this;
    }

    /**
     * Gets comOpCnst
     *
     * @return \com\edel\edelconnect\models\CommonConsentStatusDao|null
     */
    public function getComOpCnst()
    {
        return $this->container['comOpCnst'];
    }

    /**
     * Sets comOpCnst
     *
     * @param \com\edel\edelconnect\models\CommonConsentStatusDao|null $comOpCnst comOpCnst
     *
     * @return self
     */
    public function setComOpCnst($comOpCnst)
    {
        $this->container['comOpCnst'] = $comOpCnst;

        return $this;
    }

    /**
     * Gets adhrEQ
     *
     * @return \com\edel\edelconnect\models\AadharStatusDao|null
     */
    public function getAdhrEQ()
    {
        return $this->container['adhrEQ'];
    }

    /**
     * Sets adhrEQ
     *
     * @param \com\edel\edelconnect\models\AadharStatusDao|null $adhrEQ adhrEQ
     *
     * @return self
     */
    public function setAdhrEQ($adhrEQ)
    {
        $this->container['adhrEQ'] = $adhrEQ;

        return $this;
    }

    /**
     * Gets adhrCOM
     *
     * @return \com\edel\edelconnect\models\AadharStatusDao|null
     */
    public function getAdhrCOM()
    {
        return $this->container['adhrCOM'];
    }

    /**
     * Sets adhrCOM
     *
     * @param \com\edel\edelconnect\models\AadharStatusDao|null $adhrCOM adhrCOM
     *
     * @return self
     */
    public function setAdhrCOM($adhrCOM)
    {
        $this->container['adhrCOM'] = $adhrCOM;

        return $this;
    }

    /**
     * Gets cnsntLst
     *
     * @return \com\edel\edelconnect\models\ConsentStatusDao[]|null
     */
    public function getCnsntLst()
    {
        return $this->container['cnsntLst'];
    }

    /**
     * Sets cnsntLst
     *
     * @param \com\edel\edelconnect\models\ConsentStatusDao[]|null $cnsntLst consent priority List
     *
     * @return self
     */
    public function setCnsntLst($cnsntLst)
    {
        $this->container['cnsntLst'] = $cnsntLst;

        return $this;
    }

    /**
     * Gets prdcts
     *
     * @return array<string,array<string,string[]>>|null
     */
    public function getPrdcts()
    {
        return $this->container['prdcts'];
    }

    /**
     * Sets prdcts
     *
     * @param array<string,array<string,string[]>>|null $prdcts prdcts
     *
     * @return self
     */
    public function setPrdcts($prdcts)
    {
        $this->container['prdcts'] = $prdcts;

        return $this;
    }

    /**
     * Gets prds
     *
     * @return \com\edel\edelconnect\models\ValidityProductsResponseObject[]|null
     */
    public function getPrds()
    {
        return $this->container['prds'];
    }

    /**
     * Sets prds
     *
     * @param \com\edel\edelconnect\models\ValidityProductsResponseObject[]|null $prds For every exchange it will give the list of validity based on product
     *
     * @return self
     */
    public function setPrds($prds)
    {
        $this->container['prds'] = $prds;

        return $this;
    }

    /**
     * Gets val
     *
     * @return \com\edel\edelconnect\models\ValidityExchangeObject[]|null
     */
    public function getVal()
    {
        return $this->container['val'];
    }

    /**
     * Sets val
     *
     * @param \com\edel\edelconnect\models\ValidityExchangeObject[]|null $val List of validity corresponding to exchange
     *
     * @return self
     */
    public function setVal($val)
    {
        $this->container['val'] = $val;

        return $this;
    }

    /**
     * Gets gtdGtcValDays
     *
     * @return string|null
     */
    public function getGtdGtcValDays()
    {
        return $this->container['gtdGtcValDays'];
    }

    /**
     * Sets gtdGtcValDays
     *
     * @param string|null $gtdGtcValDays Validity days for GTC/GTD product
     *
     * @return self
     */
    public function setGtdGtcValDays($gtdGtcValDays)
    {
        $this->container['gtdGtcValDays'] = $gtdGtcValDays;

        return $this;
    }

    /**
     * Gets mndtryCnsts
     *
     * @return \com\edel\edelconnect\models\ConsentStatusDao[]|null
     */
    public function getMndtryCnsts()
    {
        return $this->container['mndtryCnsts'];
    }

    /**
     * Sets mndtryCnsts
     *
     * @param \com\edel\edelconnect\models\ConsentStatusDao[]|null $mndtryCnsts Mandatory consent priority List --> Won't be available if there is no mandatory consents (null check required)
     *
     * @return self
     */
    public function setMndtryCnsts($mndtryCnsts)
    {
        $this->container['mndtryCnsts'] = $mndtryCnsts;

        return $this;
    }

    /**
     * Gets optCnsts
     *
     * @return \com\edel\edelconnect\models\ConsentStatusDao[]|null
     */
    public function getOptCnsts()
    {
        return $this->container['optCnsts'];
    }

    /**
     * Sets optCnsts
     *
     * @param \com\edel\edelconnect\models\ConsentStatusDao[]|null $optCnsts Optional consent priority List --> Won't be available if there is a mandatory consent and no optional consents (null check required)
     *
     * @return self
     */
    public function setOptCnsts($optCnsts)
    {
        $this->container['optCnsts'] = $optCnsts;

        return $this;
    }

    /**
     * Gets srcVendor
     *
     * @return string|null
     */
    public function getSrcVendor()
    {
        return $this->container['srcVendor'];
    }

    /**
     * Sets srcVendor
     *
     * @param string|null $srcVendor vendor name
     *
     * @return self
     */
    public function setSrcVendor($srcVendor)
    {
        $this->container['srcVendor'] = $srcVendor;

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
     * @param string|null $vndSrc vendor source
     *
     * @return self
     */
    public function setVndSrc($vndSrc)
    {
        $this->container['vndSrc'] = $vndSrc;

        return $this;
    }

    /**
     * Gets reqId
     *
     * @return string|null
     */
    public function getReqId()
    {
        return $this->container['reqId'];
    }

    /**
     * Sets reqId
     *
     * @param string|null $reqId Toc Login data request id
     *
     * @return self
     */
    public function setReqId($reqId)
    {
        $this->container['reqId'] = $reqId;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url Redirect Url
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets jsessionId
     *
     * @return string|null
     */
    public function getJsessionId()
    {
        return $this->container['jsessionId'];
    }

    /**
     * Sets jsessionId
     *
     * @param string|null $jsessionId jsessionId
     *
     * @return self
     */
    public function setJsessionId($jsessionId)
    {
        $this->container['jsessionId'] = $jsessionId;

        return $this;
    }

    /**
     * Gets vndCnstPopUp
     *
     * @return bool|null
     */
    public function getVndCnstPopUp()
    {
        return $this->container['vndCnstPopUp'];
    }

    /**
     * Sets vndCnstPopUp
     *
     * @param bool|null $vndCnstPopUp vndCnstPopUp
     *
     * @return self
     */
    public function setVndCnstPopUp($vndCnstPopUp)
    {
        $this->container['vndCnstPopUp'] = $vndCnstPopUp;

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


