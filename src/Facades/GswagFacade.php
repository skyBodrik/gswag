<?php

namespace SkyBodrik\Gswag\Facades;

use Illuminate\Support\Facades\Facade;

class GswagFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'gswag';
    }

}