<?php
require 'vendor/autoload.php';
require 'create-table.php';

use Faker\Factory;
use Carbon\Carbon;
use Illuminate\Database\Capsule\Manager;

$faker = Factory::create();


//seeding user data
foreach(range(1, 5) as $i) {
  User::insert([
    "name" => 'polo' . $i,
    "email" => "polo-{$i}@gmail.com",
    "password" => password_hash('secret', PASSWORD_BCRYPT),
    "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
    "updated_at" => Carbon::now()->format('Y-m-d H:i:s'),
  ]);
} 


//sedding category 
//
$categories = [
  'Web',
  'Technology',
  'PHP',
  'Mysql',
  'Html',
  'Css',
  'React js',
  'Vue js',
  'Angular js',
  'Jquery'
];
foreach($categories as $category) {
  Category::insert([
    'name' => $category,
    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
  ]);
}


// seeding post data

foreach(range(1, 50) as $i) {
  Post::insert([
    'title' => $faker->sentence,
    'content' => $faker->paragraph(30),
    'user_id' => rand(1, 5),
    'category_id' => rand(1, count($categories)),
    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),

  ]);
}

foreach(range(1, 400) as $i) {
  Comment::insert([
    'name' => $faker->name,
    'email' => $faker->email,
    'post_id' => rand(1, 50),
    'text' => $faker->paragraph(2),
    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
  ]);
}
