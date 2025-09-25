<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['id' => 1, 'name' => 'Historical Fiction'],
            ['id' => 2, 'name' => 'Science Fiction'],
            ['id' => 3, 'name' => 'Romance'],
            ['id' => 4, 'name' => 'Fantasy'],
            ['id' => 5, 'name' => 'Mystery'],
            ['id' => 6, 'name' => 'Thriller'],
            ['id' => 7, 'name' => 'Gothic'],
            ['id' => 8, 'name' => 'Drama'],
            ['id' => 9, 'name' => 'Adventure'],
            ['id' => 10, 'name' => 'Contemporary'],
        ]);
    }
}
