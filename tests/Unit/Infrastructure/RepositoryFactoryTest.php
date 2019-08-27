<?php

namespace Test\Unit\Infrastructure;

use App\Domain\Contracts\OrderRepositoryInterface;
use App\Infrastructure\Exceptions\ProviderNotFoundException;
use App\Infrastructure\RepositoryFactory;
use PHPUnit\Framework\TestCase;

class RepositoryFactoryTest extends TestCase
{
    public function testFactory()
    {
        $repo = RepositoryFactory::create('Cloud');

        $this->assertInstanceOf(OrderRepositoryInterface::class, $repo);
    }

    public function testProviderNotFoundException()
    {
        $this->expectException(ProviderNotFoundException::class);

        $repo = RepositoryFactory::create('Foo');
    }
}
