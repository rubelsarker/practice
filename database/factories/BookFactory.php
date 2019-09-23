<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'shop_name' => $faker->company,
        'shop_email' => $faker->companyEmail,
        'shop_phone' => $faker->phoneNumber,
        'shop_address' => $faker->address,
        'price' => $faker->numberBetween($min = 1000, $max = 9000),
        'publish' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'image' => $faker->imageUrl($width = 640, $height = 480)

    ];
});
