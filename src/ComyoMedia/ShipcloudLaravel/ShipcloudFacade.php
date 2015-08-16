<?php namespace ComyoMedia\ShipcloudLaravel;

use Illuminate\Support\Facades\Facade;

class ShipcloudFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'shipcloud';
    }
}