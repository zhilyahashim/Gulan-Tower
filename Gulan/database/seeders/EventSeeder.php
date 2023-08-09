<?php

namespace Database\Seeders;

use App\Models\category;
use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
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
            event::create([
                "image"=>"image $i",
                'title'=>"event $i",
                "description"=>"this is the event $i",
                "sratrdate"=>"the start date of $i",
                "location"=>"the location $i",
                "category_id"=> $categories->random()->id,
                "user_id"=> $users->random()->id,
            ]);
        }
    }
}
