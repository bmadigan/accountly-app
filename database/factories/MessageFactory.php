<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Message;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
    return [
        'created_by' => 1,
        'team_id' => 1,
        'title' => $faker->sentence(),
        'body' => $faker->paragraph(),
        'last_updated' => $faker->dateTimeBetween('-5 days', '-1 day'),
    ];
});
