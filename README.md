GLS parcelshop (for Denmark) - Symfony Bundle
=============================================

Install
-------

### Composer

Add this to your composer

````
"lsv/glsdk-parcelshop-api-bundle": "~1.0"
````

Or run

````
composer require lsv/glsdk-parcelshop-api-bundle
````

### AppKernel

Add this to your AppKernel.php

````
new Lsv\GlsdkApiBundle\LsvGlsdkApiBundle()
````

Usage
-----

### Service

````
$this->get('glsdk.parcelshop')
````

### Methods

````
$this->get('glsdk.parcelshop')->getParcelshop( ID )

$this->get('glsdk.parcelshop')->getParcelshopsFromZipcode( ZIPCODE )

$this->get('glsdk.parcelshop')->getParcelshopsNearAddress( STREET, ZIPCODE, LIMIT )

$this->get('glsdk.parcelshop')->getAllParcelshops()
````

Learn more about what the methods do at the [bundles homepage](https://github.com/lsv/glsdk-api)

### Adding your own guzzle client, fx if you want cache or retry service

Overwrite the parameter ````glsdk.parcelshop.client```` with your own client

Or you can overwrite the whole class with the parameter ````glsdk.parcelshop.class````