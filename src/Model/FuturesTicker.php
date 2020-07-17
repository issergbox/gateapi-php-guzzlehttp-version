<?php
/**
 * FuturesTicker
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
 * FuturesTicker Class Doc Comment
 *
 * @category Class
 * @package  GateApi
 * @author   GateIO
 * @link     https://www.gate.io
 */
class FuturesTicker implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FuturesTicker';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'contract' => 'string',
        'last' => 'string',
        'change_percentage' => 'string',
        'total_size' => 'string',
        'low_24h' => 'string',
        'high_24h' => 'string',
        'volume_24h' => 'string',
        'volume_24h_btc' => 'string',
        'volume_24h_usd' => 'string',
        'volume_24h_base' => 'string',
        'volume_24h_quote' => 'string',
        'volume_24h_settle' => 'string',
        'mark_price' => 'string',
        'funding_rate' => 'string',
        'funding_rate_indicative' => 'string',
        'index_price' => 'string',
        'quanto_base_rate' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'contract' => null,
        'last' => null,
        'change_percentage' => null,
        'total_size' => null,
        'low_24h' => null,
        'high_24h' => null,
        'volume_24h' => null,
        'volume_24h_btc' => null,
        'volume_24h_usd' => null,
        'volume_24h_base' => null,
        'volume_24h_quote' => null,
        'volume_24h_settle' => null,
        'mark_price' => null,
        'funding_rate' => null,
        'funding_rate_indicative' => null,
        'index_price' => null,
        'quanto_base_rate' => null
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
        'contract' => 'contract',
        'last' => 'last',
        'change_percentage' => 'change_percentage',
        'total_size' => 'total_size',
        'low_24h' => 'low_24h',
        'high_24h' => 'high_24h',
        'volume_24h' => 'volume_24h',
        'volume_24h_btc' => 'volume_24h_btc',
        'volume_24h_usd' => 'volume_24h_usd',
        'volume_24h_base' => 'volume_24h_base',
        'volume_24h_quote' => 'volume_24h_quote',
        'volume_24h_settle' => 'volume_24h_settle',
        'mark_price' => 'mark_price',
        'funding_rate' => 'funding_rate',
        'funding_rate_indicative' => 'funding_rate_indicative',
        'index_price' => 'index_price',
        'quanto_base_rate' => 'quanto_base_rate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contract' => 'setContract',
        'last' => 'setLast',
        'change_percentage' => 'setChangePercentage',
        'total_size' => 'setTotalSize',
        'low_24h' => 'setLow24h',
        'high_24h' => 'setHigh24h',
        'volume_24h' => 'setVolume24h',
        'volume_24h_btc' => 'setVolume24hBtc',
        'volume_24h_usd' => 'setVolume24hUsd',
        'volume_24h_base' => 'setVolume24hBase',
        'volume_24h_quote' => 'setVolume24hQuote',
        'volume_24h_settle' => 'setVolume24hSettle',
        'mark_price' => 'setMarkPrice',
        'funding_rate' => 'setFundingRate',
        'funding_rate_indicative' => 'setFundingRateIndicative',
        'index_price' => 'setIndexPrice',
        'quanto_base_rate' => 'setQuantoBaseRate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contract' => 'getContract',
        'last' => 'getLast',
        'change_percentage' => 'getChangePercentage',
        'total_size' => 'getTotalSize',
        'low_24h' => 'getLow24h',
        'high_24h' => 'getHigh24h',
        'volume_24h' => 'getVolume24h',
        'volume_24h_btc' => 'getVolume24hBtc',
        'volume_24h_usd' => 'getVolume24hUsd',
        'volume_24h_base' => 'getVolume24hBase',
        'volume_24h_quote' => 'getVolume24hQuote',
        'volume_24h_settle' => 'getVolume24hSettle',
        'mark_price' => 'getMarkPrice',
        'funding_rate' => 'getFundingRate',
        'funding_rate_indicative' => 'getFundingRateIndicative',
        'index_price' => 'getIndexPrice',
        'quanto_base_rate' => 'getQuantoBaseRate'
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
        $this->container['contract'] = isset($data['contract']) ? $data['contract'] : null;
        $this->container['last'] = isset($data['last']) ? $data['last'] : null;
        $this->container['change_percentage'] = isset($data['change_percentage']) ? $data['change_percentage'] : null;
        $this->container['total_size'] = isset($data['total_size']) ? $data['total_size'] : null;
        $this->container['low_24h'] = isset($data['low_24h']) ? $data['low_24h'] : null;
        $this->container['high_24h'] = isset($data['high_24h']) ? $data['high_24h'] : null;
        $this->container['volume_24h'] = isset($data['volume_24h']) ? $data['volume_24h'] : null;
        $this->container['volume_24h_btc'] = isset($data['volume_24h_btc']) ? $data['volume_24h_btc'] : null;
        $this->container['volume_24h_usd'] = isset($data['volume_24h_usd']) ? $data['volume_24h_usd'] : null;
        $this->container['volume_24h_base'] = isset($data['volume_24h_base']) ? $data['volume_24h_base'] : null;
        $this->container['volume_24h_quote'] = isset($data['volume_24h_quote']) ? $data['volume_24h_quote'] : null;
        $this->container['volume_24h_settle'] = isset($data['volume_24h_settle']) ? $data['volume_24h_settle'] : null;
        $this->container['mark_price'] = isset($data['mark_price']) ? $data['mark_price'] : null;
        $this->container['funding_rate'] = isset($data['funding_rate']) ? $data['funding_rate'] : null;
        $this->container['funding_rate_indicative'] = isset($data['funding_rate_indicative']) ? $data['funding_rate_indicative'] : null;
        $this->container['index_price'] = isset($data['index_price']) ? $data['index_price'] : null;
        $this->container['quanto_base_rate'] = isset($data['quanto_base_rate']) ? $data['quanto_base_rate'] : null;
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
     * Gets contract
     *
     * @return string|null
     */
    public function getContract()
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     *
     * @param string|null $contract Futures contract
     *
     * @return $this
     */
    public function setContract($contract)
    {
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets last
     *
     * @return string|null
     */
    public function getLast()
    {
        return $this->container['last'];
    }

    /**
     * Sets last
     *
     * @param string|null $last Last trading price
     *
     * @return $this
     */
    public function setLast($last)
    {
        $this->container['last'] = $last;

        return $this;
    }

    /**
     * Gets change_percentage
     *
     * @return string|null
     */
    public function getChangePercentage()
    {
        return $this->container['change_percentage'];
    }

    /**
     * Sets change_percentage
     *
     * @param string|null $change_percentage Change percentage.
     *
     * @return $this
     */
    public function setChangePercentage($change_percentage)
    {
        $this->container['change_percentage'] = $change_percentage;

        return $this;
    }

    /**
     * Gets total_size
     *
     * @return string|null
     */
    public function getTotalSize()
    {
        return $this->container['total_size'];
    }

    /**
     * Sets total_size
     *
     * @param string|null $total_size Contract total size
     *
     * @return $this
     */
    public function setTotalSize($total_size)
    {
        $this->container['total_size'] = $total_size;

        return $this;
    }

    /**
     * Gets low_24h
     *
     * @return string|null
     */
    public function getLow24h()
    {
        return $this->container['low_24h'];
    }

    /**
     * Sets low_24h
     *
     * @param string|null $low_24h Lowest trading price in recent 24h
     *
     * @return $this
     */
    public function setLow24h($low_24h)
    {
        $this->container['low_24h'] = $low_24h;

        return $this;
    }

    /**
     * Gets high_24h
     *
     * @return string|null
     */
    public function getHigh24h()
    {
        return $this->container['high_24h'];
    }

    /**
     * Sets high_24h
     *
     * @param string|null $high_24h Highest trading price in recent 24h
     *
     * @return $this
     */
    public function setHigh24h($high_24h)
    {
        $this->container['high_24h'] = $high_24h;

        return $this;
    }

    /**
     * Gets volume_24h
     *
     * @return string|null
     */
    public function getVolume24h()
    {
        return $this->container['volume_24h'];
    }

    /**
     * Sets volume_24h
     *
     * @param string|null $volume_24h Trade size in recent 24h
     *
     * @return $this
     */
    public function setVolume24h($volume_24h)
    {
        $this->container['volume_24h'] = $volume_24h;

        return $this;
    }

    /**
     * Gets volume_24h_btc
     *
     * @return string|null
     */
    public function getVolume24hBtc()
    {
        return $this->container['volume_24h_btc'];
    }

    /**
     * Sets volume_24h_btc
     *
     * @param string|null $volume_24h_btc Trade volumes in recent 24h in BTC(deprecated, use `volume_24h_base`, `volume_24h_quote`, `volume_24h_settle` instead)
     *
     * @return $this
     */
    public function setVolume24hBtc($volume_24h_btc)
    {
        $this->container['volume_24h_btc'] = $volume_24h_btc;

        return $this;
    }

    /**
     * Gets volume_24h_usd
     *
     * @return string|null
     */
    public function getVolume24hUsd()
    {
        return $this->container['volume_24h_usd'];
    }

    /**
     * Sets volume_24h_usd
     *
     * @param string|null $volume_24h_usd Trade volumes in recent 24h in USD(deprecated, use `volume_24h_base`, `volume_24h_quote`, `volume_24h_settle` instead)
     *
     * @return $this
     */
    public function setVolume24hUsd($volume_24h_usd)
    {
        $this->container['volume_24h_usd'] = $volume_24h_usd;

        return $this;
    }

    /**
     * Gets volume_24h_base
     *
     * @return string|null
     */
    public function getVolume24hBase()
    {
        return $this->container['volume_24h_base'];
    }

    /**
     * Sets volume_24h_base
     *
     * @param string|null $volume_24h_base Trade volume in recent 24h, in base currency
     *
     * @return $this
     */
    public function setVolume24hBase($volume_24h_base)
    {
        $this->container['volume_24h_base'] = $volume_24h_base;

        return $this;
    }

    /**
     * Gets volume_24h_quote
     *
     * @return string|null
     */
    public function getVolume24hQuote()
    {
        return $this->container['volume_24h_quote'];
    }

    /**
     * Sets volume_24h_quote
     *
     * @param string|null $volume_24h_quote Trade volume in recent 24h, in quote currency
     *
     * @return $this
     */
    public function setVolume24hQuote($volume_24h_quote)
    {
        $this->container['volume_24h_quote'] = $volume_24h_quote;

        return $this;
    }

    /**
     * Gets volume_24h_settle
     *
     * @return string|null
     */
    public function getVolume24hSettle()
    {
        return $this->container['volume_24h_settle'];
    }

    /**
     * Sets volume_24h_settle
     *
     * @param string|null $volume_24h_settle Trade volume in recent 24h, in settle currency
     *
     * @return $this
     */
    public function setVolume24hSettle($volume_24h_settle)
    {
        $this->container['volume_24h_settle'] = $volume_24h_settle;

        return $this;
    }

    /**
     * Gets mark_price
     *
     * @return string|null
     */
    public function getMarkPrice()
    {
        return $this->container['mark_price'];
    }

    /**
     * Sets mark_price
     *
     * @param string|null $mark_price Recent mark price
     *
     * @return $this
     */
    public function setMarkPrice($mark_price)
    {
        $this->container['mark_price'] = $mark_price;

        return $this;
    }

    /**
     * Gets funding_rate
     *
     * @return string|null
     */
    public function getFundingRate()
    {
        return $this->container['funding_rate'];
    }

    /**
     * Sets funding_rate
     *
     * @param string|null $funding_rate Funding rate
     *
     * @return $this
     */
    public function setFundingRate($funding_rate)
    {
        $this->container['funding_rate'] = $funding_rate;

        return $this;
    }

    /**
     * Gets funding_rate_indicative
     *
     * @return string|null
     */
    public function getFundingRateIndicative()
    {
        return $this->container['funding_rate_indicative'];
    }

    /**
     * Sets funding_rate_indicative
     *
     * @param string|null $funding_rate_indicative Indicative Funding rate in next period
     *
     * @return $this
     */
    public function setFundingRateIndicative($funding_rate_indicative)
    {
        $this->container['funding_rate_indicative'] = $funding_rate_indicative;

        return $this;
    }

    /**
     * Gets index_price
     *
     * @return string|null
     */
    public function getIndexPrice()
    {
        return $this->container['index_price'];
    }

    /**
     * Sets index_price
     *
     * @param string|null $index_price Index price
     *
     * @return $this
     */
    public function setIndexPrice($index_price)
    {
        $this->container['index_price'] = $index_price;

        return $this;
    }

    /**
     * Gets quanto_base_rate
     *
     * @return string|null
     */
    public function getQuantoBaseRate()
    {
        return $this->container['quanto_base_rate'];
    }

    /**
     * Sets quanto_base_rate
     *
     * @param string|null $quanto_base_rate Exchange rate of base currency and settlement currency in Quanto contract. Not existed in contract of other types
     *
     * @return $this
     */
    public function setQuantoBaseRate($quanto_base_rate)
    {
        $this->container['quanto_base_rate'] = $quanto_base_rate;

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


