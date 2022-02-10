<?php

namespace Tests\Unit;

use Achrafbardan\KvkSdk\Client;
use PHPUnit\Framework\TestCase;

class SearchTest extends TestCase
{
    /** @test */
    public function it_can_search()
    {
        $client = new Client();

        $response = $client->search('12345678');
        
        $this->assertArrayHasKey('resultatenHR', $response->json());
    }
}