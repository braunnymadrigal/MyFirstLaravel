<?php

namespace Database\Seeders;

use App\Models\Countries;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tempCoutries = [
            ['name' => 'Costa Rica', 'continent' => 'América', 'status' => 'active'],
            ['name' => 'Nicaragua', 'continent' => 'América', 'status' => 'active'],
            ['name' => 'Colombia', 'continent'=> 'América', 'status' => 'active'],
            ['name' => 'Francia', 'continent' => 'Europa', 'status' => 'active'],
            ['name' => 'Alemania', 'continent' => 'Europa', 'status' => 'active'],
            ['name' => 'Marruecos', 'continent' => 'África', 'status' => 'deleted'],
            ['name' => 'Tanzania', 'continent' => 'África', 'status' => 'deleted'],
            ['name' => 'Nigeria', 'continent' => 'África', 'status' => 'deleted'],
        ];


        // LOOK: i'm now using the model to run the seeder, it's prettier this way.
        Countries::insert($tempCoutries);
    }
}
