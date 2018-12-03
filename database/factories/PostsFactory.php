<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
        $slug = $faker->slug;
        $slugs = str_slug("?", "/", "*", $slug);

    return [
        'title' => $faker->text(20),
        'category_id' => $faker->text(50),
        'content' => $faker->paragraph(50),
        'order' => $faker->text(50),
        'views' => $faker->text(50),
        'status' => $faker->text(50),
        'slug' => $slug,
        'meta' => $faker->text(50),

    ];
});
