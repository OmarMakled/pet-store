<?php

/**
 * This file is part of pet store ddd app.
 *
 * @author Omar Makled <omar.makled@gmail.com>
 */

namespace App\Infrastructure;

use App\Domain\Contracts\OrderRepositoryInterface;
use App\Domain\Models\Order;
use App\Infrastructure\Services\HttpClient;
use Datetime;

class CloudOrderRepository implements OrderRepositoryInterface
{
    /**
     * Client instance.
     *
     * @var \App\Infrastructure\Services\HttpClient
     */
    private $client;

    /**
     * Creates a new colud order repository instance.
     *
     * @param string $path
     */
    public function __construct(HttpClient $client)
    {
        $this->client = $client;
    }

    /**
     * {@inheritDoc}
     */
    public function insert(Order $order)
    {

    }

    /**
     * {@inheritDoc}
     */
    public function get(Datetime $from = null, Datetime $to = null): array
    {
        return $this->client->get();
    }
}
