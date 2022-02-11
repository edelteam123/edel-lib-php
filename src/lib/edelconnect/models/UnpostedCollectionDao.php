<?php
/**
 * UnpostedCollectionDao
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
 * UnpostedCollectionDao Class Doc Comment
 *
 * @category Class
 * @package  com\edel
 * @author   Edelweiss
 * @link     https://www.edelweiss.in
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UnpostedCollectionDao implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelName = 'UnpostedCollectionDao';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'subaccode' => 'string',
        'recorddate' => '\DateTime',
        'dpdues' => 'string',
        'dpcharges' => 'string',
        'ist' => 'string',
        'comoshortfall' => 'string',
        'fnopenality' => 'string',
        'pisbankbal' => 'string',
        'wealthpoabal' => 'string',
        'mtfbal' => 'string',
        'oth4amt' => 'string',
        'oth5amt' => 'string',
        'accode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'subaccode' => null,
        'recorddate' => 'date-time',
        'dpdues' => null,
        'dpcharges' => null,
        'ist' => null,
        'comoshortfall' => null,
        'fnopenality' => null,
        'pisbankbal' => null,
        'wealthpoabal' => null,
        'mtfbal' => null,
        'oth4amt' => null,
        'oth5amt' => null,
        'accode' => null
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
        'subaccode' => 'subaccode',
        'recorddate' => 'recorddate',
        'dpdues' => 'dpdues',
        'dpcharges' => 'dpcharges',
        'ist' => 'ist',
        'comoshortfall' => 'comoshortfall',
        'fnopenality' => 'fnopenality',
        'pisbankbal' => 'pisbankbal',
        'wealthpoabal' => 'wealthpoabal',
        'mtfbal' => 'mtfbal',
        'oth4amt' => 'oth4amt',
        'oth5amt' => 'oth5amt',
        'accode' => 'accode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'subaccode' => 'setSubaccode',
        'recorddate' => 'setRecorddate',
        'dpdues' => 'setDpdues',
        'dpcharges' => 'setDpcharges',
        'ist' => 'setIst',
        'comoshortfall' => 'setComoshortfall',
        'fnopenality' => 'setFnopenality',
        'pisbankbal' => 'setPisbankbal',
        'wealthpoabal' => 'setWealthpoabal',
        'mtfbal' => 'setMtfbal',
        'oth4amt' => 'setOth4amt',
        'oth5amt' => 'setOth5amt',
        'accode' => 'setAccode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'subaccode' => 'getSubaccode',
        'recorddate' => 'getRecorddate',
        'dpdues' => 'getDpdues',
        'dpcharges' => 'getDpcharges',
        'ist' => 'getIst',
        'comoshortfall' => 'getComoshortfall',
        'fnopenality' => 'getFnopenality',
        'pisbankbal' => 'getPisbankbal',
        'wealthpoabal' => 'getWealthpoabal',
        'mtfbal' => 'getMtfbal',
        'oth4amt' => 'getOth4amt',
        'oth5amt' => 'getOth5amt',
        'accode' => 'getAccode'
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
        $this->container['subaccode'] = $data['subaccode'] ?? null;
        $this->container['recorddate'] = $data['recorddate'] ?? null;
        $this->container['dpdues'] = $data['dpdues'] ?? null;
        $this->container['dpcharges'] = $data['dpcharges'] ?? null;
        $this->container['ist'] = $data['ist'] ?? null;
        $this->container['comoshortfall'] = $data['comoshortfall'] ?? null;
        $this->container['fnopenality'] = $data['fnopenality'] ?? null;
        $this->container['pisbankbal'] = $data['pisbankbal'] ?? null;
        $this->container['wealthpoabal'] = $data['wealthpoabal'] ?? null;
        $this->container['mtfbal'] = $data['mtfbal'] ?? null;
        $this->container['oth4amt'] = $data['oth4amt'] ?? null;
        $this->container['oth5amt'] = $data['oth5amt'] ?? null;
        $this->container['accode'] = $data['accode'] ?? null;
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
     * Gets subaccode
     *
     * @return string|null
     */
    public function getSubaccode()
    {
        return $this->container['subaccode'];
    }

    /**
     * Sets subaccode
     *
     * @param string|null $subaccode subaccode
     *
     * @return self
     */
    public function setSubaccode($subaccode)
    {
        $this->container['subaccode'] = $subaccode;

        return $this;
    }

    /**
     * Gets recorddate
     *
     * @return \DateTime|null
     */
    public function getRecorddate()
    {
        return $this->container['recorddate'];
    }

    /**
     * Sets recorddate
     *
     * @param \DateTime|null $recorddate recorddate
     *
     * @return self
     */
    public function setRecorddate($recorddate)
    {
        $this->container['recorddate'] = $recorddate;

        return $this;
    }

    /**
     * Gets dpdues
     *
     * @return string|null
     */
    public function getDpdues()
    {
        return $this->container['dpdues'];
    }

    /**
     * Sets dpdues
     *
     * @param string|null $dpdues dpdues
     *
     * @return self
     */
    public function setDpdues($dpdues)
    {
        $this->container['dpdues'] = $dpdues;

        return $this;
    }

    /**
     * Gets dpcharges
     *
     * @return string|null
     */
    public function getDpcharges()
    {
        return $this->container['dpcharges'];
    }

    /**
     * Sets dpcharges
     *
     * @param string|null $dpcharges dpcharges
     *
     * @return self
     */
    public function setDpcharges($dpcharges)
    {
        $this->container['dpcharges'] = $dpcharges;

        return $this;
    }

    /**
     * Gets ist
     *
     * @return string|null
     */
    public function getIst()
    {
        return $this->container['ist'];
    }

    /**
     * Sets ist
     *
     * @param string|null $ist ist
     *
     * @return self
     */
    public function setIst($ist)
    {
        $this->container['ist'] = $ist;

        return $this;
    }

    /**
     * Gets comoshortfall
     *
     * @return string|null
     */
    public function getComoshortfall()
    {
        return $this->container['comoshortfall'];
    }

    /**
     * Sets comoshortfall
     *
     * @param string|null $comoshortfall comoshortfall
     *
     * @return self
     */
    public function setComoshortfall($comoshortfall)
    {
        $this->container['comoshortfall'] = $comoshortfall;

        return $this;
    }

    /**
     * Gets fnopenality
     *
     * @return string|null
     */
    public function getFnopenality()
    {
        return $this->container['fnopenality'];
    }

    /**
     * Sets fnopenality
     *
     * @param string|null $fnopenality fnopenality
     *
     * @return self
     */
    public function setFnopenality($fnopenality)
    {
        $this->container['fnopenality'] = $fnopenality;

        return $this;
    }

    /**
     * Gets pisbankbal
     *
     * @return string|null
     */
    public function getPisbankbal()
    {
        return $this->container['pisbankbal'];
    }

    /**
     * Sets pisbankbal
     *
     * @param string|null $pisbankbal pisbankbal
     *
     * @return self
     */
    public function setPisbankbal($pisbankbal)
    {
        $this->container['pisbankbal'] = $pisbankbal;

        return $this;
    }

    /**
     * Gets wealthpoabal
     *
     * @return string|null
     */
    public function getWealthpoabal()
    {
        return $this->container['wealthpoabal'];
    }

    /**
     * Sets wealthpoabal
     *
     * @param string|null $wealthpoabal wealthpoabal
     *
     * @return self
     */
    public function setWealthpoabal($wealthpoabal)
    {
        $this->container['wealthpoabal'] = $wealthpoabal;

        return $this;
    }

    /**
     * Gets mtfbal
     *
     * @return string|null
     */
    public function getMtfbal()
    {
        return $this->container['mtfbal'];
    }

    /**
     * Sets mtfbal
     *
     * @param string|null $mtfbal mtfbal
     *
     * @return self
     */
    public function setMtfbal($mtfbal)
    {
        $this->container['mtfbal'] = $mtfbal;

        return $this;
    }

    /**
     * Gets oth4amt
     *
     * @return string|null
     */
    public function getOth4amt()
    {
        return $this->container['oth4amt'];
    }

    /**
     * Sets oth4amt
     *
     * @param string|null $oth4amt oth4amt
     *
     * @return self
     */
    public function setOth4amt($oth4amt)
    {
        $this->container['oth4amt'] = $oth4amt;

        return $this;
    }

    /**
     * Gets oth5amt
     *
     * @return string|null
     */
    public function getOth5amt()
    {
        return $this->container['oth5amt'];
    }

    /**
     * Sets oth5amt
     *
     * @param string|null $oth5amt oth5amt
     *
     * @return self
     */
    public function setOth5amt($oth5amt)
    {
        $this->container['oth5amt'] = $oth5amt;

        return $this;
    }

    /**
     * Gets accode
     *
     * @return string|null
     */
    public function getAccode()
    {
        return $this->container['accode'];
    }

    /**
     * Sets accode
     *
     * @param string|null $accode accode
     *
     * @return self
     */
    public function setAccode($accode)
    {
        $this->container['accode'] = $accode;

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


