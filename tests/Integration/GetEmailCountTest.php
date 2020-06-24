<?php

namespace Messerli90\Hunterio\Tests\Integration;

use Hunter;
use Messerli90\Hunterio\Tests\TestCase;

class GetEmailCountTest extends TestCase
{
    /** @test */
    public function it_returns_a_response()
    {
        $this->app['config']->set('services.hunter.key', 'apikey');

        $response = Hunter::emailCount()->domain('ghost.org')->get();

        $this->assertArrayHasKey('data', $response);
    }
}
