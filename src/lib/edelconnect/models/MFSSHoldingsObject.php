<?php
/**
 * MFSSHoldingsObject
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
 * MFSSHoldingsObject Class Doc Comment
 *
 * @category Class
 * @package  com\edel
 * @author   Edelweiss
 * @link     https://www.edelweiss.in
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MFSSHoldingsObject implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelName = 'MFSSHoldingsObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'nav' => 'string',
        'hdgVl' => 'string',
        'scName' => 'string',
        'sym' => 'string',
        'isin' => 'string',
        'srs' => 'string',
        'symName' => 'string',
        'usdQty' => 'string',
        'ct' => 'string',
        'prdCode' => 'string',
        'amc' => 'string',
        'hdgQty' => 'string',
        'trdSym' => 'string',
        'folioID' => 'string',
        'units' => 'double',
        'amount' => 'double',
        'mode' => 'string',
        'physHldQty' => '\com\edel\edelconnect\models\PhysicalHoldingsQty[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'nav' => null,
        'hdgVl' => null,
        'scName' => null,
        'sym' => null,
        'isin' => null,
        'srs' => null,
        'symName' => null,
        'usdQty' => null,
        'ct' => null,
        'prdCode' => null,
        'amc' => null,
        'hdgQty' => null,
        'trdSym' => null,
        'folioID' => null,
        'units' => 'double',
        'amount' => 'double',
        'mode' => null,
        'physHldQty' => null
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
        'nav' => 'nav',
        'hdgVl' => 'hdgVl',
        'scName' => 'scName',
        'sym' => 'sym',
        'isin' => 'isin',
        'srs' => 'srs',
        'symName' => 'symName',
        'usdQty' => 'usdQty',
        'ct' => 'ct',
        'prdCode' => 'prdCode',
        'amc' => 'amc',
        'hdgQty' => 'hdgQty',
        'trdSym' => 'trdSym',
        'folioID' => 'folioID',
        'units' => 'units',
        'amount' => 'amount',
        'mode' => 'mode',
        'physHldQty' => 'physHldQty'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'nav' => 'setNav',
        'hdgVl' => 'setHdgVl',
        'scName' => 'setScName',
        'sym' => 'setSym',
        'isin' => 'setIsin',
        'srs' => 'setSrs',
        'symName' => 'setSymName',
        'usdQty' => 'setUsdQty',
        'ct' => 'setCt',
        'prdCode' => 'setPrdCode',
        'amc' => 'setAmc',
        'hdgQty' => 'setHdgQty',
        'trdSym' => 'setTrdSym',
        'folioID' => 'setFolioID',
        'units' => 'setUnits',
        'amount' => 'setAmount',
        'mode' => 'setMode',
        'physHldQty' => 'setPhysHldQty'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'nav' => 'getNav',
        'hdgVl' => 'getHdgVl',
        'scName' => 'getScName',
        'sym' => 'getSym',
        'isin' => 'getIsin',
        'srs' => 'getSrs',
        'symName' => 'getSymName',
        'usdQty' => 'getUsdQty',
        'ct' => 'getCt',
        'prdCode' => 'getPrdCode',
        'amc' => 'getAmc',
        'hdgQty' => 'getHdgQty',
        'trdSym' => 'getTrdSym',
        'folioID' => 'getFolioID',
        'units' => 'getUnits',
        'amount' => 'getAmount',
        'mode' => 'getMode',
        'physHldQty' => 'getPhysHldQty'
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
        $this->container['nav'] = $data['nav'] ?? null;
        $this->container['hdgVl'] = $data['hdgVl'] ?? null;
        $this->container['scName'] = $data['scName'] ?? null;
        $this->container['sym'] = $data['sym'] ?? null;
        $this->container['isin'] = $data['isin'] ?? null;
        $this->container['srs'] = $data['srs'] ?? null;
        $this->container['symName'] = $data['symName'] ?? null;
        $this->container['usdQty'] = $data['usdQty'] ?? null;
        $this->container['ct'] = $data['ct'] ?? null;
        $this->container['prdCode'] = $data['prdCode'] ?? null;
        $this->container['amc'] = $data['amc'] ?? null;
        $this->container['hdgQty'] = $data['hdgQty'] ?? null;
        $this->container['trdSym'] = $data['trdSym'] ?? null;
        $this->container['folioID'] = $data['folioID'] ?? null;
        $this->container['units'] = $data['units'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['mode'] = $data['mode'] ?? null;
        $this->container['physHldQty'] = $data['physHldQty'] ?? null;
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
     * Gets nav
     *
     * @return string|null
     */
    public function getNav()
    {
        return $this->container['nav'];
    }

    /**
     * Sets nav
     *
     * @param string|null $nav nav
     *
     * @return self
     */
    public function setNav($nav)
    {
        $this->container['nav'] = $nav;

        return $this;
    }

    /**
     * Gets hdgVl
     *
     * @return string|null
     */
    public function getHdgVl()
    {
        return $this->container['hdgVl'];
    }

    /**
     * Sets hdgVl
     *
     * @param string|null $hdgVl hdgVl
     *
     * @return self
     */
    public function setHdgVl($hdgVl)
    {
        $this->container['hdgVl'] = $hdgVl;

        return $this;
    }

    /**
     * Gets scName
     *
     * @return string|null
     */
    public function getScName()
    {
        return $this->container['scName'];
    }

    /**
     * Sets scName
     *
     * @param string|null $scName scName
     *
     * @return self
     */
    public function setScName($scName)
    {
        $this->container['scName'] = $scName;

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
     * Gets symName
     *
     * @return string|null
     */
    public function getSymName()
    {
        return $this->container['symName'];
    }

    /**
     * Sets symName
     *
     * @param string|null $symName symName
     *
     * @return self
     */
    public function setSymName($symName)
    {
        $this->container['symName'] = $symName;

        return $this;
    }

    /**
     * Gets usdQty
     *
     * @return string|null
     */
    public function getUsdQty()
    {
        return $this->container['usdQty'];
    }

    /**
     * Sets usdQty
     *
     * @param string|null $usdQty usdQty
     *
     * @return self
     */
    public function setUsdQty($usdQty)
    {
        $this->container['usdQty'] = $usdQty;

        return $this;
    }

    /**
     * Gets ct
     *
     * @return string|null
     */
    public function getCt()
    {
        return $this->container['ct'];
    }

    /**
     * Sets ct
     *
     * @param string|null $ct ct
     *
     * @return self
     */
    public function setCt($ct)
    {
        $this->container['ct'] = $ct;

        return $this;
    }

    /**
     * Gets prdCode
     *
     * @return string|null
     */
    public function getPrdCode()
    {
        return $this->container['prdCode'];
    }

    /**
     * Sets prdCode
     *
     * @param string|null $prdCode prdCode
     *
     * @return self
     */
    public function setPrdCode($prdCode)
    {
        $this->container['prdCode'] = $prdCode;

        return $this;
    }

    /**
     * Gets amc
     *
     * @return string|null
     */
    public function getAmc()
    {
        return $this->container['amc'];
    }

    /**
     * Sets amc
     *
     * @param string|null $amc amc
     *
     * @return self
     */
    public function setAmc($amc)
    {
        $this->container['amc'] = $amc;

        return $this;
    }

    /**
     * Gets hdgQty
     *
     * @return string|null
     */
    public function getHdgQty()
    {
        return $this->container['hdgQty'];
    }

    /**
     * Sets hdgQty
     *
     * @param string|null $hdgQty hdgQty
     *
     * @return self
     */
    public function setHdgQty($hdgQty)
    {
        $this->container['hdgQty'] = $hdgQty;

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
     * Gets folioID
     *
     * @return string|null
     */
    public function getFolioID()
    {
        return $this->container['folioID'];
    }

    /**
     * Sets folioID
     *
     * @param string|null $folioID folioID
     *
     * @return self
     */
    public function setFolioID($folioID)
    {
        $this->container['folioID'] = $folioID;

        return $this;
    }

    /**
     * Gets units
     *
     * @return double|null
     */
    public function getUnits()
    {
        return $this->container['units'];
    }

    /**
     * Sets units
     *
     * @param double|null $units units
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
     * @return double|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

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
     * Gets physHldQty
     *
     * @return \com\edel\edelconnect\models\PhysicalHoldingsQty[]|null
     */
    public function getPhysHldQty()
    {
        return $this->container['physHldQty'];
    }

    /**
     * Sets physHldQty
     *
     * @param \com\edel\edelconnect\models\PhysicalHoldingsQty[]|null $physHldQty Physical Holdings Quantity
     *
     * @return self
     */
    public function setPhysHldQty($physHldQty)
    {
        $this->container['physHldQty'] = $physHldQty;

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


