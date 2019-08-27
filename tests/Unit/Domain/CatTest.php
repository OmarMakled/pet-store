<?php

namespace Test\Unit\Domain;

use App\Domain\Contracts\HasChipInterface;
use App\Domain\Models\Cat;
use PHPUnit\Framework\TestCase;

class CatTest extends TestCase
{
    public function testItsInstanceOfHasChip()
    {
        $cat = new Cat;

        $this->assertInstanceOf(HasChipInterface::class, $cat);
    }

    public function testItHasChip()
    {
        $cat = (new Cat)->setChipId(1);

        $this->assertTrue($cat->hasChip());
    }
}
