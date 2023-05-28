<?php

namespace Pktharindu\LaravelCollectionExtended\Macros;

use Closure;
use Illuminate\Support\Collection;

/**
 * Rotates a multidimensional array, turning the rows into columns and the columns into rows.
 *
 * @mixin Collection
 *
 * @return Collection
 */
class Transpose
{
    public function __invoke(): Closure
    {
        return function (): Collection {
            $items = array_map(function (...$items) {
                return $items;
            }, ...$this->values());

            return new static($items);
        };
    }
}
