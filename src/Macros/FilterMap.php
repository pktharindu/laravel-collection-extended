<?php

namespace Pktharindu\LaravelCollectionExtended\Macros;

use Closure;
use Illuminate\Support\Collection;

/**
 * Map a collection, then filter the results.
 *
 * @param  callable  $fallback
 *
 * @mixin Collection
 *
 * @return Collection
 */
class FilterMap
{
    public function __invoke(): Closure
    {
        return fn (callable $callback): Collection => $this->map($callback)->filter();
    }
}
