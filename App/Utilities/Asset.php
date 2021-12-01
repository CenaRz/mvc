<?php

namespace App\Utilities;

class Asset {
   
     public static function css(string $route)
    {
        return $_ENV['HOST'] . 'assets/css/' . $route;
    }

    function __call($name, $arguments)
    {
        call_user_func_array([$this, $name], $arguments);
        return $_ENV['HOST'] . 'assets/' . $name . $arguments ;
    }
}

