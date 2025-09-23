<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Author;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private function addBook($id, $bookData)
    {
            $book = new Book();
            $book->name = $bookData['name'];
            $book->category = $bookData['category'];
            $book->price = $bookData['price'];
            $book->publication_date = $bookData['publication_date'];
            $book->edition = $bookData['edition'];
            $book->author_id = $id;
            $book->save();
    }


    public function run(): void
    {
            // Emma Clarke
            $author = Author::where("name", "Emma Clarke")->first();
            $id = $author->id;

            $books = [
                    ['name' => 'The London Fog', 'category' => 'Historical Fiction', 'price' => 19.99, 'publication_date' => '2021-05-10', 'edition' => 1],
                    ['name' => 'Tea and Secrets', 'category' => 'Historical Fiction', 'price' => 18.50, 'publication_date' => '2021-05-10', 'edition' => 2],
                    ['name' => 'Rain Over Thames', 'category' => 'Historical Fiction', 'price' => 20.00, 'publication_date' => '2021-05-10',  'edition' => 1],
                    ['name' => 'Cobbled Streets', 'category' => 'Historical Fiction', 'price' => 17.99, 'publication_date' => '2021-05-10',  'edition' => 3],
                    ['name' => 'Victorian Whispers', 'category' => 'Historical Fiction', 'price' => 21.00, 'publication_date' => '2021-05-10',  'edition' => 2],
            ];
            
            

            foreach($books as $item){
                    $this->addBook($id,$item);
            }
         
            
            // John Miller
            $author = Author::where("name","John Miller")->first();
            $id = $author->id;
            $books = [
                ['name' => 'Digital Frontier', 'category' => 'Science Fiction', 'price' => 22.99, 'publication_date' => '2022-01-20', 'edition' => 1],
                ['name' => 'Neon Skies', 'category' => 'Science Fiction', 'price' => 24.50, 'publication_date' => '2022-01-20', 'edition' => 1],
                ['name' => 'Cyber Dust', 'category' => 'Science Fiction', 'price' => 23.99, 'publication_date' => '2022-01-20', 'edition' => 2],
                ['name' => 'Virtual Lives', 'category' => 'Science Fiction', 'price' => 25.00, 'publication_date' => '2022-01-20', 'edition' => 3],
                ['name' => 'Synthetic Dreams', 'category' => 'Science Fiction', 'price' => 26.50, 'publication_date' => '2022-01-20', 'edition' => 2],
            ];
 
            foreach($books as $item){
                $this->addBook($id,$item);
            }


            // Sofia Martinez
            $author = Author::where("name","Sofia Martinez")->first();
            $id = $author->id;
            $books = [
                ['name' => 'Whispers of Granada', 'category' => 'Romance', 'price' => 16.99, 'publication_date' => '2020-03-14', 'edition' => 1],
                ['name' => 'Letters from Seville', 'category' => 'Romance', 'price' => 17.50, 'publication_date' => '2020-03-14', 'edition' => 1],
                ['name' => 'Flamenco Nights', 'category' => 'Romance', 'price' => 18.00, 'publication_date' => '2020-03-14', 'edition' => 2],
                ['name' => 'Love in Madrid', 'category' => 'Romance', 'price' => 19.99, 'publication_date' => '2020-03-14', 'edition' => 3],
                ['name' => 'Orange Blossoms', 'category' => 'Romance', 'price' => 20.50, 'publication_date' => '2020-03-14', 'edition' => 2],
            ];         
            
            foreach($books as $item){
                $this->addBook($id,$item);
            }

            // Liam O'Connor
            $author = Author::where("name","Liam O'Connor")->first();
            $id = $author->id;
            $books = [
                ['name' => 'Emerald Rebellion', 'category' => 'Fantasy', 'price' => 22.00, 'publication_date' => '2019-11-30', 'edition' => 1],
                ['name' => 'The Celtic Spell', 'category' => 'Fantasy', 'price' => 23.99, 'publication_date' => '2019-11-30', 'edition' => 2],
                ['name' => 'Forest of Myths', 'category' => 'Fantasy', 'price' => 24.50, 'publication_date' => '2019-11-30', 'edition' => 2],
                ['name' => 'Gaelic Blades', 'category' => 'Fantasy', 'price' => 25.00, 'publication_date' => '2019-11-30', 'edition' => 3],
                ['name' => 'Runes of Power', 'category' => 'Fantasy', 'price' => 26.25, 'publication_date' => '2019-11-30', 'edition' => 1],
            ];
            
            foreach($books as $item){
                $this->addBook($id,$item);
            }

            // Haruki Tanaka
            $author = Author::where("name","Haruki Tanaka")->first();
            $id = $author->id;
            $books = [
                ['name' => 'Tokyo Dusk', 'category' => 'Mystery', 'price' => 19.99, 'publication_date' => '2023-04-12', 'edition' => 1],
                ['name' => 'Kyoto Murmurs', 'category' => 'Mystery', 'price' => 18.75, 'publication_date' => '2023-04-12', 'edition' => 1],
                ['name' => 'Shadows in Shibuya', 'category' => 'Mystery', 'price' => 20.50, 'publication_date' => '2023-04-12', 'edition' => 2],
                ['name' => 'Crimson Koi', 'category' => 'Mystery', 'price' => 21.00, 'publication_date' => '2023-04-12', 'edition' => 3],
                ['name' => 'Lotus Trap', 'category' => 'Mystery', 'price' => 22.00, 'publication_date' => '2023-04-12', 'edition' => 2],
            ];
        
            foreach($books as $item){
                $this->addBook($id,$item);
            }


            // Isabella Rossi
            $author = Author::where("name","Isabella Rossi")->first();
            $id = $author->id;
            $books = [
                ['name' => 'Venetian Shadows', 'category' => 'Thriller', 'price' => 21.50, 'publication_date' => '2021-10-01', 'edition' => 1],
                ['name' => 'Roman Blood', 'category' => 'Thriller', 'price' => 22.00, 'publication_date' => '2021-10-01', 'edition' => 1],
                ['name' => 'Florentine Night', 'category' => 'Thriller', 'price' => 22.75, 'publication_date' => '2021-10-01', 'edition' => 2],
                ['name' => 'Vatican Files', 'category' => 'Thriller', 'price' => 23.00, 'publication_date' => '2021-10-01', 'edition' => 2],
                ['name' => 'Milan Chase', 'category' => 'Thriller', 'price' => 23.50, 'publication_date' => '2021-10-01', 'edition' => 3],
            ];

            foreach($books as $item){
                $this->addBook($id,$item);
            }

            // Noah Dubois
            $author = Author::where("name","Noah Dubois")->first();
            $id = $author->id;
            $books = [
                ['name' => 'Château Noir', 'category' => 'Gothic', 'price' => 19.50, 'publication_date' => '2020-06-06', 'edition' => 1],
                ['name' => 'Moonlit Versailles', 'category' => 'Gothic', 'price' => 20.00, 'publication_date' => '2020-06-06', 'edition' => 1],
                ['name' => 'Louvre Ghosts', 'category' => 'Gothic', 'price' => 20.50, 'publication_date' => '2020-06-06', 'edition' => 2],
                ['name' => 'Phantom of Lyon', 'category' => 'Gothic', 'price' => 21.00, 'publication_date' => '2020-06-06', 'edition' => 2],
                ['name' => 'Shadows of Bordeaux', 'category' => 'Gothic', 'price' => 21.50, 'publication_date' => '2020-06-06', 'edition' => 3],
            ];
            
            foreach($books as $item){
                $this->addBook($id,$item);
            }


            // Chen Wei
            $author = Author::where("name","Chen Wei")->first();
            $id = $author->id;
            $books = [
                ['name' => 'Silken Tales', 'category' => 'Drama', 'price' => 18.50, 'publication_date' => '2021-08-08', 'edition' => 1],
                ['name' => 'Jade Dreams', 'category' => 'Drama', 'price' => 19.00, 'publication_date' => '2021-08-08', 'edition' => 1],
                ['name' => 'Red Lanterns', 'category' => 'Drama', 'price' => 20.00, 'publication_date' => '2021-08-08', 'edition' => 2],
                ['name' => 'Beijing Echoes', 'category' => 'Drama', 'price' => 20.50, 'publication_date' => '2021-08-08', 'edition' => 2],
                ['name' => 'Golden Cranes', 'category' => 'Drama', 'price' => 21.00, 'publication_date' => '2021-08-08', 'edition' => 3],
            ];
            
            foreach($books as $item){
                $this->addBook($id,$item);
            }

            // Carlos Mendoza
            $author = Author::where("name","Carlos Mendoza")->first();
            $id = $author->id;
            $books = [
                ['name' => 'Aztec Prophecy', 'category' => 'Adventure', 'price' => 24.00, 'publication_date' => '2022-07-07', 'edition' => 1],
                ['name' => 'Jungle Riddle', 'category' => 'Adventure', 'price' => 24.50, 'publication_date' => '2022-07-07', 'edition' => 1],
                ['name' => 'Temple of Fire', 'category' => 'Adventure', 'price' => 25.00, 'publication_date' => '2022-07-07', 'edition' => 2],
                ['name' => 'Oaxaca Gold', 'category' => 'Adventure', 'price' => 25.50, 'publication_date' => '2022-07-07', 'edition' => 2],
                ['name' => 'Teotihuacan Secrets', 'category' => 'Adventure', 'price' => 26.00, 'publication_date' => '2022-07-07', 'edition' => 3],
            ];
            
            foreach($books as $item){
                $this->addBook($id,$item);
            }

            // Amira Hassan
            $author = Author::where("name","Amira Hassan")->first();
            $id = $author->id;
            $books = [
                ['name' => 'Cairo Pulse', 'category' => 'Contemporary', 'price' => 18.99, 'publication_date' => '2023-09-01', 'edition' => 1],
                ['name' => 'Desert Hearts', 'category' => 'Contemporary', 'price' => 19.50, 'publication_date' => '2023-09-01', 'edition' => 1],
                ['name' => 'Nile Reflections', 'category' => 'Contemporary', 'price' => 20.00, 'publication_date' => '2023-09-01', 'edition' => 2],
                ['name' => 'Alexandria Days', 'category' => 'Contemporary', 'price' => 20.50, 'publication_date' => '2023-09-01', 'edition' => 2],
                ['name' => 'Minaret Silence', 'category' => 'Contemporary', 'price' => 21.00, 'publication_date' => '2023-09-01', 'edition' => 3],
            ];

            foreach($books as $item){
                $this->addBook($id,$item);
            }      
    }
}
