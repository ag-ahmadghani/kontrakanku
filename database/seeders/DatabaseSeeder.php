<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory2()->create();
        // User::factory(10)->create();
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'jenis_kelamin' => 'L',
                'password' => Hash::make('admin'),
                'role' => 'admin'
            ],
            [
                'name' => 'Ahmad Ghani',
                'email' => 'ghanioke@gmail.com',
                'jenis_kelamin' => 'L',
                'password' => Hash::make('ghani3007'),
                'role' => 'user'
            ]
        ]);

        DB::table('kontrakans')->insert([
            [
                'nama_kontrakan' => 'Kontrakan 1',
                'alamat' => 'Jl. Bantargebang',
                'deskripsi' => 'Kontrakan ini memiliki 2 pintu, satu kamar mandi, dan sudah ada kasur dan lemari, dengan listrik berbentuk token',
                'harga' => 1000000,
                'user_id' => 1,
                'foto1' => null,
                'foto2' => null,
                'foto3' => null
            ],
            [
                'nama_kontrakan' => 'Kontrakan 2',
                'alamat' => 'Jl. Nusa Kambangan',
                'deskripsi' => 'Kontrakan ini memiliki 2 pintu, satu kamar mandi, dan sudah ada kasur dan lemari, dengan listrik berbentuk token',
                'harga' => 1000000,
                'user_id' => 1,
                'foto1' => null,
                'foto2' => null,
                'foto3' => null
            ]
        ]);
    }
}
