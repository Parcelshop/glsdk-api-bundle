<?php
namespace Lsv\GlsdkApiBundle\Service;

use GuzzleHttp\Client;

class Parcelshop extends \Lsv\GlsDk\ParcelShop
{

    /**
     * Construct parcel
     *
     * @param Client $client
     */
    public function __construct(Client $client = null)
    {
        parent::__construct($client);
    }

}
