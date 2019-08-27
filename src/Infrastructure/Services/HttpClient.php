<?php

/**
 * This file is part of pet store ddd app.
 *
 * @author Omar Makled <omar.makled@gmail.com>
 */

namespace App\Infrastructure\Services;

use GuzzleHttp\Client;

class HttpClient
{
    /**
     * Client instance.
     *
     * @var \GuzzleHttp\Client
     */
    private $client;

    /**
     * Creates a new http client instance.
     *
     * @param \GuzzleHttp\Client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Get request
     *
     * @param string $url
     * @return array
     */
    public function get(string $url = null)
    {
        $response = $this->client->request('GET');
        return json_decode((string) $response->getBody(), true);
    }
}
