<?php
/**
 * MarginAvailableDao
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
 * MarginAvailableDao Class Doc Comment
 *
 * @category Class
 * @description Margin Available
 * @package  com\edel
 * @author   Edelweiss
 * @link     https://www.edelweiss.in
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MarginAvailableDao implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelName = 'MarginAvailableDao';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'mrgAvl' => 'string',
        'dayOpenBal' => 'string',
        'stkColVal' => 'string',
        'mfOthColVal' => 'string',
        'fndAdd' => 'string',
        'adMrg' => 'string',
        'notMrg' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'mrgAvl' => null,
        'dayOpenBal' => null,
        'stkColVal' => null,
        'mfOthColVal' => null,
        'fndAdd' => null,
        'adMrg' => null,
        'notMrg' => null
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
        'mrgAvl' => 'mrgAvl',
        'dayOpenBal' => 'dayOpenBal',
        'stkColVal' => 'stkColVal',
        'mfOthColVal' => 'mfOthColVal',
        'fndAdd' => 'fndAdd',
        'adMrg' => 'adMrg',
        'notMrg' => 'notMrg'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mrgAvl' => 'setMrgAvl',
        'dayOpenBal' => 'setDayOpenBal',
        'stkColVal' => 'setStkColVal',
        'mfOthColVal' => 'setMfOthColVal',
        'fndAdd' => 'setFndAdd',
        'adMrg' => 'setAdMrg',
        'notMrg' => 'setNotMrg'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mrgAvl' => 'getMrgAvl',
        'dayOpenBal' => 'getDayOpenBal',
        'stkColVal' => 'getStkColVal',
        'mfOthColVal' => 'getMfOthColVal',
        'fndAdd' => 'getFndAdd',
        'adMrg' => 'getAdMrg',
        'notMrg' => 'getNotMrg'
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
        $this->container['mrgAvl'] = $data['mrgAvl'] ?? null;
        $this->container['dayOpenBal'] = $data['dayOpenBal'] ?? null;
        $this->container['stkColVal'] = $data['stkColVal'] ?? null;
        $this->container['mfOthColVal'] = $data['mfOthColVal'] ?? null;
        $this->container['fndAdd'] = $data['fndAdd'] ?? null;
        $this->container['adMrg'] = $data['adMrg'] ?? null;
        $this->container['notMrg'] = $data['notMrg'] ?? null;
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
     * Gets mrgAvl
     *
     * @return string|null
     */
    public function getMrgAvl()
    {
        return $this->container['mrgAvl'];
    }

    /**
     * Sets mrgAvl
     *
     * @param string|null $mrgAvl Margin Available
     *
     * @return self
     */
    public function setMrgAvl($mrgAvl)
    {
        $this->container['mrgAvl'] = $mrgAvl;

        return $this;
    }

    /**
     * Gets dayOpenBal
     *
     * @return string|null
     */
    public function getDayOpenBal()
    {
        return $this->container['dayOpenBal'];
    }

    /**
     * Sets dayOpenBal
     *
     * @param string|null $dayOpenBal Day Opening Balance (Cash)
     *
     * @return self
     */
    public function setDayOpenBal($dayOpenBal)
    {
        $this->container['dayOpenBal'] = $dayOpenBal;

        return $this;
    }

    /**
     * Gets stkColVal
     *
     * @return string|null
     */
    public function getStkColVal()
    {
        return $this->container['stkColVal'];
    }

    /**
     * Sets stkColVal
     *
     * @param string|null $stkColVal Stocks Collateral Value
     *
     * @return self
     */
    public function setStkColVal($stkColVal)
    {
        $this->container['stkColVal'] = $stkColVal;

        return $this;
    }

    /**
     * Gets mfOthColVal
     *
     * @return string|null
     */
    public function getMfOthColVal()
    {
        return $this->container['mfOthColVal'];
    }

    /**
     * Sets mfOthColVal
     *
     * @param string|null $mfOthColVal MF with Other Collateral Value
     *
     * @return self
     */
    public function setMfOthColVal($mfOthColVal)
    {
        $this->container['mfOthColVal'] = $mfOthColVal;

        return $this;
    }

    /**
     * Gets fndAdd
     *
     * @return string|null
     */
    public function getFndAdd()
    {
        return $this->container['fndAdd'];
    }

    /**
     * Sets fndAdd
     *
     * @param string|null $fndAdd Funds Added
     *
     * @return self
     */
    public function setFndAdd($fndAdd)
    {
        $this->container['fndAdd'] = $fndAdd;

        return $this;
    }

    /**
     * Gets adMrg
     *
     * @return string|null
     */
    public function getAdMrg()
    {
        return $this->container['adMrg'];
    }

    /**
     * Sets adMrg
     *
     * @param string|null $adMrg Adhoc Margin
     *
     * @return self
     */
    public function setAdMrg($adMrg)
    {
        $this->container['adMrg'] = $adMrg;

        return $this;
    }

    /**
     * Gets notMrg
     *
     * @return string|null
     */
    public function getNotMrg()
    {
        return $this->container['notMrg'];
    }

    /**
     * Sets notMrg
     *
     * @param string|null $notMrg Notional Margin
     *
     * @return self
     */
    public function setNotMrg($notMrg)
    {
        $this->container['notMrg'] = $notMrg;

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


