<?php

namespace Database\Seeders;

use App\Models\category;
use App\Models\post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $categories=category::all();
        $users= User::all();

        for($i=1;$i<=20;$i++){
            post::create([
                'title'=>"post $i",
                "description"=>"this is the post $i",
                "category_id"=> $categories->random()->id,
                "user_id"=> $users->random()->id,
            ]);
        }
    }
}
