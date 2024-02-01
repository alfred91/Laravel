<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Llama a los seeders específicos en el orden que desees ejecutarlos

        $this->call([
            UserSeeder::class,
            JuegoSeeder::class,
            TorneoSeeder::class,
            TorneoUserSeeder::class,
        ]);

        // También puedes llamar a cada seeder individualmente si prefieres
        // $this->call(UserSeeder::class);
        // $this->call(JuegoSeeder::class);
        // $this->call(TorneoSeeder::class);
        // $this->call(TorneoUserSeeder::class);
    }
}
