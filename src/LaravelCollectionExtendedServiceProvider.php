<?php

namespace Pktharindu\LaravelCollectionExtended;

use Pktharindu\LaravelCollectionExtended\Commands\LaravelCollectionExtendedCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelCollectionExtendedServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-collection-extended')
            ->hasCommand(LaravelCollectionExtendedCommand::class);
    }
}
