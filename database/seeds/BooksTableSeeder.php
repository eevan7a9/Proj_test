<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'name' => 'Harry Potter and the Cursed Child',
            'category_id' => 1,
            'author_id' => 2,
            'shelf_id' => 1,
            'publisher_id' => 1,
            'ISBN' => '9781338099133',
            'book_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'key_word' => 'Magic, Powers, Wand',
            'user_id' => 2,
            'created_at' => '2018-11-25 03:21:24',
            'updated_at' => now(),
        ]);
        DB::table('books_number')->insert([
            'book_id' => 1,
            'books_total_count' => 12,
            'books_available' => 12,
            'created_at' => '2018-11-25 03:21:24',
            'updated_at' => now(),
        ]);

        DB::table('books')->insert([
            'name' => 'Game of Thrones',
            'category_id' => 1,
            'author_id' => 2,
            'shelf_id' => 1,
            'publisher_id' => 3,
            'ISBN' => '0-553-10354-7',
            'book_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'key_word' => 'Swords, kings,',
            'user_id' => 2,
            'created_at' => '2018-11-27 11:31:24',
            'updated_at' => now(),
        ]);
        DB::table('books_number')->insert([
            'book_id' => 2,
            'books_total_count' => 8,
            'books_available' => 8,
            'created_at' => '2018-11-27 11:31:24',
            'updated_at' => now(),
        ]);
        DB::table('books')->insert([
            'name' => 'Lord of The Rings',
            'category_id' => 1,
            'author_id' => 4,
            'shelf_id' => 2,
            'publisher_id' => 3,
            'ISBN' => '1487587',
            'book_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'key_word' => 'Swords, kings,',
            'user_id' => 5,
            'created_at' => '2018-11-23 09:24:14',
            'updated_at' => now(),
        ]);
        DB::table('books_number')->insert([
            'book_id' => 3,
            'books_total_count' => 5,
            'books_available' => 5,
            'created_at' => '2018-11-23 09:24:14',
            'updated_at' => now(),
        ]);
         DB::table('books')->insert([
            'name' => "Harry Potter and the Philosopher's Stone",
            'category_id' => 1,
            'author_id' => 4,
            'shelf_id' => 2,
            'publisher_id' => 3,
            'ISBN' => '0-7475-3269-9',
            'book_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'key_word' => 'Swords, kings,',
            'user_id' => 5,
            'created_at' => '2018-11-23 09:24:14',
            'updated_at' => now(),
        ]);
        DB::table('books_number')->insert([
            'book_id' => 4,
            'books_total_count' => 5,
            'books_available' => 5,
            'created_at' => '2018-11-23 09:24:14',
            'updated_at' => now(),
        ]);
    }
}