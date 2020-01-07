<?php

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanyTableSeeder extends seeder
{

    public function run()
    {
        // \DB::table('companies')->truncate();
        factory(Company::class, 10)->create();
    }
}
