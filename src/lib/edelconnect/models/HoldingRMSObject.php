<?php
/**
 * HoldingRMSObject
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
 * HoldingRMSObject Class Doc Comment
 *
 * @category Class
 * @package  com\edel
 * @author   Edelweiss
 * @link     https://www.edelweiss.in
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class HoldingRMSObject implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelName = 'HoldingRMSObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'td' => 'string',
        'hdgVl' => 'string',
        'clUQty' => 'string',
        'hdgUQty' => 'string',
        'usdQty' => 'string',
        't1HQty' => 'string',
        'clQty' => 'string',
        'qty' => 'string',
        'pdQty' => 'string',
        'pdCnt' => 'string',
        'sym' => 'string',
        'totQty' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'td' => null,
        'hdgVl' => null,
        'clUQty' => null,
        'hdgUQty' => null,
        'usdQty' => null,
        't1HQty' => null,
        'clQty' => null,
        'qty' => null,
        'pdQty' => null,
        'pdCnt' => null,
        'sym' => null,
        'totQty' => null
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
        'td' => 'td',
        'hdgVl' => 'hdgVl',
        'clUQty' => 'clUQty',
        'hdgUQty' => 'hdgUQty',
        'usdQty' => 'usdQty',
        't1HQty' => 't1HQty',
        'clQty' => 'clQty',
        'qty' => 'qty',
        'pdQty' => 'pdQty',
        'pdCnt' => 'pdCnt',
        'sym' => 'sym',
        'totQty' => 'totQty'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'td' => 'setTd',
        'hdgVl' => 'setHdgVl',
        'clUQty' => 'setClUQty',
        'hdgUQty' => 'setHdgUQty',
        'usdQty' => 'setUsdQty',
        't1HQty' => 'setT1HQty',
        'clQty' => 'setClQty',
        'qty' => 'setQty',
        'pdQty' => 'setPdQty',
        'pdCnt' => 'setPdCnt',
        'sym' => 'setSym',
        'totQty' => 'setTotQty'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'td' => 'getTd',
        'hdgVl' => 'getHdgVl',
        'clUQty' => 'getClUQty',
        'hdgUQty' => 'getHdgUQty',
        'usdQty' => 'getUsdQty',
        't1HQty' => 'getT1HQty',
        'clQty' => 'getClQty',
        'qty' => 'getQty',
        'pdQty' => 'getPdQty',
        'pdCnt' => 'getPdCnt',
        'sym' => 'getSym',
        'totQty' => 'getTotQty'
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
        $this->container['td'] = $data['td'] ?? null;
        $this->container['hdgVl'] = $data['hdgVl'] ?? null;
        $this->container['clUQty'] = $data['clUQty'] ?? null;
        $this->container['hdgUQty'] = $data['hdgUQty'] ?? null;
        $this->container['usdQty'] = $data['usdQty'] ?? null;
        $this->container['t1HQty'] = $data['t1HQty'] ?? null;
        $this->container['clQty'] = $data['clQty'] ?? null;
        $this->container['qty'] = $data['qty'] ?? null;
        $this->container['pdQty'] = $data['pdQty'] ?? null;
        $this->container['pdCnt'] = $data['pdCnt'] ?? null;
        $this->container['sym'] = $data['sym'] ?? null;
        $this->container['totQty'] = $data['totQty'] ?? null;
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
     * Gets td
     *
     * @return string|null
     */
    public function getTd()
    {
        return $this->container['td'];
    }

    /**
     * Sets td
     *
     * @param string|null $td td
     *
     * @return self
     */
    public function setTd($td)
    {
        $this->container['td'] = $td;

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
     * Gets clUQty
     *
     * @return string|null
     */
    public function getClUQty()
    {
        return $this->container['clUQty'];
    }

    /**
     * Sets clUQty
     *
     * @param string|null $clUQty clUQty
     *
     * @return self
     */
    public function setClUQty($clUQty)
    {
        $this->container['clUQty'] = $clUQty;

        return $this;
    }

    /**
     * Gets hdgUQty
     *
     * @return string|null
     */
    public function getHdgUQty()
    {
        return $this->container['hdgUQty'];
    }

    /**
     * Sets hdgUQty
     *
     * @param string|null $hdgUQty hdgUQty
     *
     * @return self
     */
    public function setHdgUQty($hdgUQty)
    {
        $this->container['hdgUQty'] = $hdgUQty;

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
     * Gets t1HQty
     *
     * @return string|null
     */
    public function getT1HQty()
    {
        return $this->container['t1HQty'];
    }

    /**
     * Sets t1HQty
     *
     * @param string|null $t1HQty t1HQty
     *
     * @return self
     */
    public function setT1HQty($t1HQty)
    {
        $this->container['t1HQty'] = $t1HQty;

        return $this;
    }

    /**
     * Gets clQty
     *
     * @return string|null
     */
    public function getClQty()
    {
        return $this->container['clQty'];
    }

    /**
     * Sets clQty
     *
     * @param string|null $clQty clQty
     *
     * @return self
     */
    public function setClQty($clQty)
    {
        $this->container['clQty'] = $clQty;

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
     * Gets pdQty
     *
     * @return string|null
     */
    public function getPdQty()
    {
        return $this->container['pdQty'];
    }

    /**
     * Sets pdQty
     *
     * @param string|null $pdQty pdQty
     *
     * @return self
     */
    public function setPdQty($pdQty)
    {
        $this->container['pdQty'] = $pdQty;

        return $this;
    }

    /**
     * Gets pdCnt
     *
     * @return string|null
     */
    public function getPdCnt()
    {
        return $this->container['pdCnt'];
    }

    /**
     * Sets pdCnt
     *
     * @param string|null $pdCnt pdCnt
     *
     * @return self
     */
    public function setPdCnt($pdCnt)
    {
        $this->container['pdCnt'] = $pdCnt;

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
     * Gets totQty
     *
     * @return string|null
     */
    public function getTotQty()
    {
        return $this->container['totQty'];
    }

    /**
     * Sets totQty
     *
     * @param string|null $totQty totQty
     *
     * @return self
     */
    public function setTotQty($totQty)
    {
        $this->container['totQty'] = $totQty;

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


