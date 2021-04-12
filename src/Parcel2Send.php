<?php

namespace DenizTezcan\Parcel2Send;

use DenizTezcan\Parcel2Send\Http\Client;
use DenizTezcan\Parcel2Send\Entities\{Shipment, Label};

class Parcel2Send
{
    protected $client = null;

    public function __construct()
    {
    	if($this->client === null)
    	{
    		$this->client = new Client();
    	}
    }

    public function shipment(
    	string $shippingOption,
    	array $senderAddress,
    	array $returnAddress,
    	array $clientAddress,
    	float $weight,
    	int $labelsNumber,
    	string $webshopsOrderId
    ): array {
    	$response = $this->client->request(
    		'/nl/api/shipment/create',
    		Shipment::create($shippingOption, $senderAddress, $returnAddress, $clientAddress, $weight, $labelsNumber, $webshopsOrderId)
    	);

    	return json_decode($response->getBody()->getContents(), true);
    }

    public function label(
    	array $shipmentIds,
    	string $printer = "zebra"
    ): array {
    	$response = $this->client->request(
    		'/nl/api/shipment/labels',
    		Label::create($shipmentIds, $printer)
    	);

    	return json_decode($response->getBody()->getContents(), true);
    }

}