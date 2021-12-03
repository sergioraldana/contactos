<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'name' => 'Sergio Renato Aldana Alvarez',
            'email' => 'sergio.aldana@galileo.edu',
            'password' => Hash::make('123'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),

        ]);
    }
}
