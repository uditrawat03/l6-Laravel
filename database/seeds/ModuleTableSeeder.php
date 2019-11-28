<?php

use App\Models\Module;
use Illuminate\Database\Seeder;

class ModuleTableSeeder extends Seeder
{

    public function run()
    {
        \DB::table('modules')->truncate();
        Module::insert([
            [
                'name' => 'crm',
            ],
            [
                'name' => 'inventory'
            ],
            [
                'name' => 'offers'
            ],
            [
                'name' => 'contract'
            ],
            [
                'name' => 'finance'
            ]
        ]);
    }
}
