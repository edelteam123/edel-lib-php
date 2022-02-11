<?php
/**
 * TransferStatusObject
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
 * TransferStatusObject Class Doc Comment
 *
 * @category Class
 * @package  com\edel
 * @author   Edelweiss
 * @link     https://www.edelweiss.in
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TransferStatusObject implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelName = 'TransferStatusObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'reqTyp' => 'string',
        'seg' => 'string',
        'instNo' => 'string',
        'dt' => 'string',
        'tm' => 'string',
        'trnsAmt' => 'string',
        'refNo' => 'string',
        'rmk' => 'string',
        'bnkName' => 'string',
        'sts' => 'string',
        'brcName' => 'string',
        'bnkAccNo' => 'string',
        'edit' => 'string',
        'cancel' => 'string',
        'verify' => 'string',
        'ldgrNm' => 'string',
        'upi' => 'string',
        'payMd' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'reqTyp' => null,
        'seg' => null,
        'instNo' => null,
        'dt' => null,
        'tm' => null,
        'trnsAmt' => null,
        'refNo' => null,
        'rmk' => null,
        'bnkName' => null,
        'sts' => null,
        'brcName' => null,
        'bnkAccNo' => null,
        'edit' => null,
        'cancel' => null,
        'verify' => null,
        'ldgrNm' => null,
        'upi' => null,
        'payMd' => null
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
        'reqTyp' => 'reqTyp',
        'seg' => 'seg',
        'instNo' => 'instNo',
        'dt' => 'dt',
        'tm' => 'tm',
        'trnsAmt' => 'trnsAmt',
        'refNo' => 'refNo',
        'rmk' => 'rmk',
        'bnkName' => 'bnkName',
        'sts' => 'sts',
        'brcName' => 'brcName',
        'bnkAccNo' => 'bnkAccNo',
        'edit' => 'edit',
        'cancel' => 'cancel',
        'verify' => 'verify',
        'ldgrNm' => 'ldgrNm',
        'upi' => 'upi',
        'payMd' => 'payMd'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reqTyp' => 'setReqTyp',
        'seg' => 'setSeg',
        'instNo' => 'setInstNo',
        'dt' => 'setDt',
        'tm' => 'setTm',
        'trnsAmt' => 'setTrnsAmt',
        'refNo' => 'setRefNo',
        'rmk' => 'setRmk',
        'bnkName' => 'setBnkName',
        'sts' => 'setSts',
        'brcName' => 'setBrcName',
        'bnkAccNo' => 'setBnkAccNo',
        'edit' => 'setEdit',
        'cancel' => 'setCancel',
        'verify' => 'setVerify',
        'ldgrNm' => 'setLdgrNm',
        'upi' => 'setUpi',
        'payMd' => 'setPayMd'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reqTyp' => 'getReqTyp',
        'seg' => 'getSeg',
        'instNo' => 'getInstNo',
        'dt' => 'getDt',
        'tm' => 'getTm',
        'trnsAmt' => 'getTrnsAmt',
        'refNo' => 'getRefNo',
        'rmk' => 'getRmk',
        'bnkName' => 'getBnkName',
        'sts' => 'getSts',
        'brcName' => 'getBrcName',
        'bnkAccNo' => 'getBnkAccNo',
        'edit' => 'getEdit',
        'cancel' => 'getCancel',
        'verify' => 'getVerify',
        'ldgrNm' => 'getLdgrNm',
        'upi' => 'getUpi',
        'payMd' => 'getPayMd'
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
        $this->container['reqTyp'] = $data['reqTyp'] ?? null;
        $this->container['seg'] = $data['seg'] ?? null;
        $this->container['instNo'] = $data['instNo'] ?? null;
        $this->container['dt'] = $data['dt'] ?? null;
        $this->container['tm'] = $data['tm'] ?? null;
        $this->container['trnsAmt'] = $data['trnsAmt'] ?? null;
        $this->container['refNo'] = $data['refNo'] ?? null;
        $this->container['rmk'] = $data['rmk'] ?? null;
        $this->container['bnkName'] = $data['bnkName'] ?? null;
        $this->container['sts'] = $data['sts'] ?? null;
        $this->container['brcName'] = $data['brcName'] ?? null;
        $this->container['bnkAccNo'] = $data['bnkAccNo'] ?? null;
        $this->container['edit'] = $data['edit'] ?? null;
        $this->container['cancel'] = $data['cancel'] ?? null;
        $this->container['verify'] = $data['verify'] ?? null;
        $this->container['ldgrNm'] = $data['ldgrNm'] ?? null;
        $this->container['upi'] = $data['upi'] ?? null;
        $this->container['payMd'] = $data['payMd'] ?? null;
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
     * Gets reqTyp
     *
     * @return string|null
     */
    public function getReqTyp()
    {
        return $this->container['reqTyp'];
    }

    /**
     * Sets reqTyp
     *
     * @param string|null $reqTyp reqTyp
     *
     * @return self
     */
    public function setReqTyp($reqTyp)
    {
        $this->container['reqTyp'] = $reqTyp;

        return $this;
    }

    /**
     * Gets seg
     *
     * @return string|null
     */
    public function getSeg()
    {
        return $this->container['seg'];
    }

    /**
     * Sets seg
     *
     * @param string|null $seg seg
     *
     * @return self
     */
    public function setSeg($seg)
    {
        $this->container['seg'] = $seg;

        return $this;
    }

    /**
     * Gets instNo
     *
     * @return string|null
     */
    public function getInstNo()
    {
        return $this->container['instNo'];
    }

    /**
     * Sets instNo
     *
     * @param string|null $instNo instNo
     *
     * @return self
     */
    public function setInstNo($instNo)
    {
        $this->container['instNo'] = $instNo;

        return $this;
    }

    /**
     * Gets dt
     *
     * @return string|null
     */
    public function getDt()
    {
        return $this->container['dt'];
    }

    /**
     * Sets dt
     *
     * @param string|null $dt dt
     *
     * @return self
     */
    public function setDt($dt)
    {
        $this->container['dt'] = $dt;

        return $this;
    }

    /**
     * Gets tm
     *
     * @return string|null
     */
    public function getTm()
    {
        return $this->container['tm'];
    }

    /**
     * Sets tm
     *
     * @param string|null $tm tm
     *
     * @return self
     */
    public function setTm($tm)
    {
        $this->container['tm'] = $tm;

        return $this;
    }

    /**
     * Gets trnsAmt
     *
     * @return string|null
     */
    public function getTrnsAmt()
    {
        return $this->container['trnsAmt'];
    }

    /**
     * Sets trnsAmt
     *
     * @param string|null $trnsAmt trnsAmt
     *
     * @return self
     */
    public function setTrnsAmt($trnsAmt)
    {
        $this->container['trnsAmt'] = $trnsAmt;

        return $this;
    }

    /**
     * Gets refNo
     *
     * @return string|null
     */
    public function getRefNo()
    {
        return $this->container['refNo'];
    }

    /**
     * Sets refNo
     *
     * @param string|null $refNo refNo
     *
     * @return self
     */
    public function setRefNo($refNo)
    {
        $this->container['refNo'] = $refNo;

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
     * Gets bnkName
     *
     * @return string|null
     */
    public function getBnkName()
    {
        return $this->container['bnkName'];
    }

    /**
     * Sets bnkName
     *
     * @param string|null $bnkName bnkName
     *
     * @return self
     */
    public function setBnkName($bnkName)
    {
        $this->container['bnkName'] = $bnkName;

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
     * Gets brcName
     *
     * @return string|null
     */
    public function getBrcName()
    {
        return $this->container['brcName'];
    }

    /**
     * Sets brcName
     *
     * @param string|null $brcName brcName
     *
     * @return self
     */
    public function setBrcName($brcName)
    {
        $this->container['brcName'] = $brcName;

        return $this;
    }

    /**
     * Gets bnkAccNo
     *
     * @return string|null
     */
    public function getBnkAccNo()
    {
        return $this->container['bnkAccNo'];
    }

    /**
     * Sets bnkAccNo
     *
     * @param string|null $bnkAccNo bnkAccNo
     *
     * @return self
     */
    public function setBnkAccNo($bnkAccNo)
    {
        $this->container['bnkAccNo'] = $bnkAccNo;

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
     * Gets verify
     *
     * @return string|null
     */
    public function getVerify()
    {
        return $this->container['verify'];
    }

    /**
     * Sets verify
     *
     * @param string|null $verify verify
     *
     * @return self
     */
    public function setVerify($verify)
    {
        $this->container['verify'] = $verify;

        return $this;
    }

    /**
     * Gets ldgrNm
     *
     * @return string|null
     */
    public function getLdgrNm()
    {
        return $this->container['ldgrNm'];
    }

    /**
     * Sets ldgrNm
     *
     * @param string|null $ldgrNm Ledger Name
     *
     * @return self
     */
    public function setLdgrNm($ldgrNm)
    {
        $this->container['ldgrNm'] = $ldgrNm;

        return $this;
    }

    /**
     * Gets upi
     *
     * @return string|null
     */
    public function getUpi()
    {
        return $this->container['upi'];
    }

    /**
     * Sets upi
     *
     * @param string|null $upi upi used for transfer
     *
     * @return self
     */
    public function setUpi($upi)
    {
        $this->container['upi'] = $upi;

        return $this;
    }

    /**
     * Gets payMd
     *
     * @return string|null
     */
    public function getPayMd()
    {
        return $this->container['payMd'];
    }

    /**
     * Sets payMd
     *
     * @param string|null $payMd Payment Mode - Internet Banking/UPI
     *
     * @return self
     */
    public function setPayMd($payMd)
    {
        $this->container['payMd'] = $payMd;

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


