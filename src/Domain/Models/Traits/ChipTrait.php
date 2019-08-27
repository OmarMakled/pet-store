<?php

namespace App\Domain\Models\Traits;

use App\Domain\Contracts\HasChipInterface;
use Datetime;

trait ChipTrait
{
    /**
     * Chip id.
     *
     * @var int
     */
    private $chipId;

    /**
     * Chip implemented at date.
     *
     * @var \Datetime
     */
    private $chipImplementedAt;

    /**
     * Get chip id
     *
     * @return integer|null
     */
    public function getChipId(): ?int
    {
        return $this->chipId;
    }

    /**
     * Set chip id
     *
     * @param integer $chipId
     * @return HasChipInterface
     */
    public function setChipId(int $chipId): HasChipInterface
    {
        $this->chipId = $chipId;

        return $this;
    }

    /**
     * Get chip implemented at date.
     *
     * @return \Datetime|null
     */
    public function getChipImplementedAt(): ?Datetime
    {
        return $this->implementedAt;
    }

    /**
     * Set chip implemented at date.
     *
     * @param \Datetime $implementedAt
     * @return HasChipInterface
     */
    public function setChipImplementedAt(Datetime $implementedAt): HasChipInterface
    {
        $this->implementedAt = $implementedAt;

        return $this;
    }

    /**
     * Determine wheter has chip.
     *
     * @return boolean
     */
    public function hasChip(): bool
    {
        return (bool) $this->getChipId();
    }
}
