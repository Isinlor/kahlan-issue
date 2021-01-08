<?php
declare(strict_types=1);

namespace Test;

class StaticClass
{
    static $var = 2;
    public static function &getReference(&$test = 0) {
        return static::$var;
    }

    public static function doSomething() {
        $var = 1;
        $var &= AnotherStaticClass::getReference();
    }

}
