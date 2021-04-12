<?php

namespace DenizTezcan\Parcel2Send\Http;
use GuzzleHttp\Psr7\Response;

class Client extends AbstractClient
{

	public function request(
		string $method,
        string $endpoint,
        array $parameters = [],
        array $headers = []
	): Response {
		switch ($method) {
            case 'GET':
                return $this->get($endpoint, $parameters, $headers);
                break;
            case 'POST':
                return $this->post($endpoint, $parameters, $headers);
                break;
        }
	}

}