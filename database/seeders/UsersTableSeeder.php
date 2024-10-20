<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker; // Tambahkan ini jika ingin menggunakan Faker

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // // Jika ingin menggunakan Faker untuk membuat data
        // $faker = Faker::create();

        // // Contoh menambah beberapa user
        // for ($i = 0; $i < 10; $i++) {
        //     DB::table('users')->insert([
        //         'name' => $faker->name,
        //         'email' => $faker->unique()->safeEmail,
        //         'password' => Hash::make('password'), // Ganti dengan password yang di-hash
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]);
        // }

        //tambahkan user manual
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => hash::make('1221'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}