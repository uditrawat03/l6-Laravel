<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MasterApiTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_master_api_route_check()
    {
        $response = $this->get('/api/master?listing=test');
        $response->assertStatus(200);
    }

    /** @test */
    public function a_single_master_api_call()
    {
        $response = $this->get('/api/master?listing=company-source')->json();
        $this->assertEquals('companySource', key($response));
    }


    /** @test */
    public function get_multiple_master_from_master_api()
    {
        $response = $this->get('/api/master?listing=company-source,company-class,company-importance')->json();
        $this->assertArrayHasKey("companySource", $response);
        $this->assertArrayHasKey("companyClass", $response);
        $this->assertArrayHasKey("companyImportance", $response);
    }
}
