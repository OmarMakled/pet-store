<?php

namespace Test\Unit\Domain;

use App\Domain\Models\Bird;
use App\Domain\Models\Pet;
use PHPUnit\Framework\TestCase;

class BirdTest extends TestCase
{
    public function testItsInstanceOfPet()
    {
        $bird = new Bird;

        $this->assertInstanceOf(Pet::class, $bird);
    }
}
