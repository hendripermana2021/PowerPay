<?php

namespace Database\Seeders;

use App\Models\Tarif;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TarifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tarif = [
            [
                'daya' => 900,
                'tarifperkwh' => 1000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'daya' => 1300,
                'tarifperkwh' => 1000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'daya' => 2200,
                'tarifperkwh' => 1000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'daya' => 3500,
                'tarifperkwh' => 1000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'daya' => 4400,
                'tarifperkwh' => 1000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'daya' => 5500,
                'tarifperkwh' => 1000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'daya' => 6600,
                'tarifperkwh' => 1000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'daya' => 7700,
                'tarifperkwh' => 1000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'daya' => 10600,
                'tarifperkwh' => 1000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'daya' => 11000,
                'tarifperkwh' => 1000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Tarif::insert($tarif);
    
    }
}