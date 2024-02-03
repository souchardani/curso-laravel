<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //*****si queremos usar un factory sería */
        Product::factory()->count(150)->create();




        // Product::create([
        //     "name"=>"example",
        //     "short_description"=> "lorem ipsum",
        //     "description"=>"lorem ipsum dolor set aimet.",
        //     "price"=>25,
        // ]);
        // Product::create([
        //     "name"=>"example 2",
        //     "short_description"=> "lorem ipsum",
        //     "description"=>"lorem ipsum dolor set aimet.",
        //     "price"=>42,
        // ]);
        // Product::create([
        //     "name"=>"example 3",
        //     "short_description"=> "lorem ipsum",
        //     "description"=>"lorem ipsum dolor set aimet.",
        //     "price"=>60,
        // ]);
    }
}
