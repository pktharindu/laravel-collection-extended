<?php

it('it returns a mapped collection without empty values', function () {
    $result = collect([1, 2, 3, 4, 5, 6])
        ->filterMap(fn ($number): ?int => $number % 2 === 1 ? $number : null);

    expect($result->values()->toArray())->toEqual([1, 3, 5]);
});
