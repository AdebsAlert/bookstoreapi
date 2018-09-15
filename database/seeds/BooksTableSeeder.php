<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //empty the database first
        DB::table('books')->delete();

        $books = [

            [
                'user_id' => 1,
                'title' => 'Laravel 5.7 For Dummies',
                'description' => 'This is the right book for you if you want to get started with using the Laravel framework',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'user_id' => 1,
                'title' => 'Laravel vs Node.js',
                'description' => 'This is an ebook comparing the difference and similarities between Laravel and Node.js',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

        ];

        DB::table('books')->insert($books);
    }
}
