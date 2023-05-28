<?php

namespace Pktharindu\LaravelCollectionExtended;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;
use Pktharindu\LaravelCollectionExtended\Macros\FilterMap;
use Pktharindu\LaravelCollectionExtended\Macros\GetNth;
use Pktharindu\LaravelCollectionExtended\Macros\Transpose;

class LaravelCollectionExtendedServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        Collection::make($this->macros())
            ->reject(fn ($class, $macro) => Collection::hasMacro($macro))
            ->each(fn ($class, $macro) => Collection::macro($macro, resolve($class)()));
    }

    private function macros(): array
    {
        return [
            'getNth' => GetNth::class,
            'filterMap' => FilterMap::class,
            'transpose' => Transpose::class,
        ];
    }
}
