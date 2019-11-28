<?php

use App\Models\Company;
use Faker\Generator as Faker;


$factory->define(Company::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        // 'uuid' => (string) Str::uuid(),
        'code' => $faker->unique()->numberBetween(1, 20)
    ];
});
