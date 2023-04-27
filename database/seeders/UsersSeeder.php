<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //cria um usuario
        User::create([
            'firstname' => 'Rafael',
            'lastname' => 'Policher',
            'email' => 'rapolicher#gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
