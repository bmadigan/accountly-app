<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\MessageCategory;
use Faker\Generator as Faker;

$factory->define(MessageCategory::class, function (Faker $faker) {
    return [
        'team_id' => 1,
        'category_name' => $faker->sentence()
    ];
});
