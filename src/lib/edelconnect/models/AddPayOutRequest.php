<?php
/**
 * AddPayOutRequest
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
 * AddPayOutRequest Class Doc Comment
 *
 * @category Class
 * @package  com\edel
 * @author   Edelweiss
 * @link     https://www.edelweiss.in
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AddPayOutRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelName = 'AddPayOutRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'seg' => 'string',
        'bnkName' => 'string',
        'bnkAccNo' => 'string',
        'brcName' => 'string',
        'ifsc' => 'string',
        'trnsAmt' => 'string',
        'rmk' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'seg' => null,
        'bnkName' => null,
        'bnkAccNo' => null,
        'brcName' => null,
        'ifsc' => null,
        'trnsAmt' => null,
        'rmk' => null
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
        'seg' => 'seg',
        'bnkName' => 'bnkName',
        'bnkAccNo' => 'bnkAccNo',
        'brcName' => 'brcName',
        'ifsc' => 'ifsc',
        'trnsAmt' => 'trnsAmt',
        'rmk' => 'rmk'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'seg' => 'setSeg',
        'bnkName' => 'setBnkName',
        'bnkAccNo' => 'setBnkAccNo',
        'brcName' => 'setBrcName',
        'ifsc' => 'setIfsc',
        'trnsAmt' => 'setTrnsAmt',
        'rmk' => 'setRmk'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'seg' => 'getSeg',
        'bnkName' => 'getBnkName',
        'bnkAccNo' => 'getBnkAccNo',
        'brcName' => 'getBrcName',
        'ifsc' => 'getIfsc',
        'trnsAmt' => 'getTrnsAmt',
        'rmk' => 'getRmk'
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
        $this->container['seg'] = $data['seg'] ?? null;
        $this->container['bnkName'] = $data['bnkName'] ?? null;
        $this->container['bnkAccNo'] = $data['bnkAccNo'] ?? null;
        $this->container['brcName'] = $data['brcName'] ?? null;
        $this->container['ifsc'] = $data['ifsc'] ?? null;
        $this->container['trnsAmt'] = $data['trnsAmt'] ?? null;
        $this->container['rmk'] = $data['rmk'] ?? null;
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
     * Gets seg
     *
     * @return string|null
     */
    public function getSeg()
    {
        return $this->container['seg'];
    }

    /**
     * Sets seg
     *
     * @param string|null $seg Segment Name
     *
     * @return self
     */
    public function setSeg($seg)
    {
        $this->container['seg'] = $seg;

        return $this;
    }

    /**
     * Gets bnkName
     *
     * @return string|null
     */
    public function getBnkName()
    {
        return $this->container['bnkName'];
    }

    /**
     * Sets bnkName
     *
     * @param string|null $bnkName Bank Name
     *
     * @return self
     */
    public function setBnkName($bnkName)
    {
        $this->container['bnkName'] = $bnkName;

        return $this;
    }

    /**
     * Gets bnkAccNo
     *
     * @return string|null
     */
    public function getBnkAccNo()
    {
        return $this->container['bnkAccNo'];
    }

    /**
     * Sets bnkAccNo
     *
     * @param string|null $bnkAccNo Bank Account Number
     *
     * @return self
     */
    public function setBnkAccNo($bnkAccNo)
    {
        $this->container['bnkAccNo'] = $bnkAccNo;

        return $this;
    }

    /**
     * Gets brcName
     *
     * @return string|null
     */
    public function getBrcName()
    {
        return $this->container['brcName'];
    }

    /**
     * Sets brcName
     *
     * @param string|null $brcName Bank Branch Name
     *
     * @return self
     */
    public function setBrcName($brcName)
    {
        $this->container['brcName'] = $brcName;

        return $this;
    }

    /**
     * Gets ifsc
     *
     * @return string|null
     */
    public function getIfsc()
    {
        return $this->container['ifsc'];
    }

    /**
     * Sets ifsc
     *
     * @param string|null $ifsc Bank IFSC code
     *
     * @return self
     */
    public function setIfsc($ifsc)
    {
        $this->container['ifsc'] = $ifsc;

        return $this;
    }

    /**
     * Gets trnsAmt
     *
     * @return string|null
     */
    public function getTrnsAmt()
    {
        return $this->container['trnsAmt'];
    }

    /**
     * Sets trnsAmt
     *
     * @param string|null $trnsAmt Transaction Ammount
     *
     * @return self
     */
    public function setTrnsAmt($trnsAmt)
    {
        $this->container['trnsAmt'] = $trnsAmt;

        return $this;
    }

    /**
     * Gets rmk
     *
     * @return string|null
     */
    public function getRmk()
    {
        return $this->container['rmk'];
    }

    /**
     * Sets rmk
     *
     * @param string|null $rmk Remarks
     *
     * @return self
     */
    public function setRmk($rmk)
    {
        $this->container['rmk'] = $rmk;

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


