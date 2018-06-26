<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
       'name' => 'admin',
       'email' => 'vicomser.claudio@gmail.com',
        //'name' => $faker->name,
        //'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        //'type'=>'admin',
        //'country'=>'arg',
        //'status'=>'activo'
    ];
});

$factory->define(App\Album::class, function (Faker\Generator $faker){
  return [
    'name'=>'Sin Album',
    'description'=>'default',
    'cover_image'=>'default'
  ];
});

$factory->define(App\Category::class,function(Faker\Generator $faker){
  return [
    'description' => $faker->username(),
  ];
});


$factory->define(App\Publication::class,function(Faker\Generator $faker){
  return [
     'category_id'=> $faker->numberBetween($min=1,$max=5),
     'user_id'=> '1',
     'album_id'=> '1',
     'title'=> $faker->text($maxNbChars=50),
     'content'=> $faker->text($maxNbChars=500),
     //'content'=> $faker->randomHtml(2,3),
     //$faker->text($maxNbChars=350),
     'statusNew'=> 'publicado',
  ];
});


$factory->define(App\Picture::class, function(Faker\Generator $faker){
  return [
    'publication_id'=> $faker->numberBetween($min=1,$max=25),
    'name'=>$faker->imageUrl($width = 1140, $height = 500),
    'type'=>$faker->randomElement($array = array ('p','n')),
  ];
});



$factory->define(App\File::class, function(Faker\Generator $faker){
  return [
    'publication_id'=> $faker->numberBetween($min=1,$max=25),
    'name'=>$faker->imageUrl($width = 1140, $height = 500),
    'type'=>$faker->randomElement($array = array ('p','n')),
  ];
});
