<?php

/**
 * This file is part of pet store ddd app.
 *
 * @author Omar Makled <omar.makled@gmail.com>
 */

namespace App\Application;

use App\Domain\Models\Order;

interface OrderServiceInterface
{
    /**
     * Add new order
     *
     * @param \App\Domain\Models\Order $order
     * @return void
     */
    public function create(Order $order);

    /**
     * Get weekly revenue.
     *
     * @return array
     */
    public function weeklyRevenue(): array;

    /**
     * Get total count.
     *
     * @return int
     */
    public function count(): int;
}
