<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        BD::table('users')->insert([
            [
                'name'=>'Jorik',
                'email'=>'jorik@mail.ru',
                'password'=>bcrypt('secret')
            ],
            [
                'name'=>'Abjorik',
                'email'=>'abjorik@mail.ru',
                'password'=>bcrypt('secret')
            ]
        ]);
    }
}
