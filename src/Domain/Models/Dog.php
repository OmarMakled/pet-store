<?php

/**
 * This file is part of pet shop.
 *
 * @author Omar Makled <omar.makled@gmail.com>
 */

namespace App\Domain\Models;

use App\Domain\Contracts\HasChipInterface;
use App\Domain\Models\Pet;
use App\Domain\Models\Traits\ChipTrait;

final class Dog extends Pet implements HasChipInterface
{
    use ChipTrait;
}
