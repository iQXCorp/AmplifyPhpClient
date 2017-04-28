<?php
/**
 * Event
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
 * Event Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Event implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Event';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'ref_id' => 'string',
        'name' => 'string',
        'description' => 'string',
        'status' => 'string',
        'type' => 'string',
        'event_image' => 'string',
        'event_start_date' => 'string',
        'event_end_date' => 'string',
        'door_open_time' => 'string',
        'event_start_time' => 'string',
        'total_capacity' => 'float',
        'total_tickets_purchased' => 'float',
        'purchase_limit' => 'float',
        'event_url' => 'string',
        'currency' => 'string',
        'tickets' => '\Swagger\Client\Model\TicketClass[]',
        'time_zone' => 'string',
        'artist_name' => 'string',
        'venue' => '\Swagger\Client\Model\EventVenue',
        'scanner_code' => 'string',
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
        'name' => 'name',
        'description' => 'description',
        'status' => 'status',
        'type' => 'type',
        'event_image' => 'event_image',
        'event_start_date' => 'event_start_date',
        'event_end_date' => 'event_end_date',
        'door_open_time' => 'door_open_time',
        'event_start_time' => 'event_start_time',
        'total_capacity' => 'total_capacity',
        'total_tickets_purchased' => 'total_tickets_purchased',
        'purchase_limit' => 'purchase_limit',
        'event_url' => 'event_url',
        'currency' => 'currency',
        'tickets' => 'tickets',
        'time_zone' => 'time_zone',
        'artist_name' => 'artist_name',
        'venue' => 'venue',
        'scanner_code' => 'scanner_code',
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
        'name' => 'setName',
        'description' => 'setDescription',
        'status' => 'setStatus',
        'type' => 'setType',
        'event_image' => 'setEventImage',
        'event_start_date' => 'setEventStartDate',
        'event_end_date' => 'setEventEndDate',
        'door_open_time' => 'setDoorOpenTime',
        'event_start_time' => 'setEventStartTime',
        'total_capacity' => 'setTotalCapacity',
        'total_tickets_purchased' => 'setTotalTicketsPurchased',
        'purchase_limit' => 'setPurchaseLimit',
        'event_url' => 'setEventUrl',
        'currency' => 'setCurrency',
        'tickets' => 'setTickets',
        'time_zone' => 'setTimeZone',
        'artist_name' => 'setArtistName',
        'venue' => 'setVenue',
        'scanner_code' => 'setScannerCode',
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
        'name' => 'getName',
        'description' => 'getDescription',
        'status' => 'getStatus',
        'type' => 'getType',
        'event_image' => 'getEventImage',
        'event_start_date' => 'getEventStartDate',
        'event_end_date' => 'getEventEndDate',
        'door_open_time' => 'getDoorOpenTime',
        'event_start_time' => 'getEventStartTime',
        'total_capacity' => 'getTotalCapacity',
        'total_tickets_purchased' => 'getTotalTicketsPurchased',
        'purchase_limit' => 'getPurchaseLimit',
        'event_url' => 'getEventUrl',
        'currency' => 'getCurrency',
        'tickets' => 'getTickets',
        'time_zone' => 'getTimeZone',
        'artist_name' => 'getArtistName',
        'venue' => 'getVenue',
        'scanner_code' => 'getScannerCode',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['event_image'] = isset($data['event_image']) ? $data['event_image'] : null;
        $this->container['event_start_date'] = isset($data['event_start_date']) ? $data['event_start_date'] : null;
        $this->container['event_end_date'] = isset($data['event_end_date']) ? $data['event_end_date'] : null;
        $this->container['door_open_time'] = isset($data['door_open_time']) ? $data['door_open_time'] : null;
        $this->container['event_start_time'] = isset($data['event_start_time']) ? $data['event_start_time'] : null;
        $this->container['total_capacity'] = isset($data['total_capacity']) ? $data['total_capacity'] : null;
        $this->container['total_tickets_purchased'] = isset($data['total_tickets_purchased']) ? $data['total_tickets_purchased'] : null;
        $this->container['purchase_limit'] = isset($data['purchase_limit']) ? $data['purchase_limit'] : null;
        $this->container['event_url'] = isset($data['event_url']) ? $data['event_url'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['tickets'] = isset($data['tickets']) ? $data['tickets'] : null;
        $this->container['time_zone'] = isset($data['time_zone']) ? $data['time_zone'] : null;
        $this->container['artist_name'] = isset($data['artist_name']) ? $data['artist_name'] : null;
        $this->container['venue'] = isset($data['venue']) ? $data['venue'] : null;
        $this->container['scanner_code'] = isset($data['scanner_code']) ? $data['scanner_code'] : null;
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
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Name of the event
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description Description of the event
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Status of the event
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type The type of event
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets event_image
     * @return string
     */
    public function getEventImage()
    {
        return $this->container['event_image'];
    }

    /**
     * Sets event_image
     * @param string $event_image URL to the event image
     * @return $this
     */
    public function setEventImage($event_image)
    {
        $this->container['event_image'] = $event_image;

        return $this;
    }

    /**
     * Gets event_start_date
     * @return string
     */
    public function getEventStartDate()
    {
        return $this->container['event_start_date'];
    }

    /**
     * Sets event_start_date
     * @param string $event_start_date The date the event starts at
     * @return $this
     */
    public function setEventStartDate($event_start_date)
    {
        $this->container['event_start_date'] = $event_start_date;

        return $this;
    }

    /**
     * Gets event_end_date
     * @return string
     */
    public function getEventEndDate()
    {
        return $this->container['event_end_date'];
    }

    /**
     * Sets event_end_date
     * @param string $event_end_date The data the event ends at
     * @return $this
     */
    public function setEventEndDate($event_end_date)
    {
        $this->container['event_end_date'] = $event_end_date;

        return $this;
    }

    /**
     * Gets door_open_time
     * @return string
     */
    public function getDoorOpenTime()
    {
        return $this->container['door_open_time'];
    }

    /**
     * Sets door_open_time
     * @param string $door_open_time The time that the doors open
     * @return $this
     */
    public function setDoorOpenTime($door_open_time)
    {
        $this->container['door_open_time'] = $door_open_time;

        return $this;
    }

    /**
     * Gets event_start_time
     * @return string
     */
    public function getEventStartTime()
    {
        return $this->container['event_start_time'];
    }

    /**
     * Sets event_start_time
     * @param string $event_start_time The time that the doors close
     * @return $this
     */
    public function setEventStartTime($event_start_time)
    {
        $this->container['event_start_time'] = $event_start_time;

        return $this;
    }

    /**
     * Gets total_capacity
     * @return float
     */
    public function getTotalCapacity()
    {
        return $this->container['total_capacity'];
    }

    /**
     * Sets total_capacity
     * @param float $total_capacity The total capacity for the event
     * @return $this
     */
    public function setTotalCapacity($total_capacity)
    {
        $this->container['total_capacity'] = $total_capacity;

        return $this;
    }

    /**
     * Gets total_tickets_purchased
     * @return float
     */
    public function getTotalTicketsPurchased()
    {
        return $this->container['total_tickets_purchased'];
    }

    /**
     * Sets total_tickets_purchased
     * @param float $total_tickets_purchased The total tickets purchased for all ticket classes
     * @return $this
     */
    public function setTotalTicketsPurchased($total_tickets_purchased)
    {
        $this->container['total_tickets_purchased'] = $total_tickets_purchased;

        return $this;
    }

    /**
     * Gets purchase_limit
     * @return float
     */
    public function getPurchaseLimit()
    {
        return $this->container['purchase_limit'];
    }

    /**
     * Sets purchase_limit
     * @param float $purchase_limit The maximum number of ticket that can be purchased by a customer
     * @return $this
     */
    public function setPurchaseLimit($purchase_limit)
    {
        $this->container['purchase_limit'] = $purchase_limit;

        return $this;
    }

    /**
     * Gets event_url
     * @return string
     */
    public function getEventUrl()
    {
        return $this->container['event_url'];
    }

    /**
     * Sets event_url
     * @param string $event_url The URL to the event page
     * @return $this
     */
    public function setEventUrl($event_url)
    {
        $this->container['event_url'] = $event_url;

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
     * @param string $currency The currency that the event tickets are sold in
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets tickets
     * @return \Swagger\Client\Model\TicketClass[]
     */
    public function getTickets()
    {
        return $this->container['tickets'];
    }

    /**
     * Sets tickets
     * @param \Swagger\Client\Model\TicketClass[] $tickets The individual line items of the order
     * @return $this
     */
    public function setTickets($tickets)
    {
        $this->container['tickets'] = $tickets;

        return $this;
    }

    /**
     * Gets time_zone
     * @return string
     */
    public function getTimeZone()
    {
        return $this->container['time_zone'];
    }

    /**
     * Sets time_zone
     * @param string $time_zone The time zone that the event is in
     * @return $this
     */
    public function setTimeZone($time_zone)
    {
        $this->container['time_zone'] = $time_zone;

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
     * @param string $artist_name The name of the artist
     * @return $this
     */
    public function setArtistName($artist_name)
    {
        $this->container['artist_name'] = $artist_name;

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
     * Gets scanner_code
     * @return string
     */
    public function getScannerCode()
    {
        return $this->container['scanner_code'];
    }

    /**
     * Sets scanner_code
     * @param string $scanner_code the scanner code to unlock the event
     * @return $this
     */
    public function setScannerCode($scanner_code)
    {
        $this->container['scanner_code'] = $scanner_code;

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

