<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //empty the database first
        DB::table('users')->delete();

        $users = [

            [
                'name' => 'Adebayo Mustafa',
                'email' => 'adebsalert@gmail.com',
                'password' => bcrypt('secret01'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => 'Mustafa Adebayo',
                'email' => 'mustafa@gmail.com',
                'password' => bcrypt('secret02'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            ];

        DB::table('users')->insert($users);
    }
}
