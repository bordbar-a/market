<?php


namespace App\Helpers\Setting\Facade;
use Illuminate\Support\Facades\Facade;


/**
 * @method static Setting get($key)
 */
class Setting extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'setting';
    }

}
