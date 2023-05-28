<?php

it('it rotates a multidimensional array, turning the rows into columns and the columns into rows', function (array $data, array $result) {
    expect(collect($data)->transpose())->toEqual(collect($result));
})->with([
    'numbers' => [
        [
            [1, 2, 3],
            [4, 5, 6],
            [7, 8, 9],
        ],
        [
            [1, 4, 7],
            [2, 5, 8],
            [3, 6, 9],
        ],
    ],
    'strings' => [
        [
            ['a', 'b', 'c'],
            ['d', 'e', 'f'],
            ['g', 'h', 'i'],
        ],
        [
            ['a', 'd', 'g'],
            ['b', 'e', 'h'],
            ['c', 'f', 'i'],
        ],
    ],
]);
