<?php
/**
 * Trade
 *
 * PHP version 7
 *
 * @category Class
 * @package  GateApi
 * @author   GateIO
 * @link     https://www.gate.io
 */

/**
 * Gate API v4
 *
 * APIv4 provides spot, margin and futures trading operations. There are public APIs to retrieve the real-time market statistics, and private APIs which needs authentication to trade on user's behalf.
 *
 * Contact: support@mail.gate.io
 * Generated by: https://openapi-generator.tech
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace GateApi\Model;

use \ArrayAccess;
use \GateApi\ObjectSerializer;

/**
 * Trade Class Doc Comment
 *
 * @category Class
 * @package  GateApi
 * @author   GateIO
 * @link     https://www.gate.io
 */
class Trade implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Trade';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'create_time' => 'string',
        'create_time_ms' => 'string',
        'side' => 'string',
        'role' => 'string',
        'amount' => 'string',
        'price' => 'string',
        'order_id' => 'string',
        'fee' => 'string',
        'fee_currency' => 'string',
        'point_fee' => 'string',
        'gt_fee' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'create_time' => null,
        'create_time_ms' => null,
        'side' => null,
        'role' => null,
        'amount' => null,
        'price' => null,
        'order_id' => null,
        'fee' => null,
        'fee_currency' => null,
        'point_fee' => null,
        'gt_fee' => null
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
        'id' => 'id',
        'create_time' => 'create_time',
        'create_time_ms' => 'create_time_ms',
        'side' => 'side',
        'role' => 'role',
        'amount' => 'amount',
        'price' => 'price',
        'order_id' => 'order_id',
        'fee' => 'fee',
        'fee_currency' => 'fee_currency',
        'point_fee' => 'point_fee',
        'gt_fee' => 'gt_fee'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'create_time' => 'setCreateTime',
        'create_time_ms' => 'setCreateTimeMs',
        'side' => 'setSide',
        'role' => 'setRole',
        'amount' => 'setAmount',
        'price' => 'setPrice',
        'order_id' => 'setOrderId',
        'fee' => 'setFee',
        'fee_currency' => 'setFeeCurrency',
        'point_fee' => 'setPointFee',
        'gt_fee' => 'setGtFee'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'create_time' => 'getCreateTime',
        'create_time_ms' => 'getCreateTimeMs',
        'side' => 'getSide',
        'role' => 'getRole',
        'amount' => 'getAmount',
        'price' => 'getPrice',
        'order_id' => 'getOrderId',
        'fee' => 'getFee',
        'fee_currency' => 'getFeeCurrency',
        'point_fee' => 'getPointFee',
        'gt_fee' => 'getGtFee'
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
        return self::$openAPIModelName;
    }

    const SIDE_BUY = 'buy';
    const SIDE_SELL = 'sell';
    const ROLE_TAKER = 'taker';
    const ROLE_MAKER = 'maker';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSideAllowableValues()
    {
        return [
            self::SIDE_BUY,
            self::SIDE_SELL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRoleAllowableValues()
    {
        return [
            self::ROLE_TAKER,
            self::ROLE_MAKER,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['create_time'] = isset($data['create_time']) ? $data['create_time'] : null;
        $this->container['create_time_ms'] = isset($data['create_time_ms']) ? $data['create_time_ms'] : null;
        $this->container['side'] = isset($data['side']) ? $data['side'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['fee'] = isset($data['fee']) ? $data['fee'] : null;
        $this->container['fee_currency'] = isset($data['fee_currency']) ? $data['fee_currency'] : null;
        $this->container['point_fee'] = isset($data['point_fee']) ? $data['point_fee'] : null;
        $this->container['gt_fee'] = isset($data['gt_fee']) ? $data['gt_fee'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSideAllowableValues();
        if (!is_null($this->container['side']) && !in_array($this->container['side'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'side', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRoleAllowableValues();
        if (!is_null($this->container['role']) && !in_array($this->container['role'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'role', must be one of '%s'",
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Trade ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets create_time
     *
     * @return string|null
     */
    public function getCreateTime()
    {
        return $this->container['create_time'];
    }

    /**
     * Sets create_time
     *
     * @param string|null $create_time Trading time
     *
     * @return $this
     */
    public function setCreateTime($create_time)
    {
        $this->container['create_time'] = $create_time;

        return $this;
    }

    /**
     * Gets create_time_ms
     *
     * @return string|null
     */
    public function getCreateTimeMs()
    {
        return $this->container['create_time_ms'];
    }

    /**
     * Sets create_time_ms
     *
     * @param string|null $create_time_ms Trading time, with millisecond precision
     *
     * @return $this
     */
    public function setCreateTimeMs($create_time_ms)
    {
        $this->container['create_time_ms'] = $create_time_ms;

        return $this;
    }

    /**
     * Gets side
     *
     * @return string|null
     */
    public function getSide()
    {
        return $this->container['side'];
    }

    /**
     * Sets side
     *
     * @param string|null $side Order side
     *
     * @return $this
     */
    public function setSide($side)
    {
        $allowedValues = $this->getSideAllowableValues();
        if (!is_null($side) && !in_array($side, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'side', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['side'] = $side;

        return $this;
    }

    /**
     * Gets role
     *
     * @return string|null
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param string|null $role Trade role
     *
     * @return $this
     */
    public function setRole($role)
    {
        $allowedValues = $this->getRoleAllowableValues();
        if (!is_null($role) && !in_array($role, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'role', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return string|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string|null $amount Trade amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

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
     * @param string|null $price Order price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string|null $order_id Related order ID. No value in public endpoints
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return string|null
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param string|null $fee Fee deducted. No value in public endpoints
     *
     * @return $this
     */
    public function setFee($fee)
    {
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets fee_currency
     *
     * @return string|null
     */
    public function getFeeCurrency()
    {
        return $this->container['fee_currency'];
    }

    /**
     * Sets fee_currency
     *
     * @param string|null $fee_currency Fee currency unit. No value in public endpoints
     *
     * @return $this
     */
    public function setFeeCurrency($fee_currency)
    {
        $this->container['fee_currency'] = $fee_currency;

        return $this;
    }

    /**
     * Gets point_fee
     *
     * @return string|null
     */
    public function getPointFee()
    {
        return $this->container['point_fee'];
    }

    /**
     * Sets point_fee
     *
     * @param string|null $point_fee Point used to deduct fee
     *
     * @return $this
     */
    public function setPointFee($point_fee)
    {
        $this->container['point_fee'] = $point_fee;

        return $this;
    }

    /**
     * Gets gt_fee
     *
     * @return string|null
     */
    public function getGtFee()
    {
        return $this->container['gt_fee'];
    }

    /**
     * Sets gt_fee
     *
     * @param string|null $gt_fee GT used to deduct fee
     *
     * @return $this
     */
    public function setGtFee($gt_fee)
    {
        $this->container['gt_fee'] = $gt_fee;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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


