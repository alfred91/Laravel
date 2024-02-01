<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TorneoUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('torneo_user')->insert([
            'torneo_id' => 1,
            'user_id' => 1,
            'nivel' => 3
        ]);

        DB::table('torneo_user')->insert([
            'torneo_id' => 1,
            'user_id' => 2,
            'nivel' => 5
        ]);

        DB::table('torneo_user')->insert([
            'torneo_id' => 3,
            'user_id' => 1,
            'nivel' => 10
        ]);

        DB::table('torneo_user')->insert([
            'torneo_id' => 4,
            'user_id' => 1,
            'nivel' => 3
        ]);
    }
}
