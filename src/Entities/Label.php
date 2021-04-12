<?php

namespace DenizTezcan\Parcel2Send\Entities;

class Label
{

	public static function create(
		array $shipmentIds,
    	string $printer
	) {
		return [
			'shipment_ids' 	=> $shipmentIds,
			'printer' 		=> $printer,
		];
	}
}