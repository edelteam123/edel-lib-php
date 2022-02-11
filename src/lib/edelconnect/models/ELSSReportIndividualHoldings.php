<?php
/**
 * ELSSReportIndividualHoldings
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
 * ELSSReportIndividualHoldings Class Doc Comment
 *
 * @category Class
 * @package  com\edel
 * @author   Edelweiss
 * @link     https://www.edelweiss.in
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ELSSReportIndividualHoldings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelName = 'ELSSReportIndividualHoldings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'category' => 'string',
        'amc' => 'string',
        'companyName' => 'string',
        'pledgQty' => 'string',
        'lockedInQty' => 'string',
        'ltp' => 'string',
        'holdingValue' => 'string',
        'assetClass' => 'string',
        'isin' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'category' => null,
        'amc' => null,
        'companyName' => null,
        'pledgQty' => null,
        'lockedInQty' => null,
        'ltp' => null,
        'holdingValue' => null,
        'assetClass' => null,
        'isin' => null
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
        'category' => 'category',
        'amc' => 'amc',
        'companyName' => 'companyName',
        'pledgQty' => 'pledgQty',
        'lockedInQty' => 'lockedInQty',
        'ltp' => 'ltp',
        'holdingValue' => 'holdingValue',
        'assetClass' => 'assetClass',
        'isin' => 'isin'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'category' => 'setCategory',
        'amc' => 'setAmc',
        'companyName' => 'setCompanyName',
        'pledgQty' => 'setPledgQty',
        'lockedInQty' => 'setLockedInQty',
        'ltp' => 'setLtp',
        'holdingValue' => 'setHoldingValue',
        'assetClass' => 'setAssetClass',
        'isin' => 'setIsin'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'category' => 'getCategory',
        'amc' => 'getAmc',
        'companyName' => 'getCompanyName',
        'pledgQty' => 'getPledgQty',
        'lockedInQty' => 'getLockedInQty',
        'ltp' => 'getLtp',
        'holdingValue' => 'getHoldingValue',
        'assetClass' => 'getAssetClass',
        'isin' => 'getIsin'
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
        $this->container['category'] = $data['category'] ?? null;
        $this->container['amc'] = $data['amc'] ?? null;
        $this->container['companyName'] = $data['companyName'] ?? null;
        $this->container['pledgQty'] = $data['pledgQty'] ?? null;
        $this->container['lockedInQty'] = $data['lockedInQty'] ?? null;
        $this->container['ltp'] = $data['ltp'] ?? null;
        $this->container['holdingValue'] = $data['holdingValue'] ?? null;
        $this->container['assetClass'] = $data['assetClass'] ?? null;
        $this->container['isin'] = $data['isin'] ?? null;
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
     * Gets category
     *
     * @return string|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category category
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

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
     * Gets companyName
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->container['companyName'];
    }

    /**
     * Sets companyName
     *
     * @param string|null $companyName companyName
     *
     * @return self
     */
    public function setCompanyName($companyName)
    {
        $this->container['companyName'] = $companyName;

        return $this;
    }

    /**
     * Gets pledgQty
     *
     * @return string|null
     */
    public function getPledgQty()
    {
        return $this->container['pledgQty'];
    }

    /**
     * Sets pledgQty
     *
     * @param string|null $pledgQty pledgQty
     *
     * @return self
     */
    public function setPledgQty($pledgQty)
    {
        $this->container['pledgQty'] = $pledgQty;

        return $this;
    }

    /**
     * Gets lockedInQty
     *
     * @return string|null
     */
    public function getLockedInQty()
    {
        return $this->container['lockedInQty'];
    }

    /**
     * Sets lockedInQty
     *
     * @param string|null $lockedInQty lockedInQty
     *
     * @return self
     */
    public function setLockedInQty($lockedInQty)
    {
        $this->container['lockedInQty'] = $lockedInQty;

        return $this;
    }

    /**
     * Gets ltp
     *
     * @return string|null
     */
    public function getLtp()
    {
        return $this->container['ltp'];
    }

    /**
     * Sets ltp
     *
     * @param string|null $ltp ltp
     *
     * @return self
     */
    public function setLtp($ltp)
    {
        $this->container['ltp'] = $ltp;

        return $this;
    }

    /**
     * Gets holdingValue
     *
     * @return string|null
     */
    public function getHoldingValue()
    {
        return $this->container['holdingValue'];
    }

    /**
     * Sets holdingValue
     *
     * @param string|null $holdingValue holdingValue
     *
     * @return self
     */
    public function setHoldingValue($holdingValue)
    {
        $this->container['holdingValue'] = $holdingValue;

        return $this;
    }

    /**
     * Gets assetClass
     *
     * @return string|null
     */
    public function getAssetClass()
    {
        return $this->container['assetClass'];
    }

    /**
     * Sets assetClass
     *
     * @param string|null $assetClass assetClass
     *
     * @return self
     */
    public function setAssetClass($assetClass)
    {
        $this->container['assetClass'] = $assetClass;

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


