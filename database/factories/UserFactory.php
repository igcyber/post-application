<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Post;
use App\Comment;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});


$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => App\User::all()->random()->id,
        'title' => $title = $faker->text,
        'slug' => str_slug($title),
        'content' => $faker->paragraph(rand(2,10))
    ];
});

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'post_id' => App\Post::all()->random()->id,
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'website' => $faker->domainName,
        'comment' => $faker->paragraph(rand(2,10))
    ];
});
