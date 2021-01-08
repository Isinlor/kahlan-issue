<?php
declare(strict_types=1);

namespace Test;


class AnotherStaticClass
{
    static $var = 2;
    public static function &getReference() {
        return static::$var;
    }

    public static function doSomething() {
        $var = 1;
        $var &= static::getReference();
    }
}
