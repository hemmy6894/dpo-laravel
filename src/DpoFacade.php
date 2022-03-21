<?php

namespace Hemmy\Dpo;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Hemmy\Dpo\Dpo
 * 
 */
class DpoFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'dpo-laravel';
    }
}
