<?php

namespace DenizTezcan\Parcel2Send\Http;
use GuzzleHttp\Psr7\Response;

class Client extends AbstractClient
{

	public function request(
		string $endpoint,
        array $parameters = [],
        array $headers = []
	): Response {
		return $this->post($endpoint, $parameters, $headers);
	}

}