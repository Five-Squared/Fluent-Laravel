<?php 
namespace Fluent\Laravel;

use Illuminate\Support;

/**
 * Atlas Facade
 *
 * @method static Atlas model($class) Get a model helper class.
 */
class Facade extends Support\Facades\Facade\Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'fluent';
    }
}