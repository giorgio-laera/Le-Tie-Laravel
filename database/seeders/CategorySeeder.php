<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $categories = [
        'Fritti & Sfizi', 
        'I Nostri Panini', 
        'Specialità Locali', 
        'Salse Artigianali', 
        'Dolci della Casa', 
        'Birre Artigianali', 
        'Bevande'
    ];
     foreach ($categories as $category) {
       $newCategory = new Category();

       $newCategory->name=$category;

       $newCategory->save();
     }
        
    }
}
