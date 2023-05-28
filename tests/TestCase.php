<?php

namespace Pktharindu\LaravelCollectionExtended\Tests;

use PHPUnit\Framework\TestCase as BaseTestCase;
use Pktharindu\LaravelCollectionExtended\LaravelCollectionExtendedServiceProvider;
use ReflectionClass;
use ReflectionException;

abstract class TestCase extends BaseTestCase
{
    /**
     * @throws ReflectionException
     */
    protected function setUp(): void
    {
        $this->createDummyProvider()->register();
    }

    /**
     * @throws ReflectionException
     */
    protected function createDummyProvider(): LaravelCollectionExtendedServiceProvider
    {
        $reflectionClass = new ReflectionClass(LaravelCollectionExtendedServiceProvider::class);

        return $reflectionClass->newInstanceWithoutConstructor();
    }
}
