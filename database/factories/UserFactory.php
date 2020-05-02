<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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
        'username' => $faker->userName,
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->state(User::class, 'admin', function (Faker $faker) {
    return [
        'username' => 'admin',
        'name' => 'Influx',
        'email' => 'admin@admin.com',
    ];
});

$factory->afterCreating(User::class, function ($user) {
    $followsAmount = random_int(1, User::all()->count());
    $follows = User::inRandomOrder()->take($followsAmount)->where('id', '<>', $user->id)->get();
    $follows->map(function ($follow) use ($user) {
        return $user->toggleFollow($follow);
    });
});
