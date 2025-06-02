<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'name' => 'Pose en acrylique',
                'description' => 'Soins des ongles avec application d\'acrylique',
                'duration' => 2,
                'price_long' => 50,
                'price_medium' => 40,
                'price_short' => 30,
            ],
            [
                'name' => 'Pose en polygel',
                'description' => 'Soins des ongles avec application de polygel',
                'duration' => 2,
                'price_long' => 50,
                'price_medium' => 40,
                'price_short' => 30,
            ],
                        [
                'name' => 'Pose americaine',
                'description' => 'Soins des ongles avec application de polygel',
                'duration' => 1,
                'price_long' => 40,
                'price_medium' => 35,
                'price_short' => 25,
            ],
            [
                'name' => 'Nail Art personnalisé - Extra',
                'description' => 'Décorations personnalisées complexes sur les ongles',
                'duration' => 30,
                'price_long' => 15,
                'price_medium' => null,
                'price_short' => null,
            ],
            [
                'name' => 'Nail Art personnalisé - Simple',
                'description' => 'Décorations simples sur les ongles',
                'duration' => 30,
                'price_long' => 5,
                'price_medium' => null,
                'price_short' => null,
            ],
            [
                'name' => 'Gel Polish - Complet',
                'description' => 'Application de gel polish complet',
                'duration' => 45,
                'price_long' => 20,
                'price_medium' => null,
                'price_short' => null,
            ],
            [
                'name' => 'Gel Polish - Nature',
                'description' => 'Application naturelle de gel polish',
                'duration' => 45,
                'price_long' => 25,
                'price_medium' => null,
                'price_short' => null,
            ],
            [
                'name' => 'Dépose',
                'description' => 'Retrait complet du service',
                'duration' => 30,
                'price_long' => 10,
                'price_medium' => null,
                'price_short' => null,
            ],
            [
                'name' => 'Remplissage',
                'description' => 'Remplissage des ongles',
                'duration' => 90,
                'price_long' => 30,
                'price_medium' => null,
                'price_short' => null,
            ],
        ]);
    }
}
