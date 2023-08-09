<?php

namespace Database\Seeders;

use App\Models\userpost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userpostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        userpost::create([
        'name'=>'sarah',
        'email'=>'sarah@gmail.com',
        'password'=>bcrypt('password')
    ]);

    Userpost::create([
        'name'=>'naz',
        'email'=>'naz@gmail.com',
        'password'=>bcrypt('password'),
    ]);

    Userpost::create([
        'name'=>'ali',
        'email'=>'ali@gmail.com',
        'password'=>bcrypt('password'),
    ]);

    Userpost::create([
        'name'=>'ali',
        'email'=>'ali@gmail.com',
        'password'=>bcrypt('password'),
    ]);

    Userpost::create([
        'name'=>'muhammed',
        'email'=>'muhammed@gmail.com',
        'password'=>bcrypt('password'),
    ]);
}

}
