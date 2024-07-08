<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\products;
use Faker\Factory as faker;
class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker=Faker::create();
        for ($i=0;$i<30;$i++){
            products::create([
                'name'=>$faker->word,
                'img'=>$faker->imageUrl(640,480),
                'price'=>$faker->numberBetween(1000000,100000000),
                'sale'=>$faker->numberBetween(1000000,100000000),
                'description'=>$faker->text,
                'view'=>$faker->numberBetween(10,10000),
                'sold'=>$faker->numberBetween(50,1000),
                'category_id'=>$faker->numberBetween(1,10),
            ]);
        }
    }
}
