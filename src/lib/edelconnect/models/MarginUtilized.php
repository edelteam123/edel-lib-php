<?php
/**
 * MarginUtilized
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
 * MarginUtilized Class Doc Comment
 *
 * @category Class
 * @description Margin Utilized
 * @package  com\edel
 * @author   Edelweiss
 * @link     https://www.edelweiss.in
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MarginUtilized implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelName = 'MarginUtilized';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'mrgUtd' => 'string',
        'blkRelDlvry' => 'string',
        'lvPrdMrg' => 'string',
        'fnoSpnMrg' => 'string',
        'fnoExpMrg' => 'string',
        'spnExpMrg' => 'string',
        'prmPdRcd' => 'string',
        'rlPnl' => 'string',
        'unRlMtm' => 'string',
        'mf' => 'string',
        'ipoAmt' => 'string',
        'fndWthdrwn' => 'string',
        'ttpv' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'mrgUtd' => null,
        'blkRelDlvry' => null,
        'lvPrdMrg' => null,
        'fnoSpnMrg' => null,
        'fnoExpMrg' => null,
        'spnExpMrg' => null,
        'prmPdRcd' => null,
        'rlPnl' => null,
        'unRlMtm' => null,
        'mf' => null,
        'ipoAmt' => null,
        'fndWthdrwn' => null,
        'ttpv' => null
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
        'mrgUtd' => 'mrgUtd',
        'blkRelDlvry' => 'blkRelDlvry',
        'lvPrdMrg' => 'lvPrdMrg',
        'fnoSpnMrg' => 'fnoSpnMrg',
        'fnoExpMrg' => 'fnoExpMrg',
        'spnExpMrg' => 'spnExpMrg',
        'prmPdRcd' => 'prmPdRcd',
        'rlPnl' => 'rlPnl',
        'unRlMtm' => 'unRlMtm',
        'mf' => 'mf',
        'ipoAmt' => 'ipoAmt',
        'fndWthdrwn' => 'fndWthdrwn',
        'ttpv' => 'ttpv'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mrgUtd' => 'setMrgUtd',
        'blkRelDlvry' => 'setBlkRelDlvry',
        'lvPrdMrg' => 'setLvPrdMrg',
        'fnoSpnMrg' => 'setFnoSpnMrg',
        'fnoExpMrg' => 'setFnoExpMrg',
        'spnExpMrg' => 'setSpnExpMrg',
        'prmPdRcd' => 'setPrmPdRcd',
        'rlPnl' => 'setRlPnl',
        'unRlMtm' => 'setUnRlMtm',
        'mf' => 'setMf',
        'ipoAmt' => 'setIpoAmt',
        'fndWthdrwn' => 'setFndWthdrwn',
        'ttpv' => 'setTtpv'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mrgUtd' => 'getMrgUtd',
        'blkRelDlvry' => 'getBlkRelDlvry',
        'lvPrdMrg' => 'getLvPrdMrg',
        'fnoSpnMrg' => 'getFnoSpnMrg',
        'fnoExpMrg' => 'getFnoExpMrg',
        'spnExpMrg' => 'getSpnExpMrg',
        'prmPdRcd' => 'getPrmPdRcd',
        'rlPnl' => 'getRlPnl',
        'unRlMtm' => 'getUnRlMtm',
        'mf' => 'getMf',
        'ipoAmt' => 'getIpoAmt',
        'fndWthdrwn' => 'getFndWthdrwn',
        'ttpv' => 'getTtpv'
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
        $this->container['mrgUtd'] = $data['mrgUtd'] ?? null;
        $this->container['blkRelDlvry'] = $data['blkRelDlvry'] ?? null;
        $this->container['lvPrdMrg'] = $data['lvPrdMrg'] ?? null;
        $this->container['fnoSpnMrg'] = $data['fnoSpnMrg'] ?? null;
        $this->container['fnoExpMrg'] = $data['fnoExpMrg'] ?? null;
        $this->container['spnExpMrg'] = $data['spnExpMrg'] ?? null;
        $this->container['prmPdRcd'] = $data['prmPdRcd'] ?? null;
        $this->container['rlPnl'] = $data['rlPnl'] ?? null;
        $this->container['unRlMtm'] = $data['unRlMtm'] ?? null;
        $this->container['mf'] = $data['mf'] ?? null;
        $this->container['ipoAmt'] = $data['ipoAmt'] ?? null;
        $this->container['fndWthdrwn'] = $data['fndWthdrwn'] ?? null;
        $this->container['ttpv'] = $data['ttpv'] ?? null;
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
     * Gets mrgUtd
     *
     * @return string|null
     */
    public function getMrgUtd()
    {
        return $this->container['mrgUtd'];
    }

    /**
     * Sets mrgUtd
     *
     * @param string|null $mrgUtd Margin Utilized
     *
     * @return self
     */
    public function setMrgUtd($mrgUtd)
    {
        $this->container['mrgUtd'] = $mrgUtd;

        return $this;
    }

    /**
     * Gets blkRelDlvry
     *
     * @return string|null
     */
    public function getBlkRelDlvry()
    {
        return $this->container['blkRelDlvry'];
    }

    /**
     * Sets blkRelDlvry
     *
     * @param string|null $blkRelDlvry Blocked (+) / Released (-) For Delivery
     *
     * @return self
     */
    public function setBlkRelDlvry($blkRelDlvry)
    {
        $this->container['blkRelDlvry'] = $blkRelDlvry;

        return $this;
    }

    /**
     * Gets lvPrdMrg
     *
     * @return string|null
     */
    public function getLvPrdMrg()
    {
        return $this->container['lvPrdMrg'];
    }

    /**
     * Sets lvPrdMrg
     *
     * @param string|null $lvPrdMrg Leveraged Product Margin (Cash Segment)
     *
     * @return self
     */
    public function setLvPrdMrg($lvPrdMrg)
    {
        $this->container['lvPrdMrg'] = $lvPrdMrg;

        return $this;
    }

    /**
     * Gets fnoSpnMrg
     *
     * @return string|null
     */
    public function getFnoSpnMrg()
    {
        return $this->container['fnoSpnMrg'];
    }

    /**
     * Sets fnoSpnMrg
     *
     * @param string|null $fnoSpnMrg Span Margin
     *
     * @return self
     */
    public function setFnoSpnMrg($fnoSpnMrg)
    {
        $this->container['fnoSpnMrg'] = $fnoSpnMrg;

        return $this;
    }

    /**
     * Gets fnoExpMrg
     *
     * @return string|null
     */
    public function getFnoExpMrg()
    {
        return $this->container['fnoExpMrg'];
    }

    /**
     * Sets fnoExpMrg
     *
     * @param string|null $fnoExpMrg Exposure Margin
     *
     * @return self
     */
    public function setFnoExpMrg($fnoExpMrg)
    {
        $this->container['fnoExpMrg'] = $fnoExpMrg;

        return $this;
    }

    /**
     * Gets spnExpMrg
     *
     * @return string|null
     */
    public function getSpnExpMrg()
    {
        return $this->container['spnExpMrg'];
    }

    /**
     * Sets spnExpMrg
     *
     * @param string|null $spnExpMrg Spand and Exposure Margin
     *
     * @return self
     */
    public function setSpnExpMrg($spnExpMrg)
    {
        $this->container['spnExpMrg'] = $spnExpMrg;

        return $this;
    }

    /**
     * Gets prmPdRcd
     *
     * @return string|null
     */
    public function getPrmPdRcd()
    {
        return $this->container['prmPdRcd'];
    }

    /**
     * Sets prmPdRcd
     *
     * @param string|null $prmPdRcd Premium Paid (+) / Received (-)
     *
     * @return self
     */
    public function setPrmPdRcd($prmPdRcd)
    {
        $this->container['prmPdRcd'] = $prmPdRcd;

        return $this;
    }

    /**
     * Gets rlPnl
     *
     * @return string|null
     */
    public function getRlPnl()
    {
        return $this->container['rlPnl'];
    }

    /**
     * Sets rlPnl
     *
     * @param string|null $rlPnl Realized PnL Value
     *
     * @return self
     */
    public function setRlPnl($rlPnl)
    {
        $this->container['rlPnl'] = $rlPnl;

        return $this;
    }

    /**
     * Gets unRlMtm
     *
     * @return string|null
     */
    public function getUnRlMtm()
    {
        return $this->container['unRlMtm'];
    }

    /**
     * Sets unRlMtm
     *
     * @param string|null $unRlMtm Unrealized Mark to Market
     *
     * @return self
     */
    public function setUnRlMtm($unRlMtm)
    {
        $this->container['unRlMtm'] = $unRlMtm;

        return $this;
    }

    /**
     * Gets mf
     *
     * @return string|null
     */
    public function getMf()
    {
        return $this->container['mf'];
    }

    /**
     * Sets mf
     *
     * @param string|null $mf Mutual Funds
     *
     * @return self
     */
    public function setMf($mf)
    {
        $this->container['mf'] = $mf;

        return $this;
    }

    /**
     * Gets ipoAmt
     *
     * @return string|null
     */
    public function getIpoAmt()
    {
        return $this->container['ipoAmt'];
    }

    /**
     * Sets ipoAmt
     *
     * @param string|null $ipoAmt IPO / Bonds / NCDs / ETC..
     *
     * @return self
     */
    public function setIpoAmt($ipoAmt)
    {
        $this->container['ipoAmt'] = $ipoAmt;

        return $this;
    }

    /**
     * Gets fndWthdrwn
     *
     * @return string|null
     */
    public function getFndWthdrwn()
    {
        return $this->container['fndWthdrwn'];
    }

    /**
     * Sets fndWthdrwn
     *
     * @param string|null $fndWthdrwn Funds Withdrawn
     *
     * @return self
     */
    public function setFndWthdrwn($fndWthdrwn)
    {
        $this->container['fndWthdrwn'] = $fndWthdrwn;

        return $this;
    }

    /**
     * Gets ttpv
     *
     * @return string|null
     */
    public function getTtpv()
    {
        return $this->container['ttpv'];
    }

    /**
     * Sets ttpv
     *
     * @param string|null $ttpv Total Third party value
     *
     * @return self
     */
    public function setTtpv($ttpv)
    {
        $this->container['ttpv'] = $ttpv;

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


