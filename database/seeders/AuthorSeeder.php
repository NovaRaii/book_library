<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $authors = [
            ['name' => 'Emma Clarke', 'age' => 42, 'gender' => 'female', 'nationality' => 'British'],
            ['name' => 'John Miller', 'age' => 55, 'gender' => 'male', 'nationality' => 'American'],
            ['name' => 'Sofia Martinez', 'age' => 38, 'gender' => 'female', 'nationality' => 'Spanish'],
            ['name' => 'Liam O\'Connor', 'age' => 47, 'gender' => 'male', 'nationality' => 'Irish'],
            ['name' => 'Haruki Tanaka', 'age' => 61, 'gender' => 'male', 'nationality' => 'Japanese'],
            ['name' => 'Isabella Rossi', 'age' => 35, 'gender' => 'female', 'nationality' => 'Italian'],
            ['name' => 'Noah Dubois', 'age' => 50, 'gender' => 'male', 'nationality' => 'French'],
            ['name' => 'Chen Wei', 'age' => 45, 'gender' => 'female', 'nationality' => 'Chinese'],
            ['name' => 'Carlos Mendoza', 'age' => 59, 'gender' => 'male', 'nationality' => 'Mexican'],
            ['name' => 'Amira Hassan', 'age' => 40, 'gender' => 'female', 'nationality' => 'Egyptian'],
        ];

        foreach($authors as $item){
            $author = new Author();
            $author->name = $item['name'];
            $author->age = $item['age'];
            $author->gender = $item['gender'];
            $author->nationality = $item['nationality'];
            $author->save();
        }
    }
}
