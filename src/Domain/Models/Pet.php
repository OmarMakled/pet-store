<?php

/**
 * This file is part of pet shop.
 *
 * @author Omar Makled <omar.makled@gmail.com>
 */

namespace App\Domain\Models;

use Datetime;

abstract class Pet
{
    /**
     * Pet unique id
     *
     * @var mixed
     */
    private $id;

    /**
     * Pet's name.
     *
     * @var string
     */
    private $name;

    /**
     * Pet's birth date;
     *
     * @var Datetime;
     */
    private $birthedAt;

    /**
     * Pet's price
     *
     * @var int
     */
    private $price;

    /**
     * Pet's description
     *
     * @var string
     */
    private $description;

    /**
     * Get pet's id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get pet's name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set pet's name
     *
     * @param string $name
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get pet's birth date
     *
     * @return Datetime
     */
    public function getBirthedAt(): Datetime
    {
        return $this->birthedAt;
    }

    /**
     * Set pet's birth date
     *
     * @param Datetime $birthedAt
     * @return self
     */
    public function setBirthedAt(Datetime $birthedAt): self
    {
        $this->birthedAt = $birthedAt;

        return $this;
    }

    /**
     * Get pet's price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set pet's price
     *
     * @param integer $price
     * @return self
     */
    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get pet's description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set pet's description
     *
     * @param string $description
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
