<?php
/**
 * NetPositionsDaoAllOfData
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
 * NetPositionsDaoAllOfData Class Doc Comment
 *
 * @category Class
 * @package  com\edel
 * @author   Edelweiss
 * @link     https://www.edelweiss.in
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class NetPositionsDaoAllOfData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelName = 'NetPositionsDao_allOf_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'pos' => '\com\edel\edelconnect\models\NetPositionsObject[]',
        'ntMTM' => 'string',
        'tdyMtm' => 'string',
        'urlMtm' => 'string',
        'npos' => 'string',
        'opn' => 'string',
        'cls' => 'string'
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
        'pos' => null,
        'ntMTM' => null,
        'tdyMtm' => null,
        'urlMtm' => null,
        'npos' => null,
        'opn' => null,
        'cls' => null
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
        'pos' => 'pos',
        'ntMTM' => 'ntMTM',
        'tdyMtm' => 'tdyMtm',
        'urlMtm' => 'urlMtm',
        'npos' => 'npos',
        'opn' => 'opn',
        'cls' => 'cls'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'pos' => 'setPos',
        'ntMTM' => 'setNtMTM',
        'tdyMtm' => 'setTdyMtm',
        'urlMtm' => 'setUrlMtm',
        'npos' => 'setNpos',
        'opn' => 'setOpn',
        'cls' => 'setCls'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'pos' => 'getPos',
        'ntMTM' => 'getNtMTM',
        'tdyMtm' => 'getTdyMtm',
        'urlMtm' => 'getUrlMtm',
        'npos' => 'getNpos',
        'opn' => 'getOpn',
        'cls' => 'getCls'
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
        $this->container['pos'] = $data['pos'] ?? null;
        $this->container['ntMTM'] = $data['ntMTM'] ?? null;
        $this->container['tdyMtm'] = $data['tdyMtm'] ?? null;
        $this->container['urlMtm'] = $data['urlMtm'] ?? null;
        $this->container['npos'] = $data['npos'] ?? null;
        $this->container['opn'] = $data['opn'] ?? null;
        $this->container['cls'] = $data['cls'] ?? null;
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
     * Gets pos
     *
     * @return \com\edel\edelconnect\models\NetPositionsObject[]|null
     */
    public function getPos()
    {
        return $this->container['pos'];
    }

    /**
     * Sets pos
     *
     * @param \com\edel\edelconnect\models\NetPositionsObject[]|null $pos pos
     *
     * @return self
     */
    public function setPos($pos)
    {
        $this->container['pos'] = $pos;

        return $this;
    }

    /**
     * Gets ntMTM
     *
     * @return string|null
     */
    public function getNtMTM()
    {
        return $this->container['ntMTM'];
    }

    /**
     * Sets ntMTM
     *
     * @param string|null $ntMTM ntMTM
     *
     * @return self
     */
    public function setNtMTM($ntMTM)
    {
        $this->container['ntMTM'] = $ntMTM;

        return $this;
    }

    /**
     * Gets tdyMtm
     *
     * @return string|null
     */
    public function getTdyMtm()
    {
        return $this->container['tdyMtm'];
    }

    /**
     * Sets tdyMtm
     *
     * @param string|null $tdyMtm tdyMtm
     *
     * @return self
     */
    public function setTdyMtm($tdyMtm)
    {
        $this->container['tdyMtm'] = $tdyMtm;

        return $this;
    }

    /**
     * Gets urlMtm
     *
     * @return string|null
     */
    public function getUrlMtm()
    {
        return $this->container['urlMtm'];
    }

    /**
     * Sets urlMtm
     *
     * @param string|null $urlMtm urlMtm
     *
     * @return self
     */
    public function setUrlMtm($urlMtm)
    {
        $this->container['urlMtm'] = $urlMtm;

        return $this;
    }

    /**
     * Gets npos
     *
     * @return string|null
     */
    public function getNpos()
    {
        return $this->container['npos'];
    }

    /**
     * Sets npos
     *
     * @param string|null $npos npos
     *
     * @return self
     */
    public function setNpos($npos)
    {
        $this->container['npos'] = $npos;

        return $this;
    }

    /**
     * Gets opn
     *
     * @return string|null
     */
    public function getOpn()
    {
        return $this->container['opn'];
    }

    /**
     * Sets opn
     *
     * @param string|null $opn opn
     *
     * @return self
     */
    public function setOpn($opn)
    {
        $this->container['opn'] = $opn;

        return $this;
    }

    /**
     * Gets cls
     *
     * @return string|null
     */
    public function getCls()
    {
        return $this->container['cls'];
    }

    /**
     * Sets cls
     *
     * @param string|null $cls cls
     *
     * @return self
     */
    public function setCls($cls)
    {
        $this->container['cls'] = $cls;

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


