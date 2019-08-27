<?php

/**
 * This file is part of pet store ddd app.
 *
 * @author Omar Makled <omar.makled@gmail.com>
 */

namespace App\Infrastructure;

use App\Infrastructure\CloudOrderRepository;
use App\Infrastructure\Exceptions\ProviderNotFoundException;
use App\Infrastructure\MemoryOrderRepository;
use App\Infrastructure\Services\HttpClient;
use GuzzleHttp\Client;

class RepositoryFactory
{
    /**
     * A static factory method.
     *
     * @param string $provider
     *
     * @throws \App\Infrastructure\Exceptions\ProviderNotFoundException
     * @return \App\Domain\Contracts\OrderRepositoryInterface
     */
    public static function create(string $provider)
    {
        if ($provider == 'Cloud') {
            return new CloudOrderRepository(
                new HttpClient(new Client([
                    'base_uri' => 'https://pet-store-d6514.firebaseio.com/orders.json',
                ]))
            );
        }

        if ($provider == 'Memory') {
            return new MemoryOrderRepository();
        }

        throw new ProviderNotFoundException;
    }
}
