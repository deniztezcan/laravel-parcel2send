<?php

namespace DenizTezcan\Parcel2Send\Entities;

class Shipment
{
	public static function create(
		string $shippingOption,
    	array $senderAddress,
    	array $returnAddress,
    	array $clientAddress,
    	float $weight,
    	int $labelsNumber,
    	string $webshopsOrderId
    ) {   
    	$returnable = [
		    'shipping_option' 	=> $shippingOption,
		    'sender_address' 	=> $senderAddress,
		    'return_address' 	=> $returnAddress,
		    'weight' 			=> $weight,
		    'labels_num' 		=> $labelsNumber,
		    'webshop_order_id' 	=> $webshopsOrderId,
		    'items'				=> false
		];

		$returnable = array_merge($returnable, $clientAddress);

		return $returnable;
    }
}