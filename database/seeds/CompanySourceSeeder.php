<?php

use App\Models\CompanySource;
use Illuminate\Database\Seeder;

class CompanySourceSeeder extends Seeder
{

    public function run()
    {
        \DB::table('company_sources')->truncate();
        CompanySource::insert([
            [
                'code' => '00000001',
                'name' => 'RA'
            ],
            [
                'code' => '00000002',
                'name' => 'HPA'
            ],
            [
                'code' => '00000003',
                'name' => 'ERA'
            ],
            [
                'code' => '00000004',
                'name' => 'EHPA'
            ],
            [
                'code' => '00000005',
                'name' => 'EBRP'
            ]
        ]);
    }
}
