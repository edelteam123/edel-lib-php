<?php
/**
 * BasketOrder
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
 * BasketOrder Class Doc Comment
 *
 * @category Class
 * @package  com\edel
 * @author   Edelweiss
 * @link     https://www.edelweiss.in
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BasketOrder implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelName = 'BasketOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'exc' => 'string',
        'trdSym' => 'string',
        'action' => '\com\edel\edelconnect\models\Action',
        'prdCode' => '\com\edel\edelconnect\models\PrdCode',
        'ordTyp' => '\com\edel\edelconnect\models\OrderType',
        'dur' => 'string',
        'price' => 'string',
        'trgPrc' => 'string',
        'qty' => 'string',
        'dscQty' => 'string',
        'gtdDt' => 'string',
        'rmk' => 'string',
        'vnCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'exc' => null,
        'trdSym' => null,
        'action' => null,
        'prdCode' => null,
        'ordTyp' => null,
        'dur' => null,
        'price' => null,
        'trgPrc' => null,
        'qty' => null,
        'dscQty' => null,
        'gtdDt' => null,
        'rmk' => null,
        'vnCode' => null
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
        'exc' => 'exc',
        'trdSym' => 'trdSym',
        'action' => 'action',
        'prdCode' => 'prdCode',
        'ordTyp' => 'ordTyp',
        'dur' => 'dur',
        'price' => 'price',
        'trgPrc' => 'trgPrc',
        'qty' => 'qty',
        'dscQty' => 'dscQty',
        'gtdDt' => 'gtdDt',
        'rmk' => 'rmk',
        'vnCode' => 'vnCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'exc' => 'setExc',
        'trdSym' => 'setTrdSym',
        'action' => 'setAction',
        'prdCode' => 'setPrdCode',
        'ordTyp' => 'setOrdTyp',
        'dur' => 'setDur',
        'price' => 'setPrice',
        'trgPrc' => 'setTrgPrc',
        'qty' => 'setQty',
        'dscQty' => 'setDscQty',
        'gtdDt' => 'setGtdDt',
        'rmk' => 'setRmk',
        'vnCode' => 'setVnCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'exc' => 'getExc',
        'trdSym' => 'getTrdSym',
        'action' => 'getAction',
        'prdCode' => 'getPrdCode',
        'ordTyp' => 'getOrdTyp',
        'dur' => 'getDur',
        'price' => 'getPrice',
        'trgPrc' => 'getTrgPrc',
        'qty' => 'getQty',
        'dscQty' => 'getDscQty',
        'gtdDt' => 'getGtdDt',
        'rmk' => 'getRmk',
        'vnCode' => 'getVnCode'
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

    const DUR_DAY = 'DAY';
    const DUR_IOC = 'IOC';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDurAllowableValues()
    {
        return [
            self::DUR_DAY,
            self::DUR_IOC,
        ];
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
        $this->container['exc'] = $data['exc'] ?? null;
        $this->container['trdSym'] = $data['trdSym'] ?? null;
        $this->container['action'] = $data['action'] ?? null;
        $this->container['prdCode'] = $data['prdCode'] ?? null;
        $this->container['ordTyp'] = $data['ordTyp'] ?? null;
        $this->container['dur'] = $data['dur'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['trgPrc'] = $data['trgPrc'] ?? null;
        $this->container['qty'] = $data['qty'] ?? null;
        $this->container['dscQty'] = $data['dscQty'] ?? null;
        $this->container['gtdDt'] = $data['gtdDt'] ?? null;
        $this->container['rmk'] = $data['rmk'] ?? null;
        $this->container['vnCode'] = $data['vnCode'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDurAllowableValues();
        if (!is_null($this->container['dur']) && !in_array($this->container['dur'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'dur', must be one of '%s'",
                $this->container['dur'],
                implode("', '", $allowedValues)
            );
        }

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
     * Gets exc
     *
     * @return string|null
     */
    public function getExc()
    {
        return $this->container['exc'];
    }

    /**
     * Sets exc
     *
     * @param string|null $exc Exchange
     *
     * @return self
     */
    public function setExc($exc)
    {
        $this->container['exc'] = $exc;

        return $this;
    }

    /**
     * Gets trdSym
     *
     * @return string|null
     */
    public function getTrdSym()
    {
        return $this->container['trdSym'];
    }

    /**
     * Sets trdSym
     *
     * @param string|null $trdSym Trading Symbol
     *
     * @return self
     */
    public function setTrdSym($trdSym)
    {
        $this->container['trdSym'] = $trdSym;

        return $this;
    }

    /**
     * Gets action
     *
     * @return \com\edel\edelconnect\models\Action|null
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param \com\edel\edelconnect\models\Action|null $action action
     *
     * @return self
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets prdCode
     *
     * @return \com\edel\edelconnect\models\PrdCode|null
     */
    public function getPrdCode()
    {
        return $this->container['prdCode'];
    }

    /**
     * Sets prdCode
     *
     * @param \com\edel\edelconnect\models\PrdCode|null $prdCode prdCode
     *
     * @return self
     */
    public function setPrdCode($prdCode)
    {
        $this->container['prdCode'] = $prdCode;

        return $this;
    }

    /**
     * Gets ordTyp
     *
     * @return \com\edel\edelconnect\models\OrderType|null
     */
    public function getOrdTyp()
    {
        return $this->container['ordTyp'];
    }

    /**
     * Sets ordTyp
     *
     * @param \com\edel\edelconnect\models\OrderType|null $ordTyp ordTyp
     *
     * @return self
     */
    public function setOrdTyp($ordTyp)
    {
        $this->container['ordTyp'] = $ordTyp;

        return $this;
    }

    /**
     * Gets dur
     *
     * @return string|null
     */
    public function getDur()
    {
        return $this->container['dur'];
    }

    /**
     * Sets dur
     *
     * @param string|null $dur Order duration / Retention
     *
     * @return self
     */
    public function setDur($dur)
    {
        $allowedValues = $this->getDurAllowableValues();
        if (!is_null($dur) && !in_array($dur, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'dur', must be one of '%s'",
                    $dur,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['dur'] = $dur;

        return $this;
    }

    /**
     * Gets price
     *
     * @return string|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param string|null $price Price to fill
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets trgPrc
     *
     * @return string|null
     */
    public function getTrgPrc()
    {
        return $this->container['trgPrc'];
    }

    /**
     * Sets trgPrc
     *
     * @param string|null $trgPrc Trigger Price
     *
     * @return self
     */
    public function setTrgPrc($trgPrc)
    {
        $this->container['trgPrc'] = $trgPrc;

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
     * @param string|null $qty Quantity
     *
     * @return self
     */
    public function setQty($qty)
    {
        $this->container['qty'] = $qty;

        return $this;
    }

    /**
     * Gets dscQty
     *
     * @return string|null
     */
    public function getDscQty()
    {
        return $this->container['dscQty'];
    }

    /**
     * Sets dscQty
     *
     * @param string|null $dscQty Disclosed Quantity
     *
     * @return self
     */
    public function setDscQty($dscQty)
    {
        $this->container['dscQty'] = $dscQty;

        return $this;
    }

    /**
     * Gets gtdDt
     *
     * @return string|null
     */
    public function getGtdDt()
    {
        return $this->container['gtdDt'];
    }

    /**
     * Sets gtdDt
     *
     * @param string|null $gtdDt GTD Date in dd-MM-yyyy Format
     *
     * @return self
     */
    public function setGtdDt($gtdDt)
    {
        $this->container['gtdDt'] = $gtdDt;

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
     * @param string|null $rmk Remark
     *
     * @return self
     */
    public function setRmk($rmk)
    {
        $this->container['rmk'] = $rmk;

        return $this;
    }

    /**
     * Gets vnCode
     *
     * @return string|null
     */
    public function getVnCode()
    {
        return $this->container['vnCode'];
    }

    /**
     * Sets vnCode
     *
     * @param string|null $vnCode Vendor code
     *
     * @return self
     */
    public function setVnCode($vnCode)
    {
        $this->container['vnCode'] = $vnCode;

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


