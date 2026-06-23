<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Category_Product;
use App\Models\CategoryProduct;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $product = count(Product::all());
        $category = Category::count();

        for ($i=0; $i < 10 ; $i++) { 
            $newCategoryProduct= new Category_Product();

            $newCategoryProduct->category_id=rand(1, $category);
            $newCategoryProduct->product_id=rand(1,$product);

            $newCategoryProduct->save();
        }
    }
}
