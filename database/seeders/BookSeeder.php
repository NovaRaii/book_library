<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('book')->insert([
            // Emma Clarke
            ['id' => 1, 'name' => 'The London Fog', 'category' => 'Historical Fiction', 'price' => 19.99, 'publication_date' => '2021-05-10', 'author_id' => 1, 'edition' => 1],
            ['id' => 2, 'name' => 'Tea and Secrets', 'category' => 'Historical Fiction', 'price' => 18.50, 'publication_date' => '2021-05-10', 'author_id' => 1, 'edition' => 2],
            ['id' => 3, 'name' => 'Rain Over Thames', 'category' => 'Historical Fiction', 'price' => 20.00, 'publication_date' => '2021-05-10', 'author_id' => 1, 'edition' => 1],
            ['id' => 4, 'name' => 'Cobbled Streets', 'category' => 'Historical Fiction', 'price' => 17.99, 'publication_date' => '2021-05-10', 'author_id' => 1, 'edition' => 3],
            ['id' => 5, 'name' => 'Victorian Whispers', 'category' => 'Historical Fiction', 'price' => 21.00, 'publication_date' => '2021-05-10', 'author_id' => 1, 'edition' => 2],
 
            // John Miller
            ['id' => 6, 'name' => 'Digital Frontier', 'category' => 'Science Fiction', 'price' => 22.99, 'publication_date' => '2022-01-20', 'author_id' => 2, 'edition' => 1],
            ['id' => 7, 'name' => 'Neon Skies', 'category' => 'Science Fiction', 'price' => 24.50, 'publication_date' => '2022-01-20', 'author_id' => 2, 'edition' => 1],
            ['id' => 8, 'name' => 'Cyber Dust', 'category' => 'Science Fiction', 'price' => 23.99, 'publication_date' => '2022-01-20', 'author_id' => 2, 'edition' => 2],
            ['id' => 9, 'name' => 'Virtual Lives', 'category' => 'Science Fiction', 'price' => 25.00, 'publication_date' => '2022-01-20', 'author_id' => 2, 'edition' => 3],
            ['id' => 10, 'name' => 'Synthetic Dreams', 'category' => 'Science Fiction', 'price' => 26.50, 'publication_date' => '2022-01-20', 'author_id' => 2, 'edition' => 2],
 
            // Sofia Martinez
            ['id' => 11, 'name' => 'Whispers of Granada', 'category' => 'Romance', 'price' => 16.99, 'publication_date' => '2020-03-14', 'author_id' => 3, 'edition' => 1],
            ['id' => 12, 'name' => 'Letters from Seville', 'category' => 'Romance', 'price' => 17.50, 'publication_date' => '2020-03-14', 'author_id' => 3, 'edition' => 1],
            ['id' => 13, 'name' => 'Flamenco Nights', 'category' => 'Romance', 'price' => 18.00, 'publication_date' => '2020-03-14', 'author_id' => 3, 'edition' => 2],
            ['id' => 14, 'name' => 'Love in Madrid', 'category' => 'Romance', 'price' => 19.99, 'publication_date' => '2020-03-14', 'author_id' => 3, 'edition' => 3],
            ['id' => 15, 'name' => 'Orange Blossoms', 'category' => 'Romance', 'price' => 20.50, 'publication_date' => '2020-03-14', 'author_id' => 3, 'edition' => 2],
 
            // Liam O'Connor
            ['id' => 16, 'name' => 'Emerald Rebellion', 'category' => 'Fantasy', 'price' => 22.00, 'publication_date' => '2019-11-30', 'author_id' => 4, 'edition' => 1],
            ['id' => 17, 'name' => 'The Celtic Spell', 'category' => 'Fantasy', 'price' => 23.99, 'publication_date' => '2019-11-30', 'author_id' => 4, 'edition' => 2],
            ['id' => 18, 'name' => 'Forest of Myths', 'category' => 'Fantasy', 'price' => 24.50, 'publication_date' => '2019-11-30', 'author_id' => 4, 'edition' => 2],
            ['id' => 19, 'name' => 'Gaelic Blades', 'category' => 'Fantasy', 'price' => 25.00, 'publication_date' => '2019-11-30', 'author_id' => 4, 'edition' => 3],
            ['id' => 20, 'name' => 'Runes of Power', 'category' => 'Fantasy', 'price' => 26.25, 'publication_date' => '2019-11-30', 'author_id' => 4, 'edition' => 1],
 
            // Haruki Tanaka
            ['id' => 21, 'name' => 'Tokyo Dusk', 'category' => 'Mystery', 'price' => 19.99, 'publication_date' => '2023-04-12', 'author_id' => 5, 'edition' => 1],
            ['id' => 22, 'name' => 'Kyoto Murmurs', 'category' => 'Mystery', 'price' => 18.75, 'publication_date' => '2023-04-12', 'author_id' => 5, 'edition' => 1],
            ['id' => 23, 'name' => 'Shadows in Shibuya', 'category' => 'Mystery', 'price' => 20.50, 'publication_date' => '2023-04-12', 'author_id' => 5, 'edition' => 2],
            ['id' => 24, 'name' => 'Crimson Koi', 'category' => 'Mystery', 'price' => 21.00, 'publication_date' => '2023-04-12', 'author_id' => 5, 'edition' => 3],
            ['id' => 25, 'name' => 'Lotus Trap', 'category' => 'Mystery', 'price' => 22.00, 'publication_date' => '2023-04-12', 'author_id' => 5, 'edition' => 2],
 
            // Isabella Rossi
            ['id' => 26, 'name' => 'Venetian Shadows', 'category' => 'Thriller', 'price' => 21.50, 'publication_date' => '2021-10-01', 'author_id' => 6, 'edition' => 1],
            ['id' => 27, 'name' => 'Roman Blood', 'category' => 'Thriller', 'price' => 22.00, 'publication_date' => '2021-10-01', 'author_id' => 6, 'edition' => 1],
            ['id' => 28, 'name' => 'Florentine Night', 'category' => 'Thriller', 'price' => 22.75, 'publication_date' => '2021-10-01', 'author_id' => 6, 'edition' => 2],
            ['id' => 29, 'name' => 'Vatican Files', 'category' => 'Thriller', 'price' => 23.00, 'publication_date' => '2021-10-01', 'author_id' => 6, 'edition' => 2],
            ['id' => 30, 'name' => 'Milan Chase', 'category' => 'Thriller', 'price' => 23.50, 'publication_date' => '2021-10-01', 'author_id' => 6, 'edition' => 3],
 
            // Noah Dubois
            ['id' => 31, 'name' => 'Château Noir', 'category' => 'Gothic', 'price' => 19.50, 'publication_date' => '2020-06-06', 'author_id' => 7, 'edition' => 1],
            ['id' => 32, 'name' => 'Moonlit Versailles', 'category' => 'Gothic', 'price' => 20.00, 'publication_date' => '2020-06-06', 'author_id' => 7, 'edition' => 1],
            ['id' => 33, 'name' => 'Louvre Ghosts', 'category' => 'Gothic', 'price' => 20.50, 'publication_date' => '2020-06-06', 'author_id' => 7, 'edition' => 2],
            ['id' => 34, 'name' => 'Phantom of Lyon', 'category' => 'Gothic', 'price' => 21.00, 'publication_date' => '2020-06-06', 'author_id' => 7, 'edition' => 2],
            ['id' => 35, 'name' => 'Shadows of Bordeaux', 'category' => 'Gothic', 'price' => 21.50, 'publication_date' => '2020-06-06', 'author_id' => 7, 'edition' => 3],
 
            // Chen Wei
            ['id' => 36, 'name' => 'Silken Tales', 'category' => 'Drama', 'price' => 18.50, 'publication_date' => '2021-08-08', 'author_id' => 8, 'edition' => 1],
            ['id' => 37, 'name' => 'Jade Dreams', 'category' => 'Drama', 'price' => 19.00, 'publication_date' => '2021-08-08', 'author_id' => 8, 'edition' => 1],
            ['id' => 38, 'name' => 'Red Lanterns', 'category' => 'Drama', 'price' => 20.00, 'publication_date' => '2021-08-08', 'author_id' => 8, 'edition' => 2],
            ['id' => 39, 'name' => 'Beijing Echoes', 'category' => 'Drama', 'price' => 20.50, 'publication_date' => '2021-08-08', 'author_id' => 8, 'edition' => 2],
            ['id' => 40, 'name' => 'Golden Cranes', 'category' => 'Drama', 'price' => 21.00, 'publication_date' => '2021-08-08', 'author_id' => 8, 'edition' => 3],
 
            // Carlos Mendoza
            ['id' => 41, 'name' => 'Aztec Prophecy', 'category' => 'Adventure', 'price' => 24.00, 'publication_date' => '2022-07-07', 'author_id' => 9, 'edition' => 1],
            ['id' => 42, 'name' => 'Jungle Riddle', 'category' => 'Adventure', 'price' => 24.50, 'publication_date' => '2022-07-07', 'author_id' => 9, 'edition' => 1],
            ['id' => 43, 'name' => 'Temple of Fire', 'category' => 'Adventure', 'price' => 25.00, 'publication_date' => '2022-07-07', 'author_id' => 9, 'edition' => 2],
            ['id' => 44, 'name' => 'Oaxaca Gold', 'category' => 'Adventure', 'price' => 25.50, 'publication_date' => '2022-07-07', 'author_id' => 9, 'edition' => 2],
            ['id' => 45, 'name' => 'Teotihuacan Secrets', 'category' => 'Adventure', 'price' => 26.00, 'publication_date' => '2022-07-07', 'author_id' => 9, 'edition' => 3],
 
            // Amira Hassan
            ['id' => 46, 'name' => 'Cairo Pulse', 'category' => 'Contemporary', 'price' => 18.99, 'publication_date' => '2023-09-01', 'author_id' => 10, 'edition' => 1],
            ['id' => 47, 'name' => 'Desert Hearts', 'category' => 'Contemporary', 'price' => 19.50, 'publication_date' => '2023-09-01', 'author_id' => 10, 'edition' => 1],
            ['id' => 48, 'name' => 'Nile Reflections', 'category' => 'Contemporary', 'price' => 20.00, 'publication_date' => '2023-09-01', 'author_id' => 10, 'edition' => 2],
            ['id' => 49, 'name' => 'Alexandria Days', 'category' => 'Contemporary', 'price' => 20.50, 'publication_date' => '2023-09-01', 'author_id' => 10, 'edition' => 2],
            ['id' => 50, 'name' => 'Minaret Silence', 'category' => 'Contemporary', 'price' => 21.00, 'publication_date' => '2023-09-01', 'author_id' => 10, 'edition' => 3],
        ]);
    }
}
