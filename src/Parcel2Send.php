<?php

namespace DenizTezcan\Parcel2Send;

use DenizTezcan\Parcel2Send\Http\Client;

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

}