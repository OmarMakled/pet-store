<?php

/**
 * This file is part of pet store ddd app.
 *
 * @author Omar Makled <omar.makled@gmail.com>
 */

namespace App\Application;

use App\Application\OrderServiceInterface;
use App\Domain\Contracts\OrderRepositoryInterface;
use App\Domain\Models\Order;
use Carbon\Carbon;

class OrderService implements OrderServiceInterface
{
    /**
     * OrderRepositoryInterface instance.
     *
     * @var OrderRepositoryInterface
     */
    private $orderRepo;

    /**
     * Creates a new order service instance.
     *
     * @param \App\Domain\Contracts\OrderRepositoryInterface $orderRepo
     */
    public function __construct(OrderRepositoryInterface $orderRepo)
    {
        $this->orderRepo = $orderRepo;
    }

    /**
     * {@inheritDoc}
     */
    public function create(Order $order)
    {
        $this->orderRepo->insert($order);
    }

    /**
     * {@inheritDoc}
     */
    public function count(): int
    {
        return count($this->orderRepo->get());
    }

    /**
     * {@inheritDoc}
     */
    public function weeklyRevenue(): array
    {
        $from   = Carbon::now()->subWeek();
        $to     = Carbon::now();
        $orders = $this->orderRepo->get($from, $to);

        return $orders;
    }
}
