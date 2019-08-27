<?php

/**
 * This file is part of pet store ddd app.
 *
 * @author Omar Makled <omar.makled@gmail.com>
 */

namespace App\Domain\Models;

use App\Domain\Contracts\HasChipInterface;
use App\Domain\Exceptions\ChipNotFoundException;
use App\Domain\Models\Pet;
use App\Domain\Models\Traits\AccessibleTrait;

final class Order
{
    use AccessibleTrait;

    /**
     * Pet instance.
     *
     * @var \App\Domain\Models\Pet
     */
    private $pet;

    /**
     * Insurace value.
     *
     * @var int
     */
    private $insurace;

    /**
     * Order price.
     *
     * @var int
     */
    private $price;

    /**
     * Get the value of pet
     */
    public function getPet(): Pet
    {
        return $this->pet;
    }

    /**
     * Set the value of pet
     *
     * @return  self
     */
    public function setPet(Pet $pet): self
    {
        if ($pet instanceof HasChipInterface && !$pet->hasChip()) {
            throw new ChipNotFoundException;
        }

        $this->pet = $pet;

        return $this;
    }

    /**
     * Get the value of insurace
     */
    public function getInsurace(): int
    {
        return $this->insurace;
    }

    /**
     * Set the value of insurace
     *
     * @return self
     */
    public function setInsurace(?int $insurace = 10000): self
    {
        $this->insurace = $insurace;

        return $this;
    }

    /**
     * Get order price from pet
     *
     * @return int
     */
    public function getPrice(): int
    {
        if (!$this->price) {
            return $this->pet->getPrice();
        }

        return $this->price();
    }
}
