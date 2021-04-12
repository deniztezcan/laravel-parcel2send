<?php

namespace DenizTezcan\Parcel2Send\Http;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;

class AbstractClient
{
    public $client;
    private $api_base = 'https://ship.parcel2send.nl';

    public function __construct()
    {
        $this->client = new Client();
    }

    private function getDefaultHeaders(
        string $method, 
        string $url, 
        string $postData
    ): array {
        $date = date('c');
        $hash = config('parcel2send.public') . '|' . $method . '|' . $url . '|' . $postData . '|' . $date;

        return [
            'Content-Type'  => 'application/json',
            'charset'       => 'utf-8',
            'x-date'        => $date,
            'x-public'      => config('parcel2send.public'),
            'x-hash'        => hash_hmac('sha512', $hash, config('parcel2send.secret')),
        ];
    }

    public function post(
        string $url,
        array $parameters = [],
        array $headers = []
    ): Response {
        return $this->client->request('POST', $this->getApiURL($url), [
            'body'    => json_encode($parameters),
            'headers' => array_merge(
                $this->getDefaultHeaders('POST', $url, json_encode($parameters)),
                $headers,
            ),
        ]);
    }

    public function getApiURL(string $endpoint): string
    {
        return $this->api_base . $endpoint;
    }
}