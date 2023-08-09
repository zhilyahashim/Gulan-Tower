<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
       $categories=['Laravel','php','HTML','Css','Java','Python'];

       foreach($categories as $category){
            category::create([
                'name'=>$category,
            ]);
       }
    }
}
