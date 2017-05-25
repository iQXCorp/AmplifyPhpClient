<?php
/**
 * OrderLineItems
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * iQX Amplify API Reference
 *
 * Welcome to the iQX Amplify API reference. This is a live example of how you can use [iQX Amplify](http://app.iqxamplify.com/) to integrate your own e-commerce store or ticketing engine.  The iQX Amplify API is organized around the [REST](http://en.wikipedia.org/wiki/Representational_State_Transfer) mothodology, and it uses resource-oriented URLs, and common HTTP response codes to indicate API errors. All requests are authenticated using an `api-key` which can be obtained from your developer dashboard within iQX Amplify.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: development@iqxcorp.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * OrderLineItems Class Doc Comment
 *
 * @category    Class
 * @description Product variants for a variable type product
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrderLineItems implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Order_line_items';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fulfillable_quantity' => 'float',
        'price' => 'float',
        'order_price' => 'float',
        'sku' => 'string',
        'name' => 'string',
        'title' => 'string',
        'quantity' => 'float',
        'grams' => 'float',
        'requires_shipping' => 'bool'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'fulfillable_quantity' => 'fulfillable_quantity',
        'price' => 'price',
        'order_price' => 'order_price',
        'sku' => 'sku',
        'name' => 'name',
        'title' => 'title',
        'quantity' => 'quantity',
        'grams' => 'grams',
        'requires_shipping' => 'requires_shipping'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'fulfillable_quantity' => 'setFulfillableQuantity',
        'price' => 'setPrice',
        'order_price' => 'setOrderPrice',
        'sku' => 'setSku',
        'name' => 'setName',
        'title' => 'setTitle',
        'quantity' => 'setQuantity',
        'grams' => 'setGrams',
        'requires_shipping' => 'setRequiresShipping'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'fulfillable_quantity' => 'getFulfillableQuantity',
        'price' => 'getPrice',
        'order_price' => 'getOrderPrice',
        'sku' => 'getSku',
        'name' => 'getName',
        'title' => 'getTitle',
        'quantity' => 'getQuantity',
        'grams' => 'getGrams',
        'requires_shipping' => 'getRequiresShipping'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['fulfillable_quantity'] = isset($data['fulfillable_quantity']) ? $data['fulfillable_quantity'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['order_price'] = isset($data['order_price']) ? $data['order_price'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['grams'] = isset($data['grams']) ? $data['grams'] : null;
        $this->container['requires_shipping'] = isset($data['requires_shipping']) ? $data['requires_shipping'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets fulfillable_quantity
     * @return float
     */
    public function getFulfillableQuantity()
    {
        return $this->container['fulfillable_quantity'];
    }

    /**
     * Sets fulfillable_quantity
     * @param float $fulfillable_quantity The qunatity of the line item
     * @return $this
     */
    public function setFulfillableQuantity($fulfillable_quantity)
    {
        $this->container['fulfillable_quantity'] = $fulfillable_quantity;

        return $this;
    }

    /**
     * Gets price
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param float $price The price of the line item
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets order_price
     * @return float
     */
    public function getOrderPrice()
    {
        return $this->container['order_price'];
    }

    /**
     * Sets order_price
     * @param float $order_price The order price for theline item
     * @return $this
     */
    public function setOrderPrice($order_price)
    {
        $this->container['order_price'] = $order_price;

        return $this;
    }

    /**
     * Gets sku
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     * @param string $sku Product's sku
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Product's name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title Product's title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets quantity
     * @return float
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param float $quantity Number of items
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets grams
     * @return float
     */
    public function getGrams()
    {
        return $this->container['grams'];
    }

    /**
     * Sets grams
     * @param float $grams Weight in grams
     * @return $this
     */
    public function setGrams($grams)
    {
        $this->container['grams'] = $grams;

        return $this;
    }

    /**
     * Gets requires_shipping
     * @return bool
     */
    public function getRequiresShipping()
    {
        return $this->container['requires_shipping'];
    }

    /**
     * Sets requires_shipping
     * @param bool $requires_shipping If the order requires shipping
     * @return $this
     */
    public function setRequiresShipping($requires_shipping)
    {
        $this->container['requires_shipping'] = $requires_shipping;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


