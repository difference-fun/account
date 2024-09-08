<?php

namespace Package\Difference\Fun\Account\Output\Filter;

use Difference\Fun\App;

use Difference\Fun\Module\Controller;

class Role extends Controller {

    const DIR = __DIR__ . '/';

    public static function permission(App $object, $response=null): array
    {
        //permission array should stay intact
        return $response;
    }

    public static function user(App $object, $response=null): array
    {
        //permission array should stay intact
        return $response;
    }

}