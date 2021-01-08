<?php

use Test\StaticClass;

describe('StaticClass', function() {

    given('class', function () {
        return new StaticClass();
    });

    it('::getReference()', function () {

        $var = 1;
        $var &= StaticClass::getReference();

        StaticClass::doSomething();

        expect($this->class)->toBeAnInstanceOf(StaticClass::class);

    });

});
