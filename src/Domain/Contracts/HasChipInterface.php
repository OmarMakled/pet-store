<?php

/**
 * This file is part of pet shop.
 *
 * @author Omar Makled <omar.makled@gmail.com>
 */

namespace App\Domain\Contracts;

use Datetime;

interface HasChipInterface
{
    /**
     * Get chip id
     *
     * @return integer|null
     */
    public function getChipId(): ?int;

    /**
     * Set chip id
     *
     * @param integer $chipId
     * @return HasChipInterface
     */
    public function setChipId(int $chipId): HasChipInterface;

    /**
     * Get chip implemented at date.
     *
     * @return \Datetime|null
     */
    public function getChipImplementedAt(): ?Datetime;

    /**
     * Set chip implemented at date.
     *
     * @param \Datetime $implementedAt
     * @return HasChipInterface
     */
    public function setChipImplementedAt(Datetime $implementedAt): HasChipInterface;

    /**
     * Determine wheter has chip.
     *
     * @return boolean
     */
    public function hasChip(): bool;
}
