<?php

namespace Pktharindu\LaravelCollectionExtended\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Pktharindu\LaravelCollectionExtended\LaravelCollectionExtended
 */
class LaravelCollectionExtended extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Pktharindu\LaravelCollectionExtended\LaravelCollectionExtended::class;
    }
}
