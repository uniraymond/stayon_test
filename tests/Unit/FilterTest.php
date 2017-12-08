<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FilterTest extends TestCase
{
    protected $route = '/api/filter';

    /**
     * A basic filter test.
     *
     * @return void
     */
    public function testPropertiesLoad()
    {
        $response = $this->call('GET', '/');
        $this->assertEquals(200, $response->status());
    }
}
