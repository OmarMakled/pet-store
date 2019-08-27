<?php

/**
 * This file is part of pet store ddd app.
 *
 * @author Omar Makled <omar.makled@gmail.com>
 */

namespace App\Domain\Contracts;

use App\Domain\Models\Order;
use Datetime;

interface OrderRepositoryInterface
{
    /**
     * Insert new order.
     *
     * @param \App\Domain\Models\Order $order
     * @return void
     */
    public function insert(Order $order);

    /**
     * Get orders.
     *
     * @param Datetime $from
     * @param Datetime $to
     * @return void
     */
    public function get(Datetime $from = null, Datetime $to = null): array;
}
