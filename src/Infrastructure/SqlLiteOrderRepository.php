<?php

/**
 * This file is part of pet store ddd app.
 *
 * @author Omar Makled <omar.makled@gmail.com>
 */

namespace App\Infrastructure;

use App\Domain\Contracts\OrderRepositoryInterface;
use App\Domain\Models\Order;

class SqlLiteOrderRepository implements OrderRepositoryInterface
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

    }

    /**
     * {@inheritDoc}
     */
    public function get(string $from, string $to): array
    {

    }
}
