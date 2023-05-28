<?php

namespace Pktharindu\LaravelCollectionExtended\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Pktharindu\LaravelCollectionExtended\LaravelCollectionExtendedServiceProvider;

abstract class IntegrationTestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [LaravelCollectionExtendedServiceProvider::class];
    }

    public function avoidTestMarkedAsRisky(): void
    {
        $this->assertTrue(true);
    }
}
