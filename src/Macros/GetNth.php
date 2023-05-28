<?php

namespace Pktharindu\LaravelCollectionExtended\Macros;

use Closure;
use Illuminate\Support\Collection;

/***
 * Get the nth item from the collection.
 *
 * @param int $nth
 * @param mixed $fallback
 *
 * @mixin Collection
 *
 * @return mixed
 */
class GetNth
{
    public function __invoke(): Closure
    {
        return fn (int $nth) => $this->slice($nth - 1, 1)->first();
    }
}
