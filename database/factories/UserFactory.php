<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Endereco;
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
        
        //'tipo_usuario' => $faker->randomElement('CLIENTE', 'ESTABELECIMENTO'),
        'telefone' => $faker->phoneNumber,
        //'tipo_usuario' => 'CLIENTE',
        'endereco_id' => function(){return factory(\App\Endereco::class)->create()->id;},
        //'endereco_id' => $faker->numberBetween($min = 1, $max = 10),
    ];
});
