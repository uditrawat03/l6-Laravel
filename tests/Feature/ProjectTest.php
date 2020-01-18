<?php
namespace Tests\Feature;

use Tests\TestCase;

class ProjectTest extends TestCase{

    /** @test */
    public function a_user_can_create_new_project(){

        $artributes = [
            'title' => 'AMS - JCDcauxe',
            'Description' => "This is test project"
        ];

        $response = $this->post('api/projects/create', $artributes);

        $response->assertStatus(201);

    }
}