<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends seeder
{

    public function run()
    {
        \DB::table('users')->truncate();
        factory(User::class, 10)->create();
    }
}
