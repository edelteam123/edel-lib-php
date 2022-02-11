<?php
/**
 * ComRMSLimitsObject
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
 * ComRMSLimitsObject Class Doc Comment
 *
 * @category Class
 * @package  com\edel
 * @author   Edelweiss
 * @link     https://www.edelweiss.in
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ComRMSLimitsObject implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelName = 'ComRMSLimitsObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'lrB' => 'string',
        'colVal' => 'string',
        'piAmt' => 'string',
        'poAmt' => 'string',
        'lmAvl' => 'string',
        'mrUzd' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'lrB' => null,
        'colVal' => null,
        'piAmt' => null,
        'poAmt' => null,
        'lmAvl' => null,
        'mrUzd' => null
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
        'lrB' => 'lrB',
        'colVal' => 'colVal',
        'piAmt' => 'piAmt',
        'poAmt' => 'poAmt',
        'lmAvl' => 'lmAvl',
        'mrUzd' => 'mrUzd'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lrB' => 'setLrB',
        'colVal' => 'setColVal',
        'piAmt' => 'setPiAmt',
        'poAmt' => 'setPoAmt',
        'lmAvl' => 'setLmAvl',
        'mrUzd' => 'setMrUzd'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lrB' => 'getLrB',
        'colVal' => 'getColVal',
        'piAmt' => 'getPiAmt',
        'poAmt' => 'getPoAmt',
        'lmAvl' => 'getLmAvl',
        'mrUzd' => 'getMrUzd'
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
        $this->container['lrB'] = $data['lrB'] ?? null;
        $this->container['colVal'] = $data['colVal'] ?? null;
        $this->container['piAmt'] = $data['piAmt'] ?? null;
        $this->container['poAmt'] = $data['poAmt'] ?? null;
        $this->container['lmAvl'] = $data['lmAvl'] ?? null;
        $this->container['mrUzd'] = $data['mrUzd'] ?? null;
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
     * Gets lrB
     *
     * @return string|null
     */
    public function getLrB()
    {
        return $this->container['lrB'];
    }

    /**
     * Sets lrB
     *
     * @param string|null $lrB lrB
     *
     * @return self
     */
    public function setLrB($lrB)
    {
        $this->container['lrB'] = $lrB;

        return $this;
    }

    /**
     * Gets colVal
     *
     * @return string|null
     */
    public function getColVal()
    {
        return $this->container['colVal'];
    }

    /**
     * Sets colVal
     *
     * @param string|null $colVal colVal
     *
     * @return self
     */
    public function setColVal($colVal)
    {
        $this->container['colVal'] = $colVal;

        return $this;
    }

    /**
     * Gets piAmt
     *
     * @return string|null
     */
    public function getPiAmt()
    {
        return $this->container['piAmt'];
    }

    /**
     * Sets piAmt
     *
     * @param string|null $piAmt piAmt
     *
     * @return self
     */
    public function setPiAmt($piAmt)
    {
        $this->container['piAmt'] = $piAmt;

        return $this;
    }

    /**
     * Gets poAmt
     *
     * @return string|null
     */
    public function getPoAmt()
    {
        return $this->container['poAmt'];
    }

    /**
     * Sets poAmt
     *
     * @param string|null $poAmt poAmt
     *
     * @return self
     */
    public function setPoAmt($poAmt)
    {
        $this->container['poAmt'] = $poAmt;

        return $this;
    }

    /**
     * Gets lmAvl
     *
     * @return string|null
     */
    public function getLmAvl()
    {
        return $this->container['lmAvl'];
    }

    /**
     * Sets lmAvl
     *
     * @param string|null $lmAvl lmAvl
     *
     * @return self
     */
    public function setLmAvl($lmAvl)
    {
        $this->container['lmAvl'] = $lmAvl;

        return $this;
    }

    /**
     * Gets mrUzd
     *
     * @return string|null
     */
    public function getMrUzd()
    {
        return $this->container['mrUzd'];
    }

    /**
     * Sets mrUzd
     *
     * @param string|null $mrUzd mrUzd
     *
     * @return self
     */
    public function setMrUzd($mrUzd)
    {
        $this->container['mrUzd'] = $mrUzd;

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


