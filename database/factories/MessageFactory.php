<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Message;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
    return [
        'created_by' => 1,
        'team_id' => 1,
        'body' => $faker->sentence()
    ];
});
