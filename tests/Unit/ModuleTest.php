<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ModuleTest extends TestCase {

    use RefreshDatabase;

    /**@test */
    public function test_add_new_module(){     
        $this->withoutExceptionHandling();

        $name = "Brand";
        $attibutes= ['name' => $name];
        $moduleService = app()->make('\App\Services\ModuleService');
        $moduleService->create($attibutes);

        $modules = $moduleService->get();
        $this->assertCount(1, $modules);
    }

}