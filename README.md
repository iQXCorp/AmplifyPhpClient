# SwaggerClient-php
Welcome to the iQX Amplify API reference. This is a live example of how you can use [iQX Amplify](http://app.iqxamplify.com/) to integrate your own e-commerce store or ticketing engine.  The iQX Amplify API is organized around the [REST](http://en.wikipedia.org/wiki/Representational_State_Transfer) mothodology, and it uses resource-oriented URLs, and common HTTP response codes to indicate API errors. All requests are authenticated using an `api-key` which can be obtained from your developer dashboard within iQX Amplify.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
Swagger\Client\Configuration::getDefaultConfiguration()->setSandboxMode(true);
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\CustomersApi();
$customer = new \Swagger\Client\Model\Customer(); // \Swagger\Client\Model\Customer | Add or update customer details

try {
    $result = $api_instance->createOrUpdateCustomer($customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->createOrUpdateCustomer: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://public-api.iqxamplify.com/V1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CustomersApi* | [**createOrUpdateCustomer**](docs/Api/CustomersApi.md#createorupdatecustomer) | **POST** /customers/ | Create or Update a customer
*CustomersApi* | [**findCustomers**](docs/Api/CustomersApi.md#findcustomers) | **GET** /customers/ | Retrieve all customers
*CustomersApi* | [**findCustomersById**](docs/Api/CustomersApi.md#findcustomersbyid) | **GET** /customers/{id} | Retrieve a single customer by id
*OrdersApi* | [**createOrUpdateOrder**](docs/Api/OrdersApi.md#createorupdateorder) | **POST** /orders/ | Create or Update a order
*OrdersApi* | [**findOrders**](docs/Api/OrdersApi.md#findorders) | **GET** /orders/ | Retrieve all orders
*OrdersApi* | [**findOrdersById**](docs/Api/OrdersApi.md#findordersbyid) | **GET** /orders/{id} | Retrieve a single order by id
*ProductsApi* | [**createOrUpdateProduct**](docs/Api/ProductsApi.md#createorupdateproduct) | **POST** /products/ | Create or Update a product
*ProductsApi* | [**findProducts**](docs/Api/ProductsApi.md#findproducts) | **GET** /products/ | Retrieve all products
*ProductsApi* | [**findProductsById**](docs/Api/ProductsApi.md#findproductsbyid) | **GET** /products/{id} | Retrieve a single product by id


## Documentation For Models

 - [Customer](docs/Model/Customer.md)
 - [Customers](docs/Model/Customers.md)
 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [Event](docs/Model/Event.md)
 - [EventVenue](docs/Model/EventVenue.md)
 - [Events](docs/Model/Events.md)
 - [Order](docs/Model/Order.md)
 - [OrderAttributes](docs/Model/OrderAttributes.md)
 - [OrderLineItems](docs/Model/OrderLineItems.md)
 - [Orders](docs/Model/Orders.md)
 - [Pagination](docs/Model/Pagination.md)
 - [Product](docs/Model/Product.md)
 - [ProductAttributes](docs/Model/ProductAttributes.md)
 - [ProductVariants](docs/Model/ProductVariants.md)
 - [Products](docs/Model/Products.md)
 - [Store](docs/Model/Store.md)
 - [Ticket](docs/Model/Ticket.md)
 - [TicketClass](docs/Model/TicketClass.md)
 - [TicketClassAvailability](docs/Model/TicketClassAvailability.md)
 - [TicketClasses](docs/Model/TicketClasses.md)
 - [TicketLocation](docs/Model/TicketLocation.md)
 - [Tickets](docs/Model/Tickets.md)
 - [UserEvent](docs/Model/UserEvent.md)
 - [UserEventResponse](docs/Model/UserEventResponse.md)


## Documentation For Authorization


## api_key

- **Type**: API key
- **API key parameter name**: authorization
- **Location**: HTTP header


## Author

development@iqxcorp.com


