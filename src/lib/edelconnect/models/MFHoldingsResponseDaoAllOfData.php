<?php
/**
 * MFHoldingsResponseDaoAllOfData
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
 * MFHoldingsResponseDaoAllOfData Class Doc Comment
 *
 * @category Class
 * @package  com\edel
 * @author   Edelweiss
 * @link     https://www.edelweiss.in
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MFHoldingsResponseDaoAllOfData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelName = 'MFHoldingsResponseDao_allOf_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'mfHdgUsable' => '\com\edel\edelconnect\models\MFSSHoldingsObject[]',
        'usableHld' => 'string',
        'nonUsable' => '\com\edel\edelconnect\models\ELSSReportIndividualHoldings[]',
        'nonUsableHld' => 'string',
        'mfHV' => 'string'
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
        'mfHdgUsable' => null,
        'usableHld' => null,
        'nonUsable' => null,
        'nonUsableHld' => null,
        'mfHV' => null
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
        'mfHdgUsable' => 'mfHdgUsable',
        'usableHld' => 'usableHld',
        'nonUsable' => 'nonUsable',
        'nonUsableHld' => 'nonUsableHld',
        'mfHV' => 'mfHV'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'mfHdgUsable' => 'setMfHdgUsable',
        'usableHld' => 'setUsableHld',
        'nonUsable' => 'setNonUsable',
        'nonUsableHld' => 'setNonUsableHld',
        'mfHV' => 'setMfHV'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'mfHdgUsable' => 'getMfHdgUsable',
        'usableHld' => 'getUsableHld',
        'nonUsable' => 'getNonUsable',
        'nonUsableHld' => 'getNonUsableHld',
        'mfHV' => 'getMfHV'
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
        $this->container['mfHdgUsable'] = $data['mfHdgUsable'] ?? null;
        $this->container['usableHld'] = $data['usableHld'] ?? null;
        $this->container['nonUsable'] = $data['nonUsable'] ?? null;
        $this->container['nonUsableHld'] = $data['nonUsableHld'] ?? null;
        $this->container['mfHV'] = $data['mfHV'] ?? null;
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
     * Gets mfHdgUsable
     *
     * @return \com\edel\edelconnect\models\MFSSHoldingsObject[]|null
     */
    public function getMfHdgUsable()
    {
        return $this->container['mfHdgUsable'];
    }

    /**
     * Sets mfHdgUsable
     *
     * @param \com\edel\edelconnect\models\MFSSHoldingsObject[]|null $mfHdgUsable List of Usable holdings
     *
     * @return self
     */
    public function setMfHdgUsable($mfHdgUsable)
    {
        $this->container['mfHdgUsable'] = $mfHdgUsable;

        return $this;
    }

    /**
     * Gets usableHld
     *
     * @return string|null
     */
    public function getUsableHld()
    {
        return $this->container['usableHld'];
    }

    /**
     * Sets usableHld
     *
     * @param string|null $usableHld Total holding value of usable holdings
     *
     * @return self
     */
    public function setUsableHld($usableHld)
    {
        $this->container['usableHld'] = $usableHld;

        return $this;
    }

    /**
     * Gets nonUsable
     *
     * @return \com\edel\edelconnect\models\ELSSReportIndividualHoldings[]|null
     */
    public function getNonUsable()
    {
        return $this->container['nonUsable'];
    }

    /**
     * Sets nonUsable
     *
     * @param \com\edel\edelconnect\models\ELSSReportIndividualHoldings[]|null $nonUsable List of Non Usable holdings
     *
     * @return self
     */
    public function setNonUsable($nonUsable)
    {
        $this->container['nonUsable'] = $nonUsable;

        return $this;
    }

    /**
     * Gets nonUsableHld
     *
     * @return string|null
     */
    public function getNonUsableHld()
    {
        return $this->container['nonUsableHld'];
    }

    /**
     * Sets nonUsableHld
     *
     * @param string|null $nonUsableHld Total non usable holdings
     *
     * @return self
     */
    public function setNonUsableHld($nonUsableHld)
    {
        $this->container['nonUsableHld'] = $nonUsableHld;

        return $this;
    }

    /**
     * Gets mfHV
     *
     * @return string|null
     */
    public function getMfHV()
    {
        return $this->container['mfHV'];
    }

    /**
     * Sets mfHV
     *
     * @param string|null $mfHV Total mf holdings value
     *
     * @return self
     */
    public function setMfHV($mfHV)
    {
        $this->container['mfHV'] = $mfHV;

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


