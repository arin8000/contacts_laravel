<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'country' => $faker->country,
        'job_title' => $faker->jobTitle,
        'city' => $faker->city,
        'created_at' => $faker->date("Y-m-d H:i:s"),
        'updated_at' => $faker->date("Y-m-d H:i:s"),
        'email' => $faker->unique()->safeEmail,
        'address' => $faker->address,
    ];
});
