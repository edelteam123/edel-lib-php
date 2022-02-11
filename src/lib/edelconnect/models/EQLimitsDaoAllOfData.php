<?php
/**
 * EQLimitsDaoAllOfData
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
 * EQLimitsDaoAllOfData Class Doc Comment
 *
 * @category Class
 * @package  com\edel
 * @author   Edelweiss
 * @link     https://www.edelweiss.in
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EQLimitsDaoAllOfData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelName = 'EQLimitsDao_allOf_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'cshAvl' => 'string',
        'mtmMg' => 'string',
        'nvl' => 'string',
        'nvlPer' => 'string',
        'exp' => 'string',
        'srtFall' => '\com\edel\edelconnect\models\ShortFallDao',
        'mrgAvl' => '\com\edel\edelconnect\models\MarginAvailableDao',
        'mrgUtd' => '\com\edel\edelconnect\models\MarginUtilized',
        'unPstdChrgs' => '\com\edel\edelconnect\models\UnpostedObject'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'cshAvl' => null,
        'mtmMg' => null,
        'nvl' => null,
        'nvlPer' => null,
        'exp' => null,
        'srtFall' => null,
        'mrgAvl' => null,
        'mrgUtd' => null,
        'unPstdChrgs' => null
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
        'type' => 'type',
        'cshAvl' => 'cshAvl',
        'mtmMg' => 'mtmMg',
        'nvl' => 'nvl',
        'nvlPer' => 'nvlPer',
        'exp' => 'exp',
        'srtFall' => 'srtFall',
        'mrgAvl' => 'mrgAvl',
        'mrgUtd' => 'mrgUtd',
        'unPstdChrgs' => 'unPstdChrgs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'cshAvl' => 'setCshAvl',
        'mtmMg' => 'setMtmMg',
        'nvl' => 'setNvl',
        'nvlPer' => 'setNvlPer',
        'exp' => 'setExp',
        'srtFall' => 'setSrtFall',
        'mrgAvl' => 'setMrgAvl',
        'mrgUtd' => 'setMrgUtd',
        'unPstdChrgs' => 'setUnPstdChrgs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'cshAvl' => 'getCshAvl',
        'mtmMg' => 'getMtmMg',
        'nvl' => 'getNvl',
        'nvlPer' => 'getNvlPer',
        'exp' => 'getExp',
        'srtFall' => 'getSrtFall',
        'mrgAvl' => 'getMrgAvl',
        'mrgUtd' => 'getMrgUtd',
        'unPstdChrgs' => 'getUnPstdChrgs'
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
        $this->container['type'] = $data['type'] ?? null;
        $this->container['cshAvl'] = $data['cshAvl'] ?? null;
        $this->container['mtmMg'] = $data['mtmMg'] ?? null;
        $this->container['nvl'] = $data['nvl'] ?? null;
        $this->container['nvlPer'] = $data['nvlPer'] ?? null;
        $this->container['exp'] = $data['exp'] ?? null;
        $this->container['srtFall'] = $data['srtFall'] ?? null;
        $this->container['mrgAvl'] = $data['mrgAvl'] ?? null;
        $this->container['mrgUtd'] = $data['mrgUtd'] ?? null;
        $this->container['unPstdChrgs'] = $data['unPstdChrgs'] ?? null;
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
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets cshAvl
     *
     * @return string|null
     */
    public function getCshAvl()
    {
        return $this->container['cshAvl'];
    }

    /**
     * Sets cshAvl
     *
     * @param string|null $cshAvl Cash available
     *
     * @return self
     */
    public function setCshAvl($cshAvl)
    {
        $this->container['cshAvl'] = $cshAvl;

        return $this;
    }

    /**
     * Gets mtmMg
     *
     * @return string|null
     */
    public function getMtmMg()
    {
        return $this->container['mtmMg'];
    }

    /**
     * Sets mtmMg
     *
     * @param string|null $mtmMg MtoM Margin
     *
     * @return self
     */
    public function setMtmMg($mtmMg)
    {
        $this->container['mtmMg'] = $mtmMg;

        return $this;
    }

    /**
     * Gets nvl
     *
     * @return string|null
     */
    public function getNvl()
    {
        return $this->container['nvl'];
    }

    /**
     * Sets nvl
     *
     * @param string|null $nvl nvl value
     *
     * @return self
     */
    public function setNvl($nvl)
    {
        $this->container['nvl'] = $nvl;

        return $this;
    }

    /**
     * Gets nvlPer
     *
     * @return string|null
     */
    public function getNvlPer()
    {
        return $this->container['nvlPer'];
    }

    /**
     * Sets nvlPer
     *
     * @param string|null $nvlPer nvl Percentage
     *
     * @return self
     */
    public function setNvlPer($nvlPer)
    {
        $this->container['nvlPer'] = $nvlPer;

        return $this;
    }

    /**
     * Gets exp
     *
     * @return string|null
     */
    public function getExp()
    {
        return $this->container['exp'];
    }

    /**
     * Sets exp
     *
     * @param string|null $exp Exposure
     *
     * @return self
     */
    public function setExp($exp)
    {
        $this->container['exp'] = $exp;

        return $this;
    }

    /**
     * Gets srtFall
     *
     * @return \com\edel\edelconnect\models\ShortFallDao|null
     */
    public function getSrtFall()
    {
        return $this->container['srtFall'];
    }

    /**
     * Sets srtFall
     *
     * @param \com\edel\edelconnect\models\ShortFallDao|null $srtFall srtFall
     *
     * @return self
     */
    public function setSrtFall($srtFall)
    {
        $this->container['srtFall'] = $srtFall;

        return $this;
    }

    /**
     * Gets mrgAvl
     *
     * @return \com\edel\edelconnect\models\MarginAvailableDao|null
     */
    public function getMrgAvl()
    {
        return $this->container['mrgAvl'];
    }

    /**
     * Sets mrgAvl
     *
     * @param \com\edel\edelconnect\models\MarginAvailableDao|null $mrgAvl mrgAvl
     *
     * @return self
     */
    public function setMrgAvl($mrgAvl)
    {
        $this->container['mrgAvl'] = $mrgAvl;

        return $this;
    }

    /**
     * Gets mrgUtd
     *
     * @return \com\edel\edelconnect\models\MarginUtilized|null
     */
    public function getMrgUtd()
    {
        return $this->container['mrgUtd'];
    }

    /**
     * Sets mrgUtd
     *
     * @param \com\edel\edelconnect\models\MarginUtilized|null $mrgUtd mrgUtd
     *
     * @return self
     */
    public function setMrgUtd($mrgUtd)
    {
        $this->container['mrgUtd'] = $mrgUtd;

        return $this;
    }

    /**
     * Gets unPstdChrgs
     *
     * @return \com\edel\edelconnect\models\UnpostedObject|null
     */
    public function getUnPstdChrgs()
    {
        return $this->container['unPstdChrgs'];
    }

    /**
     * Sets unPstdChrgs
     *
     * @param \com\edel\edelconnect\models\UnpostedObject|null $unPstdChrgs unPstdChrgs
     *
     * @return self
     */
    public function setUnPstdChrgs($unPstdChrgs)
    {
        $this->container['unPstdChrgs'] = $unPstdChrgs;

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


