<?php

namespace Saade\FilamentDynamicDashboard\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Saade\FilamentDynamicDashboard\FilamentDynamicDashboard
 */
class FilamentDynamicDashboard extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Saade\FilamentDynamicDashboard\FilamentDynamicDashboard::class;
    }
}
