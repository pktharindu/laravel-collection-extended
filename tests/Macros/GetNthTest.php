<?php

namespace Pktharindu\LaravelCollectionExtended\Tests\Macros;

it('it returns the nth item', function () {
    $collection = collect([1, 2, 3, 4, 5]);

    expect($collection->getNth(1))->toEqual(1)
        ->and($collection->getNth(3))->toEqual(3)
        ->and($collection->getNth(5))->toEqual(5)
        ->and($collection->getNth(7))->toBeNull();
});
