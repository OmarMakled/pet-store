<?php

/**
 * This file is part of pet store ddd app.
 *
 * @author Omar Makled <omar.makled@gmail.com>
 */

namespace App\Infrastructure;

use App\Domain\Contracts\OrderRepositoryInterface;
use App\Domain\Models\Order;
use Datetime;

class MemoryOrderRepository implements OrderRepositoryInterface
{
    /**
     * List of orders.
     *
     * @var array
     */
    private $orders = [];

    /**
     * {@inheritDoc}
     */
    public function insert(Order $order)
    {
        $this->orders[] = $order;
    }

    /**
     * {@inheritDoc}
     */
    public function get(Datetime $from = null, Datetime $to = null): array
    {
        return $this->orders;
    }
}
