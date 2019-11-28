<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CompanyTest extends TestCase
{

    use WithFaker;

    /** @test */
    public function a_user_can_add_company()
    {

        $this->withoutExceptionHandling();

        $attributes = [
            'name' => $this->faker->name
        ];

        // \Log::info($attributes);

        $response = $this->post('/api/crm/companies/store', $attributes);
        $response->assertStatus(201);
    }
}
