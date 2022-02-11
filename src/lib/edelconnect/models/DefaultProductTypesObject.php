<?php
/**
 * DefaultProductTypesObject
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
 * DefaultProductTypesObject Class Doc Comment
 *
 * @category Class
 * @package  com\edel
 * @author   Edelweiss
 * @link     https://www.edelweiss.in
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DefaultProductTypesObject implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelName = 'DefaultProductTypesObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'nse' => '\com\edel\edelconnect\models\BuySellObject',
        'bse' => '\com\edel\edelconnect\models\BuySellObject',
        'nfo' => '\com\edel\edelconnect\models\BuySellObject',
        'bfo' => '\com\edel\edelconnect\models\BuySellObject',
        'cds' => '\com\edel\edelconnect\models\BuySellObject',
        'mcx' => '\com\edel\edelconnect\models\BuySellObject',
        'ncdex' => '\com\edel\edelconnect\models\BuySellObject'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'nse' => null,
        'bse' => null,
        'nfo' => null,
        'bfo' => null,
        'cds' => null,
        'mcx' => null,
        'ncdex' => null
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
        'nse' => 'nse',
        'bse' => 'bse',
        'nfo' => 'nfo',
        'bfo' => 'bfo',
        'cds' => 'cds',
        'mcx' => 'mcx',
        'ncdex' => 'ncdex'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'nse' => 'setNse',
        'bse' => 'setBse',
        'nfo' => 'setNfo',
        'bfo' => 'setBfo',
        'cds' => 'setCds',
        'mcx' => 'setMcx',
        'ncdex' => 'setNcdex'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'nse' => 'getNse',
        'bse' => 'getBse',
        'nfo' => 'getNfo',
        'bfo' => 'getBfo',
        'cds' => 'getCds',
        'mcx' => 'getMcx',
        'ncdex' => 'getNcdex'
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
        $this->container['nse'] = $data['nse'] ?? null;
        $this->container['bse'] = $data['bse'] ?? null;
        $this->container['nfo'] = $data['nfo'] ?? null;
        $this->container['bfo'] = $data['bfo'] ?? null;
        $this->container['cds'] = $data['cds'] ?? null;
        $this->container['mcx'] = $data['mcx'] ?? null;
        $this->container['ncdex'] = $data['ncdex'] ?? null;
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
     * Gets nse
     *
     * @return \com\edel\edelconnect\models\BuySellObject|null
     */
    public function getNse()
    {
        return $this->container['nse'];
    }

    /**
     * Sets nse
     *
     * @param \com\edel\edelconnect\models\BuySellObject|null $nse nse
     *
     * @return self
     */
    public function setNse($nse)
    {
        $this->container['nse'] = $nse;

        return $this;
    }

    /**
     * Gets bse
     *
     * @return \com\edel\edelconnect\models\BuySellObject|null
     */
    public function getBse()
    {
        return $this->container['bse'];
    }

    /**
     * Sets bse
     *
     * @param \com\edel\edelconnect\models\BuySellObject|null $bse bse
     *
     * @return self
     */
    public function setBse($bse)
    {
        $this->container['bse'] = $bse;

        return $this;
    }

    /**
     * Gets nfo
     *
     * @return \com\edel\edelconnect\models\BuySellObject|null
     */
    public function getNfo()
    {
        return $this->container['nfo'];
    }

    /**
     * Sets nfo
     *
     * @param \com\edel\edelconnect\models\BuySellObject|null $nfo nfo
     *
     * @return self
     */
    public function setNfo($nfo)
    {
        $this->container['nfo'] = $nfo;

        return $this;
    }

    /**
     * Gets bfo
     *
     * @return \com\edel\edelconnect\models\BuySellObject|null
     */
    public function getBfo()
    {
        return $this->container['bfo'];
    }

    /**
     * Sets bfo
     *
     * @param \com\edel\edelconnect\models\BuySellObject|null $bfo bfo
     *
     * @return self
     */
    public function setBfo($bfo)
    {
        $this->container['bfo'] = $bfo;

        return $this;
    }

    /**
     * Gets cds
     *
     * @return \com\edel\edelconnect\models\BuySellObject|null
     */
    public function getCds()
    {
        return $this->container['cds'];
    }

    /**
     * Sets cds
     *
     * @param \com\edel\edelconnect\models\BuySellObject|null $cds cds
     *
     * @return self
     */
    public function setCds($cds)
    {
        $this->container['cds'] = $cds;

        return $this;
    }

    /**
     * Gets mcx
     *
     * @return \com\edel\edelconnect\models\BuySellObject|null
     */
    public function getMcx()
    {
        return $this->container['mcx'];
    }

    /**
     * Sets mcx
     *
     * @param \com\edel\edelconnect\models\BuySellObject|null $mcx mcx
     *
     * @return self
     */
    public function setMcx($mcx)
    {
        $this->container['mcx'] = $mcx;

        return $this;
    }

    /**
     * Gets ncdex
     *
     * @return \com\edel\edelconnect\models\BuySellObject|null
     */
    public function getNcdex()
    {
        return $this->container['ncdex'];
    }

    /**
     * Sets ncdex
     *
     * @param \com\edel\edelconnect\models\BuySellObject|null $ncdex ncdex
     *
     * @return self
     */
    public function setNcdex($ncdex)
    {
        $this->container['ncdex'] = $ncdex;

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


