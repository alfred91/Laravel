<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(5)->create();


        DB::table('users')->insert([

            'name' => "administrador",
            'email' => "admin@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'remember_token' => Str::random(10),
            'ciudad' => "Cuevas",
            'nick' => "admin",
            'juegoPreferido' => "Baldurs Gate 3",
            'rol' => "admin"
        ]);
    }
}
