<?php

$factory->define(App\User::class, function ($faker) {
    return [
        'first_name' => $faker->firstname,
        'last_name' => $faker->lastname,
        'email' => $faker->email,
        'role' => 'user',
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Camp::class, function ($faker) {
    return [
        'name' => $faker->name,
        'street' => $faker->street,
        'zip' => $faker->postcode,
        'city' => $faker->city,
        'contact' => $faker->name,
        'phone' => $faker->phoneNumber,
        'contact_email' => $faker->email,
    ];
});
