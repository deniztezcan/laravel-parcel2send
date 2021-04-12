<?php

namespace DenizTezcan\Parcel2Send\Entities;

class Label
{

	public static function create(
		array $shipmentIds,
    	array $webshopsOrderIds,
    	string $printer
	) {
		return [
			'shipment_ids' 			=> $shipment_ids,
			'webshop_order_ids' 	=> $webshopsOrderIds,
			'printer' 				=> $printer,
		];
	}
}