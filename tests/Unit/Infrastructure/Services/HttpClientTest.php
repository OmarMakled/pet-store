<?php

namespace Test\Unit\Infrastructure\Services;

use App\Infrastructure\Services\HttpClient;
use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;

class HttpClientTest extends TestCase
{
    public function testGet()
    {
        $client = new HttpClient(
            new Client([
                'base_uri' => 'https://pet-store-d6514.firebaseio.com/orders.json',
                'timeout'  => 2.0,
            ])
        );
        $data = $client->get();
        $this->assertIsArray($data);
    }
}
