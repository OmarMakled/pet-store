<?php

namespace Test\Integration;

use App\Application\OrderService;
use App\Domain\Exceptions\ChipNotFoundException;
use App\Domain\Models\Bird;
use App\Domain\Models\Cat;
use App\Domain\Models\Dog;
use App\Domain\Models\Order;
use App\Infrastructure\RepositoryFactory;
use PHPUnit\Framework\TestCase;

class MemoryOrderTest extends TestCase
{
    public function testCreateOrder()
    {
        $orderService = new OrderService(RepositoryFactory::create('Memory'));

        $cat = (new Cat)->setPrice(100)->setChipId(1);
        $orderService->create((new Order)->setPet($cat));

        $this->assertEquals($orderService->count(), 1);
    }

    public function testChipNotFoundException()
    {
        $this->expectException(ChipNotFoundException::class);

        $orderService = new OrderService(RepositoryFactory::create('Memory'));

        $cat = (new Cat)->setPrice(100);
        $orderService->create((new Order)->setPet($cat));
    }

    public function testGetWeeklyRevenue()
    {
        $orderService = new OrderService(RepositoryFactory::create('Memory'));

        $cat  = (new Cat)->setPrice(100)->setChipId(1);
        $dog  = (new Dog)->setPrice(200)->setChipId(2);
        $bird = (new Bird)->setPrice(200);

        $orderService->create((new Order)->setPet($cat));
        $orderService->create((new Order)->setPet($dog)->setInsurace());
        $orderService->create((new Order)->setPet($bird)->setInsurace());

        $this->assertIsArray($orderService->weeklyRevenue());
    }
}
