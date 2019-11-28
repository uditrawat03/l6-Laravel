<?php

use App\Models\CompanyClass;
use Illuminate\Database\Seeder;

class CompanyClassSeeder extends Seeder
{
    public function run()
    {
        \DB::table('company_classes')->truncate();
        CompanyClass::insert([
            [
                'code' => '00000001',
                'name' => 'D',
                'direct_client' => true,
                'super_agency' => false,
                'specialist' => false,
                'agency' => false
            ],
            [
                'code' => '00000002',
                'name' => 'PS',
                'direct_client' => false,
                'super_agency' => true,
                'specialist' => true,
                'agency' => false
            ],
            [
                'code' => '00000003',
                'name' => 'A',
                'direct_client' => false,
                'super_agency' => false,
                'specialist' => false,
                'agency' => true
            ],
            [
                'code' => '00000004',
                'name' => 'PH',
                'direct_client' => false,
                'super_agency' => false,
                'specialist' => false,
                'agency' => false
            ]
        ]);
    }
}
