<?php

namespace DenizTezcan\Parcel2Send\Facades;

use Illuminate\Support\Facades\Facade;

class Parcel2Send extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'parcel2send';
    }
}