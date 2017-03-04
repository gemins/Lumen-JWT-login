<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Manuel',
            'last_name' => 'Bruña',
            'email' => 'manu@manu.cloud',
            'password' => app('hash')->make('12345678'),
            'phone' => '154646464',
        ]);
    }
}
