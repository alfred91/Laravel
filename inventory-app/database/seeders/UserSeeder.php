<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        //SEED USUARIOS NORMALES EN USERFACTORY
        User::factory()->count(5)->create();


        //INSERCION MANUAL DEL ADMIN CON ROL ADMIN
        DB::table('users')->insert([

            'name' => "administrador",
            'email' => "admin@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'remember_token' => Str::random(10),
            'rol' => "admin"
        ]);
    }
}
