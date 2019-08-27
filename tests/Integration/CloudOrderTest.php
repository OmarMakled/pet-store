<?php

namespace Test\Integration;

use App\Application\OrderService;
use App\Infrastructure\RepositoryFactory;
use PHPUnit\Framework\TestCase;

class CloudOrderTest extends TestCase
{
    public function testGetWeeklyRevenue()
    {
        $orderService = new OrderService(RepositoryFactory::create('Cloud'));

        $this->assertIsArray($orderService->weeklyRevenue());
    }
}
