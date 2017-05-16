<?php

describe('random_int', function() {

    it('returns 2', function () {

        allow('random_int')->toBeCalled()->andReturn(2);
        expect('random_int')->toBeCalled();

        expect(random_int(0, 1))->toBe(2);

    });

});
