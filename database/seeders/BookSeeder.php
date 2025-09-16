<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('books')->insert([
            // Emma Clarke
            ['id'=>1,'name'=>'The London Fog','category'=>'Historical Fiction','price'=>19.99,'publication_date'=>'2021-05-10','author_id'=>1,'edition'=>1,'isbn'=>'978-1-00001-001-1','cover'=>'covers/book1.jpg'],
            ['id'=>2,'name'=>'Tea and Secrets','category'=>'Historical Fiction','price'=>18.50,'publication_date'=>'2021-05-10','author_id'=>1,'edition'=>2,'isbn'=>'978-1-00001-002-8','cover'=>'covers/book2.jpg'],
            ['id'=>3,'name'=>'Rain Over Thames','category'=>'Historical Fiction','price'=>20.00,'publication_date'=>'2021-05-10','author_id'=>1,'edition'=>1,'isbn'=>'978-1-00001-003-5','cover'=>'covers/book3.jpg'],
            ['id'=>4,'name'=>'Cobbled Streets','category'=>'Historical Fiction','price'=>17.99,'publication_date'=>'2021-05-10','author_id'=>1,'edition'=>3,'isbn'=>'978-1-00001-004-2','cover'=>'covers/book4.jpg'],
            ['id'=>5,'name'=>'Victorian Whispers','category'=>'Historical Fiction','price'=>21.00,'publication_date'=>'2021-05-10','author_id'=>1,'edition'=>2,'isbn'=>'978-1-00001-005-9','cover'=>'covers/book5.jpg'],

            // John Miller
            ['id'=>6,'name'=>'Digital Frontier','category'=>'Science Fiction','price'=>22.99,'publication_date'=>'2022-01-20','author_id'=>2,'edition'=>1,'isbn'=>'978-1-00002-001-0','cover'=>'covers/book6.jpg'],
            ['id'=>7,'name'=>'Neon Skies','category'=>'Science Fiction','price'=>24.50,'publication_date'=>'2022-01-20','author_id'=>2,'edition'=>1,'isbn'=>'978-1-00002-002-7','cover'=>'covers/book7.jpg'],
            ['id'=>8,'name'=>'Cyber Dust','category'=>'Science Fiction','price'=>23.99,'publication_date'=>'2022-01-20','author_id'=>2,'edition'=>2,'isbn'=>'978-1-00002-003-4','cover'=>'covers/book8.jpg'],
            ['id'=>9,'name'=>'Virtual Lives','category'=>'Science Fiction','price'=>25.00,'publication_date'=>'2022-01-20','author_id'=>2,'edition'=>3,'isbn'=>'978-1-00002-004-1','cover'=>'covers/book9.jpg'],
            ['id'=>10,'name'=>'Synthetic Dreams','category'=>'Science Fiction','price'=>26.50,'publication_date'=>'2022-01-20','author_id'=>2,'edition'=>2,'isbn'=>'978-1-00002-005-8','cover'=>'covers/book10.jpg'],

            // Sofia Martinez
            ['id'=>11,'name'=>'Whispers of Granada','category'=>'Romance','price'=>16.99,'publication_date'=>'2020-03-14','author_id'=>3,'edition'=>1,'isbn'=>'978-1-00003-001-7','cover'=>'covers/book11.jpg'],
            ['id'=>12,'name'=>'Letters from Seville','category'=>'Romance','price'=>17.50,'publication_date'=>'2020-03-14','author_id'=>3,'edition'=>1,'isbn'=>'978-1-00003-002-4','cover'=>'covers/book12.jpg'],
            ['id'=>13,'name'=>'Flamenco Nights','category'=>'Romance','price'=>18.00,'publication_date'=>'2020-03-14','author_id'=>3,'edition'=>2,'isbn'=>'978-1-00003-003-1','cover'=>'covers/book13.jpg'],
            ['id'=>14,'name'=>'Love in Madrid','category'=>'Romance','price'=>19.99,'publication_date'=>'2020-03-14','author_id'=>3,'edition'=>3,'isbn'=>'978-1-00003-004-8','cover'=>'covers/book14.jpg'],
            ['id'=>15,'name'=>'Orange Blossoms','category'=>'Romance','price'=>20.50,'publication_date'=>'2020-03-14','author_id'=>3,'edition'=>2,'isbn'=>'978-1-00003-005-5','cover'=>'covers/book15.jpg'],

            // Liam O'Connor
            ['id'=>16,'name'=>'Emerald Rebellion','category'=>'Fantasy','price'=>22.00,'publication_date'=>'2019-11-30','author_id'=>4,'edition'=>1,'isbn'=>'978-1-00004-001-4','cover'=>'covers/book16.jpg'],
            ['id'=>17,'name'=>'The Celtic Spell','category'=>'Fantasy','price'=>23.99,'publication_date'=>'2019-11-30','author_id'=>4,'edition'=>2,'isbn'=>'978-1-00004-002-1','cover'=>'covers/book17.jpg'],
            ['id'=>18,'name'=>'Forest of Myths','category'=>'Fantasy','price'=>24.50,'publication_date'=>'2019-11-30','author_id'=>4,'edition'=>2,'isbn'=>'978-1-00004-003-8','cover'=>'covers/book18.jpg'],
            ['id'=>19,'name'=>'Gaelic Blades','category'=>'Fantasy','price'=>25.00,'publication_date'=>'2019-11-30','author_id'=>4,'edition'=>3,'isbn'=>'978-1-00004-004-5','cover'=>'covers/book19.jpg'],
            ['id'=>20,'name'=>'Runes of Power','category'=>'Fantasy','price'=>26.25,'publication_date'=>'2019-11-30','author_id'=>4,'edition'=>1,'isbn'=>'978-1-00004-005-2','cover'=>'covers/book20.jpg'],

            // Haruki Tanaka
            ['id'=>21,'name'=>'Tokyo Dusk','category'=>'Mystery','price'=>19.99,'publication_date'=>'2023-04-12','author_id'=>5,'edition'=>1,'isbn'=>'978-1-00005-001-1','cover'=>'covers/book21.jpg'],
            ['id'=>22,'name'=>'Kyoto Murmurs','category'=>'Mystery','price'=>18.75,'publication_date'=>'2023-04-12','author_id'=>5,'edition'=>1,'isbn'=>'978-1-00005-002-8','cover'=>'covers/book22.jpg'],
            ['id'=>23,'name'=>'Shadows in Shibuya','category'=>'Mystery','price'=>20.50,'publication_date'=>'2023-04-12','author_id'=>5,'edition'=>2,'isbn'=>'978-1-00005-003-5','cover'=>'covers/book23.jpg'],
            ['id'=>24,'name'=>'Crimson Koi','category'=>'Mystery','price'=>21.00,'publication_date'=>'2023-04-12','author_id'=>5,'edition'=>3,'isbn'=>'978-1-00005-004-2','cover'=>'covers/book24.jpg'],
            ['id'=>25,'name'=>'Lotus Trap','category'=>'Mystery','price'=>22.00,'publication_date'=>'2023-04-12','author_id'=>5,'edition'=>2,'isbn'=>'978-1-00005-005-9','cover'=>'covers/book25.jpg'],

            // Isabella Rossi
            ['id'=>26,'name'=>'Venetian Shadows','category'=>'Thriller','price'=>21.50,'publication_date'=>'2021-10-01','author_id'=>6,'edition'=>1,'isbn'=>'978-1-00006-001-6','cover'=>'covers/book26.jpg'],
            ['id'=>27,'name'=>'Roman Blood','category'=>'Thriller','price'=>22.00,'publication_date'=>'2021-10-01','author_id'=>6,'edition'=>1,'isbn'=>'978-1-00006-002-3','cover'=>'covers/book27.jpg'],
            ['id'=>28,'name'=>'Florentine Night','category'=>'Thriller','price'=>22.75,'publication_date'=>'2021-10-01','author_id'=>6,'edition'=>2,'isbn'=>'978-1-00006-003-0','cover'=>'covers/book28.jpg'],
            ['id'=>29,'name'=>'Vatican Files','category'=>'Thriller','price'=>23.00,'publication_date'=>'2021-10-01','author_id'=>6,'edition'=>2,'isbn'=>'978-1-00006-004-7','cover'=>'covers/book29.jpg'],
            ['id'=>30,'name'=>'Milan Chase','category'=>'Thriller','price'=>23.50,'publication_date'=>'2021-10-01','author_id'=>6,'edition'=>3,'isbn'=>'978-1-00006-005-4','cover'=>'covers/book30.jpg'],

            // Noah Dubois
            ['id'=>31,'name'=>'Château Noir','category'=>'Gothic','price'=>19.50,'publication_date'=>'2020-06-06','author_id'=>7,'edition'=>1,'isbn'=>'978-1-00007-001-3','cover'=>'covers/book31.jpg'],
            ['id'=>32,'name'=>'Moonlit Versailles','category'=>'Gothic','price'=>20.00,'publication_date'=>'2020-06-06','author_id'=>7,'edition'=>1,'isbn'=>'978-1-00007-002-0','cover'=>'covers/book32.jpg'],
            ['id'=>33,'name'=>'Louvre Ghosts','category'=>'Gothic','price'=>20.50,'publication_date'=>'2020-06-06','author_id'=>7,'edition'=>2,'isbn'=>'978-1-00007-003-7','cover'=>'covers/book33.jpg'],
            ['id'=>34,'name'=>'Phantom of Lyon','category'=>'Gothic','price'=>21.00,'publication_date'=>'2020-06-06','author_id'=>7,'edition'=>2,'isbn'=>'978-1-00007-004-4','cover'=>'covers/book34.jpg'],
            ['id'=>35,'name'=>'Shadows of Bordeaux','category'=>'Gothic','price'=>21.50,'publication_date'=>'2020-06-06','author_id'=>7,'edition'=>3,'isbn'=>'978-1-00007-005-1','cover'=>'covers/book35.jpg'],

            // Chen Wei
            ['id'=>36,'name'=>'Silken Tales','category'=>'Drama','price'=>18.50,'publication_date'=>'2021-08-08','author_id'=>8,'edition'=>1,'isbn'=>'978-1-00008-001-0','cover'=>'covers/book36.jpg'],
            ['id'=>37,'name'=>'Jade Dreams','category'=>'Drama','price'=>19.00,'publication_date'=>'2021-08-08','author_id'=>8,'edition'=>1,'isbn'=>'978-1-00008-002-7','cover'=>'covers/book37.jpg'],
            ['id'=>38,'name'=>'Red Lanterns','category'=>'Drama','price'=>20.00,'publication_date'=>'2021-08-08','author_id'=>8,'edition'=>2,'isbn'=>'978-1-00008-003-4','cover'=>'covers/book38.jpg'],
            ['id'=>39,'name'=>'Beijing Echoes','category'=>'Drama','price'=>20.50,'publication_date'=>'2021-08-08','author_id'=>8,'edition'=>2,'isbn'=>'978-1-00008-004-1','cover'=>'covers/book39.jpg'],
            ['id'=>40,'name'=>'Golden Cranes','category'=>'Drama','price'=>21.00,'publication_date'=>'2021-08-08','author_id'=>8,'edition'=>3,'isbn'=>'978-1-00008-005-8','cover'=>'covers/book40.jpg'],

            // Carlos Mendoza
            ['id'=>41,'name'=>'Aztec Prophecy','category'=>'Adventure','price'=>24.00,'publication_date'=>'2022-07-07','author_id'=>9,'edition'=>1,'isbn'=>'978-1-00009-001-5','cover'=>'covers/book41.jpg'],
            ['id'=>42,'name'=>'Jungle Riddle','category'=>'Adventure','price'=>24.50,'publication_date'=>'2022-07-07','author_id'=>9,'edition'=>1,'isbn'=>'978-1-00009-002-2','cover'=>'covers/book42.jpg'],
            ['id'=>43,'name'=>'Temple of Fire','category'=>'Adventure','price'=>25.00,'publication_date'=>'2022-07-07','author_id'=>9,'edition'=>2,'isbn'=>'978-1-00009-003-9','cover'=>'covers/book43.jpg'],
            ['id'=>44,'name'=>'Oaxaca Gold','category'=>'Adventure','price'=>25.50,'publication_date'=>'2022-07-07','author_id'=>9,'edition'=>2,'isbn'=>'978-1-00009-004-6','cover'=>'covers/book44.jpg'],
            ['id'=>45,'name'=>'Teotihuacan Secrets','category'=>'Adventure','price'=>26.00,'publication_date'=>'2022-07-07','author_id'=>9,'edition'=>3,'isbn'=>'978-1-00009-005-3','cover'=>'covers/book45.jpg'],

            // Amira Hassan
            ['id'=>46,'name'=>'Cairo Pulse','category'=>'Contemporary','price'=>18.99,'publication_date'=>'2023-09-01','author_id'=>10,'edition'=>1,'isbn'=>'978-1-00010-001-2','cover'=>'covers/book46.jpg'],
            ['id'=>47,'name'=>'Desert Hearts','category'=>'Contemporary','price'=>19.50,'publication_date'=>'2023-09-01','author_id'=>10,'edition'=>1,'isbn'=>'978-1-00010-002-9','cover'=>'covers/book47.jpg'],
            ['id'=>48,'name'=>'Nile Reflections','category'=>'Contemporary','price'=>20.00,'publication_date'=>'2023-09-01','author_id'=>10,'edition'=>2,'isbn'=>'978-1-00010-003-6','cover'=>'covers/book48.jpg'],
            ['id'=>49,'name'=>'Alexandria Days','category'=>'Contemporary','price'=>20.50,'publication_date'=>'2023-09-01','author_id'=>10,'edition'=>2,'isbn'=>'978-1-00010-004-3','cover'=>'covers/book49.jpg'],
            ['id'=>50,'name'=>'Minaret Silence','category'=>'Contemporary','price'=>21.00,'publication_date'=>'2023-09-01','author_id'=>10,'edition'=>3,'isbn'=>'978-1-00010-005-0','cover'=>'covers/book50.jpg'],
        ]);
    }
}
