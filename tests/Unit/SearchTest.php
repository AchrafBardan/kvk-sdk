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

        $response = $client->search('bardan');

        $data = $response->json();
        
        $this->assertArrayHasKey('resultatenHR', $data);

        $this->assertContains('76274160', array_map(function($result) {
            return $result['dossiernummer'];
        }, $data['resultatenHR']));

    }
}