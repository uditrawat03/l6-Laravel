<?php

use App\Models\CompanyImportance;
use App\Models\CompanySource;
use Illuminate\Database\Seeder;

class CompanyImportanceSeeder extends Seeder
{

    public function run()
    {
        \DB::table('company_importances')->truncate();
        CompanyImportance::insert([
            [
                'code' => '00000001',
                'name' => 'Imporance 1'
            ],
            [
                'code' => '00000002',
                'name' => 'Importance 2'
            ]
        ]);
    }
}
