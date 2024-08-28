<?php

namespace Database\Seeders;

use App\Models\Products;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::transaction(function () {
            DB::table('products')->insert([
                ['id'=> 1, 'name' => 'Продукт 1', 'price' => 15000, 'count' => 10, 'created_at' => Carbon::now()],
                ['id'=> 2, 'name' => 'Продукт 2', 'price' => 10000, 'count' => 5, 'created_at' => Carbon::now()],
                ['id'=> 3, 'name' => 'Продукт 3', 'price' => 12000, 'count' => 3, 'created_at' => Carbon::now()],
                ['id'=> 4, 'name' => 'Продукт 4', 'price' => 7000, 'count' => 11, 'created_at' => Carbon::now()],
                ['id'=> 5, 'name' => 'Продукт 5', 'price' => 2000, 'count' => 16, 'created_at' => Carbon::now()],
            ]);
            DB::table('properties')->insert([
                ['id'=> 1, 'name' => 'Свойство 1', 'created_at' => Carbon::now()],
                ['id'=> 2, 'name' => 'Свойство 2', 'created_at' => Carbon::now()],
                ['id'=> 3, 'name' => 'Свойство 3', 'created_at' => Carbon::now()],
                ['id'=> 4, 'name' => 'Свойство 4', 'created_at' => Carbon::now()],
                ['id'=> 5, 'name' => 'Свойство 5', 'created_at' => Carbon::now()],
            ]);
            DB::table('products_link_properties')->insert([
                ['product_id' => 1, 'property_id' => 1, 'created_at' => Carbon::now()],
                ['product_id' => 2, 'property_id' => 2, 'created_at' => Carbon::now()],
                ['product_id' => 3, 'property_id' => 3, 'created_at' => Carbon::now()],
                ['product_id' => 4, 'property_id' => 4, 'created_at' => Carbon::now()],
                ['product_id' => 5, 'property_id' => 5, 'created_at' => Carbon::now()],
                ['product_id' => 1, 'property_id' => 2, 'created_at' => Carbon::now()],
                ['product_id' => 1, 'property_id' => 3, 'created_at' => Carbon::now()],
                ['product_id' => 2, 'property_id' => 4, 'created_at' => Carbon::now()],
                ['product_id' => 2, 'property_id' => 5, 'created_at' => Carbon::now()],
                ['product_id' => 3, 'property_id' => 1, 'created_at' => Carbon::now()],
                ['product_id' => 4, 'property_id' => 2, 'created_at' => Carbon::now()],
                ['product_id' => 5, 'property_id' => 3, 'created_at' => Carbon::now()],
                ['product_id' => 5, 'property_id' => 1, 'created_at' => Carbon::now()],
            ]);
        });
    }
}
