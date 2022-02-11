<?php
/**
 * AccountDetailsResponeObject
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
 * AccountDetailsResponeObject Class Doc Comment
 *
 * @category Class
 * @package  com\edel
 * @author   Edelweiss
 * @link     https://www.edelweiss.in
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AccountDetailsResponeObject implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelName = 'AccountDetailsResponeObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'eqBrkCode' => 'string',
        'coBrkCode' => 'string',
        'eqBrId' => 'string',
        'coBrId' => 'string',
        'llt' => 'string',
        'eqAccID' => 'string',
        'eqAccName' => 'string',
        'coAccID' => 'string',
        'coAccName' => 'string',
        'uid' => 'string',
        'eqBrk' => 'string',
        'coBrk' => 'string',
        'rstpwd' => 'bool',
        'rstusr' => 'bool',
        'eqstwt' => 'bool',
        'costwt' => 'bool',
        'bseMfstwt' => 'bool',
        'eqRmRt' => 'string',
        'eqEmpCat' => 'string',
        'coEmpCat' => 'string',
        'eqAlgoClnt' => 'string',
        'prfId' => 'string',
        'ucmCd' => 'string',
        'eqDob' => 'string',
        'coDob' => 'string',
        'wtspCnsnt' => 'string',
        'eml' => 'string',
        'mfInf' => 'bool',
        'cdslEsFlg' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'eqBrkCode' => null,
        'coBrkCode' => null,
        'eqBrId' => null,
        'coBrId' => null,
        'llt' => null,
        'eqAccID' => null,
        'eqAccName' => null,
        'coAccID' => null,
        'coAccName' => null,
        'uid' => null,
        'eqBrk' => null,
        'coBrk' => null,
        'rstpwd' => null,
        'rstusr' => null,
        'eqstwt' => null,
        'costwt' => null,
        'bseMfstwt' => null,
        'eqRmRt' => null,
        'eqEmpCat' => null,
        'coEmpCat' => null,
        'eqAlgoClnt' => null,
        'prfId' => null,
        'ucmCd' => null,
        'eqDob' => null,
        'coDob' => null,
        'wtspCnsnt' => null,
        'eml' => null,
        'mfInf' => null,
        'cdslEsFlg' => null
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
        'eqBrkCode' => 'eqBrkCode',
        'coBrkCode' => 'coBrkCode',
        'eqBrId' => 'eqBrId',
        'coBrId' => 'coBrId',
        'llt' => 'llt',
        'eqAccID' => 'eqAccID',
        'eqAccName' => 'eqAccName',
        'coAccID' => 'coAccID',
        'coAccName' => 'coAccName',
        'uid' => 'uid',
        'eqBrk' => 'eqBrk',
        'coBrk' => 'coBrk',
        'rstpwd' => 'rstpwd',
        'rstusr' => 'rstusr',
        'eqstwt' => 'eqstwt',
        'costwt' => 'costwt',
        'bseMfstwt' => 'bseMfstwt',
        'eqRmRt' => 'eqRmRt',
        'eqEmpCat' => 'eqEmpCat',
        'coEmpCat' => 'coEmpCat',
        'eqAlgoClnt' => 'eqAlgoClnt',
        'prfId' => 'prfId',
        'ucmCd' => 'ucmCd',
        'eqDob' => 'eqDob',
        'coDob' => 'coDob',
        'wtspCnsnt' => 'wtspCnsnt',
        'eml' => 'eml',
        'mfInf' => 'mfInf',
        'cdslEsFlg' => 'cdslEsFlg'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'eqBrkCode' => 'setEqBrkCode',
        'coBrkCode' => 'setCoBrkCode',
        'eqBrId' => 'setEqBrId',
        'coBrId' => 'setCoBrId',
        'llt' => 'setLlt',
        'eqAccID' => 'setEqAccID',
        'eqAccName' => 'setEqAccName',
        'coAccID' => 'setCoAccID',
        'coAccName' => 'setCoAccName',
        'uid' => 'setUid',
        'eqBrk' => 'setEqBrk',
        'coBrk' => 'setCoBrk',
        'rstpwd' => 'setRstpwd',
        'rstusr' => 'setRstusr',
        'eqstwt' => 'setEqstwt',
        'costwt' => 'setCostwt',
        'bseMfstwt' => 'setBseMfstwt',
        'eqRmRt' => 'setEqRmRt',
        'eqEmpCat' => 'setEqEmpCat',
        'coEmpCat' => 'setCoEmpCat',
        'eqAlgoClnt' => 'setEqAlgoClnt',
        'prfId' => 'setPrfId',
        'ucmCd' => 'setUcmCd',
        'eqDob' => 'setEqDob',
        'coDob' => 'setCoDob',
        'wtspCnsnt' => 'setWtspCnsnt',
        'eml' => 'setEml',
        'mfInf' => 'setMfInf',
        'cdslEsFlg' => 'setCdslEsFlg'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'eqBrkCode' => 'getEqBrkCode',
        'coBrkCode' => 'getCoBrkCode',
        'eqBrId' => 'getEqBrId',
        'coBrId' => 'getCoBrId',
        'llt' => 'getLlt',
        'eqAccID' => 'getEqAccID',
        'eqAccName' => 'getEqAccName',
        'coAccID' => 'getCoAccID',
        'coAccName' => 'getCoAccName',
        'uid' => 'getUid',
        'eqBrk' => 'getEqBrk',
        'coBrk' => 'getCoBrk',
        'rstpwd' => 'getRstpwd',
        'rstusr' => 'getRstusr',
        'eqstwt' => 'getEqstwt',
        'costwt' => 'getCostwt',
        'bseMfstwt' => 'getBseMfstwt',
        'eqRmRt' => 'getEqRmRt',
        'eqEmpCat' => 'getEqEmpCat',
        'coEmpCat' => 'getCoEmpCat',
        'eqAlgoClnt' => 'getEqAlgoClnt',
        'prfId' => 'getPrfId',
        'ucmCd' => 'getUcmCd',
        'eqDob' => 'getEqDob',
        'coDob' => 'getCoDob',
        'wtspCnsnt' => 'getWtspCnsnt',
        'eml' => 'getEml',
        'mfInf' => 'getMfInf',
        'cdslEsFlg' => 'getCdslEsFlg'
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

    const EQ_RM_RT_N = 'N';
    const EQ_RM_RT_Y = 'Y';
    const EQ_RM_RT_NA = 'NA';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEqRmRtAllowableValues()
    {
        return [
            self::EQ_RM_RT_N,
            self::EQ_RM_RT_Y,
            self::EQ_RM_RT_NA,
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
        $this->container['eqBrkCode'] = $data['eqBrkCode'] ?? null;
        $this->container['coBrkCode'] = $data['coBrkCode'] ?? null;
        $this->container['eqBrId'] = $data['eqBrId'] ?? null;
        $this->container['coBrId'] = $data['coBrId'] ?? null;
        $this->container['llt'] = $data['llt'] ?? null;
        $this->container['eqAccID'] = $data['eqAccID'] ?? null;
        $this->container['eqAccName'] = $data['eqAccName'] ?? null;
        $this->container['coAccID'] = $data['coAccID'] ?? null;
        $this->container['coAccName'] = $data['coAccName'] ?? null;
        $this->container['uid'] = $data['uid'] ?? null;
        $this->container['eqBrk'] = $data['eqBrk'] ?? null;
        $this->container['coBrk'] = $data['coBrk'] ?? null;
        $this->container['rstpwd'] = $data['rstpwd'] ?? false;
        $this->container['rstusr'] = $data['rstusr'] ?? false;
        $this->container['eqstwt'] = $data['eqstwt'] ?? false;
        $this->container['costwt'] = $data['costwt'] ?? false;
        $this->container['bseMfstwt'] = $data['bseMfstwt'] ?? false;
        $this->container['eqRmRt'] = $data['eqRmRt'] ?? null;
        $this->container['eqEmpCat'] = $data['eqEmpCat'] ?? null;
        $this->container['coEmpCat'] = $data['coEmpCat'] ?? null;
        $this->container['eqAlgoClnt'] = $data['eqAlgoClnt'] ?? null;
        $this->container['prfId'] = $data['prfId'] ?? null;
        $this->container['ucmCd'] = $data['ucmCd'] ?? null;
        $this->container['eqDob'] = $data['eqDob'] ?? null;
        $this->container['coDob'] = $data['coDob'] ?? null;
        $this->container['wtspCnsnt'] = $data['wtspCnsnt'] ?? null;
        $this->container['eml'] = $data['eml'] ?? null;
        $this->container['mfInf'] = $data['mfInf'] ?? false;
        $this->container['cdslEsFlg'] = $data['cdslEsFlg'] ?? false;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getEqRmRtAllowableValues();
        if (!is_null($this->container['eqRmRt']) && !in_array($this->container['eqRmRt'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'eqRmRt', must be one of '%s'",
                $this->container['eqRmRt'],
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
     * Gets eqBrkCode
     *
     * @return string|null
     */
    public function getEqBrkCode()
    {
        return $this->container['eqBrkCode'];
    }

    /**
     * Sets eqBrkCode
     *
     * @param string|null $eqBrkCode Equity Broker Code of the user
     *
     * @return self
     */
    public function setEqBrkCode($eqBrkCode)
    {
        $this->container['eqBrkCode'] = $eqBrkCode;

        return $this;
    }

    /**
     * Gets coBrkCode
     *
     * @return string|null
     */
    public function getCoBrkCode()
    {
        return $this->container['coBrkCode'];
    }

    /**
     * Sets coBrkCode
     *
     * @param string|null $coBrkCode Commodity Broker Code of the user
     *
     * @return self
     */
    public function setCoBrkCode($coBrkCode)
    {
        $this->container['coBrkCode'] = $coBrkCode;

        return $this;
    }

    /**
     * Gets eqBrId
     *
     * @return string|null
     */
    public function getEqBrId()
    {
        return $this->container['eqBrId'];
    }

    /**
     * Sets eqBrId
     *
     * @param string|null $eqBrId Equity Branch Id of the user
     *
     * @return self
     */
    public function setEqBrId($eqBrId)
    {
        $this->container['eqBrId'] = $eqBrId;

        return $this;
    }

    /**
     * Gets coBrId
     *
     * @return string|null
     */
    public function getCoBrId()
    {
        return $this->container['coBrId'];
    }

    /**
     * Sets coBrId
     *
     * @param string|null $coBrId Commodity Branch Id of the user
     *
     * @return self
     */
    public function setCoBrId($coBrId)
    {
        $this->container['coBrId'] = $coBrId;

        return $this;
    }

    /**
     * Gets llt
     *
     * @return string|null
     */
    public function getLlt()
    {
        return $this->container['llt'];
    }

    /**
     * Sets llt
     *
     * @param string|null $llt Last Successful login time
     *
     * @return self
     */
    public function setLlt($llt)
    {
        $this->container['llt'] = $llt;

        return $this;
    }

    /**
     * Gets eqAccID
     *
     * @return string|null
     */
    public function getEqAccID()
    {
        return $this->container['eqAccID'];
    }

    /**
     * Sets eqAccID
     *
     * @param string|null $eqAccID Equity Account ID
     *
     * @return self
     */
    public function setEqAccID($eqAccID)
    {
        $this->container['eqAccID'] = $eqAccID;

        return $this;
    }

    /**
     * Gets eqAccName
     *
     * @return string|null
     */
    public function getEqAccName()
    {
        return $this->container['eqAccName'];
    }

    /**
     * Sets eqAccName
     *
     * @param string|null $eqAccName Equity Account name of the user.
     *
     * @return self
     */
    public function setEqAccName($eqAccName)
    {
        $this->container['eqAccName'] = $eqAccName;

        return $this;
    }

    /**
     * Gets coAccID
     *
     * @return string|null
     */
    public function getCoAccID()
    {
        return $this->container['coAccID'];
    }

    /**
     * Sets coAccID
     *
     * @param string|null $coAccID Commodity Account ID
     *
     * @return self
     */
    public function setCoAccID($coAccID)
    {
        $this->container['coAccID'] = $coAccID;

        return $this;
    }

    /**
     * Gets coAccName
     *
     * @return string|null
     */
    public function getCoAccName()
    {
        return $this->container['coAccName'];
    }

    /**
     * Sets coAccName
     *
     * @param string|null $coAccName Equity Account name of the user.
     *
     * @return self
     */
    public function setCoAccName($coAccName)
    {
        $this->container['coAccName'] = $coAccName;

        return $this;
    }

    /**
     * Gets uid
     *
     * @return string|null
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     *
     * @param string|null $uid User ID
     *
     * @return self
     */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;

        return $this;
    }

    /**
     * Gets eqBrk
     *
     * @return string|null
     */
    public function getEqBrk()
    {
        return $this->container['eqBrk'];
    }

    /**
     * Sets eqBrk
     *
     * @param string|null $eqBrk Equity Account Broker of the user
     *
     * @return self
     */
    public function setEqBrk($eqBrk)
    {
        $this->container['eqBrk'] = $eqBrk;

        return $this;
    }

    /**
     * Gets coBrk
     *
     * @return string|null
     */
    public function getCoBrk()
    {
        return $this->container['coBrk'];
    }

    /**
     * Sets coBrk
     *
     * @param string|null $coBrk Commodity Account Broker of the user
     *
     * @return self
     */
    public function setCoBrk($coBrk)
    {
        $this->container['coBrk'] = $coBrk;

        return $this;
    }

    /**
     * Gets rstpwd
     *
     * @return bool|null
     */
    public function getRstpwd()
    {
        return $this->container['rstpwd'];
    }

    /**
     * Sets rstpwd
     *
     * @param bool|null $rstpwd reset password flag. If true then user needs to change password.
     *
     * @return self
     */
    public function setRstpwd($rstpwd)
    {
        $this->container['rstpwd'] = $rstpwd;

        return $this;
    }

    /**
     * Gets rstusr
     *
     * @return bool|null
     */
    public function getRstusr()
    {
        return $this->container['rstusr'];
    }

    /**
     * Sets rstusr
     *
     * @param bool|null $rstusr Change userID flag. If true then user needs to change userid.
     *
     * @return self
     */
    public function setRstusr($rstusr)
    {
        $this->container['rstusr'] = $rstusr;

        return $this;
    }

    /**
     * Gets eqstwt
     *
     * @return bool|null
     */
    public function getEqstwt()
    {
        return $this->container['eqstwt'];
    }

    /**
     * Sets eqstwt
     *
     * @param bool|null $eqstwt if user accepted Equity consent then it will come as true
     *
     * @return self
     */
    public function setEqstwt($eqstwt)
    {
        $this->container['eqstwt'] = $eqstwt;

        return $this;
    }

    /**
     * Gets costwt
     *
     * @return bool|null
     */
    public function getCostwt()
    {
        return $this->container['costwt'];
    }

    /**
     * Sets costwt
     *
     * @param bool|null $costwt if user accepted Commodity consent then it will come as true
     *
     * @return self
     */
    public function setCostwt($costwt)
    {
        $this->container['costwt'] = $costwt;

        return $this;
    }

    /**
     * Gets bseMfstwt
     *
     * @return bool|null
     */
    public function getBseMfstwt()
    {
        return $this->container['bseMfstwt'];
    }

    /**
     * Sets bseMfstwt
     *
     * @param bool|null $bseMfstwt if user accepted BSE MF Start consent then it will come as true
     *
     * @return self
     */
    public function setBseMfstwt($bseMfstwt)
    {
        $this->container['bseMfstwt'] = $bseMfstwt;

        return $this;
    }

    /**
     * Gets eqRmRt
     *
     * @return string|null
     */
    public function getEqRmRt()
    {
        return $this->container['eqRmRt'];
    }

    /**
     * Sets eqRmRt
     *
     * @param string|null $eqRmRt Equity RM Rating Setting,NA - RM Rating is not enabled, Y - RM Rating is enabled and Show popup just after login, N - RM Rating is enabled and donot show pop up
     *
     * @return self
     */
    public function setEqRmRt($eqRmRt)
    {
        $allowedValues = $this->getEqRmRtAllowableValues();
        if (!is_null($eqRmRt) && !in_array($eqRmRt, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'eqRmRt', must be one of '%s'",
                    $eqRmRt,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['eqRmRt'] = $eqRmRt;

        return $this;
    }

    /**
     * Gets eqEmpCat
     *
     * @return string|null
     */
    public function getEqEmpCat()
    {
        return $this->container['eqEmpCat'];
    }

    /**
     * Sets eqEmpCat
     *
     * @param string|null $eqEmpCat Employee Category, if eq account is for employee, otherwise NA
     *
     * @return self
     */
    public function setEqEmpCat($eqEmpCat)
    {
        $this->container['eqEmpCat'] = $eqEmpCat;

        return $this;
    }

    /**
     * Gets coEmpCat
     *
     * @return string|null
     */
    public function getCoEmpCat()
    {
        return $this->container['coEmpCat'];
    }

    /**
     * Sets coEmpCat
     *
     * @param string|null $coEmpCat Employee Category, if co account is for employee, otherwise NA
     *
     * @return self
     */
    public function setCoEmpCat($coEmpCat)
    {
        $this->container['coEmpCat'] = $coEmpCat;

        return $this;
    }

    /**
     * Gets eqAlgoClnt
     *
     * @return string|null
     */
    public function getEqAlgoClnt()
    {
        return $this->container['eqAlgoClnt'];
    }

    /**
     * Sets eqAlgoClnt
     *
     * @param string|null $eqAlgoClnt If the client is Algo client
     *
     * @return self
     */
    public function setEqAlgoClnt($eqAlgoClnt)
    {
        $this->container['eqAlgoClnt'] = $eqAlgoClnt;

        return $this;
    }

    /**
     * Gets prfId
     *
     * @return string|null
     */
    public function getPrfId()
    {
        return $this->container['prfId'];
    }

    /**
     * Sets prfId
     *
     * @param string|null $prfId client's profile id
     *
     * @return self
     */
    public function setPrfId($prfId)
    {
        $this->container['prfId'] = $prfId;

        return $this;
    }

    /**
     * Gets ucmCd
     *
     * @return string|null
     */
    public function getUcmCd()
    {
        return $this->container['ucmCd'];
    }

    /**
     * Sets ucmCd
     *
     * @param string|null $ucmCd client's  ucm code
     *
     * @return self
     */
    public function setUcmCd($ucmCd)
    {
        $this->container['ucmCd'] = $ucmCd;

        return $this;
    }

    /**
     * Gets eqDob
     *
     * @return string|null
     */
    public function getEqDob()
    {
        return $this->container['eqDob'];
    }

    /**
     * Sets eqDob
     *
     * @param string|null $eqDob Client's DOB recorded in Equity Account
     *
     * @return self
     */
    public function setEqDob($eqDob)
    {
        $this->container['eqDob'] = $eqDob;

        return $this;
    }

    /**
     * Gets coDob
     *
     * @return string|null
     */
    public function getCoDob()
    {
        return $this->container['coDob'];
    }

    /**
     * Sets coDob
     *
     * @param string|null $coDob Client's DOB recorded in Commodity Account
     *
     * @return self
     */
    public function setCoDob($coDob)
    {
        $this->container['coDob'] = $coDob;

        return $this;
    }

    /**
     * Gets wtspCnsnt
     *
     * @return string|null
     */
    public function getWtspCnsnt()
    {
        return $this->container['wtspCnsnt'];
    }

    /**
     * Sets wtspCnsnt
     *
     * @param string|null $wtspCnsnt Client's WhatsApp Consent exists or not, true if exists
     *
     * @return self
     */
    public function setWtspCnsnt($wtspCnsnt)
    {
        $this->container['wtspCnsnt'] = $wtspCnsnt;

        return $this;
    }

    /**
     * Gets eml
     *
     * @return string|null
     */
    public function getEml()
    {
        return $this->container['eml'];
    }

    /**
     * Sets eml
     *
     * @param string|null $eml E-mail
     *
     * @return self
     */
    public function setEml($eml)
    {
        $this->container['eml'] = $eml;

        return $this;
    }

    /**
     * Gets mfInf
     *
     * @return bool|null
     */
    public function getMfInf()
    {
        return $this->container['mfInf'];
    }

    /**
     * Sets mfInf
     *
     * @param bool|null $mfInf MF Infinity flag
     *
     * @return self
     */
    public function setMfInf($mfInf)
    {
        $this->container['mfInf'] = $mfInf;

        return $this;
    }

    /**
     * Gets cdslEsFlg
     *
     * @return bool|null
     */
    public function getCdslEsFlg()
    {
        return $this->container['cdslEsFlg'];
    }

    /**
     * Sets cdslEsFlg
     *
     * @param bool|null $cdslEsFlg CDSL Easy flag
     *
     * @return self
     */
    public function setCdslEsFlg($cdslEsFlg)
    {
        $this->container['cdslEsFlg'] = $cdslEsFlg;

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


