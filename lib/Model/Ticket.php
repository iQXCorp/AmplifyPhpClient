<?php
/**
 * Ticket
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
 * Ticket Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ticket implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Ticket';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'ref_id' => 'string',
        'ticket_number' => 'string',
        'card_number' => 'string',
        'event_name' => 'string',
        'artist_name' => 'string',
        'customer_ref_id' => 'string',
        'venue' => '\Swagger\Client\Model\EventVenue',
        'location' => '\Swagger\Client\Model\TicketLocation',
        'ticket_category' => 'float',
        'ticket_price' => 'float',
        'date_purchased' => 'float',
        'door_open_time' => '\DateTime',
        'currency' => 'string',
        'subtotal_price' => 'float',
        'total_price' => 'float',
        'total_shipping' => 'float',
        'total_fees' => 'float',
        'total_tax' => 'float',
        'customer_email' => 'string',
        'modified_date' => '\DateTime',
        'user_id' => 'string'
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
        'id' => 'id',
        'ref_id' => 'ref_id',
        'ticket_number' => 'ticket_number',
        'card_number' => 'card_number',
        'event_name' => 'event_name',
        'artist_name' => 'artist_name',
        'customer_ref_id' => 'customer_ref_id',
        'venue' => 'venue',
        'location' => 'location',
        'ticket_category' => 'ticket_category',
        'ticket_price' => 'ticket_price',
        'date_purchased' => 'date_purchased',
        'door_open_time' => 'door_open_time',
        'currency' => 'currency',
        'subtotal_price' => 'subtotal_price',
        'total_price' => 'total_price',
        'total_shipping' => 'total_shipping',
        'total_fees' => 'total_fees',
        'total_tax' => 'total_tax',
        'customer_email' => 'customer_email',
        'modified_date' => 'modified_date',
        'user_id' => 'user_id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'ref_id' => 'setRefId',
        'ticket_number' => 'setTicketNumber',
        'card_number' => 'setCardNumber',
        'event_name' => 'setEventName',
        'artist_name' => 'setArtistName',
        'customer_ref_id' => 'setCustomerRefId',
        'venue' => 'setVenue',
        'location' => 'setLocation',
        'ticket_category' => 'setTicketCategory',
        'ticket_price' => 'setTicketPrice',
        'date_purchased' => 'setDatePurchased',
        'door_open_time' => 'setDoorOpenTime',
        'currency' => 'setCurrency',
        'subtotal_price' => 'setSubtotalPrice',
        'total_price' => 'setTotalPrice',
        'total_shipping' => 'setTotalShipping',
        'total_fees' => 'setTotalFees',
        'total_tax' => 'setTotalTax',
        'customer_email' => 'setCustomerEmail',
        'modified_date' => 'setModifiedDate',
        'user_id' => 'setUserId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'ref_id' => 'getRefId',
        'ticket_number' => 'getTicketNumber',
        'card_number' => 'getCardNumber',
        'event_name' => 'getEventName',
        'artist_name' => 'getArtistName',
        'customer_ref_id' => 'getCustomerRefId',
        'venue' => 'getVenue',
        'location' => 'getLocation',
        'ticket_category' => 'getTicketCategory',
        'ticket_price' => 'getTicketPrice',
        'date_purchased' => 'getDatePurchased',
        'door_open_time' => 'getDoorOpenTime',
        'currency' => 'getCurrency',
        'subtotal_price' => 'getSubtotalPrice',
        'total_price' => 'getTotalPrice',
        'total_shipping' => 'getTotalShipping',
        'total_fees' => 'getTotalFees',
        'total_tax' => 'getTotalTax',
        'customer_email' => 'getCustomerEmail',
        'modified_date' => 'getModifiedDate',
        'user_id' => 'getUserId'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ref_id'] = isset($data['ref_id']) ? $data['ref_id'] : null;
        $this->container['ticket_number'] = isset($data['ticket_number']) ? $data['ticket_number'] : null;
        $this->container['card_number'] = isset($data['card_number']) ? $data['card_number'] : null;
        $this->container['event_name'] = isset($data['event_name']) ? $data['event_name'] : null;
        $this->container['artist_name'] = isset($data['artist_name']) ? $data['artist_name'] : null;
        $this->container['customer_ref_id'] = isset($data['customer_ref_id']) ? $data['customer_ref_id'] : null;
        $this->container['venue'] = isset($data['venue']) ? $data['venue'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['ticket_category'] = isset($data['ticket_category']) ? $data['ticket_category'] : null;
        $this->container['ticket_price'] = isset($data['ticket_price']) ? $data['ticket_price'] : null;
        $this->container['date_purchased'] = isset($data['date_purchased']) ? $data['date_purchased'] : null;
        $this->container['door_open_time'] = isset($data['door_open_time']) ? $data['door_open_time'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['subtotal_price'] = isset($data['subtotal_price']) ? $data['subtotal_price'] : null;
        $this->container['total_price'] = isset($data['total_price']) ? $data['total_price'] : null;
        $this->container['total_shipping'] = isset($data['total_shipping']) ? $data['total_shipping'] : null;
        $this->container['total_fees'] = isset($data['total_fees']) ? $data['total_fees'] : null;
        $this->container['total_tax'] = isset($data['total_tax']) ? $data['total_tax'] : null;
        $this->container['customer_email'] = isset($data['customer_email']) ? $data['customer_email'] : null;
        $this->container['modified_date'] = isset($data['modified_date']) ? $data['modified_date'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
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
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id Primary key
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets ref_id
     * @return string
     */
    public function getRefId()
    {
        return $this->container['ref_id'];
    }

    /**
     * Sets ref_id
     * @param string $ref_id External systems reference id
     * @return $this
     */
    public function setRefId($ref_id)
    {
        $this->container['ref_id'] = $ref_id;

        return $this;
    }

    /**
     * Gets ticket_number
     * @return string
     */
    public function getTicketNumber()
    {
        return $this->container['ticket_number'];
    }

    /**
     * Sets ticket_number
     * @param string $ticket_number Ticket reference number
     * @return $this
     */
    public function setTicketNumber($ticket_number)
    {
        $this->container['ticket_number'] = $ticket_number;

        return $this;
    }

    /**
     * Gets card_number
     * @return string
     */
    public function getCardNumber()
    {
        return $this->container['card_number'];
    }

    /**
     * Sets card_number
     * @param string $card_number Last 4 digits of the credit card
     * @return $this
     */
    public function setCardNumber($card_number)
    {
        $this->container['card_number'] = $card_number;

        return $this;
    }

    /**
     * Gets event_name
     * @return string
     */
    public function getEventName()
    {
        return $this->container['event_name'];
    }

    /**
     * Sets event_name
     * @param string $event_name Name of the event
     * @return $this
     */
    public function setEventName($event_name)
    {
        $this->container['event_name'] = $event_name;

        return $this;
    }

    /**
     * Gets artist_name
     * @return string
     */
    public function getArtistName()
    {
        return $this->container['artist_name'];
    }

    /**
     * Sets artist_name
     * @param string $artist_name Name of the performing artist
     * @return $this
     */
    public function setArtistName($artist_name)
    {
        $this->container['artist_name'] = $artist_name;

        return $this;
    }

    /**
     * Gets customer_ref_id
     * @return string
     */
    public function getCustomerRefId()
    {
        return $this->container['customer_ref_id'];
    }

    /**
     * Sets customer_ref_id
     * @param string $customer_ref_id Customers reference id
     * @return $this
     */
    public function setCustomerRefId($customer_ref_id)
    {
        $this->container['customer_ref_id'] = $customer_ref_id;

        return $this;
    }

    /**
     * Gets venue
     * @return \Swagger\Client\Model\EventVenue
     */
    public function getVenue()
    {
        return $this->container['venue'];
    }

    /**
     * Sets venue
     * @param \Swagger\Client\Model\EventVenue $venue
     * @return $this
     */
    public function setVenue($venue)
    {
        $this->container['venue'] = $venue;

        return $this;
    }

    /**
     * Gets location
     * @return \Swagger\Client\Model\TicketLocation
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     * @param \Swagger\Client\Model\TicketLocation $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets ticket_category
     * @return float
     */
    public function getTicketCategory()
    {
        return $this->container['ticket_category'];
    }

    /**
     * Sets ticket_category
     * @param float $ticket_category The category of the ticket
     * @return $this
     */
    public function setTicketCategory($ticket_category)
    {
        $this->container['ticket_category'] = $ticket_category;

        return $this;
    }

    /**
     * Gets ticket_price
     * @return float
     */
    public function getTicketPrice()
    {
        return $this->container['ticket_price'];
    }

    /**
     * Sets ticket_price
     * @param float $ticket_price The price of the ticket
     * @return $this
     */
    public function setTicketPrice($ticket_price)
    {
        $this->container['ticket_price'] = $ticket_price;

        return $this;
    }

    /**
     * Gets date_purchased
     * @return float
     */
    public function getDatePurchased()
    {
        return $this->container['date_purchased'];
    }

    /**
     * Sets date_purchased
     * @param float $date_purchased The date the ticket was purchased
     * @return $this
     */
    public function setDatePurchased($date_purchased)
    {
        $this->container['date_purchased'] = $date_purchased;

        return $this;
    }

    /**
     * Gets door_open_time
     * @return \DateTime
     */
    public function getDoorOpenTime()
    {
        return $this->container['door_open_time'];
    }

    /**
     * Sets door_open_time
     * @param \DateTime $door_open_time The time that the doors open
     * @return $this
     */
    public function setDoorOpenTime($door_open_time)
    {
        $this->container['door_open_time'] = $door_open_time;

        return $this;
    }

    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param string $currency The currency that the tickets is sold in
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets subtotal_price
     * @return float
     */
    public function getSubtotalPrice()
    {
        return $this->container['subtotal_price'];
    }

    /**
     * Sets subtotal_price
     * @param float $subtotal_price The Tickets's sub total
     * @return $this
     */
    public function setSubtotalPrice($subtotal_price)
    {
        $this->container['subtotal_price'] = $subtotal_price;

        return $this;
    }

    /**
     * Gets total_price
     * @return float
     */
    public function getTotalPrice()
    {
        return $this->container['total_price'];
    }

    /**
     * Sets total_price
     * @param float $total_price The Tickets's total
     * @return $this
     */
    public function setTotalPrice($total_price)
    {
        $this->container['total_price'] = $total_price;

        return $this;
    }

    /**
     * Gets total_shipping
     * @return float
     */
    public function getTotalShipping()
    {
        return $this->container['total_shipping'];
    }

    /**
     * Sets total_shipping
     * @param float $total_shipping The Tickets's shipping cost
     * @return $this
     */
    public function setTotalShipping($total_shipping)
    {
        $this->container['total_shipping'] = $total_shipping;

        return $this;
    }

    /**
     * Gets total_fees
     * @return float
     */
    public function getTotalFees()
    {
        return $this->container['total_fees'];
    }

    /**
     * Sets total_fees
     * @param float $total_fees The Tickets's fees cost
     * @return $this
     */
    public function setTotalFees($total_fees)
    {
        $this->container['total_fees'] = $total_fees;

        return $this;
    }

    /**
     * Gets total_tax
     * @return float
     */
    public function getTotalTax()
    {
        return $this->container['total_tax'];
    }

    /**
     * Sets total_tax
     * @param float $total_tax The Tickets's tax amount
     * @return $this
     */
    public function setTotalTax($total_tax)
    {
        $this->container['total_tax'] = $total_tax;

        return $this;
    }

    /**
     * Gets customer_email
     * @return string
     */
    public function getCustomerEmail()
    {
        return $this->container['customer_email'];
    }

    /**
     * Sets customer_email
     * @param string $customer_email The email address of the customer that purchased
     * @return $this
     */
    public function setCustomerEmail($customer_email)
    {
        $this->container['customer_email'] = $customer_email;

        return $this;
    }

    /**
     * Gets modified_date
     * @return \DateTime
     */
    public function getModifiedDate()
    {
        return $this->container['modified_date'];
    }

    /**
     * Sets modified_date
     * @param \DateTime $modified_date Date last modified
     * @return $this
     */
    public function setModifiedDate($modified_date)
    {
        $this->container['modified_date'] = $modified_date;

        return $this;
    }

    /**
     * Gets user_id
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     * @param string $user_id Connected user id
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

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


