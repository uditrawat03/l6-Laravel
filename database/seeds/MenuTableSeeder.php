<?php

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('menus')->truncate();
        Menu::insert([
            [
                'name' => 'companies',
                'route' => 'crm\companies',
                'module_id' => 1,
                'order' => 1
            ],
            [
                'name' => 'brands',
                'route' => 'crm\brands',
                'module_id' => 1,
                'order' => 2
            ],
            [
                'name' => 'accounts',
                'route' => 'crm\accounts',
                'module_id' => 1,
                'order' => 3
            ],
            [
                'name' => 'formats',
                'route' => 'inventory\formats',
                'module_id' => 2,
                'order' => 4
            ],
            [
                'name' => 'sites',
                'route' => 'inventory\sites',
                'module_id' => 2,
                'order' => 5
            ],
            [
                'name' => 'furnitures',
                'route' => 'inventory\furnitures',
                'module_id' => 2,
                'order' => 6
            ],
            [
                'name' => 'frames',
                'route' => 'inventory\frames',
                'module_id' => 2,
                'order' => 7
            ]
        ]);
    }
}
