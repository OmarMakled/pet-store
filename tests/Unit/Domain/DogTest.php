<?php

namespace Test\Unit\Domain;

use App\Domain\Contracts\HasChipInterface;
use App\Domain\Models\Dog;
use PHPUnit\Framework\TestCase;

class DogTest extends TestCase
{
    public function testItsInstanceOfHasChip()
    {
        $dog = new Dog;

        $this->assertInstanceOf(HasChipInterface::class, $dog);
    }

    public function testItHasChip()
    {
        $dog = (new Dog)->setChipId(1);

        $this->assertTrue($dog->hasChip());
    }
}
